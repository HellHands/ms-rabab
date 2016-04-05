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
<center><h3>Welcome <strong><?= $this->Session->read('Auth.User.name'); ?></strong> to Data Entry for Secondary &amp; Higher Secondary Schools Dashboard!</h3></center>

<?php $total_forms = count($semis_universal201415s); ?>
<p class="lead"><?= $schools_filled_count; ?> form(s) filled out of total <?= $total_forms; ?> forms. </p>
<?php $percentage = ($schools_filled_count/$total_forms)*100;
$percentage = round($percentage); ?>
<div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="<?= $percentage; ?>" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: <?= $percentage.'%';?>">
    <?= $percentage . '%'; ?>
  </div>
</div>
<!--< ?=// debug(json_encode($semis_universal201415s, JSON_PRETTY_PRINT)); ?> -->



<div>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#unfilled" aria-controls="unfilled" role="tab" data-toggle="tab">Unfilled Forms</a></li>
    <li role="presentation"><a href="#filled" aria-controls="filled" role="tab" data-toggle="tab">Filled Forms</a></li>    
    <li role="presentation"><a href="#finalized" aria-controls="finalized" role="tab" data-toggle="tab">Finalized Forms</a></li>    
  </ul>
<!--< ?= debug($forms_statuses); ?>-->

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="unfilled">
    	<br><br>
    	<table class="table table-bordered display" id="example" cellpadding="0" cellspacing="0">
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
				foreach ($schools_not_filled as $key => $value) {?>
					<tr>	
					<td style="vertical-align: middle;"><?php echo h($value['s1']['school_semis_new']); ?>&nbsp;</td>				
					<td style="vertical-align: middle;"><?php echo h($tehsil_name['codes_for_district_and_tehsils']['tehsil']); ?>&nbsp;</td>		
					<td style="vertical-align: middle;"><?php echo h($value['s1']['bi_school_name']); ?>&nbsp;</td>
					<td style="vertical-align: middle;"><?php echo h($value['s1']['bi_school_address']); ?>&nbsp;</td>
					<td class="actions">
						
						<?php echo $this->Html->link(__('New Entry'), array('action' => 'add', $value['s1']['school_semis_new']), array('class' => 'btn btn-primary', 'style' => 'margin-top: 0;'));?> 									
					</td>
					</tr>
					<?php

				}	?>			
		    </tbody>
		</table>

    </div>

    <div role="tabpanel" class="tab-pane" id="filled">
    	<br><br>
    	<table class="table table-bordered display" id="example2" cellpadding="0" cellspacing="0">
			<thead>
		        <tr>
		            <th id="semisth">School SEMIS Code</th>            
		            <th>Taluka</th>
		            <th>School Name</th>
		            <th>School Address</th>
		            <th>Actions</th>            
		        </tr>
		    </thead>
		    <tbody>    	
				<?php 				
				foreach ($schools_filled_n_notfinalized_hs as $key => $value) { ?>
					<tr>	
						<td style="vertical-align: middle;"><?php echo h($value['Asc201516']['school_semis_code']); ?>&nbsp;</td>				
						<td style="vertical-align: middle;"><?php echo h($tehsil_name['codes_for_district_and_tehsils']['tehsil']); ?>&nbsp;</td>		
						<td style="vertical-align: middle;"><?php echo h($value['Asc201516']['bi_school_name']); ?>&nbsp;</td>
						<td style="vertical-align: middle;"><?php echo h($value['Asc201516']['bi_school_address']); ?>&nbsp;</td>
						<td class="actions">
																	
							<a style="margin-top: 0;" class="btn btn-primary" href="edit_asc201516/<?= $value['Asc201516']['school_semis_code'];?>">
								<span class="glyphicon glyphicon-edit"> </span> &nbsp;&nbsp;Edit
							</a>
					
							<?= $this->Html->link(__('Finalize'), array('action' => 'finalize_hs', $value['Asc201516']['school_semis_code'], 1), array('class' => 'btn btn-primary', 'style' => 'margin-top: 0;'));?>

						</td>
					</tr><?php
				}
				?>
				

				
		    </tbody>
		</table>

    </div>   

    <div role="tabpanel" class="tab-pane" id="finalized">
    	<br><br>
    	<table class="table table-bordered display" id="example3" cellpadding="0" cellspacing="0">
			<thead>
		        <tr>
		            <th id="semisth">School SEMIS Code</th>            
		            <th>Taluka</th>
		            <th>School Name</th>
		            <th>School Address</th>
		            <th>Status</th> 
		            <th>Action</th>           
		        </tr>
		    </thead>
		    <tbody>    	
				<?php 
				foreach ($schools_filled_n_finalized as $key => $value) { ?>
					<tr>	
						<td style="vertical-align: middle;"><?php echo h($value['Asc201516']['school_semis_code']); ?>&nbsp;</td>				
						<td style="vertical-align: middle;"><?php echo h($tehsil_name['codes_for_district_and_tehsils']['tehsil']); ?>&nbsp;</td>		
						<td style="vertical-align: middle;"><?php echo h($value['Asc201516']['bi_school_name']); ?>&nbsp;</td>
						<td style="vertical-align: middle;"><?php echo h($value['Asc201516']['bi_school_address']); ?>&nbsp;</td>
						<td style="vertical-align: middle;">
							<?php

								if($value['Asc201516']['final'] == 1){
									echo "Under Review by Data Entry Validator";
								}else if ($value['Asc201516']['final'] == 2){
									echo "Under Review by Data Entry Supervisor";
								}else if ($value['Asc201516']['final'] == 3){
									echo "Approved by Data Entry Supervisor";
								}
							?>
											

						</td>
						<td style="verticle-align: middle;">
						<?= $this->Html->link(__('Print'), array('action' => 'print_hs_form', $value['Asc201516']['school_semis_code']), array('class' => 'btn btn-primary', 'style' => 'margin-top: 0;')); ?>
						</td>
					</tr><?php
				}
				?>
				

				
		    </tbody>
		</table>

    </div>   
  </div>

</div>