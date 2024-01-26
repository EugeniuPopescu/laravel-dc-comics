@extends('layouts.app')

@section('content')

<body>
    <div class="content">
        <div class="container position-relative">
            <!-- btn load more -->
            <div class="pb-5">
                <a class="series">CURRENT SERIES</a>
            </div>
            
    
            <!-- card render -->
            <div class="d-flex flex-wrap">
           
                @foreach ($comics as $comic)
                    <a href="{{ route("comics.show", $comic->id) }}">
                        <div class="col-2 my-3">
                            <div class="d-flex flex-column">
                                {{-- controllo sull'immagine --}}
                                @if ($comic->thumb)
                                    <img class="fumetto-img" src="{{ $comic->thumb }}" alt="">    
                                @else
                                    <img class="fumetto-img" src="https://i.pinimg.com/736x/e6/af/83/e6af836df0ca29f3bd0b3384c48a0b9e.jpg" alt="">    
                                @endif
                                <a class="pt-2 text">{{ strtoupper($comic->title) }}</a>
                            </div>
                        </div>
                    </a>
                @endforeach
    
            </div>

            <!-- btn load more -->
            <div class="d-flex justify-content-center py-5">
                <div>
                    <a class="load" href="{{ route("comics.create") }}">Add new Comic</a>
                </div>
            </div>
        
        </div>
    </div>

    {{-- advertising --}}
    <div class="footer-top text-light" >
        <div class="container d-flex justify-content-between align-items-center px-4">
            <!-- card render -->
            @foreach ($dati["cards"] as $card)
                <div class="my-5">
                    <img class="img-ft" src="{{ $card["img"] }}" alt="">
                    <a class="mx-2 a-ft">{{ strtoupper($card["text"]) }}</a>
                </div>
            @endforeach
    
        </div>
    </div>
</body>


@endsection