$(function(){
	
	// down to up fadein animation 
	$(window).scroll(function (){
	    $('.fadein01').each(function(){
	        var targetElement = $(this).offset().top;
	        var scroll = $(window).scrollTop();
	        var windowHeight = $(window).height();
	        if (scroll > targetElement - windowHeight + 180){
	            $(this).css('opacity','1');
	            $(this).css('transform','translateY(0)');
	        }
	    });
	});
  $(window).scroll(function (){
      $('.fadein02').each(function(){
          var targetElement = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > targetElement - windowHeight + 200){
              $(this).css('opacity','1');
              $(this).css('transform','translateY(0)');
          }
      });
  });
  $(window).scroll(function (){
      $('.fadein03').each(function(){
          var targetElement = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if (scroll > targetElement - windowHeight + 220){
              $(this).css('opacity','1');
              $(this).css('transform','translateY(0)');
          }
      });
  });
  
	// slidein animation 
	// (function() {
	//   const image = document.querySelectorAll('.slidein-img-wrap');
	  
	//   const observer = new IntersectionObserver(function(entries) {
	//     entries.forEach(function(entry) {
	//       if (entry.intersectionRatio > 0) {
	//         entry.target.classList.add('img-animation');
	//       } else {
	//         entry.target.classList.remove('img-animation');
	//       }
	//     });
	//   });
	//   Array.prototype.forEach.call(image, function(img) {
	//     observer.observe(img);
	//   });
	// })();	
	
	// ham menu for sp 
	$(".header-nav-sp .burger-btn").on('click',function() {
		$(".header-nav-sp ul").slideToggle();
	});	
	// .hamがクリックされたとき、
	$('.burger-btn').on('click',function(){
		$('.header-nav-sp ul').toggleClass('on');
		$('.burger-btn').toggleClass('on');
	});	


	//slick slider
	$(document).ready(function () {
		$('.slider').slick({
			dots: true,
			autoplay: true,
			autoplaySpeed: 2500,
			speed: 1000,
		});

		$('.sp_banner_slider_area').slick({
			dots: true,
			autoplay: true,
			autoplaySpeed: 1500,
			speed: 1500,
		});

		$('.pc_banner_slider_area').slick({
			// dots: true,
			slidesToShow: 3,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 2300,
		});
	});

});
