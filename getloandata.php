<?php 
    $name = $_GET["username"];
    $email = $_GET["emailid"];
    $number = $_GET['phonenumber'];
    $comment = $_GET['comment'];
    $servername = "localhost";
    $username = "loansart_kdfa332";
    $password = "hello@895";
    $dbname = "loansart_hedfajksd";
 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $date=date('Y/m/d H:i:s');
    $otp = mt_rand(100000,999999);
    $smsmessage ="Your%20One%20Time%20Password%20is%20".$otp."%20Loan%20Sarthi%20(www.loansarthi.com)";
    $request = 'http://sms.ontimeinfotech.com/submitsms.jsp?user=Scholar&key=e23dc97b9bXX&mobile='.$number.'&message='.$smsmessage.'&senderid=onTime&accusage=1';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $request); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, '3');
    $content = trim(curl_exec($ch));
    curl_close($ch);
    $sql = "INSERT INTO applynow (name, email, otp,comment,phonenumber,date) VALUES ('$name', '$email', '$otp','$comment','$number','$date')";
    $result=$conn->query($sql);
    if(!$result)
    {
        $data = array('status'=>false,'message' => 'Oops Some problem');
        echo json_encode($data);   
    }
    else
    {
        $data = array('status'=>true,'message' => 'Thanks for showing your interest. Team - Loan Sarthi will contact you soon');
        echo json_encode($data);    
    }
?>