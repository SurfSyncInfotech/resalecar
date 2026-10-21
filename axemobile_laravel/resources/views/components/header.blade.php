{{-- Header --}}
<header class="header sticky-top">
  <div class="b-container">
    <nav class="navbar navbar-expand-lg navbar-drivex" aria-label="DriveX Automotors navigation">
      <div class="container-fluid px-0 px-sm-2">
        <a class="navbar-brand brand-lockup d-flex align-items-center py-1" href="{{ route('index') }}">
          <img src="{{ asset('assets/img/Main-Logo.png') }}" alt="DriveX Automotors UK LTD — Cars for a Brighter Tomorrow"
            class="brand-logo-img img-fluid">
        </a>
        <button class="navbar-toggler bg-primary-color" type="button" data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-start bg-accent-color" tabindex="-1" id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header border-bottom border-secondary" id="offcanvasNavbarLabel">
            <a class="navbar-brand brand-lockup" href="{{ route('index') }}">
              <img src="{{ asset('assets/img/Main-Logo.png') }}" alt="DriveX Automotors UK LTD"
                class="brand-logo-img img-fluid">
            </a>
            <button type="button" class="btn-close bg-primary-color py-2 px-3" data-bs-dismiss="offcanvas"
              aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav mx-auto my-lg-2 gap-lg-2 gap-xl-3 align-items-lg-center">
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('index') ? 'active' : '' }}"
                  @if(request()->routeIs('index')) aria-current="page" @endif
                  href="{{ route('index') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('about-us') ? 'active' : '' }}"
                  href="{{ route('about-us') }}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('services') || request()->routeIs('service-detail') ? 'active' : '' }}"
                  href="{{ route('services') }}">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('products') || request()->routeIs('product-detail') ? 'active' : '' }}"
                  href="{{ route('products') }}">Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('contact-us') ? 'active' : '' }}"
                  href="{{ route('contact-us') }}">Contact Us</a>
              </li>
            </ul>
            <div class="mt-3 mt-lg-0 ms-lg-2">
              <a href="https://wa.me/{{ config('drivex.whatsapp') }}" target="_blank" rel="noopener"
                class="btn btn-lg btn-cta-secondary d-lg-inline-block w-100 w-lg-auto">Book Viewing</a>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </div>
</header>
{{-- #header end --}}
