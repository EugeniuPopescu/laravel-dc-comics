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

                <h1 class="pt-5">{{ strtoupper($comic->title) }}</h1>

                <p class="pt-2">Price: {{ $comic->price }}</p>

                <p class="">{{ $comic->series }}</p>

                <p class="">{{ $comic->description }}</p>
                
                <p class="">{{ $comic->sale_date }}</p>

                <p>
                </p>
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