<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voter extends Model
{
	protected $table = 'votes';
    
    protected $fillable = ['nominee_id','voter_id'];

	public function User(){
    	return $this->belongsTo('App\user','voter_id','id');
    }

    public function nomination(){
    	return $this->belongsTo('App\Biodata','nominee_id','id');
    }

    
}
