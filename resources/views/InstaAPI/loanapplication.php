<?php

//If there is a request which has been recieved here with a mehod of POST
//Then do the following 
if($_SERVER['REQUEST_METHOD']=="POST"){

//Require the Token. If the token is not present then abort the process   
require 'bearerToken.php'; 

//Retrieve values submitted via POST here
$loan_type=$_POST['loan_type'];
$employee_id=$_POST['employee_id'];
$company_id=$_POST['company_id'];
$loan_amt=$_POST['loan_amt'];
$tenure_months=$_POST['tenure_months'];
$payment_mode_id=$_POST['payment_mode_id'];
$mobile_money_no=$_POST['mobile_money_no'];
$mobile_money_name=$_POST['mobile_money_name'];

//Initialising cURL requests in PHP to send the loan application to the system
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://testfin.vyatowafarms.com/API_Rest/capture_loan_application',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{
	"loan_type" : '.json_encode($loan_type).',
    "employee_id":'.json_encode($employee_id).',
	"company_id" : '.json_encode($company_id).',
	"loan_amt" : $loan_amt,
	"tenure_months" : $tenure_months,
    "payment_mode_id":$payment_mode_id,
    "mobile_money_no":'.json_encode($mobile_money_no).',
    "mobile_money_name": '.json_encode($mobile_money_name).'
}',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'Authorization: '.$TokenSanitized
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

}