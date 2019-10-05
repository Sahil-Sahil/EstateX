$(document).ready(function()
	{

	$('.error').hide();
	$(".button").click(function()

	{
	
	
	//
	var fname = $("input#fname").val();
	
	if(!(fname.match(/^[A-Za-z]/)))
	{
	 $("label#fnameFLetter_error").show();
	 
		return false;
	}
	
	 if (!fname(this, 'fname')) // validates the name
    valid = false;
	
	if(!(fname.match(/^[A-Za-z]*$/)))
	{
	 $("label#fnameSpChar_error").show();
		return false;
	}
	//
	//
	var lname = $("input#lname").val();
	
	if(!(lname.match(/^[A-Za-z]/)))
	{
	 $("label#lnameFLetter_error").show();
	 
		return false;
	}
	
	if(!(lname.match(/^[A-Za-z]*$/)))
	{
	 $("label#lnameSpChar_error").show();
		return false;
	}
	//
	//
	
	var email = $("input#email").val();
	
	//
	//
	var pnumber = $("input#pnumber").val();
	
		
	if((pnumber.match(/[!*]/)))
	{
	 $("label#pnumber_spChar_error").show();
		return false;
	}
	//
	//
	var Address = $("input#Address").val();
	
	if(!(Address.match(/^[""]/)))
	{
	 $("label#addressemthy_error").show();
	 
		return false;
	}
	
	
	//
	var psw = $("input#psw").val();
	
	if(!(psw.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/)))
	{
	 $("label#addressemthy_error").show();
	 
		return false;
	}
	//

  
	//
	});
	
});

var check = function() {
  if (document.getElementById('psw').value ==    document.getElementById('cpsw').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}


