<?php
    $id = Auth::user()->id;
    //$admin = App\Admin::where('user_id','=',$id)->get();
    $admin = App\Admin::all();
    //dd($admin);
    
?>
@extends('layout.app')

@section('content')

<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-5 m-b-35">admin table</h3>
                <div class="table-data__tool">
                    <div class="table-data__tool-left">
                        <div class="rs-select2--light rs-select2--md">
                            <select class="js-select2" name="property">
                                <option selected="selected">All Properties</option>
                                <option value="">Option 1</option>
                                <option value="">Option 2</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <div class="rs-select2--light rs-select2--sm">
                            <select class="js-select2" name="time">
                                <option selected="selected">Today</option>
                                <option value="">3 Days</option>
                                <option value="">1 Week</option>
                            </select>
                            <div class="dropDownSelect2"></div>
                        </div>
                        <button class="au-btn-filter">
                            <i class="zmdi zmdi-filter-list"></i>filters</button>
                    </div>
                </div>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>email</th>
                                <th>Address</th>
                                <th>phone</th>
                                <th>city</th>
                                <th>dpartment</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admin as $admin)
                               <tr class="tr-shadow">
                                <td>{{$admin->user_name}}</td>
                                <td>
                                    <span class="block-email">{{$admin->user_email}}</span>
                                </td>
                                <td>{{$admin->address}}</td>
                                <td>{{$admin->phone}}</td>
                                <td>{{$admin->city}}</td>
                                <td>{{$admin->department}}</td>
                                <td>
                                    <div class="table-data-feature">
                                        {{-- <button class="item" data-toggle="tooltip" data-placement="top" title="Send">
                                            <i class="zmdi zmdi-mail-send"></i>
                                        </button> --}}
                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                            <a href="/admin/{{$admin->id}}/edit"><i class="zmdi zmdi-edit"></i></a>
                                        </button>
                                        <form action="{{route('admin.destroy',$admin->id)}}" method="POST">
                                            {{method_field("DELETE")}}    
                                            @csrf
                                            <button class="item" data-toggle="tooltip" data-placement="top" onclick="return confirm('Are you sure you want to delete account?')" title="Delete">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            <tr class="spacer"></tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- END DATA TABLE -->
            </div>
        </div>
    </div>

</div>
@endsection