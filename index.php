<?php
$data='"charge_type": "card",
"currency": "EUR",
"amount": 10';
$hostname="https://api-test.switchpayments.com";
$url="/v2/charges";
$auth="0fkm3FLosPqPYOkpwxfCp9QiApIET43jYwPyARpdSD9sSiHmY2mQboc9ugPkGHF:EH7sSjR2u8SxdHkw3DkqQBDB5KYkNBMgrWclhJnUffpcGA2LS7pju5ULkYZKDoU";
$a=shell_exec("curl -vX POST ".$hostname.$url." -u ".$auth."  -d '{".$data."}'");
print_r($a);
?>