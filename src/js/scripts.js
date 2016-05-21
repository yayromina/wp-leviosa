//=include vendor/jquery.min.js
//=include vendor/what-input.min.js
//=include foundation.js
//=include instafeed.min.js
//=include slick.min.js
//=include jquery.validate.min.js

$(document).foundation();

jQuery(document).ready(function($) {


  $('.testimonial-container').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay: true,
    dots: false,
    arrows: true,
    prevArrow: $('.nav-arrow.arrow-left'),
    nextArrow:  $('.nav-arrow.arrow-right'),
    responsive: [
    {
      breakpoint:767,
      settings: {
        slidesToShow:1,
        slidesToScroll:1
      }
    }]
  });

  $('.slider .slide-container').slick({
    autoplay: true,
    dots: false,
    arrows: false,
    pauseOnHover: false
  })

//   // Instagrammies
//    var userFeed = new Instafeed({
//       get: 'user',
//       userId: 2767733763,
//       accessToken: '487728087.467ede5.b14a9c5bdfef4495849de00abb3d56ad',
//       template: '<div class="gram medium-2 small-4 columns"><a href="{{link}}" target="_blank"> <img src="{{image}}"></a></div>',
//       limit: 6,
//       resolution: 'low_resolution'
//   });
//   userFeed.run();
// });

// Scroll to the order form
  // $('a.button.order-button').on('click', function(event) {
  //   var target = $(this.href);
  //   if( target.length ) {
  //       event.preventDefault();
  //       $('html, body').animate({
  //           scrollTop: target.offset().top
  //       }, 1000);
  //   }
  // });

});