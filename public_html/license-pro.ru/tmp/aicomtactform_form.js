
	//<![CDATA[
	<!--
	function getAiContactForm_4() {
		if (document.getElementById('aiContactSafe_module_4')) {
			var url = 'http://license-pro.ru/index.php?option=com_aicontactsafe&sTask=message&task=message&pf=4&use_ajax=1&r_id=932881325&format=raw&lang=en';
			new Ajax(url, {
				method: 'get',
				onRequest: function(){ 
										$('aiContactSafe_module_4').setHTML('Please wait ...');
									},
				onComplete: function() { 
										$('aiContactSafe_module_4').setHTML( this.response.text );
										setupCalendars(4);
										changeCaptcha(4,0);
										resetSubmit(4);
									}
			}).request();
		}
	}
	window.addEvent('load', function() {
		getAiContactForm_4();
	});
	//-->
	//]]>
