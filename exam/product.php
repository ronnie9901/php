<?php

header("Access-Control-Allow-Method: POST ");
header("Access-Control-Allow-Method: GET ");
header("Content-Type: application/json");

include("examconfig.php");


$c1 = new Config();
$arr;
if($_SERVER['REQUEST_METHOD']=="POST")
{
  $product_name = $_POST['product_name'];
  $price = $_POST['price'];
 
  $res = $c1->productinsert($product_name,$price );
}
else { 
  $arr['error'] = " only POST  type  is allowed";
}

  echo  json_encode($arr);
?>