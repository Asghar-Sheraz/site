  // script for timeing slides
  	$("body").css("overflow", "hidden");
    $(function() {
      $('#slides').superslides({
        hashchange: true,
        play: 100000000000000
      });

      $('#slides').on('mouseenter', function() {
        $(this).superslides('stop');
        console.log('Stopped')
      });
      $('#slides').on('mouseleave', function() {
        $(this).superslides('start');
        console.log('Started')
      });
    });
  // script for scroll to
  	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});

//mobile menu toggle  
$(document).ready(function() {
	$('.menuMobileIgnite').click(function() {
			$('.menuMobile').slideToggle();
	});
});



