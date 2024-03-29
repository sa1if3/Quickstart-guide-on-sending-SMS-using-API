<?php

$curl = curl_init();

$apiKey=""; //Enter The API Key Here
$senderId="PNGSMS"; //Your SenderId. PNGSMS is default senderId
$mobileNumber=""; //10 digit phone number
$language="1";
$product="1";
$template="289329228923730";

/*           
Language:   1 - English, 2 - Unicode (Regional Language)
Product :   1 - Transactional, 2 - Promotional
Template : Your Approved Template ID
(Your message sould correspond with approved template ID)
*/

$message="Hello World"; //Approved Template Message

$message=urlencode($message);// Encode the message to send it through URL

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.pingsms.in/api/sendsms?key=".$apiKey."&sender=".$senderId."&mobile=".$mobileNumber."&language=".$language."&product=".$product."&message=".$message."&template=".$template,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "X-Authorization: ".$apiKey
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
