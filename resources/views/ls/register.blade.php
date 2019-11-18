@extends('layouts.app')
@section('content')
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Create
      <small>Your Lawyer Referral Account</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">register</li>
    </ol>
    @include('inc.messages')
    <div class="jumbotron text-center">
      <h4 class="">Create Account</h4>
      <p>Its free to create an account</p>
      <div class="row">


      <div class="col-md-6">
        <img class="img-fluid" src="img/part3.jpg"  style="height:100%;"alt="">
      </div>
      <div class="col-md-6">

          <form method="post" action="/account_creation">
              @csrf
            <div class="form-group">
              <input type="text" class="form-control" value="{{old('name')}}" name="name" required  placeholder="Full Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" value="{{old('email')}}" name="email" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" value="{{old('phone')}}" name="phone"  required placeholder="Your Contact number">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" value="{{old('location')}}" name="location" required  placeholder="Location">
            </div>
            <div class="form-group">
              <select name="specialization" value="{{old('specialization')}}" required class="form-control">
                <option>Specialization</option>
                <option>Patent Law</option>
                <option>Intellectual Property Law</option>
                <option>Health Care Law</option>
                <option>First Amendment Law</option>
                <option>Environmental Law</option>
                <option>Criminal Law</option>
                <option>Constitutional Law</option>
              </select>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" value="{{old('working_days')}}"  name="working_days"  placeholder="Working days(Mon-Fri)" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" value="{{old('license_no')}}" name="license_no"  placeholder="License Number" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" value="{{old('experience')}}" name="experience" placeholder="How long have you been practising.." required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" value="{{old('password')}}" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" value="{{old('confirm')}}" name="confirm" placeholder="Confirm Password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </form>
        </div>
        </div>
    <!-- /.jumbotron -->
  </div>
  </div>
  <!-- /.container -->

@endsection
