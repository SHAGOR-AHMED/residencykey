<div class="row">
	<div class="col-xs-12">
		<div class="widget-box">
			<div class="widget-header widget-header-blue widget-header-flat">
				<i class="fa fa-refresh"></i>&nbsp;								
				<h4 class="widget-title lighter">
					Edit Notice
				</h4>
			</div>
			<div class="widget-body">
				<div class="widget-main">
					<div class="step-content pos-rel" id="step-container">
						<div class="step-pane active" id="step1">
							<form name="user" class="form-horizontal" id="user-submit" action="<?php echo base_url('Notice/update_notices'); ?>" method="post" enctype="multipart/form-data" autocomplete="off">

								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="group_id">Purpose of Notice</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<input type="text" name="purpose_notice" class="col-xs-12 col-sm-4" required="required" value="<?= $selected_info->purpose_notice; ?>" placeholder="Purpose of Notice" />
											&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
										</div>
									</div>
								</div>

								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="group_id">Notice</label>
									<div class="col-xs-12 col-sm-9">
										<div class="clearfix">
											<textarea name="notices" class="col-xs-12 col-sm-4" required="required" placeholder="Notice"><?= $selected_info->notices; ?></textarea>
											&nbsp;&nbsp;<span class="fa fa-asterisk red"></span>
										</div>
									</div>
								</div>

								<input type="hidden" name="notice_id" class="col-xs-12 col-sm-4" required="required" value="<?= $selected_info->notice_id; ?>" />
								
								<div class="form-group">
									<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="group_id"></label>
									<div class="col-xs-12 col-sm-9">
										<button class="btn btn-sm btn-info" type="submit">
											<i class="ace-icon fa fa-check"></i>
											Save Change
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