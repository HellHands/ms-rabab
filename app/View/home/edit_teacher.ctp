<script type="text/javascript" src="<?php echo $this->webroot?>js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot?>js/timepicker.js"></script>
<link href="<?php echo $this->webroot?>css/jquery-ui-1.7.2.custom.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->webroot?>css/timepicker.css" rel="stylesheet" type="text/css" />

<script>
$(function() {
$('#new_teacher_form').validate();
});


 $(document).ready(function () {

            
            $('.datetime').datepicker({
                duration: '',
                showTime: false,
                constrainInput: false,
                time24h: true,
                timeFormat: 'hh:ii:ss',
                
            });



        });


function add_qualification(id)
{
	$('#teacher_qualification').append('<tr><input type="hidden" name="qualification_type['+id+']" value="0"/><td style="background-color:#bbffdd;">Qualification # '+id+'</td><td></td></tr><tr><td>From</td><td><input type="text" name="qualification_from['+id+']" value="" class="datetime" /></td></tr><tr><td>To</td><td><input type="text" name="qualification_to['+id+']" value="" class="datetime" /></td></tr><tr><td>Degree / Certificate / Diploma</td><td><select name="qualification_name['+id+']" class=""><option value="" >Select</option><option value="ba" >B.A</option><option value="bsc" >B.S.C</option><option value="bed" >B.ED</option><option value="bs" >B.S</option><option value="ma" >M.A</option><option value="msc" >M.S.C</option><option value="med" >M.ED</option><option value="ms" >M.S</option><option value="mphil" >M.Phil</option><option value="phd" >P.H.D</option><option value="other" >Other</option></select></td></tr><tr><td>Institution</td><td><input type="text" name="qualification_institute['+id+']" value="" /></td></tr>');
	
	
	$('.datetime').datepicker({
                duration: '',
                showTime: false,
                constrainInput: false,
                time24h: true,
                timeFormat: 'hh:ii:ss',
                
            });
	
	y = id+1;
	$('#add_qualification').attr('onClick','add_qualification('+y+')');
}

function add_certification(id)
{
	$('#teacher_certification').append('<tr><td style="background-color:#bbddff;" >Certification # '+id+'</td><td></td></tr><tr><input type="hidden" name="certification_type['+id+']" value="1"/><td>From</td><td><input type="text" name="certification_from['+id+']" value="" class="datetime" /></td></tr>	<tr><td>To</td><td><input type="text" name="certification_to['+id+']" value="" class="datetime" /></td></tr><tr><td>Degree / Certificate / Diploma</td><td><input name="certification_name['+id+']" value="" /></td></tr><tr><td>Institution</td><td><input type="text" name="certification_institute['+id+']" value="" /></td></tr>');
	
	
	
	$('.datetime').datepicker({
                duration: '',
                showTime: false,
                constrainInput: false,
                time24h: true,
                timeFormat: 'hh:ii:ss',
                
            });
	
	y = id+1;
	$('#add_certification').attr('onClick','add_certification('+y+')');
}

function add_training(id)
{
	$('#teacher_training').append('<tr><td style="background-color:#ffbbdd;" >Training # '+id+'</td><td></td></tr><tr><input type="hidden" name="training_type['+id+']" value="2"/><td>From</td><td><input type="text" name="training_from['+id+']" value="" class="datetime" /></td></tr>	<tr><td>To</td><td><input type="text" name="training_to['+id+']" value="" class="datetime" /></td></tr><tr><td>Degree / Certificate / Diploma</td><td><select name="training_name['+id+']" class=""><option value="" >Select</option><option value="ptc" >P.T.C</option><option value="ct" >C.T</option><option value="other" >Other</option></select></td></tr><tr><td>Institution</td><td><input type="text" name="training_institute['+id+']" value="" /></td></tr>');
	
	$('.datetime').datepicker({
                duration: '',
                showTime: false,
                constrainInput: false,
                time24h: true,
                timeFormat: 'hh:ii:ss',
                
            });
	
	y = id+1;
	$('#add_training').attr('onClick','add_training('+y+')');
}


