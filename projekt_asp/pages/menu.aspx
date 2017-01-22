<%@ Page Language="C#" AutoEventWireup="true" CodeFile="menu.aspx.cs" Inherits="Pages_menu" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="utf-8">
    <meta name="keywords" content="menu, menu pizzeri, pizzeria, ceny pizzy, ceny">
    <meta name="description" content="Menu pizzeri. Znajdują się tu wszystkie pizze, które można zamówić w tej pizzeri">
    <meta name="author" content="Sylwia i Hanna">
    <link rel="icon" type="image/x-icon" href="../img/pizza_icon.ico" />
    <link rel="stylesheet" type="text/css" href="../styles/css2.css" />
    <title>Menu</title>
</head>
<body>
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
                <form id="ProductsForm" runat="server">
                <asp:RadioButtonList ID="CategoriesList" runat="server" RepeatDirection="Horizontal" AutoPostBack="True" Height="20px" RepeatLayout="Flow">
                    <asp:ListItem Selected="True" Value="0">PIZZA</asp:ListItem>
                    <asp:ListItem Value="1">SAŁATKI</asp:ListItem>
                    <asp:ListItem Value="2">NAPOJE</asp:ListItem>
                </asp:RadioButtonList>
                <br />
                <br />
                <asp:CheckBoxList ID="ProductsList" runat="server" AutoPostBack="True">
                </asp:CheckBoxList>
                <br />
                <br />
                <asp:Button ID="AddProductButton" runat="server" Text="Dodaj do koszyka" CausesValidation="False" UseSubmitBehavior="False" OnClick="AddProductButton_Click" /><br />
                <asp:Label ID="ProductsAmountLabel" runat="server" Font-Size="15pt" Text="Liczba produktów w koszyku:"></asp:Label>
                <a href="Cart.aspx">(Przejdź do koszyka)</a>    
                <br />
                <asp:Label ID="ErrorsLabel" runat="server" Font-Size="10pt" Text=""></asp:Label>
                </form>
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
</body>
</html>
