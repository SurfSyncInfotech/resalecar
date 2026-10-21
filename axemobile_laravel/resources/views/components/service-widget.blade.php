@props(['active' => null])

@php
  $services = config('drivex.services');
@endphp

<div class="card bg-secondary-color rounded-4 p-2">
  <div class="card-body">
    <h4 class="heading mb-3">Our Services</h4>
    <div class="border-top pt-4">
      @foreach ($services as $slug => $item)
        <a href="{{ route('service-detail', $slug) }}"
          class="btn btn-lg {{ $active === $slug ? 'btn-cta-primary' : 'btn-cta-secondary' }} w-100 rounded-3 text-start mb-3">
          {{ $item['title'] }}
          <i class="bi bi-arrow-right float-end"></i>
        </a>
      @endforeach
    </div>
  </div>
</div>

<div class="card h-100 position-relative rounded-4 mt-5 overflow-hidden"
  style="background-image: url('{{ asset('assets/img/drivex/cta.jpg') }}'); background-size: cover; background-position: center;">
  <div class="bg-overlay position-absolute top-0 start-0 w-100 h-100 z-1"></div>
  <div class="card-body position-relative z-2 py-5 px-2 text-center">
    <h3 class="heading">Book Your <span class="text-primary-color">Viewing</span> Today</h3>
    <p class="card-text mt-3">Quality used cars · Competitive prices · UK based dealer</p>
    <a href="https://wa.me/{{ config('drivex.whatsapp') }}" target="_blank" rel="noopener"
      class="btn btn-lg btn-cta-primary mt-3">WhatsApp Now</a>
  </div>
</div>
