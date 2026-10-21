@extends('layouts.default')

@section('title', 'Products | Quality Used Cars | ' . config('drivex.name'))

@section('content')

<x-page-title title="Products" />

<section class="section py-5 my-5">
  <div class="b-container">
    <div class="row mx-auto text-center mb-5">
      <h6 class="text-color-2">QUALITY USED CARS</h6>
      <h2 class="heading mt-3" data-aos="fade-up" data-aos-delay="500" data-aos-duration="3000">
        Handpicked Premium Stock at Competitive Prices</h2>
      <p class="text-color-2 mt-3 col-xl-10 mx-auto">Browse featured categories from {{ config('drivex.short_name') }}.
        Each card opens a unique product page with specs, highlights and a direct path to book a viewing on WhatsApp.
        Stock rotates — contact us for the latest availability.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">
      @foreach ($products as $slug => $product)
        <div class="col">
          <a href="{{ route('product-detail', $slug) }}" class="text-decoration-none h-100 d-block">
            <div class="card product-card blogs text-white overflow-hidden rounded-4 h-100" data-aos="fade-up"
              data-aos-delay="{{ 300 + ($loop->index % 3) * 120 }}" data-aos-duration="2800">
              <div class="overflow-hidden img-ratio-113">
                <img src="{{ asset($product['image']) }}" class="blogs-cover img-fluid w-100 h-100 object-fit-cover"
                  alt="{{ $product['title'] }}">
              </div>
              <div class="card-body p-4 d-flex flex-column">
                <span class="text-primary-color small fw-bold text-uppercase">{{ $product['badge'] }}</span>
                <h5 class="fw-bolder mt-2">{{ $product['title'] }}</h5>
                <p class="card-text text-color-2 flex-grow-1">{{ $product['short'] }}</p>
                <div class="d-flex justify-content-between align-items-center mt-3">
                  <span class="price-tag">{{ $product['price'] }}</span>
                  <span class="links-primary text-white">Details <i class="bi bi-arrow-right-circle-fill"></i></span>
                </div>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>

    <div class="text-center mt-5 p-4 rounded-4 bg-secondary-color">
      <h4 class="heading">Looking for something specific?</h4>
      <p class="text-color-2 mb-4">Tell us the make, model and budget — we buy &amp; sell cars and can help source your
        next vehicle.</p>
      <a href="https://wa.me/{{ config('drivex.whatsapp') }}?text={{ urlencode('Hi DriveX, I am looking for a specific car...') }}"
        target="_blank" rel="noopener" class="btn btn-lg btn-cta-primary">Message on WhatsApp</a>
    </div>
  </div>
</section>

<x-ads-cta />

@endsection
