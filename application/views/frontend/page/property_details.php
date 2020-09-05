<section class="property-details-section-top">
	<div class="container-outer">
		<div class="row">
			<div class="col-md-12">
				<div class="property-details-title">
					<h1>A Ready To Move Flat Is up for sale in <?php echo $property_details->location_name; ?></h1>
					<span><?php echo $property_details->type_name; ?></span>
					<span>BDT <?php echo $property_details->property_price; ?></span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<?php 
							$i=0;
							foreach($property_photos as $value){ 
							$i++;

							if($i==1){
								$class = 'carousel-item active';
							}else{
								$class = 'carousel-item';
							}
						?>
							<div class="<?php echo $class; ?>">
							  <img class="d-block w-100" src="<?php echo base_url($value->file); ?>" title="" alt="First slide">
							</div>
						<?php } ?>
						<div class="slider-icon">
							<a href=""><i class="fa fa-heart-o" aria-hidden="true"></i> Save</a>
							<a href=""><i class="fa fa-share-square-o" aria-hidden="true"></i> Share</a>
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div><!-- slider end -->

				<div class="explore-area-section">
					<h2>Explore The area</h2>
					<ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="pills-restaurants-tab" data-toggle="pill" href="#pills-restaurants" role="tab" aria-controls="pills-restaurants" aria-selected="true">restaurants</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-hospitals-tab" data-toggle="pill" href="#pills-hospitals" role="tab" aria-controls="pills-hospitals" aria-selected="false">hospitals</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-schools-tab" data-toggle="pill" href="#pills-schools" role="tab" aria-controls="pills-schools" aria-selected="false">schools</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-park-tab" data-toggle="pill" href="#pills-park" role="tab" aria-controls="pills-park" aria-selected="false">park</a>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-restaurants" role="tabpanel" aria-labelledby="pills-home-tab">
							<img src="<?php echo base_url('assets/frontend/'); ?>assets/img/map.png" class="img-fluid d-block w-100">
						</div>
						<div class="tab-pane fade" id="pills-hospitals" role="tabpanel" aria-labelledby="pills-profile-tab">
							<img src="<?php echo base_url('assets/frontend/'); ?>assets/img/map.png" class="img-fluid d-block w-100">
						</div>
						<div class="tab-pane fade" id="pills-schools" role="tabpanel" aria-labelledby="pills-profile-tab">
							<img src="<?php echo base_url('assets/frontend/'); ?>assets/img/map.png" class="img-fluid d-block w-100">
						</div>
						<div class="tab-pane fade" id="pills-park" role="tabpanel" aria-labelledby="pills-contact-tab">
							<img src="<?php echo base_url('assets/frontend/'); ?>assets/img/map.png" class="img-fluid d-block w-100">
						</div>
					</div>
				</div><!-- ec=xplore-area-section-end-->

				<div class="video-section">
					<h2>Get A Viceo Tour</h2>
					<iframe src="https://www.youtube.com/embed/EUR-DImjuJw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>

			</div>  
			<div class="col-md-4">
				<div class="property-details-right">
					<div class="schedule-tour-top">
						<ul class="nav nav-pills" id="pills-tab" role="tablist">
							<li class="nav-item col-12 col-sm-6 col-md-6">
								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Schedule A Tour</a>
							</li>
							<li class="nav-item col-12 col-sm-6 col-md-6">
								<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Request Info</a>
							</li>
						</ul>
					</div>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
							<div class="schedule-tour-bottom">
								<form action="#" method="POST" enctype="multipart/form-data">
									<div class="form-group row">
										<div class="col-sm-12">
										  <input type="date" class="form-control form-select" placeholder="date">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-12">
											<select name="property_type" id="proType" class="form-control form-select">
												<option value="">Choose A Time</option>
												<option value="1">10 AM</option>
												<option value="2">12 Am</option>
												<option value="3">3 PM</option>
												<option value="4">5 PM</option>
												<option value="5">8 Pm</option>
											</select>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-12">
										  <input type="name" class="form-control" placeholder="Name">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-6">
										  <input type="phone" class="form-control" placeholder="Phone">
										</div>
										<div class="col-sm-6">
										  <input type="email" class="form-control" placeholder="Email">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-12">
										  <button class="btn btn-warning btn-block">Schedule A Tour</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
							<div class="request-info">
								<form action="#" method="POST" enctype="multipart/form-data">
									<div class="form-group row">
										<div class="col-sm-12">
										  <input type="name" class="form-control" placeholder="Name">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-6">
										  <input type="phone" class="form-control" placeholder="Phone">
										</div>
										<div class="col-sm-6">
										  <input type="email" class="form-control" placeholder="Email">
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-12">
										  <textarea class="form-control">I am the interested in this property. ID: Landqo-10001</textarea>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-sm-12">
										  <button class="btn btn-warning btn-block">Request Info</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>