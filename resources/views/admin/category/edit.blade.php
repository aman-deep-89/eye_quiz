@extends('layouts.admin_layout')

@section('pageStyles')
  <link rel="stylesheet" href="{{ url('admin_assets/bundles/datatables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ url('admin_assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ url('admin_assets/bundles/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
@endSection
@section('content')
<div class="row">
    <div class="col-12 col-md-12 col-lg-12">
      <div class="card">
          <form class="needs-validation" action="{{ route('category.update',$category->category_id) }}" method="post" novalidate="">
            @method('PUT')
            @csrf
        <div class="card-header">
          <h4>Create New Category</h4>
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
            <input type="text" class="form-control" name="color_code" value="{{ old('color_code',$category->color_code) }}" required="">            
          </div>
          <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="{{ old('title',$category->title) }}" required="">            
          </div>
          <div class="form-group">
            <label>RGB Code</label>
            <div class="input-group colorpickerinput">
              <input type="text" class="form-control colorpickerinput" name="rgb_code" value="{{ old('rgb_code',$category->rgb_value) }}" required="">               
            </div>           
          </div> 
          <div class="form-group">
            <div class="form-group">
                <div class="control-label">Color Category</div>
                <div class="custom-switches-stacked mt-2">
                  <label class="custom-switch">
                    <input type="radio" name="color_category" value="lf" class="custom-switch-input" <?php if($category->color_category=='lf') echo 'checked'; ?> >
                    <span class="custom-switch-indicator"></span>
                    <span class="custom-switch-description">LF</span>
                  </label>
                  <label class="custom-switch">
                    <input type="radio" name="color_category" value="rf" class="custom-switch-input" <?php if($category->color_category=='rf') echo 'checked'; ?> >
                    <span class="custom-switch-indicator"></span>
                    <span class="custom-switch-description">RF</span>
                  </label>                  
                </div>
              </div>            
          </div>
          <div class="form-group">
            <div class="control-label">Is primary Color</div>
            <label class="custom-switch mt-2">
              <input type="checkbox" name="is_primary_color" class="custom-switch-input"  <?php if($category->is_primary_color==1) echo 'checked'; ?>>
              <span class="custom-switch-description">No</span>
              <span class="custom-switch-indicator"></span>
              <span class="custom-switch-description">Yes</span>
            </label>
          </div>
          <div class="form-group">
            <div class="control-label">Show <small>(disabling it won't show in questionaire)</div>
            <label class="custom-switch mt-2">
              <input type="checkbox" name="cat_active" class="custom-switch-input"  <?php if($category->cat_active==1) echo 'checked'; ?>>
              <span class="custom-switch-description">No</span>
              <span class="custom-switch-indicator"></span>
              <span class="custom-switch-description">Yes</span>
            </label>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
            <a href="{{ route('category.create') }}" class="btn btn-secondary">Back</a>
          </div>
        </div>
        </form>
      </div>           
    </div>    
  </div>
@endSection
@section('pageScripts')
<script type="text/javascript" src="{{url('admin_assets/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
<script type="text/javascript">
  $(function() {
    $(".colorpickerinput").colorpicker({
      format: 'hex',
    });
  });
</script>
@endsection