<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
      public function registered(){
      $users = User::latest()->paginate(10);
      return view('admin.register',compact('users'))->with('users',$users)->with('i',(request()->input('page',1)-1)*10);
}


public function index(Request $request){
  return view('admin.admin'); 
}

public function checkLogin(Request $Request){

 dd($request->all());
 return view('admin.index');
}
  //     public function userData(Request $request)
  // {
  //   //dd($request->all());
  //     if( count($request->user_id) <= 10)
  //     {
  //       $role_arr = array_values(array_filter($request->role));
  //       for($i=0; $i < count($request->user_id);$i++)
  //       {
  //         $uid = $request->user_id[$i];
  //         $role = $role_arr[$i];
  //         $user = User::find($uid);
  //         $user->role = $role;
  //         $user->save();
  //         //User::where('id',$uid)->update(['role',$role]);
  //       }
  //       return redirect()->route('employee.list')->with('success','Your data has successfully updated');     
  //     }
  //     else 
  //     {
  //       return redirect()->route('employee.list')->with('error','Your data has not updated');
  //     }

  // }
  
   
   // public function nominated(Request $request){
      
   //     $users = User::whereNotNull('role')->get();
   //     return view('admin.nominate')->with('users',$users);

   // }

   
   
}
