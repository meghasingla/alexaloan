<?php 

if(isset($_GET["username"])&&isset($_GET["emailid"])&&isset($_GET["phonenumber"])&&isset($_GET["comment"])){

	$name = $_GET["username"];
  $email = $_GET["emailid"];
	$number = $_GET['phonenumber'];
	$comment = $_GET['comment'];

	$otp = mt_rand(100000,999999);
// sms.ontimeinfotech.com/submitsms.jsp?user=Scholar&key=e23dc97b9bXX&mobile=+917840039329&message=test sms&senderid=abcdef&accusage=1
	$smsmessage ="Your%20One%20Time%20Password%20is%20".$otp."%20Loan%20Sarthi%20(www.loansarthi.com)";
    $request = 'http://sms.ontimeinfotech.com/submitsms.jsp?user=Scholar&key=e23dc97b9bXX&mobile='.$number.'&message='.$smsmessage.'&senderid=onTime&accusage=1';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $request); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, '3');
    $content = trim(curl_exec($ch));
    curl_close($ch);

    $servername = "localhost";
    $username = "loansart_kdfa332";
    $password = "hello@895";
    $dbname = "loansart_hedfajksd";
    /*$username = "root";
    $password = "root";
    $dbname = "loansart";*/

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "SELECT email FROM applynow WHERE email='$email'";
    $row=$conn->query($sql);
                
    if($row->num_rows==0){

    		$sql = "INSERT INTO applynow (name, email, otp,comment,phonenumber)
                    VALUES ('$name', '$email', '$otp','$comment','$number')";
$result=mysql_query($sql);
if($result>1)
{
 $data = array('status'=>true,'data' => $data);
echo json_encode($data);       
}
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="css/styles.css"/>
<link rel="stylesheet" type="text/css" href="css/contact-pop.css" />
<!-- include jQuery and Contact-Pop scripts -->
<script src="js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/contact-pop.js"></script>
  <script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>
    <meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Loan Sarthi</title>
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css"/> 
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>  
    <link id="switcher" href="assets/css/theme-color/default.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	
	<script type="text/javascript" src="js/jquery-1.8.2.js"></script>
<style type="text/css">
#overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000;
filter:alpha(opacity=70);
-moz-opacity:0.7;
-khtml-opacity: 0.7;
opacity: 0.7;
z-index: 100;
display: none;
}
.cnt223 a{
text-decoration: none;
}
.popup{
width: 100%;
margin: 0 auto;
display: none;
position: fixed;
z-index: 101;
}
.cnt223{
min-width: 500px;
width: 500px;
min-height: 150px;
margin: 100px auto;
background: #f3f3f3;
position: relative;
z-index: 103;
padding: 15px;
border-radius: 5px;
box-shadow: 0 2px 5px #000;
}
.cnt223 p{
clear: both;
color: #555555;
text-align: justify;
}
.cnt223 p a{
color: #d91900;
font-weight: bold;
}
.cnt223 .x{
float: right;
    height: 35px;
    left: 14px;
    position: relative;
    top: -13px;
    width: 34px;
}
.cnt223 .x:hover{
cursor: pointer;
}
.enq{width:488px; height:40px !important; }
.enq1{height:80px; width:488px}
.btn{
background-color#000;
width:100px;

margin-top:15px;
}
.title h4{font-size:30px; margin:0 0 20px 25px; padding-left:15px}
</style>
<script type='text/javascript'>
$(function(){
var overlay = $('<div id="overlay"></div>');
overlay.show();
overlay.appendTo(document.body);
$('.popup').show();
$('.close').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});

$('.x').click(function(){
$('.popup').hide();
overlay.appendTo(document.body).remove();
return false;
});
});
</script>
<script src="js/jquery-1.11.1.min.js"></script> 
<script>
$(function(){

var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

	$('a[data-modal-id]').click(function(e) {
		e.preventDefault();
    $("body").append(appendthis);
    $(".modal-overlay").fadeTo(500, 0.7);
    //$(".js-modalbox").fadeIn(500);
		var modalBox = $(this).attr('data-modal-id');
		$('#'+modalBox).fadeIn($(this).data());
	});  
  
  
$(".js-modal-close, .modal-overlay").click(function() {
    $(".modal-box, .modal-overlay").fadeOut(500, function() {
        $(".modal-overlay").remove();
    });
 
});
 
$(window).resize(function() {
    $(".modal-box").css({
        top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
        left: ($(window).width() - $(".modal-box").outerWidth()) / 2
    });
});
 
$(window).resize();
 
});
</script>
	
  
  </head>
  <body>
  <div class='popup'>
<div class='cnt223'>
<img src='Close.png' alt='quit' class='x' id='x' />

