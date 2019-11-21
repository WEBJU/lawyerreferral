@extends('admin.pages.index')

@section('content')
  <div class="row">

    <div class="container p-3 mb-3">
  <p class="ml-3">Add New Client</p>
  <div class="col-md-8">

      <form method="post" action="/account_creation">
          @csrf
        <div class="form-group">
          <input type="text" class="form-control" value="{{old('name')}}" name="name" required  placeholder="Full Name">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" value="{{old('email')}}" name="email" placeholder="Email">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" value="{{old('phone')}}" name="phone"  required placeholder="Contact">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" value="{{old('email')}}" name="email" placeholder="Default Password">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" value="{{old('phone')}}" name="phone"  required placeholder="Confirm Password">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Add Now</button>
      </form>
    </div>
    </div>
  </div>

@endsection
