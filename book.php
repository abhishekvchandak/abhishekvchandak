<?php
/*

require_once "recaptchalib.php";

$check_submission=0;

if(isset($_POST['submit_book']))
{ 
  // your secret key
  $secret = "6Lf1XxMTAAAAAG9OXkH5OqM4-0-YONrKm5gCNk3_";
  // empty response
  $response = null;
  // check secret key
  $reCaptcha = new ReCaptcha($secret);

  // if submitted check response
  if ($_POST["g-recaptcha-response"]) {
      $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
      );
  }

  if ($response != null && $response->success) {
    $sender_name  = $_POST['sender_name'];
    $sender_email  = $_POST['sender_email'];
    $sender_number  = $_POST['sender_number'];
    $pickup_address  = $_POST['pickup_address'];
    $receiver_name  = $_POST['receiver_name'];
    $receiver_number  = $_POST['receiver_number'];
    $receiver_email  = $_POST['receiver_email'];
    $delivery_address  = $_POST['delivery_address'];
    $type  = $_POST['type1'];
    $special_instructions  = $_POST['special1'];
    $address1 = $_POST['address1'];
    $address2 = $_POST['address2'];
    $size = $_POST['weight_option'];
    $delivery_charge = $_POST['delivery_charge'];
    
    

    require 'PHPMailer_5.2.4\class.phpmailer.php';
     
    $mail = new PHPMailer;

    $mail->IsSMTP();      
    $mail->SMTPDebug = 1;                                // Set mailer to use SMTP
    $mail->Host = 'smtpout.asia.secureserver.net';  // Specify main and backup server
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'care@simplydelivered.in';                            // SMTP username
    $mail->Password = 'Abhishek@0811';                           // SMTP password
    
    $mail->SetFrom('care@simplydelivered.in', 'Booking from Website'); // FROM
    
    $mail->AddAddress('care@simplydelivered.in','Booking');               // Name is optional
    $mail->Port = 25;

                                    // Set word wrap to 50 characters
    $mail->IsHTML(true);                                  // Set email format to HTML

    
    $mail->Body    = 'Sender\'s Name: '.$sender_name .'<br>Sender\'s Email: '.$sender_email.'<br>Sender\'s Number: '.$sender_number.'Receiver\'s Name: '.$Receiver_name .'<br>Receiver\'s Email: '.$receiver_email.'<br>Receiver\'s Number: '.$receiver_number.'<br>Type: '.$type1.'<br>Special Instruction: '.$special1.'<br>Delivery Charge: '.$delivery_charge.'<br>Pickup: '.$address1.'<br>Delivery: '.$address2.'<br>Size: '.$size;
    

    if(!$mail->Send()) {
       echo 'Message could not be sent.';
       echo 'Mailer Error: ' . $mail->ErrorInfo;
       exit;
    }
  
    //$username = 'fakhriwild@gmail.com';
    //$hash = 'a16577b2d6985d5f1f5fd3fd126657ed548f2f18';
    
    // Message details
    //$numbers = array(919108905901);
    //$sender = urlencode('TXTLCL');
    //$message = rawurlencode(''.$name1.'; '.$number1.'; '.$type1.'; SI '.$special1.'; Rs. '.$delivery_charge.'; S '.$address1.'; D '.$address2.'; W '.$weight_ceil);
   
      //$numbers = implode(',', $numbers);
    //$test=0;
    // Prepare data for POST request
    //$data = array('username' => $username, 'hash' => $hash, 'numbers' => $numbers, "sender" => $sender, "message" => $message,"test"=>$test);
   
    // Send the POST request with cURL
    //$ch = curl_init('http://api.textlocal.in/send/');
    //curl_setopt($ch, CURLOPT_POST, true);
    //curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    //curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    //$response = curl_exec($ch);
    //curl_close($ch);
      
    $receiver_name= str_replace(' ', '_', $receiver_name);
    $receiver_number= str_replace(' ', '_', $receiver_number);
    $receiver_email= str_replace(' ', '_', $receiver_email);
    $pickup_address= str_replace(' ', '_', $pickup_address);

    $sender_name= str_replace(' ', '_', $sender_name);
    $sender_number= str_replace(' ', '_', $sender_number);
    $sender_email= str_replace(' ', '_', $sender_email);
    $delivery_address= str_replace(' ', '_', $delivery_address);

    $special1 = str_replace(' ', '_',$special1);
    $mode1 = str_replace(' ', '_', $mode1);
    $address1 = str_replace(' ', '_', $address1);
    $address2 = str_replace(' ', '_', $address2);
    $size = str_replace(' ', '_', $size);
    $delivery_charge = str_replace(' ', '_', $delivery_charge);

    $message = ''.$name1.';'.$number1.';'.$type1.';SI:'.$special1.';Rs.'.$delivery_charge.';S:'.$address1.';D:'.$address2.';W:'.$weight_ceil;
    $url = "http://hp.bulksms1.com/sms/user/urlsms.php?username=HP1262&pass=htY6*ES&senderid=060000&message=".$message."&dest_mobileno=919108905901&response=Y"; 
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $curl_scraped_page = curl_exec($ch); 
    curl_close($ch); 
    //echo $curl_scraped_page;

    


     $check_submission = 1;
  }

  else {
    $check_submission = 2;
  }
*/
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>By The Box</title>

	<!-- CSS -->
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/font-awesome.min.css" rel="stylesheet" media="screen">
	<link href="assets/css/font-awesome.css" rel="stylesheet" media="screen">
	<link href="assets/css/simple-line-icons.css" rel="stylesheet" media="screen">
	<link href="assets/css/animate.css" rel="stylesheet">    
	<link rel="shortcut icon" type="image/png" href="">
	<!-- Custom styles CSS -->
	<link href="assets/css/style.css" rel="stylesheet" media="screen">
    
    <script type="text/javascript">
    	/* Modernizr 2.6.2 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-csstransitions-shiv-cssclasses-testprop-testallprops-domprefixes-load
 */
		;window.Modernizr=function(a,b,c){function x(a){j.cssText=a}function y(a,b){return x(prefixes.join(a+";")+(b||""))}function z(a,b){return typeof a===b}function A(a,b){return!!~(""+a).indexOf(b)}function B(a,b){for(var d in a){var e=a[d];if(!A(e,"-")&&j[e]!==c)return b=="pfx"?e:!0}return!1}function C(a,b,d){for(var e in a){var f=b[a[e]];if(f!==c)return d===!1?a[e]:z(f,"function")?f.bind(d||b):f}return!1}function D(a,b,c){var d=a.charAt(0).toUpperCase()+a.slice(1),e=(a+" "+n.join(d+" ")+d).split(" ");return z(b,"string")||z(b,"undefined")?B(e,b):(e=(a+" "+o.join(d+" ")+d).split(" "),C(e,b,c))}var d="2.6.2",e={},f=!0,g=b.documentElement,h="modernizr",i=b.createElement(h),j=i.style,k,l={}.toString,m="Webkit Moz O ms",n=m.split(" "),o=m.toLowerCase().split(" "),p={},q={},r={},s=[],t=s.slice,u,v={}.hasOwnProperty,w;!z(v,"undefined")&&!z(v.call,"undefined")?w=function(a,b){return v.call(a,b)}:w=function(a,b){return b in a&&z(a.constructor.prototype[b],"undefined")},Function.prototype.bind||(Function.prototype.bind=function(b){var c=this;if(typeof c!="function")throw new TypeError;var d=t.call(arguments,1),e=function(){if(this instanceof e){var a=function(){};a.prototype=c.prototype;var f=new a,g=c.apply(f,d.concat(t.call(arguments)));return Object(g)===g?g:f}return c.apply(b,d.concat(t.call(arguments)))};return e}),p.csstransitions=function(){return D("transition")};for(var E in p)w(p,E)&&(u=E.toLowerCase(),e[u]=p[E](),s.push((e[u]?"":"no-")+u));return e.addTest=function(a,b){if(typeof a=="object")for(var d in a)w(a,d)&&e.addTest(d,a[d]);else{a=a.toLowerCase();if(e[a]!==c)return e;b=typeof b=="function"?b():b,typeof f!="undefined"&&f&&(g.className+=" "+(b?"":"no-")+a),e[a]=b}return e},x(""),i=k=null,function(a,b){function k(a,b){var c=a.createElement("p"),d=a.getElementsByTagName("head")[0]||a.documentElement;return c.innerHTML="x<style>"+b+"</style>",d.insertBefore(c.lastChild,d.firstChild)}function l(){var a=r.elements;return typeof a=="string"?a.split(" "):a}function m(a){var b=i[a[g]];return b||(b={},h++,a[g]=h,i[h]=b),b}function n(a,c,f){c||(c=b);if(j)return c.createElement(a);f||(f=m(c));var g;return f.cache[a]?g=f.cache[a].cloneNode():e.test(a)?g=(f.cache[a]=f.createElem(a)).cloneNode():g=f.createElem(a),g.canHaveChildren&&!d.test(a)?f.frag.appendChild(g):g}function o(a,c){a||(a=b);if(j)return a.createDocumentFragment();c=c||m(a);var d=c.frag.cloneNode(),e=0,f=l(),g=f.length;for(;e<g;e++)d.createElement(f[e]);return d}function p(a,b){b.cache||(b.cache={},b.createElem=a.createElement,b.createFrag=a.createDocumentFragment,b.frag=b.createFrag()),a.createElement=function(c){return r.shivMethods?n(c,a,b):b.createElem(c)},a.createDocumentFragment=Function("h,f","return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&("+l().join().replace(/\w+/g,function(a){return b.createElem(a),b.frag.createElement(a),'c("'+a+'")'})+");return n}")(r,b.frag)}function q(a){a||(a=b);var c=m(a);return r.shivCSS&&!f&&!c.hasCSS&&(c.hasCSS=!!k(a,"article,aside,figcaption,figure,footer,header,hgroup,nav,section{display:block}mark{background:#FF0;color:#000}")),j||p(a,c),a}var c=a.html5||{},d=/^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,e=/^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,f,g="_html5shiv",h=0,i={},j;(function(){try{var a=b.createElement("a");a.innerHTML="<xyz></xyz>",f="hidden"in a,j=a.childNodes.length==1||function(){b.createElement("a");var a=b.createDocumentFragment();return typeof a.cloneNode=="undefined"||typeof a.createDocumentFragment=="undefined"||typeof a.createElement=="undefined"}()}catch(c){f=!0,j=!0}})();var r={elements:c.elements||"abbr article aside audio bdi canvas data datalist details figcaption figure footer header hgroup mark meter nav output progress section summary time video",shivCSS:c.shivCSS!==!1,supportsUnknownElements:j,shivMethods:c.shivMethods!==!1,type:"default",shivDocument:q,createElement:n,createDocumentFragment:o};a.html5=r,q(b)}(this,b),e._version=d,e._domPrefixes=o,e._cssomPrefixes=n,e.testProp=function(a){return B([a])},e.testAllProps=D,g.className=g.className.replace(/(^|\s)no-js(\s|$)/,"$1$2")+(f?" js "+s.join(" "):""),e}(this,this.document),function(a,b,c){function d(a){return"[object Function]"==o.call(a)}function e(a){return"string"==typeof a}function f(){}function g(a){return!a||"loaded"==a||"complete"==a||"uninitialized"==a}function h(){var a=p.shift();q=1,a?a.t?m(function(){("c"==a.t?B.injectCss:B.injectJs)(a.s,0,a.a,a.x,a.e,1)},0):(a(),h()):q=0}function i(a,c,d,e,f,i,j){function k(b){if(!o&&g(l.readyState)&&(u.r=o=1,!q&&h(),l.onload=l.onreadystatechange=null,b)){"img"!=a&&m(function(){t.removeChild(l)},50);for(var d in y[c])y[c].hasOwnProperty(d)&&y[c][d].onload()}}var j=j||B.errorTimeout,l=b.createElement(a),o=0,r=0,u={t:d,s:c,e:f,a:i,x:j};1===y[c]&&(r=1,y[c]=[]),"object"==a?l.data=c:(l.src=c,l.type=a),l.width=l.height="0",l.onerror=l.onload=l.onreadystatechange=function(){k.call(this,r)},p.splice(e,0,u),"img"!=a&&(r||2===y[c]?(t.insertBefore(l,s?null:n),m(k,j)):y[c].push(l))}function j(a,b,c,d,f){return q=0,b=b||"j",e(a)?i("c"==b?v:u,a,b,this.i++,c,d,f):(p.splice(this.i++,0,a),1==p.length&&h()),this}function k(){var a=B;return a.loader={load:j,i:0},a}var l=b.documentElement,m=a.setTimeout,n=b.getElementsByTagName("script")[0],o={}.toString,p=[],q=0,r="MozAppearance"in l.style,s=r&&!!b.createRange().compareNode,t=s?l:n.parentNode,l=a.opera&&"[object Opera]"==o.call(a.opera),l=!!b.attachEvent&&!l,u=r?"object":l?"script":"img",v=l?"script":u,w=Array.isArray||function(a){return"[object Array]"==o.call(a)},x=[],y={},z={timeout:function(a,b){return b.length&&(a.timeout=b[0]),a}},A,B;B=function(a){function b(a){var a=a.split("!"),b=x.length,c=a.pop(),d=a.length,c={url:c,origUrl:c,prefixes:a},e,f,g;for(f=0;f<d;f++)g=a[f].split("="),(e=z[g.shift()])&&(c=e(c,g));for(f=0;f<b;f++)c=x[f](c);return c}function g(a,e,f,g,h){var i=b(a),j=i.autoCallback;i.url.split(".").pop().split("?").shift(),i.bypass||(e&&(e=d(e)?e:e[a]||e[g]||e[a.split("/").pop().split("?")[0]]),i.instead?i.instead(a,e,f,g,h):(y[i.url]?i.noexec=!0:y[i.url]=1,f.load(i.url,i.forceCSS||!i.forceJS&&"css"==i.url.split(".").pop().split("?").shift()?"c":c,i.noexec,i.attrs,i.timeout),(d(e)||d(j))&&f.load(function(){k(),e&&e(i.origUrl,h,g),j&&j(i.origUrl,h,g),y[i.url]=2})))}function h(a,b){function c(a,c){if(a){if(e(a))c||(j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}),g(a,j,b,0,h);else if(Object(a)===a)for(n in m=function(){var b=0,c;for(c in a)a.hasOwnProperty(c)&&b++;return b}(),a)a.hasOwnProperty(n)&&(!c&&!--m&&(d(j)?j=function(){var a=[].slice.call(arguments);k.apply(this,a),l()}:j[n]=function(a){return function(){var b=[].slice.call(arguments);a&&a.apply(this,b),l()}}(k[n])),g(a[n],j,b,n,h))}else!c&&l()}var h=!!a.test,i=a.load||a.both,j=a.callback||f,k=j,l=a.complete||f,m,n;c(h?a.yep:a.nope,!!i),i&&c(i)}var i,j,l=this.yepnope.loader;if(e(a))g(a,0,l,0);else if(w(a))for(i=0;i<a.length;i++)j=a[i],e(j)?g(j,0,l,0):w(j)?B(j):Object(j)===j&&h(j,l);else Object(a)===a&&h(a,l)},B.addPrefix=function(a,b){z[a]=b},B.addFilter=function(a){x.push(a)},B.errorTimeout=1e4,null==b.readyState&&b.addEventListener&&(b.readyState="loading",b.addEventListener("DOMContentLoaded",A=function(){b.removeEventListener("DOMContentLoaded",A,0),b.readyState="complete"},0)),a.yepnope=k(),a.yepnope.executeStack=h,a.yepnope.injectJs=function(a,c,d,e,i,j){var k=b.createElement("script"),l,o,e=e||B.errorTimeout;k.src=a;for(o in d)k.setAttribute(o,d[o]);c=j?h:c||f,k.onreadystatechange=k.onload=function(){!l&&g(k.readyState)&&(l=1,c(),k.onload=k.onreadystatechange=null)},m(function(){l||(l=1,c(1))},e),i?k.onload():n.parentNode.insertBefore(k,n)},a.yepnope.injectCss=function(a,c,d,e,g,i){var e=b.createElement("link"),j,c=i?h:c||f;e.href=a,e.rel="stylesheet",e.type="text/css";for(j in d)e.setAttribute(j,d[j]);g||(n.parentNode.insertBefore(e,n),m(c,0))}}(this,document),Modernizr.load=function(){yepnope.apply(window,[].slice.call(arguments,0))};
    </script>


	<link href="assets/css/map.css" rel="stylesheet">
