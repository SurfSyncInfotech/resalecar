@extends('layouts.error')

@section('title', 'Page Not Found | ' . config('drivex.name'))

@section('content')

<section class="d-flex justify-content-center align-items-center text-center overflow-hidden"
  style="background-image: url('{{ asset('assets/img/drivex/hero.jpg') }}'); background-size: cover; background-position: center; height: 100vh;">
  <div class="bg-overlay" style="position:absolute;inset:0;"></div>
  <div class="b-container position-relative z-2" style="padding: 0 15px;">
    <div class="row justify-content-center">
      <div class="col-12 col-xl-8">
        <h1 class="display-1 text-primary-color fw-bolder" data-aos="zoom-in" data-aos-duration="1500">404</h1>
        <h2 class="heading mt-3">
          Oops! This page took a <span class="text-primary-color">wrong turn</span>
        </h2>
        <p class="text-color-2 mt-3">The page you are looking for is not available. Head back to DriveX or message us on WhatsApp.</p>
        <a href="{{ route('index') }}" class="btn btn-lg btn-cta-primary mt-4 px-5 py-3">Back To Home</a>
      </div>
    </div>
  </div>
</section>

@endsection
