<?php
// Establishing connection with server by passing "server_name", "user_id", "password" 
  $connection = mysql_connect("localhost", "loansart_kdfa332", "hello@895");
// Selecting Database by passing "database_name" and above connection variable
  $db = mysql_select_db("loansart_hedfajksd", $connection);

//Fetching Values from URL  
$name=$_POST['name'];
$phone=$_POST['email'];
$email=$_POST['phone'];
$loan=$_POST['message'];
$date=date('Y/m/d H:i:s');

//Insert query 
  $query = mysql_query("insert into contact(name, email, phone, message, date) values ('$name','$phone','$email','$loan','$date')");
  if($query){
  
header('Location: thanksyou.html');
  }
   
//connection closed
mysql_close($connection);
?>
