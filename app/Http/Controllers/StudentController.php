<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Facade\Auth;
use Illuminate\Support\Facade\Storage;
use Illuminate\Http\Facade\Input;
use App\User;
use DB;
use App\Admin;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index')->with('students', $students);
    }

    public function filter()
    {
        $name_filter = request('name');
        $class_filter = request('class');
        //dd($search);
        $students = Student::where('fullname','LIKE','%'.$name_filter.'%')->orWhere ( 'class','LIKE','%'. $class_filter .'%')->get();
        //dd($result);
        return view('student.index')->with('students', $students);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.register_student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
            $user->fullname     = $request->fullname;
            $user->age          = $request->age;
            $user->class        = $request->class;
            $user->sex          = $request->sex;
            $user->class_arm    = $request->class_arm;
            $user->term         = $request->term;
            $user->session      = $request->session;
            $user->student_id   = $request->student_id;

            $user->save();

            //return redirect('/home');
            return response()->json(['success'=>'Student Successfully Created']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);
        //dd($student);
        return view('student.edit')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
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

            $user = Student::find($id);
            $user->fullname     = $request->fullname;
            $user->age          = $request->age;
            $user->class        = $request->class;
            $user->sex          = $request->sex;
            $user->class_arm    = $request->class_arm;
            $user->term         = $request->term;
            $user->session      = $request->session;
            $user->student_id   = $request->student_id;

            $user->save();

            //return redirect('/home');
            return response()->json(['success'=>'Student Successfully Updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::find($id);

        $student->delete();
        
        return redirect()->back()->with("success","Account Deleted succesfully");
    }
}
