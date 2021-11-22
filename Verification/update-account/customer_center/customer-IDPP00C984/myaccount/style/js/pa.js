!function(){"use strict";window.PAYPAL=window.PAYPAL||{},window.fpti=window.fpti||{},window.fptiserverurl=window.fptiserverurl||"//t.paypal.com/ts",PAYPAL.analytics=PAYPAL.analytics||{},PAYPAL.analytics.options={},PAYPAL.analytics.settings="",PAYPAL.analytics.beaconURL="";var t=function(){};try{var e=window.sessionStorage}catch(t){e=null}var a=window.performance,n=!(!a||!a.getEntries),i=!!Date.now;a&&!a.now&&(a.now=function(){var t=PAYPAL.analytics.Analytics.prototype._getTimestamp()-a.timing.navigationStart;return t>0?t:0}),PAYPAL.analytics.Analytics=function(t){this._init(t)},PAYPAL.analytics.Analytics.prototype={version:"1.1.6",options:{click:{elements:"*[data-pa-click]",onClick:t,request:{keys:{linkUrl:"lu"},values:{eventType:"cl"}}},formAbandonment:{elements:"form",request:{keys:{lastFormFocused:"lf",lastInputFocused:"li"},values:{eventType:"fa"}}},impression:{request:{keys:{cookiesEnabled:"ce",plugins:"pl",jsVersion:"jsv",pageTitle:"pt",referrer:"ru",screenColorDepth:"cd",screenWidth:"sw",screenHeight:"sh",browserWidth:"bw",browserHeight:"bh"},values:{eventType:"im"}}},request:{data:{},unloadDelay:!1,keys:{version:"v",timestamp:"t",gmtOffset:"g",eventType:"e"},values:{eventType:"na",true:1,false:0},keyPrefix:"",url:window.fptiserverurl,onBeaconCreate:t}},_delayUnloadUntil:null,_lastFormFocused:null,_lastInputFocused:null,_init:function(t){this.setOptions(t),this._enableUnloadDelay()},_mergeOptions:function(t,e){return t&&t.data&&"string"==typeof t.data&&(t.data=this.utils.queryStringToObject(t.data)),e&&e.data&&"string"==typeof e.data&&(e.data=this.utils.queryStringToObject(e.data)),this.utils.merge(t,e)},_enableUnloadDelay:function(){var t=this,e=function(){var e;if(t._delayUnloadUntil)do e=new Date;while(e.getTime()<t._delayUnloadUntil)};this.utils.removeListener(window,"beforeunload",e),this.utils.addListener(window,"beforeunload",e)},_recordEvent:function(t,e){var a;e=this._mergeOptions(this.options.request,e),e.data=e.data||{};for(a in t)e.data[e.keyPrefix+a]=t[a];this.record(e)},_request:function(t){this._createBeacon(t)},_createBeacon:function(t){var e=new window.Image;"function"==typeof t.onBeaconCreate&&t.onBeaconCreate(e)!==!1?(e.src=PAYPAL.analytics.beaconURL=this._generateBeaconUrl(t),t.unloadDelay&&this.setUnloadDelay(t.unloadDelay)):t.logActivity&&(e.src=PAYPAL.analytics.beaconURL=this._generateBeaconUrlForLoggingActivity(t))},_generateBeaconUrl:function(t){var e,a,n,i=t.url.split("?"),r=i[0],s=t.keys,o=window.fpti.constructor();for(e in window.fpti)o[e]=window.fpti[e];r.match(/^\/\//)&&(r=window.location.protocol+r),r+="?",i[1]&&(r+=i[1]+"&"),r+=t.keyPrefix+s.version+"="+encodeURIComponent(this.version),s.timestamp&&(r=this._appendQueryStringData(r,t.keyPrefix+s.timestamp,this._getTimestamp())),s.gmtOffset&&(r=this._appendQueryStringData(r,t.keyPrefix+s.gmtOffset,this._getGmtOffset())),s.eventType&&(r=this._appendQueryStringData(r,t.keyPrefix+s.eventType,t.values.eventType));for(var c in t.data)if("opic"===c){var l=o[c]||t.data[c];l=l.replace(/\w+@\w+\.\w+/g,""),l=l.replace(/\d+/g,""),o[c]=l}else o[c]=o[c]||t.data[c];for(e in o)""!==o[e]&&(r=this._appendQueryStringData(r,e,o[e]));a=this._buildPerformanceData(t.data);for(e in a)r=this._appendQueryStringData(r,e,a[e]);return"3p"!==PAYPAL.analytics.settings&&(n=this._getRLogId(),n&&(r=this._appendQueryStringData(r,"teal",n))),this.utils.checkPayloadSize(r)},_generateBeaconUrlForLoggingActivity:function(t){var e=window.fptiserverurl+"?v="+this.version;t.g=this._getGmtOffset(),t.t=this.getTimeNow(),t.start&&(t.end=t.end||t.t,t.tt=t.end-t.start),delete t.logActivity,delete t.trackCPL;for(var a in t)""!==t[a]&&(e=this._appendQueryStringData(e,a,t[a]));return this.utils.checkPayloadSize(e)},_appendQueryStringData:function(t,e,a){return!e&&0!==e||!a&&0!==a||(t+="&"+e+"="+encodeURIComponent(a)),t},_getTimestamp:function(){return i?Date.now():(new Date).getTime()},_buildPerformanceData:function(t){var e={},i=t.pgst||0;if(!PAYPAL.analytics.perf){if(a){var r=a.timing,s=r.secureConnectionStart||r.connectEnd,o=r.loadEventEnd||r.loadEventStart;e.t1=this._getPerformanceData(r.requestStart,r.fetchStart),e.t1c=this._getPerformanceData(r.connectEnd,r.fetchStart),e.t1d=this._getPerformanceData(r.domainLookupEnd,r.domainLookupStart),e.t1s=this._getPerformanceData(r.connectEnd,s),e.t2=this._getPerformanceData(r.responseStart,r.requestStart),e.t3=this._getPerformanceData(r.responseEnd,r.responseStart),e.t4d=this._getPerformanceData(r.domComplete,r.domLoading),e.t4=this._getPerformanceData(o,r.domLoading),e.t4e=this._getPerformanceData(o,r.loadEventStart),e.tt=this._getPerformanceData(o,r.navigationStart),n&&"function"==typeof PAYPAL.analytics.captureResourceTiming&&PAYPAL.analytics.options.trackCPL&&(e.view=JSON.stringify({t10:r.requestStart-r.navigationStart,t11:o-r.navigationStart}),e.res=JSON.stringify(PAYPAL.analytics.captureResourceTiming()))}else i&&(e.told=this._getTimestamp()-i);PAYPAL.analytics.perf=e}return e},_getPerformanceData:function(t,e){var a=0,n=6e5;return this._validateNumber(e)&&this._validateNumber(t)&&t>=e&&(a=t-e,a>n&&(a=0)),a},_validateNumber:function(t){return Number(t)===t&&t>=0},_getRLogId:function(){var t,e,a=window.rLogId;return a||(t=[].slice.call(document.head.childNodes).filter(function(t){return 8===t.nodeType})[0],"object"==typeof t&&(e=t.data.trim().split(" : "),e.length>2&&(a=e[e.length-1]))),a},_getGmtOffset:function(){return(new Date).getTimezoneOffset()},_getPageTitle:function(){return document.title},_getReferrer:function(){return document.referrer},_getScreenColorDepth:function(){return window.screen.colorDepth},_getScreenDimensions:function(){return{width:window.screen.width,height:window.screen.height}},_getBrowserDimensions:function(){var t,e,a=document.documentElement;return window.innerWidth?(t=window.innerWidth,e=window.innerHeight):"undefined"!=typeof a&&"undefined"!=typeof a.clientWidth&&0!==a.clientWidth?(t=a.clientWidth,e=a.clientHeight):(a=document.getElementsByTagName("body")[0],t=a.clientWidth,e=a.clientHeight),{width:t,height:e}},_getJavaEnabled:function(t){return t=this._mergeOptions(this.options.request,t),navigator.javaEnabled()?t.values.true:t.values.false},_getCookiesEnabled:function(t){t=this._mergeOptions(this.options.request,t);var e=0;return"undefined"===navigator.cookieEnabled?(document.cookie="enabledCheck",e=document.cookie.indexOf("enabledCheck")!==-1?t.values.true:t.values.false):e=navigator.cookieEnabled?t.values.true:t.values.false,e},_getFlashVersion:function(){var t=null;if(navigator.plugins&&navigator.plugins.length>0){var e="application/x-shockwave-flash",a=navigator.mimeTypes;a&&a[e]&&a[e].enabledPlugin&&a[e].enabledPlugin.description&&(t=a[e].enabledPlugin.description)}return t},_getPluginData:function(){return{director:"application/x-director",mediaplayer:"application/x-mplayer2",pdf:"application/pdf",quicktime:"video/quicktime",real:"audio/x-pn-realaudio-plugin",silverlight:"application/x-silverlight"}},_getPluginDataIE:function(){var t=["abk","wnt","aol","arb","chs","cht","dht","dhj","dan","dsh","heb","ie5","icw","ibe","iec","ieh","iee","jap","krn","lan","swf","shw","msn","wmp","obp","oex","net","pan","thi","tks","uni","vtc","vnm","mvm","vbs","wfd"],e=["7790769C-0471-11D2-AF11-00C04FA35D02","89820200-ECBD-11CF-8B85-00AA005B4340","47F67D00-9E55-11D1-BAEF-00C04FC2D130","76C19B38-F0C8-11CF-87CC-0020AFEECF20","76C19B34-F0C8-11CF-87CC-0020AFEECF20","76C19B33-F0C8-11CF-87CC-0020AFEECF20","9381D8F2-0288-11D0-9501-00AA00B911A5","4F216970-C90C-11D1-B5C7-0000F8051515","283807B5-2C60-11D0-A31D-00AA00B92C03","44BBA848-CC51-11CF-AAFA-00AA00B6015C","76C19B36-F0C8-11CF-87CC-0020AFEECF20","89820200-ECBD-11CF-8B85-00AA005B4383","5A8D6EE0-3E18-11D0-821E-444553540000","630B1DA0-B465-11D1-9948-00C04F98BBC9","08B0E5C0-4FCB-11CF-AAA5-00401C608555","45EA75A0-A269-11D1-B5BF-0000F8051515","DE5AED00-A4BF-11D1-9948-00C04F98BBC9","76C19B30-F0C8-11CF-87CC-0020AFEECF20","76C19B31-F0C8-11CF-87CC-0020AFEECF20","76C19B50-F0C8-11CF-87CC-0020AFEECF20","D27CDB6E-AE6D-11CF-96B8-444553540000","2A202491-F00D-11CF-87CC-0020AFEECF20","5945C046-LE7D-LLDL-BC44-00C04FD912BE","22D6F312-B0F6-11D0-94AB-0080C74C7E95","3AF36230-A269-11D1-B5BF-0000F8051515","44BBA840-CC51-11CF-AAFA-00AA00B6015C","44BBA842-CC51-11CF-AAFA-00AA00B6015B","76C19B32-F0C8-11CF-87CC-0020AFEECF20","76C19B35-F0C8-11CF-87CC-0020AFEECF20","CC2A9BA0-3BDD-11D0-821E-444553540000","3BF42070-B3B1-11D1-B5C5-0000F8051515","10072CEC-8CC1-11D1-986E-00A0C955B42F","76C19B37-F0C8-11CF-87CC-0020AFEECF20","08B0E5C0-4FCB-11CF-AAA5-00401C608500","4F645220-306D-11D2-995D-00C04F98BBC9","73FA19D0-2D75-11D2-995D-00C04F98BBC9"],a={},n=document.body;n.addBehavior&&n.addBehavior("#default#clientCaps");for(var i=0;n.getComponentVersion&&i<e.length;i++){var r=t[i],s=n.getComponentVersion("{"+e[i]+"}","componentid");s&&(a[r]=s)}return a},_getPlugins:function(){var t,e,a=[],n=this._getPluginData();for(t in n)this._detectPlugin(n[t])&&a.push(t);if(e=this._getFlashVersion(),e&&a.push(e),0===a.length&&"Microsoft Internet Explorer"===navigator.appName){n=this._getPluginDataIE();for(t in n)a.push(t)}return a.join(",")},_detectPlugin:function(t){var e,a=navigator.mimeTypes;if(a&&a.length)return e=a[t],e&&e.enabledPlugin},_getLastFormFocusedValue:function(){var t="";return this._lastFormFocused&&(t=this._lastFormFocused.getAttribute("name")||this._lastFormFocused.getAttribute("id")||""),t},_getLastInputFocusedValue:function(){var t="";return this._lastInputFocused&&(t=this._lastInputFocused.getAttribute("name")||this._lastInputFocused.getAttribute("id")||""),t},_getElements:function(t){var e,a=[];if(t)if("string"==typeof t)a=this.utils.getElements(t);else if("object"==typeof t)for(e in t)t.hasOwnProperty(e)&&1===t[e].nodeType&&a.push(t[e]);else 1===t.nodeType&&a.push(t);return a},_click:function(t){t.getAttribute("href")&&(window.location.href=t.getAttribute("href"))},setOptions:function(t){this.options=this._mergeOptions(this.options,t)},setRequestData:function(t,e){if("object"==typeof t){var a;for(a in t)this.options.request.data[a]=t[a]}else"string"==typeof t&&void 0===e?this.setRequestData(this.utils.queryStringToObject(t)):"string"==typeof t&&void 0!==e&&(this.options.request.data[t]=e);window.fpti=this.options.request.data},getRequestData:function(t){var e=window.fpti;return t&&(e=e[t]),e},removeRequestData:function(t){var e=window.fpti;e[t]?delete e[t]:t||(e={})},setUnloadDelay:function(t){this._delayUnloadUntil=this._getTimestamp()+t},recordImpression:function(t){var e,a,n,i={};t=t||{},t.data?window.fpti=t.data=this.utils.queryStringToObject(t.data):t.data={};var r=this.utils.getCookie("tcs");this.utils.removeCookie("tcs"),r&&(t.data.pglk=decodeURIComponent(r));var s=this.utils.getCookie("AKDC");s&&(t.data.akdc=decodeURIComponent(s)),t=this._mergeOptions(this.options.impression.request,t),e=t.keys,i[e.pageTitle]=this._getPageTitle(),i[e.referrer]=this._getReferrer(),i[e.screenColorDepth]=this._getScreenColorDepth(),a=this._getScreenDimensions(),i[e.screenWidth]=a.width,i[e.screenHeight]=a.height,n=this._getBrowserDimensions(),i[e.browserWidth]=n.width,i[e.browserHeight]=n.height,i[e.cookiesEnabled]=this._getCookiesEnabled(t),"mo"!==PAYPAL.analytics.settings&&(i[e.plugins]=this._getPlugins()),this._recordEvent(i,t)},recordClick:function(t){t=this._mergeOptions(this.options.click.request,t),t.data?window.fpti=this._mergeOptions(window.fpti,t.data):t.data={},this._recordEvent({},t)},recordFormAbandonment:function(t){var e,a={};t=this._mergeOptions(this.options.formAbandonment.request,t),t.data?window.fpti=this._mergeOptions(window.fpti,t.data):t.data={},e=t.keys,a[e.lastFormFocused]=this._getLastFormFocusedValue(),a[e.lastInputFocused]=this._getLastInputFocusedValue(),this._recordEvent(a,t)},trackFormFocus:function(t){var e,a,n,i=this;for(t=this._getElements(t),n=function(t){var e=t.currentTarget||t.srcElement,a=i.utils.getTargetAttr(e,"data-pa-focus"),n=t.target.value?t.target.value:i.utils.getTargetAttr(e),r={uicomp:a,uitype:"form",action:"focus",value:n};PAYPAL.analytics.logActivity(r)},a=0;a<t.length;a++)e=t[a],this.utils.removeListener(e,"focus",n),this.utils.addListener(e,"focus",n)},trackClicks:function(t){var e,a,n,i,r=this;for(t=this._mergeOptions(this.options.click,t),t=this._mergeOptions({request:this.options.request},t),e=this._getElements(t.elements),i=function(e){var a,n=e.currentTarget||e.srcElement;"function"==typeof t.onClick&&(a=t.onClick(e)),a!==!1&&("object"==typeof a&&(t.request=r._mergeOptions(t.request,a),t.request.data=r._mergeOptions(t.request.data,window.fpti),t.request.data.link&&(t.request.data.link=a.data.link)),t.request.data[t.request.keys.linkUrl]=n.getAttribute("href")||"",r.recordClick(t.request))},n=0;n<e.length;n++)a=e[n],this.utils.removeListener(a,"click",i),this.utils.addListener(a,"click",i)},trackFormAbandonment:function(t){var e,a,n=[],i=this;for(t=this._mergeOptions(this.options.formAbandonment,t),t=this._mergeOptions({request:this.options.request},t),n=this._getElements(t.elements),a=n.length,e=0;e<a;e++)for(var r=n[e],s="form"===r.tagName.toLowerCase()?[r]:this.utils.getElements("form",r),o=0;o<s.length;o++)for(var c=s[o],l=this.utils.getElements("input",c),u=l.length,p=0;p<u;p++){var d=l[p];!function(e,a){i.utils.addListener(a,"focus",function(n){i._lastFormFocused=e,i._lastInputFocused=a,i._trackingFormAbandonment||(i._trackingFormAbandonment=!0,"beforeunload,hashchange".split(",").forEach(function(e){i.utils.addListener(window,e,function(e){null!==i._lastFormFocused&&null!==i._lastInputFocused&&(i.recordFormAbandonment(t.request),i._lastFormFocused=null,i._lastInputFocused=null)})}),i.utils.addListener(e,"submit",function(t){i._lastFormFocused=null,i._lastInputFocused=null}))})}(c,d)}},getTimeNow:function(){return a&&a.now&&a.timing?Math.round(a.now()+a.timing.navigationStart):this._getTimestamp()},recordAjaxStartTime:function(){this.activityStartTime=this.getTimeNow()},logActivity:function(t){t.page=t.page||window.fpti.page,t.pgrp=t.pgrp||window.fpti.pgrp,n&&t.trackCPL&&"function"==typeof PAYPAL.analytics.captureResourceTiming&&(t.res?t.res=this._mergeOptions(t.res,PAYPAL.analytics.captureResourceTiming()):t.res=PAYPAL.analytics.captureResourceTiming()),t.view=JSON.stringify(t.view),t.res=JSON.stringify(t.res),t.logActivity=!0,this._createBeacon(t)},recordAjaxPerformanceData:function(t){var e=this.getTimeNow(),a=e-this.activityStartTime;PAYPAL.analytics.setup({data:t.sys.tracking.fpti.dataString+="&tajst="+this.activityStartTime+"&tajnd="+e+"&t1=0&t1c=0&t1d=0&t1s=0&t2=0&t3=0&t4=0&t4d=0&t4e=0&tt="+a})},record:function(t){t=this._mergeOptions(this.options.request,t),this._request(t)}},PAYPAL.analytics.Analytics.prototype.utils={clone:function(t){if(!t||t.constructor!==Object)return t;var e=t.constructor(),a=null;for(a in t)e[a]=this.clone(t[a]);return e},merge:function(t,e){t=t||{},e=e||{};var a=this.clone(t),n=this.clone(e),i=null;for(i in n)try{n[i].constructor===Object?a[i]=this.merge(a[i],n[i]):a[i]=n[i]}catch(t){a[i]=n[i]}return a},queryStringToObject:function(t){if("object"==typeof t)return t;for(var e,a={},n=t.split("&"),i=0;i<n.length;i++)e=n[i].split("="),a[e[0]]=decodeURIComponent(e[1]);return a},getElements:function(t,e){var a,n,i,r,s,o=[];if(e=e||document,e.querySelectorAll)if(n=e.querySelectorAll(t),"object"!=typeof n&&"function"!=typeof n||"number"!=typeof n.length)"object"==typeof n&&(o=n);else for(var c=0;c<n.length;c++)o.push(n[c]);else if(document.createStyleSheet){i=document.styleSheets.length?document.styleSheets[0]:document.createStyleSheet();var l,u=t.split(/\s*,\s*/),p=[];for(c=0;c<u.length;c++)l=i.rules.length,p.push(l),i.addRule(u[c],"aybabtu:pa",l);for(r=e===document?e.all:e.childNodes,c=0,a=r.length;c<a;c++)s=r[c],1===s.nodeType&&"pa"===s.currentStyle.aybabtu&&o.push(s);for(c=p.length-1;c>=0;c--)i.removeRule(p[c])}return o},addListener:function(t,e,a){if(t.addEventListener)t.addEventListener(e,a,!1);else if(t.attachEvent)return t.attachEvent("on"+e,a)},removeListener:function(t,e,a){if(e.removeEventListener)e.removeEventListener(t,a,!1);else if(e.detachEvent)return e.detachEvent("on"+t,a)},setCookie:function(t,e,a){var n,i;a=a||{},a.expires?(n=new Date,n.setTime(n.getTime()+24*a.expires*60*60*1e3),i="; expires="+n.toGMTString()):i="",document.cookie=t+"="+e+i+"; path=/"},getCookie:function(t){for(var e=document.cookie.split(";"),a=0;a<e.length;a++){for(var n=e[a];" "===n.charAt(0);)n=n.substring(1,n.length);if(0===n.indexOf(t+"="))return n.substring((t+"=").length,n.length)}return null},removeCookie:function(t){this.setCookie(t,"",{expires:-1})},getFirstText:function(t){for(var e=t.childNodes,a=null,n=0;n<e.length;n++){if(a=e[n],3===a.nodeType&&a.nodeValue&&a.nodeValue.match(/\S/))return a.nodeValue.trim();if(1===a.nodeType&&a.childNodes.length)return this.getFirstText(a)}},getTargetAttr:function(t,e){var a;return e&&(a=t.getAttribute(e)),a||(a=t.getAttribute("id")||t.getAttribute("name")||t.getAttribute("class")||t.getAttribute("href")||t.getAttribute("alt")||this.getFirstText(t)),a},setDefaultsOptions:function(t,e){for(var a in t)t.hasOwnProperty(a)&&(e[a]=t[a]);return e},wrapSelectors:function(t,e){var a="";if("string"==typeof t&&"string"==typeof e){t=t.split(",");for(var n=0;n<t.length;n++)a+=n!==t.length-1?e.trim()+" "+t[n].trim()+", ":e.trim()+" "+t[n].trim()}else a=t;return a},checkPayloadSize:function(t){t="string"==typeof t?t:"";var e=6144,a=t.length,n=/&res=(%7B.*%7D)/i,i=t.match(n);return a>e?(t=PAYPAL.analytics.Analytics.prototype._appendQueryStringData(t,"plsize",a),i&&(t=t.replace(n,""),i=JSON.parse(decodeURIComponent(i[1])),delete i.xhr,t=PAYPAL.analytics.Analytics.prototype._appendQueryStringData(t,"res",JSON.stringify(i)))):i&&(t=t.replace(n,""),i=JSON.parse(decodeURIComponent(i[1])),delete i.sxhr,t=PAYPAL.analytics.Analytics.prototype._appendQueryStringData(t,"res",JSON.stringify(i))),t}},PAYPAL.analytics.logPerformance=function(t){t.e="pf",PAYPAL.analytics.Analytics.prototype.logActivity(t)},PAYPAL.analytics.logActivity=function(t){t.e="ac",PAYPAL.analytics.Analytics.prototype.logActivity(t)},PAYPAL.analytics.setup=function(e){PAYPAL.analytics.setupComplete=PAYPAL.analytics.setupComplete||t,PAYPAL.analytics.settings="pp",setTimeout(function(){PAYPAL.analytics.setupComplete(PAYPAL.analytics.setup.init(e))},500)},PAYPAL.analytics.setup3p=function(e){e=PAYPAL.analytics.Analytics.prototype.utils.setDefaultsOptions(e||{},{trackPPLegacyClicks:!1,trackPPLegacyExitClicks:!1}),PAYPAL.analytics.settings="3p",PAYPAL.analytics.setupComplete=PAYPAL.analytics.setupComplete||t,setTimeout(function(){PAYPAL.analytics.setupComplete(PAYPAL.analytics.setup.init(e))},500)},PAYPAL.analytics.setupMobile=function(e){e=PAYPAL.analytics.Analytics.prototype.utils.setDefaultsOptions(e||{},{trackPPLegacyClicks:!1,trackPPLegacyExitClicks:!1,trackPPDownloadClicks:!1,trackPPClickThrough:!1,trackFormAbandonment:!1}),PAYPAL.analytics.settings="mo",PAYPAL.analytics.setupComplete=PAYPAL.analytics.setupComplete||t,setTimeout(function(){PAYPAL.analytics.setupComplete(PAYPAL.analytics.setup.init(e))},500)},PAYPAL.analytics.reSetup=function(t){delete PAYPAL.analytics.instance,t=PAYPAL.analytics.Analytics.prototype.utils.setDefaultsOptions(t||{},PAYPAL.analytics.options),setTimeout(function(){PAYPAL.analytics.setup.init(t)},500)},PAYPAL.analytics.setup.init=function(e){function a(t){var e=t||"",a=r.getRequestData("pgrp")||"",n=r.getRequestData("page")||"";return{pglk:a+"|"+e,pgln:n+"|"+e}}var n=PAYPAL.analytics.Analytics.prototype.utils;e=n.setDefaultsOptions(e||{},{trackImpression:!0,trackPPClicks:!0,trackPPExitClicks:!0,trackPPDownloadClicks:!0,trackPPLegacyClicks:!0,trackPPLegacyExitClicks:!0,trackPPClickThrough:!0,trackFormAbandonment:!0,trackCPL:!1,trackFormFocus:!1}),PAYPAL.analytics.Analytics.prototype.options.request.url=window.fptiserverurl=e.url||window.fptiserverurl,PAYPAL.analytics.options=e;var i=500,r=new PAYPAL.analytics.Analytics({request:{data:e.data||{},keys:{version:"v",timestamp:"t",gmtOffset:"g",eventType:"e"},values:{eventType:"na",true:1,false:0},keyPrefix:"",url:window.fptiserverurl,onBeaconCreate:t,onBeaconDestroy:t}});return e.data&&(window.fpti=n.queryStringToObject(e.data)),e.trackImpression&&("complete"===document.readyState?r.recordImpression():n.addListener(window,"load",function(){r.recordImpression()})),"object"==typeof e.customClicks&&r.trackClicks({elements:e.customClicks.elements,onClick:function(t){var i=t.currentTarget||t.srcElement,r=n.getTargetAttr(i),s=a(r);return{data:{link:e.customClicks.linkName?e.customClicks.linkName:r,exit:e.customClicks.exitClick?1:0,pglk:s.pglk,pgln:s.pgln}}},request:{unloadDelay:i,keys:{linkUrl:"lu"},values:{eventType:"cl"}}}),e.trackPPClicks&&r.trackClicks({elements:"*[data-pa-click]",onClick:function(t){var e=t.currentTarget||t.srcElement,i=n.getTargetAttr(e,"data-pa-click"),r=a(i);return{data:{link:i,pglk:r.pglk,pgln:r.pgln}}},request:{unloadDelay:i,keys:{linkUrl:"lu"},values:{eventType:"cl"}}}),e.trackPPExitClicks&&r.trackClicks({elements:"*[data-pa-exit]",onClick:function(t){var e=t.currentTarget||t.srcElement,i=n.getTargetAttr(e,"data-pa-exit"),s=a(i);return{data:{link:i,exit:r.options.request.values.true,pglk:s.pglk,pgln:s.pgln}}},request:{unloadDelay:i,keys:{linkUrl:"lu"},values:{eventType:"cl"}}}),e.trackFormFocus&&r.trackFormFocus("*[data-pa-focus], "+n.wrapSelectors("textarea, input[type=text]",e.wrappingElement)),e.trackPPDownloadClicks&&r.trackClicks({elements:"*[data-pa-download], "+n.wrapSelectors('*[href*=".zip"], *[href*=".wav"], *[href*=".mov"], *[href*=".mpg"], *[href*=".avi"], *[href*=".wmv"], *[href*=".doc"], *[href*=".docx"], *[href*=".pdf"], *[href*=".xls"], *[href*=".xlsx"], *[href*=".ppt"], *[href*=".pptx"], *[href*=".txt"], *[href*=".csv"], *[href*=".psd"], *[href*=".tar"]',e.wrappingElement),onClick:function(t){var e=t.currentTarget||t.srcElement,i=n.getTargetAttr(e,"data-pa-download"),s=a(i);return{data:{link:i,dwnl:r.options.request.values.true,pglk:s.pglk,pgln:s.pgln}}},request:{unloadDelay:i,keys:{linkUrl:"lu"},values:{eventType:"cl"}}}),e.trackPPLegacyClicks&&r.trackClicks({elements:'*[class*="scTrack"]',onClick:function(t){for(var e=t.currentTarget||t.srcElement,i=n.getTargetAttr(e),r=a(i),s=e.className.split(" "),o=0;o<s.length;o++){var c=s[o].split(":");"scTrack"===c[0]&&c.length>1&&(c.shift(),i=c.join(":"))}return{data:{link:i,pglk:r.pglk,pgln:r.pgln}}},request:{unloadDelay:i,keys:{linkUrl:"lu"},values:{eventType:"cl"}}}),e.trackPPLegacyExitClicks&&r.trackClicks({elements:'*[class*="scExit"]',onClick:function(t){for(var e=t.currentTarget||t.srcElement,i=n.getTargetAttr(e),s=a(i),o=e.className.split(" "),c=0;c<o.length;c++){var l=o[c].split(":");"scExit"===l[0]&&l.length>1&&(l.shift(),i=l.join(":"))}return{data:{link:i,exit:r.options.request.values.true,pglk:s.pglk,pgln:s.pgln}}},request:{unloadDelay:i,keys:{linkUrl:"lu"},values:{eventType:"cl"}}}),e.trackPPClickThrough&&r.trackClicks({elements:n.wrapSelectors("a, button, input[type=submit], input[type=button], input[type=image]",e.wrappingElement),onClick:function(t){var e=t.currentTarget||t.srcElement,a=e.getAttribute("data-pa-click")||e.getAttribute("data-pa-exit")||e.getAttribute("data-pa-download");if(!a)for(var i=e.className.split(" "),s=0;s<i.length;s++){var o=i[s].split(":");("scTrack"===o[0]||"scExit"===o[0])&&o.length>1&&(o.shift(),a=o.join(":"))}a||(a=n.getTargetAttr(e));var c=r.getRequestData("pgrp")||"",l=encodeURIComponent(c+"|"+a);return n.setCookie("tcs",l),!1}}),e.trackFormAbandonment&&r.trackFormAbandonment({elements:n.wrapSelectors("form",e.wrappingElement),request:{unloadDelay:i,keys:{lastFormFocused:"lf",lastInputFocused:"li"},values:{eventType:"fa"}}}),PAYPAL.analytics.instance=r};var r="perf_cpl_fpti";PAYPAL.analytics.saveSessionData=function(t,a){if(e)try{e.setItem(t,JSON.stringify(a))}catch(t){}},PAYPAL.analytics.removeSessionData=function(t){if(e)try{e.removeItem(t)}catch(t){}},PAYPAL.analytics.getSessionData=function(t){if(e)try{var a=e.getItem(t);return a?JSON.parse(a):null}catch(t){return null}},PAYPAL.analytics.autoStartCPLTracking=function(){var t=PAYPAL.analytics.getSessionData(r);t||(t={},t.res={},t.t10=a.timing.requestStart<a.timing.navigationStart?0:a.timing.requestStart-a.timing.navigationStart),PAYPAL.analytics.removeSessionData(r),PAYPAL.analytics.startCPLTrackingInternal(t)},PAYPAL.analytics.aggregateSummaryPerfData=function(t,e){"undefined"!=typeof e&&(t.t9+=e.t9,e.t12>t.t12&&(t.t12=e.t12),t.t13+=e.t13,t.cnt+=e.cnt)},PAYPAL.analytics.aggregateResumedPerfData=function(t,e){if("undefined"!=typeof e){if("undefined"==typeof t)return void(t=e);"undefined"==typeof t.css?t.css=e.css:PAYPAL.analytics.aggregateSummaryPerfData(t.css,e.css),"undefined"==typeof t.link?t.link=e.link:PAYPAL.analytics.aggregateSummaryPerfData(t.link,e.link),"undefined"==typeof t.script?t.script=e.script:PAYPAL.analytics.aggregateSummaryPerfData(t.script,e.script),"undefined"==typeof t.img?t.img=e.img:PAYPAL.analytics.aggregateSummaryPerfData(t.img,e.img),"undefined"==typeof t.scr?t.scr=e.scr:PAYPAL.analytics.aggregateSummaryPerfData(t.scr,e.scr),"undefined"==typeof t.othr?t.othr=e.othr:PAYPAL.analytics.aggregateSummaryPerfData(t.othr,e.othr),"undefined"==typeof t.sxhr?t.sxhr=e.sxhr:PAYPAL.analytics.aggregateSummaryPerfData(t.sxhr,e.sxhr),e.xhr&&("undefined"==typeof t.xhr?t.xhr=e.xhr.slice(0):t.xhr=e.xhr.concat(t.xhr))}},PAYPAL.analytics.setCPLDataInternal=function(t){if(t=t||{},!PAYPAL.analytics.cpl||!PAYPAL.analytics.cpl.started)throw new Error("Have you called PAYPAL.analytics.startCPLTracking()?");Array.isArray(t)&&t.forEach(function(t){if("pgrp"===t.resourceName)Array.isArray(t.values)&&t.values.forEach(function(t){t.key&&t.value&&(PAYPAL.analytics.cpl.cplData.pgrpData[t.key]=t.value)});else{var e=PAYPAL.analytics.cpl.cplData.resourceData[t.resourceName];e||(e={},PAYPAL.analytics.cpl.cplData.resourceData[t.resourceName]=e),Array.isArray(t.values)&&t.values.forEach(function(t){t.key&&t.value&&(e[t.key]=t.value)})}})},PAYPAL.analytics.getXhrName=function(t){var e=document.createElement("a");return e.href=t,e.noSlashPath=e.pathname.replace(/\/*$/,""),e.pathArr=e.noSlashPath.split("/"),e.hostname.indexOf("paypal.com")===-1?e.pathArr.join("").length?e.hostname+"/.../"+e.pathArr.pop():e.hostname:e.pathArr.join("").length?e.pathArr.slice(-2).join("/"):"/"},PAYPAL.analytics.roundPerfTimers=function(t){return"undefined"!=typeof t?t===parseInt(t,10)?t:parseFloat(t.toFixed(1).replace(/\.?0+$/,"")):-1},PAYPAL.analytics.captureResourceTiming=function(t){var e={css:{startTimes:[],responseEnds:[],t9:0,t12:0,t13:0,cnt:0},scr:{startTimes:[],responseEnds:[],t9:0,t12:0,t13:0,cnt:0},img:{startTimes:[],responseEnds:[],t9:0,t12:0,t13:0,cnt:0},othr:{startTimes:[],responseEnds:[],t9:0,t12:0,t13:0,cnt:0},sxhr:{startTimes:[],responseEnds:[],t9:0,t12:0,t13:0,cnt:0},xhr:[]};t=t||{};var n=t.startIndex&&0!==t.startIndex?a.getEntries().slice(t.startIndex-1):a.getEntries();n.forEach(function(a,n){"link"===a.initiatorType?(e.css.startTimes.push(a.startTime),e.css.responseEnds.push(a.responseEnd),a.redirectStart>0&&(e.css.t13+=a.redirectEnd-a.redirectStart),a.duration>e.css.t12&&(e.css.t12=a.duration),e.css.cnt++):"script"===a.initiatorType?(e.scr.startTimes.push(a.startTime),e.scr.responseEnds.push(a.responseEnd),a.redirectStart>0&&(e.scr.t13+=a.redirectEnd-a.redirectStart),a.duration>e.scr.t12&&(e.scr.t12=a.duration),e.scr.cnt++):"img"===a.initiatorType?(e.img.startTimes.push(a.startTime),e.img.responseEnds.push(a.responseEnd),a.redirectStart>0&&(e.img.t13+=a.redirectEnd-a.redirectStart),a.duration>e.img.t12&&(e.img.t12=a.duration),e.img.cnt++):a.initiatorType&&"other"!==a.initiatorType?"xmlhttprequest"===a.initiatorType&&(e.sxhr.startTimes.push(a.startTime),e.sxhr.responseEnds.push(a.responseEnd),a.redirectStart>0&&(e.sxhr.t13+=a.redirectEnd-a.redirectStart),a.duration>e.sxhr.t12&&(e.sxhr.t12=a.duration),e.sxhr.cnt++,e.xhr.push({nm:t.returnLongName?a.name:PAYPAL.analytics.getXhrName(a.name),t4:PAYPAL.analytics.roundPerfTimers(a.connectStart),t5:PAYPAL.analytics.roundPerfTimers(a.secureConnectionStart),t6:PAYPAL.analytics.roundPerfTimers(a.connectEnd),t7:PAYPAL.analytics.roundPerfTimers(a.domainLookupStart),t8:PAYPAL.analytics.roundPerfTimers(a.domainLookupEnd),t9:PAYPAL.analytics.roundPerfTimers(a.duration),ta:PAYPAL.analytics.roundPerfTimers(a.fetchStart),tb:PAYPAL.analytics.roundPerfTimers(a.redirectStart),tc:PAYPAL.analytics.roundPerfTimers(a.redirectEnd),td:PAYPAL.analytics.roundPerfTimers(a.requestStart),te:PAYPAL.analytics.roundPerfTimers(a.responseStart),tf:PAYPAL.analytics.roundPerfTimers(a.responseEnd),t10:PAYPAL.analytics.roundPerfTimers(a.startTime)})):(e.othr.startTimes.push(a.startTime),e.othr.responseEnds.push(a.responseEnd),a.redirectStart>0&&(e.othr.t13+=a.redirectEnd-a.redirectStart),a.duration>e.othr.t12&&(e.othr.t12=a.duration),e.othr.cnt++)}),e.css.t9=Math.max.apply(null,e.css.responseEnds)-Math.min.apply(null,e.css.startTimes),e.scr.t9=Math.max.apply(null,e.scr.responseEnds)-Math.min.apply(null,e.scr.startTimes),e.img.t9=Math.max.apply(null,e.img.responseEnds)-Math.min.apply(null,e.img.startTimes),e.othr.t9=Math.max.apply(null,e.othr.responseEnds)-Math.min.apply(null,e.othr.startTimes),e.sxhr.t9=Math.max.apply(null,e.sxhr.responseEnds)-Math.min.apply(null,e.sxhr.startTimes);for(var i in e)if(delete e[i].startTimes,delete e[i].responseEnds,"xhr"!==i){for(var r in e[i])e[i][r]=PAYPAL.analytics.roundPerfTimers(e[i][r]);e[i].cnt||delete e[i]}else e[i].length||delete e[i];return e},PAYPAL.analytics.setCPLData=function(){if(n){if(!PAYPAL.analytics.cpl||!PAYPAL.analytics.cpl.started)throw new Error("Have you called PAYPAL.analytics.startCPLTracking()?");if(2===arguments.length)PAYPAL.analytics.cpl.cplData.pgrpData[arguments[0]]=arguments[1];else if(3===arguments.length){var t=PAYPAL.analytics.cpl.cplData.resourceData[arguments[0]];t?t[arguments[1]]=arguments[2]:(t={},t[arguments[1]]=arguments[2],PAYPAL.analytics.cpl.cplData.resourceData[arguments[0]]=t)}else{if(1!==arguments.length)throw new Error("Invalid argument");PAYPAL.analytics.setCPLDataInternal(arguments[0])}}},PAYPAL.analytics.startCPLTrackingInternal=function(t){n&&(t=t||{},PAYPAL.analytics.cpl={},PAYPAL.analytics.cpl.started=!0,PAYPAL.analytics.cpl.beaconData={},t.flid&&(PAYPAL.analytics.cpl.beaconData.flid=t.flid),PAYPAL.analytics.cpl.beaconData.page=t.page||window.fpti.page,PAYPAL.analytics.cpl.beaconData.pgrp=t.pgrp||window.fpti.pgrp,PAYPAL.analytics.cpl.beaconData.view={t10:PAYPAL.analytics.roundPerfTimers(t.t10)},PAYPAL.analytics.cpl.cplData={resourceStartIndex:0,pgrpData:{},resourceData:{},resumedResData:t.res})},PAYPAL.analytics.resumeCPLTracking=function(){if(n){var t={};t.flid=PAYPAL.analytics.cpl.beaconData.flid,t.page=PAYPAL.analytics.cpl.beaconData.page,t.pgrp=PAYPAL.analytics.cpl.beaconData.pgrp,t.t10=PAYPAL.analytics.cpl.beaconData.view.t10,t.res=PAYPAL.analytics.buildResourcePerfData(),PAYPAL.analytics.cpl={},PAYPAL.analytics.saveSessionData(r,t)}},PAYPAL.analytics.startCPLTracking=function(t){n&&(PAYPAL.analytics.removeSessionData(r),t=t||{},PAYPAL.analytics.cpl={},PAYPAL.analytics.cpl.started=!0,PAYPAL.analytics.cpl.beaconData={},t.flid&&(PAYPAL.analytics.cpl.beaconData.flid=t.flid),PAYPAL.analytics.cpl.beaconData.page=t.page||window.fpti.page,PAYPAL.analytics.cpl.beaconData.pgrp=t.pgrp||window.fpti.pgrp,PAYPAL.analytics.cpl.beaconData.view={t10:PAYPAL.analytics.roundPerfTimers(a.now())},PAYPAL.analytics.cpl.cplData={resourceStartIndex:a.getEntries().length,pgrpData:{},resourceData:{},resumedResData:{}})},PAYPAL.analytics.buildResourcePerfData=function(){var t=PAYPAL.analytics.captureResourceTiming({startIndex:PAYPAL.analytics.cpl.cplData.resourceStartIndex,returnLongName:!0});for(var e in PAYPAL.analytics.cpl.cplData.pgrpData)PAYPAL.analytics.cpl.cplData.pgrpData.hasOwnProperty(e)&&(PAYPAL.analytics.cpl.beaconData[e]=PAYPAL.analytics.cpl.cplData.pgrpData[e]);if(Array.isArray(t.xhr))for(var a in PAYPAL.analytics.cpl.cplData.resourceData)PAYPAL.analytics.cpl.cplData.resourceData.hasOwnProperty(a)&&t.xhr.forEach(function(t){
if(t.nm.match(a)){var e=PAYPAL.analytics.cpl.cplData.resourceData[a];for(var n in e)e.hasOwnProperty(n)&&(t[n]=e[n])}});return Array.isArray(t.xhr)&&t.xhr.forEach(function(t){t.nm=PAYPAL.analytics.getXhrName(t.nm)}),t},PAYPAL.analytics.endCPLTracking=function(t){if("object"==typeof t&&t.pageData&&(PAYPAL.analytics.Analytics.prototype.utils.setDefaultsOptions(t.pageData,window.fpti),t.inferStart||PAYPAL.analytics.Analytics.prototype.utils.setDefaultsOptions(t.pageData,PAYPAL.analytics.cpl.beaconData)),n){if("object"==typeof t&&t.inferStart&&(PAYPAL.analytics.autoStartCPLTracking(),t.pageData&&PAYPAL.analytics.Analytics.prototype.utils.setDefaultsOptions(t.pageData,PAYPAL.analytics.cpl.beaconData)),PAYPAL.analytics.removeSessionData(r),!PAYPAL.analytics.cpl||!PAYPAL.analytics.cpl.started)throw new Error("Have you called PAYPAL.analytics.startCPLTracking()?");"object"==typeof t&&t.cplData&&PAYPAL.analytics.setCPLDataInternal(t.cplData),PAYPAL.analytics.cpl.beaconData.view.t11=PAYPAL.analytics.roundPerfTimers(a.now()),PAYPAL.analytics.cpl.beaconData.res=PAYPAL.analytics.buildResourcePerfData(),PAYPAL.analytics.aggregateResumedPerfData(PAYPAL.analytics.cpl.beaconData.res,PAYPAL.analytics.cpl.cplData.resumedResData),PAYPAL.analytics.cpl.beaconData.view=JSON.stringify(PAYPAL.analytics.cpl.beaconData.view),PAYPAL.analytics.cpl.beaconData.res=JSON.stringify(PAYPAL.analytics.cpl.beaconData.res),PAYPAL.analytics.Analytics.prototype.utils.setDefaultsOptions(PAYPAL.analytics.cpl.beaconData,window.fpti),PAYPAL.analytics.Analytics.prototype.recordImpression(),PAYPAL.analytics.cpl.started=!1}else PAYPAL.analytics.Analytics.prototype.recordImpression()}}();
//# sourceMappingURL=dist/pa.min.js.map