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

   // opacity header
   var scroll_transparency = false;
   $(window).scroll(function() {
      if ($(window).scrollTop() == 0) {
          scroll_transparency = false;
          $('.page-header').fadeTo( "fast", 1 );
      }else{
          if (scroll_transparency == false){
              $('.page-header').fadeTo( "fast", .9 );
              scroll_transparency = true;
          }
      }
  });

});