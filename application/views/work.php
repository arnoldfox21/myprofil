<!DOCTYPE html>
<html lang="en">
	

<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Kurniawan | <?php echo $page; ?></title>



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
					<span>Freelancer</span>
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
						<li><a href="<?php echo base_url() ?>">Home</a></li>
						<li class="active"><a href="<?php echo base_url('page/work') ?>">Work</a></li>
						<li><a href="<?php echo base_url('page/blog') ?>">Blog</a></li>
						<li><a href="<?php echo base_url('page/contact') ?>">Contact</a></li>
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

				<!-- Portfolio -->
				<section id="section2">
					<div class="container">
						<h2>Portfolio</h2>
						<div class="portfolio-wrapper">
							<div id="portfolio-filters" class="portfolio-filters">
								<button class="button solid-button white-purple small" data-filter="*">Show All</button>
								<button class="button solid-button white-purple small" data-filter=".branding">Shemura MT</button>
								<!-- <button class="button solid-button white-purple small" data-filter=".print">Print</button> -->
								<button class="button solid-button white-purple small" data-filter=".motion">Hexca</button>
							<!-- 	<button class="button solid-button white-purple small" data-filter=".websites">Websites</button> -->
							</div>
							<div id="portfolio" class="portfolio">
								<div class="item branding print">
									<img src="<?php echo base_url() ?>asset/images/portfolio01.jpg" alt="alt text" class="img-responsive">
									<a href="<?php echo base_url() ?>project/portfolio/1" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Shemura MT - 01</span>
											<span class="category">Lock mode</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
								<div class="item branding print">
									<img src="<?php echo base_url() ?>asset/images/portfolio02.jpg" alt="alt text" class="img-responsive">
									<a href="<?php echo base_url() ?>project/portfolio/1" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Shemura MT - 02</span>
											<span class="category">Home page</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
								<div class="item hidden print">
									<img src="<?php echo base_url() ?>asset/images/portfolio03.jpg" alt="alt text" class="img-responsive">
									<a href="<?php echo base_url() ?>project/portfolio/1" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Portfolio Item - 03</span>
											<span class="category">Print</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
								<div class="item hidden print websites">
									<img src="<?php echo base_url() ?>asset/images/portfolio04.jpg" alt="alt text" class="img-responsive">
									<a href="<?php echo base_url() ?>project/portfolio/1" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Portfolio Item - 04</span>
											<span class="category">Branding, Websites</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
								<div class="item print branding">
									<img src="<?php echo base_url() ?>asset/images/portfolio05.jpg" alt="alt text" class="img-responsive">
									<a href="<?php echo base_url() ?>project/portfolio/1" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Portfolio Item - 05</span>
											<span class="category">Cart page</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
								<div class="item print branding">
									<img src="<?php echo base_url() ?>asset/images/smt.png" alt="alt text" class="img-responsive">
									<a href="<?php echo base_url() ?>project/portfolio/1" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Portfolio Item - 06</span>
											<span class="category">Dashboard</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->

	<!-- 							<div class="item motion">
									<img src="<?php echo base_url() ?>asset/images/portfolio06.jpg" alt="alt text" class="img-responsive">
									<a href="<?php echo base_url('portfolio/1') ?>" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Portfolio Item - 06</span>
											<span class="category">Motion</span>
										</div>
									</a>
								</div>  -->
					<!-- 			<div class="item motion">
									<img src="<?php echo base_url() ?>asset/images/portfolio07.jpg" alt="alt text" class="img-responsive">
									<a href="<?php echo base_url() ?>project/portfolio/1" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Portfolio Item - 07</span>
											<span class="category">Motion</span>
										</div>
									</a> 
								</div>  -->
								<div class="item hidden print">
									<img src="<?php echo base_url() ?>asset/images/portfolio08.jpg" alt="alt text" class="img-responsive">
									<a href="<?php echo base_url() ?>project/portfolio/1" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Portfolio Item - 08</span>
											<span class="category">Print</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
								<div class="item motion">
									<img src="<?php echo base_url() ?>asset/images/portfolio09.jpg" alt="alt text" class="img-responsive">
									<a href="#" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Portfolio Item - 09</span>
											<span class="category">Dashboard</span>
										</div> 
									</a> 
								</div> 
								<div class="item hidden websites">
									<img src="<?php echo base_url() ?>asset/images/portfolio10.jpg" alt="alt text" class="img-responsive">
									<a href="<?php echo base_url() ?>project/portfolio/1" class="overlay">
										<div class="background"></div>
										<div class="meta">
											<span class="title">Portfolio Item - 10</span>
											<span class="category">Websites</span>
										</div> <!-- end .meta -->
									</a> <!-- end .overlay -->
								</div> <!-- end .item -->
							</div> <!-- end .portfolio -->
							<div class="portfolio-load-more">
								<a href="<?php echo base_url() ?>project/portfolio/1" class="button solid-button white icon-right">Load More Work<i class="md-refresh"></i></a>
							</div> <!-- end .portfolio-load-more -->
						</div> <!-- end .portfolio-wrapper -->
					</div> <!-- end .container -->
				</section> <!-- end #section1 -->


			</div> 
		</div> 
<?php include 'page/footer.php' ?>