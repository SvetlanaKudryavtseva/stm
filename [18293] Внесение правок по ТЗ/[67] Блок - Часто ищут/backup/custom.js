/*
You can use this file with your scripts.
It will not be overwritten when you upgrade solution.
*/
/*$(document).ready(function() {*/
jQuery(function($) {
    $(".email-block").on("click", function() {
        $('#email-dropdown').toggle();
    });
/* ----  ONLY FIRST LEVEL IN TOP MENU. FIRST LEVEL DROPDOWN    ----- */
 $(".wideSubmenu").toggle();
$(".main_toggle").each( function(index) {
$(this).on("click", function(e){
e.preventDefault();
  $(this).parent().siblings().first(".wideSubmenu").toggle();
 $(this).parent().siblings().first(".wideSubmenu").on("mouseleave", function() {
$(this).slideUp(500);
});
});
});
/* ----  end ONLY FIRST LEVEL IN TOP MENU. FIRST LEVEL DROPDOWN    ----- */
});