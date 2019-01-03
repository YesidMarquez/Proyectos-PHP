using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Services;
using System.Data.SqlClient;

/// <summary>
/// Descripción breve de wsInternet
/// </summary>
[WebService(Namespace = "http://tempuri.org/")]
[WebServiceBinding(ConformsTo = WsiProfiles.BasicProfile1_1)]
// Para permitir que se llame a este servicio web desde un script, usando ASP.NET AJAX, quite la marca de comentario de la línea siguiente. 
// [System.Web.Script.Services.ScriptService]
public class wsInternet : System.Web.Services.WebService
{

    public wsInternet()
    {

        //Elimine la marca de comentario de la línea siguiente si utiliza los componentes diseñados 
        //InitializeComponent(); 
    }

    [WebMethod]

    public string lead(string ptelefono, string pnombre, string ip)
    {

        string constring = "server='192.168.2.22';uid='sa';pwd='B3c4ll.2018*';database='aln_tigo1';";
        SqlConnection con = new SqlConnection(constring);
        /*Consulta la tabla UNE_FIJA_DIGITAL_2018 para validar que en las ultimas 24h no se halla registrado
        SqlConnection con = new SqlConnection(constring);
        SqlCommand commando = new SqlCommand("insert into UNE_FIJA_DIGITAL_2018 (MSISDN,NOMBRE,FECHA_INGRESO) OUTPUT INSERTED.INDICE values('" + ptelefono + "','" + pnombre + "', GETDATE());", con);
        */
        /* insertar la ip del cliente*/



        SqlCommand commando = new SqlCommand("insert into UNE_FIJA_DIGITAL_2018 (MSISDN,NOMBRE,FECHA_INGRESO) OUTPUT INSERTED.INDICE values('" + ptelefono + "','" + pnombre + "', GETDATE());", con);


        con.Open();

        try
        {
            int id = Convert.ToInt32(commando.ExecuteScalar());

            /*SqlCommand commando2 = new SqlCommand("insert into AL_2018 (MSISDN,NOMBRE,FECHA_INGRESO) values('" + ptelefono + "','" + pnombre + "', GETDATE());", con);

            //commando2.ExecuteNonQuery(); */

            return ("Registro Insertado Correctamente");
        }
        catch (Exception ex)
        {
            return ("Fallo de Ingreso");
        }
        finally
        {
            con.Close();

        }


        /*
        $client = new SoapClient("http://testurl/wsInternet.asmx?WSDL");
        $params->ptelefono = '333333';
        $params->pnombre = 'Nombre';    
        $params->ip = '127.0.0.1';    
        $result = $client->lead($params)->TestMethodResult;
        */


    }
}
