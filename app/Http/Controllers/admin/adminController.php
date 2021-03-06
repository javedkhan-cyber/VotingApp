<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Biodata; 
use App\nomination;
use App\Voter;
use\Validator;
use PDF;

class adminController extends Controller
{
    public function dataRole(Request $request){
      $param = [];
      $param['user_id'] = $request->user_id;
      $role_arr = array_values(array_filter($request->role));
      $param['role'] = $role_arr;
        
        
        $validator = Validator::make($param, [
          'user_id' => 'required|array',
          'role' =>'required|array',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        // dd($request->all());
        for($i=0; $i < count($request->user_id);$i++){

          $uid = $request->user_id[$i];
          $role = $role_arr[$i];
          $user = User::find($uid);
          $user->role = $role;
          $user->save();
          //User::where('id',$uid)->update(['role',$role]);
          }
          return redirect()->route('withRole')->with('success','Your have Successfully Assigned Role');     
         
    }

      public function nominated(Request $request){
      $users = User::whereNotNull('role')->get();
      return view('admin.nominate')->with('users',$users);
   }      
        public function forNominated(Request $request){
        return view('admin.index');
        }

      public function goForNominated(Request $request){


       $param =[];
       $param['user_id'] = $request->user_id;
       $month_arr = array_values(array_filter($request->month));
       $param['month'] = $month_arr;
       $nominate_arr = array_values(array_filter($request->nominate));
       $param['nominate'] = $nominate_arr;
     
        $validator = Validator::make($param, [
          'user_id' => 'required|array',
          'month' =>'required|array',
          'nominate' =>'required|array',
        ]);
         if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }  
          
             for($i=0; $i < count($request->user_id);$i++)
             {
              if(nomination::where('user_id',$request->user_id[$i])->count() != 0){
                return redirect()->route('withRole')->with('error','You have already Nominated!');
              }
                else{
          $u_id = $request->user_id[$i];
          $nominate = $nominate_arr[$i];
          $month = $month_arr[$i]; 
          $data= array('user_id'=>$u_id,'nomination_month'=>$month,'nominated_for'=>$nominate,'created_at'=>date('yy-m-d:h:m:s'),'updated_at'=>date('yy-m-d:h:m:s'));
            DB::table('nominations')->insert($data);
             return redirect()->route('withRole')->with('success','You have Successfully Nominated');
          	}
          }
       
          
         }
        public function nominatedUser(Request $request){
        $users = nomination::whereNotNull('user_id')->get();
        return view('admin.nominated')->with('users',$users);
        	}
          public function votingList(Request $request){
         $users =  DB::table('users')
         ->join('nominations','nominations.user_id','users.id')
         ->join('votes','votes.nominee_id','users.id')
         ->select('users.name','users.lname','nominations.nominated_for','voter_id','v_name','votes.id')
         ->get();          
       return view('admin.vote',compact('users'))->with('i');
          }

    public function destroy($id=0)
    {
      if($id > 0)
      {
        $users = nomination::find($id);
        if($users->delete())
        {
          return redirect()->route('withRole')->with('success','Your Data deleted successfully');
        }
        else
        {
          return redirect()->route('withRole')->with('error','Unable to Delete Data');
        }
      }
    }
    public function deleteVoter($id=0)
    {
      if($id > 0)
      {
        $users = Voter::find($id);
        if($users->delete())
        {
          return redirect()->route('vts')->with('success','Your Data deleted successfully');
        }
        else
        {
          return redirect()->route('withRole')->with('error','Unable to Delete Data');
        }
      }
    }

      public function getPDF(){
        $users =  DB::table('users')
         ->join('nominations','nominations.user_id','users.id')
         ->join('votes','votes.nominee_id','users.id')
         ->select('users.name','users.lname','nominations.nominated_for','voter_id','v_name','votes.id')
         ->get();    
        $pdf = PDF::loadview('pdf.customer',['users'=>$users]);
        return $pdf->download('votes.pdf');
      }
   
}



