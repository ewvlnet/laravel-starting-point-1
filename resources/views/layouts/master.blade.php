<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('meta-title', config('app.name').' | ')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Construction Html5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="/site/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/site/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="/site/plugins/animate-css/animate.css">
    <link rel="stylesheet" href="/site/plugins/slick/slick.css">
    <link rel="stylesheet" href="/site/plugins/slick/slick-theme.css">
    <link rel="stylesheet" href="/site/plugins/colorbox/colorbox.css">
    <link rel="stylesheet" href="/site/css/style.css">
</head>
<body>
<div class="body-inner">

    @include('site._partials.top-bar')
    @include('site._partials.header')

    @yield('content')

    @include('site._partials.footer')

    <script src="/site/plugins/jQuery/jquery.min.js"></script>
    <script src="/site/plugins/bootstrap/bootstrap.min.js" defer></script>
    <script src="/site/plugins/slick/slick.min.js"></script>
    <script src="/site/plugins/slick/slick-animation.min.js"></script>
    <script src="/site/plugins/colorbox/jquery.colorbox.js"></script>
    <script src="/site/plugins/shuffle/shuffle.min.js" defer></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <script src="/site/plugins/google-map/map.js" defer></script>
    <script src="/site/js/script.js"></script>
</div>
</body>
</html>
