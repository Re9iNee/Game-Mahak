<?php
$url = 'https://customerclub.mahaksoft.com/customerClub/SearchCustomer';
// // create a new cURL resource
// $ch = curl_init($url);

// // set URL and other appropriate options
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_HEADER, 0);

// // grab URL and pass it to the browser
// $result = curl_exec($ch);

// // close cURL resource, and free up system resources
// curl_close($ch);
// echo $result;




// A sample PHP Script to POST data using cURL
// Data in JSON format 
$data = array(
    'SearchTerm' => '2000100'
);
 
$payload = json_encode($data);
 
// Prepare new cURL resource
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLINFO_HEADER_OUT, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
 
// Set HTTP Header for POST request 
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($payload))
);
 
// Submit the POST request
$result = curl_exec($ch);
// Close cURL session handle
curl_close($ch);

echo $result;
?>
