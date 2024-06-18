@extends('layouts.app')

@section('content')
    <div class="container my-5">
      <h1>Cestino</h1>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-3 py-4">
        @foreach ($comics as $comic)
          <div class="col">
            <div class="card">
              <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
              <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->series }}</p>
                <p class="card-text">{{ $comic->type }}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          @endforeach
      </div>
    </div>
@endsection