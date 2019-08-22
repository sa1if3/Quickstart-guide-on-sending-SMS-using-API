<?php

$curl = curl_init();
$apiKey=""; 
$dateOfReport="2019-08-20"; //Date Of Report in YYYY-MM-DD Format
$jobId="85157857";

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.pingsms.in/api/getjobinfo?key=".$apiKey."&jid=".$jobId."&date=".$dateOfReport,
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
