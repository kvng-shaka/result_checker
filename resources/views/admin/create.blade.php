@extends('layout.app')

@section('content')

    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body card-block">
                            <form action= "{{ route('admin.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
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
                                    <div class="col-12 col-md-9">
                                        <input type="hidden" id="text-input" name="text-input" value="{{Auth::user()->id}}" class="form-control" disabled>
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Address:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="address" placeholder="Enter Your Address" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Phone Number:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="phone" placeholder="Enter Your Phone Number" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">City of Residence:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="city" placeholder="Enter City of Residence" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Date of Birth:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="date_of_birth" placeholder="DD / MM / YYYY" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Department:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="department" placeholder="Enter Your Department" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Qualification:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="qualification" placeholder="Enter Qualification" class="form-control">
                                       
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="text-input" class=" form-control-label">Experience:</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="text-input" name="experience" placeholder="Enter Experience" class="form-control">
                                       
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