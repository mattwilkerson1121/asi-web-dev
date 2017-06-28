<?php
header("Content-Type: text/html; charset=utf-8");
header("Content-type:application/json");
header("Access-Control-Allow-Origin: *");

// ensemble count controls
if (!empty($_GET["eCount"])) {
	$eCount = $_GET["eCount"];
}
else { 
	$asiCount = 4; 
}

// anchor_items array of product IDs
if(!empty($_GET["items"])){
	$items = $_GET["items"];
}

// break apart the items into comma-separated string
$itemsArray = explode(",",$items,20);
foreach($itemsArray as $itemsArray){
	$itemsArray.",";
}

// initialize the CURL request
$curl_handle = curl_init(); 

// build the $data to pass in the request
$data = array(
  	'anchor_items' => array($itemsArray),
  	'ensembles_count' => $eCount,
);

$data = rawurlencode(json_encode($data));

$url = 'https://api.shoptelligence.com/api/basket_size_booster/'.$data;
curl_setopt($curl_handle, CURLOPT_URL, $url); 
curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array('X-API-KEY:746527bb4fc6023df23a8ca0ccfd6a38'));
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1); 
$start = microtime(TRUE);
$buffer = curl_exec($curl_handle); 
curl_close($curl_handle);

// original code
//$result = json_decode($buffer);

$result = json_decode($buffer, TRUE);

// get uniques in php array then re-encode
$array  = array_values(array_unique($result, SORT_REGULAR));

//echo json_encode($result);
echo json_encode($array);
?> 