@extends('layout.app')

@section('content')
<?php
    //$id = Auth::user()->id;
    //$student = App\Student::where('user_id','=',$id)->get();
    $students = App\Student::all();
?>
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!-- DATA TABLE -->
                <h3 class="title-5 m-b-35">data table</h3>
                <div class="table-data__tool">
                    <div class="table-data__tool-left">
                        <form action="/filter" method="GET">
                            <div class="input-group">
                                <input type="text" name="name" placeholder="  Search by Name">&nbsp;
                                <input type="text" name="class" placeholder="  Search by Class">&nbsp;
                                <span class="input-group-prepend">
                                    <button class="au-btn-filter" type="submit">
                                    <i class="zmdi zmdi-filter-list"></i>filters</button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="table-data__tool-right">
                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                            <a href="/student/create"><i class="zmdi zmdi-plus"></i>Create Student</a></button>
                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                           
                            <div class="dropDownSelect2"></div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive table-responsive-data2">
                    <table class="table table-data2">
                        <thead>
                            <tr>
                                <th>Fullname</th>
                                <th>Class</th>
                                <th>Age</th>
                                <th>Sex</th>
                                <th>Class Arm</th>
                                <th>Term</th>
                                <th>Session</th>
                                <th>Student ID</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                               <tr class="tr-shadow">
                                
                                    <td>{{$student->fullname}}</td>
                                    <td>
                                        {{$student->class}}
                                    </td>
                                    <td>
                                        {{$student->age}}
                                    </td>
                                    <td>{{$student->sex}}</td>
                                    <td>
                                        {{$student->class_arm}}
                                    </td>
                                    <td>
                                        {{$student->term}}
                                    </td>
                                    <td>
                                        {{$student->session}}
                                    </td>
                                    <td>
                                        {{$student->student_id}}
                                    </td>
                                    <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                <a href="/student/{{$student->id}}/edit"><i class="zmdi zmdi-edit"></i></a>
                                            </button>
                                            <form action="{{route('student.destroy',$student->id)}}" method="POST">
                                                {{method_field("DELETE")}}    
                                                @csrf
                                                <button class="item" data-toggle="tooltip" data-placement="top" onclick="return confirm('Are you sure you want to delete student?')" title="Delete">
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