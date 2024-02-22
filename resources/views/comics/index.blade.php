@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content d-flex align-items-center">
                    <div class="fw-bold">Aggiungi un nuovo fumetto: </div>
                    <a class="btn btn-primary fw-bold m-3" href="{{ Route('comics.create') }}" role="button">Aggiungi un
                        fumetto</a>
                </div>
            </div>
            @foreach ($comics as $comic)
                <div class="col-2 my-3">
                    <div class="card" style="width: 100%; height:330px">
                        <img style="height: 200px;" src="{{ $comic->thumb }}" class="card-img-top"
                            alt="{{ $comic->title }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <a href="{{ route('comics.show', ['comic' => $comic['id']]) }}"
                                class=" btn btn-sm btn-primary">details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
