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
					<a href="#" class="slide-out-share pull-right"><i class="md md-more-vert"></i></a>
				</div> <!-- end .clearfix -->
				
				<div class="image"><img src="<?php echo base_url() ?>asset/images/head01.png" alt="alt text" class="img-responsive"></div>
				<div class="content">
					<h5>Kurniawan</h5>
					<span>Welcome</span>
				</div> <!-- end .content -->
				
			</header> <!-- end .slide-out-header -->
			<div class="slide-out-widgets">
				<div class="slide-out-widget">
					<h4>Contact me</h4>
					<form  action="<?php echo base_url() ?>crud/tambah_aksi" method="post"  class="form-horizontal contact-form">
						<div class="form-group">
							<label class="col-sm-3 control-label">Name</label>
							<div class="col-sm-9">
								<input type="text" class="contact-name" name="nama" />
							</div> <!-- end .col-sm-9 -->
						</div> <!-- end .form-group -->
						<div class="form-group">
							<label class="col-sm-3 control-label">Email</label>
							<div class="col-sm-9">
								<input type="email" class="contact-email" name="email" />
							</div> <!-- end .col-sm-9 -->
						</div> <!-- end .form-group -->
						<div class="form-group">
							<label class="col-sm-3 control-label">Message</label>
							<div class="col-sm-9">
								<textarea name="pesan" class="contact-message" rows="3"></textarea>
							</div> <!-- end .col-sm-9 -->
						</div> <!-- end .form-group -->
						<div class="form-group">
							<div class="col-sm-9">
								<div class="g-recaptcha" data-sitekey="6LfVlzQUAAAAAH2gVmIAiWdbEf0CzCNSGno-r6vn"></div>
							</div> 
						</div> 
						<div class="form-group">
							<div class="col-sm-9 col-sm-offset-3">
								<button type="submit" class="button solid-button purple">Send Message</button>
							</div> <!-- end .col-sm-9 -->
						</div> <!-- end .form-group -->
						<!-- <div class="contact-loading alert alert-info form-alert">
							<span class="message">Loading...</span>
							<button type="button" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i></button>
						</div>
						<div class="contact-success alert alert-success form-alert">
							<span class="message">Success!</span>
							<button type="button" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i></button>
						</div>
						<div class="contact-error alert alert-danger form-alert">
							<span class="message">Error!</span>
							<button type="button" class="close" data-hide="alert" aria-label="Close"><i class="fa fa-times"></i></button>
						</div> -->
					</form> <!-- end contact-form -->
				</div> <!-- end .slide-out-widget -->
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
					
					<a href="#" class="share"><i class="md md-more-vert"></i></a>
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