<?php
/*
<br><br><br>
<div> <h1 style="height:50px;text-align:center; font-size:20px;">Classroom Observations</h1><div>
<table>
<tr><th>School Name</th><th>Semis Code</th><th>Teachers Name</th><th>Round</th><th>Edit</th></tr>
<?php 
foreach($classroomObservations as $classroomObservation)
{
?>
<tr>
	<td>
	<?php 
		echo $classroomObservation['ClassroomObservation']['school_name'];
	?>
	</td>
	<td>
	<?php
		echo $classroomObservation['ClassroomObservation']['semis_code'];
	?>
	</td>
	<td>
	<?php
		echo $classroomObservation['ClassroomObservation']['teachers_name'];
	?>
	</td>
	<td>
	<?php 
		echo $classroomObservation['ClassroomObservation']['round'];
	?>
	</td>
		
	<td>
	<?php
		echo '<a href="'.$this->webroot.'/home/edit_classroom_observation/'.$classroomObservation['ClassroomObservation']['id'].'"> Edit</a>';
	?>
	</td>
</tr>
<?php } ?>
<table>
<br><br>
<table>
<tr><td><div><a href="<?php echo $this->webroot?>home/add_classroom_observation">Add Classroom Observation</a></div></td></tr>
</table>
*/ ?>

<br>
<br>
<br>
<br>

<!-- Shows the next and previous links -->
<?php echo $this->Paginator->prev('<< '.__('Previous Page', true), array(), null, array('class'=>'disabled')); echo "  "; ?>
<!-- Shows the page numbers --><?php echo $this->Paginator->numbers(); echo " ";  ?>
<?php echo $this->Paginator->next(__(' Next Page', true).' >>', array(), null, array('class'=>'disabled')); ?><br /><br /><br />
 <!-- prints X of Y, where X is current page and Y is number of pages -->
<?php echo $this->Paginator->counter(array(    'format' => 'Page %page% of %pages%, showing %current% records out of             %count% total, starting on record %start%, ending on %end%'));  ?><br /><br /><br />

<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
		<thead>
		<tr>
		<th><?php echo $this->Paginator->sort('School Name', 'school_name'); ?></th>         
		<th><?php echo $this->Paginator->sort('Semis Code', 'semis_code'); ?></th>         
		<th><?php echo $this->Paginator->sort('teachers_name', 'teachers_name'); ?></th>         
		<th><?php echo $this->Paginator->sort('Round', 'round'); ?></th>         
		<th><?php echo "Edit"; ?></th>     
		</tr>
		</thead>
		<tbody>
        <?php foreach($data as $classroomObservation): ?>     
		<tr>
		<td><?php echo $classroomObservation['ClassroomObservation']['school_name']?></td>
		<td><?php echo $classroomObservation['ClassroomObservation']['semis_code']?></td>
		<td><?php echo $classroomObservation['ClassroomObservation']['teachers_name']?></td>
		<td><?php echo $classroomObservation['ClassroomObservation']['round']?></td>
		<td><a href="<?php echo $this->webroot?>home/edit_classroom_observation/<?php echo $classroomObservation['ClassroomObservation']['id']?>">Edit</a></td>
		</tr>
		<?php endforeach; ?> 
		</tbody>
		</table>
<br>
<br>
<br>
<br>
<!-- Shows the page numbers --><?php echo $this->Paginator->numbers(); ?>
<!-- Shows the next and previous links -->
<?php echo $this->Paginator->prev('« Previous', null, null, array('class' => 'disabled')); ?>
<?php echo $this->Paginator->next('Next »', null, null, array('class' => 'disabled')); ?>
 <!-- prints X of Y, where X is current page and Y is number of pages -->
 <?php echo $this->Paginator->counter(array(    'format' => 'Page %page% of %pages%, showing %current% records out of             %count% total, starting on record %start%, ending on %end%'));  ?><br /><br /><br />
 
 
<br><br>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<tr><td><div><a href="<?php echo $this->webroot?>home/add_classroom_observation">Add Classroom Observation</a></div></td></tr>
</table>