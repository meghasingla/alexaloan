<?php session_start();  
error_reporting(0);
/**** Bhavesh ONE-TIME PASSWORD EXAMPLE ****/  
//STARTING THE SESSION AND THE   
session_set_cookie_params(360);//SESSION EXPIRES IN 6 MINUTES   
// USERNAME AND PASSWORD ARRAYS   
$user = array("user1" => "bhavesh" , "scott" => "tiger" , "anat" => "xxxxxxx");  
$phone = array("user1" => "+5353535333", "scott" => "+44243535353","anat" => "+23554444444");  
// Login information for anant NG - SMS Gateway  
$anant_user = "admin";  
$anant_password = "abc123";  
$anant_url = "http://gochhattisgarh.in/api?";  
// Functions used to send the SMS message   
function httpRequest($url){  
$pattern = "/http...([0-9a-zA-Z-.]*).([0-9]*).(.*)/";  
preg_match($pattern,$url,$args);  
$in = "";  
$fp = fsockopen("$args[1]", $args[2], $errno, $errstr, 30);  
if (!$fp) {  
return("$errstr ($errno)");  
} else {  
$out = "GET /$args[3] HTTP/1.1\r\n";  
$out .= "Host: $args[1]:$args[2]\r\n";  
$out .= "User-agent: anant PHP client\r\n";  
$out .= "Accept: */*\r\n";  
$out .= "Connection: Close\r\n\r\n";  
fwrite($fp, $out);  
while (!feof($fp)) {  
$in.=fgets($fp, 128);  
}  
}  
fclose($fp);  
return($in);  
}  
function anantSend($phone, $msg, $debug=false){  
global $anant_user,$anant_password,$anant_url;  
$url = 'username='.$anant_user;  
$url.= '&password='.$anant_password;  
$url.= '&action=sendmessage';  
$url.= '&messagetype=SMS:TEXT';  
$url.= '&recipient='.urlencode($phone);  
$url.= '&messagedata='.urlencode($msg);  
$urltouse = $anant_url.$url;  
//if ($debug) { echo "Request: <br>$urltouse<br><br>"; }  
//Open the URL to send the message  
$response = httpRequest($urltouse);  
if ($debug) {  
echo "Response: <br><pre>".  
str_replace(array("<",">"),array("<",">"),$response).  
"</pre><br>"; }  
return($response);  
}  
//FUNCTION TO GENERATE ONE-TIME PASSWORD   
function anantOTP($length = 8, $chars = 'abcdefghijklmnopqrstuvwxyz1234567890')  
{  
$chars_length = (strlen($chars) - 1);  
$string = $chars{rand(0, $chars_length)};  
for ($i = 1; $i < $length; $i = strlen($string))  
{  
$r = $chars{rand(0, $chars_length)};  
if ($r != $string{$i - 1}) $string .= $r;  
}  
return $string;}  
//IF DEBUG VARIABLE IS TRUE, THE RESPONSE OF THE HTTP REQUEST WILL BE WRITTEN TO THE SCREEN   
$debug = false;  
// IF NOT POSTED ANYTHING YET, THE LOGIN PAGE IS LOADING   
if (empty($_POST)){  
$i=0;  
echo('   
<html>  
<body>  
<h1>One Time Password Form</h1>  
<form method="POST">  
<table border=1>  
<tr>  
<td>Username:</td>  
<td><input type="text" name="username"></td>  
</tr>  
<tr>  
<td>Password</td>  
<td><input type="password" name="password"></textarea></td>  
</tr>  
<tr>  
<td> </td>  
<td><input type=submit name=submit value="Get Otp" OnClick="anantSend(this.form);"></td>  
</tr>  
</table>  
</form>  
</body>  
</html>');}  
//IF OTP HAS POSTED YET, anantOTP FUNCTION WILL GENERATE ONE   
if (empty($_POST['otphtml'])){  
$_SESSION['otp']=anantOTP();  
// CHECKING USER CREDENTIALS   
if ($password!=$user[$username] || ((empty($_POST['username']) && (!empty($_POST['password'])))) || (empty($_POST['password']) && (!empty($_POST['username']))))  
echo ('Please enter a valid username or password!');  
elseif ((!empty($_POST['submit'])) && (empty($_POST['password'])) && (empty($_POST['username'])))   
echo ('No username or password entered');   
elseif($password=$user[$username]){  
echo "hello";
//SENDING THE PASSWORD AND LOADING THE OTP-VERIFYING PAGE   
anantSend($phone[$_POST['username']],'Dear '.$username.'! Your One-Time password is: '.$_SESSION['otp'],$debug);  
echo (' <html>  
<body>  
<h1>Please enter your One-Time password to enter the site!</h1>  
<form method="POST">  
<table border=1>  
<tr>  
<td>Your One-time password:</td>  
<td><input type="text" name="otphtml"></td>  
</tr>  
<tr>  
<td> </td>  
<td><input type=submit name=submit value="Confirm OTP"></td>  
</tr>  
</table>  
</form>  
</body>  
</html>');  
}}  
else{   
//IF AN OTP HAS ALREADY SENT, CHECKING ITS VALIDITY AND REDIRECTING TO THE PROTECTED CONTENT   
$otp1=$_POST['otphtml'];   
include('protectedcontent.php');}  
?>  