<?php
  #  session_start();
  #  if(isset($_SESSION['pid'])){

  #  }else{
        
     #   header("location:donor.php");
    #}
include 'conn.php'; 
?>



<?php
  #  $pid = $_SESSION['pid'];
 if(isset($_GET['submit']))
    { $status = 0;
      $pid = 1;
      $unit = $_GET['qt']; #quantity of blood
      $dd =   date_create($_GET['dd']); #DONATION DATE
      #echo "<h3>".$dd."</h3>";
      $sql = "select age,weight,blood_group from person where pid=$pid";

      $res=mysqli_query($conn,$sql);
            if($res)
            {
                $row = mysqli_fetch_assoc($res);
                $age = $row['age'];
                $weight = $row['weight'];
                $blood_group = $row['blood_group'];
                
                if($_GET['pds'] =='yes')
                {   
                     $lastDate = date_create($_GET['pd']);
                     $currdate = date_create(date('Y-m-d'));
                     echo $lastDate;
                     echo "</br>";
                     echo $currdate;
                     $datediff = date_diff($currdate,$lastDate,1);
                     $no_of_days = $datediff->format("%a");
                     if($no_of_days <= 90)
                        $status = 1;
                     else 
                        $status = 0;
                } 

                if($age < 18 || $weight < 45 || $status == 1)
                {
                    echo "<script>window.open('donor.php?j=You are not eligible to donate blood possible causes are:underweight or underage or you have recently donated blood','_self') </script> ";
                    exit();
                }
                else
                {
                     $currdate1 = date_create(date('Y-m-d'));
                     $datediff1 = date_diff($currdate1,$dd,1); 
                     $no_of_days1 = $datediff1->format("%a");   
                     if($no_of_days1 == 0)
                        $donation_status = 1;
                     else
                        $donation_status = 0;
                    $dd1=date("Y-m-d",strtotime($dd));
                     
                    $sql="insert into donor values($pid,$unit,'$dd1',$donation_status)";
                    $r=mysqli_query($conn,$sql);
                    if($r)
                    {
                        echo"<script>window.open('donor.php?k=Donation Process Completed','_self') </script> ";
                        exit();
                    }
                    else
                    {
                         echo("Error description: " . mysqli_error($conn));
                        #echo"<script>window.open('donor.php?k=Donation Process unsucessful','_self') </script> ";
                        #exit();
                    }
                }
            }
            else
            {
                        echo "<script>window.alert(\"No Such Donor Exist.\")</script>";

            }
    }                   

?>	


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->


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
    <link rel="stylesheet" href="css/templatemo_main3ebe.css?p=6271">
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
						
							 <form role="form" name="loginForm"  id="loginForm"  method="post" onsubmit="return LoginAccessDonar();"   enctype="multipart/form-data">
                         
						 <div class="col-sm-4">
						   <div class="form-group">
                                <!--<label for="contact_name">Name:</label>-->
                                <!-- <input type="text" required id="user_name_donar" name="user_name_donar" class="form-control form-control-top" placeholder="Email ID" />
                                <input type="hidden" id="BloodLoginForm" value="login" /> -->
                            </div>
						</div>
						
						<div class="col-sm-4" id="login_pass_div">
                            <div class="form-group" >
                                <!--<label for="contact_email">Email:</label>-->
                                <!-- <input type="password"  id="password_donar" name="password_donar" class="form-control form-control-top" placeholder="Password" /> -->
                            </div>           
                        </div>   
					<div class="col-sm-4">						
							<div id="loader_for_verify_login" class="pull-left display_no"><img style="width:30px;" src="images/processing.gif" /></div>
                           <!-- <button id="for_submit_login" type="submit"  class="btn btn-primary pull-left">Submit</button> &nbsp;	
							<button href="#" id="login_to_user" onclick="Forgot_my_pass('login');" class="btn-new link-forgot display_no">Go to login</button>							
							<button href="#" id="Forgot_my_password" onclick="Forgot_my_pass('forgot');" class="btn-new link-forgot">Forgot Password?</button>-->
							
							
                        </form>
					</div>
					</div>
					 					 					
                </div>
            </div>
        </div>  <!---->
		
		
		
		
		
		 <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 templatemo-content-wrapper">
                <div class="templatemo-content"> 

<section id="templatemo-page8-text" class="active">
					<div class="col-sm-12 col-md-12">
						
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<h2>Donate Blood</h2>	
								
							</div>
							<div class="clearfix"></div>
              <form role="form" onsubmit="donor.php"  class="form-horizontal" method="GET
              "  name="donarForm"  id="donarForm"  enctype="multipart/form-data"> 
              <div class="col-sm-6 col-md-6">     
                    <input type="hidden" name="BloodRegisterForm" value="add" />
                    <input type="hidden" name="Update_id"  value="" />
                    
                    <div class="form-group">
                      <label class="col-sm-5 control-label"> Amount <span style="color:#d42e2e;">*</span></label>
                      <div class="col-sm-7">
                       <select id="ddlGroupHeadTOP" name="qt" required class="form-control form-control-top">
                          <option value="" >-Select Blood Group-</option>
                            <!--<option value="ALL">ALL</option>-->
                          <option  value="100">100 ml</option>
                          <option  value="200">200 ml</option>
                          <option  value="300">300 ml</option>
                          <option  value="400">400 ml</option>
                          <option  value="500">500 ml</option>
                        </select>
                      </div>
                                          
                    </div>
                  
                    <div class="form-group">
                      <label class="col-sm-5 control-label">Previously Donated <span style="color:#d42e2e;">*</span></label>
                      <div class="col-sm-7">
                       <!-- <input type="text" placeholder="Name" value="" class="form-control" required autocomplete="off" ID="txtName" name="txtName">-->
                       <span style="font-size:18px; color:#ffcc00;">Yes</span>&nbsp;&nbsp;&nbsp;<input type="radio" name="pds" value="yes" checked>
                       &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <span style="font-size:18px; color:#ffcc00;">No</span>&nbsp;&nbsp;&nbsp;<input type="radio" name="pds" value="no" onclick="fnct()"/>
                       <script type="text/javascript">
                          function fnct(){
                            var x;
                            x = document.donarForm.radio.value;
                            //window.alert(x);
                            if(x == "no")
                              document.ByElementById('date1').disabled = true;
                            else
                              window.alert("njad");
                          }
                       </script>
                      </div>
                    </div>
                     
                    <div class="form-group">
                      <label class="col-sm-5 control-label">Date <span style="color:#d42e2e;">*</span> </label>
                      <div class="col-sm-7">
                        <input type="date" class="form-control" ID="date1" name="pd" >
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-5 control-label">Donation Date <span style="color:#d42e2e;">*</span> </label>
                      <div class="col-sm-7">
                        <input type="date" class="form-control" ID="donation_date" name="dd" >
                      </div>
                    </div>

                   
                                        
              </div> 
              <input type="submit" name="submit"  class="btn btn-primary to_be_register"/>
              </form>       
							<br>
						</div>					
							
						
							<div class="clearfix"></div>						
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
.Register{
		color: yellow !important;			
	}
</style>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/templatemo_script50c5.js?p=20556"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script>
		
		GetState('5','ddlstStateTop','');	
				
				
				
</script>
</body>

<!-- Mirrored from www.bloodbankonline.org/Register.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2017 16:22:04 GMT -->
</html>