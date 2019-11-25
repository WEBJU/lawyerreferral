@extends('admin.pages.index')

@section('content')
  <div class="row">
    <div class="container">


    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Registered Lawyers</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>#</th>
              <th>Lawyer Name</th>
              <th>License Number</th>
              <th>Contact</th>
              <th>Location</th>
              <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
            <tr>
              <td>{{$user->id}}</td>
              <td>{{$user->name}}</td>
              <td>{{$user->license_no}}</td>
              <td>{{$user->phone}}</td>
              <td>{{$user->location}}</td>
              <td>
                <a class="btn btn-primary btn-sm" title="Edit" href="#modalForm" data-toggle="modal"
                       data-href="{{url('update_user/'.$user->id)}}">
                        Edit</a>
                    <input type="hidden" name="_method" value="delete"/>
                    <a class="btn btn-danger btn-sm openDelete" title="Delete" data-toggle="modal"
                       href="#modalDelete"
                       data-id="{{$user->id}}"
                       data-token="{{csrf_token()}}">
                        Delete
                    </a>
                <a href="" class="btn btn-info btn-sm">Lawyer History</a>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
        </div>
      </div>
    </div>
    <!-- Delete Modal -->
    <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="modal_content"></div>
        </div>
    </div>
    <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure want to delete?</p>
                    <input type="hidden" id="delete_token"/>
                    <input type="hidden" id="delete_id"/>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger"
                            onclick="ajaxDelete('{{url('/delete_user')}}/'+$('#delete_id').val(),$('#delete_token').val())">
                        Delete
                    </button>
                     <button type="button" class="btn btn-danger deleteButton" id="deleteButton" 
                            onclick="
                              console.log('monday',$('#delete_id').val());
                            ">
                        Delete 2
                    </button>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
@endsection