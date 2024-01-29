@extends("layouts.app")

@section("content")
<div class="bg-dark-subtle">

    <div class="container py-3">
        
        <div class="row">
            <h1>Insert new Comic</h1>
        </div>
        
        {{-- VALIDATION --}}
        {{-- <div class="row">
            <div class="col-6">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>- {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                     
            </div>
        </div> --}}

        <div class="row">
            <div class="col-6">
                <form action="{{ route("comics.store") }}" method="POST">
                    {{-- cross scripting request forgery --}}
                    @csrf

                    {{-- title  --}}
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error("title") is-invalid @enderror" id="title" name="title" value="{{ old("title") }}">

                        {{-- error message --}}
                        @error("title")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- description  --}}
                    <div class="mb-3">
                        <label for="description"  class="form-label">Description</label>
                        <textarea class="form-control" rows="2" id="description" name="description"></textarea>
                    </div>
                    {{-- thumb  --}}
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="text" class="form-control @error("thumb") is-invalid @enderror" id="thumb" name="thumb" value="{{ old("thumb") }}">

                        {{-- error message --}}
                        @error("thumb")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- price --}}
                    <div class="mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" class="form-control @error("price") is-invalid @enderror" id="price" name="price" >

                        {{-- error message --}}
                        @error("price")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- series --}}
                    <div class="mb-3">
                        <label for="series" class="form-label">Series</label>
                        <input type="text" class="form-control @error("series") is-invalid @enderror" id="series" name="series" >

                        {{-- error message --}}
                        @error("series")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                   {{-- sale_date --}}
                   <div class="mb-3">
                        <label for="sale" class="form-label">Sale Date (yyyy-mm-dd)</label>
                        <input type="text" class="form-control @error("sale_date") is-invalid @enderror" id="sale_date" name="sale_date" >

                        {{-- error message --}}
                        @error("sale_date")
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- type --}}
                    <div class="mb-3">
                        <label for="type" class="form-label">Type</label>
                        <select class="form-select" id="type" name="type">
                            <option value="comic" @selected(old('type') == 'comic')>Comic Book</option>
                            <option value="graphic" @selected(old('type') == 'graphic')>Graphic Novel</option>
                            <option value="prova" @selected(old('type') == 'prova')>Prova</option>
                        </select>

                        {{-- error message --}}
                        @error("type")
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-dark">Create</button>
                  </form>
            </div>
        </div>


    </div>
</div>
@endsection