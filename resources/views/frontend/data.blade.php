<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$json =  json_encode($product_lastest);
print_r($json);
?>