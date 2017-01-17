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
		<title>Zaloguj sie</title>
		<style type = "text/css">
         p       { margin: 0px; }
         .error  { color: red }
         p.head  { font-weight: bold; margin-top: 10px; }
         label   { width: 5em; float: left; }
      </style>
	</head>
	<body>

	<?php
		if(!isset($_SESSION["user"])){
			 // variables used in script
			$fUsername = isset($_POST[ "fUsername" ]) ? $_POST[ "fUsername" ] : "";
			$fPassword = isset($_POST[ "fPassword" ]) ? $_POST[ "fPassword" ] : "";
			$iserror = false;
			$formerrors = 
				array( "fUsernameerror" => false, "fPassworderror" => false);
			// build SELECT query
			$query = "SELECT login,haslo FROM userdata";
        
			 // Connect to MySQL
			 if ( !( $database = mysql_connect( "localhost",  
				"nazwa_uzytkownika", "haslo_uzytkownika" ) ) )
				die( "<p>Nie ma połączenia z bazą</p></body></html>" );
	   
			 // open nazwa_uzytkownika database
			 if ( !mysql_select_db( "users", $database ) )
				die( "<p>Błąd dostępu do bazy danych</p>
				   </body></html>" );

			 // query nazwa_uzytkownika database
			 if ( !( $result = mysql_query( $query, $database ) ) ) 
			 {
				print( "<p>Błąd odczytu danych z bazy!</p>" );
				die( mysql_error() . "</body></html>" );
			 }
			 $usernamepass = array();
			 while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
			
				 $usernamepass[$row["login"]] = $row["haslo"];
			}
			mysql_free_result($result);
			mysql_close( $database );

			// ensure that all fields have been filled in correctly
			if ( isset( $_POST["submit"] ) )
			{
				if ( $fUsername == "" || !array_key_exists ( $fUsername , $usernamepass ))                   
				{
				   $formerrors[ "fUsernameerror" ] = true;
				   $iserror = true;                   
				} // end if ( $fUsername == "" || !array_key_exists ( $fUsername , $usernamepass ))   
				else
				if ( $fPassword == "" || $fPassword!=$usernamepass[$fUsername]) 
				{
				   $formerrors[ "fPassworderror" ] = true;
				   $iserror = true;
				} // end if ( $fPassword == "" || $fPassword!=$usernamepass[$fUsername]) 
				
				
				if ( !$iserror ) //then you can log in - set session cookies
				{
				  $_SESSION["user"]=$fUsername;
				  $_SESSION["pass"]=$fPassword;
				  
  				   print( "<div><p class = 'head'>Hej $fUsername. Udało Ci się zalogować poprawnie!</p>
					  <p>Twoje dane:</p>
					  <p>Nazwa użytkownika: $fUsername</p>
					  <p>Hasło: $fPassword</p>
					  <p><a href = '../index.php'>Kliknij, żeby wrócić do strony głównej.</a></p>
					  <p><a href = 'formDatabase.php'>Zawartość bazy.</a></p>
					  <p><a href='wyloguj.php'>Wylogowanie</a></p></div>
					  </body></html>" );
					  
				   die(); // finish the page
				} // end if ( !$iserror )
			} // end  if ( isset( $_POST["submit"] ) )
			 
			print( "<h1>Zaloguj się:</h1><br>
			<p>Wypełnij pola i kliknij Zaloguj.</p><br>" );

			if ( $iserror )                                              
			{                                                            
				print( "<p class = 'error'>Pola z * muszą być poprawnie wypełnione.</p><br>" );
			} // end if

			print( "<!-- post form data to login.php -->
					<form method = 'post' action = 'login.php'>
					<h2>Logowanie</h2><br>
				
				<div><label>Nazwa użytkownika:</label><input type = 'text'
				name = 'fUsername' value = '" . $fUsername . "'>");
			if ( $formerrors[ "fUsernameerror" ] == true ) 
				print( "<span class = 'error'>*</span>" );
			print( "</div><br>" );
			
			print("<div><label>Hasło:</label><input type = 'password'
               name = 'fPassword' value = '" . $fPassword . "'>");   
            if ( $formerrors[ "fPassworderror" ] == true ) 
               print( "<span class = 'error'>*</span>" );        
            print( "</div><br>" );
		
			print( "<!-- create a submit button -->
				<p class = 'head'><input type = 'submit' name = 'submit'
				value = 'Zaloguj'></p></form></body></html>" );
					
        // second form registration 
			print( "<!-- post form data to newreg.php -->
					<form method = 'post' action = 'newreg.php'>
					<h2>Rejestracja</h2><br>
				
				<div><label>Nazwa użytkownika:</label><input type = 'text'
				name = 'user2' value = ''><br>");
		
			
			print("<div><label>Hasło:</label><input type = 'password'
               name = 'pass2' value = ''>");   
            
        
			print( "<!-- create a submit button -->
				<p class = 'head'><input type = 'submit' name = 'submit'
				value = 'Zarejestruj'></p></form></body></html>" );
			

			 
		}// end if(!isset($_SESSION["user"])
		else{
			$user=$_SESSION['user'];
			$pass=$_SESSION['pass'];
			print( "<p class = 'head'>Hej $user. Jestes juz zalogowany!</p>
					  <p>Twoje dane:</p>
					  <p>Nazwa użytkownika: $user</p>
					  <p>Hasło: $pass</p>
					  <p><a href = '../index.php'>Kliknij, żeby wrócić do strony głównej.</a></p>
					  <p><a href = 'formDatabase.php'>Zawartość bazy.</a></p>
					  <p><a href='wyloguj.php'>Wylogowanie</a></p>
					  </body></html>" );
		}
		
	?>

	</body>