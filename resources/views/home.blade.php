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
                @foreach ($fumetti as $fumetto)
                    <div class="col-2 my-3">
                        <div class="d-flex flex-column">
                            <img class="fumetto-img" src="{{ $fumetto["thumb"] }}" alt="">
                            <a class="pt-2 text">{{ strtoupper($fumetto["title"]) }}</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- btn load more -->
            <div class="d-flex justify-content-center py-5">
                <div>
                    <a class="load">LOAD MORE</a>
                </div>
            </div>
        
        </div>
    </div>

    {{-- advertising --}}
    <div class="footer-top text-light" >
        <div class="container d-flex justify-content-between align-items-center px-4">
            <!-- card render -->
            @foreach ($cards as $card)
                <div class="my-5">
                    <img class="img-ft" src="{{ $card["img"] }}" alt="">
                    <a class="mx-2 a-ft">{{ strtoupper($card["text"]) }}</a>
                </div>
            @endforeach
    
        </div>
    </div>
</body>

@endsection