<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Superadmin extends Model
{
    protected $primaryKey = 'id';
    protected $table      = 'superadmins';
    protected $timestamp  = true;

    public function user(){

        return $this->belongsTo('App\User');
    }
    public function admin(){

        return $this->belongsTo('App\Admin');
    }
}
