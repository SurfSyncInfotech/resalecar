@php
  $extra = \App\Support\DriveXContent::serviceExtras($slug, $service);
@endphp
@extends('layouts.default')

@section('title', $service['title'] . ' | ' . config('drivex.name'))

@section('content')

<x-page-title title="{{ $service['title'] }}" />

<section class="section py-5 my-4 my-xl-5">
  <div class="b-container">
    <div class="row mx-auto g-4 g-xl-5">
      <div class="col-12 col-lg-4 order-2 order-lg-1">
        <div class="row mx-auto d-flex flex-column">
          <x-service-widget :active="$slug" />
        </div>
      </div>

      <div class="col-12 col-lg-8 order-1">
        <div class="ratio ratio-16x9 mb-4">
          <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}"
            class="img-fluid rounded-4 object-fit-cover w-100 h-100">
        </div>

        <p class="text-primary-color fw-bold text-uppercase small mb-2" style="letter-spacing:0.12em;">
          {{ config('drivex.name') }} · {{ config('drivex.tagline') }}
        </p>
        <h2 class="heading mt-1">{{ $service['headline'] }} —
          <span class="text-primary-color">{{ $service['title'] }}</span>
        </h2>

        @foreach ($extra['body'] as $para)
          <p class="text-color-2 mt-3">{{ $para }}</p>
        @endforeach

        <div class="row g-3 mt-2">
          <div class="col-6 col-md-4">
            <div class="ratio ratio-1x1 rounded-4 overflow-hidden">
              <img src="{{ asset('assets/img/drivex/showroom.jpg') }}" class="w-100 h-100 object-fit-cover" alt="DriveX showroom">
            </div>
          </div>
          <div class="col-6 col-md-4">
            <div class="ratio ratio-1x1 rounded-4 overflow-hidden">
              <img src="{{ asset('assets/img/drivex/workshop.jpg') }}" class="w-100 h-100 object-fit-cover" alt="DriveX workshop">
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="ratio ratio-1x1 ratio-md-1x1 rounded-4 overflow-hidden" style="min-height:160px;">
              <img src="{{ asset($service['image']) }}" class="w-100 h-100 object-fit-cover" alt="{{ $service['title'] }} detail">
            </div>
          </div>
        </div>

        <h3 class="heading mt-5 mb-3">What you get</h3>
        <div class="row g-3">
          @foreach ($extra['benefits'] as $benefit)
            <div class="col-12 col-md-6">
              <div class="promise-item h-100 mb-0">
                <p class="text-color-2 mb-0"><i class="bi bi-check2-circle text-primary-color me-2"></i>{{ $benefit }}</p>
              </div>
            </div>
          @endforeach
        </div>

        <h3 class="heading mt-5 mb-3">Typically includes</h3>
        <ul class="list-unstyled fs-5 text-color-2">
          @foreach ($extra['includes'] as $item)
            <li class="mb-3"><i class="bi bi-check-square-fill text-primary-color me-2"></i>{{ $item }}</li>
          @endforeach
        </ul>

        <h3 class="heading mt-5 mb-3">How it works</h3>
        <div class="row bg-secondary-color mx-0 g-3 pt-3 px-3 pb-4 rounded-4">
          @foreach ($service['steps'] as $index => $step)
            <div class="col-md-6">
              <div class="bg-accent-color-2 text-white p-4 rounded-4 h-100">
                <h5 class="bg-accent-color heading rounded-3 p-3 mb-3 d-inline-block">Step {{ $index + 1 }}</h5>
                <h6 class="heading">{{ $step['title'] }}</h6>
                <p class="text-color-2 mb-0">{{ $step['text'] }}</p>
              </div>
            </div>
          @endforeach
        </div>

        <h3 class="heading mt-5 mb-3">Why choose DriveX for {{ $service['title'] }}</h3>
        <div class="row g-3">
          @foreach ($extra['why'] as $reason)
            <div class="col-12 col-md-6">
              <div class="d-flex gap-3 align-items-start p-3 rounded-4 bg-secondary-color h-100">
                <i class="bi bi-star-fill text-primary-color fs-5 mt-1"></i>
                <p class="text-color-2 mb-0">{{ $reason }}</p>
              </div>
            </div>
          @endforeach
        </div>

        <div class="mt-5 p-4 rounded-4 bg-secondary-color">
          <h4 class="heading mb-3">Ready to get started with {{ $service['title'] }}?</h4>
          <p class="text-color-2 mb-3">Tell us about your car or enquiry. After the thank-you message we open WhatsApp
            so you can message {{ config('drivex.name') }} directly on {{ config('drivex.phone_primary') }}.</p>
          <p class="text-color-2 small mb-4">Email: {{ config('drivex.email') }} · Partner: {{ config('drivex.partner') }}</p>
          <a href="https://wa.me/{{ config('drivex.whatsapp') }}?text={{ urlencode('Hi DriveX Automotors UK LTD, I am interested in: ' . $service['title']) }}"
            target="_blank" rel="noopener" class="btn btn-lg btn-cta-primary me-2 mb-2">WhatsApp Us</a>
          <a href="{{ route('contact-us') }}" class="btn btn-lg btn-cta-secondary mb-2">Contact Form</a>
        </div>

        <h3 class="heading mt-5">FAQs: {{ $service['title'] }}</h3>
        <div class="accordion" id="accordionServiceDetail">
          @foreach ($extra['faqs'] as $i => $faq)
            <div class="accordion-item">
              <h5 class="accordion-header" id="sd-heading-{{ $i }}">
                <button class="accordion-button {{ $i > 0 ? 'collapsed' : '' }}" type="button"
                  data-bs-toggle="collapse" data-bs-target="#sd-collapse-{{ $i }}"
                  aria-expanded="{{ $i === 0 ? 'true' : 'false' }}" aria-controls="sd-collapse-{{ $i }}">
                  {{ $faq['q'] }}
                </button>
              </h5>
              <div id="sd-collapse-{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}"
                aria-labelledby="sd-heading-{{ $i }}" data-bs-parent="#accordionServiceDetail">
                <div class="accordion-body">
                  <p class="mb-0">{{ $faq['a'] }}</p>
                </div>
              </div>
            </div>
          @endforeach
        </div>

        <div class="mt-5">
          <h4 class="heading mb-3">Related services</h4>
          <div class="d-flex flex-wrap gap-2">
            @foreach ($services as $otherSlug => $other)
              @if ($otherSlug !== $slug)
                <a href="{{ route('service-detail', $otherSlug) }}" class="btn btn-cta-secondary btn-sm">{{ $other['title'] }}</a>
              @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
