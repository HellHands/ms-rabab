<?//= debug($school); ?>
<?php $school = $school['semis_universal201415s']; ?>
<?php $district_name = $district['codes_for_district']['district'];?>
<?//= debug($district); ?>
<div class="row">
	<div class="col-md-12" style="text-align: center;">
		<img src="<?= $this->webroot.'img/sindhgovt_logo.png'; ?>" class="img-rounded"></img>
	</div>
	<center>
		<h1>25th Annual School Census 2015-16 <br>
			<small>Sindh Education Management Information System</small><br>
			<small>Reform Support Unit</small><br>
			<small>Education and Literacy Department, Government of Sindh</small>
		</h1>
	</center>
</div>
<hr>
<?= $this->Form->create('Asc201516', array(
	'url' => array(
		'controller' => 'Asc201516s', 
		'action'     => 'submit_asc201516'
		), 
	'class' => 'form-inline'
	)
); ?>
<a id="btnpage1" class="btn btn-primary">Page 1</a>
<a id="btnpage2" class="btn btn-primary">Page 2</a>
<a id="btnpage3" class="btn btn-primary">Page 3</a>
<hr>


<?= $this->Form->input('userid', array('type' => 'hidden', 'value' => $uid)); ?>
<?= $this->Form->input('username', array('type' => 'hidden', 'value' => $username)); ?>
<div id="page1">
	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title"></h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-4">
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
					<div class="form-group col-md-4">
				  		<?= $this->Form->input('coord_lat', array(
							'label'       => 'Latitude (N)', 							
							'onkeypress'  => 'return check_latitude(event)',
							'maxlength'   => '10',
							'value' => $school['coord_lat'],
							'readonly',
							'class'       => 'form-control'
				  			)); ?>
				  	</div>
					<div class="form-group col-md-4">
						<?= $this->Form->input('coord_long', array(
							'label'       => 'Longitude (E)', 
							'onkeypress'  => 'return check_longitude(event)',						
							'maxlength'   => '10',							
							'value' => $school['coord_long'],
							'readonly',
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
					<div class="form-group col-md-4">
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
				  	<div class="form-group col-md-4">
				  		<?= $this->Form->input('bi_school_taluka', array(
							'label'   => 'Taluka/Town', 
							'options' => array(),
							'empty'   => array('0' => 'Choose One'), 
							'class'   => 'form-control',
							'id'      => 'tehsil_select',
							'required'
				  			)); 
						?>
				  	</div>

				  	<div class="form-group col-md-4">
				  		<?= $this->Form->input('bi_school_uc', array(
							'label'   => 'Union Council', 
							'options' => array(),
							'empty'   => array('0' => 'Choose One'), 
							'class'   => 'form-control',
							'id'      => 'uc_select',
							'required'
				  			)); 
						?>
				  	</div>

				  	<div class="form-group col-md-4">
				  		<?= $this->Form->input('bi_school_tappa', array(
							'label'   => 'Tappa', 
							'options' => array(),
							'empty'   => array('0' => 'Choose One'), 
							'class'   => 'form-control',
							'id'      => 'tappa_select',
							'disabled'
				  			)); 
						?>
				  	</div>
				</div>

				<div class="row">
					<div class="form-group col-md-3">
					  	<?= $this->Form->input('bi_school_deh', array(
							'label'   => 'Deh', 
							'options' => array(),
							'empty'   => array('0' => 'Choose One'),
							'class'   => 'form-control', 
							'id'      => 'deh_select',
							'disabled'			
							)); 
					  	?>
				  	</div>	
				  	<div class="form-group col-md-3">
					  	<?= $this->Form->input('bi_school_na', array(
							'type' => 'text',
							'onkeypress' => 'return isNumberKey(event)',
							'label'       => 'NA', 
							'placeholder' => 'NA', 
							'class'       => 'form-control'
							)); 
					  	?>
				  	</div>
				  	<div class="form-group col-md-3">
					  	<?= $this->Form->input('bi_school_ps', array(
							'type'        => 'text',
							'onkeypress'  => 'return isNumberKey(event)',
							'label'       => 'PS', 
							'placeholder' => 'PS', 
							'class'       => 'form-control'
							)); 
					  	?>
				  	</div>
				  	<div class="form-group col-md-3">
					  	<?= $this->Form->input('bi_school_village', array(
							'label'       => 'Area/Village', 
							'placeholder' => 'Area/Village', 
							'class'       => 'form-control'
							)); 
					  	?>
				  	</div>
				</div> 

				<div class="row">
				  	<div class="form-group col-md-4">
				  		<?= $this->Form->input('prefixes', array(
							'label' => 'School Prefix', 
							'empty' => array('0' => 'Choose One'),
							'class' => 'form-control',
							'name'  => 'data[Asc201516][bi_school_prefix]',
							'required'
							)); 
				  		?>
				  	</div>

				  	<div class="form-group col-md-8">
					  	<?= $this->Form->input('bi_school_name', array(
							'label'       => 'School Name', 
							'placeholder' => 'School Name', 
							'class'       => 'form-control', 
							'required'
							)); 
					  	?>
				  	</div>	
				</div> 
				<div class="row">
				  	<div class="form-group col-md-8">
				  		<?= $this->Form->input('bi_school_address', array(
							'label' => 'School Address', 
							'class' => 'form-control'			
							)); 
				  		?>
				  	</div>

				  	<div class="form-group col-md-4">
					  	<?= $this->Form->input('bi_school_phone', array(
							'label'       => 'School Phone', 
							'onkeypress' => 'return isNumberKey(event)',
							'class'       => 'form-control' 			
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
				<h5 class="panel-title">2. Information about Data Provider</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-4">
						<?= $this->Form->input('dp_name', array(
							'label'       => 'a. Name', 
							'placeholder' => 'Data Provider Name', 
							'onkeypress'  => 'return isAlphabetKey(event)',
							'class'       => 'form-control'
							)); 
						?>
					</div>

					<div class="form-group col-md-4">
						<?= $this->Form->input('dp_cnic', array(
							'label'       => 'b. CNIC',
							'onkeypress'  => 'return isNumberKey(event)', 
							'placeholder' => 'CNIC', 
							'class'       => 'form-control'
							)); 
						?>
					</div>
				</div>

				<div class="row">
					<div class="form-group col-md-4">
						<?= $this->Form->input('dpdesignations', array(
							'label' => 'c. Designation', 
							'empty' => array('0' => 'Choose One'),
							'class' => 'form-control',
							'name'  => 'data[Asc201516][dp_designation]'
							)); 
						?>
					</div>

					<div class="form-group col-md-4">
						<?= $this->Form->input('dp_gender', array(
							'label'   => 'd. Gender', 
							'options' => array('0' => 'Choose', '1' => 'Male', '2' => 'Female'),
							'class'   => 'form-control'
							)); 
						?>
					</div>	
				</div>

				
				<div class="row">
					<div class="form-group col-md-4">
						<?= $this->Form->input('dp_contact', array(
							'label'       => 'e. Contact No. (Tele/Mob)', 
							'placeholder' => 'Data Provider Contact', 
							'onkeypress'  => 'return isNumberKey(event)',
							'class'       => 'form-control'
							)); 
						?>
					</div>
					<div class="form-group col-md-4">
						<?= $this->Form->input('dp_email', array(
							'label'       => 'f. Email Address', 
							'placeholder' => 'Email', 
							'type'        => 'email',
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
				<h5 class="panel-title">3. School Status</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-2">
				  		<?= $this->Form->input('conditions', array(
							'label' => 'a. Type of School',   		
							'empty' => array('0' => 'Choose'), 
							'class' => 'form-control',
							'id'    => 'condition_select',
							'name'  => 'data[Asc201516][ss_status_type]'
							)); 
				  		?>
				  	</div>

				  	<div class="form-group col-md-3">
				  		<?= $this->Form->input('ss_status', array(
							'label'   => 'b. Detail status', 
							'options' => array(),
							'empty'   => 'Choose',
							'class'   => 'form-control',
							'id'      => 'status_select'
							)); 
				  		?>
				  	</div>

				  	<div class="form-group col-md-7">
				  		<?= $this->Form->input('ss_closure_date', array(
							'label'      => 'c. Closure Day, Month & Year', 
							'type'       => 'date', 
							'dateFormat' => 'DMY',
							'maxYear'    => date('Y') - 1,
							'class'      => 'form-control form-control2 smalls',
							'id'         => 'closure_dmy',
							'disabled'
							)); 
				  		?>
				  	</div>
				</div>
				<div class="row">
				  	<div class="form-group col-md-5">
				  		<?= $this->Form->input('reasons', array(
							'label' => 'd. Closure Major Reason', 
							'empty' => array('0' => 'Choose One'),
							'class' => 'form-control',
							'id'    => 'closure_reason',
							'name'  => 'data[Asc201516][ss_closure_reason]',
							'disabled'
							)); 
				  		?>
				  	</div>
				  	<div class="form-group col-md-6" id="closure_major_reason_specify_div" style="display: none;">
				  		<?= $this->Form->input('ss_closure_major_reason_specify', array(
							'label' => 'Closure Major Reason Specify', 
							'type' => 'text',
							'class' => 'form-control',
							'disabled'
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
					<div class="form-group col-md-4">
				  		<?= $this->Form->input('dsi_location', array(
							'label'   => false,
							'options' => array(
								'0' => 'Choose', 
								'1' => 'Urban', 
								'2' => 'Rural'
								),
							'class' => 'form-control'
							)); 
				  		?>
				  	</div>		
			  	</div>
			</div>
		</div>	

		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">5. Level</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-4">
				  		<?= $this->Form->input('dsi_level', array(
							'label' => false,
							'options' => array(
								'0' => 'Choose', 
								'1' => 'Primary', 
								'2' => 'Middle', 
								'3' => 'Elementary', 
								'4' => 'Secondary', 
								'5' => 'Higher Secondary'), 
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
					<div class="form-group col-md-4">
				  		<?= $this->Form->input('dsi_sne_approved', array(
							'label' => false, 
							'options' => array('0' => 'Choose', '1' => 'Yes', '2' => 'No'), 
							'name' => 'data[Asc201516][dsi_sch_sne]',
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
				<h5 class="panel-title">7. Administration</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-4">
				  		<?= $this->Form->input('dsi_sch_administration', array(
							'label'   => false, 
							'options' => array(
								'0' => 'Choose', 
								'1' => 'ADO Male',
								'2' => 'ADO Female',
								'3' => 'DO Elementary',
								'4' => 'DO Local Bodies', 
								'5' => 'DO Secondary and Higher Secondary',
								'6' => 'Director BoC'
								), 
							'class'   => 'form-control'
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
					<div class="form-group col-md-4">
				  		<?= $this->Form->input('dsi_sch_gender', array(
							'label'   => false, 
							'options' => array('0' => 'Choose', '1' => 'Boys School', '2' => 'Girls School', '3' => 'Mixed School'), 
							'class'   => 'form-control'
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
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-4">
				  		<?= $this->Form->input('dsi_sch_medium', array(
							'label'    => false,
							'type'     => 'select',
							'multiple' => 'checkbox',
							'options'  => array('Urdu', 'Sindhi', 'English'), 							
							'class'    => 'form-control2'
							
							)); 
				  		?>
				  	</div>		
			  	</div>
			  	<div class="row">
					<div class="form-group col-md-2">
				  		<?= $this->Form->input('dsi_enrollment_urdu', array(
							'label'      => '<label class="small">Urdu Enrollment</label>',				  			
							'onkeypress' => 'return isNumberKey(event)',
							'type'       => 'text',
							'class'      => 'form-control',
							'disabled'
				  			)); 
				  		?>
				  	</div>
				  	
				  	<div class="form-group col-md-2">
				  		<?= $this->Form->input('dsi_enrollment_sindhi', array(
							'label'      => '<label class="small">Sindhi Enrollment</label>',
							'onkeypress' => 'return isNumberKey(event)',
							'type'       => 'text',
							'class'      => 'form-control small',
							'disabled'
				  			)); 
				  		?>
				  	</div>
				  	
				  	<div class="form-group col-md-2">
				  		<?= $this->Form->input('dsi_enrollment_english', array(
							'label'      => '<label class="small">English Enrollment</label>',
							'onkeypress' => 'return isNumberKey(event)',
							'type'       => 'text',
							'class'      => 'form-control',
							'disabled'
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
					<div class="form-group col-md-4">
				  		<?= $this->Form->input('dsi_sch_shift', array(
							'label'   => false,
							'options' => array(
								'0' => 'Choose', 
								'1' => 'Morning' , 
								'2' => 'Afternoon' , 
								'3' => 'Both Shifts'
								),
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
					<div class="form-group col-md-4">
				  		<?= $this->Form->input('dsi_sch_campus', array(
							'label'   => false,
							'options' => array('0' => 'Choose', '1' => 'Yes' , '2' => 'No'),
							'class'   => 'form-control'
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
					<div class="form-group col-md-4">
				  		<?= $this->Form->input('schoolbuildingowners', array(
							'label' => 'a. Ownership',
							'empty' => array('0' => 'Choose'),
							'class' => 'form-control',
							'name'  => 'data[Asc201516][sbi_ownership]'
				  			)); 
				  		?>
				  	</div>
				
				  	<div class="form-group col-md-4" id="other_building_semiscode_specify" style="display: none;">
				  		<?= $this->Form->input('sbi_other_building_semiscode_specify', array(
							'label'      => 'SEMIS Code',
							'onkeypress' => 'return isNumberKey(event)',
							'maxlength'  => '9',
							'size'       => '9',
							'class'      => 'form-control',
				  			'disabled'
				  			)); 
				  		?>
				  	</div>

				  	<div class="form-group col-md-4" id="other_building_specify" style="display: none;">
				  		<?= $this->Form->input('sbi_other_building_specify', array(
				  			'label' => 'Specify',
				  			'class' => 'form-control',
				  			'disabled'
				  			)); 
				  		?>
				  	</div>

				  	<div class="form-group col-md-4" id="other_nobuilding_specify" style="display: none;">
				  		<?= $this->Form->input('sbi_other_nobuilding_specify', array(
							'label'   => 'Specify',
							'options' => array('0' => 'Choose', '1' => 'Under Tree', '2' => 'Under Chhapra', '3' => 'Hut'),
							'class'   => 'form-control',
				  			'disabled'
				  			)); 
				  		?>
				  	</div>
			  	</div>
			
				<div class="row">
				  	<div class="form-group col-md-4">
				  		<?= $this->Form->input('sbi_school_building_construction_year', array(
							'label'      => 'b. Year of Construction (YYYY)',
							'type'       => 'text',
							'placeholder' => 'YYYY',
							'onkeypress' => 'return isNumberKey(event)',
							'max'        => '2016',
							'size'       => '4',
							'maxlength'  => '4',
							'class'      => 'form-control'
				  			)); 
				  		?>
				  	</div>	

				  	<div class="form-group col-md-4">
				  		<?= $this->Form->input('sbi_school_building_construction_type', array(
				  			'label' => 'c. Type of building',
				  			'options' => array('0' => 'Choose', '1' => 'Pakka/RCC/Tier Guarder', '2' => 'Katcha', '3' => 'Mixed'),
				  			'class' => 'form-control'
				  			)); 
				  		?>
				  	</div>	
				</div>

				<div class="row">
				  	<div class="form-group col-md-4">
				  		<?= $this->Form->input('sbi_school_building_condition', array(
							'label'   => 'd. Condition of Building',
							'options' => array('0' => 'Choose', '1' => 'Satisfactory' , '2' => 'Needs Repair', '3' => 'Dangerous'),
							'class'   => 'form-control'
				  			)); 
				  		?>
				  	</div>
				</div>

				<div class="row">
				  	<div class="form-group col-md-4">
						<?= $this->Form->input('sbi_school_building_total_rooms', array(
							'label'       => 'e. Total No. of Rooms', 
							'placeholder' => 'Total Rooms', 
							'type' => 'text',
							'onkeypress'  => 'return isNumberKey(event)',						
							'class'       => 'form-control',
							'id'          => 'total_rooms'
							)); 
						?>
					</div>

					<div class="form-group col-md-4" id="total_classrooms_div">
						<?= $this->Form->input('sbi_school_building_class_rooms', array(
							'label'       => 'f. Total Rooms As Classrooms', 
							'placeholder' => 'Total Classrooms', 
							'type'        => 'text',
							'onkeypress'  => 'return isNumberKey(event)',						
							'class'       => 'form-control',
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
								'0' => 'Choose', 
								'1' => 'NGO', 
								'2' => 'District Administration', 
								'3' => 'Occupied by Villager', 
								'4' => 'Community Centre',
								'5' => 'Vocational Training Centre',
								'6' => 'Other (Specify)'
								),			
							'class'       => 'form-control'
							)); 
						?>
					</div>
					<div class="form-group col-md-4" id="other_than_learning_rooms_count" style="display: none;">
						<?= $this->Form->input('sbi_school_building_other_than_learning_rooms', array(
							'label'      => 'Write No. of rooms',
							'type'       => 'text',
							'onkeypress' => 'return isNumberKey(event)',
							'class'      => 'form-control',
							'disabled'
							));
						?>
						
					</div>
					<div class="form-group col-md-4" id="purpose_other_than_learning" style="display: none;">
						<?= $this->Form->input('sbi_purpose_other_than_learning_specify', array(
							'label' => 'Specify', 
							'type'  => 'text',
							'class' => 'form-control',
							'disabled'
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
					<div class="form-group col-md-3">
						<?= $this->Form->input('bfi_school_boundarywall', array(
							'label'   => 'Boundary Wall', 
							'options' => array('0' => 'Choose', '1' => 'Satisfactory', '2' => 'Needs Repair', '3' => 'Dangerous', '4' => 'No Boundary Wall'),
							'class'   => 'form-control'
							)); 
						?>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-3">
						<?= $this->Form->input('bfi_school_washroom', array(
							'label'   => 'Washroom Facility', 
							'options' => array('0' => 'Choose', '1' => 'Yes', '2' => 'No'), 
							'class'   => 'form-control',
							'id'      => 'washroom_facility'
							)); 
						?>
					</div>

					<div class="form-group col-md-3">
						<?= $this->Form->input('bfi_school_functional_washrooms', array(
							'label'      => 'Functional Washrooms', 
							'type'       => 'text',							
							'class'      => 'form-control',
							'onkeypress' => 'return isNumberKey(event)',			
							'id'         => 'functional_washrooms',
							'disabled'
							)); 
						?>
					</div>

					<div class="form-group col-md-3">
						<?= $this->Form->input('bfi_school_nonfunctional_washrooms', array(
							'label'      => 'Non Functional Washrooms', 
							'type'       => 'text',							
							'class'      => 'form-control',
							'onkeypress' => 'return isNumberKey(event)',			
							'id'         => 'nonfunctional_washrooms',
							'disabled'
							)); 
						?>
					</div>			
				</div>
				<div class="row">
					<div class="form-group col-md-3">
						<?= $this->Form->input('bfi_school_waterfacility', array(
							'label'   => 'Drinking Water Facility', 
							'options' => array('1' => 'Yes', '2' => 'No'),
							'empty'   => array('0' => 'Choose'),
							'class'   => 'form-control'
							)); 
						?>
					</div>
				
					<div class="form-group col-md-3">
						<?= $this->Form->input('bfi_school_electricity', array(
							'label'   => 'Electricity Facility', 
							'options' => array('0' => 'Choose', '1' => 'Yes', '2' => 'No'), 
							'class'   => 'form-control'
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
								'type' => 'text',
								//'onkeypress'  => 'return sum_and_isNumber(event)',
								'maxlength'   => '4',
								'size'        => '4',
								'class'       => 'form-control'
								)); 
							?>
						</div>

						<div class="form-group col-md-2">
							<?= $this->Form->input('sti_nongovt_male', array(
								'label'       => '<label class="small">Non-Govt Male</label>', 
								'placeholder' => 'Non-Govt Male',
								'onkeypress'  => 'return isNumberKey(event)',
								'type' => 'text',
								'maxlength'   => '4',
								'size'        => '4',
								'class'       => 'form-control'
								)); 
							?>
						</div>

						<div class="form-group col-md-2">
							<?= $this->Form->input('sti_govt_female', array(
								'label'       => '<label class="small">Govt Female</label>', 
								'placeholder' => 'Govt Female', 
								'onkeypress'  => 'return isNumberKey(event)',
								'type' => 'text',
								'maxlength'   => '4',
								'size'        => '4',
								'class'       => 'form-control'
								)); 
							?>
						</div>

						<div class="form-group col-md-2">
							<?= $this->Form->input('sti_nongovt_female', array(
								'label'       => '<label class="small">Non Govt Female</label>', 
								'placeholder' => 'Non-Govt Female', 
								'onkeypress'  => 'return isNumberKey(event)',
								'type' => 'text',
								'maxlength'   => '4',
								'size'        => '4',
								'class'       => 'form-control'
								)); 
							?>
						</div>

						<div class="form-group col-md-2">
							<?= $this->Form->input('sti_total_teachers', array(
								'label' => '<label class="small">Total</label>', 
								'id'    => 'total_teachers',			
								'class' => 'form-control',
								'readonly'
								)); 
							?>
						</div>

						<div class="form-group col-md-2">
							<?= $this->Form->input('sti_vacant', array(
								'label'       => '<label class="small">Vacant</label>', 
								'placeholder' => 'Vacant', 				
								'onkeypress'  => 'return isNumberKey(event)',
								'type' => 'text',
								'maxlength'   => '4',
								'size'        => '4',
								'class'       => 'form-control'
								)); 
							?>
						</div>	
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
								'type' => 'text',
								'maxlength'   => '4',
								'size'        => '4',
								'class'       => 'form-control'
								)); 
							?>
						</div>

						<div class="form-group col-md-2">
							<?= $this->Form->input('sti_nonteaching_female', array(
								'label'       => '<label class="small">Non-Teaching Female</label>', 
								'placeholder' => 'Non-Teaching Female', 
								'onkeypress'  => 'return isNumberKey(event)',
								'type' => 'text',
								'maxlength'   => '4',
								'size'        => '4',
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

<div id="page2" style="display: none;">
	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">15. Enrollment [Write the enrollment figure as on reference Date] 31st Oct, 2015</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-4">		
						<?= $this->Form->input('enr_source_of_enrollment', array(
							'label' => 'a. Source of Enrollment',
							'options' => array(
								'0' => 'Choose', 
								'1' => 'General Register', 
								'2' => 'Attendance Register', 
								'3' => 'Other record available at school (Specify)', 
								'4' => 'No Formal Record'
								),
							'class' => 'form-control'
							));
						?>	
					</div>
					<div class="form-group col-md-4" id="source_of_enrollment_specify" style="display: none;">		
						<?= $this->Form->input('enr_source_of_enrollment_specify', array(
							'label' => 'Specify',
							'class' => 'form-control',
							'disabled'
							));
						?>	
					</div>	
				</div>
				<div class="row">
					<div class="form-group col-md-12">
						<?= $this->Form->label('elementary_enrollment', 'b. Elementary Enrollment', array()); ?>
					</div>
					
					<!-- ELEMENTARY ENROLLMENT TABLE STARTS HERE !-->	
					<div class="col-md-12">
						<table class="table table-condensed table-bordered" style='padding-left: 0; padding-right: 0; text-align:center;'>
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
										'name'       => 'ele_class_ece_boys_enrollment',
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
										'name'       => 'ele_class_katchi_boys_enrollment',									
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
										'name'       => 'ele_class_one_boys_enrollment',								
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
										'name'       => 'ele_class_two_boys_enrollment',
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
										'name'       => 'ele_class_three_boys_enrollment',						
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
										'name'       => 'ele_class_four_boys_enrollment',	
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
										'name'       => 'ele_class_five_boys_enrollment',	
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
										'name'       => 'ele_class_six_boys_enrollment',	
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
										'name'       => 'ele_class_seven_boys_enrollment',
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
										'name'       => 'ele_class_eight_boys_enrollment',	
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('ele_class_nine_boys_enrollment', array(
										'class' => 'form-control', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',									
										'name'       => 'ele_class_nine_boys_enrollment',	
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('ele_class_ten_boys_enrollment', array(
										'class' => 'form-control', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',										
										'size' => '3',
										'name'       => 'ele_class_ten_boys_enrollment',
										'label' => false
										)); ?> 
									</div>
								</td>				
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('ele_total_boys_enrollment', array(
										'class' => 'form-control', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',										
										'size' => '3',
										'name'       => 'ele_total_boys_enrollment',
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
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name'       => 'ele_class_ece_girls_enrollment',
										'class' => 'form-control'
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
										'name'       => 'ele_class_katchi_girls_enrollment',
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
										'name'       => 'ele_class_one_girls_enrollment',
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
										'name'       => 'ele_class_two_girls_enrollment',
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
										'name'       => 'ele_class_three_girls_enrollment',
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
										'name'       => 'ele_class_four_girls_enrollment',
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
										'name'       => 'ele_class_five_girls_enrollment',
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
										'name'       => 'ele_class_six_girls_enrollment',
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
										'name'       => 'ele_class_seven_girls_enrollment',
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
										'name'       => 'ele_class_eight_girls_enrollment',
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('ele_class_nine_girls_enrollment', array(
										'class' => 'form-control', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name'       => 'ele_class_nine_girls_enrollment',
										'label' => false
										)); ?> 
									</div>
								</td>
								<td>
									<div class="form-group col-xs-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('ele_class_ten_girls_enrollment', array(
										'class' => 'form-control', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name'       => 'ele_class_ten_girls_enrollment',
										'label' => false
										)); ?> 
									</div>
								</td>				
								<td>
									<div class="form-group col-md-10" style="padding-left: 0; padding-right: 0;">
										<?= $this->Form->input('ele_total_girls_enrollment', array(
										'class' => 'form-control', 
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name'       => 'ele_total_girls_enrollment',
										'label' => false,
										'readonly'
										)); ?> 
									</div>
								</td>				
							</tr>

						</table>
					</div>

					<!-- SECONDARY ENROLLMENT !-->
					<div class="form-group col-md-12">
						<?= $this->Form->label('secondary_enrollment', 'c. Secondary Enrollment', array()); ?>
					</div>
					<div class="col-md-12">
						<table class="table table-condensed table-bordered" style='padding-left: 0; padding-right: 0; text-align:center;'>
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
										'name'       => 'sec_class_nine_arts_boys_enrollment',
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
										'name'       => 'sec_class_nine_comp_boys_enrollment',
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
										'name'       => 'sec_class_nine_bio_boys_enrollment',
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
										'name'       => 'sec_class_nine_comm_boys_enrollment',
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
										'name'       => 'sec_class_nine_other_boys_enrollment',
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
										'name'       => 'sec_class_ten_arts_boys_enrollment',
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
										'name'       => 'sec_class_ten_comp_boys_enrollment',
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
										'name'       => 'sec_class_ten_bio_boys_enrollment',
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
										'name'       => 'sec_class_ten_comm_boys_enrollment',
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
										'name'       => 'sec_class_ten_other_boys_enrollment',
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
										'name'       => 'sec_total_boys_enrollment',
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
										'name'       => 'sec_class_nine_arts_girls_enrollment',
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
										'name'       => 'sec_class_nine_comp_girls_enrollment',
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
										'name'       => 'sec_class_nine_bio_girls_enrollment',
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
										'name'       => 'sec_class_nine_comm_girls_enrollment',
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
										'name'       => 'sec_class_nine_other_girls_enrollment',
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
										'name'       => 'sec_class_ten_arts_girls_enrollment',
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
										'name'       => 'sec_class_ten_comp_girls_enrollment',
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
										'name'       => 'sec_class_ten_bio_girls_enrollment',
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
										'name'       => 'sec_class_ten_comm_girls_enrollment',
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
										'name'       => 'sec_class_ten_other_girls_enrollment',
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
										'name'       => 'sec_total_girls_enrollment',
										'label' => false,
										'readonly'
										)); ?> 
									</div>
								</td>				
							</tr>

						</table>
					</div>	
					<!-- HIGHER SECONDARY ENROLLMENT  !-->
					<div class="form-group col-md-12">
						<?= $this->Form->label('hsecondary_enrollment', 'd. Higher Secondary Enrollment', array()); ?>
					</div>
					<div class="col-md-12">
						<table class="table table-condensed table-bordered" style='padding-left: 0; padding-right: 0; text-align:center;'>
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
										'name'       => 'hsec_class_eleven_arts_boys_enrollment',
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
										'name'       => 'hsec_class_eleven_comp_boys_enrollment',
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
										'name'       => 'hsec_class_eleven_med_boys_enrollment',
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
										'name'       => 'hsec_class_eleven_eng_boys_enrollment',
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
										'name'       => 'hsec_class_eleven_comm_boys_enrollment',
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
										'name'       => 'hsec_class_eleven_other_boys_enrollment',
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
										'name'       => 'hsec_class_twelve_arts_boys_enrollment',
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
										'name'       => 'hsec_class_twelve_comp_boys_enrollment',
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
										'name'       => 'hsec_class_twelve_med_boys_enrollment',
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
										'name'       => 'hsec_class_twelve_eng_boys_enrollment',
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
										'name'       => 'hsec_class_twelve_comm_boys_enrollment',
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
										'name'       => 'hsec_class_twelve_other_boys_enrollment',
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
										'name'       => 'hsec_total_boys_enrollment',
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
										'name'       => 'hsec_class_eleven_arts_girls_enrollment',
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
										'name'       => 'hsec_class_eleven_comp_girls_enrollment',
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
										'name'       => 'hsec_class_eleven_med_girls_enrollment',
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
										'name'       => 'hsec_class_eleven_eng_girls_enrollment',
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
										'name'       => 'hsec_class_eleven_comm_girls_enrollment',
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
										'name'       => 'hsec_class_eleven_other_girls_enrollment',
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
										'name'       => 'hsec_class_twelve_arts_girls_enrollment',
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
										'name'       => 'hsec_class_twelve_comp_girls_enrollment',
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
										'name'       => 'hsec_class_twelve_med_girls_enrollment',
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
										'name'       => 'hsec_class_twelve_eng_girls_enrollment',
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
										'name'       => 'hsec_class_twelve_comm_girls_enrollment',
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
										'name'       => 'hsec_class_twelve_other_girls_enrollment',
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
										'name'       => 'hsec_total_girls_enrollment',
										'label' => false,
										'readonly'
										)); ?> 
									</div>
								</td>										
							</tr>
						</table>
					</div>
				</div>			
			</div>
		</div>		
	</div>

	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">16. Permanent Absent</h5>
			</div>
			<div class="panel-body">
				<div class="row">	
					<!-- PERMANENT ABSENT !-->				
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
										<?= $this->Form->input('perm_class_four_boys_absentees', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'perm_class_four_boys_absentees',
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
										'name' => 'perm_class_five_boys_absentees',
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
										'name' => 'perm_class_six_boys_absentees',
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
										'name' => 'perm_class_seven_boys_absentees',
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
										'name' => 'perm_class_eight_boys_absentees',
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
										'name' => 'perm_class_nine_boys_absentees',
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
										'name' => 'perm_class_ten_boys_absentees',
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
										'name' => 'perm_class_eleven_boys_absentees',
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
										'name' => 'perm_class_twelve_boys_absentees',
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
										'name' => 'perm_total_boys_absentees',
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
										<?= $this->Form->input('perm_class_four_girls_absentees', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'name' => 'perm_class_four_girls_absentees',
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
										'name' => 'perm_class_five_girls_absentees',
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
										'name' => 'perm_class_six_girls_absentees',
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
										'name' => 'perm_class_seven_girls_absentees',
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
										'name' => 'perm_class_eight_girls_absentees',
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
										'name' => 'perm_class_nine_girls_absentees',
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
										'name' => 'perm_class_ten_girls_absentees',
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
										'name' => 'perm_class_eleven_girls_absentees',
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
										'name' => 'perm_class_twelve_girls_absentees',
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
										'name' => 'perm_total_girls_absentees',
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
			</div>

		</div>
	</div>

	<div class="row">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">17. Consolidated School?</h5>	
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-4">
						<?= $this->Form->input('sch_consolidated', array(
							'label' => 'Is this school consolidated? ',
							'options' => array('0' => 'Choose', '1' => 'Yes', '2' => 'No'),
							'class' => 'form-control'
						)); ?>
					</div>
					<div class="form-group col-md-4" id='merge_school_number' style="display: none;">
						<?= $this->Form->input('sch_consolidated_merge_number', array(
							'label' => 'Merged School number',
							'type' => 'text',			
							'maxlength' => '9',
							//'minlength' => '9',
							'onkeypress' => 'return isNumberKey(event)',
							'class' => 'form-control',
							'disabled'
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
				<h5 class="panel-title">18. List of surrounding Government schools [Schools within same premises OR Adjacent schools OR where distance within 1500 meters or 1.5 kilometers.]</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<table class="table table-condensed table-bordered" style='padding-left: 0; padding-right: 0; text-align:center;'>
							<tr>
								<th>S.No</th>
								<th>SEMIS Code</th>
								<th>School Name (Prefix + Name)</th>
								<th>Type of school<br><small>1=Same premises<br>2=Adjacent<br>3=More than 500meters</small></th>
								<th>Distance in meters</th>
							</tr>
							<tr>
								<td class="col-xs-1">1</td>
								<td class="col-xs-2">
									
										<?= $this->Form->input('asi_sch1_semis_code', array(
										'label' => false,
										'type' => 'text',
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '9',
										'size' => '9',
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch1_name', array(
										'label' => false,																
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td class="col-xs-1">
									
										<?= $this->Form->input('asi_sch1_type', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '1',
										'size' => '1',
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td class="col-xs-1">
									
										<?= $this->Form->input('asi_sch1_distance', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '5',
										'size' => '5',
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
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch2_name', array(
										'label' => false,														
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch2_type', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch2_distance', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '5',
										'size' => '5',
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
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch3_name', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch3_type', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch3_distance', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
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
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch4_name', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch4_type', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch4_distance', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'class' => 'form-control'
										)); ?>	
									
								</td>
							</tr>
							<tr>
								<td>5</td>
								<td>
									
										<?= $this->Form->input('asi_sch5_semis_code', array(
										'label' => false,
										'type' => 'text',
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '9',
										'size' => '9',
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch5_name', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch5_type', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
										'class' => 'form-control'
										)); ?>	
									
								</td>
								<td>
									
										<?= $this->Form->input('asi_sch5_distance', array(
										'label' => false,
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '3',
										'size' => '3',
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
				<h5 class="panel-title">19. Total No. of surrounding PPRS and Private schools [schools within same premises OR adjacent schools OR where distance within 1.5 kilometers.]</h5>
			</div>
			<div class="panel-body">
				<div class="row">				
					<div class="form-group col-md-4">
						<?= $this->Form->input('no_of_pprs_schools', array(
							'label' => 'No. of PPRS Schools',
							'onkeypress' => 'return isNumberKey(event)',
							'maxlength' => '4',
							'size' => '4',
							'class' => 'form-control'

							));
						?>		
					</div>
					<div class="form-group col-md-4">
						<?= $this->Form->input('no_of_pvt_schools', array(
							'label' => 'No. of Private Schools',
							'onkeypress' => 'return isNumberKey(event)',
							'maxlength' => '4',
							'size' => '4',
							'class' => 'form-control'

							));
						?>		
					</div>
					<div class="form-group col-md-4">
						<?= $this->Form->input('no_of_total_surrounding_schools', array(
							'label' => 'Total Surrounding Schools',
							'onkeypress' => 'return isNumberKey(event)',
							'maxlength' => '4',
							'size' => '4',
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
				<h5 class="panel-title">20. School total AREA in square feet</h5>
			</div>	
			<div class="panel-body">
				<div class="row">			
					<div class="form-group col-md-2">
						<?= $this->Form->input('corner1_coord_long', array(
							'label' => 'Corner 1 Longitude (E)',
							'onkeypress'  => 'return check_longitude(event)',
							'maxlength'   => '10',
							'class' => 'form-control'
						)); 
						?>		
					</div>
					<div class="form-group col-md-2">
						<?= $this->Form->input('corner2_coord_long', array(
							'label' => 'Corner 2 Longitude (E)',
							'onkeypress'  => 'return check_longitude(event)',
							'maxlength'   => '10',
							'class' => 'form-control'
						)); 
						?>		
					</div>
					<div class="form-group col-md-2">
						<?= $this->Form->input('corner3_coord_long', array(
							'label' => 'Corner 3 Longitude (E)',
							'onkeypress'  => 'return check_longitude(event)',
							'maxlength'   => '10',
							'class' => 'form-control'
						)); 
						?>		
					</div>
					<div class="form-group col-md-2">
						<?= $this->Form->input('corner4_coord_long', array(
							'label' => 'Corner 4 Longitude (E)',
							'onkeypress'  => 'return check_longitude(event)',
							'maxlength'   => '10',
							'class' => 'form-control'
						)); 
						?>		
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-2">
						<?= $this->Form->input('corner1_coord_lat', array(
							'label' => 'Corner 1 Latitude (N)',
							'onkeypress'  => 'return check_latitude(event)',
							'maxlength'   => '10',
							'class' => 'form-control'
						)); 
						?>		
					</div>
					<div class="form-group col-md-2">
						<?= $this->Form->input('corner2_coord_lat', array(
							'label' => 'Corner 2 Latitude (N)',
							'onkeypress'  => 'return check_latitude(event)',
							'maxlength'   => '10',
							'class' => 'form-control'
						)); 
						?>		
					</div>
					<div class="form-group col-md-2">
						<?= $this->Form->input('corner3_coord_lat', array(
							'label' => 'Corner 3 Latitude (N)',
							'onkeypress'  => 'return check_latitude(event)',
							'maxlength'   => '10',
							'class' => 'form-control'
						)); 
						?>		
					</div>
					<div class="form-group col-md-2">
						<?= $this->Form->input('corner4_coord_lat', array(
							'label' => 'Corner 4 Latitude (N)',
							'onkeypress'  => 'return check_latitude(event)',
							'maxlength'   => '10',
							'class' => 'form-control'
						)); 
						?>		
					</div>
					<div class="form-group col-md-2">
						<?= $this->Form->input('sch_total_area_covered', array(
							'label' => 'School Total Area in Square feet',
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
				<h5 class="panel-title">21. SEMIS Code displayed on visible location?</h5>
			</div>
			<div class="panel-body">
				<div class="row">				
					<div class="form-group col-md-4">
						<?= $this->Form->input('sch_semis_displayed', array(
							'label' => false,
							'options' => array('0' => 'Choose', '1' => 'Yes', '2' => 'No'),
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
				<h5 class="panel-title">22. Did the school receive <strong>Textbooks</strong> in last academic year?</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-4">
						<?= $this->Form->input('sch_textbooks_received', array(
							'label' => false,
							'options' => array('0' => 'Choose', '1' => 'Yes', '2' => 'No'),
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
				<h5 class="panel-title">23. Any <strong>construction work</strong> in the last academic year?</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-4">
					<?= $this->Form->input('sch_construction_work', array(
						'label' => false,
						'options' => array('0' => 'Choose', '1' => 'Yes', '2' => 'No'),
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
				<h5 class="panel-title">24. <strong>Girls' Stipend</strong></h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-12">
						<p class="lead">
							(a). Did the school receive <strong>Girls' Stipend</strong> in the last academic year?
						</p>
					</div>
					<div class="form-group col-md-4">
						<?= $this->Form->input('sch_received_girls_stipend', array(
							'label' => false,
							'options' => array('0' => 'Choose', '1' => 'Yes', '2' => 'No'),
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
					<div class="form-group col-md-2">
						<?= $this->Form->input('sch_received_girls_stipend_enrollment', array(
							'label' => 'Enrollment',
							'type' => 'text',
							'onkeypress' => 'return isNumberKey(event)',
							'class' => 'form-control',
							'disabled'

						)); 
						?>
					</div>
					<div class="form-group col-md-2">
						<?= $this->Form->input('sch_received_girls_stipend_eligible', array(
							'label' => 'Eligible',
							'type' => 'text',
							'onkeypress' => 'return isNumberKey(event)',
							'class' => 'form-control',
							'disabled'
						)); 
						?>
					</div>	
					<div class="form-group col-md-2">
						<?= $this->Form->input('sch_received_girls_stipend_received', array(
							'label' => 'Received',
							'type' => 'text',
							'onkeypress' => 'return isNumberKey(event)',
							'class' => 'form-control',
							'disabled'
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
				<h5 class="panel-title">25. <strong>Upgraded to Next Level?</strong></h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-12">
						<p class="lead">
							(a). Has school <strong>Upgraded to Next Level</strong> in the last academic year?
						</p>
					</div>
					<div class="form-group col-md-4">
						<?= $this->Form->input('sch_upgraded', array(
							'label' => false,
							'options' => array('0' => 'Choose', '1' => 'Yes', '2' => 'No'),
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
					<div class="form-group col-md-4">
						<?= $this->Form->input('sch_upgraded_level', array(
							'label' => false,
							'type' => 'text',			
							'class' => 'form-control',
							'disabled'
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
				<h5 class="panel-title">26. Is this school <strong>Adopted</strong>?</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-4">
						<?= $this->Form->input('sch_adopted', array(
							'label' => false,
							'options' => array('0' => 'Choose', '1' => 'Yes', '2' => 'No'),
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
				<h5 class="panel-title">27. What is the <strong>Cost Centre/DDO Code</strong> of this school?</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-4">
						<?= $this->Form->input('sch_cc_ddo_code', array(
							'label' => false,			
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
				<h5 class="panel-title">28. School Management Committee <strong>(SMC)</strong></h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="form-group col-md-2">
						<?= $this->Form->input('smc_functional', array(
							'label' => 'a. Is SMC Functional?',			
							'options' => array('0' => 'Choose', '1' => 'Yes', '2' => 'No'),
							'class' => 'form-control'
						)); 
						?>
					</div>	
					<div class="form-group col-md-4">
						<?= $this->Form->input('smc_funds_in_1516', array(
							'label' => 'b. Has this school got SMC Funds in 2015-16?',			
							'options' => array('0' => 'Choose', '1' => 'Yes', '2' => 'No'),
							'class' => 'form-control'
						)); 
						?>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						<?= $this->Form->input('smc_ac_title', array(
							'label' => 'c. SMC A/C Title',			
							'type' => 'text',
							'class' => 'form-control'
						)); 
						?>
					</div>
					<div class="form-group col-md-4">
						<?= $this->Form->input('smc_ac_no', array(
							'label' => 'd. SMC A/C No#',			
							'type' => 'text',
							'class' => 'form-control'
						)); 
						?>
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
						<?= $this->Form->input('smc_bank_name', array(
							'label' => 'e. Bank Name',			
							'type' => 'text',
							'class' => 'form-control'
						)); 
						?>
					</div>
					<div class="form-group col-md-4">
						<?= $this->Form->input('smc_bank_branch_and_code', array(
							'label' => 'f. Name of Branch and Branch Code',			
							'type' => 'text',
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
				<h5 class="panel-title">29. Write Total No. of following facilities in the School</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<table class="table table-condensed table-bordered" style="padding-left: 0; padding-right: 0; text-align: left;">
							<tr>
								<th>Items</th>
								<th>Working</th>
								<th>Repairable?</th>
							</tr>
							<tr>
								<td>a. Blackboards</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_blackboards', array(
											'label' => false,
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
											'class' => 'form-control'
										)); 
										?>	
									</div>
								</td>
							</tr>
							<tr>
								<td>h. Charts</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_charts', array(
											'label' => false,
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
											'class' => 'form-control'
										)); 
										?>	
									</div>
								</td>
							</tr>
							<tr>
								<td>i. Computers</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_computers', array(
											'label' => false,
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
											'class' => 'form-control'
										)); 
										?>	
									</div>
								</td>
							</tr>
							<tr>
								<td>j. Water pump (Electric Motor)</td>
								<td>
									<div class="col-xs-12">
										<?= $this->Form->input('facility_electric_waterpump', array(
											'label' => false,
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

	<div class="row">	
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">30. Write the details of the following facilities in the School:</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
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
														'0' => 'Choose', 
														'1' => 'Available and Functional',
														'2' => 'Available but not Functional',
														'3' => 'Not Available'),
													'class' => 'form-control'
												)); 
												?>	
											</div>					
										</td>
									</tr>
									<tr>
										<td>b. Physics Lab</td>
										<td>
											<div class="col-xs-12">
												<?= $this->Form->input('facility_physics_lab', array(
													'label' => false,
													'options' => array(
														'0' => 'Choose', 
														'1' => 'Available and Functional',
														'2' => 'Available but not Functional',
														'3' => 'Not Available'),
													'class' => 'form-control'
												)); 
												?>	
											</div>					
										</td>			
									</tr>
									<tr>
										<td>c. Chemistry Lab</td>
										<td>
											<div class="col-xs-12">
												<?= $this->Form->input('facility_chemistry_lab', array(
													'label' => false,
													'options' => array(
														'0' => 'Choose', 
														'1' => 'Available and Functional',
														'2' => 'Available but not Functional',
														'3' => 'Not Available'),
													'class' => 'form-control'
												)); 
												?>	
											</div>				
										</td>			
									</tr>
									<tr>
										<td>d. Biology Lab</td>
										<td>
											<div class="col-xs-12">
												<?= $this->Form->input('facility_biology_lab', array(
													'label' => false,
													'options' => array(
														'0' => 'Choose', 
														'1' => 'Available and Functional',
														'2' => 'Available but not Functional',
														'3' => 'Not Available'),
													'class' => 'form-control'
												)); 
												?>	
											</div>					
										</td>		
									</tr>
									<tr>
										<td>e. Home Economics Lab</td>
										<td>
											<div class="col-xs-12">
												<?= $this->Form->input('facility_home_economics_lab', array(
													'label' => false,
													'options' => array(
														'0' => 'Choose', 
														'1' => 'Available and Functional',
														'2' => 'Available but not Functional',
														'3' => 'Not Available'),
													'class' => 'form-control'
												)); 
												?>	
											</div>					
										</td>			
									</tr>
									<tr>
										<td>f. Library</td>
										<td>
											<div class="col-xs-12">
												<?= $this->Form->input('facility_library', array(
													'label' => false,
													'options' => array(
														'0' => 'Choose', 
														'1' => 'Available and Functional',
														'2' => 'Available but not Functional',
														'3' => 'Not Available'),
													'class' => 'form-control'
												)); 
												?>	
											</div>					
										</td>				
									</tr>
									<tr>
										<td>g. Playground</td>
										<td>
											<div class="col-xs-12">
												<?= $this->Form->input('facility_playground', array(
													'label' => false,
													'options' => array(
														'0' => 'Choose', 
														'1' => 'Available and Functional',
														'2' => 'Available but not Functional',
														'3' => 'Not Available'),
													'class' => 'form-control'
												)); 
												?>	
											</div>					
										</td>	
									</tr>
									<tr>
										<td>h. Medical/First Aid Box</td>
										<td>
											<div class="col-xs-12">
												<?= $this->Form->input('facility_medical_aid_box', array(
													'label' => false,
													'options' => array(
														'0' => 'Choose', 
														'1' => 'Available and Functional',
														'2' => 'Available but not Functional',
														'3' => 'Not Available'),
													'class' => 'form-control'
												)); 
												?>	
											</div>					
										</td>		
									</tr>
									<tr>
										<td>i. Sports Equipments</td>
										<td>
											<div class="col-xs-12">
												<?= $this->Form->input('facility_sports_equipments', array(
													'label' => false,
													'options' => array(
														'0' => 'Choose', 
														'1' => 'Available and Functional',
														'2' => 'Available but not Functional',
														'3' => 'Not Available'),
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

<!-- ======================================== PAGE 3 ========================================= -->

<div id="page3" style="display: none;">
	<div class="row">	
		<div class="panel panel-success">
			<div class="panel-heading">
				<h5 class="panel-title">31. Teachers (Write details of teachers who are working in this school) [Please note: The Codes of Q No. 31, see Page #4]</h5>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
					<!--<a type="button" href="javascript:teachers_add(id);" class="teachers_add">Add Another Teacher Details</a>-->

						<button type="button" id="addrow" class="btn btn-primary" onclick="addRow('teachers_table')">Add Teacher</button>
						<a id="deleterow" class="btn btn-primary" onclick="deleteRow('teachers_table')">Delete Teacher</a>
						<table id="teachers_table" class="table table-condensed">
							<thead>
								
									<th>?</th>
									<th>Full Name</th>
									<th>CNIC Number</th>
									<th>Gender</th>
									<th>Personnel Number from AG office</th>
									<th>D.O.B</th>
									<th>BPS (when appointed)</th>
									<th>Designation</th>
									<th>BPS (Time Scale)</th>
									<th>BS (Actual Scale)</th>
									<th>Date of Entry in this Govt. Service</th>
									<th>Type of Post</th>
									<th>Highest Academic Qualification</th>
									<th>Profe<br>ssional Trai<br>ning</th>
									<th>On Detailment</th>
									<th>Contact no#</th>
								
							</thead>
							<tbody class="noleftmargin">
								<tr>
									<td class="col-xs-2">
										<input type="checkbox" name="chk[]" />
									</td>
									<td class="col-xs-2">
										<?= $this->Form->input('teachers[]', array(
										'label' => false,
										'type' => 'text',																
										'onkeypress' => 'return isAlphabetKey(event)',
										'name' => 'teachers_name[]'
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
										'name' => 'teachers_cnic[]',
										'id' => 'teachers_cnic'
										//'class' => 'form-control'
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('teachers_gender[]', array(
										'label' => false,
										'options' => array('1' => 'M', '2' => 'F'),
										'name' => 'teachers_gender[]'
										//'class' => 'form-control'
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('teachers_personnel[]', array(
										'label' => false,
										'type' => 'text',
										'maxlength' => '11',
										'size' => '11',								
										'onkeypress' => 'return isNumberKey(event)',
										'name' => 'teachers_personnel[]'
										//'class' => 'form-control'
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('teachers_dob[]', array(
										'label' => false,
										'type' => 'text',
										'maxlength' => '11',
										'size' => '11',
										'onkeypress' => 'return isNumberKey(event)',
										'id' => 'teacher_dob',
										'name' => 'teachers_dob[]',
										'placeholder' => 'YYYY-MM-DD'
										//'style' => 'background: #FFF; cursor: pointer;',
										//'class' => 'datepicker_recurring_start'
										//'readonly'										
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
										'name' => 'teachers_appointment_bps[]'
										//'style' => 'width: 80%;'
										
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
										'name' => 'teachers_designation[]',
										'style' => 'width: 100%;'
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
										'name' => 'teachers_time_scale_bps[]',
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
										'onkeypress' => 'return isNumberKey(event)',
										'name' => 'teachers_actual_scale_bps[]'
										//'class' => 'form-control'
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('teachers_doe[]', array(
										'label' => false,
										'maxlength' => '11',
										'size' => '11',
										'id' => 'teacher_doe',
										'placeholder' => 'YYYY-MM-DD',
										//'style' => 'background: #FFF; cursor: pointer;',
										'name' => 'teachers_doe[]'
										//'class' => 'form-control'
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
										'name' => 'teachers_post_type[]'
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
										'name' => 'teachers_highest_qualification[]'
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
										'name' => 'teachers_professional_training[]'
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
										'name' => 'teachers_detailment[]'
										//'class' => 'form-control'
										)); 
										?>
									</td>
									<td >
										<?= $this->Form->input('teachers_contact[]', array(
										'label' => false,		
										'type' => 'text',						
										'onkeypress' => 'return isNumberKey(event)',
										'maxlength' => '11',
										'size' => '11',
										'id' => 'teachers_contact',
										'name' => 'teachers_contact[]'
										//'class' => 'form-control'
										)); 
										?>
									</td>									
								</tr>																
							</tbody>
							
						</table>	
					</div>				
				</div>	
			</div>
		</div>	
	</div>
	<button type="submit" class="btn btn-primary">Submit</button>
</div>


	<a id="btnpage11" class="btn btn-primary">Page 1</a>
	<a id="btnpage21" class="btn btn-primary">Page 2</a>
	<a id="btnpage31" class="btn btn-primary">Page 3</a>


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