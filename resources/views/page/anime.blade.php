@extends('layouts.app')
<title>Eve | Anime</title>
@section('content')

<style>
    .flipbook-container {
        width: 400px;
        height: 600px;
        margin: 20px auto;
        position: relative;
        perspective: 2000px;
    }

    .page {
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: white;
        box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        overflow: hidden;
        transform-origin: left;
        transition: transform 2s ease;
        backface-visibility: hidden;
        z-index: 1;
    }

    .page img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .page.flipped {
        transform: rotateY(-180deg);
        z-index: 0;
    }

    .controls {
        text-align: center;
    }

    .controls button {
        margin: 0 30px;
    }

        .controls button {
        background: none;
        border: none;
        padding: 5px;
        cursor: pointer;
    }

    .controls button img {
        transition: transform 0.2s;
    }

    .controls button:hover img {
        transform: scale(1.1);
    }
</style>

<div class="container">
    <div class="controls d-flex justify-content-center align-items-center">
        <button onclick="flipPrev()" title="Previous" id="prev">
            <img src="{{ asset('icons/left-arrow.png') }}" alt="Previous" width="30" height="30">
        </button>

        <div class="flipbook-container mx-3" id="flipbook">
          @if (count($anime) > 0)
            @foreach ($anime as $index => $item)
                <div class="page" style="z-index: {{ count($anime) - $index }}">
                    <img src="{{ asset('/' . $item->filename) }}" alt="Page {{ $index + 1 }}">
                </div>
            @endforeach
          @else
                <div class="page" style="z-index: 1">
                    <img src="{{ asset('video/profile.jpg') }}" alt="Default Cover">
                </div>
          @endif
        </div>

        <button onclick="flipNext()" title="Next" id="next">
            <img src="{{ asset('icons/right-arrow.png') }}" alt="Next" width="30" height="30">
        </button>
    </div>

</div>

<script src="{{ asset('js/flipbook.js') }}"></script>
@endsection
