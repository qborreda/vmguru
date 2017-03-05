$(document).ready(function() {
  // Header slide hiding
  var headerDistanceTrigger = 60;

  function floatedHeader() {
    var distanceY = $(window).scrollTop(),
      shrinkOn = headerDistanceTrigger,
      header = $(".main-header");

    distanceY > shrinkOn
      ? header.addClass("floated")
      : header.removeClass("floated");
  }

  $(window).on("scroll", floatedHeader);
  floatedHeader();

  // Project Carrousel
  $('.js-carrusel-1').length > 0 &&
  $('.js-carrusel-1').slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 3,
    prevArrow: $(".js-carrusel-1 ~ .btn-arrows-left"),
    nextArrow: $(".js-carrusel-1 ~ .btn-arrows-right"),
    responsive: [
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
    ]
  });

  $('.js-carrusel-2').length > 0 &&
  $(".js-carrusel-2").slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 3,
    prevArrow: $(".js-carrusel-2 ~ .btn-arrows-left"),
    nextArrow: $(".js-carrusel-2 ~ .btn-arrows-right"),
    responsive: [
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
    ]
  });

  // Project Carrousel
  $('.js-main-carrusel').length > 0 &&
  $(".js-main-carrusel").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    variableWidth: true,
    centerMode: true,
    prevArrow: $(".project-carrusel-main .btn-arrows-left"),
    nextArrow: $(".project-carrusel-main .btn-arrows-right")
  });
});
