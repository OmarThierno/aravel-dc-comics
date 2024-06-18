@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1>Edit</h1>

        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
            @csrf
            @method('PUT')

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Action Comics #1000: The Deluxe Edition"
                    name="title" value="{{ old('title', $comic->title) }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="4" name="description">{{ old('description', $comic->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb"
                    placeholder="https://www.coverbrowser.com/image/action-comics/1-1.jpg" name="thumb"
                    value="{{ old('thumb', $comic->thumb) }}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="text" class="form-control" aria-label="price" name="price" placeholder="19.99"
                    value="{{ old('price', $comic->price) }}">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" placeholder="Action Comics" name="series"
                    value="{{ old('series', $comic->series) }}">
            </div>
            <div class="mb-3">
                <label for="sale-date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" id="sale-date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
            </div>
            <div class="mb-3">
                <label for="type"></label>
                <select id="type" class="form-select" aria-label="Default select example" name="type">
                    <option>Select type</option>
                    <option @selected(old('type', $comic->type) === 'comic book') value="comic book">comic book</option>
                    <option @selected(old('type', $comic->type) === 'graphic novel') value="graphic novel">graphic novel</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection
