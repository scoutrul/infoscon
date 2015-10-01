


$(function() {


//order form 

	var order = $('.post_order');

	//hide order button if this is a artcle page
	if ($(".container > h1:contains('Статья')").length) {
		order.css({
			"display": "none"
		});
	};
	// replace fcking Post-header
	if ($("#sitemap_posts > h3:contains('Записи')").length) {
		$("#sitemap_posts > h3:contains('Записи')").css({
			"display": "none"
		});
	};
	//





// open forms

	//the blue order button
		$('.order').click(function(){
			$('#contactForm form').removeClass('animated fadeOut zoomOut');
			$('#contactForm').removeClass('animated slideInDown slideOutUp');
			$('#contactForm').addClass('active animated slideInDown');
		});

		$('#contactForm .orderclose, #contactForm .send').click(function(){
			$('#contactForm').removeClass('active animated slideInDown slideOutUp');
			$('#contactForm').addClass('active animated slideOutUp');
		});

		$('#contactForm .send').click(function(){
			$('#contactForm form').addClass('animated fadeOut zoomOut');
		});

	//the yellow order button

		var orderText = $('.container > h1').text();
		$('#orderForm .h1').append('<div>\"'+orderText+'\"</div>');


		$(order).click(function(){
			$('#orderForm form').removeClass('animated fadeOut zoomOut');
			$('#orderForm').removeClass('animated slideInDown slideOutUp');
			$('#orderForm').addClass('active animated slideInDown');
		});

		$('#orderForm .orderclose, #orderForm .send').click(function(){
			$('#orderForm').removeClass('active animated slideInDown slideOutUp');
			$('#orderForm').addClass('active animated slideOutUp');
		});

		$('#orderForm .send').click(function(){
			$('#orderForm form').addClass('animated fadeOut zoomOut');
		});



	var id = 1 ;

	 function teleScreen(){

		id = 'service'+id+'' ;
		
		$('.menu li, .text, .text p, .price, h2, .readmore, .active').removeClass('active animated fadeIn flipInX');
		$('#'+id+', .'+id+'').addClass('active');
		$('.active').addClass('animated fadeIn');
		$('.readmore').addClass('animated flipInX');
		var image = $('.'+id+'').attr('data-image');
		$('.s_bg').css('background-image', 'url("' + image +'?cash")');
	//animation	

		$('.s_bg').css({'opacity':'0', 'transform':'translate3d(0px,0px, 0px'}).animate({opacity: '.6'},300);
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
		var xmenuToggle = true;

		$('.xmenu, .header .order').click(function(){
					if(xmenuToggle === true) {
					$('header').addClass('mobile');
					xmenuToggle = false;
				}
				else {
					$('header').removeClass('mobile');
					xmenuToggle = false;
				}
		});




// scroll's href

		$(".whois").click(function() {
		    $('html, body').animate({
		        scrollTop: $(".about").offset().top
		    }, 500);
		});



// scroll's parallax


if($("#scroll-flag").length >= 1) {
	
		var topScrollGo = function() {
			var topScroll = $(this).scrollTop();
			$('.s_bg').css({transform: 'translate3d(0px,'+ topScroll/3.35 +'px,0px)'});
		};
			$( window ).scroll(topScrollGo);


		var whyweFunc = function() {

			var topScroll = $(window).scrollTop();
			var wHeight = $('.whywe').height();
			var wOffset = $('.whywe').offset().top;
			var velo = topScroll-wHeight;
			var veloZ = wOffset-wHeight;
			var veloDone = velo - veloZ;


			if (topScroll >= veloZ) {
				$('.whywe_bg').css({transform: 'translate3d(0px,'+ veloDone/3.35 +'px,0px)'});
				console.log(veloDone);
			}
			else {
				console.log('no')
			}	
			
		};$( window ).scroll(whyweFunc);






// smooth scroll default


		/*set to ">" for eneble only on index-page */ 
		var $window = $(window);	
		var scrollTime = .3;
		var scrollDistance = 10;

		$window.on("mousewheel DOMMouseScroll", function(event){

			event.preventDefault();	

			var delta = event.originalEvent.wheelDelta/5 || -event.originalEvent.detail/3;
			var scrollTop = $window.scrollTop();
			var finalScroll = scrollTop - parseInt(delta*scrollDistance);

			TweenMax.to($window, scrollTime, {
				scrollTo : { y: finalScroll, autoKill:true },
					ease: Power1.ease,
					overwrite: 20							
				});

		});
	};


});