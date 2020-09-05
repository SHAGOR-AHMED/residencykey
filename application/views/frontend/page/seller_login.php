<section class="login-section">
	<div class="container-inner">
		<div class="row">
			<div class="col-md-12">
				<div class="login-form">
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
					<ul class="nav nav-pills nav-justified mb-3" id="pills-tab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="pills-sign-up-tab" data-toggle="pill" href="#pills-sign-up" role="tab" aria-controls="pills-sign-up" aria-selected="false">Sign Up</a>
						</li>
					</ul>
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
							<form action="<?php echo base_url('Login-Seller'); ?>" method="POST" enctype="multipart/form-data">
								<div class="form-group row">
									<div class="col-sm-12">
									  <input type="email" name="seller_email" class="form-control" placeholder="Email">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-12">
									  <input type="password" name="seller_password" class="form-control" placeholder="Password">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-12">
									  <button class="btn btn-warning btn-block">Login</button>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-12">
										<span class="">Not Registerd? <a id="pills-sign-up-tab" data-toggle="pill" href="#pills-sign-up" role="tab" aria-controls="pills-sign-up" aria-selected="false">Sign Up Here</a></span>
									</div>
								</div>
							</form>
						</div>
						<div class="tab-pane fade" id="pills-sign-up" role="tabpanel" aria-labelledby="pills-sign-up-tab">
							<form action="<?php echo base_url('Create-Seller'); ?>" method="POST" enctype="multipart/form-data">
								<div class="form-group row">
									<div class="col-sm-12">
									  <input type="text" name="seller_name" class="form-control" placeholder="Name">
									</div>
									<div class="help-block"><?php echo form_error('seller_name'); ?></div>
								</div>
								<div class="form-group row">
									<div class="col-sm-12">
									  <input type="email" name="seller_email" class="form-control" placeholder="Email">
									</div>
									<div class="help-block"><?php echo form_error('seller_email'); ?></div>
								</div>
								<div class="form-group row">
									<div class="col-sm-12">
									  <input type="password" name="seller_password" class="form-control" placeholder="Password">
									</div>
									<div class="help-block"><?php echo form_error('seller_password'); ?></div>
								</div>
								<div class="form-group row">
									<div class="col-sm-12">
									  <input type="password" name="confirm_password" class="form-control" placeholder="Re-type Password">
									</div>
									<div class="help-block"><?php echo form_error('confirm_password'); ?></div>
								</div>
								<div class="form-group row">
									<div class="col-sm-4">
									  <input type="text" class="form-control" placeholder="Phone" value="BD +880 " readonly="">
									</div>
									<div class="col-sm-8">
									  <input type="text" name="seller_mobile" class="form-control" placeholder="Mobile">
									</div>
									<div class="help-block"><?php echo form_error('seller_mobile'); ?></div>
								</div>
								<div class="form-group row">
									<div class="col-sm-12">
									  <div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="userType" name="seller_type" value="Buyer/Owner" class="custom-control-input">
										<label class="custom-control-label" for="userType">Buyer/Owner</label>
									  </div>
									  <div class="help-block"><?php echo form_error('seller_type'); ?></div>
									  <div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="userType2" name="seller_type" value="Agent" class="custom-control-input">
										<label class="custom-control-label" for="userType2">Agent</label>
									  </div>
									  <div class="help-block"><?php echo form_error('seller_type'); ?></div>
									   <div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="userType3" name="seller_type" value="Builder" class="custom-control-input">
										<label class="custom-control-label" for="userType3">Builder</label>
									  </div>
									  <div class="help-block"><?php echo form_error('seller_type'); ?></div>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-12">
									  <input type="file" name="photo" class="form-control">
									  <p>Must be less then 1MB</p>
									</div>
								</div>
								<hr>
								<div class="form-group row">
									<div class="col-sm-12">
										<p class="">By Clicking Sign Up, You Agree To Residencykey Terms & Conditions</p>
									</div>
								</div>    	
								<div class="form-group row">
									<div class="col-sm-12">
									  <button class="btn btn-warning btn-block">Sign Up</button>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-12">
										<span class="">Already Registerd? <a id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login Here</a></span>
									</div>
								</div>  
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>