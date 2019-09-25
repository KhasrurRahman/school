/*----------------- Mobile -------------------*/
$(function () {

    $(window).bind("resize", function () {
        console.log($(this).width())
        if ($(this).width() < 800) {
            $('.slideInRight,.fadeInRightBig').removeClass('slideInRight fadeInRightBig').addClass('fadeIn')
        } else {
             $(this).removeClass('fadeIn').addClass('slideInRight fadeInRightBig')
        }
    }).resize();
})

  
// WOW
wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
        }
      }
    );
    wow.init();
// WOW END

	 var $content = $(".search-bar").hide();
$(".search-icon").on("click", function(e){
    $(this).toggleClass("expanded");
    $content.slideToggle();
  });
  
  
//nav active
$('.event .nav-justified li a').click(function(){
	$('.event .nav-justified li a').removeClass("active")
   $(this).addClass("active")
});

$('.award-nav .nav-justified li a').click(function(){
	$('.award-nav .nav-justified li a').removeClass("active")
   $(this).addClass("active")
});

$('.sports-nav .nav-justified li a').click(function(){
	$('.sports-nav .nav-justified li a').removeClass("active")
   $(this).addClass("active")
});
$('.joblist ul li a').click(function(){
	$('.joblist ul li a').removeClass("active")
   $(this).addClass("active")
});

$('.carousel-list ul li').click(function(){
	$('.carousel-list ul li').removeClass("active")
   $(this).addClass("active")
});

$(".quick-links ul li:last-child a").click(function(){
    $(".site-map").slideToggle(400);
});
function applyme(thechosenone) {
     $('.cv-section').each(function(index) {
          if ($(this).attr("id") == thechosenone) {
               $(this).slideDown(400);
          }
          else {
               $(this).slideUp(400);
          }
     });
}

	
$(window).on("scroll touchmove", function () {
    $('.navbar-site').toggleClass('tiny', $(document).scrollTop() > $('.header-top').height());
});

$(window).load(function(){
	
	  $('#loading').fadeOut(2000);
});  

$(document).ready(function(){
    if ($(window).width() < 767) {
	 	$(".dropdown-toggle").attr("href","javascript:void(0)");
	 	$(".dropdown-toggle").attr("data-toggle","dropdown");
	}
	else if ($(window).width() > 767) {
		   $('.navbar .dropdown').hover(function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideToggle(500);
    }, function() {
    $(this).find('.dropdown-menu').first().stop(true, true).slideToggle(500)
    });
        }

 $('.modal').each(function(){
            var src = $(this).find('iframe').attr('src');

        $(this).on('click', function(){

            $(this).find('iframe').attr('src', '');
            $(this).find('iframe').attr('src', src);

        });
    });
});


$('.top-up,.apply-position').click(function(e) {
	
	var job_title = $(this).children('.job-title').text();
	var last_date = $(this).children('.last-date').text();
	var descriptions = $(this).children('.descriptions').html();
	
	//alert(descriptions);
  $('.media-heading').html(job_title);
  $("input.input-title").val(job_title);
  $('#last-date').html(last_date);
  $('#descriptions').html(descriptions);
  
  if($(this.hash).length > 0){
         $('html,body').animate({ scrollTop: $(this.hash).offset().top}, 1200);
         return false;
         e.preventDefault();
  }  
    });
		
 //Equal height
 
/*$(".grid-module").css({'height':($(".grid-module").height()+'px')});*/
$(".grid-module-big").css({'height':($(".grid-home").height()+'px')});


function slideonlyme(thechosenone) {
     $('.center-carousel-inner').each(function(index) {
          if ($(this).attr("id") == thechosenone) {
               $(this).slideDown(400);
          }
          else {
               $(this).slideUp(400);
          }
     });
}

  $(".banner-carousel").owlCarousel({
	animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav:true, // Show next and prev buttons
    margin:0,
	loop:true,
    autoplay:true,
	dots: true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    singleItem:true,
      // "singleItem:true" is a shortcut for:
     items : 1, 
  });

 $(".photo-carousel,.news-carousel").owlCarousel({
	animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav:false, // Show next and prev buttons
    margin:0,
	loop:true,
    autoplay:true,
	dots: false,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    singleItem:true,
      // "singleItem:true" is a shortcut for:
     items : 1, 
  });
  
   $(".about-carousel").owlCarousel({
	//animateOut: 'fadeOut',
    //animateIn: 'fadeIn',
    nav:false, // Show next and prev buttons
    margin:0,
	loop:true,
    autoplay:true,
	dots: true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    singleItem:true,
      // "singleItem:true" is a shortcut for:
     items : 1, 
  });
  $(".glance-carousel,.living-carousel").owlCarousel({
    nav:false, // Show next and prev buttons
    margin:0,
	loop:true,
    autoplay:true,
	dots: true,
    autoplayTimeout:3000,
    autoplayHoverPause:false,
    singleItem:true,
      // "singleItem:true" is a shortcut for:
     items : 1, 
  });
  
     $(".philosophy-carousel").owlCarousel({
    nav:false, // Show next and prev buttons
    margin:0,
	loop:true,
    autoplay:false,
	dots: true,
    autoplayTimeout:3000,
    autoplayHoverPause:false,
    singleItem:true,
      // "singleItem:true" is a shortcut for:
     items : 1, 
  });
  
   $(".testmonial").owlCarousel({
    nav:true, // Show next and prev buttons
    margin:0,
	loop:true,
    autoplay:true,
	dots: false,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    singleItem:true,
      // "singleItem:true" is a shortcut for:
     items : 1, 
  });
  
    $(".booking-calendar").responsiveCalendar({
          time: '2016-07',
          /*events: {
            "2013-04-30": {"number": 5, "url": "http://w3widgets.com/responsive-slider"},
            "2013-04-26": {"number": 1, "url": "http://w3widgets.com"}, 
            "2013-05-03":{"number": 1}, 
            "2013-06-12": {}
			}*/
        });

$('.collapse').on('shown.bs.collapse', function(){
$(this).parent().find(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
}).on('hidden.bs.collapse', function(){
$(this).parent().find(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
});

// Para bg
(function(){

  var parallax = document.querySelectorAll(".inner-banner"),
      speed = 0.2;

  window.onscroll = function(){
    [].slice.call(parallax).forEach(function(el,i){

      var windowYOffset = window.pageYOffset,
          elBackgrounPos = "50% " + (windowYOffset * speed) + "px";

      el.style.backgroundPosition = elBackgrounPos;

    });
  };

})();

 nice = $(".philosophy-para").niceScroll();
 

 