function add_experience(id)
{
	$('#teacher_experience').append('<tr><td style="background-color:#bbffdd;">Experience # '+id+'</td><td></td></tr><tr><td>From</td><td><input type="text" value="" name="experience_from['+id+']" class="datetime" /></td></tr><tr><td>To</td><td><input type="text" value="" name="experience_to['+id+']" class="datetime" /></td></tr><tr><td>Designation</td><td><input type="text" value="" name="experience_designation['+id+']" /></td></tr><tr><td>Place of Posting</td><td><input type="text" value="" name="experience_posting['+id+']" /></td></tr><tr><td>Nature of Job</td><td><input type="text" value="" name="experience_job_nature['+id+']" /></td></tr>');
	
		$('.datetime').datepicker({
                duration: '',
                showTime: false,
                constrainInput: false,
                time24h: true,
                timeFormat: 'hh:ii:ss',
                
            });
	
	
	y = id+1;
	$('#add_experience').attr('onClick','add_experience('+y+')');
}

function add_challenge(id)
{
	$('#teacher_challenge').append('<tr><input type="hidden" name="is_contribution['+id+']" value"0"/><td style="background-color:#bbffdd;" width=50%>Challenge # '+id+'</td><td></td></tr><tr><td>Challenge / Issue Managed</td><td><input type="text" name="achievement_issue['+id+']" value="" /></td></tr><tr><td>Actions Taken / Activities Performed </td><td><input type="text" name="achievement_action['+id+']" value="" /></td></tr><tr><td>Output / Outcome Achieved (Support with Data evidence)</td><td><input type="text" name="achievement_output['+id+']" value="" /></td></tr>');
	

	
	y = id+1;
	$('#add_challenge').attr('onClick','add_challenge('+y+')');
}

function add_contribution(id)
{
	$('#teacher_contribution').append('<tr><input type="hidden" name="is_contribution['+id+']" value"1"/><td style="background-color:#bbffdd;" width=50%>Contribution # '+id+'</td><td></td></tr><tr><td>Contribution Title</td><td><input type="text" name="contribution_title['+id+']" value="" /></td></tr><tr><td>Name of Organization for which contribution was made</td><td><input type="text" name="contribution_organization['+id+']" value="" /></td></tr><tr><td>Year of Publication / Submission</td><td><input type="text" class="datetime"  name="contribution_year['+id+']" value="" /></td></tr>');
	
	
	$('.datetime').datepicker({
                duration: '',
                showTime: false,
                constrainInput: false,
                time24h: true,
                timeFormat: 'hh:ii:ss',
                
            });
			
			
	y = id+1;
	$('#add_contribution').attr('onClick','add_contribution('+y+')');
}





</script>

<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<tr><td colspan="6"><h1><div style="float:left; text-align:center; width:100%; background-color:#4455ff; color:#fff;">Reform Support Unit</div></h1></td></tr>
<tr><td colspan="6"><h2><div style="float:left; text-align:center; width:100%; background-color:#4455ff; color:#fff;">Human Resource Management Information System (HRMIS)</div></h2></td></tr>
</table>
<form id="new_teacher_form" action="<?php echo $this->webroot?>home/submit_teacher_details/<?php echo $teacher['Teacher']['id']?>" method="post">
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<tr><td colspan=2><h3>I - Personnel Information</h3></td></tr>
<tr><td>Name </td><td><input type="text" name="teacher_name" class="required" value="<?php echo $teacher['Teacher']['teacher_name']?>" /></td></tr>
<tr><td>Designation & BPS</td><td><input type="text" name="bps" class="" value="<?php echo $teacher['Teacher']['bps']?>" /></td></tr>
<tr><td>CNIC</td><td><input type="text" name="cnic_new" class="" value="<?php echo $teacher['Teacher']['cnic_new']?>" /></td></tr>
<tr><td>Gender</td>
	<td>
		<select name="gender" class="">
		<option value="0" <?php if(($teacher['Teacher']['gender']) == 0){ echo 'selected="selected"'; } ?> >Female</option>
		<option value="1" <?php if(($teacher['Teacher']['gender']) == 1){ echo 'selected="selected"'; } ?> >Male</option>
		</select>
	</td>