</head>

<style>

@font-face {
    font-family: myFirstFont_easy;
    src: url(assets/fonts/Montaga-Regular.ttf);
} 

f{
	font-family: myFirstFont_easy;
	font-size: 20px;
}

@font-face {
    font-family: myFirstFont;
    src: url(assets/fonts/JockeyOne-Regular.ttf);
    font-weight: bold;
}

h1 {
    font-family: myFirstFont;
}

z {
    font-family: myFirstFont;
}

#weight_option{
  width:130px;
}

#weight_option option{
  width:130px;
}
</style>


<body>

<script type="text/javascript">
window.fbAsyncInit = function() {
    FB.init({
      appId      : 'your-app-id',
      xfbml      : true,
      version    : 'v2.4'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));


window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);
 
  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };
 
  return t;
}(document, "script", "twitter-wjs"));

</script>

<script>
	(function(){"use strict";var root=this,WASHAREBTN=function(){this.buttons=[],this.isIos===!0&&this.cntLdd(window,this.crBtn)};WASHAREBTN.prototype.isIos=navigator.userAgent.match(/Android|iPhone/i)&&!navigator.userAgent.match(/iPod|iPad/i)?!0:!1,WASHAREBTN.prototype.cntLdd=function(win,fn){var done=!1,top=!0,doc=win.document,root=doc.documentElement,add=doc.addEventListener?"addEventListener":"attachEvent",rem=doc.addEventListener?"removeEventListener":"detachEvent",pre=doc.addEventListener?"":"on",init=function(e){("readystatechange"!==e.type||"complete"===doc.readyState)&&(("load"===e.type?win:doc)[rem](pre+e.type,init,!1),!done&&(done=!0)&&fn.call(win,e.type||e))},poll=function(){try{root.doScroll("left")}catch(e){return void setTimeout(poll,50)}init("poll")};if("complete"===doc.readyState)fn.call(win,"lazy");else{if(doc.createEventObject&&root.doScroll){try{top=!win.frameElement}catch(e){}top&&poll()}doc[add](pre+"DOMContentLoaded",init,!1),doc[add](pre+"readystatechange",init,!1),win[add](pre+"load",init,!1)}},WASHAREBTN.prototype.addStyling=function(){var s=document.createElement("style"),c="body,html{padding:0;margin:0;height:100%;width:100%}.wa_btn{background-image:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkViZW5lXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMTZweCIgaGVpZ2h0PSIxNnB4IiB2aWV3Qm94PSIwIDAgMTYgMTYiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE2IDE2IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnPg0KCTxnPg0KCQk8cGF0aCBmaWxsLXJ1bGU9ImV2ZW5vZGQiIGNsaXAtcnVsZT0iZXZlbm9kZCIgZmlsbD0iI0ZGRkZGRiIgZD0iTTguMTI5LDAuOTQ1Yy0zLjc5NSwwLTYuODcyLDMuMDc3LTYuODcyLDYuODczDQoJCQljMCwxLjI5OCwwLjM2LDIuNTEyLDAuOTg2LDMuNTQ5bC0xLjI0LDMuNjg4bDMuODA1LTEuMjE5YzAuOTg0LDAuNTQ0LDIuMTE2LDAuODU0LDMuMzIxLDAuODU0YzMuNzk1LDAsNi44NzEtMy4wNzUsNi44NzEtNi44NzENCgkJCVMxMS45MjQsMC45NDUsOC4xMjksMC45NDV6IE04LjEyOSwxMy41MzhjLTEuMTYyLDAtMi4yNDQtMC4zNDgtMy4xNDctMC45NDZsLTIuMTk4LDAuNzA1bDAuNzE1LTIuMTI0DQoJCQljLTAuNjg2LTAuOTQ0LTEuMDktMi4xMDMtMS4wOS0zLjM1NGMwLTMuMTU1LDIuNTY2LTUuNzIyLDUuNzIxLTUuNzIyczUuNzIxLDIuNTY2LDUuNzIxLDUuNzIyUzExLjI4MywxMy41MzgsOC4xMjksMTMuNTM4eg0KCQkJIE0xMS4zNTIsOS4zNzljLTAuMTc0LTAuMDk0LTEuMDItMC41NS0xLjE3OC0wLjYxNUMxMC4wMTQsOC43LDkuODk4LDguNjY2LDkuNzc1LDguODM3QzkuNjUyLDkuMDA3LDkuMzAxLDkuMzksOS4xOTMsOS41MDUNCgkJCUM5LjA4OCw5LjYxNyw4Ljk4NCw5LjYyOSw4LjgxMiw5LjUzM2MtMC4xNzEtMC4wOTYtMC43My0wLjMtMS4zNzgtMC45MjNjLTAuNTA0LTAuNDg0LTAuODM0LTEuMDcyLTAuOTMtMS4yNTINCgkJCWMtMC4wOTUtMC4xOCwwLTAuMjcxLDAuMDkxLTAuMzU0QzYuNjc3LDYuOTI4LDYuNzc4LDYuODA1LDYuODcsNi43MDZjMC4wOTEtMC4xLDAuMTI0LTAuMTcxLDAuMTg3LTAuMjg2DQoJCQljMC4wNjItMC4xMTUsMC4wMzgtMC4yMTgtMC4wMDMtMC4zMDhDNy4wMTIsNi4wMjMsNi42OTQsNS4xNDYsNi41NjEsNC43OUM2LjQyOCw0LjQzNCw2LjI4LDQuNDg2LDYuMTc3LDQuNDgyDQoJCQlDNi4wNzUsNC40NzksNS45NTgsNC40NTksNS44NDEsNC40NTZDNS43MjQsNC40NTEsNS41MzMsNC40ODcsNS4zNjYsNC42NTdjLTAuMTY3LDAuMTctMC42MzcsMC41NzYtMC42NjksMS40MzkNCgkJCXMwLjU2NSwxLjcyMiwwLjY0OCwxLjg0MWMwLjA4NCwwLjEyMSwxLjE0LDEuOTkxLDIuODk3LDIuNzYyYzEuNzU2LDAuNzcsMS43NjYsMC41MzQsMi4wODgsMC41MTgNCgkJCWMwLjMyMi0wLjAxOCwxLjA1NS0wLjM4NiwxLjIxNS0wLjc4OWMwLjE2Mi0wLjQwNSwwLjE3Ni0wLjc1NSwwLjEzNS0wLjgzMUMxMS42MzksOS41MjEsMTEuNTIzLDkuNDc1LDExLjM1Miw5LjM3OXoiLz4NCgk8L2c+DQo8L2c+DQo8L3N2Zz4NCg==);border:1px solid rgba(0,0,0,.1);display:inline-block!important;position:relative;font-family:Arial,sans-serif;letter-spacing:.4px;cursor:pointer;font-weight:400;text-transform:none;color:#fff;border-radius:2px;background-color:#5cbe4a;background-repeat:no-repeat;line-height:1.2;text-decoration:none;text-align:left}.wa_btn_s{font-size:12px;background-size:16px;background-position:5px 2px;padding:3px 6px 3px 25px}.wa_btn_m{font-size:16px;background-size:20px;background-position:4px 2px;padding:4px 6px 4px 30px}.wa_btn_l{font-size:16px;background-size:20px;background-position:5px 5px;padding:8px 6px 8px 30px}";return s.type="text/css",s.styleSheet?s.styleSheet.cssText=c:s.appendChild(document.createTextNode(c)),s},WASHAREBTN.prototype.setButtonAttributes=function(b){var url=b.getAttribute("data-href"),text="?text="+encodeURIComponent(b.getAttribute("data-text"))+(b.getAttribute("data-text")?"%20":"");return text+=encodeURIComponent(url?url:document.URL),b.setAttribute("target","_top"),b.setAttribute("href",b.getAttribute("href")+text),b.setAttribute("onclick","window.parent."+b.getAttribute("onclick")),b},WASHAREBTN.prototype.setIframeAttributes=function(b){var i=document.createElement("iframe");return i.width=1,i.height=1,i.button=b,i.style.border=0,i.style.overflow="hidden",i.border=0,i.setAttribute("scrolling","no"),i.addEventListener("load",root.WASHAREBTN.iFrameOnload()),i},WASHAREBTN.prototype.iFrameOnload=function(){return function(){this.contentDocument.body.appendChild(this.button),this.contentDocument.getElementsByTagName("head")[0].appendChild(root.WASHAREBTN.addStyling());var meta=document.createElement("meta");meta.setAttribute("charset","utf-8"),this.contentDocument.getElementsByTagName("head")[0].appendChild(meta),this.width=Math.ceil(this.contentDocument.getElementsByTagName("a")[0].getBoundingClientRect().width),this.height=Math.ceil(this.contentDocument.getElementsByTagName("a")[0].getBoundingClientRect().height)}},WASHAREBTN.prototype.crBtn=function(){for(var b=[].slice.call(document.querySelectorAll(".wa_btn")),iframes=[],i=0;i<b.length;i++)root.WASHAREBTN.buttons.push(b[i]),b[i]=root.WASHAREBTN.setButtonAttributes(b[i]),iframes[i]=root.WASHAREBTN.setIframeAttributes(b[i]),b[i].parentNode.insertBefore(iframes[i],b[i])},root.WASHAREBTN=new WASHAREBTN}).call(this);
