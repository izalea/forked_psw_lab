var helpArray = [ "Kliknij aby wybrac swoj ulubiony kolor.",
  "Wybierz swoj ulubiony miesiac.",
  "Wybierz tym suwakiem jak bardzo podoba ci sie nasza strona.",
  "To sa wyniki ankiety: 89% klientiw ocenia wyglad naszej strony na 10.",
  "Podaj adres swojej strony w takim formacie http://www.domain.com",
  "Tym przyciskiem wyslesz nam wypelniona przez Ciebie ankiete",
  "Tym przyciskiem wyczyscisz ankiete ze swoich odpowiedzi.", 
  "" ];

var helpText1;
var helpText2;


function init()
{
   helpText1 = document.getElementById( "helpText1" );
   helpText2 = document.getElementById( "helpText2" );
   
   // register listeners
   registerListeners(document.getElementById( "color" ), 0 );
   registerListeners(document.getElementById( "month" ), 1 );
   registerListeners(document.getElementById( "range" ), 2 );
   registerListeners(document.getElementById( "meter" ), 3 );
   registerListeners(document.getElementById( "url" ), 4 );   
   registerListeners(document.getElementById( "submit" ), 5 );
   registerListeners(document.getElementById( "reset" ), 6 );
   
   var theForm = document.getElementById( "theForm" );
   theForm.addEventListener( "submit", 
      function()
      {                                                         
         return confirm( "Czy jestes pewny/a ze chcesz wyslac ankiete?" );  
      }, // end anonymous function
      false );
   theForm.addEventListener( "reset", 
      function()
      {                                                         
         return confirm( "Czy jestes pewny/a ze chcesz wyczyscic ankiete?" );  
      }, // end anonymous function
      false );
} // end function init

// utility function to help register events
function registerListeners( object, messageNumber )
{
	var helpText;
	if (messageNumber==0 || messageNumber == 1)
		helpText=helpText1;
	else
		helpText=helpText2;
   object.addEventListener( "focus", 
      function() { helpText.innerHTML = helpArray[ messageNumber ]; },
      false );
   object.addEventListener( "blur", 
      function() { helpText.innerHTML = helpArray[ 7 ]; }, false );
} // end function registerListener

window.addEventListener( "load", init, false );