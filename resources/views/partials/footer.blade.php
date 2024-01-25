<footer>
    {{-- footer middle --}}
    <div class="footer-middle" >
        <div class="container">
            <div class="row">
                <div class="col-4 d-flex justify-content-between py-5">
                    <!-- row 1 -->
                    <div>
                        <div>
                            <span class="span-fm text-light fs-5">DC Comics</span>
                            <ul class="p-0">
                                @foreach ($comics as $comic)
                                <li class="text-secondary"><a class="a-fm" href="#">{{ $comic["text"] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
    
                        <div>
                            <div>
                                <span class="span-fm text-light fs-5">Shop</span>
                                <ul class="p-0">
                                    @foreach ($shops as $shop)
                                    <li class="text-secondary" v-for="shop in shops"><a class="a-fm" href="#">{{ $shop["text"] }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
    
                    </div>
    
                    <!-- row 2 -->
                    <div>
                        <div>
                            <span class="span-fm text-light fs-5">DC</span>
                            <ul class="p-0">
                                @foreach ($dcs as $dc)
                                <li class="text-secondary"><a class="a-fm" href="#">{{ $dc["text"] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
    
                    <!-- row 3 -->
                    <div>
                        <div>
                            <span class="span-fm text-light fs-5">SITES</span>
                            <ul class="p-0">
                                @foreach ($sites as $site)
                                <li class="text-secondary"><a class="a-fm" href="#">{{ $site["text"] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
    
                <!-- DC img -->
                <div class="col-8 d-flex justify-content-end">
                    <div class="bgImg"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- footer-bottom --}}
    <div class="footer-bottom text-light" >
        <div class="container">
            <div class="row py-5">
                <div class="col-6">
                    <a class="a-fb">SIGN-UP NOW!</a>
                </div>
        
                <div class="col-6 d-flex justify-content-end align-items-center">
                    <span class="span-fb me-3">FOLLOW US</span>
                    @foreach ($imags as $img)
                        <img class="mx-2" src="{{ $img["img"] }}" alt="">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</footer>