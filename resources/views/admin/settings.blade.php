@extends('layouts.admin_layout')


@section('pageStyles')
<link rel="stylesheet" href="{{ url('assets/bundles/datatables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
@endSection
@section('content')
<div class="row ">
    <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Settings</h4>
          </div>
          <div class="card-body">
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    {!! \Session::get('success') !!}
                </div>
            @endif
              <form action="{{ url('admin/settings')}}" method="post">
                @method('post')
                @csrf
                <div class="form-group">
                    <label>Company Name</label>
                    <input type="text" class="form-control" name="cname" placeholder="Enter Name" value="{{$settings->company_name}}">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email" value="{{$settings->email}}">
                </div>
                <div class="form-group">
                    <label>Contact No</label>
                    <input type="text" class="form-control" name="contact_no" placeholder="Enter Contact No" value="{{$settings->contact_no}}">
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter Address" value="{{$settings->address}}">
                </div>
                <div class="form-group">
                    <button type="submit" name="btn" class="btn btn-primary">Save</button>
                </div>
            </form>
  </div>  
  </div>  
  </div>  
  </div>  
  </div>  
@endsection
@section('pageScripts')
<script src="{{ url('admin_assets/bundles/datatables/datatables.min.js') }}"></script>
<script src="{{ url('admin_assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('admin_assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ url('admin_assets/js/page/datatables.js') }}"></script>
@endsection