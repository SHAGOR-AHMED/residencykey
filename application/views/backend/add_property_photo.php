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

<div class="row">
	<div class="col-xs-12">
		<div class="widget-box">
			<div class="widget-header widget-header-blue widget-header-flat">
				<i class="fa fa-refresh"></i>&nbsp;								
				<h4 class="widget-title lighter">
					Add New Property Photo
				</h4>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<div class="step-content pos-rel" id="step-container">
						<div class="step-pane active" id="step1">
							<form name="property_form" class="form-horizontal" id="validation-form" action="<?php echo base_url('Property/save_propertPhoto'); ?>" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-sm-12">
										<div class="widget-body">
											<div class="widget-main">
												<div class="form-group">
													<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Upload Photo</label>
													<div class="col-xs-12 col-sm-9">
														<div class="clearfix">
															<input type="file" name="file[]" value="" />
															Max File Size less than 1MB
														</div>
													</div>
												</div>

												<div id="Item_photo"> </div>

												<div class="form-group">
													<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Add More Photos</label>
													<div class="col-xs-12 col-sm-9">
														<div class="clearfix">
															<input class="btn btn-success" type="button" name = 'add' value='Add' onclick="selectid2()">
														</div>
													</div>
												</div>

						                        <div id="showattr" style="display: none">
						                            <div id='TextBoxesGroup'>
					                                    <div class="form-group">
					                                        <label class="control-label col-md-3"> Upload Photo #1 : </label>
					                                        <div class="controls">
					                                            <input type="file" name="file[]" value="" />
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

									<input type="text" name="property_id" value="<?php echo $propertyID; ?>" />
									
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