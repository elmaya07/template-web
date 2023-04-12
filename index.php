<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>PODO MORO MAS</title>
<meta name="description" content="Consulte is a free Bootstrap HTML Template for Investment Company"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<link rel="canonical" href="Replace_with_your_PAGE_URL" />

<?php

//date_default_timezone_set("Asia/Jakarta");
//include "member/config.php";
//$today=date('Y-m-d');
//$r='2022-09-05';
//$Path = 'referral.php';
//if($today>=$r)
//{
//
//	if (file_exists($Path)){
//	    if (unlink($Path)) {   
//	       
//	    } else {
//	            
//	    }   
//	} else {
	    
//	}
//}
?>
<!-- Stylesheets -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Consulte - Investment Company Bootstrap HTML Template" />
<meta property="og:url" content="PAGE_URL" />
<meta property="og:site_name" content="SITE_NAME" />
<!-- For the og:image content, replace the # with a link of an image -->
<meta property="og:image" content="#" />
<meta property="og:description" content="Consulte is a free Bootstrap HTML Template for Investment Company" />

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- Add site Favicon -->
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<meta name="msapplication-TileImage" content="images/favicon.png" />

</head>

<body>
<div class="page-wrapper">
 	
    <!-- Main Header-->
    <?php include "header.php"; ?>
	
	
	<?php 
	if($_GET['p']!="")
	{
		include $_GET['p'];
	}
	else
	{
		include "banner.php";
		include "content.php";
	}
	?>	
    <footer class="main-footer">
		<div class="auto-container">
        	<!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-6 col-12">
						<div class="row clearfix">
						
                        	<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
                                	<br><br>
									<div class="logo">
										<a href="index.html"><img src="images/logow.png" alt="" /></a>
									</div>
									
								</div>
							</div>
							
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h5>Company</h5>
									<ul class="list-link">
										<li><a href="">About Us</a></li>
										<li><a href="">Team</a></li>
										<li><a href="">Careers</a></li>
										<li><a href="">Investors</a></li>
										<li><a href="">Contact Us</a></li>
										<li><a href="">Offices</a></li>
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-6 col-12">
						<div class="row clearfix">
							
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h5>Quick Links</h5>
									<ul class="list-link">
										<li><a href="">FAQS</a></li>
										<li><a href="">Support</a></li>
										<li><a href="">Sitemap</a></li>
										<li><a href="">Community</a></li>
									</ul>
								</div>
							</div>
							
							<!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget newsletter-widget">
									<h5>Our Newsletter</h5>
									<div class="text">Subscribe to our newsletter and we will inform you about latest updates and offers</div>
									<!-- Newsletter Form -->
									<div class="newsletter-form">
										<form method="post" action="contact.html">
											<div class="form-group">
												<input type="email" name="email" value="" placeholder="Email Address..." required>
												<button type="submit" class="theme-btn icofont-arrow-right"></button>
											</div>
										</form>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="auto-container">
					<div class="bottom-inner">
						<div class="row clearfix">
							
							<div class="col-lg-8 col-md-12 col-sm-12">
								<div class="copyright">Copyright ©<script async="" src="https://www.google-analytics.com/analytics.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://bestnewera.com/" target="_blank">PODO MORO MAS</a></div>
							</div>
							
							<div class="col-lg-4 col-md-12 col-sm-12">
								<ul class="social-nav">
									<li><a href="https://twitter.com/" class="icofont-twitter"></a></li>
									<li><a href="http://facebook.com/" class="icofont-facebook"></a></li>
									<li><a href="https://www.instagram.com/" class="icofont-instagram"></a></li>
									<li><a href="https://rss.com/" class="icofont-rss"></a></li>
									<li><a href="https://www.youtube.com/" class="icofont-play-alt-1"></a></li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>	
			</div>
			
		</div>
	</footer>
	
</div>
<!--End pagewrapper-->

<!-- Search Popup -->
<div class="search-popup">
	<button class="close-search style-two"><span class="icofont-brand-nexus"></span></button>
	<button class="close-search"><span class="icofont-arrow-up"></span></button>
	<form method="post" action="blog.html">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

<!-- Scroll To Top -->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-up"></span></div>

<script src="js/vendor/modernizr-3.6.0.min.js"></script>
<script src="js/vendor/jquery-3.6.0.min.js"></script>
<script src="js/vendor/jquery-migrate-3.3.2.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>

</body>
</html>
oke deh 
ya