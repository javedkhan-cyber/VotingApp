@extends('layouts.master')
@section('title')
@endsection
@section('content')


<div class="row">
  
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Voter Count</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary"> 
                        <th>S.No</th>
                        <th>Nominee</th>
                        <th>Nominated for</th>
                        <th>Who Voted</th>
                    </thead>
                    <tbody>
                       
                        @foreach($users as $user)
                       <tr>
                        <td>{{++$i}}</td>
                        <td>{{$user->fname}} {{$user->lname}}</td>
                        <td>{{$user->nominated_for}}</td>
                        <td>{{$user->name}}</td>
                       </tr>
                       @endforeach
                        
                   </tbody>
                  </table>   
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
@section('scripts')

                       
                          
                     

                       

                             
                              
                       
       
                        
                      
                  

                       
                        
        




                     
                            
    



                 
                  
                          
                      
                      
                        
                      
                     
                      
                          

                     
                      
                     
                      
                      
                    
                        
                      
                     
                       
                    
                  
                       
                     
        
                      
                   

