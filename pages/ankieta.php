<!DOCTYPE html>
<html>
   <head lang="pl">
      <meta charset = "utf-8">
      <title>Ankieta - walidacja formularza!</title> 
		<meta name="keywords" content="ankieta, dodatkowa ankieta, pytania, odpowiedz">
		<meta name="description" content="Dodatkowa aniketa dzięki której poznamy wasze zainteresowania!">
		<meta name="author" content="Sylwia i Hanna">
      <style type = "text/css">
         p       { margin: 0px; }
         .error  { color: red }
         p.head  { font-weight: bold; margin-top: 10px; }
      </style>
   </head>
   <body>
      <?php
		
		if (!preg_match( "/^http:\/\/www.[a-zA-Z0-9]{3,}.com\/$/", 
            $_POST["fav_url"]))
         {
            print( "<p class = 'error'>Invalid url</p>
               <p>Poprawny url musi byc w formie
               http://www.yourtextornumbershereatleast3.com/</p><p> 
              wpisz poprawny url i wyslij jeszcze raz.</p>
               <p>Dzieki.</p></body></html>" );
            die();
         }
		 ?>
	  <p class = "head">Super - podales prawidlowy url</p>
	  <?php
		
		// adress		
		 print("<p> Adres IP odwiedziajacego: ");
		print($_SERVER['REMOTE_ADDR']);
		print("</p>");
		
		
		//regular expressions
        $search = $_POST["longtxt"];
		$ending = $_POST["ending"];
		print("<p>$search</p>");
         print( "<p>Slowa konczace sie na $ending: " );

         while ( preg_match( "/\b([a-zA-Z]*$ending)\b/i", $search, $match ) )
         {
            print( $match[ 1 ] . " " );

            $search = preg_replace( "/" . $match[ 1 ] . "/", "", $search );
         } 

         print( "</p>" );
		 
		 //foreach and string operations
        $myDictionary = array(  
            "January"   => "Styczen",   "February" => "Luty",
            "March"     => "Marzec",   "April"    => "Kwiecien",
            "May"       => "Maj",   "June"     => "Czerwiec",
            "July"      => "Lipiec", "August"   => "Sierpien",
            "September" => "Wrzesien",   "October"  => "Pazdziernik",
            "November"  => "Listopad","December" => "Grudzien",
			"Zebra"		=>	"Zebra");

         // print each element’s name and value
         foreach ( $myDictionary as $engKey => $plVal ){
            print( "<p>Angielskie slowo: '$engKey' po polsku znaczy '$plVal'</p>" );
			 
			if ( strcmp( $engKey, $plVal ) < 0 )
               print( "<p> Uzywam strcmp" . $engKey . " bedzie wczesniej niz " . $plVal);
            elseif ( $engKey > $plVal ) 
               print( "<p> Uzywam relacyjnego >" . $engKey . " bedzie pozniej niz " . $plVal);
            else 
               print( "<p>" . $engKey . " jest takie same jak " . $plVal );
			
		 }
      ?>
   </body>
</html>
