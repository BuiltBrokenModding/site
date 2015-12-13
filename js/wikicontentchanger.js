// JavaScript Document
var selection = 1;

var warheadTypes = ['Micro','Small','Medium','Large','Super','SuchWow','MuchAmaze'];

displayContent();

if(embeds.length > 1)
{
	writeRightArrow();
}

function writeRightArrow()
{
	document.getElementById("arrowright").src = '../../../../../img/icbm/arrow-right.png';
	document.getElementById("arrowright").setAttribute("onclick", "nextVideo()");
}

function writeLeftArrow()
{
	document.getElementById("arrowleft").src = '../../../../../img/icbm/arrow-left.png';
	document.getElementById("arrowleft").setAttribute("onclick", "prevVideo()");
}

function nextVideo()
{
	//Hide current div
	document.getElementById(selection).setAttribute("style","display:none");
	
	selection++;
	if(selection == embeds.length)
	{
		//If there's no more after this one
		//Remove Right Arrow
		document.getElementById("arrowright").src ="../../../../../img/icbm/buranku.png";
		document.getElementById("arrowright").removeAttribute("onclick");
	}
	writeLeftArrow();
	displayContent();
}
function prevVideo()
{
	//Hide current div
	document.getElementById(selection).setAttribute("style","display:none");
	
	selection--;
	if(selection == 1)
	{
		//If its at the start of the list
		//Remove left arrow
		document.getElementById("arrowleft").src = "../../../../../img/icbm/buranku.png";
		document.getElementById("arrowleft").removeAttribute("onclick");
	}
	writeRightArrow();
	displayContent();
}

function displayContent() //Display embed
{
	//Diplay Embed
	document.getElementById("iframe").src = embeds[selection - 1];
	//Show new div
	document.getElementById(selection).removeAttribute("style");
	//Alter title
	document.getElementById("warhead").innerHTML = warheadTypes[selection - 1];
}