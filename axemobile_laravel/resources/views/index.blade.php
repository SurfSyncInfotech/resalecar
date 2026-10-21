@extends('layouts.default')

@section('title', config('drivex.name') . ' | Premium Used Cars, Service & Warranty UK')

@section('content')

{{-- Hero section --}}
<section class="section hero position-relative bg-size-cover bg-position-center bg-repeat-no-repeat"
  style="background-image: linear-gradient(90deg, rgba(8,8,8,0.88) 0%, rgba(8,8,8,0.55) 48%, rgba(8,8,8,0.35) 100%), url('{{ asset('assets/img/drivex/hero-luxury.jpg') }}');">
  <div class="bg-overlay hero-overlay"></div>
  <div class="b-container h-100 position-relative z-2">
    <div class="row hero-content-row align-items-center">
      <div class="col-12 col-xl-9 d-flex flex-column justify-content-center text-center text-xl-start">
        <p class="text-primary-color fw-bold text-uppercase mb-3" data-aos="fade-right" data-aos-delay="200"
          data-aos-duration="1500" style="letter-spacing: 0.18em;">{{ config('drivex.short_name') }} · UK Based</p>
        <h1 class="fw-bolder mb-3" data-aos="fade-right" data-aos-delay="500" data-aos-duration="3000">
          {{ config('drivex.name') }}
        </h1>
        <h2 class="h3 fw-semibold mb-4 text-white" data-aos="fade-right" data-aos-delay="700" data-aos-duration="2500">
          We Buy &amp; Sell Cars · Service · Warranty · Part Exchange
        </h2>
        <p class="lead text-color-2 mb-4 col-xl-10 mx-auto mx-xl-0" data-aos="fade-right" data-aos-delay="900" data-aos-duration="2000">
          {{ config('drivex.slogan') }}. Handpicked premium used cars at competitive prices — quality, trust and value
          from Coventry, United Kingdom.
        </p>
        <div class="d-flex flex-column flex-sm-row gap-3 align-self-center align-self-xl-start">
          <a href="{{ route('products') }}" class="btn btn-xl btn-cta-primary">View Stock</a>
          <a href="https://wa.me/{{ config('drivex.whatsapp') }}?text={{ urlencode('Hi DriveX, I would like to book a viewing.') }}"
            target="_blank" rel="noopener" class="btn btn-xl btn-cta-secondary">Book for Viewing</a>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- #hero end --}}

{{-- Feature section --}}
<section class="feature position-relative">
  <div class="b-container">
    <div class="row feature-box-wrapper g-3 g-lg-0 justify-content-center align-items-stretch">
      <div class="col-12 col-md-4">
        <div class="feature-box feature-box-1 h-100">
          <h5 class="feature-title">Quality Used Cars</h5>
          <p class="mb-0">Handpicked premium vehicles selected for condition, desirability and fair market value.</p>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="feature-box feature-box-2 h-100">
          <h5 class="feature-title">Service &amp; Warranty</h5>
          <p class="mb-0">Full workshop support plus warranty options so every journey feels protected.</p>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="feature-box feature-box-3 h-100">
          <h5 class="feature-title">Part Exchange</h5>
          <p class="mb-0">Upgrade seamlessly — fair valuations and a transparent path into your next car.</p>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- #feature end --}}

