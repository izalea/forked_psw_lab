<!DOCTYPE html> 

<!-- kontakt.html -->
<html lang="pl"> 
	
	<head> 
		<meta charset = "utf-8">
		<title>Kontakt</title> 
		<meta name="keywords" content="kontakt, formularz kontaktowy, kontak pizzeria">
		<meta name="description" content="Formularz do kontaktu z pizzerią.">
		<meta name="author" content="Sylwia i Hanna">
		<link rel="icon" type="image/x-icon" href="../img/pizza_icon.ico">
  
	</head>
	
	<!-- content -->
	
	<body> 		
		<nav><ul>
			<li><a href = "../index.php"><b>Strona główna</b></a></li>
			<li><a href = "menu.html#menu"><b>Menu</b></a></li>
			<li><a href = "ankieta.html"><b>Ankieta!</b></a></li>			
		</ul></nav>
		
		<button id = "buttonListener" type = "button" onclick="eventButton()">Event Listener For Button</button>
		<form  action = "form1.php" method = "post">
		<p>
			<label>
				Podaj pierwszą liczbę: <input type="text" name="number_1"/>
			</label>
		</p>
				<p>
			<label>
				Podaj drugą liczbę: <input type="text" name="number_2"/>
			</label>
		</p>
				<p>
			<label>
		Wpisz tekst: <input type="text" name="text"/>
					</label>
		</p>
				<p>
			<label>
		<input type = "submit" value = "Wyślij"/>
		<input type = "reset" value = "Wyczyść"/>
					</label>
		</p>
		</form>
		<form action = "form.php" method = "post" autocomplete = "on">
			<fieldset>				
				<legend>Informacja kontaktowa</legend>
				<h3><b><mark>Tel.: 111-222-333</mark></b></h3>
				<h3><b><mark>111-222-444</mark></b></h3>
				

				
				<p>
					<label>Imię:
						<input id = "name" name="imie" type = "text" size = "25" maxlength = "30" placeholder = "Jan" autofocus/> (Imię)
					</label>
				</p> 
				<p>				
						<label>
							Nazwisko:<input id = "surname" name="nazwisko" type = "text" size = "25" maxlength = "50" placeholder = "Kowalski" required/> (Nazwisko, wymagane)
						</label>	
				</p>
				<p>
					<label>Email:
						<input name = "email" type="email" name="email" placeholder = "address@domain.com" required /> (address@domain.com, wymagane)
					</label><br>
				</p>
				<p>
					<label for = "txtList">Miesiąc urodzenia:
						<input id = "txtList" type = "text" placeholder = "Podaj miesiąc" list = "miesiace"/>
							<datalist id = "miesiace">
								<option value = "Styczeń">
								<option value = "Luty">
								<option value = "Marzec">
								<option value = "Kwiecień">
								<option value = "Maj">
								<option value = "Czerwiec">
								<option value = "Lipiec">
								<option value = "Sierpień">
								<option value = "Wrzesień">
								<option value = "Październik">
								<option value = "Listopad">
								<option value = "Grudzień">
							</datalist>
					</label>
				</p>
				<h4>Wybierz miasto:</h4>
				<select name="miasta">
					<optgroup label="Lista miast">
						<option>Kraków</option>
						<option>Opole</option>
						<option>Wrocław</option>
						<option>Warszawa</option>
						<option>Poznań</option>				
					</optgroup>
				</select><br><br>
				<p>
					<label>Telefon:
						<input id = "phone" type = "tel" placeholder = "(###) ###-##-##" 
						pattern = "\(\d{3}\) +\d{3}-\d{2}-\d{2}"/> (###) ###-##-##
					</label>
				</p>
				
				<h4>Płeć:</h4>
					<input type="radio" name="gender" value="male" checked>Mężczyzna<br>
					<input type="radio" name="gender" value="female">Kobieta<br>
				
				<h4>Skąd zwykle zamawiasz pizzę?</h4>
					<input type="checkbox" name="place" value="home" />Z domu <br />
					<input type="checkbox" name="place" value="work" />Z pracy<br />
					<input type="checkbox" name="place" value="everywhere" />Z każdego miejsca!<br /> 
				<p>
					<label>Dodatkowa informacja:<br>
						<input name="tekst" id = "additional_info" rows="4" cols="50" maxlength="200"></textarea>
					</label>
				</p>
			</fieldset><br>
			<p>Pobierz regulamin
				<a href="ftp://ftp.funet.fi/pub/standards/RFC/rfc959.txt">FTP</a> lub 
				<a href="https://www.ietf.org/rfc/rfc1867.txt">HTTP</a>.
			</p><br>
			<p>
				<label><input type="checkbox">Zgadzam się z Regulaminem</label><br><br>
				<input type = "submit" value = "Wyślij">
				<input type = "reset" value = "Wyczyść">
			</p>
		</form>	
	
	
		<!-- footer -->
		<footer>
			<h6>&copy; 2016 by Hanna & Sylwia <br> Inc. All Rights Reserved.</h6>
			<address>
				Skontaktuj się z nami <a href = "mailto:212791@student.pwr.edu.pl"><i>212791@student.pwr.edu.pl</i></a>
			</address>			
		</footer>
		<script src="../scripts/javascrypt.js"></script>
	</body>
</html>
