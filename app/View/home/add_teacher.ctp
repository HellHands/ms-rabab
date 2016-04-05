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

<table>
<tr><td colspan="4"><h1><div style="float:left; text-align:center; width:100%; background-color:#4455ff; color:#fff;">Reform Support Unit</div></h1></td></tr>
<tr><td colspan="4"><h2><div style="float:left; text-align:center; width:100%; background-color:#4455ff; color:#fff;">Human Resource Management Information System (HRMIS)</div></h2></td></tr>
</table>
<div style="width:1100px; float:left; margin-left:100px;">
<form id="new_teacher_form" action="<?php echo $this->webroot?>home/submit_teacher_details" method="post">
<table>
<tr><td colspan=2><h3>I - Personnel Information</h3></td></tr>
<tr><td>Name </td><td><input type="text" name="teacher_name" class="required" value="" /></td></tr>
<tr><td>Designation & BPS</td><td><input type="text" name="bps" class="" value="" /></td></tr>
<tr><td>CNIC</td><td><input type="text" name="cnic_new" class="" value="" /></td></tr>
<tr><td>Gender</td>
	<td>
		<select name="gender" class="">
		<option value="0" >Female</option>
		<option value="1" >Male</option>
		</select>
	</td>
</tr>
<tr><td>Domicile</td><td><input type="text" name="domicile" class="" value="" /></td></tr>
<tr><td>Date of Birth</td><td><input type="text" name="date_of_birth" class="datetime" value="" /></td></tr>
<tr><td>Personnel No.</td><td><input type="text" name="personnel_no" class="" value="" /></td></tr>
<tr><td>Date of Appointment</td><td><input type="text" name="dateofjoining" class="datetime" value="" /></td></tr>
<tr><td>Office Address</td><td><input type="text" name="office_address" class="" value="" /></td></tr>
<tr><td>District</td>
	<td>	
		<select name="district_code" class="">
		<option value="">Select</option>
		<?php foreach($regions as $region) { ?>
		<option value="<?php echo $region['Region']['id']?>"><?php echo $region['Region']['name']?></option>
		<?php } ?>
		</select>
	</td>
</tr>
<tr><td>Phone (Off)</td><td><input type="text" name="teacher_phone" class="" value="" /></td></tr>
<tr><td>Mobile</td><td><input type="text" name="teacher_mobile" class="" value="" /></td></tr>
<tr><td>Email</td><td><input type="text" name="teacher_email" class="email" value="" /></td></tr>
</table>
<table id="teacher_qualification">
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
</table>

<table id="teacher_certification">
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
	<input name="certification_institution[1]" value=""/>	
	</td>
</tr>
</table>

<table id="teacher_training">
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
</table>

<table id="teacher_experience">
<tr><td><h3>III - Experience</h3></td><td></td></tr>
<tr><td style="background-color:#bbffdd;"  width="35%">Experience # 1</td><td><a href="javascript:void(0);" onClick="add_experience(2)" id="add_experience" >Add Another Experience</a></td></tr>
<tr><td>From</td><td><input type="text" value="" name="experience_from[1]" class="datetime" /></td></tr>
<tr><td>To</td><td><input type="text" value="" name="experience_to[1]" class="datetime" /></td></tr>
<tr><td>Designation</td><td><input type="text" value="" name="experience_designation[1]" /></td></tr>
<tr><td>Place of Posting</td><td><input type="text" value="" name="experience_posting[1]" /></td></tr>
<tr><td>Nature of Job</td><td><input type="text" value="" name="experience_job_nature[1]" /></td></tr>
</table>




