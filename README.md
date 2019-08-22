# Quickstart-guide-on-sending-SMS-using-API
The following set of PHP files provides an basic example on how to use https://www.pingsms.in API

# GET https://pingsms.in API KEY
         -Sign Up in https://pingsms.in
         -Get API Key from Developer API Tab
         
  ![API_KEY](https://github.com/sa1if3/auto-sms-wisher/blob/master/api-key.png)
   
# Product and Language Code
```php
         
Language:   1 - English, 2 - Unicode (Regional Language)
Product :   1 - Transactional, 2 - Promotional


```

# 1.Send Quick SMS

```php
<?php

$curl = curl_init();

$apiKey=""; //Enter The API Key Here
$senderId="PNGSMS"; //Your SenderId. PNGSMS is default senderId
$mobileNumber=""; //10 digit phone number
$language="1";
$product="1";

/*           
Language:   1 - English, 2 - Unicode (Regional Language)
Product :   1 - Transactional, 2 - Promotional
*/

$message="Hello World";

$message=urlencode($message);// Encode the message to send it through URL

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.pingsms.in/api/sendsms?key=".$apiKey."&sender=".$senderId."&mobile=".$mobileNumber."&language=".$language."&product=".$product."&message=".$message,
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
```
# 2.Get Sender ID

```php
<?php

$curl = curl_init();

$apiKey="";

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.pingsms.in/api/getsenderids?key=".$apiKey,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "X-Authorization: ".$apiKey,
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
```

# 3.Get Job Info

```php
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
```

# 4. Get Sent Reports

```php
<?php

$curl = curl_init();

$apiKey=""; 
$dateOfReport="2019-08-22"; //Date Of Report in YYYY-MM-DD Format
$product="1";
/*           
Product :   1 - Transactional, 2 - Promotional
*/

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.pingsms.in/api/getsentreports?key=".$apiKey."&date=".$dateOfReport."&product=".$product,
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
```
# 5. Get SMS Balance

```php
<?php

$curl = curl_init();

$apiKey=""; //Enter The API Key Here

//$apiKey="OO4oVJdaWzUiMofVzZ2ZrBOvEYJQOalmshTNfDTNejEGf3vbjh3lia85LZ6lasas";

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
```
