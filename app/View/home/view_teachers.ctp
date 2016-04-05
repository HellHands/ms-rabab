<?php /*
<table>
<tr><td colspan="4"><h1><div style="float:left; text-align:center; width:100%; height:30px; background-color:#4455ff; color:#fff;">List Of All The Teachers</div></h1></td></tr>
<tr>
<th>Teacher Name</th>
<th>Gender</th>
<th>District</th>
<th>Teacher Personnel No</th>
<th>Teacher Designation</th>
<th>View Details</th>
<th>Edit</th>
</tr>
<?php foreach($teachers as $teacher) { ?>
<tr>
<td><?php echo $teacher['Teacher']['teacher_name']?></td>
<td><?php if($teacher['Teacher']['gender'] == 1) { echo "Male"; }elseif($teacher['Teacher']['gender'] == 0){ echo "Female"; } ?></td>
<td><?php foreach($districts as $district) { if(($district['Region']['id']) == ($teacher['Teacher']['domicile'])) { echo $district['Region']['name']; }  } ?></td>
<td><?php echo $teacher['Teacher']['personnel_no']?></td>
<td><?php echo $teacher['Teacher']['bps']?></td>
<td><a href='<?php echo $this->webroot?>home/teacher_details/<?php echo $teacher['Teacher']['id']?>'>Click</td>
<td><a href="<?php echo $this->webroot?>home/edit_teacher/<?php echo $teacher['Teacher']['id']?>">Edit</a></td>
</tr>
<?php } ?>
</table>

<table><tr><td><a href="<?php echo $this->webroot?>home/add_teacher">Add Another Teacher</a></td><td></td></tr></table>
*/ ?>
<br>
<br>
<form style=" float:right; margin-top:-20px; font-size:14px; width:100%;" id="edit_school_form" name="edit_school_form" action="<?php echo $this->webroot?>home/index" method="post">
			<div style="margin-left:20px;">Search Teacher (by personnel No.)</div> <a href="#" onclick="document.edit_school_form.submit()" ><img src="<?php echo $this->webroot?>img/search_icon.png"  style="margin-right:1222px; :" alt="Search" width="21" height="20" type="submit" value="submit" class="search_icon" /></a>
			<input name="personnel_no" type="text"  style="float:left;" id="textfield" class="search_field" />
</form>

<br>
<br>

<!-- Shows the next and previous links -->
<?php echo $this->Paginator->prev('<< '.__('Previous Page', true), array(), null, array('class'=>'disabled')); echo " "; ?>
<!-- Shows the page numbers --><?php echo $this->Paginator->numbers(); echo " ";  ?>
<?php echo $this->Paginator->next(__('Next Page', true).' >>', array(), null, array('class'=>'disabled'));; ?><br /><br /><br />
 <!-- prints X of Y, where X is current page and Y is number of pages -->
<?php echo $this->Paginator->counter(array(    'format' => 'Page %page% of %pages%, showing %current% records out of             %count% total, starting on record %start%, ending on %end%'));  ?><br /><br /><br />

<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
		<tr>
		<th><?php echo $this->Paginator->sort('Tdeachers Name', 'teacher_name'); ?></th>         
		<th><?php echo $this->Paginator->sort('Gender', 'gender'); ?></th>         
		<th><?php echo $this->Paginator->sort('District Code', 'domicile'); ?></th>         
		<th><?php echo $this->Paginator->sort('Personnel Number', 'personnel_no'); ?></th>         
		<th><?php echo $this->Paginator->sort('Designation (Bps)', 'bps'); ?></th>         
		<th><?php echo "View Details"; ?></th>         
		<th><?php echo "Edit"; ?></th>     
		</tr>
        <?php foreach($data as $teacher): ?>     
		<tr>
		<td><?php echo $teacher['Teacher']['teacher_name']?></td>
		<td><?php if($teacher['Teacher']['gender'] == 1) { echo "Male"; }elseif($teacher['Teacher']['gender'] == 0){ echo "Female"; } ?></td>
		<td><?php foreach($districts as $district) { if(($district['Region']['id']) == ($teacher['Teacher']['domicile'])) { echo $district['Region']['name']; }  } ?></td>
		<td><?php echo $teacher['Teacher']['personnel_no']?></td>
		<td><?php echo $teacher['Teacher']['bps']?></td>
		<td><a href='<?php echo $this->webroot?>home/teacher_details/<?php echo $teacher['Teacher']['id']?>'>Click</td>
		<td><a href="<?php echo $this->webroot?>home/edit_teacher/<?php echo $teacher['Teacher']['id']?>">Edit</a></td>
		</tr>     
		<?php endforeach; ?> 
		</table>
<br>
<br>
<br>
<br>

<!-- Shows the next and previous links -->
<?php echo $this->Paginator->prev('<< '.__('Previous Page', true), array(), null, array('class'=>'disabled')); echo " "; ?>
<!-- Shows the page numbers --><?php echo $this->Paginator->numbers(); echo " ";  ?>
<?php echo $this->Paginator->next(__('Next Page', true).' >>', array(), null, array('class'=>'disabled'));; ?><br /><br /><br />
 <!-- prints X of Y, where X is current page and Y is number of pages -->
<?php echo $this->Paginator->counter(array(    'format' => 'Page %page% of %pages%, showing %current% records out of             %count% total, starting on record %start%, ending on %end%'));  ?><br /><br /><br />