{{-- About section --}}
<section class="section about-home py-5 mt-4 mt-xl-5">
  <div class="b-container">
    <div class="row g-4 g-xl-5 align-items-center">
      <div class="col-12 col-lg-6" data-aos="fade-right" data-aos-delay="300" data-aos-duration="2000">
        <div class="about-collage">
          <div class="about-collage-main">
            <img src="{{ asset('assets/img/drivex/about.jpg') }}" alt="DriveX premium used cars" class="w-100 h-100 object-fit-cover">
          </div>
          <div class="about-collage-stack">
            <img src="{{ asset('assets/img/drivex/showroom.jpg') }}" alt="DriveX showroom" class="w-100 h-100 object-fit-cover rounded-4">
            <img src="{{ asset('assets/img/drivex/workshop.jpg') }}" alt="DriveX workshop service" class="w-100 h-100 object-fit-cover rounded-4">
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6" data-aos="fade-left" data-aos-delay="400" data-aos-duration="2000">
        <h6 class="text-color-2 mb-3">ABOUT US</h6>
        <h2 class="heading mb-3">
          More Than Just Cars —
          <span class="text-primary-color">Quality People, Better Journeys</span>
        </h2>
        <p class="text-color-2">{{ config('drivex.name') }} is a UK-based dealer helping customers buy, sell and maintain
          quality used cars with complete confidence. Directed by {{ config('drivex.director') }}, we deliver honest
          advice, competitive pricing and workshop expertise — from brakes and engines to remaps, clutch work and full
          servicing.</p>
        <p class="text-color-2">Partnered with {{ config('drivex.partner') }}, our promise is simple:
          <strong class="text-white">Quality · Trust · Value</strong>. Whether you need a viewing, part exchange,
          warranty cover or specialist repairs, DriveX is built for brighter journeys.</p>
        <ul class="list-unstyled text-color-2 mt-4 mb-4 home-about-list">
          <li class="mb-2"><i class="bi bi-check2-circle text-primary-color me-2"></i> Handpicked premium used cars</li>
          <li class="mb-2"><i class="bi bi-check2-circle text-primary-color me-2"></i> Buy, sell &amp; part exchange</li>
          <li class="mb-2"><i class="bi bi-check2-circle text-primary-color me-2"></i> Full service, brakes, engines &amp; remaps</li>
          <li class="mb-2"><i class="bi bi-check2-circle text-primary-color me-2"></i> Warranty options on selected stock</li>
          <li class="mb-2"><i class="bi bi-check2-circle text-primary-color me-2"></i> Coventry, UK · Direct WhatsApp support</li>
        </ul>
        <div class="d-flex flex-column flex-sm-row gap-3">
          <a href="{{ route('about-us') }}" class="btn btn-lg btn-cta-primary">Discover Our Story</a>
          <a href="{{ config('drivex.instagram') }}" target="_blank" rel="noopener" class="btn btn-lg btn-cta-secondary">@drivexmotors.uk</a>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- #about end --}}

{{-- Promise strip --}}
<section class="section py-4 promise-strip">
  <div class="b-container">
    <div class="row g-3 text-center text-md-start align-items-stretch">
      <div class="col-6 col-lg-3">
        <div class="promise-item h-100">
          <i class="bi bi-shield-check text-primary-color fs-3"></i>
          <h6 class="heading mt-2 mb-1">Warranty Included</h6>
          <p class="text-color-2 small mb-0">Selected vehicles with peace-of-mind cover</p>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="promise-item h-100">
          <i class="bi bi-currency-pound text-primary-color fs-3"></i>
          <h6 class="heading mt-2 mb-1">Competitive Prices</h6>
          <p class="text-color-2 small mb-0">Fair deals on quality used cars</p>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="promise-item h-100">
          <i class="bi bi-handshake text-primary-color fs-3"></i>
          <h6 class="heading mt-2 mb-1">Part Exchange</h6>
          <p class="text-color-2 small mb-0">Upgrade with transparent valuations</p>
        </div>
      </div>
      <div class="col-6 col-lg-3">
        <div class="promise-item h-100">
          <i class="bi bi-geo-alt text-primary-color fs-3"></i>
          <h6 class="heading mt-2 mb-1">UK Based Dealer</h6>
          <p class="text-color-2 small mb-0">Coventry roots · Nationwide mindset</p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Services section --}}
