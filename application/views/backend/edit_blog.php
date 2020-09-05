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
					Update Blog
				</h4>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<div class="step-content pos-rel" id="step-container">
						<div class="step-pane active" id="step1">
							<form class="form-horizontal" action="<?php echo base_url('Blog/update_blog'); ?>" method="post" enctype="multipart/form-data">

								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="group_id">Blog Title</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="blog_title" class="col-xs-12 col-sm-4" required="required" value="<?= $selected_info->blog_title; ?>" />
											&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
										</div>
										<div class="help-block"><?php echo form_error('blog_title'); ?></div>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="address">Blog Details</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<textarea name="blog_details" required="required" id="address" class="col-xs-12 col-sm-4"><?= $selected_info->blog_details; ?></textarea><span class="fa fa-asterisk red"></span>
										</div>
										<div class="help-block"><?php echo form_error('blog_details'); ?></div>
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
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="user-photo">Upload Photo</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="file" name="photo" id="photo" value="" />Max File Size less than 1MB and dimention 250x280
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Video Link</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="video_link" class="col-xs-12 col-sm-12" value="<?= $selected_info->video_link; ?>" />
										</div>
										<div class="help-block"><?php echo form_error('video_link'); ?></div>
									</div>
								</div>

								<input type="hidden" name="blog_id" value="<?php print $selected_info->blog_id;?>" class="form-control">
								
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