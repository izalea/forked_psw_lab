<?php

	function changeProperties() {
		if(isset($_COOKIE["backgroundColor"]) && isset($_COOKIE["fontColor"]) && isset($_COOKIE["font"])) {
			$inputBackColor=$_COOKIE["backgroundColor"];
			$inputFontColor=$_COOKIE["fontColor"];
			$font=$_COOKIE["font"];
			echo "<body style='background-color:$inputBackColor; color:$inputFontColor; font-family:$font'>";
		}
		else {
			echo "<body style='background-color:#333; color:white; font-family:Arial, sans-serif;'>";
		}
	}
	
	changeProperties();
?>	

<!DOCTYPE html> 

<html lang="pl"> 
	
	<head> 
		<meta charset = "utf-8">  
		<Title>Title</title>
	</head>
	<!-- content -->	
<body> 		
	<p>Zawartość Cookies:</p>
	<?php
		foreach($_COOKIE as $key => $value )
			print("<p>$key: $value</p>" );
	?>
	<p><a href="../index.php"> Powrót </a>	do strony głównej.</p>
</body>
</html>