</script>

<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true&callback=initialize"></script>-->
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
<script type="text/javascript">


  var source, destination;
  var distance_ceil;
    var directionsDisplay;
    var directionsService = new google.maps.DirectionsService();
    google.maps.event.addDomListener(window, 'load', function () 
    {
        new google.maps.places.SearchBox(document.getElementById('address1'));
        new google.maps.places.SearchBox(document.getElementById('address2'));
        directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });
    });

    function GetRoute() {
            var mumbai = new google.maps.LatLng(18.9750, 72.8258);
            var mapOptions = {
                types: ['(Bangalore)'],
                componentRestrictions: {country: "in"},
                zoom: 1,
                center: mumbai
            };
            map = new google.maps.Map(document.getElementById('map-container1'), mapOptions);
            directionsDisplay.setMap(map);
           // directionsDisplay.setPanel(document.getElementById('dvPanel'));

            //*********DIRECTIONS AND ROUTE**********************//
            source = document.getElementById("address1").value;
            destination = document.getElementById("address2").value;


            var request = {
                origin: source,
                destination: destination,
                travelMode: google.maps.TravelMode.DRIVING
            };
            directionsService.route(request, function (response, status) {
                if (status == google.maps.DirectionsStatus.OK) {
                    directionsDisplay.setDirections(response);
                }
            });

            //*********DISTANCE AND DURATION**********************//
            var service = new google.maps.DistanceMatrixService();
            service.getDistanceMatrix({
                origins: [source],
                destinations: [destination],
                travelMode: google.maps.TravelMode.DRIVING,
                unitSystem: google.maps.UnitSystem.METRIC,
                avoidHighways: false,
                avoidTolls: false
            }, function (response, status) {
                if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
                    var distance = response.rows[0].elements[0].distance.text;
                    var duration = response.rows[0].elements[0].duration.text;
                    //var dvDistance = document.getElementById("dvDistance");
                    //dvDistance.innerHTML = "";
                    //dvDistance.innerHTML += "Distance: " + distance + "<br />";
                    //dvDistance.innerHTML += "Duration:" + duration;

                    var weight_ceil = document.getElementById('weight_option');
                    weight_ceil = weight_ceil.options[weight_ceil.selectedIndex].value;
                    var delivery_charge=10;
                    var distance_in_num = parseFloat(distance.substring(0,distance.length-3)).toFixed(2);
                    
                     if(distance_in_num<=5.00)
                    {
                      switch(weight_ceil)
                      {
                        case 'S': { delivery_charge = 60; break;}
                        case 'M': { delivery_charge = 75; break;}
                        case 'L': { delivery_charge = 85; break;}
                        case 'XL': { delivery_charge = 100; break;}
                        case 'XXL': { delivery_charge = 150; break;}
                      }
                    }

                    else
                    {
                      switch(weight_ceil)
                      {
                        case 'S': { delivery_charge = 60+ ( (distance_in_num-5) * 12 ); break;}
                        case 'M': { delivery_charge = 75+ ( (distance_in_num-5) * 15 ); break;}
                        case 'L': { delivery_charge = 85+ ( (distance_in_num-5) * 17 ); break;}
                        case 'XL': { delivery_charge = 100+( (distance_in_num-5) * 20 ); break;}
                        case 'XXL': { delivery_charge = 150+( (distance_in_num-5) * 30 ); break;}
                      } 
                    }
                    

                document.getElementById("deliverycharge").innerHTML="<br><div class=\"alert alert-info\"> Delivery charge = "+delivery_charge.toFixed(2)+"<br>Distance = "+distance_in_num+"</div>";


                } else {
                    alert("Unable to find the distance via road.");
                }
            });

    document.getElementById('address12').style.display = "block";
    document.getElementById('map-container1').style.display = "block";
      
    
	}



  /*
  var location1;
	var location2;
	
	var address1;
	var address2;

	var latlng;
	var geocoder;
	var map;
	
	var distance;


	// finds the coordinates for the two locations and calls the showMap() function
	function initialize(clicked_id)
	{
		
		geocoder = new google.maps.Geocoder(); // creating a new geocode object
		
		
		
		// getting the two address values
		address1 = document.getElementById("address1").value;
		address2 = document.getElementById("address2").value;
		
		address1_check = address1.toLowerCase();
		address2_check = address2.toLowerCase();
	
	if((address1!="" && address2!=""))
	{
		if((address1_check.includes("bangalore") || address1_check.includes("bengaluru")) && (address2_check.includes("bangalore") || address2_check.includes("bengaluru")))
		{
			// finding out the coordinates
			
			document.getElementById('address12').style.display = "block";
			document.getElementById('map-container1').style.display = "block";
			
			if (geocoder) 
			{
				geocoder.geocode( { 'address': address1}, function(results, status) 
				{
					if (status == google.maps.GeocoderStatus.OK) 
					{
						//location of first address (latitude + longitude)
						location1 = results[0].geometry.location;
					} else 
					{
						alert("Geocode was not successful for the following reason: " + status);
					}
				});
				geocoder.geocode( { 'address': address2}, function(results, status) 
				{
					if (status == google.maps.GeocoderStatus.OK) 
					{
						//location of second address (latitude + longitude)
						location2 = results[0].geometry.location;
						// calling the showMap() function to create and show the map 
						showMap(clicked_id);
					} else 
					{
						alert("Geocode was not successful for the following reason: " + status);
					}
				});
			}
		}

		else
		{
			document.getElementById("deliverycharge").innerHTML = "<br><div class=\"alert alert-danger\">Goods will be delivered only in Bangalore.</div>";
			document.getElementById('address12').style.display = "none";
			document.getElementById('map-container1').style.display = "none";
		}
	}
	}
		
	// creates and shows the map
	function showMap(clicked_id)
	{
		// center of the map (compute the mean value between the two locations)
		latlng = new google.maps.LatLng((location1.lat()+location2.lat())/2,(location1.lng()+location2.lng())/2);

		var weight;
        weight = document.getElementById("weight").value;

		// set map options
			// set zoom level
			// set center
			// map type
		var mapOptions = 
		{
			types: ['(Bangalore)'],
			componentRestrictions: {country: "in"},
			zoom: 1,
			center: latlng,
			mapTypeId: google.maps.MapTypeId.DRIVING
		};
		
		// create a new map object
			// set the div id where it will be shown
			// set the map options
			map = new google.maps.Map(document.getElementById("map-container1"), mapOptions);
		
		// show route between the points
		directionsService = new google.maps.DirectionsService();
		directionsDisplay = new google.maps.DirectionsRenderer();
		directionsDisplay.setMap(map);
		var request = {
			origin:location1, 
			destination:location2,
			travelMode: google.maps.DirectionsTravelMode.DRIVING
		};
		directionsService.route(request, function(response, status) 
		{
			if (status == google.maps.DirectionsStatus.OK) 
			{
				directionsDisplay.setDirections(response);

              if (weight < 5) {
              weight_ceil = 5;
              } else {
              weight_ceil = weight;
              }

               distance_string = response.routes[0].legs[0].distance.text;
               str_length = distance_string.length;
               left_size = str_length - 5;
               distance_substring = distance_string.substring(0,left_size);
               distance_num = parseInt(distance_substring);

               if (distance_num < 5) {
              distance_ceil = 5;
              } else if (distance_num < 10) {
              distance_ceil = 10;
              } else if (distance_num < 15) {
              distance_ceil = 15;
             } else if (distance_num < 20) {
              distance_ceil = 20;
              } else if (distance_num < 25) {
              distance_ceil = 25;
             } else if (distance_num < 30) {
               distance_ceil = 30;    
            } else {
            distance_ceil = 0;
             }

            if(clicked_id==="booknow")
			{
				delivery_charge1= 1.5*weight_ceil*distance_ceil;
				delivery_charge2 = 2.5*weight_ceil*distance_ceil;
				
				if((delivery_charge1%10)>0){
				delivery_charge1 = delivery_charge1 + (10 - (delivery_charge1%10));
				}
				
				if((delivery_charge2%10)>0){
				delivery_charge2 = delivery_charge2 + (10 - (delivery_charge2%10));
				}
				
				document.getElementById("deliverycharge").innerHTML = "<br><div class=\"alert alert-info\"><br>Signature: <font color=\"red\">Rs. "+delivery_charge1+"</font>.&nbsp;&nbsp;&nbsp;&nbsp;Express: <font color=\"red\">Rs. "+delivery_charge2+"</font>.<br>This is an estimated delivery charge. The actual charges may vary based on any special delivery requirements specified. We will confirm the final amount before pickup.<br><font color=\"red\">Signature deliveries are accepted only till 2 PM.</font><br><font color=\"green\">Signature</font>: The package will be delivered before 8pm on the same business day. Any acknowledgments, cash,etc will be delivered back the next day.<br><font color=\"green\">Express</font>: The package will delivered within 2 hours of pickup. Any acknowledgments, cash, etc will be delivered immediately after the delivery.<br></div>";
			}
			
			if(distance_ceil==0)
			{
				if(clicked_id==="booknow")
			{
				document.getElementById('address12').style.display = "none";
				document.getElementById('map-container1').style.display = "none";
			}
			}
			}
		});
		
	}
*/
// This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.

