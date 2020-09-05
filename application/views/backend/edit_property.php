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
        if( document.property_form.property_type.value == "-1" || document.property_form.bedroom.value == "-1" ){

            alert( "Select box can't be empty!!!" );
            return false;
        }
        return( true );
    }
</script>

<div class="row">
	<div class="col-xs-12">
		<div class="widget-box">
			<div class="widget-header widget-header-blue widget-header-flat">
				<i class="fa fa-refresh"></i>&nbsp;								
				<h4 class="widget-title lighter">
					Update Property Information
				</h4>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<div class="step-content pos-rel" id="step-container">
						<div class="step-pane active" id="step1">
							<form name="property_form" class="form-horizontal" id="validation-form" action="<?php echo base_url('Property/update_Property'); ?>" method="post" enctype="multipart/form-data" >
								<div class="row">
									<div class="col-sm-6">
										<div class="widget-box">
											<div class="widget-header">
												<h4 class="widget-title">Basic Information</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">

													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="group_id">Property Type</label>
														<div class="col-xs-12 col-sm-9">
															<div class="clearfix">
																<select class="col-xs-12 col-sm-8" name="property_type" required>
																	<?php getTypes(); ?>
																</select>
																&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
															</div>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Property Price</label>
														<div class="col-xs-12 col-sm-9">
															<div class="clearfix">
																<input type="number" name="property_price" class="col-xs-12 col-sm-10" required="required" value="<?= $selected_info->property_price; ?>" />&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
															</div>
															<div class="help-block"><?php echo form_error('property_price'); ?></div>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Area (sq. ft.)</label>
														<div class="col-xs-12 col-sm-9">
															<div class="clearfix">
																<input type="text" name="property_area" class="col-xs-12 col-sm-10" required="required" value="<?= $selected_info->property_area; ?>" />&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
															</div>
															<div class="help-block"><?php echo form_error('property_area'); ?></div>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="group_id">Bedroom</label>
														<div class="col-xs-12 col-sm-9">
															<div class="clearfix">
																<select class="col-xs-12 col-sm-8" name="bedroom" required>
																	<option value="-1">Select Bedroom</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																	<option value="6">6</option>
																	<option value="7">7</option>
																	<option value="8">8</option>
																	<option value="9">9</option>
																	<option value="10">10</option>
																</select>
																&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
															</div>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="group_id">Baths</label>
														<div class="col-xs-12 col-sm-9">
															<div class="clearfix">
																<select class="col-xs-12 col-sm-8" name="bath" required>
																	<option value="-1">Select Baths</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																</select>
																&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
															</div>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="group_id">Drawing</label>
														<div class="col-xs-12 col-sm-9">
															<div class="clearfix">
																<select class="col-xs-12 col-sm-8" name="drawing" required>
																	<option value="-1">Select Drawing</option>
																	<option value="1">Yes</option>
																	<option value="0">No</option>
																</select>
																&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
															</div>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="group_id">Dining</label>
														<div class="col-xs-12 col-sm-9">
															<div class="clearfix">
																<select class="col-xs-12 col-sm-8" name="dining" required>
																	<option value="-1">Select Dining</option>
																	<option value="1">Yes</option>
																	<option value="0">No</option>
																</select>
																&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
															</div>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="user-photo"></label>
														<div class="col-xs-12 col-sm-9">
															<div class="clearfix">
																<img src="<?= base_url($selected_info->photo);?>" alt="img" title="img" height="150px" weight="150px" >
															</div>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Upload Photo</label>
														<div class="col-xs-12 col-sm-9">
															<div class="clearfix">
																<input type="file" name="photo" id="photo" value="" />
																Max File Size less than 1MB and dimention 250x280
															</div>
															<div class="help-block"><?php echo form_error('photo'); ?></div>
														</div>
													</div>
													
												</div>
											</div>
										</div>
									</div>
									
									<div class="col-sm-6">
										<div class="widget-box">
											<div class="widget-header">
												<h4 class="widget-title">Amenities</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">

													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="group_id">Left/Elevator</label>
														<div class="col-xs-12 col-sm-9">
															<div class="clearfix">
																<select class="col-xs-12 col-sm-8" name="elevator" required>
																	<option value="-1">Select Left</option>
																	<option value="1">Yes</option>
																	<option value="0">No</option>
																</select>
																&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
															</div>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="group_id">Gas</label>
														<div class="col-xs-12 col-sm-9">
															<div class="clearfix">
																<select class="col-xs-12 col-sm-8" name="gas" required>
																	<option value="-1">Select Gas</option>
																	<option value="1">Yes</option>
																	<option value="0">No</option>
																</select>
																&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
															</div>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="group_id">Belcony</label>
														<div class="col-xs-12 col-sm-9">
															<div class="clearfix">
																<select class="col-xs-12 col-sm-8" name="belcony" required>
																	<option value="-1">Select Belcony</option>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																</select>
																&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
															</div>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="group_id">Parking</label>
														<div class="col-xs-12 col-sm-9">
															<div class="clearfix">
																<select class="col-xs-12 col-sm-8" name="parking" required>
																	<option value="-1">Select Parking</option>
																	<option value="1">Yes</option>
																	<option value="0">No</option>
																</select>
																&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
															</div>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="group_id">Lobby</label>
														<div class="col-xs-12 col-sm-9">
															<div class="clearfix">
																<select class="col-xs-12 col-sm-8" name="lobby" required>
																	<option value="-1">Select Lobby</option>
																	<option value="1">Yes</option>
																	<option value="0">No</option>
																</select>
																&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
															</div>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="group_id">View</label>
														<div class="col-xs-12 col-sm-9">
															<div class="clearfix">
																<select class="col-xs-12 col-sm-8" name="view" required>
																	<option value="-1">Select View</option>
																	<option value="1">South</option>
																	<option value="2">North</option>
																	<option value="3">East</option>
																	<option value="4">West</option>
																</select>
																&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
															</div>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="group_id">Security CCTV/ Guard</label>
														<div class="col-xs-12 col-sm-9">
															<div class="clearfix">
																<select class="col-xs-12 col-sm-8" name="security" required>
																	<option value="-1">Select Security CCTV/ Guard</option>
																	<option value="1">Available</option>
																	<option value="0">Not Available</option>
																</select>
																&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
															</div>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="group_id">Maintenance Staff</label>
														<div class="col-xs-12 col-sm-9">
															<div class="clearfix">
																<select class="col-xs-12 col-sm-8" name="maintenance_staff" required>
																	<option value="-1">Select Maintenance Staff</option>
																	<option value="1">Available</option>
																	<option value="0">Not Available</option>
																</select>
																&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
															</div>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="group_id">Property Location</label>
														<div class="col-xs-12 col-sm-9">
															<div class="clearfix">
																<select class="col-xs-12 col-sm-8" name="property_location" required>
																	<?php getLocation(); ?>
																</select>
																&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
															</div>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="group_id">Property Owner</label>
														<div class="col-xs-12 col-sm-9">
															<div class="clearfix">
																<select class="col-xs-12 col-sm-8" name="property_owner" required>
																	<?php getPropertyOwner(); ?>
																</select>
																&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
															</div>
														</div>
													</div>

													<input type="hidden" name="property_id" class="col-xs-12 col-sm-4" required="required" value="<?= $selected_info->property_id; ?>" />

												</div>
											</div>
										</div>	
									</div>
									<div class="form-group">
										<div class="col-md-offset-1 col-md-9">
											<button class="btn btn-sm btn-info" type="submit">
												<i class="ace-icon fa fa-check"></i>
												Update
											</button>
											&nbsp; &nbsp;
											<button class="btn btn-sm cancel" type="button">
												<i class="ace-icon fa fa-times"></i>
												Cancle
											</button>
										</div>
									</div>
								</div>
							</form>
						</div>
						
					</div>	
				</div><!-- /.widget-main -->
			</div><!-- /.widget-body -->
		</div><!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
