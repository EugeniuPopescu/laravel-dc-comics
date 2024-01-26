@extends('layouts.app')

@section('content')
<!-- card render -->
<div class="content">
    <div class="container">
        <div class="d-flex flex-wrap">
            @foreach ($comics as $comic)
                <div class="col-2 my-3">
                    <div class="d-flex flex-column">
                        <img class="fumetto-img" src="{{ $comic->thumb }}" alt="">
                        <a class="pt-2 text">{{ strtoupper($comic->title) }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection