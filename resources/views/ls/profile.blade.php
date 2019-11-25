@extends('layouts.app')
@section('content')
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">My Profile
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Profile</li>
    </ol>

    <!-- Content Row -->
    <div class="row">
      <!-- Sidebar Column -->
      <div class="col-lg-3 mb-4">
        <div class="list-group">
          <button type="button" class="btn btn-primary">
            Bookings <span class="badge badge-light">4</span>
          </button>
          <a href="/change_password" class="list-group-item">Change Password</a>
          <a href="/update" class="list-group-item">Update Profile</a>
          <a href="/cases" class="list-group-item">Cases</a>
          <a href="/logout" class="list-group-item">Logout</a>
        </div>
      </div>
      <!-- Content Column -->
      <div class="col-lg-9 mb-4 profile">
        @include('inc.messages')
        <div class="card">
        <h2 class="card-header p-4">Your Details</h2>
        @if (auth()->user()->profile_img==null)
          <form action="/profile_update" method="post" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label class="text text-danger profile">Please upload your profile image</label>
            <input type="file" class="form-control-file profile" name="profile_img">
            <small id="fileHelp" class="form-text text-muted profile">Please upload a valid image file. Size of image should not be more than 2MB.</small>
            <button type="submit" class="btn btn-primary" name="button">Submit</button>
          </div>
        </form>


        @endif
        <img src="/uploads/avatars/{{$profile->profile_img}}" class="rounded-circle img-fluid" style="height:200px; width:200px;" >
        <p>Full Name: {{auth()->user()->name}}</p>
        <p>Contact: {{auth()->user()->phone}}</p>
        <p>Specialization: {{auth()->user()->specialization}}</p>
        <p>Working Days: {{auth()->user()->working_days}}</p>
        <form class="" action="/update_profile" method="post">
            <button type="button" class="btn btn-primary" name="button">Update Profile</button>
        </form>
      </div>
    </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

@endsection
