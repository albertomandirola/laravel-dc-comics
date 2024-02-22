@extends('layout.app')

@section('content')
    <form action="{{ route('comics.store') }}" method="post">
        @csrf
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Insert Title</label>
                        <input type="text" class="form-control" name="title" id="formGroupExampleInput"
                            placeholder="Title" value="{{ @old('title') }}" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Insert Series</label>
                        <input type="text" class="form-control" name="series" id="formGroupExampleInput"
                            placeholder="Series" value="{{ @old('series') }}" required>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Insert Type</label>
                        <input type="text" class="form-control" name="type" value="{{ @old('type') }}"
                            id="formGroupExampleInput" placeholder="Type" required>
                    </div>
                </div>

                <div class="form-floating mb-3">
                    <textarea class="form-control" name='description' placeholder="Leave a comment here" id="floatingTextarea2"
                        style="height: 100px" required> {{ @old('description') }} </textarea>
                    <label for="floatingTextarea2">Description</label>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Insert thumb</label>
                    <input type="text" class="form-control" name="thumb" value="{{ @old('thumb') }}"
                        id="formGroupExampleInput" placeholder="thumb" required>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Insert Price</label>
                        <input type="text" class="form-control" name="price" value="{{ @old('price') }}"
                            id="formGroupExampleInput" placeholder="Price" required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Insert Sale date</label>
                        <input type="text" class="form-control" name="sale_date" value="{{ @old('sale_date') }}"
                            id="formGroupExampleInput" placeholder="ex 2000-12-25" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name='writers' placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px" required> {{ @old('writers') }} </textarea>
                        <label for="floatingTextarea2">writers</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-floating mb-3">
                        <textarea class="form-control" name='artists' placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px" required> {{ @old('artists') }} </textarea>
                        <label for="floatingTextarea2">artist</label>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Crea</button>
                </div>

            </div>

        </div>

    </form>
@endsection
