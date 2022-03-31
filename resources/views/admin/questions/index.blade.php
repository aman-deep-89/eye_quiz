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
            <h4>Question List</h4>
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
            <a href="{{ route('question.create') }}" class="btn btn-primary btn-sm">Add New Question</a>
    <table class="table table-striped" id="table-1">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Color Code</th>
            <th scope="col">Question</th>
            <th scope="col">Show</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
        @foreach($questions as $key=>$question)
          <tr>
            <th scope="row">{{$key+1}}</th>
            <td>{{$question->category->color_code}}</td>
            <td>{{$question->question_text}}</td>
            <td>{{ ($question->q_active)==1 ? 'Yes' : 'No' }}</td>
            <td>
              <a href="{{route('question.edit',$question->question_id)}}" class="btn btn-sm btn-primary">Edit</a>
              <button type="button" class="btn btn-danger btn-sm delete" data-question_id="{{ $question->question_id }}" data-toggle="modal" data-route="{{ route('question.destroy',$question->question_id) }}" data-target="#deleteDep">Delete</button>
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
    <div class="modal-dialog modal-md" role="document">
        <form action="#" method="post" id="delete_form">
            @method('DELETE')
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">This action is not reversible.</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this question and all of its answers?
                    <input type="hidden" id="ategory_id" name="ategory_id">
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
      var category_id = button.data('category_id'); 
      var action = button.data('route');
      var modal = $(this);
      $('#delete_form').attr("action",action);            
      modal.find('.modal-body #category_id').val(category_id);
  });
</script>
@endsection