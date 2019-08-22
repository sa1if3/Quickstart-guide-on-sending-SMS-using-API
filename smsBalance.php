<?php

$curl = curl_init();

$apiKey=""; //Enter The API Key Here

//$apiKey="OO4oVJdaWzUiMofVzZ2ZrBOvEYJQOalmshTNfDTNejEGf3vbjh3lia85LZ6Lqc";

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.pingsms.in/api/getsmsbalance?key=".$apiKey,
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

  //$data = json_decode($response); //convert the response to object 
  //echo $data->available_balance->transactional_balance; //Echo out transactional balance


}