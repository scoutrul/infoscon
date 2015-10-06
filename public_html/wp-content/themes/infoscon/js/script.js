


$(function() {


//order form 

	var order = $('.post_order'); // the yellow order button in the post service page

	//hide order button if this is a artcle page
	if ($(".container > h1:contains('Статья')").length) {
		order.css({
			"display": "none"
		});
	};
	// replace fcking Post-header on sitemap page
	if ($("#sitemap_posts > h3:contains('Записи')").length) {
		$("#sitemap_posts > h3:contains('Записи')").css({
			"display": "none"
		});
	};
	if ($("#sitemap_pages li:contains('Блок: контакты')").length) {
		$("#sitemap_pages li:contains('Блок: контакты')").css({
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

		$('#contactForm .orderclose').click(function(){
			$('#contactForm').removeClass('active animated slideInDown slideOutUp');
			$('#contactForm').addClass('active animated slideOutUp');
		});


	//the yellow order button

		var orderText = $('.container > h1').text();
		$('#orderForm .h1').append('<div>\"'+orderText+'\"</div>');


		$(order).click(function(){
			$('#orderForm form').removeClass('animated fadeOut zoomOut');
			$('#orderForm').removeClass('animated slideInDown slideOutUp');
			$('#orderForm').addClass('active animated slideInDown');
		});

		$('#orderForm .orderclose, #orderForm .send_mail').click(function(){
			$('#orderForm').removeClass('active animated slideInDown slideOutUp');
			$('#orderForm').addClass('active animated slideOutUp');
		});

		$('#orderForm .send_mail').click(function(){
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

		$('.xmenu').click(function(){
				if(xmenuToggle === true) {
					$('header').addClass('mobile');
					xmenuToggle = false;
				}
				else {
					$('header').removeClass('mobile');
					xmenuToggle = true;
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
/*				console.log(veloDone);*/
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




// mail sender =>

	$(".send_mail").click(function() {

		$('.form_error').removeClass('form_error');

		var hasError = false;

		var name = $("#form_name").val();
		if (name == '') {
			$("#form_name").focus().addClass('form_error');
			hasError = true;
			return false;
		} 

		var contact = $("#form_contact").val();
		if(contact == '') {
			$("#form_contact").focus().addClass('form_error');
			hasError = true;
			return false;
		}


		var message = $("#form_text").val();
		if(message == '' ) {
			$("#form_text").focus().addClass('form_error');
			hasError = true;
			return false;
		}


		var dataString = 'name=' + name + '&contact=' + contact + '&message=' + message;

		$.ajax({
		type: "POST",
		url: "/mail.php",
		data: dataString,
			success: function() {
				$('.contactForm').removeClass('active animated slideInDown slideOutUp');
				$('.contactForm').addClass('active animated slideOutUp');
				alert("Ваше сообщение отправленно!"); 
			}
		});
		return false;
	});



// order sender =>

	$(".send_order").click(function() {

		$('.form_error').removeClass('form_error');

		var hasError = false;

		var name = $("#form_name_order").val();
		if (name == '') {
			$("#form_name_order").focus().addClass('form_error');
			hasError = true;
			return false;
		} 

		var contact = $("#form_contact_order").val();
		if(contact == '') {
			$("#form_contact_order").focus().addClass('form_error');
			hasError = true;
			return false;
		}


		var message = $("#form_text_order").val();
		if(message == '' ) {
			$("#form_text_order").focus().addClass('form_error');
			hasError = true;
			return false;
		}


		var dataString = 'name=' + name + '&contact=' + contact + '&message=' + message;

		$.ajax({
		type: "POST",
		url: "/mail.php",
		data: dataString,
			success: function() {
				$('.contactForm').removeClass('active animated slideInDown slideOutUp');
				$('.contactForm').addClass('active animated slideOutUp');
				alert("Ваше сообщение отправленно!"); 
			}
		});
		return false;
	});

// contact sender =>

	$("#contact_send").click(function() {

		$('.form_error').removeClass('form_error');

		var hasError = false;

		var contact_org = $("#contact_org").val();
		if (contact_org == '') {
			$("#contact_org").focus().addClass('form_error');
			hasError = true;
			return false;
		} 

		var contact_face = $("#contact_face").val();
		if(contact_face == '') {
			$("#contact_face").focus().addClass('form_error');
			hasError = true;
			return false;
		}


		var contact_text = $("#contact_text").val();
		if(contact_text == '' ) {
			$("#contact_text").focus().addClass('form_error');
			hasError = true;
			return false;
		}

		var contact_phone = $("#contact_phone").val();
		if(contact_phone == '' ) {
			$("#contact_phone").focus().addClass('form_error');
			hasError = true;
			return false;
		}

		var contact_email = $("#contact_email").val();
		if(contact_email == '' ) {
			$("#contact_email").focus().addClass('form_error');
			hasError = true;
			return false;
		}


		var dataString = 'contact_org=' + contact_org + '&contact_face=' + contact_face + '&contact_text=' + contact_text + '&contact_email=' + contact_email + '&contact_phone=' + contact_phone;

		$.ajax({
		type: "POST",
		url: "/contact_mail.php",
		data: dataString,
			success: function() {
				//clear form
				$(".contactpage__form").find("input[type=text], textarea").val("")
				alert("Ваше сообщение отправленно!"); 
			}
		});
		return false;
	});



// end script
});



