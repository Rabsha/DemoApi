<?php
   
header("content-type: application/json");
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Methods:POST");
header("Access-Control-Allow-Headers:Access-Control-Allow-Headers,content-type,Access-Control-Allow-Methods,Authorization,X-Requested-With ");
	
include("AppApi.php");

$obj = new AppApi();

$Params = array(
    'Request' => $_POST['data'],
);

print($obj->ApiRequest($Params));

?>