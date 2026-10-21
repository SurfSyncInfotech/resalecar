<section class="section py-5 my-5">
  <div class="b-container">
    <div class="row d-flex align-items-end g-md-5">
      <div class="col-12 col-xl-4 text-center text-xl-end order-2">
        <p class="text-color-2">Still have questions? <a href="{{ route('contact-us') }}"
            class="text-primary-color links-primary">Contact Us</a> or WhatsApp {{ config('drivex.phone_primary') }}.</p>
      </div>
      <div class="col-12 col-xl-8 text-center text-xl-start order-1 order-xl-2">
        <h2 class="fw-bolder" data-aos="fade-left" data-aos-delay="500" data-aos-duration="3000">
          Everything About <span class="text-primary-color">{{ config('drivex.short_name') }}</span>
        </h2>
      </div>
    </div>

    <div class="row mt-4 g-md-5">
      <div class="col-12 col-md-4">
        <nav class="nav flex-column nav-pills" id="faq-tabs" role="tablist" aria-orientation="vertical">
          <button class="nav-link active" id="faq-general-tab" data-bs-toggle="pill" data-bs-target="#faq-general"
            type="button" role="tab" aria-controls="faq-general" aria-selected="true">General</button>
          <button class="nav-link" id="faq-services-tab" data-bs-toggle="pill" data-bs-target="#faq-services"
            type="button" role="tab" aria-controls="faq-services" aria-selected="false">Buying &amp; Selling</button>
          <button class="nav-link" id="faq-pricing-tab" data-bs-toggle="pill" data-bs-target="#faq-pricing"
            type="button" role="tab" aria-controls="faq-pricing" aria-selected="false">Service &amp; Pricing</button>
        </nav>
      </div>

      <div class="col-12 col-md-8">
        <div class="tab-content" id="faq-tab-content" data-aos="fade-left" data-aos-delay="750"
          data-aos-duration="3000">

          <div class="tab-pane fade show active" id="faq-general" role="tabpanel" aria-labelledby="faq-general-tab">
            <div class="accordion" id="accordionGeneral">
              <div class="accordion-item">
                <h5 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#gen-1">Where is DriveX based?</button></h5>
                <div id="gen-1" class="accordion-collapse collapse show" data-bs-parent="#accordionGeneral">
                  <div class="accordion-body">
                    <p>We are a UK-based dealer operating from Coventry ({{ config('drivex.address') }}). Contact us to
                      book a viewing.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h5 class="accordion-header"><button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#gen-2">Who is behind DriveX?</button></h5>
                <div id="gen-2" class="accordion-collapse collapse" data-bs-parent="#accordionGeneral">
                  <div class="accordion-body">
                    <p>{{ config('drivex.director') }} directs {{ config('drivex.name') }}, focused on premium used cars
                      and trusted customer service. Follow @drivexmotors.uk on Instagram.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h5 class="accordion-header"><button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#gen-3">Do you offer warranty?</button></h5>
                <div id="gen-3" class="accordion-collapse collapse" data-bs-parent="#accordionGeneral">
                  <div class="accordion-body">
                    <p>Selected vehicles include warranty options. Ask our team which cars currently come with cover.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="faq-services" role="tabpanel" aria-labelledby="faq-services-tab">
            <div class="accordion" id="accordionServices">
              <div class="accordion-item">
                <h5 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#ser-1">Do you buy cars as well as sell?</button></h5>
                <div id="ser-1" class="accordion-collapse collapse show" data-bs-parent="#accordionServices">
                  <div class="accordion-body">
                    <p>Yes — we buy and sell quality used cars and welcome part exchange against our stock.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h5 class="accordion-header"><button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#ser-2">How do I book a viewing?</button></h5>
                <div id="ser-2" class="accordion-collapse collapse" data-bs-parent="#accordionServices">
                  <div class="accordion-body">
                    <p>Use the contact form (it opens WhatsApp after thank you), call {{ config('drivex.phone_primary') }},
                      or message us directly on WhatsApp.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h5 class="accordion-header"><button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#ser-3">What is your partnership with S&amp;U Prime Autos?</button></h5>
                <div id="ser-3" class="accordion-collapse collapse" data-bs-parent="#accordionServices">
                  <div class="accordion-body">
                    <p>{{ config('drivex.partner') }} is listed as our UK-based dealer partner supporting quality used
                      car retail alongside DriveX.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="faq-pricing" role="tabpanel" aria-labelledby="faq-pricing-tab">
            <div class="accordion" id="accordionPricing">
              <div class="accordion-item">
                <h5 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#pri-1">What workshop services do you offer?</button></h5>
                <div id="pri-1" class="accordion-collapse collapse show" data-bs-parent="#accordionPricing">
                  <div class="accordion-body">
                    <p>Full service, brakes, engine works, timing chains, suspension, clutch &amp; gearbox, plus remaps
                      &amp; ECU tuning — each with its own detailed service page.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h5 class="accordion-header"><button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#pri-2">How do quotes work?</button></h5>
                <div id="pri-2" class="accordion-collapse collapse" data-bs-parent="#accordionPricing">
                  <div class="accordion-body">
                    <p>Submit the quote or contact form — after the thank-you message we open WhatsApp with your details
                      so we can reply with a competitive price quickly.</p>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h5 class="accordion-header"><button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse" data-bs-target="#pri-3">Are prices competitive?</button></h5>
                <div id="pri-3" class="accordion-collapse collapse" data-bs-parent="#accordionPricing">
                  <div class="accordion-body">
                    <p>Yes. Competitive pricing on quality used cars and workshop work is a core DriveX promise —
                      quality, trust and value.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
