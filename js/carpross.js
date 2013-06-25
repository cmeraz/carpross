$(document).ready(function(){

    // fancy animation - fade out header content on page scroll
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        $('.js-animated').stop().animate({opacity: 0}, 800);
      }
      if ($(this).scrollTop() < 100) {
        $('.js-animated').stop().animate({opacity: 1}, 500);
      }

      //Navigation bar fixed
      if ($(this).scrollTop() > $('div.showcase').height()) {
        $('body').addClass('fixed');
        $('.strip').addClass('navbar-fixed-top').stop().animate({opacity: 0.95}, 800);
        
      }
      if ($(this).scrollTop() < $('div.showcase').height()) {
        $('body').removeClass('fixed');
        $('.strip').removeClass('navbar-fixed-top').stop().animate({opacity: 1}, 500);
      }

    });

    //bootstrap tooltip trigger
    $('[rel="tooltip"]').tooltip();
  });