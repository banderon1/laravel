@extends('layout')
@section('title', 'Home')

@section('content')
<div class="bg-faded p-4 my-4">
    <!-- Image Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid w-100" src="img/JerBear.png" alt="Jeremy Washing a Window">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-shadow">Window Washing</h3>
                    <p class="text-shadow">Punctual and Diligent, Always Gets the Job Done!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid w-100" src="img/JerBear.png" alt="Jeremy Cleaning Gutters">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-shadow">Gutter Cleaning</h3>
                    <p class="text-shadow">We don't have a picture of this yet, so keep looking at Jeremy on the ladder.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid w-100" src="img/JerBear.png" alt="Same Photo of Jeremy Washing a Window">
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="text-shadow">Same Photo</h3>
                    <p class="text-shadow">This is a new business, and we don't have many pictures.<br/>Ask Jeremy to put a picture of the job he does for you here!</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- Welcome Message -->
    <div class="text-center mt-4">
        <div class="text-heading text-muted text-lg">Welcome To</div>
        <h1 class="my-2">@lang('app.business_name')</h1>
    </div>
</div>
<?php /*
<div class="bg-faded p-4 my-4">
    <hr class="divider">
    <h2 class="text-center text-lg text-uppercase my-0">Build a website <strong>worth visitng</strong>
    </h2>
    <hr class="divider">
    <img class="img-fluid float-left mr-4 d-none d-lg-block" src="img/intro-pic.jpg" alt="">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam soluta dolore voluptatem, deleniti dignissimos excepturi veritatis cum hic sunt perferendis ipsum perspiciatis nam officiis sequi atque enim ut! Velit, consectetur.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam pariatur perspiciatis reprehenderit illo et vitae iste provident debitis quos corporis saepe deserunt ad, officia, minima natus molestias assumenda nisi velit?</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit totam libero expedita magni est delectus pariatur aut, aperiam eveniet velit cum possimus, autem voluptas. Eum qui ut quasi voluptate blanditiis?</p>
</div>

<div class="bg-faded p-4 my-4">
    <hr class="divider">
    <h2 class="text-center text-lg text-uppercase my-0">Beautiful boxes to <strong>showcase your content</strong>
    </h2>
    <hr class="divider">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam soluta dolore voluptatem, deleniti dignissimos excepturi veritatis cum hic sunt perferendis ipsum perspiciatis nam officiis sequi atque enim ut! Velit, consectetur.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam pariatur perspiciatis reprehenderit illo et vitae iste provident debitis quos corporis saepe deserunt ad, officia, minima natus molestias assumenda nisi velit?</p>
</div>
*/ ?>
@endsection
