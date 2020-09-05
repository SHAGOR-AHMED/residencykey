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
					Add New Property
				</h4>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<div class="step-content pos-rel" id="step-container">
						<div class="step-pane active" id="step1">
							<form name="property_form" class="form-horizontal" id="validation-form" action="<?php echo base_url('Property/save_property'); ?>" method="post" enctype="multipart/form-data" onsubmit="return(validate());">
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
																<input type="number" name="property_price" class="col-xs-12 col-sm-10" required="required" value="" />&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
															</div>
															<div class="help-block"><?php echo form_error('property_price'); ?></div>
														</div>
													</div>

													<div class="form-group">
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Area (sq. ft.)</label>
														<div class="col-xs-12 col-sm-9">
															<div class="clearfix">
																<input type="text" name="property_area" class="col-xs-12 col-sm-10" required="required" value="" />&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
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
														<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Upload Thumbnail</label>
														<div class="col-xs-12 col-sm-9">
															<div class="clearfix">
																<input type="file" name="photo" id="photo" value="" />
																Max File Size less than 1MB
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

													<div id="Item_photo"> </div>
							                        <div class="control-group">
							                            <label class="control-label" for="userfile">Add More Photos</label>
							                            <div class="controls">
							                                <input class="btn btn-success" type="button" name = 'add' value='Add' onclick="selectid2()">
							                            </div>
							                        </div>

							                        <div id="showattr" style="display: none">
							                            <div id='TextBoxesGroup'>
							                                <div id="TextBoxDiv1" >
							                                    <div class="form-group">
							                                        <label class="control-label col-md-3"> Upload Photo #1 : </label>
							                                        <div class="controls">
							                                            <input type="file" name="file[]" value="" />
																		Max File Size less than 1MB
							                                        </div>
							                                    </div>
							                                </div>
							                            </div>

							                            <div id="add_remove_button" class="form-group" style="margin-left: 230px">
							                            	<input class="btn btn-success" type='button' value='Add More' id='addButton'>
							                            	<input class="btn btn-danger" type='button' value='Remove' id='removeButton'>
							                            </div>
							                        </div>

												</div>
											</div>
										</div>	
									</div>
									<div class="form-group">
										<div class="col-md-offset-1 col-md-9">
											<button class="btn btn-sm btn-info" type="submit">
												<i class="ace-icon fa fa-check"></i>
												Save
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

	function selectid2() {
		document.getElementById('showattr').style.display = "block";
		document.getElementById('Item_photo').style.display = "none";
		//document.getElementById('Item_Status').style.display = "none";
		document.getElementById('add_remove_button').style.display = "block";
		return false;
	}


    $(document).ready(function(){
        var counter = 2;
        $("#addButton").click(function () {
            if(counter>10){
                alert("Only 10 Photo allow");
                return false;
            }
            var newTextBoxDiv = $(document.createElement('div'))
                .attr("id", 'TextBoxDiv' + counter);
            newTextBoxDiv.after().html('<div class="form-group">'+
                '<label class="control-label">Upload Photo #'+ counter + ' : </label>'+
                '<div class="controls">'+
                '<input type="file" name="file[]" value="">'+
                '</div>'+
                '</div>'
            );
            newTextBoxDiv.appendTo("#TextBoxesGroup");
            counter++;
        });

        $("#removeButton").click(function () {
            if(counter==2){
                alert("Remove All");
                document.getElementById('Item_photo').style.display = "block";
//              document.getElementById('Item_Status').style.display = "block";
                document.getElementById('add_remove_button').style.display = "none";
                document.getElementById('showattr').style.display = "none";
                return false;
            }
            counter--;
            $("#TextBoxDiv" + counter).remove();
        });
    });
</script>