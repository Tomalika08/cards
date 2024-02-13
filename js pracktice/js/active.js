// curve text //////////////////
$(document).ready(function() {
  
    $('.example').arctext({radius: 500});
    
  });
// curve text //////////////////
// sticky Headers start
$(window).scroll(function(){
  var scrolling = $(this).scrollTop();
  
  if(scrolling > 200){
      $('.header_menu').addClass('sticky');
  }
  else {
       $('.header_menu').removeClass('sticky');
  }
  });
// sticky Headers end
// veno box start
$(document).ready(function(){
  $('.venobox').venobox(); 
});
// veno box end
// story slider start
$('.story_item_slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false
});
// story slider end

// team slider start
$('.team_slider').slick({
  slidesToShow: 4,
  slidesToScroll: 4,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
  // dots:true,
  // prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
  // nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
});
// team slider end
// testimonial_slider start
$('.testimonial-slider-active').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
  // dots:true,
  // prevArrow:"<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
  // nextArrow:"<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
});

// testimonial_slider start
