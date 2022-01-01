// animate banner nav buttons
$(document).ready(function() {
  $("#hover_area").hover(
    function(){
      $("#next").stop().animate({marginRight: "-126px", opacity: "1px", height: "125px"}, 300 );
    },
    function(){
      $("#next").stop().animate({marginRight: "0px", opacity: "1px", height: "125px"}, 300 );
    }
  );
});
$(document).ready(function() {
  $("#hover_area").hover(
    function(){
      $("#down").stop().animate({marginTop: "126px", opacity: "1px", height: "125px"}, 300 );
    },
    function(){
      $("#down").stop().animate({marginTop: "0px", opacity: "1px", height: "125px"}, 300 );
    }
  );
});
