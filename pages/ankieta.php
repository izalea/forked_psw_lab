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
               <p>A valid url must be in the form 
               http://www.yourtextornumbershereatleast3.com/</p><p>Click the Back button, 
               enter a valid phone number and resubmit.</p>
               <p>Thank You.</p></body></html>" );
            die(); // terminate script execution
         }
      ?><!-- end PHP script 
      <p>Hi <?php print( $_POST["fname"] ); ?>. Thank you for 
         completing the survey. You have been added to the 
         <?php print( $_POST["book"] ); ?> mailing list.</p>
      <p class = "head">The following information has been saved 
         in our database:</p>
      <p>Name: <?php print( $_POST["fname"] ); 
         print( $_POST["lname"] ); ?></p>
      <p>Email: <?php print( $_POST["email"] ); ?></p>
      <p>Phone: <?php print( $_POST["phone"] ); ?></p>
      <p>OS: <?php print( $_POST["os"] ); ?></p>-->
      <p class = "head">This is only a sample form.       
         You have not been added to a mailing list.</p>   
   </body>
</html>
