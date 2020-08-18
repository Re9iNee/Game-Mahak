<?php
$url = 'https://customerclub.mahaksoft.com/customerclub/setscore';
$data = array(
    'packageNo' => $_POST["packageNumber"],
    "GateWay" =>  "game",
    "comment" =>  "",
    "UserId" => "3ad9c26f-712a-46ab-a6fc-9980b3a7fd34"
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