@extends('home')

@section('title', '課程清單')

@section('content')
    <h2>NCU課程清單</h2>
    <hr>

    @foreach ($courses as $course)
        <a href="{{ route('courses.show', ['course' => $course->id]) }}">
            課名：{{ $course->title }}
            學分數：{{ $course->credit }}
            說明：{{ $course->intro }}<br>
        </a>
    @endforeach

@endsection
