@extends('layouts.app')

@section('content')

<style>
    .video-background-container {
        height: 400px;
        position: relative;
        overflow: hidden;
        border-radius: 10px;
    }

    .image-bg {
        position: absolute;
        top: -50%;
        left: 0;
        width: 100%;
        height: 150%;
        object-fit: cover;
    }

    .overlay-text {
        position: absolute;
        top: 50%;
        left: 49%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 70px;
        font-weight: bold;
        text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        z-index: 2;
        text-align: center;
    }


     .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
        background-color: transparent;
    }

    .card-img-top {
        transition: transform 0.3s ease;
        display: block;
        margin: 0 auto;
    }

    .card.active {
        background-color: #f0f0f0; 
        box-shadow: 0 10px 20px rgba(0, 0, 0, 1);
        transform: scale(1.02);
        z-index: 10;
        position: relative;
    }

    .card-img-top.active {
        transform: scale(1.1);
        position: relative;
        z-index: 11;
    }

    .responsive-paint-img {
        width: 100%;
        height: auto;
        aspect-ratio: 3 / 4; /* optional for consistent image aspect ratio */
        object-fit: cover;
    }
</style>

<div class="container">

    {{-- Image Background Section --}}
    <div class="video-background-container mb-5">
        <img src="{{ asset('video/wallpaper.jpg') }}" class="image-bg" alt="Wallpaper">
        <div class="overlay-text">EVE</div>

    </div>

     {{-- Image  Section --}}
    <div class="row">
        @foreach ($paint as $item)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="{{ asset('/' . $item->filename) }}" class="card-img-top rounded responsive-paint-img">
                </div>
            </div>
        @endforeach
    </div>

        <hr style="border: none; height: 1px; background-color: black;">

    {{-- Profile Section --}}
    <div class="row mt-5">
        <h3 class="text-center mb-4">Profile</h3>
        <div class="col-md-6">
                <img src="{{ asset('video/profile.png') }}" class="d-block mx-auto" style="height: 250px; object-fit: cover;">
        </div>
        <div class="col-md-6">
            <p>
                <h6><strong>Eve</strong></h6>

                <p>
                    <p>Illustrator. Web/Mobile Developer.</p>
                    <p>Right-handed.</p>
                </p>

                <p>
                        Started posting artwork on social media in April 2023, and is currently active in both commercial and personal projects.
                Open to commissions such as video illustrations, CD jackets, cover art, web and mobile development, etc.
                {{-- For past work examples, please refer to the Works section. --}}
                </p>
   
                <p>      
                 For illustration/Web applications commission inquiries, please read through the Contact section and reach out via email or the contact form.
                (Direct messages on social media may be missed.)
                 </p>

                ※ Currently not accepting new commission requests.
        </p>
        </div>
    </div>

            <hr style="border: none; height: 1px; background-color: black;">

    <div class="row mt-5">
        <h3 class="text-center mb-4">Regarding the Use of Illustrations</h3>
        <h6 class="text-center mb-4">7/12/2025</h6>

        <div class="col-md-6">
            <p>⚪︎ You may use the artwork as profile pictures or header images on platforms like Instagram, Twitter, and Facebook.</p>
            <p>⚪︎ Personal use within a private scope (such as smartphone wallpapers not shared publicly) is generally allowed.</p>
            <p>⚪︎ Any other use that may infringe on copyrights is prohibited.</p>
            <p>You do not need to report usage, but doing so would be encouraging and helpful for the artist’s work.</p>
            <p>The following actions are strictly prohibited:</p>
            <p>
                ⚪︎ Unauthorized reposting on social media or websites (excluding share or embed functions). <br>
                ⚪︎ Editing or altering the artwork in ways other than cropping (e.g., adding text or changing colors). <br>
                ⚪︎ Use of commissioned illustrations by anyone other than the original client. <br>
                ⚪︎ Commercial use without permission, including uploading music videos to YouTube or platforms with monetization features. <br>
                ⚪︎ Using the artwork as AI training data. <br>
                ⚪︎ Any other uses outside the permitted scope, violations of copyright, unethical use, or malicious intent. <br>
            </p>
            <p>
               Commercial use of personal illustrations is possible if a usage fee is paid.
               {{-- Please refer to [this page] and contact us for more information. --}}
            </p>
        </div>
        <div class="col-md-6">
            <p> Do not repost. </p>
            <p> I only give permission to share my story if shared within the app. </p>
            <p> Only for non-commercial use, you may use my illustrations for your profile picture. </p>
            <p> Illustrations drawn for commercial use are prohibited in all cases. </p>
            <p> Also, processing other than cropping is prohibited. </p>
            <p> Currently, my commissions are not open for requests from overseas. <p>
        </div>
    </div>
            <hr style="border: none; height: 1px; background-color: black;">

</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.card-img-top').forEach(function (img) {
            img.addEventListener('click', function () {
                this.classList.add('active');
                this.closest('.card').classList.add('active');
            });

            img.addEventListener('mouseleave', function () {
                this.classList.remove('active');
                this.closest('.card').classList.remove('active');
            });
        });
    });
</script>
@endsection
