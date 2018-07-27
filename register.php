 <?php
 if(($_POST["otp"])!=""){

                $email = $_POST["emailid"];
                $otp=$_POST['otp'];

                $servername = "localhost";
                $username = "loansart_kdfa332";
                $password = "hello@895";
                $dbname = "loansart_hedfajksd";
               /* $username = "root";
                $password = "root";
                $dbname = "loansart";*/

        

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 

                $sql = "SELECT * FROM applynow WHERE email='$email'";
                $result=$conn->query($sql);
                if($result->num_rows > 0)
                {
                    foreach ($result as $row)
                    {
                        if($row['otp'] == $otp)
                        {
                            $status = true;
                            $message = 'Thanks for apply the loan !!';
                            break;
                        }
                        else 
                        {
                            $status = false;
                            $message = 'Entered OTP Is Wrong !!';
                        }
                    }
                    echo json_encode(array('status' => $status , 'message' => $message ));
                } 
                $conn->close(); 
                return;
    }
    else{

            echo json_encode(array('status'=>false,'message'=>'Please Enter OTP'));
    }


?>

