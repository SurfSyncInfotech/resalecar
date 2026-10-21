{{-- Footer --}}
<footer class="section py-5" style="background: linear-gradient(to bottom,#1B1B1B ,#0A0A0A)">
  <div class="b-container">
    <div class="row g-4 g-xl-5 mt-5">

      <div class="col-12 col-xl-4 pe-xl-5 mt-0">
        <div class="footer-logo-box d-flex align-items-center justify-content-center justify-content-xl-start">
          <a href="{{ route('index') }}" class="d-inline-block">
            <img src="{{ asset('assets/img/Main-Logo.png') }}" alt="DriveX Automotors UK LTD — Cars for a Brighter Tomorrow" class="brand-logo-img img-fluid">
          </a>
        </div>
        <p class="mt-4 text-center text-xl-start">{{ config('drivex.tagline') }}. Handpicked premium used cars,
          professional servicing, warranty options and part exchange — quality, trust and value from a UK-based dealer.</p>
        <a href="{{ route('contact-us') }}" class="btn btn-lg btn-cta-secondary d-block mt-4">Contact Us <i
            class="bi bi-arrow-right-short"></i></a>
      </div>

      <div class="col-12 col-md-6 col-xl-4 px-3 px-xl-5 mt-5 mt-xl-0">
        <h5 class="heading">Navigation</h5>
        <hr class="border-2">
        <ul class="list-unstyled">
          <li class="mt-3"><a class="text-color-2 links-primary {{ request()->routeIs('index') ? 'active' : '' }}"
              href="{{ route('index') }}">Home</a></li>
          <li class="mt-3"><a class="text-color-2 links-primary {{ request()->routeIs('about-us') ? 'active' : '' }}"
              href="{{ route('about-us') }}">About Us</a></li>
          <li class="mt-3"><a class="text-color-2 links-primary {{ request()->routeIs('services') ? 'active' : '' }}"
              href="{{ route('services') }}">Services</a></li>
          <li class="mt-3"><a class="text-color-2 links-primary {{ request()->routeIs('products') ? 'active' : '' }}"
              href="{{ route('products') }}">Products</a></li>
          <li class="mt-3"><a class="text-color-2 links-primary {{ request()->routeIs('contact-us') ? 'active' : '' }}"
              href="{{ route('contact-us') }}">Contact Us</a></li>
        </ul>
      </div>

      <div class="col-12 col-md-6 col-xl-4 px-3 px-xl-5 mt-5 mt-xl-0">
        <div class="mt-2">
          <h5 class="heading">Visit Us</h5>
          <hr class="border-2 my-2">
          <p class="text-color-2">{{ config('drivex.address') }}</p>
          <p class="text-color-2 mb-0"><strong class="text-white">Partner Dealer:</strong> {{ config('drivex.partner') }}</p>
        </div>
        <div class="mt-5">
          <h5 class="heading">Contact Info</h5>
          <hr class="border-2">
          <a class="links-primary text-color-2 fw-normal" href="tel:{{ config('drivex.phone_primary') }}">{{ config('drivex.phone_primary') }}</a> <br>
          <a class="links-primary text-color-2 fw-normal" href="tel:{{ config('drivex.phone_secondary') }}">{{ config('drivex.phone_secondary') }}</a> <br>
          <a class="links-primary text-color-2 fw-normal" href="mailto:{{ config('drivex.email') }}">{{ config('drivex.email') }}</a>
          <div class="social-box flex-row w-100 mt-4">
            <a href="{{ config('drivex.instagram') }}" target="_blank" rel="noopener" class="rounded-2"
              style="width: 40px; height: 40px;" aria-label="DriveX Instagram"><i class="bi bi-instagram fs-5"></i></a>
            <a href="{{ config('drivex.instagram_owner') }}" target="_blank" rel="noopener" class="rounded-2"
              style="width: 40px; height: 40px;" aria-label="Director Instagram"><i class="bi bi-person-badge fs-5"></i></a>
            <a href="https://wa.me/{{ config('drivex.whatsapp') }}" target="_blank" rel="noopener" class="rounded-2"
              style="width: 40px; height: 40px;" aria-label="WhatsApp"><i class="bi bi-whatsapp fs-5"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="row mt-4 pt-0 pt-xl-5 text-center">
      <p class="text-color-2 mb-0">Copyright © {{ date('Y') }} {{ config('drivex.name') }}. All Rights Reserved.
        Directed by {{ config('drivex.director') }}.</p>
    </div>

  </div>
</footer>
{{-- #footer end --}}
