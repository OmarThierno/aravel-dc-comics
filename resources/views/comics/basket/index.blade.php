@extends('layouts.app')

@section('content')
    <div class="container my-5">
      <div class="d-flex justify-content-between align-items-center">
        <h1>Cestino</h1>
        <a href="{{route('comics.index')}}" class="btn btn-primary">Torna alla home</a>
      </div>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-3 py-4">
        @foreach ($comics as $comic)
          <div class="col">
            <div class="card">
              <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
              <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->series }}</p>
                <p class="card-text">{{ $comic->type }}</p>
                <div class="d-flex justify-content-center gap-3">
                  <form action="{{route('restoration', ['bascket'=> $comic->id])}}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="btn btn-success">restoration</button>
                  </form>
                  <form action="{{ route('delete', ['bascket' => $comic->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

                </div>
              </div>
            </div>
          </div>
          @endforeach
      </div>
    </div>
@endsection