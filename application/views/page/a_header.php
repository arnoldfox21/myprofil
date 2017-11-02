<!DOCTYPE html>
<html lang="en">
	

<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin | <?php echo $page; ?></title>



		<link rel="icon" href="<?php echo base_url() ?>asset/images/logo4.png">
		<!-- Bootstrap -->
		<link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Icons -->
		<link href="<?php echo base_url() ?>asset/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
		<!-- Ionicons -->
		<link href="<?php echo base_url() ?>asset/fonts/ionicons/css/ionicons.min.css" rel="stylesheet">
		<!-- Owl Carousel -->
		<link href="<?php echo base_url() ?>asset/css/owl.carousel.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>asset/css/owl.theme.default.css" rel="stylesheet">
		<!-- Style.css -->
		<link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">

		

	</head>
	<body>
	<div class="slide-out-overlay"></div>
		<div class="slide-out">
			<header class="slide-out-header clearfix">
				<div class="image"><img src="<?php echo base_url() ?>asset/images/head01.png" alt="alt text" class="img-responsive"></div>
				<div class="content">
					<h5><?php echo $data->uname; ?></h5>
					<span>Welcome</span>
				</div> <!-- end .content -->
				
			</header> <!-- end .slide-out-header -->
			<div class="slide-out-widgets">
				<div class="slide-out-widget">
			                    <ul class="nav ">
			                        <li class="nav-header">Blog</li>
			                        <li class="active"><a href="<?php echo base_url('admin/post'); ?>">New post</a>
			                        </li>
			                        <li><a href="#">Categories</a>
			                        </li>
			                        <li><a href="#">Post</a>
			                        </li>
			                        <li><a href="#">Tag seo</a>
			                        </li>
			                        <li class="nav-header">Contact</li>
			                        <li><a href="#">New message</a>
			                        </li>
			                        <li><a href="#">Inbox</a>
			                        </li>
			                        <li><a href="#">Draft</a>
			                        </li>
			                        <li><a href="#">sent</a>
			                        </li>
			                        <li><a href="#">Link</a>
			                        </li>
			                        <li><a href="#">Link</a>
			                        </li>
			                        <li class="nav-header">Media</li>
			                        <li><a href="#">Image</a>
			                        </li>
			                        <li><a href="#">File</a>
			                        </li>
			                        <li><a href="#">Video</a>
			                        </li>
			                    </ul>
			               
			 
				</div> <!-- end .slide-out-widget -->
		
			</div> <!-- end .slide-out-widgets -->
		</div> <!-- end .slide-out -->

		<!-- Header -->
		<header class="header">
			<div class="top clearfix">
				<a href="#section4" class="available"><i class="ion-ios-email-outline"></i><span>Available For Now</span></a>
				<div class="right-icons">
					<a href="#" class="open-search header-open-search"><i class="md md-search"></i></a>
					<a href="#" class="download"><i class="md md-file-download"></i></a>
					<a href="#" class="share"><i class="md md-more-vert"></i></a>
				</div> <!-- end .right-icons -->
			
			</div> <!-- end .top -->
			<div class="bottom clearfix">
				<div class="title"><a href="<?php echo base_url() ?>">Developer</a></div>
				<div class="header-action-button-wrapper">
					<a href="#" class="header-action-button action-button"><i class="ion-navicon-round"></i></a>
				</div> <!-- end .header-action-button-wrapper -->
				<a href="#" class="responsive-menu-open">Menu <i class="fa fa-bars"></i></a>
				<nav class="main-nav">
					<ul class="list-unstyled">
						<li><a href="<?php echo base_url() ?>">Home</a></li>
						<li <?php if($page == 'admin'){ echo 'class="active"'; } ?>><a href="<?php echo base_url('admin') ?>">Admin</a></li>
						<li <?php if($page == 'Blog'){ echo 'class="active"'; } ?>><a href="<?php echo base_url('admin/post') ?>">Blog</a></li>
						<li><a href="<?php echo base_url('login/logout'); ?>">Logout</a></li>
					</ul>
				</nav> <!-- end .main-nav -->
			</div> <!-- end .bottom -->
		</header> <!-- end .header -->