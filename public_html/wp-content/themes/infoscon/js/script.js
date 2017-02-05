
// ScrollTo script
var _gsScope="undefined"!=typeof module&&module.exports&&"undefined"!=typeof global?global:this||window;(_gsScope._gsQueue||(_gsScope._gsQueue=[])).push(function(){"use strict";var t=document.documentElement,e=window,i=function(i,r){var s="x"===r?"Width":"Height",n="scroll"+s,a="client"+s,o=document.body;return i===e||i===t||i===o?Math.max(t[n],o[n])-(e["inner"+s]||t[a]||o[a]):i[n]-i["offset"+s]},r=_gsScope._gsDefine.plugin({propName:"scrollTo",API:2,version:"1.7.5",init:function(t,r,s){return this._wdw=t===e,this._target=t,this._tween=s,"object"!=typeof r&&(r={y:r}),this.vars=r,this._autoKill=r.autoKill!==!1,this.x=this.xPrev=this.getX(),this.y=this.yPrev=this.getY(),null!=r.x?(this._addTween(this,"x",this.x,"max"===r.x?i(t,"x"):r.x,"scrollTo_x",!0),this._overwriteProps.push("scrollTo_x")):this.skipX=!0,null!=r.y?(this._addTween(this,"y",this.y,"max"===r.y?i(t,"y"):r.y,"scrollTo_y",!0),this._overwriteProps.push("scrollTo_y")):this.skipY=!0,!0},set:function(t){this._super.setRatio.call(this,t);var r=this._wdw||!this.skipX?this.getX():this.xPrev,s=this._wdw||!this.skipY?this.getY():this.yPrev,n=s-this.yPrev,a=r-this.xPrev;this._autoKill&&(!this.skipX&&(a>7||-7>a)&&i(this._target,"x")>r&&(this.skipX=!0),!this.skipY&&(n>7||-7>n)&&i(this._target,"y")>s&&(this.skipY=!0),this.skipX&&this.skipY&&(this._tween.kill(),this.vars.onAutoKill&&this.vars.onAutoKill.apply(this.vars.onAutoKillScope||this._tween,this.vars.onAutoKillParams||[]))),this._wdw?e.scrollTo(this.skipX?r:this.x,this.skipY?s:this.y):(this.skipY||(this._target.scrollTop=this.y),this.skipX||(this._target.scrollLeft=this.x)),this.xPrev=this.x,this.yPrev=this.y}}),s=r.prototype;r.max=i,s.getX=function(){return this._wdw?null!=e.pageXOffset?e.pageXOffset:null!=t.scrollLeft?t.scrollLeft:document.body.scrollLeft:this._target.scrollLeft},s.getY=function(){return this._wdw?null!=e.pageYOffset?e.pageYOffset:null!=t.scrollTop?t.scrollTop:document.body.scrollTop:this._target.scrollTop},s._kill=function(t){return t.scrollTo_x&&(this.skipX=!0),t.scrollTo_y&&(this.skipY=!0),this._super._kill.call(this,t)}}),_gsScope._gsDefine&&_gsScope._gsQueue.pop()();
// 

$(function(){
	
	//Check to see if the window is top if not then display button
	$('.scrollToTop').css({"display":"none"});
	
	$(window).scroll(function(){

		if ($(this).scrollTop() > 1000) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});


$(function() {

// sitemap page replace fcking Post-header 
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

	//the consultation form
		$('#freeCons, #bottomForm, #feedback_me').click(function(){
			// $('#contactForm form').removeClass('animated fadeOut zoomOut');
			$('#contactForm').removeClass('animated slideInDown slideOutDown');
			$('#contactForm').addClass('active animated slideInDown');
			$('.deshevle').hide();
			console.log('click!')
		});





	//the yellow order button

		var orderText = $('.container > h1').text();
		(orderText)? $('#PostOrderForm .h1').append('<div>\"'+orderText+'\"</div>'):'';


		$('.post_order').click(function(){
			// $('#PostOrderForm form').removeClass('animated fadeOut zoomOut');
			$('#PostOrderForm').removeClass('animated slideInDown slideOutDown');
			$('#PostOrderForm').addClass('active animated slideInDown');
			$('.deshevle').hide();
		});


	// close forms

		//single.php
		$('#PostOrderForm .orderclose').click(function(){
			$('#PostOrderForm').removeClass('active animated slideInDown slideOutDown');
			$('#PostOrderForm').addClass('active animated slideOutDown');
			$('.deshevle').show();
		});

		//fotm.php
		$('#contactForm .orderclose').click(function(){
			$('#contactForm').removeClass('active animated slideInDown slideOutDown');
			$('#contactForm').addClass('active animated slideOutDown');
			$('.deshevle').show();
		});

		 
		// the yellow order button in the post service page
		//hide order button in the artcle page
		if ($(".container > h1:contains('Статья')").length) {
			$('.post_order').css({
				"display": "none"
			});
		};
	/////////////////////


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


//index current-menu-item

	if (window.location.pathname == '/' || window.location.pathname == '/index/')
	{
		$(".top_menu>li:nth-child(1)").addClass("current-menu-item"); 
	}

// logo href
		$('.gohome').click(function(){ window.location = '/'});
// gerbs href
		$('.rf').click(function(){ window.location = 'http://government.ru/'});
		$('.minkomsvyaz').click(function(){ window.location = 'http://minsvyaz.ru/'});
		$('.roskomnadzor').click(function(){ window.location = 'https://rkn.gov.ru/'});


// menu burger 
		var xmenuToggle = true;

		$('.xmenu').click(function(){
				if(xmenuToggle === true) {
					$('header').addClass('mobile');
					xmenuToggle = false;
					$('.deshevle').hide();
				}
				else {
					$('header').removeClass('mobile');
					xmenuToggle = true;
					$('.deshevle').show();
				}
		});




// scroll's href

		// $(".toprice").click(function() {
		//     $('html, body').animate({
		//         scrollTop: $(".priceheader").offset().top
		//     }, 500);
		// });
		var servToggle = true;
		$(".toprice").click(function() {
			if(servToggle === true) {
		   		$('.services').removeClass('off').addClass('on');
		   		servToggle = false;
			}
			else {
		   		$('.services').removeClass('on').addClass('off');
		   		servToggle = true;
			}
		});



// scroll's parallax


if($("#scroll-flag").length >= 1) {
	
		var topScrollGo = function() {
			var topScroll = $(this).scrollTop();
			$('.s_bg').css({transform: 'translate3d(0px,'+ topScroll/3.35 +'px,0px)'});
		};
			$( window ).scroll(topScrollGo);









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




// mail sender => contact page

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
				$('.contactForm').addClass('active animated slideOutUp').find("input[type=text], textarea").val("");
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
				$('.contactForm').addClass('active animated slideOutUp').find("input[type=text], textarea").val("");
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



