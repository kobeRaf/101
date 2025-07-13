@extends('layouts.app')
<title>Eve | Social Media</title>
@section('content')

<style>
    .contact-section {
        padding: 40px 0;
    }

    .contact-card {
        background: #f8f9fa;
        border-radius: 12px;
        padding: 25px;
        margin-bottom: 20px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease;
    }

    .contact-card:hover {
        transform: translateY(-5px);
    }

    .contact-card h4 {
        margin-bottom: 10px;
        font-weight: bold;
    }

    .contact-icon {
        width: 30px;
        margin-right: 10px;
        vertical-align: middle;
    }

    .contact-divider {
        border: none;
        height: 1px;
        background-color: #ccc;
        margin: 20px 0;
    }
</style>

<div class="container mb-5">
    <div class="col-auto">
        <a href="#" style="text-decoration: none; color: black;"><img src="{{ asset('video/home.png') }}" alt="Home Icon" style="width: 10px; height: 10px;"><strong> Top</strong></a> > Social Media
    </div>
</div>

<div class="container">
       <div class="row">
        <div class="col">
          <h2 style="margin-bottom: 50px"><strong>Social Media</strong></h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- Facebook --}}
            <div class="row justify-content-center" style="margin-top: 50px;">
                <div class="col-md-6">
                    <a href="https://www.facebook.com/kobe.rafEve" target="_blank" class="text-decoration-none text-reset">
                        <div class="card bg-dark text-white text-center" style="border-radius: 40px;">
                            <div class="card-body">
                                Facebook
                            </div>
                        </div>
                    </a>
                    <div class="row text-center mt-5">
                        <div class="card-body">
                            <p>It's just me here, sharing updates and thoughts — feel free to contact me on Facebook.</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr style="border: none; height: 1px; background-color: black;">

            {{-- Instagram --}}
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <a href="https://www.instagram.com/eve_kobebeko/" target="_blank" class="text-decoration-none text-reset">
                        <div class="card bg-dark text-white text-center" style="border-radius: 40px;">
                            <div class="card-body">
                                Instagram
                            </div>
                        </div>
                    </a>
                    <div class="row text-center mt-5">
                        <div class="card-body">
                            <p>Snapshots of what I create, see, or feel — straight from my perspective. Visit me on Instagram.</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr style="border: none; height: 1px; background-color: black;">

            {{-- Gmail --}}
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <a href="mailto:jumaritokoberaf@gmail.com" class="text-decoration-none text-reset">
                        <div class="card bg-dark text-white text-center" style="border-radius: 40px;">
                            <div class="card-body">
                                Gmail
                            </div>
                        </div>
                    </a>
                    <div class="row text-center mt-5">
                        <div class="card-body">
                            <p>jumaritokoberaf@gmail.com</p>
                            <p>If you want to say hi, ask something, or share an idea, I’d be glad to hear from you.</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr style="border: none; height: 1px; background-color: black;">

            {{-- GitHub --}}
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <a href="https://github.com/kobeRaf" target="_blank" class="text-decoration-none text-reset">
                        <div class="card bg-dark text-white text-center" style="border-radius: 40px;">
                            <div class="card-body">
                                GitHub
                            </div>
                        </div>
                    </a>
                    <div class="row text-center mt-5">
                        <div class="card-body">
                            <p>I build and learn one step at a time — check out my code and personal projects on GitHub.</p>
                        </div>
                    </div>
                </div>
            </div>

            <hr style="border: none; height: 1px; background-color: black;">
        </div>
    </div>
</div>

@endsection
