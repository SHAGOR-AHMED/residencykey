<!-- PAGE CONTENT BEGINS -->
	<div class="row">
		<div class="col-xs-12">
			<div class="table-header">
				<i class="fa fa-list"></i>
				Seller List
			</div>
			<div>
				<table id="sample-table-2" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>SN</th>
							<th>Seller Name</th>
							<th>Mobile No</th>
							<th>Seller Email</th>
							<th>Property Type</th>
							<th>Property Location</th>
						</tr>
					</thead>

					<tbody>
						<?php 
							if(!empty($all_seller)){					
								$count = 0;
								foreach($all_seller as $val){
						?>
								<tr>
									<td class="center"><?php echo $count+1; ?></td>
									<td><?php echo $val->seller_name; ?></td>
									<td><?php echo $val->seller_phone; ?></td>
									<td><?php echo $val->seller_email; ?></td>
									<td><?php echo $val->type_name; ?></td>
									<td><?php echo $val->location_name; ?></td>
								</tr>
						<?php 
									$count++;
								}//foreach
							}else{
								echo '<tr>';
									echo '<td colspan="8">'.'No Data Found'.'</td>';
								echo '</tr>';
							}
						?>

					</tbody>
				</table>
			</div>
		</div><!-- /.col -->
	</div><!-- /.row -->