using System;
using System.Collections;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class Pages_menu : System.Web.UI.Page
{
    public static Hashtable[] ProductsTable = { new Hashtable(), new Hashtable(), new Hashtable(), new Hashtable() };

    public Pages_menu()
    {
        ProductsTable[0].Clear();
        ProductsTable[1].Clear();
        ProductsTable[2].Clear();
        ProductsTable[3].Clear();

        ProductsTable[0].Add("PEPPERONI", 37.95f);
        ProductsTable[0].Add("MARGHERITA", 42.95f);
        ProductsTable[0].Add("HAWAJSKA", 39.95f);
        ProductsTable[0].Add("WEGETARIAŃSKA", 36.95f);
        ProductsTable[0].Add("HOT PEPPERONI", 41.95f);

        ProductsTable[1].Add("CEZAR", 13.65f);
        ProductsTable[1].Add("CAPRESE", 11.95f);
        ProductsTable[1].Add("Mix sałat z łososiem wędzonym", 17.99f);

        ProductsTable[2].Add("Pepsi", 4.5f);
        ProductsTable[2].Add("Woda mineralna", 4.0f);
        ProductsTable[2].Add("Sok warzywny", 3.5f);
    }

    protected void Page_Load(object sender, EventArgs e)
    {
        var ProductsListData = new List<ListItem>();
        int Category = Int32.Parse(CategoriesList.SelectedItem.Value);

        if (!IsPostBack || Session["CurrentCategory"] == null || (int)Session["CurrentCategory"] != Category)
        {
            foreach (DictionaryEntry Entry in ProductsTable[Category])
            {
                ProductsListData.Add(new ListItem((String)Entry.Key, (String)Entry.Key, false));
            }

            ProductsList.DataSource = ProductsListData;
            ProductsList.DataBind();

            Session.Add("CurrentCategory", Category);
        }

        RefreshCartItemsAmount();
    }

    void RefreshCartItemsAmount()
    {
        int ItemsNum = 0;

        if (Session["Cart"] != null)
        {
            ItemsNum = ((Hashtable)Session["Cart"]).Count;
        }

        ProductsAmountLabel.Text = String.Format("Liczba produktów w koszyku: {0}", ItemsNum);
    }

    protected void AddProductButton_Click(object sender, EventArgs e)
    {
        ErrorsLabel.Text = "";

        if (Session["Cart"] == null)
        {
            Session.Add("Cart", new Hashtable());
        }

        var Cart = (Hashtable)Session["Cart"];
        int ProductsListNum = ProductsList.Items.Count;
        int Category = Int32.Parse(CategoriesList.SelectedItem.Value);

        for (int i = 0; i < ProductsListNum; i++)
        {
            if (ProductsList.Items[i].Selected)
            {
                if (!Cart.Contains(ProductsList.Items[i].Value))
                {
                    Cart.Add(ProductsList.Items[i].Value, (float)ProductsTable[Category][ProductsList.Items[i].Value]);

                    ErrorsLabel.Text += String.Format("{0} został dodany do koszyka<br />", ProductsList.Items[i].Value);
                }
                else
                {
                    ErrorsLabel.Text += String.Format("{0} znajduje się już w koszyku<br />", ProductsList.Items[i].Value);
                }

                ProductsList.Items[i].Selected = false;
            }
        }

        RefreshCartItemsAmount();
    }
}