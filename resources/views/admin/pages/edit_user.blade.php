@extends('admin.pages.index')

@section('content')
  <div class="row">

    <div class="container p-3 mb-3">
  <p class="ml-3">Add New Lawyer</p>
  <div class="col-md-8">

      <form method="post" action="/account_creation">
          @csrf
        <div class="form-group">
          <input type="text" class="form-control" value="{{old('name')}}" name="name" required  placeholder="Full Name">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" value="{{old('email')}}" name="email" placeholder=" Email">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" value="{{old('phone')}}" name="phone"  required placeholder=" Contact number">
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
        <button type="submit" class="btn btn-primary btn-block">ADD NOW</button>
      </form>
    </div>
    </div>
  </div>

@endsection
