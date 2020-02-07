@extends('layouts.master')
@section('title')
@endsection
@section('content')

<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>New Biodata </h3>
      </div>
    </div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <h6>Email should be unique and drop valid mobile number not more than 10 digit</h6>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <form action="{{route('biodata.store')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-8">
          <strong>First Name :</strong>
          <input type="text" name="fname" class="form-control" placeholder="Enter your first name ">
        </div>
         <div class="col-md-8">
          <strong>Last Name :</strong>
          <input type="text" name="lname" class="form-control" placeholder="Enter your Last name ">
        </div>
         <div class="col-md-8">
          <strong>Email :</strong>
          <input type="text" name="email" class="form-control" placeholder="Enter your Email ">
        </div>
         <div class="col-md-8">
          <strong>Mobile :</strong>
          <input type="number" name="mobile" class="form-control" placeholder="Enter your Number ">
        </div>
          <div class="col-md-8">
          <strong>Designation :</strong>
          <input type="text" name="designation" class="form-control" placeholder="Enter Designation">
        </div>
        <div class="col-md-8">
          <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>
  </div>
@endsection
@section('content')
