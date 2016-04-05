<!-- < ?= debug($school); ?> -->
<?php $school = $school['semis_universal201415s']; ?>
<?php $district_name = $district['codes_for_district']['district'];?>
<?php $taluka = $taluka['codes_for_district_and_tehsils']; ?>
<?php $uc = $uc['codes_for_ucs']; ?>
<?php $tappa = $tappa['codes_for_tappas']; ?>
<?php $deh = $deh['codes_for_dehs']; ?>
<?php $designation = $designation['codes_for_dp_designations']; ?>
<!--< ?//= debug($district); ?>-->
<div class="row">
	<div class="col-md-12" style="text-align: center;">
		<img src="<?= $this->webroot.'img/sindhgovt_logo.png'; ?>" class="img-rounded"></img>
	</div>
	<div class="col-md-12">
		<center>
			<h1>25th Annual School Census 2015-16 <br>
				<small>Sindh Education Management Information System</small><br>
				<small>Reform Support Unit</small><br>
				<small>Education and Literacy Department, Government of Sindh</small>
			</h1>
		</center>	
	</div>
	
</div>
<hr>
<?= $this->Form->create('Asc201516', array(
	'url' => array(
		'controller' => 'asc201516s', 
		'action'     => 'edit_asc201516', $school['school_semis_new'], $schoolid
		), 
	'enctype'=>'multipart/form-data',
	'class' => 'form-inline'
	)
); ?>
<button type="button" id="btnpage1" tabindex="0" class="btn btn-primary">Page 1</button>
<button type="button" id="btnpage2" tabindex="0" class="btn btn-primary">Page 2</button>
<button type="button" id="btnpage3" tabindex="0" class="btn btn-primary">Page 3</button>
<hr>


