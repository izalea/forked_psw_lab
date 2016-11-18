	var imie;
	var liczba;
	var liczbaFloat;
	var wiekInt;

function wprowadzDane () {
	this.imie = window.prompt("Podaj swoje imie: ");
	this.liczbaFloat = window.prompt("Podaj swoją ulubiona liczbę float: ");
	this.wiekInt = window.prompt("Podaj swój wiek: ");
	this.liczbaFloat = parseFloat(this.liczbaFloat);
	this.wiekInt = parseInt(this.wiekInt);	
	this.liczba = parseInt(this.wiekInt) + parseFloat(this.liczbaFloat);
}

function innerH() {
    document.getElementById("inner").innerHTML = "<h3>Witamy "+this.imie+" na naszej stronie! Twój szczęśliwy numer to "+this.liczba+"</h3>";
}

function alertFunkcja () {
	window.alert("Witamy "+this.imie+" na naszej stronie! Twój szczęśliwy numer to "+this.liczba);
}

function eventButton () {
	var button = document.getElementById("buttonListener");
	button.addEventListener("click", alertWindow);
}

function alertWindow () {
	wprowadzDane();
	alertFunkcja();
}
