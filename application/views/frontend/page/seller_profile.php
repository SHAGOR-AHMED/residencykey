<section class="profile-section">
	<div class="container-inner">
		<div class="row">
			<div class="col-md-12">
				<div class="profile-area">
					<ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="pills-my-profile-tab" data-toggle="pill" href="#pills-my-profile" role="tab" aria-controls="pills-my-profile" aria-selected="true">my-profile</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-my-properties-tab" data-toggle="pill" href="#pills-my-properties" role="tab" aria-controls="pills-my-properties" aria-selected="false">my properties</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-list-property-tab" data-toggle="pill" href="#pills-list-property" role="tab" aria-controls="pills-list-property" aria-selected="false">list property</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-favorite-properties-tab" data-toggle="pill" href="#pills-favorite-properties" role="tab" aria-controls="pills-favorite-properties" aria-selected="false">favorite properties</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-log-out-tab" data-toggle="pill" href="#pills-log-out" role="tab" aria-controls="pills-log-out" aria-selected="false">log out</a>
						</li>
					</ul>
					<?php
						$seller_name = $this->session->userdata('seller_name');
						$seller_email = $this->session->userdata('seller_email');
						$seller_mobile = $this->session->userdata('seller_mobile');
						$seller_type = $this->session->userdata('seller_type');
						$photo = $this->session->userdata('photo');
					?>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-my-profile" role="tabpanel" aria-labelledby="pills-my-profile-tab">
							<div class="profile-content">
								<div class="row">
									<div class="col-md-4">
										<div class="profile-pic">
											<img src="<?php echo base_url($photo); ?>" alt="" title="" class="img-fluid">
											<a href="#uploadDocumentModal" data-toggle="modal" class="btn btn-warning">Update Profile Picture</a>
										</div>
									</div>
									<div class="col-md-8">
										<form name="seller_form" action="#" method="POST" enctype="multipart/form-data">
											<div class="form-group row">
												<label for="inputName" class="col-sm-2 col-form-label">Name</label>
												<div class="col-sm-10">
												  <input type="text" class="form-control" id="inputName" placeholder="Name" value="<?= $seller_name; ?>">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputMobile" class="col-sm-2 col-form-label">Mobile</label>
												<div class="col-sm-10">
												  <input type="text" class="form-control" id="inputMobile" placeholder="Mobile" value="<?= $seller_mobile; ?>">
												</div>
											</div>
											<div class="form-group row">
												<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
												<div class="col-sm-10">
												  <input type="email" class="form-control" id="inputEmail" placeholder="Email" value="<?= $seller_email; ?>">
												</div>
											</div>
											<div class="form-group row">
												<label for="customerType" class="col-sm-2 col-form-label">Type</label>
												<div class="col-sm-10">
													<select name="seller_type" id="customerType" class="form-control">
														<option value="-1">Customer Type</option>
														<option value="1">Buyer</option>
														<option value="2">Owner</option>
														<option value="3">Agent</option>
														<option value="4">Builder</option>
													</select>
												</div>
											</div>												
											<div class="form-group row">
												<label for="inputPassword3" class="col-sm-2 col-form-label"></label>
												<div class="col-sm-10">
												  <button type="submit" class="btn btn-block btn-warning">Save Change</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div><!-- profile information end -->
						<script type="text/javascript">
							document.forms['seller_form'].elements['seller_type'].value='<?php echo $seller_type; ?>';
						</script>

						<div class="tab-pane fade" id="pills-my-properties" role="tabpanel" aria-labelledby="pills-my-properties-tab">
							<div class="profile-content">
								<div class="row">
									<?php 
										if(!empty($my_property)){ 
										foreach($my_property as $value){ ?>
											<div class="col-md-4">
												<div class="profile-list-item">
													<div class="profile-list-item-left">	
														<a href="<?php echo base_url('Property-Details/'.$value->property_id); ?>">
															<img src="<?php echo base_url($value->photo); ?>" alt="" title="" class="img-fluid">
														</a>
													</div>	
													<div class="profile-list-item-right">
														<h1><a href="<?php echo base_url('Property-Details/'.$value->property_id); ?>">Best Home Decor Tools You can ...</a></h1>
														<h2>BDT <?php echo $value->property_price; ?> </h2>
														<h3><?php echo $value->type_name; ?></h3>
														<h3><?php echo $value->location_name; ?></h3>
														<div class="span">
															<span><i class="fa fa-bed" aria-hidden="true"></i> <?php echo $value->bedroom; ?></span>
															<span><i class="fa fa-bath" aria-hidden="true"></i> <?php echo $value->bath; ?></span>
															<span><i class="fa fa-home" aria-hidden="true"></i> <?php echo $value->property_area; ?> sq.ft.</span>
														</div>
													</div>
												</div> 
											</div> <!-- property item end here -->
									<?php
										}

										}else{ ?>
											<div class="col-md-12">
												<div class="alert alert-block alert-danger">
													<i class="ace-icon fa fa-check green"></i>
													No Property Listed Yet.
												</div>
											</div>
									<?php } ?>
								</div>
							</div>			
						</div><!-- property list end -->
						<script type="text/javascript">
						    function validate(){
						        if( document.seller_form.property_type.value == "-1" || document.seller_form.property_location.value == "-1" ){

						            alert( "Select box can't be empty!!!" );
						            return false;
						        }
						        return( true );
						    }
						</script>
						<div class="tab-pane fade" id="pills-list-property" role="tabpanel" aria-labelledby="pills-list-property-tab">
							<?php 
								if(!empty($message)){
							?>
								<div class="alert alert-block alert-success">
									<button type="button" class="close" data-dismiss="alert">
										<i class="ace-icon fa fa-times"></i>
									</button>

									<i class="ace-icon fa fa-check green"></i>
									<?php echo $message; ?>
								</div>

							<?php } ?>
							<div class="profile-content-form">
								<form name="seller_form" action="<?= base_url('Save-Seller');?>" method="POST" enctype="multipart/form-data" onsubmit="return(validate());">
									<input type="text" name="seller_name" id="" placeholder="Name *" required="" class="form-control">
									<input type="text" name="seller_phone" id="" placeholder="Phone *" required="" class="form-control">
									<input type="email" name="seller_email" id="" placeholder="Email *" required="" class="form-control">

									<select name="property_type" id="proType" class="form-control">
										<?php getTypes(); ?>
									</select>

									<select name="property_location" class="form-control" required="">
										<?php getLocation(); ?>
									</select>  
									<button class="btn btn-warning btn-block" name="submitQuery" type="submit">
										<strong>Submit</strong>
									</button>
								</form>
							</div>
						</div><!-- property listing ending -->

						<div class="tab-pane fade" id="pills-favorite-properties" role="tabpanel" aria-labelledby="pills-favorite-properties-tab">
							<div class="profile-content">
								<div class="row">
									<div class="col-md-4">
										<div class="profile-list-item">
											<div class="profile-list-item-left">	
												<a href="property-details.html">
													<img src="<?php echo base_url('assets/frontend/'); ?>assets/img/Are-you-planning-to-sell-your-house.png" alt="" title="" class="img-fluid">
												</a>
											</div>	
											<div class="profile-list-item-right">
												<h1><a href="property-details.html">Best Home Decor Tools You can ...</a></h1>
												<h2>BDT 80,00000/- </h2>
												<h3>Apertment</h3>
												<h3>Dhanmondi 10, Dhaka</h3>
												<div class="span">
													<span><i class="fa fa-bed" aria-hidden="true"></i> 3</span>
													<span><i class="fa fa-bath" aria-hidden="true"></i> 3</span>
													<span><i class="fa fa-home" aria-hidden="true"></i> 14,00 sq.ft.</span>
												</div>
											</div>
										</div> 
									</div> <!-- property item end here -->

								</div>
							</div>	
						</div> <!-- favorite list ending -->

						<div class="tab-pane fade" id="pills-log-out" role="tabpanel" aria-labelledby="pills-log-out-tab">
							<div class="profile-content">
								<div class="row">
									<div class="col-md-12">
										<div class="log-out">
											<p>Are You Sure For Log Out??</p>
											<a href="<?php echo base_url('Seller/do_logout');?>"><button class="btn btn-warning btn-lg">Log Out</button></a>
										</div>
									</div>
								</div>
							</div>		
						</div> <!-- log out code ending -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>