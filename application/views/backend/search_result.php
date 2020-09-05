<div class="row">
	<div class="col-xs-12">
		<div class="table-header text-center">
			<i class="fa fa-list"></i>
			Membership Fees From - (<?= $FromDate; ?> - <?= $ToDate; ?>)
		</div>
		<div>
			<table id="sample-table-2" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>SN</th>
						<th>Member Name</th>
						<th>Payment Date</th>
						<th>Total Paid</th>
					</tr>
				</thead>

				<tbody>
					<?php 
						if(!empty($getMemberFees)){					
						$count = 0;
						$totalMembershipAmount = 0;
						foreach($getMemberFees as $val){
						$totalMembershipAmount = $totalMembershipAmount + $val->total_paid;
					?>
						<tr>
							<td class="center"><?php echo $count+1; ?></td>
							<td><?php echo $val->first_name.' '.$val->last_name; ?></td>
							<td><?php echo $val->payment_date; ?></td>
							<td><?php echo 'BDT '.$val->total_paid; ?></td>
						</tr>
					<?php 
						$count++;
						}//foreach
						echo '<tr>';
						echo '<td colspan="2">'.'</td>';
						echo '<td style="color:green;">'.'Total Membership Fees'.'</td>';
						echo '<td>'.'<label class="badge badge-success">'.'BDT '.$totalMembershipAmount.'</label>'.'</td>';
						echo '</tr>';
						}else{
							echo '<tr>'.'<td colspan="13">'.'No Data Found'.'</td>'.'</tr>';
						}
					?>
				</tbody>
			</table>
		</div>
		<!-- <div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<table id="sample-table-2" class="table table-striped table-bordered table-hover">
					<thead>
						<tr class="center">
							<th class="center">Total Membership Fees</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="center"><?php echo 'BDT '.$totalMembershipAmount; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
			<div class="col-md-4"></div>
		</div> -->
	</div>
</div>
<br>
<div class="table-header text-center">
	<i class="fa fa-list"></i>
	Learner Card Fees From - (<?= $FromDate; ?> - <?= $ToDate; ?>)
</div>
<div class="row">
	<div class="col-xs-12">
		<div>
			<table id="sample-table-2" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>SN</th>
						<th>Member Name</th>
						<th>Registration No</th>
						<th>Payment Date</th>
						<th>Total Paid</th>
					</tr>
				</thead>

				<tbody>
					<?php 
						if(!empty($getLearnerCardFees)){					
						$count = 0;
						$totalLearnerAmount = 0;
						foreach($getLearnerCardFees as $val){
						$totalLearnerAmount = $totalLearnerAmount + $val->total_paid;
					?>
						<tr>
							<td class="center"><?php echo $count+1; ?></td>
							<td><?php echo $val->member_name; ?></td>
							<td><?php echo $val->reg_no; ?></td>
							<td><?php echo $val->payment_date; ?></td>
							<td><?php echo 'BDT '.$val->total_paid; ?></td>
						</tr>
					<?php 
						$count++;
						}//foreach
						echo '<tr>';
						echo '<td colspan="3">'.'</td>';
						echo '<td style="color:green;">'.'Total Learner Card Fees'.'</td>';
						echo '<td>'.'<label class="badge badge-success">'.'BDT '.$totalLearnerAmount.'</label>'.'</td>';
						echo '</tr>';
						}else{
							echo '<tr>'.'<td colspan="13">'.'No Data Found'.'</td>'.'</tr>';
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<br>
<div class="table-header text-center">
	<i class="fa fa-list"></i>
	Training Fees From - (<?= $FromDate; ?> - <?= $ToDate; ?>)
</div>
<div class="row">
	<div class="col-xs-12">
		<div>
			<table id="sample-table-2" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>SN</th>
						<th>Member Name</th>
						<th>Registration No</th>
						<th>Payment Date</th>
						<th>Total Paid</th>
					</tr>
				</thead>

				<tbody>
					<?php 
						if(!empty($getTrainingFees)){					
						$count = 0;
						$totalTrainingAmount = 0;
						foreach($getTrainingFees as $val){
						$totalTrainingAmount = $totalTrainingAmount + $val->total_paid;
					?>
						<tr>
							<td class="center"><?php echo $count+1; ?></td>
							<td><?php echo $val->first_name.' '.$val->last_name; ?></td>
							<td><?php echo $val->reg_no; ?></td>
							<td><?php echo $val->payment_date; ?></td>
							<td><?php echo 'BDT '.$val->total_paid; ?></td>
						</tr>
					<?php 
						$count++;
						}//foreach
						echo '<tr>';
						echo '<td colspan="3">'.'</td>';
						echo '<td style="color:green;">'.'Total Training Fees'.'</td>';
						echo '<td>'.'<label class="badge badge-success">'.'BDT '.$totalTrainingAmount.'</label>'.'</td>';
						echo '</tr>';
						}else{
							echo '<tr>'.'<td colspan="13">'.'No Data Found'.'</td>'.'</tr>';
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12">
		<div class="table-header text-center">
			<i class="fa fa-list"></i>
			Total Collection From - (<?= $FromDate; ?> - <?= $ToDate; ?>)
		</div>
		<table id="sample-table-2" class="table table-striped table-bordered table-hover">
			<thead>
				<tr>
					<th>Membership Fees</th>
					<th>Learner Card Fees</th>
					<th>Training Fees</th>
					<th>Total Amount</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo 'BDT '.$totalMembershipAmount; ?></td>
					<td><?php echo 'BDT '.$totalLearnerAmount; ?></td>
					<td><?php echo 'BDT '.$totalTrainingAmount; ?></td>
					<td>
						<?php
							$Total = $totalMembershipAmount + $totalLearnerAmount + $totalTrainingAmount;
							echo 'BDT '.$Total;
						?>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>