<?= $this->Form->input('userid', array('type' => 'hidden', 'value' => $uid)); ?>
<?= $this->Form->input('username', array('type' => 'hidden', 'value' => $username)); ?>
<?= $this->Form->input('schoolid', array('type' => 'hidden', 'value' => $schoolid)); ?>
<div id="page1">
	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title"></h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-2">
						<?= $this->Form->input('school_semis_code', array(
							'label'       => 'SEMIS Code', 
							'placeholder' => 'School SEMIS Code', 
							'type'        => 'text',
							'maxlength'   => '9',
							'size'        => '9',
							'onkeypress' => 'return isNumberKey(event)',
							'min'         => '0',
							'max'         => '499999999',
							'class'       => 'form-control',
							'value' => $school['school_semis_new'],
							'readonly',
							'required'
							)); 
						?>
				  	</div>
				</div>
				<div class="row">
					<div class="form-group col-md-2">
				  		<?= $this->Form->input('coord_lat', array(
							'label'       => 'Latitude (N)', 							
							'onkeypress'  => 'return check_latitude(event)',
							'maxlength'   => '10',
							'value' => $school['coord_lat'],							
							'class'       => 'form-control'
				  			)); ?>
				  	</div>
					<div class="form-group col-md-2">
						<?= $this->Form->input('coord_long', array(
							'label'       => 'Longitude (E)', 
							'onkeypress'  => 'return check_longitude(event)',						
							'maxlength'   => '10',							
							'value' => $school['coord_long'],							
							'class'       => 'form-control'
							)); 
						?>
				  	</div>	
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">1. School's Basic Information</h5>
			</div>	
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-2">
						<?= $this->Form->input('districts', array(
							'label' => 'District',
							'options' => array($school['bi_school_district'] => $district_name),
							//'empty' => array('0' => 'Choose One'),
							'class' => 'form-control',
							'id'    => 'district_select',
							//'value' => $district_name,
							'readonly',
							'name'	=> 'data[Asc201516][bi_school_district]',
							'required'
							)); 
						?>
					</div>
				</div>				
				<div class="row">
				  	<div class="form-group col-md-2">
				  		<?= $this->Form->input('bi_school_taluka', array(
							'label'   => 'Taluka/Town', 
							//'options' => array(),
							//'empty'   => array('0' => 'Choose One'), 							
							'options' => array($taluka['tehsil_id'] => $taluka['tehsil']),							
							'class'   => 'form-control',
							'id'      => 'tehsil_select',
							'readonly'
				  			)); 
						?>
				  	</div>

				  	<!--< ?= debug($uc); ?> -->
				  	<div class="form-group col-md-2">
				  		<?= $this->Form->input('bi_school_uc', array(
							'label'   => 'Union Council', 
							'options' => array($uc['uc_id'] => $uc['uc_name']),							
							'class'   => 'form-control',
							//'id'      => 'uc_select',
							'readonly'
				  			)); 
						?>
				  	</div>
				  	<!-- < ?= debug($tappa); ?> -->
				  	<?php if(null == $tappa['tappaid']){ $tappa['tappaid'] = 0; $tappa['tappa'] = '';} ?>
				  	<div class="form-group col-md-2">
				  		<?= $this->Form->input('bi_school_tappa', array(
							'label'   => 'Tappa',

							'options'   => array($tappa['tappaid'] => $tappa['tappa']), 
							'class'   => 'form-control',
							'id'      => 'tappa_select',
							'readonly'
				  			)); 
						?>
				  	</div>
				</div>

				<div class="row">
				<?php if(null == $deh['dehid']){ $deh['dehid'] = 0; $deh['deh'] = '';} ?>
					<div class="form-group col-md-2">
					  	<?= $this->Form->input('bi_school_deh', array(
							'label'   => 'Deh', 
							'options'   => array($deh['dehid'] => $deh['deh']), 
							'class'   => 'form-control', 
							'id'      => 'deh_select',
							'readonly'			
							)); 
					  	?>
				  	</div>	
				  	<div class="form-group col-md-2">
					  	<?= $this->Form->input('bi_school_na', array(
							'type' => 'text',
							'onkeypress' => 'return isNumberKey(event)',
							'label'       => 'NA', 
							'placeholder' => 'NA', 
							'value' => $school2['Asc201516']['bi_school_na'],
							'class'       => 'form-control'
							)); 
					  	?>
				  	</div>
				  	<div class="form-group col-md-2">
					  	<?= $this->Form->input('bi_school_ps', array(
							'type'        => 'text',
							'onkeypress'  => 'return isNumberKey(event)',
							'label'       => 'PS', 
							'placeholder' => 'PS', 
							'value' => $school2['Asc201516']['bi_school_ps'],
							'class'       => 'form-control'
							)); 
					  	?>
				  	</div>
				  	<div class="form-group col-md-2">
					  	<?= $this->Form->input('bi_school_village', array(
							'label'       => 'Area/Village', 
							'placeholder' => 'Area/Village', 
							'value' => $school['bi_school_village_mohallah'],
							'class'       => 'form-control',
							'readonly'
							)); 
					  	?>
				  	</div>
				</div> 

				<div class="row">
				  	<!-- <div class="form-group col-md-4">
				  		< ?= $this->Form->input('prefixes', array(
							'label' => 'School Prefix', 
							'empty' => array('0' => 'Choose One'),
							'class' => 'form-control',
							'name'  => 'data[Asc201516][bi_school_prefix]',
							'required'
							)); 
				  		?>
				  	</div> -->

				  	<div class="form-group col-md-5">
					  	<?= $this->Form->input('bi_school_name', array(
							'label'       => 'School Name', 
							'placeholder' => 'School Name', 
							'value' => $school['bi_school_name'],
							'class'       => 'form-control', 
							'readonly'
							)); 
					  	?>
				  	</div>	
				</div> 
				<div class="row">
				  	<div class="form-group col-md-5">
				  		<?= $this->Form->input('bi_school_address', array(
							'label' => 'School Address', 
							'value' => $school['bi_school_address'],
							'class' => 'form-control',
							'readonly'
							)); 
				  		?>
				  	</div>

				  	<div class="form-group col-md-2">
					  	<?= $this->Form->input('bi_school_phone', array(
							'label'       => 'School Phone', 
							'value' => $school['bi_school_phone_number'],
							'class'       => 'form-control',
							'readonly'
							)); 
					  	?>
				  	</div>	
				</div>
			</div>
		</div>
	</div>
	<!-- Basic Information Ends! -->

	<!-- Information about Data Provider Starts ==============================================-->

	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">2. Information about Data Provider *</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-2">
						<?= $this->Form->input('dp_name', array(
							'label'       => 'a. Name *', 
							'placeholder' => 'Data Provider Name', 
							'value' => $school2['Asc201516']['dp_name'],
							'onkeypress'  => 'return isAlphabetKey(event)',
							'class'       => 'form-control'
							)); 
						?>
					</div>

					<div class="form-group col-md-2">
						<?= $this->Form->input('dp_cnic', array(
							'label'       => 'b. CNIC *',
							'onkeypress'  => 'return isNumberKey(event)', 
							'value' => $school2['Asc201516']['dp_cnic'],
							'placeholder' => 'CNIC', 
							'class'       => 'form-control'
							)); 
						?>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-2">
						<?= $this->Form->input('dpdesignations', array(
							'label' => 'c. Designation *', 
							'empty' => array('0' => 'Choose One'),
							'selected' => $school2['Asc201516']['dp_designation'],
							'class' => 'form-control',
							'name'  => 'data[Asc201516][dp_designation]'
							)); 
						?>
					</div>

					<div class="form-group col-md-2">
						<?= $this->Form->input('dp_gender', array(
							'label'   => 'd. Gender', 
							'options' => array('0' => '0 = Choose', '1' => '1 = Male', '2' => '2 = Female'),
							'selected' => $school2['Asc201516']['dp_gender'],
							'class'   => 'form-control'
							)); 
						?>
					</div>	
				</div>

				
				<div class="row">
					<div class="form-group col-md-2">
						<?= $this->Form->input('dp_contact', array(
							'label'       => 'e. Contact No. (Tele/Mob)', 
							'placeholder' => 'Data Provider Contact', 
							'maxlength'   => '11',
							'size'        => '11',
							'onkeypress'  => 'return isNumberKey(event)',
							'value'       => $school2['Asc201516']['dp_contact'],
							'class'       => 'form-control'
							)); 
						?>
					</div>
					<div class="form-group col-md-2">
						<?= $this->Form->input('dp_email', array(
							'label'       => 'f. Email Address', 
							'placeholder' => 'Email', 
							'type'        => 'email',
							'value'       => $school2['Asc201516']['dp_email'],
							'class'       => 'form-control'
							)); 
						?>
					</div>		
				</div>
			</div>
		</div>		
	</div>
	<!-- Information about Data Provider Ends Here! ============================================-->

	<!-- School Status starts here ! ===========================================================-->
	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">3. School Status *</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-2">
				  		<?= $this->Form->input('conditions', array(
							'label'    => 'a. Type of School *',   		
							'empty'    => array('0' => 'Choose'), 
							'class'    => 'form-control',
							'id'       => 'condition_select',
							'selected' => $school2['Asc201516']['ss_status_type'],
							'name'     => 'data[Asc201516][ss_status_type]'
							)); 
				  		?>
				  	</div>
				  	<?php
				  		$status_type = $school2['Asc201516']['ss_status_type'];
				  		if($status_type == 1){ $options = array('1' => 'Functional', '2' => 'Closed Temporary');}
				  		else if($status_type == 2){ $options = array('2' => 'Closed Temporary', '3' => 'Closed Permanent');}else{
				  			$options = array();
				  		}
				  	?>
				  	<div class="form-group col-md-2">
				  		<?= $this->Form->input('ss_status', array(
							'label'    => 'b. Detail status *', 
							'options'  => $options,							
							'selected' => $school2['Asc201516']['ss_status'],
							'class'    => 'form-control',
							'id'       => 'status_select'
							)); 
				  		?>
				  	</div>
				  	<?php
				  		$status = $school2['Asc201516']['ss_status'];
				  		if($status == 2 || $status == 3){ $state = "";	}else{ $state = "disabled"; }
				  	?>
				  	<div class="form-group col-md-2" id="closure_date_div">
				  		<?= $this->Form->input('ss_closure_date', array(
							'label'        => 'c. Closure Day, Month & Year', 
							'type'         => 'text',							
							'class'        => 'form-control',																					
							'id'           => 'closure_dmy',
							'value'        => $school2['Asc201516']['ss_closure_date'],							
							$state
							)); 
				  		?>
				  	</div>
				</div>
				<?php
					if($status == 2 || $status == 3){ $state = ""; }else{ $state = "disabled"; }
				?>
				<div class="row">
				  	<div class="form-group col-md-3" id="closure_reason_div">
				  		<?= $this->Form->input('reasons', array(
							'label'    => 'd. Closure Major Reason', 
							'empty'    => array('0' => 'Choose One'),
							'class'    => 'form-control',
							'id'       => 'closure_reason',
							'selected' => $school2['Asc201516']['ss_closure_reason'],
							'name'     => 'data[Asc201516][ss_closure_reason]',
							$state
							)); 
				  		?>
				  	</div>
				  	<?php
				  		$closure_reason = $school2['Asc201516']['ss_closure_reason'];
				  		if($closure_reason == 8){ $style = "style='display:block;'"; $state = ""; } else{ $style = "style='display:none;'"; $state ="disabled";}
				  	?>
				  	<div class="form-group col-md-4" id="closure_major_reason_specify_div" <?= $style; ?>>
				  		<?= $this->Form->input('ss_closure_major_reason_specify', array(
							'label' => 'Closure Major Reason Specify', 
							'type'  => 'text',
							'value' => $school2['Asc201516']['ss_closure_major_reason_specify'],
							'class' => 'form-control',
							$state
							)); 
				  		?>
				  	</div>
				</div>			
			</div>		
		</div><!-- panel ends here -->	
	</div>



	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">4. Location</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-2">
				  		<?= $this->Form->input('dsi_location', array(
							'label'   => false,
							'options' => array(
								'0' => '0 = Choose', 
								'1' => '1 = Urban', 
								'2' => '2 = Rural'
								),
							'selected' => $school2['Asc201516']['dsi_location'],
							'class' => 'form-control'
							)); 
				  		?>
				  	</div>		
			  	</div>
			</div>
		</div>	

		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">5. Level *</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-2">
				  		<?= $this->Form->input('dsi_level', array(
							'label' => false,
							'options' => array(
								'0' => '0 = Choose', 
								'1' => '1 = Primary', 
								'2' => '2 = Middle', 
								'3' => '3 = Elementary', 
								'4' => '4 = Secondary', 
								'5' => '5 = Higher Secondary',
								'9' => '9 = Primary with permission to run middle classes'), 
							'selected' => $school2['Asc201516']['dsi_level'],
							'class' => 'form-control'
							//'style' => 'width: auto; display: inline;'
							)); 
				  		?>
				  	</div>		
			  	</div>
			</div>
		</div>	

		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">6. Is this school has approved Schedule New Expenditure (SNE)?</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-2">
				  		<?= $this->Form->input('dsi_sne_approved', array(
							'label'    => false, 
							'options'  => array('0' => '0 = Choose', '1' => '1 = Yes', '2' => '2 = No'), 							
							'selected' => $school2['Asc201516']['dsi_sne_approved'],
							'class'    => 'form-control'							
							)); 
				  		?>
				  	</div>		 
			  	</div>
			  	<?php
			  		$sne_approved = $school2['Asc201516']['dsi_sne_approved'];
			  		if($sne_approved == 1){ 
			  			$style = "style='display:block;'"; 
			  			$state = "";	
			  		}else if($sne_approved == 2){
			  			$style = "style='display: block;'"; 
			  			$state = "readonly";
			  		}else{ 
			  			$style = "style='display: none;'";
			  			$state = "";
			  		}
			  	?>
			  	<div class="row" id="sne_posts_div" <?= $style; ?>> 
					<div class="form-group col-md-2">
				  		<?= $this->Form->input('dsi_sne_teaching_sanctioned', array(
							'label'      => 'Sanctioned (Teaching)',
							'type'       => 'text',
							'onkeypress' => 'return isNumberKey(event)',
							'value'      => $school2['Asc201516']['dsi_sne_teaching_sanctioned'],
							'class'      => 'form-control',
							$state
							//'style' => 'width: auto; display: inline;'
							)); 
				  		?>
				  	</div>					  	
					<div class="form-group col-md-2">
				  		<?= $this->Form->input('dsi_sne_teaching_working', array(
							'label'      => 'Working Post (Teaching)', 
							'type'       => 'text',
							'onkeypress' => 'return isNumberKey(event)',
							'value'      => $school2['Asc201516']['dsi_sne_teaching_working'],
							'class'      => 'form-control'
							//'style' => 'width: auto; display: inline;'
							)); 
				  		?>
				  	</div>					  	
				  	<div class="form-group col-md-2">
				  		<?= $this->Form->input('dsi_sne_teaching_vacant', array(
							'label'      => 'Vacant Post (Teaching)', 
							'type'       => 'text',
							'onkeypress' => 'return isNumberKey(event)',
							'value'      => $school2['Asc201516']['dsi_sne_teaching_vacant'],
							'readonly',
							'class'      => 'form-control'
							//'style' => 'width: auto; display: inline;'
							)); 
				  		?>
				  	</div>					  	
				  	<div class="form-group col-md-2">
				  		<?= $this->Form->input('dsi_sne_nonteaching_sanctioned', array(
							'label'      => 'Sanctioned (Non-Teaching)',
							'type'       => 'text',
							'onkeypress' => 'return isNumberKey(event)',	
							'value'      => $school2['Asc201516']['dsi_sne_nonteaching_sanctioned'],						
							'class'      => 'form-control',
							$state							
							)); 
				  		?>
				  	</div>					  	
					<div class="form-group col-md-2">
				  		<?= $this->Form->input('dsi_sne_nonteaching_working', array(
							'label'      => 'Working Post (Non-Teaching)', 
							'type'       => 'text',
							'onkeypress' => 'return isNumberKey(event)',		
							'value'      => $school2['Asc201516']['dsi_sne_nonteaching_working'],					
							'class'      => 'form-control'							
							)); 
				  		?>
				  	</div>					  	
				  	<div class="form-group col-md-2">
				  		<?= $this->Form->input('dsi_sne_nonteaching_vacant', array(
							'label'      => 'Vacant Post (Non-Teaching)', 
							'type'       => 'text',
							'onkeypress' => 'return isNumberKey(event)',		
							'value'      => $school2['Asc201516']['dsi_sne_nonteaching_vacant'],							
							'readonly',
							'class'      => 'form-control'							
							)); 
				  		?>
				  	</div>					  	
			  	</div>
			</div>
		</div>	
		
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">7. Administration *</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-2">
				  		<?= $this->Form->input('dsi_sch_administration', array(
							'label'   => false, 
							'options' => array(
								'0' => '0 = Choose', 
								'1' => '1 = TEO Male',
								'2' => '2 = TEO Female',
								'3' => '3 = DO Local Bodies',
								'4' => '4 = BOC',
								'5' => '5 = Other'							
								), 
							'selected' => $school2['Asc201516']['dsi_sch_administration'],
							'class'   => 'form-control'
							)); 
				  		?>
				  	</div>
				  	<?php
				  		$schAdmin = $school2['Asc201516']['dsi_sch_administration'];
				  		if($schAdmin == 5){
				  			$state = "";
				  			$style = "style = 'display: block;'";
				  		}else{
				  			$state = "readonly";
				  			$style = "style = 'display: none;'";
				  		}

				  	?>
				  	<div class="form-group col-md-2" <?= $style; ?> id="sch_admin_specify_div">
				  		<?= $this->Form->input('dsi_sch_administration_specify', array(
							'label'          => false, 
							'type'           => 'text', 
							'value'          => $school2['Asc201516']['dsi_sch_administration_specify'],
							'placeholder'    => 'Specify',
							'class'          => 'form-control',
							'data-toggle'    => 'tooltip',
							'title'          => 'Please specify the Administration',
							'data-placement' => 'right',
							$state
							)); 
				  		?>
				  	</div>		
			  	</div>
			</div>
		</div>	
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">8. School Gender (Sex)</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-2">
				  		<?= $this->Form->input('dsi_sch_gender', array(
							'label'    => false, 
							'options'  => array('0' => '0 = Choose', '1' => '1 = Boys School', '2' => '2 = Girls School', '3' => '3 = Mixed School'),
							'selected' => $school2['Asc201516']['dsi_sch_gender'], 
							'class'    => 'form-control'
							)); 
				  		?>
				  	</div>		
			  	</div>
			</div>
		</div>	
		
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">9. Medium [Multi Tick Allowed] and medium wise enrollment as on reference date: 31st Oct, 2015</h5>
			</div>
			<?php
				$mediumArray = explode(', ', $school2['Asc201516']['dsi_sch_medium']);
				if(($mediumArray[0]) == ""){
					unset($mediumArray[0]);
				}				
			?>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-4">
				  		<?= $this->Form->input('dsi_sch_medium', array(
							'label'    => false,
							'type'     => 'select',
							'multiple' => 'checkbox',
							'options'  => array('Urdu', 'Sindhi', 'English'), 	
							'selected' => $mediumArray,//explode(', ', @$school2['Asc201516']['dsi_sch_medium']),						
							'class'    => 'form-control2'
							
							)); 
				  		?>
				  	</div>		
			  	</div>
			  	<?php 
			  		$m = explode(', ', $school2['Asc201516']['dsi_sch_medium']);		
			  		
			  		$mArr = array();
			  		foreach ($m as $key => $value) {
			  			$mArr[$value] = $value;
			  		}			  		
			  		$m0 = @$mArr[0];
			  		$m1 = @$mArr[1];
			  		$m2 = @$mArr[2];
			  		
			  		if(null != $m0 && $m0 == 0){ $state0 = ""; }else{ $state0 = "disabled"; }			  		
			  		if(null != $m1){ $state1 = ""; }else{ $state1 = "disabled"; }
			  		if(null != $m2){ $state2 = ""; }else{ $state2 = "disabled"; }
			  		//$mediums = count(explode(',', $school2['Asc201516']['dsi_sch_medium']));
			  		//if($mediums == 3	  		
			  	?>
			  	<div class="row">
					<div class="form-group col-md-2">
				  		<?= $this->Form->input('dsi_enrollment_urdu', array(
							'label'      => '<label class="small">Urdu Enrollment</label>',				  			
							'onkeypress' => 'return isNumberKey(event)',
							'type'       => 'text',
							'class'      => 'form-control',
							'value' => $school2['Asc201516']['dsi_enrollment_urdu'],
							$state0
				  			)); 
				  		?>
				  	</div>
				  	
				  	<div class="form-group col-md-2">
				  		<?= $this->Form->input('dsi_enrollment_sindhi', array(
							'label'      => '<label class="small">Sindhi Enrollment</label>',
							'onkeypress' => 'return isNumberKey(event)',
							'type'       => 'text',
							'class'      => 'form-control small',
							'value' =>$school2['Asc201516']['dsi_enrollment_sindhi'],
							$state1
				  			)); 
				  		?>
				  	</div>
				  	
				  	<div class="form-group col-md-2">
				  		<?= $this->Form->input('dsi_enrollment_english', array(
							'label'      => '<label class="small">English Enrollment</label>',
							'onkeypress' => 'return isNumberKey(event)',
							'type'       => 'text',
							'class'      => 'form-control',
							'value' => $school2['Asc201516']['dsi_enrollment_english'],
							$state2
				  			)); 
				  		?>
				  	</div>

				  	<div class="form-group col-md-2">
				  		<?= $this->Form->input('dsi_enrollment_total', array(
							'label'      => '<label class="small">Total Enrollment</label>',
							'onkeypress' => 'return isNumberKey(event)',
							'type'       => 'text',
							'class'      => 'form-control',
							'value' => $school2['Asc201516']['dsi_enrollment_total'],
							'readonly'
				  			)); 
				  		?>
				  	</div>


			  	</div>
			</div>
		</div>	

		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">10. Shift</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-2">
				  		<?= $this->Form->input('dsi_sch_shift', array(
							'label'   => false,
							'options' => array(
								'0' => '0 = Choose', 
								'1' => '1 = Morning' , 
								'2' => '2 = Afternoon' , 
								'3' => '3 = Both Shifts'
								),
							'selected' => $school2['Asc201516']['dsi_sch_shift'],
							'class'   => 'form-control'
				  			)); 
				  		?>
				  	</div>
			  	</div>		
		  	</div>
		</div>	

		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">11. Is this a Campus School?</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-2">
				  		<?= $this->Form->input('dsi_sch_campus', array(
							'label'    => false,
							'options'  => array('0' => '0 = Choose', '1' => '1 = Yes' , '2' => '2 = No'),
							'selected' => $school2['Asc201516']['dsi_sch_campus'],
							'class'    => 'form-control'
				  			)); 
				  		?>
				  	</div>
			  	</div>		
			  	<?php
			  		$isCampus = $school2['Asc201516']['dsi_sch_campus'];
			  		if($isCampus == 1){ $style = "style='display:block;'"; $state = ""; }else{ $style="style='display:none;'"; $state="disabled"; }
			  	?>			  	
			  	<div class="row" id="campus_merge_no_div" <?= $style; ?>>
					<div class="form-group col-md-4">
				  		<?= $this->Form->input('dsi_sch_campus_merged_schools', array(
							'label'      => 'No. of Merged Schools',
							'type'       => 'text',
							'onkeypress' => 'return isNumberKey(event)',							
							'maxlength'  => '9',
							'size'       => '9',
							'class'      => 'form-control',							
							$state
				  			)); 
				  		?>
				  	</div>
			  	</div>
		  	</div>
		</div>	
	</div>

	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">12. School Building</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-2">
				  		<?= $this->Form->input('schoolbuildingowners', array(
							'label'    => 'a. Ownership',
							'selected' => $school2['Asc201516']['sbi_ownership'],
							'class'    => 'form-control',
							'name'     => 'data[Asc201516][sbi_ownership]'
				  			)); 
				  		?>
				  	</div>
					<?php
						$building = $school2['Asc201516']['sbi_ownership'];
						$style2 = "style='display:none;'";
						$style4 = "style='display:none;'";
						$style5 = "style='display:none;'";
						$state2 = "disabled";
						$state4 = "disabled";
						$state5 = "disabled";

						if($building == 2){
							$style2 = "style='display:block;'";
							$state2 = "";
						}else if($building == 4){
							$style4 = "style='display:block;'";
							$state4 = "";
						}else if($building == 5){
							$style5 = "style='display:block;'";
							$state5 = "";
						}else{
							$style = "style='display:none;'";
							$state = "disabled";
						}
					?>
				  	<div class="form-group col-md-2" id="other_building_semiscode_specify" <?= $style2; ?>>
				  		<?= $this->Form->input('sbi_other_building_semiscode_specify', array(
							'label'      => 'SEMIS Code',
							'type'       => 'text',
							'onkeypress' => 'return isNumberKey(event)',
							'maxlength'  => '9',
							'size'       => '9',
							'class'      => 'form-control',
							'value'      => $school2['Asc201516']['sbi_other_building_semiscode_specify'],
				  			$state2
				  			)); 
				  		?>
				  	</div>

				  	<div class="form-group col-md-2" id="other_building_specify" <?= $style4; ?>>
				  		<?= $this->Form->input('sbi_other_building_specify', array(
				  			'label' => 'Specify',
				  			'class' => 'form-control',
				  			'value' => $school2['Asc201516']['sbi_other_building_specify'],
				 			$state4
				  			)); 
				  		?>
				  	</div>

				  	<div class="form-group col-md-2" id="other_nobuilding_specify" <?= $style5; ?>>
				  		<?= $this->Form->input('sbi_other_nobuilding_specify', array(
							'label'    => 'Specify',
							'options'  => array('0' => '0 = Choose', '1' => '1 = Under Tree', '2' => '2 = Under Chhapra', '3' => '3 = Hut'),
							'class'    => 'form-control',
							'selected' => $school2['Asc201516']['sbi_other_nobuilding_specify'],
							$state5
				  			)); 
				  		?>
				  	</div>
			  	</div>
			
				<div class="row">
				  	<div class="form-group col-md-3">
				  		<?= $this->Form->input('sbi_school_building_construction_year', array(
							'label'       => 'b. Year of Establishment of School (YYYY)',
							'type'        => 'text',
							'placeholder' => 'YYYY',
							'onkeypress'  => 'return isNumberKey(event)',
							'max'         => '2016',
							'size'        => '4',
							'maxlength'   => '4',
							'value'       => $school2['Asc201516']['sbi_school_building_construction_year'],
							'class'       => 'form-control'
				  			)); 
				  		?>
				  	</div>	

				  	<div class="form-group col-md-2">
				  		<?= $this->Form->input('sbi_school_building_construction_type', array(
							'label'    => 'c. Type of building',
							'options'  => array('0' => '0 = Choose', '1' => '1 = Pakka/RCC/Tier Guarder', '2' => '2 = Katcha', '3' => '3 = Mixed'),
							'selected' => $school2['Asc201516']['sbi_school_building_construction_type'],
							'class'    => 'form-control'
				  			)); 
				  		?>
				  	</div>	
				</div>

				<div class="row">
				  	<div class="form-group col-md-2">
				  		<?= $this->Form->input('sbi_school_building_condition', array(
							'label'    => 'd. Condition of Building',
							'options'  => array('0' => '0 = Choose', '1' => '1 = Satisfactory' , '2' => '2 = Needs Repair', '3' => '3 = Dangerous'),
							'selected' => $school2['Asc201516']['sbi_school_building_condition'],
							'class'    => 'form-control'
				  			)); 
				  		?>
				  	</div>
				</div>

				<div class="row">
				  	<div class="form-group col-md-2">
						<?= $this->Form->input('sbi_school_building_total_rooms', array(
							'label'       => 'e. Total No. of Rooms', 
							'placeholder' => 'Total Rooms', 
							'type'        => 'text',
							'onkeypress'  => 'return isNumberKey(event)',						
							'class'       => 'form-control',
							'value'       => $school2['Asc201516']['sbi_school_building_total_rooms'],
							'id'          => 'total_rooms'
							)); 
						?>
					</div>

					<div class="form-group col-md-3" id="total_classrooms_div">
						<?= $this->Form->input('sbi_school_building_class_rooms', array(
							'label'       => 'f. Total Rooms As Classrooms', 
							'placeholder' => 'Total Classrooms', 
							'type'        => 'text',
							'onkeypress'  => 'return isNumberKey(event)',						
							'class'       => 'form-control',
							'value'       => $school2['Asc201516']['sbi_school_building_class_rooms'],
							'id'          => 'total_rooms_as_classrooms'
							)); 
						?>
					</div>	
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						<?= $this->Form->input('sbi_school_building_other_than_learning', array(
							'label'       => 'g. Rooms utilized for other than Learning/Teaching purpose', 
							'options' => array(
								'0' => '0 = Choose', 
								'1' => '1 = NGO', 
								'2' => '2 = District Administration', 
								'3' => '3 = Occupied by Villager', 
								'4' => '4 = Community Centre',
								'5' => '5 = Vocational Training Centre',
								'6' => '6 = Other (Specify)'
								),		
							'selected' => $school2['Asc201516']['sbi_school_building_other_than_learning'],	
							'class'       => 'form-control'
							)); 
						?>
					</div>
					<?php 
						$OtherThanLearning = $school2['Asc201516']['sbi_school_building_other_than_learning'];
						
						$stylex = "style='display:none;'";
						$statex = "disabled";

						$style6 = "style='display:none;'";
						$state6 = "disabled";

						if($OtherThanLearning == 0)
						{
							$stylex = "style='display:none;'";
							$statex = "disabled";
						}else if($OtherThanLearning == 6){
							$style6 = "style='display:block;'";
							$state6 = "";
						}else{
							$stylex = "style='display:block;'";
							$statex = "";
						}
					?>
					<div class="form-group col-md-2" id="other_than_learning_rooms_count" <?= $stylex; ?>>
						<?= $this->Form->input('sbi_school_building_other_than_learning_rooms', array(
							'label'      => 'Write No. of rooms',
							'type'       => 'text',
							'onkeypress' => 'return isNumberKey(event)',
							'value'      => $school2['Asc201516']['sbi_school_building_other_than_learning_rooms'],
							'class'      => 'form-control',
							$statex
							));
						?>
						
					</div>
					<div class="form-group col-md-2" id="purpose_other_than_learning" <?= $style6; ?>>
						<?= $this->Form->input('sbi_purpose_other_than_learning_specify', array(
							'label' => 'Specify', 
							'type'  => 'text',
							'class' => 'form-control',
							'value' => $school2['Asc201516']['sbi_purpose_other_than_learning_specify'],
							$state6
							)); 
						?>		
					</div>
				</div>
			</div>
		</div>  	
	</div>


	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">13. Basic Facilities</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-2">
						<?= $this->Form->input('bfi_school_boundarywall', array(
							'label'    => 'Boundary Wall *', 
							'options'  => array('0' => '0 = Choose', '1' => '1 = Satisfactory', '2' => '2 = Needs Repair', '3' => '3 = Dangerous', '4' => '4 = No Boundary Wall'),
							'selected' => $school2['Asc201516']['bfi_school_boundarywall'],
							'class'    => 'form-control'
							)); 
						?>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-2">
						<?= $this->Form->input('bfi_school_washroom', array(
							'label'    => 'Washroom Facility', 
							'options'  => array('0' => '0 = Choose', '1' => '1 = Yes', '2' => '2 = No'), 
							'class'    => 'form-control',
							'selected' => $school2['Asc201516']['bfi_school_washroom'],
							'id'       => 'washroom_facility'
							)); 
						?>
					</div>
					<?php
						$washroom = $school2['Asc201516']['bfi_school_washroom'];
						if($washroom == 1){
							$state = "";
						}else{
							$state = "disabled";
						}
					?>
					<div class="form-group col-md-2">
						<?= $this->Form->input('bfi_school_functional_washrooms', array(
							'label'      => 'Functional Washrooms', 
							'type'       => 'text',							
							'class'      => 'form-control',
							'onkeypress' => 'return isNumberKey(event)',			
							'id'         => 'functional_washrooms',
							'value' => $school2['Asc201516']['bfi_school_functional_washrooms'],
							$state
							)); 
						?>
					</div>

					<div class="form-group col-md-2">
						<?= $this->Form->input('bfi_school_nonfunctional_washrooms', array(
							'label'      => 'Non Functional Washrooms', 
							'type'       => 'text',							
							'class'      => 'form-control',
							'onkeypress' => 'return isNumberKey(event)',			
							'id'         => 'nonfunctional_washrooms',
							'value' => $school2['Asc201516']['bfi_school_nonfunctional_washrooms'],
							$state
							)); 
						?>
					</div>			
				</div>
				<div class="row">
					<div class="form-group col-md-2">
						<?= $this->Form->input('bfi_school_waterfacility', array(
							'label'    => 'Drinking Water Facility', 
							'options'  => array('0' => '0 = Choose', '1' => '1 = Yes', '2' => '2 = No'),							
							'selected' => $school2['Asc201516']['bfi_school_waterfacility'],
							'class'    => 'form-control'
							)); 
						?>
					</div>
				
					<div class="form-group col-md-2">
						<?= $this->Form->input('bfi_school_electricity', array(
							'label'    => 'Electricity Facility', 
							'options'  => array('0' => '0 = Choose', '1' => '1 = Yes', '2' => '2 = No'), 
							'selected' => $school2['Asc201516']['bfi_school_electricity'],
							'class'    => 'form-control'
							)); 
						?>
					</div>
				</div>

			</div>
		</div>	
	</div>

	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">14. Total Teaching &amp; Non-Teaching Staff</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-12">
						<p class="lead">a. Total No. of working Teaching staff</p>
					</div>
					<div class="form-group col-md-10">
						<div class="form-group col-md-2">
							<?= $this->Form->input('sti_govt_male', array(
								'label'       => '<label class="small">Govt Male</label>', 
								'placeholder' => 'Govt Male', 				
								'onkeypress'  => 'return isNumberKey(event)',
								'type'        => 'text',								
								'maxlength'   => '4',
								'size'        => '4',
								'value'       => $school2['Asc201516']['sti_govt_male'],
								'class'       => 'form-control'
								)); 
							?>
						</div>

						<div class="form-group col-md-2">
							<?= $this->Form->input('sti_nongovt_male', array(
								'label'       => '<label class="small">Non-Govt Male</label>', 
								'placeholder' => 'Non-Govt Male',
								'onkeypress'  => 'return isNumberKey(event)',
								'type'        => 'text',
								'maxlength'   => '4',
								'size'        => '4',
								'value'       => $school2['Asc201516']['sti_nongovt_male'],
								'class'       => 'form-control'
								)); 
							?>
						</div>

						<div class="form-group col-md-2">
							<?= $this->Form->input('sti_govt_female', array(
								'label'       => '<label class="small">Govt Female</label>', 
								'placeholder' => 'Govt Female', 
								'onkeypress'  => 'return isNumberKey(event)',
								'type'        => 'text',
								'maxlength'   => '4',
								'size'        => '4',
								'value'       => $school2['Asc201516']['sti_govt_female'],
								'class'       => 'form-control'
								)); 
							?>
						</div>

						<div class="form-group col-md-2">
							<?= $this->Form->input('sti_nongovt_female', array(
								'label'       => '<label class="small">Non Govt Female</label>', 
								'placeholder' => 'Non-Govt Female', 
								'onkeypress'  => 'return isNumberKey(event)',
								'type'        => 'text',
								'maxlength'   => '4',
								'size'        => '4',
								'value'       => $school2['Asc201516']['sti_nongovt_female'],
								'class'       => 'form-control'
								)); 
							?>
						</div>

						<div class="form-group col-md-1">
							<?= $this->Form->input('sti_total_teachers', array(
								'label' => '<label class="small">Total</label>', 
								'id'    => 'total_teachers',			
								'value' => $school2['Asc201516']['sti_total_teachers'],
								'class' => 'form-control',
								'readonly'
								)); 
							?>
						</div>

						<!--<div class="form-group col-md-2">
							< ?= $this->Form->input('sti_vacant', array(
								'label'       => '<label class="small">Vacant</label>', 
								'placeholder' => 'Vacant', 				
								'onkeypress'  => 'return isNumberKey(event)',
								'type' => 'text',
								'maxlength'   => '4',
								'size'        => '4',
								'value' => @$school2['Asc201516']['sti_vacant'],
								'class'       => 'form-control'
								)); 
							?>
						</div>	-->
					</div>
					
				</div>

				<div class="row">
					<div class="form-group col-md-12">
						<p class="lead">b. Non-teaching staff detail</p>
					</div>	
					<div class="form-group col-md-10">
						<div class="form-group col-md-2">
							<?= $this->Form->input('sti_nonteaching_male', array(
								'label'       => '<label class="small">Non-Teaching Male</label>', 
								'placeholder' => 'Non-Teaching Male', 
								'onkeypress'  => 'return isNumberKey(event)',
								'type'        => 'text',
								'maxlength'   => '4',
								'size'        => '4',
								'value'       => $school2['Asc201516']['sti_nonteaching_male'],
								'class'       => 'form-control'
								)); 
							?>
						</div>

						<div class="form-group col-md-2">
							<?= $this->Form->input('sti_nonteaching_female', array(
								'label'       => '<label class="small">Non-Teaching Female</label>', 
								'placeholder' => 'Non-Teaching Female', 
								'onkeypress'  => 'return isNumberKey(event)',
								'type'        => 'text',
								'maxlength'   => '4',
								'size'        => '4',
								'value'       => $school2['Asc201516']['sti_nonteaching_female'],
								'class'       => 'form-control'
								)); 
							?>
						</div>

						<div class="form-group col-md-3">
							<?= $this->Form->input('sti_total_nonteaching_staff', array(
								'label'      => 'Total Non-Teaching Staff', 
								'onkeypress' => 'return isNumberKey(event)',
								'maxlength'  => '4',
								'size'       => '4',
								'class'      => 'form-control',
								'value'      => $school2['Asc201516']['sti_total_nonteaching_staff'],
								'id'         => 'total_nonteachers',
								'readonly'
								)); 
							?>
						</div>		
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ======================================== PAGE 2 ========================================= -->

