<?php

require 'bearerToken.php'; 

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://testfin.vyatowafarms.com/API_Rest/customers_profile',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
	
    "nrc_number" : "242559681"
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: '.$TokenSanitized
    //'Cookie: ci_session=d08hq8816pldksimpjj6mklrjhndhkge'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;