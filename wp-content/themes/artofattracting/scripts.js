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
   var top_page = false;
   $(window).scroll(function() {
      if ($(window).scrollTop() == 0) {
          top_page = false;
          $('.page-header').height(200);
          $('.page-header .top-nav ul li').css('line-height', '200px');
          $('.page-header .top-logo').css({
          'background-image' : 'url(http://localhost:8888/art_of_attracting/wp-content/uploads/2017/07/logo3.svg), url(http://localhost:8888/art_of_attracting/wp-content/uploads/2017/07/header2.png)',
          'background-size' : '60%, 80%',
          'background-position' : '95px 50px, 0 10px'
          });
      } else {
          if (top_page == false){
            $('.page-header').height(75);
            top_page = true;
            $('.page-header .top-nav ul li').css('line-height', '75px');
            $('.page-header .top-logo').css({
            'background-image' : 'url(http://localhost:8888/art_of_attracting/wp-content/uploads/2017/07/logo3.svg)',
            'background-size' : '40%',
            'background-position' : '25px -2px'
            });
          }
      }
  });

});