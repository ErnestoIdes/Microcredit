<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://testfin.vyatowafarms.com/API_Rest/login',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
    "nrc_number":"242559681",
    "password":"12345"
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Cookie: ci_session=kemq2utq0qbtdhr6kpspv4a7enlump0b'
  ),
));

$response = curl_exec($curl);
curl_close($curl);

//Getting Bearer Token for authentication in the system

//Get the request from the system and remove the braces {}
$BearerToken = substr($response,1,-1);

//Get the request without braces and break it into an array at each full colon : each
$Bearer = explode(':', $BearerToken);

//Get an array id of 13 (In this case the bearer token) 
$token=$Bearer[13];

//Break the bearer token into an array at each comma , 
$Bear = explode(',', $token);

//Now that is the value of the bearer token
$TokenSanitized=substr($Bear[0],1,-1);





