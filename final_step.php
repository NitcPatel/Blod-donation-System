<?php
    #session_start();
    #if(!isset($_SESSION['pid']))
    #{
	#	echo "<scrip>alert('You are not logged in')</scrip>";
	#	echo "<script>window.location = '#'</script>";
	#}
	#include 'conn.php'; 
?>





<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<!-- Mirrored from www.bloodbankonline.org/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2017 16:21:18 GMT -->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Blood Bank Online</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!-- 
    Authentic Template
    http://www.templatemo.com/tm-412-authentic
    -->
    <meta name="viewport" content="width=device-width">        
    <link rel="stylesheet" href="css/templatemo_main8aa2.css?p=16263">
    <link rel="stylesheet" href="css/datepicker.css">
   
    <!-- templatemo 412 authentic -->
</head>
<body>
    <div id="main-wrapper">
            <!--[if lt IE 7]>
                <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a rel="nofollow" href="http://browsehappy.com">upgrade your browser</a> or <a rel="nofollow" href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
                <![endif]-->

                <div class="container">
                    <!-- Static navbar -->
                    <div class="navbar navbar-default" role="navigation">
                        <div class="container-fluid box-shados">
                          <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button>
                      </div>
                      <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                          <li><a class="index" href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
						   
							<li><a class="Register" href="Register.php"><i class="fa fa-phone" aria-hidden="true"></i>Register</a></li>  
						                            <li><a class="WhyDonateBlood" href="WhyDonateBlood.html"><i class="fa fa-question-circle" aria-hidden="true"></i>Why donate blood?</a></li>
                          <li><a class="WhoNeedsBlood" href="WhoNeedsBlood.html"><i class="fa fa-user" aria-hidden="true"></i>Who needs blood?</a></li>
                          <li><a class="TipsOnDonating" href="TipsOnDonating.html"><i class="fa fa-book" aria-hidden="true"></i>Tips on donating</a></li>
                          <li><a class="MostNeededBlood" href="MostNeededBlood.html"><i class="fa fa-tint" aria-hidden="true"></i>Most needed blood</a></li>
                          <li><a class="ReferFriend" href="ReferFriend.html"><i class="fa fa-users" aria-hidden="true"></i>Refer a friend</a></li>
                          <li><a class="ContactUs" href="ContactUs.html"><i class="fa fa-phone" aria-hidden="true"></i>Contact Us</a></li>
						                         </ul>
                  </div><!--/.nav-collapse -->
              </div><!--/.container-fluid -->
	
	
	
          </div>
          <div class="image-section">
            <div class="image-container">
                <img src="images/Tue2014_BackgroundBokeh_3.jpg" id="templatemo-page1-img" class="main-img inactive" alt="Home">               
            </div>
        </div>
			
			<!-- my code begins here -->
			
			
			<div style = "backgroud:white; font-size:2em">
				<form method = "get" action = "final_step.php">
					<table style = "border: 1px solid black;" align = "center">
						
					</table>
				</form>
			</div>
			<!-- my code ends here --	>
			
			

</div>
</section>
    </div><!-- /.templatemo-content -->  
</div><!-- /.templatemo-content-wrapper --> 

<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 footer templatemo-content-wrapper">
        <div class="footer-wrapper">
          <!--   <p class="social-icons">
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </p> -->
            <p id="tm-copyright">
            	Copyright © 2017 - National Institute of Technology Calicut  All Rights Reserved
            </p>
			<p class="copy-right">Sponsored by <a href="http://www.nitc.ac.in/" target="_blank">nitc.ac.in</a> 
		  Powered by <a href="http://www.icmindia.com/" target="_blank"> CSE NITC</a></p>
            </div>                    
        </div><!-- /.footer --> 
</div>               
</div> <!-- /.container -->
</div><!-- /#main-wrapper -->
</div><!-- /.row --> 
<!-- 
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>/#preloader -->
<style>
.index{
		color: yellow !important;			
	}
</style>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/templatemo_scriptd217.js?p=24244"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script>
		
		GetState('5','ddlstStateTop','');	
				
				
				
</script>
</body>

<!-- Mirrored from www.bloodbankonline.org/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2017 16:21:52 GMT -->
</html>
<?php
	if(isset($_GET['submit']))
	{
		$val = $_GET['nit'];
		echo $val;
		
?>



