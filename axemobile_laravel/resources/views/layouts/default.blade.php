<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<x-head />

<body data-whatsapp="{{ config('drivex.whatsapp') }}">

  <x-header />

  <main>
    @yield('content')
  </main>

  <x-footer />

  <a href="https://wa.me/{{ config('drivex.whatsapp') }}" class="whatsapp-float" target="_blank" rel="noopener"
    aria-label="Chat on WhatsApp">
    <i class="bi bi-whatsapp"></i>
  </a>

  <x-scripts />

</body>

</html>
