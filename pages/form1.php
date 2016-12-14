<!DOCTYPE html> 

<!-- kontakt.html -->
<html lang="pl"> 
	
	<head> 
		<meta charset = "utf-8">  
		<Title>Title</title>
	</head>
	
	<!-- content -->
	
<body> 		
<?php

	$number1=$_POST['number_1'];
	$number2=$_POST['number_2'];
	$tekst=$_POST['text'];
	define("STALA", "To jest stała.");
	 echo "Stała: ".STALA;
	echo "Liczba1 = $number1 <br/>";
	echo "Liczba2 = $number2 <br/>";
	echo "Typy liczb do konwersji: ".gettype($number1)." ".gettype($number2)."<br/>";	
	settype($number1, 'double');
	settype($number2, 'double');
	
	function suma()
	{
		$sum = $GLOBALS['number1'] + $GLOBALS['number2'];
		echo "Suma liczb (zmienne globalne): ".$sum ."<br/>";	
	}
	
	function iloraz()
	{
		$iloraz=0;
		if($GLOBALS['number2'] == 0) {
			$iloraz = "Nie mozna dzielić przez zero!";		
		}
		else {
			$iloraz=$GLOBALS['number1'] / $GLOBALS['number2'];		
		}	
		echo "Iloraz liczb: $iloraz <br />";		
	}
	
	function iloczyn()
	{
		$iloczyn=$GLOBALS['number1']  * $GLOBALS['number2'] ;
		echo "Iloczyn liczb: $iloczyn <br />";		
	}
	
	function pierwszeństwoOperatorów ()
	{
		$result=$GLOBALS['number1'] + $GLOBALS['number2']*$GLOBALS['number1'] ;
		echo "Liczba1 + Liczba2*Liczba1= $result <br />";
	}
	
	function numericTable ()
	{
		$tab = array($GLOBALS['number1'], $GLOBALS['number2'], $GLOBALS['tekst']);
		for($i=0; $i<3; $i++)
		{
			echo "Element ".$i." ma wartość: ".$tab[$i].'<br />';
			echo "Element tabeli z użyciem reset : ".reset($tab)."<br/>";
		}			
		funcCount ($tab);
	}
	
	function funcCount ($tab){
		$wynik = count ($tab);
		echo "Liczba elementów tabeli: $wynik <br/>";
	}
	
	function assocTable ()
	{
		$elementy = array('Pirewszy element' => $GLOBALS['number1']
			, 'Drugi element' => $GLOBALS['number2']
			, 'Trzeci element' => $GLOBALS['tekst']
			);		

			$elem = current($elementy);
			echo "Tebele asocjacyjne. Uzycie NEXT: <br/>";
			echo "$elem <br/>";
			$elem = next($elementy);
			echo "$elem <br/>";
			$elem = next($elementy);
			echo "$elem <br/>";
	}
	
	function stale () 
	{
        echo "Stała: ".STALA."<br/>";
        echo "Proba zmiany stalej na 10";
		$GLOBALS[STALA] = 10;
		echo "<br/> Stała po próbie zmiany: ".STALA."<br/>";
	}


	suma();
	iloraz();
	iloczyn();
	pierwszeństwoOperatorów();
	numericTable();
	assocTable ();
	stale();
	
	echo "Typy liczb po konwersji: ".gettype($number1)." ".gettype($number2)."<br/>";	
	$number1Int = (int)$number1;
	$number2Int = (int)$number2;
	echo "Typy liczb po rzutowaniu: ".gettype($number1Int)." ".gettype($number2Int);
?>
</body>
</html>