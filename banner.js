window.onload = rotate;

var adImage = new Array("img/food1.jpg", "img/food2.jpg", "img/food3.jpg", "img/food4.jpg");
var thisAd = 0;

function rotate() {
	thisAd++;
	if (thisAd == adImage.length) {
		thisAd = 0;
	}
	document.getElementById("banner-pic").src = adImage[thisAd];
	setTimeout("rotate()", 3 * 1000);
}

function banner_prev() {
	thisAd--;
	if (thisAd < 0) {
		thisAd = adImage.length - 1;
	}
	document.getElementById("banner-pic").src = adImage[thisAd];
}

function banner_next() {
	thisAd++;
	if (thisAd == adImage.length) {
		thisAd = 0;
	}
	document.getElementById("banner-pic").src = adImage[thisAd];
}