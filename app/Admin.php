<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $primaryKey = 'id';
    protected $table      = 'admins';
    protected $timestamp  = true;

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function superadmin(){

        return $this->belongsTo('App\Superadmin');
    }
}