</tr>
<tr><td>Domicile</td><td><input type="text" name="domicile" class="" value="<?php echo $teacher['Teacher']['domicile']?>" /></td></tr>
<tr><td>Date of Birth</td><td><input type="text" name="date_of_birth" class="datetime" value="<?php echo date('d/m/Y',strtotime($teacher['Teacher']['date_of_birth']))?>" /></td></tr>
<tr><td>Personnel No.</td><td><input type="text" name="personnel_no" class="" value="<?php echo $teacher['Teacher']['personnel_no']?>" /></td></tr>
<tr><td>Date of Appointment</td><td><input type="text" name="dateofjoining" class="datetime" value="<?php echo date('d/m/Y',strtotime($teacher['Teacher']['dateofjoining']))?>" /></td></tr>
<tr><td>Office Address</td><td><input type="text" name="office_address" class="" value="<?php echo $teacher['Teacher']['office_address']?>" /></td></tr>
<tr><td>District</td>
	<td>	
		<select name="domicile" class="">
		<option value="">Select</option>
		<?php foreach($regions as $region) { ?>
		<option value="<?php echo $region['Region']['id']?>" <?php if(($teacher['Teacher']['domicile']) == ($region['Region']['id'])){ echo 'selected="selected"'; } ?> ><?php echo $region['Region']['name']?></option>
		<?php } ?>
		</select>
	</td>
</tr>
<tr><td>Phone (Off)</td><td><input type="text" name="teacher_phone" class="" value="<?php echo $teacher['Teacher']['teacher_phone']?>" /></td></tr>
<tr><td>Mobile</td><td><input type="text" name="teacher_mobile" class="" value="<?php echo $teacher['Teacher']['teacher_mobile']?>" /></td></tr>
<tr><td>Email</td><td><input type="text" name="teacher_email" class="email" value="<?php echo $teacher['Teacher']['teacher_email']?>" /></td></tr>
</table>
<?php $qual_count = count($teacher_qualifications);?>
<table id="teacher_qualification" border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<?php if($qual_count > 0) { ?>
<tr><td colspan=2><h3>II - Qualifications and Trainings</h3></td></tr>
<?php $x = 1; foreach($teacher_qualifications as $teacher_qualification) { ?>
<tr>
	<td style="background-color:#bbffdd;"  width="35%">Qualification # <?php echo $x?></td>
	<td><?php if($x == 1) { ?><a href="javascript:void(0);" onClick="add_qualification( <?php echo ($qual_count+1); ?> );" id="add_qualification">Add Another Qualification</a><?php } ?></td>
</tr>
<tr>
	<input type="hidden" name="qualification_id<?php echo $x?>" value="<?php echo $teacher_qualification['TeacherQualification']['id']?>"/>
	<input type="hidden" name="qualification_type[<?php echo $x?>]" value="<?php echo $teacher_qualification['TeacherQualification']['qualification_type']?>"/>
	<td>From</td><td><input type="text" name="qualification_from[<?php echo $x?>]" value="<?php echo date('d/m/Y',strtotime($teacher_qualification['TeacherQualification']['qualification_from']))?>" class="datetime" /></td>
</tr>
<tr>
	<td>To</td>
	<td><input type="text" name="qualification_to[<?php echo $x?>]" value="<?php echo date('d/m/Y',strtotime($teacher_qualification['TeacherQualification']['qualification_to']))?>" class="datetime" /></td>
</tr>
<tr>
	<td>Degree / Certificate / Diploma</td>
	<td>
		<select name="qualification_name[<?php echo $x?>]" class="">
		<option value="ba" <?php if($teacher_qualification['TeacherQualification']['qualification_name'] == 'ba') { echo 'selected="selected"'; } ?> >B.A</option>
		<option value="bsc" <?php if($teacher_qualification['TeacherQualification']['qualification_name'] == 'bsc') { echo 'selected="selected"'; } ?> >B.S.C</option>
		<option value="bed" <?php if($teacher_qualification['TeacherQualification']['qualification_name'] == 'bed') { echo 'selected="selected"'; } ?> >B.ED</option>
		<option value="bs" <?php if($teacher_qualification['TeacherQualification']['qualification_name'] == 'bs') { echo 'selected="selected"'; } ?> >B.S</option>
		<option value="ma" <?php if($teacher_qualification['TeacherQualification']['qualification_name'] == 'ma') { echo 'selected="selected"'; } ?> >M.A</option>
		<option value="msc" <?php if($teacher_qualification['TeacherQualification']['qualification_name'] == 'msc') { echo 'selected="selected"'; } ?> >M.S.C</option>
		<option value="med" <?php if($teacher_qualification['TeacherQualification']['qualification_name'] == 'med') { echo 'selected="selected"'; } ?> >M.ED</option>
		<option value="ms" <?php if($teacher_qualification['TeacherQualification']['qualification_name'] == 'ms') { echo 'selected="selected"'; } ?> >M.S</option>
		<option value="mphil" <?php if($teacher_qualification['TeacherQualification']['qualification_name'] == 'mphil') { echo 'selected="selected"'; } ?> >M.Phil</option>
		<option value="phd" <?php if($teacher_qualification['TeacherQualification']['qualification_name'] == 'phd') { echo 'selected="selected"'; } ?> >P.H.D</option>
		<option value="other" <?php if($teacher_qualification['TeacherQualification']['qualification_name'] == 'other') { echo 'selected="selected"'; } ?> >Other</option>
		</select>
	</td>
</tr>
<tr><td>Institution</td><td><input type="text" name="qualification_institute[<?php echo $x?>]" value="<?php echo $teacher_qualification['TeacherQualification']['qualification_institute']?>" /></td></tr>
<?php $x++; } }else{ ?>
<tr><td colspan=2><h3>II - Qualifications and Trainings</h3></td></tr>
<tr><td style="background-color:#bbffdd;"  width="35%">Qualification # 1</td><td><a href="javascript:void(0);" onClick="add_qualification(2);" id="add_qualification">Add Another Qualification</a></td></tr>
<tr><input type="hidden" name="qualification_type[1]" value="0"/><td>From</td><td><input type="text" name="qualification_from[1]" value="" class="datetime" /></td></tr>
<tr><td>To</td><td><input type="text" name="qualification_to[1]" value="" class="datetime" /></td></tr>
<tr><td>Degree / Certificate / Diploma</td>
	<td>
		<select name="qualification_name[1]" class="">
		<option value="" >Select</option>
		<option value="ba" >B.A</option>
		<option value="bsc" >B.S.C</option>
		<option value="bed" >B.ED</option>
		<option value="bs" >B.S</option>
		<option value="ma" >M.A</option>
		<option value="msc" >M.S.C</option>
		<option value="med" >M.ED</option>
		<option value="ms" >M.S</option>
		<option value="mphil" >M.Phil</option>
		<option value="phd" >P.H.D</option>
		<option value="other" >Other</option>
		</select>
	</td>
</tr>
<tr><td>Institution</td><td><input type="text" name="qualification_institute[1]" value="" /></td></tr>
<?php } ?>
</table>

