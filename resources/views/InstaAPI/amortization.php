<?php
require 'bearerToken.php'; 

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://testfin.vyatowafarms.com/API_Rest/compute_loan_amortization',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
	"loan_type" : "P",
	"company_id" : "1",
	"loan_amt" : 1000,
	"tenure_months" : 4
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: '.$TokenSanitized
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;