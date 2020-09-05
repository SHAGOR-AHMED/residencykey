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
			Property Image's
		</div>
		<div>
			<table id="sample-table-2" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>SN</th>
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
								<td>
									<?php if($value->file == ""){?>
											<img height="50" width="60" src="<?= base_url('');?>assets/backend/img/unknown.png" />
									<?php }else { ?>
											<a href="<?= base_url($value->file);?>" target="_blank">
												<img height="50" width="60" src="<?= base_url($value->file);?>"/>
											</a>
									<?php } ?>
								</td>
								
								<td class="center">
									<a class="green" data-rel="tooltip" data-placement="bottom" title="Edit" href="<?php echo base_url('Property/editPropertyPhoto/'.$value->img_id); ?>">
										<i class="ace-icon fa fa-pencil bigger-120"></i>
									</a>|
									<a class="red delete" data-rel="tooltip" data-placement="bottom" title="Delete" href="<?php echo base_url('Property/deletePropertyPhoto/'.$value->img_id); ?>">
										<i class="ace-icon fa fa-trash-o bigger-120"></i>
									</a>
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