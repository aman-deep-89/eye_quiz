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
                    <h3 class="mb-2">Company Name</h3>
                    <p>Address and Contact Detail</p>
                </div>
            </div>
        </div>
        <div class="container-fluid">                     
            <!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        @if ($message = Session::get('error'))
                            <div class="alert alert-success">
                               {{$message}}
                            </div>
                        @endif
                        <a href="{{url('/') }}" class="btn btn-primary">Start Survey</a>
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
    
});
</script>
@endsection