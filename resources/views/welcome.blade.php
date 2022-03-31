@extends('layouts.layout')

@section('pageStyles')
<link rel="stylesheet" href="{{asset('css/font-awesome.min.css') }}" />
<link rel="stylesheet" href="{{asset('css/bars-square.css') }}" />
@endsection
@section('content')
<!-- Main Search -->
<div id="search">
    <button id="close" type="button" class="close btn btn-primary btn-icon btn-icon-mini btn-round">x</button>
    <form>
        <input type="search" value="" placeholder="Search..." />
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>


<section class="content m-auto container">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <img src="{{asset('images/logo.png')}}" />
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <h3 class="mb-2">{{$settings->company_name}}</h3>
                    <p>{{$settings->address}}, {{$settings->contact_no}}<br/>{{$settings->email}}</p>
                </div>
            </div>
        </div>
        <div class="container-fluid">                     
            <!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <?php
                             $questions=array();                                
                                $i=0;
                                    foreach($all_questions as $que){
                                        //print_r($que->category);
                                        if($que->category->cat_active==0) continue;
                                        if(isset($questions[$que['category_id']]) && isset($questions[$que['category_id']]['questions'])) {
                                            $questions[$que['category_id']]['questions'][$que->question_id]=$que->question_text;
                                        }
                                        else {
                                            $questions[$que['category_id']]=array('radio_btn_name'=>$que->category->btn_name,'title'=>$que->category->title,'questions'=>array($que->question_id=>$que->question_text));
                                        }
                                    }
                                ?>
                            <h2><strong>Please enter the following detail</strong></h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="javascript:void(0);">Personal Detail</a></li>
                                        @foreach ($questions as $question)
                                            <li><a href="javascript:void(0);">{{ $question['title'] }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form id="wizard_with_validation" method="POST" action="{{ url('save_data') }}">
                                @csrf
                                <h3>Personal Information</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" placeholder="Enter Name *" name="username" required>
                                    </div>
                                    <div class="form-group form-float">
                                        <input type="text" class="form-control" placeholder="Enter Father name*" name="father_name" id="father_name" required>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="input-group masked-input">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="zmdi zmdi-calendar"></i></span>
                                            </div>
                                            <input type="text" class="form-control dob" required name="dob" id="dob" placeholder="Ex: 30/07/2016">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group form-float">
                                        <label>Gender</label>
                                        <div class="radio inlineblock m-r-20">
                                            <input type="radio" name="gender" id="male" class="with-gap" value="Male">
                                            <label for="male">Male</label>
                                        </div>                                
                                        <div class="radio inlineblock">
                                            <input type="radio" name="gender" id="Female" class="with-gap" value="Female">
                                            <label for="Female">Female</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="input-group masked-input mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="zmdi zmdi-smartphone"></i></span>
                                            </div>
                                            <input type="text" class="form-control mobile-phone-number" name="contact_no" id="contact_no" required placeholder="Ex: +(91) 00000-00000">
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <input type="email" class="form-control" placeholder="Enter Email*" name="email_address" id="email_address" required>
                                    </div>
                                    <div class="form-group form-float">
                                        <textarea class="form-control" placeholder="Enter address*" name="address" id="address" required></textarea>
                                    </div>
                                </fieldset>
                                <?php                               
                                    //$questions=array(array('radio_btn_name'=>'Red_color_btn','title'=>'Red Color Questions','questions'=>array('I work best with Red Color composition','I enjoy Red using pen and sketch','I keep a things to do with red', 'I enjoy playing with red puzzles.', 'I like to ask ‘why’ questions on red composition', 'I work best when I have red and white composition', 'I quickly grasp cause and effects of red color composition', 'I like to think through red and other color consequences', 'I find managing my color composition with red best', 'I always do things with red, White and Black')),array('radio_btn_name'=>'Purple_color_btn','title'=>'Purple Color Questions','questions'=>array('I like to do with Purple color composition','I enjoy participating Purple color composition seminar', 'I am curious on Purple color composition theory', 'I am well co-ordinated with Purple color composition and Red theory', 'I enjoy and am good at Purple color composition thoery', 'I prefer to design Purple color composition rather than software cell', 'I understand best by doing with Purple color composition', 'I never use instructions for Purple color composition', 'To learn something new with red, pink and Purple color composition', 'I find it easiest to solve problems with Purple color composition')),array('radio_btn_name'=>'Maroon_color_btn','title'=>'Maroon Color Questions','questions'=>array('I can use lots of Maroon colors to express in design and art', 'I feel comfortable working with Maroon colors', 'I enjoy Maroon and other color like Green, Black and White', 'I tend to remember things exactly Maroons when I imagine', 'I enjoy participating with Maroon color composition', 'I find it easy to express things to others with maroon color composition', 'I enjoy keeping maroon color story board and script', 'I find it easy to make up story board with maroon color composition', 'I am a convincing graphic presenter with maroon', 'I like to understand more about maroon color')),array('radio_btn_name'=>'Yellow_color_btn','title'=>'Yellow Color Questions','questions'=>array('I understand colour combinations and what colours work well with Yellow', 'I enjoy solving Yellow color composition', 'I read charts and maps of Yellow color composition', 'I have a good sense Yellow color composition', 'I like to do something with Yellow color composition theory', 'I am observant. I often see things that others miss with Yellow color composition', 'I can anticipate the Yellow color composition practice', 'I find graphs and charts of Yellow color composition easy to understand', 'I am always recognise Yellow color composition value', 'I can picture scenes in my head with Yellow color composition')),array('radio_btn_name'=>'Orange_color_btn','title'=>'Orange Color Questions','questions'=>array('I am happy spending time with Orange color composition', 'I have a few close Orange color composition', 'I have strong opinions about Orange color composition', 'I work best when Orange color composition with white and red', 'I am not easily influenced by other color composition except Orange', 'I am self aware about Orange color composition', 'I set myself own Orange color composition', 'I have a good understanding of how I will express to Orange color composition', 'I often raise questions concerning values of Orange color composition', 'I enjoy working on Orange color composition')),array('radio_btn_name'=>'Pink_color_btn','title'=>'Pink Color Questions','questions'=>array('I can sense the Pink color composition value', 'I work best when Pink color composition value with red and blue', 'I enjoy Pink color composition', 'I can sort out Pink color composition values', 'I prefer Pink color composition with white and red', 'I am a very passionate about Pink color composition', 'I could manipulate Pink color composition with other colors', 'I enjoy learning about Pink color composition theory', 'I find it easy to express with Pink color composition', 'I enjoy sharing my ideas with Pink color composition')),array('radio_btn_name'=>'Green_color_btn','title'=>'Green Color Questions','questions'=>array('Green color composition makes me Calm', 'I notice similarities and differences in Green color composition', 'I feel very strongly about Green color composition', 'I Likes to explore knowledge about Green color composition', 'I Can easily observe and detect changes with Green color composition', 'I enjoy Green color composition theory', 'I engage with Green color visual composition', 'I like painting with Green color composition', 'I enjoy Green color composition with Blue color theory', 'When I leave skecth to do, I wil plant with Green color composition ')),array('radio_btn_name'=>'Blue_color_btn','title'=>'Blue Color Questions','questions'=>array('I often play with Blue color composition', 'My mood changes when I see Blue color composition', 'It is easy for me to follow the Blue color composition', 'I can identify most Blue color composition theory', 'Blue color composition makes me feel happy', 'I can pick the value of Blue color composition', 'I keep Blue color composition with Green and White', 'I can work best with Blue color composition', 'I find it easy to engage with Blue color composition', 'I can remember more with Blue color composition ')));
                                    foreach($questions as $question) {
                                ?>
                                <h3><?= $question['title'] ?></h3>
                                    <fieldset class="rating_scale">
                                        <?php foreach($question['questions'] as $key=>$ques) { ?>
                                            <div class="form-group form-float mt-5">
                                                <p><?= $ques ?></p>
                                                <ul class='likert radio inlineblock'>
                                                    <?php for($i=1;$i<6;$i++) { ?>
                                                    <li>                                                        
                                                      <input type="radio" name="question[<?= $key ?>]" id="<?= $question['radio_btn_name'].'_'.$key.'_'.$i ?>" value="<?= $i ?>" class="with-gap">
                                                      <label for="<?= $question['radio_btn_name'].'_'.$key.'_'.$i ?>"><?= $i; ?></label>
                                                    </li>
                                                    <?php } ?>
                                                  </ul>
                                            </div>
                                            <hr/>
                                        <?php } ?>
                                    </fieldset>
                                <?php  } ?>
                                <button id="loader" style="display:none" class="btn btn-info">Saving...</button>
                            </form>
                        </div>
                        <div id="error" class="text-danger"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('pageScripts')
<script src="{{asset('plugins/jquery-inputmask/jquery.inputmask.bundle.js') }}"></script>
<script src="{{asset('js/jquery.barrating.js') }}"></script>
<script type="text/javascript">
$(function() {
    $('.mobile-phone-number').inputmask('99999-99999', { placeholder: '_____-_____' });
    $('.dob').inputmask('dd/mm/yyyy', { placeholder: '__/__/____' });
    $('#rating').barrating('show', {
            theme: 'bars-square',
            showValues: true,
            showSelectedRating: false
    });
});
</script>
@endsection