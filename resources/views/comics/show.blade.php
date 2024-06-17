@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Show</h1>

        <div>{{ $comic->title }}</div>
        <img class="w-25" src="{{$comic->thumb}}" alt="{{$comic->title}}">
        <div>{{$comic->price}}</div>
    </div>
@endsection