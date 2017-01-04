<!DOCTYPE html>

<html>
   <head>
      <meta charset = "utf-8">
      <title>Search Results</title>
      <style type = "text/css">
         table  { background-color: lightblue; 
                  border: 1px solid gray; 
                  border-collapse: collapse; }
         th, td { padding: 5px; border: 1px solid gray; }
         tr:nth-child(even) { background-color: white; }
         tr:first-child { background-color: lightgreen; }
      </style>
   </head>
   <body>
      <?php
         // build SELECT query
         $query = "SELECT * FROM userdata";
        
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
      ?>

      <h3>Dane użytkowników:</h3>
      <table>
         <tr>
            <th>ID</th>
            <th>Login</th>
            <th>Haslo</th>
            <th>Imie</th>
            <th>Nazwisko</th>
            <th>E-mail</th>
            <th>Numer telefonu</th>
            <th>Miasto</th>
         </tr>
         <?php
            for ( $counter = 0; $row = mysql_fetch_row( $result );
               ++$counter )
            {
               print( "<tr>" );
               foreach ( $row as $key => $value ) 
                  print( "<td>$value</td>" );
               print( "</tr>" );
            } 

            mysql_close( $database );
			print("<p><a href = '../index.php'>Kliknij, żeby wrócić do strony głównej.</a></p>");
         ?>
      </table>
   </body>
</html>