<div id="page2" class="hide">
	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">15. Enrollment [Write the enrollment figure as on reference Date] 31st Oct, 2015</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-2">		
						<?= $this->Form->input('enr_source_of_enrollment', array(
							'label' => 'a. Source of Enrollment',
							'options' => array(
								'0' => '0 = Choose', 
								'1' => '1 = General Register', 
								'2' => '2 = Attendance Register', 
								'3' => '3 = Other record available at school (Specify)', 
								'4' => '4 = No Formal Record'
								),
							'selected' => $school2['Asc201516']['enr_source_of_enrollment'],
							'class'    => 'form-control'                           
							));
						?>	
					</div>
					<?php
						$source_enr = $school2['Asc201516']['enr_source_of_enrollment'];
						if($source_enr == 3){
							$style = "style='display:block;'";
							$state = "";
						}else{
							$style = "style='display:none;'";
							$state = "disabled";
						}
					?>
					<div class="form-group col-md-4" id="source_of_enrollment_specify" <?= $style; ?>>		
						<?= $this->Form->input('enr_source_of_enrollment_specify', array(
							'label' => 'Specify',
							'class' => 'form-control',
							'value' => $school2['Asc201516']['enr_source_of_enrollment_specify'],
							$state
							));
						?>	
					</div>	
				</div>
				<div class="row">
				<?php
					$level     = $school2['Asc201516']['dsi_level'];
					$state1239 = "style='display: none'";
					$state4    = "style='display: none'";
					$state5    = "style='display: none'";
					if(($level == 1) || ($level == 2) || ($level == 3) || ($level == 9)){
						$state1239 = "style='display: block'";
					}else if($level == 4){
						$state4 = "style='display: block'";
					}else if($level == 5){
						$state5 = "style='display: block'";
					}
				?>

					<div id="elem_tbl" <?= $state1239; ?>>
						<div class="form-group col-md-12">
							<?= $this->Form->label('elementary_enrollment', 'b. Elementary Enrollment', array()); ?>
						</div>					
						<!-- ELEMENTARY ENROLLMENT TABLE STARTS HERE !-->	
						<div class="col-md-12">
							<table class="table table-condensed table-bordered smallfont-table" id="ele_enr_table" style='padding-left: 0; padding-right: 0; text-align:center;'>
								<tr>
									<th>Class</th>
									<th>ECE</th>
									<th>Katchi</th>
									<th>I</th>
									<th>II</th>
									<th>III</th>
									<th>IV</th>
									<th>V</th>
									<th>VI</th>
									<th>VII</th>
									<th>VIII</th>								
									<th>Total</th>
								</tr>		

								<tr>
									<td>Boys</td>				
									<td>			
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('ele_class_ece_boys_enrollment', array(
											'label'      => false,										
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength'  => '3',
											'size'       => '3',
											'name'       => 'data[asc201516s_enrollments][ele_class_ece_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['ele_class_ece_boys_enrollment'],
											'class'      => 'form-control'
											)); ?>	
										</div>				
									</td>
									
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('ele_class_katchi_boys_enrollment', array(
											'label'      => false,										
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength'  => '3',
											'size'       => '3',	
											'name'       => 'data[asc201516s_enrollments][ele_class_katchi_boys_enrollment]',	
											'value' => $school2_enr['asc201516s_enrollments']['ele_class_katchi_boys_enrollment'],	
											'class'      => 'form-control'
											)); ?>
										</div>
									</td>

									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('ele_class_one_boys_enrollment', array(
											'label'      => false,										
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength'  => '3',
											'size'       => '3',		
											'name'       => 'data[asc201516s_enrollments][ele_class_one_boys_enrollment]',		
											'value' => $school2_enr['asc201516s_enrollments']['ele_class_one_boys_enrollment'],
											'class'      => 'form-control'
											)); ?>
										</div> 
									</td>

									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('ele_class_two_boys_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'name'       => 'data[asc201516s_enrollments][ele_class_two_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['ele_class_two_boys_enrollment'],
											'size' => '3',										
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('ele_class_three_boys_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',				
											'name'       => 'data[asc201516s_enrollments][ele_class_three_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['ele_class_three_boys_enrollment'],	
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('ele_class_four_boys_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',									
											'name'       => 'data[asc201516s_enrollments][ele_class_four_boys_enrollment]',	
											'value' => $school2_enr['asc201516s_enrollments']['ele_class_four_boys_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('ele_class_five_boys_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',									
											'name'       => 'data[asc201516s_enrollments][ele_class_five_boys_enrollment]',	
											'value' => $school2_enr['asc201516s_enrollments']['ele_class_five_boys_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('ele_class_six_boys_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',									
											'name'       => 'data[asc201516s_enrollments][ele_class_six_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['ele_class_six_boys_enrollment'],	
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('ele_class_seven_boys_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',										
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][ele_class_seven_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['ele_class_seven_boys_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('ele_class_eight_boys_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',									
											'name'       => 'data[asc201516s_enrollments][ele_class_eight_boys_enrollment]',	
											'value' => $school2_enr['asc201516s_enrollments']['ele_class_eight_boys_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<!--<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											< ?= $this->Form->input('ele_class_nine_boys_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',									
											'name'       => 'data[asc201516s_enrollments][ele_class_nine_boys_enrollment]',	
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											< ?= $this->Form->input('ele_class_ten_boys_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',										
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][ele_class_ten_boys_enrollment]',
											'label' => false
											)); ?> 
										</div>
									</td>-->
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('ele_total_boys_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',										
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][ele_total_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['ele_total_boys_enrollment'],
											'label' => false,
											'readonly'
											)); ?> 
										</div>
									</td>
								</tr>
								
								<tr>
									<td>Girls</td>
									<td>			
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('ele_class_ece_girls_enrollment', array(
											'label'      => false,
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength'  => '3',
											'size'       => '3',
											'name'       => 'data[asc201516s_enrollments][ele_class_ece_girls_enrollment]',
											'value'      => $school2_enr['asc201516s_enrollments']['ele_class_ece_girls_enrollment'],
											'class'      => 'form-control'
											)); ?>	
										</div>				
									</td>
									
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('ele_class_katchi_girls_enrollment', array(
											'label' => false,
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][ele_class_katchi_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['ele_class_katchi_girls_enrollment'],
											'class' => 'form-control'
											)); ?>
										</div>
									</td>

									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('ele_class_one_girls_enrollment', array(
											'label' => false,
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][ele_class_one_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['ele_class_one_girls_enrollment'],
											'class' => 'form-control'
											)); ?>
										</div> 
									</td>

									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('ele_class_two_girls_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][ele_class_two_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['ele_class_two_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('ele_class_three_girls_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][ele_class_three_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['ele_class_three_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('ele_class_four_girls_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][ele_class_four_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['ele_class_four_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('ele_class_five_girls_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][ele_class_five_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['ele_class_five_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('ele_class_six_girls_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][ele_class_six_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['ele_class_six_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('ele_class_seven_girls_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][ele_class_seven_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['ele_class_seven_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('ele_class_eight_girls_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][ele_class_eight_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['ele_class_eight_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<!--<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											< ?= $this->Form->input('ele_class_nine_girls_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][ele_class_nine_girls_enrollment]',
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											< ?= $this->Form->input('ele_class_ten_girls_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][ele_class_ten_girls_enrollment]',
											'label' => false
											)); ?> 
										</div>
									</td>-->
									<td>
										<div class="form-group col-md-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('ele_total_girls_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][ele_total_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['ele_total_girls_enrollment'],
											'label' => false,
											'readonly'
											)); ?> 
										</div>
									</td>				
								</tr>

							</table>
							<p class="lead" id="total_ele_enrollment_reference"></p>
						</div>
						
					</div>

					<div id="sec_tbl" <?= $state4; ?>>
						<!-- SECONDARY ENROLLMENT !-->
						<div class="form-group col-md-12">
							<?= $this->Form->label('secondary_enrollment', 'c. Secondary Enrollment', array()); ?>
						</div>
						<div class="col-md-12">
							<table class="table table-condensed table-bordered smallfont-table" id="sec_enr_table" style='padding-left: 0; padding-right: 0; text-align:center;'>
								<tr>
									<th>Class</th>
									<th colspan="5">Class IX</th>
									<th colspan="5">Class X</th>
									<th rowspan="3">Total</th>
								</tr>
								<tr>
									<th rowspan="2">Group</th>
									<th rowspan="2">Arts/General</th>
									<th colspan="2">Science</th>
									<th rowspan="2">Commerce</th>
									<th rowspan="2">Other</th>
									<th rowspan="2">Arts/General</th>
									<th colspan="2">Science</th>
									<th rowspan="2">Commerce</th>
									<th rowspan="2">Other</th>				
								</tr>		
								<tr>
									<th>Computer</th>
									<th>Biology</th>
									<th>Computer</th>
									<th>Biology</th>
								</tr>

								<tr>
									<td>Boys</td>				
									<td>			
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('sec_class_nine_arts_boys_enrollment', array(
											'label' => false,
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][sec_class_nine_arts_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['sec_class_nine_arts_boys_enrollment'],
											'class' => 'form-control sec-boys-enrollment-calc'
											)); ?>	
										</div>				
									</td>
									
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('sec_class_nine_comp_boys_enrollment', array(
											'label' => false,
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][sec_class_nine_comp_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['sec_class_nine_comp_boys_enrollment'],
											'class' => 'form-control sec-boys-enrollment-calc'
											)); ?>
										</div>
									</td>

									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('sec_class_nine_bio_boys_enrollment', array(
											'label' => false,
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][sec_class_nine_bio_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['sec_class_nine_bio_boys_enrollment'],
											'class' => 'form-control sec-boys-enrollment-calc'
											)); ?>
										</div> 
									</td>

									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('sec_class_nine_comm_boys_enrollment', array(
											'class' => 'form-control sec-boys-enrollment-calc',
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][sec_class_nine_comm_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['sec_class_nine_comm_boys_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('sec_class_nine_other_boys_enrollment', array(
											'class' => 'form-control sec-boys-enrollment-calc',
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][sec_class_nine_other_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['sec_class_nine_other_boys_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('sec_class_ten_arts_boys_enrollment', array(
											'class' => 'form-control sec-boys-enrollment-calc',
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][sec_class_ten_arts_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['sec_class_ten_arts_boys_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('sec_class_ten_comp_boys_enrollment', array(
											'class' => 'form-control sec-boys-enrollment-calc',
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][sec_class_ten_comp_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['sec_class_ten_comp_boys_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('sec_class_ten_bio_boys_enrollment', array(
											'class' => 'form-control sec-boys-enrollment-calc',
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][sec_class_ten_bio_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['sec_class_ten_bio_boys_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('sec_class_ten_comm_boys_enrollment', array(
											'class' => 'form-control sec-boys-enrollment-calc',
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][sec_class_ten_comm_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['sec_class_ten_comm_boys_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('sec_class_ten_other_boys_enrollment', array(
											'class' => 'form-control sec-boys-enrollment-calc',
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][sec_class_ten_other_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['sec_class_ten_other_boys_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('sec_total_boys_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][sec_total_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['sec_total_boys_enrollment'],
											'label' => false,
											'readonly'
											)); ?> 
										</div>
									</td>				
								</tr>
								
								<tr>
									<td>Girls</td>
									<td>			
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('sec_class_nine_arts_girls_enrollment', array(
											'label' => false,
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][sec_class_nine_arts_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['sec_class_nine_arts_girls_enrollment'],
											'class' => 'form-control sec-girls-enrollment-calc'
											)); ?>	
										</div>				
									</td>
									
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('sec_class_nine_comp_girls_enrollment', array(
											'label' => false,
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][sec_class_nine_comp_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['sec_class_nine_comp_girls_enrollment'],
											'class' => 'form-control sec-girls-enrollment-calc'
											)); ?>
										</div>
									</td>

									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('sec_class_nine_bio_girls_enrollment', array(
											'label' => false,
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][sec_class_nine_bio_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['sec_class_nine_bio_girls_enrollment'],
											'class' => 'form-control sec-girls-enrollment-calc'
											)); ?>
										</div> 
									</td>

									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('sec_class_nine_comm_girls_enrollment', array(
											'class' => 'form-control sec-girls-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][sec_class_nine_comm_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['sec_class_nine_comm_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('sec_class_nine_other_girls_enrollment', array(
											'class' => 'form-control sec-girls-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][sec_class_nine_other_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['sec_class_nine_other_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('sec_class_ten_arts_girls_enrollment', array(
											'class' => 'form-control sec-girls-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][sec_class_ten_arts_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['sec_class_ten_arts_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('sec_class_ten_comp_girls_enrollment', array(
											'class' => 'form-control sec-girls-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][sec_class_ten_comp_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['sec_class_ten_comp_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('sec_class_ten_bio_girls_enrollment', array(
											'class' => 'form-control sec-girls-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][sec_class_ten_bio_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['sec_class_ten_bio_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('sec_class_ten_comm_girls_enrollment', array(
											'class' => 'form-control sec-girls-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][sec_class_ten_comm_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['sec_class_ten_comm_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('sec_class_ten_other_girls_enrollment', array(
											'class' => 'form-control sec-girls-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][sec_class_ten_other_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['sec_class_ten_other_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('sec_total_girls_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][sec_total_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['sec_total_girls_enrollment'],
											'label' => false,
											'readonly'
											)); ?> 
										</div>
									</td>				
								</tr>

							</table>
							<p class="lead" id="total_sec_enrollment_reference"></p>
						</div>	
					</div>

					<div id="hsec_tbl" <?= $state5; ?>>
						<!-- HIGHER SECONDARY ENROLLMENT  !-->
						<div class="form-group col-md-12">
							<?= $this->Form->label('hsecondary_enrollment', 'd. Higher Secondary Enrollment', array()); ?>
						</div>
						<div class="col-md-12">
							<table class="table table-condensed table-bordered smallfont-table" id="hsec_enr_table" style='padding-left: 0; padding-right: 0; text-align:center;'>
								<tr>
									<th>Class</th>
									<th colspan="6">Class XI</th>
									<th colspan="6">Class XII</th>
									<th rowspan="3">Total</th>
								</tr>
								<tr>
									<th rowspan="2">Group</th>
									<th rowspan="2">Arts/General</th>
									<th colspan="3">Science</th>
									<th rowspan="2">Commerce</th>
									<th rowspan="2">Other</th>
									<th rowspan="2">Arts/General</th>
									<th colspan="3">Science</th>
									<th rowspan="2">Commerce</th>
									<th rowspan="2">Other</th>				
								</tr>		
								<tr>
									<th>Computer</th>
									<th>Pre-Med</th>
									<th>Pre-Eng</th>
									<th>Computer</th>
									<th>Pre-Med</th>
									<th>Pre-Eng</th>
								</tr>

								<tr>
									<td>Boys</td>				
									<td>			
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_eleven_arts_boys_enrollment', array(
											'label' => false,
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_eleven_arts_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_eleven_arts_boys_enrollment'],
											'class' => 'form-control hsec-boys-enrollment-calc'
											)); ?>	
										</div>				
									</td>
									
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_eleven_comp_boys_enrollment', array(
											'label' => false,
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_eleven_comp_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_eleven_comp_boys_enrollment'],
											'class' => 'form-control hsec-boys-enrollment-calc'
											)); ?>
										</div>
									</td>

									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_eleven_med_boys_enrollment', array(
											'label' => false,
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_eleven_med_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_eleven_med_boys_enrollment'],
											'class' => 'form-control hsec-boys-enrollment-calc'
											)); ?>
										</div> 
									</td>

									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_eleven_eng_boys_enrollment', array(
											'class' => 'form-control hsec-boys-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_eleven_eng_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_eleven_eng_boys_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_eleven_comm_boys_enrollment', array(
											'class' => 'form-control hsec-boys-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_eleven_comm_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_eleven_comm_boys_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_eleven_other_boys_enrollment', array(
											'class' => 'form-control hsec-boys-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_eleven_other_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_eleven_other_boys_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_twelve_arts_boys_enrollment', array(
											'class' => 'form-control hsec-boys-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_twelve_arts_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_twelve_arts_boys_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_twelve_comp_boys_enrollment', array(
											'class' => 'form-control hsec-boys-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_twelve_comp_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_twelve_comp_boys_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_twelve_med_boys_enrollment', array(
											'class' => 'form-control hsec-boys-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_twelve_med_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_twelve_med_boys_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_twelve_eng_boys_enrollment', array(
											'class' => 'form-control hsec-boys-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_twelve_eng_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_twelve_eng_boys_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_twelve_comm_boys_enrollment', array(
											'class' => 'form-control hsec-boys-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_twelve_comm_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_twelve_comm_boys_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_twelve_other_boys_enrollment', array(
											'class' => 'form-control hsec-boys-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_twelve_other_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_twelve_other_boys_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_total_boys_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_total_boys_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_total_boys_enrollment'],
											'label' => false,
											'readonly'
											)); ?> 
										</div>
									</td>				
								</tr>
								
								<tr>
									<td>Girls</td>
									<td>			
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_eleven_arts_girls_enrollment', array(
											'label' => false,
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_eleven_arts_girls_enrollment]'
											,
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_eleven_arts_girls_enrollment'],
											'class' => 'form-control hsec-girls-enrollment-calc'
											)); ?>	
										</div>				
									</td>
									
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_eleven_comp_girls_enrollment', array(
											'label' => false,
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_eleven_comp_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_eleven_comp_girls_enrollment'],
											'class' => 'form-control hsec-girls-enrollment-calc'
											)); ?>
										</div>
									</td>

									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_eleven_med_girls_enrollment', array(
											'label' => false,
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_eleven_med_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_eleven_med_girls_enrollment'],
											'class' => 'form-control hsec-girls-enrollment-calc'
											)); ?>
										</div> 
									</td>

									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_eleven_eng_girls_enrollment', array(
											'class' => 'form-control hsec-girls-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_eleven_eng_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_eleven_eng_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_eleven_comm_girls_enrollment', array(
											'class' => 'form-control hsec-girls-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_eleven_comm_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_eleven_comm_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_eleven_other_girls_enrollment', array(
											'class' => 'form-control hsec-girls-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_eleven_other_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_eleven_other_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_twelve_arts_girls_enrollment', array(
											'class' => 'form-control hsec-girls-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_twelve_arts_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_twelve_arts_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_twelve_comp_girls_enrollment', array(
											'class' => 'form-control hsec-girls-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_twelve_comp_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_twelve_comp_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_twelve_med_girls_enrollment', array(
											'class' => 'form-control hsec-girls-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_twelve_med_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_twelve_med_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_twelve_eng_girls_enrollment', array(
											'class' => 'form-control hsec-girls-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_twelve_eng_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_twelve_eng_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_twelve_comm_girls_enrollment', array(
											'class' => 'form-control hsec-girls-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_twelve_comm_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_twelve_comm_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_class_twelve_other_girls_enrollment', array(
											'class' => 'form-control hsec-girls-enrollment-calc', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_class_twelve_other_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_class_twelve_other_girls_enrollment'],
											'label' => false
											)); ?> 
										</div>
									</td>
									<td>
										<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
											<?= $this->Form->input('hsec_total_girls_enrollment', array(
											'class' => 'form-control', 
											'onkeypress' => 'return isNumberKey(event)',
											'maxlength' => '3',
											'size' => '3',
											'name'       => 'data[asc201516s_enrollments][hsec_total_girls_enrollment]',
											'value' => $school2_enr['asc201516s_enrollments']['hsec_total_girls_enrollment'],
											'label' => false,
											'readonly'
											)); ?> 
										</div>
									</td>										
								</tr>
							</table>
							<p class="lead" id="total_hsec_enrollment_reference"></p>
						</div>
					</div>

				</div>			
			</div>
		</div>		
	</div>


	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">16. Repeaters</h5>
			</div>
			<div class="panel-body">
				<div class="row">	
					<!-- REPEATERS !-->				
					<div class="col-md-12">
						<table class="table table-condensed table-bordered" style='padding-left: 0; padding-right: 0; text-align:center;'>
							<tr>
								<th>Class</th>				
								<th>IV</th>
								<th>V</th>
								<th>VI</th>
								<th>VII</th>
								<th>VIII</th>
								<th>IX</th>
								<th>X</th>
								<th>XI</th>
								<th>XII</th>
								<th>Total</th>
							</tr>		

							<tr>
								<td>Boys</td>				
								<td>			
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('repeaters_class_four_boys', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][repeaters_class_four_boys]',
										'value' => $school2_enr['asc201516s_enrollments']['repeaters_class_four_boys'],
										'class' => 'form-control repeaters-boys-calc'
										)); ?>	
									</div>				
								</td>
								
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('repeaters_class_five_boys', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][repeaters_class_five_boys]',
										'value' => $school2_enr['asc201516s_enrollments']['repeaters_class_five_boys'],
										'class' => 'form-control repeaters-boys-calc'
										)); ?>
									</div>
								</td>

								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('repeaters_class_six_boys', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][repeaters_class_six_boys]',
										'value' => $school2_enr['asc201516s_enrollments']['repeaters_class_six_boys'],
										'class' => 'form-control repeaters-boys-calc'
										)); ?>
									</div> 
								</td>

								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('repeaters_class_seven_boys', array(
										'class' => 'form-control repeaters-boys-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][repeaters_class_seven_boys]',
										'value' => $school2_enr['asc201516s_enrollments']['repeaters_class_seven_boys'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('repeaters_class_eight_boys', array(
										'class' => 'form-control repeaters-boys-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][repeaters_class_eight_boys]',
										'value' => $school2_enr['asc201516s_enrollments']['repeaters_class_eight_boys'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('repeaters_class_nine_boys', array(
										'class' => 'form-control repeaters-boys-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][repeaters_class_nine_boys]',
										'value' => $school2_enr['asc201516s_enrollments']['repeaters_class_nine_boys'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('repeaters_class_ten_boys', array(
										'class' => 'form-control repeaters-boys-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][repeaters_class_ten_boys]',
										'value' => $school2_enr['asc201516s_enrollments']['repeaters_class_ten_boys'],										
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('repeaters_class_eleven_boys', array(
										'class' => 'form-control repeaters-boys-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][repeaters_class_eleven_boys]',
										'value' => $school2_enr['asc201516s_enrollments']['repeaters_class_eleven_boys'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('repeaters_class_twelve_boys', array(
										'class' => 'form-control repeaters-boys-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][repeaters_class_twelve_boys]',
										'value' => $school2_enr['asc201516s_enrollments']['repeaters_class_twelve_boys'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('repeaters_total_boys', array(
										'class' => 'form-control', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][repeaters_total_boys]',
										'value' => $school2_enr['asc201516s_enrollments']['repeaters_total_boys'],
										'label' => false,
										'readonly'
										)); ?> 
									</div>
								</td>			
							</tr>
							
							<tr>
								<td>Girls</td>
								<td>			
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('repeaters_class_four_girls', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][repeaters_class_four_girls]',
										'value' => $school2_enr['asc201516s_enrollments']['repeaters_class_four_girls'],
										'class' => 'form-control repeaters-girls-calc'
										)); ?>	
									</div>				
								</td>
								
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('repeaters_class_five_girls', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][repeaters_class_five_girls]',
										'value' => $school2_enr['asc201516s_enrollments']['repeaters_class_five_girls'],
										'class' => 'form-control repeaters-girls-calc'
										)); ?>
									</div>
								</td>

								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('repeaters_class_six_girls', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][repeaters_class_six_girls]',
										'value' => $school2_enr['asc201516s_enrollments']['repeaters_class_six_girls'],
										'class' => 'form-control repeaters-girls-calc'
										)); ?>
									</div> 
								</td>

								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('repeaters_class_seven_girls', array(
										'class' => 'form-control repeaters-girls-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][repeaters_class_seven_girls]',
										'value' => $school2_enr['asc201516s_enrollments']['repeaters_class_seven_girls'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('repeaters_class_eight_girls', array(
										'class' => 'form-control repeaters-girls-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][repeaters_class_eight_girls]',
										'value' => $school2_enr['asc201516s_enrollments']['repeaters_class_eight_girls'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('repeaters_class_nine_girls', array(
										'class' => 'form-control repeaters-girls-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][repeaters_class_nine_girls]',
										'value' => $school2_enr['asc201516s_enrollments']['repeaters_class_nine_girls'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('repeaters_class_ten_girls', array(
										'class' => 'form-control repeaters-girls-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][repeaters_class_ten_girls]',
										'value' => $school2_enr['asc201516s_enrollments']['repeaters_class_ten_girls'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('repeaters_class_eleven_girls', array(
										'class' => 'form-control repeaters-girls-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][repeaters_class_eleven_girls]',
										'value' => $school2_enr['asc201516s_enrollments']['repeaters_class_eleven_girls'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('repeaters_class_twelve_girls', array(
										'class' => 'form-control repeaters-girls-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][repeaters_class_twelve_girls]',
										'value' => $school2_enr['asc201516s_enrollments']['repeaters_class_twelve_girls'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('repeaters_total_girls', array(
										'class' => 'form-control', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][repeaters_total_girls]',
										'value' => $school2_enr['asc201516s_enrollments']['repeaters_total_girls'],
										'label' => false,
										'readonly'
										)); ?> 
									</div>
								</td>				
							</tr>

						</table>
					</div>
					<!-- tables end!! -->
				</div>
				<p class="lead" id="total_enrollment_reference"></p>
			</div>

		</div>
	</div>

	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">17. Permanent Absent</h5>
			</div>
			<div class="panel-body">
				<div class="row">	
					<!-- PERMANENT ABSENT !-->				
					<div class="col-md-12">
						<table class="table table-condensed table-bordered smallfont-table" style='padding-left: 0; padding-right: 0; text-align:center;'>
							<tr>
								<th>Class</th>	
								<th>ECE</th>				
								<th>Katchi</th>
								<th>I</th>
								<th>II</th>
								<th>III</th>			
								<th>IV</th>
								<th>V</th>
								<th>VI</th>
								<th>VII</th>
								<th>VIII</th>
								<th>IX</th>
								<th>X</th>
								<th>XI</th>
								<th>XII</th>
								<th>Total</th>
							</tr>		

							<tr>
								<td>Boys</td>				
								<td>			
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_ece_boys_absentees', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_ece_boys_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_ece_boys_absentees'],
										'class' => 'form-control perm-abs-calc'
										)); ?>	
									</div>				
								</td>
								<td>			
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_katchi_boys_absentees', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_katchi_boys_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_katchi_boys_absentees'],
										'class' => 'form-control perm-abs-calc'
										)); ?>	
									</div>				
								</td>
								<td>			
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_one_boys_absentees', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_one_boys_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_one_boys_absentees'],
										'class' => 'form-control perm-abs-calc'
										)); ?>	
									</div>				
								</td>
								<td>			
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_two_boys_absentees', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_two_boys_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_two_boys_absentees'],
										'class' => 'form-control perm-abs-calc'
										)); ?>	
									</div>				
								</td>
								<td>			
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_three_boys_absentees', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_three_boys_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_three_boys_absentees'],
										'class' => 'form-control perm-abs-calc'
										)); ?>	
									</div>				
								</td>
								<td>			
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_four_boys_absentees', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_four_boys_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_four_boys_absentees'],
										'class' => 'form-control perm-abs-calc'
										)); ?>	
									</div>				
								</td>
								
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_five_boys_absentees', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_five_boys_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_five_boys_absentees'],
										'class' => 'form-control perm-abs-calc'
										)); ?>
									</div>
								</td>

								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_six_boys_absentees', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_six_boys_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_six_boys_absentees'],
										'class' => 'form-control perm-abs-calc'
										)); ?>
									</div> 
								</td>

								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_seven_boys_absentees', array(
										'class' => 'form-control perm-abs-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_seven_boys_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_seven_boys_absentees'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_eight_boys_absentees', array(
										'class' => 'form-control perm-abs-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_eight_boys_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_eight_boys_absentees'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_nine_boys_absentees', array(
										'class' => 'form-control perm-abs-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_nine_boys_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_nine_boys_absentees'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_ten_boys_absentees', array(
										'class' => 'form-control perm-abs-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_ten_boys_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_ten_boys_absentees'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_eleven_boys_absentees', array(
										'class' => 'form-control perm-abs-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_eleven_boys_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_eleven_boys_absentees'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_twelve_boys_absentees', array(
										'class' => 'form-control perm-abs-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_twelve_boys_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_twelve_boys_absentees'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_total_boys_absentees', array(
										'class' => 'form-control', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_total_boys_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_total_boys_absentees'],
										'label' => false,
										'readonly'
										)); ?> 
									</div>
								</td>			
							</tr>
							
							<tr>
								<td>Girls</td>
								<td>			
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_ece_girls_absentees', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_ece_girls_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_ece_girls_absentees'],
										'class' => 'form-control perm-abs-girls-calc'
										)); ?>	
									</div>				
								</td>
								<td>			
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_katchi_girls_absentees', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_katchi_girls_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_katchi_girls_absentees'],
										'class' => 'form-control perm-abs-girls-calc'
										)); ?>	
									</div>				
								</td>
								<td>			
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_one_girls_absentees', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_one_girls_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_one_girls_absentees'],
										'class' => 'form-control perm-abs-girls-calc'
										)); ?>	
									</div>				
								</td>
								<td>			
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_two_girls_absentees', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_two_girls_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_two_girls_absentees'],
										'class' => 'form-control perm-abs-girls-calc'
										)); ?>	
									</div>				
								</td>
								<td>			
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_three_girls_absentees', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_three_girls_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_three_girls_absentees'],
										'class' => 'form-control perm-abs-girls-calc'
										)); ?>	
									</div>				
								</td>
								<td>			
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_four_girls_absentees', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_four_girls_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_four_girls_absentees'],
										'class' => 'form-control perm-abs-girls-calc'
										)); ?>	
									</div>				
								</td>
								
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_five_girls_absentees', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_five_girls_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_five_girls_absentees'],
										'class' => 'form-control perm-abs-girls-calc'
										)); ?>
									</div>
								</td>

								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_six_girls_absentees', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_six_girls_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_six_girls_absentees'],
										'class' => 'form-control perm-abs-girls-calc'
										)); ?>
									</div> 
								</td>

								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_seven_girls_absentees', array(
										'class' => 'form-control perm-abs-girls-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_seven_girls_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_seven_girls_absentees'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_eight_girls_absentees', array(
										'class' => 'form-control perm-abs-girls-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_eight_girls_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_eight_girls_absentees'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_nine_girls_absentees', array(
										'class' => 'form-control perm-abs-girls-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_nine_girls_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_nine_girls_absentees'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_ten_girls_absentees', array(
										'class' => 'form-control perm-abs-girls-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_ten_girls_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_ten_girls_absentees'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_eleven_girls_absentees', array(
										'class' => 'form-control perm-abs-girls-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_eleven_girls_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_eleven_girls_absentees'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_class_twelve_girls_absentees', array(
										'class' => 'form-control perm-abs-girls-calc', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_class_twelve_girls_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_class_twelve_girls_absentees'],
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('perm_total_girls_absentees', array(
										'class' => 'form-control', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'data[asc201516s_enrollments][perm_total_girls_absentees]',
										'value' => $school2_enr['asc201516s_enrollments']['perm_total_girls_absentees'],
										'label' => false,
										'readonly'
										)); ?> 
									</div>
								</td>				
							</tr>

						</table>
					</div>
					<!-- tables end!! -->
					
				</div>
				<p class="lead" id="total_permabs_enrollment_reference"></p>
			</div>

		</div>
	</div>

	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">18. Is this Branch School? </h5>	
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-2">
						<?= $this->Form->input('sch_branched', array(
							'label'    => false,
							'options'  => array('0' => '0 = Choose', '1' => '1 = Yes', '2' => '2 = No'),
							'selected' => $school2['Asc201516']['sch_branched'],
							'class'    => 'form-control'
						)); ?>
					</div>
					<?php
						$branched = $school2['Asc201516']['sch_branched'];
						if($branched == 1){
							$style = "style='display: block;'";
							$state = "";
						}else{
							$style = "style='display: none;'";
							$state = "disabled";
						}
					?>
					<div class="form-group col-md-2" id='consolidated_main_school_name' <?= $style; ?>>
						<?= $this->Form->input('sch_branched_main_school_name', array(
							'label'      => 'Main School Name',
							'type'       => 'text',			
							'onkeypress' => 'return isAlphabetKey(event)',
							'value'      => $school2['Asc201516']['sch_branched_main_school_name'],
							'class'      => 'form-control',
							$state
						)); ?>
					</div>	
					<div class="form-group col-md-2" id='consolidated_main_school_semis' <?= $style; ?>>
						<?= $this->Form->input('sch_branched_main_school_semis', array(
							'label'          => 'Main School SEMIS Code',
							'type'           => 'text',			
							'maxlength'      => '9',
							'size'           => '9',	
							'data-toggle'    => 'tooltip',
							'data-placement' => 'right',
							'title'          => 'Should not be same as School\'s Semis Code',
							'onkeypress'     => 'return isNumberKey(event)',
							'value'          => $school2['Asc201516']['sch_branched_main_school_semis'],
							'class'          => 'form-control',
							$state
						)); ?>
					</div>	
				</div>
				
			</div>
		</div>	
	</div>

	<!-- Surrounding Schools TABLE !-->
	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">19. List of surrounding Government schools [Schools within same premises OR Adjacent schools OR where distance within 500 meters or half kilometer.]</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<table class="table table-condensed table-bordered" style='padding-left: 0; padding-right: 0; text-align:center;'>
							<tr>
								<th>S.No</th>
								<th>SEMIS Code</th>
								<th>School Name (Prefix + Name)</th>
								<th>Type of school<br><small>1=Same premises<br>2=Adjacent<br>3=Within 500meters</small></th>
								<th>Distance in meters</th>
							</tr>
							<tr>
								<td class="col-xs-1">1</td>
								<td class="col-xs-2">
									
										<?= $this->Form->input('asi_sch1_semis_code', array(
										'label'      => false,
										'type'       => 'text',
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength'  => '9',
										'size'       => '9',
										'value'      => $school2['Asc201516']['asi_sch1_semis_code'],
										'class'      => 'form-control'										
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch1_name', array(
										'label' => false,	
										'value' => $school2['Asc201516']['asi_sch1_name'],							
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td class="col-xs-1">
									
										<?= $this->Form->input('asi_sch1_type', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '1',
										'size' => '1',
										'value' => $school2['Asc201516']['asi_sch1_type'],
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td class="col-xs-1">
									
										<?= $this->Form->input('asi_sch1_distance', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '5',
										'size' => '5',
										'value' => $school2['Asc201516']['asi_sch1_distance'],
										'class' => 'form-control'
										)); ?>	
									
								</td>
							</tr>	
							<tr>
								<td>2</td>
								<td>
									
										<?= $this->Form->input('asi_sch2_semis_code', array(
										'label' => false,
										'type' => 'text',
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '9',
										'size' => '9',
										'value' => $school2['Asc201516']['asi_sch2_semis_code'],
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch2_name', array(
										'label' => false,	
										'value' => $school2['Asc201516']['asi_sch2_name'],						
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch2_type', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'value' => $school2['Asc201516']['asi_sch2_type'],
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch2_distance', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '5',
										'size' => '5',
										'value' => $school2['Asc201516']['asi_sch2_distance'],
										'class' => 'form-control'
										)); ?>	
									
								</td>
							</tr>
							<tr>
								<td>3</td>
								<td>
									
										<?= $this->Form->input('asi_sch3_semis_code', array(
										'label' => false,
										'type' => 'text',
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '9',
										'size' => '9',
										'value' => $school2['Asc201516']['asi_sch3_semis_code'],
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch3_name', array(
										'label' => false,	
										'value' => $school2['Asc201516']['asi_sch3_name'],		
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch3_type', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'value' => $school2['Asc201516']['asi_sch3_type'],
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch3_distance', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'value' => $school2['Asc201516']['asi_sch3_distance'],
										'class' => 'form-control'
										)); ?>	
									
								</td>
							</tr>
							<tr>
								<td>4</td>
								<td>
									
										<?= $this->Form->input('asi_sch4_semis_code', array(
										'label' => false,
										'type' => 'text',
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '9',
										'size' => '9',
										'value' => $school2['Asc201516']['asi_sch4_semis_code'],
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch4_name', array(
										'label' => false,	
										'value' => $school2['Asc201516']['asi_sch4_name'],		
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch4_type', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'value' => $school2['Asc201516']['asi_sch4_type'],
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch4_distance', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'value' => $school2['Asc201516']['asi_sch4_distance'],
										'class' => 'form-control'
										)); ?>	
									
								</td>
							</tr>							
										
						</table>			
					</div>
				</div>
			</div>			
		</div>		
	</div>

	<!-- Surrounding PPRS and Private Schools !-->
	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">20. Total No. of surrounding PPRS and Private schools [schools within same premises OR adjacent schools OR where distance within 1.5 kilometers.]</h5>
			</div>
			<div class="panel-body">
				<div class="row">				
					<div class="form-group col-md-2">
						<?= $this->Form->input('no_of_pprs_schools', array(
							'label'      => 'No. of PPRS Schools',							
							'maxlength'  => '4',
							'size'       => '4',
							'type'       => 'text',
							'onkeypress' => 'return isNumberKey(event)',
							'value'      => $school2['Asc201516']['no_of_pprs_schools'],
							'class'      => 'form-control'

							));
						?>		
					</div>
					<div class="form-group col-md-2">
						<?= $this->Form->input('no_of_pvt_schools', array(
							'label'      => 'No. of Private Schools',							
							'maxlength'  => '4',
							'size'       => '4',
							'type'       => 'text',
							'onkeypress' => 'return isNumberKey(event)',
							'value'      => $school2['Asc201516']['no_of_pvt_schools'],
							'class'      => 'form-control'

							));
						?>		
					</div>
					<div class="form-group col-md-2">
						<?= $this->Form->input('no_of_total_surrounding_schools', array(
							'label'     => 'Total Surrounding Schools',							
							'maxlength' => '4',
							'size'      => '4',
							'type'      => 'text',
							'value'     => $school2['Asc201516']['no_of_total_surrounding_schools'],
							'class'     => 'form-control',
							'readonly'

							));
						?>		
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">21. School total AREA in square feet</h5>
			</div>	
			<div class="panel-body">
				<div class="row">			
					<div class="form-group col-md-2">
						<?= $this->Form->input('corner1_coord_long', array(
							'label'      => 'Corner 1 Longitude (E)',
							'onkeypress' => 'return check_longitude(event)',
							'maxlength'  => '10',
							'value'      => $school2['Asc201516']['corner1_coord_long'],
							'class'      => 'form-control calc-area'
						)); 
						?>		
					</div>
					<div class="form-group col-md-2">
						<?= $this->Form->input('corner2_coord_long', array(
							'label'      => 'Corner 2 Longitude (E)',
							'onkeypress' => 'return check_longitude(event)',
							'maxlength'  => '10',
							'value'      => $school2['Asc201516']['corner2_coord_long'],
							'class'      => 'form-control calc-area'
						)); 
						?>		
					</div>
					<div class="form-group col-md-2">
						<?= $this->Form->input('corner3_coord_long', array(
							'label'      => 'Corner 3 Longitude (E)',
							'onkeypress' => 'return check_longitude(event)',
							'maxlength'  => '10',
							'value'      => $school2['Asc201516']['corner3_coord_long'],
							'class'      => 'form-control calc-area'
						)); 
						?>		
					</div>
					<div class="form-group col-md-2">
						<?= $this->Form->input('corner4_coord_long', array(
							'label'      => 'Corner 4 Longitude (E)',
							'onkeypress' => 'return check_longitude(event)',
							'maxlength'  => '10',
							'value'      => $school2['Asc201516']['corner4_coord_long'],
							'class'      => 'form-control calc-area'
						)); 
						?>		
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-2">
						<?= $this->Form->input('corner1_coord_lat', array(
							'label'      => 'Corner 1 Latitude (N)',
							'onkeypress' => 'return check_latitude(event)',
							'maxlength'  => '10',
							'value'      => $school2['Asc201516']['corner1_coord_lat'],
							'class'      => 'form-control calc-area'
						)); 
						?>		
					</div>
					<div class="form-group col-md-2">
						<?= $this->Form->input('corner2_coord_lat', array(
							'label'      => 'Corner 2 Latitude (N)',
							'onkeypress' => 'return check_latitude(event)',
							'maxlength'  => '10',
							'value'      => $school2['Asc201516']['corner2_coord_lat'],
							'class'      => 'form-control calc-area'
						)); 
						?>		
					</div>
					<div class="form-group col-md-2">
						<?= $this->Form->input('corner3_coord_lat', array(
							'label' => 'Corner 3 Latitude (N)',
							'onkeypress'  => 'return check_latitude(event)',
							'maxlength'   => '10',
							'value' => $school2['Asc201516']['corner3_coord_lat'],
							'class' => 'form-control calc-area'
						)); 
						?>		
					</div>
					<div class="form-group col-md-2">
						<?= $this->Form->input('corner4_coord_lat', array(
							'label' => 'Corner 4 Latitude (N)',
							'onkeypress'  => 'return check_latitude(event)',
							'maxlength'   => '10',
							'value' => $school2['Asc201516']['corner4_coord_lat'],
							'class' => 'form-control calc-area'
						)); 
						?>		
					</div>
					<div class="form-group col-md-2">
						<?= $this->Form->input('sch_total_area_covered', array(
							'label' => 'School Total Area in Square feet',
							'type' => 'text',
							'onkeypress' => 'return isNumberKey(event)',
							'value' => $school2['Asc201516']['sch_total_area_covered'],
							'class' => 'form-control'
						)); 
						?>		
					</div>
				</div>		
			</div>
		</div>
	</div>

	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">22. SEMIS Code displayed on visible location?</h5>
			</div>
			<div class="panel-body">
				<div class="row">				
					<div class="form-group col-md-2">
						<?= $this->Form->input('sch_semis_displayed', array(
							'label' => false,
							'options' => array('0' => '0 = Choose', '1' => '1 = Yes', '2' => '2 = No'),
							'selected' => $school2['Asc201516']['sch_semis_displayed'],
							'class' => 'form-control'
						)); 
						?>
					</div>	
				</div>			
			</div>
		</div>
	</div>

	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">23. Did the school receive <strong>Textbooks</strong> in last academic year?</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-2">
						<?= $this->Form->input('sch_textbooks_received', array(
							'label' => false,
							'options' => array('0' => '0 = Choose', '1' => '1 = Yes', '2' => '2 = No'),
							'selected' => $school2['Asc201516']['sch_textbooks_received'],
							'class' => 'form-control'
						)); 
						?>
					</div>	
				</div>			
			</div>
		</div>	
	</div>

	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">24. Any <strong>construction work</strong> in the last academic year?</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-2">
					<?= $this->Form->input('sch_construction_work', array(
						'label' => false,
						'options' => array('0' => '0 = Choose', '1' => '1 = Yes', '2' => '2 = No'),
						'selected' => $school2['Asc201516']['sch_construction_work'],
						'class' => 'form-control'
					)); 
					?>
					</div>	
				</div>
			</div>		
		</div>	
	</div>

	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">25. <strong>Girls' Stipend</strong></h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-12">
						<p class="lead">
							(a). Did the school receive <strong>Girls' Stipend</strong> in the last academic year?
						</p>
					</div>
					<div class="form-group col-md-2">
						<?= $this->Form->input('sch_received_girls_stipend', array(
							'label' => false,
							'options' => array('0' => '0 = Choose', '1' => '1 = Yes', '2' => '2 = No', '3' => '3 = Not Applicable'),
							'selected' => $school2['Asc201516']['sch_received_girls_stipend'],
							'class' => 'form-control'
						)); 
						?>
					</div>				
				</div>		
				<div class="row">
					<div class="form-group col-md-12">
						<p class="lead">
							<small>(b). for "Yes", write total number of Enrollment, Eligible &amp; Received Candidate.</small>
						</p>
					</div>
					<?php 
						$girlsStipend = $school2['Asc201516']['sch_received_girls_stipend'];
						if($girlsStipend == 1){							
							$state = "";
						}else{							
							$state = "disabled";
						}
					?>
					<div class="form-group col-md-1">
						<?= $this->Form->input('sch_received_girls_stipend_enrollment', array(
							'label' => 'Enrollment',
							'type' => 'text',
							'onkeypress' => 'return isNumberKey(event)',
							'value' => $school2['Asc201516']['sch_received_girls_stipend_enrollment'],
							'class' => 'form-control',
							$state

						)); 
						?>
					</div>
					<div class="form-group col-md-1">
						<?= $this->Form->input('sch_received_girls_stipend_eligible', array(
							'label' => 'Eligible',
							'type' => 'text',
							'onkeypress' => 'return isNumberKey(event)',
							'value' => $school2['Asc201516']['sch_received_girls_stipend_eligible'],
							'class' => 'form-control',
							$state
						)); 
						?>
					</div>	
					<div class="form-group col-md-1">
						<?= $this->Form->input('sch_received_girls_stipend_received', array(
							'label' => 'Received',
							'type' => 'text',
							'onkeypress' => 'return isNumberKey(event)',
							'value' => $school2['Asc201516']['sch_received_girls_stipend_received'],
							'class' => 'form-control',
							$state
						)); 
						?>
					</div>		
				</div>
			</div>
		</div>	
	</div>

	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">26. <strong>Upgraded to Next Level?</strong></h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-12">
						<p class="lead">
							(a). Has school <strong>Upgraded to Next Level</strong> in the last academic year?
						</p>
					</div>
					<div class="form-group col-md-2">
						<?= $this->Form->input('sch_upgraded', array(
							'label' => false,
							'options' => array('0' => '0 = Choose', '1' => '1 = Yes', '2' => '2 = No'),
							'selected' => $school2['Asc201516']['sch_upgraded'],
							'class' => 'form-control'
						)); 
						?>
					</div>	
				</div>				
				<div class="row">
					<div class="form-group col-md-12">
						<p class="lead">
							<small>(b). for "Yes", write the upgraded level.</small>
						</p>
					</div>
					<?php
						if($school2['Asc201516']['sch_upgraded'] == 1){
							$state = "";
						

							if($school2['Asc201516']['dsi_level'] == 1){
								$options = array(
									'2' => '2 = Middle', 
									'3' => '3 = Elementary', 
									'4' => '4 = Secondary', 
									'5' => '5 = Higher Secondary', 
									'9' => '9 = Primary with permission to run middle classes'
								);
							}else if ($school2['Asc201516']['dsi_level'] == 2){
								$options = array(								
									'3' => '3 = Elementary', 
									'4' => '4 = Secondary', 
									'5' => '5 = Higher Secondary', 
									'9' => '9 = Primary with permission to run middle classes'
								);
							}else if ($school2['Asc201516']['dsi_level'] == 3){
								$options = array(								
									'4' => '4 = Secondary', 
									'5' => '5 = Higher Secondary', 
									'9' => '9 = Primary with permission to run middle classes'
								);
							}else if ($school2['Asc201516']['dsi_level'] == 4){
								$options = array(								
									'5' => '5 = Higher Secondary', 
									'9' => '9 = Primary with permission to run middle classes'
								);
							}else if ($school2['Asc201516']['dsi_level'] == 5){
								$options = array(								
									'9' => '9 = Primary with permission to run middle classes'
								);
							}else if ($school2['Asc201516']['dsi_level'] == 9){
								$options = array(								
									'9' => '9 = Primary with permission to run middle classes'
								);
							}else{
								$options = array('' => 'Select Level First');
							}
						}else{
							$state = "disabled";
							$options = array();
						}
						
					?>
					<div class="form-group col-md-2">
						<?= $this->Form->input('sch_upgraded_level', array(
							'label' => false,
							//'type' => 'text',
							//'options' => array(),
							'options' => $options,
							'class' => 'form-control',							
							$state
						)); 
						?>
					</div>
				</div>
			</div>
		</div>	
	</div>

	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">27. Is this school <strong>Adopted</strong>?</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-2">
						<?= $this->Form->input('sch_adopted', array(
							'label' => false,
							'options' => array('0' => '0 = Choose', '1' => '1 = Yes', '2' => '2 = No'),
							'selected' => $school2['Asc201516']['sch_adopted'],
							'class' => 'form-control'
						)); 
						?>
					</div>						
				</div>	
				<?php
					$adopted = $school2['Asc201516']['sch_adopted'];
					if($adopted == 1){
						$style = "style='display:block;'";
						$state = "";
					}else{
						$style = "style='display:none;'";
						$state = "disabled";
					}
				?>
				<div class="row" id="adopter_name_div" <?= $style; ?>>
					<div class="form-group col-md-4">
						<?= $this->Form->input('sch_adopter_name', array(
							'label' => 'Adopter Name',
							'type' => 'text',
							'onkeypress' => 'return isAlphabetKey(event)',
							'value' => $school2['Asc201516']['sch_adopter_name'],
							'class' => 'form-control',
							$state
						)); 
						?>
					</div>	
				</div>
			</div>
		</div>	
	</div>

	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">28. What is the <strong>Cost Centre/DDO Code</strong> of this school?</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-2">
						<?= $this->Form->input('sch_cc_ddo_code', array(
							'label' => false,			
							'value' => $school2['Asc201516']['sch_cc_ddo_code'],
							'class' => 'form-control'
						)); 
						?>
					</div>	
				</div>			
			</div>
		</div>	
	</div>

	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">29. School Management Committee <strong>(SMC)</strong></h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-2">
						<?= $this->Form->input('smc_functional', array(
							'label' => 'a. Is SMC Functional?',			
							'options' => array('0' => '0 = Choose', '1' => '1 = Yes', '2' => '2 = No'),
							'selected' => $school2['Asc201516']['smc_functional'],
							'class' => 'form-control'
						)); 
						?>
					</div>	
					<div class="form-group col-md-4">
						<?= $this->Form->input('smc_funds_in_1516', array(
							'label' => 'b. Has this school got SMC Funds in 2015-16?',			
							'options' => array('0' => '0 = Choose', '1' => '1 = Yes', '2' => '2 = No'),
							'selected' => $school2['Asc201516']['smc_funds_in_1516'],
							'class' => 'form-control'
						)); 
						?>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-2">
						<?= $this->Form->input('smc_ac_title', array(
							'label' => 'c. SMC A/C Title',			
							'type' => 'text',
							'value' => $school2['Asc201516']['smc_ac_title'],
							'class' => 'form-control'
						)); 
						?>
					</div>
					<div class="form-group col-md-2">
						<?= $this->Form->input('smc_ac_no', array(
							'label' => 'd. SMC A/C No#',			
							'type' => 'text',
							'value' => $school2['Asc201516']['smc_ac_no'],
							'class' => 'form-control'
						)); 
						?>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-2">
						<?= $this->Form->input('smcbanknames', array(
							'label' => 'e. Bank Name',										
							'selected' => $school2['Asc201516']['smc_bank_name'],
							'name' => 'data[Asc201516][smc_bank_name]',
							'class' => 'form-control'
						)); 
						?>
					</div>
					<div class="form-group col-md-4">
						<?= $this->Form->input('smc_bank_branch_and_code', array(
							'label' => 'f. Name of Branch and Branch Code',			
							'type' => 'text',
							'value' => $school2['Asc201516']['smc_bank_branch_and_code'],
							'class' => 'form-control'
						)); 
						?>
					</div>
				</div>	
			</div>
		</div>	
	</div>
	<div class="row">
	<div class="col-md-6">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">30. Write Total No. of following facilities in the School</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<table class="table table-condensed table-bordered" style="padding-left: 0; padding-right: 0; text-align: left;">
							<tr>
								<th>Items</th>
								<th class="col-md-3">Working</th>
								<th class="col-md-3">Repairable</th>
							</tr>
							<tr>
								<td>a. Blackboards</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_blackboards', array(
											'label' => false,
											'type' => 'text',
											'onkeypress' => 'return isNumberKey(event)',
											'value' => $school2['Asc201516']['facility_blackboards'],
											'class' => 'form-control'
										)); 
										?>	
									</div>
									
								</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_blackboards_repairable', array(
											'label' => false,
											'type' => 'text',
											'onkeypress' => 'return isNumberKey(event)',
											'value' => $school2['Asc201516']['facility_blackboards_repairable'],
											'class' => 'form-control'
										)); 
										?>	
									</div>
								</td>
							</tr>
							<tr>
								<td>b. Student Chairs</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_student_chairs', array(
											'label' => false,
											'type' => 'text',
											'onkeypress' => 'return isNumberKey(event)',
											'value' => $school2['Asc201516']['facility_student_chairs'],
											'class' => 'form-control'
										)); 
										?>	
									</div>
									
								</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_student_chairs_repairable', array(
											'label' => false,
											'type' => 'text',
											'onkeypress' => 'return isNumberKey(event)',
											'value' => $school2['Asc201516']['facility_student_chairs_repairable'],
											'class' => 'form-control'
										)); 
										?>	
									</div>
								</td>
							</tr>
							<tr>
								<td>c. Student Desks/Student Benches</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_student_desks_benches', array(
											'label' => false,
											'type' => 'text',
											'onkeypress' => 'return isNumberKey(event)',
											'value' => $school2['Asc201516']['facility_student_desks_benches'],
											'class' => 'form-control'
										)); 
										?>	
									</div>
									
								</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_student_desks_benches_repairable', array(
											'label' => false,
											'type' => 'text',
											'onkeypress' => 'return isNumberKey(event)',
											'value' => $school2['Asc201516']['facility_student_desks_benches_repairable'],
											'class' => 'form-control'
										)); 
										?>	
									</div>
								</td>
							</tr>
							<tr>
								<td>d. Teacher Chairs</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_teacher_chairs', array(
											'label' => false,
											'type' => 'text',
											'onkeypress' => 'return isNumberKey(event)',
											'value' => $school2['Asc201516']['facility_teacher_chairs'],
											'class' => 'form-control'
										)); 
										?>	
									</div>
									
								</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_teacher_chairs_repairable', array(
											'label' => false,
											'type' => 'text',
											'onkeypress' => 'return isNumberKey(event)',
											'value' => $school2['Asc201516']['facility_teacher_chairs_repairable'],
											'class' => 'form-control'
										)); 
										?>	
									</div>
								</td>
							</tr>
							<tr>
								<td>e. Teacher Tables</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_teacher_tables', array(
											'label' => false,
											'type' => 'text',
											'onkeypress' => 'return isNumberKey(event)',
											'value' => $school2['Asc201516']['facility_teacher_tables'],
											'class' => 'form-control'
										)); 
										?>	
									</div>
									
								</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_teacher_tables_repairable', array(
											'label' => false,
											'type' => 'text',
											'onkeypress' => 'return isNumberKey(event)',
											'value' => $school2['Asc201516']['facility_teacher_tables_repairable'],
											'class' => 'form-control'
										)); 
										?>	
									</div>
								</td>
							</tr>
							<tr>
								<td>f. Electric Fans</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_electric_fans', array(
											'label' => false,
											'type' => 'text',
											'onkeypress' => 'return isNumberKey(event)',
											'value' => $school2['Asc201516']['facility_electric_fans'],
											'class' => 'form-control'
										)); 
										?>	
									</div>
									
								</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_electric_fans_repairable', array(
											'label' => false,
											'type' => 'text',
											'onkeypress' => 'return isNumberKey(event)',
											'value' => $school2['Asc201516']['facility_electric_fans_repairable'],
											'class' => 'form-control'
										)); 
										?>	
									</div>
								</td>
							</tr>
							<tr>
								<td>g. Almirahs</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_almirahs', array(
											'label' => false,
											'type' => 'text',
											'onkeypress' => 'return isNumberKey(event)',
											'value' => $school2['Asc201516']['facility_almirahs'],
											'class' => 'form-control'
										)); 
										?>	
									</div>
									
								</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_almirahs_repairable', array(
											'label' => false,
											'type' => 'text',
											'onkeypress' => 'return isNumberKey(event)',
											'value' => $school2['Asc201516']['facility_almirahs_repairable'],
											'class' => 'form-control'
										)); 
										?>	
									</div>
								</td>
							</tr>							
							<tr>
								<td>h. Computers</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_computers', array(
											'label' => false,
											'type' => 'text',
											'onkeypress' => 'return isNumberKey(event)',
											'value' => $school2['Asc201516']['facility_computers'],
											'class' => 'form-control'
										)); 
										?>	
									</div>
									
								</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_computers_repairable', array(
											'label' => false,
											'type' => 'text',
											'onkeypress' => 'return isNumberKey(event)',
											'value' => $school2['Asc201516']['facility_computers_repairable'],
											'class' => 'form-control'
										)); 
										?>	
									</div>
								</td>
							</tr>
							<tr>
								<td>i. Water pump (Electric Motor)</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_electric_waterpump', array(
											'label' => false,
											'type' => 'text',
											'onkeypress' => 'return isNumberKey(event)',
											'value' => $school2['Asc201516']['facility_electric_waterpump'],
											'class' => 'form-control'
										)); 
										?>	
									</div>
									
								</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_electric_waterpump_repairable', array(
											'label' => false,
											'type' => 'text',
											'onkeypress' => 'return isNumberKey(event)',
											'value' => $school2['Asc201516']['facility_electric_waterpump_repairable'],
											'class' => 'form-control'
										)); 
										?>	
									</div>
								</td>
							</tr>
							<tr>
								<td>j. Charts</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_charts', array(
											'label' => false,
											'type' => 'text',
											'onkeypress' => 'return isNumberKey(event)',
											'value' => $school2['Asc201516']['facility_charts'],
											'class' => 'form-control'
										)); 
										?>	
									</div>
									
								</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_charts_repairable', array(
											'label' => false,
											'type' => 'text',
											'onkeypress' => 'return isNumberKey(event)',
											'value' => $school2['Asc201516']['facility_charts_repairable'],
											'class' => 'form-control'
										)); 
										?>	
									</div>
								</td>
							</tr>						
						</table>
					</div>			
				</div>			
			</div>
		</div>	
	</div>

	<div class="col-md-6">	
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">31. Write the details of the following facilities in the School:</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<table class="table table-bordered" style="padding-left: 0; padding-right: 0; text-align: left;">
									<tr>
										<th>Question</th>
										<th>Response</th>				
									</tr>
									<tr>
										<td>a. Computer Lab</td>
										<td>
											<div class="col-xs-12">
												<?= $this->Form->input('facility_computer_lab', array(
													'label' => false,
													'options' => array(
														'0' => '0 = Choose', 
														'1' => '1 = Available and Functional',
														'2' => '2 = Available but not Functional',
														'3' => '3 = Not Available'),
													'selected' => $school2['Asc201516']['facility_computer_lab'],
													'class' => 'form-control'
												)); 
												?>	
											</div>					
										</td>
									</tr>									
									<tr>
										<td>b. Science Lab</td>
										<td>
											<div class="col-xs-12">
												<?= $this->Form->input('facility_science_lab', array(
													'label' => false,
													'options' => array(
														'0' => '0 = Choose', 
														'1' => '1 = Available and Functional',
														'2' => '2 = Available but not Functional',
														'3' => '3 = Not Available'),
													'selected' => $school2['Asc201516']['facility_science_lab'],
													'class' => 'form-control'
												)); 
												?>	
											</div>					
										</td>		
									</tr>
									<tr>
										<td>c. Home Economics Lab</td>
										<td>
											<div class="col-xs-12">
												<?= $this->Form->input('facility_home_economics_lab', array(
													'label' => false,
													'options' => array(
														'0' => '0 = Choose', 
														'1' => '1 = Available and Functional',
														'2' => '2 = Available but not Functional',
														'3' => '3 = Not Available'),
													'selected' => $school2['Asc201516']['facility_home_economics_lab'],
													'class' => 'form-control'
												)); 
												?>	
											</div>					
										</td>			
									</tr>
									<tr>
										<td>d. Library</td>
										<td>
											<div class="col-xs-12">
												<?= $this->Form->input('facility_library', array(
													'label' => false,
													'options' => array(
														'0' => '0 = Choose', 
														'1' => '1 = Available and Functional',
														'2' => '2 = Available but not Functional',
														'3' => '3 = Not Available'),
													'selected' => $school2['Asc201516']['facility_library'],
													'class' => 'form-control'
												)); 
												?>	
											</div>					
										</td>				
									</tr>
									<tr>
										<td>e. Playground</td>
										<td>
											<div class="col-xs-12">
												<?= $this->Form->input('facility_playground', array(
													'label' => false,
													'options' => array(
														'0' => '0 = Choose', 
														'1' => '1 = Available and Functional',
														'2' => '2 = Available but not Functional',
														'3' => '3 = Not Available'),
													'selected' => $school2['Asc201516']['facility_playground'],
													'class' => 'form-control'
												)); 
												?>	
											</div>					
										</td>	
									</tr>
									<tr>
										<td>f. Medical/First Aid Box</td>
										<td>
											<div class="col-xs-12">
												<?= $this->Form->input('facility_medical_aid_box', array(
													'label' => false,
													'options' => array(
														'0' => '0 = Choose', 
														'1' => '1 = Available and Functional',
														'2' => '2 = Available but not Functional',
														'3' => '3 = Not Available'),
													'selected' => $school2['Asc201516']['facility_medical_aid_box'],
													'class' => 'form-control'
												)); 
												?>	
											</div>					
										</td>		
									</tr>
									<tr>
										<td>g. Sports Equipments</td>
										<td>
											<div class="col-xs-12">
												<?= $this->Form->input('facility_sports_equipments', array(
													'label' => false,
													'options' => array(
														'0' => '0 = Choose', 
														'1' => '1 = Available and Functional',
														'2' => '2 = Available but not Functional',
														'3' => '3 = Not Available'),
													'selected' => $school2['Asc201516']['facility_sports_equipments'],
													'class' => 'form-control'
												)); 
												?>	
											</div>					
										</td>
									</tr>						
						</table>			
					</div>	
				</div>
		  	</div>
		</div>	
	</div>
	</div>
