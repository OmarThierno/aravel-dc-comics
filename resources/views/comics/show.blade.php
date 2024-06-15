@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Show</h1>

        <div>{{ $comic->title }}</div>
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    </div>
@endsection