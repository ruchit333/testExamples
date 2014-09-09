//===============================
// Kayako LiveResponse
// Copyright (c) 2001-2014
// http://www.kayako.com
// License: http://www.kayako.com/license.txt
//===============================

var sessionid_gc5bn06p = "x582o37i6xsp73c8l93sp3fmbllxo3jd";
var country_gc5bn06p = "India";
var countrycode_gc5bn06p = "in";
var hasnotes_gc5bn06p = "";
var campaignid_gc5bn06p = "";
var campaigntitle_gc5bn06p = "";
var isfirsttime_gc5bn06p = 1;
var timer_gc5bn06p = 0;
var imagefetch_gc5bn06p = 19;
var updateurl_gc5bn06p = "";
var screenHeight = window.screen.availHeight;
var screenWidth = window.screen.availWidth;
var colorDepth = window.screen.colorDepth;
var timeNow = new Date();
var referrer = escape(document.referrer);
var windows, mac, linux;
var ie, op, moz, misc, browsercode, browsername, browserversion, operatingsys;
var dom, ienew, ie4, ie5, ie6, moz_rv, moz_rv_sub, ie5mac, ie5xwin, opnu, op4, op5, op6, op7, saf, konq;
var appName, appVersion, userAgent;
var appname = navigator.appName;
var appVersion = navigator.appVersion;
var userAgent = navigator.userAgent;
var dombrowser = "default";
var isChatRunning_gc5bn06p = 0;
var title = document.title;
var proactiveImageUse_gc5bn06p = new Image();
windows = (appVersion.indexOf('Win') != -1);
mac = (appVersion.indexOf('Mac') != -1);
linux = (appVersion.indexOf('Linux') != -1);
if (!document.layers) {
	dom = (document.getElementById ) ? document.getElementById : false;
} else {
	dom = false;
}
  var myWidth = 0, myHeight = 0;
  if( typeof( window.innerWidth ) == 'number' ) {
    //Non-IE
    myWidth = window.innerWidth;
    myHeight = window.innerHeight;
  } else if( document.documentElement &&
      ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
    //IE 6+ in 'standards compliant mode'
    myWidth = document.documentElement.clientWidth;
    myHeight = document.documentElement.clientHeight;
  } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
    //IE 4 compatible
    myWidth = document.body.clientWidth;
    myHeight = document.body.clientHeight;
  }
winH = myHeight;
winW = myWidth;
misc=(appVersion.substring(0,1) < 4);
op=(userAgent.indexOf('Opera') != -1);
moz=(userAgent.indexOf('Gecko') != -1);
ie=(document.all && !op);
saf=(userAgent.indexOf('Safari') != -1);
konq=(userAgent.indexOf('Konqueror') != -1);

if (op) {
	op_pos = userAgent.indexOf('Opera');
	opnu = userAgent.substr((op_pos+6),4);
	op5 = (opnu.substring(0,1) == 5);
	op6 = (opnu.substring(0,1) == 6);
	op7 = (opnu.substring(0,1) == 7);
} else if (moz){
	rv_pos = userAgent.indexOf('rv');
	moz_rv = userAgent.substr((rv_pos+3),3);
	moz_rv_sub = userAgent.substr((rv_pos+7),1);
	if (moz_rv_sub == ' ' || isNaN(moz_rv_sub)) {
		moz_rv_sub='';
	}
	moz_rv = moz_rv + moz_rv_sub;
} else if (ie){
	ie_pos = userAgent.indexOf('MSIE');
	ienu = userAgent.substr((ie_pos+5),3);
	ie4 = (!dom);
	ie5 = (ienu.substring(0,1) == 5);
	ie6 = (ienu.substring(0,1) == 6);
}

if (konq) {
	browsercode = "KO";
	browserversion = appVersion;
	browsername = "Konqueror";
} else if (saf) {
	browsercode = "SF";
	browserversion = appVersion;
	browsername = "Safari";
} else if (op) {
	browsercode = "OP";
	if (op5) {
		browserversion = "5";
	} else if (op6) {
		browserversion = "6";
	} else if (op7) {
		browserversion = "7";
	} else {
		browserversion = appVersion;
	}
	browsername = "Opera";
} else if (moz) {
	browsercode = "MO";
	browserversion = appVersion;
	browsername = "Mozilla";
} else if (ie) {
	browsercode = "IE";
	if (ie4) {
		browserversion = "4";
	} else if (ie5) {
		browserversion = "5";
	} else if (ie6) {
		browserversion = "6";
	} else {
		browserversion = appVersion;
	}
	browsername = "Internet Explorer";
}

if (windows) {
	operatingsys = "Windows";
} else if (linux) {
	operatingsys = "Linux";
} else if (mac) {
	operatingsys = "Mac";
} else {
	operatingsys = "Unkown";
}

