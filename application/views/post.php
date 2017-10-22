<!DOCTYPE html>
<html lang="en">
	

<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Kurniawan | <?php echo $data->judul; ?></title>



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

		<!-- Search -->
		<div class="search-overlay"></div>
		<div class="search">
			<a href="#" class="search-close"><i class="md md-close"></i></a>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<h4>Just Start Typing Text and Press Enter</h4>
					<form class="search-form">
						<input type="text" id="search" name="search" class="text-center" />
					</form> <!-- end .search-form -->
				</div> <!-- end .col-sm-6 -->
			</div> <!-- end .row -->
		</div> <!-- end .row -->
		<!-- Slide Out -->
		<div class="slide-out-overlay"></div>
		<div class="slide-out">
			<header class="slide-out-header clearfix">
				<div class="clearfix">
					<a href="#" class="slide-out-close pull-left"><i class="md md-close"></i></a>
					<a href="#" class="open-search pull-right"><i class="md md-search"></i></a>
					<a href="#" class="slide-out-share pull-right"><i class="md md-more-vert"></i></a>
				</div> <!-- end .clearfix -->
				<!-- Popup -->
				<div class="slide-out-popup">
					<nav class="social-nav">
						<ul class="list-unstyled">
							<li><a href="http://facebook.com/arnold.andreastandholi">Facebook</a></li>
							<li><a href="http://twitter.com/arnold21">Twitter</a></li>
							
							<li><a href="https://plus.google.com/u/1/113620116470095130953">Google+</a></li>
							
						</ul> <!-- end .list-unstyled -->
					</nav> <!-- end .social-nav -->
				</div> <!-- end .slide-out-popup -->
				<div class="image"><img src="<?php echo base_url() ?>asset/images/head01.png" alt="alt text" class="img-responsive"></div>
				<div class="content">
					<h5>Kurniawan</h5>
					<span>Welcome</span>
				</div> <!-- end .content -->

			</header> <!-- end .slide-out-header -->
			<div class="slide-out-widgets">
				<div class="slide-out-widget">
					<h4>Contact me</h4>
					<form action="#" method="post" class="form-horizontal contact-form">
						<div class="form-group">
							<label class="col-sm-3 control-label">Name</label>
							<div class="col-sm-9">
								<input type="text" class="contact-name" name="contact-name" />
							</div> <!-- end .col-sm-9 -->
						</div> <!-- end .form-group -->
						<div class="form-group">
							<label class="col-sm-3 control-label">Email</label>
							<div class="col-sm-9">
								<input type="email" class="contact-email" name="contact-email" />
							</div> <!-- end .col-sm-9 -->
						</div> <!-- end .form-group -->
						<div class="form-group">
							<label class="col-sm-3 control-label">Message</label>
							<div class="col-sm-9">
								<textarea name="contact-message" class="contact-message" rows="3"></textarea>
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
						<div class="contact-loading alert alert-info form-alert">
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
						</div>
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
				<a href="#section4" class="available"><i class="ion-ios-email-outline"></i><span>Available For Now</span></a>
				<div class="right-icons">
					<a href="#" class="open-search header-open-search"><i class="md md-search"></i></a>
					
					<a href="#" class="share"><i class="md md-more-vert"></i></a>
				</div> <!-- end .right-icons -->
				<!-- Popup -->
				<div class="popup">
					<nav class="social-nav">
						<ul class="list-unstyled">
							<li><a href="http://facebook.com/arnold.andreastandholi">Facebook</a></li>
							<li><a href="http://twitter.com/arnold21">Twitter</a></li>
							
							<li><a href="https://plus.google.com/u/1/113620116470095130953">Google+</a></li>
							
						</ul> <!-- end .list-unstyled -->
					</nav> <!-- end .social-nav -->
				</div> <!-- end .popup -->
			</div> <!-- end .top -->
			<div class="bottom clearfix">
				<div class="title"><a href="<?php echo base_url() ?>">Home</a></div>
				<div class="header-action-button-wrapper">
					<a href="#" class="header-action-button action-button"><i class="md md-add"></i></a>
				</div> <!-- end .header-action-button-wrapper -->
				<a href="#" class="responsive-menu-open">Menu <i class="fa fa-bars"></i></a>
				<nav class="main-nav">
					<ul class="list-unstyled">
						<li <?php if($page == 'Official Website'){ echo 'class="active"'; } ?>><a href="<?php echo base_url() ?>">Home</a></li>
						
						<li <?php if($page == 'Blog'){ echo 'class="active"'; } ?>><a href="<?php echo base_url('page/blog') ?>">Blog</a></li>
						<li <?php if($page == 'Contact'){ echo 'class="active"'; } ?>><a href="<?php echo base_url('page/contact') ?>">Contact</a></li>
						<li <?php if($page == 'Question'){ echo 'class="active"'; } ?>><a href="<?php echo base_url('page/question') ?>">Question</a></li>

						<!-- <li><a href="<?php echo base_url('page/sign-in') ?>">Login</a></li>
						<li><a href="<?php echo base_url('page/sign-up') ?>">Sign up</a></li> -->
					</ul>
				</nav> <!-- end .main-nav -->
			</div> <!-- end .bottom -->
		</header> <!-- end .header -->

		<div class="responsive-menu">
			<a href="#" class="responsive-menu-close">Close <i class="ion-android-close"></i></a>
			<nav class="responsive-nav"></nav> <!-- end .responsive-nav -->
		</div> <!-- end .responsive-menu -->

		<!-- Sections -->
		<div class="sections">
			<div class="sections-wrapper clearfix">

				<!--Single Blog Post -->
				<section>
					<div class="container">
						<div class="single-blog-post">
							<header class="blog-header clearfix">
								<div class="content">
									<span class="date">October 01, 2017</span>
									<h4><?php echo $data->judul; ?></h4>
									<span class="meta"><a href="#">0 Comments</a> | <a href="#">By Admin</a></span>
									<div class="footer">
										<p class="button-row blog-button-row"><button disabled class="button solid-button dark">Prev</button><button class="button solid-button purple" disabled>Next</button></p>
									</div>
								</div> <!-- end .content -->
								<div class="image" style="background-image: url('<?php echo base_url() ?>asset/<?php echo $data->cover1 ?>');"></div>
							</header> <!-- end .blog-header -->
							<div class="blog-post">
								<div class="blog-post-content">
									<img src="<?php echo base_url() ?>asset/<?php echo $data->cover2 ?>" class="img-responsive">
								
									<?php echo $data->post; ?>
								</div> <!-- end .blog-post-content -->
