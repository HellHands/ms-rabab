<?php $msg = $this->Session->flash(); 
if($msg){ ?>
<div class="row">
	<div class="col-md-6">
		<div class="alert alert-warning alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <?= $msg; ?>
		</div>	
	</div>
</div>

<?php }?>

<br><br>
<center><h3>Welcome <strong><?= $this->Session->read('Auth.User.name'); ?></strong> to Data Entry Validator (DEV) Dashboard!</h3></center>
<!--<h3>< ?= $this->Html->link(__('Edit'), array('action' => 'add_asc201516', $'add_asc201516') ?></h3> -->
<!--<h3>< ?php echo $this->Html->link(__('New School'), array('action' => 'add')); ?> </h3>-->
<p>All schools belonging to Tehsil ID: <?= $tehsil1; ?> and <?= $tehsil2; ?> </p>


<div>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#finalized" aria-controls="finalized" role="tab" data-toggle="tab">Forms for review</a></li>    
    <li role="presentation"><a href="#finalizedByDev" aria-controls="finalizedByDev" role="tab" data-toggle="tab">Finalized Forms</a></li>    
  </ul>
<!--< ?= debug($forms_statuses); ?>
< ?php /*foreach($schools_finalized as $key => $value){
		debug($value);
	}*/ 

	foreach ($tehsil1_name as $key => $value) {
		debug($value);
	}

	foreach ($tehsil2_name as $key => $value) {
		debug($value);
	}

?>-->
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="finalized">
    	<br><br>
    	<table class="table table-bordered display" id="formsForReview" cellpadding="0" cellspacing="0">
			<thead>
		        <tr>
		            <th>School SEMIS Code</th>            
		            <th>Taluka</th>
		            <th>School Name</th>
		            <th>School Address</th>
		            <th>Actions</th>            
		        </tr>
		    </thead>
		    <tbody>    	
				<?php 
				$i = 0;
				foreach ($schools_finalized as $key => $value) {?>
					<tr>	
					<td style="vertical-align: middle;"><?php echo h($value['Asc201516']['school_semis_code']); ?>&nbsp;</td>				
					<td style="vertical-align: middle;">
					<?php 

						$talukaid =  h($value['Asc201516']['bi_school_taluka']); 
						foreach ($tehsil1_name as $key => $valuex) {
							if($talukaid == $valuex['codes_for_district_and_tehsils']['tehsil_id']){
								echo $valuex['codes_for_district_and_tehsils']['tehsil'];
							}
						}
						

					?>&nbsp;</td>		
					<td style="vertical-align: middle;"><?php echo h($value['Asc201516']['bi_school_name']); ?>&nbsp;</td>
					<td style="vertical-align: middle;"><?php echo h($value['Asc201516']['bi_school_address']); ?>&nbsp;</td>
					<td class="actions">
						
						<?php echo $this->Html->link(__('Review'), array('action' => 'edit_asc201516', $value['Asc201516']['school_semis_code']), array('class' => 'btn btn-primary', 'style' => 'margin-top: 0;'));?> 									
						<?php echo $this->Html->link(__('Finalize'), array('action' => 'finalize_dev', $value['Asc201516']['school_semis_code'], 2), array('class' => 'btn btn-primary', 'style' => 'margin-top: 0;'));?> 									
						<?php echo $this->Html->link(__('Un-Finalize'), array('action' => 'unfinalize_dev', $value['Asc201516']['school_semis_code'], 1), array('class' => 'btn btn-primary', 'style' => 'margin-top: 0;'));?> 									
					</td>
					</tr>
					<?php
					//debug($value);
				}	?>			
				
		    </tbody>
		</table>

    </div>

    <div role="tabpanel" class="tab-pane" id="finalizedByDev">
    	<br><br>
    	<table class="table table-bordered display" id="finalizedByDev1" cellpadding="0" cellspacing="0">
			<thead>
		        <tr>
		            <th>School SEMIS Code</th>            
		            <th>Taluka</th>
		            <th>School Name</th>
		            <th>School Address</th>
		            <th>Actions</th>            
		        </tr>
		    </thead>
		    <tbody>    	
				<?php 
				$i = 0;
				foreach ($schools_finalized_by_dev as $key => $value) {?>
					<tr>	
					<td style="vertical-align: middle;"><?php echo h($value['Asc201516']['school_semis_code']); ?>&nbsp;</td>				
					<td style="vertical-align: middle;">
					<?php 

						$talukaid =  h($value['Asc201516']['bi_school_taluka']); 
						foreach ($tehsil1_name as $key => $valuex) {
							if($talukaid == $valuex['codes_for_district_and_tehsils']['tehsil_id']){
								echo $valuex['codes_for_district_and_tehsils']['tehsil'];
							}
						}
						

					?>&nbsp;</td>		
					<td style="vertical-align: middle;"><?php echo h($value['Asc201516']['bi_school_name']); ?>&nbsp;</td>
					<td style="vertical-align: middle;"><?php echo h($value['Asc201516']['bi_school_address']); ?>&nbsp;</td>
					<td class="actions">						
						
					</td>
					</tr>
					<?php
					//debug($value);
				}	?>			
				
		    </tbody>
		</table>

    </div>

    
  </div>

</div>