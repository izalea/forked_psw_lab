
<?php  session_start(); 
//passwords
 $usernamepass = array(  
            "admin"   => "1234",   "user1" => "pass1",
            "user2"     => "pass2", "Zebra" => "Zebra");
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
					  <p><a href = '../index.php'>Kliknij, żeby wrócić do strony głównej.</a></p></div>
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
			

			 
		}// end if(!isset($_SESSION["user"])
		$user=$_SESSION["user"];
		$pass=$_SESSION["pass"];
		 print( "<p class = 'head'>Hej $user. Jestes juz zalogowany!</p>
					  <p>Twoje dane:</p>
					  <p>Nazwa użytkownika: $user</p>
					  <p>Hasło: $pass</p>
					  <p><a href = '../index.php'>Kliknij, żeby wrócić do strony głównej.</a></p>
					  </body></html>" );
		
	?>