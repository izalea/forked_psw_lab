using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class OrderPlaced : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        ThanksLabel.Text = String.Format("Dziękujemy za złożenie zamówienia.<br />Wartość zamówienia wynosi: {0:0.00} zł.", Session["TotalCost"]);

        Session.RemoveAll();
    }
}