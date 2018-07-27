<?php session_start();
	function p($dis_data){
	print '<pre>';
	print_r($dis_data);
	print '</pre>';
	//die;
}



function apply_now($data){
	$name=$data['name'];
	$email=$data['email'];
	$mobile=$data['mobile'];
	$city=$data['city'];
	$income=$data['income_method'];
	$monthlyincome=$data['monthlyincome'];
	
	/*********************************************Mail to Admin********************************************************/
	
	$msg="
	You have got mail from ".$name.",<br><br>
	Name: ".$name."<br>
	Email: ".$email."<br>
	Phone: ".$mobile."<br>
	City: ".$city."<br>
	Income: ".$income."<br>
	Monthly Income: ₹ ".$monthlyincome."<br>";
		
	$sub="Enquiry Recieved";
	$mail_body = "$msg";	
	$to ="contact@ontimeinfotech.com";		
	$headers  = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
	$headers .= "from: ".$email."\n";
	@mail("$to",$sub,$mail_body,$headers);
	
	echo "<script>alert('Thank You For Contacting Us. Our Representative shall contact you soon.')</script>";
}



?>