<?php $cert_count = count($teacher_certifications);?>
<table id="teacher_certification" border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<?php if($cert_count > 0) { $x = 1; foreach($teacher_certifications as $teacher_certification) { ?>
<tr><td style="background-color:#bbddff;"   width="35%">Certification # <?php echo $x?></td><td><?php if($x == 1) { ?><a href="javascript:void(0);" onClick="add_certification(<?php echo ($cert_count+1); ?>)" id="add_certification">Add Another Certification</a><?php } ?></td></tr>
<tr>
	<input type="hidden" name="certification_id<?php echo $x?>" value="<?php echo $teacher_certification['TeacherQualification']['id']?>"/>
	<input type="hidden" name="certification_type[<?php echo $x?>]" value="1"/><td>From</td><td><input type="text" name="certification_from[<?php echo $x?>]" value="<?php echo date('d/m/Y',strtotime($teacher_certification['TeacherQualification']['qualification_from']))?>" class="datetime" /></td></tr>
<tr><td>To</td><td><input type="text" name="certification_to[<?php echo $x?>]" value="<?php echo date('d/m/Y',strtotime($teacher_certification['TeacherQualification']['qualification_to']))?>" class="datetime" /></td></tr>
<tr><td>Degree / Certificate / Diploma</td>
	<td>
		<input type="text" name="certification_name[<?php echo $x?>]" value="<?php echo $teacher_certification['TeacherQualification']['qualification_name']?>" />
	</td>
</tr>
<tr><td>Institution</td>
	<td>
	<input name="certification_institute[<?php echo $x?>]" value="<?php echo $teacher_certification['TeacherQualification']['qualification_institute']?>"/>	
	</td>
</tr>
<?php $x++; } }else{ ?>
<tr><td style="background-color:#bbddff;"   width="35%">Certification # 1</td><td><a href="javascript:void(0);" onClick="add_certification(2);" id="add_certification">Add Another Certification</a></td></tr>
<tr><input type="hidden" name="certification_type[1]" value="1"/><td>From</td><td><input type="text" name="certification_from[1]" value="" class="datetime" /></td></tr>
<tr><td>To</td><td><input type="text" name="certification_to[1]" value="" class="datetime" /></td></tr>
<tr><td>Degree / Certificate / Diploma</td>
	<td>
		<input type="text" name="certification_name[1]" value="" />
	</td>
</tr>
<tr><td>Institution</td>
	<td>
	<input name="certification_institute[1]" value=""/>	
	</td>
</tr>
<?php } ?>
</table>

