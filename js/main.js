$( document ).ready(function() {

  // Header slide hiding
  var headerDistanceTrigger = 60;

  function floatedHeader() {
    var distanceY = $(window).scrollTop(),
        shrinkOn = headerDistanceTrigger,
        header = $('.main-header');

    distanceY > shrinkOn 
      ? header.addClass( 'floated' )
      : header.removeClass( 'floated' );
  }

  $(window).on('scroll', floatedHeader);
  floatedHeader();

  // Project Carrousel
  $('.js-carrusel').slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 3,
    prevArrow: $('.btn-arrows-left'),
    nextArrow: $('.btn-arrows-right'),
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 3,
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
    }]
  });

});