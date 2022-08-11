// JavaScript Document

/* Page Active Color */

$(document).ready(function() {
    
  // Get current path and find target link
  var path = window.location.pathname.split("/").pop();
      // Account for home page with empty path
      if ( path == '' ) {
            path = 'index.html';
      }
          
      var target = $('.top-nav a[href="'+path+'"]');
      // Add active class to target link
      target.addClass('active');
});

/* Page Active Color */

/* Home Page Slider */
$( document ).ready( function() {
    $('.responsive-slider').responsiveSlider({
      autoplay: false,
      //interval: 5000,
      //transitionTime: 300
    });
  });
/* Home Page Slider */

/* Products Slider */

$(document).ready(function() {
  $("#product-carousel").owlCarousel({
    goToFirstSpeed: 200,
    slideSpeed : 200,
    autoPlay: true,
    items : 3,
    navigation: false,
    navigationText: ["",""],
    pagination: true,
    itemsDesktop : [1199,3],
    itemsDesktopSmall : [979,3]
  });
});

/* Products Slider */


/* Recipes Tab */

$(document).ready(function(){
  $(".second_tab").champ({
    plugin_type :  "tab",
    side : "left",
    active_tab : "1",
    controllers : "false"
  });				
});

$(document).ready(function(){
  $(".inner-tab").champ({
    plugin_type :  "tab",
    side : "top",
    active_tab : "1",
    controllers : "false"
  });				
});

/* Recipes Tab */

/* Show more button */
$(function(){
  $('.more-content').curtail({
      limit: 0,
      ellipsis: '...',
      toggle: true
  });
});
/* Show more button */


$(document).ready(function() {
	/* wow
	-------------------------------*/
	new WOW().init();
});