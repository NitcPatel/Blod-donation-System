
	<?php
  session_start();?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<!-- Mirrored from www.bloodbankonline.org/Register.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Oct 2017 16:22:01 GMT -->
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
						              <li><a class="MostNeededBlood" href="MostNeededBlood.html"><i class="fa fa-tint" aria-hidden="true"></i>Donate Blood</a></li>

                          <li><a class="MostNeededBlood" href="MostNeededBlood.html"><i class="fa fa-tint" aria-hidden="true"></i>Request Blood</a></li>

                          <li><a class="Logout" href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
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
                  <div class="col-sm-12" style="text-align: right;">
                    <div class="Welcome">Welcome</div>
                    <div class="slogam"></div>
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
								<h2>Blood Donation History</h2>	
											<div class="table-responsive">
                        <table class="table" align="center">
                        </thead>
                          <tr>
                            <td align="center" style="font-weight:bold;"><span style="font-size:20px; color:#0221B6;"><u>PID</u></span></td>
                            <td align="center" style="font-weight:bold;"><span style="font-size:20px; color:#0221B6;"><u>Amount</u></span></td>
                            <td align="center" style="font-weight:bold;"><span style="font-size:20px; color:#0221B6;"><u>Date</u></span></td>
                            <td align="center" style="font-weight:bold;"><span style="font-size:20px; color:#0221B6;"><u>Status</u></span></td>
                          </tr>
                        </thead>
                          <?php
                                include('conn.php');
                                $sql = "select * from donor";
                                $res = mysqli_query($conn,$sql);
                                while($row=mysqli_fetch_assoc($res))
                                {
                                  echo '<tr>';
                                  echo '<td align="center" style="font-weight:bold; font-size:16px">'.$row["pid"].'</td>';
                                  echo '<td align="center" style="font-weight:bold; font-size:16px">'.$row["donate_amount"].' ml</td>';
                                  echo '<td align="center" style="font-weight:bold; font-size:16px">'.$row["date"].'</td>';
                                  if($row["d_status"] == 0)
                                    echo '<td align="center" style="font-weight:bold; font-size:16px"><span style="font-size:16px; color:#d42e2e;">Pending</span></td>';
                                  else
                                    echo '<td align="center" style="font-weight:bold; font-size:16px"><span style="font-size:16px; color:#118614;">Donated</span></td>';
                                  echo '</tr>';
                                }
                                echo '</table>';
                          ?>
                        </table>
                      </div>
							</div>
							<div class="clearfix"></div>
							<br>
						</div>					
							

               <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 templatemo-content-wrapper">
                <div class="templatemo-content"> 

<section id="templatemo-page8-text" class="active">
					<div class="col-sm-12 col-md-12">
						
						<div class="row">
							<div class="col-sm-12 col-md-12">
								<h2>Blood Donation History</h2>	
											<div class="table-responsive">
                        <table class="table" align="center">
                        </thead>
                          <tr>
                            <td align="center" style="font-weight:bold;"><span style="font-size:20px; color:#0221B6;">PID</span></td>
                            <td align="center" style="font-weight:bold;"><span style="font-size:20px; color:#0221B6;">Amount</span></td>
                            <td align="center" style="font-weight:bold;"><span style="font-size:20px; color:#0221B6;">Date</span></td>
                            <td align="center" style="font-weight:bold;"><span style="font-size:20px; color:#0221B6;">Status</span></td>
                          </tr>
                        </thead>
                          <?php
                                include('conn.php');
                                $sql = "select * from donor";
                                $res = mysqli_query($conn,$sql);
                                while($row=mysqli_fetch_assoc($res))
                                {
                                  echo '<tr>';
                                  echo '<td align="center" style="font-weight:bold; font-size:16px">'.$row["pid"].'</td>';
                                  echo '<td align="center" style="font-weight:bold; font-size:16px">'.$row["donate_amount"].' ml</td>';
                                  echo '<td align="center" style="font-weight:bold; font-size:16px">'.$row["date"].'</td>';
                                  if($row["d_status"] == 0)
                                    echo '<td align="center" style="font-weight:bold; font-size:16px"><span style="font-size:16px; color:#d42e2e;">Pending</span></td>';
                                  else
                                    echo '<td align="center" style="font-weight:bold; font-size:16px"><span style="font-size:16px; color:#118614;">Donated</span></td>';
                                  echo '</tr>';
                                }
                                echo '</table>';
                          ?>
                        </table>
                      </div>
							</div>
							<div class="clearfix"></div>
							<br>
						</div>					
              <div class="clearfix"></div>
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