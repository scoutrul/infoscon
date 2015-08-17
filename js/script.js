


$(function() {

	var id = 1 ;

	 function teleScreen(){

		id = 'service'+id+'' ;
		
		$('.menu li, .text, .text p, .price, h2, .readmore, .active').removeClass('active animated fadeIn flipInX');
		$('#'+id+', .'+id+'').addClass('active');
		$('.active').addClass('animated fadeIn');
		$('.readmore').addClass('animated flipInX');
		var image = $('.'+id+'').attr('data-image');
		$('.s_bg').css('background-image', 'url("' + image +'")');
	//animation	

		$('.s_bg').css({'opacity':'0', 'transform':'translate3d(0px,0px, 0px'}).animate({opacity: '.9'},300);
	};teleScreen()


		$('#service1').click(function(){
			id = '1';
			$('.s_bg').stop();
				teleScreen();				
			});

		$('#service2').click(function(){
			id = '2';
			$('.s_bg').stop();
				teleScreen();				
			});

		$('#service3').click(function(){
			id = '3';
			$('.s_bg').stop();
				teleScreen();					
			});

		$('#service4').click(function(){
			 id = '4';
			 $('.s_bg').stop();
				teleScreen();					
			});

		$('#service5').click(function(){
			 id = '5';
			 $('.s_bg').stop();
				teleScreen();
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




// a eta hueta bolshe ne rabotaet!!!
// scroll's

		$(".whois").click(function() {
		    $('html, body').animate({
		        scrollTop: $(".about").offset().top
		    }, 500);
		});

		$( window ).scroll(function() {

			var topScroll = $(this).scrollTop();

			//$('.s_bg').css('margin-top', ''+ translate3d/6.7 +'px');
			$('.s_bg').css({transform: 'translate3d(0px,'+ topScroll/3.35 +'px,0px)'});

		});





}); // end



