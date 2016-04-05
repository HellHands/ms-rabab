<script type="text/javascript" src="<?php echo $this->webroot?>js/jquery-ui-1.7.2.custom.min.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot?>js/timepicker.js"></script>
<link href="<?php echo $this->webroot?>css/jquery-ui-1.7.2.custom.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->webroot?>css/timepicker.css" rel="stylesheet" type="text/css" />

<script>
$(function() {
	$('#mpr_form').validate();
	
	$('.datetime').datepicker({
                duration: '',
                showTime: false,
                constrainInput: false,
                time24h: true,
                timeFormat: 'hh:ii:ss',
                
            });
});


function add_school_info(id)
{
	
	$('#schools_info').append('<tr><td style="background-color:#bbddff;" colspan=2>School data for School # '+id+'</td></tr>');
	$('#schools_info').append('<tr><td width=50%><strong>Name of the School</strong></td><td width=50%><input type="text" value="" name="school_name['+id+']" class="" /></td></tr>');
	$('#schools_info').append('<tr><td><strong>Semis Code </strong></td><td><input type="text" value="" name="semis_code['+id+']" class="" /></td></tr>');
	$('#schools_info').append('<tr><td><strong>No. of Teachers</strong></td><td><input type="text" value="" name="no_of_teachers['+id+']" class="" /></td></tr>');
	$('#schools_info').append('<tr><td><strong>No. Of Students Grade Wise</strong></td><td></td></tr>');
	$('#schools_info').append('<tr><td><strong>K (Kindergarden)</strong></td><td><input type="text" value="" name="no_of_students_k['+id+']" class="" /></td></tr>');
	$('#schools_info').append('<tr><td><strong>class I</strong></td><td><input type="text" value="" name="no_of_students_1['+id+']" class="" /></td></tr>');
	$('#schools_info').append('<tr><td><strong>class II</strong></td><td><input type="text" value="" name="no_of_students_2['+id+']" class="" /></td></tr>');
	$('#schools_info').append('<tr><td><strong>class III</strong></td><td><input type="text" value="" name="no_of_students_3['+id+']" class="" /></td></tr>');
	$('#schools_info').append('<tr><td><strong>class IV</strong></td><td><input type="text" value="" name="no_of_students_4['+id+']" class="" /></td></tr>');
	$('#schools_info').append('<tr><td><strong>class V</strong></td><td><input type="text" value="" name="no_of_students_5['+id+']" class="" /></td></tr>');
	$('#schools_info').append('<tr><td><strong>class VI</strong></td><td><input type="text" value="" name="no_of_students_6['+id+']" class="" /></td></tr>');
	$('#schools_info').append('<tr><td><strong>class VII</strong></td><td><input type="text" value="" name="no_of_students_7['+id+']" class="" /></td></tr>');
	$('#schools_info').append('<tr><td><strong>class VIII</strong></td><td><input type="text" value="" name="no_of_students_8['+id+']" class="" /></td></tr>');
	$('#schools_info').append('<tr><td><strong>Total</strong></td><td><input type="text" value="" name="no_of_students_tl['+id+']" class="" /></td></tr>');
	$('#schools_info').append('<tr><td><strong>Date of Visit</strong></td><td><input type="text" value="" name="date_of_visit['+id+']" class="datetime" /></td></tr>');
	$('#schools_info').append('<tr><td><strong>Number of Students Present</strong></td><td><input type="text" value="" name="students_present['+id+']" class="" /></td></tr>');
	$('#schools_info').append('<tr><td><strong>Number of Teachers Present</strong></td><td><input type="text" value="" name="teachers_present['+id+']" class="" /></td></tr>');
	$('#schools_info').append('<tr><td><strong>New Student Enrollment in GR in the month</strong></td><td><input type="text" value="" name="students_enrolled_gr['+id+']" class="" /></td></tr>');
	$('#schools_info').append('<tr><td><strong>Number of Students Transferred by GR</strong></td><td><input type="text" value="" name="students_transferred_gr['+id+']" class="" /></td></tr>');
	$('#schools_info').append('<tr><td><strong>Number of Students Absent For Atleast One Week</strong></td><td><input type="text" value="" name="students_absent_for_week['+id+']" class="" /></td></tr>');
	$('#schools_info').append('<tr><td colspan=2>School Records Available and Updated</td></tr>');
	$('#schools_info').append('<tr><td>Guide Teachers / Head Teachers School Diary</td><td><input type="checkbox" name="gt_ht_diary['+id+']"></input></td></tr>');
	$('#schools_info').append('<tr><td>School Official Visit Register(GTs/QA team/Others)</td><td><input type="checkbox" name="officials_visit_register['+id+']"></input></td></tr>');
	$('#schools_info').append('<tr><td>Teachers Attendance Register</td><td><input type="checkbox" name="teacher_attendance_register['+id+']"></input></td></tr>');
	$('#schools_info').append('<tr><td>Teachers Class Diary</td><td><input type="checkbox" name="teacher_class_diary['+id+']"></input></td></tr>');
	$('#schools_info').append('<tr><td>Students Attendance Register</td><td><input type="checkbox" name="student_attendance_register['+id+']"></input></td></tr>');
	$('#schools_info').append('<tr><td>Students Work Diary</td><td><input type="checkbox" name="student_work_diary['+id+']"></input></td></tr>');
	$('#schools_info').append('<tr><td>School General Register</td><td><input type="checkbox" name="school_general_register['+id+']"></input></td></tr>');
	$('#schools_info').append('<tr><td>SMC Meeting Register</td><td><input type="checkbox" name="smc_meeting_register['+id+']"></input></td></tr>');
	$('#schools_info').append('<tr><td>School Exams Result Record</td><td><input type="checkbox" name="exam_result_record['+id+']"></input></td></tr>');
	$('#schools_info').append('<tr><td>Students Achievement Register</td><td><input type="checkbox" name="student_achievement_register['+id+']"></input></td></tr>	');

	
	$('.datetime').datepicker({
                duration: '',
                showTime: false,
                constrainInput: false,
                time24h: true,
                timeFormat: 'hh:ii:ss',
                
            });
	
	y = id+1;
	$('#add_school_info').attr('onClick','add_school_info('+y+')');
}


