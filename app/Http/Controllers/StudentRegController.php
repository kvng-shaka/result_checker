<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Facade\Auth;
use Illuminate\Support\Facade\Storage;
use Illuminate\Http\Facade\Input;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Student;

class StudentRegController extends Controller
{
    public function create(){

        return view('/register_student');
    }

    public function student_store(Request $request)
    {
        //dd($request->all());
        $this->validate($request,[

            'fullname' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string', 'max:255'],
            'class' => ['required', 'string', 'max:255'],
            'sex' => ['required', 'string', 'max:255'],
            'class_arm' => ['required', 'string', 'max:255'],
            'term' => ['required', 'string', 'max:255'],
            'session' => ['required', 'string', 'max:255'],
            'student_id' => ['required', 'string', 'max:255'],

        ]);

            $user = new Student();
            $user->fullname = $request->fullname;
            $user->age      = $request->age;
            $user->class    = $request->class;
            $user->sex      = $request->sex;
            $user->class_arm = $request->class_arm;
            $user->term     = $request->term;
            $user->session  = $request->session;
            $user->student_id = $request->student_id;

            $user->save();

            return redirect('/home');
    }
}
