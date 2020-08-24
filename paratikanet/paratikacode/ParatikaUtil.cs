using System;
using System.Collections.Generic;
using System.Text;
using System.Web;
using Newtonsoft.Json.Linq;
using log4net;
using System.Configuration;




namespace ParatikaCodeSampleNET.paratikacode
{
    class ParatikaUtil
    {
        private static readonly ILog log = LogManager.GetLogger(typeof(ParatikaUtil));
        /**
         * This section takes the input fields and converts them to the proper format for an HTTP post request. For example: "A=x&B=y"
         * 
         * @param requestParameters
         *            Request parameters
         * @return URL encoded request data
         * @throws UnsupportedEncodingException
         */

        public String convertToRequestData(Dictionary<String, String> requestParameters)
        {
            StringBuilder requestData = new StringBuilder();
            foreach (KeyValuePair<string, string> entry in requestParameters)
             {

                var key = HttpUtility.UrlEncode(entry.Key);
                var value = HttpUtility.UrlEncode(entry.Value);
                requestData.Append(key + "=" + value + "&");
                
            }
           return requestData.ToString();
        }

        private String encodeParameter(String parameterValue)
        {
            String encodedValue = System.String.Empty;
            try
            {
                if (parameterValue != null)
                {
                     encodedValue = HttpUtility.UrlEncode(parameterValue);
                }
            }
            catch
            {
                log.Info(" ParatikaUtil --> encodeParameter(parameterValue) --> UnsupportedEncodingException ");
                
            }
            return encodedValue;
        }

        public void prepareSessionTokenParameters(Dictionary<String, String> requestParameters)
        {   
            requestParameters.Add(ConfigurationManager.AppSettings["action"], ConfigurationManager.AppSettings["session_token"]);
            requestParameters.Add(ConfigurationManager.AppSettings["merchant_payment_id"], Guid.NewGuid().ToString());
            requestParameters.Add(ConfigurationManager.AppSettings["amount"], "1000");
            requestParameters.Add(ConfigurationManager.AppSettings["currency"], "TRY");
            requestParameters.Add(ConfigurationManager.AppSettings["sessiontype"], "PAYMENTSESSION");
            requestParameters.Add(ConfigurationManager.AppSettings["return_url"], "https://test.paratika.com.tr/paratika/index.jsp");
            JArray oItems = new JArray();
            JObject item = new JObject();
            item.Add(ConfigurationManager.AppSettings["code"], "T00D3AITCC");
            item.Add(ConfigurationManager.AppSettings["name"], "Galaxy S8+");
            item.Add(ConfigurationManager.AppSettings["quantity"], 1);
            item.Add(ConfigurationManager.AppSettings["description"], "The Samsung Galaxy S8 is Android smartphone produced by Samsung Electronics as part of the Samsung Galaxy S series.");
            item.Add(ConfigurationManager.AppSettings["order_item_amount"], 1000);
            oItems.Add(item);
            requestParameters.Add(ConfigurationManager.AppSettings["order_items"], encodeParameter(oItems.ToString()));
            JObject extra = new JObject();
            extra.Add(ConfigurationManager.AppSettings["integration_model"], "API");
            extra.Add(ConfigurationManager.AppSettings["always_save_card"], "true");
            requestParameters.Add(ConfigurationManager.AppSettings["extra"], encodeParameter(extra.ToString()));
            addMerchantAuthParams(requestParameters);
            addCardAndCustomerParams(requestParameters);
            addBillToAndShipToParams(requestParameters);

        }

        public void preparePrimaryTrxParameters(Dictionary<String, String> requestParameters)
        {
            Random rsg = new Random();
            double d_amount = rsg.NextDouble();
            String amount = String.Format("{0:0.00}", d_amount);            
            requestParameters.Add(ConfigurationManager.AppSettings["amount"], "1" + amount);
            requestParameters.Add(ConfigurationManager.AppSettings["currency"], "TRY");
            requestParameters.Add(ConfigurationManager.AppSettings["merchant_payment_id"], Guid.NewGuid().ToString());
            addMerchantAuthParams(requestParameters);
            addCardAndCustomerParams(requestParameters);
            addBillToAndShipToParams(requestParameters);
        }

        private void addMerchantAuthParams(Dictionary<String, String> requestParameters)
        {
            requestParameters.Add(ConfigurationManager.AppSettings["merchant"], "10000000");
            requestParameters.Add(ConfigurationManager.AppSettings["merchant_user"], "apiuser@testmerchant.com");
            requestParameters.Add(ConfigurationManager.AppSettings["merchant_password"], "Pluto321`");
        }
        private void addCardAndCustomerParams(Dictionary<String, String> requestParameters)
        {
            requestParameters.Add(ConfigurationManager.AppSettings["customer"], Guid.NewGuid().ToString());
            requestParameters.Add(ConfigurationManager.AppSettings["customer_name"], "Aydonat Aydınlar");
            requestParameters.Add(ConfigurationManager.AppSettings["customer_email"], "mghUzjPn@email.com");
            requestParameters.Add(ConfigurationManager.AppSettings["customer_ip"], "127.0.0.1");
            requestParameters.Add(ConfigurationManager.AppSettings["customer_phone"], "+903120000011");
            requestParameters.Add(ConfigurationManager.AppSettings["customer_birthday"], "19-04-1969");
            requestParameters.Add(ConfigurationManager.AppSettings["customer_agent"], "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:56.0) Gecko/20100101 Firefox/56.0");
            requestParameters.Add(ConfigurationManager.AppSettings["name_on_card"], "Aydonat Aydınlar");
            requestParameters.Add(ConfigurationManager.AppSettings["card_pan"], "5456165456165454");
            requestParameters.Add(ConfigurationManager.AppSettings["card_expiry"], "12.2030");
            requestParameters.Add(ConfigurationManager.AppSettings["card_cvv"], "000");
        }

        private void addBillToAndShipToParams(Dictionary<String, String> requestParameters)
        {
            requestParameters.Add(ConfigurationManager.AppSettings["bill_to_addressline"], "Çöişüğı Plaza, Ostim No:83/9, Yenimahalle");
            requestParameters.Add(ConfigurationManager.AppSettings["bill_to_city"], "Ankara");
            requestParameters.Add(ConfigurationManager.AppSettings["bill_to_country"], "Türkiye");
            requestParameters.Add(ConfigurationManager.AppSettings["bill_to_postalcode"], "06000");
            requestParameters.Add(ConfigurationManager.AppSettings["bill_to_phone"], "+903120000001");
            requestParameters.Add(ConfigurationManager.AppSettings["ship_to_addressline"], "Plaza ÇÖİŞÜĞI, Ostim No:83/9, Yenimahalle");
            requestParameters.Add(ConfigurationManager.AppSettings["ship_to_city"], "Ankara");
            requestParameters.Add(ConfigurationManager.AppSettings["ship_to_country"], "Türkiye");
            requestParameters.Add(ConfigurationManager.AppSettings["ship_to_postalcode"], "06000");
            requestParameters.Add(ConfigurationManager.AppSettings["ship_to_phone"], "+903120000001");
        }
    }
}
