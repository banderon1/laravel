@extends('layout')
@section('title', 'Contact')

@section('content')
<div class="bg-faded p-4 my-4">
    <hr class="divider">
    <h2 class="text-center text-lg text-uppercase my-0">Contact <strong>@lang('app.business_name')</strong>
    </h2>
    <hr class="divider">
    <div class="row">
        <div class="col-lg-8">
            <div class="embed-responsive embed-responsive-16by9 map-container mb-4 mb-lg-0">
                <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="//maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.8669759,-122.2556619&amp;t=m&amp;z=11&amp;output=embed"></iframe>
            </div>
        </div>
        <div class="col-lg-4">
            <h5 class="mb-0">Phone:</h5>
            <div class="mb-4"><a href="tel:@lang('app.phone')">@lang('app.phone_formatted')</a></div>
            <h5 class="mb-0">Email:</h5>
            <div class="mb-4">
                <a href="mailto:@lang('app.email')">@lang('app.email')</a>
            </div>
            <h5 class="mb-0">Serving:</h5>
            <div class="mb-4">
                The Greater East Bay
            </div>
        </div>
    </div>
</div>

<?php /*
<div class="bg-faded p-4 my-4">
    <hr class="divider">
    <h2 class="text-center text-lg text-uppercase my-0">Contact <strong>Form</strong></h2>
    <hr class="divider">
    <form>
        <div class="row">
            <div class="form-group col-lg-4">
                <label class="text-heading">Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group col-lg-4">
                <label class="text-heading">Email Address</label>
                <input type="email" class="form-control">
            </div>
            <div class="form-group col-lg-4">
                <label class="text-heading">Phone Number</label>
                <input type="tel" class="form-control">
            </div>
            <div class="clearfix"></div>
            <div class="form-group col-lg-12">
                <label class="text-heading">Message</label>
                <textarea class="form-control" rows="6"></textarea>
            </div>
            <div class="form-group col-lg-12">
                <button type="submit" class="btn btn-secondary">Submit</button>
            </div>
        </div>
    </form>
</div>
 */ ?>
@endsection

@section('extra-js')
<!-- Zoom when clicked function for Google Map -->
<script>
    $('.map-container').click(function () {
        $(this).find('iframe').addClass('clicked')
    }).mouseleave(function () {
        $(this).find('iframe').removeClass('clicked')
    });
</script>
@endsection

</body>

</html>
