using System;
using System.Text;
using System.Net;
using System.IO;
using log4net;
using System.Configuration;



namespace ParatikaCodeSampleNET.paratikacode
{
    class ParatikaService
    {
        private static readonly ILog log = LogManager.GetLogger(typeof(ParatikaService));

        public String getConnection(String url,String reqMsg){
            String outputData = System.String.Empty;
            try
            {
                HttpWebRequest request = (HttpWebRequest)WebRequest.Create(url);
                request.Method = ConfigurationManager.AppSettings["request_method"]; ;
                request.ContentType = ConfigurationManager.AppSettings["request_content_type"];
                ServicePointManager.SecurityProtocol = SecurityProtocolType.Ssl3 | SecurityProtocolType.Tls | SecurityProtocolType.Tls11 | SecurityProtocolType.Tls12;
                ServicePointManager.ServerCertificateValidationCallback = delegate { return true; };
                System.Net.ServicePointManager.Expect100Continue = false;
                byte[] data = Encoding.UTF8.GetBytes(reqMsg);
                using (Stream stream = request.GetRequestStream())
                {
                    stream.Write(data, 0, data.Length);
                }
                request.KeepAlive = false;
                HttpWebResponse response =
                (HttpWebResponse)request.GetResponse();
                Console.Read();
                Stream streamResponse = response.GetResponseStream();
                StreamReader streamRead = new StreamReader(streamResponse);
                String read = streamRead.ReadToEnd();              
                outputData = read;
                streamResponse.Close();
                streamRead.Close();
                response.Close();

            }
            catch (WebException e)
            {
                log.Info(" ParatikaService --> getConnection(url,reqMsg) --> WebException " + e.ToString());                
            }
            catch (Exception e)
            {
                log.Info(" ParatikaService --> getConnection(url,reqMsg) --> Exception " + e.ToString());
            }

            return outputData;
        }
        
  }
    
 }


