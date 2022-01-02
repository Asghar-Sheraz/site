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

//mobile menu toggle  
$(document).ready(function() {
	$('.menuMobileIgnite').click(function() {
			$('.menuMobile').slideToggle();
	});
});