<table id="teacher_training" border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<?php $training_count = count($teacher_trainings);?>
<?php if($training_count > 0) { $x = 1; foreach($teacher_trainings as $teacher_training) { ?>
<tr><td style="background-color:#ffbbdd;"  width="35%" >Training # 1</td><td><?php if($x == 1) { ?><a href="javascript:void(0);" onClick="add_training(<?php echo ($training_count+1)?>);" id="add_training">Add Another Training</a><?php } ?></td></tr>
<tr>
	<input type="hidden" name="training_id<?php echo $x?>" value="<?php echo $teacher_training['TeacherQualification']['id']?>"/>
	<input type="hidden" name="training_type[<?php echo $x?>]" value="2"/><td>From</td><td><input type="text" name="training_from[<?php echo $x?>]" value="<?php echo date('d/m/Y',strtotime($teacher_training['TeacherQualification']['qualification_to']))?>" class="datetime" /></td></tr>
<tr><td>To</td><td><input type="text" name="training_to[<?php echo $x?>]" value="<?php echo date('d/m/Y',strtotime($teacher_training['TeacherQualification']['qualification_to']))?>" class="datetime" /></td></tr>
<tr><td>Degree / Certificate / Diploma</td>
	<td>
		<select name="training_name[<?php echo $x?>]" class="">
		<option value="" <?php if($teacher_training['TeacherQualification']['qualification_name'] == '') { echo 'selected="selected"'; } ?> >Select</option>
		<option value="ptc" <?php if($teacher_training['TeacherQualification']['qualification_name'] == 'ptc') { echo 'selected="selected"'; } ?> >P.T.C</option>
		<option value="ct" <?php if($teacher_training['TeacherQualification']['qualification_name'] == 'ct') { echo 'selected="selected"'; } ?> >C.T</option>
		<option value="other" <?php if($teacher_training['TeacherQualification']['qualification_name'] == 'other') { echo 'selected="selected"'; } ?> >Other</option>
		</select>
	</td>
</tr>
<tr><td>Institution</td><td><input type="text" name="training_institute[<?php echo $x?>]" value="<?php echo $teacher_training['TeacherQualification']['qualification_institute']?>" /></td></tr>
<?php $x++; } }else{ ?>
<tr><td style="background-color:#ffbbdd;"  width="35%" >Training # 1</td><td><a href="javascript:void(0);" onClick="add_training(2);" id="add_training">Add Another Training</a></td></tr>
<tr><input type="hidden" name="training_type[1]" value="2"/><td>From</td><td><input type="text" name="training_from[1]" value="" class="datetime" /></td></tr>
<tr><td>To</td><td><input type="text" name="training_to[1]" value="" class="datetime" /></td></tr>
<tr><td>Degree / Certificate / Diploma</td>
	<td>
		<select name="training_name[1]" class="">
		<option value="" >Select</option>
		<option value="ptc" >P.T.C</option>
		<option value="ct" >C.T</option>
		<option value="other" >Other</option>
		</select>
	</td>
</tr>
<tr><td>Institution</td><td><input type="text" name="training_institute[1]" value="" /></td></tr>
<?php } ?>
</table>

