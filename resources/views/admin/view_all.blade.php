@extends('layouts.admin_layout')


@section('pageStyles')
<link rel="stylesheet" href="{{ url('assets/bundles/datatables/datatables.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css') }}">
@endSection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4>Responses</h4>
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
    <table class="table table-striped" id="table-1">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">DOB</th>
            <th scope="col">Gender</th>
            <th scope="col">Contact Info</th>
            <th scope="col">Created At</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($user_detail as $key=>$user)
          <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->dob}}</td>
            <td>{{$user->gender}}</td>
            <td>{{$user->email_id}}<br/>{{$user->contact_no}}<br/>{{$user->address}}</td>
            <td>{{$user->creation_time}}</td>
            <td>
              <a href="{{url('admin/download_report/'.$user->id)}}" class="btn btn-primary">Download</a>
              <button type="button" class="btn btn-danger btn-sm delete" data-id="{{ $user->id }}" data-toggle="modal" data-route="{{ url('admin/delete_user/'.$user->id) }}" data-target="#deleteDep">Delete</button>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
  </div>  
  </div>  
  </div>  
  </div>  
  </div> 
  <div class="modal fade" id="deleteDep" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="deleteDepartment" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <form action="{{ url('admin/delete_user/'.$user->id) }}" method="post" id="delete_form">
            @method('GET')
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">This action is not reversible.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this user?
                    <input type="hidden" id="user_id" name="user_id">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn bg-white" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </form>
    </div>
</div> 
@endsection
@section('pageScripts')
<script src="{{ url('admin_assets/bundles/datatables/datatables.min.js') }}"></script>
<script src="{{ url('admin_assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('admin_assets/bundles/jquery-ui/jquery-ui.min.js') }}"></script>
<script src="{{ url('admin_assets/js/page/datatables.js') }}"></script>
<script tyle="text/javascript">
  $('#deleteDep').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget);
      var user_id = button.data('id'); 
      var action = button.data('route');
      var modal = $(this);
      $('#delete_form').attr("action",action);            
      modal.find('.modal-body #user_id').val(user_id);
  });
</script>
@endsection