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

function pickNumber() {
	var choice; 
	var outputDiv = document.getElementById("result");
	var output = "<h1>Wybrałeś: ";
	choice = window.prompt( "Wybierz numer 1,2,3,4 lub 5");
	switch ( choice )
         {
            case "1":
               output += "jeden";
               break;
            case "2":
               output += "dwa";
               break;
            case "3":
               output += "trzy";
               break;
            case "4":
               output += "cztery";
               break;
            case "5":
               output += "pięć";
               break;
            default:
               output += "niepoprwaną wartość... Wybierz 1,2,3,4 lub 5!";          
               break;
         } //end switch
		 
	output+="</h1>";
	outputDiv.innerHTML = output;
}



function displaySquare(){
	var choice;
	do{
		choice = window.prompt("Podaj cyfrę którą chcesz podnieść do kwadratu lub podaj wpisz literę aby zakończyć")
		var number = parseFloat(choice);
		if(!isNaN(number))
			window.alert("Kwadrat " + number + " to " + Math.pow(number,2));
	}
	while(!isNaN(number))
	
}
