<?php

	function changeProperties() {
		if(isset($_COOKIE['backgroundColor']) && isset($_COOKIE['fontColor']) && isset($_COOKIE['font'])) {
			$inputBackColor=$_COOKIE["backgroundColor"];
			$inputFontColor=$_COOKIE["fontColor"];
			$font=$_COOKIE["font"];
			echo "<body style='background-color:$inputBackColor; color:$inputFontColor; font-family:$font'>";
		}
		else {
			echo "<body style='background-color:#333; color:white; font-family:Arial, sans-serif;'>";
		}
	}
	
	changeProperties();
?>		

<!DOCTYPE html> <!-- document type declaration, must be included to render properly! -->

<!-- index.html -->

<html lang="pl"> <!-- start tag -->
	
	<head>
		<meta charset = "utf-8"> 
		<title>Pizza</title> 
		<meta name="keywords" content="pizza, zamówienie pizzy, zamówić pizze, pizzeria, pizza on-line , jedzenie on-line, zamówienia, strona główna">
		<meta name="description" content="Pizzeria wraz z możliwością zamówienia pizzy on-line, strona główna">
		<meta name="author" content="Sylwia i Hanna">
		<link rel="icon" type="image/x-icon" href="img/pizza_icon.ico">		
		<link rel="stylesheet" type="text/css" href="styles/style.css">
		<script src="scripts/javascrypt.js"></script>
		<script src="scripts/dom4.js"></script>
		<script src="scripts/dom2.js"></script>	
		
	</head>
	
	<!-- content -->

	<body>

		<div class = "content"> </br>
					<form id = "info">
						<p>
							Forma: <input id = "surname" type = "text" size = "25" maxlength = "50" value = "To jest forma o id info"/> 
						</p>
					</form>
					<button onclick="namedItemFunction()"> Wyszukaj forme po id: :)</button>
					<p id="formResult"></p>
			
			<!-- nested sections -->
			<section id="title">
				<div class = "content-top in-the-front">
				<div class = "pos-rel">
					<div class = "pos-rel">
					<div class = "to-right">
					<button type = "button" onclick="wprowadzDane()">Wprowadź dane</button>
					<button type = "button" onclick="innerH()">Zobacz resultat</button>
					<p id="inner"></p>					
						<section id ="contactInfo" >
							<h3 id ="mouse_over_out" >	
									Tel.: 111-222-333<br>
									111-222-444<br>
									ul. Kolorowa 12<br>
									54-487 Wrocław
							</h3>
						</section>
					</div>
				
					<div class = "text-decoration">
						<h1>PIZZA z pieca <sup>&reg;</sup></h1> 
					</div>
					<div class = "pos-rel to right">
						<section id="search">
									<input type = "search" placeholder = "keyCode" onkeypress="keyCodeFunction(event)"/>									
						</section>
						<p id="keyCodee"></p>
					</div>
				</div>	
					<div class = "pos-rel">			
					<section id="navigation">
							<nav>				
								<ul class = "grad">
									<li class="dropdown">
										<a  href="pages/menu.html#menu" class = "dropmenu">Menu</a>
											<div class="dropdown-content">
												<a href="pages/menu.html#menu">Link 1</a>
												<a href="pages/menu.html#menu">Link 2</a>
												<a href="pages/menu.html#menu">Link 3</a>
											</div>
									</li>								
									<li><a href = "pages/kontakt.php"><b>Kontakt</b></a></li>
									<li><a href = "pages/ankieta.html"><b>Ankieta</b></a></li>
									<li><a href = "pages/historia.html"><b>Historia pizzy</b></a></li>
									<!--<li><a href = "pages/animation.html"><b>Animacja</b></a></li> -->
									<li><a href = "pages/multikolumn.html"><b>Multikolumn</b></a></li>
									<li><a href = "pages/ciekawostki.php"><b>Ciekawostki</b></a></li>
									<li><a href = "pages/login.php"><b>Zaloguj się</b></a></li>
									<li><a href = "pages/rejestracja.php"><b>Dane osobowe</b></a></li>
									<li><a href = "pages/wyloguj.php"><b>Wyloguj się</b></a></li>
								</ul>
							</nav>
					</section>
					</div>
				</div>
				</div>
			</section>			
			
			<div class = "content-bottom">
				<div id = "ctrl_alt_shift" class = "div-radius">					
						<a  href = "https://pl.wikipedia.org/wiki/Pizza">
									<img id = "coordinats"  src="img/pizza.jpg" alt="Pizza">
						</a>
						<p id="koordynaty"></p>
						<p id="koordynatyScreen"></p>
				</div>				
				<form method="post" action="pages/cookies.php" name="wygladStrony">
				<h2>Wybierz jak ma wyglądać strona:</h2>
				<ul>
				<li><label for = "backColorChange">Wybierz kolor tła:</label>
					<input id = "backColorChange" type = "color" name="backgroundColor"/>
				</li>
				<li><label for = "fontColorChange">Wybierz kolor tekstu:</label>
					<input id = "fontColorChange" type = "color" name="fontColor" />
				</li>
				<li>
					<label for = "fontSelect">Wybierz czcionkę:</label>
					<select id="fontSelect" name="font">
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
			<input type="submit" value="Zapisz Cookies">
			</form>
			<p><a href="pages/readCookies.php"> Zawartość Cookies.</a></p>
			<p>			<?php
			foreach($_COOKIE as $key => $value )
				print("<p>$key: $value</p>" );
	?></p>
		</div>
				<aside>
					<h3>Reklama</h3>
						<p>Wkrótce tu będzie reklama.</p>
				</aside>			
			
				<!-- footer -->
				<footer>
					<h6>&copy; 2016 by Hanna & Sylwia <br> Inc. All Rights Reserved.</h6>
					<address>
						Skontaktuj się z nami <a href = "mailto:212791@student.pwr.edu.pl"><i>212791@student.pwr.edu.pl</i></a>
					</address>			
				</footer>	
		    </div>
		</div>		
	</body>
</html>
