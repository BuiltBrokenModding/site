var imageArray = ["bt_1", "cc_1", "icbm_1", "rc_1", "wb_1", "wr_1"];
var textArray = ["BT", "CC", "ICBM", "RC", "WB", "WR"];
var photoImg = document.getElementById("photoBannerImage");
var photoText = document.getElementById("photoText");

var imgIndex = 0

function fadeOut() {  
	photoImg.style.opacity -= 0.05
	photoText.style.opacity -= 0.05
	
  if(photoImg.style.opacity <= 0) {
  	imgIndex = (imgIndex + 1) % imageArray.length
    photoImg.src = "img/banner/" + imageArray[imgIndex] + "_254.png"
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
