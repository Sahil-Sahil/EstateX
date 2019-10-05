
var slideIndex = 1;
showSlidesByClick(slideIndex);

function showSlidesByClick(n) 
{
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  if (n > slides.length) 
	  {
		  slideIndex = 1
	  }
	  if (n < 1) 
	  {
		  slideIndex = slides.length
		}
	  for (i = 0; i < slides.length; i++)
		  {
		  slides[i].style.display = "none";
		  }
	  slides[slideIndex-1].style.display = "block"; 
}

  // Next Image
function plusSlides(n) 
{
  showSlidesByClick(slideIndex += n);
}
// Previous Image
function currentSlide(n) 
{
	showSlidesByClick(slideIndex = n);
}




function selectMars() 
{
	if(document.getElementById("selectSizeMars").value == "op1")
	{
		document.getElementById("priceMars").innerHTML="Price: $$$$";
	}
	if(document.getElementById("selectSizeMars").value == "op2")
	{
		document.getElementById("priceMars").innerHTML="Price: $100,000";
	}
	if(document.getElementById("selectSizeMars").value == "op3")
	{
		document.getElementById("priceMars").innerHTML="Price: $200,000";
	}
	if(document.getElementById("selectSizeMars").value == "op4")
	{
		document.getElementById("priceMars").innerHTML="Price: $300,000";
	}
};

	function selectMoon() 
{
	if(document.getElementById("selectSizeMoon").value == "op1")
	{
		document.getElementById("priceMoon").innerHTML="Price: $$$$";
	}
	if(document.getElementById("selectSizeMoon").value == "op2")
	{
		document.getElementById("priceMoon").innerHTML="Price: $100,000";
	}
	if(document.getElementById("selectSizeMoon").value == "op3")
	{
		document.getElementById("priceMoon").innerHTML="Price: $200,000";
	}
	if(document.getElementById("selectSizeMoon").value == "op4")
	{
		document.getElementById("priceMoon").innerHTML="Price: $300,000";
	}
};
	function selectVenus() 
{
	if(document.getElementById("selectSizeVenus").value == "op1")
	{
		document.getElementById("priceVenus").innerHTML="Price: $$$$";
	}
	if(document.getElementById("selectSizeVenus").value == "op2")
	{
		document.getElementById("priceVenus").innerHTML="Price: $100,000";
	}
	if(document.getElementById("selectSizeVenus").value == "op3")
	{
		document.getElementById("priceVenus").innerHTML="Price: $200,000";
	}
	if(document.getElementById("selectSizeVenus").value == "op4")
	{
		document.getElementById("priceVenus").innerHTML="Price: $300,000";
	}
};


document.getElementById("buyNow1").onclick = redirectToBuy1;

function redirectToBuy1() 
{
  document.getElementById("redirect1").innerHTML ="You will be redireted to the payment page.......";
}

document.getElementById("buyNow2").onclick = redirectToBuy2;

function redirectToBuy2() 
{
  document.getElementById("redirect2").innerHTML ="You will be redireted to the payment page.......";
}

document.getElementById("buyNow3").onclick = redirectToBuy3;

function redirectToBuy3() 
{
  document.getElementById("redirect3").innerHTML ="You will be redireted to the payment page.......";
}

