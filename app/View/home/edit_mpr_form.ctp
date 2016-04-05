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

<form id="mpr_form" action="<?php echo $this->webroot?>home/submit_mpr_form/<?php echo $mprBasic['MprBasic']['id']?>" method="post">
<table style="width:900px; margin-left:200px;">
<input type="hidden" name="cluster_id" value="<?php echo $mprBasic['MprBasic']['cluster_id']?>" />
<tr><td colspan=2><strong>MPR MONTH And Year</strong></td></tr>
<tr>
	<td>Month</td>
	<td><select name="visiting_month">
		<option value="1" <?php if(($mprBasic['MprBasic']['visiting_month']) == 1) { echo 'selected="selected"'; } ?>>January</option>
		<option value="2" <?php if(($mprBasic['MprBasic']['visiting_month']) == 2) { echo 'selected="selected"'; } ?> >February</option>
		<option value="3" <?php if(($mprBasic['MprBasic']['visiting_month']) == 3) { echo 'selected="selected"'; } ?> >March</option>
		<option value="4" <?php if(($mprBasic['MprBasic']['visiting_month']) == 4) { echo 'selected="selected"'; } ?> >April</option>
		<option value="5" <?php if(($mprBasic['MprBasic']['visiting_month']) == 5) { echo 'selected="selected"'; } ?> >May</option>
		<option value="6" <?php if(($mprBasic['MprBasic']['visiting_month']) == 6) { echo 'selected="selected"'; } ?> >June</option>
		<option value="7" <?php if(($mprBasic['MprBasic']['visiting_month']) == 7) { echo 'selected="selected"'; } ?> >July</option>
		<option value="8" <?php if(($mprBasic['MprBasic']['visiting_month']) == 8) { echo 'selected="selected"'; } ?> >August</option>
		<option value="9" <?php if(($mprBasic['MprBasic']['visiting_month']) == 9) { echo 'selected="selected"'; } ?> >September</option>
		<option value="10" <?php if(($mprBasic['MprBasic']['visiting_month']) == 10) { echo 'selected="selected"'; } ?> >October</option>
		<option value="11" <?php if(($mprBasic['MprBasic']['visiting_month']) == 11) { echo 'selected="selected"'; } ?> >November</option>
		<option value="12" <?php if(($mprBasic['MprBasic']['visiting_month']) == 12) { echo 'selected="selected"'; } ?> >December</option>
		</select>
	</td>
</tr>
<tr>
	<td>Year</td>
	<td>
		<select name="visiting_year">
		<option value="2010" <?php if(($mprBasic['MprBasic']['visiting_year']) == 2010) { echo 'selected="selected"'; } ?> >2010</option>
		<option value="2011" <?php if(($mprBasic['MprBasic']['visiting_year']) == 2011) { echo 'selected="selected"'; } ?> >2011</option>
		<option value="2012" <?php if(($mprBasic['MprBasic']['visiting_year']) == 2012) { echo 'selected="selected"'; } ?> >2012</option>
		<option value="2013" <?php if(($mprBasic['MprBasic']['visiting_year']) == 2013) { echo 'selected="selected"'; } ?> >2013</option>
		<option value="2014" <?php if(($mprBasic['MprBasic']['visiting_year']) == 2014) { echo 'selected="selected"'; } ?> >2014</option>
		</select>
	</td>
</tr>


<tr><td colspan=2><strong>A. Cluster Profile</strong></td></tr>
<tr><td><strong>1. Cluster Identification Code</strong></td>
	<td>
		<input type="text" value="<?php echo $mprBasic['MprBasic']['cluster_identification_code']?>" name="cluster_identification_code" class="" />
	</td>
</tr>

<tr><td><strong>2. Name of Guide Teacher(HT)</strong></td>
	<td>
		<input type="text" value="<?php echo $mprBasic['MprBasic']['gt_name']?>" name="gt_name" class="" />
	</td>
</tr>

<tr><td><strong>3. Name of Cluster Guide School</strong></td>
	<td>
		<input type="text" value="<?php echo $mprBasic['MprBasic']['guide_school_name']?>" name="guide_school_name" class="" />
	</td>
</tr>

<tr><td><strong>4. SEMIS Code of Guide School</strong></td>
	<td>
		<input type="text" value="<?php echo $mprBasic['MprBasic']['guide_school_semis']?>" name="guide_school_semis" class="" />
	</td>
</tr>

<tr><td><strong>5. Number of schools in the cluster</strong></td>
	<td>
		<input type="text" value="<?php echo $mprBasic['MprBasic']['no_of_schools']?>" name="no_of_schools" class="" />
	</td>
