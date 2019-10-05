$(document).ready(function()
	{

	$('.error').hide();
	$(".button").click(function()

	{
	
	
	
	var uname = $("input#uname").val();
	
	if(!(uname.match(/^[A-Za-z]/)))
	{
	 $("label#usernameFLetter_error").show();
	 
		return false;
	}
	
	if(!(uname.match(/^[A-Za-z0-9]*$/)))
	{
	 $("label#usernameSpChar_error").show();
		return false;
	}

	var psw = $("input#psw").val();
	
	if(!(psw.length>7 && psw.length<17))
	{
	 $("label#psw_length_error").show();
		return false;
	}
	
	if(!(psw.match(/[\d]/)))
	{
	 $("label#psw_number_error").show();
		return false;
	}
	
	if(!(psw.match(/[!*]/)))
	{
	 $("label#psw_spChar_error").show();
		return false;
	}
	if(!(psw.match(/^[A-Za-z]/)))
	{
	 $("label#psw_FLetter_error").show();
	 
		return false;
	}
	});
});
