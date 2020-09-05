<section class="blog-section">
	<div class="container-inner">
		<div class="row">
			<div class="col-sm-12 col-md-8">
				<div class="blog-left">
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<div class="blog-details">
								<img src="<?php echo base_url($blog_desc->photo); ?>" alt="" title="" class="img-fluid">
								<h1><?php echo $blog_desc->blog_title; ?></h1>
									<time datetime="2008-02-14 8:00">
										<?php 
											$timezone = "Asia/Dhaka";
											date_default_timezone_set($timezone);
											$dt = new DateTime($blog_desc->created_date);
											echo 'Posted:'.' '.$dt->format('M j Y');
									 	?>
									</time>
								<p>
									<?php echo $blog_desc->blog_details; ?>
								</p>
								
								<div class="blog-share-button">
									<p>Share Blog on Social Media</p>
									<div class="social-icon">
										<ul>
											<li>
												<a href="#">
													<img src="<?php echo base_url('assets/frontend/'); ?>assets/img/fb.png" alt="Facebook" title="Facebook">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="<?php echo base_url('assets/frontend/'); ?>assets/img/twitter.png" alt="Twitter" title="Twitter">	
												</a>
											</li>
											<li>
												<a href="#">
													<img src="<?php echo base_url('assets/frontend/'); ?>assets/img/instragram.png" alt="Instragram" title="Instragram">
												</a>
											</li>
											<li>
												<a href="#">
													<img src="<?php echo base_url('assets/frontend/'); ?>assets/img/linkedin.png" alt="Linkedin" title="Linkedin">
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="related-blog">
								<span>Related Blog</span>
								<div class="row">

									<?php foreach($all_blog as $value){ ?>
											<div class="col-sm-6 col-md-4">
												<div class="blog-item">
													<a href="<?php echo base_url('Blog-Details/'.$value->blog_id); ?>">
														<img src="<?php echo base_url($value->photo); ?>" alt="" title="" class="img-fluid">
														<h1><?php echo $value->blog_title; ?></h1>
													</a>
												</div>
											</div>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4">
				<div class="blog-right">
					<div class="form">
						<p>Drop Your Email Address Below <br> For Getting Killer Blog</p>
						<form>
							<input type="name" name="subscriber-name" placeholder="Your Name.." required="" class="form-control">
							<input type="email" name="subscriber-email" placeholder="Your Email.." required="" class="form-control">
							<button class="btn btn-info btn-block">Subscribe</button>
						</form>
					</div>
					<div class="blog-video">
						<a href="#" class="btn btn-secondary btn-block">Watch Our Video Blogs</a>
						<iframe src="https://www.youtube-nocookie.com/embed/<?php echo $blog_desc->video_link; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>	
				</div>
			</div>
		</div>
	</div>
</section>