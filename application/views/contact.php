<?php include 'page/header.php'; ?>
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