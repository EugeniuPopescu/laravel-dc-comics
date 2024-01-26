@extends("layouts.app")

@section("content")
    <div class="horizontal-blue-line "></div>
    <div class="container">
        
    

        <div class="row">
            <div class="col-8 position-relative">
                <img class="show-img" src="{{ $comic->thumb }}" alt="">
                <h2 class="pt-2">{{ strtoupper($comic->title) }}</h2>
            </div>
        </div>

        <div >
            <a href="{{ route("comics.edit", $comic->id) }}" class="btn btn-info">Edit</a>
        </div>

    </div>
@endsection