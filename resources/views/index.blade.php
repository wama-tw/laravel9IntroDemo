@extends('home')

@section('title', '課程清單')

@section('content')
<h2>NCU課程清單</h2><hr>

@foreach ($courses as $c)
    課名：{{ $c->title }}　
    學分數：{{ $c->credit }}　
    說明：{{ $c->intro }}<br>
@endforeach
    
@endsection