using System;
using System.Collections.Generic;
using Newtonsoft.Json.Linq;
using log4net;
using System.Configuration;


namespace ParatikaCodeSampleNET.paratikacode
{
    class ParatikaClient
    {
     private static readonly ILog log = LogManager.GetLogger(typeof(ParatikaClient));        
     private ParatikaUtil paratikaUtil = new ParatikaUtil();
     private ParatikaService paratikaService = new ParatikaService();



    /**
    * Sample API sessionToken operation to the Paratika API
    * 
    */
    public JObject sessionToken()
    {
        JObject paratikaResponse = null;
        try
        {
            Console.WriteLine("A sample SESSIONTOKEN operation is started.");
            long started = DateTime.Now.Ticks;
            Console.WriteLine(ConfigurationManager.AppSettings["request_url"] + ConfigurationManager.AppSettings["url"]);
            Dictionary<String, String> requestParameters = new Dictionary<String, String>();
            paratikaUtil.prepareSessionTokenParameters(requestParameters);
            String requestData = paratikaUtil.convertToRequestData(requestParameters);
            Console.WriteLine(ConfigurationManager.AppSettings["request_data"] + requestData);
            String response = paratikaService.getConnection(ConfigurationManager.AppSettings["url"], requestData);
            Console.WriteLine(ConfigurationManager.AppSettings["response_data"] + response);
            Console.WriteLine(" > ParatikaClient.sessionToken() operation is finished in " + (DateTime.Now.Ticks - started) / 10000 + " ms.");
            paratikaResponse = JObject.Parse(response);
            checkResponse(paratikaResponse, response, "SESSIONTOKEN");
        }
        catch (Exception e)
        {
            log.Info(" ParatikaClient --> sessionToken() --> Exception " + e.ToString());
        }
        return paratikaResponse;
    }

    /**
     * Sample API query session operation to the Paratika API in order to see orderItems and extra parameters
     * 
     */
    public JObject querySession()
    {
        JObject paratikaResponse = null;
        try
        {
            String action = ConfigurationManager.AppSettings["action_querysession"];
            JObject doSessionToken = this.sessionToken();
            String sessionToken = (String)doSessionToken.GetValue("sessionToken");
            Console.WriteLine("A sample QUERYSESSION operation is started.");
            long started = DateTime.Now.Ticks; 
            System.Uri url = new System.Uri(ConfigurationManager.AppSettings["url"]);
            Console.WriteLine(ConfigurationManager.AppSettings["request_url"] + ConfigurationManager.AppSettings["url"]);
            Dictionary<String, String> requestParameters = new Dictionary<String, String>();
            requestParameters.Add(ConfigurationManager.AppSettings["action"], action);
            requestParameters.Add(ConfigurationManager.AppSettings["session_token"], sessionToken);
            String requestData = paratikaUtil.convertToRequestData(requestParameters);
            Console.WriteLine(ConfigurationManager.AppSettings["request_data"] + requestData);
            String response = paratikaService.getConnection(ConfigurationManager.AppSettings["url"], requestData);
            Console.WriteLine(ConfigurationManager.AppSettings["response_data"] + response);
            Console.WriteLine(" > ParatikaClient.querySession() operation is finished in " + (DateTime.Now.Ticks - started) / 10000 + "ms.");
            paratikaResponse = JObject.Parse(response);
            checkResponse(paratikaResponse, response, action);
        }
        catch (Exception e)
        {
            log.Info(" ParatikaClient --> querySession() --> Exception " + e.ToString());
        }
        return paratikaResponse;
    }


    /**
     * Sample API sale operation to the Paratika API
     * 
     */
    public JObject sale()
    {
        JObject paratikaResponse = null;
        try
        {
            String action = ConfigurationManager.AppSettings["action_sale"]; ;
            Console.WriteLine("A sample SALE operation is started.");
            long started = DateTime.Now.Ticks; 
            Console.WriteLine(ConfigurationManager.AppSettings["request_url"] + ConfigurationManager.AppSettings["url"]);
            Dictionary<String, String> requestParameters = new Dictionary<String, String>();
            requestParameters.Add(ConfigurationManager.AppSettings["action"], action);
            paratikaUtil.preparePrimaryTrxParameters(requestParameters);
            String requestData = paratikaUtil.convertToRequestData(requestParameters);
            Console.WriteLine(ConfigurationManager.AppSettings["request_data"] + requestData);
            String response = paratikaService.getConnection(ConfigurationManager.AppSettings["url"], requestData);
            Console.WriteLine(ConfigurationManager.AppSettings["response_data"] + response);
            Console.WriteLine(" > ParatikaClient.sale() operation is finished in " + (DateTime.Now.Ticks - started) / 10000 + "ms.");
            paratikaResponse = JObject.Parse(response);
            checkResponse(paratikaResponse, response, action);
        }
        catch (Exception e)
        {
            log.Info(" ParatikaClient --> sale() --> Exception " + e.ToString());
        }
        return paratikaResponse;
    }

    /**
     * Sample API preauth operation to the Paratika API
     * 
     */
    public JObject preauth()
    {
        JObject paratikaResponse = null;
        try
        {
            String action = ConfigurationManager.AppSettings["action_preauth"];
            Console.WriteLine("A sample PREAUTH operation is started.");
            long started = DateTime.Now.Ticks;
            System.Uri url = new System.Uri(ConfigurationManager.AppSettings["url"]);
            Console.WriteLine(ConfigurationManager.AppSettings["request_url"] + ConfigurationManager.AppSettings["url"]);
            Dictionary<String, String> requestParameters = new Dictionary<String, String>();
            requestParameters.Add(ConfigurationManager.AppSettings["action"], action);
            paratikaUtil.preparePrimaryTrxParameters(requestParameters);
            String requestData = paratikaUtil.convertToRequestData(requestParameters);
            Console.WriteLine(ConfigurationManager.AppSettings["request_data"] + requestData);
            String response = paratikaService.getConnection(ConfigurationManager.AppSettings["url"], requestData);
            Console.WriteLine(ConfigurationManager.AppSettings["response_data"] + response);
            Console.WriteLine(" > ParatikaClient.preauth() operation is finished in " + (DateTime.Now.Ticks - started) / 10000 + "ms.");
            paratikaResponse = JObject.Parse(response);
            checkResponse(paratikaResponse, response, action);
        }
        catch (Exception e)
        {
            log.Info(" ParatikaClient --> preauth() --> Exception " + e.ToString());
        }
        return paratikaResponse;
    }

    private void checkResponse(JObject json, String response, String action)
    {
        if (response != null
            && "00".Equals(json.GetValue("responseCode").ToString(), StringComparison.InvariantCultureIgnoreCase)
            && "Approved".Equals(json.GetValue("responseMsg").ToString(), StringComparison.InvariantCultureIgnoreCase))
        {
            Console.WriteLine(" > " + action + " operation is SUCCESSFUL.");
        }
        else
        {
            Console.WriteLine(" > " + action + " operation is FAILED, please check the error codes.");
            Console.WriteLine("   ErrorCode     : " + json.GetValue("errorCode"));
            Console.WriteLine("   ErrorMessage  : " + json.GetValue("errorMsg"));
        }
    }
}
}