if (document.getElementById)
{
	dombrowser = "default";
} else if (document.layers) {
	dombrowser = "NS4";
} else if (document.all) {
	dombrowser = "IE4";
}

function browserObject_gc5bn06p(objid)
{
	if (dombrowser == "default")
	{
		return document.getElementById(objid);
	} else if (dombrowser == "NS4") {
		return document.layers[objid];
	} else if (dombrowser == "IE4") {
		return document.all[objid];
	}
}

function doRand_gc5bn06p()
{
	var num;
	now=new Date();
	num=(now.getSeconds());
	num=num+1;
	return num;
}

function getCookie_gc5bn06p(name) {
	var crumb = document.cookie;
	var index = crumb.indexOf(name + "=");
	if (index == -1) return null;
	index = crumb.indexOf("=", index) + 1;
	var endstr = crumb.indexOf(";", index);
	if (endstr == -1) endstr = crumb.length;
	return unescape(crumb.substring(index, endstr));
}

function deleteCookie_gc5bn06p(name) {
	var expiry = new Date();
	document.cookie = name + "=" + "; expires=Thu, 01-Jan-70 00:00:01 GMT" +  "; path=/";
}

function elapsedTime_gc5bn06p()
{
	if (timer_gc5bn06p < 3600)
	{
		timer_gc5bn06p++;
		imagefetch_gc5bn06p++;

		if (imagefetch_gc5bn06p > 20) {
			imagefetch_gc5bn06p = 0;
			doStatusLoop_gc5bn06p();
		}

		setTimeout("elapsedTime_gc5bn06p();", 1000);
	}
}

function doStatusLoop_gc5bn06p() {
	date1 = new Date();
	updateurl_gc5bn06p = "http://support.prepaymania.co.uk//visitor/index.php?_m=livesupport&_a=updatefootprint&time="+date1.getTime()+"&rand="+doRand_gc5bn06p()+"&url="+encodeURIComponent(window.location)+"&isfirsttime="+encodeURIComponent(isfirsttime_gc5bn06p)+"&sessionid="+encodeURIComponent(sessionid_gc5bn06p)+"&referrer="+encodeURIComponent(document.referrer)+"&resolution="+encodeURIComponent(screenWidth+"x"+screenHeight)+"&colordepth="+encodeURIComponent(colorDepth)+"&platform="+encodeURIComponent(navigator.platform)+"&appversion="+encodeURIComponent(navigator.appVersion)+"&appname="+encodeURIComponent(navigator.appName)+"&browsercode="+encodeURIComponent(browsercode)+"&browserversion="+encodeURIComponent(browserversion)+"&browsername="+encodeURIComponent(browsername)+"&operatingsys="+encodeURIComponent(operatingsys)+"&pagetitle="+encodeURIComponent(title)+"&country="+encodeURIComponent(country_gc5bn06p)+"&countrycode="+encodeURIComponent(countrycode_gc5bn06p)+"&hasnotes="+encodeURIComponent(hasnotes_gc5bn06p)+"&campaignid="+encodeURIComponent(campaignid_gc5bn06p)+"&campaigntitle="+encodeURIComponent(campaigntitle_gc5bn06p);
//	alert(updateurl);

	proactiveImageUse_gc5bn06p = new Image();
	proactiveImageUse_gc5bn06p.onload = imageLoaded_gc5bn06p;
	proactiveImageUse_gc5bn06p.src = updateurl_gc5bn06p;

//	window.location.href = updateurl_gc5bn06p;

	isfirsttime_gc5bn06p = 0;
}

function startChat_gc5bn06p(proactive)
{
	isChatRunning_gc5bn06p = 1;

	docWidth = (winW-500)/2;
	docHeight = (winH-480)/2;

	chatwindow = window.open("http://support.prepaymania.co.uk//visitor/index.php?_m=livesupport&_a=startclientchat&sessionid="+sessionid_gc5bn06p+"&proactive="+proactive+"&departmentid=0&randno="+doRand_gc5bn06p()+"&fullname=&email=","customerchat"+doRand_gc5bn06p(), "toolbar=0,location=0,directories=0,status=1,menubar=0,scrollbars=0,resizable=1,width=500,height=480,left="+docWidth+",top="+docHeight);

	hideProactiveChatData_gc5bn06p();
}

function imageLoaded_gc5bn06p() {
	if (!proactiveImageUse_gc5bn06p)
	{
		return;
	}
	proactiveAction = proactiveImageUse_gc5bn06p.width;

	if (proactiveAction == 3)
	{
		doProactiveForced_gc5bn06p();
	} else if (proactiveAction == 4) {
		displayProactiveChatData_gc5bn06p();
	} else {
	}
}

