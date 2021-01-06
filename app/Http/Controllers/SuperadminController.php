<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Facade\Auth;
use Illuminate\Support\Facade\Storage;
use Illuminate\Http\Facade\Input;
use App\User;
use DB;
use App\Superadmin;
use App\Admin;

class SuperadminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        //  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.create'); 
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
            'fullname' => 'required|max:255',
            'school_name' => 'required',
            'school_address' => 'required',
            'no_of_classroom' => 'required',
            'date_founded' => 'required',
            'school_logo' => 'image|nullable|max:1999', 
        ]);

        //Handle file upload
        if($request->hasFile('school_logo')){
            //Get Filename With the Extension
            $filenameWithExt = $request->file('school_logo')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //get just extension
            $extension = $request->file('school_logo')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload Image
            $path = $request->file('school_logo')->storeAs('public/school_logo', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }
        

        //dd($request->all());
        $savePost = new Superadmin();
        //dd($savePost);

        $savePost->fullname         = $request->fullname;
        $savePost->user_id          = Auth()->user()->id;
        $savePost->school_name      = $request->school_name;
        $savePost->school_address   = $request->school_address;
        $savePost->no_of_classroom  = $request->no_of_classroom;
        $savePost->date_founded     = $request->date_founded;
        $savePost->school_logo      = $fileNameToStore;
        $savePost->save();

        if($savePost){
            return redirect('/superadmin')->with("success","details added succesfully");
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
        $superadmin = Superadmin::find($id);
        //dd($superadmin);
        return view('superadmin.show')->with('superadmin', $superadmin);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $superadmin = Superadmin::find($id);
        //dd($superadmin);
        return view('superadmin.edit')->with('superadmin', $superadmin);
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
            'fullname' => 'required|max:255',
            'school_name' => 'required',
            'school_address' => 'required',
            'no_of_classroom' => 'required',
            'date_founded' => 'required', 
        ]);

        //Handle file upload
        if($request->hasFile('school_logo')){
            //Get Filename With the Extension
            $filenameWithExt = $request->file('school_logo')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //get just extension
            $extension = $request->file('school_logo')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload Image
            $path = $request->file('school_logo')->storeAs('public/school_logo', $fileNameToStore);
        }


        //dd($request->all());
        $savePost = Superadmin::find($id);
        //dd($savePost);

        $savePost->fullname         = $request->fullname;
        $savePost->user_id          = Auth()->user()->id;
        $savePost->school_name      = $request->school_name;
        $savePost->school_address   = $request->school_address;
        $savePost->no_of_classroom  = $request->no_of_classroom;
        $savePost->date_founded     = $request->date_founded;
        if($request->hasFile('school_logo')){
            $savePost->school_logo  = $fileNameToStore;
        }
        $savePost->save();

        if($savePost){
            return redirect('/superadmin')->with("success","details Updated succesfully");
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
        //dd($id);
        $superadmin = Superadmin::findorfail($id);
       // dd($superadmin);
        /*
        //Check for correct user
        if(Auth()->user()->id !== $superadmin->user_id){
            return redirect('/superadmin')->with('error', 'Unauthorized!');
        }

        if($savePost->school_logo != 'noimage.jpg'){
            //Delete Image
            Storage::delete('public/school_logo/'.$savePost->school_logo);
        }
        */
       
       $delete_action = $superadmin->delete();
        if($delete_action){
           $del =  DB::select("delete from users where id = '$superadmin->user_id'");
        }
        return redirect("/login")->with("success","Account Deleted succesfully");
    }
}
