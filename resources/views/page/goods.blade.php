@extends('layouts.app')
<title>Eve | Goods</title>
@section('content')

<style>
    .wallpaper-background-container {
        border-radius: 10px;
        overflow: hidden;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .wallpaper-background-container img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        object-fit: cover;
    }
</style>

<div class="container mb-5">
    <div class="col-auto">
        <a href="#" style="text-decoration: none; color: black;"><img src="{{ asset('video/home.png') }}" alt="Home Icon" style="width: 10px; height: 10px;"><strong> Top</strong></a> > Goods
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
          <h2 style="margin-bottom: 50px"><strong>Goods</strong></h2>
        </div>
    </div>

    <div class="row my-4 justify-content-center">
        <div class="col-md-10">
            <div class="wallpaper-background-container">
                <img src="{{ asset('video/goods.png') }}" class="img-fluid" alt="Wallpaper">
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card bg-dark text-white text-center" style="border-radius: 10px;">
                <div class="card-body">
                    Shop
                </div>
            </div>
        </div>
    </div>

    <hr style="border: none; height: 1px; background-color: black;">
</div>
@endsection
