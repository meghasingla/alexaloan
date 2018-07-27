 <?php

    if(isset($_POST["username"])&&isset($_POST["emailid"])&&isset($_POST["phonenumber"])&&isset($_POST["otp"])){

                $name = $_POST["username"];
                $email = $_POST["emailid"];
                $number = $_POST['phonenumber'];
                $otp=$_POST['otp'];
                $cust_name=str_replace(' ', '%20', $name);

                $servername = "localhost";
                $username = "loansart_kdfa332";
                $password = "hello@895";
                $dbname = "loansart_hedfajksd";
                /*$username = "root";
                $password = "root";
                $dbname = "loansart";*/

             /*   $servername = "localhost";&&isset($_POST["comment"])
                $username = "naresh";
                $comment = $_POST['comment'];
                $password = "people";
                $dbname = "mctech";*/

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 

                $sql = "SELECT id,email,otp FROM applynow WHERE email='$email' and otp='$otp'";
                $result=$conn->query($sql);
                if($result->num_rows==1){

                     while($row = $result->fetch_assoc()) {
                       $id=$row['id'];
                     }

                     $sql = "UPDATE applynow SET comment='$comment' WHERE id=$id";

                    if ($conn->query($sql) === TRUE) {
                        echo json_encode(array('status'=>true,'msg'=>'Thanks for apply the loan !!'));
                    } else {
                        echo json_encode(array('status'=>false,'msg'=>$conn->error));
                    }
                    
                }else{

                    echo json_encode(array('status'=>true,'msg'=>"Thanks for apply the loan !!"));
                }
               
                $conn->close();

                
                return;
                   
    }else{

            echo json_encode(array('status'=>false,'msg'=>'field is required'));
    }


?>

