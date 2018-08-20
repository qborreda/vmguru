$(document).ready(function() {
  function isMobile() {
    if (
      /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)
    ) {
      return true;
    } else {
      return false;
    }
  }

  function floatedHeader() {
    // Header slide hiding
    var headerDistanceTrigger = 60,
      distanceY = $(window).scrollTop(),
      shrinkOn = headerDistanceTrigger,
      header = $(".main-header");

    distanceY > shrinkOn
      ? header.addClass("floated")
      : header.removeClass("floated");
  }

  // Mobile menu by cloning
  var isMobile = isMobile();

  if (isMobile) {
    var $mainHeader = $(".main-header");
    var $mainMenu = $(".main-nav");
    var $mobileHeader = $(".mobile-header");
    var $newMenu = $mainMenu.clone();
    var $menuIcon = $(".js-hamburger").show();
    var $logo = $(".main-header .logo");
    var $newLogo = $logo.clone();
    var $secondary = $(".main-header .secondary");

    $secondary.remove();
    $logo.remove();
    $mainMenu.find(".main-nav-item").hide();
    $mobileHeader.empty().prepend($newLogo).append($newMenu);

    $(".js-hamburger").on("click", function() {
      $(this).toggleClass("is-active");
      $mobileHeader.toggleClass("is-open");
    });
  } else {
    $(window).on("scroll", floatedHeader);
    floatedHeader();
  }

  // Generic Content Toggling
  $(".js-toggle-content").animate({height: 'hide'}, 0);
  $(document).on("click", ".js-trigger-toggle", function(e) {
    var target = $(this).data('target');
    var content = (target) ? $(target) : $(this).next(".js-toggle-content");
    $(content[0]).animate({height: 'toggle'}, 700);
    $(this).not(".js-dont-hide").hide();
  });

  // Link on project hexagons
  $(document).on("click", "[data-link]", function(event) {
    var url = window.location.origin + $(this).data("link");
    window.location.href = url;
  });

  // Project Carrousel
  var carruselResponsiveOptions = [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3
      }
    },
    {
      breakpoint: 980,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2
      }
    },
    {
      breakpoint: 400,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ];

  $(".js-carrusel-1").length > 0 &&
    $(".js-carrusel-1").slick({
      infinite: false,
      slidesToShow: 3,
      slidesToScroll: 3,
      prevArrow: $(".js-carrusel-1 ~ .btn-arrows-left"),
      nextArrow: $(".js-carrusel-1 ~ .btn-arrows-right"),
      responsive: carruselResponsiveOptions
    });

  $(".js-carrusel-2").length > 0 &&
    $(".js-carrusel-2").slick({
      infinite: false,
      slidesToShow: 3,
      slidesToScroll: 3,
      prevArrow: $(".js-carrusel-2 ~ .btn-arrows-left"),
      nextArrow: $(".js-carrusel-2 ~ .btn-arrows-right"),
      responsive: carruselResponsiveOptions
    });

  $(".js-carrusel-3").length > 0 &&
    $(".js-carrusel-3").slick({
      infinite: false,
      slidesToShow: 3,
      slidesToScroll: 3,
      prevArrow: $(".js-carrusel-3 ~ .btn-arrows-left"),
      nextArrow: $(".js-carrusel-3 ~ .btn-arrows-right"),
      responsive: carruselResponsiveOptions
    });

  // Project Carrousel
  $(".js-main-carrusel").length > 0 &&
    $(".js-main-carrusel").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      variableWidth: true,
      centerMode: true,
      prevArrow: $(".project-carrusel-main .btn-arrows-left"),
      nextArrow: $(".project-carrusel-main .btn-arrows-right")
    });

  // Footer Carrousel
  $(".js-carrusel-footer").length > 0 &&
    $(".js-carrusel-footer").slick({
      infinite: true,
      autoplay: true,
      slidesToShow: 6,
      slidesToScroll: 1,
      // variableWidth: true,
      // centerMode: true,
      prevArrow: $(".footer-carrusel .btn-arrows-left"),
      nextArrow: $(".footer-carrusel .btn-arrows-right"),
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 6,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 980,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 400,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
      ]
    });
});
