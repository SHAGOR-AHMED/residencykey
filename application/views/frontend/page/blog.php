<?php
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
?>
<section class="blog-section">
	<div class="container-inner">
		<div class="row">
			<div class="col-sm-12 col-md-8">
				<div class="blog-left">
					<div class="row">
						<?php foreach($all_blog as $value){ ?>
								<div class="col-sm-6 col-md-4">
									<div class="blog-item">
										<a href="<?php echo base_url('Blog-Details/'.$value->blog_id); ?>">
											<img src="<?php echo base_url($value->photo); ?>" alt="" title="" class="img-fluid">
											<h1><?php echo $value->blog_title; ?></h1>
											<p>
												<?php echo limit_words(strip_tags($value->blog_details),20,"UTF-8"); ?>
											</p>
										</a>
									</div>
								</div>
						<?php } ?>
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
						<iframe src="https://www.youtube-nocookie.com/embed/CY1D0wu0Caw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>	
				</div>
			</div>
		</div>
	</div>
</section>