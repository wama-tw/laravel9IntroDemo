@extends('home')

@section('title', '建立課程')

@section('content')
    <h2>NCU課程建立</h2>
    <hr>

    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        課名：<input type="text" name="title"><br>
        學分：<input type="text" name="credit"><br>
        說明：<input type="text" name="intro"><br>

        <input type="submit" value="確認送出">
    </form>

@endsection