/*var placeSearch, autocomplete;
var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};*/

function initAutocomplete() {
  // Create the autocomplete object, restricting the search to geographical
  // location types.
  var options = {
  componentRestrictions: {country: "in"}
 };
  
	autocomplete1 = new google.maps.places.Autocomplete(
      /** @type {!HTMLInputElement} */(document.getElementById('address1')),
      options);

	autocomplete2 = new google.maps.places.Autocomplete(
      /** @type {!HTMLInputElement} */(document.getElementById('address2')),
      options);
  // When the user selects an address from the dropdown, populate the address
  // fields in the form.
  autocomplete1.addListener('place_changed', fillInAddress);
  autocomplete2.addListener('place_changed', fillInAddress);
}

// [END region_fillform]

// [START region_geolocation]
// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var circle = new google.maps.Circle({
        center: geolocation,
        radius: position.coords.accuracy
      });
      autocomplete.setBounds(circle.getBounds());
    });
  }
}
// [END region_geolocation]

$(document).ready(function() {
    $('#validation')
        .formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                number1: {
                    validators: {
                        phone: {
                            country: 'IN',
                            message: 'The value is not valid %s phone number'
                        }
                    }
                }
            }
        })
});


 goog_snippet_vars = function() {
    var w = window;
    w.google_conversion_id = 938495377;
    w.google_conversion_label = "RI-lCJ-_02IQkZvBvwM";
    w.google_conversion_value = 40.00;
    w.google_conversion_currency = "INR";
    w.google_remarketing_only = false;
  }
  
  
