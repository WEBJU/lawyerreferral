@extends('layouts.app')
@section('content')
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Login

    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Login</li>
    </ol>

    <!-- Portfolio Item Row -->
    <div class="row">

      <div class="col-md-7">
        <img class="img-fluid" src="img/part3.jpg"  style="heigh:100%;"alt="">
      </div>

      <div class="col-md-5">
        <h3></h3>
        <div class="card">
          <div class="card-header">
            Login
          </div>
          <div class="card-body">
            @include('inc.messages')
            <form method="post" action="/login_access">
              @csrf
              <div class="form-group">
                <label>Email address</label>
                <input type="email" class="form-control" name="email"  placeholder="Enter email">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" name="remember">Remember me</label>
              </div>
              <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
            </form>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

    <!-- Related Projects Row -->
    <h3 class="my-4">Our Partners</h3>

    <div class="row">

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="img/part1.jpg" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="img/part2..jpg" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="img/part3.jpg" alt="">
        </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
          <img class="img-fluid" src="img/part4.jpg" alt="">
        </a>
      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

@endsection
