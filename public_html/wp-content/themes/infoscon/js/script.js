

$(function() {

	id = 1 ;
	function body() {
		$('.s_bg').animate({transform: 'translate3d(0,0,0) scale(1.051, 1.051)', opacity:'0'},0);
		id = 'service'+id+'' ;
		
		$('.menu li, .text, .text p, .price, h2, .readmore').removeClass('active animated fadeIn flipInX');
		$('#'+id+', .'+id+'').addClass('active');
		$('.'+id+' p', '.'+id+' .price, .'+id+' h2').addClass('animated fadeIn');
		$('.readmore').addClass('animated flipInX');
		var image = $('.'+id+'').attr('data-image');
		$('.s_bg').css('background-image', 'url("' + image +'")');
	//animation	

		$('.s_bg').animate({opacity: '.7'},300);
		if (!navigator.userAgent.match(/Trident\/7\./))
			{
			$('.s_bg').animate({transform: 'translate3d(0,0,0) scale(1.0, 1.0)', opacity: '.9'},20000)}
				else {
			$('.s_bg').animate({opacity: '.9'},20000).css({scale:'(1.0, 1.0)'})}
		};
	body();


		$('#service1').click(function(){
			id = '1';
			$('.s_bg').stop();
				body();
			});

		$('#service2').click(function(){
			id = '2';
			$('.s_bg').stop();
				body();
			});

		$('#service3').click(function(){
			id = '3';
			$('.s_bg').stop();
				body();
			});

		$('#service4').click(function(){
			 id = '4';
			 $('.s_bg').stop();
				body();
			});

		$('#service5').click(function(){
			 id = '5';
			 $('.s_bg').stop();
				body();
			});



// logo href
		$('.gohome').click(function(){ window.location = '/'});


// menu burger 
		var xmenuToggle = 0;

		$('.xmenu').click(function(){
					if(xmenuToggle == 0) {
					$('header').addClass('mobile');
					xmenuToggle++;
				}
				else {
					$('header').removeClass('mobile');
					xmenuToggle--;
				}
		});



// contact form
		$('.order').click(function(){
			$('#contactForm form').removeClass('animated fadeOut zoomOut');
			$('#contactForm').removeClass('animated slideInDown slideOutUp');
			$('#contactForm').addClass('active animated slideInDown');
		});

		$('.orderclose, #contactForm button').click(function(){
			$('#contactForm').removeClass('active animated slideInDown slideOutUp');
			$('#contactForm').addClass('active animated slideOutUp');
		});

		$('#contactForm button').click(function(){
			$('#contactForm form').addClass('animated fadeOut zoomOut');
		});





// scroll's

		$(".whois").click(function() {
		    $('html, body').animate({
		        scrollTop: $(".about").offset().top
		    }, 500);
		});


}); // end