function validateForm() {
    var x = document.forms["myForm"]["email1"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
}


function setValue(){
    document.myForm.address1.value = address1;
	document.myForm.address2.value = address2;
	document.myForm.weight_ceil.value = weight_ceil;
	var cost = $("input[name=mode1]:checked").val();
	
	if(cost==="Signature")
	document.myForm.delivery_charge.value = delivery_charge1;

	else if(cost==="Express")
	document.myForm.delivery_charge.value = delivery_charge2;
	
    goog_snippet_vars();
    window.google_conversion_format = "3";
    window.google_is_call = true;
    var opt = new Object();
    opt.onload_callback = function() {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  }
  var conv_handler = window['google_trackConversion'];
  if (typeof(conv_handler) == 'function') {
    conv_handler(opt);
  }

	
    //document.getElementById("myForm").submit();
}

            addEventListener('load', prettyPrint, false);
            $(document).ready(function(){
            $('pre').addClass('prettyprint linenums');
                  });

            $('.selectpicker').selectpicker({
            style: 'btn-info',
            size: 4
            });



</script>

<script src='https://www.google.com/recaptcha/api.js?hl=en'></script>

<script type="text/javascript"
	(function(){var f=this;var ea=/^true$/.test("false")?!0:!1;var k=function(a){k[" "](a);return a};k[" "]=function(){};var r=function(a,b){for(var d in a)Object.prototype.hasOwnProperty.call(a,d)&&b.call(void 0,a[d],d,a)};var t=String.prototype.trim?function(a){return a.trim()}:function(a){return a.replace(/^[\s\xa0]+|[\s\xa0]+$/g,"")},u=function(a,b){return a<b?-1:a>b?1:0};var v;a:{var w=f.navigator;if(w){var C=w.userAgent;if(C){v=C;break a}}v=""};var fa=-1!=v.indexOf("Opera")||-1!=v.indexOf("OPR"),D=-1!=v.indexOf("Trident")||-1!=v.indexOf("MSIE"),ga=-1!=v.indexOf("Edge"),E=-1!=v.indexOf("Gecko")&&!(-1!=v.toLowerCase().indexOf("webkit")&&-1==v.indexOf("Edge"))&&!(-1!=v.indexOf("Trident")||-1!=v.indexOf("MSIE"))&&-1==v.indexOf("Edge"),ha=-1!=v.toLowerCase().indexOf("webkit")&&-1==v.indexOf("Edge"),ia=function(){var a=v;if(E)return/rv\:([^\);]+)(\)|;)/.exec(a);if(ga)return/Edge\/([\d\.]+)/.exec(a);if(D)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);
if(ha)return/WebKit\/(\S+)/.exec(a)},F=function(){var a=f.document;return a?a.documentMode:void 0},G=function(){if(fa&&f.opera){var a;var b=f.opera.version;try{a=b()}catch(d){a=b}return a}a="";(b=ia())&&(a=b?b[1]:"");return D&&(b=F(),b>parseFloat(a))?String(b):a}(),H={},J=function(a){if(!H[a]){for(var b=0,d=t(String(G)).split("."),c=t(String(a)).split("."),e=Math.max(d.length,c.length),g=0;0==b&&g<e;g++){var h=d[g]||"",l=c[g]||"",m=RegExp("(\\d*)(\\D*)","g"),q=RegExp("(\\d*)(\\D*)","g");do{var p=
m.exec(h)||["","",""],n=q.exec(l)||["","",""];if(0==p[0].length&&0==n[0].length)break;b=u(0==p[1].length?0:parseInt(p[1],10),0==n[1].length?0:parseInt(n[1],10))||u(0==p[2].length,0==n[2].length)||u(p[2],n[2])}while(0==b)}H[a]=0<=b}},K=f.document,ja=K&&D?F()||("CSS1Compat"==K.compatMode?parseInt(G,10):5):void 0;var L;if(!(L=!E&&!D)){var M;if(M=D)M=9<=Number(ja);L=M}L||E&&J("1.9.1");D&&J("9");var ka=function(a){this.b={};this.a={};this.c=!1;for(var b=0,d=arguments.length;b<d;++b)this.a[arguments[b]]=""},O=function(a){var b=N;return b.a.hasOwnProperty(a)?b.a[a]:""},la=function(){var a=N,b=[];r(a.b,function(a,c){b.push(c)});r(a.a,function(a){""!=a&&b.push(a)});return b};var N,P="google_conversion_id google_conversion_format google_conversion_type google_conversion_order_id google_conversion_language google_conversion_value google_conversion_currency google_conversion_domain google_conversion_label google_conversion_color google_disable_viewthrough google_remarketing_only google_remarketing_for_search google_conversion_items google_custom_params google_conversion_date google_conversion_time google_conversion_js_version onload_callback opt_image_generator google_conversion_page_url google_conversion_referrer_url".split(" ");
function Q(a){return null!=a?"3455583315"==(N?O(3):"")?encodeURIComponent(a.toString()):escape(a.toString()):""}function R(a){return null!=a?a.toString().substring(0,512):""}function S(a,b){var d=Q(b);if(""!=d){var c=Q(a);if(""!=c)return"&".concat(c,"=",d)}return""}function T(a){var b=typeof a;return null==a||"object"==b||"function"==b?null:String(a).replace(/,/g,"\\,").replace(/;/g,"\\;").replace(/=/g,"\\=")}
function ma(a){var b;if((a=a.google_custom_params)&&"object"==typeof a&&"function"!=typeof a.join){var d=[];for(b in a)if(Object.prototype.hasOwnProperty.call(a,b)){var c=a[b];if(c&&"function"==typeof c.join){for(var e=[],g=0;g<c.length;++g){var h=T(c[g]);null!=h&&e.push(h)}c=0==e.length?null:e.join(",")}else c=T(c);(e=T(b))&&null!=c&&d.push(e+"="+c)}b=d.join(";")}else b="";return""==b?"":"&".concat("data=",encodeURIComponent(b))}
function U(a){return"number"!=typeof a&&"string"!=typeof a?"":Q(a.toString())}function na(a){if(!a)return"";a=a.google_conversion_items;if(!a)return"";for(var b=[],d=0,c=a.length;d<c;d++){var e=a[d],g=[];e&&(g.push(U(e.value)),g.push(U(e.quantity)),g.push(U(e.item_id)),g.push(U(e.adwords_grouping)),g.push(U(e.sku)),b.push("("+g.join("*")+")"))}return 0<b.length?"&item="+b.join(""):""}
function oa(a,b,d){var c=[];if(a){var e=a.screen;e&&(c.push(S("u_h",e.height)),c.push(S("u_w",e.width)),c.push(S("u_ah",e.availHeight)),c.push(S("u_aw",e.availWidth)),c.push(S("u_cd",e.colorDepth)));a.history&&c.push(S("u_his",a.history.length))}d&&"function"==typeof d.getTimezoneOffset&&c.push(S("u_tz",-d.getTimezoneOffset()));b&&("function"==typeof b.javaEnabled&&c.push(S("u_java",b.javaEnabled())),b.plugins&&c.push(S("u_nplug",b.plugins.length)),b.mimeTypes&&c.push(S("u_nmime",b.mimeTypes.length)));
return c.join("")}function pa(a){if("3455315"!=(N?O(2):""))return"";a=a?a.title:"";if(void 0==a)return"";var b=function(a){try{return decodeURIComponent(a),!0}catch(b){return!1}};a=encodeURIComponent(a);for(var d=128;!b(a.substr(0,d));)d--;return"&tiba="+a.substr(0,d)}
function V(a,b,d,c){var e="";if(b){var g;if(a.top==a)g=0;else{var h=a.location.ancestorOrigins;if(h)g=h[h.length-1]==a.location.origin?1:2;else{h=a.top;try{var l;if(l=!!h&&null!=h.location.href)c:{try{k(h.foo);l=!0;break c}catch(m){}l=!1}g=l}catch(m){g=!1}g=g?1:2}}l="";l=d?d:1==g?a.top.location.href:a.location.href;e+=S("frm",g);e+=S("url",R(l));e+=S("ref",R(c||b.referrer))}return e}
function W(a){return!ea&&!qa.test(navigator.userAgent)||a&&a.location&&a.location.protocol&&"https:"==a.location.protocol.toString().toLowerCase()?"https:":"http:"}var qa=/Android ([01]\.|2\.[01])/i;function ra(){return new Image}function X(a,b,d){var c=ra;"function"===typeof a.opt_image_generator&&(c=a.opt_image_generator);c=c();b+=S("async","1");c.src=b;c.onload=d&&"function"===typeof a.onload_callback?a.onload_callback:function(){}}
function sa(a){for(var b=window,d={},c=function(c){d[c]=a&&null!=a[c]?a[c]:b[c]},e=0;e<P.length;e++)c(P[e]);c("onload_callback");return d};window.google_trackConversion=function(a){a=sa(a);a.google_conversion_format=3;var b;var d=window,c=navigator,e=document,g=!1;if(a&&3==a.google_conversion_format){try{var h;"landing"==a.google_conversion_type||!a.google_conversion_id||a.google_remarketing_only&&a.google_disable_viewthrough?h=!1:(a.google_conversion_date=new Date,a.google_conversion_time=a.google_conversion_date.getTime(),a.google_conversion_snippets="number"==typeof a.google_conversion_snippets&&0<a.google_conversion_snippets?a.google_conversion_snippets+
1:1,"number"!=typeof a.google_conversion_first_time&&(a.google_conversion_first_time=a.google_conversion_time),a.google_conversion_js_version="8",0!=a.google_conversion_format&&1!=a.google_conversion_format&&2!=a.google_conversion_format&&3!=a.google_conversion_format&&(a.google_conversion_format=1),N=new ka(1,2,3),h=!0);if(h){h="/?";"landing"==a.google_conversion_type&&(h="/extclk?");var l,m=[a.google_remarketing_only?"viewthroughconversion/":"conversion/",Q(a.google_conversion_id),h,"random=",Q(a.google_conversion_time)].join(""),
q=a.google_remarketing_only?"googleads.g.doubleclick.net":a.google_conversion_domain||"www.googleadservices.com";l=W(d)+"//"+q+"/pagead/"+m;if(N&&(m=N,q=["3455314","3455315"],!m.c&&m.a.hasOwnProperty(2)&&""==m.a[2])){var p,n,I;b:{try{var Y=window.top.location.hash;if(Y){var Z=Y.match(/\bdeid=([\d,]+)/);I=Z&&Z[1]||"";break b}}catch(aa){}I=""}var ba=I.match(new RegExp("\\b("+q.join("|")+")\\b"));n=ba&&ba[0]||null;var y;if(n)y=n;else b:{if(!(1E-4>Math.random())){var z=Math.random();if(0>z){n=window;
try{var ca=new Uint32Array(1);n.crypto.getRandomValues(ca);z=ca[0]/65536/65536}catch(aa){z=Math.random()}y=q[Math.floor(z*q.length)];break b}}y=null}(p=y)&&""!=p&&m.a.hasOwnProperty(2)&&(m.a[2]=p)}var A;b:{var da=a.google_conversion_language;if(null!=da){var x=da.toString();if(2==x.length){A=S("hl",x);break b}if(5==x.length){A=S("hl",x.substring(0,2))+S("gl",x.substring(3,5));break b}}A=""}b=[S("cv",a.google_conversion_js_version),S("fst",a.google_conversion_first_time),S("num",a.google_conversion_snippets),
S("fmt",a.google_conversion_format),S("value",a.google_conversion_value),S("currency_code",a.google_conversion_currency),S("label",a.google_conversion_label),S("oid",a.google_conversion_order_id),S("bg",a.google_conversion_color),A,S("guid","ON"),S("disvt",a.google_disable_viewthrough),S("eid",la().join()),na(a),oa(d,c,a.google_conversion_date),ma(a),V(d,e,a.google_conversion_page_url,a.google_conversion_referrer_url),a.google_remarketing_for_search&&!a.google_conversion_domain?"&srr=n":"",pa(e)].join("");
X(a,l+b,!0);if(a.google_remarketing_for_search&&!a.google_conversion_domain){var B,ta=[Q(a.google_conversion_id),"/?random=",Math.floor(1E9*Math.random())].join("");B=W(d)+"//www.google.com/ads/user-lists/"+ta;B+=[S("label",a.google_conversion_label),S("fmt","3"),V(d,e,a.google_conversion_page_url,a.google_conversion_referrer_url)].join("");X(a,B,!1)}g=!0}}catch(aa){}b=g}else b=!1;return b};}).call(this);