</script>

<form id="mpr_form" action="<?php echo $this->webroot?>home/submit_mpr_form" method="post">
<table style="width:900px; margin-left:200px;">
<input type="hidden" name="cluster_id" value="<?php echo $cluster_id?>" />
<tr><td colspan=2><strong>MPR MONTH And Year</strong></td></tr>
<tr>
	<td>Month</td>
	<td><select name="visiting_month">
		<option value="1" >January</option>
		<option value="2" >February</option>
		<option value="3" >March</option>
		<option value="4" >April</option>
		<option value="5" >May</option>
		<option value="6" >June</option>
		<option value="7" >July</option>
		<option value="8" >August</option>
		<option value="9" >September</option>
		<option value="10" >October</option>
		<option value="11" >November</option>
		<option value="12" >December</option>
		</select>
	</td>
</tr>
<tr>
	<td>Year</td>
	<td>
		<select name="visiting_year">
		<option value="2010" >2010</option>
		<option value="2011" >2011</option>
		<option value="2012" >2012</option>
		<option value="2013" >2013</option>
		<option value="2014" >2014</option>
		</select>
	</td>
</tr>


<tr><td colspan=2><strong>A. Cluster Profile</strong></td></tr>
<tr><td><strong>1. Cluster Identification Code</strong></td>
	<td>
		<input type="text" value="" name="cluster_identification_code" class="" />
	</td>
</tr>

<tr><td><strong>2. Name of Guide Teacher(HT)</strong></td>
	<td>
		<input type="text" value="" name="gt_name" class="" />
	</td>
</tr>

<tr><td><strong>3. Name of Cluster Guide School</strong></td>
	<td>
		<input type="text" value="" name="guide_school_name" class="" />
	</td>
</tr>

<tr><td><strong>4. SEMIS Code of Guide School</strong></td>
	<td>
		<input type="text" value="" name="guide_school_semis" class="" />
	</td>
</tr>

<tr><td><strong>5. Number of schools in the cluster</strong></td>
	<td>
		<input type="text" value="" name="no_of_schools" class="" />
	</td>
</tr>
<tr><td><strong>6. District</strong></td>
	<td>
		<input type="text" value="" name="district_name" class="" />
	</td>
</tr>
</table>

<table id="schools_info" style="width:1100px; margin-left:100px;">
<tr><td style="background-color:#bbddff;">School data for School # 1</td><td style="background-color:#bbddff;"><a id="add_school_info" href="javascript:void(0);" onClick="add_school_info(2);" >Add School</a></td></tr>
<tr><td width=50%><strong>Name of the School</strong></td>
	<td width=50%>
		<input type="text" value="" name="school_name[1]" class="" />
	</td>
