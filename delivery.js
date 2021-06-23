function Opentab(evt, content) 
{
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks=document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(content).style.display = "block";
  evt.currentTarget.className += " active";
}

function show()
{
	var Box = document.getElementById("credit");
	if (Box.checked== true)
	{
		document.getElementById("infos").style.display= "block";
	}
	else
	{
		document.getElementById("infos").style.display= "none";
	}
	
}

