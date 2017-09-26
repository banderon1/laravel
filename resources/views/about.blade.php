@extends('layout')
@section('title', 'About')

@section('content')
<div class="bg-faded p-4 my-4">
    <hr class="divider">
    <h2 class="text-center text-lg text-uppercase my-0">About
        <strong>@lang('app.business_name')</strong>
    </h2>
    <hr class="divider">
    <div class="row">
        <div class="col-lg-6">
            <img class="img-fluid mb-4 mb-lg-0" src="img/JerBear.png" alt="Jeremy Really Good at Washing Windows">
        </div>
        <div class="col-lg-6">
            <p>Jeremy has been washing windows in the East Bay for the last 7 years. He has finally started his own business, and would love to work for you!</p>
        </div>
    </div>
</div>
<?php /*
<div class="bg-faded p-4 my-4">
    <hr class="divider">
    <h2 class="text-center text-lg text-uppercase my-0">Our
        <strong>Team</strong>
    </h2>
    <hr class="divider">
    <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
                <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                <div class="card-body text-center">
                    <h4 class="card-title m-0">John Smith
                        <small class="text-muted">Job Title</small>
                    </h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4 mb-md-0">
            <div class="card h-100">
                <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                <div class="card-body text-center">
                    <h4 class="card-title m-0">John Smith
                        <small class="text-muted">Job Title</small>
                    </h4>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100">
                <img class="card-img-top" src="http://placehold.it/750x450" alt="">
                <div class="card-body text-center">
                    <h4 class="card-title m-0">John Smith
                        <small class="text-muted">Job Title</small>
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
 */ ?>
@endsection
