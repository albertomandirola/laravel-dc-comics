@extends('layout.app')

@section('content')
    <form action="{{ route('comics.update', ['comic' => $comic['id']]) }}" method="POST">
        @csrf

        @method('PUT')
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Modify Title</label>
                        <input type="text" class="form-control" name="title" id="formGroupExampleInput"
                            value='{{ $comic->title }}' required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Modify Series</label>
                        <input type="text" class="form-control" name="series" id="formGroupExampleInput"
                            value='{{ $comic->series }}' required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Modify Type</label>
                        <input type="text" class="form-control" name="type" id="formGroupExampleInput"
                            value='{{ $comic->type }}' required>
                    </div>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" name='description' id="floatingTextarea2" style="height: 100px" required>{{ "$comic->description" }} </textarea>
                    <label for="floatingTextarea2">Description</label>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Modify thumb</label>
                    <input type="text" class="form-control" name="thumb" id="formGroupExampleInput"
                        value='{{ $comic->thumb }}' required>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Modify Price</label>
                        <input type="text" class="form-control" name="price" id="formGroupExampleInput"
                            value='{{ $comic->price }}' required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Modify Sale date</label>
                        <input type="text" class="form-control" name="sale_date" id="formGroupExampleInput"
                            value='{{ $comic->sale_date }}' required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name='writers' id="floatingTextarea2" style="height: 100px" required>{{ "$comic->writers" }}</textarea>
                        <label for="floatingTextarea2">writers</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name='artists' id="floatingTextarea2" style="height: 100px" required>{{ "$comic->artists" }}</textarea>
                        <label for="floatingTextarea2">artist</label>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">modifica</button>
                </div>

            </div>

        </div>

    </form>
@endsection
