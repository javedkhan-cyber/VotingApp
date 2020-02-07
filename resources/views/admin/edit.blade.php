@extends('layouts.master')
@section('title')



<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Edit Biodata </h3>
      </div>
    </div>

    @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> there where some problems with your input.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{route('biodata.update',$biodata->id)}}" method="post">
      @csrf
      @method('PUT')
      <div class="row">
        <div class="col-md-12">
          <strong> First Name :</strong>
          <input type="text" name="fname" class="form-control" value="{{$biodata->fname}}" >
        </div>
         <div class="col-md-12">
          <strong>Last Name :</strong>
          <input type="text" name="lname" class="form-control" value="{{$biodata->lname}}" >
        </div>
         <div class="col-md-12">
          <strong>Email :</strong>
          <input type="email" name="email" class="form-control" value="{{$biodata->email}}" >
        </div>
         <div class="col-md-12">
          <strong>Mobile :</strong>
          <input type="number" name="mobile" class="form-control" value="{{$biodata->mobile}}" >
        </div>
        <div class="col-md-12">
          <strong>About :</strong>
          <textarea class="form-control" name="text" rows="8" cols="80">{{$biodata->text}}</textarea>
        </div>

        <div class="col-md-12">
          <a href="{{route('biodata.index')}}" class="btn btn-sm btn-success">Back</a>
          <button type="submit" class="btn btn-sm btn-primary">Submit</button>
        </div>
      </div>
    </form>

  </div>

@endsection
@section('content')
