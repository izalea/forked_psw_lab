<%@ Page Language="C#" AutoEventWireup="true" CodeFile="index.aspx.cs" Inherits="index" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
    <link href="styles/style.css" rel="stylesheet" type="text/css" />
</head>
<body style = "back" > 

		<div class = "content"> </br>
		
			<div class = "content-top in-the-front">
			<div class = "pos-rel">
				<div class = "pos-rel">
					<div class = "to-right">				
					
						<h3>	
								Tel.: 111-222-333<br>
								111-222-444<br>
								ul. Kolorowa 12<br>
								54-487 Wrocław
						</h3>
					
					</div>
			
					<div class = "text-decoration">
						<h1>PIZZA z pieca <sup>&reg;</sup></h1> 
					</div>
				</div>	
				<div class = "pos-rel">			

					<nav>				
						<ul class = "grad">
							<li class="dropdown">
								<a  href="pages/menu.aspx" class = "dropmenu">Menu</a>
									<div class="dropdown-content">
										<a href="pages/kontakt.aspx">Link 1</a>
                                        <a href="pages/kontakt.aspx">Link 2</a>
                                        <a href="pages/kontakt.aspx">Link 3</a>
									</div>
							</li>								
							<li><a href = "pages/kontakt.aspx"><b>Kontakt</b></a></li>
							<li><a href = "pages/historia.aspx"><b>Historia</b></a></li>
						</ul>
					</nav>
	
				</div>
			</div>
			</div>
				
			
			<div class = "content-bottom">
				<div id = "ctrl_alt_shift" class = "div-radius">					
						<a  href = "https://pl.wikipedia.org/wiki/Pizza">
									<img id = "pic_link"  src="img/pizza.jpg" alt="Pizza">
						</a>
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