</script>

<script type="text/javascript">

if(typeof wabtn4fg==="undefined"){
	wabtn4fg=1;h=document.head||document.getElementsByTagName("head")[0],s=document.createElement("script");
	s.type="text/javascript";s.src="assets/js/whatsapp-button.js";h.appendChild(s);}
	</script>

 	<!-- Preloader -->

	<div id="preloader">
		<div id="status"></div>
	</div>

	<!-- Home start

	<section id="home" class="pfblock-image screen-height">
        <div class="home-overlay"></div>
		<div class="intro">
			<! <div class="start">Hello, my name is John Doe and I am</div>
 		<z><font size="7dp">BY THE BOX</font></z><br>
				<f>EASY LOCAL DELIVERIES</f>
		</div>

        <a href="#what_we_do">
		<div class="scroll-down">
            <span>
                <i class="fa fa-angle-down fa-2x"></i>
            </span>
		</div>
        </a>

	</section>

	 Home end -->

	<!-- Navigation start -->

	<header class="header">

		<nav class="navbar navbar-custom" role="navigation">

			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#custom-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					&nbsp;&nbsp;<a href="#home"><font size="6px" color="#ffffff"><z>By The Box</z></font></a>
				</div>

				<div class="collapse navbar-collapse" id="custom-collapse">
					<ul class="nav navbar-nav navbar-right">
            						
					</ul>
				</div>
			</div>
			<!-- .container -->

		</nav>

	</header>

	<!-- Navigation end -->

  <!-- Book a Delivery-->
  <section class="pfblock">    
    <div class="container">
      <div class="row">

        <center>
          <div class="pfblock-header">
            <h2 class="pfblock-title">Estimate and Book<font size="3dp">(beta)</font></h2>
            <div class="pfblock-line"></div>
            
          </div>
        </center>
      </div>

      