<table id="teacher_experience" border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<?php $experiences_count = count($teacher_experiences);?>
<?php if($experiences_count > 0) { $x = 1; foreach($teacher_experiences as $teacher_experience) { ?>
<tr><td><h3>III - Experience</h3></td><td></td></tr>
<tr>
	<input type="hidden" value="<?php echo $teacher_experience['TeacherExperience']['id']?>" name="experience_id<?php echo $x?>" />
	<td style="background-color:#bbffdd;"  width="35%">Experience # <?php echo $x?></td><td><?php if($x == 1) { ?><a href="javascript:void(0);" onClick="add_experience(<?php echo ($experiences_count+1)?>)" id="add_experience" >Add Another Experience</a><?php } ?></td></tr>
<tr><td>From</td><td><input type="text" value="<?php echo date('d/m/Y',strtotime($teacher_experience['TeacherExperience']['experience_from']))?>" name="experience_from[<?php echo $x?>]" class="datetime" /></td></tr>
<tr><td>To</td><td><input type="text" value="<?php echo date('d/m/Y',strtotime($teacher_experience['TeacherExperience']['experience_to']))?>" name="experience_to[<?php echo $x?>]" class="datetime" /></td></tr>
<tr><td>Designation</td><td><input type="text" value="<?php echo $teacher_experience['TeacherExperience']['experience_designation']?>" name="experience_designation[<?php echo $x?>]" /></td></tr>
<tr><td>Place of Posting</td><td><input type="text" value="<?php echo $teacher_experience['TeacherExperience']['experience_posting']?>" name="experience_posting[<?php echo $x?>]" /></td></tr>
<tr><td>Nature of Job</td><td><input type="text" value="<?php echo $teacher_experience['TeacherExperience']['experience_job_nature']?>" name="experience_job_nature[<?php echo $x?>]" /></td></tr>
<?php $x++; } }else{ ?>
<tr><td><h3>III - Experience</h3></td><td></td></tr>
<tr><td style="background-color:#bbffdd;"  width="35%">Experience # 1</td><td><a href="javascript:void(0);" onClick="add_experience(2)" id="add_experience" >Add Another Experience</a></td></tr>
<tr><td>From</td><td><input type="text" value="" name="experience_from[1]" class="datetime" /></td></tr>
<tr><td>To</td><td><input type="text" value="" name="experience_to[1]" class="datetime" /></td></tr>
<tr><td>Designation</td><td><input type="text" value="" name="experience_designation[1]" /></td></tr>
<tr><td>Place of Posting</td><td><input type="text" value="" name="experience_posting[1]" /></td></tr>
<tr><td>Nature of Job</td><td><input type="text" value="" name="experience_job_nature[1]" /></td></tr>
<?php } ?>
</table>




<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<tr><td colspan=2><h3>IV - Skills(IT and Other Skills)</h3></td></tr>
<tr><td colspan=2><h4>IT Skills</h4></td></tr>
<?php foreach($teacher_it_skills as $teacher_it_skill) {  ?>
<input type="hidden" name="it_skill_id<?php echo $teacher_it_skill['TeacherSkill']['skill_id']?>" value="<?php echo $teacher_it_skill['TeacherSkill']['id']?>" />
<?php } ?>
<tr><td><input type="checkbox" name="it_skills[1]" <?php foreach($teacher_it_skills as $teacher_it_skill) { if(($teacher_it_skill['TeacherSkill']['skill_id']) == 1) { echo 'checked="checked"'; } } ?> value="1"/>MS-Word</td><td></td></tr>
<tr><td><input type="checkbox" name="it_skills[2]" <?php foreach($teacher_it_skills as $teacher_it_skill) { if(($teacher_it_skill['TeacherSkill']['skill_id']) == 2) { echo 'checked="checked"'; } } ?> value="2"/>MS-Excel</td><td></td></tr>
<tr><td><input type="checkbox" name="it_skills[3]" <?php foreach($teacher_it_skills as $teacher_it_skill) { if(($teacher_it_skill['TeacherSkill']['skill_id']) == 3) { echo 'checked="checked"'; } } ?> value="3"/>Ms-Access</td><td></td></tr>
<tr><td><input type="checkbox" name="it_skills[4]" <?php foreach($teacher_it_skills as $teacher_it_skill) { if(($teacher_it_skill['TeacherSkill']['skill_id']) == 4) { echo 'checked="checked"'; } } ?> value="4"/>MS-Power Point</td><td></td></tr>
<tr><td><input type="checkbox" name="it_skills[5]" <?php foreach($teacher_it_skills as $teacher_it_skill) { if(($teacher_it_skill['TeacherSkill']['skill_id']) == 5) { echo 'checked="checked"'; } } ?> value="5"/>Email</td><td></td></tr>
<tr><td><input type="checkbox" name="it_skills[6]" <?php foreach($teacher_it_skills as $teacher_it_skill) { if(($teacher_it_skill['TeacherSkill']['skill_id']) == 6) { echo 'checked="checked"'; } } ?> value="6"/>Ms-Project</td><td></td></tr>
<tr><td colspan=2><h4>Other Skills</h4></td></tr>
<?php foreach($teacher_other_skills as $teacher_other_skill) {  ?>
<input type="hidden" name="other_skill_id<?php echo $teacher_other_skill['TeacherSkill']['skill_id']?>" value="<?php echo $teacher_other_skill['TeacherSkill']['id']?>" />
<?php } ?>
<tr><td><input type="checkbox" name="other_skills[1]" <?php foreach($teacher_other_skills as $teacher_other_skill) { if(($teacher_other_skill['TeacherSkill']['skill_id']) == 7) { echo 'checked="checked"'; } } ?> value="7"/>Presentation skills</td><td></td></tr>
<tr><td><input type="checkbox" name="other_skills[2]" <?php foreach($teacher_other_skills as $teacher_other_skill) { if(($teacher_other_skill['TeacherSkill']['skill_id']) == 8) { echo 'checked="checked"'; } } ?> value="8"/>Report Writing</td><td></td></tr>
<tr><td><input type="checkbox" name="other_skills[3]" <?php foreach($teacher_other_skills as $teacher_other_skill) { if(($teacher_other_skill['TeacherSkill']['skill_id']) == 9) { echo 'checked="checked"'; } } ?> value="9"/>Interpersonal Skills</td><td></td></tr>
</table>


