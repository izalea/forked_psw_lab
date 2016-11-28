

function start(){
	var section = document.getElementById("jsDOM1");
	
	section.innerHTML = "Button created with <strong>createElement</strong>"+ 
		" and appended with <strong>appendChild</strong> to the section<br>";
	var insertButton = document.createElement("input");
	insertButton.type = "button";
	insertButton.value = "Insert a button before this one";
	insertButton.setAttribute("id","insertButton");
	insertButton.addEventListener("click", insert, false);
	section.appendChild(insertButton);
		
	
	
}

function insert(){
	var section = document.getElementById("jsDOM1");
	
	if(document.getElementById("replaceButton"))
		window.alert("You already did that!");
	else{
		var insertButton = document.getElementById("insertButton");
		var replaceButton = document.createElement("input");
		replaceButton.type = "button";
		replaceButton.value = "Replace the first button with text and add new button";
		replaceButton.setAttribute("id","replaceButton");
		replaceButton.addEventListener("click", replace, false);
		section.insertBefore(replaceButton, insertButton);
	}
}

function replace(){
	var section = document.getElementById("jsDOM1");
	
	if(document.getElementById("removeButton"))		
		window.alert("You already did that!");
	else{
		var text = "This text was created with createTextNode and replaced a button";
		var textNode = document.createTextNode(text);
		var insertButton = document.getElementById("insertButton");
		
		
		section.replaceChild(textNode,insertButton);
		section.appendChild(document.createElement("br"));
		section.appendChild(document.createElement("br"));
		
		var removeButton = document.createElement("input");
		removeButton.type = "button";
		removeButton.value = "A new button. Click to remove the whole section using parent";
		removeButton.setAttribute("id","removeButton");
		removeButton.addEventListener("click", remove, false);
		section.appendChild(removeButton);
	}
	
	
}

function remove(){
	var section = document.getElementById("jsDOM1");
	section.parentNode.removeChild(section);
}

window.addEventListener("load",start,false);