function bannerInit(imgSource, photoDiv, titleDiv, dataArray, timeOut, descriptionDiv)
{
	var imgIndex = 0

	function fadeOut() {  
		photoDiv.style.opacity -= 0.05
		titleDiv.style.opacity -= 0.05
		if(descriptionDiv !== undefined)
		{
			descriptionDiv.style.opacity -= 0.05;
		}
		
	  if(photoDiv.style.opacity <= 0) {
		imgIndex = (imgIndex + 1) % dataArray.length
		photoDiv.src = imgSource + dataArray[imgIndex].image + ".png"
		titleDiv.innerHTML = dataArray[imgIndex].title;
		if(descriptionDiv !== undefined)
		{
			desciptionDiv.innerHTML = dataArray[imgIndex].description;
		}
		
		setTimeout(fadeIn, 1000)
	  } else {
		setTimeout(fadeOut, 12)
	  }
	}

	function fadeIn() {
		photoDiv.style.opacity = (+photoDiv.style.opacity) + 0.05
		titleDiv.style.opacity = (+photoDiv.style.opacity) + 0.05
		if(descriptionDiv !== undefined)
		{
			descriptionDiv.style.opacity = (+photoDiv.style.opacity) + 0.05
		}
		
	  if(photoDiv.style.opacity >= 1) {
		setTimeout(fadeOut, timeOut)
	  } else {
		setTimeout(fadeIn, 12)
	  }
	}
	
	fadeOut()
}


