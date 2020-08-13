<?php

$ip = $_SERVER['REMOTE_ADDR'];
$url = "http://ip-api.com/json/" . $ip . "?fields=asname"
$getJson = file_get_contents($url);
$json = json_decode($getJson, true);

$asname = $json['asname'];