</div><!-- /.row -->

<script type="text/javascript">

	document.forms['property_form'].elements['property_type'].value='<?php echo $selected_info->property_type; ?>';
	document.forms['property_form'].elements['bedroom'].value='<?php echo $selected_info->bedroom; ?>';
	document.forms['property_form'].elements['bath'].value='<?php echo $selected_info->bath; ?>';
	document.forms['property_form'].elements['drawing'].value='<?php echo $selected_info->drawing; ?>';
	document.forms['property_form'].elements['dining'].value='<?php echo $selected_info->dining; ?>';
	document.forms['property_form'].elements['elevator'].value='<?php echo $selected_info->elevator; ?>';
	document.forms['property_form'].elements['gas'].value='<?php echo $selected_info->gas; ?>';
	document.forms['property_form'].elements['belcony'].value='<?php echo $selected_info->belcony; ?>';
	document.forms['property_form'].elements['parking'].value='<?php echo $selected_info->parking; ?>';
	document.forms['property_form'].elements['lobby'].value='<?php echo $selected_info->lobby; ?>';
	document.forms['property_form'].elements['view'].value='<?php echo $selected_info->view; ?>';
	document.forms['property_form'].elements['security'].value='<?php echo $selected_info->security; ?>';
	document.forms['property_form'].elements['maintenance_staff'].value='<?php echo $selected_info->maintenance_staff; ?>';
	document.forms['property_form'].elements['property_location'].value='<?php echo $selected_info->property_location; ?>';
	document.forms['property_form'].elements['property_owner'].value='<?php echo $selected_info->property_owner; ?>';
</script>