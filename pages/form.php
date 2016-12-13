<!DOCTYPE html> 

<!-- kontakt.html -->
<html lang="pl"> 
	
	<head> 
		<meta charset = "utf-8">  
	</head>
	
	<!-- content -->
	
	<body> 		
	
<?php
	$imie=5;
	echo "Typ zmiennej imie do zmiany: ";
	$typ = var_dump($imie);
	echo "<br />";
	$imie=$_POST['imie'];
	echo "Typ zmiennej imie po zmianie: ";
	$typ = var_dump($imie);
	echo "<br />";
	$nazwisko=$_POST['nazwisko'];
	$email=$_POST['email'];
	$text=$_POST['tekst'];
	
	
	echo "Imie: $imie <br />";
	echo "Nazwisko: $nazwisko <br />";
	echo "Email: $email <br />";		
	echo "Text: $text <br />";	
	
	
?>
	
	</body>
</html>
