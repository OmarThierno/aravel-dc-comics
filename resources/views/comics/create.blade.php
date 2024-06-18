@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <h1>Create</h1>

        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input value="{{old('title')}}" type="text" class="form-control 
                @error('title') 
                    is-invalid 
                @enderror" id="title" placeholder="Action Comics #1000: The Deluxe Edition"
                name="title" required>

                @error('title')
                    <div id="title-error" class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" rows="3" name="description">{{old('description')}}</textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <input type="text" class="form-control" id="thumb"
                    placeholder="https://www.coverbrowser.com/image/action-comics/1-1.jpg" name="thumb" value="{{old('thumb')}}">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="text" class="form-control" aria-label="price" name="price" placeholder="19.99" value="{{old('price')}}" required>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" placeholder="Action Comics" name="series" value="{{old('series')}}">
            </div>
            <div class="mb-3">
                <label for="sale-date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" id="sale-date" name="sale_date" value="{{old('sale_date')}}" required>
            </div>
            <div class="mb-3">
                <label for="type"></label>
                <select id="type" class="form-select" aria-label="Default select example" name="type" required>
                    <option>Select type</option>
                    <option @selected(old('type' === 'comic book')) value="comic book">comic book</option>
                    <option @selected(old('type' === 'graphic novel')) value="graphic novel">graphic novel</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>

    </div>
@endsection
