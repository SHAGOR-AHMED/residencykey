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
					Update Location
				</h4>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<div class="step-content pos-rel" id="step-container">
						<div class="step-pane active" id="step1">
							<form class="form-horizontal" action="<?php echo base_url('Location/update_location'); ?>" method="post" enctype="multipart/form-data">

								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="group_id">Location Name</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="location_name" class="col-xs-12 col-sm-4" required="required" value="<?= $selected_info->location_name; ?>" placeholder="Purpose of expense"/>
											&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
										</div>
										<div class="help-block"><?php echo form_error('location_name'); ?></div>
									</div>
								</div>

								<input type="hidden" name="location_id" class="col-xs-12 col-sm-4" required="required" value="<?= $selected_info->location_id; ?>" />
								
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="group_id"></label>
									<div class="col-xs-12 col-sm-9">
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
							</form>
						</div>
					</div>	
				</div><!-- /.widget-main -->
			</div><!-- /.widget-body -->
		</div><!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
</div><!-- /.row -->