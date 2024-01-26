@extends("layouts.app")

@section("content")
<div class="bg-dark-subtle">

    <div class="container py-3">
        
        <div class="row">
            <h1>Insert new Comic</h1>
        </div>

        <div class="row">
            <div class="col-6">
                <form action="{{ route("comics.store") }}" method="POST">
                    {{-- cross scripting request forgery --}}
                    @csrf

                    {{-- title  --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" >
                    </div>
                    {{-- description  --}}
                    <div class="mb-3">
                        <label for="description"  class="form-label">Description</label>
                        <textarea class="form-control" rows="2" id="description" name="description"></textarea>
                    </div>
                    {{-- thumb  --}}
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" >
                    </div>
                    {{-- price --}}
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control" id="price" name="price" >
                    </div>
                    {{-- series --}}
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series" >
                    </div>
                   {{-- sale_date --}}
                   <div class="mb-3">
                        <label for="sale" class="form-label">Sale Date (yyyy-mm-dd)</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date" >
                    </div>
                    {{-- type --}}
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <input type="text" class="form-control" id="type" name="type" >
                    </div>
                    
                    <button type="submit" class="btn btn-dark">Create</button>
                  </form>
            </div>
        </div>


    </div>
</div>
@endsection