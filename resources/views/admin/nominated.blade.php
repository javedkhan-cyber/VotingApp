@extends('layouts.master')
@section('title')
@endsection
@section('content')

<form action="" method="post">
@csrf
<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Nominated</h4>
              </div>
              @if($message = Session::get('success'))
              <div class="alert alert-success">
             <p>{{$message}}</p>
             </div>
             @endif
              @if($message = Session::get('error'))
                <div class="alert alert-danger" style="margin-bottom: 0px;"> <p>{{$message}}</p></div>
                @endif
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary"> 
                        <th>User ID</th>
                        <th>Months</th>
                        <th> Nomination for </th>
                    </thead>
                    @foreach($users as $user)
                    <tbody>
                  <tr>
                     <td>{{$user->user_id}}</td>
                     <td>{{$user->nomination_month}}</td>
                     <td>{{$user->nominated_for}}</td>
                  </tr>  
            </tbody>
            @endforeach
                  </table>
                 <!-- <div class="col-md-12">
                  <button type="submit" class="btn btn-primary">  {{ __('Submit') }}</button>
                 </div>  -->
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
@section('scripts')

                       
                          
                     

                       

                             
                              
                       
       
                        
                      
                  

                       
                        
        




                     
                            
    



                 
                  
                          
                      
                      
                        
                      
                     
                      
                          

                     
                      
                     
                      
                      
                    
                        
                      
                     
                       
                    
                  
                       
                     
        
                      
                   

