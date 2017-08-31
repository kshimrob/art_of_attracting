// (function($) {

//   var a = $(":header").offset().top;

// $(document).scroll(function(){
//     if($(":header").scrollTop() > a)
//     {   
//        $(":header").css({"background":"red"});
//     } else {
//        $(":header").css({"background":"transparent"});
//     }
// });

// })( jQuery );

jQuery(document).ready(function($){
    jQuery('.toggle-nav').click(function(e) {
        jQuery(this).toggleClass('active');
        jQuery('.top-nav ul').toggleClass('active');

        if (jQuery(this).hasClass('active')) {
          jQuery(this).html('&#x2715 menu');
        } else {
          jQuery(this).html('&#9776; menu')
        }
 
        e.preventDefault();
    });
   // opacity header
  //  var top_page = false;
  //  $(window).scroll(function() {
  //     if ($(window).scrollTop() == 0) {
  //         top_page = false;
  //         $('.page-header').height(180);
  //         $('.page-header .top-nav ul li').css('line-height', '200px');
  //         $('.page-header .top-logo').css({
  //         'background-size' : '100%',
  //         'background-position' : '0'
  //         });
  //     } else {
  //         if (top_page == false){
  //           $('.page-header').height(75);
  //           top_page = true;
  //           $('.page-header .top-nav ul li').css('line-height', '75px');
  //           $('.page-header .top-logo').css({
  //           'background-size' : '60%',
  //           'background-position' : '20px -5px'
  //           });
  //         }
  //     }
  // });

});