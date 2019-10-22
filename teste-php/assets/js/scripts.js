 

//scroll
var scroll = new SmoothScroll('a[href*="#"]:not([data-easing])');		
var easeInOutQuad = new SmoothScroll('[data-easing="easeInOutQuad"]', {easing: 'easeInOutQuad'});
var scroll = new SmoothScroll('.navbar-expand-lg',{
    header: '[data-scroll-header]'
});
var scroll = new SmoothScroll('a[href*="#"]', {
	speed: 100,
	speedAsDuration: true
});




$(document).ready(function () {
  $('.sliderIn').slick({
     
      arrows: false,
      dots: false,
      fade: true,
      speed: 1000,
      autoplaySpeed: 6000,
      infinite: true,
      autoplay: true

  });
});

AOS.init();
