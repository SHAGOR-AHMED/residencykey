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
					Update Property Photo
				</h4>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<div class="step-content pos-rel" id="step-container">
						<div class="step-pane active" id="step1">
							<form class="form-horizontal" id="validation-form" action="<?php echo base_url('Property/update_PropertyPhoto'); ?>" method="post" enctype="multipart/form-data" >
								<div class="row">
									<div class="col-sm-12">
										
										<div class="form-group">
											<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="user-photo"></label>
											<div class="col-xs-12 col-sm-9">
												<div class="clearfix">
													<img src="<?= base_url($selected_info->file);?>" alt="img" title="img" height="150px" weight="150px" >
												</div>
											</div>
										</div>

										<div class="form-group">
											<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Update Photo</label>
											<div class="col-xs-12 col-sm-9">
												<div class="clearfix">
													<input type="file" name="file" value="" />
													Max File Size less than 1MB
												</div>
											</div>
										</div>
													
									</div>
									
									<input type="hidden" name="img_id" class="col-xs-12 col-sm-4" required="required" value="<?= $selected_info->img_id; ?>" />

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

