function bannerInit(imgSource, imageArray, textArray, photoImg, photoText)
{
	var imgIndex = 0

	function fadeOut() {  
		photoImg.style.opacity -= 0.05
		photoText.style.opacity -= 0.05
		
	  if(photoImg.style.opacity <= 0) {
		imgIndex = (imgIndex + 1) % imageArray.length
		photoImg.src = imgSource + imageArray[imgIndex] + ".png"
		photoText.innerHTML = textArray[imgIndex];
		setTimeout(fadeIn, 1000)
	  } else {
		setTimeout(fadeOut, 12)
	  }
	}

	function fadeIn() {
		photoImg.style.opacity = (+photoImg.style.opacity) + 0.05
		photoText.style.opacity = (+photoImg.style.opacity) + 0.05
		
	  if(photoImg.style.opacity >= 1) {
		setTimeout(fadeOut, 8000)
	  } else {
		setTimeout(fadeIn, 12)
	  }
	}
	
	fadeOut()
}


