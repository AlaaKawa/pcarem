<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Illness extends Model
{
    protected $table = 'illness';
    protected $fillable = ['name_illness','illness_abriviation'];

    public $timestamps=false;

}