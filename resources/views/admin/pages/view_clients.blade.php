@extends('admin.pages.index')

@section('content')
  <div class="row">
    <div class="container">


    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Registered Users</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <td>#</td>
              <th>Name</th>
              <th>Email</th>
              <th>Contact</th>
              <th colspan="3">Actions</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($clients as $client)


            <tr>
              <td>{{$client->id}}</td>
              <td>{{$client->name}}</td>
              <td>{{$client->email}}</td>
              <td>{{$client->contact}}</td>
              <td>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
                <a href="" class="btn btn-info">View Cases</a>
              </td>
            </tr>
              @endforeach
          </tbody>
        </table>
        </div>
@endsection
