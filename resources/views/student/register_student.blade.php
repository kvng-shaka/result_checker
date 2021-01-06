@extends('layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 pt-5 mt-4" >
            <div class="card">
                <div class="card-header">
                    <h2 class="modal-title w-100 dark-grey-text font-weight-bold my-3"><strong>{{ __('Register Student') }}</strong></h2>
                </div>
                <div class="card-body">
                    <span id="succ_mess" style="color: green; font-size: 24px;font-weight:bold;"></span>
                    <span id="err_mess" style="color: red; font-size: 24px;font-weight:bold;"></span>               
                    <form id="createStudent" method="POST" action="{{ route('student.store') }}">
                        @csrf 
                        <div class="form-group row">
                            <label for="fullname" class="col-md-4 col-form-label text-md-right">{{ __('FullName') }}</label>

                            <div class="col-md-6">
                                <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" value="{{ old('fullname') }}" required autocomplete="fullname" autofocus>

                                @error('fullname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="age" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                            <div class="col-md-6">
                                <input id="age" type="text" class="form-control @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" required autocomplete="email">

                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="class" class="col-md-4 col-form-label text-md-right">{{ __('Class') }}</label>

                            <div class="col-md-6">
                                <select id="class" class="form-control{{ $errors->has('class') ? 'is-invalid' : '' }}" name="class">
                                    <option value="">Select Class</option>
                                    <option value="jss1">J.S.S.1</option>
                                    <option value="jss2">J.S.S.2</option>
                                    <option value="jss3">J.S.S.3</option>
                                    <option value="ss1">S.S.S.1</option>
                                    <option value="ss2">S.S.S.2</option>
                                    <option value="ss3">S.S.S.3</option>
                                </select>

                                @error('class')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="sex" class="col-md-4 col-form-label text-md-right">{{ __('Sex') }}</label>

                            <div class="col-md-6">
                                <select id="sex" class="form-control{{ $errors->has('sex') ? 'is-invalid' : '' }}" name="sex">
                                    <option value="">Select Gender</option>
                                    <option value="female">Female</option>
                                    <option value="male">Male</option>
                                </select>

                                @error('sex')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="class_arm" class="col-md-4 col-form-label text-md-right">{{ __('Class Arm') }}</label>

                            <div class="col-md-6">
                                <select id="class_arm" class="form-control{{ $errors->has('class_arm') ? 'is-invalid' : '' }}" name="class_arm">
                                    <option value="">Select Class Arm</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                    <option value="D">D</option>
                                    <option value="E">E</option>
                                    <option value="F">F</option>
                                </select>

                                @error('class_arm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="term" class="col-md-4 col-form-label text-md-right">{{ __('Term') }}</label>

                            <div class="col-md-6">
                                <select id="term" class="form-control{{ $errors->has('term') ? 'is-invalid' : '' }}" name="term">
                                    <option value="">Select Term</option>
                                    <option value="first">First Term</option>
                                    <option value="second">Second Term</option>
                                    <option value="third">Third Term</option>
                                </select>

                                @error('term')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="session" class="col-md-4 col-form-label text-md-right">{{ __('Session') }}</label>

                            <div class="col-md-6">
                                <select id="session" class="form-control{{ $errors->has('session') ? 'is-invalid' : '' }}" name="session">
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

                                @error('session')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> 
                        </div>

                        <div class="form-group row">
                            <label for="student_id" class="col-md-4 col-form-label text-md-right">{{ __('Student ID') }}</label>

                            <div class="col-md-6">
                                <input id="student_id" type="text" class="form-control @error('student_id') is-invalid @enderror" name="student_id" required autocomplete="new-password">

                                @error('student_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>

@endsection