<section class="section py-5 my-4 my-xl-5">
  <div class="b-container">
    <div class="row align-items-end mb-4 mb-xl-5 g-3">
      <div class="col-12 col-lg-8 text-center text-lg-start">
        <h6 class="text-color-2">OUR SOLUTIONS</h6>
        <h2 class="heading mt-2" data-aos="fade-up" data-aos-delay="400" data-aos-duration="2500">
          Buy, Sell, Service &amp; Protect<br class="d-none d-md-block">Under One Premium Roof</h2>
        <p class="text-color-2 mt-3 mb-0 col-lg-11">From sourcing your next car to keeping it performing at its best —
          every service card opens a dedicated page with unique detail. We Buy &amp; Sell Cars · Service · Warranty · Part Exchange.</p>
      </div>
      <div class="col-12 col-lg-4 text-center text-lg-end">
        <a href="{{ route('services') }}" class="btn btn-lg btn-cta-primary">View All Services</a>
      </div>
    </div>

    <div class="row g-3 g-xl-4 mb-4">
      <div class="col-12 col-md-7">
        <div class="ratio ratio-16x9 rounded-4 overflow-hidden">
          <img src="{{ asset('assets/img/drivex/showroom.jpg') }}" class="w-100 h-100 object-fit-cover"
            alt="DriveX luxury showroom cars">
        </div>
      </div>
      <div class="col-12 col-md-5">
        <div class="row g-3 h-100">
          <div class="col-6 col-md-12">
            <div class="ratio ratio-16x9 rounded-4 overflow-hidden h-100" style="min-height: 140px;">
              <img src="{{ asset('assets/img/drivex/service-engine.jpg') }}" class="w-100 h-100 object-fit-cover"
                alt="Engine works at DriveX">
            </div>
          </div>
          <div class="col-6 col-md-12">
            <div class="ratio ratio-16x9 rounded-4 overflow-hidden h-100" style="min-height: 140px;">
              <img src="{{ asset('assets/img/drivex/service-remap.jpg') }}" class="w-100 h-100 object-fit-cover"
                alt="ECU remaps DriveX">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row justify-content-center g-4">
      @foreach (array_slice(config('drivex.services'), 0, 8, true) as $slug => $item)
        <div class="col-12 col-sm-6 col-xl-3">
          <a href="{{ route('service-detail', $slug) }}" class="text-decoration-none d-block h-100">
            <div class="service-box position-relative h-100 p-4"
              data-aos="fade-up" data-aos-delay="{{ 300 + ($loop->index * 80) }}" data-aos-duration="2000">
              <div class="service-icon position-absolute">
                <i class="bi bi-arrow-right-short"></i>
              </div>
              <div class="p-2"></div>
              <i class="bi {{ $item['icon'] }} text-primary-color fs-2"></i>
              <h5 class="heading mt-3 text-white">{{ $item['title'] }}</h5>
              <p class="text-color-2 my-3 mb-0">{{ $item['short'] }}</p>
              <span class="links-primary text-white d-inline-block mt-3">Read More</span>
            </div>
          </a>
        </div>
      @endforeach
    </div>
  </div>
</section>
{{-- #services end --}}


{{-- Ownership journey --}}
<section class="section py-5">
  <div class="b-container">
    <div class="row g-4 g-xl-5 align-items-center">
      <div class="col-12 col-lg-5">
        <h6 class="text-color-2">THE DRIVEX DIFFERENCE</h6>
        <h2 class="heading mt-2">From first message to every mile after</h2>
        <p class="text-color-2 mt-3">{{ config('drivex.name') }} is more than a showroom moment. We help you buy or sell,
          arrange part exchange, discuss warranty, and keep the car performing with full service, brakes, engines,
          timing chains, suspension, clutch &amp; gearbox and remaps.</p>
        <p class="text-color-2">Follow <a href="{{ config('drivex.instagram') }}" target="_blank" rel="noopener"
            class="text-primary-color links-primary">@drivexmotors.uk</a> for stock drops, or WhatsApp
          {{ config('drivex.phone_primary') }} for a fast reply from our Coventry team.</p>
        <a href="{{ route('services') }}" class="btn btn-lg btn-cta-primary mt-2">Explore Services</a>
      </div>
      <div class="col-12 col-lg-7">
        <div class="row g-3">
          <div class="col-12 col-sm-6">
            <div class="promise-item h-100">
              <h5 class="heading text-primary-color">01 · Retail</h5>
              <p class="text-color-2 mb-0">We buy &amp; sell handpicked premium used cars at competitive prices with
                honest condition notes and viewing by appointment.</p>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="promise-item h-100">
              <h5 class="heading text-primary-color">02 · Exchange</h5>
              <p class="text-color-2 mb-0">Part exchange your current car with a fair valuation and a clear balance
                against the vehicle you want next.</p>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="promise-item h-100">
              <h5 class="heading text-primary-color">03 · Protect</h5>
              <p class="text-color-2 mb-0">Warranty options on selected stock plus guidance so you understand cover
                before you drive away.</p>
            </div>
          </div>
          <div class="col-12 col-sm-6">
            <div class="promise-item h-100">
              <h5 class="heading text-primary-color">04 · Maintain</h5>
              <p class="text-color-2 mb-0">Workshop care under one roof — service, brakes, engines, remaps and more
                with transparent quotes.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- Warranty section --}}
