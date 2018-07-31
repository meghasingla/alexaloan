<div class="clearfix"></div>
<footer>
<div id="footer" class="container">
<div class="row">
 <div class="col-sm-2">
<h5>Loans</h5>
<ul class="list-unstyled">
<li><a href="loan-against-property.php">Loan Against Property</a></li>
<li><a href="home-loan-transfer.php">Home Loan Transfer</a></li>
<li><a href="agriculture-loan.php">Agriculture Loan</a></li>
<li><a href="home-loan.php">Home Loan</a></li>
</ul>
</div>
<div class="col-sm-2">
<h5></h5>
<ul class="list-unstyled">
<li><a href="cash-credit.php">Cash Credit/OD limit</a></li>
<li><a href="two-wheeler-loan.php">Two Wheeler Loan</a></li>
<li><a href="re-finance.php">Re-Finance</a></li>
<li><a href="balance-transfer.php">Balance Transfer</a></li>
</ul>
</div>
<div class="col-sm-2">
<h5></h5>
<ul class="list-unstyled">
<li><a href="cash-credit.php">Cash Credit</a></li>
<li><a href="personal-loan.php">Personal Loan</a></li>
<li><a href="car-loan.php">Car Loan</a></li>
<li><a href="business-loan.php">Business Loan</a></li>
</ul>
</div>
<div class="col-sm-2">
<h5>Investment</h5>
<ul class="list-unstyled">
<li><a href="general-insurance.php">General Insurance</a></li>
<li><a href="life-insurance.php">Life Insurance</a></li>
<li><a href="sip.php">SIP</a></li>
<li><a href="mutual-fund.php">Mutual Funds</a></li>
</ul>
</div>
<div class="col-sm-2">
<h5>Useful Links</h5>
<ul class="list-unstyled">
<li><a href="aboutus.php">About us</a></li>
<li><a href="career.php">Career</a></li>
<li><a href="">Privacy Policy</a></li>
<li><a href="">Terms & Condition</a></li>
</ul>
</div>  
 <div class="col-sm-2 last">
<h5>Contact Us</h5>
<ul>
<li class="phoneno">+91 98128 98686</li>
<li class="phoneno"></li>
<li class="email"><a href="#">info@alexafincorp.com</a></li>
<li class="email"><a href="#">sales@alexafincorp.com</a></li>
</ul>
</div>   
</div>
</div>
<div class="footer_bottom">
<div class="container">
<div class="row">
<div class="col-md-10">
<p class="pull-left margin-top-10">2017 Alexa Fincorp. All right Reserved</a></p> 
</div>
<div class="col-md-2">

<p class="pull-right"><a href="http://www.alexafincorp.com/webmail" target="_blank" class="btn btn-yellow btn-block"><i class="fa fa-envelope-o"></i> Sign In</a></p>
</div>

</div>
</div>
</div> 
</footer>
<!--############ footer end ################--> 
  <!-- End counter section -->

  
  <!-- <section id="client">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="client-area">
            <ul class="client-table">
              <li><img src="assets/images/indusind.png" alt=""></li>
              <li><img src="assets/images/icici.png" alt=""></li>
              <li><img src="assets/images/axis.png" alt=""></li>
              <li><img src="assets/images/hdfc.png" alt=""></li>
              <li><img src="assets/images/canara.png" alt=""></li>
              <li><img src="assets/images/pnb.png" alt=""></li>
              <li><img src="assets/images/sbi.png" alt=""></li>
              <li><img src="assets/images/citi.png" alt=""></li>
              <li><img src="assets/images/hdfc.png" alt=""></li>
              <li><img src="assets/images/indusind.png" alt=""></li>                
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section> -->
  
  <!-- End Contact section -->
  

  <!-- Start Footer -->    
  <!--<footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-top-area">                     
              <div class="footer-social">
                <a class="facebook" href="" target="_blank"><span class="fa fa-facebook"></span></a>
                <a class="twitter" href="" target="_blank"><span class="fa fa-twitter"></span></a>
                <a class="google-plus" href="" target="_blank"><span class="fa fa-instagram"></span></a>
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
                 <a style="color:#fff; padding:10px" href="aboutus.php">ABOUT US</a> 
			 <a style="color:#fff; padding:10px" href="blogs.php">BLOG</a>
			 <a style="color:#fff; padding:10px" href="#">DISCLAMER</a>
			 <a style="color:#fff; padding:10px" href="#">PRIVACY POLICY</a> 
			 <a style="color:#fff; padding:10px" href="contact.php">CONTACT / ADVERTISE</a> 
			 
			 </ul>
			
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </footer>-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  <script type="text/javascript" src="assets/js/wow.js"></script> 
  <script type="text/javascript" src="assets/js/custom.js"></script>
<script>        
 function valid_enquiry()
{
//alert(document.getElementById('other').checked);
 if(document.getElementById('phonenumber').value=='')

   {
  alert('Enter your mobile no.');
  document.getElementById('phonenumber').focus();
  return false;
   }
var contact_id=document.getElementById("phonenumber").value;
var contact_pattern=/^\d{10}$/;
if(!contact_id.match(contact_pattern))
{
alert("plz enter 10 digit mobile number");
document.getElementById("phonenumber").focus();
return false;
 }  
  
}       
</script>

  </body>
</html>
<script type="text/javascript">stLight.options({publisher: "0e1dff39-4652-4b4c-b828-18f74c1357b9", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<script>
var options={ "publisher": "0e1dff39-4652-4b4c-b828-18f74c1357b9", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter", "instagram"]}};
var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
</script>
<script src="asset/plugins/iCheck/icheck.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script>
  (function(link) {
    $('#myTopnav').find('a').removeClass('active');
    var linkEl = $('a[href="'+ link +'"]');
    linkEl.addClass('active').siblings('a');
    linkEl.closest('.dropdown').children('a').addClass('active').sibli;
    // console.log('link is ', linkEl);
  })(window.location.pathname.replace('/', ''));

</script>