<!-- Form for entering loations-->
  <div class="row">
        <div class="col-md-12">
        <div class="col-md-5"> 
        <div class="alert alert-info">
        <b>
        <strong><b>How to get a precise delivery charge estimate</b>:</strong><br>
        1. Enter the first few letters of your pickup address and select the correct one from the suggestions drop down.<br>
        2. Do the same for your delivery address.<br>
        3. If your address doesn't appear in the auto complete options, select a nearest landmark which can be located on the map.<br>
        4. Enter the approximate weight of the package.<br>
        5. Click Book Now!
        </div>
        </div>

        <div class="col-md-7">
        <center><form class="form-inline" role="form">
          <div class="form-group">
           <input type="text" name="address1" id="address1"size="45dp" class="form-control" placeholder="Pickup Address"/>
          </div>
          &nbsp&nbsp&nbsp&nbsp
          <div class="form-group">
            <input type="text" name="address1" id="address2" size="45dp" class="form-control" placeholder="Delivery Address"/>
          </div>
        </center> <br>
        <center>
            <label for="weight_option">Size</label>
                  <select name="weight_option" class="form-control" id="weight_option" width="12dp">
                    <option value="S">1x1x1 (S)</option>
                    <option value="M">1x2x1 (M)</option>
                    <option value="L">2x2x1 (L)</option>
                    <option value="XL">2x2x2 (XL)</option>
                    <option value="XXL">3x2x2 (XXL)</option>
                </select>
        </center><br>
        <center>
          <input type="button" class="btn btn-primary btn-lg" value="Book Now" id="booknow" onClick="GetRoute()"/>
        </center>
        </form>
        </div>
        </div>
  </div>
        <div class="row">
        <center><div style="width:100%; height:10%" id="deliverycharge"></div></center><br>
        </div>
              <style type="text/css">
                 #map-container1 { height: 670px }
                  </style>
</div>

