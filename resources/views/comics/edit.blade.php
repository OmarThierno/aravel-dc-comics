@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1>Edit</h1>

        <form action="{{route('comics.update', ['comic' => $comic->id])}}" method="POST">
          @csrf
          @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Action Comics #1000: The Deluxe Edition"
                    name="title" value="{{ $comic->title }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="4" name="description" required>{{ $comic->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb"
                    placeholder="https://www.coverbrowser.com/image/action-comics/1-1.jpg" name="thumb"
                    value="{{ $comic->thumb }}" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="text" class="form-control" aria-label="price" name="price" placeholder="19.99"
                    value="{{ $comic->price }}" required>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" placeholder="Action Comics" name="series"
                    value="{{ $comic->series }}" required>
            </div>
            <div class="mb-3">
                <label for="sale-date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" id="sale-date" name="sale_date" value="{{ $comic->sale_date }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="type"></label>
                <select id="type" class="form-select" aria-label="Default select example" name="type" required>
                    <option>Select type</option>
                    <option @selected($comic->type === 'comic book') value="comic book">comic book</option>
                    <option @selected($comic->type === 'graphic novel')  value="graphic novel">graphic novel</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
@endsection
