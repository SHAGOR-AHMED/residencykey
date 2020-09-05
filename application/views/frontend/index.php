<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?= (isset($title))? $title : ''; ?></title>
	<meta name="description" content="Free Web tutorials">
  	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
  	<meta name="author" content="John Doe">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/'); ?>assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/'); ?>assets/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/'); ?>assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/frontend/'); ?>assets/css/responsive-style.css">
	<script type="text/javascript" src="<?php echo base_url('assets/frontend/'); ?>assets/js/jQuery.js"></script>
</head>
<body>
	<section class="navbar-section sticky-top">
		<nav class="navbar navbar-expand-md navbar-light">
			<a class="navbar-brand nav-link d-block d-md-none" href="index.html">
			    <img src="<?php echo base_url('assets/frontend/'); ?>assets/img/logo.png" class="img-fluid align-top" alt="Landqo" title="Landqo">
			</a>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbarOne" aria-controls="myNavbarOne" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="myNavbarOne">			    
			    <ul class="navbar-nav mr-auto mt-lg-0 w-100 nav-justified">
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo base_url('Blog-List'); ?>">
			        	<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
						Blog
					</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo base_url('Services'); ?>">
			        	<i class="fa fa-sun-o" aria-hidden="true"></i>
						Services
					</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo base_url('Home-Loan'); ?>">
			        	<i class="fa fa-home" aria-hidden="true"></i>
						Home Loan
					</a>
			      </li>
			      <li class="nav-item">
				    <a href="<?php echo base_url('Residency-Key'); ?>" class="d-none d-md-block">
				    	<img src="<?php echo base_url('assets/frontend/'); ?>assets/img/logo.png" class="img-fluid" alt="Landqo" title="Landqo">
				    </a>	
				     <a href="index.html" class="nav-link d-block d-md-none">
				    	<i class="fa fa-home" aria-hidden="true"></i>
						Home
				    </a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo base_url('Sell-Property'); ?>">
			        	<i class="fa fa-home" aria-hidden="true"></i>
			    		Sell Property
			    	</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="<?php echo base_url('Property-List'); ?>">
			        	<i class="fa fa-home" aria-hidden="true"></i>
			        	Buy Property
			        </a>
			      </li>

			       <?php 
			        	$sellerID = $this->session->userdata('seller_id');
			        	if(empty($sellerID)){ ?>
			        		<li class="nav-item">
						        <a class="nav-link" href="<?php echo base_url('Seller'); ?>">
							        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
							        Account
								</a>
						    </li>

			        	<?php }else{ ?>
			        		<li class="nav-item">
						        <a class="nav-link" href="<?php echo base_url('Seller/sellerDashboard'); ?>">
							        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
							        Welcome <?php echo $sellerName = $this->session->userdata('seller_name');?>
								</a>
						    </li>
			        <?php } ?>
			    </ul>
			</div>
		</nav>
	</section><!-- navbar section end-->
	<?php
		if($slider){ ?>

			<section class="slider-section">
				<div class="container-inner">
					<div class="row">	
						<div class="col-md-12">			
							<div class="slider-banner">
								<div class="col-md-12">
									<img src="<?php echo base_url('assets/frontend/'); ?>assets/img/home.png" class="img-fluid">
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

							<div class="slider-content">
								<form name="search_form" action="<?php echo base_url('Welcome/search_property'); ?>" method="POST" enctype="multipart/form-data" onsubmit="return(validate());">
									<div class="row">	
										<div class="col-12 col-md-8">
						                  <select name="property_location" class="form-control" required="">
						                    <?php getLocation(); ?>
						                  </select>    
						                </div>
						                <div class="col-12 col-md-4">
						                  <select name="property_type" class="form-control">
						                    <?php getTypes(); ?>
						                  </select>
						                </div>
					              	</div>

					              	<div class="row">
						                <div class="col-12 col-md-4">
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
						                </div>
						                <div class="col-12 col-md-4">
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
						                </div>
							            <div class="col-12 col-md-4">
							              	<button class="btn btn-info btn-block" name="submitQuery" type="submit">
							              		FIND
							              	</button>
							            </div>
						            </div>
			            		</form>
							</div>		
						</div>
					</div>
				</div>
			</section><!-- slider section end-->

	<?php } ?>
	

	<?= (isset($content))? $content : 'Nothing Found'; ?>

	<section class="footer-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="social-icon">
						<ul>
							<li>
								<a href="#">
									<img src="<?php echo base_url('assets/frontend/'); ?>assets/img/fb.png" alt="Facebook" title="Facebook">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="<?php echo base_url('assets/frontend/'); ?>assets/img/twitter.png" alt="Twitter" title="Twitter">	
								</a>
							</li>
							<li>
								<a href="#">
									<img src="<?php echo base_url('assets/frontend/'); ?>assets/img/instragram.png" alt="Instragram" title="Instragram">
								</a>
							</li>
							<li>
								<a href="#">
									<img src="<?php echo base_url('assets/frontend/'); ?>assets/img/linkedin.png" alt="Linkedin" title="Linkedin">
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="sortcut-icon">
						<ul>
							<li>
								<a href="#">
									About Us
								</a>
							</li>
							<li>
								<a href="#">
									Privacy Policy
								</a>
							</li>
							<li>
								<a href="#">
									Terms & Condition
								</a>
							</li>
							<li>
								<a href="#">
									Contact Us
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section><!-- footer section end -->

	<script type="text/javascript" src="<?php echo base_url('assets/frontend/'); ?>assets/js/bootstrap.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/frontend/'); ?>assets/js/myJs.js"></script>
</body>
</html>