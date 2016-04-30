function toggle(thing) 
{
	var element = thing.parentNode.parentNode.getElementsByTagName('span')[1];
            
	if (thing.value.charAt(0) == '^') 
	{              
		thing.value = thing.value.replace("^ Show", "* Hide");
		thing.value = thing.value.replace("^", "*");
		element.style.display = '';
	} 
	else 
	{ 
		thing.value = thing.value.replace("* Hide", "^ Show");
		thing.value = thing.value.replace("*", "^");
		element.style.display = 'none';                 
	}
}

function toggleSpan(thing, name)
{
	var element = document.getElementById(name);
            
	if (thing.value.charAt(0) == '^') 
	{              
		thing.value = thing.value.replace("^ Show", "* Hide");
		thing.value = thing.value.replace("^", "*");
		element.style.display = '';
	} 
	else 
	{ 
		thing.value = thing.value.replace("* Hide", "^ Show");
		thing.value = thing.value.replace("*", "^");
		element.style.display = 'none';                 
	}
}
        