<?php
require('conn.php');
session_start();
if(isset($_SESSION['username']))
header('location:customizedprofile.php');
else{}


				if(isset($_POST['submit']))
				{
					$Email = $_POST['user_name_donar'];
					$password = $_POST['password_donar'];
        			$sql = "select * from person where email ='$Email' and password = '$password'";
     			    #$r = mysqli_query($conn,$sql);

       				$r=mysqli_query($conn,$sql);
	  				if($r)
	   				{
						if(mysqli_num_rows($r)>0)
		 				{	
		   	   	     		
		    				$_SESSION['username']=$Email;
		       				$_SESSION['password']=$password;
		       				header('location:customizedprofile.php');
		       				
		   				}
						else{
						    	echo"<script>alert('invalid email or password','_self');window.location =('index.php') </script> ";
		 					    exit(); }
						
	  				 }	

	 			  else  
	  				 	   die("Error".mysqli_error($conn));
	   				 
	  			}	 	

				






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
						   
							<li><a class="Register" href="Register.html"><i class="fa fa-phone" aria-hidden="true"></i>Register</a></li>  
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
   
		
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="banner-main box-shados">               
				 <div class="col-sm-4">
						<div class="logo">
						<div class="col-sm-12">
							<img src="images/logo_1.png" alt="Contact">						
						</div>
						</div>						
					</div>
			
					  
					<div class="col-sm-8">
					 <div class="col-sm-12">					 
							<h4 id="login_title_top">Donor Login</h4>
						</div>
						
							 <form role="form" name="loginForm"  id="loginForm"  method="post" action="index.php"   enctype="multipart/form-data">
                         
						 <div class="col-sm-4">
						   <div class="form-group">
                                <!--<label for="contact_name">Name:</label>-->
                                <input type="text" required id="user_name_donar" name="user_name_donar" class="form-control form-control-top" placeholder="Email ID" />
                                <input type="hidden" id="BloodLoginForm" value="login" />
                            </div>
						</div>
						
						<div class="col-sm-4" id="login_pass_div">
                            <div class="form-group" >
                                <!--<label for="contact_email">Email:</label>-->
                                <input type="password"  id="password_donar" name="password_donar" class="form-control form-control-top" placeholder="Password" />
                            </div>           
                        </div>   
					<div class="col-sm-4">						
							<div id="loader_for_verify_login" class="pull-left display_no"><img style="width:30px;" src="images/processing.gif" /></div>
                            <input id="for_submit_login" type="submit"  class="btn btn-primary pull-left" name="submit" value="submit">	&nbsp;&nbsp;&nbsp;<br/>
                           <!-- <font color="red"><?php echo @$_GET['j'];?></font> -->
							<button href="#" id="login_to_user" onclick="Forgot_my_pass('login');" class="btn-new link-forgot display_no">Go to login</button>							
							<!--<button href="#" id="Forgot_my_password" onclick="Forgot_my_pass('forgot');" class="btn-new link-forgot">Forgot Password?</button>-->
							<h5><font color="red"><?php echo @$_GET['j'];?></font></h5>
							
                        </form>
					</div>
					</div>
					 					 					
                </div>
            </div>
        </div>  <!---->
		
		
		
		 <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="box-shados"> 
			  <div class="col-lg-12 search-split">
					<h4> Search Blood</h4>					
					 <form role="form" method="POST"  name="DonarFilterForm"  id="DonarFilterForm"  enctype="multipart/form-data" action="search_result.php">					
                            
						    
							
							<div class="col-sm-2">
                            <div class="form-group ">
                               <select id="ddlGroupHeadTOP" name="blood_group" required class="form-control form-control-top">
								<option value="">-Select Blood Group-</option>
									<!--<option value="ALL">ALL</option>-->
								<option  value="B+">B+</option>
								<option  value="B-">B-</option>
								<option  value="AB+">AB+</option>
								<option  value="AB-">AB-</option>
								<option  value="O+">O+</option>
								<option  value="O-">O-</option>
								<option  value="A+">A+</option>
								<option  value="A-">A-</option>
								</select>
									 
                            </div> 
							</div>

							<div class="col-sm-2">
                            <div class="form-group ">
                               <select id="ddlGroupHeadTOP" name="blood_amount" required class="form-control form-control-top">
								<option value="">-Select Blood Group-</option>
									<!--<option value="ALL">ALL</option>-->
								<option  value="100">100 ml</option>
								<option  value="200">200 ml</option>
								<option  value="300">300 ml</option>
								<option  value="400">400 ml</option>
								<option  value="500">500 ml</option>
								</select>
									 
                            </div> 
							</div>
							<div class="col-sm-2">
							
							<input type="submit" name ="search" class="btn btn-primary pull-left" value = "Search"/>
							<!--<button type="submit" class="btn btn-primary pull-left">Search</button>-->
							</div>
                        </form>						
					</div>
					
					
					
					
                </div>
            </div>
        </div>
		
		 <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 templatemo-content-wrapper">
                <div class="templatemo-content">        
<section id="templatemo-page1-text">
<div class="col-sm-12 col-md-12">
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<h2> Welcome to Blood Bank</h2>							
		</div>
		<div class="clearfix"></div>
		<br>
	</div>
	<div class="col-sm-10 col-md-10">
		
		
		<p>INODA WELCOMES YOU to the Blood Bank database in our WebSite. If you are a donor , We appreciate you signing up online as a Donor. If you need blood we are happy to serve you.</p>
		<p>This blood donor list is hosted by <a href="http://www.easyinsuranceindia.com/" target="_blank">easyinsuranceindia.com</a> on behalf of INODA (hereinafter referred to as Organizers) as a public service without any profit motive. This is a free service.</p>
		<p>While the Organisers have taken all steps to obtain accurate and up-to-date information of potential blood donors, the Organisers and ICM Computers do not guarantee accuracy of the information contained herein or the suitability of the persons listed as any liability for direct or consequential damage to any person using this blood donor list including loss of life or damage due to infection of any nature arising out of blood transfusion from persons whose names have been listed in this website.</p>
		<div class="home_quote">We request donors to update contact details regularly.</div>
		<br/>
</div>













<!--<div style="color:#FFF;">
		 <div class="row">
			<div class="col-sm-12 col-md-12"><h3 class="text-info">What Is Insurance</h3></div>
			<div class="col-sm-5 col-md-5 text-left text-danger"><span class="text-muted">In</span> Health <span class="text-muted">|</span> ICM Transfer</div>
			<div class="col-sm-7 col-md-7 text-right text-danger">5 Answer <span class="text-muted">|</span> 29 Views <span class="text-muted">|</span> 1222 Days <span class="text-muted">|</span> <span class="text-success">Answered writen id is ICM</span></div>
		
			<div class="col-sm-12 col-md-12 ">While the Organisers have taken all steps to obtain accurate and up-to-date information of potential blood donors, the Organisers and ICM Computers do not guarantee accuracy of the information .. <span class="text-muted">Read More</span></div>		
			<div class="col-sm-12 col-md-12"><span class="text-muted">Answered by</span> sujitha <span class="text-muted">|</span> 13698 Days Ago</div>
		</div> 
	</div>-->
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
            	Copyright © 2017 - Blood Bank Online  All Rights Reserved
            </p>
			<p class="copy-right">Sponsored by <a href="http://www.easyinsuranceindia.com/" target="_blank">easyinsuranceindia.com</a>. 
		  Powered by <a href="http://www.icmindia.com/" target="_blank"> ICM Computers</a></p>
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


