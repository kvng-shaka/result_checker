@extends('layout.app')

@section('content')
<div class="container">
    <div>
        <img src="/storage/file_upload/{{$results->filename}}" style="width:100%" class="img-responsive"/> --}}
        <iframe src="/public/file_upload/{{$results->filename}}.{{$results->type}}" frameborder="0"></iframe> --}}
        <embed src="/storage/file_upload/{{$results->filename}}" style="width:900px; height:800px;" frameborder="0">
    </div>
</div>

@endsection