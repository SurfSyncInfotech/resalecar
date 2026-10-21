<section class="section bg-secondary-color" style="padding: 10vh 0;">
  <div class="b-container">
    <div class="row g-5 mt-0 mt-xl-5 mx-auto">
      <div class="col-12 col-xl-6 pt-0 mt-0">
        <h6 class="text-color-2">GET A QUOTE</h6>
        <h2 class="heading" data-aos="fade-right" data-aos-delay="500" data-aos-duration="3000">
          Request a Quote — We Reply on WhatsApp
        </h2>
        <p class="text-color-2 mt-3">Fill in the form. After your thank-you confirmation, WhatsApp opens with your
          details ready to send to {{ config('drivex.short_name') }}.</p>

        <div class="success_msg toast align-items-center w-100 shadow-none mb-3 border border-success rounded-pill my-4"
          role="alert" aria-live="assertive" aria-atomic="true">
          <div class="d-flex p-2">
            <div class="toast-body d-flex flex-row gap-3 align-items-center text-success">
              <i class="bi bi-check-circle-fill text-success"></i>
              Thank you! Opening WhatsApp…
            </div>
            <button type="button" class="me-2 m-auto bg-transparent border-0 ps-1 pe-0 text-success"
              data-bs-dismiss="toast" aria-label="Close"><i class="bi bi-x-lg"></i></button>
          </div>
        </div>
        <div class="error_msg toast align-items-center w-100 shadow-none border-danger mb-3 my-4 border rounded-pill d-none"
          role="alert" aria-live="assertive" aria-atomic="true">
          <div class="d-flex p-2">
            <div class="toast-body text-danger">Please try again or WhatsApp us directly.</div>
          </div>
        </div>

        <form class="form needs-validation mt-4" method="POST" novalidate>
          @csrf
          <input type="hidden" name="action" value="quote">
          <div class="mb-4">
            <label for="q-name" class="form-label">Name</label>
            <input type="text" name="name" id="q-name" class="form-control form-control-lg" required>
            <div class="invalid-feedback">Name is required.</div>
          </div>
          <div class="mb-4">
            <label for="q-phone" class="form-label">Phone</label>
            <input type="tel" name="phone" id="q-phone" class="form-control form-control-lg" required>
            <div class="invalid-feedback">Phone is required.</div>
          </div>
          <div class="mb-4">
            <label for="q-email" class="form-label">Email</label>
            <input type="email" name="email" id="q-email" class="form-control form-control-lg" required>
            <div class="invalid-feedback">Email is required.</div>
          </div>
          <div class="mb-4">
            <label for="q-service" class="form-label">Interest</label>
            <select name="subject" id="q-service" class="form-control form-control-lg" required>
              <option value="">Select…</option>
              <option>Buy a car</option>
              <option>Sell my car</option>
              <option>Part exchange</option>
              <option>Full service</option>
              <option>Brakes / Engine / Mechanical</option>
              <option>Remaps &amp; ECU tuning</option>
              <option>Other</option>
            </select>
            <div class="invalid-feedback">Please select an option.</div>
          </div>
          <div class="mb-4">
            <label for="q-message" class="form-label">Details</label>
            <textarea name="message" id="q-message" rows="4" class="form-control form-control-lg"
              placeholder="Car details, budget, or service needed" required></textarea>
            <div class="invalid-feedback">Please add a short message.</div>
          </div>
          <button type="submit" class="btn btn-lg btn-cta-primary w-100 submit_form">Get Quote on WhatsApp</button>
        </form>
      </div>

      <div class="col-12 col-xl-6 mt-5 mt-xl-0">
        <div class="img-wrapper position-relative mx-auto">
          <div class="img-ratio-121">
            <img src="{{ asset('assets/img/drivex/team.jpg') }}" alt="DriveX premium vehicles"
              class="w-100 h-100 position-absolute rounded-4 object-fit-cover" style="inset: 0;">
          </div>
          <div class="position-absolute info-lb-overlay" data-aos="fade-up" data-aos-delay="500"
            data-aos-duration="3000">
            <div class="d-flex flex-row text-white p-4 align-items-center">
              <h4 class="mb-2"><em>“{{ config('drivex.slogan') }}. Handpicked premium used cars — quality, trust and
                  value from {{ config('drivex.city') }}.”</em></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
