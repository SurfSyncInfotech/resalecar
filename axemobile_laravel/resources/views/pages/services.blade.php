@extends('layouts.default')

@section('title', 'Our Services | ' . config('drivex.name'))

@section('content')

<x-page-title title="Our Services" />

<section class="section py-5 my-4 my-xl-5">
  <div class="b-container">
    <div class="row g-4 align-items-center mb-5">
      <div class="col-12 col-lg-6 text-center text-lg-start">
        <h6 class="text-color-2">OUR SOLUTIONS</h6>
        <h2 class="heading mt-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="2500">
          Service · Warranty · Part Exchange &amp; Specialist Workshop Care</h2>
        <p class="text-color-2 mt-3 mb-0">{{ config('drivex.name') }} delivers the full ownership journey under one roof.
          We buy &amp; sell quality used cars, welcome part exchange, offer warranty on selected stock, and provide
          full service plus specialist work — brakes, engines, timing chains, suspension, clutch &amp; gearbox, remaps
          &amp; ECU tuning.</p>
      </div>
      <div class="col-12 col-lg-6">
        <div class="row g-3">
          <div class="col-6">
            <div class="ratio ratio-4x3 rounded-4 overflow-hidden">
              <img src="{{ asset('assets/img/drivex/service-buy.jpg') }}" class="w-100 h-100 object-fit-cover" alt="Buy and sell cars">
            </div>
          </div>
          <div class="col-6">
            <div class="ratio ratio-4x3 rounded-4 overflow-hidden">
              <img src="{{ asset('assets/img/drivex/service-full.jpg') }}" class="w-100 h-100 object-fit-cover" alt="Full vehicle service">
            </div>
          </div>
          <div class="col-6">
            <div class="ratio ratio-4x3 rounded-4 overflow-hidden">
              <img src="{{ asset('assets/img/drivex/service-warranty.jpg') }}" class="w-100 h-100 object-fit-cover" alt="Warranty included">
            </div>
          </div>
          <div class="col-6">
            <div class="ratio ratio-4x3 rounded-4 overflow-hidden">
              <img src="{{ asset('assets/img/drivex/service-remap.jpg') }}" class="w-100 h-100 object-fit-cover" alt="Remaps and ECU">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row g-4 mb-5">
      <div class="col-12 col-md-4">
        <div class="promise-item h-100 text-center text-md-start">
          <h5 class="heading text-primary-color">Retail</h5>
          <p class="text-color-2 mb-0">Buy &amp; sell handpicked premium used cars at competitive prices with clear
            communication from enquiry to handover.</p>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="promise-item h-100 text-center text-md-start">
          <h5 class="heading text-primary-color">Aftercare</h5>
          <p class="text-color-2 mb-0">Warranty pathways and full servicing so you drive with confidence long after
            collection day.</p>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="promise-item h-100 text-center text-md-start">
          <h5 class="heading text-primary-color">Workshop</h5>
          <p class="text-color-2 mb-0">Brakes, engines, timing chains, suspension, clutch &amp; gearbox, remaps —
            specialist care with honest quotes.</p>
        </div>
      </div>
    </div>

    <div class="row mx-auto text-center mb-4">
      <h3 class="heading">Explore Every Service in Detail</h3>
      <p class="text-color-2 col-xl-9 mx-auto">Each card opens a unique page with process steps, FAQs and a direct
        WhatsApp booking path for that service only.</p>
    </div>

    <div class="row mx-auto row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
      @foreach ($services as $slug => $item)
        <div class="col">
          <div class="card group-card rounded-4 overflow-hidden position-relative h-100" data-aos="fade-up"
            data-aos-delay="{{ 250 + ($loop->index % 3) * 120 }}" data-aos-duration="2500">
            <div class="img-ratio-113">
              <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}"
                class="img-fluid opacity-75 w-100 h-100 object-fit-cover">
            </div>
            <div class="card-img-overlay flex-column justify-content-between p-4">
              <div class="d-flex justify-content-between align-items-start">
                <h4 class="heading text-primary-color mb-0">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}.</h4>
                <i class="bi {{ $item['icon'] }} text-primary-color fs-3"></i>
              </div>
              <div class="card-service-label rounded-4 px-4 py-3">
                <h5 class="heading text-primary-color mb-3">{{ $item['title'] }}</h5>
                <a href="{{ route('service-detail', $slug) }}" class="links-primary text-white d-inline-block mb-3">
                  Read More <i class="bi bi-arrow-right-circle-fill"></i>
                </a>
                <p class="card-text m-0">{{ $item['short'] }}</p>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>

    <div class="row mt-5 g-4">
      <div class="col-12 col-lg-6">
        <div class="promise-item h-100">
          <h4 class="heading">Retail &amp; exchange</h4>
          <p class="text-color-2">We Buy &amp; Sell Cars with handpicked premium stock. Part exchange keeps upgrades
            simple — fair valuations, clear balances, and optional warranty on the car you move into. Book a viewing via
            WhatsApp {{ config('drivex.phone_primary') }} or {{ config('drivex.phone_secondary') }}.</p>
          <a href="{{ route('service-detail', 'buy-sell-cars') }}" class="links-primary text-white">Buy &amp; Sell details <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="promise-item h-100">
          <h4 class="heading">Workshop excellence</h4>
          <p class="text-color-2">Full service, brakes, engine works, timing chains, suspension, clutch &amp; gearbox,
            remaps &amp; ECU tuning — each with its own deep-dive page covering process, benefits, inclusions and FAQs.
            Combine jobs for one efficient booking.</p>
          <a href="{{ route('service-detail', 'full-service') }}" class="links-primary text-white">Full service details <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>

    <div class="row mt-4 g-4 align-items-center bg-secondary-color rounded-4 p-4 p-xl-5 mx-0">
      <div class="col-12 col-lg-8">
        <h3 class="heading mb-2">Not sure which service you need?</h3>
        <p class="text-color-2 mb-0">Tell us your registration, symptoms or the car you want — after the thank-you
          message we open WhatsApp so {{ config('drivex.name') }} can advise you directly. Email
          {{ config('drivex.email') }} or follow @drivexmotors.uk for stock updates.</p>
      </div>
      <div class="col-12 col-lg-4 text-lg-end">
        <a href="{{ route('contact-us') }}" class="btn btn-lg btn-cta-primary">Get a Quote</a>
      </div>
    </div>
  </div>
</section>

<x-ads-cta />
<x-dark-appointment />

@endsection
