<?php include 'page/header.php'; ?>
		<div class="responsive-menu">
			<a href="#" class="responsive-menu-close">Close <i class="ion-android-close"></i></a>
			<nav class="responsive-nav"></nav> 
		</div> 

			<div class="sections">
				<div class="sections-wrapper clearfix">

					<section>

						<div class="blog-posts masonry" id="blog-masonry">
							<div class="blog-grid-sizer"></div>
							
							<div class="blog-post image-left">
								<div class="inner">
									<a href="<?php echo base_url().'blog/post/1' ?>"><div class="image" style="background-image: url('<?php echo base_url() ?>asset/images/portfolio01.jpg');"></div></a>
									<div class="content">
										<span class="date">March 14, 2017</span>
										<h4><a href="<?php echo base_url().'blog/post/1' ?>">E-COMMERCE WEB APPLICATION USING DJANGO WEB FRAMEWORK</a></h4>
										<footer>
											<span class="comments-link"><a href="<?php echo base_url().'blog/post/1' ?>">0 Comments</a></span>
											<span class="share-link"><a href="<?php echo base_url().'blog/post/1' ?>"><i class="fa fa-share-alt"></i></a></span>
										</footer>
									</div> <!-- end .content -->
								</div> <!-- end .inner -->
							</div> <!-- end .blog-post -->
							<div class="blog-post image-left">
								<div class="inner">
									<a href="<?php echo base_url().'blog/post/2' ?>"><div class="image" style="background-image: url('<?php echo base_url() ?>asset/images/codeigniter.jpg');"></div></a>
									<div class="content">
										<span class="date">March 9, 2017</span>
										<h4><a href="<?php echo base_url().'blog/post/2' ?>">Create view using Codeigniter</a></h4>
										<footer>
											<span class="comments-link"><a href="<?php echo base_url().'blog/post/2' ?>">0 Comments</a></span>
											<span class="share-link"><a href="<?php echo base_url().'blog/post/2' ?>"><i class="fa fa-share-alt"></i></a></span>
										</footer>
									</div> <!-- end .content -->
								</div> <!-- end .inner -->
							</div> <!-- end .blog-post -->
						</div> <!-- end .blog-posts -->
						<div class="blog-load-more">
							<a href="#" class="button solid-button white icon-right">Load More Posts<i class="md-refresh"></i></a>
						</div> <!-- end .blog-load-more -->
					
				</section>
			</div>
			</div>

<?php include 'page/footer.php' ?>