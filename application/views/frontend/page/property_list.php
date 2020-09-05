<section class="property-list-section">
	<div class="container-inner">
		<div class="row">
			<div class="col-sm-12 col-md-8 col-lg-8">
				<div class="property-list-left">
					<?php foreach($all_property as $value){ ?>
						<div class="property-list-item">
							<div class="property-list-item-left">	
								<a href="<?php echo base_url('Property-Details/'.$value->property_id); ?>">
									<img src="<?php echo base_url($value->photo); ?>" alt="" title="" class="img-fluid">
								</a>
							</div>	
							<div class="property-list-item-right">
								<h1>Best Home Decor Tools You can ...</h1>
								<h2>BDT <?php echo $value->property_price; ?> </h2>
								<h3><?php echo $value->type_name; ?></h3>
								<h3><?php echo $value->location_name; ?></h3>
								<div class="span">
									<span><i class="fa fa-bed" aria-hidden="true"></i> <?php echo $value->bedroom; ?></span>
									<span><i class="fa fa-bath" aria-hidden="true"></i> <?php echo $value->bath; ?></span>
									<span><i class="fa fa-home" aria-hidden="true"></i> <?php echo $value->property_area; ?> sq.ft.</span>
								</div>
								<a href="#" class="btn btn-warning">Call</a>
								<a href="#" class="btn btn-warning btn-two">Email</a>
							</div>
						</div> <!-- property item end here -->
					<?php } ?>
				</div>
			</div>
			<script type="text/javascript">
			    function validate(){
			        if( document.search_form.property_type.value == "-1" || document.search_form.property_location.value == "-1" ){

			            alert( "Select box can't be empty!!!" );
			            return false;
			        }
			        return( true );
			    }
			</script>
			<div class="col-sm-12 col-md-4 col-lg-4">
				<div class="property-list-right">
					<div class="form">
						<p>Do Quick Search Here</p>
						<form name="search_form" action="<?php echo base_url('Welcome/search_property'); ?>" method="POST" enctype="multipart/form-data" onsubmit="return(validate());">
							<select name="property_location" class="form-control" required="">
		                      <?php getLocation(); ?>
		                  </select> 

		                  <select name="property_type" class="form-control">
		                    <?php getTypes(); ?>
		                  </select>

		                  <select name="property_area" id="proArea" class="form-control">
		                    <option value="">Area(SQ. FT.)</option>
		                    <option value="600-1000">600 - 1000 SQ. FT.</option>
		                    <option value="1100-1500">1100 - 1500 SQ. FT.</option>
		                    <option value="1600-2000">1600 - 2000 SQ. FT.</option>
		                    <option value="2100-2500">2100 - 2500 SQ. FT.</option>
		                    <option value="2600-3000">2600 - 3000 SQ. FT.</option>
		                    <option value="3100-3500">3100 - 3500 SQ. FT.</option>
		                    <option value="3600-4000">3600 - 4000 SQ. FT.</option>
		                    <option value="4100-4500">4100 - 4500 SQ. FT.</option>
		                    <option value="4600-5000">4600 - 5000 SQ. FT.</option>
		                    <option value="5100-5500">5100 - 5500 SQ. FT.</option>
		                  </select>

		                  <select name="property_price" id="proPrice" class="form-control">
		                    <option value="">Price(BDT)</option>
		                    <option value="2000000-3000000">2,000,000 - 30,000,00 BDT</option>
		                    <option value="3100000-4000000">31,000,00 - 40,000,00 BDT</option>
		                    <option value="4100000-5000000">41,000,00 - 50,000,00 BDT</option>
		                    <option value="5100000-6000000">51,000,00 - 60,000,00 BDT</option>
		                    <option value="6100000-7000000">61,000,00 - 70,000,00 BDT</option>
		                    <option value="7100000-8000000">71,000,00 - 80,000,00 BDT</option>
		                    <option value="8100000-9000000">81,000,00 - 90,000,00 BDT</option>
		                    <option value="9100000-10000000">91,000,00 - 10,000,000 BDT</option>
		                    <option value="10000000-12000000">10,000,000 - 12,000,000 BDT</option>
		                    <option value="12100000-13000000">12,100,000 - 13,000,000 BDT</option>
		                    <option value="13100000-14000000">13,100,000 - 14,000,000 BDT</option>
		                    <option value="14100000-15000000">14,100,000 - 15,000,000 BDT</option>
		                    <option value="15100000-16000000">15,100,000 - 16,000,000 BDT</option>
		                    <option value="16100000-17000000">16,100,000 - 17,000,000 BDT</option>
		                    <option value="17100000-18000000">17,100,000 - 18,000,000 BDT</option>
		                    <option value="18100000-19000000">18,100,000 - 19,000,000 BDT</option>
		                    <option value="19100000-20000000">19,100,000 - 20,000,000 BDT</option>
		                    <option value="20100000-25000000">20,100,000 - 25,000,000 BDT</option>
		                    <option value="25100000-30000000">25,100,000 - 30,000,000 BDT</option>
		                    <option value="30100000-35000000">30,100,000 - 35,000,000 BDT</option>
		                    <option value="35100000-40000000">35,100,000 - 40,000,000 BDT</option>
		                    <option value="40100000-50000000">40,100,000 - 50,000,000 BDT</option>
		                    <option value="50100000-100000000">50,100,000 - 100,000,000 BDT</option>
		                  </select>

		                  <button class="btn btn-info btn-block" name="submitQuery" type="submit">
			              		FIND
			              </button>
						</form>
					</div>
					<div class="subscribe-form">
						<p>Drop Your Email Below To Get Notifications on New Properties</p>
						<form>
							<input type="email" name="sub-email" placeholder="Email Here" required="" class="form-control">
							<button class="btn btn-info btn-block" name="submitQuery" type="submit">
			              		Subscribe
			              	</button>
						</form>
					</div>	
				</div>
			</div>
		</div>
	</div>
</section>