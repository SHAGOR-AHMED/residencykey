<section class="sell-property-section">
	<div class="sell-property-overly">
		<div class="container-inner">
			<div class="sell-property">
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="sell-left">
							<h4>
								Sell Your Property At The Most 
								Reliable Online real State Market 
								Place In Bangladesh, Our Property
								And Selling Experts Ready to
								make Your property Quick Sell
							</h4>
						</div>							
					</div>
					<div class="col-12 col-md-6">
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

						<script type="text/javascript">
						    function validate(){
						        if( document.seller_form.property_type.value == "-1" || document.seller_form.property_location.value == "-1" ){

						            alert( "Select box can't be empty!!!" );
						            return false;
						        }
						        return( true );
						    }
						</script>

						<div class="sell-right">
							<form name="seller_form" action="<?= base_url('Save-Seller');?>" method="POST" enctype="multipart/form-data" onsubmit="return(validate());">
								<input type="text" name="seller_name" placeholder="Name *" required="" class="form-control">
								<div class="help-block"><?php echo form_error('seller_name'); ?></div>
								<input type="number" name="seller_phone" placeholder="Phone *" required="" class="form-control">
								<div class="help-block"><?php echo form_error('seller_phone'); ?></div>
								<input type="email" name="seller_email" placeholder="Email *" required="" class="form-control">
								<div class="help-block"><?php echo form_error('seller_email'); ?></div>
								<select name="property_type" class="form-control">
									<?php getTypes(); ?>
								</select>
								<div class="help-block"><?php echo form_error('property_type'); ?></div>
								<select name="property_location" class="form-control">
									<?php getLocation(); ?>
								</select>
								<div class="help-block"><?php echo form_error('property_location'); ?></div>
								<button class="btn btn-info btn-block" name="submitQuery" type="submit">
									<strong>Submit</strong>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- parent-property-section end -->

