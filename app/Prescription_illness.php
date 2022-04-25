<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription_illness extends Model
{

	    protected $table = 'prescription_illness';

     public function Illness(){
    	        return $this->hasOne('App\Illness', 'id', 'illness_id');
    }
}
