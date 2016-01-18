/**
* @version		$Id: caption.js 5263 2006-10-02 01:25:24Z webImagery $
* @copyright	Copyright (C) 2005 - 2010 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/


document.addEventListener('DOMContentLoaded', function () {

	var switchBlock = document.createElement('div');
		switchBlock.setAttribute("id", "siteswitcher");
		switchBlock.style.position = "fixed";
		switchBlock.style.top = "50%";
		switchBlock.style.width = "175px";
		switchBlock.style.right = "-85px";
		switchBlock.style.fontSize = "13px";
		switchBlock.style.textAlign = "center";
		switchBlock.style.transform = "rotate(90deg)";
		switchBlock.style.webkitTransform = "rotate(90deg)";
		switchBlock.style.zIndex = "111";

		switchBlock.style.backgroundColor = '#B4FFA0';
		switchBlock.style.padding = '5px 15px 10px';
		switchBlock.style.borderBottomLeftRadius = '15px';
		switchBlock.style.borderBottomRightRadius = '15px';


	var link = document.createElement('a');
		var url = "http://infoscon.ru/";
		
		link.setAttribute("href", url);
		link.innerHTML = "Новая версия сайта";

		document.body.appendChild(switchBlock);
		switchBlock.appendChild(link)

});



/**
* JCaption javascript behavior
*
* Used for displaying image captions
*
* @package	Joomla
* @since	1.5
* @version	1.0
*/
var JCaption = new Class({
	initialize: function(selector)
	{
		this.selector = selector;

		var images = $$(selector);
		images.each(function(image){ this.createCaption(image); }, this);
	},

	createCaption: function(element)
	{
		var caption   = document.createTextNode(element.title);
		var container = document.createElement("div");
		var text      = document.createElement("p");
		var width     = element.getAttribute("width");
		var align     = element.getAttribute("align");

		if(!width) {
			width = element.width;
		}

		//Windows fix
		if (!align)
			align = element.getStyle("float");  // Rest of the world fix
		if (!align) // IE DOM Fix
			align = element.style.styleFloat;

		if (align=="") {
			align="none";
		}

		text.appendChild(caption);
		text.className = this.selector.replace('.', '_');

		element.parentNode.insertBefore(container, element);
		container.appendChild(element);
		if ( element.title != "" ) {
			container.appendChild(text);
		}
		container.className   = this.selector.replace('.', '_');
		container.className   = container.className + " " + align;
		container.setAttribute("style","float:"+align);

		container.style.width = width + "px";

	}
});

document.caption = null;
window.addEvent('load', function() {
	var caption = new JCaption('img.caption')
	document.caption = caption
});
