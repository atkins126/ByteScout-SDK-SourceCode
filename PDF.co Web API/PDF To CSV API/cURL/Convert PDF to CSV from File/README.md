## How to convert PDF to CSV from file for PDF to CSV API in cURL with PDF.co Web API

### Learn to write code convert PDF to CSV from file for PDF to CSV API in cURL: Simple How To Tutorial

This page displays the step-by-step instructions and algorithm of how to convert PDF to CSV from file and how to apply it in your application. PDF.co Web API helps with PDF to CSV API in cURL. PDF.co Web API is the Rest API that provides set of data extraction functions, tools for documents manipulation, splitting and merging of pdf files. Includes built-in OCR, images recognition, can generate and read barcodes from images, scans and pdf.

Want to learn quickly? These fast application programming interfaces of PDF.co Web API for cURL plus the instruction and the code below will help to learn how to convert PDF to CSV from file. This cURL sample code can be used by copying and pasting into your project. Once done,just compile your project and click Run. Further improvement of the code will make it more robust.

Our website provides free trial version of PDF.co Web API that gives source code samples to assist with your cURL project.

## REQUEST FREE TECH SUPPORT

[Click here to get in touch](https://bytescout.zendesk.com/hc/en-us/requests/new?subject=PDF.co%20Web%20API%20Question)

or just send email to [support@bytescout.com](mailto:support@bytescout.com?subject=PDF.co%20Web%20API%20Question) 

## ON-PREMISE OFFLINE SDK 

[Get Your 60 Day Free Trial](https://bytescout.com/download/web-installer?utm_source=github-readme)
[Explore SDK Docs](https://bytescout.com/documentation/index.html?utm_source=github-readme)
[Sign Up For Online Training](https://academy.bytescout.com/)


## ON-DEMAND REST WEB API

[Get your API key](https://pdf.co/documentation/api?utm_source=github-readme)
[Explore Web API Documentation](https://pdf.co/documentation/api?utm_source=github-readme)
[Explore Web API Samples](https://github.com/bytescout/ByteScout-SDK-SourceCode/tree/master/PDF.co%20Web%20API)

## VIDEO REVIEW

[https://www.youtube.com/watch?v=NEwNs2b9YN8](https://www.youtube.com/watch?v=NEwNs2b9YN8)




<!-- code block begin -->

##### ****Convert-PDF-to-CSV-from-File.cmd:**
    
```
@echo off

:: Path of the cURL executable
set CURL="curl.exe"

:: The authentication key (API Key).
:: Get your own by registering at https://app.pdf.co/documentation/api
set API_KEY=xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

:: PDF file.
set SOURCE_FILE=sample.pdf
:: Comma-separated list of page indices (or ranges) to process. Leave empty for all pages. Example: '0,2-5,7-'.
set PAGES=
:: PDF document password. Leave empty for unprotected documents.
set PASSWORD=
:: Result CSV file name
set RESULT_FILE_NAME=result.csv


:: Prepare URL for `PDF To CSV` API call
set QUERY="https://api.pdf.co/v1/pdf/convert/to/csv?name=%RESULT_FILE_NAME%&password=%PASSWORD%&pages=%PAGES%"
echo %QUERY%

:: Perform request and save response to a file
%CURL% -# -X GET -H "x-api-key: %API_KEY%" -F "file=@%SOURCE_FILE%" %QUERY% >response.json

:: Display the response
type response.json

:: Use any convenient way to parse JSON response and get URL of generated file(s)


echo.
pause
```

<!-- code block end -->