@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 justify-content-center d-flex position-relative">
                <div class="card mb-3" style="max-width: 90%;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $comic->title }}</h5>
                                <p class="card-text">{{ $comic->description }}</p>
                            </div>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Best Price:{{ $comic->price }}</li>
                                <li class="list-group-item">series: {{ $comic->series }}</li>
                                <li class="list-group-item">type: {{ $comic->type }}</li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </div>
                    <div class="button-container position-absolute bottom-0 end-0 d-flex">
                        <a class="btn btn-warning  m-2" href="{{ route('comics.edit', ['comic' => $comic['id']]) }}">Edit
                            comic</a>
                        <form class=" m-2" action="{{ route('comics.destroy', ['comic' => $comic['id']]) }}"
                            method="POST" onsubmit="return confirm('sei sicuro di voler eliminare il fumetto?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>




                </div>
            </div>
        </div>
    @endsection
