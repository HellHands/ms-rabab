<?php //debug(json_encode($districts, JSON_PRETTY_PRINT));  ?>
<?= $this->Form->create('mnform', array('url' => array('controller' => 'home', 'action' => 'add'))); ?>
<?= $this->Form->input('id', array('type' => 'hidden')); ?>
<?= $this->Form->input('userid', array('type' => 'hidden', 'value' => $uid)); ?>
<?= $this->Form->input('username', array('type' => 'hidden', 'value' => $username)); ?>
<div class="row">
	<div class="form-group col-md-12">
		<p class="lead">1. School Basic Information</p>
	</div>
	<div class="form-group col-md-4">
		<?= $this->Form->input('semis_code', array(
			'label'       => 'SEMIS Code', 
			'placeholder' => 'School SEMIS Code', 
			'type'        => 'text',
			'onkeypress' => 'return isNumberKey(event)',
			'maxlength'   => '9',
			'size'        => '9',
			'min'         => '0',
			'max'         => '499999999',
			'class'       => 'form-control',
			'required'
			)); 
		?>
  	</div>		

	<div class="form-group col-md-12">
		<?= $this->Form->input('date_of_visit', array(
			'label'      => 'Date of Visit', 
			'type'       => 'date',
			'dateFormat' => 'DMY',
			'maxDay' => Date('d'),
			'maxMonth' => Date('M') + 8,
			'maxYear' => Date('Y'),
			'class'      => 'form-control2 form-control'
			)); 
		?>
  	</div>

  	<div class="form-group col-md-12">
  		<?= $this->Form->input('time_of_visit', array(
			'label' => 'Time of Visit', 
			'type'  => 'time', 
			'class' => 'form-control2 form-control'
	  		)); 
  		?>
  	</div>	

	<div class="form-group col-md-4">
  		<?= $this->Form->input('cord_lat', array(
			'label'       => 'Latitude (N)', 
			'placeholder' => 'Latitude', 
			'type'        => 'number',
			'step'        => 'any',
			'class'       => 'form-control'
  			)); ?>
  	</div>

	<div class="form-group col-md-5">
		<?= $this->Form->input('cord_long', array(
			'label'       => 'Longitude (E)', 
			'type'        => 'number', 
			'step'        => 'any',
			'placeholder' => 'Longitude', 
			'class'       => 'form-control'
			)); 
		?>
  	</div>	
  	
	<div class="form-group col-md-4">
		<?= $this->Form->input('districts', array(
			'label' => 'District',
			'empty' => array('0' => 'Choose One'),
			'class' => 'form-control',
			'id'    => 'district_select',
			'required'
			)); 
		?>
	</div>

  	<div class="form-group col-md-4">
  		<?= $this->Form->input('tehsilid', array(
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
  		<?= $this->Form->input('ucid', array(
			'label'   => 'Union Council', 
			'options' => array(),
			'empty'   => array('0' => 'Choose One'), 
			'class'   => 'form-control',
			'id'      => 'uc_select',
			'required'
  			)); 
		?>
  	</div>

  	<div class="form-group col-md-3">
  		<?= $this->Form->input('prefixes', array(
			'label' => 'School Prefix', 
			'empty' => array('0' => 'Choose One'),
			'class' => 'form-control',
			'name'  => 'school_prefix',
			'required'
			)); 
  		?>
  	</div>

  	<div class="form-group col-md-9">
	  	<?= $this->Form->input('school_name', array(
			'label'       => 'School Name', 
			'placeholder' => 'School Name', 
			'class'       => 'form-control', 
			'required'
			)); 
	  	?>
  	</div>	

</div>

<hr>

<div class="row">
	<div class="form-group col-md-2">
  		<?= $this->Form->input('conditions', array(
			'label' => 'School Condition',   		
			'empty' => array('0' => 'Choose'), 
			'class' => 'form-control',
			'id'    => 'condition_select'
			)); 
  		?>
  	</div>

  	<div class="form-group col-md-3">
  		<?= $this->Form->input('status', array(
			'label'   => 'Status as on 31 October, 2015', 
			'options' => array(),
			'empty'   => 'Choose',
			'class'   => 'form-control',
			'id'      => 'status_select'
			)); 
  		?>
  	</div>

  	<div class="form-group col-md-7">
  		<?= $this->Form->input('closure_dmy', array(
			'label'      => 'Closure Day, Month & Year', 
			'type'       => 'date', 
			'dateFormat' => 'DMY',
			'maxYear'    => date('Y') - 1,
			'class'      => 'form-control form-control2 smalls',
			'id'         => 'closure_dmy',
			'disabled'
			)); 
  		?>
  	</div>

  	<div class="form-group col-md-12">
  		<?= $this->Form->input('reasons', array(
			'label' => 'Closure Major Reason', 
			'empty' => array('0' => 'Choose One'),
			'class' => 'form-control',
			'id'    => 'closure_reason',
			'name'  => 'closure_major_reason',
			'disabled'
			)); 
  		?>
  	</div>

  	<div class="form-group col-md-2">
  		<?= $this->Form->input('locationid', array(
			'label'   => 'Location', 
			'options' => array(
				'0' => 'Choose', 
				'1' => 'Urban', 
				'2' => 'Rural'
				),
			'class' => 'form-control'
			)); 
  		?>
  	</div>

  	<div class="form-group col-md-2">
  		<?= $this->Form->input('levels', array(
			'label' => 'Level', 
			'empty' => array('0' => 'Choose'), 
			'class' => 'form-control'
			)); 
  		?>
  	</div>

  	<div class="form-group col-md-2">
  		<?= $this->Form->input('genders', array(
			'label' => 'School Gender', 
			'empty' => array('0' => 'Choose'), 
			'class' => 'form-control'
			)); 
  		?>
  	</div>

  	<div class="form-group col-md-3">
  		<?= $this->Form->input('total_enrollment', array(
			'label'       => 'Total Enrollment', 
			'placeholder' => 'Write total enrollment', 
			'type'        => 'text',
			'onkeypress' => 'return isNumberKey(event)',
			'min'         => '0',			
			'class'       => 'form-control'
			)); 
  		?>
  	</div>

  	<div class="form-group col-md-3">
  		<?= $this->Form->input('headcount', array(
			'label'       => 'Headcount', 
			'placeholder' => 'Headcount on the day of visit', 
			'type'        => 'text',
			'onkeypress' => 'return isNumberKey(event)',
			'min'         => '0',
			'class'       => 'form-control',
			'disabled'
			)); 
  		?>
  	</div>	
</div>
  
<hr>  

<div class="row">
	<div class="form-group col-md-12">
		<p class="lead">2. School Building</p>
	</div>
	<div class="form-group col-md-3">
		<?= $this->Form->input('own_govt_building', array(
			'label'   => 'Own Government Building', 
			'options' => array('0' => 'Choose', '1' => 'Yes', '2' => 'No'),
			'class'   => 'form-control',
			'id'      => 'own_govt_building'
			)); 
		?>
	</div>

	<div class="form-group col-md-3">
		<?= $this->Form->input('nogovt_building_specify', array(
			'label' => '(If No, then specify)', 
			'class' => 'form-control',
			'id'    => 'nogovt_specify',
			'disabled'
			)); 
		?>
	</div>

	<div class="form-group col-md-3">
		<?= $this->Form->input('total_rooms', array(
			'label'       => 'Total No. of Rooms', 
			'placeholder' => 'Total Rooms', 
			'type'        => 'text',
			'onkeypress'  => 'return isNumberKey(event)',
			'min'         => '0',
			'class'       => 'form-control'
			)); 
		?>
	</div>

	<div class="form-group col-md-3">
		<?= $this->Form->input('total_classrooms', array(
			'label'       => 'Total Rooms As Classrooms', 
			'placeholder' => 'Total Classrooms', 
			'type'        => 'text',
			'onkeypress'  => 'return isNumberKey(event)',
			'min'         => '0',
			'class'       => 'form-control'
			)); 
		?>
	</div>	
</div>

<hr>

<div class="row">
	<div class="form-group col-md-12">
		<p class="lead">3. Basic Facilities</p>
	</div>
	<div class="form-group col-md-3">
		<?= $this->Form->input('boundarywall', array(
			'label'   => 'Boundary Wall', 
			'options' => array('0' => 'Choose', '1' => 'Yes', '2' => 'No'),
			'class'   => 'form-control'
			)); 
		?>
	</div>

	<div class="form-group col-md-3">
		<?= $this->Form->input('washroom', array(
			'label'   => 'Washroom Facility', 
			'options' => array('0' => 'Choose', '1' => 'Yes', '2' => 'No'), 
			'class'   => 'form-control',
			'id'      => 'washroom_facility'
			)); 
		?>
	</div>

	<div class="form-group col-md-3">
		<?= $this->Form->input('functional_washrooms', array(
			'label'      => 'Functional Washrooms', 
			'class'      => 'form-control',
			'type'       => 'text',
			'onkeypress' => 'return isNumberKey(event)',
			'min'        => '0',
			'id'         => 'functional_washrooms',
			'disabled'
			)); 
		?>
	</div>

	<div class="form-group col-md-3">
		<?= $this->Form->input('nonfunctional_washrooms', array(
			'label'      => 'Non Functional Washrooms', 
			'class'      => 'form-control',
			'type'       => 'text',
			'onkeypress' => 'return isNumberKey(event)',
			'min'        => '0',
			'id'         => 'nonfunctional_washrooms',
			'disabled'
			)); 
		?>
	</div>

	<div class="form-group col-md-6">
		<?= $this->Form->input('waterfacilities', array(
			'label'   => 'Drinking Water Facility', 
			'options' => array('1' => 'Yes', '2' => 'No'),
			'empty'   => array('0' => 'Choose'),
			'class'   => 'form-control'
			)); 
		?>
	</div>

	<div class="form-group col-md-6">
		<?= $this->Form->input('electricity', array(
			'label'   => 'Electricity Facility', 
			'options' => array('0' => 'Choose', '1' => 'Yes', '2' => 'No'), 
			'class'   => 'form-control'
			)); 
		?>
	</div>	
</div>

<hr>

<div class="row">
	<div class="form-group col-md-12">
		<p class="lead">4. Incentive and Fund Information</p>
	</div>
	<div class="form-group col-md-4">
		<?= $this->Form->input('smc_funds', array(
			'label'   => 'Has this school got SMC Funds?', 
			'options' => array('0' => 'Choose', '1' => 'Yes', '2' => 'No'),
			'class'   => 'form-control'
			)); 
		?>
	</div>

	<div class="form-group col-md-4">
		<?= $this->Form->input('free_textbooks', array(
			'label'   => 'Did the school receive free Textbooks in 2014-15?', 
			'options' => array('0' => 'Choose', '1' => 'Yes', '2' => 'No'),
			'class'   => 'form-control'
			)); 
		?>
	</div>

	<div class="form-group col-md-4">
		<?= $this->Form->input('girls_stipend', array(
			'label'   => 'Was Girls\' Stipend received in last academic year 2014-15?', 
			'options' => array('0' => 'Choose', '1' => 'Yes', '2' => 'No', '3' => 'Not Applicable'),
			'class'   => 'form-control'
			)); 
		?>
	</div>	
</div>

<hr>

<div class="row">
	<div class="form-group col-md-12">
		<p class="lead">5.(a) Teaching staff detail</p>
	</div>
	<div class="form-group col-md-2">
		<?= $this->Form->input('govt_male', array(
			'label'       => 'Govt Male', 
			'placeholder' => 'Govt Male', 
			'type'        => 'text',
			'onkeypress'  => 'return isNumberKey(event)',
			'min'         => '0',
			'class'       => 'form-control'
			)); 
		?>
	</div>

	<div class="form-group col-md-2">
		<?= $this->Form->input('nongovt_male', array(
			'label'       => 'Non-Govt Male', 
			'placeholder' => 'Non-Govt Male',
			'type'        => 'text',
			'onkeypress'  => 'return isNumberKey(event)',
			'min'         => '0',
			'class'       => 'form-control'
			)); 
		?>
	</div>

	<div class="form-group col-md-2">
		<?= $this->Form->input('govt_female', array(
			'label'       => 'Govt Female', 
			'placeholder' => 'Govt Female', 
			'type'        => 'text',
			'onkeypress'  => 'return isNumberKey(event)',
			'min'         => '0',
			'class'       => 'form-control'
			)); 
		?>
	</div>

	<div class="form-group col-md-2">
		<?= $this->Form->input('nongovt_female', array(
			'label'       => 'Non-Govt Female', 
			'placeholder' => 'Non-Govt Female', 
			'type'        => 'text',
			'onkeypress'  => 'return isNumberKey(event)',
			'min'         => '0',
			'class'       => 'form-control'
			)); 
		?>
	</div>

	<div class="form-group col-md-2">
		<?= $this->Form->input('total_teachers', array(
			'label' => 'Total Teachers', 
			'type'       => 'text',
			'onkeypress' => 'return isNumberKey(event)',
			'min'   => '0',
			'readonly',
			'class' => 'form-control'
			)); 
		?>
	</div>

	<div class="form-group col-md-2">
		<?= $this->Form->input('vacant', array(
			'label'       => 'Vacant', 
			'placeholder' => 'Vacant', 
			'type'        => 'text',
			'onkeypress'  => 'return isNumberKey(event)',
			'min'         => '0',
			'class'       => 'form-control'
			)); 
		?>
	</div>	
</div>

<hr>

<div class="row">
	<div class="form-group col-md-12">
		<p class="lead">5.(b) Non-teaching staff detail</p>
	</div>
	<div class="form-group col-md-3">
		<?= $this->Form->input('nonteaching_male', array(
			'label'       => 'Non-Teaching Male', 
			'placeholder' => 'Non-Teaching Male', 
			'type'        => 'text',
			'onkeypress' => 'return isNumberKey(event)',
			'min'         => '0',
			'class'       => 'form-control'
			)); 
		?>
	</div>

	<div class="form-group col-md-3">
		<?= $this->Form->input('nonteaching_female', array(
			'label'       => 'Non-Teaching Female', 
			'placeholder' => 'Non-Teaching Female', 
			'type'        => 'text',
			'onkeypress' => 'return isNumberKey(event)',
			'min'         => '0',
			'class'       => 'form-control'
			)); 
		?>
	</div>

	<div class="form-group col-md-3">
		<?= $this->Form->input('total_nonteaching_staff', array(
			'label'      => 'Total Non-Teaching Staff', 
			'type'       => 'text',
			'onkeypress' => 'return isNumberKey(event)',
			'min'        => '0',
			'class'      => 'form-control',
			'readonly'
			)); 
		?>
	</div>	
</div>

<hr>

<div class="row">
	<div class="form-group col-md-12">
		<p class="lead">6. Questions</p>
	</div>
	<div class="form-group col-md-5">
		<?= $this->Form->input('headcount_teachingstaff', array(
			'label'       => '(a). Headcount of Teaching Staff', 
			'placeholder' => 'Headcount of Teaching Staff on the day of visit', 
			'type'        => 'text',
			'onkeypress' => 'return isNumberKey(event)',
			'min'         => '0',
			'class'       => 'form-control'
			)); 
		?>
	</div>

	<div class="form-group col-md-5">
		<?= $this->Form->input('headcount_nonteachingstaff', array(
			'label'       => '(b). Headcount of Non-Teaching Staff', 
			'placeholder' => 'Headcount of Non-Teaching Staff on the day of visit', 
			'type'        => 'text',
			'onkeypress' => 'return isNumberKey(event)',
			'min'         => '0',
			'class'       => 'form-control'
			)); 
		?>
	</div>	
</div>

<hr>

<div class="row">
	<div class="form-group col-md-12">
		<p class="lead">7. Detail of data collector mentioned on ASC 2015-16 Proforma</p>	
	</div>

	<div class="form-group col-md-6">
		<?= $this->Form->input('dcname', array(
			'label'       => 'Data Collector Name', 
			'placeholder' => 'Data Collector Name', 
			'onkeypress' => 'return isAlphabetKey(event)',
			'class'       => 'form-control'
			)); 
		?>
	</div>

	<div class="form-group col-md-5">
		<?= $this->Form->input('dccontact', array(
			'label'       => 'Data Collector Contact#', 
			'placeholder' => 'Data Collector Contact', 
			'placeholder' => '03001234567', 
			'type'        => 'text',
			'onkeypress'  => 'return isNumberKey(event)',
			'maxlength'   => '11',
			'size'        => '11',
			'min'         => '0',
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
			'onkeypress' => 'return isAlphabetKey(event)',
			'class'       => 'form-control'
			)); 
		?>
	</div>

	<div class="form-group col-md-6">
		<?= $this->Form->input('dpcnic', array(
			'label'       => 'Data Provider CNIC', 
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
			'placeholder' => '03001234567', 
			'type'        => 'text',
			'onkeypress'  => 'return isNumberKey(event)',
			'maxlength'   => '11',
			'size'        => '11',
			'min'         => '0',
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
		<?= $this->Form->input('dmname', array('label' => 'Data Monitor Name', 'placeholder' => 'Data Monitor Name', 
		'onkeypress' => 'return isAlphabetKey(event)',
		'class' => 'form-control')); ?>
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
			'placeholder' => '03001234567', 
			'type'        => 'text',
			'onkeypress'  => 'return isNumberKey(event)',
			'maxlength'   => '11',
			'size'        => '11',
			'min'         => '0',
			'class'       => 'form-control'
			)); 
		?>
	</div>	

	<div class="form-group col-md-3">
		<?= $this->Form->input('complete_form_filled', array(
			'label'   => 'Complete Form Filled', 
			'options' => array('0' => 'Choose', '1' => 'Yes', '2' => 'No'),
			'class'   => 'form-control'
			)); 
		?>
	</div>

	<div class="form-group col-md-3">
		<?= $this->Form->input('pictures_taken', array(
			'label'   => 'Pictures Taken', 
			'options' => array('0' => 'Choose', '1' => 'Yes', '2' => 'No'),
			'class'   => 'form-control'
			)); 
		?>
	</div>

	<div class="form-group col-md-3">
		<?= $this->Form->input('evidences_collected', array(
			'label'   => 'Evidences Collected', 
			'options' => array('0' => 'Choose', '1' => 'Yes', '2' => 'No'),
			'class'   => 'form-control'
			)); 
		?>
	</div>
	
</div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		<?= $this->Form->end(); ?>	

<br><br>