<h3 class="message" style="margin-top:0px;margin-bottom:5px;color: green;"></h3>
<br>
 <form id="register" name="myform" action="javascript:void(0);" method="post" >
    <input type="hidden" id="username" class="username" name="username" value="<?php echo $name; ?>" placeholder="Name" required />

    <input type="hidden" id="emailid" class="emailid" name="emailid" value="<?php echo $email; ?>"  placeholder="Email"  required
    oninvalid="setCustomValidity('Please Enter Proper Email Id')"
    onchange="try{setCustomValidity('')}catch(e){}" />  

    <input type="hidden" id="phonenumber" class="mob" name="phonenumber" 
    pattern="^\d{4}\d{3}\d{3}$" placeholder="Mobile Number" maxlength="10" value="<?php echo $number; ?>"  oninvalid="InvalidMsg(this);"  oninput="InvalidMsg(this);"  required >  
  <input type="hidden" id="username" class="username" name="username" value="<?php echo $comment; ?>" placeholder="Name" required />

 <input type="text" name="otp" id="otp" class="toptext" pattern="^\d{6}$" placeholder="Enter OTP (Please check your mobile no.)"  /> 
    
  <button type="submit" id="submit_btn" class="otp" value="" style=" background-color:#00D999; margin-right:15px;"> Submit</button>
  </form>
</div>
</div>

</div>

<script type="text/javascript">
  
  $('#otp_btn').click(function(event) {

        var phonenumber=$('#phonenumber').val();
        var username=$('#username').val();
        var emailid=$('#emailid').val();
        var emailid=$('#comment').val();

        if(Number(phonenumber)){

            $('#otp_btn').html('Sending');
            $('.message').html('');

            $.ajax({
                type : 'GET',
                url : 'sendotp.php?phonenumber='+phonenumber+'&username='+username+'&emailid='+emailid,
                mimeType:"multipart/form-data",
                contentType: false,
                cache: false,
                processData:false
            }).success(function(data) {
                
                console.log(data);
                var jsondata = JSON.parse(data);
               // console.log(data);

                if(jsondata.status==true){

                    $('#otp_btn').html('OTP Sent');
                    $('#submit_btn').removeAttr('disabled','');
                    $('#otp_btn').attr('disabled','disabled');

                }else{

                    $('.message').html(jsondata.msg);
                    $('#otp_btn').html('Verified');
                }



            }).fail(function(jqXHR, textStatus, errorThrown) {
                console.log('error thhrow');
            });
        }
  });

  $('form').submit(function(event) {
$(function(){
		// Calling Login Form
		$("form").click(function(){
			$(".social_login").hide();
			$(".user_login").show();
			return false;
		});

		// Calling Register Form
		$("#register_form").click(function(){
			$(".social_login").hide();
			$(".user_register").show();
			$(".header_title").text('Register');
			return false;
		});

		// Going back to Social Forms
		$(".back_btn").click(function(){
			$(".user_login").hide();
			$(".user_register").hide();
			$(".social_login").show();
			$(".header_title").text('Login');
			return false;
		});

	})
            var form = $(this);
            var formData = new FormData(this);
            $('.message').html('');

            $('#submit_btn').html('Loading....');

            $.ajax({
                type : 'post',
                url : 'register.php',
                data : formData,
                mimeType:"multipart/form-data",
                contentType: false,
                cache: false,
                processData:false
            }).success(function(data) {   
                console.log(data);
                var jsondata = JSON.parse(data);
                console.log(jsondata);

                if(jsondata.status==true){

                    $('#username').val('');
                    $('#emailid').val('');
                    $('#phonenumber').val('');
                    $('#otp').val('');
                    $('#comment').val('');
                    $('#otp_btn').html('Message Sent');
                    $('#otp_btn').removeAttr('disabled','');
                    window.location = 'thankyou.html';
                    
                }else{

                }

               

                $('#submit_btn').html('Submit');
                $('.message').html(jsondata.msg);

            }).fail(function(jqXHR, textStatus, errorThrown) {
                console.log('error thhrow');
            });
  });

</script>
	
</div>
</div>
  </div>
  
