<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Questions;
use App\Models\Category;
use App\Models\UserDetail;
use App\Models\Answers;
use DateTime;
use niklasravnsborg\LaravelPdf\LaravelPdf;
use PDF;
use View;
use Ghunti\HighchartsPHP\HighChart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $settings=array();
    public function __construct()
    {
        //$this->middleware('auth');
        $this->settings=DB::select('select * from configuration');
        View::share('settings', $this->settings[0]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //DB::enableQueryLog(); 
        $all_questions=Questions::with(['category'])->where('q_active',1)->get();        
        $all_category=Category::where('cat_active',1)->get();        
        //dd(DB::getQueryLog()); exit;
        return view('welcome',compact('all_questions'));
    }
    function save_data(Request $request) {
        $validator = Validator::make($request->all(), [
            'username'=>'required',
            'father_name'=>'required',
            'dob'=>'required',
            'gender'=>'required',
            'question'=>'required',
        ]);

        if($validator->fails()) {
            $error = $validator->messages()->all();
            echo json_encode($error);
            return;
        }
        $dob=$request->get('dob');
        $dt=DateTime::createFromFormat('d/m/Y',$dob);
        $user_detail=new UserDetail;
        $user_detail->name=$request->get('username');
        $user_detail->guardian_name=$request->get('father_name');
        $user_detail->birth_date=$dt->format('Y-m-d');
        $user_detail->gender=$request->get('gender');
        $user_detail->contact_no=$request->get('contact_no');
        $user_detail->email_id=$request->get('email_address');
        $user_detail->address=$request->get('address');
        $user_detail->report_name='report.pdf';
        $user_detail->save();
        $filename='report_'.$user_detail->id.'.pdf';        
        $questions=$request->get('question');
        $q=array();
            foreach($questions as $ques_id=>$answers)
            {                
                $q[]=array('question_id'=>$ques_id,'user_id'=>$user_detail->id,'answer_text'=>$answers);
            }
        $user_detail->getAnswers()->createMany($q);
        $user_detail=UserDetail::find($user_detail->id);
        $user_detail->report_name=$filename;
        $user_detail->save();
        //DB::enableQueryLog(); 
        $answers=Answers::with(['questions'])->where('user_id',$user_detail->id)->get();
        $pdf = PDF::loadView('chart', [ 'user_detail'=>$user_detail,'answers'=>$answers,'settings'=>$this->settings[0]]);        
        $pdf->save(public_path('reports/'.$filename));
        $request->session()->flash('success','Your response is saved successfully');
        $request->session()->put('user_id',$user_detail->id);
        echo json_encode(array('success'=>'Your response is saved successfully','redirect'=>url('/success')));
        return;
    }
    function insert_questions() {
        $questions=array(array('radio_btn_name'=>'Red_color_btn','title'=>'Red Color Questions','questions'=>array('I work best with Red Color composition','I enjoy Red using pen and sketch','I keep a things to do with red', 'I enjoy playing with red puzzles.', 'I like to ask ‘why’ questions on red composition', 'I work best when I have red and white composition', 'I quickly grasp cause and effects of red color composition', 'I like to think through red and other color consequences', 'I find managing my color composition with red best', 'I always do things with red, White and Black')),array('radio_btn_name'=>'Purple_color_btn','title'=>'Purple Color Questions','questions'=>array('I like to do with Purple color composition','I enjoy participating Purple color composition seminar', 'I am curious on Purple color composition theory', 'I am well co-ordinated with Purple color composition and Red theory', 'I enjoy and am good at Purple color composition thoery', 'I prefer to design Purple color composition rather than software cell', 'I understand best by doing with Purple color composition', 'I never use instructions for Purple color composition', 'To learn something new with red, pink and Purple color composition', 'I find it easiest to solve problems with Purple color composition')),array('radio_btn_name'=>'Maroon_color_btn','title'=>'Maroon Color Questions','questions'=>array('I can use lots of Maroon colors to express in design and art', 'I feel comfortable working with Maroon colors', 'I enjoy Maroon and other color like Green, Black and White', 'I tend to remember things exactly Maroons when I imagine', 'I enjoy participating with Maroon color composition', 'I find it easy to express things to others with maroon color composition', 'I enjoy keeping maroon color story board and script', 'I find it easy to make up story board with maroon color composition', 'I am a convincing graphic presenter with maroon', 'I like to understand more about maroon color')),array('radio_btn_name'=>'Yellow_color_btn','title'=>'Yellow Color Questions','questions'=>array('I understand colour combinations and what colours work well with Yellow', 'I enjoy solving Yellow color composition', 'I read charts and maps of Yellow color composition', 'I have a good sense Yellow color composition', 'I like to do something with Yellow color composition theory', 'I am observant. I often see things that others miss with Yellow color composition', 'I can anticipate the Yellow color composition practice', 'I find graphs and charts of Yellow color composition easy to understand', 'I am always recognise Yellow color composition value', 'I can picture scenes in my head with Yellow color composition')),array('radio_btn_name'=>'Orange_color_btn','title'=>'Orange Color Questions','questions'=>array('I am happy spending time with Orange color composition', 'I have a few close Orange color composition', 'I have strong opinions about Orange color composition', 'I work best when Orange color composition with white and red', 'I am not easily influenced by other color composition except Orange', 'I am self aware about Orange color composition', 'I set myself own Orange color composition', 'I have a good understanding of how I will express to Orange color composition', 'I often raise questions concerning values of Orange color composition', 'I enjoy working on Orange color composition')),array('radio_btn_name'=>'Pink_color_btn','title'=>'Pink Color Questions','questions'=>array('I can sense the Pink color composition value', 'I work best when Pink color composition value with red and blue', 'I enjoy Pink color composition', 'I can sort out Pink color composition values', 'I prefer Pink color composition with white and red', 'I am a very passionate about Pink color composition', 'I could manipulate Pink color composition with other colors', 'I enjoy learning about Pink color composition theory', 'I find it easy to express with Pink color composition', 'I enjoy sharing my ideas with Pink color composition')),array('radio_btn_name'=>'Green_color_btn','title'=>'Green Color Questions','questions'=>array('Green color composition makes me Calm', 'I notice similarities and differences in Green color composition', 'I feel very strongly about Green color composition', 'I Likes to explore knowledge about Green color composition', 'I Can easily observe and detect changes with Green color composition', 'I enjoy Green color composition theory', 'I engage with Green color visual composition', 'I like painting with Green color composition', 'I enjoy Green color composition with Blue color theory', 'When I leave skecth to do, I wil plant with Green color composition ')),array('radio_btn_name'=>'Blue_color_btn','title'=>'Blue Color Questions','questions'=>array('I often play with Blue color composition', 'My mood changes when I see Blue color composition', 'It is easy for me to follow the Blue color composition', 'I can identify most Blue color composition theory', 'Blue color composition makes me feel happy', 'I can pick the value of Blue color composition', 'I keep Blue color composition with Green and White', 'I can work best with Blue color composition', 'I find it easy to engage with Blue color composition', 'I can remember more with Blue color composition ')));
        foreach($questions as $ques) {
            $category=new Category;
            $question=new Questions;        
            $category->title=$ques['title'];
            $category->btn_name=$ques['radio_btn_name'];
            $category->save();
            $q=array();
            foreach($ques['questions'] as $qu)
            {                
                $q[]=array('category_id'=>$category->category_id,'question_text'=>$qu,'rating_max'=>5);
            }
            //print_r($q); exit;
            $category->getQuestions()->createMany($q);
            /*$question->category_id=$category->category_id;
            $question->save($ques['questions'][0]);*/
            //$category->questions()->attach();
        }
    }    
    function success() {        
        return view('success');
    }
    function get_result(Request $request) {
        if ($request->session()->has('user_id')) {
            $id=$request->session()->get('user_id');
            $user_detail=UserDetail::find($id);
            $answers=Answers::with(['questions'])->where('user_id',$id)->get();
            $pdf = PDF::loadView('chart', [ 'user_detail'=>$user_detail,'answers'=>$answers,'settings'=>$this->settings[0]]);  
            //return $pdf->stream('document.pdf');     
            //return view('chart',[ 'user_detail'=>$user_detail,'answers'=>$answers,'settings'=>$this->settings[0]]);
            $filename='report_'.$user_detail->id;
            $file= public_path(). "/reports/".$filename.'.pdf';
            $headers = array( 'Content-Type: application/pdf', );
            $filename2='Color Test_'.$user_detail->name.'.pdf';
            return Response::download($file, $filename2, $headers);
        } else {
            $request->session()->flash('error','No ID Found. Kindly enter your details to download the report');
            return view('error');
        }
    }
    public function generate_pdf($id=1)
	{
		/*$user_detail=UserDetail::find($id);
        //DB::enableQueryLog(); 
        $answers=Answers::with(['questions'])->where('user_id',$id)->get();
		$pdf = PDF::loadView('result',compact('user_detail','answers'));
		return $pdf->stream('document.pdf');*/
        //return view('chart');
        /*$render = view('chart')->render();
        //return $render;
        $pdf = new Pdf(array(
            'binary' => 'C:/Program Files (x86)/wkhtmltopdf/bin/wkhtmltopdf',
            'ignoreWarnings' => true,
            'commandOptions' => array(
                'useExec' => true,      // Can help on Windows systems
                'procEnv' => array(
                    // Check the output of 'locale -a' on your system to find supported languages
                    'LANG' => 'en_US.utf-8',
                ),
            ),
        ));
        $pdf->addPage($render);
        $pdf->setOptions(['javascript-delay' => 5000]);        
        if(!$pdf->saveAs(public_path('report.pdf'))) {
             echo $pdf->getError();
        } //else
        //return response()->download(public_path('report.pdf'));*/
        $chart="{
            type: 'bar',
            data: {
             labels: [2012, 2013, 2014, 2015, 2016],
             datasets: [{
                label: 'Raisins', data: [12, 6, 5, 18, 12]}, {
                label: 'Bananas', data: [4, 8, 16, 5, 5]
             }]
            }
        }";
        //$render=view('demo', [ 'chart' => urlencode($chart), ]);
        $data = [ 'foo' => 'bar' ];
        $user_detail=UserDetail::find($id);
        //DB::enableQueryLog(); 
        $answers=Answers::with(['questions'])->where('user_id',$id)->get();
        $pdf = PDF::loadView('chart', [ 'chart' => urlencode($chart), 'user_detail'=>$user_detail,'answers'=>$answers]);
        return $pdf->stream('sample.pdf');
       // return view('chart', [ 'user_detail'=>$user_detail,'answers'=>$answers]);
	}
}