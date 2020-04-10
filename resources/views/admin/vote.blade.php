@extends('layouts.master')
@section('title')
@endsection
@section('content')


<div class="row">
  
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h6 class="card-title"> Voter Count  :-  {{$users->count()}}</h6><a href="{{'getpdf'}}">Download <i class="fa fa-download" aria-hidden="true"></i></a>
              </div>
               <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search by Nominee.." class="fa fa-search" aria-hidden="true" title="Type in a name">
              <div class="card-body">
                <div class="table-responsive">

                  <table class="table" id="myTable">
                    <thead class=" text-primary">  
                        <th>Nominee</th>
                        <th>Nominated for</th>
                        <th>Name of Voter</th>
                        <th>Id Who Voted</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                       <tr>
                        <td>{{$user->name}} {{$user->lname}}</td>
                        <td>{{$user->nominated_for}}</td>
                        <td>{{$user->v_name}}</td>
                        <td>150{{$user->voter_id}}</td>
                         <td>
                       <a href="{{ route('admin.remove',$user->id) }}" class="btn btn-sm btn-danger">Delete</a>                  
                     </td>
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
                      
  <style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
   width: 50%;
  margin-left: 200px;
  margin-top: -40px;
  font-size: 16px;
  padding: 5px 15px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}


#myTable th, #myTable td {
  text-align: left;
  padding: 3px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>



<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script> 
                       
                          
                     

                       

                             
                              
                       
       
                        
                      
                  

                       
                        
        




                     
                            
    



                 
                  
                          
                      
                      
                        
                      
                     
                      
                          

                     
                      
                     
                      
                      
                    
                        
                      
                     
                       
                    
                  
                       
                     
        
                      
                   

