<header>
    {{-- header --}}
    <header class="container">
        <div class="row">
            <!-- col logo -->
            <div class="col-5">
                <img class="logo my-3" src="/images/dc-logo.png" alt="">
            </div>
        
            <!-- col links -->
            <div class="col-7 d-flex justify-content-between align-items-center">
                @foreach ($links as $link)
                    <a class="a-link" href="{{ $link["url"] }}">{{ strtoupper($link["text"]) }}</a>
                @endforeach
            </div>
        </div>
    </header>

    {{-- jumbo --}}
    <div class="jumbo"></div>
</header>