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

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::all(); //Getting admin details with user id
        $student = Student::all();
        //dd($admin_recs);
        return view('admin.index')->with('admin', $admin)->with('student', $student);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
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
        $validatedData = $request->validate([
            'address'        => 'required',
            'phone'          => 'required',
            'city'           => 'required',
            'date_of_birth'  => 'required',
            'department'     => 'required',
            'qualification'  => 'required',
            'experience'     => 'required',
            //'image'          => 'image|nullable|max:1999', 
        ]);

        //Handle file upload
        // if($request->hasFile('image')){
        //     //Get Filename With the Extension
        //     $filenameWithExt = $request->file('image')->getClientOriginalName();
        //     //Get just filename
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        //     //get just extension
        //     $extension = $request->file('image')->getClientOriginalExtension();
        //     //Filename to store
        //     $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //     //upload Image
        //     $path = $request->file('image')->storeAs('public/image', $fileNameToStore);
        // }else{
        //     $fileNameToStore = 'noimage.jpg';
        // }

        //dd($request->all());
        $savePost = new Admin();
        //dd($savePost);

        $savePost->user_id          = Auth()->user()->id;
        $savePost->user_name        = Auth()->user()->name;
        $savePost->user_email       = Auth()->user()->email;
        $savePost->user_is_admin    = Auth()->user()->is_admin;
        $savePost->address          = $request->address;
        $savePost->phone            = $request->phone;
        $savePost->city             = $request->city;
        $savePost->date_of_birth    = $request->date_of_birth;
        $savePost->department       = $request->department;
        $savePost->qualification    = $request->qualification;
        $savePost->experience       = $request->experience;
        //$savePost->image            = $fileNameToStore;
        $savePost->save();

        if($savePost){
            return redirect('/admin')->with("success","details added succesfully");
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $admin = Admin::find($id);
        //dd($admin);
        return view('admin.show')->with('admin', $admin);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Admin::find($id);
        //dd($admin);
        return view('admin.edit')->with('admin', $admin);
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
        $validatedData = $request->validate([
            'address'        => 'required',
            'phone'          => 'required',
            'city'           => 'required',
            'date_of_birth'  => 'required',
            'department'     => 'required',
            'qualification'  => 'required',
            'experience'     => 'required',
            //'image'          => 'image|nullable|max:1999', 
        ]);

        //Handle file upload
        /* if($request->hasFile('image')){
            //Get Filename With the Extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //get just extension
            $extension = $request->file('image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload Image
            $path = $request->file('image')->storeAs('public/image', $fileNameToStore);
        } */

        //dd($request->all());
        $savePost = new Admin();
        //dd($savePost);

        $savePost->user_id          = Auth()->user()->id;
        $savePost->user_name        = Auth()->user()->name;
        $savePost->user_email       = Auth()->user()->email;
        $savePost->user_is_admin    = Auth()->user()->is_admin;
        $savePost->address          = $request->address;
        $savePost->phone            = $request->phone;
        $savePost->city             = $request->city;
        $savePost->date_of_birth    = $request->date_of_birth;
        $savePost->department       = $request->department;
        $savePost->qualification    = $request->qualification;
        $savePost->experience       = $request->experience;

        if($request->hasFile('image')){
            $savePost->image  = $fileNameToStore;
        }

        $savePost->save();

        if($savePost){
            return redirect('/admin')->with("success","details Updated succesfully");
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = Admin::find($id);

        $delete_action = $admin->delete();
        if($delete_action){
           $del =  DB::select("delete from users where id = '$admin->user_id'");
        }
        return redirect("/login")->with("success","Account Deleted succesfully");
    }
}