<table id="teacher_challenge" border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<?php $challenges_count = count($teacher_challenges);?>
<?php if($challenges_count > 0) { $x = 1; foreach($teacher_challenges as $teacher_challenge) {  ?>
<tr><td><h3>V - Achievements</h3></td><td></td></tr>
<tr>
	<input type="hidden" name="achievement_id<?php echo $x?>" value="<?php echo $teacher_challenge['TeacherAchievement']['id']?>"/>
	<input type="hidden" name="is_challenge[<?php echo $x?>]" value="0"/><td style="background-color:#bbffdd;" width=35%>Challenge # <?php echo $x?></td><td><a href="javascript:void(0);" onClick="add_challenge(<?php echo ($challenges_count+1)?>);" id="add_challenge" >Add Challenge</a></td></tr>
<tr><td>Challenge / Issue Managed</td><td><input type="text" name="achievement_issue[<?php echo $x?>]" value="<?php echo $teacher_challenge['TeacherAchievement']['achievement_issue']?>" /></td></tr>
<tr><td>Actions Taken / Activities Performed </td><td><input type="text" name="achievement_action[<?php echo $x?>]" value="<?php echo $teacher_challenge['TeacherAchievement']['achievement_action']?>" /></td></tr>
<tr><td>Output / Outcome Achieved (Support with Data evidence)</td><td><input type="text" name="achievement_output[<?php echo $x?>]" value="<?php echo $teacher_challenge['TeacherAchievement']['achievement_output']?>" /></td></tr>
<?php $x++; } }else{ ?>
<tr><td><h3>V - Achievements</h3></td><td></td></tr>
<tr><input type="hidden" name="is_challenge[1]" value="0"/><td style="background-color:#bbffdd;" width=35%>Challenge # 1</td><td><a href="javascript:void(0);" onClick="add_challenge(2);" id="add_challenge" >Add Challenge</a></td></tr>
<tr><td>Challenge / Issue Managed</td><td><input type="text" name="achievement_issue[1]" value="" /></td></tr>
<tr><td>Actions Taken / Activities Performed </td><td><input type="text" name="achievement_action[1]" value="" /></td></tr>
<tr><td>Output / Outcome Achieved (Support with Data evidence)</td><td><input type="text" name="achievement_output[1]" value="" /></td></tr>
<?php } ?>
</table>

<table id="teacher_contribution" border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<?php $contributions_count = count($teacher_contributions); ?>
<?php if($contributions_count > 0) { $x = 1; foreach ($teacher_contributions as $teacher_contribution) { ?>
<tr>
	<input type="hidden" name="contribution_id<?php echo $x?>" value="<?php echo $teacher_contribution['TeacherAchievement']['id']?>"/>
	<input type="hidden" name="is_contribution[<?php echo $x?>]" value="1"/><td style="background-color:#bbffdd;" width=35%>Contribution # <?php echo $x?></td><td><?php if($x == 1) { ?><a href="javascript:void(0);" onClick="add_contribution(<?php echo ($contributions_count+1)?>);" id="add_contribution" >Add contribution</a><?php } ?></td></tr>
<tr><td>Contribution Title</td><td><input type="text" name="contribution_title[<?php echo $x?>]" value="<?php echo $teacher_contribution['TeacherAchievement']['contribution_title']?>" /></td></tr>
<tr><td>Name of Organization for which contribution was made</td><td><input type="text" name="contribution_organization[<?php echo $x?>]" value="<?php echo $teacher_contribution['TeacherAchievement']['contribution_organization']?>" /></td></tr>
<tr><td>Year of Publication / Submission</td><td><input type="" name="contribution_year[<?php echo $x?>]" value="<?php echo date('d/m/Y',strtotime($teacher_contribution['TeacherAchievement']['contribution_year']))?>" class="datetime" /></td></tr>
<?php $x++; } }else{ ?>
<tr><input type="hidden" name="is_contribution[1]" value="1"/><td style="background-color:#bbffdd;" width=35%>Contribution # 1</td><td><a href="javascript:void(0);" onClick="add_contribution(2);" id="add_contribution" >Add contribution</a></td></tr>
<tr><td>Contribution Title</td><td><input type="text" name="contribution_title[1]" value="" /></td></tr>
<tr><td>Name of Organization for which contribution was made</td><td><input type="text" name="contribution_organization[1]" value="" /></td></tr>
<tr><td>Year of Publication / Submission</td><td><input type="" name="contribution_year[1]" value="" class="datetime" /></td></tr>
<?php } ?>
</table>



