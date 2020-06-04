@extends('layouts.helloapp')

@section('title', 'S3upload/Index')
    
@section('content')
    <p>{{$msg}}</p>
    <form action="/s3upload/other" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <input type="submit">
    </form>

    @foreach($data as $datum)
        <p>{{$datum}}</p>
    @endforeach

@endsection

@section('footer')
    copyright 2020
@endsection