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

<!-- PAGE CONTENT BEGINS -->
	<div class="row">
		<div class="col-xs-12">
			<div class="table-header">
				<i class="fa fa-list"></i>
				All Listed Property
				<span class="add-new-record">
					<i class="fa fa-plus"></i>
					<a class="white" href="<?php echo base_url('Property/add_property'); ?>">
						Add New Record
					</a>
				</span>
			</div>
			<div>
				<table id="sample-table-2" class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>SN</th>
							<th>Property Type</th>
							<th>Property Price</th>
							<th>Property Area</th>
							<th>Property Locaton</th>
							<th>Property Status</th>
							<th>Property Photo</th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
						<?php 
							if(!empty($result)){					
								$count = 0;
								foreach($result as $value){
						?>
								<tr>
									<td class="center"><?php echo $count+1; ?></td>
									<td><?php echo $value->type_name; ?></td>
									<td>BDT <?php echo $value->property_price; ?></td>
									<td><?php echo $value->property_area; ?> Sq.ft.</td>
									<td><?php echo $value->location_name; ?></td>
									<td><?php PropertyStatus($value->status); ?></td>
									<td>
										<?php if($value->photo == ""){?>
												<img height="50" width="60" src="<?= base_url('');?>assets/backend/img/unknown.png" title="<?php echo $value->photo;?>" />
										<?php }else { ?>
												<a href="<?= base_url($value->photo);?>" target="_blank">
													<img height="50" width="60" src="<?= base_url($value->photo);?>"/>
												</a>&nbsp;
												<a href="<?= base_url('Property/AllPropertyPhoto/'.$value->property_id);?>"><button class="btn btn-primary">See All</button></a>&nbsp;
												<a href="<?= base_url('Property/AddPropertyPhoto/'.$value->property_id);?>"><button class="btn btn-success">Add New</button></a>
										<?php } ?>
									</td>
									
									<td class="center">
										<a class="blue student_details" title="Details" data-panel-id="<?php echo  $value->property_id; ?>" onclick="selectid2(this)" href="#" >
											<i class="ace-icon fa fa-file bigger-120"></i>
										</a>|
										<a class="green" data-rel="tooltip" data-placement="bottom" title="Edit" href="<?php echo base_url('Property/edit_property/'.$value->property_id); ?>">
											<i class="ace-icon fa fa-pencil bigger-120"></i>
										</a>|
										<!-- <a class="red delete" data-rel="tooltip" data-placement="bottom" title="Delete" href="<?php echo base_url('Property/delete_property/'.$value->property_id); ?>">
											<i class="ace-icon fa fa-trash-o bigger-120"></i> -->
										<?php
											if($value->status == 0){ ?> 

												<a class="red" data-rel="tooltip" data-placement="bottom" title="Active" href="<?php echo base_url('Property/Active_Property/'.$value->property_id); ?>">
													<i class="ace-icon fa fa-lock bigger-120"></i>
												</a>

										<?php }elseif($value->status == 1){ ?> 

												<a class="green" data-rel="tooltip" data-placement="bottom" title="Inactive" href="<?php echo base_url('Property/Inactive_Property/'.$value->property_id); ?>">
													<i class="ace-icon fa fa-unlock bigger-120"></i>
												</a>

										<?php } ?>
									</td>
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

	<script>

        function selectid2(x){

        	$("#myModalLabel").html("PROPERTY DETAILS");

            btn = $(x).data('panel-id');

            $.ajax({
                type:'POST',
                url:'<?php echo base_url("Property/ViewPropertyDetails")?>',
                data:{id:btn},
                cache: false,
                success:function(data) {

                    $('.modal-body').html(data);

                }
            });
            $("#myModal").modal();
        }
	</script>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h3 class="modal-title" id="myModalLabel"></h3>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>