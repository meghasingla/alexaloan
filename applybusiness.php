<?php 
    require_once("recaptchalib.php");
// your secret key
$secret = "6LeVUS0UAAAAAOLXM-wyzHkIsVgb3ke-Nc3Qe-CI";

// empty response
$response = null;
 
if(isset($_POST['submit'])){
// check secret key
$reCaptcha = new ReCaptcha($secret);
// if submitted check response
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

$msg ="";
if ($response != null && $response->success) {
    apply_now($_POST);
  
 } else {
     $msg .= '<h4 class="text-danger">Please check I am not a Robot</h4>';
  }
}
?>
<div class="modal-dialog" role="document">
    <div class="modal-content popup">
   <div class="modal-header">
        
        <h4 class="modal-title">Apply Now</h4>
      </div>
     <form method="post" action="form/contactbusiness.php">
     <h3 class="message" style="margin-top:0px;margin-bottom:5px;color: green;"></h3>
<br>
<div class="row">
<div class="col-md-6">
  <div class="form-group">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
<input type="text" id="name" class="form-control" name="name" placeholder="Name" oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" title="Only Alphabetic Words " required> 
</div>
</div>
</div>

<div class="col-md-6">
<div class="form-group">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-home" aria-hidden="true"></i></span>
<input type="text" id="city" class="form-control" name="city" placeholder="City" oninput="this.value = this.value.replace(/[^a-zA-Z\s.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" title="Only Alphabetic Words " required> 
</div> 
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
<input type="email" id="emailid" class="form-control" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z.-]+\.[a-z]{2,3}$" required> 
</div> 
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-mobile fa" aria-hidden="true"></i></span>
<input type="text" id="phonenumber" class="mob form-control" name="mobile" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" maxlength="10" placeholder="Mobile Number" required>  
</div>
</div>
</div>

<div class="col-md-6">
  <div class="form-group">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
<select class="form-control" name="income_method" required>
<option value="Salaried">Salaried</option>
<option value="Self Employed Professional">Self Employed Professional</option>
<option value="Self Employed Business">Self Employed Business</option>
</select> 
</div>
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<div class="input-group">
<span class="input-group-addon"><i class="fa fa-inr" aria-hidden="true"></i></span>
<input type="text" class="form-control" name="monthlyincome" placeholder="Monthly Income" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required> 
</div> 
</div>
</div>
<div class="col-md-12">
<div class="form-group">
    <div class="g-recaptcha" data-sitekey="6LeVUS0UAAAAANkGdO8xITMLKsKrFuazPkUOz8co"></div>  
    </div>
    <div class="col-sm-12 col-xs-12">
     <?php echo @$msg;?>
    </div>
</div>
</div>
<input type="submit" id="otp_btn" name="submit" class="send btn btn-yellow pull-right" value="Submit" >
  
<div class="clearfix"></div>
  </form>
    </div>
  </div>