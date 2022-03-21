@extends('home')

@section('title', '修改課程 -- {{ $course->title }}')

@section('content')
    <h2>修改課程 -- {{ $course->title }}</h2>
    <hr>

    <form action="{{ route('course.update', ['course' => $course->id]) }}" method="POST">
        @csrf
        課名：<input type="text" name="title" value="{{ $course->title }}"><br>
        學分：<input type="text" name="credit" value="{{ $course->credit }}"><br>
        說明：<input type="text" name="intro" value="{{ $course->intro }}"><br>

        <input type="submit" value="確認送出">
    </form>

@endsection