</div>

 
  </div>
    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>

  <section id="about" >

    <div class="container" >
	
      <div class="row">
        <div class="col-md-12">
          <!-- Start welcome area -->
		  
          <div class="welcome-area">
		  
                 <div class="header-content">
				 <h3>Welcome to <span><span style="color:#FC7700;">LOAN</span> <span style="color:#00D999;">SARTHI</span></span>
		</h3>
		<h3>PARTNER IN YOUR SUCCESS AND GROWTH</h3>
	 
              <ul class="wc-table">
                <li>
                  <div class="single-wc-content">
                  <a href="business-loan.html" style="padding:10px"> <img src="img/business.png" onMouseOver="this.src='img/business1.png';"
      onmouseout="this.src='img/business.png';"/></a>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content">
                  <a href="car-loan.html" style="padding:10px"> <img src="img/car.png" onMouseOver="this.src='img/car1.png';"
      onmouseout="this.src='img/car.png';" title="Car Loan"></a>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content">
                 <a href="home-loan.html" style="padding:10px">  <img src="img/homeloan.png"  onmouseover="this.src='img/homeloan1.png';"
      onmouseout="this.src='img/homeloan.png';" title="Home Loan"></a>
                  </div>
                </li>
                <li>
                  <div class="single-wc-content">
             <a href="loan-against-property.html" style="padding:10px">  <img src="img/loanagainst.png" onMouseOver="this.src='img/loanagainst1.png';" onMouseOut="this.src='img/loanagainst.png';" title="Loan Against Property"></a>
                  </div>
                </li>
				
				 <li>
                  <div class="single-wc-content">
                    <a href="personal-loan.html" style="padding:10px">  <img src="img/personal.png"  onmouseover="this.src='img/personal1.png';" onMouseOut="this.src='img/personal.png';" title="Personal Loan"></a>
                  </div>
                </li>
				 <li>
                  <div class="single-wc-content">
                  <a href="working-capital.html" style="padding:10px">  <img src="img/working.png" onMouseOver="this.src='img/working1.png';" onMouseOut="this.src='img/working.png';"  title="Working Capital"></a>
                  </div>
                </li>
              </ul>
			   <div style="width:80%; margin:0 auto"><a href="#" data-modal-id="popup1" >
	 <button type="submit" data-text="Click Here to Apply Loan"  class="button button-default"  style="width:100%"><span>Click Here to Apply Loan</span></button></a>
            </div>
		
          </div>
		  
		  
        </div>
      </div>
      
    </div>
  </section >
  
   <section id="counter" align="center">
    <img src="assets/images/counter-bg.jpg" alt="Loan Sarthi">
    <div class="counter-overlay" align="center" style="padding-left:200px;">
      <div class="container" align="center">
        <div class="row" align="center">
          <div class="col-md-12">
            <!-- Start counter area -->
            <div class="counter-area">
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-users"></span>
                  <div class="counter-count">
                    <span class="counter">1050</span>
                    <p>Happy Clients</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-bus"></span>
                  <div class="counter-count">
                    <span class="counter">1750</span>
                    <p>Meetings</p>
                  </div>
                </div>
              </div>
              <!--<div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-twitter"></span>
                  <div class="counter-count">
                    <span class="counter">2,300</span>
                    <p>Followers</p>
                  </div>
                </div>
              </div>-->
              <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="single-counter">
                  <span class="fa fa-tasks"></span>
                  <div class="counter-count">
                    <span class="counter">800</span>
                    <p>Loans done</p>
                  </div>
                </div>
              </div>    
            </div>
          </div>
        </div>
      </div>
    </div> 
  </section>
  <!-- End counter section -->

  
   <section id="client">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="client-area">
            <ul class="client-table">
              <li><img src="assets/images/indusind.png" alt="Loan Sarthi"></li>
              <li><img src="assets/images/icici.png" alt="Loan Sarthi"></li>
              <li><img src="assets/images/axis.png" alt="Loan Sarthi"></li>
              <li><img src="assets/images/hdfc.png" alt="Loan Sarthi"></li>
              <li><img src="assets/images/canara.png" alt="Loan Sarthi"></li>
              <li><img src="assets/images/pnb.png" alt="Loan Sarthi"></li>
              <li><img src="assets/images/sbi.png" alt="Loan Sarthi"></li>
              <li><img src="assets/images/citi.png" alt="Loan Sarthi"></li>
              <li><img src="assets/images/hdfc.png" alt="Loan Sarthi"></li>
              <li><img src="assets/images/indusind.png" alt="Loan Sarthi"></li>                
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- End Contact section -->
  

  <!-- Start Footer -->    
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-top-area">                     
              <div class="footer-social">
                <a class="facebook" href="https://www.facebook.com/Loan-Sarthi-1605676156387549/?ref=bookmarks" target="_blank"><span class="fa fa-facebook"></span></a>
                <a class="twitter" href="https://twitter.com/LoanSarthi" target="_blank"><span class="fa fa-twitter"></span></a>
                <a class="google-plus" href="https://plus.google.com/u/5/117471792815777427206/posts" target="_blank"><span class="fa fa-google-plus"></span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
	<div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="blog-footer"> 
            <ul style="float:left;">			
             <a style="color:#fff; padding:10px" href="#">ABOUT US</a> 
			 <a style="color:#fff; padding:10px" href="#">BLOG</a>
			 <a style="color:#fff; padding:10px" href="disclaimer.html">DISCLAMER</a> 
			 <a style="color:#fff; padding:10px" href="privacy-policy.html">PRIVACY POLICY</a> 
			 <a style="color:#fff; padding:10px" href="contact.html">CONTACT / ADVERTISE</a> 
			 
			 </ul>
			 <p align="right">Maintained by <a href="http://www.ontimeinfotech.com" target="_blank">onTime Infotech</a></p>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  <script type="text/javascript" src="assets/js/wow.js"></script> 
  <script type="text/javascript" src="assets/js/custom.js"></script>
  

  </body>
</html>