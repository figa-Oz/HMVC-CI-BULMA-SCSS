/**
 @preserve CLEditor KCFINDER filemanager Image Plugin v1.0.0
http://kcfinder.sunhater.com/ from Pavel Tzonkov (sunhater@sunhater.com)
 http://premiumsoftware.net/cleditor    - 
 requires CLEditor v1.3.0 or later
 
 Copyright 2015, Zoran Cindori
 Select image from server or upload new image.
 
 Usage:	- include this file after jquery.cleditor.min.js in your web site
		- call $.cleditor.set_kcfinder(path) function to set path to KCFINDER filemanager root directory where browse.php exists
			e.g. $.cleditor.set_kcfinder('libs/kcfinder');
		- and that is all, click on "Insert Image" toolbar button, browse for image(KCFINDER), select image, Submit, and now you have image in you
		  cleditor.
*/

(function($) {
	/* method to set path for kcfinder file manager and activate plugin */	
	$.cleditor.set_kcfinder= function(path) {
		/* id for input:text field */
		var field_id = "cleditor-input-url";
		/* remove possible trailing slash from path */
		$.cleditor.kcfinder_url = path.substr(path.length - 1) == '/' ? path.substr(0, path.length - 1) :  path;
		/* we are changing original toolbar button for image insertion */
		$.cleditor.buttons.image.popupClass = 'cleditorPrompt';
		/* new popup code, input field now has specified id=cleditor-input-url, we also add link to click on to display file manager window */
		$.cleditor.buttons.image.popupContent = 'Enter URL or browse for image<br><input id="' + field_id + '" type="text" value="http://" style="width:300px;cursor:pointer"><br>' +
				  '<hr /><a onclick="$.cleditor.kcfinder_function(\'' + field_id  + '\')">Browse for image (KCFINDER)</a><hr /><input type=button value="Submit">';
	}
	
	$.cleditor.kcfinder_function = function(field) {
		/* kcfinder callback function */
		window.KCFinder = {
			callBack: function(url) {
				window.KCFinder = null;
				/* set url to input field */
				$('#' + field).val(url).trigger('change');
			}
		};
	
		/* function to display  kcfinder file manager window, type=image.*/
		window.open($.cleditor.kcfinder_url + "/browse.php?type=image", "kcfinder_cleditor",
			"status=0, toolbar=0, location=0, menubar=0, directories=0, " +
			"resizable=0, scrollbars=0, width=800, height=600"
		);
	}
})(jQuery);