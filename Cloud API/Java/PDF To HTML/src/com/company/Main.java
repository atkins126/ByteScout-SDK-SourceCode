package com.company;

import com.sun.jndi.toolkit.url.Uri;
import org.apache.http.HttpEntity;
import org.apache.http.client.methods.CloseableHttpResponse;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.client.utils.URIBuilder;
import org.apache.http.entity.ContentType;
import org.apache.http.entity.mime.MultipartEntityBuilder;
import org.apache.http.entity.mime.content.FileBody;
import org.apache.http.entity.mime.content.StringBody;
import org.apache.http.impl.client.CloseableHttpClient;
import org.apache.http.impl.client.HttpClients;
import org.apache.http.util.EntityUtils;

import java.io.File;
import java.io.FileOutputStream;
import java.io.IOException;
import java.net.URI;
import java.net.URISyntaxException;
import java.nio.file.Path;
import java.nio.file.Paths;

// This example demonstrates the using of PDF to HTML Web API

public class Main
{
	// Your authentication key
    final static String API_KEY = "#####################################";

    public static void main(String[] args) throws IOException, URISyntaxException
    {
	    String inputFile = "sample.pdf";
	    String uploadedFileId = null;
	    String resultFileURL = null;

        CloseableHttpClient httpClient = HttpClients.createDefault();

        try
        {
	        // 1. UPLOAD FILE

	        // Create POST request for File API /api/v1/file/upload
            HttpPost httpPost = new HttpPost("https://bytescout.io/api/v1/file/upload?apiKey=" + API_KEY);

	        // Fill form-data according to API ( https://bytescout.io/docs/index )
            FileBody fileBody = new FileBody(new File(inputFile));
            HttpEntity reqEntity = MultipartEntityBuilder.create()
                .addPart("file", fileBody)
                .addPart("storageTime", new StringBody("600", ContentType.TEXT_PLAIN))
                .build();
	        httpPost.setEntity(reqEntity);

            System.out.println("executing request " + httpPost.getRequestLine());
	        CloseableHttpResponse response = httpClient.execute(httpPost);
	        System.out.println(response.getStatusLine());

	        try
            {
                HttpEntity resEntity = response.getEntity();
                if (resEntity != null)
                {
	                // Get uploaded file ID from the response
	                uploadedFileId = EntityUtils.toString(resEntity);
	                System.out.println("Uploaded file ID: " + uploadedFileId);
                }
                EntityUtils.consume(resEntity);
            }
            finally
            {
                response.close();
            }


	        // 2. CONVERT PDF TO HTML

	        if (uploadedFileId != null)
	        {
		        // Prepare URL for PDF To HTML API /api/v1/pdftohtml/htmlextractor/extract
		        String uri = new URIBuilder("https://bytescout.io/api/v1/pdftohtml/htmlextractor/extract")
			        .addParameter("apiKey", API_KEY) // set API Key
			        .addParameter("properties.extractInvisibleText", "false")
			        .addParameter("properties.trimSpaces", "true")
			        .addParameter("properties.outputImageFormat", "png") // set PNG format for images extracted from PDF document
			        .addParameter("properties.outputPageWidth", "1200") // set output HTML page width
			        .addParameter("inputType", "fileID") // set input type
			        .addParameter("input", uploadedFileId) // set Input to the file ID we've got on the previous step
			        .addParameter("outputType", "link") // set output type to Link
			        .toString();

		        HttpGet httpGet = new HttpGet(uri);

		        System.out.println("Executing request " + httpGet.getRequestLine());

		        response = httpClient.execute(httpGet);

		        System.out.println(response.getStatusLine());

		        try
		        {
			        HttpEntity resEntity = response.getEntity();
			        if (resEntity != null)
			        {
				        // The response text contains the result file link
				        resultFileURL = EntityUtils.toString(resEntity);
			        }
			        EntityUtils.consume(resEntity);
		        }
		        finally
		        {
			        response.close();
		        }


		        // 3. DOWNLOAD IMAGE FILE FROM LINK

		        if (resultFileURL != null)
		        {
			        httpGet = new HttpGet(resultFileURL);

			        System.out.println("Executing request " + httpGet.getRequestLine());

			        response = httpClient.execute(httpGet);

			        System.out.println(response.getStatusLine());

			        try
			        {
				        HttpEntity resEntity = response.getEntity();
				        if (resEntity != null)
				        {
					        String fileName =  Paths.get(new URI(resultFileURL).getPath()).getFileName().toString();

					        // Save response stream to file
					        FileOutputStream outputStream = new FileOutputStream(fileName);
					        resEntity.writeTo(outputStream);
					        outputStream.close();
				        }
				        EntityUtils.consume(resEntity);
			        }
			        finally
			        {
				        response.close();
			        }
		        }
	        }
        }
        finally
        {
            httpClient.close();
        }
    }
}