<table>
<tr><td colspan=2><h3>IV - Skills(IT and Other Skills)</h3></td></tr>
<tr><td colspan=2><h4>IT Skills</h4></td></tr>
<tr><td><input type="checkbox" name="it_skills[1]" value="1"/>MS-Word</td><td></td></tr>
<tr><td><input type="checkbox" name="it_skills[2]" value="2"/>MS-Excel</td><td></td></tr>
<tr><td><input type="checkbox" name="it_skills[3]" value="3"/>Ms-Access</td><td></td></tr>
<tr><td><input type="checkbox" name="it_skills[4]" value="4"/>MS-Power Point</td><td></td></tr>
<tr><td><input type="checkbox" name="it_skills[5]" value="5"/>Email</td><td></td></tr>
<tr><td><input type="checkbox" name="it_skills[6]" value="6"/>Ms-Project</td><td></td></tr>
<tr><td colspan=2><h4>Other Skills</h4></td></tr>
<tr><td><input type="checkbox" name="other_skills[1]" value="7"/>Presentation skills</td><td></td></tr>
<tr><td><input type="checkbox" name="other_skills[2]" value="8"/>Report Writing</td><td></td></tr>
<tr><td><input type="checkbox" name="other_skills[3]" value="9"/>Interpersonal Skills</td><td></td></tr>
</table>


<table id="teacher_challenge">
<tr><td><h3>V - Achievements</h3></td><td></td></tr>
<tr><input type="hidden" name="is_challenge[1]" value="0"/><td style="background-color:#bbffdd;" width=35%>Challenge # 1</td><td><a href="javascript:void(0);" onClick="add_challenge(2);" id="add_challenge" >Add Challenge</a></td></tr>
<tr><td>Challenge / Issue Managed</td><td><input type="text" name="achievement_issue[1]" value="" /></td></tr>
<tr><td>Actions Taken / Activities Performed </td><td><input type="text" name="achievement_action[1]" value="" /></td></tr>
<tr><td>Output / Outcome Achieved (Support with Data evidence)</td><td><input type="text" name="achievement_output[1]" value="" /></td></tr>
</table>

<table id="teacher_contribution">
<tr><input type="hidden" name="is_contribution[1]" value="1"/><td style="background-color:#bbffdd;" width=35%>Contribution # 1</td><td><a href="javascript:void(0);" onClick="add_contribution(2);" id="add_contribution" >Add contribution</a></td></tr>
<tr><td>Contribution Title</td><td><input type="text" name="contribution_title[1]" value="" /></td></tr>
<tr><td>Name of Organization for which contribution was made</td><td><input type="text" name="contribution_organization[1]" value="" /></td></tr>
<tr><td>Year of Publication / Submission</td><td><input type="" name="contribution_year[1]" value="" class="datetime" /></td></tr>
</table>



<table>
<tr><td colspan=2><h3>VI - Professional areas of Interest</h3></td></tr>
<tr><td><input type="checkbox" name="interest[1]" value="1"/>School Inspection</td><td></td></tr>
<tr><td><input type="checkbox" name="interest[2]" value="2"/>Student Advise (Mentoring, Pedagogy, Classroom Manage)</td><td></td></tr>
<tr><td><input type="checkbox" name="interest[3]" value="3"/>Educational Development and Planning</td><td></td></tr>
<tr><td><input type="checkbox" name="interest[4]" value="4"/>Student Assessment</td><td></td></tr>
<tr><td><input type="checkbox" name="interest[5]" value="5"/>Teacher Training & Development</td><td></td></tr>
<tr><td><input type="checkbox" name="interest[6]" value="6"/>SMC / Cluster Mobilization</td><td></td></tr>
<tr><td><input type="checkbox" name="interest[7]" value="7"/>Monitoring and Evaluation</td><td></td></tr>
<tr><td><input type="checkbox" name="interest[8]" value="8"/>Policy and Research</td><td></td></tr>
<tr><td><input type="checkbox" name="interest[9]" value="9"/>Role of IT/Innovation</td><td></td></tr>
<tr><td><input type="checkbox" name="interest[10]" value="10"/>Education Sector Reform</td><td></td></tr>
</table>
<table>
<tr><td><input type="submit" value="submit" /></td></tr>
</table>
</form>
</div>
