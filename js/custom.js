$(window).on('load', function () {
  "use strict";

  /* Owl Carousel */
  $('#owl1').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    responsive: {
      0: { items: 1 },
      600: { items: 1 },
      1000: { items: 1 }
    }
  });

  $('#owl2').owlCarousel({
    center: true,
    autoplay: true,
    loop: true,
    margin: 40,
    nav: false,
    responsiveClass: true,
    responsive: {
      0: { items: 1, nav: false },
      600: { items: 2, nav: false },
      1000: { items: 4, nav: false, loop: true }
    }
  });

  /* Navbar fundo opaco ao rolar */
  $(window).on('scroll', function () {
    if ($(this).scrollTop() > 450) {
      $('.navbar-fixed-top').addClass('opaque');
    } else {
      $('.navbar-fixed-top').removeClass('opaque');
    }
  });

  /* Fecha menu mobile ao clicar em link */
  $(".navbar-nav li a").on('click', function () {
    $(".navbar-collapse").collapse('hide');
  });

  /* Navegação com scroll suave */
  $('#navbar-collapse-02').onePageNav({ filter: ':not(.external)' });

  $(".nav li a, a.scrool").on('click', function (e) {
    var full_url = this.href;
    var parts = full_url.split("#");
    var trgt = parts[1];
    var target_offset = $("#" + trgt).offset();
    var target_top = target_offset.top;

    $('html,body').animate({ scrollTop: target_top - 70 }, 1000);
    return false;
  });

  /* Popup de imagem */
  $('.popup-gallery').find('a.popup1, a.popup2').magnificPopup({
    type: 'image',
    gallery: { enabled: true }
  });

  $('.popup-gallery').find('a.popup4').magnificPopup({
    type: 'iframe',
    gallery: { enabled: false }
  });
});