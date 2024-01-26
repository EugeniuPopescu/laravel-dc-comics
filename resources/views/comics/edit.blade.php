@extends("layouts.app")

@section("content")
<div class="bg-success-subtle">

    <div class="container py-3">
        
        <div class="row">
            <h1>Edit Comic</h1>
        </div>

        <div class="row">
            <div class="col-6">
                <form action="{{ route("comics.update", $comic->id) }}" method="POST">
                    {{-- cross scripting request forgery --}}
                    @csrf

                    {{-- per la sintassi corretta --}}
                    @method("PUT")

                    {{-- title  --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}" >
                    </div>
                    {{-- description  --}}
                    <div class="mb-3">
                        <label for="description"  class="form-label">Description</label>
                        <textarea class="form-control" rows="2" id="description" name="description" value="{{ $comic->description }}"></textarea>
                    </div>
                    {{-- thumb  --}}
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}" >
                    </div>
                    {{-- price --}}
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}" >
                    </div>
                    {{-- series --}}
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}" >
                    </div>
                   {{-- sale_date --}}
                   <div class="mb-3">
                        <label for="sale" class="form-label">Sale Date (yyyy-mm-dd)</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}" >
                    </div>
                    {{-- type --}}
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}" >
                    </div>
                    
                    <button type="submit" class="btn btn-dark">Edit</button>
                  </form>
            </div>
        </div>


    </div>
</div>
@endsection