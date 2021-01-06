<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'id';
    protected $table      = 'students';
    protected $timestamp  = true;

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function superadmin(){

        return $this->belongsTo('App\Superadmin');
    }

    public function admin(){

        return $this->belongsTo('App\Admin');
    }
}