<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<tr><td colspan=2><h3>VI - Professional areas of Interest</h3></td></tr>
<?php foreach($teacher_interests as $teacher_interest) {  ?>
<input type="hidden" name="interest_id<?php echo $teacher_interest['TeacherInterest']['interest_id']?>" value="<?php echo $teacher_interest['TeacherInterest']['id']?>" />
<?php } ?>
<tr><td><input type="checkbox" name="interest[1]" <?php foreach($teacher_interests as $teacher_interest) { if(($teacher_interest['TeacherInterest']['interest_id']) == 1) { echo 'checked="checked"'; } } ?> value="1"/>School Inspection</td><td></td></tr>
<tr><td><input type="checkbox" name="interest[2]" <?php foreach($teacher_interests as $teacher_interest) { if(($teacher_interest['TeacherInterest']['interest_id']) == 2) { echo 'checked="checked"'; } } ?> value="2"/>Student Advise (Mentoring, Pedagogy, Classroom Manage)</td><td></td></tr>
<tr><td><input type="checkbox" name="interest[3]" <?php foreach($teacher_interests as $teacher_interest) { if(($teacher_interest['TeacherInterest']['interest_id']) == 3) { echo 'checked="checked"'; } } ?> value="3"/>Educational Development and Planning</td><td></td></tr>
<tr><td><input type="checkbox" name="interest[4]" <?php foreach($teacher_interests as $teacher_interest) { if(($teacher_interest['TeacherInterest']['interest_id']) == 4) { echo 'checked="checked"'; } } ?> value="4"/>Student Assessment</td><td></td></tr>
<tr><td><input type="checkbox" name="interest[5]" <?php foreach($teacher_interests as $teacher_interest) { if(($teacher_interest['TeacherInterest']['interest_id']) == 5) { echo 'checked="checked"'; } } ?> value="5"/>Teacher Training & Development</td><td></td></tr>
<tr><td><input type="checkbox" name="interest[6]" <?php foreach($teacher_interests as $teacher_interest) { if(($teacher_interest['TeacherInterest']['interest_id']) == 6) { echo 'checked="checked"'; } } ?> value="6"/>SMC / Cluster Mobilization</td><td></td></tr>
<tr><td><input type="checkbox" name="interest[7]" <?php foreach($teacher_interests as $teacher_interest) { if(($teacher_interest['TeacherInterest']['interest_id']) == 7) { echo 'checked="checked"'; } } ?> value="7"/>Monitoring and Evaluation</td><td></td></tr>
<tr><td><input type="checkbox" name="interest[8]" <?php foreach($teacher_interests as $teacher_interest) { if(($teacher_interest['TeacherInterest']['interest_id']) == 8) { echo 'checked="checked"'; } } ?> value="8"/>Policy and Research</td><td></td></tr>
<tr><td><input type="checkbox" name="interest[9]" <?php foreach($teacher_interests as $teacher_interest) { if(($teacher_interest['TeacherInterest']['interest_id']) == 9) { echo 'checked="checked"'; } } ?> value="9"/>Role of IT/Innovation</td><td></td></tr>
<tr><td><input type="checkbox" name="interest[10]" <?php foreach($teacher_interests as $teacher_interest) { if(($teacher_interest['TeacherInterest']['interest_id']) == 10) { echo 'checked="checked"'; } } ?> value="10"/>Education Sector Reform</td><td></td></tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<tr><td><input type="submit" value="submit" /></td></tr>
</table>
</form>