function writeProactiveRequestData_gc5bn06p()
{
	docWidth = (winW-450)/2;
	docHeight = (winH-400)/2;
	classData = "DISPLAY: none; FLOAT: left; POSITION: absolute; TOP:"+docHeight+"px; LEFT:"+docWidth+"px; WIDTH: 450px; HEIGHT: 400px; Z-INDEX: 500;";
	writedata = "<style type=\"text/css\"> <!-- #proactivechatdiv { "+classData+" } --> </style>";
	writedata += "<div id=\"proactivechatdiv\" style=\""+classData+"\">";
	writedata += "<table width=\"450\" height=\"200\"  border=\"0\" cellpadding=\"1\" cellspacing=\"0\">  <tr>    <td bgcolor=\"#3894E5\"><table width=\"450\" height=\"200\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">      <tr>        <td align=\"left\" valign=\"top\" bgcolor=\"#EDF4FF\"><table width=\"100%\"  border=\"0\" cellpadding=\"0\" cellspacing=\"0\">          <tr bgcolor=\"#FFFFFF\">            <td height=\"29\" colspan=\"2\" align=\"center\" valign=\"top\"><img src=\"http://support.prepaymania.co.uk//themes/client_default/supportsuite.gif\"></td>          </tr>          <tr align=\"center\" bgcolor=\"#3894E5\">            <td height=\"1\" colspan=\"2\" valign=\"top\"><img src=\"http://support.prepaymania.co.uk//themes/client_default/space.gif\" width=\"1\" height=\"1\"></td>          </tr>          <tr align=\"center\">            <td colspan=\"2\" valign=\"top\"><font size=\"2\" face=\"Verdana, Arial, Helvetica, sans-serif\"><br>              <br>              Need assistance? Click &quot;Chat Now&quot; to chat with a live agent.<br>              <br>              </font><br>              <br></td>          </tr>          <tr>            <td width=\"47%\" align=\"center\" valign=\"top\"><a href=\"javascript:doProactiveRequest_gc5bn06p();\"><font color=\"#FF3300\" size=\"4\" face=\"Trebuchet MS, Verdana, Arial, Helvetica, sans-serif\">Chat Now</font></a> </td>            <td width=\"53%\" align=\"center\" valign=\"top\"><a href=\"javascript:closeProactiveRequest_gc5bn06p();\"><font color=\"#6666FF\" size=\"4\" face=\"Trebuchet MS, Verdana, Arial, Helvetica, sans-serif\">No Thanks!</a></font></td>          </tr>        </table></td>      </tr>    </table></td>  </tr></table>";
	writedata += "</div>";
	document.write(writedata);
}

function displayProactiveChatData_gc5bn06p()
{
	writeObj = browserObject_gc5bn06p("proactivechatdiv");
	if (writeObj)
	{
		docWidth = (winW-450)/2;
		docHeight = (winH-400)/2;
		writeObj.top = docWidth;
		writeObj.left = docHeight;
	}
	switchDisplay_gc5bn06p("proactivechatdiv");
}

function hideProactiveChatData_gc5bn06p()
{
	hideDisplay_gc5bn06p("proactivechatdiv");
}

function doProactiveForced_gc5bn06p()
{
	switchDisplay_gc5bn06p("proactivechatdiv");
	startChat_gc5bn06p("6");
}

function doProactiveRequest_gc5bn06p()
{
	startChat_gc5bn06p("4");
}

function closeProactiveRequest_gc5bn06p()
{
	rejectProactive = new Image();
	date1 = new Date();
	rejectProactive.src = "http://support.prepaymania.co.uk//visitor/index.php?_m=livesupport&_a=resetproactivestatus&time="+date1.getTime()+"&rand="+doRand_gc5bn06p()+"&sessionid="+sessionid_gc5bn06p;

	hideProactiveChatData_gc5bn06p();
}

function switchDisplay_gc5bn06p(objid)
{
	result = browserObject_gc5bn06p(objid);
	if (!result)
	{
		return;
	}

	if (result.style.display == "none")
	{
		result.style.display = "block";
	} else {
		result.style.display = "none";
	}
}

function hideDisplay_gc5bn06p(objid)
{
	result = browserObject_gc5bn06p(objid);
	if (!result)
	{
		return;
	}

	result.style.display = "none";
}

function resetChatStatus_gc5bn06p()
{
	isChatRunning_gc5bn06p = 0;
}

function runURL_gc5bn06p(url)
{
	runURLImg = new Image();
	date1 = new Date();
	runURLImg.src = url;
}

writeProactiveRequestData_gc5bn06p();
elapsedTime_gc5bn06p();
document.write("<a href=\"javascript:startChat_gc5bn06p(\'0\');\" onMouseOver=\"window.status=\'Click here for Live Support\'; return true;\" onMouseOut=\"window.status=\'\'; return true;\"><img src=\"http://support.prepaymania.co.uk//themes/client_default/staffonline.gif\" border=\"0\" alt=\"Click here for Live Support\" title=\"Click here for Live Support\"></a>");
