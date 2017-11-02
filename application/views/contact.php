<!DOCTYPE html>
<html lang="en">
	

<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Kurniawan | <?php echo $page; ?></title>



		<link rel="icon" href="<?php echo base_url() ?>asset/images/logo4.png">
		<link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>asset/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css" rel="stylesheet">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>asset/fonts/ionicons/css/ionicons.min.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>asset/css/owl.carousel.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>asset/css/owl.theme.default.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">

		

	</head>
	<body>

		
		
		<div class="slide-out-overlay"></div>
		<div class="slide-out">
			<header class="slide-out-header clearfix">
				<div class="clearfix">
					<a href="#" class="slide-out-close pull-left"></i></a>
					<a href="<?php echo base_url('login') ?>" class="open-search pull-right"><i class="ion-log-in"></i></a>
			
				</div> <!-- end .clearfix -->
				
				<div class="image"><img src="<?php echo base_url() ?>asset/images/head01.png" alt="alt text" class="img-responsive"></div>
				<div class="content">
					<h5>Kurniawan</h5>
					<span>Welcome</span>
				</div> <!-- end .content -->
				
			</header> <!-- end .slide-out-header -->
		
				<div class="slide-out-widget">
					<h4>Follow On Instagram</h4>
					<div class="instagram">
						<a href="#"><img src="<?php echo base_url() ?>asset/images/instagram01.jpg" alt="alt text" class="img-responsive"></a>
						<a href="#"><img src="<?php echo base_url() ?>asset/images/instagram02.jpg" alt="alt text" class="img-responsive"></a>
						<a href="#"><img src="<?php echo base_url() ?>asset/images/instagram03.jpg" alt="alt text" class="img-responsive"></a>
						<a href="#"><img src="<?php echo base_url() ?>asset/images/instagram04.jpg" alt="alt text" class="img-responsive"></a>
						<a href="#"><img src="<?php echo base_url() ?>asset/images/instagram05.jpg" alt="alt text" class="img-responsive"></a>
						<a href="#"><img src="<?php echo base_url() ?>asset/images/instagram06.jpg" alt="alt text" class="img-responsive"></a>
					</div> <!-- end .instagram -->
				</div> <!-- end .slide-out-widget -->
			</div> <!-- end .slide-out-widgets -->
		</div> <!-- end .slide-out -->

		<!-- Header -->
		<header class="header">
			<div class="top clearfix">
				<a href="<?php echo base_url('page/contact') ?>" class="available"><i class="ion-ios-email-outline"></i><span>Available For Now</span></a>
				<div class="right-icons">
					<a href="<?php echo base_url('login') ?>" class="open-search header-open-search"><i class="ion-log-in"></i></a>
					
				</div> <!-- end .right-icons -->
				
			</div> <!-- end .top -->
			<div class="bottom clearfix">
				<div class="title"><?php echo $page; ?></div>
				<div class="header-action-button-wrapper">
					<a href="#" class="header-action-button action-button"><i class="md md-add"></i></a>
				</div> <!-- end .header-action-button-wrapper -->
				<a href="#" class="responsive-menu-open">Menu <i class="fa fa-bars"></i></a>
				<nav class="main-nav">
					<ul class="list-unstyled">
						<li <?php if($page == 'Official Website'){ echo 'class="active"'; } ?>><a href="<?php echo base_url() ?>">Home</a></li>
						<li <?php if($page == 'Blog'){ echo 'class="active"'; } ?>><a href="<?php echo base_url('page/blog') ?>">Blog</a></li>
						<li <?php if($page == 'Contact'){ echo 'class="active"'; } ?>><a href="<?php echo base_url('page/contact') ?>">Contact</a></li>
						<li <?php if($page == 'Question'){ echo 'class="active"'; } ?>><a href="<?php echo base_url('login') ?>">Question</a></li>
						<!-- <li><a href="<?php echo base_url('page/sign-in') ?>">Login</a></li>
						<li><a href="<?php echo base_url('page/sign-up') ?>">Sign up</a></li> -->
					</ul>
				</nav> <!-- end .main-nav -->
			</div> <!-- end .bottom -->
		</header> <!-- end .header -->
		<div class="responsive-menu">
			<a href="#" class="responsive-menu-close">Close <i class="ion-android-close"></i></a>
			<nav class="responsive-nav"></nav> 
		</div> 

		
		
		<div class="sections">
			<div class="sections-wrapper clearfix">
				<!-- Contact -->
				<section id="section4">
					<div class="container">
						<h2>Get In Touch With Me</h2>
						<div class="row">
							<div class="col-sm-5">
								<h5>Contact Address</h5>
								<ul class="list-icons list-unstyled">
									<li><i class="ion-ios-location-outline"></i>No. 30A, Terusan piranha street, Malang <br/>Indonesia.</li>
									<li><i class="ion-iphone"></i>Phone: +62 899 596 5146</li>
									<li><i class="ion-ios-email-outline"></i>Email: <a href="mailto:mail@dkurniawan.my.id">mail@kurniawan.info</a></li>
									<li><i class="ion-ios-home-outline"></i>Website: <a href="#">www.kurniawan.info</a></li>
								</ul>
								<div class="spacer"></div>
								<div class="social-icons">
									<a href="http://facebook.com/arnold.andreastandholi" target="_blank" class="social-icon"><i class="fa fa-facebook"></i></a>
									<a href="http://twitter.com/arnold21" target="_blank" class="social-icon"><i class="fa fa-twitter"></i></a>
									<a href="https://plus.google.com/u/1/113620116470095130953" target="_blank" class="social-icon"><i class="fa fa-google-plus"></i></a>
								</div> <!-- end .social-icons -->
								<div class="spacer"></div>
							</div>
							<div class="col-sm-7">
									<?php if($data == 1){ ?>
									<div class="solid-button alert-success">
										<span>Successfully send!</span>
										<a href="<?php echo base_url('page/contact') ?>" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i></a>
									</div>
									<?php } ?>
									<?php if($data == 2){ ?>
									<div class="solid-button alert-danger">
										<span class="message">That CAPTCHA was incorrect. Try again!</span>
										<a href="<?php echo base_url('page/contact') ?>" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i></a>
									</div>
									<?php } ?>
								<div style="height: 20px"></div>
								<h5>Contact Form</h5>
								<form action="<?php echo base_url() ?>crud/tambah_aksi" method="post" class="form-horizontal">
									<div class="form-group">
										<label class="col-sm-2 control-label">Name</label>
										<div class="col-sm-10">
											<input type="text" class="contact-name" name="nama" />
										</div> 
									</div> 
									<div class="form-group">
										<label class="col-sm-2 control-label">Email</label>
										<div class="col-sm-10">
											<input type="email" class="contact-email" name="email" />
										</div> 
									</div> 
									<div class="form-group">
										<label class="col-sm-2 control-label">Subject</label>
										<div class="col-sm-10">
											<input type="text" class="contact-name" name="sub_pesan" />
										</div> 
									</div> 
									<div class="form-group">
										<label class="col-sm-2 control-label">Message</label>
										<div class="col-sm-10">
											<textarea name="pesan" class="contact-message" rows="3"></textarea>
										</div> 
									</div>
									<div class="form-group">
										<div class="col-sm-10 col-sm-offset-2">
											<div class="g-recaptcha" data-sitekey="6LfVlzQUAAAAAH2gVmIAiWdbEf0CzCNSGno-r6vn"></div>
										</div> 
									</div> 
									<div class="form-group">
										<div class="col-sm-10 col-sm-offset-2">
											<button type="submit" class="button solid-button purple">Send Message</button>
										</div> 
									</div> 
									
								</form>
							</div>
						</div>
					
					</div> 
				</section> 

			</div> 
		</div> 
<?php include 'page/footer.php' ?>