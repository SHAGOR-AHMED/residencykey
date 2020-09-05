
<!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script> -->

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
				<h4 class="widget-title lighter">Add New Blog</h4>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<div class="step-content pos-rel" id="step-container">
						<div class="step-pane active" id="step1">
							<form class="form-horizontal" id="user-submit" action="<?php echo base_url('Blog/save_blog'); ?>" method="post" enctype="multipart/form-data" autocomplete="off">
								
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="first-name">Blog Title</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="blog_title" id="first-name" class="col-xs-12 col-sm-12" required="required" value="" /><span class="fa fa-asterisk red"></span>
										</div>
										<div class="help-block"><?php echo form_error('blog_title'); ?></div>
									</div>
								</div>
								
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="address">Blog Details</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<textarea name="blog_details" required="required" id="address" class="col-xs-12 col-sm-4"></textarea><span class="fa fa-asterisk red"></span>
										</div>
										<div class="help-block"><?php echo form_error('blog_details'); ?></div>
									</div>
								</div>

								<!-- <div class="control-group">
			                        <label class="control-label" for="textarea2">Blog Description</label>
			                        <div class="controls">
			                            <textarea class="cleditor" name="blog_long_des" id="textarea2" rows="3"></textarea>
			                        </div>
			                    </div> -->

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
											<input type="text" name="video_link" id="first-name" class="col-xs-12 col-sm-12" value="" />
										</div>
										<div class="help-block"><?php echo form_error('video_link'); ?></div>
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
							</form>
						</div>
					</div>	
				</div><!-- /.widget-main -->
			</div><!-- /.widget-body -->
		</div><!-- PAGE CONTENT ENDS -->
	</div><!-- /.col -->
</div><!-- /.row -->