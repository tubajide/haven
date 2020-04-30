
<body>
<style>
	.ulstyle{
		font-size: 12px;
		color: #000;
		line-height: 24px;
		list-style: circle;
		padding: 10px;
	}
</style>
<div class="boxed_wrapper">


<?php session_start(); 
include("temp/database.php");  error_reporting(0);
?>
<header class="top-bar">
    <div class="container">
        <div class="clearfix">
            <ul class="top-bar-text float_left">
               
                <li class='info-note'><i class="icon-note"></i>info@zenithplus.org</li>
                <li><i class="icon-world"></i>Abuja, Lagos. Nigeria</li>
            </ul>
            <ul class="social float_right">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
        </div>
        <script>
		var xmlhttp = new XMLHttpRequest();
		</script>

    </div>
</header>


<section class="theme_menu stricky">
    <div class="container" style="">
        <div class="row">
            <div class="col-md-3">
                <div class="main-logo">
                    <a href="index.html"><img style="max-height: 80px; margin-top: -20px; padding-bottom: -10px;" src="images/zenithlogo.jpg" alt=""></a>
                </div>
            </div>
            <div class="col-md-9 menu-column">
                <nav class="menuzord" id="main_menu">
                   <ul class="menuzord-menu" >
                        <li><a href="index.php"><i class="fa fa-home"></i> Home</a></li>

                        <li><a href="#"><i class="fa fa-info-circle"></i> About us</a>
                        <ul class="dropdown">
                            <li><a href="about.php" class="dropdowncolor" style='color: #fff;'>About us</a></li>
                          
                         </ul>
                        </li>

						<li><a href="faq.php"><i class="fa fa-stack-exchange"></i> FAQ</a></li>
						<li><a href="#"><i class="fa fa-user"></i> Account</a>
                        <ul class="dropdown">
                            <li><a href="signup.php" class="dropdowncolor" style='color: #fff;'>Sign Up</a></li>
                            <li><a href="zpanel/login.php" class="dropdowncolor" style='color: #fff;'>Login</a></li>
                           
                         </ul>
                        </li>
                        <li><a href="contact.php"><i class="fa fa-envelope-o"></i> Contact</a></li>
                    </ul><!-- End of .menuzord-menu -->
                </nav> <!-- End of #main_menu -->
            </div>
            <div class="right-column">
                <div class="right-area">
                    <div class="nav_side_content">
                        <div class="search_option">
                            <button class="search tran3s dropdown-toggle color1_bg" id="searchDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search" aria-hidden="true"></i></button>
                            <form action="#" class="dropdown-menu" aria-labelledby="searchDropdown">
                                <input type="text" placeholder="Search...">
                                <button><i class="fa fa-search" aria-hidden="true"></i></button>
                            </form>
                       </div>
                        <div class="cart_select">
                            <button><i class="fa fa-group" aria-hidden="true"></i> <span class="color1_bg">(0)</span></button>
                        </div> <!-- End of .cart_select -->
                   </div>
                   <div class="link_btn float_right">
                       <a href="signup.php" class="thm-btn"><i class="fa fa-sign-in"></i> Join Free</a>
                   </div>
                </div>
                    
            </div>
        </div>
                

   </div> <!-- End of .conatiner -->
</section>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=211108872236040";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>