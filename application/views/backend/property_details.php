<div class="row">
	<div class="col-sm-12">
		<div class="widget-box">
			<div class="widget-header">
				<h4 class="widget-title">BASIC INFORMATION</h4>
			</div>

			<div class="widget-body">
				<div class="widget-main">

					<div class="form-group">
						<div class="clearfix">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="reg-no">Property Owner Name:</label>
							<div class="col-sm-5"><?php echo $ProDesc->seller_name; ?></div>
						</div>
					</div>

					<div class="form-group">
						<div class="clearfix">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="reg-no">Property Type:</label>
							<div class="col-sm-5"><?php echo $ProDesc->type_name; ?></div>
						</div>
					</div>

					<div class="form-group">
						<div class="clearfix">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="reg-no">Property Location:</label>
							<div class="col-sm-5"><?php echo $ProDesc->location_name; ?></div>
						</div>
					</div>

					<div class="form-group">
						<div class="clearfix">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="reg-no">Property Price:</label>
							<div class="col-sm-5">BDT <?php echo $ProDesc->property_price; ?></div>
						</div>
					</div>

					<div class="form-group">
						<div class="clearfix">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="reg-no">Property Area:</label>
							<div class="col-sm-5"><?php echo $ProDesc->property_area; ?> sq.ft.</div>
						</div>
					</div>

					<div class="form-group">
						<div class="clearfix">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="reg-no">Bedrooms:</label>
							<div class="col-sm-5"><?php echo $ProDesc->bedroom; ?></div>
						</div>
					</div>

					<div class="form-group">
						<div class="clearfix">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="reg-no">Bath:</label>
							<div class="col-sm-5"><?php echo $ProDesc->bath; ?></div>
						</div>
					</div>

					<div class="form-group">
						<div class="clearfix">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="reg-no">Drawing:</label>
							<div class="col-sm-5"><?php drawing($ProDesc->drawing); ?></div>
						</div>
					</div>

					<div class="form-group">
						<div class="clearfix">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="reg-no">Dining:</label>
							<div class="col-sm-5"><?php dining($ProDesc->dining); ?></div>
						</div>
					</div>

					<div class="form-group">
						<div class="clearfix">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="reg-no">Left/Elevator:</label>
							<div class="col-sm-5"><?php elevator($ProDesc->elevator); ?></div>
						</div>
					</div>
                    
				</div>
			</div>
		</div>
	</div>

	<div class="col-sm-12">
		<div class="widget-box">
			<div class="widget-header">
				<h4 class="widget-title">AMENITIES INFORMATION</h4>
			</div>

			<div class="widget-body">
				<div class="widget-main">

					<div class="form-group">
						<div class="clearfix">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="reg-no">Gas:</label>
							<div class="col-sm-5"><?php gas($ProDesc->gas); ?></div>
						</div>
					</div>

					<div class="form-group">
						<div class="clearfix">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="reg-no">Belcony:</label>
							<div class="col-sm-5"><?php echo $ProDesc->belcony; ?></div>
						</div>
					</div>

					<div class="form-group">
						<div class="clearfix">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="reg-no">Parking:</label>
							<div class="col-sm-5"><?php parking($ProDesc->parking); ?></div>
						</div>
					</div>

					<div class="form-group">
						<div class="clearfix">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="reg-no">Lobby:</label>
							<div class="col-sm-5"><?php lobby($ProDesc->lobby); ?></div>
						</div>
					</div>

					<div class="form-group">
						<div class="clearfix">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="reg-no">View:</label>
							<div class="col-sm-5"><?php view($ProDesc->view); ?></div>
						</div>
					</div>

					<div class="form-group">
						<div class="clearfix">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="reg-no">Security:</label>
							<div class="col-sm-5"><?php security($ProDesc->security); ?></div>
						</div>
					</div>

					<div class="form-group">
						<div class="clearfix">
							<label class="control-label col-xs-12 col-sm-3 no-padding-right" for="reg-no">Maintenance Staff:</label>
							<div class="col-sm-5"><?php maintenance_staff($ProDesc->maintenance_staff); ?></div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>