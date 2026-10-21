$(function () {
  'use strict';

  const lightbox = GLightbox({
    selector: '.glightbox'
  });

  const forms = $('.needs-validation');
  const whatsappNumber = String($('body').data('whatsapp') || '447554959867');

  forms.on('submit', function (event) {
    const form = $(this);
    const actionInput = form.find("input[name='action']");

    if (!form[0].checkValidity()) {
      event.preventDefault();
      event.stopPropagation();
      form.addClass('was-validated');
      return;
    }

    event.preventDefault();

    $('.submit_form').html('Sending...');
    $('.submit_subscribe').html('Sending...');

    const toastSuccessEl = $('.success_msg')[0];
    const toastSubscribeEl = $('.success_msg_subscribe')[0];
    const toastSuccess = toastSuccessEl ? new bootstrap.Toast(toastSuccessEl) : null;
    const toastSubscribe = toastSubscribeEl ? new bootstrap.Toast(toastSubscribeEl) : null;

    const name = (form.find('[name="name"]').val() || '').toString().trim();
    const email = (form.find('[name="email"]').val() || '').toString().trim();
    const phone = (form.find('[name="phone"]').val() || '').toString().trim();
    const subject = (form.find('[name="subject"]').val() || form.find('[name="service"]').val() || 'Website Enquiry').toString().trim();
    const message = (form.find('[name="message"]').val() || '').toString().trim();
    const actionVal = actionInput.length ? actionInput.val() : 'contact';

    let lines = [
      'Hello DriveX Automotors UK LTD,',
      '',
      'I just submitted a ' + (actionVal === 'quote' ? 'quote' : 'contact') + ' request on your website.',
      ''
    ];
    if (name) lines.push('Name: ' + name);
    if (email) lines.push('Email: ' + email);
    if (phone) lines.push('Phone: ' + phone);
    if (subject) lines.push('Subject: ' + subject);
    if (message) lines.push('Message: ' + message);
    lines.push('', 'Please get back to me. Thank you!');

    const waUrl = 'https://wa.me/' + whatsappNumber + '?text=' + encodeURIComponent(lines.join('\n'));

    if (actionVal === 'subscribe' && toastSubscribe) {
      $('.submit_subscribe').html('Subscribe');
      toastSubscribe.show();
    } else {
      $('.submit_form').html('Send Message');
      if (toastSuccess) toastSuccess.show();
      setTimeout(function () {
        window.open(waUrl, '_blank');
      }, 1100);
    }

    form[0].reset();
    form.removeClass('was-validated');
  });

  function countUp($el, duration = 2000) {
    const target = parseInt($el.data('count'), 10) || 0;
    $({ countNum: 0 }).animate({ countNum: target }, {
      duration: duration,
      easing: 'swing',
      step: function () {
        $el.text(Math.floor(this.countNum) + '%');
      },
      complete: function () {
        $el.text(target + '%');
      }
    });
  }

  function setupCountUpObserver(selector = '.count-up') {
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const $target = $(entry.target);
          if (!$target.hasClass('counted')) {
            countUp($target);
            $target.addClass('counted');
          }
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.6 });

    $(selector).each(function () {
      observer.observe(this);
    });
  }
  setupCountUpObserver();

  AOS.init({
    duration: 800,
    once: true
  });
});
