<?php 
	session_start(); 
	if(!isset($_SESSION["user"])){
		//header('Location: http://pswpizzeria.azurewebsites.net/pages/login.php'); // - wersja Sylwia
		header('Location: http://localhost/forked_psw_lab/pages/login.php');
		//include('login.php - wersja Ania
		exit();
	}
	else{
		$user=$_SESSION["user"];
	}
?>

<!DOCTYPE html> <!-- document type declaration, must be included to render properly! -->
<html lang="pl"> <!-- start tag -->
	
	<head>
		<meta charset = "utf-8"> 
		<title>Ciekawostki</title> 
		<meta name="keywords" content="ciekawostki, dodatkowe, smieszne obrazki pizzy">
		<meta name="description" content="Strona z linkami do ciekawostek dotyczących pizzy">
		<meta name="author" content="Sylwia i Hanna">
		<link rel="icon" type="image/x-icon" href="../img/pizza_icon.ico">		
		<script src="../scripts/dom1.js"></script>
		<script src="../scripts/dom3.js"></script>
		 <style type = "text/css">
        
		
		 @media all
         {
				a:active { 
					background-color: yellow;
				}
				em       { font-weight: bold;
							color: black; }   
				h1       { font-family: tahoma, helvetica, sans-serif; 
							color: red;}
				p        { font-size: 50px;
						font-family: arial, sans-serif; }
				p:nth-child(even) {
					background: red;
				}
				p:nth-last-child(even) {
					background: blue;
				}
				p:first-child { 
					color: yellow;
				}
			 .special { color: purple; }
			 
			 .BG_IMG_REPEAT_VERTICAL_LEFT {
						background-image: url(../img/PizzaLogo.png);
						background-color: powderBlue;
						background-position: bottom-left;
						background-repeat: repeat-y;
						background-attachment: scroll;
						
			 }
			 #id_color_green_big {
				color: green;
				font-size: 3em;
		}
         @media print
         {
            em       { font-weight: bold;
							color: black; }   
			h1       { font-family: "times new roman", times, serif;
							color: red;}
			p        { font-size: 50px;
						font-family: "times new roman", times, serif;}
			 .special { color: purple; }
			 
			 .BG_IMG_REPEAT_VERTICAL_LEFT {
						background-image: url(../img/PizzaLogo.png);
						background-color: white;
						background-position: bottom-left;
						background-repeat: no-repeat;
						background-attachment: fixed;
						
			 }
			 #id_color_green_big {
				color: darkgreen;
				font-size: 3em;
         } /* End @media print declaration. */
		 
		</style>
	  
	</head>
	
	<!-- content -->
	
	<body class = "BG_IMG_REPEAT_VERTICAL_LEFT"> 
		
		<h1><?php print("Witaj $user w ");?>Ciekawe Ciekawostki!</h1>
		
		<section id="links">
			<h2 id="id_color_green_big">Linki</h2>
			<nav>
				<ul>
					<li><a href = "http://zalajkowane.pl/17-ciekawostek-o-pizzy/"><b>17 ciekawostek o pizzy</b></a></li>
					<li><a href = "http://www.twelveskip.com/showcase/website-design/1175/pizza-web-designs-inspirations"><b>Inspiracje webdesign o pizzy</b></a></li>
					<li><a href = "http://firstwefeast.com/eat/12-amazing-pizza-facts-that-everyone-should-know/"><b>Fakty o pizzy</b></a></li>
					<li><a href = "http://zalajkowane.pl/17-ciekawostek-o-pizzy/"><b>17 ciekawostek o pizzy</b></a></li>
					<li><a href = "http://www.twelveskip.com/showcase/website-design/1175/pizza-web-designs-inspirations"><b>Inspiracje webdesign o pizzy</b></a></li>
					<li><a href = "http://firstwefeast.com/eat/12-amazing-pizza-facts-that-everyone-should-know/"><b>Fakty o pizzy</b></a></li>
				</ul>	
			</nav>			
		</section>
		<section id="jsDOM1"></section>
		<section id="jsDOM3" style = "margin-left: 10em;">
			<h2>Wybierz jak ma wyglądać strona:</h2>
			<ul>
				<li><label for = "backColorChange">Wybierz kolor tła:</label>
					<input id = "backColorChange" type = "color" />
				</li>
				<li><label for = "fontColorChange">Wybierz kolor tekstu:</label>
					<input id = "fontColorChange" type = "color"  />
				</li>
				<li>
					<label for = "fontSelect">Wybierz czcionkę:</label>
					<select id="fontSelect" onchange="changeSelectedFont(this)">
						<option value="Arial">Arial</option>
						<option value="Times New Roman">Times New Roman</option>
						<option value="Courier">Courier</option>
						<option value="Avant Garde">Avant Garde</option>
						<option value="Tahoma">Tahoma</option>
						<option value="Georgia">Georgia</option>
						<option value="Comic Sans MS">Comic Sans MS</option>
						<option value="Impact">Impact</option>
					</select>
				</li>
			</ul>
			<button type="button" onclick="changeProperties()">Zatwierdź</button>
		</section>
		<section id="facts">
			<article>
			<div id="backgroundOrigin">
				<header>
					<p>
						<em>
							<a id="id_color_green_big" href = "http://zalajkowane.pl/17-ciekawostek-o-pizzy/">Zalajkowane</a>
						</em>
					</p>
				</header>
				<hr><div>
					<p style = "font-size = 1.5em">
						Zalukaj(i/em/pt): 
					</p>
					<p style = "font-size: 10pt; font-variant: small-caps; line-height: 250%"><!--inline, emphasized and pt-->
						Do niedawna najdroższa pizza przygotowywana była przez angielski pierwowzór Magdy Gessler,
						czyli Gordona Ramseya. Jeden kawałek kosztował $178 i zawierała między innymi trufle.
					</p>
					<p><!--embedded, px-->
						Ostatnio przebiła go jednak pewna pizzeria z Kanady,
						która sprzedaje kawałek po $450.
						W jej skład wchodzą homary, czarne dorsze z Alaski, wędzone łososie, krewetki tygrysie i Rosyjski kawior Osetra.
					</p>
					<p style = "font-size: 150%;"><!-- % inline-->
						No kto by pomyślał!
					</p>
					</div>
				<hr>
			</div>
		</article>
		</section>

		<!-- footer -->
		<footer>
			<h6>&copy; 2016 by Hanna & Sylwia <br> Inc. All Rights Reserved.</h6>
			<address>
				Skontaktuj się z nami <a href = "mailto:212791@student.pwr.edu.pl"><i>212791@student.pwr.edu.pl</i></a>
			</address>			
		</footer>	


	</body>
</html>
