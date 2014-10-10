<?php 

$token = 'PXHSjeEZgcG80rXG4NTqYNnX06IZwFzDeLJV6f5E';
$url = 'https://bibles.org/v2/verses/eng-NLT:Acts.8.34.xml';

// Set up cURL
$ch = curl_init();
// Set the URL
curl_setopt($ch, CURLOPT_URL, $url);
// don't verify SSL certificate
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
// Return the contents of the response as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// Follow redirects
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
// Set up authentication
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
curl_setopt($ch, CURLOPT_USERPWD, "$token:X");

// Do the request
$response = curl_exec($ch);
curl_close($ch);

print($response);
// Parse the XML into a SimpleXML object
$xml = new SimpleXMLElement($response);

// Print the text from the 0th verse
print ($xml->verses->verse[0]->text);
 ?>

		
