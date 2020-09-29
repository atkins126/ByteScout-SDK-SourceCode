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


function generateBarcode()
{
    // Hide result blocks
    document.getElementById("errorBlock").style.display = "none";
    document.getElementById("resultBlock").style.display = "none";

    // Get API Key
    var apiKey = document.getElementById("apiKey").value.trim();
    if (apiKey == "") {
        alert("API Key should not be empty.");
        return false;
    }
    // Get barcode type
    var barcodeType=document.getElementById("barcodeType").value;
    // Get barcode value
    var inputValue = document.getElementById("inputValue").value.trim();
    if (inputValue == null || inputValue == "") {
        alert("Barcode Value should not be empty.");
        return false;
    }

    //show loader
    showLoader(true);

    // Prepare URL
    var url = "https://api.pdf.co/v1/barcode/generate?name=barcode.png";
    url += "&type=" + barcodeType; // Set barcode type (symbology)
    url += "&value=" + inputValue; // Set barcode value

    // Prepare request
    var httpRequest = new XMLHttpRequest();
    httpRequest.open("POST", url, true);
    httpRequest.setRequestHeader("x-api-key", apiKey); // set API Key
    // Asynchronous response handler
    httpRequest.onreadystatechange = function() {
        if (httpRequest.readyState == 4) {
            // If OK
            if (httpRequest.status == 200) {
                var result = JSON.parse(httpRequest.responseText);
                if (result.error == false) {
                    document.getElementById("resultBlock").style.display = "block"; // show hidden resultBlock
                    document.getElementById("image").setAttribute("src", result.url); // Set image link to display
                }
                else {
                    document.getElementById("errorBlock").style.display = "block"; // show hidden errorBlock
                    document.getElementById("error").innerHTML = result.message;
                }
            }
            // Else display error
            else {
                document.getElementById("errorBlock").style.display = "block"; // show hidden errorBlock
                document.getElementById("error").innerHTML = "Request failed. Please check you use the correct API key.";
            }

            // Hide loader
            showLoader(false);
        }
    }
    // Send request
    httpRequest.send();

    return true;
}

function showLoader(isDisplay){
    var loader = document.getElementById("loader");

    if(isDisplay){
        loader.style.display = "";
    }
    else{
        loader.style.display="none";
    }
}
