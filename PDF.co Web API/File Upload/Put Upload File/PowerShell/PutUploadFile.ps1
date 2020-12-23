$headers = New-Object "System.Collections.Generic.Dictionary[[String],[String]]"
$headers.Add("x-api-key", "{{x-api-key}}")

$multipartContent = [System.Net.Http.MultipartFormDataContent]::new()
$multipartFile = '/Users/em/Downloads/logo.png'
$FileStream = [System.IO.FileStream]::new($multipartFile, [System.IO.FileMode]::Open)
$fileHeader = [System.Net.Http.Headers.ContentDispositionHeaderValue]::new("form-data")
$fileHeader.Name = "file"
$fileHeader.FileName = "/Users/em/Downloads/logo.png"
$fileContent = [System.Net.Http.StreamContent]::new($FileStream)
$fileContent.Headers.ContentDisposition = $fileHeader
$multipartContent.Add($fileContent)

$body = $multipartContent

$response = Invoke-RestMethod '<insert presignedUrl generated by https://api.pdf.co/v1/file/upload/get-presigned-url >' -Method 'PUT' -Headers $headers -Body $body
$response | ConvertTo-Json