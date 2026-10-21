<section class="section position-relative"
  style="background-image: url('{{ asset('assets/img/drivex/cta.jpg') }}'); background-attachment: fixed;">
  <div class="bg-overlay"></div>
  <div class="b-container position-relative z-2 my-5 my-xl-0">
    <div class="d-flex flex-column align-items-center mx-auto text-center text-white font-2 gap-4"
      style="max-width: 900px;">
      <h2 class="fw-bolder">{{ config('drivex.tagline') }}</h2>
      <h4 class="fw-semibold">Quality Used Cars at <span class="text-primary-color">Competitive Prices</span></h4>
      <a href="https://wa.me/{{ config('drivex.whatsapp') }}?text={{ urlencode('Hi DriveX, I would like to book a viewing.') }}"
        target="_blank" rel="noopener" class="btn btn-lg btn-cta-primary">Book for Viewing</a>
    </div>
  </div>
</section>
