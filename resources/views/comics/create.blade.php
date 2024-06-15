@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1>Create</h1>

        <form action="{{route('comics.store')}}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" placeholder="Action Comics #1000: The Deluxe Edition"
                    name="title" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description" required></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb"
                    placeholder="https://www.coverbrowser.com/image/action-comics/1-1.jpg" name="thumb" required>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="text" class="form-control" aria-label="price" name="price" placeholder="19.99" required>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" placeholder="Action Comics"
                    name="series" required>
            </div>
            <div class="mb-3">
                <label for="sale-date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" id="sale-date"
                    name="sale_date" required>
            </div>
            <div class="mb-3">
                <label for="type"></label>
                <select id="type" class="form-select" aria-label="Default select example" name="type" required>
                    <option selected>Select type</option>
                    <option value="comic book">comic book</option>
                    <option value="graphic novel">graphic novel</option>
                  </select>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

    </div>
@endsection
