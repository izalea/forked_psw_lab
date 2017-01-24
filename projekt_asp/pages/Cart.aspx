<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Cart.aspx.cs" Inherits="Cart" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <meta charset="utf-8">
    <meta name="Order" content="koszyk klienta">
    <meta name="author" content="Sylwia i Hanna">
    <link rel="icon" type="image/x-icon" href="../img/pizza_icon.ico" />
    <link rel="stylesheet" type="text/css" href="../styles/css2.css" />
    <title>Koszyk</title>
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
                
                <asp:Label ID="ProductsInCart" runat="server" Text="Produkty w koszyku" Font-Size="20pt"></asp:Label>
                <br />
                <asp:Label ID="ShoppingCartProducts" runat="server" Text=""></asp:Label>
                <br />
                <asp:Button ID="ClearShoppingCart" runat="server" OnClick="ClearShoppingCart_Click" Text="Wyczyść koszyk" UseSubmitBehavior="False" />
                <a href="Menu.aspx">(Powrót do przeglądania produktów)</a> 
                <br />
                <br />
                <strong>Sposób dostawy:</strong>
                <asp:RadioButtonList ID="ShippingMethod" runat="server" RepeatDirection="Horizontal" RepeatLayout="Flow" AutoPostBack="True">
                    <asp:ListItem Selected="True" Value="0.0">Odbiór osobisty (0,00 zł)</asp:ListItem>
                    <asp:ListItem Value="3.0">Kurier (3,00 zł)</asp:ListItem>
                </asp:RadioButtonList>
                <br />
                <strong>Sposób płatności:</strong>
                <asp:RadioButtonList ID="PaymentMethod" runat="server" RepeatDirection="Horizontal" RepeatLayout="Flow" AutoPostBack="True">
                    <asp:ListItem Selected="True" Value="0.0">Gotówką przy odbiorze</asp:ListItem>
                    <asp:ListItem Value="0.02">Paypal lub karta kredytowa (+2%)</asp:ListItem>
                </asp:RadioButtonList>
                <br />
                <br />
                <asp:Label ID="ElementsSummary" runat="server" Text=""></asp:Label>
                <br />
                <hr />
                <asp:Label ID="OrderSummary" runat="server" Font-Bold="True"></asp:Label>
                <br />
                <br />
                <asp:Button ID="PlaceOrder" runat="server" Text="Złóż zamówienie" UseSubmitBehavior="True" OnClick="PlaceOrder_Click" PostBackUrl="OrderPlaced.aspx" />
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
