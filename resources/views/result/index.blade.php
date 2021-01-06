@extends('layout.app')

@section('content')
<?php
    //$id = Auth::user()->id;
    //$student = App\Student::where('user_id','=',$id)->get();
    //$result = App\Result::all();
?>
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('success')}}
                        </div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- RESULT TABLE -->
                    <h3 class="title-5 m-b-35">Result table</h3>
                    <div class="table-data__tool">
                        <form action="/search" method="GET">
                            <div class="input-group">
                                <input type="text" name="name" placeholder="  Search by Filename">&nbsp;
                                <input type="text" name="session" placeholder="  Search by Session">&nbsp;
                                <input type="text" name="class" placeholder="  Search by Class">&nbsp;
                                <span class="input-group-prepend">
                                    <button class="au-btn-filter" type="submit">
                                    <i class="zmdi zmdi-filter-list"></i>filters</button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    <th>Filename</th>
                                    {{-- <th>Type</th>
                                    <th>Size</th> --}}
                                    <th>Class</th>
                                    <th>Class Arm</th>
                                    <th>Term</th>
                                    <th>Session</th>
                                    <th>Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as $result)
                                <tr class="tr-shadow">
                                    
                                    <td>{{$result->filename}}</td>
                                    {{-- <td>{{$result->type}}</td>
                                    <td>{{$result->size}}</td> --}}
                                    <td>{{$result->class}}</td>
                                    <td>{{$result->class_arm}}</td>
                                    <td>{{$result->term}}</td>
                                    <td>{{$result->session}}</td>
                                    <td>{{$result->created_at}}</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Download">
                                                <a href="/result/{{$result->id}}"><i class="zmdi zmdi-download"></i></a>
                                            </button>
                                            <form action="{{route('result.destroy',$result->id)}}" method="POST">
                                                {{method_field("DELETE")}}    
                                                @csrf
                                                <button class="item" data-toggle="tooltip" data-placement="top" onclick="return confirm('Are you sure you want to delete result?')" title="Delete">
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
                    <!-- END RESULT TABLE -->
                </div>
            </div>
        </div>

    </div>

@endsection