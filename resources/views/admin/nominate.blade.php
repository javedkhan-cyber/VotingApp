@extends('layouts.master')
@section('title')
@endsection
@section('content')


<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title"> Nominated</h6>
              </div>
              @if ($errors->any())
      <div class="alert alert-danger">
        <strong>Whoops! </strong> Problem with your Input.<br>
        <h6>Please Select Month and nomination for</h6>
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
              <div class="alert alert-danger"> <p>{{$message}}</p></div>
              @endif
              <form action="{{route('forNomination')}}" method="post" id="myform">
              @csrf
              <div class="card-body" style="padding-top: 0px;">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary"> 
                        <th>User ID</th>
                        <th>Full Name</th>
                        <th> Role  </th>
                        <th> Email </th>
                        <th>Months</th>
                        <th> Nomination for </th>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                  <tr>
                     <td>{{$user->id}}</td>
                     <td>{{$user->fname}} {{$user->lname}}</td>
                     <td>{{$user->role}}</td>
                     <td>{{$user->email}}</td>
                     <td>
                       <select class="dropdown" name="month[]" id="mon" >
                            <option value="">--Select Month--</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March </option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>                          
                         </select>
                    </td>
                     <td>
                       <select class="dropdown" name="nominate[]" id="nom" >
                            <option value="">------Nominate For------</option>
                            <option value="Good Performer">Good Performer</option>
                            <option value="Excellent Performer">Excellent Performer</option>
                            <option value="Employee of Month">Employee of the Month </option>                            
                         </select>
                    </td>
                     <td><input type="checkbox" class="checkb" id="favorite[{{ $user->id }}]" name="user_id[]"  value="{{ $user->id }}" ></td>
                   </tr>
                  @endforeach
                  </tbody>
                  </table>
                  <div class="col-md-12">
                  <label id="result"></label>
                  <button type="submit" class="btn btn-primary" id="submit">  {{ __('Submit') }}</button>
                 </div>
                </div>
              </div>
              <div id="result"></div>
            </form>
            </div>
          </div>
        </div>

@endsection
@section('scripts')
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
 $(function(){
                 $('#submit').prop('disabled', true);
                 $('#mon').change(function(){
                  
                 $('#submit').prop('disabled', $('#mon').length == 0);
                });
                });
              
</script> -->
                       
                          
                     

                       

                             
                              
                       
       
                        
                      
                  

                       
                        
        




                     
                            
    



                 
                  
                          
                      
                      
                        
                      
                     
                      
                          

                     
                      
                     
                      
                      
                    
                        
                      
                     
                       
                    
                  
                       
                     
        
                      
                   