</div>

<!-- ======================================== PAGE 3 ========================================= -->

<div id="page3" class="hide">
	<div class="row" style="margin-left: -100px; width: 120%;">	
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">32. Teachers (Write details of teachers who are working in this school) [Please note: The Codes of Q No. 31, see Page #4]</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
					<!--<a type="button" href="javascript:teachers_add(id);" class="teachers_add">Add Another Teacher Details</a>-->
						<p id="total_teachers_reference2">Total teachers Fetched = <?= count($school2_t); ?></p>
						<p id="total_teachers_reference">Total teachers Mentioned on Page1 (Q14.a) = <?=  $school2['Asc201516']['sti_total_teachers']; ?></p>
						<button type="button" id="addrow" class="btn btn-primary" onclick="addRow2('teachers_table')">Add Teacher</button>
						<a id="deleterow" class="btn btn-primary" onclick="deleteRow('teachers_table')">Delete Teacher</a>
						<table id="teachers_table" class="table table-condensed smallfont-table">
							<thead class="noleftmargin">
								
								<th>?</th>
								<th>Full Name<br>1</th>
								<th>CNIC Number<br>2</th>
								<th>Gender<br>3</th>
								<th>Personnel Number from AG office<br>4</th>
								<th>D.O.B<br>(YYYY-MM-DD)<br>5</th>
								<th>Designation<br>6</th>
								<th>BPS (when appointed)<br>7</th>									
								<th>BPS (Time Scale)<br>8</th>
								<th>BS (Actual Scale)<br>9</th>
								<th>Date of Entry in this Govt. Service<br>(YYYY-MM-DD)<br>10</th>
								<th>Type of Post<br>11</th>								
								<th>Highest Academic Qualification<br>12</th>
								<th>Profe<br>ssional Trai<br>ning<br>13</th>
								<th>On Detailment<br>14</th>
								<th>Contact no#<br>15</th>
								<th>Subject <br>Speciali-<br>zation</th>
								
							</thead>
							<tbody class="noleftmargin">
							<?php foreach ($school2_t as $key => $value) {
																			
							?>
							
								<tr>
									<td class="col-xs-2">
										<input type="checkbox" name="chk[]" />
									</td>
									<td class="col-xs-2">
										<?= $this->Form->input('teachers[]', array(
										'label' => false,
										'type' => 'text',																
										'onkeypress' => 'return isAlphabetKey(event)',
										'value' => $value['asc201516s_teachers']['teachers_name'],
										'name' => 'data[asc201516s_teachers][teachers_name][]'
										//'style' => 'width: 100%'
										//'class' => 'form-control'
										)); 
										?>
									</td>
									<td>
										<?= $this->Form->input('teachers_cnic[]', array(
										'label' => false,
										'type' => 'text',
										'maxlength' => '15',
										'size' => '15',
										'onkeypress' => 'return isNumberKey(event)',
										'name' => 'data[asc201516s_teachers][teachers_cnic][]',
										'value' => $value['asc201516s_teachers']['teachers_cnic'],
										'id' => 'teachers_cnic'
										//'class' => 'form-control'
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('teachers_gender[]', array(
										'label' => false,
										'options' => array('1' => 'M', '2' => 'F'),
										'name' => 'data[asc201516s_teachers][teachers_gender][]',
										'selected' => $value['asc201516s_teachers']['teachers_gender']
										//'class' => 'form-control'
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('teachers_personnel[]', array(
										'label' => false,
										'type' => 'text',
										'maxlength' => '9',
										'size' => '9',								
										//'onkeypress' => 'return isNumberKey(event)',
										'name' => 'data[asc201516s_teachers][teachers_personnel][]',
										'value' => $value['asc201516s_teachers']['teachers_personnel'],
										//'class' => 'form-control'
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('teachers_dob[]', array(
										'label'       => false,
										'type'        => 'text',
										'maxlength'   => '11',
										'size'        => '11',
										'onkeypress'  => 'return isNumberKey(event)',
										'id'          => 'teachers_dob2',
										'name'        => 'data[asc201516s_teachers][teachers_dob][]',
										'value'       => $value['asc201516s_teachers']['teachers_dob'],
										'placeholder' => 'YYYY-MM-DD',
										'class'       => 'datepick2'
										//'style' => 'background: #FFF; cursor: pointer;',
										//'class' => 'datepicker_recurring_start'
										//'readonly'										
										//'class' => 'form-control'
										)); 
										?>
									</td>									
									<td >
										<?= $this->Form->input('teachers_designation[]', array(
										'label' => false,								
										'type' => 'text',
										'maxlength' => '2',
										'size' => '2',
										'onkeypress' => 'return isNumberKey(event)',
										'name' => 'data[asc201516s_teachers][teachers_designation][]',
										'value' => $value['asc201516s_teachers']['teachers_designation'],
										'style' => 'width: 100%;'
										//'class' => 'form-control'
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('teachers_appointment_bps[]', array(
										'label' => false,
										'type' => 'text',
										'maxlength' => '2',
										'size' => '2',
										'onkeypress' => 'return isNumberKey(event)',
										'id' => 'appointment_bps',
										'name' => 'data[asc201516s_teachers][teachers_appointment_bps][]',
										'value' => $value['asc201516s_teachers']['teachers_appointment_bps']
										//'style' => 'width: 80%;'
										
										//'class' => 'form-control'
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('teachers_time_scale_bps[]', array(
										'label' => false,
										'type' => 'text',
										'maxlength' => '2',
										'size' => '2',
										'id' => 'timescale_bps',
										'name' => 'data[asc201516s_teachers][teachers_time_scale_bps][]',
										'value' => $value['asc201516s_teachers']['teachers_time_scale_bps'],
										'onkeypress' => 'return isNumberKey(event)'
										//'class' => 'form-control'
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('teachers_actual_scale_bps[]', array(
										'label' => false,
										'type' => 'text',
										'maxlength' => '2',
										'size' => '2',
										'id' => 'actualscale_bps',
										'onkeypress' => 'return isNumberKey(event)',
										'name' => 'data[asc201516s_teachers][teachers_actual_scale_bps][]',
										'value' => $value['asc201516s_teachers']['teachers_actual_scale_bps']
										//'class' => 'form-control'
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('teachers_doe[]', array(
										'label' => false,
										'maxlength' => '11',
										'size' => '11',
										'id' => 'teachers_doe2',
										'placeholder' => 'YYYY-MM-DD',
										//'style' => 'background: #FFF; cursor: pointer;',
										'name' => 'data[asc201516s_teachers][teachers_doe][]',
										'value' => $value['asc201516s_teachers']['teachers_doe'],
										'class' => 'datepick2'
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('teachers_post_type[]', array(
										'label' => false,
										'type' => 'text',
										'maxlength' => '2',
										'size' => '2',
										'onkeypress' => 'return isNumberKey(event)',
										'name' => 'data[asc201516s_teachers][teachers_post_type][]',
										'value' => $value['asc201516s_teachers']['teachers_post_type']
										//'class' => 'form-control'
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('teachers_highest_qualification[]', array(
										'label' => false,
										'type' => 'text',
										'maxlength' => '3',
										'size' => '3',
										'onkeypress' => 'return isNumberKey(event)',
										'style' => 'width: 100%;',
										'name' => 'data[asc201516s_teachers][teachers_highest_qualification][]',
										'value' => $value['asc201516s_teachers']['teachers_highest_qualification']
										//'class' => 'form-control'
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('teachers_professional_training[]', array(
										'label' => false,
										'type' => 'text',
										'maxlength' => '1',
										'size' => '1',
										'onkeypress' => 'return isNumberKey(event)',
										'style' => 'width: 100%;',
										'name' => 'data[asc201516s_teachers][teachers_professional_training][]',
										'value' => $value['asc201516s_teachers']['teachers_professional_training']
										//'class' => 'form-control'
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('teachers_detailment[]', array(
										'label' => false,
										'type' => 'text',
										'maxlength' => '1',
										'size' => '1',
										'onkeypress' => 'return isNumberKey(event)',
										'style' => 'width: 100%;',
										'name' => 'data[asc201516s_teachers][teachers_detailment][]',
										'value' => $value['asc201516s_teachers']['teachers_detailment']
										//'class' => 'form-control'
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('teachers_contact[]', array(
										'label'      => false,		
										'type'       => 'text',						
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength'  => '11',
										'size'       => '11',
										'id'         => 'teachers_contact',
										'name'       => 'data[asc201516s_teachers][teachers_contact][]',
										'value'      => $value['asc201516s_teachers']['teachers_contact']
										//'class'    => 'form-control'
										)); 
										?>
									</td>
									<td>
										<?= $this->Form->input('teachers_subspec[]', array(
										'label'      => false,		
										'type'       => 'text',						
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength'  => '1',
										'size'       => '1',
										'id'         => 'teachers_subspec',
										'name'       => 'data[asc201516s_teachers][teachers_subspec][]',
										'value'      => $value['asc201516s_teachers']['teachers_subspec']
										//'class'    => 'form-control'
										)); 
										?>
									</td>									
								</tr>
								

								<?php }?>																
							</tbody>
							
						</table>	
					</div>				
				</div>	
			</div>
		</div>	
	</div>	
	<?php if(null != $campuses){ ?>
	<div class="row" style="margin-left: -84px; width: 146%;">	
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">Proforma for School Consolidation</h5>
				
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
					<!--<a type="button" href="javascript:teachers_add(id);" class="teachers_add">Add Another Teacher Details</a>-->
						<p id="total_teachers_reference"></p>
						
						<table id="merge_schools_table" class="table table-condensed table-bordered">
							<tr>								
								<th rowspan="3">?</th>
								<th rowspan="3">School Name &amp; Prefix</th>
								<th rowspan="3">SEMIS ID</th>
								<th rowspan="3">Type of School</th>
								<th rowspan="3">Type of Merging</th>
								<th rowspan="3">Status of School</th>
								<th rowspan="3">School Building</th>
								<th rowspan="3">Shift</th>									
								<th rowspan="3">Level</th>
								<th rowspan="3">Medium</th>
								<th rowspan="3">Gender</th>
								<th rowspan="3">DDO/Cost Center</th>
								<th rowspan="1" colspan="3">Total No. of teaching Staff</th>
								<th rowspan="1" colspan="2">Total No. of Non-Teaching Staff</th>
								<th colspan="6">Students Enrollment<br>14</th>
								<th rowspan="3">Total <br>No. <br>of <br>Rooms</th>
								<th rowspan="3">Total <br>No. <br>of <br> Class <br>rooms</th>
								<th rowspan="1" colspan="4">Basic Facilities</th>								
								
							</tr>
							<tr>								
								<th rowspan="2">Male</th>
								<th rowspan="2">Female</th>
								<th rowspan="2">Vacant</th>
								<th rowspan="2">Male</th>
								<th rowspan="2">Female</th>

								<th colspan="2">ECE</th>
								<th colspan="2">Katchi</th>
								<th colspan="2">1-12 Classes</th>								

								<th rowspan="2">Condition <br>of <br>Boundary <br>Wall</th>
								<th rowspan="2">Wash<br>rooms</th>
								<th rowspan="2">Drinking<br>Water</th>
								<th rowspan="2">Electricity</th>
							</tr>
							
							<tr>
								<th>Boys</th>
								<th>Girls</th>
								<th>Boys</th>
								<th>Girls</th>
								<th>Boys</th>
								<th>Girls</th>
							</tr>
							<tbody class="noleftmargin">
							<?php 							
							foreach ($campuses as $key => $value) { 
							?>

								<tr>
								<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.campus_id', array('type' => 'hidden', 'value' => $value['asc201516s_consolidations']['campus_id'])); ?>

									<td class="col-xs-2">
										<?= $key; ?>
									</td>
									<td class="col-xs-2">
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.bi_school_name', array(
										'label'      => false,
										'type'       => 'text',		
										'value'      => $value['asc201516s_consolidations']['bi_school_name'],	
										'onkeypress' => 'return isAlphabetKey(event)',
										'readonly'
										)); 
										?>
									</td>
									<td>
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.school_semis_new', array(
										'label'      => false,
										'type'       => 'text',
										'maxlength'  => '9',
										'size'       => '9',
										'value'      => $value['asc201516s_consolidations']['school_semis_new'],
										'onkeypress' => 'return isNumberKey(event)',
										'readonly'
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.asi_school_type', array(
										'label'   => false,										
										'options' => array('1' => '1', '2' => '2'),
										'selected' => $value['asc201516s_consolidations']['asi_school_type']
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.asi_school_merging_type', array(
										'label'   => false,
										'options' => array('1' => '1', '2' => '2', '3' => '3'),
										'selected' => $value['asc201516s_consolidations']['asi_school_merging_type']
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.ss_status', array(
										'label'   => false,
										'options' => array('1' => '1', '2' => '2', '3' => '3'),
										'selected' => $value['asc201516s_consolidations']['ss_status']										
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.sbi_ownership', array(
										'label'   => false,								
										'options' => array(
											'1' => '1',
											'2' => '2',
											'3' => '3',
											'4' => '4',
											'5' => '5'
											),
										'selected' => $value['asc201516s_consolidations']['sbi_ownership']
										)); 
										?>
									</td>
									<td id="app_bps" >
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.dsi_sch_shift', array(
										'label'   => false,
										'options' => array('1' => '1', '2' => '2', '3' => '3'),
										'selected' => $value['asc201516s_consolidations']['dsi_sch_shift']
										)); 
										?>
									</td>									
									<td >
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.dsi_level', array(
										'label'      => false,
										'options' => array(
											'1' => '1',
											'2' => '2',
											'3' => '3',
											'4' => '4',
											'5' => '5',
											),
										'selected' => $value['asc201516s_consolidations']['dsi_level']
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.dsi_sch_medium', array(
										'label' => false,
										'options' => array(
											'1' => '1',
											'2' => '2',
											'3' => '3',
											'4' => '4'
											),
										'selected' => $value['asc201516s_consolidations']['dsi_sch_medium']
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.dsi_sch_gender', array(
										'label' => false,
										'options' => array(
											'1' => '1',
											'2' => '2',
											'3' => '3'
											),
										'selected' => $value['asc201516s_consolidations']['dsi_sch_gender']
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.sch_cc_ddo_code', array(
										'label'     => false,
										'type'      => 'text',
										'maxlength' => '7',
										'size'      => '4',
										'value'      => $value['asc201516s_consolidations']['sch_cc_ddo_code'],
										)); 
										?>
									</td>
									<td >									
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.sti_govt_male', array(
										'label'      => false,
										'type'       => 'text',
										'maxlength'  => '3',
										'size'       => '1',
										'onkeypress' => 'return isNumberKey(event)',
										'value'      => $value['asc201516s_consolidations']['sti_govt_male'],
										)); 
										?>
									</td>
									<td >									
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.sti_govt_female', array(
										'label'      => false,
										'type'       => 'text',
										'maxlength'  => '3',
										'size'       => '1',
										'onkeypress' => 'return isNumberKey(event)',
										'value'      => $value['asc201516s_consolidations']['sti_govt_female'],
										)); 
										?>
									</td>
									<td >									
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.sti_govt_vacant', array(
										'label'      => false,
										'type'       => 'text',
										'maxlength'  => '3',
										'size'       => '1',
										'onkeypress' => 'return isNumberKey(event)',
										'value'      => $value['asc201516s_consolidations']['sti_govt_vacant'],
										)); 
										?>
									</td>
									<td >									
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.sti_nonteaching_male', array(
										'label'      => false,
										'type'       => 'text',
										'maxlength'  => '3',
										'size'       => '1',
										'onkeypress' => 'return isNumberKey(event)',
										'value'      => $value['asc201516s_consolidations']['sti_nonteaching_male'],
										)); 
										?>
									</td>
									<td >									
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.sti_nonteaching_female', array(
										'label'      => false,
										'type'       => 'text',
										'maxlength'  => '3',
										'size'       => '1',
										'onkeypress' => 'return isNumberKey(event)',
										'value'      => $value['asc201516s_consolidations']['sti_nonteaching_female'],
										)); 
										?>
									</td>
									<td >									
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.ece_total_boys_enrollment', array(
										'label'      => false,
										'type'       => 'text',
										'maxlength'  => '3',
										'size'       => '1',
										'onkeypress' => 'return isNumberKey(event)',
										'value'      => $value['asc201516s_consolidations']['ece_total_boys_enrollment'],
										)); 
										?>
									</td>
									<td >									
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.katchi_total_boys_enrollment', array(
										'label'      => false,
										'type'       => 'text',
										'maxlength'  => '3',
										'size'       => '1',
										'onkeypress' => 'return isNumberKey(event)',
										'value'      => $value['asc201516s_consolidations']['katchi_total_boys_enrollment'],
										)); 
										?>
									</td>
									<td >									
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.onetotwelve_total_boys_enrollment', array(
										'label'      => false,
										'type'       => 'text',
										'maxlength'  => '3',
										'size'       => '1',
										'onkeypress' => 'return isNumberKey(event)',
										'value'      => $value['asc201516s_consolidations']['onetotwelve_total_boys_enrollment'],
										)); 
										?>
									</td>
									<td >									
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.ece_total_girls_enrollment', array(
										'label'      => false,
										'type'       => 'text',
										'maxlength'  => '3',
										'size'       => '1',
										'onkeypress' => 'return isNumberKey(event)',
										'value'      => $value['asc201516s_consolidations']['ece_total_girls_enrollment'],
										)); 
										?>
									</td>
									<td >									
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.katchi_total_girls_enrollment', array(
										'label'      => false,
										'type'       => 'text',
										'maxlength'  => '3',
										'size'       => '1',
										'onkeypress' => 'return isNumberKey(event)',
										'value'      => $value['asc201516s_consolidations']['katchi_total_girls_enrollment'],
										)); 
										?>
									</td>
									<td >									
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.onetotwelve_total_girls_enrollment', array(
										'label'      => false,
										'type'       => 'text',
										'maxlength'  => '3',
										'size'       => '1',
										'onkeypress' => 'return isNumberKey(event)',
										'value'      => $value['asc201516s_consolidations']['onetotwelve_total_girls_enrollment'],
										)); 
										?>
									</td>
									<td >									
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.sbi_school_building_total_rooms', array(
										'label'      => false,
										'type'       => 'text',
										'maxlength'  => '3',
										'size'       => '1',
										'onkeypress' => 'return isNumberKey(event)',
										'value'      => $value['asc201516s_consolidations']['sbi_school_building_total_rooms'],
										)); 
										?>
									</td>
									<td >									
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.sbi_school_building_class_rooms', array(
										'label'      => false,
										'type'       => 'text',
										'maxlength'  => '3',
										'size'       => '1',
										'onkeypress' => 'return isNumberKey(event)',
										'value'      => $value['asc201516s_consolidations']['sbi_school_building_class_rooms'],
										)); 
										?>
									</td>
									<td >									
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.bfi_school_boundarywall', array(
										'label'      => false,
										'options' => array(
											'1' => '1',
											'2' => '2',
											'3' => '3',
											'4' => '4',
											'5' => '5'
											),
										'selected' => $value['asc201516s_consolidations']['bfi_school_boundarywall']
										)); 
										?>
									</td>
									<td >									
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.bfi_school_washroom', array(
										'label'      => false,
										'options' => array(
											'1' => '1',
											'2' => '2'											
											),
										'selected' => $value['asc201516s_consolidations']['bfi_school_washroom']
										)); 
										?>
									</td>
									<td >									
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.bfi_school_waterfacility', array(
										'label'      => false,
										'options' => array(
											'1' => '1',
											'2' => '2'											
											),
										'selected' => $value['asc201516s_consolidations']['bfi_school_waterfacility']
										)); 
										?>
									</td>
									<td >									
										<?= $this->Form->input('Asc201516sConsolidation.'.$key.'.bfi_school_electricity', array(
										'label'      => false,
										'options' => array(
											'1' => '1',
											'2' => '2'
											),
										'selected' => $value['asc201516s_consolidations']['bfi_school_electricity']
										)); 
										?>
									</td>								
								</tr>





							<?php
							}
							
							?>
																								
							</tbody>
							
						</table>	
					</div>				
				</div>	
			</div>
		</div>	
	</div>
	<?php } ?>

	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">33. Pictures </h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-4">
						<?= $this->Form->input('upload1', array(
							'label' => 'School Image', 
							'type'  =>'file', 
							'name'  => 'data[File][school_img]',
							'value' => $school2['Asc201516']['school_img'],
							'class' => 'form-control'
						));?>

						<?= $this->Form->input('upload2', array(
							'label' => 'Boundary Wall Facility', 
							'type'  =>'file', 
							'name'  => 'data[File][facility_boundary_wall_img]',
							'value' => $school2['Asc201516']['facility_boundarywall_img'],
							'class' => 'form-control'
						)); ?>

						<?= $this->Form->input('upload3', array(
							'label' => 'Drinking Water Facility', 
							'type'  =>'file', 
							'name'  => 'data[File][facility_drinkingwater_img]',
							'value' => $school2['Asc201516']['facility_drinkingwater_img'],
							'class' => 'form-control'
						)); ?>

						<?= $this->Form->input('upload4', array(
							'label' => 'Electricity Facility', 
							'type'  =>'file', 
							'name'  => 'data[File][facility_electricity_img]',
							'value' => $school2['Asc201516']['facility_electricity_img'],
							'class' => 'form-control'
						)); ?>

						<?= $this->Form->input('upload5', array(
							'label' => 'Washrooms Facility', 
							'type'  =>'file', 
							'name'  => 'data[File][facility_washrooms_img]',
							'value' => $school2['Asc201516']['facility_washrooms_img'],
							'class' => 'form-control'
						)); ?>						
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</div>


	<button type="button" id="btnpage11" tabindex="0" class="btn btn-primary">Page 1</button>
	<button type="button" id="btnpage21" tabindex="0" class="btn btn-primary">Page 2</button>
	<button type="button" id="btnpage31" tabindex="0" class="btn btn-primary">Page 3</button>


	<?= $this->Form->end(); ?>	

	






