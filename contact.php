<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from wp1.themexlab.com/2017/fortune-html/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 21 Feb 2017 11:38:53 GMT -->
<head>
    <meta charset="UTF-8">
    <title>SUPPORT || Zenith Plus</title> 

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
                    SUPPORT
                </li>
            </ul><!-- /.list-line -->
        </div><!-- /.pull-left -->
        <div class="pull-right">
            <a href="#" class="get-qoute" style='color: #fff'><i class="fa fa-share-alt"></i>share</a>
        </div><!-- /.pull-right -->
    </div><!-- /.container -->
</div>

<section class="contact_details sec-padd">
    <div class="container">
        <div class="section-title">
            <h3>contact details</h3>
        </div>
      
        <div class="row">
            <div class="col-md-4 col-sm-8 col-xs-12">
                <div class="default-cinfo">
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                            <div class="acc-btn active">
                               Physical Address
                                <div class="toggle-icon">
                                    <i class="plus fa fa-angle-right"></i><i class="minus fa fa-angle-down"></i>
                                </div>
                            </div>
                            <div class="acc-content collapsed">
                                <ul class="contact-infos">
                                    <li>
                                        <div class="icon_box">
                                            <i class="fa fa-home"></i>
                                        </div><!-- /.icon-box -->
                                        <div class="text-box">
                                            <p><b>Address:</b> Abuja <br>FCT <br>Nigeria</p>
                                        </div><!-- /.text-box -->
                                    </li>
                                   
                                    <li>
                                        <div class="icon_box">
                                            <i class="fa fa-envelope"></i>
                                        </div><!-- /.icon-box -->
                                        <div class="text-box">
                                            <p><b>Mail Us:</b> <br>info@zenithplus.org</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon_box">
                                            <i class="fa fa-clock-o"></i>
                                        </div><!-- /.icon-box -->
                                        <div class="text-box">
                                            <p><b>Available Time:</b> <br>Mon - Sun: 24 Hours</p>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>



                    </div>
                </div>
                    
            </div>
            <div class="col-md-8 col-sm-12 col-xs-12">
			<?php if(isset($_REQUEST["thanks"]) and isset($_REQUEST["success"]) and $_REQUEST["mail"] != ""){ ?>
			<div class="alert alert-success alert-dismissable" style="background: rgba(204,0,0,1);"><!--alert -->
									<button  type="button" class="close" data-dismiss ="alert">
									<strong style="color:#fff">X</strong>
									</button>
																
									<span style="color: #fff;">
									<center><a href="#" style="color: #fff; font-weight: bold; text-decoration: none;"><?php echo"Thank you <b>$_REQUEST[thanks]</b>. Your message has been sent successfully."; ?></a>
									</center>
									</span>
								</div><!--alert -->
			<?php } ?>
                <div class="section-title">
                    <h3>ELECTRONIC SUPPORT (We can reply you within the hour)</h3>
                </div>
                <div class="default-form-area">
                    <form id="contact-form" name="contact_form" class="default-form" action="contactmail.php" method="post">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" value="" placeholder="Your Full Name *" required="required">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control required email" value="" placeholder="Your EMail Address*" required="required">
                                </div>
                            </div>
                          
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" value="" placeholder="Subject" required="required">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control textarea required" placeholder="Your Message...." required="required"></textarea>
                                </div>
                            </div>   
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
                                    <button class="thm-btn thm-color" type="submit" data-loading-text="Please wait...">send message</button>
                                </div>
                            </div>   

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="border-bottom"></div>
</div>





<?php include("footer.php"); ?>