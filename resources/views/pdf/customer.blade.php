<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		table{
			width: 50%;
			margin-left:-5px;
			border: 1px solid;
		}
	</style>
	<title></title>
</head>
<body><h6> Voter Count  :-  {{$users->count()}}</h6>
<table> 
                    <thead>  
                    	<th width="50px">Id</th>
                        <th width="200px">Nominee</th>
                        <th width="150px">Nominated for</th>
                        <th width="150px">Name of Voter</th>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                       <tr>
                       	<td>{{$user->id}}</td>
                        <td>{{$user->name}} {{$user->lname}}</td><br>
                        <td>{{$user->nominated_for}}</td><br>
                        <td>{{$user->v_name}}</td><br>
                       </tr>
                       @endforeach   
                   </tbody>
                  </table> 
</body>
</html>