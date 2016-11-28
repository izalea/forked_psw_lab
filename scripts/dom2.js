function makeLinks () {
	var links = document.links;
	var cont = "<ul>";
	
	for (var i = 0; i < links.length; ++i) {
		var link = links[i];
		cont += "<li><a href='" + link.href + "'>" + link.innerHTML + "</li>"
	}
	
	cont += "</ul>";
	document.getElementById("links" ).innerHTML=cont;
}

function amountOfImages() {
    var x = document.images.length;
    document.getElementById("liczbaObrazow").innerHTML = x;
}

function itemImage() {
    var x = document.images.item(2);
	var y = document.images.namedItem("myImg").alt;
    x.style.border = "10px dotted black";
	document.getElementById("opis").innerHTML = y;
}

window.addEventListener("load", makeLinks, false );
window.addEventListener("load", amountOfImages, false );
window.addEventListener("load", itemImage, false );
