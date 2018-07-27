<?php
// Establishing connection with server by passing "server_name", "user_id", "password" 
  $connection = mysql_connect("localhost", "loansart_kdfa332", "hello@895");

// Selecting Database by passing "database_name" and above connection variable
  $db = mysql_select_db("loansart_hedfajksd", $connection);

//Fetching Values from URL  
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$loan=$_POST['loan'];
$date=date('Y/m/d H:i:s');

//Insert query 
  $query = mysql_query("insert into applynow(name, phone, email, loan, date) values ('$name','$phone','$email','$loan','$date')");
  if($query){
  
header('Location: thankyou.html');
  }
   
//connection closed
mysql_close($connection);
?>

<?php
// $mob=$_POST['phone'];

$l = 'http://sms.ontimedeveloper.com/reseller/sendsms.jsp?user=Scholar&password=123123&mobiles='; //replace ur SMS api here
$end='&sms=Thanks%20for%20apply%20the%20loan!!%20Regards,%20Loan%20Sarthi.%20www.loansarthi.com';
$done='&senderid=WEBSMS';
$url=$l.$phone.$end.$done;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER , true); //put this line only if you do not want the output to be of curl to be displayed
$response = curl_exec($ch);
 
// close cURL resource, and free up system resources
curl_close($ch);
?>