<?php
    $id = Auth::user()->id;
    $superadmin = App\Superadmin::where('user_id','=',$id)->get();
    //dd($superadmin[0]);
    
?>
@extends('layout.app')

@section('content')

       <div class="main-content">
           <div class="container-fluid">
                <div class="row">
                    <div class="col-md-9">
                        @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('success')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="au-card au-card--no-shadow au-card--no-pad m-b-40">
                            <div class="au-card-title" style="background-image:url('images/bg-title-01.jpg');">
                                <div class="bg-overlay bg-overlay--blue"></div>
                                    <h3><i class="zmdi zmdi-account-profile"></i>Profile: </h3> 
                                </div>
                            </div>
            
                            <div class="au-card-wrap ">
                                <div class="au-card-inner">
                                    <div class="table-responsive">
                                    
                                            <table class="table table-profile">
                                                <tbody>
                                                    <tr>
                                                        <td>Admin Log-in Name:</td>
                                                        <td>{{Auth::user()->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>E-mail:</td>
                                                        <td>{{Auth::user()->email}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Username:</td>
                                                        <td>{{Auth::user()->name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Password:</td>
                                                        <td>{{Auth::user()->name}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <div class="au-task__footer">
                                            <form action="{{route('superadmin.destroy',$superadmin[0]->id)}}" method="POST">
                                                {{method_field("DELETE")}}    
                                                @csrf
                                                    <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete account?')">
                                                        Delete Account</button>
                                                </form>
                                            </div>
                                        
                                    </div>
                                </div>
                                <br>
                                <div>
                                    
                                </div>
                            </div>
                        </div>  
                    
                    </div>
                
                </div>
           </div>
       </div>
        
    

@endsection