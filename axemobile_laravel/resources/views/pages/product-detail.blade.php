@php
  $extra = \App\Support\DriveXContent::productExtras($product);
@endphp
@extends('layouts.default')

@section('title', $product['title'] . ' | ' . config('drivex.name'))

@section('content')

<x-page-title title="{{ $product['title'] }}" />

<section class="section py-5 my-4 my-xl-5">
  <div class="b-container">
    <div class="row g-4 g-xl-5 align-items-start">
      <div class="col-12 col-lg-7">
        <div class="ratio ratio-16x9 rounded-4 overflow-hidden mb-3">
          <img src="{{ asset($product['image']) }}" alt="{{ $product['title'] }}"
            class="w-100 h-100 object-fit-cover">
        </div>
        <div class="row g-3 mb-4">
          <div class="col-4">
            <div class="ratio ratio-1x1 rounded-3 overflow-hidden">
              <img src="{{ asset($product['image']) }}" class="w-100 h-100 object-fit-cover" alt="">
            </div>
          </div>
          <div class="col-4">
            <div class="ratio ratio-1x1 rounded-3 overflow-hidden">
              <img src="{{ asset('assets/img/drivex/showroom.jpg') }}" class="w-100 h-100 object-fit-cover" alt="">
            </div>
          </div>
          <div class="col-4">
            <div class="ratio ratio-1x1 rounded-3 overflow-hidden">
              <img src="{{ asset('assets/img/drivex/about.jpg') }}" class="w-100 h-100 object-fit-cover" alt="">
            </div>
          </div>
        </div>

        <p class="text-primary-color fw-bold text-uppercase small mb-2" style="letter-spacing:0.12em;">
          {{ config('drivex.name') }} · Quality Used Cars
        </p>
        <h2 class="heading">{{ $product['title'] }}
          <span class="text-primary-color d-block d-md-inline mt-2 mt-md-0">{{ $product['badge'] }}</span>
        </h2>

        @foreach ($extra['body'] as $para)
          @if(trim($para) !== '')
            <p class="text-color-2 mt-3">{{ $para }}</p>
          @endif
        @endforeach

        <h4 class="heading mt-5 mb-3">Highlights</h4>
        <ul class="list-unstyled fs-5 text-color-2">
          @foreach ($product['highlights'] as $item)
            <li class="mb-3"><i class="bi bi-check-square-fill text-primary-color me-2"></i>{{ $item }}</li>
          @endforeach
          <li class="mb-3"><i class="bi bi-check-square-fill text-primary-color me-2"></i> Part exchange welcome</li>
          <li class="mb-3"><i class="bi bi-check-square-fill text-primary-color me-2"></i> Warranty on selected stock</li>
          <li class="mb-3"><i class="bi bi-check-square-fill text-primary-color me-2"></i> UK-based dealer · Coventry</li>
          <li class="mb-3"><i class="bi bi-check-square-fill text-primary-color me-2"></i> Book viewing via WhatsApp</li>
        </ul>

        <h4 class="heading mt-5 mb-3">Buying with DriveX</h4>
        <div class="row g-3">
          @foreach ($extra['buying_steps'] as $i => $step)
            <div class="col-12 col-md-6">
              <div class="promise-item h-100">
                <h6 class="text-primary-color">0{{ $i + 1 }} · {{ $step['title'] }}</h6>
                <p class="text-color-2 mb-0">{{ $step['text'] }}</p>
              </div>
            </div>
          @endforeach
        </div>

        <h4 class="heading mt-5 mb-3">FAQs</h4>
        <div class="accordion" id="accordionProduct">
          @foreach ($extra['faqs'] as $i => $faq)
            <div class="accordion-item">
              <h5 class="accordion-header">
                <button class="accordion-button {{ $i > 0 ? 'collapsed' : '' }}" type="button"
                  data-bs-toggle="collapse" data-bs-target="#pd-{{ $i }}">{{ $faq['q'] }}</button>
              </h5>
              <div id="pd-{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}"
                data-bs-parent="#accordionProduct">
                <div class="accordion-body"><p class="mb-0">{{ $faq['a'] }}</p></div>
              </div>
            </div>
          @endforeach
        </div>
      </div>

      <div class="col-12 col-lg-5">
        <div class="card bg-secondary-color rounded-4 p-4 sticky-lg-top" style="top: 100px;">
          <img src="{{ asset('assets/img/Main-Logo.png') }}" alt="DriveX Automotors UK LTD" class="img-fluid mb-3"
            style="max-height:64px;width:auto;">
          <p class="text-primary-color text-uppercase fw-bold mb-2" style="letter-spacing: 0.12em;">Asking</p>
          <h3 class="heading text-primary-color mb-3">{{ $product['price'] }}</h3>
          <p class="text-color-2 small">{{ config('drivex.tagline') }} · Competitive prices on quality used cars</p>
          <div class="border-top border-secondary pt-3">
            @foreach ($product['specs'] as $label => $value)
              <div class="d-flex justify-content-between py-2 border-bottom border-secondary">
                <span class="text-color-2">{{ $label }}</span>
                <span class="fw-semibold text-end ps-3">{{ $value }}</span>
              </div>
            @endforeach
          </div>
          <a href="https://wa.me/{{ config('drivex.whatsapp') }}?text={{ urlencode('Hi DriveX Automotors UK LTD, I would like to book a viewing for: ' . $product['title']) }}"
            target="_blank" rel="noopener" class="btn btn-lg btn-cta-primary w-100 mt-4">Book for Viewing</a>
          <a href="tel:{{ config('drivex.phone_primary') }}"
            class="btn btn-lg btn-cta-secondary w-100 mt-3">Call {{ config('drivex.phone_primary') }}</a>
          <a href="mailto:{{ config('drivex.email') }}"
            class="btn btn-lg btn-cta-secondary w-100 mt-3">Email Us</a>
          <p class="text-color-2 small mt-3 mb-0 text-center">Part exchange welcome · Warranty on selected stock<br>
            Partner: {{ config('drivex.partner') }}</p>
        </div>
      </div>
    </div>

    <div class="row mt-5">
      <div class="col-12">
        <h4 class="heading mb-4">More from our range</h4>
        <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
          @foreach ($products as $otherSlug => $other)
            @if ($otherSlug !== $slug)
              <div class="col">
                <a href="{{ route('product-detail', $otherSlug) }}" class="text-decoration-none">
                  <div class="card product-card blogs text-white overflow-hidden rounded-4 h-100">
                    <div class="overflow-hidden" style="height: 180px;">
                      <img src="{{ asset($other['image']) }}" class="w-100 h-100 object-fit-cover"
                        alt="{{ $other['title'] }}">
                    </div>
                    <div class="card-body p-3">
                      <h6 class="mb-1">{{ $other['title'] }}</h6>
                      <span class="price-tag">{{ $other['price'] }}</span>
                    </div>
                  </div>
                </a>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
