<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description"
    content="{{ config('drivex.name') }} — We buy & sell quality used cars in the UK. Service, warranty, part exchange, remaps and more. {{ config('drivex.tagline') }}">
  <title>@yield('title', config('drivex.name') . ' | ' . config('drivex.tagline'))</title>
  <link rel="icon" href="{{ asset('assets/img/Main-Logo.png') }}" type="image/png">
  <link rel="stylesheet" href="{{ asset('assets/vendor/glightbox/glightbox.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/aos/aos.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  @stack('styles')
</head>
