function mouseOutEvent (e) {
	if (e.target.getAttribute("id" )=="mouse_over_out") {
		e.target.setAttribute("class", "smallFont");		
	}	
}

function mouseOverEvent (e) {
	if (e.target.getAttribute("id" )=="mouse_over_out") {
		e.target.setAttribute("class", "largeFont");		
	}
}

function mouseMoveEvent (e) {
	if (e.target.getAttribute("id" )=="coordinats") {
		var x = e.clientX;
		var y = e.clientY;
		var xScreen = e.screenX;
		var yScreen = e.screenY;
		var coor = "Koordynaty: (" + x + "," + y + ")";
		var coorScreen = "Koordynaty okna: (" + xScreen + "," + yScreen + ")";
		document.getElementById("koordynaty").innerHTML = coor;
		document.getElementById("koordynatyScreen").innerHTML = coorScreen;
	}	
}

function keyCodeFunction(event) {
    var x = event.which || event.keyCode;
    document.getElementById("keyCodee").innerHTML = "The Unicode value is: " + x;
}

function mouseDownEvent (e) {
	if (e.target.getAttribute("id" )=="ctrl_alt_shift") {
		if(e.altKey) {
			e.target.setAttribute("class", "altt");				
		}	
		if(e.ctrlKey) {
			e.target.setAttribute("class", "ctrll");				
		}
		if(e.shiftKey) {
			e.target.setAttribute("class", "shiftt");				
		}
	}	
}

function mouseUpEvent (e) {
	if (e.target.getAttribute("id" )=="ctrl_alt_shift") {
		e.target.setAttribute("class", "div-radius");		
	}
}

function clearCoor() {
    document.getElementById("koordynaty").innerHTML = "";
	document.getElementById("koordynatyScreen").innerHTML = "";
}

document.addEventListener("mouseout", mouseOutEvent, false);
document.addEventListener("mouseover", mouseOverEvent, false);
document.addEventListener("mousemove", mouseMoveEvent, false);
document.addEventListener("mousedown", mouseDownEvent, false);
document.addEventListener("mouseup", mouseUpEvent, false);