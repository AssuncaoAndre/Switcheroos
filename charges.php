<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$input = file_get_contents('php://input');

$input=json_decode($input,true);
$charge_type=$input["chargeType"];

$data='"charge_type": "'.$charge_type.'",
"currency": "EUR",
"amount": 10';
$hostname="https://api-test.switchpayments.com";
$url="/v2/charges";
$auth="0fkm3FLosPqPYOkpwxfCp9QiApIET43jYwPyARpdSD9sSiHmY2mQboc9ugPkGHF:EH7sSjR2u8SxdHkw3DkqQBDB5KYkNBMgrWclhJnUffpcGA2LS7pju5ULkYZKDoU";
$a=shell_exec("curl -vX POST ".$hostname.$url." -u ".$auth."  -d '{".$data."}'");
$result=json_decode($a);

$myObj=new stdClass();
$myObj->id = $result->id;
echo(json_encode($myObj));
return(json_encode($myObj));
?>