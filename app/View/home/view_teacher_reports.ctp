<?php if($report_type == 'skill') {?>
<table>
<tr><td colspan="6"><h1><div style="float:left; text-align:center; width:100%; height:30px; background-color:#4455ff; color:#fff;">List Of All The Teachers With <?php echo $skill?></div></h1></td></tr>
<tr>
<th>Teacher Name</th>
<th>Gender</th>
<th>District</th>
<th>Teacher Personnel No</th>
<th>Teacher Designation</th>
<th>View Details</th>
<th>Edit</th>
</tr>
<?php if(!empty($teachers)) { ?>
<?php foreach($teachers as $teacher) { ?>
<tr>
<td><?php echo $teacher['Teacher']['teacher_name']?></td>
<td><?php if($teacher['Teacher']['gender'] == 1) { echo "Male"; }elseif($teacher['Teacher']['gender'] == 0){ echo "Female"; } ?></td>
<td><?php foreach($districts as $district) { if(($district['Region']['id']) == ($teacher['Teacher']['district_code'])) { echo $district['Region']['name']; }  } ?></td>
<td><?php echo $teacher['Teacher']['personnel_no']?></td>
<td><?php echo $teacher['Teacher']['designation_bps']?></td>
<td><a href='<?php echo $this->webroot?>home/teacher_details/<?php echo $teacher['Teacher']['id']?>'>Click</td>
<td><a href="<?php echo $this->webroot?>home/edit_teacher/<?php echo $teacher['Teacher']['id']?>">Edit</a></td>
</tr>
<?php } }else{ ?>
<tr><td colspan="6" style="text-align:center;"><strong>No Results Were Found</strong></td></tr>
<?php } ?>
</table>
<?php }elseif($report_type == 'interest'){ ?>
<table>
<tr><td colspan="6"><h1><div style="float:left; text-align:center; width:100%; height:30px; background-color:#4455ff; color:#fff;">List Of All The Teachers With Interest in <?php echo $interest?></div></h1></td></tr>
<tr>
<th>Teacher Name</th>
<th>Gender</th>
<th>District</th>
<th>Teacher Personnel No</th>
<th>Teacher Designation</th>
<th>View Details</th>
<th>Edit</th>
</tr>
<?php if(!empty($teachers)) { ?>
<?php foreach($teachers as $teacher) { ?>
<tr>
<td><?php echo $teacher['Teacher']['teacher_name']?></td>
<td><?php if($teacher['Teacher']['gender'] == 1) { echo "Male"; }elseif($teacher['Teacher']['gender'] == 0){ echo "Female"; } ?></td>
<td><?php foreach($districts as $district) { if(($district['Region']['id']) == ($teacher['Teacher']['district_code'])) { echo $district['Region']['name']; }  } ?></td>
<td><?php echo $teacher['Teacher']['personnel_no']?></td>
<td><?php echo $teacher['Teacher']['designation_bps']?></td>
<td><a href='<?php echo $this->webroot?>home/teacher_details/<?php echo $teacher['Teacher']['id']?>'>Click</td>
<td><a href="<?php echo $this->webroot?>home/edit_teacher/<?php echo $teacher['Teacher']['id']?>">Edit</a></td>
</tr>
<?php } }else{ ?>
<tr><td colspan="6" style="text-align:center;"><strong>No Results Were Found</strong></td></tr>
<?php } ?>
</table>
<?php }elseif($report_type == 'qualification'){ ?>
<table>
<tr><td colspan="6"><h1><div style="float:left; text-align:center; width:100%; height:30px; background-color:#4455ff; color:#fff;">List Of All The Teachers With Qualification of <?php echo $qualification?></div></h1></td></tr>
<tr>
<th>Teacher Name</th>
<th>Gender</th>
<th>District</th>
<th>Teacher Personnel No</th>
<th>Teacher Designation</th>
<th>View Details</th>
<th>Edit</th>
</tr>
<?php if(!empty($teachers)) { ?>
<?php foreach($teachers as $teacher) { ?>
<tr>
<td><?php echo $teacher['Teacher']['teacher_name']?></td>
<td><?php if($teacher['Teacher']['gender'] == 1) { echo "Male"; }elseif($teacher['Teacher']['gender'] == 0){ echo "Female"; } ?></td>
<td><?php foreach($districts as $district) { if(($district['Region']['id']) == ($teacher['Teacher']['district_code'])) { echo $district['Region']['name']; }  } ?></td>
<td><?php echo $teacher['Teacher']['personnel_no']?></td>
<td><?php echo $teacher['Teacher']['designation_bps']?></td>
<td><a href='<?php echo $this->webroot?>home/teacher_details/<?php echo $teacher['Teacher']['id']?>'>Click</td>
<td><a href="<?php echo $this->webroot?>home/edit_teacher/<?php echo $teacher['Teacher']['id']?>">Edit</a></td>
</tr>
<?php } }else{ ?>
<tr><td colspan="6" style="text-align:center;"><strong>No Results Were Found</strong></td></tr>
<?php } ?>
</table>
<?php }elseif($report_type == 'skillssummary') { ?>
<table>
<tr><td colspan="6"><h1><div style="float:left; text-align:center; width:100%; height:30px; background-color:#4455ff; color:#fff;">Number Of Teacher With IT Skills in Possession</div></h1></td></tr>
<tr>
<th>Number of Teachers<br /> with Ms Word Skill</th>
<th>Number of Teachers<br /> with Ms Excel Skill</th>
<th>Number of Teachers<br /> with Ms Access Skill</th>
<th>Number of Teachers<br /> with Ms PowerPoint Skill</th>
<th>Number of Teachers<br /> with Ms Email Skill</th>
<th>Number of Teachers<br /> with Ms MS Project Skill</th>
<th>Number of Teachers<br /> with Ms Presentation Skill</th>
<th>Number of Teachers<br /> with Ms Report Writing Skill</th>
<th>Number of Teachers<br /> with Ms Interpersonal Skill</th>
</tr>

<tr>

<td><?php echo $count_word_skill?></td>
<td><?php echo $count_excel_skill?></td>
<td><?php echo $count_access_skill?></td>
<td><?php echo $count_powerpoint_skill?></td>
<td><?php echo $count_email_skill?></td>
<td><?php echo $count_msproject_skill?></td>
<td><?php echo $count_presentation_skill?></td>
<td><?php echo $count_reportwriting_skill?></td>
<td><?php echo $count_interpersonal_skill?></td>

</tr>

</table>
<?php } ?>