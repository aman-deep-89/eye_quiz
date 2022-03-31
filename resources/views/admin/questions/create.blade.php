@extends('layouts.admin_layout')

@section('pageStyles')
  <link rel="stylesheet" href="{{ url('admin_assets/bundles/select2/dist/css/select2.min.css') }}">
@endSection
@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
          <form class="needs-validation" action="{{ route('question.store') }}" method="post" novalidate="">
            @csrf
        <div class="card-header">
          <h4>Create New Question</h4>
        </div>
        <div class="card-body">
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if ($message = Session::get('error'))
            <div class="alert alert-danger">
                <p>{{ $message }}</p>
            </div>
        @endif
        @if($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach
        @endif
          <div class="form-group">
            <label>Color Code</label>
            {!! Form::select('category_id', $categories, 0, ['class' => 'form-control select2']) !!}
          </div>          
          <div class="form-group">
            <label>Question</label>
            <input type="text" class="form-control" name="question_text" value="{{ old('question_text') }}" required="">            
          </div> 
          <div class="form-group">
            <div class="control-label">Show <small>(disabling it won't show in questionaire)</div>
            <label class="custom-switch mt-2">
              <input type="checkbox" name="q_active" class="custom-switch-input" checked >
              <span class="custom-switch-description">No</span>
              <span class="custom-switch-indicator"></span>
              <span class="custom-switch-description">Yes</span>
            </label>
          </div>        
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('question.create') }}" class="btn btn-secondary">Back</a>
          </div>
        </div>
        </form>
      </div>           
    </div>    
  </div>
@endSection
@section('pageScripts')
<script src="{{ url('admin_assets/bundles/select2/dist/js/select2.full.min.js') }}"></script>
@endsection