<?php

# An HTTP GET request example
//http://api.hawksearch.info/api/v4/
//LandingPage/{id}

$url = 'https://search.blueport.com/sites/asi/?hawktype=search&output=json&hawkhost=1&regionid=165&lp=1053&item_type_id=1';
$ch = curl_init($url);
curl_setopt($ch,CURLOPT_HTTPHEADER,array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_TIMEOUT, 5);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$data = curl_exec($ch);
curl_close($ch);

$results = json_decode($data);//json_encode($data, JSON_PRETTY_PRINT)
print json_encode($results);
?>