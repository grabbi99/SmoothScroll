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

// Hash Clicking
		$(document).on('click', 'a[href*=\\#]', function(event){
		    event.preventDefault();

		    $('html, body').animate({
		        scrollTop: $( $.attr(this, 'href') ).offset().top - 65
		    }, 500);
		});



//smooth scrolling

    $('a[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            var hd = $('.head').height();
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - hd
                }, 1000);
                return false;
            }
        }
    });

// Slick nav menu mobile
        $('.slicknav_nav a').on('click', function () {
            $(".slicknav_nav").slideUp()
        });	
