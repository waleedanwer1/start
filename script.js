function display ()
{

	if ( input.value.length > 0 || event.keyCode === 13)
	{
		var li = document.createElement("li");
	li.appendChild(document.createTextNode(input.value));
	ul.appendChild(li);
	input.value = "";
	}
	
}


var button = document.getElementById("enter");
var input = document.getElementById("userinput");
var ul = document.querySelector("ul");
button.addEventListener("click",display);
button.addEventListener("keypress",display);

