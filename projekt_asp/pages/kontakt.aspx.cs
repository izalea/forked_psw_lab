using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class pages_kontakt : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (IsPostBack)
        {
            Validate();

            if (IsValid)
            {
                string s_name = name.Text;
                string s_surname1 = surname1.Text;
                string s_age = age.Text;
                string s_email = email.Text;
                string s_phone = phone.Text;

                outputLabel.Text = "Dzięki za przesłanie wyników!<br/>" +
               "Otrzymaliśmy następujące dane:<br/>";
                outputLabel.Text +=
                   String.Format("Imię i nazwisko: {1} {2}, lat {3}{0}E-mail: {4}{0}Telefon: {4}",
                      "<br/>",s_name, s_surname1, s_age, s_email, s_phone);
                outputLabel.Visible = true;
            }
        }
    }
}