<!--<div class="row">
	<div class="form-group col-md-12">
		<p class="lead">7. Detail of data collector mentioned on ASC 2015-16 Proforma</p>	
	</div>

	<div class="form-group col-md-6">
		<?= $this->Form->input('dcname', array(
			'label'       => 'Data Collector Name', 
			'placeholder' => 'Data Collector Name', 
			'class'       => 'form-control'
			)); 
		?>
	</div>

	<div class="form-group col-md-5">
		<?= $this->Form->input('dccontact', array(
			'label'       => 'Data Collector Contact#', 
			'placeholder' => 'Data Collector Contact', 
			'class'       => 'form-control'
			)); 
		?>
	</div>	
</div>

<hr>

<div class="row">
	<div class="form-group col-md-12">
		<p class="lead">8. Data Provider</p>		
	</div>
	<div class="form-group col-md-6">
		<?= $this->Form->input('dpname', array(
			'label'       => 'Data Provider Name', 
			'placeholder' => 'Data Provider Name', 
			'class'       => 'form-control'
			)); 
		?>
	</div>

	<div class="form-group col-md-6">
		<?= $this->Form->input('dpcnic', array(
			'label'       => 'Data Provider CNIC', 
			'placeholder' => 'Data Provider CNIC', 
			'class'       => 'form-control'
			)); 
		?>
	</div>

	<div class="form-group col-md-6">
		<?= $this->Form->input('dpdesignations', array(
			'label' => 'Data Provider Designation', 
			'empty' => array('0' => 'Choose One'),
			'class' => 'form-control',
			'name'  => 'dpdesignation'
			)); 
		?>
	</div>

	<div class="form-group col-md-6">
		<?= $this->Form->input('dpcontact', array(
			'label'       => 'Data Provider Contact#', 
			'placeholder' => 'Data Provider Contact', 
			'class'       => 'form-control'
			)); 
		?>
	</div>
