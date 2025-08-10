/*(function ($) {
  "use strict";

  // Mobile Navigation
  if ($('.main-nav').length) {
    var $mobile_nav = $('.main-nav').clone().prop({
      class: 'mobile-nav d-lg-none'
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="fa fa-bars"></i></button>');
    $('body').append('<div class="mobile-nav-overly"></div>');

    $(document).on('click', '.mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
      $('.mobile-nav-overly').toggle();
    });
    
     $(document).on('click', '.drop-down a', function(e) {
      e.preventDefault();
      $(this).next().slideToggle(300);
      $(this).parent().toggleClass('active');
    }); 

    $('.drop-down > a').on('click', function (e) {
      const submenu = $(this).next('ul');
      
      // Vérifie s'il y a un sous-menu
      if (submenu.length > 0) {
        e.preventDefault(); // Empêche la navigation
        submenu.slideToggle(300);
        $(this).parent().toggleClass('active');
      }
      // Sinon, laisse le lien fonctionner normalement (ex: tel:+48...)
    });

    $(document).click(function(e) {
      var container = $(".mobile-nav, .mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('.mobile-nav-overly').fadeOut();
        }
      }
    });
  } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
    $(".mobile-nav, .mobile-nav-toggle").hide();
  }

})(jQuery); */

(function ($) {
  "use strict";

  if ($('.main-nav').length) {
    const $mobile_nav = $('.main-nav').clone().prop({ class: 'mobile-nav d-lg-none' });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="fa fa-bars"></i></button>');
    $('body').append('<div class="mobile-nav-overly"></div>');

    $(document).on('click', '.mobile-nav-toggle', function () {
      $('body').toggleClass('mobile-nav-active');
      $('.mobile-nav-toggle i').toggleClass('fa-times fa-bars');
      $('.mobile-nav-overly').toggle();
    });

    // Fermer le menu si on clique à l'extérieur
    $(document).click(function (e) {
      const container = $(".mobile-nav, .mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').removeClass('fa-times').addClass('fa-bars');
          $('.mobile-nav-overly').fadeOut();
        }
      }
    });

    // Sous-menu pour mobile
    $(document).on('click', '.mobile-nav .drop-down > a', function (e) {
  if (isMobile()) {
    const submenu = $(this).next('ul');

    if (submenu.length > 0) {
      e.preventDefault();

      if ($(this).parent().hasClass('active')) {
        submenu.hide();
        $(this).parent().removeClass('active');
      } else {
        submenu.show();
        $(this).parent().addClass('active');
      }
    }
  }
});

  } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
    $(".mobile-nav, .mobile-nav-toggle").hide();
  }

})(jQuery);