<x-warranty />
{{-- #warranty end --}}

{{-- Products preview --}}
<section class="section py-5 my-5">
  <div class="b-container">
    <h6 class="text-color-2 text-center">QUALITY USED CARS</h6>
    <h2 class="heading text-center" data-aos="fade-up" data-aos-delay="500" data-aos-duration="3000">
      Featured Premium Stock</h2>
    <p class="text-color-2 text-center my-4">Competitive prices. Handpicked vehicles. Book a viewing today.</p>
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 g-4 mt-2">
      @foreach (array_slice(config('drivex.products'), 0, 3, true) as $slug => $product)
        <div class="col">
          <a href="{{ route('product-detail', $slug) }}" class="text-decoration-none">
            <div class="card product-card blogs text-white overflow-hidden rounded-4 h-100" data-aos="fade-up"
              data-aos-delay="{{ 400 + $loop->index * 150 }}" data-aos-duration="2500">
              <div class="overflow-hidden img-ratio-113">
                <img src="{{ asset($product['image']) }}" class="blogs-cover img-fluid w-100 h-100 object-fit-cover"
                  alt="{{ $product['title'] }}">
              </div>
              <div class="card-body p-4">
                <span class="text-primary-color small fw-bold text-uppercase">{{ $product['badge'] }}</span>
                <h5 class="fw-bolder mt-2 mb-2">{{ $product['title'] }}</h5>
                <p class="card-text text-color-2 mb-3">{{ $product['short'] }}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <span class="price-tag">{{ $product['price'] }}</span>
                  <span class="links-primary text-white">View Details <i class="bi bi-arrow-right"></i></span>
                </div>
              </div>
            </div>
          </a>
        </div>
      @endforeach
    </div>
    <div class="text-center mt-5">
      <a href="{{ route('products') }}" class="btn btn-lg btn-cta-primary">Browse All Products</a>
    </div>
  </div>
</section>

{{-- Appoinment section --}}
<x-dark-appointment />
{{-- #appointment end --}}

{{-- Testimonials section --}}
<section class="section reviews position-relative text-white py-5">
  <video autoplay muted loop playsinline class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-n1">
    <source src="{{ asset('assets/video/video-background.mp4') }}" type="video/mp4">
  </video>
  <div class="position-absolute w-100 h-100 top-0 start-0 z-0"
    style="background: linear-gradient(to top,#0A0A0A 50%,#0A0A0A 65%, transparent)">
  </div>
  <div class="b-container position-relative z-1 my-5">
    <h6 class="text-color-2 text-center pt-4">CUSTOMER REVIEWS</h6>
    <h2 class="heading text-center mt-2" data-aos="fade-up" data-aos-delay="500" data-aos-duration="3000">
      Journeys Built on <span class="text-primary-color">Trust</span> &amp; Quality
    </h2>

    <div class="row g-4 g-xl-5 my-5 pb-5">
      <div class="col-12 col-md-6 col-xl-4" data-aos="fade-right" data-aos-delay="600" data-aos-duration="3000">
        <div class="d-flex flex-column h-100 gap-4">
          <div class="card p-4">
            <p>Smooth buying experience from first WhatsApp message to handover. The car was exactly as described —
              premium feel, fair price, zero pressure.</p>
            <div class="d-flex align-items-center mt-auto pt-3">
              <div class="rounded-circle me-3 bg-primary-color d-flex align-items-center justify-content-center"
                style="width:60px;height:60px;color:#111;font-weight:800;">JK</div>
              <div>
                <h5 class="mb-0">James K.</h5>
                <small class="text-color-2">Coventry Buyer</small>
              </div>
            </div>
          </div>
          <div class="card p-4">
            <p>Part exchanged my old hatch for a much nicer executive saloon. Valuation was honest and paperwork was
              effortless. Highly recommend DriveX.</p>
            <div class="d-flex align-items-center mt-auto pt-3">
              <div class="rounded-circle me-3 bg-primary-color d-flex align-items-center justify-content-center"
                style="width:60px;height:60px;color:#111;font-weight:800;">SP</div>
              <div>
                <h5 class="mb-0">Sara P.</h5>
                <small class="text-color-2">Part Exchange Client</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-xl-4" data-aos="fade-up" data-aos-delay="1000" data-aos-duration="3000">
        <div class="d-flex flex-column h-100 gap-4">
          <div class="card p-4">
            <p>Booked full service and brake work. Clear communication, competitive pricing and the car feels sharper
              than ever. Proper workshop standards.</p>
            <div class="d-flex align-items-center mt-4">
              <div class="rounded-circle me-3 bg-primary-color d-flex align-items-center justify-content-center"
                style="width:60px;height:60px;color:#111;font-weight:800;">MT</div>
              <div>
                <h5 class="mb-0">Marcus T.</h5>
                <small class="text-color-2">Service Customer</small>
              </div>
            </div>
          </div>
          <div class="card p-4">
            <p>Remap transformed the drive — responsive, refined and still practical for daily use. Team explained
              everything before and after.</p>
            <div class="d-flex align-items-center mt-auto pt-3">
              <div class="rounded-circle me-3 bg-primary-color d-flex align-items-center justify-content-center"
                style="width:60px;height:60px;color:#111;font-weight:800;">AL</div>
              <div>
                <h5 class="mb-0">Aisha L.</h5>
                <small class="text-color-2">ECU Tuning Client</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-xl-4" data-aos="fade-left" data-aos-delay="750" data-aos-duration="3000">
        <div class="d-flex flex-column h-100 gap-4">
          <div class="card p-4">
            <p>Sold my car to DriveX quickly and for a strong offer. Professional, friendly and refreshingly
              straightforward compared to other dealers.</p>
            <div class="d-flex align-items-center mt-auto pt-3">
              <div class="rounded-circle me-3 bg-primary-color d-flex align-items-center justify-content-center"
                style="width:60px;height:60px;color:#111;font-weight:800;">DR</div>
              <div>
                <h5 class="mb-0">Daniel R.</h5>
                <small class="text-color-2">Seller</small>
              </div>
            </div>
          </div>
          <div class="card p-4">
            <p>Warranty gave me peace of mind on a premium SUV. Quality people, better journeys — the slogan is
              genuinely accurate.</p>
            <div class="d-flex align-items-center mt-auto pt-3">
              <div class="rounded-circle me-3 bg-primary-color d-flex align-items-center justify-content-center"
                style="width:60px;height:60px;color:#111;font-weight:800;">NW</div>
              <div>
                <h5 class="mb-0">Nadia W.</h5>
                <small class="text-color-2">SUV Owner</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- #testimonials end --}}

{{-- Ads-CTA section --}}
<x-ads-cta />
{{-- #ads-cta end --}}

{{-- FAQs --}}
<x-faqs />
{{-- #faqs end --}}

@endsection
