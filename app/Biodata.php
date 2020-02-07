<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{      
	protected $table = 'biodatas';
     protected $fillable = ['fname','lname','email','mobile','designation','role'];

     function nomination(){
     	return $this->hasMany('App\nomination','user_id','id');
     }
}
