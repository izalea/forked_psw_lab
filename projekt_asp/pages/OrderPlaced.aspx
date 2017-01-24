<%@ Page Language="C#" AutoEventWireup="true" CodeFile="OrderPlaced.aspx.cs" Inherits="OrderPlaced" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="utf-8">
    <meta name="Order" content="Podziękowanie">
    <meta name="author" content="Sylwia i Hanna">
    <link rel="icon" type="image/x-icon" href="../img/pizza_icon.ico" />
    <link rel="stylesheet" type="text/css" href="../styles/css2.css" />
    <title>Wysłanie zamówienia</title>
</head>
<body>
    <form id="form1" runat="server">
    <div class="container">
	    <div class="header">
            <div>
                <a href="../index.aspx"><b>Strona główna  </b></a>
                <a href="kontakt.aspx"><b>Kontakt  </b></a>
                <a href="historia.aspx"><b>Historia  </b></a>
            </div>
        </div>
        <div class="content-container">
            <div class="content">
                
                <asp:Label ID="ThanksLabel" runat="server"></asp:Label>
                <br />
                <br />
                <a href="Menu.aspx">Powrót do listy produktów</a>
            </div>
        </div>
        <footer>
            <h6>&copy; 2016 by Hanna & Sylwia
            <br>
                Inc. All Rights Reserved.</h6>
            <address>
                Skontaktuj się z nami <a href="mailto:212791@student.pwr.edu.pl"><i>212791@student.pwr.edu.pl</i></a>
            </address>
        </footer>
    </div>
    </form>
</body>
</html>
