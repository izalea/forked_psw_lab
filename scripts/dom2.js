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

function makeAnchorsCollection () {
	var amountOfAnchors = document.anchors.length;
	document.getElementById("anchorsAmount" ).innerHTML = amountOfAnchors;
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

function namedItemFunction() {
    var x = document.forms.namedItem("info").innerHTML;
    document.getElementById("formResult").innerHTML = x;
}

window.addEventListener("load", makeLinks, false );
window.addEventListener("load", amountOfImages, false );
window.addEventListener("load", itemImage, false );
window.addEventListener("load", makeAnchorsCollection, false );
