@extends('layout.app')

@section('content')
    <form action="{{ route('comics.update', ['comic' => $comic['id']]) }}" method="POST">
        @csrf

        @method('PUT')
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li> {{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Modify Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                            id="formGroupExampleInput" value='{{ $comic->title }}'>
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Modify Series</label>
                        <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                            id="formGroupExampleInput" value='{{ $comic->series }}'>
                        @error('series')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Modify Type</label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror" name="type"
                            id="formGroupExampleInput" value='{{ $comic->type }}'>
                        @error('type')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control @error('description') is-invalid @enderror" name='description' id="floatingTextarea2"
                        style="height: 100px">{{ "$comic->description" }} </textarea>
                    <label for="floatingTextarea2">Description</label>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Modify thumb</label>
                    <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                        id="formGroupExampleInput" value='{{ $comic->thumb }}'>
                    @error('thumb')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror

                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Modify Price</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                            id="formGroupExampleInput" value='{{ $comic->price }}'>
                        @error('price')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Modify Sale date</label>
                        <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
                            id="formGroupExampleInput" value='{{ $comic->sale_date }}'>
                        @error('sale_date')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('writers') is-invalid @enderror" name='writers' id="floatingTextarea2"
                            style="height: 100px">{{ "$comic->writers" }}</textarea>
                        <label for="floatingTextarea2">writers</label>
                        @error('writers')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <textarea class="form-control @error('artist') is-invalid @enderror" name='artists' id="floatingTextarea2"
                            style="height: 100px">{{ "$comic->artists" }}</textarea>
                        <label for="floatingTextarea2">artist</label>
                        @error('artists')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">modifica</button>
                </div>

            </div>

        </div>

    </form>
@endsection
