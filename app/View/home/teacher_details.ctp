<table class="teacher_basic_details">
<tr><th colspan=2><h1>Basic Info of Teacher</h1></th></tr>
<tr>
<td><strong>Name</strong></td>
<td><?php echo $teacher['Teacher']['teacher_name']?></td>
</tr>

<tr>
<td><strong>Designation / BPS</strong></td>
<td><?php echo $teacher['Teacher']['designation_bps']?></td>
</tr>

<tr>
<td><strong>CNIC Number</strong></td>
<td><?php echo $teacher['Teacher']['teacher_cnic']?></td>
</tr>

<tr>
<td><strong>Gender</strong></td>
<td><?php if($teacher['Teacher']['gender'] == 1) { echo "Male"; }elseif($teacher['Teacher']['gender'] == 0) { echo "Female"; } ?></td>
</tr>

<tr>
<td><strong>Domicile</strong></td>
<td><?php echo $teacher['Teacher']['domicile']?></td>
</tr>

<tr>
<td><strong>Date Of Birth</strong></td>
<td><?php echo date('d/m/Y',strtotime($teacher['Teacher']['date_of_birth']))?></td>
</tr>

<tr>
<td><strong>Personnel Number</strong></td>
<td><?php echo $teacher['Teacher']['personnel_no']?></td>
</tr>

<tr>
<td><strong>Date of Appointment</strong></td>
<td><?php echo date('d/m/Y',strtotime($teacher['Teacher']['date_of_appointment']))?></td>
</tr>

<tr>
<td><strong>Office Address</strong></td>
<td><?php echo $teacher['Teacher']['office_address']?></td>
</tr>

<tr>
<td><strong>District</strong></td>
<td><?php echo $district['Region']['name']?></td>
</tr>

<tr>
<td><strong>Phone Number</strong></td>
<td><?php echo $teacher['Teacher']['teacher_phone']?></td>
</tr>

<tr>
<td><strong>Teacher Mobile</strong></td>
<td><?php echo $teacher['Teacher']['teacher_mobile']?></td>
</tr>

<tr>
<td><strong>Teacher Email</strong></td>
<td><?php echo $teacher['Teacher']['teacher_email']?></td>
</tr>

</table>

<table class="teacher_experiences">
<tr><th colspan=5><h1>Teacher Experiences</h1></th></tr>
<tr>
	<th>From</th>
	<th>To</th>
	<th>Designation</th>
	<th>Posting</th>
	<th>Job Nature</th>
</tr>
<?php foreach($teacher_experiences as $teacher_experience) { ?>
<tr>
	<td><?php echo date('d/m/Y',strtotime($teacher_experience['TeacherExperience']['experience_from']))?></td>
	<td><?php echo date('d/m/Y',strtotime($teacher_experience['TeacherExperience']['experience_to']))?></td>
	<td><?php echo $teacher_experience['TeacherExperience']['experience_designation']?></td>
	<td><?php echo $teacher_experience['TeacherExperience']['experience_posting']?></td>
	<td><?php echo $teacher_experience['TeacherExperience']['experience_job_nature']?></td>
</tr>
<?php } ?>
</table>


<table class="teacher_experiences">
<tr><th colspan=5><h1>Teacher Qualifications</h1></th></tr>
<tr>
	<th>Qualification Name</th>
	<th>From</th>
	<th>To</th>
	<th>Institute</th>
</tr>
<?php foreach($teacher_qualifications as $teacher_qualification) { ?>
<tr>
	<td><?php echo $teacher_qualification['TeacherQualification']['qualification_name']?></td>
	<td><?php echo date('d/m/Y',strtotime($teacher_qualification['TeacherQualification']['qualification_from']))?></td>
	<td><?php echo date('d/m/Y',strtotime($teacher_qualification['TeacherQualification']['qualification_to']))?></td>
	<td><?php echo $teacher_qualification['TeacherQualification']['qualification_institute']?></td>
</tr>
<?php } ?>
</table>