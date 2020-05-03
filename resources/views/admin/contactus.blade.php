@extends('layouts.master')
@section('title')
@endsection
@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-10">
      List Of Users
    </div> 
   
    </div>
     @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> Please Select Role and Tick to checkbox.<br>
        <ul>
          @foreach ($errors as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif
  @if($message = Session::get('success'))
  <div class="alert alert-success">
    <p>{{$message}}</p>
  </div>
  @endif
  @if($message = Session::get('error'))
  <div class="alert alert-danger" style="margin-bottom: 0px;"> <p>{{$message}}</p></div>
    @endif
    <form action="{{ route('role.list') }}" method="post">
    @csrf
    <table class="table table-hover table-sm">
      <tr>
        <th width="30px">No.</th>
        <th width=".100px">Name</th>
        <th width="200px">Email</th>
        <th width="250px">Subject</th>
        <th width="300px">Message</th>
        
      </tr>
       @foreach($biodatas as $user)
                    <tr>
                      <td><b>{{++$i}}</b></td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->subject}}</td>
                      <td>{{$user->message}}</td>
                    </tr>
                    @endforeach
              
                    </table> 
                    </form>
                   {!! $biodatas->links() !!}
                  </div>
       @endsection
       @section('scripts')
