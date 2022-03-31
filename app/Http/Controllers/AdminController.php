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
use Ghunti\HighchartsPHP\HighChart;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index()
    {
        $total_reponses=UserDetail::all()->count();
        $response_month=UserDetail::whereRaw('MONTH(created_at)='.date('m'))->count();
        return view('admin/dashboard',array('total_reponse'=>$total_reponses,'monthly_response'=>$response_month));
    }
    public function view_all() {
        $user_detail=UserDetail::selectRaw('*,DATE_FORMAT(birth_date,"%d-%b-%Y") AS dob,DATE_FORMAT(created_at,"%d-%b-%Y %h:%i %p") AS creation_time')->get();
        return view('admin/view_all',compact('user_detail'));
    }
    function download_report($id,Request $request) {  
        $user_detail=UserDetail::find($id);
        $file= public_path(). "/reports/report_".$id.'.pdf';
        $filename2='Color Test_'.$user_detail->name.'.pdf';
        if(file_exists($file)) {
            $headers = array( 'Content-Type: application/pdf', );
            return Response::download($file, $filename2, $headers);
        } else {
            echo 'File doesn\'t exists';
        }
    }
    function settings(Request $request) {
        if($request->method() == 'POST'){
            DB::update('UPDATE `configuration` SET company_name="'.$request->get('cname').'",email="'.$request->get('email').'",contact_no="'.$request->get('contact_no').'",address="'.$request->get('address').'" WHERE id=:id',['id' => 1]);
            return redirect()->back()->with('success', 'Configuration saved successfully');   
        } else {
            $settings=DB::select('select * from configuration');
            return view('admin/settings',array('settings'=>$settings[0]));
        }
    }
    function delete_user($id) {
        $user_detail=UserDetail::find($id);
        if($user_detail) {
            $user_detail->delete();
            return redirect()->to('admin/view_all') ->with('success', 'User detail deleted successfully.');
        } else return redirect()->to('admin/view_all') ->with('error', 'User detail dnot found.');
    }
}