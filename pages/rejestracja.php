<?php 
	if(!isset($_SESSION)) {
		session_start(); 		
	}
	if(!isset($_SESSION["user"])){
		//header('Location: http://pswpizzeria.azurewebsites.net/pages/login.php'); // - wersja Sylwia
		header('Location: http://localhost/forked_psw_lab/pages/login.php');
		//include('login.php - wersja Ania
		exit;
	}
	else{
		$user=$_SESSION["user"];
	}
?>

<!DOCTYPE html>

<html>
   <head>
      <meta charset = "utf-8">
      <title>Registration Form</title>
      <style type = "text/css">
         p       { margin: 0px; }
         .error  { color: red }
         p.head  { font-weight: bold; margin-top: 10px; }
         label   { width: 5em; float: left; }
      </style>
   </head>
   <body>
      <?php
	  print("Jesteś zalogowany jako $user");
         // variables used in script
         $fname = isset($_POST[ "fname" ]) ? $_POST[ "fname" ] : "";
         $lname = isset($_POST[ "lname" ]) ? $_POST[ "lname" ] : "";
         $email = isset($_POST[ "email" ]) ? $_POST[ "email" ] : "";
         $phone = isset($_POST[ "phone" ]) ? $_POST[ "phone" ] : "";
         $city = isset($_POST[ "city" ]) ? $_POST[ "city" ] : "";
         $iserror = false;
         $formerrors = 
            array( "fnameerror" => false, "lnameerror" => false, 
               "emailerror" => false, "phoneerror" => false );

         // array of book titles
         $citylist = array( "Kraków", "Katowice", "Warszawa", "Wrocław" );

         // array of name values for the text input fields
         $inputlist = array( "fname" => "Imie", "lname" => "Nazwisko", "email" => "Email",
            "phone" => "Numer tel." );

         // ensure that all fields have been filled in correctly
         if ( isset( $_POST["submit"] ) )
         {
            if ( $fname == "" )                   
            {
               $formerrors[ "fnameerror" ] = true;
               $iserror = true;                   
            } // end if

            if ( $lname == "" ) 
            {
               $formerrors[ "lnameerror" ] = true;
               $iserror = true;
            } // end if

            if ( $email =="" ||!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/",$email) ) 
            {
               $formerrors[ "emailerror" ] = true;
               $iserror = true;
            } // end if       
			
			
			
            if ( $phone == ""||!preg_match( "/^\([0-9]{3}\)[0-9]{3}-[0-9]{4}$/", 
               $phone ) ) 
            {
               $formerrors[ "phoneerror" ] = true;
               $iserror = true;
            } // end if
           
            if ( !$iserror )  
            {
			
					session_start(); 
					$user=$_SESSION["user"];
					$pass=$_SESSION["pass"];					
				
				
				
               // build INSERT query
               $query = "UPDATE userdata SET
			   imie='$fname', nazwisko='$lname', email='$email', telefon='$phone', miasto='$city'
			   WHERE login='$user' AND haslo='$pass'";

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

               print( "<p>Jesteś zalogowany jako $fname.</p>
                  <p class = 'head'>Dane zostały zapisane do bazy pomyślnie:</p>
                  <p>Imie: $fname</p>
                  <p>Nazwisko: $lname</p>
                  <p>E-mail: $email</p>
                  <p>Numer telefonu: $phone</p>
                  <p><a href = 'formDatabase.php'>Zobacz zawartość bazy.</a></p>
                  </body></html>" );
               die(); // finish the page
            } // end if 
         } // end if 

         print( "<h3>Forma rejestracji/edycji danych osobowych.</h3>
            <p>Wypełnij wszystkie pola.</p>" );

         if ( $iserror )                                              
         {                                                            
            print( "<p class = 'error'>Pola oznaczone * są obowiązkowe do wypełnienia poprawnie.</p>" );
         } // end if

         print( "<!-- post form data to rejestracja.php -->
            <form method = 'post' action = 'rejestracja.php'>

            <!-- create four text boxes for user input -->" );
         foreach ( $inputlist as $inputname => $inputalt )
         {
            print( "<div><label>$inputalt:</label><input type = 'text'
               name = '$inputname' value = '" . $$inputname . "'>" );
            
            if ( $formerrors[ ( $inputname )."error" ] == true ) 
               print( "<span class = 'error'>*</span>" );        
            
            print( "</div>" );
         } // end foreach
		 
		 if ( $formerrors[ "emailerror" ] ) 
            print( "<p class = 'error'>Musisz wpisac poprawny email." );
         if ( $formerrors[ "phoneerror" ] ) 
            print( "<p class = 'error'>Format numeru tel
               (***)***-****" );
          
         print( "<h2>Miasto</h2>
            <p>Wybierz swoje miasto</p>

            <!-- create drop-down list containing book names -->
            <select name = 'city'>" );
               
         foreach ( $citylist as $currentCity ) 
         {
            print( "<option" . 
               ($currentCity == $city ? " selected>" : ">") .
               $currentCity . "</option>" );
         }
 
         print( "<!-- create a submit button -->
            <p class = 'head'><input type = 'submit' name = 'submit'
            value = 'Register'></p></form></body></html>" );
   ?>