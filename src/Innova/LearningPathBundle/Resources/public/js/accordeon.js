/***********************************************************************************************************************
DOCUMENT: includes/javascript.js
DEVELOPED BY: Ryan Stemkoski
COMPANY: Zipline Interactive
EMAIL: ryan@gozipline.com
PHONE: 509-321-2849
DATE: 3/26/2009
UPDATED: 3/25/2010
DESCRIPTION: This is the JavaScript required to create the accordion style menu.  Requires jQuery library
NOTE: Because of a bug in jQuery with IE8 we had to add an IE stylesheet hack to get the system to work in all browsers. I hate hacks but had no choice :(.
************************************************************************************************************************/
$(document).ready(function() {
	 
	//ACCORDION BUTTON ACTION (ON CLICK DO THE FOLLOWING)
	$('.accordionButton').click(function() {

		//REMOVE THE ON CLASS FROM ALL BUTTONS
		$('.accordionButton').removeClass('on');
		  
		//NO MATTER WHAT WE CLOSE ALL OPEN SLIDES
	 	$(this).nextAll(".accordionContent:first").slideUp('normal');

	 	if ($(this).parent().is("li")) {
	 		$(this).addClass("icon-folder-close");
	 		$(this).removeClass("icon-folder-open");
	 	}
	 	else if ($(this).is("h4")) {
	 		$(this).children("i").removeClass("icon-chevron-up");
			$(this).children("i").addClass("icon-chevron-down");
	 	}
	 	else if ($(this).parent().is("div")) {

	 		$(this).children("img").attr("src",base_path+"bundles/innovaactivity/img/folder-close.png");
	 	}
	 	
   
		//IF THE NEXT SLIDE WASN'T OPEN THEN OPEN IT
		if($(this).nextAll(".accordionContent:first").is(':hidden') == true) {
			
			//ADD THE ON CLASS TO THE BUTTON
			$(this).addClass('on');
			if ($(this).parent().is("li")) {
		 		$(this).addClass("icon-folder-open");
		 		$(this).removeClass("icon-folder-close");
	 		}
	 		else if ($(this).is("h4")) {
		 		$(this).children("i").addClass("icon-chevron-up");
				$(this).children("i").removeClass("icon-chevron-down");
	 		}
	 		else if ($(this).parent().is("div")) {
	 			$(this).children("img").attr("src",base_path+"bundles/innovaactivity/img/folder-open.png");
	 		}
	 		
			  
			//OPEN THE SLIDE
			$(this).nextAll(".accordionContent:first").slideDown('normal');
		 } 
		  
	 });
	  
	

	
	
	/********************************************************************************************************************
	CLOSES ALL S ON PAGE LOAD
	********************************************************************************************************************/	
	
	$('.accordionContent').hide();
	$('.accordionButton.on').nextAll(".accordionContent").slideDown("normal");
	

});
