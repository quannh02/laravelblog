<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$product_all = DB::table('product')->get();
$json =  json_encode($product_all);
print_r($json);
?>