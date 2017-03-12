$(document).ready(function(){
  $('a[href^="#"]').on('click',function (e) {
    e.preventDefault();

    var target = this.hash;
    var $target = $(target);

    $('html, body').stop().animate({
      'scrollTop': $target.offset().top + 20
    }, 900, 'swing', function () {
      window.location.hash = target;
    });
  });
});


jQuery('a[href^="#"]').on('click', function(event) {

    var target = jQuery(this.getAttribute('href'));

    if( target.length ) {
        event.preventDefault();
        jQuery('html, body').stop().animate({
            scrollTop: target.offset().top + 100
        }, 1000);
    }

});
