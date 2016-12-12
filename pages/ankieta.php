<html>
   <head>
      <meta charset = "utf-8">
      <title>Form Validation</title>
      <style type = "text/css">
         p       { margin: 0px; }
         .error  { color: red }
         p.head  { font-weight: bold; margin-top: 10px; }
      </style>
   </head>
   <body>
      <?php
         // determine whether url is valid and print
         // an error message if not
        
		if (!preg_match( "/^http:\/\/www.[a-zA-Z0-9]{3,}.com\/$/", 
            $_POST["fav_url"]))
         {
            print( "<p class = 'error'>Invalid url</p>
               <p>Poprawny url musi byc w formie
               http://www.yourtextornumbershereatleast3.com/</p><p> 
              wpisz poprawny url i wyslij jeszcze raz.</p>
               <p>Dzieki.</p></body></html>" );
            die(); // terminate script execution
         }
      ?>
	  <p class = "head">Super - podales prawidlowy url</p>
	  <?php
		$search = $_POST["longtxt"];
		$ending = $_POST["ending"];
         print( "<p>Slowa konczace sie na $ending: " );

         while ( preg_match( "/\b([a-zA-Z]*$ending)\b/i", $search, $match ) )
         {
            print( $match[ 1 ] . " " );

            $search = preg_replace( "/" . $match[ 1 ] . "/", "", $search );
         } 

         print( "</p>" );
	?>
   </body>
</html>
