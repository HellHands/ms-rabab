<?php

//debug($filled_details);

?>

<h1>Basic Form Inspection</h1>

<?php 
	$teachers_mentioned   = $filled_details['Asc201516']['sti_total_teachers'];
	$teachers_found_count = count($filled_details['Asc201516sTeacher']); 

	if($teachers_found_count < $teachers_mentioned)
	{ ?>

		<div class="alert alert-warning alert-dismissible" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  <strong>Warning!</strong> Please review your form before finalizing because our system detected that you did not enter all teachers' information. 
		</div>

	<?php
	}
?>

<?= $this->Html->link(__('Finalize'), array('action' => 'finalize_dio', $filled_details['Asc201516']['school_semis_code'], 1), array('class' => 'btn btn-primary'));?>
<?= $this->Html->link(__('Edit '.$filled_details['Asc201516']['school_semis_code']), array('action' => 'edit_asc201516', $filled_details['Asc201516']['school_semis_code']), array('class' => 'btn btn-primary', 'style' => 'margin-left: 10px;'));?>




<!-- //debug($filled_details_enr);  -->
