@extends('layout.app')

@section('content')

    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body card-block">
                            <form action= "{{ route('superadmin.update', $superadmin->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                <input type="hidden" name="_method" value="PUT">
                                @csrf
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Log-in Name:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                     <input type="text" id="text-input" name="text-input" value="{{Auth::user()->name}}" placeholder="Text" class="form-control" disabled>
                                    
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Email:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                     <input type="text" id="text-input" name="text-input" value="{{Auth::user()->email}}" class="form-control" disabled>
                                     
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Role:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                     <input type="text" id="text-input" name="text-input" value="{{Auth::user()->is_admin}}" class="form-control" disabled>
                                      
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="fullname" class=" form-control-label">Full Name:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="fullname" value="{{$superadmin->fullname}}" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-12 col-md-9">
                                        <input type="hidden" id="text-input" name="text-input" value="{{Auth::user()->id}}" class="form-control" disabled>
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">School Name:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="school_name" value="{{$superadmin->school_name}}" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">School Address:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="school_address" value="{{$superadmin->school_address}}" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Number of Classroom:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="no_of_classroom" value="{{$superadmin->no_of_classroom}}" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Date Founded:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="date_founded" value="{{$superadmin->date_founded}}" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">Upload School Logo:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-input" name="school_logo" class="form-control-file">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Update
                                    </button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
            </div>
        </div>

    </div>
    
@endsection