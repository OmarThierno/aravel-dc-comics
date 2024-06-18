@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Comics</h1>
            <div>
                <a href="{{ route('comics.create') }}" class="btn btn-primary">Create</a>
                <a href="{{route('cestino')}}" class="btn btn-warning">Cestino</a>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-3 py-4">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card h-100 pb-5">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ $comic->series }}</p>
                            <p class="card-text">{{ $comic->type }}</p>
                            <div class="ms_btn d-flex">
                                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}"
                                    class="btn btn-primary ">Details</a>
                                <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}"
                                    class="btn btn-warning ">Modify</a>
                                <form class="ms_form" action="{{ route('comics.destroy', ['comic' => $comic->id]) }}"
                                    method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger clik-btn" data-bs-toggle="modal"
                                        data-bs-target="#delete-modal" data-comic-title="{{$comic->title}}">Delete</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

                <!-- Modal -->
                <div class="modal fade" id="delete-modal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div id="modal-title" class="modal-body">
                                Sei Sicuro di voler eliminare la card?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button id="btn-modal-delete" type="button" class="btn btn-danger">Elimina</button>
                            </div>
                        </div>
                    </div>
                </div>
        </div>



    </div>
@endsection
