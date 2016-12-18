
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

				   print( "<p>Hej $fUsername. Uda³o Ci siê zalogowaæ poprawnie!</p>
					  <p>Twoje dane:</p>
					  <p>Nazwa u¿ytkownika: $fUsername</p>
					  <p>Has³o: $fPassword</p>
					  <p><a href = '../index.php'>Kliknij, ¿eby wróciæ do strony g³ównej.</a></p>
					  </body></html>" );
				   die(); // finish the page
				} // end if ( !$iserror )
			} // end  if ( isset( $_POST["submit"] ) )
			 
			print( "<h1>Zaloguj siê:</h1>
			<p>Wype³nij pola i kliknij Zaloguj.</p>" );

			if ( $iserror )                                              
			{                                                            
				print( "<p class = 'error'>Pola z * musz¹ byæ poprawnie wype³nione.</p>" );
			} // end if

			print( "<!-- post form data to login.php -->
					<form method = 'post' action = 'login.php'>
					<h2>Logowanie</h2>
				
				<div><label>Nazwa u¿ytkownika:</label><input type = 'text'
				name = 'fUsername' value = '" . $fUsername . "'>");
			if ( $formerrors[ ( $fUsername )."error" ] == true ) 
				print( "<span class = 'error'>*</span>" );
				
			print("<label>Has³o:</label><input type = 'password'
               name = 'fPassword' value = '" . $fPassword . "'>");   
            if ( $formerrors[ ( $fPassword )."error" ] == true ) 
               print( "<span class = 'error'>*</span>" );        
            print( "</div>" );
        
			print( "<!-- create a submit button -->
				<p class = 'head'><input type = 'submit' name = 'submit'
				value = 'Zaloguj'></p></form></body></html>" );
			

			 
		}// end if(!isset($_SESSION["user"])
		 print( "<p>Hej $fUsername. Jestes juz zalogowany!</p>
					  <p>Twoje dane:</p>
					  <p>Nazwa u¿ytkownika: $fUsername</p>
					  <p>Has³o: $fPassword</p>
					  <p><a href = '../index.php'>Kliknij, ¿eby wróciæ do strony g³ównej.</a></p>
					  </body></html>" );
		
	?>