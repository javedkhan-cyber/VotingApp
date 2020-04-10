<!-- @extends('layouts.master')
@section('title')
@endsection
@section('content')

<div class="container">
 	<div class="row">
		<div class="col-md-10">
			List Of Users
		</div> 
		<div class="col-md-2" style="margin-top: -2rem;">
			<a class="btn btn-sm btn-success" href="{{ route('biodata.create')}}">Create New Record</a>
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
				<th width="200px">Email</th>
				<th width="150px">Mobile</th>
				<th>Designation</th>
				<th >Role</th>
			</tr>
               @foreach($biodatas as $user)
                    <tr>
                    	<td><b>{{++$i}}</b></td>
                    	<td>{{$user->fname}} {{$user->lname}}</td>
                    	<td>{{$user->email}}</td>
                    	<td>{{$user->mobile}}</td>
                    	<td>{{$user->designation}}</td>
                    	<td class="selector">
                            <select class="dropdown" id="role" class="require_one" name="role[]"/>
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
		               {!! $biodatas->links() !!}
                  </div>
       @endsection
       @section('scripts')

       <!-- JS code for disable/Enable button -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

          <script type="text/javascript">

               // $(function(){
               //   $('#submit').prop('disabled', true);
               //   $('.roleSelection').change(function(){
               //   $('#submit').prop('disabled', $('.roleSelection:selected').length == 0);
               //  });
    //            //  });
    //        $(document).ready(function () {
    //     $('.roleSelection').change(function () {
    //         if ($(this).val() != '') {
    //             $('#submit').prop('disabled', false);
    //         }
    //         else {
    //             $('#submit').prop('disabled', true);
    //         }
    //     });
    // });

          </script>
<!-- End of JS Code -->

      -->