</div>

<hr>

<div class="row">
	<div class="form-group col-md-12">
		<p class="lead">9. Data Monitor</p>		
	</div>
	<div class="form-group col-md-6">
		<?= $this->Form->input('dmname', array('label' => 'Data Monitor Name', 'placeholder' => 'Data Monitor Name', 'class' => 'form-control')); ?>
	</div>

	<div class="form-group col-md-6">
		<?= $this->Form->input('dmcnic', array('label' => 'Data Monitor CNIC', 'placeholder' => 'Data Monitor CNIC', 'class' => 'form-control')); ?>
	</div>

	<div class="form-group col-md-6">
		<?= $this->Form->input('dmdesignation', array('label' => 'Data Monitor Designation', 'placeholder' => 'Data Monitor Designation', 'class' => 'form-control')); ?>
	</div>

	<div class="form-group col-md-6">
		<?= $this->Form->input('dmcontact', array(
			'label'       => 'Data Monitor Contact#', 
			'placeholder' => 'Data Monitor Contact', 
			'class'       => 'form-control'
			)); 
		?>
	</div>	

	<div class="form-group col-md-3">
		<?= $this->Form->input('complete_form_filled', array(
			'label'   => 'Complete Form Filled', 
			'options' => array('e' => 'Choose', '1' => 'Yes', '2' => 'No'),
			'class'   => 'form-control'
			)); 
		?>
	</div>

	<div class="form-group col-md-3">
		<?= $this->Form->input('pictures_taken', array(
			'label'   => 'Pictures Taken', 
			'options' => array('e' => 'Choose', '1' => 'Yes', '2' => 'No'),
			'class'   => 'form-control'
			)); 
		?>
	</div>

	<div class="form-group col-md-3">
		<?= $this->Form->input('evidences_collected', array(
			'label'   => 'Evidences Collected', 
			'options' => array('e' => 'Choose', '1' => 'Yes', '2' => 'No'),
			'class'   => 'form-control'
			)); 
		?>
	</div>
	
</div>!-->


		  <!--<div class="form-group">
		    <label for="exampleInputFile">File input</label>
		    <input type="file" id="exampleInputFile">
		    <p class="help-block">Example block-level help text here.</p>
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> Check me out
		    </label>
		  </div>-->