<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nomination extends Model
{
    protected $fillable = ['user_id','nomination_month','nominated_for'];
    protected $table= 'nominations';

    public function Biodata()
    {
    	return $this->belongsTo('App\Biodata','user_id','id');

    }
 }
  