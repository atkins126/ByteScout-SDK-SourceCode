//*******************************************************************************************//
//                                                                                           //
// Download Free Evaluation Version From: https://bytescout.com/download/web-installer       //
//                                                                                           //
// Also available as Web API! Free Trial Sign Up: https://secure.bytescout.com/users/sign_up //
//                                                                                           //
// Copyright © 2017-2018 ByteScout Inc. All rights reserved.                                 //
// http://www.bytescout.com                                                                  //
//                                                                                           //
//*******************************************************************************************//


using Bytescout.PDF;
using System;

namespace ReadForm
{
    class Program
    {
        static void Main(string[] args)
        {
            // Load PDF form
            Document pdfDocument = new Document(@"W-4_Filled.pdf");
            pdfDocument.RegistrationName = "demo";
            pdfDocument.RegistrationKey = "demo";

            Page page = pdfDocument.Pages[0];

            Console.WriteLine("W-4 Form values are as follows");

            // FirstName and middle initial
            var cFirstName = ((EditBox)page.Annotations["f1_01[0]"]).Text;
            Console.WriteLine($"FirstName: {cFirstName}");

            // LastName
            var cLastName = ((EditBox)page.Annotations["f1_02[0]"]).Text;
            Console.WriteLine($"LastName: {cLastName}");

            // Security Number
            var cSecurityNumber = ((EditBox)page.Annotations["f1_03[0]"]).Text;
            Console.WriteLine($"Security Number: {cSecurityNumber}");

            // Home Address
            var cHomeAddress = ((EditBox)page.Annotations["f1_04[0]"]).Text;
            Console.WriteLine($"Home Address-1: {cHomeAddress}");

            // Home Address 2
            var cHomeAddress2 = ((EditBox)page.Annotations["f1_05[0]"]).Text;
            Console.WriteLine($"Home Address-2: {cHomeAddress2}");

            // Is Married
            var bIsMarried = ((CheckBox)page.Annotations["c1_1[1]"]).Checked;
            Console.WriteLine($"Is Married: {bIsMarried}");

            // Cleanup 
            pdfDocument.Dispose();

            Console.WriteLine();
            Console.WriteLine("Press any key to exit....");
            Console.ReadLine();
        }
    }
}