using System;
using System.Collections;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class Cart : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (Session["Cart"] == null)
        {
            Session.Add("Cart", new Hashtable());
        }

        UpdateCartList();
    }

    private void UpdateCartList()
    {
        var Cart = (Hashtable)Session["Cart"];

        if (Cart.Count > 0)
        {
            ShoppingCartProducts.Text = "";

            foreach (DictionaryEntry Entry in Cart)
            {
                ShoppingCartProducts.Text += String.Format("{0} ({1} zł)<br />", (String)Entry.Key, (float)Entry.Value);
            }

            ClearShoppingCart.Enabled = true;
            PlaceOrder.Enabled = true;
        }
        else
        {
            ShoppingCartProducts.Text = "Koszyk jest pusty";

            ClearShoppingCart.Enabled = false;
            PlaceOrder.Enabled = false;
        }

        UpdateSummaries();
    }

    private void UpdateSummaries()
    {
        float ProductsCost = GetCartCost();
        float ShippingCost = GetShippingCost();
        float PaymentCost = GetPaymentCost(ProductsCost + ShippingCost);
        float TotalCost = ProductsCost + ShippingCost + PaymentCost;

        ElementsSummary.Text = String.Format("Łączna wartość produktów w koszyku: {0:0.00} zł<br />Koszt przesyłki: {1:0.00} zł<br />Koszt płatności: {2:0.00} zł", ProductsCost, ShippingCost, PaymentCost);
        OrderSummary.Text = String.Format("Do zapłaty: {0:0.00} zł", TotalCost);

        if (Session["TotalCost"] == null)
        {
            Session.Add("TotalCost", 0.0f);
        }

        Session["TotalCost"] = TotalCost;
    }

    protected void ClearShoppingCart_Click(object sender, EventArgs e)
    {
        if (Session["Cart"] != null)
        {
            ((Hashtable)Session["Cart"]).Clear();

            UpdateCartList();
        }
    }

    protected float GetCartCost()
    {
        float Cost = 0.0f;

        if (Session["Cart"] != null)
        {
            var Cart = (Hashtable)Session["Cart"];

            foreach (DictionaryEntry Entry in Cart)
            {
                Cost += (float)Entry.Value;
            }
        }

        return Cost;
    }

    protected float GetShippingCost()
    {
        float Cost = 0.0f;

        if (ShippingMethod.SelectedItem != null)
        {
            Cost += float.Parse(ShippingMethod.SelectedItem.Value, System.Globalization.CultureInfo.InvariantCulture);
        }

        return Cost;
    }

    protected float GetPaymentCost(float OrderCost)
    {
        float Cost = OrderCost;

        if (PaymentMethod.SelectedItem != null)
        {
            Cost *= float.Parse(PaymentMethod.SelectedItem.Value, System.Globalization.CultureInfo.InvariantCulture);
        }

        return Cost;
    }

    protected void PlaceOrder_Click(object sender, EventArgs e)
    {

    }
}