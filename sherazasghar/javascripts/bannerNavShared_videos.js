// animate banner nav buttons





$(document).ready(function(){
    $("#page1").click(function(){
        $("#x").animate({marginLeft: '0px'}, 300 );
        $("#page1").css('background', '#009cc9');
        $("#page1").css('color', '#fff');
        $("#page2").css('background', '#fff');
        $("#page2").css('color', '#009cc9');
        $("#page3").css('background', '#fff');
        $("#page3").css('color', '#009cc9');
    });
    $("#page2").click(function(){
        $("#x").animate({marginLeft: '-217px'}, 300 );
        $("#page2").css('background', '#009cc9');
        $("#page2").css('color', '#fff');
        $("#page1").css('background', '#fff');
        $("#page1").css('color', '#009cc9');
        $("#page3").css('background', '#fff');
        $("#page3").css('color', '#009cc9');
    });
    $("#page3").click(function(){
        $("#x").animate({marginLeft: '-434px'}, 300 );
        $("#page3").css('background', '#009cc9');
        $("#page3").css('color', '#fff');
        $("#page2").css('background', '#fff');
        $("#page2").css('color', '#009cc9');
        $("#page1").css('background', '#fff');
        $("#page1").css('color', '#009cc9');
    });

});