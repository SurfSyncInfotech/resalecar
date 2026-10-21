@extends('layouts.default')

@section('title', 'About Us | ' . config('drivex.name'))

@section('content')

<x-page-title title="About Us" />

<section class="section py-5 my-4 my-xl-5">
  <div class="b-container">
    <div class="row g-4 align-items-end mb-4 mb-xl-5">
      <div class="col-12 col-xl-8">
        <h6 class="text-color-2">KNOW US MORE</h6>
        <h2 class="heading" data-aos="fade-right" data-aos-delay="400" data-aos-duration="2500">
          {{ config('drivex.name') }} — <span class="text-primary-color">{{ config('drivex.tagline') }}</span>
        </h2>
        <p class="text-color-2 mt-3 mb-0 col-xl-11">Drive Your Dream. Handpicked premium used cars from a UK-based
          dealer that stands for Quality · Trust · Value. We buy &amp; sell cars, offer service, warranty and part
          exchange — more than just cars, quality people for better journeys.</p>
      </div>
      <div class="col-12 col-xl-4 d-flex justify-content-xl-end">
        <a href="{{ route('contact-us') }}" class="btn btn-lg btn-cta-primary">Let's Get In Touch</a>
      </div>
    </div>

    <div class="row g-4 g-xl-5 align-items-center">
      <div class="col-12 col-lg-6 order-2 order-lg-1">
        <p class="text-color-2">Based in {{ config('drivex.city') }}, {{ config('drivex.short_name') }} was built for
          drivers who want premium presentation without dealer games. From first WhatsApp message to handover, we keep
          communication clear and pricing competitive.</p>
        <p class="text-color-2">Directed by {{ config('drivex.director') }} and proudly associated with
          {{ config('drivex.partner') }}, we support the full ownership journey — buying, selling, part exchanging,
          warranty options and specialist workshop care including brakes, engines, timing chains, suspension, clutch
          &amp; gearbox, plus remaps &amp; ECU tuning.</p>

        <div class="step-item d-flex mb-4 mt-4">
          <div class="step-number">01</div>
          <div class="ms-3">
            <h5 class="heading mb-1">Drive Your Dream</h5>
            <p class="text-color-2 mb-0">Handpicked stock chosen for condition, desirability and real-world value —
              SUVs, performance coupes and executive saloons.</p>
          </div>
        </div>
        <hr class="opacity-50">
        <div class="step-item d-flex my-4">
          <div class="step-number">02</div>
          <div class="ms-3">
            <h5 class="heading mb-1">Quality · Trust · Value</h5>
            <p class="text-color-2 mb-0">Honest valuations, transparent paperwork and competitive pricing at every
              stage — whether you are buying or selling.</p>
          </div>
        </div>
        <hr class="opacity-50">
        <div class="step-item d-flex mt-4">
          <div class="step-number">03</div>
          <div class="ms-3">
            <h5 class="heading mb-1">More Than Just Cars</h5>
            <p class="text-color-2 mb-0">Aftersales mindset: full service, warranty pathways and mechanical expertise so
              every journey feels safer and sharper.</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-lg-6 order-1 order-lg-2">
        <div class="about-collage about-collage-page">
          <div class="about-collage-main">
            <img src="{{ asset('assets/img/drivex/about.jpg') }}" alt="DriveX premium automotive"
              class="w-100 h-100 object-fit-cover">
          </div>
          <div class="about-collage-stack">
            <img src="{{ asset('assets/img/drivex/product-bmw.jpg') }}" alt="Performance car at DriveX"
              class="w-100 h-100 object-fit-cover rounded-4">
            <img src="{{ asset('assets/img/drivex/workshop.jpg') }}" alt="DriveX workshop"
              class="w-100 h-100 object-fit-cover rounded-4">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section py-4">
  <div class="b-container">
    <div class="row g-3">
      <div class="col-6 col-md-3">
        <div class="ratio ratio-1x1 rounded-4 overflow-hidden">
          <img src="{{ asset('assets/img/drivex/product-rr.jpg') }}" class="w-100 h-100 object-fit-cover" alt="Premium SUV">
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="ratio ratio-1x1 rounded-4 overflow-hidden">
          <img src="{{ asset('assets/img/drivex/service-brakes.jpg') }}" class="w-100 h-100 object-fit-cover" alt="Brake service">
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="ratio ratio-1x1 rounded-4 overflow-hidden">
          <img src="{{ asset('assets/img/drivex/product-merc.jpg') }}" class="w-100 h-100 object-fit-cover" alt="Luxury saloon">
        </div>
      </div>
      <div class="col-6 col-md-3">
        <div class="ratio ratio-1x1 rounded-4 overflow-hidden">
          <img src="{{ asset('assets/img/drivex/service-full.jpg') }}" class="w-100 h-100 object-fit-cover" alt="Full service">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section py-5">
  <div class="b-container">
    <div class="row g-4 g-xl-5 align-items-center">
      <div class="col-12 col-xl-6">
        <img src="{{ asset('assets/img/drivex/leadership.jpg') }}" alt="DriveX Automotors premium vehicles"
          class="img-fluid rounded-4 w-100 object-fit-cover" style="max-height: 560px;">
      </div>
      <div class="col-12 col-xl-6">
        <h6 class="text-color-2">LEADERSHIP</h6>
        <h2 class="heading" data-aos="fade-left" data-aos-delay="400" data-aos-duration="2500">
          Meet <span class="text-primary-color">{{ config('drivex.director') }}</span>
        </h2>
        <p class="text-color-2 mt-4">Director of {{ config('drivex.short_name') }} (@drivexmotors.uk),
          {{ config('drivex.director') }} brings a passion for premium motoring and customer-first dealing. From
          Coventry roots to a growing UK presence, the vision is clear: help every client drive their dream with
          confidence.</p>
        <p class="text-color-2">Follow the journey on Instagram for latest stock, workshop updates and viewing
          appointments — or message WhatsApp {{ config('drivex.phone_primary') }} for a fast reply.</p>
        <ul class="list-unstyled fs-5 text-color-2 mt-4">
          <li class="mb-3"><i class="bi bi-check-square-fill text-primary-color me-2"></i> Director — {{ config('drivex.name') }}</li>
          <li class="mb-3"><i class="bi bi-check-square-fill text-primary-color me-2"></i> UK-based dealer experience</li>
          <li class="mb-3"><i class="bi bi-check-square-fill text-primary-color me-2"></i> Focus on premium used cars</li>
          <li class="mb-3"><i class="bi bi-check-square-fill text-primary-color me-2"></i> Full service &amp; aftercare mindset</li>
          <li class="mb-3"><i class="bi bi-check-square-fill text-primary-color me-2"></i> Direct WhatsApp communication</li>
        </ul>
        <div class="d-flex flex-column flex-sm-row gap-3 mt-2">
          <a href="{{ config('drivex.instagram') }}" target="_blank" rel="noopener"
            class="btn btn-lg btn-cta-primary">@drivexmotors.uk</a>
          <a href="{{ config('drivex.instagram_owner') }}" target="_blank" rel="noopener"
            class="btn btn-lg btn-cta-secondary">@mr.rahul_reddyy</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section py-5 bg-secondary-color">
  <div class="b-container">
    <div class="row g-4 text-center text-md-start">
      <div class="col-12 col-md-4">
        <h3 class="heading text-primary-color display-6 fw-bolder">We Buy</h3>
        <p class="text-color-2">Competitive offers for quality used cars. Send details on WhatsApp for a fast valuation.</p>
      </div>
      <div class="col-12 col-md-4">
        <h3 class="heading text-primary-color display-6 fw-bolder">We Sell</h3>
        <p class="text-color-2">Handpicked premium stock at competitive prices — book a viewing when you are ready.</p>
      </div>
      <div class="col-12 col-md-4">
        <h3 class="heading text-primary-color display-6 fw-bolder">We Care</h3>
        <p class="text-color-2">Service, warranty, remaps and mechanical work so ownership stays smooth long after sale.</p>
      </div>
    </div>
  </div>
</section>

<x-warranty />
<x-light-appointment />
<x-faqs />
<x-ads-cta />

@endsection
