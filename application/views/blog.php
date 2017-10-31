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
							<div class="row">
							<?php foreach($data as $data){ ?>
							<div class="col-md-6">
							<div class="blog-post image-left">
								<div class="inner">
									<a href="<?php echo base_url() ?>blog/post/<?php echo $data->id; ?>"><div class="image" style="background-image: url('<?php echo base_url() ?>asset/<?php echo $data->cover1; ?>');"></div></a>
									<div class="content">
										<span class="date">March, 2017</span>
										<h4><a href="<?php echo base_url() ?>blog/post/<?php echo $data->id; ?>"><?php echo $data->judul; ?></a></h4>
										<footer>
											<span class="comments-link"><a href="<?php echo base_url() ?>blog/post/<?php echo $data->id; ?>">0 Comments</a></span>
											<span class="share-link"><a href="<?php echo base_url() ?>blog/post/<?php echo $data->id; ?>"><i class="fa fa-share-alt"></i></a></span>
										</footer>
									</div> <!-- end .content -->
								</div> <!-- end .inner -->
							</div> <!-- end .blog-post -->
							</div>
							<?php } ?>
						</div>
						<!-- <div class="blog-load-more">
							<a href="#" class="button solid-button white icon-right">Load More Posts<i class="md-refresh"></i></a>
						</div>   -->
					
				</section>
			</div>
			</div>

<?php include 'page/footer.php' ?>