</tr>

<tr><td><strong>Semis Code </strong></td>
	<td>
		<input type="text" value="" name="semis_code[1]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>No. of Teachers</strong>
	</td>
	<td>
		<input type="text" value="" name="no_of_teachers[1]" class="" />
	</td>
</tr>
<tr><td><strong>No. Of Students Grade Wise</strong></td><td></td></tr>
<tr>
	<td>
		<strong>K (Kindergarden)</strong>
	</td>
	<td>
		<input type="text" value="" name="no_of_students_k[1]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>class I</strong>
	</td>
	<td>
		<input type="text" value="" name="no_of_students_1[1]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>class II</strong>
	</td>
	<td>
		<input type="text" value="" name="no_of_students_2[1]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>class III</strong>
	</td>
	<td>
		<input type="text" value="" name="no_of_students_3[1]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>class IV</strong>
	</td>
	<td>
		<input type="text" value="" name="no_of_students_4[1]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>class V</strong>
	</td>
	<td>
		<input type="text" value="" name="no_of_students_5[1]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>class VI</strong>
	</td>
	<td>
		<input type="text" value="" name="no_of_students_6[1]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>class VII</strong>
	</td>
	<td>
		<input type="text" value="" name="no_of_students_7[1]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>class VIII</strong>
	</td>
	<td>
		<input type="text" value="" name="no_of_students_8[1]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>Total</strong>
	</td>
	<td>
		<input type="text" value="" name="no_of_students_tl[1]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>Date of Visit</strong>
	</td>
	<td>
		<input type="text" value="" name="date_of_visit[1]" class="datetime" />
	</td>
</tr>

<tr>
	<td>
		<strong>Number of Students Present</strong>
	</td>
	<td>
		<input type="text" value="" name="students_present[1]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>Number of Teachers Present</strong>
	</td>
	<td>
		<input type="text" value="" name="teachers_present[1]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>New Student Enrollment in GR in the month</strong>
	</td>
	<td>
		<input type="text" value="" name="students_enrolled_gr[1]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>Number of Students Transferred by GR</strong>
	</td>
	<td>
		<input type="text" value="" name="students_transferred_gr[1]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>Number of Students Absent For Atleast One Week</strong>
	</td>
	<td>
		<input type="text" value="" name="students_absent_for_week[1]" class="" />
	</td>
</tr>

<tr><td colspan=2>School Records Available and Updated</td></tr>
<tr>
	<td>Guide Teacher's / Head Teacher's School Diary</td>
	<td>
		<input type="checkbox" name="gt_ht_diary[1]"></input>
	</td>
</tr>


<tr>
	<td>School Official Visit Register(GTs/QA team/Others)</td>
	<td>
		<input type="checkbox" name="officials_visit_register[1]"></input>
	</td>
</tr>

<tr>
	<td>Teacher's Attendance Register</td>
	<td>
		<input type="checkbox" name="teacher_attendance_register[1]"></input>
	</td>
</tr>

<tr>
	<td>Teacher's Class Diary</td>
	<td>
		<input type="checkbox" name="teacher_class_diary[1]"></input>
	</td>
</tr>

<tr>
	<td>Student's Attendance Register</td>
	<td>
		<input type="checkbox" name="student_attendance_register[1]"></input>
	</td>
</tr>


<tr>
	<td>Student's Work Diary</td>
	<td>
		<input type="checkbox" name="student_work_diary[1]"></input>
	</td>
</tr>

<tr>
	<td>School General Register</td>
	<td>
		<input type="checkbox" name="school_general_register[1]"></input>
	</td>
</tr>

<tr>
	<td>SMC Meeting Register</td>
	<td>
		<input type="checkbox" name="smc_meeting_register[1]"></input>
	</td>
</tr>

<tr>
	<td>School Exams Result Record</td>
	<td>
		<input type="checkbox" name="exam_result_record[1]"></input>
	</td>
</tr>

<tr>
	<td>Student's Achievement Register</td>
	<td>
		<input type="checkbox" name="student_achievement_register[1]"></input>
	</td>
</tr>
</table>
<table>
<tr><td>Remarks</td><td></td></tr>
<tr style="height:300px;" ><td colspan=2 style="height:300px;"><textarea rows=10 cols=150 name="teacher_remarks" ></textarea></td></tr>
<tr><td><input type="submit" value="Submit" name="Submit" /></td></tr>
</table>

</form>