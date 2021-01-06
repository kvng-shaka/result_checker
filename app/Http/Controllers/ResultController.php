<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Facade\Auth;
use Illuminate\Support\Facade\Storage;
use Illuminate\Http\Facade\Input;
use Illuminate\Support\Facades\Response;
use App\User;
use DB;
use App\Result;
use PDF;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Result::all();
        return view('result.index')->with('results', $results);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('result.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function search()
    {   
        $name_filter  = $session_filter = $class_filter = "";
        $name_search = request('name');        
        $name_filter = ($name_search != "")?"and filename LIKE '%$name_search%'": "";

        $session_search = request('session');
        $session_filter = ($session_search != "")?"and session LIKE '%$session_search%'": "";

        $class_search = request('class');
        $class_filter = ($class_search != "")?"and class LIKE '%$class_search%'": "";
        //dd($search);
        //$results = Result::where('filename','LIKE','%'.$name_search.'%')->orWhere( 'session','LIKE','%'. $session_search .'%')->orWhere( 'class','LIKE','%'. $class_search .'%')->get();
        $results = DB::select("select * FROM results WHERE 1 $name_filter $session_filter $class_filter");
       // dd($results);
        return view('result.index')->with('results', $results);
    }


    public function store(Request $request)
    {
        //dd($request->all());
        $validatedData = $request->validate([
            'term'          => 'required',
            'class'         => 'required',
            'class_arm'     => 'required',
            'session'       => 'required',
            'file_upload.*'   => 'required|mimes:pdf|max:1999' 
        ]);

        // if validation is successful
        $filenames = array();
        if($request->file('file_upload')) {

            foreach($request->file('file_upload') as $file) {

                //Get Filename With the Extension
                $filenameWithExt = $file->getClientOriginalName();
                //Get just filename
                $name = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //Get size of file
                $fileSize = $file->getSize();
                //get just extension
                $extension = $file->getClientOriginalExtension();
                //Filename to store
                $fileNameToStore = $name.'_'.time().'.'.$extension;
                //Upload File
                $destinationPath = public_path('/file_upload');

                if($file->move($destinationPath, $fileNameToStore)) {

                    $filenames[] = $fileNameToStore;
                   
                    $saveResult = Result::create([
                        'filename' => $fileNameToStore,
                        'type' => $extension,
                        'size' => $fileSize,
                        'class' => $request->class,
                        'class_arm' => $request->class_arm,
                        'term' => $request->term,
                        'session' => $request->session
                    ]);
                    //dd($saveResult);
                }

            }

            return back()->with("success", "File uploaded successfully");
        }
         

    }
    public function getPdf($id)
    {
        $results = Result::find($id);
        //dd($results);
        $download = public_path().'/file_upload/' . $results->filename .'pdf';
        //dd($download);
        return $download->download($download);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $results = Result::find($id);
        //dd($results);
        $download = public_path().'/file_upload/' . $results->filename;
        //dd($download);
        return response()->download($download);
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Result::find($id);

        $result->delete();
        
        return redirect()->back()->with("success","Result Deleted succesfully");
    }
}
