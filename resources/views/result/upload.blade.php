@extends('layout.app')

@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12 m-auto">
                        <form action="{{ route('result.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-header"><h3 class="text-left title-2">Upload Result</h3></div>
                                    <div class="card-body">
                                        <!-- print success message after file upload  -->
                                        @if(Session::has('success'))
                                            <div class="alert alert-success">
                                                {{ Session::get('success') }}
                                                @php
                                                    Session::forget('success');
                                                @endphp
                                            </div>
                                        @endif

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        
                                            
                                            <div class="form-group">
                                                <label for="file_upload">Select Files (can attach more than one):</label>
                                                <input name="file_upload[]" id="file_upload" type="file" multiple="">
                                            </div>
                    
                                            <div class="form-group">
                                                <label for="term" class="control-label mb-1">Examination Term:</label>
                                                <select id="term" class="form-control" name="term">
                                                    <option value="">Select Term</option>
                                                    <option value="first">First Term</option>
                                                    <option value="second">Second Term</option>
                                                    <option value="third">Third Term</option>
                                                </select>
                                            </div>
            
                                            <div class="form-group">
                                                <label for="class" class="control-label mb-1">Class:</label>
                                                <select id="class" class="form-control" name="class">
                                                    <option value="">Select Class</option>
                                                    <option value="jss1">J.S.S.1</option>
                                                    <option value="jss2">J.S.S.2</option>
                                                    <option value="jss3">J.S.S.3</option>
                                                    <option value="ss1">S.S.S.1</option>
                                                    <option value="ss2">S.S.S.2</option>
                                                    <option value="ss3">S.S.S.3</option>
                                                </select>
                                            </div>
            
                                            <div class="form-group">
                                                <label for="class_arm" class="control-label mb-1">Class Arm:</label>
                                                <select id="class_arm" class="form-control" name="class_arm">
                                                    <option value="">Select Class Arm</option>
                                                    <option value="A">A</option>
                                                    <option value="B">B</option>
                                                    <option value="C">C</option>
                                                    <option value="D">D</option>
                                                    <option value="E">E</option>
                                                    <option value="F">F</option>
                                                </select>
                                            </div>
            
                                            <div class="form-group">
                                                <label for="session" class="control-label mb-1">Academic Session:</label>
                                                <select id="session" class="form-control" name="session">
                                                    <option value="">Select Session</option>
                                                    <option value="2015/2016">2015/2016</option>
                                                    <option value="2016/2017">2016/2017</option>
                                                    <option value="2017/2018">2017/2018</option>
                                                    <option value="2018/2019">2018/2019</option>
                                                    <option value="2019/2020">2019/2020</option>
                                                    <option value="2020/2021">2020/2021</option>
                                                    <option value="2021/2022">2021/2022</option>
                                                    <option value="2022/2023">2022/2023</option>
                                                    <option value="2023/2024">2023/2024</option>
                                                    <option value="2024/2025">2024/2025</option>
                                                    <option value="2025/2026">2025/2026</option>
                                                    <option value="2026/2027">2026/2027</option>
                                                    <option value="2027/2028">2027/2028</option>
                                                    <option value="2028/2029">2028/2029</option>
                                                    <option value="2029/2030">2029/2030</option>
                                                </select>
                                            </div>
            
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        Upload
                                                    </button>
                                                </div>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>

@endsection