"use strict";

let rotateX = 0, rotateY = 0;

document.onkeydown = function(e) {
	if     (e.keyCode === 37) rotateY -= 2
	else if(e.keyCode === 38) rotateX += 2
	else if(e.keyCode === 39) rotateY += 2
	else if(e.keyCode === 40) rotateX -= 2

	document.querySelector('.rubiksCube').style.transform = 
	        'rotateY(' + rotateY + 'deg)'+'rotateX(' + rotateX + 'deg)';
	     // `rotateY(${rotateY}deg)rotateX(${rotateX}deg)`;
}