<!--Form for Booking-->
      <div class="container">
      <div class="row">
      <div id="address12" class="col-md-12" style="display:none;">
      <div class="col-md-4" >
      <form name="myForm" id="myForm" method="post">
        <div class="ajax-hidden">

          
          <div class="form-group">
          <label class="sr-only" for="name1">Sender's Name</label>
            <input type="text" name="sender_name" id="sender_name" size="40dp" maxlength="25" class="form-control" required="true"  placeholder="Sender's Name"/>
          </div>
          
          <div class="form-group">
            <label class="sr-only" for="number1">Sender's Contact Number</label>
            <input type="text" name="sender_number" id="sender_number" size="40dp" class="form-control" pattern="[0-9]{10}" required title="Enter a valid 10 digit number" placeholder="Sender's Contact Number"/>
          </div>

          <div class="form-group">
          <label class="sr-only" for="name1">Pickup Address</label>
            <input type="text" name="pickup_address" id="pickup_address" size="40dp" maxlength="25" class="form-control" required="true"  placeholder="Detailed Pickup Address"/>
          </div>
          

           <div class="form-group">
            <label class="sr-only" for="email1">Sender's Email</label>
          <input type="email" id="sender_email" class="form-control" maxlength="30" name="sender_email"  required="true" placeholder="Sender's E-mail">
          </div>
          

          <div class="form-group">
          <label class="sr-only" for="name1">Receiver's Name</label>
            <input type="text" name="receiver_name" id="receiver_name" size="40dp" maxlength="25" class="form-control" required="true"  placeholder="Receiver's Name"/>
          </div>
          
          <div class="form-group">
            <label class="sr-only" for="number1">Receiver's Contact Number</label>
            <input type="text" name="receiver_number" id="receiver_number" size="40dp" class="form-control" pattern="[0-9]{10}" required title="Enter a valid 10 digit number" placeholder="Receiver's Contact Number"/>
          </div>

          <div class="form-group">
          <label class="sr-only" for="name1">Delivery Address</label>
            <input type="text" name="delivery_address" id="delivery_address" size="40dp" maxlength="25" class="form-control" required="true"  placeholder="Detailed Delivery Address"/>
          </div>
          

           <div class="form-group">
            <label class="sr-only" for="email1">Receiver's Email</label>
          <input type="email" id="receiver_email" class="form-control" maxlength="30" name="receiver_email" placeholder="Receiver's E-mail">
          </div>
          

          <div class="form-group">
            <label class="sr-only" for="type1">Type</label>
          <input type="text" id="type1" class="form-control" maxlength="30" name="type1" placeholder="Type of goods">
          </div>
          
          <div class="form-group">
          <textarea id="special1" class="form-control" name="special1" rows="3" maxlength="60" placeholder="Special Delivery Instructions:&#10;e.g: Acknowledgement back, Take cash on delivery, delivery charge paid at destination, etc."></textarea>
          </div>
          
          <div class="g-recaptcha" data-sitekey="6Lf1XxMTAAAAAEVris2qlfmdIPw7ZXkWSzkYO32P"></div>
          
          <input type="hidden" name="address1" id="address1" value="">
          <input type="hidden" name="address2" id="address2" value="">
          <input type="hidden" name="weight_option" id="weight_option" value="">
          <input type="hidden" name="delivery_charge" id="delivery_charge" value="">
          
          <font size="1px">By clicking on Confirm Now, you agree to our <a  style="cursor: pointer;" data-toggle="modal" data-target="#myModal">Terms & Conditions</font></a>.<br>
          <button class="btn btn-lg btn-block wow fadeInUp" data-wow-delay=".3s" onClick="setValue();" type="submit" name="submit_book" >Confirm Now</button>
        </div>
            <div class="ajax-response"></div>
      </form>
      <br>
      
      </div>
      
      
      <div id="map-container1" class="col-md-8" style="display:block;"></div>
      </div>
  
      
      
      <?php //if($check_submission==1){ 
        //echo "<center><div class=\"alert alert-success\"><strong>Booking Confirmed</strong>. We will get back to you in 30 minutes.</div></center> ";
        //echo "<script>window.alert(\"Booking Confirmed.\");</script>";
      //}
      ?>
      </div>
      </div>
      <!--Form for Booking END-->
      
      
      <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Terms & Conditions</h4>
      </div>
      <div class="modal-body">
        <p><b>1.</b> Nature, contents, conditions and value of the Consignments are unknown to Simply Delivered, (hereinafter called the Company). The company carries the goods in as-it-is condition as packed by consignor and entirely at the owner's risk.</p>
    <p><b>2.</b> The Company shall not be liable for any loss or damage due to pilferage, leakage, shortage, breakage, theft, weather conditions, strikes, riots, disturbances, fire, explosions, accidents or due to any circumstances beyond control.</p>
    <p><b>3.</b> The Consignor/Consignee shall be responsible for any delay, detention, loss, deterrence, seizure, confiscation or forfeiture of goods by Government authorities: -i) If he makes a wrong declaration about the contents or ii) If transport of such goods by road is prohibited or iii) If such goods are not accompanied by invoice, permits or other proper documents and are detained by any statutory authorities. Expenses incurred if any by the company in this connection shall be borne by the Consignor/Consignee only.</p>
    <p><b>4.</b> The Consignor will have to deal directly with Octroi, Customs and any other statutory authorities for wrong declaration etc. at the destination of the goods.</p>
    <p><b>5.</b> Fresh fruits, furniture, crockery, glassware and other such delicate goods are booked at the absolute risk of the consignor and the company shall not be responsible for any perish, damage, etc.</p>
    <p><b>6.</b> The Company will not carry explosive/prohibited drugs/Gold/Silver/Bullion Coin/Industrial Diamond, Currency (Paper or Coin) of any Nationality, Lottery Ticket, Contraband items etc.</p>
    <p><b>7.</b> The goods will be delivered to the consignee’s address as mentioned by the consignor while receiving the goods.</p>
    <p><b>8.</b> In case of any dispute, the courts at Bengaluru alone will have exclusive jurisdiction.</p>
    <p><b>9.</b> The company reserves the right to refuse or accept goods for dispatch without assigning any reason.</p>
    <p><b>10.</b>  I/We declare the goods tendered by me do not contain any contraband goods and the description of the goods tendered by me/us is correct. I/We have read the above terms and conditions. I/We shall abide by the same.</p>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



    </div>
  </section>

<!--Book a Delivery end-->


<!-- Footer start -->

  <footer id="footer">
    <div class="container">
      <div class="row">

        <div class="col-sm-12">
          
          <!--<ul class="social-links">
            <li><a href="index.html#" class="wow fadeInUp"><i class="fa fa-facebook"></i></a></li>
            <li><a href="index.html#" class="wow fadeInUp" data-wow-delay=".1s"><i class="fa fa-twitter"></i></a></li>
            <li><a href="index.html#" class="wow fadeInUp" data-wow-delay=".2s"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="index.html#" class="wow fadeInUp" data-wow-delay=".4s"><i class="fa fa-pinterest"></i></a></li>
            <li><a href="index.html#" class="wow fadeInUp" data-wow-delay=".5s"><i class="fa fa-envelope"></i></a></li>
          </ul>
          -->
          <p class="heart">Developed By <a href="https://www.linkedin.com/in/fakhruddin-tahery-06a69b9a">Fakhruddin Tahery</a>
                    </p>
                    <p class="copyright">
                        © 2015 Simply Delivered
          </p>
            
          
        </div>

      </div><!-- .row -->
    </div><!-- .container -->
  </footer>

  <!-- Footer end -->

  <!-- Scroll to top 

  <div class="scroll-up">
    <a href=""><i class="fa fa-angle-up"></i></a>
  </div>
   
    <!Scroll to top end-->


  <!-- Javascript files -->

  <script src="assets/js/jquery-1.11.1.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.parallax-1.1.3.js"></script>
  <script src="assets/js/imagesloaded.pkgd.js"></script>
  <script src="assets/js/jquery.sticky.js"></script>
  <script src="assets/js/smoothscroll.js"></script>
  <script src="assets/js/wow.min.js"></script>
  <script src="assets/js/jquery.easypiechart.js"></script>
  <script src="assets/js/waypoints.min.js"></script>
  <script src="assets/js/jquery.cbpQTRotator.js"></script>
  <script src="assets/js/custom.js"></script>
  <!--<script src="http://maps.google.com/maps/api/js?sensor=false"></script>-->
  <!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAVOB6qYFgyFWHkbVi2T3lBE2m8_kxQmgI&signed_in=true&libraries=places&callback=initAutocomplete"
        async defer></script>-->
  <script src="assets/js/jquery-1.7.1.min.js"></script>  
  <script src="assets/js/jquery.validate.js"></script> 
  <script src="assets/script.js"></script> 
     
</body>
</html>
