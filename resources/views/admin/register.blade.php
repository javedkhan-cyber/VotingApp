@extends('layouts.master')
@section('title')
@endsection
@section('content')

<div class="col-md-2" style="margin-top: -4rem;">
      <a class="btn btn-sm btn-success" href="{{ route('biodata.create')}}">Create New Record</a>
    </div>
<form action="{{ route('nominate.user') }}" method="post">
@csrf
<div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                  <h4 class="card-title"> DashBoard</h4>
                </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                         <th>ID</th>
                         <th> First Name</th>
                         <th> Last Name  </th>
                         <th>  Email </th>
                         <th>Mobile</th>
                    </thead>
                    <tbody>
                      @foreach($users as $user)
                      <tr>
                        <td> {{$user->id}}</td>
                         <td >{{$user->name}} </td>
                         <td>{{$user->lname}}  </td>
                         <td>{{$user->email}}  </td>
                         <td>{{$user->mobile}}  </td>
                      </tr>
                        @endforeach
                         </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
         {!! $users->links() !!}

@endsection

@section('scripts')
         





            
          
        
        
                       
                          
                       
                         

                             
                               
                        
        
                        

                       
                        
        

           



                     
                            
                      
  



                 
                  
                          
                      
                      
                        
                      
                     
                      
                          

                     
                      
                     
                      
                      
                    
                        
                      
                     
                       
                    
                  
                       
                     
        
                      
                   

