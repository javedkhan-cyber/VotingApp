<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Biodata;
use App\nomination;
use App\Voter;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {   

        $users = Biodata::where('email','!=',Auth::user()->email)->get(); 
        //dd($users,$users[0]->nomination);  
        return view('home',compact('users'));  

    }

    public function voteForGuys(Request $request) { 
        if(count($request->user_id) <= 2 ){ 
         
        if(Voter::where('voter_id',Auth::user()->id)->count() != 0){
        return redirect()->route('home')->with('error','You have already voted');
      }

    else {
             for($i=0; $i < count($request->user_id);$i++){
             $idOfVoter = Auth::user()->id;
             $uid = $request->user_id[$i];
             $user = ['nominee_id'=>$uid,'voter_id'=>$idOfVoter,'created_at'=>date('yy-m-d:h:m:s'),'updated_at'=>date('yy-m-d:h:m:s')];
             DB::table('votes')->insert($user);
             }
             return redirect()->route('home')->with('success','Your Vote is valuable for us!');
    }
}
                else {
                return redirect()->route('home')->with('error','You Can not Vote more than Two Persons');
                 }


    }
}
