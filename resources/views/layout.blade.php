<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global Site Tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-49479641-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments)};
        gtag('js', new Date());

        gtag('config', 'UA-49479641-4');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@lang('app.business_name') - @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/app.css" rel="stylesheet">

</head>
<body>

<div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">@lang('app.business_name')</div>
<div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Serving the Greater East Bay | <a href="tel:@lang('app.phone')">@lang('app.phone_formatted')</a></div>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-faded py-lg-4">
    <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">JerBear's Services</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item px-lg-4 {{ Request::is('/') ? 'active' : '' }}">
                    <a class="nav-link text-uppercase text-expanded" href="/">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item px-lg-4 {{ Request::is('about') ? 'active' : '' }}">
                    <a class="nav-link text-uppercase text-expanded" href="/about">About</a>
                </li>
                <li class="nav-item px-lg-4 {{ Request::is('contact') ? 'active' : '' }}">
                    <a class="nav-link text-uppercase text-expanded" href="/contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

    @yield('content')

</div>

<footer class="bg-faded text-center py-5">
    <div class="container">
        <p class="m-0">Copyright &copy; @lang('app.business_name') {{ (Carbon\Carbon::now())->year }}</p>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/popper/popper.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

@yield('extra-js')

</body>
</html>
