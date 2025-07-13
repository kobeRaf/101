@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                </div>
            </div>

            {{-- Anime Upload Form --}}
            <div class="card mb-4">
                <div class="card-header">Upload Anime</div>
                <div class="card-body">
                    <form action="{{ route('upload.anime') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="anime_name" class="form-label">Name</label>
                            <input type="text" name="name" id="anime_name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="anime_image" class="form-label">Image</label>
                            <input type="file" name="image" id="anime_image" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload Anime</button>
                    </form>
                </div>
            </div>

            {{-- Paint Upload Form --}}
            <div class="card mb-4">
                <div class="card-header">Upload Paint</div>
                <div class="card-body">
                    <form action="{{ route('upload.paint') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="paint_name" class="form-label">Name</label>
                            <input type="text" name="name" id="paint_name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="paint_image" class="form-label">Image</label>
                            <input type="file" name="image" id="paint_image" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload Paint</button>
                    </form>
                </div>
            </div>

            {{-- Goods Upload Form --}}
            <div class="card mb-4">
                <div class="card-header">Upload Goods</div>
                <div class="card-body">
                    <form action="{{ route('upload.goods') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="goods_name" class="form-label">Name</label>
                            <input type="text" name="name" id="goods_name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="goods_image" class="form-label">Image</label>
                            <input type="file" name="image" id="goods_image" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Upload Goods</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
