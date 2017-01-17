<%@ Page Language="C#" AutoEventWireup="true" CodeFile="kontakt.aspx.cs" Inherits="pages_kontakt" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat = "server"> 
		<meta charset = "utf-8">
		<title>Kontakt</title> 
		<meta name="keywords" content="kontakt, formularz kontaktowy, kontak pizzeria">
		<meta name="description" content="Formularz do kontaktu z pizzerią.">
		<meta name="author" content="Sylwia i Hanna">
		<link rel="icon" type="image/x-icon" href="../img/pizza_icon.ico">
		<style type = "text/css">
		
       
		 .BG_IMG_NO_REPEAT_TOP_LEFT {
					background-image: url(../img/PizzaLogo.png);
					background-position: top-left;
					background-repeat: no-repeat;
					background-attachment: fixed;
		 }
         .style1
        {
            width: 100%;
        }
		 nav > ul {
				font-style: oblique;
		 }
	
		</style>
	  
	</head>
	
	<!-- content -->
	
	<body class = "BG_IMG_NO_REPEAT_TOP_LEFT .kontakt-color"> 		
		<nav>
			<a href = "../index.aspx"><b>Strona główna</b></a>		
		</nav>
		
		<form id="form1" runat="server">
			<fieldset>				
				<legend>Informacja kontaktowa</legend>
				<h4><b><mark>Tel.: 111-222-333</mark></b></h4>
				<h4><b><mark>111-222-444</mark></b></h4>
				
                <h2>Proszę wypełnić formularz</h2>
       
				<table class="style1">
                  <tr>
                     <td valign="top">
                        Imię:</td>
                     <td valign="top">
                        <asp:TextBox ID="name" runat="server"></asp:TextBox>
                        &nbsp;(wymagane)<br />
                        <asp:RequiredFieldValidator ID="nameRequiredFieldValidator" runat="server" 
                           ControlToValidate="name" Display="Dynamic" 
                           ErrorMessage="Musisz wpisać imię!" ForeColor="Red"></asp:RequiredFieldValidator>
                     </td>
                  </tr>
                  <tr>
                     <td valign="top">
                        Nazwisko:</td>
                     <td valign="top">
                        <asp:TextBox ID="surname1" runat="server"></asp:TextBox>
                        &nbsp;(wymagane)<br />
                        <asp:RequiredFieldValidator ID="surname1RequiredFieldValidator" runat="server" 
                           ControlToValidate="surname1" Display="Dynamic" 
                           ErrorMessage="Musisz wpisać nazwisko!" ForeColor="Red"></asp:RequiredFieldValidator>
                     </td>
                  </tr>
                  <tr>
                     <td valign="top">
                        Wpisz ponownie nazwisko:</td>
                     <td valign="top">
                        <asp:TextBox ID="surname2" runat="server"></asp:TextBox>
                        &nbsp;(wymagane)<br />
                        <asp:RequiredFieldValidator ID="surname2RequiredFieldValidator" runat="server" 
                           ControlToValidate="surname2" Display="Dynamic" 
                           ErrorMessage="Musisz wpisać nazwisko!" ForeColor="Red"></asp:RequiredFieldValidator>
                        <asp:CompareValidator ID="SurnamesCompareValidator" runat="server" Display="Dynamic"
                            ControlToValidate="surname2" ControlToCompare="surname1" ForeColor="Red"
                            ErrorMessage="Nazwiska się nie zgazają!"></asp:CompareValidator>
                     </td>
                  </tr>
                  <tr>
                     <td valign="top">
                        Ile masz lat(1-100):</td>
                     <td valign="top">
                        <asp:TextBox ID="age" runat="server"></asp:TextBox>
                        &nbsp;(wymagane)<br />
                        <asp:RequiredFieldValidator ID="ageRequiredFieldValidator" runat="server" 
                           ControlToValidate="age" Display="Dynamic" 
                           ErrorMessage="Musisz wpisać wiek!" ForeColor="Red"></asp:RequiredFieldValidator>
                        <asp:RangeValidator ID="ageRangeValidator" runat="server" Display="Dynamic" ForeColor="Red"
                           ControlToValidate="age" MinimumValue="1" MaximumValue="100" 
                           Type="Integer" ErrorMessage="Wartość pomiędzy 1 a 100!"></asp:RangeValidator>
                     </td>
                  </tr>
                  <tr>
                     <td valign="top">
                        E-mail:</td>
                     <td valign="top">
                        <asp:TextBox ID="email" runat="server"></asp:TextBox>
                        &nbsp;(email@domain.com, wymagane)<br />
                        <asp:RequiredFieldValidator ID="emailRequiredFieldValidator" runat="server" 
                           ControlToValidate="email" Display="Dynamic" 
                           ErrorMessage="Musisz wpisać swój adres mailowy!" ForeColor="Red"></asp:RequiredFieldValidator>
                        <asp:RegularExpressionValidator ID="emailRegularExpressionValidator" 
                           runat="server" ControlToValidate="email" Display="Dynamic" 
                           ErrorMessage="Podany adres musi być w wymaganym formacie!" ForeColor="Red" 
                           ValidationExpression="\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*"></asp:RegularExpressionValidator>
                     </td>
                  </tr>
                  <tr>
                     <td valign="top">
                        Telefon:</td>
                     <td valign="top">
                        <asp:TextBox ID="phone" runat="server"></asp:TextBox>
                        &nbsp;((555) 555-1234, wymagane)<br />
                        <asp:RequiredFieldValidator ID="phoneRequiredFieldValidator" runat="server" 
                           ControlToValidate="phone" Display="Dynamic" 
                           ErrorMessage="Musisz podać numer telefonu!" ForeColor="Red"></asp:RequiredFieldValidator>
                        <asp:RegularExpressionValidator ID="phoneRegularExpressionValidator" 
                           runat="server" ControlToValidate="phone" Display="Dynamic" 
                           ErrorMessage="Numer telefonu musi być w wymaganym formacie!" ForeColor="Red" 
                           ValidationExpression="((\(\d{3}\) ?)|(\d{3}-))?\d{3}-\d{4}"></asp:RegularExpressionValidator>
                     </td>
                  </tr>
               </table>
            
				
			</fieldset><br>
            <p>
               <asp:Button ID="submitButton" runat="server" Text="Submit" />
            </p>
            <p>
               <asp:Label ID="outputLabel" runat="server" Visible="False"></asp:Label>
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
