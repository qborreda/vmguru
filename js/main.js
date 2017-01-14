$( document ).ready(function() {

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

});