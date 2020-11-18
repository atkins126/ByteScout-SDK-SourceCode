'*******************************************************************************************'
'                                                                                           '
' Download Free Evaluation Version From:     https://bytescout.com/download/web-installer   '
'                                                                                           '
' Also available as Web API! Get free API Key https://app.pdf.co/signup                     '
'                                                                                           '
' Copyright © 2017-2020 ByteScout, Inc. All rights reserved.                                '
' https://www.bytescout.com                                                                 '
' https://www.pdf.co                                                                        '
'*******************************************************************************************'


Imports System.IO
Imports System.Net
Imports Newtonsoft.Json
Imports Newtonsoft.Json.Linq

' Please NOTE: In this sample we're assuming Cloud Api Server is hosted at "https://localhost". 
' If it's not then please replace this with with your hosting url.
Module Module1

    ' The authentication key (API Key).
    ' Get your own by registering at https://app.pdf.co/documentation/api
    Const API_KEY As String = "***********************************"

    ' Direct URL of source PDF file.
    Const SourceFileUrl As String = "https://bytescout-com.s3-us-west-2.amazonaws.com/files/demo-files/cloud-api/pdf-form/f1040.pdf"

    ' PDF document password. Leave empty for unprotected documents.
    Const Password As String = ""

    ' File name for generated output. Must be a String
    Const FileName As String = "f1040-form-filled"

    ' Destination PDF file name
    Const DestinationFile As String = ".\result.pdf"

    Sub Main()

        ' Create standard .NET web client instance
        Dim webClient As WebClient = New WebClient()

        ' Set API Key
        webClient.Headers.Add("x-api-key", API_KEY)

        ' Set JSON content type
        webClient.Headers.Add("Content-Type", "application/json")

        ' Values to fill out pdf fields with built-in pdf form filler
        Dim fields = New List(Of Object) From {
            New With {Key .fieldName = "topmostSubform[0].Page1[0].FilingStatus[0].c1_01[1]", Key .pages = "1", Key .text = "True"},
            New With {Key .fieldName = "topmostSubform[0].Page1[0].f1_02[0]", Key .pages = "1", Key .text = "John A."},
            New With {Key .fieldName = "topmostSubform[0].Page1[0].f1_03[0]", Key .pages = "1", Key .text = "Doe"},
            New With {Key .fieldName = "topmostSubform[0].Page1[0].YourSocial_ReadOrderControl[0].f1_04[0]", Key .pages = "1", Key .text = "123456789"},
            New With {Key .fieldName = "topmostSubform[0].Page1[0].YourSocial_ReadOrderControl[0].f1_05[0]", Key .pages = "1", Key .text = "John  B."},
            New With {Key .fieldName = "topmostSubform[0].Page1[0].YourSocial_ReadOrderControl[0].f1_06[0]", Key .pages = "1", Key .text = "Doe"},
            New With {Key .fieldName = "topmostSubform[0].Page1[0].YourSocial_ReadOrderControl[0].f1_07[0]", Key .pages = "1", Key .text = "987654321"}
        }

        ' If enabled, Runs processing asynchronously. Returns Use JobId that you may use with /job/check to check state of the processing (possible states working,
        Dim async As Boolean = False

        ' Prepare URL of "PDF Edit" endpoint
        Dim url As String = "https://localhost/pdf/edit/add"

        ' Prepare requests params as JSON
        ' See documentation: https : //apidocs.pdf.co
        Dim parameters As New Dictionary(Of String, Object)
        parameters.Add("name", Path.GetFileName(DestinationFile))
        parameters.Add("password", Password)
        parameters.Add("url", SourceFileUrl)
        parameters.Add("async", async)
        parameters.Add("fields", fields)

        ' Convert dictionary of params to JSON
        Dim jsonPayload As String = JsonConvert.SerializeObject(parameters)

        Try
            ' Execute POST request with JSON payload
            Dim response As String = webClient.UploadString(url, jsonPayload)

            ' Parse JSON response
            Dim json As JObject = JObject.Parse(response)

            If json("error").ToObject(Of Boolean) = False Then

                ' Get URL of generated PDF file
                Dim resultFileUrl As String = json("url").ToString()

                ' Download PDF file
                webClient.DownloadFile(resultFileUrl, DestinationFile)

                Console.WriteLine("Generated PDF file saved as ""{0}"" file.", DestinationFile)

            Else
                Console.WriteLine(json("message").ToString())
            End If

        Catch ex As WebException
            Console.WriteLine(ex.ToString())
        End Try

        webClient.Dispose()

        Console.WriteLine()
        Console.WriteLine("Press any key...")
        Console.ReadKey()

    End Sub

End Module
