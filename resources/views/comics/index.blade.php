@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h1>Comics</h1>
        <a href="{{route('comics.create')}}" class="btn btn-primary">Create</a>
      </div>
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 row-cols-xl-6 g-5 py-4">
        @foreach ($comics as $comic)
        <div class="col">
          <div class="card h-100 pb-5">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
            <div class="card-body">
              <h5 class="card-title">{{$comic->title}}</h5>
              <p class="card-text">{{$comic->series}}</p>
              <p class="card-text">{{$comic->type}}</p>
              <div class="ms_btn d-flex">
                <a href="{{route('comics.show', ['comic' => $comic->id])}}" class="btn btn-primary ">Details</a>
                <a href="{{route('comics.edit', ['comic' => $comic->id])}}" class="btn btn-warning ">Modify</a>
                <form action="{{route('comics.destroy', ['comic'=> $comic->id])}}" method="POST">
                  @method('DELETE')
                  @csrf
                  <button class="btn btn-danger">Delete</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
@endsection