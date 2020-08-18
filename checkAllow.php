<?php



$url = 'https://customerclub.mahaksoft.com/customerclub/checkAllowPlay?packageNo='.$_POST["packageNumber"];


$cURLConnection = curl_init();

curl_setopt($cURLConnection, CURLOPT_URL, $url);
curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
$checkAllow = curl_exec($cURLConnection);
curl_close($cURLConnection);
echo $checkAllow;


?>
