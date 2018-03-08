$(document).ready( function(){
                
	/************************/
	/* SLIDE LEFT BUTTON */
	/***************************************/
	
	$("#button_left").on( "click", function(){
		$("#slide_left").toggleClass("slide_left_open");/*Opens and closes the menu*/
		if($("#slide_left").hasClass("slide_left_open")){/*If the menu is open, then:*/
			$("#bsleft").attr('src','images/en/left_download.png');/*Change the menu button icon*/
		}else{
			$("#bsleft").attr('src','images/en/left_download.png');/*If the menu is closed, change to the original button icon*/
		}
	});
	
	/************************/
	/* SLIDE RIGHT BUTTON */
	/***************************************/

	$("#button_right").on( "click", function(){
		$("#slide_right").toggleClass("slide_right_open");/*Opens and closes the menu*/
		if($("#slide_right").hasClass("slide_right_open")){/*If the menu is open, then:*/
			$("#bsright").attr('src','images/en/right_contact.png');/*Change the menu button icon*/
		}else{
			$("#bsright").attr('src','images/en/right_contact.png');/*If the menu is closed, change to the original button icon*/
		}
	});

});
