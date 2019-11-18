@extends('layouts.app')
@section('content')
  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h4 class="mt-4 mb-3">Your Case History
    </h4>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Case History</li>
    </ol>
<table class="table">
  <div class="text-right">
    <a href="/add_history" class="btn btn-primary m-3">Create New Case History</a>
  </div>
  <thead class="thead-dark">
    <tr>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
      <th scope="col">Status</th>
      <th scope="col">Court</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @if (count($caseHistory)>0)
    @foreach($caseHistory as $history)
    <tr class="p-4">
      <td>{{ $history->start_date }}</td>
      <td>{{ $history->end_date }}</td>
      <td>{{ $history->status }}</td>
      <td>{{ $history->court }}</td>
      <td colspan="2">
          <a href="#" class="btn btn-primary">Edit</a>
          <a href="#" class="btn btn-danger">Delete</a>
      </td>
    </tr>
  @endforeach
  @else
    <tr>
      <td style="margin:20px;"><p class="center">You have no case history yet!!</p>
          <br>
          <a type="button" class="btn btn-primary" href="/add_history         ">Post now</a>
      </td>
    </tr>
  @endif
  </tbody>
</table>
</div>

@endsection
