<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'filename','type','size','class','class_arm','term','session'
      ];
 
}
