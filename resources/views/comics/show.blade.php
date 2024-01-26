@extends("layouts.app")

@section("content")
    <div class="horizontal-blue-line "></div>
    <div class="container">
        
    

        <div class="row">
            <div class="col-8 position-relative">
                @if ($comic->thumb)
                    <img class="fumetto-img show-img" src="{{ $comic->thumb }}" alt="">    
                @else
                    <img class="fumetto-img show-img" src="https://i.pinimg.com/736x/e6/af/83/e6af836df0ca29f3bd0b3384c48a0b9e.jpg" alt="">    
                @endif
                <h2 class="pt-2">{{ strtoupper($comic->title) }}</h2>
            </div>
        </div>

        <div >
            {{-- edit --}}
            <a href="{{ route("comics.edit", $comic->id) }}" class="btn btn-info text-white">Edit</a>
            
            {{-- delete --}}
            <form action="{{ route("comics.destroy", $comic->id) }}" method="POST" class="d-inline-block">
                {{-- token anti-forgery --}}
                @csrf
                {{-- passiamo il metodo --}}
                @method("DELETE")
        
                <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        </div>


    </div>
@endsection