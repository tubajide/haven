<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign-up || Zenithplus</title> 

    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">

 

</head>
<?php include("header.php"); ?>

<div class="breadcumb-wrapper" style="background-color: rgba(204,0,0,1);">
    <div class="container">
        <div class="pull-left">
            <ul class="list-inline link-list" >
                <li>
                    <a href="index.php" style='color: #fff'>Home</a>
                </li><!-- comment for inline hack
                --><li style='color: #fff'>
                    Sign-up
                </li>
			
            </ul><!-- /.list-line -->
			
        </div><!-- /.pull-left -->
       
    </div><!-- /.container -->
</div>
<?php unset($_SESSION["dontregisterpassword"]); unset($_SESSION["dontregisterusername"]); ?>
<?php if(!isset($_REQUEST["sig"])) { 
if(isset($_REQUEST["ref"])){
	$reff = $_REQUEST["ref"];
}
else{
	$reff = "";
}
?>
<section class="service">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-6 col-xs-12">
                <div class="about-info sec-padd">
                    <div class="section-title">
                        <h2>PACKAGES</h2>
                    </div>
                    <div class="text" >
                        <p style="color: #000 !important;">Select the appropriate package that suites you and make yourself stand out from the crowd</p>
                    </div>
                    
                </div>
            </div>
            <div class="no-padd item col-md-2 col-sm-6 col-xs-12">
                <div class="center">
                    <div class="icon_box">
                        <span class="fa fa-star-o"></span>
                        <h4><span style='font-size: 18px; color: #000;'>Zenith Star</span> <br> <hr /> <b><u>N1,000</u></b> <hr /></h4>
                    </div>
                </div>
                <div class="overlay-box center">
                    <div class="icon_box">
                        <span class="fa fa-star-o"></span>
                        <h4>Zenith Star <br> <b>N1,000</b></h4>
                    </div>
                    <div class="text">
                        <p><ul>
						<li style='color: #fff; padding: 10px;'>N5,000 Return Investment</b>
						</ul>
						</p>
                    </div>
                    <div class="link">
					<?php $rq = rand().microtime().time().uniqid(); ?>
                        <a href="<?php echo'signup.php?sig=1000&type=Zenith Star&ref='.$reff.'&'.$rq ?>" class="default_link">Sign up <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="no-padd item col-md-2 col-sm-6 col-xs-12">
                <div class="center">
                    <div class="icon_box">
                        <span class="fa fa-star-half-o"></span>
                        <h4><span style='font-size: 18px; color: #000;'>Zenith Professional</span> <br> <hr /> <b><u>N3,000</u></b> <hr /></h4>
                    </div>
                </div>
                <div class="overlay-box center">
                    <div class="icon_box">
                        <span class="fa fa-star-half-o"></span>
                        <h4>Zenith <br>Professional <br> <b>N3,000</b></h4>
                    </div>
                    <div class="text">
                        <p><ul>
						<li style='color: #fff; padding: 10px;'>N15,000 Return Investment</b>
						</ul>
						</p>
                    </div>
                   <div class="link">
					<?php $rq = rand().microtime().time().uniqid();?>
                        <a href="<?php echo'signup.php?sig=3000&type=Zenith Professional&'.$rq.'&ref='.$reff ?>" class="default_link">Sign up <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="no-padd item col-md-2 col-sm-6 col-xs-12">
                <div class="center">
                    <div class="icon_box">
                        <span class="fa fa-star"></span>
                        <h4><span style='font-size: 18px; color: #000;'>Zenith Master</span> <br> <hr /> <b><u>N5,000</u></b> <hr /></h4>
                    </div>
                </div>
                <div class="overlay-box center">
                    <div class="icon_box">
                        <span class="fa fa-star"></span>
                        <h4>Zenith Master <br> <b>N5,000</b></h4>
                    </div>
                    <div class="text">
                        <p><ul>
						<li style='color: #fff; padding: 10px;'>N20,000 Return Investment</b>
						</ul>
						</p>
                    </div>
                    <div class="link">
					<?php $rq = rand().microtime().time().uniqid();?>
                        <a href="<?php echo'signup.php?sig=5000&type=Zenith Master&'.$rq.'&ref='.$reff ?>" class="default_link">Sign up <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
			
			 <div id="activehover" class="no-padd item col-md-2 col-sm-6 col-xs-12">
                <div class="center">
                    <div class="icon_box">
                        <span class="fa fa-signal"></span>
                        <h4><span style='font-size: 18px; color: #000;'>Zenith Crown</span> <br> <hr /> <b><u>N10,000</u></b> <hr /></h4>
                    </div>
                </div>
                <div class="overlay-box center">
                    <div class="icon_box">
                        <span class="fa fa-signal"></span>
                        <h4>Zenith Crown <br> <b>N10,000</b></h4>
                    </div>
                    <div class="text">
                        <p><ul>
						<li style='color: #fff; padding: 10px;'>N50,000 Return Investment</b>
						</ul>
						</p>
                    </div>
                    <div class="link">
					<?php $rq = rand().microtime().time().uniqid();?>
                        <a href="<?php echo'signup.php?sig=10000&type=Zenith Crown&'.$rq.'&ref='.$reff ?>" class="default_link">Sign up <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
			
			<div id="activehover" class="no-padd item col-md-2 col-sm-6 col-xs-12">
                <div class="center">
                    <div class="icon_box">
                        <span class="fa fa-globe"></span>
                        <h4><span style='font-size: 18px; color: #000;'>Zenith King</span> <br> <hr /> <b><u>N15,000</u></b> <hr /></h4>
                    </div>
                </div>
                <div class="overlay-box center">
                    <div class="icon_box">
                        <span class="fa fa-globe"></span>
                        <h4>Zenith King <br> <b>N15,000</b></h4>
                    </div>
                    <div class="text">
                        <p><ul>
						<li style='color: #fff; padding: 10px;'>N75,000 Return Investment</b>
						</ul>
						</p>
                    </div>
                    <div class="link">
					<?php $rq = rand().microtime().time().uniqid();?>
                        <a href="<?php echo'signup.php?sig=20000&type=Zenith King&'.$rq.'&ref='.$reff ?>" class="default_link">Sign up <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
		
        </div>
    </div>
</section>
<?php } if(isset($_REQUEST["sig"])) { ?>
<section class="register-section sec-padd">

 <div id="content">
		<div class="container">
		<?php if(isset($_REQUEST["captcha_wrong"])){ ?>
    			<div class="alert alert-success alert-dismissable" style="background: rgba(204,0,0,0.6);"><!--alert -->
				<button  type="button" class="close" data-dismiss ="alert">
				<strong style="color:#fff">X</strong>
				</button>
											
				<span style="color: #fff;">
				<center><a href="#" style="color: #fff; font-weight: bold; text-decoration: none;"><i class="fa fa-info-circle"></i> <?php echo"Hello, something's wrong with the information you're giving us. Please input your information correctly!"; ?></a>
				</center>
				</span>
			</div><!--alert -->
			<?php } ?>
				<?php $package = $_REQUEST["type"]; $amount = $_REQUEST["sig"]; 
				if(isset($_REQUEST["ref"])){
					$ref=mysqli_real_escape_string($conn,$_REQUEST["ref"]);
				}
				else{
					$ref="None";
				}
				
				?>
				
                <div class="row">
                    <div class="col-md-6">
                        <div class="box">
						 <div class="section-title">
						 <?php  
						 $s = mysqli_query($conn, "select amount, package from `members` where username='$ref'");
						 $getresult = mysqli_fetch_assoc($s);
						 if($getresult){
							 $thepackage = $getresult['package'];
							 ?>
							<h3>Sign Up for Package (<?php echo"$getresult[package] - N".number_format($getresult['amount']).""; ?>)</h3>
							<div class="decor">Your Referrer is on <?php echo"$getresult[package] Package"; ?></div>
							<?php
						 }else{
							 $thepackage = $package;
							 ?>
							 <h3>Sign Up for Package (<?php echo"$package - N".number_format($amount).""; ?>)</h3>
							 <div class="decor"></div>
							 <?php
						 }
						 ?>
                </div>
                          <p class="text" style="margin-top: -20px; "> This process should not take more than one minute. You are only given 24 hours to pay up the stipulated amount above if you get a sponsor.<br>
								If you do not wish to belong to the selected group, please <a href="signup.php">Click Here</a></p>
							<br>
                            <form class="form-column column" action="process.php" method="post">
							<div class="">
								<div class="form-group">
                                    <label for="name-login">Referred by:</label>
									   <input type="text" name="referrer" class="form-control" value="<?php echo $ref ?>" readonly="" />
                                </div>								
								<div class="form-group">
                                    <label for="email-login">Title</label>
                                    <select class="form-control" name="title" required="required">
										<option value="">-- Select Title --</option>
										<option value="Advocate">Advocate</option><option value="Ambassador">Ambassador</option><option value="Barrister">Barrister</option><option value="Bishop">Bishop</option><option value="Brigadier">Brigadier</option><option value="Captain">Captain</option><option value="Chancellor">Chancellor</option><option value="Colonel">Colonel</option><option value="Councillor">Councillor</option><option value="Dame">Dame</option><option value="Doctor">Doctor</option><option value="Elder">Elder</option><option value="Engineer">Engineer</option><option value="Envagelist">Envagelist</option><option value="Eze">Eze</option><option value="General">General</option><option value="Governor">Governor</option><option value="Justice">Justice</option><option value="King">King</option><option value="Lord">Lord</option><option value="Madam">Madam</option><option value="Master">Master</option><option value="Miss">Miss</option><option value="Mr.">Mr.</option><option value="Mrs.">Mrs.</option><option value="Oba">Oba</option><option value="Obi">Obi</option><option value="Officer">Officer</option><option value="Pastor">Pastor</option><option value="31">Pope</option><option value="19">Prelate</option><option value="15">President</option><option value="23">Prince</option><option value="Princess">Princess</option><option value="Professor">Professor</option><option value="Provost">Provost</option><option value="Queen">Queen</option><option value="Reverend">Reverend</option><option value="Senator">Senator</option>
									  </select>
                                </div>
								
                                <div class="form-group">
                                    <label for="name-login">Fullname</label>
                                    <input type="text" class="form-control" name="fullname" placeholder="Enter your fullname" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="email-login">Gender</label>
                                    <select class="form-control" name="gender" required="required">
										<option value="">-- Select Sex --</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
                                </div> 
								<div class="form-group">
                                    <label for="email-login">Resident State</label>
                                    <select class="form-control" name="state" required="required">
										<option value="">-- Select State --</option>
										<option value="Abuja">Abuja FCT</option><option value="Anambra">Anambra</option><option value="Akwa Ibom">Akwa Ibom</option><option value="Adamawa">Adamawa</option><option value="Abia">Abia</option><option value="Bauchi">Bauchi</option><option value="Bayelsa">Bayelsa</option><option value="Benue">Benue</option><option value="Borno">Borno</option><option value="Cross River">Cross River</option><option value="Delta">Delta</option><option value="Ebonyi">Ebonyi</option><option value="Enugu">Enugu</option><option value="Edo">Edo</option><option value="Ekiti">Ekiti</option><option value="Gombe">Gombe</option><option value="Imo">Imo</option><option value="Jigawa">Jigawa</option><option value="Kaduna">Kaduna</option><option value="Kano">Kano</option><option value="Katsina">Katsina</option><option value="Kebbi">Kebbi</option><option value="Kogi">Kogi</option><option value="Kwara">Kwara</option><option value="Lagos">Lagos</option><option value="Nasarawa">Nasarawa</option><option value="Niger">Niger</option><option value="Ogun">Ogun</option><option value="Ondo">Ondo</option><option value="Osun">Osun</option><option value="Oyo">Oyo</option><option value="Plateau">Plateau</option><option value="Rivers">Rivers</option><option value="Sokoto">Sokoto</option><option value="Taraba">Taraba</option><option value="Yobe">Yobe</option><option value="Zamfara">Zamfara</option>									</select>
                                </div>
								   <div class="form-group">
                                    <label for="email">Email <span class="emailMSG"></span></label>
                                    <input type="email" class="form-control email_text" name="email" required="required" placeholder="Enter your Email address">
									
                                </div>
								</div>
                       </div>
                    </div>

                    <div class="col-md-6">
                        <div class="box">
                           	 <div class="section-title">
                    <h3>Critical Information</h3>
                    <div class="decor"></div>
                </div>

                                <div class="form-group">
                                    <label for="email">Contact Mobile <small>(080x, 070x, 081x, 090, Format)</small> <span class="phoneMSG">(<font color="red">Please Enter a Mobile Number</font><script type="text/javascript">
			$('.mobile_text').css("border", "1px solid red");
		</script>)</span></label>
                                    <input type="number" class="form-control mobile_text" maxlength="20" name="mobile" placeholder="Enter your Mobile number in the 080x, 070x, 081x, 090x Format" style="border: 1px solid red;" required="required">
									
                                </div>
                             
                                <div class="form-group">
                                    <label for="email">Choose Unique Username </label>
                                    <input type="text" class="form-control username_text" id="username" name="username" onkeypress="setTimeout(checknow, 1,'checkusername','username','usernameMSG');" placeholder="Enter your Unique Username. No spaces" required="required">
									<span style="float:right" id="usernameMSG"></span>
								 </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password1" name="password1" onkeypress="setTimeout(checknow, 1,'checkpassword','password1','pwdMeter');" placeholder="Please enter your password" required="required">
									<span style="float:right" id="pwdMeter"></span>
                                </div>
                                <div class="form-group">
                                    <label for="password">Confirm Password</label>
                                    <input type="password" class="form-control" id="password2" name="password2" onkeypress="setTimeout(checknow, 1,'matchpassword','password2','password_match_span');" placeholder="Please confirm your password" required="required">
									<span style="float:right" id="password_match_span"></span>
                                </div>
								<div class="form-group">
                                    <label for="email">Bank Account No. <span class="emailMSG"></span></label>
                                    <input type="number" class="form-control email_text" name="account" required="required" placeholder="Enter your Account Number">
								</div>
								<div class="form-group">
                                    <label for="email">Bank Name <span class="emailMSG"></span></label>
                                    <input type="text" class="form-control email_text" name="bankname" required="required" placeholder="Enter your Bank Name">
									
                                </div>
                                <div class="form-group">
								<?php $rand1 = rand(1,10); $rand2 = rand(1,10); $_SESSION["answer"] = $rand1 * $rand2;?>
						
                                <label>Captcha. What is the answer to <?php echo"$rand1 x $rand2 = ?"; ?></label>
										<input type="text" onkeypress="setTimeout(checknow, 1,'captcha','captcha_answer','ingnix');"  name="captcha_answer" id="captcha_answer" placeholder="Your Answer" class="form-control">
										<input name="captcha_answer_raw" type="hidden" value="<?php echo $answer; ?>" required="required">
                                </div>
								
                                <div class="">
									<input type="hidden" name="package" value="<?php echo $thepackage; ?>">
									<input type="hidden" name="amount" value="<?php echo $amount; ?>">
									<span id="ingnix"></span>
                                    <button type="submit" name="signupsubmit" class="thm-btn"><i class="fa fa-edit"></i> Create Account</button>
									
                                </div>
                            
                        </div>
                    </div>
					 </form>
                </div>
                <!-- /.row -->

            </div>
            </div>
   
</section>
<section class="awards center">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <img style="max-height: 100px; float: right; padding: 10px; margin-top: -15px;" src="images/zenithlogo.jpg" alt="" /> <h2 style="font-size: 50px; float: right; margin-top: 10px;">ZENITHPLUS</h2>
               
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              
                <div class="text"><p style="font-size: 20px; float: left; margin-top: 20px;">WE DON’T ONLY PAY, WE CONNECT PEOPLE</p></div>
              
            </div>
        </div>
    </div>
</section>
<script>
function checknow(whr,val,output)
{

	var serverPage = "process.php?" + whr + "=" + document.getElementById(val).value;
	xmlhttp.open("GET", serverPage);
	xmlhttp.onreadystatechange = function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById(output).innerHTML = xmlhttp.responseText;
			if(who == "msgp") setTimeout(check,9600,whr,who);
		}
			
	}
	xmlhttp.send(null);
}
</script>
<?php } ?>

<?php include("footer.php"); ?>