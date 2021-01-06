<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Facade\Auth;
use Illuminate\Support\Facade\Storage;
use Illuminate\Http\Facade\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;

class NewAdminController extends Controller
{
    public function create(){

        return view('/register_admin');
    }

    public function admin_store(Request $request)
    {
        //dd($request->all());
        $this->validate($request,[

            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
            'is_admin' => ['required', 'string', 'max:255'],

        ]);

            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->is_admin = $request->is_admin;

            $user->save();

            return redirect('/home');
    }
}
