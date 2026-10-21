@extends('layouts.default')

@section('title', 'Contact Us | ' . config('drivex.name'))

@section('content')

<x-page-title title="Contact Us" />

<section class="section py-5 mt-5">
  <div class="b-container">
    <div class="row g-4 mx-auto">
      <div class="col-12 col-md-6 col-xl-4">
        <div class="card h-100 bg-secondary-color p-2 rounded-4" data-aos="fade-right" data-aos-delay="500"
          data-aos-duration="3000">
          <div class="card-body mb-0">
            <div class="bg-primary-color rounded-2 align-content-center text-center"
              style="color: #111111; width: 70px; height: 70px;">
              <i class="bi bi-geo-alt-fill fs-2"></i>
            </div>
            <h5 class="heading mt-3">Our Location</h5>
            <p class="text-color-2 fs-5 mt-3 mb-0"><em>{{ config('drivex.address') }}</em></p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-xl-4">
        <div class="card h-100 bg-secondary-color p-2 rounded-4" data-aos="fade-up" data-aos-delay="500"
          data-aos-duration="3000">
          <div class="card-body mb-0">
            <div class="bg-primary-color rounded-2 align-content-center text-center"
              style="color: #111111; width: 70px; height: 70px;">
              <i class="bi bi-telephone-fill fs-2"></i>
            </div>
            <h5 class="heading mt-3">Call / WhatsApp</h5>
            <p class="text-color-2 fs-5 mt-3 mb-0">
              <em>
                <a class="links-primary text-color-2" href="tel:{{ config('drivex.phone_primary') }}">{{ config('drivex.phone_primary') }}</a>
                ·
                <a class="links-primary text-color-2" href="tel:{{ config('drivex.phone_secondary') }}">{{ config('drivex.phone_secondary') }}</a>
              </em>
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-xl-4">
        <div class="card h-100 bg-secondary-color p-2 rounded-4" data-aos="fade-left" data-aos-delay="500"
          data-aos-duration="3000">
          <div class="card-body mb-0">
            <div class="bg-primary-color rounded-2 align-content-center text-center"
              style="color: #111111; width: 70px; height: 70px;">
              <i class="bi bi-envelope-fill fs-2"></i>
            </div>
            <h5 class="heading mt-3">Email Us</h5>
            <p class="text-color-2 fs-5 mt-3 mb-0">
              <em><a class="links-primary text-color-2" href="mailto:{{ config('drivex.email') }}">{{ config('drivex.email') }}</a></em>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section py-5 mb-5">
  <div class="b-container">
    <div class="row row-cols-1 row-cols-xl-2 g-5 mx-auto">
      <div class="col order-2 order-xl-1">
        <div class="success_msg toast align-items-center w-100 shadow-none mb-3 border border-success rounded-pill my-4"
          role="alert" aria-live="assertive" aria-atomic="true">
          <div class="d-flex p-2">
            <div class="toast-body d-flex flex-row gap-3 align-items-center text-success">
              <i class="bi bi-check-circle-fill text-success"></i>
              Thank you! Redirecting you to WhatsApp…
            </div>
            <button type="button" class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-success"
              data-bs-dismiss="toast" aria-label="Close"><i class="bi bi-x-lg"></i></button>
          </div>
        </div>

        <div class="error_msg toast align-items-center w-100 shadow-none border-danger mb-3 my-4 border rounded-pill"
          role="alert" aria-live="assertive" aria-atomic="true">
          <div class="d-flex p-2">
            <div class="toast-body d-flex flex-row gap-3 align-items-center text-danger">
              <i class="bi bi-exclamation-triangle-fill text-danger"></i>
              Something went wrong. Please try WhatsApp directly.
            </div>
            <button type="button" class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-danger"
              data-bs-dismiss="toast" aria-label="Close"><i class="bi bi-x-lg"></i></button>
          </div>
        </div>

        <form class="form needs-validation" method="POST" novalidate>
          @csrf
          <input type="hidden" name="action" value="contact">
          <div class="row row-cols-1 row-cols-md-2 g-5 mb-5">
            <div class="col">
              <label for="name" class="form-label">Name</label>
              <input type="text" name="name" id="name" class="form-control form-control-lg" placeholder="Your name"
                aria-label="Name" required>
              <div class="invalid-feedback">Valid name is required.</div>
            </div>
            <div class="col">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" id="email" class="form-control form-control-lg"
                placeholder="Your email" aria-label="Email" required>
              <div class="invalid-feedback">Valid email is required.</div>
            </div>
          </div>
          <div class="row row-cols-1 row-cols-md-2 g-5 mb-5">
            <div class="col">
              <label for="phone" class="form-label">Phone</label>
              <input type="tel" name="phone" id="phone" class="form-control form-control-lg"
                placeholder="Your number" aria-label="Phone" required>
              <div class="invalid-feedback">Valid phone is required.</div>
            </div>
            <div class="col">
              <label for="subject" class="form-label">Subject</label>
              <input type="text" name="subject" id="subject" class="form-control form-control-lg"
                placeholder="Buying, selling, service..." aria-label="Subject" required>
              <div class="invalid-feedback">Valid subject is required.</div>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col">
              <label for="message" class="form-label">Message</label>
              <textarea class="form-control form-control-lg" name="message" id="message" rows="8"
                placeholder="Tell us about the car you want, your part exchange, or the service you need" required></textarea>
              <div class="invalid-feedback">Please enter a message.</div>
            </div>
          </div>
          <button type="submit" class="btn btn-lg btn-cta-primary w-100 submit_form">Submit &amp; Open WhatsApp</button>
        </form>
      </div>

      <div class="col order-1">
        <h2 class="heading" data-aos="fade-right" data-aos-delay="500" data-aos-duration="3000">
          <span class="text-primary-color">Let’s Talk!</span> Book a Viewing or Request a Quote
        </h2>
        <p class="text-color-2 mt-3">Whether you want to buy, sell, part exchange, book a service, or ask about warranty
          — reach {{ config('drivex.name') }} directly. After you submit this form you will see a thank-you message and
          we will open WhatsApp so your enquiry goes straight to the owner.</p>
        <h4 class="heading mt-4">Why Contact DriveX?</h4>
        <ul class="list-unstyled fs-5 text-color-2">
          <li class="mb-3"><i class="bi bi-check-square-fill text-primary-color me-2"></i> UK-based dealer — Coventry</li>
          <li class="mb-3"><i class="bi bi-check-square-fill text-primary-color me-2"></i> Buy &amp; sell quality used cars</li>
          <li class="mb-3"><i class="bi bi-check-square-fill text-primary-color me-2"></i> Service, warranty &amp; part exchange</li>
          <li class="mb-3"><i class="bi bi-check-square-fill text-primary-color me-2"></i> Fast WhatsApp responses</li>
          <li class="mb-3"><i class="bi bi-check-square-fill text-primary-color me-2"></i> Directed by {{ config('drivex.director') }}</li>
        </ul>
        <div class="social-box flex-row w-100 mt-5 flex-wrap gap-2">
          <h5 class="heading align-content-center me-2">Follow Us:</h5>
          <a href="{{ config('drivex.instagram') }}" target="_blank" rel="noopener" class="rounded-2"
            style="width: 40px; height: 40px;"><i class="bi bi-instagram fs-5"></i></a>
          <a href="{{ config('drivex.instagram_owner') }}" target="_blank" rel="noopener" class="rounded-2"
            style="width: 40px; height: 40px;"><i class="bi bi-person-badge fs-5"></i></a>
          <a href="https://wa.me/{{ config('drivex.whatsapp') }}" target="_blank" rel="noopener" class="rounded-2"
            style="width: 40px; height: 40px;"><i class="bi bi-whatsapp fs-5"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
