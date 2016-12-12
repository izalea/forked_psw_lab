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
		print("<p> Adres IP odwiedziajacego: ");
		print($_SERVER['REMOTE_ADDR']);
		print("/nlub z proxy/n")
		print($_SERVER['HTTP_X_FORWARDED_FOR']);
		print("</p>");
		
        $search = $_POST["longtxt"];
		$ending = $_POST["ending"];
		print("<p>$search</p>")
         print( "<p>Slowa konczace sie na $ending: " );

         while ( preg_match( "/\b([a-zA-Z]*$ending)\b/i", $search, $match ) )
         {
            print( $match[ 1 ] . " " );

            $search = preg_replace( "/" . $match[ 1 ] . "/", "", $search );
         } 

         print( "</p>" );
        
		if (!preg_match( "/^http:\/\/www.[a-zA-Z0-9]{3,}.com\/$/", 
            $_POST["fav_url"]))
         {
            print( "<p class = 'error'>Invalid url</p>
               <p>Poprawny url musi byc w formie
               http://www.yourtextornumbershereatleast3.com/</p><p> 
              wpisz poprawny url i wyslij jeszcze raz.</p>
               <p>Dzieki.</p></body></html>" );
            die("BYE");
         }
      ?>
	  <p class = "head">Super - podales prawidlowy url</p>
   </body>
</html>
