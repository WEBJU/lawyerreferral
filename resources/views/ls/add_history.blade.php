@extends('layouts.app')
@section('content')
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h4 class="mt-4 mb-3">Add New History
    </h4>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Add History</li>
    </ol>
    <div class="row m-4">

    <div class="col-md-6 p-4">
      @include('inc.messages')
        <form method="post" action="/store_history">
            @csrf
          <div class="form-group">
            <label for="">Start Date</label>
            <input type="date" class="form-control" value="{{old('start_date')}}" name="start_date" required  placeholder="Start Date">
          </div>
          <div class="form-group">
            <label for="">End Date</label>
            <input type="date" class="form-control" value="{{old('end_date')}}" name="end_date" placeholder="End Date">
          </div>
          <div class="form-group">
            <label for="">Status</label>
            <input type="text" class="form-control" value="{{old('status')}}" name="status"  required placeholder="Case Status">
          </div>
          <div class="form-group">
            <label for="">Court</label>
            <input type="text" class="form-control" value="{{old('court')}}" name="court" required  placeholder="Court">
          </div>

          <button type="submit" class="btn btn-primary btn-block">Add Now</button>
        </form>
      </div>
      <div class="col-md-6">
        <div class="card h-100">
          <h4 class="card-header">Why Case History?</h4>
          <div class="card-body">
            <p class="card-text">The history enables your Potential clients to go through what you have done..</p>
            <p class="card-text">You are required to fill all the details correctly as they will be checked..</p>
            <p class="card-text">Please feel free to contact us if you have any queries on this through:</p>
              <ul class="list-group">
                <li class="list-group-item">Email:support@lawyerreferral.org</li>
                <li class="list-group-item">Helpline:0709239865</li>
                <li class="list-group-item">Helpline:0774356745</li>
              </ul>
          </div>

        </div>
      </div>
      </div>
</div>
    {{-- @if (count($lawyers)>0)
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
@else --}}
  {{-- <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <p class="text-center text-info">There are no registered Lawyers  yet!!!Be the first one..</p>
    </div>
  </div>@endif
  </div> --}}
  <!-- /.container -->

@endsection
