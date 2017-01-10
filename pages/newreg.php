<?php 
	if(!isset($_SESSION)) {
		session_start(); 		
	}
	
?>


<!DOCTYPE html>
<html lang="pl"> 
	
	<head> 
		<meta charset = "utf-8">
		<meta name="keywords" content="logowanie">
		<meta name="description" content="Strona logowania">
		<meta name="author" content="Sylwia i Hanna">
		<link rel="icon" type="image/x-icon" href="../img/pizza_icon.ico">		
		<link rel="stylesheet" type="text/css" href="../styles/css2.css">	
		<title>ZalogCONT.</title>
		<style type = "text/css">
         p       { margin: 0px; }
         .error  { color: red }
         p.head  { font-weight: bold; margin-top: 10px; }
         label   { width: 5em; float: left; }
      </style>
	</head>
	<body>

	<?php
		
			
		$user= $_POST[ "user2" ];
        $pass = $_POST[ "pass2" ];
		
		$query = "INSERT INTO userdata (login,haslo,imie,nazwisko,email,telefon,miasto) VALUES ('$user','$pass','','','','','')";
		
		// Connect to MySQL
               if ( !( $database = mysql_connect( "localhost", 
                  "nazwa_uzytkownika", "haslo_uzytkownika" ) ) )
                  die( "<p>Could not connect to database</p>" );

               // open Users database
               if ( !mysql_select_db( "users", $database ) )
                  die( "<p>Could not open users database</p>" );
             
               // execute query in database
               if ( !( $result = mysql_query( $query, $database ) ) ) 
               {
                  print( "<p>Could not execute query!</p>" );
                  die( mysql_error() );
               } // end if

               mysql_close( $database );
			   
		$_SESSION["user"]=$user;
		$_SESSION["pass"]=$pass;
		print( "<p class = 'head'>Hej $user. Jestes juz zalogowany!</p>
					  <p>Twoje dane:</p>
					  <p>Nazwa użytkownika: $user</p>
					  <p>Hasło: $pass</p>
					  <p><a href = '../index.php'>Kliknij, żeby wrócić do strony głównej.</a></p>
					  <p><a href = 'formDatabase.php'>Zawartość bazy.</a></p>
					  <p><a href='wyloguj.php'>Wylogowanie</a></p>
					  </body></html>" );
		
		
		
	?>

	</body>
	