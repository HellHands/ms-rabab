<script type="text/javascript" src="<?php echo $this->webroot?>js/jquery.js" ></script>

<script>
function addRegion()
{
	$.ajax({
			url: 'home/add_district/',
			type: "GET",
			cache: false,
			success: function (html) {
			
				
				$('#addRegion').html(html);
				
				
			
			},
			error: function(xhr, ajaxOptions, thrownError){

			}
		});
		
}

function hideRegion()
{
	
}
</script>


<h1><div style="float:left; text-align:center; width:100%; height:70px; background-color:#4455ff; color:#fff;"  >Districts</div></h1>

<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<thead>
<tr>
<th>District Name</th>
<th>District Code</th>
<th>View Related Talukas</th>
<th>Edit</th>
</tr>
</thead>
<tbody>
<?php foreach($regions as $region) { ?>
<tr>
<td><?php echo $region['Region']['name']?></td>
<td><?php echo $region['Region']['region_code']?></td>
<td><a href='<?php echo $this->webroot?>home/region_details/<?php echo $region['Region']['id']?>'>Click To View</td>
<td><a href="<?php echo $this->webroot?>home/edit_district/<?php echo $region['Region']['id']?>">edit</a></td>
</tr>
<?php } ?>
<tbody>
</table>
<table id="addRegion" style="width:500px;"></table>
<table><tr><td><a href="<?php echo $this->webroot?>home/add_district">Add Another District</a></td></tr></table>


