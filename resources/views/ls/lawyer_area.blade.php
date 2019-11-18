@extends('layouts.app')
@section('content')
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h4 class="mt-4 mb-3">Featured Advocates and their profiles
    </h4>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Registered Lawyers</li>
    </ol>
    @if (count($lawyers)>0)
    @foreach($lawyers as $lawyer)
    <!-- Project Two -->
    <div class="row">
      <div class="col-md-6">
        <a href="#">
            <img src="/uploads/avatars/{{$lawyer->profile_img}}" class="rounded-circle img-fluid" style="height:200px; width:200px;" >
        </a>
      </div>
      <div class="col-md-6">
         <p><span class="m-1">Name:</span>{{$lawyer->name}}</p>
         <p><span class="m-1">Specialization:</span>{{$lawyer->specialization}}</p>
         <p><span class="m-1">Location:</span>{{$lawyer->location}}</p>
         <p><span class="m-1">Contact:</span>{{$lawyer->phone}}</p>
        <a class="btn btn-primary m-1" href="#">View Profile
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div>
    <!-- /.row -->

    <hr>
  @endforeach
@else
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <p class="text-center text-info">There are no registered Lawyers  yet!!!Be the first one..</p>
    </div>
  </div>@endif
  </div>
  <!-- /.container -->

@endsection
