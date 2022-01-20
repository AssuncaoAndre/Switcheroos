<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$input = file_get_contents('php://input');

$input=json_decode($input,true);
$current_timestamp = time();
$myfile = fopen($current_timestamp.".txt", "w");
fwrite($myfile, $input);

return;
?>