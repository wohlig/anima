<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.themeregion.com/doors -fade-slider/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Nov 2014 12:18:21 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<!--title-->
    <title>Anima Creative Management</title>
	
	<!--CSS-->
	<link href="<?php echo base_url("frontend")."/";?>css/style.css" rel="stylesheet">	
	<link href="<?php echo base_url("frontend")."/";?>css/insta.css" rel="stylesheet">	
	<link href="<?php echo base_url("frontend")."/";?>css/dl-menu.css" rel="stylesheet">	

    <script src="<?php echo base_url("frontend")."/";?>js/modernizr.custom.js"></script>
	<script type="text/javascript">

     $(document).ready(function () {
         $('.model_single img, .model_name').delay(1000).fadeIn('slow');

     });
    </script>

    <style>
        .model_single img, .model_name{display: none;}
</style>
</head><!--/head-->
<body>
	<!-- Page Loader -->
	<!--<div class="preloader">
        <div id="loaderImage"></div>
    </div>-->
    <div class="wrapper">
     <?php include('header.php');  ?>
  
        <!--<header class="mobile_menu"> 
            <a href="index.php"><div class="mobile_logo"></div></a>
            <div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger"></button>
						<ul class="dl-menu">
							<li>
								<a href="#">Model</a>
								<ul class="dl-submenu">
							        <li><a href="females_in_town.php">Female In Town</a></li>
							        <li><a href="#">Female Out of Town</a></li>
							        <li><a href="#">Male In Town</a></li>
							        <li><a href="#">Male Out of Town</a></li>
					        	</ul>
					    </li>
					    <li><a href="#">Creative Artists</a></li>
                        <li><a href="#">Agency</a></li>
                        <li><a href="#">News</a></li>
						</ul>
					</div>
        </header>--> 


        <div class="container">
            <div class="page_title">Contact Us</div>
                <div class="contact">
                    <div class="contact_block1">
                        gunita stobe<br />animacreatives@gmail.com<br />
                    </div> 
                    <div class="contact_block1">
                        mark luburic<br />markanima@gmail.com<br />
                    </div> 
                    <div class="contact_block2">
                        <a href="#"><img src="<?php echo base_url("frontend")."/";?>images/twitter.png"></a>
                        <a href="#"><img src="<?php echo base_url("frontend")."/";?>images/v.png"></a>
                        <a href="#"><img src="<?php echo base_url("frontend")."/";?>images/facebook.png"></a>
                        <a href="#"><img src="<?php echo base_url("frontend")."/";?>images/insta.png"></a>

                    </div> 
                </div>
                
        
        <div id="footer" style="margin-top: 197px;">
                <hr class="footer_top" />
                <div class="footer_menu">
                <ol class="pxmenu">
                    <li>Contact Us</li>
                    <li>Terms & Conditions</li>
                    <li>Privacy Policy</li>
                    <li>Careers</li>
                    <li>FAQs</li>
                </ol>
                </div>
                <div class="copyright">© Copyright ANIMA CREATIVES 2014</div>
                <div class="hepta">MADE WITH LOVE BY HEPTA</div>
            </div>
    </div>
	
	

	<!--/#scripts--> 
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="<?php echo base_url("frontend")."/";?>js/jquery.dlmenu.js"></script>
		<script>
			$(function() {
				$( '#dl-menu' ).dlmenu();
			});
		</script>

	<!--/#scripts--> 
    <!--<script type="text/javascript" src="<?php echo base_url("frontend")."/";?>js/jquery.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url("frontend")."/";?>js/custom.js"></script>
    <!--<script type="text/javascript" src="<?php echo base_url("frontend")."/";?>js/jquery.instastream.js"></script>-->
    
</body>

</html>