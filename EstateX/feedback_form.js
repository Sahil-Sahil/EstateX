
$(document).ready(function()
	{
	
		$('.error').hide();
		$(".button").click(function()
		{
		  // validate and process form here 
			 var firstname = $("input#firstname").val();
			 if (firstname == "") 
			 {
				$("label#firstname_error").show();
				$("input#firstname").focus();
				return false;
			  }
			 
			 
			 if (firstname.match(/[\d]/))
			 {
				$("label#firstnameNumber_error").show();
				$("input#firstname").focus();
				return false;			 
			 }
		
			  
			 var lastname = $("input#lastname").val();
			 if (lastname == "") 
			 {
				$("label#lastname_error").show();
				$("input#lastname").focus();
				return false;
			  }
			  
			 if (lastname.match(/[\d]/))
			 {
				$("label#lastnameNumber_error").show();
				$("input#lasttname").focus();
				return false;			 
			 }
			  
			var email = $("input#email").val();
			if (email == "") 
			{
				$("label#email_error").show();
				$("input#email").focus();
				return false;
			  }

	  });


	});