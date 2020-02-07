@extends('layouts.master')



@section('title')


@endsection



@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                     
                    </thead>
                    <tbody>
                    
     
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
       
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

    <form action="" method="post">
      @csrf
      @method('PUT')
      <div class="container">
      <div class="row">
        <div class="col-md-12">
          <strong> Select Role :</strong>
          <select name="select" class="dropdown">
          <option value="select">--Select Role</option>  
            <option value="SuperAdmin">Super Admin</option> 
              <option value="Admin">Admin</option> 
                <option value="TeamLeader">Team Leader</option> 
                 <option value="TeamLeader">Employee</option> 
                  <option value="TeamLeader">Fresher</option> 
          </select>
        </div>
         <div class="col-md-12">
          <strong>Select Month :</strong>
          <select name="select" class="dropdown">
          <option value="select">--Select Role</option>  
            <option value="SuperAdmin">Super Admin</option> 
              <option value="Admin">Admin</option> 
                <option value="TeamLeader">Team Leader</option> 
                 <option value="TeamLeader">Employee</option> 
                  <option value="TeamLeader">Fresher</option> 
          </select>
        </div>
        
         
       </div>

        <div class="col-md-12">
          <a href="" class="btn btn-sm btn-success">Submit</a>
          
        </div>
      </div>
    </form>

  </div>

                     
        
                      </tr>
                
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>


@endsection



@section('scripts')


@endsection