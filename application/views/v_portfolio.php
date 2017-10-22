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
		<style>
					

		$red: #881d12;


		@mixin bump {
		    0%      {transform: scale(1); }
		    50%     {transform: scale(1.5); }
		    100%    {transform: scale(1); }
		}

		@keyframes bump1 { @include bump; }
		@keyframes bump2 {@include bump;}

		.vote-count {
		  width:40px;
		  height:35px;
		  text-align:center;
		  color:$red;
		  font:20px/1.5 georgia;
		  margin-bottom:10px;
		  animation: bump .3s; 
		  &.bumped {
		    animation: bump2 .3s; 
		  }
		}

		.vote-btn {
		  appearance:none;
		  border-radius:3px;
		  border:0;
		  background:#fff;
		  padding:15px 12px 15px 40px;
		  font:bold 9px/1.2 arial;
		  text-transform:uppercase;
		  letter-spacing:1px;
		  color:$red;
		  box-shadow:0 1px 1px rgba(0,0,0,.2);
		  outline:none;
		  position:relative;
		  transition: all .3s ease-out; 
		  cursor:pointer;
		  overflow:hidden;
		  
		  .icon {
		        position:absolute;
		    content: "";
		    left:10px;
		    top:10px;
		    width:20px;
		    height:20px;
		    border-radius:10px;
		    display:inline-block;
		    background:$red url() no-repeat 2px 1px;
		    background-size:16px auto;
		  transition: all .3s ease-out; 

		  }
		  
		}
		  

		.vote-btn.complete {
		  padding-left:15px;
		  background:#c1c0bb;
		  color: #fff;
		  .icon {
		    opacity:0;
		    /* transform: rotateX(90deg); */
		      transform: scale(0); 
		 }
		}
		</style>

		

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
					<form  action="<?php echo base_url() ?>crud/tambah_aksi" method="post" class="form-horizontal contact-form">
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
				<a href="<?php echo base_url('page/contact') ?>" class="available"><i class="ion-ios-email-outline"></i><span>Available For Now</span></a>
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
						
						<li><a href="<?php echo base_url('page/blog') ?>">Blog</a></li>
						<li><a href="<?php echo base_url('page/contact') ?>">Contact</a></li>
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

				<!-- Single Portfolio -->
				<section class="active">
					<div class="container">
						<div class="row">
							<div class="col-sm-8">
								<div class="portfolio-slider owl-carousel">
									<div><img src="<?php echo base_url() ?>/asset/images/smt_login.png" alt="alt text" class="img-responsive"></div>
									<div><img src="<?php echo base_url() ?>/asset/images/smt.png" alt="alt text" class="img-responsive"></div>
									<div><img src="<?php echo base_url() ?>/asset/images/portfolio-slider.jpg" alt="alt text" class="img-responsive"></div>
								</div> <!-- end .portfolio-slider -->
								<div class="row related-images">
									<div class="col-sm-6"><a href="#"><img src="<?php echo base_url() ?>/asset/images/portfolio-related01.jpg" alt="alt text" class="img-responsive"></a></div>
									<div class="col-sm-6"><a href="#"><img src="<?php echo base_url() ?>/asset/images/portfolio-related02.jpg" alt="alt text" class="img-responsive"></a></div>
								</div> <!-- end .row -->
							</div> <!-- end .col-sm-8 -->
							<div class="col-sm-4">
								<p class="button-row portfolio-button-row"><a href="#" class="button solid-button white">Prev Project</a><a href="#" class="button solid-button purple">Next Project</a></p>
								<div class="portfolio-details">
									<h4><?php echo $data->judul; ?></h4>
									<p>This web is perfect for any type of fashion shops and comes with lots of awesome features, such as: ajax price slider, custom grid modes, Faster execution, quick install package and etc. Simply check features list below</p>
									<div class="portfolio-meta">
										<span>Date:</span>
										22 Oct 2017
									</div> <!-- end .portfolio-meta -->
									<div class="portfolio-meta">
										<span>Client:</span>
										Shemura MT
									</div> <!-- end .portfolio-meta -->
									<div class="portfolio-meta">
										<span>Programming language:</span>
										Python, PostgreSQL
									</div> <!-- end .portfolio-meta -->
									<div class="portfolio-meta">
										<span>Categories:</span>
										Web application, Python(Django)
									</div> <!-- end .portfolio-meta -->
									<form class="myform">
									  <p class="vote-count">35</p>
									  <button class="vote-btn" 
									          data-default-text="Vote This Project!"
									          data-alt-text="Thanks for Voting">
									    <span class="icon"></span> <span class="text">Vote This Dish Up!</span>
									  </button>
									</form>
									<br/>
									<p><a href="http://shemura.pythonanywhere.com" class="button solid-button purple">Visit Website</a></p>
								</div> <!-- end .portfolio-details -->
							</div> <!-- end .col-sm-4 -->
						</div> <!-- end .row -->
					</div> <!-- end .container -->
				</section> <!-- end #section1 -->

			</div> <!-- end .sections-wrapper -->
		</div> <!-- end .sections -->
		

		
		
		<footer class="footer">
			<div class="top">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<h4>Address</h4>
							<p>No. 30A, Terusan piranha street, Malang,<br />Indonesia.</p>
						</div> 
						<div class="col-sm-4">
							<h4>Connect</h4>
							<div class="social-icons">
								<a href="http://facebook.com/arnold.andreastandholic" class="social-icon"><i class="fa fa-facebook"></i></a>
								<a href="http://twitter.com/arnoldstar1" class="social-icon"><i class="fa fa-twitter"></i></a>
								<a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
								<a href="#" class="social-icon"><i class="fa fa-behance"></i></a>
								<a href="#" class="social-icon"><i class="fa fa-dribbble"></i></a>
							</div> 
						</div>
						<div class="col-sm-4">
							<h4>Contact</h4>
							<p>Tel: +61 123-456-7890<br />Mail: mail@kurniawan.info</p>
						</div> 
					</div> 
				</div> 
			</div> 
			<div class="bottom">Copyright &copy; Kurniawan. All Rights Reserved.</div> 
		</footer> 
	
		<script src="<?php echo base_url() ?>asset/js/jquery-1.11.2.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/jquery.inview.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/smoothscroll.js"></script>
		<script src="<?php echo base_url() ?>asset/js/jquery.knob.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/owl.carousel.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/isotope.pkgd.min.js"></script>
		<script src="<?php echo base_url() ?>asset/js/imagesloaded.pkgd.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
		<script src="<?php echo base_url() ?>asset/js/scripts.js"></script>
		<script type="text/javascript">
			var VoteWidget= {
			  settings: {
			    $counter: $('.vote-count'),
			    $btn:     $('.myform button'),
			  },
			init: function() {
			  VoteWidget.bind();
			},
			  bind: function() {
			    VoteWidget.settings.$btn.click(function(){
			      if (! $(this).hasClass('complete')) {
			            VoteWidget.bumpCount();
			      }
			      $(this).toggleClass('complete');
			      VoteWidget.toggleText();  

			    return false;
			  });
			  },
			  bumpCount: function() {
			    var current_count = $('.vote-count').text();
			    count = parseInt(current_count);
			    count++;
			    VoteWidget.settings.$counter.toggleClass('bumped').text(count);
			  },
			  toggleText: function(){
			    var $text_container = $('.myform button .text');
			    var alt_text = VoteWidget.settings.$btn.data('alt-text');
			    var default_text = VoteWidget.settings.$btn.data('default-text');
			    var current_text = $text_container.text();
			    console.log('current is ' + current_text);
			    if ( current_text == default_text ) {
			      $text_container.text(alt_text)
			    } else {
			      $text_container.text(default_text)
			    }
			  }
			}


			VoteWidget.init();


		</script>

	</body>

</html>