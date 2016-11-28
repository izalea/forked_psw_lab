function changeProperties() {
	var inputBackColor=document.getElementById("backColorChange").value;
	var inputFontColor=document.getElementById("fontColorChange").value;
	var font=document.getElementById("fontSelect").value;
	
    document.body.style.background = inputBackColor;
    document.body.style.color  = inputFontColor;
	document.body.style.fontFamily = font;
}

