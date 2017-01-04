<?php
session_start(); 
 if(isSet($_SESSION["user"])) {
	  unset($_SESSION["user"]);
 unset($_SESSION["pass"]);
 $komunikat = "Wylogowanie prawidłowe!";

}

 else{
  $komunikat = "Nie byłeś zalogowany!!!";
}


?>

<html>
<head>
</head>
<body>
<?php echo $komunikat ?>
<p><a href = '../index.php'>Do strony głównej.</a></p>
</body>



<?php  
session_unset(); 
?>