</tr>
<tr><td><strong>6. District</strong></td>
	<td>
		<input type="text" value="<?php echo $mprBasic['MprBasic']['district_name']?>" name="district_name" class="" />
	</td>
</tr>
</table>
<table id="schools_info" style="width:1100px; margin-left:100px;">

<?php 
	$school_info_count = count($mprSchoolInfos);
	if($school_info_count == 0)
	{ ?>

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

	
<?php 	
	}else
	{
	$x = 1;
	foreach($mprSchoolInfos as $mprSchoolInfo)
	{
?>
<input type="hidden" value="<?php echo $mprSchoolInfo['MprSchoolInfo']['id']?>" name="school_id[<?php echo $x?>]" />
<tr><td style="background-color:#bbddff;">School data for School # <?php echo $x?></td><td style="background-color:#bbddff;"><?php if($x == 1) { ?><a id="add_school_info" href="javascript:void(0);" onClick="add_school_info(<?php echo ($school_info_count+1)?>);" >Add School</a><?php } ?></td></tr>
<tr><td width=50%><strong>Name of the School</strong></td>
	<td width=50%>
		<input type="text" value="<?php echo $mprSchoolInfo['MprSchoolInfo']['school_name']?>" name="school_name[<?php echo $x?>]" class="" />
	</td>
</tr>

<tr><td><strong>Semis Code </strong></td>
	<td>
		<input type="text" value="<?php echo $mprSchoolInfo['MprSchoolInfo']['semis_code']?>" name="semis_code[<?php echo $x?>]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>No. of Teachers</strong>
	</td>
	<td>
		<input type="text" value="<?php echo $mprSchoolInfo['MprSchoolInfo']['no_of_teachers']?>" name="no_of_teachers[<?php echo $x?>]" class="" />
	</td>
</tr>
<tr><td><strong>No. Of Students Grade Wise</strong></td><td></td></tr>
<tr>
	<td>
		<strong>K (Kindergarden)</strong>
	</td>
	<td>
		<input type="text" value="<?php echo $mprSchoolInfo['MprSchoolInfo']['no_of_students_k']?>" name="no_of_students_k[<?php echo $x?>]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>class I</strong>
	</td>
	<td>
		<input type="text" value="<?php echo $mprSchoolInfo['MprSchoolInfo']['no_of_students_1']?>" name="no_of_students_1[<?php echo $x?>]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>class II</strong>
	</td>
	<td>
		<input type="text" value="<?php echo $mprSchoolInfo['MprSchoolInfo']['no_of_students_2']?>" name="no_of_students_2[<?php echo $x?>]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>class III</strong>
	</td>
	<td>
		<input type="text" value="<?php echo $mprSchoolInfo['MprSchoolInfo']['no_of_students_3']?>" name="no_of_students_3[<?php echo $x?>]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>class IV</strong>
	</td>
	<td>
		<input type="text" value="<?php echo $mprSchoolInfo['MprSchoolInfo']['no_of_students_4']?>" name="no_of_students_4[<?php echo $x?>]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>class V</strong>
	</td>
	<td>
		<input type="text" value="<?php echo $mprSchoolInfo['MprSchoolInfo']['no_of_students_5']?>" name="no_of_students_5[<?php echo $x?>]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>class VI</strong>
	</td>
	<td>
		<input type="text" value="<?php echo $mprSchoolInfo['MprSchoolInfo']['no_of_students_6']?>" name="no_of_students_6[<?php echo $x?>]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>class VII</strong>
	</td>
	<td>
		<input type="text" value="<?php echo $mprSchoolInfo['MprSchoolInfo']['no_of_students_7']?>" name="no_of_students_7[<?php echo $x?>]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>class VIII</strong>
	</td>
	<td>
		<input type="text" value="<?php echo $mprSchoolInfo['MprSchoolInfo']['no_of_students_8']?>" name="no_of_students_8[<?php echo $x?>]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>Total</strong>
	</td>
	<td>
		<input type="text" value="<?php echo $mprSchoolInfo['MprSchoolInfo']['no_of_students_tl']?>" name="no_of_students_tl[<?php echo $x?>]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>Date of Visit</strong>
	</td>
	<td>
		<input type="text" value="<?php echo $mprSchoolInfo['MprSchoolInfo']['date_of_visit']?>" name="date_of_visit[<?php echo $x?>]" class="datetime" />
	</td>
</tr>

<tr>
	<td>
		<strong>Number of Students Present</strong>
	</td>
	<td>
		<input type="text" value="<?php echo $mprSchoolInfo['MprSchoolInfo']['students_present']?>" name="students_present[<?php echo $x?>]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>Number of Teachers Present</strong>
	</td>
	<td>
		<input type="text" value="<?php echo $mprSchoolInfo['MprSchoolInfo']['teachers_present']?>" name="teachers_present[<?php echo $x?>]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>New Student Enrollment in GR in the month</strong>
	</td>
	<td>
		<input type="text" value="<?php echo $mprSchoolInfo['MprSchoolInfo']['students_enrolled_gr']?>" name="students_enrolled_gr[<?php echo $x?>]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>Number of Students Transferred by GR</strong>
	</td>
	<td>
		<input type="text" value="<?php echo $mprSchoolInfo['MprSchoolInfo']['students_transferred_gr']?>" name="students_transferred_gr[<?php echo $x?>]" class="" />
	</td>
</tr>

<tr>
	<td>
		<strong>Number of Students Absent For Atleast One Week</strong>
	</td>
	<td>
		<input type="text" value="<?php echo $mprSchoolInfo['MprSchoolInfo']['students_absent_for_week']?>" name="students_absent_for_week[<?php echo $x?>]" class="" />
	</td>
</tr>

<tr><td colspan=2>School Records Available and Updated</td></tr>
<tr>
	<td>Guide Teacher's / Head Teacher's School Diary</td>
	<td>
		<input type="checkbox" <?php if(($mprSchoolInfo['MprSchoolInfo']['gt_ht_diary']) == 1) { echo 'checked="checked"'; } ?> name="gt_ht_diary[<?php echo $x?>]"></input>
	</td>
</tr>


<tr>
	<td>School Official Visit Register(GTs/QA team/Others)</td>
	<td>
		<input type="checkbox" <?php if(($mprSchoolInfo['MprSchoolInfo']['officials_visit_register']) == 1) { echo 'checked="checked"'; } ?> name="officials_visit_register[<?php echo $x?>]"></input>
	</td>
</tr>

<tr>
	<td>Teacher's Attendance Register</td>
	<td>
		<input type="checkbox" <?php if(($mprSchoolInfo['MprSchoolInfo']['teacher_attendance_register']) == 1) { echo 'checked="checked"'; } ?> name="teacher_attendance_register[<?php echo $x?>]"></input>
	</td>
</tr>

<tr>
	<td>Teacher's Class Diary</td>
	<td>
		<input type="checkbox" <?php if(($mprSchoolInfo['MprSchoolInfo']['teacher_class_diary']) == 1) { echo 'checked="checked"'; } ?> name="teacher_class_diary[<?php echo $x?>]"></input>
	</td>
</tr>

<tr>
	<td>Student's Attendance Register</td>
	<td>
		<input type="checkbox" <?php if(($mprSchoolInfo['MprSchoolInfo']['student_attendance_register']) == 1) { echo 'checked="checked"'; } ?> name="student_attendance_register[<?php echo $x?>]"></input>
	</td>
</tr>


<tr>
	<td>Student's Work Diary</td>
	<td>
		<input type="checkbox" <?php if(($mprSchoolInfo['MprSchoolInfo']['student_work_diary']) == 1) { echo 'checked="checked"'; } ?> name="student_work_diary[<?php echo $x?>]"></input>
	</td>
</tr>

<tr>
	<td>School General Register</td>
	<td>
		<input type="checkbox" <?php if(($mprSchoolInfo['MprSchoolInfo']['school_general_register']) == 1) { echo 'checked="checked"'; } ?> name="school_general_register[<?php echo $x?>]"></input>
	</td>
</tr>

<tr>
	<td>SMC Meeting Register</td>
	<td>
		<input type="checkbox" <?php if(($mprSchoolInfo['MprSchoolInfo']['smc_meeting_register']) == 1) { echo 'checked="checked"'; } ?> name="smc_meeting_register[<?php echo $x?>]"></input>
	</td>
</tr>

<tr>
	<td>School Exams Result Record</td>
	<td>
		<input type="checkbox" <?php if(($mprSchoolInfo['MprSchoolInfo']['exam_result_record']) == 1) { echo 'checked="checked"'; } ?> name="exam_result_record[<?php echo $x?>]"></input>
	</td>
</tr>

<tr>
	<td>Student's Achievement Register</td>
	<td>
		<input type="checkbox" <?php if(($mprSchoolInfo['MprSchoolInfo']['student_achievement_register']) == 1) { echo 'checked="checked"'; } ?> name="student_achievement_register[<?php echo $x?>]"></input>
	</td>
</tr>
<?php $x++; } } ?>
</table>
<table>
<tr><td>Remarks</td><td></td></tr>
<tr style="height:300px;" ><td colspan=2 style="height:300px;"><textarea rows=10 cols=150 name="teacher_remarks"  ><?php echo $mprBasic['MprBasic']['teacher_remarks']?></textarea></td></tr>
<tr><td><input type="submit" value="Submit" name="Submit" /></td></tr>
</table>

</form>