
<?php
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
?>
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
			All Blogs
			<span class="add-new-record">
				<i class="fa fa-plus"></i>
				<a class="white" href="<?php echo base_url('Blog/add_blog'); ?>">
					Add New Record
				</a>
			</span>
		</div>
		<div>
			<table id="sample-table-2" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>SN</th>
						<th>Blog Title</th>
						<th>Blog Details</th>
						<th>Blog Photo</th>
						<th>Blog Video</th>
						<th>Created Date</th>
						<th>Action</th>
					</tr>
				</thead>

				<tbody>
					<?php 
						if(!empty($all_blog)){					
							$count = 0;
							foreach($all_blog as $value){
					?>
							<tr>
								<td class="center"><?php echo $count+1; ?></td>
								<td><?php echo $value->blog_title; ?></td>
								<td>
									<?php echo limit_words(strip_tags($value->blog_details),20,"UTF-8"); ?>
								</td>
								<td>
									<?php if($value->photo == ""){?>
											<img height="50" width="60" src="<?= base_url('');?>assets/backend/img/unknown.png" title="<?php echo $value->photo;?>" />
									<?php }else { ?>
											<a href="<?php echo $value->photo ;?>" target="_blank">
												<img height="50" width="60" src="<?= base_url($value->photo);?>"
											 title="<?php echo $value->photo;?>" />
											 </a>
									<?php } ?>
								</td>
								<td><?php echo $value->video_link; ?></td>
								<td>
									<?php 
										$timezone = "Asia/Dhaka";
										date_default_timezone_set($timezone);
										$dt = new DateTime($value->created_date);
										echo $dt->format('M j Y');
								 	?>
								</td>
								
								<td class="center">
									<a class="green" data-rel="tooltip" data-placement="bottom" title="Edit" href="<?php echo base_url('Blog/edit_blog/'.$value->blog_id); ?>">
										<i class="ace-icon fa fa-pencil bigger-120"></i>
									</a>|
									<a class="red delete" data-rel="tooltip" data-placement="bottom" title="Delete" href="<?php echo base_url('Blog/delete_blog/'.$value->blog_id); ?>">
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