<!-- 								<div class="blog-post-comments">
									<h4>7 Comments</h4>
								
									<div class="comment">
										<div class="inner clearfix">
											<div class="image"><img src="<?php echo base_url() ?>asset/images/comment03.jpg" alt="alt text" class="img-responsive"></div>
											<div class="content">
												<h5>Tom Cruis</h5>
												<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placey eat facere possimus, omnis voluptas assumenda est.</p>
												<span class="meta">25 March 2015 - 9.00AM</span>
												<a href="#" class="reply">Reply<i class="fa fa-reply"></i></a>
											</div> 
										</div> 
									</div> 
								</div>  -->
								<div class="leave-comment">
									<h4>Leave A Comment</h4>
									<div class="inner">
										<form action="" method="post" class="form-horizontal">
											<div class="form-group">
												<label class="col-sm-2 control-label">Name</label>
												<div class="col-sm-10">
													<input type="text" class="contact-name" name="contact-name" />
												</div> <!-- end .col-sm-10 -->
											</div> <!-- end .form-group -->
											<div class="form-group">
												<label class="col-sm-2 control-label">Email</label>
												<div class="col-sm-10">
													<input type="email" class="contact-email" name="contact-email" />
												</div> <!-- end .col-sm-10 -->
											</div> <!-- end .form-group -->
											<div class="form-group">
												<label class="col-sm-2 control-label">Message</label>
												<div class="col-sm-10">
													<textarea name="contact-message" class="contact-message" rows="3"></textarea>
												</div> <!-- end .col-sm-10 -->
											</div> <!-- end .form-group -->
											<div class="form-group">
												<div class="col-sm-10 col-sm-offset-2">
													<button type="submit" class="button solid-button purple">Send Message</button>
												</div> <!-- end .col-sm-10 -->
											</div> <!-- end .form-group -->
										</form>
									</div> <!-- end .inner -->
								</div> <!-- end .leave-comment -->
							</div> <!-- end .blog-post -->
							<div class="blog-details">
								<div class="section">
									<h5>Author Details</h5>
									<div class="author">
										<div class="image"><img src="<?php echo base_url() ?>asset/images/author.png" alt="alt text" class="img-responsive"></div>
										<span class="title">Kurniawan</span>
										<p>Hallo, I am kurniawan, welcome to my website and thnk you for visiting.</p>
									</div>
								</div> <!-- end .section -->
								<div class="section">
									<h5>Share Post</h5>
									<div class="social-icons">
										<a href="#" class="social-icon"><i class="fa fa-facebook"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-behance"></i></a>
										<a href="#" class="social-icon"><i class="fa fa-dribbble"></i></a>
									</div> <!-- end .social-icons -->
								</div> <!-- end .section -->
								<div class="section">
									<h5>Tags</h5>
									<div class="tags"><a href="#">Python</a><span>|</span><a href="#">Web application</a><span>|</span><a href="#">Django</a><span>|</span><a href="#">E-commerce</a></div>
								</div> <!-- end .section -->
							</div> <!-- end .blog-details -->
						</div> <!-- end .single-blog-post -->
					</div> <!-- end .container -->
				</section>

			</div> <!-- end .sections-wrapper -->
		</div> <!-- end .sections -->
<?php include 'page/footer.php' ?>