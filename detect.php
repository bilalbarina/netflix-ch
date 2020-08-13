<?php

$ip = $_SERVER['HTTP_CLIENT_IP'];
$url = 'http://ipwhois.app/json/' . $ip;
$obj = json_decode(file_get_contents($url), true);

$org = $obj['org'];
$country = $obj['country_code'];

echo $country;
echo $ip;
