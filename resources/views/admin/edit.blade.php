@extends('layout.app')

@section('content')

    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body card-block">
                            <form action= "{{route('admin.update', $admin->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
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
                                        <input type="text" id="text-input" name="fullname" value="{{$admin->fullname}}" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-12 col-md-9">
                                        <input type="hidden" id="text-input" name="text-input" value="{{Auth::user()->id}}" class="form-control" disabled>
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Address:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="address" value="{{$admin->address}}" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Phone Number:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="phone" value="{{$admin->phone}}" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">City of Residence:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="city" value="{{$admin->city}}" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Date of Birth:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="date_of_birth" value="{{$admin->date_of_birth}}" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Department:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="department" value="{{$admin->department}}" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Salary:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="salary" value="{{$admin->salary}}" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Qualification:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="qualification" value="{{$admin->qualification}}" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Experience:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="experience" value="{{$admin->experience}}" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Status:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <select name="status" class="form-control" value="{{$admin->status}}">
                                            <option value="">Select Your Status</option>
                                            <option value="active">Active</option>
                                            <option value="admin">Admin</option>
                                            <option value="user">User</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="file-input" class=" form-control-label">Upload Picture:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="file" id="file-input" name="image" class="form-control-file">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                        
                    </div>
            </div>
        </div>

    </div>
    
@endsection