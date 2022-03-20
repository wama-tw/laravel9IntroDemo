@extends('home')

@section('title', '課程內容 -- {{ $course->title }}')

@section('content')
    <h2>{{ $course->title }}</h2>
    <hr>

    <div>
        課名： {{ $course->title }} <br>
        學分： {{ $course->credit }} <br>
        說明： {{ $course->intro }} <br>
    </div>

    <div>
        <br>
        <a href="{{ route('course.edit', ['course' => $course->id]) }}">修改課程資料</a>
        <a href="{{ route('course.index') }}">回課程列表</a>
    </div>
@endsection
