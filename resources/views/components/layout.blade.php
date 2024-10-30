<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/css/app.css', 'resources/js/slider.js', 'resources/js/app.js', 'resources/css/slider.css'])
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body class="bg-gray-900">
    <x-navbar></x-navbar>
    {{ $slot }}
    <x-footer></x-footer>
</body>


</html>
