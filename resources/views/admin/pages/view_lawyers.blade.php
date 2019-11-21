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
              <td>{{$user->name}}</td>
              <td>{{$user->license_no}}</td>
              <td>{{$user->phone}}</td>
              <td>{{$user->location}}</td>
              <td>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
                <a href="" class="btn btn-info">View Case History</a>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
        </div>
@endsection
