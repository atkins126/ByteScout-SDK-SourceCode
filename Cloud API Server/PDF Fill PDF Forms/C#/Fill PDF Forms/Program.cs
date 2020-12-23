//*******************************************************************************************//
//                                                                                           //
// Download Free Evaluation Version From: https://bytescout.com/download/web-installer       //
//                                                                                           //
// Also available as Web API! Get Your Free API Key: https://app.pdf.co/signup               //
//                                                                                           //
// Copyright © 2017-2020 ByteScout, Inc. All rights reserved.                                //
// https://www.bytescout.com                                                                 //
// https://pdf.co                                                                            //
//                                                                                           //
//*******************************************************************************************//


using Newtonsoft.Json;
using Newtonsoft.Json.Linq;
using System;
using System.Collections.Generic;
using System.Net;
using System.Runtime.InteropServices;

namespace ByteScoutWebApiExample
{
	// Please NOTE: In this sample we're assuming Cloud Api Server is hosted at "https://localhost". 
	// If it's not then please replace this with with your hosting url.
    class Program
    {
        // The authentication key (API Key).
        // Get your own by registering at https://app.pdf.co/documentation/api
        const String API_KEY = "*************************";

        // Direct URL of source PDF file.
        const string SourceFileUrl = "https://bytescout-com.s3-us-west-2.amazonaws.com/files/demo-files/cloud-api/pdf-form/f1040.pdf";
        // PDF document password. Leave empty for unprotected documents.
        const string Password = "";
        // File name for generated output. Must be a String
        const string FileName = "f1040-form-filled";

        // Destination File Name
        const string DestinationFile = "./result.pdf";

        static void Main(string[] args)
        {
            // Create standard .NET web client instance
            WebClient webClient = new WebClient();

            // Set API Key
            webClient.Headers.Add("x-api-key", API_KEY);

            // Values to fill out pdf fields with built-in pdf form filler
            var fields = new List<object> {
                new { fieldName = "topmostSubform[0].Page1[0].FilingStatus[0].c1_01[1]", pages = "1", text = "True" },
                new { fieldName = "topmostSubform[0].Page1[0].f1_02[0]", pages = "1", text = "John A." },
                new { fieldName = "topmostSubform[0].Page1[0].f1_03[0]", pages = "1", text = "Doe" },
                new { fieldName = "topmostSubform[0].Page1[0].YourSocial_ReadOrderControl[0].f1_04[0]", pages = "1", text = "123456789" },
                new { fieldName = "topmostSubform[0].Page1[0].YourSocial_ReadOrderControl[0].f1_05[0]", pages = "1", text = "John  B." },
                new { fieldName = "topmostSubform[0].Page1[0].YourSocial_ReadOrderControl[0].f1_06[0]", pages = "1", text = "Doe" },
                new { fieldName = "topmostSubform[0].Page1[0].YourSocial_ReadOrderControl[0].f1_07[0]", pages = "1", text = "987654321" }
            };

            // If enabled, Runs processing asynchronously. Returns Use JobId that you may use with /job/check to check state of the processing (possible states: working, 
            var async = false;

            // Prepare requests params as JSON
            // See documentation: https://apidocs.pdf.co
            Dictionary<string, object> parameters = new Dictionary<string, object>();
            parameters.Add("url", SourceFileUrl);
            parameters.Add("name", FileName);
            parameters.Add("password", Password);
            parameters.Add("async", async);
            parameters.Add("fields", fields);

            // Convert dictionary of params to JSON
            string jsonPayload = JsonConvert.SerializeObject(parameters);

            try
            {
                // URL of "PDF Edit" endpoint
                string url = "https://localhost/pdf/edit/add";

                // Execute POST request with JSON payload
                string response = webClient.UploadString(url, jsonPayload);

                // Parse JSON response
                JObject json = JObject.Parse(response);

                if (json["error"].ToObject<bool>() == false)
                {
                    // Get URL of generated PDF file
                    string resultFileUrl = json["url"].ToString();

                    // Download generated PDF file
                    webClient.DownloadFile(resultFileUrl, DestinationFile);

                    Console.WriteLine("Generated PDF file saved as \"{0}\" file.", DestinationFile);
                }
                else
                {
                    Console.WriteLine(json["message"].ToString());
                }
            }
            catch (WebException e)
            {
                Console.WriteLine(e.ToString());
            }
            finally
            {
                webClient.Dispose();
            }

            Console.WriteLine();
            Console.WriteLine("Press any key...");
            Console.ReadKey();
        }
    }
}
