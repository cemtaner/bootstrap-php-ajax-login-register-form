
// SITE_URL > YOUR SITE URL INDEX PATH
var SITE_URL	= "http://your-url.com";


function AjaxPost(FormID,SendUrl,SonucID,Loading){
	
	//-css #loader id
	$("#"+Loading).html('<div id="loader"></div>');
	
	$.ajax({
		   type: "POST",
		   url: SITE_URL+"Ajax.php?Func="+SendUrl,
		   data: $('form#'+FormID).serialize(),
		   success: function(reply){
			   
				   $("#"+SonucID).html(reply);
				   $("#"+Loading).html("");
				   
				   //--error turn off after 3 seconds, write 3000 to only 3 numbers, 5000 for 5 seconds
				   $("#"+SonucID).show();
				   $("#"+SonucID).delay(3000).hide(0);
			   }
		    
		   
		   });
	
	
	}

