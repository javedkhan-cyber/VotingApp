<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use DB;

class frontendController extends Controller
{
    public function aboutUs(){

    return view('about');
    }
    public function contactUs(){

    return view('contact');
    }
     public function contactStore(Request $request)
    {   
         
          $name = $request->name;
          $email = $request->email;
          $subject = $request->subject;
          $message = $request->message;
       
          $data= array('name'=>$name,'email'=>$email,'subject'=>$subject,'message'=>$message,'created_at'=>date('yy-m-d:h:m:s'),'updated_at'=>date('yy-m-d:h:m:s'));

            DB::table('contacts')->insert($data);
             return redirect()->route('home.contact')->with('success','Your Message Has been sent');
       
    }
}
