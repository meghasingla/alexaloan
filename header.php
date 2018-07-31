<?php include("functions.php");?>
<?php $page = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Alexa Fincorp</title>

    <link rel="stylesheet" type="text/css" href="css/styles.css"/>
    <link rel="stylesheet" type="text/css" href="css/contact-pop.css" />
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>  
    <link id="switcher" href="assets/css/theme-color/default.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="nav.css">
    <link rel="stylesheet" type="text/css" href="nav.js">
    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>
<script src="http://osvaldas.info/examples/main.js"></script>

<script src="http://osvaldas.info/examples/drop-down-navigation-touch-friendly-and-responsive/doubletaptogo.js"></script> 
<script src="js/main.js"></script>
<style>


h2 {
  /*margin: 1.75em 0 0;*/
  font-size: 5vw;
}

h3 { font-size: 1.3em; 

}

.v-center {
  height: 100vh;
  width: 100%;
  display: table;
  position: relative;
  text-align: center;
}

.v-center > div {
  display: table-cell;
  vertical-align: middle;
  position: relative;
  top: -10%;
}

.enq{
 width:100%;
 margin-bottom:17px;
box-shadow: 4px 8px 5px -2px #F1E6E6;
    border: 1px solid rgba(193, 193, 193, 0.28);
    padding: 7px;
}
.popup{
padding:20px;
min-width: 200px;
}
.emic{position:fixed; top: 25%; right: 0%;width: 66px; height: 100px;  z-index:12000;

}

.dropdown-menu.multi-column {
    width: 400px;
    color:#000
}
 
.dropdown-menu.multi-column .dropdown-menu {
    display: block !important;
    position: static !important;
    margin: 0 !important;
    border: none !important;
    box-shadow: none !important;
color: #000;

    
}



</style>

	
  
  </head>
  <body>
   <div class="emic">
					<a   href="emicalculator.php"><img src="img/calculator.png"></a>
					</div>
  

    <a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
 <header>
<div class="container">
<div clas="row">
  
<div class="col-md-6">
<a href="index.php">
<img src="img/logo.png" class="img-responsive">


</a>

</div>

  <div class="topnav" id="myTopnav">
    <nav >
  <ul class="nav navbar-nav wow fadeInRight animated animated" data-wow-delay=".5s" style="margin-top:-45px; float: right;">
    <li><a href="index.php" class="active" style="color:#003366; ">Home</a></li>

  <li class="dropdown" >
          <a  href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"  style="color:#003366; " >Loans</a>
          <div class="dropdown-menu multi-column">
              <div class="container-fluid">
                <div class="row-fluid">
                  <div class="span6">
                    <ul class="dropdown-menu">
                       <li><a  href="loan-against-property.php">Loan Against Property</a></li>
                        <li><a  href="agriculture-loan.php">Agriculture Loan</a></li>
                        <li><a   href="home-loan-transfer.php">Home Loan Transfer</a></li>
                        <li><a  href="cash-credit.php">Cash Credit/OD limit</a></li>
                          <li><a  href="two-wheeler-loan.php">Two Wheeler Loan</a></li>
                          <li><a   href="home-loan.php">Home Loan </a></li>

                    </ul>
                  </div>
                       <div class="span6">
                    <ul class="dropdown-menu">
                      <li><a  href="re-finance.php">Re-Finance</a></li>
                     <li><a  href="balance-transfer.php">Balance Transfer</a></li>
                      <li><a  href="cash-credit.php">Cash Credit</a></li>
                       <li><a  href="personal-loan.php">Personal Loan</a></li>
                     <li><a  href="car-loan.php">Car Loan</a></li>
                       <li><a  href="business-loan.php">Business Loan</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          
       </li>
    
    <li class="dropdown">
          <a class="ex1" href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" style="color:#003366;">Investment</a>
          <ul class="dropdown-menu" >
             
          <li><a  class="ex1" href="general-insurance.php" >General Insurance</a></li>
          <li><a class="ex1" href="life-insurance.php">Life Insurance</a></li>
          <li><a class="ex1" href="mutual-fund.php">Mutual Funds</a></li>
          </ul>
       </li>
       <li><a class="ex1" href="contactus.php" style="color:#003366;">Contact Us</a></li>
       <li><a class="ex1" href="aboutus.php" style="color:#003366;">About Us</a></li>
      <li style="margin-left: 119px;">  <img src="img/india-flag.png" class="center-block pull-right" width="70"></li>

  </ul>



</nav>
</div>


  <div class="col-md-6 margin-top-20">
     
        
</div>

</div>
</div>
</header>
<script>
  var link = window.location.pathname.replace('/', '');
    $('a[href="'+ link +'"]').addClass('active').parent('li').siblings('li').find('a').removeClass('active');
</script>


   
 
  
 