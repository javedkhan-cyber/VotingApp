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
        <th width="150px">Name</th>
        <th width="250px">Email</th>
        <th width="150px">Mobile</th>
        <th width="200px">Select Role</th>
        
      </tr>
               @foreach($users as $user)
                    <tr>
                      <td><b>{{++$i}}</b></td>
                      <td>{{$user->name}} {{$user->lname}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->mobile}}</td>
                      
                      <td class="selector">
                            <select class="form-control" id="role" class="require_one" name="role[]"/>
                            <option value="">--Select Role--</option>
                            <option value="superAdmin">Super Admin</option>
                            <option value="Admin">Admin</option>
                            <option value="TeamLeader">Team Leader</option>
                            <option value="Employee">Employee</option>
                            <option value="Fresher">Fresher</option>          
                            </select>
                        </td>
                         <td><input type="checkbox" class="checkb" id="favorite[{{ $user->id }}]" name="user_id[]"  value="{{ $user->id }}"></td>
                    </tr>
                    @endforeach
                    </table>
                    <div class="col-md-12">
                    <button type="submit" class="btn btn-primary" id="submit" class="btn">  {{ __('Submit') }}</button>
                    </div> 
                    </form>
                   {!! $users->links() !!}
                  </div>
       @endsection
       @section('scripts')


     