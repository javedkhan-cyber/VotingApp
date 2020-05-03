@extends('layouts.app')
@section('content')

<div class="container col-md-12" style="background-color: #1affc2;margin-top:-1.5rem;margin-bottom:-1.5rem;">
    <div class="row justify-content-center">
        <div class="col-md-12">
           
                  <div class="card-header" style="background-color: #99ccff; margin-top:1rem;">
                         <h2> Vote for Nominations</h2>
                   </div>
                   @if($message = Session::get('success'))
                    <div class="alert alert-success"><p>{{$message}}</p> </div>
                   @endif
                @if($message = Session::get('error'))
                <div class="alert alert-danger" style="margin-bottom: 0px;"> <p>{{$message}}</p></div>
                @endif
                  <div>
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                        </div>
                        @endif
                    </div>
           
                <form action="{{route('voteForNominated')}}" method="post" style="margin-bottom:7.5rem;" >
                  @csrf
                  @foreach($users as $user)
                   <!--  <div class="col-md-4 " style="float: left; padding-top: 20px">  
                      @if(isset($user->nomination[0]))
                        <tr>
                          <td class="col-sm-4" style="width: 200px;"> {{ $user->fname}} {{$user->lname}}    </td> 
                          </tr><br>
                          <tr>
                          <td>Nominated For : {{ $user->nomination[0]->nominated_for}}</td>
                          </tr><br>
                          <tr>
                          <td>Nomination Month : {{ $user->nomination[0]->nomination_month}}</td>
                          </tr>
                          <tr><br>
                          <td><input type="checkbox" id="favorite[ $user->nomination[0]->user_id]" name="user_id[]"  value="{{ $user->nomination[0]->user_id }}"></td>
                          </tr>
                          <hr>
                      @endif
                    </div> -->
                     @if(isset($user->nomination[0]))
                    <div class="card" style="width: 25rem; float: left;margin-top:10px;margin-left: 17px">
                      
                       <div class="card-body " style="hover">
                          <h5 class="card-title"> {{ $user->name}} {{$user->lname}}</h5>
                           <h6 class="card-subtitle mb-2 text-muted">Nominated For : {{ $user->nomination[0]->nominated_for}}</h6>
                            <p class="card-text">Nomination Month : {{ $user->nomination[0]->nomination_month}}.</p>
                              <input type="checkbox"  class="checkb" id="favorite[ $user->nomination[0]->user_id]" name="user_id[]"  value="{{ $user->nomination[0]->user_id }}" style="margin-left: 20rem; margin-top:-10px;">
                           </div>
                          
                       </div>
                        @endif 
                 @endforeach
                 <button style="margin-top: 10px; margin-left: 20px;" id="submit" type="submit" class="btn btn-primary" disabled='disabled' />{{ __('Submit') }}</button>
                  </form>
          </div>
         </div>
        
</div>
 @endsection

 <!-- JS code for disable/Enable button -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- <script>
 $(function () {
                $('.checkb').click(function () {
                    if ($(this).val() == '') {   
                        $('#submit').prop('disabled', true);
                    } else {
                        $('#submit').prop('disabled', false);
                    }
                });
            }); 
      </script> -->
          <script type="text/javascript">
               $(function(){
                 $('#submit').prop('disabled', true);
                 $('.checkb').change(function(){
                 $('#submit').prop('disabled', $('.checkb:checked').length == 0);
                });
                });
          </script>
<!-- End of JS Code -->
