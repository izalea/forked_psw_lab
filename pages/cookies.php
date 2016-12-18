

<!DOCTYPE html> 

<html lang="pl"> 
	
	<head> 
		<meta charset = "utf-8">  
		<Title>Title</title>
	</head>
<?php

	define("VALID_DAYS", 60*60*24*30 );
	
	setcookie("backgroundColor", $_POST["backgroundColor"], time()+VALID_DAYS, '/');
	setcookie("fontColor", $_POST["fontColor"], time()+VALID_DAYS, '/');
	setcookie("font", $_POST["font"], time()+VALID_DAYS,  '/');
	setcookie("backgroundColor", $_POST["backgroundColor"], time()+VALID_DAYS);
	setcookie("fontColor", $_POST["fontColor"], time()+VALID_DAYS);
	setcookie("font", $_POST["font"], time()+VALID_DAYS);
	
	function clearCookies() {
		setcookie("backgroundColor", $_POST["backgroundColor"], time()-1, '/' );
		setcookie("fontColor", $_POST["fontColor"], time()-1, '/' );
		setcookie("font", $_POST["font"], time()-1, '/');
		setcookie("backgroundColor", $_POST["backgroundColor"], time()-1 );
		setcookie("fontColor", $_POST["fontColor"], time()-1 );
		setcookie("font", $_POST["font"], time()-1 );
	}
	
	function changeProperties() {
		$inputBackColor=$_COOKIE["backgroundColor"];
		$inputFontColor=$_COOKIE["fontColor"];
		$font=$_COOKIE["font"];
		
		echo "<body style='background-color:$inputBackColor'>";
		echo "<body style='color:$inputFontColor'>";
		echo "<body style='fontFamily:$font'>";		
	}
	
	
?>	
	<!-- content -->
	
<body> 		
	<p>Ustawienia zostały zapisane.</p>
	<p><a href="readCookies.php"> Zawartość Cookies.</a></p>
	<p><a href="../index.php"> Powrót </a>	do strony głównej.</p>
</body>
</html>