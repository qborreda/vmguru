$( document ).ready(function() {

  var headerDistanceTrigger = 60;

  $(window).on('scroll', function(event) {
    var distanceY = $(window).scrollTop(),
        shrinkOn = headerDistanceTrigger,
        header = $('.main-header');

    distanceY > shrinkOn 
      ? header.addClass( 'floated' )
      : header.removeClass( 'floated' );
  });

});