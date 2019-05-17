slideItem = 0;

window.onload = function() {
	setInterval(passarSlide, 1000);

	var slidewidth = document.getElementById('slideshow').offsetWidth;
	var objs = document.getElementsByClassName('slide');

	for (i = 0; i < objs.length; i++) { 				// for (var i in objs) {
		objs[i].style.width = slidewidth + 'px';
	}
}

function passarSlide() {
	var slidewidth = document.getElementById('slideshow').offsetWidth;

	if (slideItem >= 3) {
		slideItem = 0;
	} else {
		slideItem++;
	}

	document.getElementsByClassName('slideshowarea')[0].style.marginLeft = '-' + (slidewidth * slideItem) + 'px';
	

	for (var i = 0; i <= 3; i++) {
		if (slideItem == i) {
			var ballColor = document.getElementsByClassName('bolinha')[i].style.backgroundColor = "#999";
		} else {
			var ballColor = document.getElementsByClassName('bolinha')[i].style.backgroundColor = "#CCC";
		}
	}
}

function mudarSlide(pos) {
	slideItem = pos;

	var slidewidth = document.getElementById('slideshow').offsetWidth;
	document.getElementsByClassName('slideshowarea')[0].style.marginLeft = '-' + (slidewidth * slideItem) + 'px';

	for (var i = 0; i <= 3; i++) {
		document.getElementsByClassName("bolinha")[i].style.backgroundColor ="#CCC";
		document.getElementsByClassName("bolinha")[slideItem].style.backgroundColor ="#999";
	}
}

function toggleMenu() {
	var menu = document.getElementById('menu');

	if (menu.style.display == "none" || menu.style.display == '') {
		menu.style.display = "block";
	} else {
		menu.style.display = "none";
	}
}

window.addEventListener('resize', function () { 
    window.location.reload(); 
});