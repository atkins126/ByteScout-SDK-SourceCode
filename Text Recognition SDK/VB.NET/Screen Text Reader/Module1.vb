'*******************************************************************************************'
'                                                                                           '
' Download Free Evaluation Version From:     https://bytescout.com/download/web-installer   '
'                                                                                           '
' Also available as Web API! Get free API Key https://app.pdf.co/signup                     '
'                                                                                           '
' Copyright © 2017-2019 ByteScout, Inc. All rights reserved.                                '
' https://www.bytescout.com                                                                 '
' https://www.pdf.co                                                                        '
'*******************************************************************************************'


Imports System
Imports System.Diagnostics
Imports Bytescout.TextRecognition

Module Module1

    Sub Main()

        Dim outputDocument As String = ".\result.txt"

        ' Create and activate TextRecognizer instance
        Using textRecognizer As TextRecognizer = New TextRecognizer("demo", "demo")

            Try
                ' Create ScreenshotMaker instance
                Dim screenshotMaker As ScreenshotMaker = new ScreenshotMaker()
                ' Set rectangle to take screenshot from
                screenshotMaker.SetScreenshotArea(0, 0, 200, 200)

                ' Load screenshot
                textRecognizer.LoadDocument(screenshotMaker)

                ' Set the location of OCR language data files
                textRecognizer.OCRLanguageDataFolder = "c:\Program Files\ByteScout Text Recognition SDK\ocrdata_best\"

                ' Set OCR language.
                ' "eng" for english, "deu" for German, "fra" for French, "spa" for Spanish, etc. - according to files in "ocrdata" folder
                ' Find more language files at https://github.com/bytescout/ocrdata
                textRecognizer.OCRLanguage = "eng" 
                
                ' Recognize text from all pages and save it to file
                textRecognizer.SaveText(outputDocument)

                ' Open the result file in default associated application (for demo purposes)
                Process.Start(outputDocument)

            Catch exception As Exception

                Console.WriteLine(exception)

            End Try

        End Using

    End Sub

End Module