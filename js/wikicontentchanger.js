// JavaScript Document
var selection = 1;

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
	selection--;
	//Diplay Embed
	document.getElementById("iframe").src = embeds[selection];
	selection++;
}