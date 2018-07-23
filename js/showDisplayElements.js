$(document).ready(function(){
    // Show/Hide Login window
    $("#showWindow").click(function(){
        $("#login").css('display', 'block');
    });
    $("#closeWindow").click(function(){
        $("#login").css('display', 'none');
    });
    // Show/hide map window
    $("#showMap").click(function(){
        $("#map").css("display", "block");
    });
    $("#closeMap").click(function(){
        $("#map").css("display", "none");
    });
    // BackToTop Button 
    $(window).scroll(function(){
        $("#backToTop").css("display", "block");
    });
    $("#backToTop").click(function(){
        $("#backToTop").css("display", "none");
    });
});