<?php /* 
foreach($baseline_surveys as $baseline_survey) 
{
	foreach($surveyOfSchools as $surveyOfSchool)
	{
		if(($surveyOfSchool['SurveyOfSchool']['school_id']) == ($baseline_survey['SchoolIdentification']['school_id']))
		{
			?>
			<table border=1px>
			<tr><th width=20% style="background-color:#bbffdd;">School Name</th><td width=40% style="background-color:#bbffdd;"><?php echo $surveyOfSchool['School']['prefix'].' '.$surveyOfSchool['School']['name']?></td><td width=40% style="background-color:#bbffdd;"></td></tr>
			<tr><th>Semis Code</th><td><?php echo $surveyOfSchool['School']['code']?></td></tr>
			<tr><th>Identifier</th><th>Baseline Survey</th><th width=40%>Guide School Survey</th></tr>
			<tr><td>Teachers Working</td><td><?php echo $baseline_survey['EnrollmentAttendance']['teachers_working']?></td><td><?php echo (($surveyOfSchool['SurveyOfSchool']['staff_govt_male'])+($surveyOfSchool['SurveyOfSchool']['staff_govt_female'])+($surveyOfSchool['SurveyOfSchool']['staff_cntr_male'])+($surveyOfSchool['SurveyOfSchool']['staff_cntr_female'])+($surveyOfSchool['SurveyOfSchool']['staff_nchd_male'])+($surveyOfSchool['SurveyOfSchool']['staff_nchd_female'])+($surveyOfSchool['SurveyOfSchool']['staff_unicef_male'])+($surveyOfSchool['SurveyOfSchool']['staff_unicef_female'])+($surveyOfSchool['SurveyOfSchool']['staff_detailment_male'])+($surveyOfSchool['SurveyOfSchool']['staff_detailment_female'])+($surveyOfSchool['SurveyOfSchool']['staff_other_male'])+($surveyOfSchool['SurveyOfSchool']['staff_other_female']))?></td></tr>
			<tr><td>Enrollment class One BOYS</td><td><?php echo (($baseline_survey['EnrollmentAttendance']['gwe_1_boys']))?></td><td><?php echo $surveyOfSchool['SurveyOfSchool']['enrollment_boys']?></td></tr>
			<tr><td>Enrollment class One Girls</td><td><?php echo (($baseline_survey['EnrollmentAttendance']['gwe_1_girls']))?></td><td><?php echo $surveyOfSchool['SurveyOfSchool']['enrollment_girls']?></td></tr>
			<tr><td>Enrollment BOYS</td><td><?php echo (($baseline_survey['EnrollmentAttendance']['gwe_1_boys'])+($baseline_survey['EnrollmentAttendance']['gwe_2_boys']))+($baseline_survey['EnrollmentAttendance']['gwe_3_boys'])+($baseline_survey['EnrollmentAttendance']['gwe_4_boys'])+($baseline_survey['EnrollmentAttendance']['gwe_5_boys'])+($baseline_survey['EnrollmentAttendance']['gwe_6_boys'])+($baseline_survey['EnrollmentAttendance']['gwe_7_boys'])+($baseline_survey['EnrollmentAttendance']['gwe_8_boys'])?></td><td></td></tr>
			<tr><td>Enrollment GIRLS</td><td><?php echo (($baseline_survey['EnrollmentAttendance']['gwe_1_girls'])+($baseline_survey['EnrollmentAttendance']['gwe_2_girls']))+($baseline_survey['EnrollmentAttendance']['gwe_3_girls'])+($baseline_survey['EnrollmentAttendance']['gwe_4_girls'])+($baseline_survey['EnrollmentAttendance']['gwe_5_girls'])+($baseline_survey['EnrollmentAttendance']['gwe_6_girls'])+($baseline_survey['EnrollmentAttendance']['gwe_7_girls'])+($baseline_survey['EnrollmentAttendance']['gwe_8_girls'])?></td><td></td></tr>
			<tr><td>Katchi Enrollment BOYS</td><td><?php echo $baseline_survey['EnrollmentAttendance']['gwe_katchi_boys']?></td><td><?php echo $surveyOfSchool['SurveyOfSchool']['katchi_enrollment_boys']?></td></tr>
			<tr><td>Katchi Enrollment GIRLS</td><td><?php echo $baseline_survey['EnrollmentAttendance']['gwe_katchi_girls']?></td><td><?php echo $surveyOfSchool['SurveyOfSchool']['katchi_enrollment_girls']?></td></tr>
			<tr><td>Rooms Used </td><td><?php echo (($baseline_survey['BasicInformation']['classrooms'])+($baseline_survey['BasicInformation']['office'])+($baseline_survey['BasicInformation']['store'])+($baseline_survey['BasicInformation']['other']))?></td><td><?php echo $surveyOfSchool['GuideSpecific']['rooms_used']?></td></tr>
			<tr><td>Rooms Unused</td><td><?php echo $baseline_survey['BasicInformation']['unused']?></td><td><?php echo $surveyOfSchool['GuideSpecific']['rooms_unused']?></td></tr>
			<tr><td>SMC Notified / functional</td><td><?php if($baseline_survey['SchoolManagementCommitee']['has_notified_smc'] == 1) { echo "Yes"; }elseif($baseline_survey['SchoolManagementCommitee']['has_notified_smc'] == 0) { echo "No"; }  ?></td>  <td><?php if($surveyOfSchool['SurveyOfSchool']['smc_func'] == 1) { echo "Yes"; }elseif($surveyOfSchool['SurveyOfSchool']['smc_func'] == 0) { echo "No"; }  ?></td></tr>
			<tr><td>Text Book Distribution Record</td><td><?php if($baseline_survey['Record']['tb_distribution_available'] == 1) { echo "Yes"; }elseif($baseline_survey['Record']['tb_distribution_available'] == 0) { echo "No"; }  ?></td>	<td><?php if($surveyOfSchool['SurveyOfSchool']['free_tb'] == 1) { echo "Yes"; }elseif($surveyOfSchool['SurveyOfSchool']['free_tb'] == 0) { echo "No"; } ?></td></tr>
			<tr><td>Visitor's Book</td><td><?php if($baseline_survey['Record']['vb_available'] == 1) { echo "Yes"; }elseif($baseline_survey['Record']['vb_available'] == 0) { echo "No"; }  ?></td>												<td><?php if($surveyOfSchool['SurveyOfSchool']['visitor_book'] == 1) { echo "Yes"; }elseif($surveyOfSchool['SurveyOfSchool']['visitor_book'] == 0) { echo "No"; } ?></td> </tr>
			<tr><td>Exam Results Record</td><td><?php if($baseline_survey['Record']['exam_result_available'] == 1) { echo "Yes"; }elseif($baseline_survey['Record']['exam_result_available'] == 0) { echo "No"; }  ?></td>						<td><?php if($surveyOfSchool['SurveyOfSchool']['exam_result'] == 1) { echo "Yes"; }elseif($surveyOfSchool['SurveyOfSchool']['exam_result'] == 0) { echo "No"; } ?></td></tr>
			<tr><td>Teacher's Attendance Register</td><td><?php if($baseline_survey['Record']['tar_available'] == 1) { echo "Yes"; }elseif($baseline_survey['Record']['tar_available'] == 0) { echo "No"; }  ?></td>							<td><?php if($surveyOfSchool['SurveyOfSchool']['teacher_att_register'] == 1) { echo "Yes"; }elseif($surveyOfSchool['SurveyOfSchool']['teacher_att_register'] == 0) { echo "No"; } ?></td></tr>
			<tr><td>Student's Attendance Register</td><td><?php if($baseline_survey['Record']['stu_att_available'] == 1) { echo "Yes"; }elseif($baseline_survey['Record']['stu_att_available'] == 0) { echo "No"; }  ?></td>					<td><?php if($surveyOfSchool['SurveyOfSchool']['st_attendance_reg'] == 1) { echo "Yes"; }elseif($surveyOfSchool['SurveyOfSchool']['st_attendance_reg'] == 0) { echo "No"; } ?></td></tr>
			</table>
			<?php 
		}
	}
}

<?php /* $x = 1; ?>
<table>
<tr>
<th width=5%>No.</th>
<th width=25%>Name</th>
<th width=15%>Semis Code</th>
<th width=15%>Cluster</th>
<th width=15%>Uc</th>
<th width=15%>Taluka</th>
<th width=15%>District</th>
</tr>

<?php foreach($schools as $school) { ?>
<tr>
<td><?php echo $x?></td>
<td><?php echo ($school['School']['prefix'].' - '.$school['School']['name'])?></td>
<td><?php echo $school['School']['code']?></td>
<td><?php echo $school['cluster_name']?></td>
<td><?php echo $school['uc_name']?></td>
<td><?php echo $school['taluka_name']?></td>
<td><?php echo $school['district_name']?></td>
</tr>

<?php $x++; ?>
<?php } ?>
<?php foreach($other_schools as $other_school) { ?>
<tr>
<td><?php echo $x?></td>
<td><?php echo $other_school['SchoolIdentification']['school_name']?></td>
<td><?php echo $other_school['SchoolIdentification']['semis_code']?></td>
<td><?php echo $other_school['SchoolIdentification']['cluster_code']?></td>
<td><?php echo $other_school['SchoolIdentification']['uc_name']?></td>
<td><?php echo $other_school['SchoolIdentification']['taluka']?></td>
<td><?php echo $other_school['SchoolIdentification']['district']?></td>
</tr>
<?php $x++; ?>
<?php } ?>
</table>
*/ ?>