(function ($) {

$.cs = {};

$(window).scroll(function () {
  var backToTop = $('#back-to-top');
  var scrollPoint = 100;
  if ($(window).scrollTop() > scrollPoint) {
    backToTop.addClass('active');
  } else {
    backToTop.removeClass('active');
  }
});

$(window).ready(function () {
  var backToTop = $('#back-to-top a');
  backToTop.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, 800);
  });
});;
// index.html banner
var swiperBanner = new Swiper('.banner .swiper-container', {
  pagination: {
    el: '.swiper-pagination',
    clickable: true
  },
  loop: true,
  autoplay: {
    delay: 3000
  },
  effect: 'fade'
});

// index.html english-course
var swiperEnglisCourse = new Swiper('.english-course .swiper-container', {
  slidesPerView: 3,
  spaceBetween: 15,
  clickable: true,
  loop: true,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  }
});;
/* eslint-disable quotes */
/**
 * The helper function to initialize modules
 * based on the given context
 */

// **********************************************************************//
// ! Toggle menu mobile
// **********************************************************************//
var toggleMenuAside = function () {
  var $btnControl = $('[data-control="aside"]');

  $btnControl.on("click", function (e) {
    e.preventDefault();
    $("body").toggleClass("is-aside");
  });
};

// **********************************************************************//
// ! Check Mobile Responsive
// **********************************************************************//
var checkResponsiveAside = function () {
  var $headerControl = $("#header-control");

  if (!$headerControl.is(":visible") && $("body").hasClass("is-aside")) $("body").removeClass("is-aside");
};

$(window).on("load", function () {
  var swiper = new Swiper(".swiper-course .swiper-container", {
    slidesPerView: 3,
    spaceBetween: 15,
    navigation: {
      nextEl: ".course-next",
      prevEl: ".course-prev"
    },
    loop: true,
    autoplay: {
      delay: 3000
    },
    breakpoints: {
      // when window width is <= 576px
      576: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      992: {
        slidesPerView: 2,
        spaceBetween: 15
      }
    }
  });

  $(".course__item--title").matchHeight({
    byRow: true
  });
  $(".course__item--des").matchHeight({
    byRow: true
  });

  var swiperTeacher = new Swiper(".swiper-teacher .swiper-container", {
    slidesPerView: 4,
    spaceBetween: 20,
    navigation: {
      nextEl: ".teacher-next",
      prevEl: ".teacher-prev"
    },
    autoplay: {
      delay: 3000
    },
    loop: true,
    breakpoints: {
      576: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 20
      }
    }
  });

  var swiperSlider = new Swiper(".swiper-slider .swiper-container", {
    pagination: {
      el: ".slider-pagination",
      clickable: true
    },
    autoplay: {
      delay: 3000
    },
    effect: "fade"
  });

  var swiperStudents = new Swiper(".swiper-students .swiper-container", {
    pagination: {
      el: ".students-pagination",
      clickable: true
    },
    slidesPerView: 3,
    loop: true,
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 3000
    },
    breakpoints: {
      576: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      1200: {
        slidesPerView: 2,
        spaceBetween: 30
      }
    }
  });

  $(".students__item-feel .is-overflow").matchHeight({
    byRow: true
  });

  toggleMenuAside();

  // **********************************************************************//
  // ! Sticky menu
  // **********************************************************************//
  var stickyNavTop = $(".header__main").offset().top;
  var stickyMenu = function () {
    var scrollTop = $(window).scrollTop();
    var heightHeaderMain = $("header .header__main").height();

    if (scrollTop > stickyNavTop) {
      $(".header__main").addClass("sticky");
      $(".header__main").parent().next().css("margin-top", heightHeaderMain);
    } else {
      $(".header__main").removeClass("sticky");
      $(".header__main").parent().next().css("margin-top", "0");
    }
  };
  stickyMenu();
  // **********************************************************************//
  // ! Window scroll
  // **********************************************************************//
  $(window).scroll(function () {
    stickyMenu();
  });

  //**
  // Open popup
  //**
  setTimeout(function () {
    $("#popup-subscribe").addClass("active");
  }, 3000);

  //**
  // Close popup
  //**
  $("#popup-subscribe .close-popup").on("click", function () {
    $("#popup-subscribe").fadeOut();
  });

  $(".card-news--2 .card-title").matchHeight({
    byRow: true
  });
  $(".card-news--2 .card-text").matchHeight({
    byRow: true
  });

  /**
   * swiper video
   */
  var swiperVideo = new Swiper(".swiper-video .swiper-container", {
    slidesPerView: 3,
    spaceBetween: 50,
    navigation: {
      nextEl: ".video-next",
      prevEl: ".video-prev"
    },
    loop: false,
    autoplay: {
      delay: 5000
    },
    breakpoints: {
      // when window width is <= 576px
      576: {
        slidesPerView: 1,
        spaceBetween: 0
      },
      992: {
        slidesPerView: 2,
        spaceBetween: 15
      }
    }
  });
});

// **********************************************************************//
// ! Window resize
// **********************************************************************//
$(window).on("resize", function () {
  checkResponsiveAside();
});

$(document).ready(function () {
  $('.popup-video').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });

  $('.image-library--gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1] // Will preload 0 - before current, and 1 after the current image
    }
  });
});

})(jQuery)
//# sourceMappingURL=main.js.map
