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
$(this).slideUp(300);
});
});
});
/* ----  end ONLY FIRST LEVEL IN TOP MENU. FIRST LEVEL DROPDOWN    ----- */
/* ---  HIDE BLOCK "OFTEN SEARCH" ON CATALOG PARTICULAR SECTION PAGE IF THERE ARE NO TAGS FOR THIS SECTION --- */
if ($('.often-tags__items').html().trim() === '') {
$('.often-tags__items').parent('.often-tags').hide();
}
/* ---  end HIDE BLOCK "OFTEN SEARCH" ON CATALOG PARTICULAR SECTION PAGE IF THERE ARE NO TAGS FOR THIS SECTION --- */
if ($('.product-item-container').html().trim() === '') {
$('.inner-block__part--left').hide();
}
/* --- ABOVE CONTENT BANNER IMAGE CHANGE FOR MOBILE --- */
/*function checkWidth() {
        var windowSize = $(window).width();
if (windowSize <= 580) {
            console.log("screen width is less than 580");
        }
}
// Execute on load
    checkWidth();
    // Bind event listener
    $(window).resize(checkWidth);*/
/*if($(window).width() == 515) {
console.log("515");
         $(".CONTENT_TOP").attr("src", "/upload/banner_top_mobile.jpg");
     }*/
});