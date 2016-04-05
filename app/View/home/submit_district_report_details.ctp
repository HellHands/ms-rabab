<h1 class="heading-main"> Report Based On Baseline Survey For District</h1>

<table>
<tr><td>District Name</td><td><?php echo $district_name?></td></tr>
<tr><td>Taluka</td><td><?php echo $taluka_name?></td></tr>
<tr><td>Union Council</td><td><?php echo $uc_name?></td></tr>
<tr><td>Cluster Name</td><td><?php echo $cluster_name?></td></tr>
<tr><td>Total Schools</td><td><?php echo $count_of_school?></td></tr>
<tr><td>Total Surveys</td><td><?php echo $count_of_surveys?></td></tr>	
</table>


<?php 
// 1. School Identification Report Starts here

	if(isset($school_info) || isset($school_address) || isset($school_distances) || isset($school_oppurtunities) ) { ?>
	<br />
	<div class="main-heading">1. School Identification</div>

<?php if(isset($school_info)) { ?>
	<h4> School Information</h4>
	<table>
	<tr><td width=50%>School Name </td><td><?php echo $school_name?></td></tr>
	<tr><td>Semis Code</td><td><?php echo $schoolIdentification['SchoolIdentification']['semis_code']?></td></tr>
	<tr><td>District Name</td><td><?php echo $cluster_name?></td></tr>
	</table>
	
<?php } ?>

<?php if(isset($school_address)) { ?>
	<h4> School Address</h4>
	<table>
	<tr><td width=50%>Village Street: </td><td><?php echo $schoolIdentification['SchoolIdentification']['school_village_st']?></td></tr>
	<tr><td>No. of Households in the village / Vicinity (Street):</td><td><?php echo $schoolIdentification['SchoolIdentification']['school_vicinity_households']?></td></tr>
	<tr><td>Union Council</td><td><?php echo $uc_name?></td></tr>
	<tr><td>Taluka</td><td><?php echo $taluka_name?></td></tr>
	<tr><td>District Name</td><td><?php echo $district_name?></td></tr>
	</table>
	
<?php } ?>


<?php if(isset($school_distances)) { ?>
	<h4> School Distances</h4>
	<table>
	<tr><th width=40%>Name of Guide School</th><th width=30%>Distance</th><th width=30%>Direction</th></tr>
	<tr><td>Guide to Non Guide Distance and Direction 1</td><td><?php echo $schoolIdentification['SchoolIdentification']['gtng1']?></td><td><?php echo $schoolIdentification['SchoolIdentification']['dir1']?></td></tr>
	<tr><td>Guide to Non Guide Distance and Direction 2</td><td><?php echo $schoolIdentification['SchoolIdentification']['gtng2']?></td><td><?php echo $schoolIdentification['SchoolIdentification']['dir2']?></td></tr>
	<tr><td>Guide to Non Guide Distance and Direction 3</td><td><?php echo $schoolIdentification['SchoolIdentification']['gtng3']?></td><td><?php echo $schoolIdentification['SchoolIdentification']['dir3']?></td></tr>
	<tr><td>Guide to Non Guide Distance and Direction 4</td><td><?php echo $schoolIdentification['SchoolIdentification']['gtng4']?></td><td><?php echo $schoolIdentification['SchoolIdentification']['dir4']?></td></tr>
	<tr><td>Guide to Non Guide Distance and Direction 5</td><td><?php echo $schoolIdentification['SchoolIdentification']['gtng5']?></td><td><?php echo $schoolIdentification['SchoolIdentification']['dir5']?></td></tr>
	<tr><td>Guide to Non Guide Distance and Direction 6</td><td><?php echo $schoolIdentification['SchoolIdentification']['gtng6']?></td><td><?php echo $schoolIdentification['SchoolIdentification']['dir6']?></td></tr>
	<tr><td>Guide to Non Guide Distance and Direction 7</td><td><?php echo $schoolIdentification['SchoolIdentification']['gtng7']?></td><td><?php echo $schoolIdentification['SchoolIdentification']['dir7']?></td></tr>
	<tr><td>Guide to Non Guide Distance and Direction 8</td><td><?php echo $schoolIdentification['SchoolIdentification']['gtng8']?></td><td><?php echo $schoolIdentification['SchoolIdentification']['dir8']?></td></tr>
	</table>
	
	
<?php } ?>


<?php if(isset($school_oppurtunities)) { ?>
	<h4> Other Oppurtunities In District:</h4>
	<table>
	<tr><td width=50%>No. of Middle / Elementry Schools (Govt): Boys</td><td><?php echo $cluster_oppurtunities[0][0]['elementary_boys_sum']?></td></tr>
	<tr><td>No. of Middle / Elementry Schools (Govt): Girls</td><td><?php echo $cluster_oppurtunities[0][0]['elementary_girls_sum']?></td></tr>
	<tr><td>No. of Secondary / HS Schools (Govt): Boys</td><td><?php echo $cluster_oppurtunities[0][0]['secondary_boys_sum']?></td></tr>
	<tr><td>No. of Secondary / HS Schools (Govt): Girls</td><td><?php echo $cluster_oppurtunities[0][0]['secondary_girls_sum']?></td></tr>
	<tr><td>No. of Private Schools : Boys</td><td><?php echo $cluster_oppurtunities[0][0]['private_boys_sum']?></td></tr>
	<tr><td>No. of Private Schools : Girls</td><td><?php echo $cluster_oppurtunities[0][0]['private_girls_sum']?></td></tr>
	<tr><td>No. of Other / NGO / Community /Masjid Schools : Boys</td><td><?php echo $cluster_oppurtunities[0][0]['other_boys_sum']?></td></tr>
	<tr><td>No. of Other / NGO / Community /Masjid Schools : Girls</td><td><?php echo $cluster_oppurtunities[0][0]['other_girls_sum']?></td></tr>
	</table>
	
	
	<h4> Other Oppurtunities School:</h4>
	<table>
	<tr><th width=40%></th><th width=30%></th><th width=30%>% of other oppurtunities in Cluster</th></tr>
	<tr><td width=40%>No. of Middle / Elementry Schools (Govt): Boys</td><td><?php echo $schoolIdentification['SchoolIdentification']['elementary_boys']?></td><td><?php echo round(((($schoolIdentification['SchoolIdentification']['elementary_boys'])/($cluster_oppurtunities[0][0]['elementary_boys_sum']))*100),2).'%'?></td></tr>
	<tr><td>No. of Middle / Elementry Schools (Govt): Girls</td><td><?php echo $schoolIdentification['SchoolIdentification']['elementary_girls']?></td><td><?php echo round(((($schoolIdentification['SchoolIdentification']['elementary_girls'])/($cluster_oppurtunities[0][0]['elementary_girls_sum']))*100),2).'%'?></td></tr>
	<tr><td>No. of Secondary / HS Schools (Govt): Boys</td><td><?php echo $schoolIdentification['SchoolIdentification']['secondary_boys']?></td><td><?php echo round(((($schoolIdentification['SchoolIdentification']['secondary_boys'])/($cluster_oppurtunities[0][0]['secondary_boys_sum']))*100),2).'%'?></td></tr>
	<tr><td>No. of Secondary / HS Schools (Govt): Girls</td><td><?php echo $schoolIdentification['SchoolIdentification']['secondary_girls']?></td><td><?php echo round(((($schoolIdentification['SchoolIdentification']['secondary_girls'])/($cluster_oppurtunities[0][0]['secondary_girls_sum']))*100),2).'%'?></td></tr>
	<tr><td>No. of Private Schools : Boys</td><td><?php echo $schoolIdentification['SchoolIdentification']['private_boys']?></td><td><?php echo round(((($schoolIdentification['SchoolIdentification']['private_boys'])/($cluster_oppurtunities[0][0]['private_boys_sum']))*100),2).'%'?></td></tr>
	<tr><td>No. of Private Schools : Girls</td><td><?php echo $schoolIdentification['SchoolIdentification']['private_girls']?></td><td><?php echo round(((($schoolIdentification['SchoolIdentification']['private_girls'])/($cluster_oppurtunities[0][0]['private_girls_sum']))*100),2).'%'?></td></tr>
	<tr><td>No. of Other / NGO / Community /Masjid Schools : Boys</td><td><?php echo $schoolIdentification['SchoolIdentification']['other_boys']?></td><td><?php echo round(((($schoolIdentification['SchoolIdentification']['other_boys'])/($cluster_oppurtunities[0][0]['other_boys_sum']))*100),2).'%'?></td></tr>
	<tr><td>No. of Other / NGO / Community /Masjid Schools : Girls</td><td><?php echo $schoolIdentification['SchoolIdentification']['other_girls']?></td><td><?php echo round(((($schoolIdentification['SchoolIdentification']['other_girls'])/($cluster_oppurtunities[0][0]['other_girls_sum']))*100),2).'%'?></td></tr>
	</table>
<?php } ?>



<?php } ?>



<?php 
// 2. Basic Information Report Starts here
if(isset($school_basics) || isset($school_bank_budget) || isset($school_rooms_other)) { ?>
<br />
<div class="main-heading">2. Basic Information</div>

<?php if(isset($school_basics)) { ?>
	<h4> District Basic Information</h4>
	<table>
	<tr><td width=50%>School Statusses:</td><td></td></tr>
	<tr><td>Number of Functional Schools</td><td><?php echo $number_functional_schools?></td></tr>
	<tr><td colspan=2>School By Level</td></tr>
	<tr><td>Primary</td><td><?php echo $number_primary_schools; ?></td></tr>
	<tr><td>Middle</td><td><?php echo $number_middle_schools; ?></td></tr>
	<tr><td>Elementary</td><td><?php echo $number_elementry_schools; ?></td></tr>
	<tr><td colspan=2>School By Gender</td></tr>
	<tr><td>Boys</td><td><?php echo $number_boys_schools; ?></td></tr>
	<tr><td>Girls</td><td><?php echo $number_girls_schools; ?></td></tr>
	<tr><td>Mix</td><td><?php echo $number_mix_schools; ?></td></tr>
	<tr><td>School By Medium</td><td></td></tr>
	<tr><td>English</td><td><?php echo $number_english_schools; ?></td></tr>
	<tr><td>Sindhi</td><td><?php echo $number_sindhi_schools; ?></td></tr>
	<tr><td>Urdu</td><td><?php echo $number_urdu_schools; ?></td></tr>
	<tr><td>No. of Schools Having a Elementary/Middle School within range of an approximate distance of 1.5km </td><td><?php echo $number_schools_has_school_in_range; ?></td></tr>
	<tr><td>No. of Schools Having a High School available within Range of an approximate distance of 1.5 KM</td><td><?php echo $number_schools_has_highschool_in_range; ?></td></tr>
	</table>
	
	<h4> School Basic Information</h4>
	<table>
	<tr><td width=50%>School Status:</td><td><?php echo $basicInformation['BasicInformation']['school_status']?></td></tr>
	<tr><td>Date Of Establishment</td><td><?php echo $basicInformation['BasicInformation']['date_of_stablishment']?></td></tr>
	<tr><td>School Level</td><td><?php echo $basicInformation['BasicInformation']['school_level']?></td></tr>
	<tr><td>Gender of School</td><td><?php echo $basicInformation['BasicInformation']['school_gender']?></td></tr>
	<tr><td>Medium of Instruction</td><td><?php echo $basicInformation['BasicInformation']['medium_of_instruction']?></td></tr>
	<tr><td>School Has a Elementary/Middle School within range of an approximate distance of 1.5km </td><td><?php if($basicInformation['BasicInformation']['school_in_range'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>School Has a High School available within Range of an approximate distance of 1.5 KM</td><td><?php if($basicInformation['BasicInformation']['high_school_in_range'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	</table>
<?php } ?>

<?php if(isset($school_bank_budget)) { ?>
	<h4> District Bank budget</h4>
	<table>
	<tr><td width=50%>No. of Schools Recieved Annual Budget:</td><td><?php echo $number_schools_recieved_budget; ?></td></tr>
	<tr><td>No. of Schools Having Bank Account</td><td><?php echo $number_schools_has_bank_account; ?></td></tr>
	
	</table>
	
	<h4> School Bank budget</h4>
	<table>
	<tr><td width=50%>School Recieved Annual Budget:</td><td><?php if($basicInformation['BasicInformation']['budget_recieved'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>School Has Bank Account</td><td><?php if($basicInformation['BasicInformation']['school_account'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Bank and Branch</td><td><?php echo $basicInformation['BasicInformation']['bank_branch']?></td></tr>
	<tr><td>Account Title</td><td><?php echo $basicInformation['BasicInformation']['account_title']?></td></tr>
	<tr><td>Account Number</td><td><?php echo $basicInformation['BasicInformation']['account_number']?></td></tr>
	</table>
<?php } ?>


<?php if(isset($school_rooms_other)) { ?>
	<h4> District Rooms Information</h4>
	<table>
	<tr><td width=50% style="background-color:#bbffdd;" >Total Number of Rooms</td><td style="background-color:#bbffdd;"><?php echo $school_rooms_other_sum['unused_sum']+$school_rooms_other_sum['total_rooms_inuse_sum']; //echo $school_rooms_other_sum['no_of_rooms_sum']?></td></tr>
	<tr><td>Total Number of Rooms in Use in District</td><td><?php echo $school_rooms_other_sum['total_rooms_inuse_sum']?></td></tr>
	<tr><td>Total Number of Classrooms in District</td><td><?php echo $school_rooms_other_sum['classrooms_sum']?></td></tr>
	<tr><td>Total Number of Office in District</td><td><?php echo $school_rooms_other_sum['office_sum']?></td></tr>
	<tr><td>Total Number of Store in District</td><td><?php echo $school_rooms_other_sum['store_sum']?></td></tr>
	<tr><td>Total Number of Unused Rooms in District</td><td><?php echo $school_rooms_other_sum['unused_sum']?></td></tr>
	<tr><td>Total Number of Unsafe Rooms in District</td><td><?php echo $school_rooms_other_sum['unsafe_sum']?></td></tr>
	<tr><td>Total Number of Other Rooms in District</td><td><?php echo $school_rooms_other_sum['other_sum']?></td></tr>
	</table>
	
	<h4> School Rooms Information</h4>
	<table>
	<tr><td width=40%></td><td width=30%></td><td width=30%>% of District</td></tr>
	<tr><td style="background-color:#bbffdd;" >Total Number of Rooms</td><td style="background-color:#bbffdd;"><?php echo $basicInformation['BasicInformation']['no_of_rooms']?></td><td><?php echo round(((($basicInformation['BasicInformation']['no_of_rooms'])/($school_rooms_other_sum['no_of_rooms_sum']))*100),2).'%'?></td></tr>
	<tr><td>Total Number of Rooms in Use</td><td><?php echo $basicInformation['BasicInformation']['total_rooms_inuse']?></td><td><?php echo round(((($basicInformation['BasicInformation']['total_rooms_inuse'])/($school_rooms_other_sum['total_rooms_inuse_sum']))*100),2).'%'?></td></tr>
	<tr><td>Total Number of Classrooms</td><td><?php echo $basicInformation['BasicInformation']['classrooms']?></td><td><?php echo round(((($basicInformation['BasicInformation']['classrooms'])/($school_rooms_other_sum['classrooms_sum']))*100),2).'%'?></td></tr>
	<tr><td>Total Number of Office</td><td><?php echo $basicInformation['BasicInformation']['office']?></td><td><?php echo round(((($basicInformation['BasicInformation']['office'])/($school_rooms_other_sum['office_sum']))*100),2).'%'?></td></tr>
	<tr><td>Total Number of Store</td><td><?php echo $basicInformation['BasicInformation']['store']?></td><td><?php echo round(((($basicInformation['BasicInformation']['store'])/($school_rooms_other_sum['store_sum']))*100),2).'%'?></td></tr>
	<tr><td>Total Number of Unused Rooms</td><td><?php echo $basicInformation['BasicInformation']['unused']?></td><td><?php echo round(((($basicInformation['BasicInformation']['unused'])/($school_rooms_other_sum['unused_sum']))*100),2).'%'?></td></tr>
	<tr><td>Total Number of Unsafe Rooms</td><td><?php echo $basicInformation['BasicInformation']['unsafe']?></td><td><?php echo round(((($basicInformation['BasicInformation']['unsafe'])/($school_rooms_other_sum['unsafe_sum']))*100),2).'%'?></td></tr>
	<tr><td>Total Number of Other Rooms</td><td><?php echo $basicInformation['BasicInformation']['other']?></td><td><?php echo round(((($basicInformation['BasicInformation']['other'])/($school_rooms_other_sum['other_sum']))*100),2).'%'?></td></tr>
	</table>
<?php } ?>



<?php } ?>

<?php if(isset($school_student_record) || isset($school_teacher_record) || isset($school_smc_records) || isset($school_sip_other_records) ) { ?>
<br />
<div class="main-heading">3. Records</div>
<?php if(isset($school_student_record)) { ?>
	<h4> Students Records in District</h4>
	<table>
	<tr><th  width=40% style="background-color:#bbffdd;"></th><th style="background-color:#bbffdd;">Available</th><th style="background-color:#bbffdd;">Updated</th></tr>
	<tr><td>Students Attendance Register Available / Updated in No. of Schools</td><td><?php echo $numberofschool_stu_att_available_cluster; ?></td><td><?php echo $numberofschool_stu_att_updated_cluster; ?></td></tr>
	<tr><td>General Register Available / Updated in No. of Schools</td><td><?php echo $numberofschool_gr_available_cluster; ?></td><td><?php echo $numberofschool_gr_updated_cluster; ?></td></tr>
	<tr><td>Examination  Results Available / Updated in No. of Schools</td><td><?php echo $numberofschool_exam_result_available_cluster; ?></td><td><?php echo $numberofschool_exam_result_updated_cluster; ?></td></tr>
	</table>
	
	
	<h4> Students Records</h4>
	<table>
	<tr><th  width=40% style="background-color:#bbffdd;"></th><th style="background-color:#bbffdd;">Available</th><th style="background-color:#bbffdd;">Updated</th></tr>
	<tr><td>Students Attendance Register</td><td><?php if($records['Record']['stu_att_available'] == 1) { echo "Yes";}else{ echo "No"; } ?></td><td><?php if($records['Record']['stu_att_updated'] == 1) { echo "Yes";}else{ echo "No"; } ?></td></tr>
	<tr><td>General Register</td><td><?php if($records['Record']['gr_available'] == 1) { echo "Yes";}else{ echo "No"; } ?></td><td><?php if($records['Record']['gr_updated'] == 1) { echo "Yes";}else{ echo "No"; } ?></td></tr>
	<tr><td>Examination  Results</td><td><?php if($records['Record']['exam_result_available'] == 1) { echo "Yes";}else{ echo "No"; } ?></td><td><?php if($records['Record']['exam_result_available'] == 1) { echo "Yes";}else{ echo "No"; } ?></td></tr>
	</table>
<?php } ?>

<?php if(isset($school_teacher_record)) { ?>
	<h4> Teachers Records in District</h4>
	<table>
	<tr><th  width=40% style="background-color:#bbffdd;"></th><th style="background-color:#bbffdd;">Available</th><th style="background-color:#bbffdd;">Updated</th></tr>
	<tr><td>Teachers Attendance Register Available / Updated in No. of Schools </td><td><?php echo $numberofschool_tar_available_cluster; ?></td><td><?php echo $numberofschool_tar_updated_cluster; ?></td></tr>
	<tr><td>Teachers Leave Records Available / Updated in No. of Schools</td><td><?php echo $numberofschool_tlr_available_cluster; ?></td><td><?php echo $numberofschool_tlr_updated_cluster; ?></td></tr>
	</table>
	
	<h4> Teachers Records</h4>
	<table>
	<tr><th  width=40% style="background-color:#bbffdd;"></th><th style="background-color:#bbffdd;">Available</th><th style="background-color:#bbffdd;">Updated</th></tr>
	<tr><td>Teachers Attendance Register</td><td><?php if($records['Record']['tar_available'] == 1) { echo "Yes";}else{ echo "No"; } ?></td><td><?php if($records['Record']['tar_updated'] == 1) { echo "Yes";}else{ echo "No"; } ?></td></tr>
	<tr><td>Teachers Leave Records</td><td><?php if($records['Record']['tlr_available'] == 1) { echo "Yes";}else{ echo "No"; } ?></td><td><?php if($records['Record']['tlr_updated'] == 1) { echo "Yes";}else{ echo "No"; } ?></td></tr>
	</table>
<?php } ?>


<?php if(isset($school_smc_records)) { ?>
	<h4> SMC Records in District</h4>
	<table>
	<tr><th  width=40% style="background-color:#bbffdd;"></th><th style="background-color:#bbffdd;">Available</th><th style="background-color:#bbffdd;">Updated</th></tr>
	<tr><td>SMC Register Available / Updated in No. of Schools in District</td><td><?php echo $numberofschool_smc_register_available_cluster; ?></td><td><?php echo $numberofschool_smc_register_updated_cluster; ?></td></tr>
	<tr><td>SMC Notification Available / Updated in No. of Schools in District</td><td><?php echo $numberofschool_smc_notif_available_cluster; ?></td><td>N/A</td></tr>
	<tr><td>SMC Guideline Available / Updated in No. of Schools in District</td><td><?php echo $numberofschool_smc_guideline_available_cluster; ?></td><td>N/A</td></tr>
	<tr><td>SMC Bank Account Information Available / Updated in No. of Schools in District</td><td><?php echo $numberofschool_smc_accountinfo_available_cluster; ?></td><td>N/A</td></tr>
	</table>
	
	<h4> SMC Records</h4>
	<table>
	<tr><th  width=40% style="background-color:#bbffdd;"></th><th style="background-color:#bbffdd;">Available</th><th style="background-color:#bbffdd;">Updated</th></tr>
	<tr><td>SMC Register</td><td><?php if($records['Record']['smc_register_available'] == 1) { echo "Yes";}else{ echo "No"; } ?></td><td><?php if($records['Record']['smc_register_updated'] == 1) { echo "Yes";}else{ echo "No"; } ?></td></tr>
	<tr><td>SMC Notification</td><td><?php if($records['Record']['smc_notif_available'] == 1) { echo "Yes";}else{ echo "No"; } ?></td><td>N/A</td></tr>
	<tr><td>SMC Guideline</td><td><?php if($records['Record']['smc_guideline_available'] == 1) { echo "Yes";}else{ echo "No"; } ?></td><td>N/A</td></tr>
	<tr><td>SMC Bank Account Information</td><td><?php if($records['Record']['smc_accountinfo_available'] == 1) { echo "Yes";}else{ echo "No"; } ?></td><td>N/A</td></tr>
	</table>
<?php } ?>


<?php if(isset($school_sip_other_records)) { ?>
	<h4> Other Records in Districts</h4>
	<table>
	<tr><th  width=40% style="background-color:#bbffdd;"></th><th style="background-color:#bbffdd;">Available</th><th style="background-color:#bbffdd;">Updated</th></tr>
	<tr><td>Visitors Book Available / Updated in no. of schools in District</td><td><?php echo $numberofschool_vb_available_cluster; ?></td><td><?php echo $numberofschool_vb_updated_cluster; ?></td></tr>
	<tr><td>SEMIS School Form Available / Updated in no. of schools in District</td><td><?php echo $numberofschool_ss_form_available_cluster; ?></td><td><?php echo $numberofschool_ss_form_updated_cluster; ?></td></tr>
	<tr><td>Textbooks Distribution form Available / Updated in no. of schools in District</td><td><?php echo $numberofschool_tb_distribution_available_cluster; ?></td><td><?php echo $numberofschool_tb_distribution_updated_cluster; ?></td></tr>
	<tr><td>Asset / Stock Register Available / Updated in no. of schools in District</td><td><?php echo $numberofschool_as_register_available_cluster; ?></td><td><?php echo $numberofschool_as_register_updated_cluster; ?></td></tr>
	<tr><td>School Improvement Plan (SIP)  Available / Updated in no. of schools in District</td><td><?php echo $numberofschool_sip_available_cluster; ?></td><td><?php echo $numberofschool_sip_updated_cluster; ?></td></tr>
	</table>
	
	<h4> Other Records</h4>
	<table>
	<tr><th  width=40% style="background-color:#bbffdd;"></th><th style="background-color:#bbffdd;">Available</th><th style="background-color:#bbffdd;">Updated</th></tr>
	<tr><td>Visitors Book</td><td><?php if($records['Record']['vb_available'] == 1) { echo "Yes";}else{ echo "No"; } ?></td><td><?php if($records['Record']['vb_updated'] == 1) { echo "Yes";}else{ echo "No"; } ?></td></tr>
	<tr><td>SEMIS School Form</td><td><?php if($records['Record']['ss_form_available'] == 1) { echo "Yes";}else{ echo "No"; } ?></td><td><?php if($records['Record']['ss_form_updated'] == 1) { echo "Yes";}else{ echo "No"; } ?></td></tr>
	<tr><td>Textbooks Distribution form</td><td><?php if($records['Record']['tb_distribution_available'] == 1) { echo "Yes";}else{ echo "No"; } ?></td><td><?php if($records['Record']['tb_distribution_updated'] == 1) { echo "Yes";}else{ echo "No"; } ?></td></tr>
	<tr><td>Asset / Stock Register</td><td><?php if($records['Record']['as_register_available'] == 1) { echo "Yes";}else{ echo "No"; } ?></td><td><?php if($records['Record']['as_register_updated'] == 1) { echo "Yes";}else{ echo "No"; } ?></td></tr>
	<tr><td>School Improvement Plan (SIP)</td><td><?php if($records['Record']['sip_available'] == 1) { echo "Yes";}else{ echo "No"; } ?></td><td><?php if($records['Record']['sip_updated'] == 1) { echo "Yes";}else{ echo "No"; } ?></td></tr>
	</table>
<?php } ?>


<?php } ?>

<?php if(isset($school_enrollment_this_year) || isset($school_enrollment_last_year) || isset($school_students_promoted) || isset($school_students_repeating) || isset($school_students_transferred) || isset($school_students_droppedout) || isset($school_students_attendance_today) || isset($school_students_absent_month) || isset($school_average_attendance) || isset($school_numberof_teachers) || isset($school_teachers_basic_info) || isset($school_teachers_months_attendance) ) { ?>
<br />
<div class="main-heading">4. Enrollment and Attendances</div>

<?php if(isset($school_enrollment_this_year)) { ?>
	<h4> Grade Wise Enrollment This Year in District( Boys ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $school_enrollment_this_year_sum['gwe_katchi_boys_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_this_year_sum['gwe_1_boys_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_this_year_sum['gwe_2_boys_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_this_year_sum['gwe_3_boys_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_this_year_sum['gwe_4_boys_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_this_year_sum['gwe_5_boys_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_this_year_sum['gwe_6_boys_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_this_year_sum['gwe_7_boys_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_this_year_sum['gwe_8_boys_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_this_year_sum['gwe_8_boys_sum']?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year ( Boys ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwe_katchi_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwe_katchi_boys'])/($school_enrollment_this_year_sum['gwe_katchi_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwe_1_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwe_1_boys'])/($school_enrollment_this_year_sum['gwe_1_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwe_2_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwe_2_boys'])/($school_enrollment_this_year_sum['gwe_2_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwe_3_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwe_3_boys'])/($school_enrollment_this_year_sum['gwe_3_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwe_4_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwe_4_boys'])/($school_enrollment_this_year_sum['gwe_4_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwe_5_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwe_5_boys'])/($school_enrollment_this_year_sum['gwe_5_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwe_6_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwe_6_boys'])/($school_enrollment_this_year_sum['gwe_6_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwe_7_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwe_7_boys'])/($school_enrollment_this_year_sum['gwe_7_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwe_8_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwe_8_boys'])/($school_enrollment_this_year_sum['gwe_8_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwe_8_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwe_8_boys'])/($school_enrollment_this_year_sum['gwe_8_boys_sum']))*100,2)).'% of District )'?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year in District( Girls ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $school_enrollment_this_year_sum['gwe_katchi_girls_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_this_year_sum['gwe_1_girls_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_this_year_sum['gwe_2_girls_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_this_year_sum['gwe_3_girls_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_this_year_sum['gwe_4_girls_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_this_year_sum['gwe_5_girls_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_this_year_sum['gwe_6_girls_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_this_year_sum['gwe_7_girls_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_this_year_sum['gwe_8_girls_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_this_year_sum['gwe_8_girls_sum']?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year ( Girls ) </h4>
	<table>
		<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwe_katchi_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwe_katchi_girls'])/($school_enrollment_this_year_sum['gwe_katchi_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwe_1_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwe_1_girls'])/($school_enrollment_this_year_sum['gwe_1_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwe_2_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwe_2_girls'])/($school_enrollment_this_year_sum['gwe_2_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwe_3_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwe_3_girls'])/($school_enrollment_this_year_sum['gwe_3_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwe_4_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwe_4_girls'])/($school_enrollment_this_year_sum['gwe_4_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwe_5_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwe_5_girls'])/($school_enrollment_this_year_sum['gwe_5_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwe_6_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwe_6_girls'])/($school_enrollment_this_year_sum['gwe_6_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwe_7_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwe_7_girls'])/($school_enrollment_this_year_sum['gwe_7_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwe_8_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwe_8_girls'])/($school_enrollment_this_year_sum['gwe_8_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwe_8_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwe_8_girls'])/($school_enrollment_this_year_sum['gwe_8_girls_sum']))*100,2)).'% of District )'?>
	</td>
	</tr>
	</table>
<?php } ?>

<?php if(isset($school_enrollment_last_year)) { ?>
	<h4> Grade Wise Enrollment This Year in District( Boys ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $school_enrollment_last_year_sum['tely_katchi_boys_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_last_year_sum['tely_1_boys_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_last_year_sum['tely_2_boys_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_last_year_sum['tely_3_boys_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_last_year_sum['tely_4_boys_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_last_year_sum['tely_5_boys_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_last_year_sum['tely_6_boys_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_last_year_sum['tely_7_boys_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_last_year_sum['tely_8_boys_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_last_year_sum['tely_1_boys_sum']?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year ( Boys ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['tely_katchi_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['tely_katchi_boys'])/($school_enrollment_last_year_sum['tely_katchi_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['tely_1_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['tely_1_boys'])/($school_enrollment_last_year_sum['tely_1_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['tely_2_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['tely_2_boys'])/($school_enrollment_last_year_sum['tely_2_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['tely_3_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['tely_3_boys'])/($school_enrollment_last_year_sum['tely_3_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['tely_4_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['tely_4_boys'])/($school_enrollment_last_year_sum['tely_4_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['tely_5_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['tely_5_boys'])/($school_enrollment_last_year_sum['tely_5_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['tely_6_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['tely_6_boys'])/($school_enrollment_last_year_sum['tely_6_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['tely_7_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['tely_7_boys'])/($school_enrollment_last_year_sum['tely_7_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['tely_8_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['tely_8_boys'])/($school_enrollment_last_year_sum['tely_8_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['tely_1_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['tely_1_boys'])/($school_enrollment_last_year_sum['tely_1_boys_sum']))*100,2)).'% of District )'?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year in District( Girls ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $school_enrollment_last_year_sum['tely_katchi_girls_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_last_year_sum['tely_1_girls_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_last_year_sum['tely_2_girls_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_last_year_sum['tely_3_girls_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_last_year_sum['tely_4_girls_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_last_year_sum['tely_5_girls_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_last_year_sum['tely_6_girls_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_last_year_sum['tely_7_girls_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_last_year_sum['tely_8_girls_sum']?>
	</td>
	<td>
	<?php echo $school_enrollment_last_year_sum['tely_8_girls_sum']?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year ( Girls ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['tely_katchi_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['tely_katchi_girls'])/($school_enrollment_last_year_sum['tely_katchi_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['tely_1_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['tely_1_girls'])/($school_enrollment_last_year_sum['tely_1_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['tely_2_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['tely_2_girls'])/($school_enrollment_last_year_sum['tely_2_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['tely_3_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['tely_3_girls'])/($school_enrollment_last_year_sum['tely_3_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['tely_4_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['tely_4_girls'])/($school_enrollment_last_year_sum['tely_4_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['tely_5_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['tely_5_girls'])/($school_enrollment_last_year_sum['tely_5_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['tely_6_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['tely_6_girls'])/($school_enrollment_last_year_sum['tely_6_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['tely_7_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['tely_7_girls'])/($school_enrollment_last_year_sum['tely_7_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['tely_8_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['tely_8_girls'])/($school_enrollment_last_year_sum['tely_8_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['tely_1_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['tely_1_girls'])/($school_enrollment_last_year_sum['tely_1_girls_sum']))*100,2)).'% of District )'?>
	</td>
	</tr>
	</table>
<?php } ?>

<?php if(isset($school_students_promoted)) { ?>
	<h4> Grade Wise Enrollment This Year in District( Boys ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $school_students_promoted_sum['ncp_katchi_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_promoted_sum['ncp_1_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_promoted_sum['ncp_2_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_promoted_sum['ncp_3_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_promoted_sum['ncp_4_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_promoted_sum['ncp_5_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_promoted_sum['ncp_6_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_promoted_sum['ncp_7_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_promoted_sum['ncp_8_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_promoted_sum['ncp_8_boys_sum']?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year ( Boys ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncp_katchi_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncp_katchi_boys'])/($school_students_promoted_sum['ncp_katchi_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncp_1_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncp_1_boys'])/($school_students_promoted_sum['ncp_1_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncp_2_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncp_2_boys'])/($school_students_promoted_sum['ncp_2_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncp_3_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncp_3_boys'])/($school_students_promoted_sum['ncp_3_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncp_4_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncp_4_boys'])/($school_students_promoted_sum['ncp_4_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncp_5_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncp_5_boys'])/($school_students_promoted_sum['ncp_5_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncp_6_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncp_6_boys'])/($school_students_promoted_sum['ncp_6_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncp_7_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncp_7_boys'])/($school_students_promoted_sum['ncp_7_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncp_8_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncp_8_boys'])/($school_students_promoted_sum['ncp_8_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncp_8_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncp_8_boys'])/($school_students_promoted_sum['ncp_8_boys_sum']))*100,2)).'% of District )'?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year in District( Girls ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $school_students_promoted_sum['ncp_katchi_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_promoted_sum['ncp_1_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_promoted_sum['ncp_2_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_promoted_sum['ncp_3_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_promoted_sum['ncp_4_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_promoted_sum['ncp_5_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_promoted_sum['ncp_6_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_promoted_sum['ncp_7_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_promoted_sum['ncp_8_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_promoted_sum['ncp_8_girls_sum']?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year ( Girls ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncp_katchi_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncp_katchi_girls'])/($school_students_promoted_sum['ncp_katchi_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncp_1_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncp_1_girls'])/($school_students_promoted_sum['ncp_1_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncp_2_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncp_2_girls'])/($school_students_promoted_sum['ncp_2_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncp_3_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncp_3_girls'])/($school_students_promoted_sum['ncp_3_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncp_4_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncp_4_girls'])/($school_students_promoted_sum['ncp_4_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncp_5_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncp_5_girls'])/($school_students_promoted_sum['ncp_5_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncp_6_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncp_6_girls'])/($school_students_promoted_sum['ncp_6_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncp_7_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncp_7_girls'])/($school_students_promoted_sum['ncp_7_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncp_8_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncp_8_girls'])/($school_students_promoted_sum['ncp_8_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncp_8_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncp_8_girls'])/($school_students_promoted_sum['ncp_8_girls_sum']))*100,2)).'% of District )'?>
	</td>
	</tr>
	</table>
<?php } ?>


<?php if(isset($school_students_repeating)) { ?>
	<h4> Grade Wise Enrollment This Year in District( Boys ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $school_students_repeating_sum['ncr_katchi_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_repeating_sum['ncr_1_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_repeating_sum['ncr_2_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_repeating_sum['ncr_3_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_repeating_sum['ncr_4_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_repeating_sum['ncr_5_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_repeating_sum['ncr_6_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_repeating_sum['ncr_7_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_repeating_sum['ncr_8_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_repeating_sum['ncr_8_boys_sum']?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year ( Boys ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncr_katchi_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncr_katchi_boys'])/($school_students_repeating_sum['ncr_katchi_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncr_1_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncr_1_boys'])/($school_students_repeating_sum['ncr_1_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncr_2_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncr_2_boys'])/($school_students_repeating_sum['ncr_2_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncr_3_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncr_3_boys'])/($school_students_repeating_sum['ncr_3_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncr_4_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncr_4_boys'])/($school_students_repeating_sum['ncr_4_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncr_5_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncr_5_boys'])/($school_students_repeating_sum['ncr_5_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncr_6_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncr_6_boys'])/($school_students_repeating_sum['ncr_6_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncr_7_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncr_7_boys'])/($school_students_repeating_sum['ncr_7_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncr_8_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncr_8_boys'])/($school_students_repeating_sum['ncr_8_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncr_8_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncr_8_boys'])/($school_students_repeating_sum['ncr_8_boys_sum']))*100,2)).'% of District )'?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year in District( Girls ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $school_students_repeating_sum['ncr_katchi_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_repeating_sum['ncr_1_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_repeating_sum['ncr_2_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_repeating_sum['ncr_3_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_repeating_sum['ncr_4_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_repeating_sum['ncr_5_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_repeating_sum['ncr_6_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_repeating_sum['ncr_7_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_repeating_sum['ncr_8_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_repeating_sum['ncr_8_girls_sum']?>
	</td>
	</tr>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncr_katchi_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncr_katchi_girls'])/($school_students_repeating_sum['ncr_katchi_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncr_1_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncr_1_girls'])/($school_students_repeating_sum['ncr_1_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncr_2_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncr_2_girls'])/($school_students_repeating_sum['ncr_2_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncr_3_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncr_3_girls'])/($school_students_repeating_sum['ncr_3_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncr_4_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncr_4_girls'])/($school_students_repeating_sum['ncr_4_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncr_5_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncr_5_girls'])/($school_students_repeating_sum['ncr_5_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncr_6_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncr_6_girls'])/($school_students_repeating_sum['ncr_6_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncr_7_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncr_7_girls'])/($school_students_repeating_sum['ncr_7_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncr_8_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncr_8_girls'])/($school_students_repeating_sum['ncr_8_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncr_8_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncr_8_girls'])/($school_students_repeating_sum['ncr_8_girls_sum']))*100,2)).'% of District )'?>
	</td>
	</tr>
	</table>
<?php } ?>



<?php if(isset($school_students_transferred)) { ?>
	<h4> Grade Wise Enrollment This Year in District( Boys ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $school_students_transferred_sum['nctos_katchi_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_transferred_sum['nctos_1_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_transferred_sum['nctos_2_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_transferred_sum['nctos_3_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_transferred_sum['nctos_4_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_transferred_sum['nctos_5_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_transferred_sum['nctos_6_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_transferred_sum['nctos_7_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_transferred_sum['nctos_8_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_transferred_sum['nctos_8_boys_sum']?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year ( Boys ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['nctos_katchi_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['nctos_katchi_boys'])/($school_students_transferred_sum['nctos_katchi_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['nctos_1_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['nctos_1_boys'])/($school_students_transferred_sum['nctos_1_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['nctos_2_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['nctos_2_boys'])/($school_students_transferred_sum['nctos_2_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['nctos_3_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['nctos_3_boys'])/($school_students_transferred_sum['nctos_3_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['nctos_4_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['nctos_4_boys'])/($school_students_transferred_sum['nctos_4_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['nctos_5_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['nctos_5_boys'])/($school_students_transferred_sum['nctos_5_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['nctos_6_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['nctos_6_boys'])/($school_students_transferred_sum['nctos_6_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['nctos_7_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['nctos_7_boys'])/($school_students_transferred_sum['nctos_7_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['nctos_8_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['nctos_8_boys'])/($school_students_transferred_sum['nctos_8_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['nctos_8_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['nctos_8_boys'])/($school_students_transferred_sum['nctos_8_boys_sum']))*100,2)).'% of District )'?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year in District( Girls ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $school_students_transferred_sum['nctos_katchi_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_transferred_sum['nctos_1_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_transferred_sum['nctos_2_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_transferred_sum['nctos_3_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_transferred_sum['nctos_4_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_transferred_sum['nctos_5_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_transferred_sum['nctos_6_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_transferred_sum['nctos_7_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_transferred_sum['nctos_8_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_transferred_sum['nctos_8_girls_sum']?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year ( Girls ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['nctos_katchi_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['nctos_katchi_girls'])/($school_students_transferred_sum['nctos_katchi_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['nctos_1_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['nctos_1_girls'])/($school_students_transferred_sum['nctos_1_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['nctos_2_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['nctos_2_girls'])/($school_students_transferred_sum['nctos_2_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['nctos_3_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['nctos_3_girls'])/($school_students_transferred_sum['nctos_3_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['nctos_4_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['nctos_4_girls'])/($school_students_transferred_sum['nctos_4_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['nctos_5_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['nctos_5_girls'])/($school_students_transferred_sum['nctos_5_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['nctos_6_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['nctos_6_girls'])/($school_students_transferred_sum['nctos_6_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['nctos_7_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['nctos_7_girls'])/($school_students_transferred_sum['nctos_7_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['nctos_8_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['nctos_8_girls'])/($school_students_transferred_sum['nctos_8_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['nctos_8_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['nctos_8_girls'])/($school_students_transferred_sum['nctos_8_girls_sum']))*100,2)).'% of District )'?>
	</td>
	</tr>
	</table>
<?php } ?>

<?php if(isset($school_students_droppedout)) { ?>
	<h4> Grade Wise Enrollment This Year in District( Boys ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $school_students_droppedout_sum['ncdo_katchi_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_droppedout_sum['ncdo_1_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_droppedout_sum['ncdo_2_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_droppedout_sum['ncdo_3_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_droppedout_sum['ncdo_4_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_droppedout_sum['ncdo_5_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_droppedout_sum['ncdo_6_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_droppedout_sum['ncdo_7_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_droppedout_sum['ncdo_8_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_droppedout_sum['ncdo_8_boys_sum']?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year ( Boys ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncdo_katchi_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncdo_katchi_boys'])/($school_students_droppedout_sum['ncdo_katchi_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncdo_1_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncdo_1_boys'])/($school_students_droppedout_sum['ncdo_1_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncdo_2_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncdo_2_boys'])/($school_students_droppedout_sum['ncdo_2_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncdo_3_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncdo_3_boys'])/($school_students_droppedout_sum['ncdo_3_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncdo_4_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncdo_4_boys'])/($school_students_droppedout_sum['ncdo_4_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncdo_5_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncdo_5_boys'])/($school_students_droppedout_sum['ncdo_5_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncdo_6_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncdo_6_boys'])/($school_students_droppedout_sum['ncdo_6_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncdo_7_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncdo_7_boys'])/($school_students_droppedout_sum['ncdo_7_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncdo_8_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncdo_8_boys'])/($school_students_droppedout_sum['ncdo_8_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncdo_8_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncdo_8_boys'])/($school_students_droppedout_sum['ncdo_8_boys_sum']))*100,2)).'% of District )'?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year in District( Girls ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $school_students_droppedout_sum['ncdo_katchi_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_droppedout_sum['ncdo_1_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_droppedout_sum['ncdo_2_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_droppedout_sum['ncdo_3_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_droppedout_sum['ncdo_4_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_droppedout_sum['ncdo_5_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_droppedout_sum['ncdo_6_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_droppedout_sum['ncdo_7_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_droppedout_sum['ncdo_8_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_droppedout_sum['ncdo_7_girls_sum']?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year ( Girls ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncdo_katchi_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncdo_katchi_girls'])/($school_students_droppedout_sum['ncdo_katchi_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncdo_1_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncdo_1_girls'])/($school_students_droppedout_sum['ncdo_1_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncdo_2_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncdo_2_girls'])/($school_students_droppedout_sum['ncdo_2_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncdo_3_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncdo_3_girls'])/($school_students_droppedout_sum['ncdo_3_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncdo_4_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncdo_4_girls'])/($school_students_droppedout_sum['ncdo_4_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncdo_5_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncdo_5_girls'])/($school_students_droppedout_sum['ncdo_5_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncdo_6_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncdo_6_girls'])/($school_students_droppedout_sum['ncdo_6_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncdo_7_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncdo_7_girls'])/($school_students_droppedout_sum['ncdo_7_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncdo_8_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncdo_8_girls'])/($school_students_droppedout_sum['ncdo_8_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncdo_8_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncdo_8_girls'])/($school_students_droppedout_sum['ncdo_8_girls_sum']))*100,2)).'% of District )'?>
	</td>
	</tr>
	</table>
<?php } ?>


<?php if(isset($school_students_attendance_today)) { ?>
	<h4> Grade Wise Enrollment This Year in District( Boys ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $school_students_attendance_today_sum['gwat_katchi_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_attendance_today_sum['gwat_1_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_attendance_today_sum['gwat_2_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_attendance_today_sum['gwat_3_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_attendance_today_sum['gwat_4_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_attendance_today_sum['gwat_5_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_attendance_today_sum['gwat_6_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_attendance_today_sum['gwat_7_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_attendance_today_sum['gwat_8_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_attendance_today_sum['gwat_8_boys_sum']?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year ( Boys ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwat_katchi_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwat_katchi_boys'])/($school_students_attendance_today_sum['gwat_katchi_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwat_1_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwat_1_boys'])/($school_students_attendance_today_sum['gwat_1_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwat_2_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwat_2_boys'])/($school_students_attendance_today_sum['gwat_2_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwat_3_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwat_3_boys'])/($school_students_attendance_today_sum['gwat_3_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwat_4_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwat_4_boys'])/($school_students_attendance_today_sum['gwat_4_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwat_5_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwat_5_boys'])/($school_students_attendance_today_sum['gwat_5_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwat_6_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwat_6_boys'])/($school_students_attendance_today_sum['gwat_6_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwat_7_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwat_7_boys'])/($school_students_attendance_today_sum['gwat_7_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwat_8_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwat_8_boys'])/($school_students_attendance_today_sum['gwat_8_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwat_8_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwat_8_boys'])/($school_students_attendance_today_sum['gwat_8_boys_sum']))*100,2)).'% of District )'?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year in District( Girls ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $school_students_attendance_today_sum['gwat_katchi_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_attendance_today_sum['gwat_1_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_attendance_today_sum['gwat_2_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_attendance_today_sum['gwat_3_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_attendance_today_sum['gwat_4_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_attendance_today_sum['gwat_5_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_attendance_today_sum['gwat_6_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_attendance_today_sum['gwat_7_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_attendance_today_sum['gwat_8_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_attendance_today_sum['gwat_8_girls_sum']?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year ( Girls ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwat_katchi_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwat_katchi_boys'])/($school_students_attendance_today_sum['gwat_katchi_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwat_1_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwat_1_girls'])/($school_students_attendance_today_sum['gwat_1_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwat_2_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwat_2_girls'])/($school_students_attendance_today_sum['gwat_2_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwat_3_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwat_3_girls'])/($school_students_attendance_today_sum['gwat_3_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwat_4_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwat_4_girls'])/($school_students_attendance_today_sum['gwat_4_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwat_5_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwat_5_girls'])/($school_students_attendance_today_sum['gwat_5_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwat_6_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwat_6_girls'])/($school_students_attendance_today_sum['gwat_6_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwat_7_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwat_7_girls'])/($school_students_attendance_today_sum['gwat_7_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwat_8_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwat_8_girls'])/($school_students_attendance_today_sum['gwat_8_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['gwat_8_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['gwat_8_girls'])/($school_students_attendance_today_sum['gwat_8_girls_sum']))*100,2)).'% of District )'?>
	</td>
	</tr>
	</table>
<?php } ?>



<?php if(isset($school_students_absent_month)) { ?>
	<h4> Grade Wise Enrollment This Year in District( Boys ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $school_students_absent_month_sum['ncna_katchi_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_absent_month_sum['ncna_1_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_absent_month_sum['ncna_2_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_absent_month_sum['ncna_3_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_absent_month_sum['ncna_4_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_absent_month_sum['ncna_5_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_absent_month_sum['ncna_6_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_absent_month_sum['ncna_7_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_absent_month_sum['ncna_8_boys_sum']?>
	</td>
	<td>
	<?php echo $school_students_absent_month_sum['ncna_8_boys_sum']?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year ( Boys ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncna_katchi_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncna_katchi_boys'])/($school_students_absent_month_sum['ncna_katchi_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncna_1_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncna_1_boys'])/($school_students_absent_month_sum['ncna_1_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncna_2_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncna_2_boys'])/($school_students_absent_month_sum['ncna_2_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncna_3_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncna_3_boys'])/($school_students_absent_month_sum['ncna_3_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncna_4_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncna_4_boys'])/($school_students_absent_month_sum['ncna_4_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncna_5_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncna_5_boys'])/($school_students_absent_month_sum['ncna_5_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncna_6_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncna_6_boys'])/($school_students_absent_month_sum['ncna_6_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncna_7_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncna_7_boys'])/($school_students_absent_month_sum['ncna_7_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncna_8_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncna_8_boys'])/($school_students_absent_month_sum['ncna_8_boys_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncna_8_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncna_8_boys'])/($school_students_absent_month_sum['ncna_8_boys_sum']))*100,2)).'% of District )'?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year in District( Girls ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $school_students_absent_month_sum['ncna_katchi_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_absent_month_sum['ncna_1_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_absent_month_sum['ncna_2_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_absent_month_sum['ncna_3_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_absent_month_sum['ncna_4_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_absent_month_sum['ncna_5_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_absent_month_sum['ncna_6_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_absent_month_sum['ncna_7_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_absent_month_sum['ncna_8_girls_sum']?>
	</td>
	<td>
	<?php echo $school_students_absent_month_sum['ncna_8_girls_sum']?>
	</td>
	</tr>
	</table>
	<h4> Grade Wise Enrollment This Year ( Girls ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncna_katchi_boys'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncna_katchi_girls'])/($school_students_absent_month_sum['ncna_katchi_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncna_1_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncna_1_girls'])/($school_students_absent_month_sum['ncna_1_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncna_2_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncna_2_girls'])/($school_students_absent_month_sum['ncna_2_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncna_3_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncna_3_girls'])/($school_students_absent_month_sum['ncna_3_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncna_4_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncna_4_girls'])/($school_students_absent_month_sum['ncna_4_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncna_5_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncna_5_girls'])/($school_students_absent_month_sum['ncna_5_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncna_6_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncna_6_girls'])/($school_students_absent_month_sum['ncna_6_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncna_7_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncna_7_girls'])/($school_students_absent_month_sum['ncna_7_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncna_8_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncna_8_girls'])/($school_students_absent_month_sum['ncna_8_girls_sum']))*100,2)).'% of District )'?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['ncna_8_girls'].'<br />('.(round((($enrollmentAttendance['EnrollmentAttendance']['ncna_8_girls'])/($school_students_absent_month_sum['ncna_8_girls_sum']))*100,2)).'% of District )'?>
	</td>
	</tr>
	</table>
<?php } ?>



<?php if(isset($school_average_attendance)) { ?>
	<h4> School Average Attendance in District ( Boys ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $school_average_attendance_sum['aalm_katchi_boys_sum']?>
	</td>
	<td>
	<?php echo $school_average_attendance_sum['aalm_1_boys_sum']?>
	</td>
	<td>
	<?php echo $school_average_attendance_sum['aalm_2_boys_sum']?>
	</td>
	<td>
	<?php echo $school_average_attendance_sum['aalm_3_boys_sum']?>
	</td>
	<td>
	<?php echo $school_average_attendance_sum['aalm_4_boys_sum']?>
	</td>
	<td>
	<?php echo $school_average_attendance_sum['aalm_5_boys_sum']?>
	</td>
	<td>
	<?php echo $school_average_attendance_sum['aalm_6_boys_sum']?>
	</td>
	<td>
	<?php echo $school_average_attendance_sum['aalm_7_boys_sum']?>
	</td>
	<td>
	<?php echo $school_average_attendance_sum['aalm_8_boys_sum']?>
	</td>
	<td>
	<?php echo $school_average_attendance_sum['aalm_1_boys_sum']?>
	</td>
	</tr>
	</table>
	<h4> School Average Attendance ( Boys ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['aalm_katchi_boys']?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['aalm_1_boys']?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['aalm_2_boys']?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['aalm_3_boys']?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['aalm_4_boys']?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['aalm_5_boys']?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['aalm_6_boys']?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['aalm_7_boys']?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['aalm_8_boys']?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['aalm_1_boys']?>
	</td>
	</tr>
	</table>
	<h4> School Average Attendance in District ( Girls ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $school_average_attendance_sum['aalm_katchi_girls_sum']?>
	</td>
	<td>
	<?php echo $school_average_attendance_sum['aalm_1_girls_sum']?>
	</td>
	<td>
	<?php echo $school_average_attendance_sum['aalm_2_girls_sum']?>
	</td>
	<td>
	<?php echo $school_average_attendance_sum['aalm_3_girls_sum']?>
	</td>
	<td>
	<?php echo $school_average_attendance_sum['aalm_4_girls_sum']?>
	</td>
	<td>
	<?php echo $school_average_attendance_sum['aalm_5_girls_sum']?>
	</td>
	<td>
	<?php echo $school_average_attendance_sum['aalm_6_girls_sum']?>
	</td>
	<td>
	<?php echo $school_average_attendance_sum['aalm_7_girls_sum']?>
	</td>
	<td>
	<?php echo $school_average_attendance_sum['aalm_8_girls_sum']?>
	</td>
	<td>
	<?php echo $school_average_attendance_sum['aalm_7_girls_sum']?>
	</td>
	</tr>
	</table>
	<h4> School Average Attendance ( Girls ) </h4>
	<table>
	<tr><th>Katchi </th><th>Class I</th><th>Class II</th><th>Class III</th><th>Class IV</th><th>Class V</th><th>Class VI</th><th>Class VII</th><th>Class VIII</th><th>Total</th></tr>
	<tr>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['aalm_katchi_girls']?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['aalm_1_girls']?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['aalm_2_girls']?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['aalm_3_girls']?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['aalm_4_girls']?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['aalm_5_girls']?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['aalm_6_girls']?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['aalm_7_girls']?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['aalm_8_girls']?>
	</td>
	<td>
	<?php echo $enrollmentAttendance['EnrollmentAttendance']['aalm_7_girls']?>
	</td>
	</tr>
	</table>
<?php } ?>



<?php if(isset($school_numberof_teachers)) { ?>
	<h4> Teachers In District</h4>
	<table>
	<tr><td>Total Number of Sanctioned Teachers</td><td><?php echo $teachers_in_cluster_sum['teachers_sanctioned_sum']?></td></tr>
	<tr><td>Total Number of Teachers Working</td><td><?php echo $teachers_in_cluster_sum['teachers_working_sum']?></td></tr>
	<tr><td>Total Number of Teachers Present</td><td><?php echo $teachers_in_cluster_sum['teachers_present_sum']?></td></tr>
	<tr><td>Total Number of Teachers on Leave</td><td><?php echo $teachers_in_cluster_sum['teachers_onleave_sum']?></td></tr>
	<tr><td>Total Number of Teachers on Detailment</td><td><?php echo $teachers_in_cluster_sum['teachers_onderailment_sum']?></td></tr>
	<tr><td>Total Number of Teachers on Contract</td><td><?php echo $teachers_in_cluster_sum['teachers_oncontract_sum']?></td></tr>
	<tr><td>Total Number of Teachers World Bank</td><td><?php echo $teachers_in_cluster_sum['teachers_wb_sum']?></td></tr>
	<tr><td>Total Number of Teachers NCHD</td><td><?php echo $teachers_in_cluster_sum['teachers_nchd_sum']?></td></tr>
	<tr><td>Total Number of Teachers UNICEF</td><td><?php echo $teachers_in_cluster_sum['teachers_unicef_sum']?></td></tr>
	<tr><td>Total Number of Teachers SMC</td><td><?php echo $teachers_in_cluster_sum['teachers_smc_sum']?></td></tr>
	<tr><td>Total Number of Teachers Any Other</td><td><?php echo $teachers_in_cluster_sum['teachers_anyother_sum']?></td></tr>
	<tr><td>Total Number of Teachers Other</td><td><?php echo $teachers_in_cluster_sum['teachers_other_sum']?></td></tr>
	<?php $cluster_teachers_sum = ($teachers_in_cluster_sum['teachers_onderailment_sum']+$teachers_in_cluster_sum['teachers_oncontract_sum']+$teachers_in_cluster_sum['teachers_wb_sum']+$teachers_in_cluster_sum['teachers_nchd_sum']+$teachers_in_cluster_sum['teachers_unicef_sum']+$teachers_in_cluster_sum['teachers_smc_sum']+$teachers_in_cluster_sum['teachers_anyother_sum']+$teachers_in_cluster_sum['teachers_other_sum']); ?>
	<tr><td><strong>Total Number of Teachers in the District</strong></td><td><?php echo $cluster_teachers_sum?></td></tr>
	</table>
	<h4>Teachers In School</h4>
	<table>
	<tr><td width=40%></td><td width="30%"></td><td width="30%"><strong>% in District</strong></td></tr>
	<tr><td width="40%">Total Number of Sanctioned Teachers</td><td width="30%"><?php echo $enrollmentAttendance['EnrollmentAttendance']['teachers_sanctioned']?></td><td width="30%"><?php echo round(((($enrollmentAttendance['EnrollmentAttendance']['teachers_sanctioned'])/($teachers_in_cluster_sum['teachers_sanctioned_sum']))*100),2).'%'?></td></tr>
	<tr><td>Total Number of Teachers Working</td><td><?php echo $enrollmentAttendance['EnrollmentAttendance']['teachers_working']?></td><td><?php echo round(((($enrollmentAttendance['EnrollmentAttendance']['teachers_working'])/($teachers_in_cluster_sum['teachers_working_sum']))*100),2).'%'?></td></tr>
	<tr><td>Total Number of Teachers Present</td><td><?php echo $enrollmentAttendance['EnrollmentAttendance']['teachers_present']?></td><td><?php echo round(((($enrollmentAttendance['EnrollmentAttendance']['teachers_present'])/($teachers_in_cluster_sum['teachers_present_sum']))*100),2).'%'?></td></tr>
	<tr><td>Total Number of Teachers on Leave</td><td><?php echo $enrollmentAttendance['EnrollmentAttendance']['teachers_onleave']?></td><td><?php echo round(((($enrollmentAttendance['EnrollmentAttendance']['teachers_onleave'])/($teachers_in_cluster_sum['teachers_onleave_sum']))*100),2).'%'?></td></tr>
	<tr><td>Total Number of Teachers on Detailment</td><td><?php echo $enrollmentAttendance['EnrollmentAttendance']['teachers_onderailment']?></td><td><?php echo round(((($enrollmentAttendance['EnrollmentAttendance']['teachers_onderailment'])/($teachers_in_cluster_sum['teachers_onderailment_sum']))*100),2).'%'?></td></tr>
	<tr><td>Total Number of Teachers on Contract</td><td><?php echo $enrollmentAttendance['EnrollmentAttendance']['teachers_oncontract']?></td><td><?php echo round(((($enrollmentAttendance['EnrollmentAttendance']['teachers_oncontract'])/($teachers_in_cluster_sum['teachers_oncontract_sum']))*100),2).'%'?></td></tr>
	<tr><td>Total Number of Teachers World Bank</td><td><?php echo $enrollmentAttendance['EnrollmentAttendance']['teachers_wb']?></td><td><?php echo round(((($enrollmentAttendance['EnrollmentAttendance']['teachers_wb'])/($teachers_in_cluster_sum['teachers_wb_sum']))*100),2).'%'?></td></tr>
	<tr><td>Total Number of Teachers NCHD</td><td><?php echo $enrollmentAttendance['EnrollmentAttendance']['teachers_nchd']?></td><td><?php echo round(((($enrollmentAttendance['EnrollmentAttendance']['teachers_nchd'])/($teachers_in_cluster_sum['teachers_nchd_sum']))*100),2).'%'?></td></tr>
	<tr><td>Total Number of Teachers UNICEF</td><td><?php echo $enrollmentAttendance['EnrollmentAttendance']['teachers_unicef']?></td><td><?php echo round(((($enrollmentAttendance['EnrollmentAttendance']['teachers_unicef'])/($teachers_in_cluster_sum['teachers_unicef_sum']))*100),2).'%'?></td></tr>
	<tr><td>Total Number of Teachers SMC</td><td><?php echo $enrollmentAttendance['EnrollmentAttendance']['teachers_smc']?></td><td><?php echo round(((($enrollmentAttendance['EnrollmentAttendance']['teachers_smc'])/($teachers_in_cluster_sum['teachers_smc_sum']))*100),2).'%'?></td></tr>
	<tr><td>Total Number of Teachers Any Other</td><td><?php echo $enrollmentAttendance['EnrollmentAttendance']['teachers_anyother']?></td><td><?php echo round(((($enrollmentAttendance['EnrollmentAttendance']['teachers_anyother'])/($teachers_in_cluster_sum['teachers_anyother_sum']))*100),2).'%'?></td></tr>
	<tr><td>Total Number of Teachers Other</td><td><?php echo $enrollmentAttendance['EnrollmentAttendance']['teachers_other']?></td><td><?php echo round(((($enrollmentAttendance['EnrollmentAttendance']['teachers_other'])/($teachers_in_cluster_sum['teachers_other_sum']))*100),2).'%'?></td></tr>
	<?php $school_teachers_sum = ($enrollmentAttendance['EnrollmentAttendance']['teachers_onderailment']+$enrollmentAttendance['EnrollmentAttendance']['teachers_oncontract']+$enrollmentAttendance['EnrollmentAttendance']['teachers_wb']+$enrollmentAttendance['EnrollmentAttendance']['teachers_nchd']+$enrollmentAttendance['EnrollmentAttendance']['teachers_unicef']+$enrollmentAttendance['EnrollmentAttendance']['teachers_smc']+$enrollmentAttendance['EnrollmentAttendance']['teachers_anyother']+$enrollmentAttendance['EnrollmentAttendance']['teachers_other'])?>
	<tr><td><strong>Total Number of Teachers in School</strong></td><td><?php echo $school_teachers_sum?></td><td><?php echo round(((($school_teachers_sum)/($cluster_teachers_sum))*100),2).'%'?></td></tr>
	</table>
<?php } ?>

<?php if(isset($school_teachers_basic_info)) { ?>
	<h3> Staff Information</h3>
	<table>
	<tr><td width=40%>Name of The Staff</td><td width=30%>CNIC Number</td><td width=30%>Personal Number by the AG Office</td></tr>
	<?php foreach($staffs as $staff) { ?>
	<tr><td><?php echo $staff['Staff']['staff_name']?></td><td><?php echo $staff['Staff']['staff_cnic']?></td><td><?php echo $staff['Staff']['staff_pnumber']?></td></tr>
	<?php } ?>
	</table>
<?php } ?>

<?php if(isset($school_teachers_months_attendance)) { ?>
	<h3>Staff Attendances for Last Three Months</h3>
	<table>
	<tr><td width=40%>Name of Teacher</td><td rowspan=2 width="20%"><p style="text-align:center;">M1</p><br /><div width=50% style="float:left;">WD</div><div width=50% style="float:right;">PT</div></td><td rowspan=2 width="20%"><p style="text-align:center;">M2</p><br /><div width=50% style="float:left;">WD</div><div width=50% style="float:right;">PT</div></td><td rowspan=2 width="20%"><p style="text-align:center;">M3</p><br /><div width=50% style="float:left;">WD</div><div width=50% style="float:right;">PT</div></td></tr>
	<tr></tr>
	<?php foreach($staffAttendances as $staffAttendance) { ?>
	<tr><td><?php echo $staffAttendance['StaffAttendance']['name_teacher_att']?></td><td><?php echo '<div width=50% style="float:left;">'.$staffAttendance['StaffAttendance']['m1_teacher_wd'].'</div><div width=50% style="float:right;">'.$staffAttendance['StaffAttendance']['m1_teacher_pt'].'</div>'?></td><td><?php echo '<div width=50% style="float:left;">'.$staffAttendance['StaffAttendance']['m2_teacher_wd'].'</div><div width=50% style="float:right;">'.$staffAttendance['StaffAttendance']['m2_teacher_pt'].'</div>'?></td><td><?php echo '<div width=50% style="float:left;">'.$staffAttendance['StaffAttendance']['m3_teacher_wd'].'</div><div width=50% style="float:right;">'.$staffAttendance['StaffAttendance']['m3_teacher_pt'].'</div>'?></td></tr>
	<?php } ?>
	</table>
<?php } ?>

<?php } ?>

<?php if(isset($school_toilets_facility) || isset($school_water_facility) || isset($school_electricity_facility) || isset($school_safety_facility) || isset($school_classroom_facility) || isset($school_outdoor_facility) || isset($school_furniture_facility) ) { ?>
<br />
<div class="main-heading">5. School Facilities</div>

<?php if(isset($school_toilets_facility)) { ?>
	<h4> Toilets In District</h4>
	<table>
	<tr><td width=50%>Toilets Available To Students in No. of Schools:</td><td><?php echo $toilets_available_count?></td></tr>
	<tr><td>Total Number of Toilet seats / WCs Available in District</td><td><?php echo $number_toilets_available_sum['sum_toilets_count']?></td></tr>
	<tr><td>The Toilet Clean with No Smell in District in No. of Schools:</td><td><?php echo $toilet_cleanliness_count?></td></tr>
	<tr><td>A door for the Toilet that Closes in No. of Schools:</td><td><?php echo $toilet_closing_door_count?></td></tr>
	<tr><td>Water Available in toilets for Flushing and Hand Washing in No. of Schools:</td><td><?php echo $water_available_in_toilet_count?></td></tr>
	<tr><td>Adequate Drainage(Disposal / Septic Tank) in No. of Schools:</td><td><?php echo $toilet_drainage_count?></td></tr>
	</table>
	
	
	<h4> Toilets</h4>
	<table>
	<tr><td width=50%>Toilets Available To Students:</td><td><?php if($schoolFacility['SchoolFacility']['toilets_available'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Total Number of Toilet seats / WCs Available</td><td><?php echo $schoolFacility['SchoolFacility']['no_of_toilets']?></td></tr>
	<tr><td>The Toilet Clean with No Smell:</td><td><?php if($schoolFacility['SchoolFacility']['toilet_cleanliness'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>A door for the Toilet that Closes:</td><td><?php if($schoolFacility['SchoolFacility']['toilet_closing_door'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Water Available in toilets for Flushing and Hand Washing:</td><td><?php if($schoolFacility['SchoolFacility']['water_available_in_toilet'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Adequate Drainage(Disposal / Septic Tank):</td><td><?php if($schoolFacility['SchoolFacility']['toilet_drainage'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	</table>
<?php } ?>

<?php if(isset($school_water_facility)) { ?>
	<h4> Water Provision in District</h4>
	<table>
	<tr><td width=50%>Water Available Inside School:</td><td><?php echo $water_available_in_toilet_count; ?></td></tr>
	<tr><td>Water is Clean and Drinkable in no. of Schools:</td><td><?php echo $toilet_drainage_count;?></td></tr>
	<tr><td>Drinking Water Accessible to Children in No. of Schools:</td><td><?php echo $water_available_in_school_count; ?></td></tr>
	<tr><td>Enough Water for All purposes in No. of Schools:</td><td><?php echo $water_drinkable_count; ?></td></tr>
	</table>
	
	<h4> Water Provision</h4>
	<table>
	<tr><td width=50%>Water Available Inside School:</td><td><?php if($schoolFacility['SchoolFacility']['water_available_in_school'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Source of Water</td><td><?php if($schoolFacility['SchoolFacility']['water_source_type'] == 1) { echo "Hand Pump"; } elseif($schoolFacility['SchoolFacility']['water_source_type'] == 2){ echo "Motor Operated"; }elseif($schoolFacility['SchoolFacility']['water_source_type'] == 3){ echo "Hand Carry"; }  ?></td></tr>
	<tr><td>Water is Clean and Drinkable:</td><td><?php if($schoolFacility['SchoolFacility']['water_drinkable'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Drinking Water Accessible to Children:</td><td><?php if($schoolFacility['SchoolFacility']['water_accessible_to_children'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Enough Water for All purposes:</td><td><?php if($schoolFacility['SchoolFacility']['water_for_all_purpose'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	</table>
<?php } ?>


<?php if(isset($school_electricity_facility)) { ?>
	<h4> Electricity and Fixtures in Districts</h4>
	<table>
	<tr><td width=50%>The School Has Electricity in no of schools:</td><td><?php echo $school_has_electricity_count?></td></tr>
	<tr><td>Electricity Wiring Installed in no of schools:</td><td><?php echo $electricity_wiring_installed_count?></td></tr>
	<tr><td>Electricity is On Right Now in no of schools:</td><td><?php echo $electricity_on_right_now_count?></td></tr>
	<tr><td>Formal Electricity Meter Installed in no of schools:</td><td><?php echo $electricity_meter_installed_count?></td></tr>
	</table>
	
	<h4> Electricity and Fixtures</h4>
	<table>
	<tr><td width=50%>The School Has Electricity:</td><td><?php if($schoolFacility['SchoolFacility']['school_has_electricity'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Electricity Wiring Installed:</td><td><?php if($schoolFacility['SchoolFacility']['electricity_wiring_installed'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Electricity is On Right Now:</td><td><?php if($schoolFacility['SchoolFacility']['electricity_on_right_now'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Formal Electricity Meter Installed:</td><td><?php if($schoolFacility['SchoolFacility']['electricity_meter_installed'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>During an average school day, Number of Hours Electricity Available</td><td><?php echo $schoolFacility['SchoolFacility']['electricity_available_for']?></td></tr>
	</table>
<?php } ?>


<?php if(isset($school_safety_facility)) { ?>
	<h4> Services, Maintainance and Safety in District</h4>
	<table>
	<tr><td width=50%>Any Broken Window or Window Panes in Number of Schools:</td><td><?php echo $broken_window_panes_count;  ?></td></tr>
	<tr><td>Any Cracks in the Wall in Number of Schools:</td><td><?php echo $cracks_in_wall_count; ?></td></tr>
	<tr><td>Garbage Lying Around in Number of Schools:</td><td><?php echo $garbage_lying_around_count; ?></td></tr>
	<tr><td>Any Signs of leakage in the ceiling in Number of Schools:</td><td><?php echo $leakage_in_ceiling_count; ?></td></tr>
	<tr><td>Any Cracks in the Ceiling in Number of Schools:</td><td><?php echo $cracks_in_ceiling_count; ?></td></tr>
	</table>
	
	
	<h4> Services, Maintainance and Safety</h4>
	<table>
	<tr><td width=50%>Any Broken Window or Window Panes:</td><td><?php if($schoolFacility['SchoolFacility']['broken_window_panes'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Any Cracks in the Wall:</td><td><?php if($schoolFacility['SchoolFacility']['cracks_in_wall'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Garbage Lying Around:</td><td><?php if($schoolFacility['SchoolFacility']['garbage_lying_around'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Any Signs of leakage in the ceiling:</td><td><?php if($schoolFacility['SchoolFacility']['leakage_in_ceiling'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Any Cracks in the Ceiling:</td><td><?php if($schoolFacility['SchoolFacility']['cracks_in_ceiling'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	</table>
<?php } ?>


<?php if(isset($school_classroom_facility)) { ?>
	<h4> Classroom Situation in Districts</h4>
	<table>
	<tr><td width=50%>Classroom Adequately Ventilated in No. of Schools:</td><td><?php echo $classroom_ventilated_count; ?></td></tr>
	<tr><td>Enough Light (Natural / Artificial) to read easily in No. of Schools</td><td><?php echo $light_availability_count; ?></td></tr>
	<tr><td>Temperature of the room reasonably bearable in No. of Schools:</td><td><?php echo $temperature_reasonably_bearable_count; ?></td></tr>
	<tr><td>Children seated in Comfortable Manner in No. of Schools:</td><td><?php echo $children_seated_comfortably_count; ?></td></tr>
	<tr><td>Time Table Available in No. of Schools:</td><td><?php echo $time_table_available_count; ?></td></tr>
	<tr><td>Any Information related to students achievement available in No. of Schools:</td><td><?php echo $student_achievement_info_count; ?></td></tr>
	</table>
	
	<h4> Classroom Situation</h4>
	<table>
	<tr><td width=50%>Classroom Adequately Ventilated:</td><td><?php if($schoolFacility['SchoolFacility']['classroom_ventilated'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Enough Light (Natural / Artificial) to read easily</td><td><?php if($schoolFacility['SchoolFacility']['light_availability'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Temperature of the room reasonably bearable:</td><td><?php if($schoolFacility['SchoolFacility']['temperature_reasonably_bearable'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Children seated in Comfortable Manner:</td><td><?php if($schoolFacility['SchoolFacility']['children_seated_comfortably'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Time Table Available:</td><td><?php if($schoolFacility['SchoolFacility']['time_table_available'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Any Information related to students achievement available:</td><td><?php if($schoolFacility['SchoolFacility']['student_achievement_info'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	</table>
<?php } ?>


<?php if(isset($school_outdoor_facility)) { ?>
	<h4> Outdoor Space in District</h4>
	<table>
	<tr><td width=50%>Boundary Wall Around the School in no. of Schools:</td><td><?php echo $boundary_wall_count; ?></td></tr>
	<tr><td>Gate Installed and Functional in no. of Schools:</td><td><?php echo $gate_installed_count; ?></td></tr>
	<tr><td>Sufficient space for children to play in no. of Schools:</td><td><?php echo $children_playing_space_count; ?></td></tr>
	<tr><td>Any Plantation in the School in no. of Schools:</td><td><?php echo $plantation_in_school_count; ?></td></tr>
	<tr><td>Any Hazards (e.g ditches, broken glass, etc.) in no. of Schools:</td><td><?php echo $hazards_around_count; ?></td></tr>
	<tr><td>Regular Assembly in no. of Schools:</td><td><?php echo $regular_assembly_count; ?></td></tr>
	<tr><td>Any Co Curricular activity organized during last quarter in no. of Schools:</td><td><?php echo $extracurricular_activity_lastquarter_count; ?></td></tr>
	</table>
	
	
	<h4> Outdoor Space</h4>
	<table>
	<tr><td width=50%>Boundary Wall Around the School:</td><td><?php if($schoolFacility['SchoolFacility']['boundary_wall'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Gate Installed and Functional:</td><td><?php if($schoolFacility['SchoolFacility']['gate_installed'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Sufficient space for children to play:</td><td><?php if($schoolFacility['SchoolFacility']['children_playing_space'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Any Plantation in the School:</td><td><?php if($schoolFacility['SchoolFacility']['plantation_in_school'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Any Hazards (e.g ditches, broken glass, etc.):</td><td><?php if($schoolFacility['SchoolFacility']['hazards_around'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Regular Assembly:</td><td><?php if($schoolFacility['SchoolFacility']['regular_assembly'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Any Co Curricular activity organized during last quarter:</td><td><?php if($schoolFacility['SchoolFacility']['extracurricular_activity_lastquarter'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<?php if(($schoolFacility['SchoolFacility']['extracurricular_activity_lastquarter']) == 1) { ?>
	<?php if(!empty($schoolFacility['SchoolFacility']['no_of_toilets'])) { ?>
	<?php } ?>
	<?php if(!empty($schoolFacility['SchoolFacility']['extra_curricular_activity1'])) { ?>
	<tr><td>Activity Number 1</td><td><?php echo $schoolFacility['SchoolFacility']['extra_curricular_activity1']?></td></tr>
	<?php } ?>
	<?php if(!empty($schoolFacility['SchoolFacility']['extra_curricular_activity2'])) { ?>
	<tr><td>Activity Number 2</td><td><?php echo $schoolFacility['SchoolFacility']['extra_curricular_activity2']?></td></tr>
	<?php } ?>
	<?php if(!empty($schoolFacility['SchoolFacility']['extra_curricular_activity3'])) { ?>
	<tr><td>Activity Number 3</td><td><?php echo $schoolFacility['SchoolFacility']['extra_curricular_activity3']?></td></tr>
	<?php } ?>
	<?php if(!empty($schoolFacility['SchoolFacility']['extra_curricular_activity4'])) { ?>
	<tr><td>Activity Number 4</td><td><?php echo $schoolFacility['SchoolFacility']['extra_curricular_activity4']?></td></tr>
	<?php } } ?>
	
	</table>
<?php } ?>


<?php if(isset($school_furniture_facility)) { ?>
	<h4> Furniture and Fixtures in District</h4>
	<table>
	<tr><td width=50%>All Classrooms have Blackboards (well painted and functional) In No. Of Schools: </td><td><?php echo $blackboard_well_painted_count; ?></td></tr>
	<tr><td>Cabinets or any other alternate storage for school records In No. Of Schools:</td><td><?php echo $storage_for_school_records_count; ?></td></tr>
	</table>
	
	<h4> Furniture and Fixtures</h4>
	<table>
	<tr><td width=50%>Number of Desks / Chairs for Children:</td><td><?php echo $schoolFacility['SchoolFacility']['number_of_desks_for_children']?></td></tr>
	<tr><td>All Classrooms have Blackboards (well painted and functional): </td><td><?php if($schoolFacility['SchoolFacility']['blackboard_well_painted'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	<tr><td>Cabinets or any other alternate storage for school records:</td><td><?php if($schoolFacility['SchoolFacility']['storage_for_school_records'] == 1) { echo "Yes"; } else{ echo "No"; } ?></td></tr>
	</table>
<?php } ?>



<?php } ?>

<?php if(isset($school_smc_basicinfo) || isset($school_smc_funding)) { ?>
<br />
<div class="main-heading">6. School Identification</div>
<?php if(isset($school_smc_basicinfo)) { ?>
	<h3> School Management Committee Basic Informatoion for the District</h3>
	<table>
	<tr><td  width=50% style="background-color:#bbffdd;" >No. of Schools that Have Notified SMC</td><td style="background-color:#bbffdd;"><?php echo $smc_notified_schools; ?></td></tr>
	<tr><td>Number of SMC Members in District:(Male)</td><td><?php echo $smc_cluster_basicinfo[0]['smc_members_male_sum']?></td></tr>
	<tr><td>Number of SMC Members in District:(Female)</td><td><?php echo $smc_cluster_basicinfo[0]['smc_members_female_sum']?></td></tr>
	<tr><td>Number of SMC Members in District:(Total)</td><td><?php echo ($smc_cluster_basicinfo[0]['smc_members_male_sum'])+($smc_cluster_basicinfo[0]['smc_members_female_sum'])?></td></tr>
	<tr><td>Number of SMC Meetings / Visits to Schools this Year in District</td><td><?php echo ($smc_cluster_basicinfo[0]['smc_visits_this_year_sum'])?></td></tr>
	<tr><td>Total Number of SMC Meetings / Visits to Schools last Year  in District</td><td><?php echo ($smc_cluster_basicinfo[0]['smc_visits_last_year_sum'])?></td></tr>
	<tr><td>Community Contribution to School in Any Kind / Form in No of Schools</td><td><?php echo $community_contribution_in_schools; ?></td></tr>
	</table>
	
	<h3> School Management Committee Basic Informatoion</h3>
	<table>
	<tr><td width=40%></td><td width=30%></td><td width=30%>% of District(where applicable)</td></tr>
	<tr><td style="background-color:#bbffdd;" >School Has Notified SMC</td><td style="background-color:#bbffdd;"><?php if($schoolManagementCommitee['SchoolManagementCommitee']['has_notified_smc'] == 1) { echo "Yes"; }else{ echo "No"; } ?></td><td></td></tr>
	<tr><td>Notification Date </td><td><?php echo $schoolManagementCommitee['SchoolManagementCommitee']['notification_date']?></td><td></td></tr>
	<tr><td>Number of SMC Members:(Male)</td><td><?php echo $schoolManagementCommitee['SchoolManagementCommitee']['smc_members_male']?></td><td><?php echo round(((($schoolManagementCommitee['SchoolManagementCommitee']['smc_members_male'])/($smc_cluster_basicinfo[0]['smc_members_male_sum']))*100),2).'%'?></td></tr>
	<tr><td>Number of SMC Members:(Female)</td><td><?php echo $schoolManagementCommitee['SchoolManagementCommitee']['smc_members_female']?></td><td><?php echo round(((($schoolManagementCommitee['SchoolManagementCommitee']['smc_members_female'])/($smc_cluster_basicinfo[0]['smc_members_female_sum']))*100),2).'%'?></td></tr>
	<tr><td>Number of SMC Members:(Total)</td><td><?php echo ($schoolManagementCommitee['SchoolManagementCommitee']['smc_members_male'])+($schoolManagementCommitee['SchoolManagementCommitee']['smc_members_female'])?></td><td><?php echo round((((($schoolManagementCommitee['SchoolManagementCommitee']['smc_members_male'])+($schoolManagementCommitee['SchoolManagementCommitee']['smc_members_female']))/(($smc_cluster_basicinfo[0]['smc_members_male_sum'])+($smc_cluster_basicinfo[0]['smc_members_female_sum'])))*100),2).'%'?></td></tr>
	<tr><td>Number of SMC Meetings / Visits to School this Year</td><td><?php echo ($schoolManagementCommitee['SchoolManagementCommitee']['smc_visits_this_year'])?></td><td><?php echo round(((($schoolManagementCommitee['SchoolManagementCommitee']['smc_visits_this_year'])/($smc_cluster_basicinfo[0]['smc_visits_this_year_sum']))*100),2).'%'?></td></tr>
	<tr><td>Number of SMC Meetings / Visits to School last Year</td><td><?php echo ($schoolManagementCommitee['SchoolManagementCommitee']['smc_visits_last_year'])?></td><td><?php echo round(((($schoolManagementCommitee['SchoolManagementCommitee']['smc_visits_last_year'])/($smc_cluster_basicinfo[0]['smc_visits_last_year_sum']))*100),2).'%'?></td></tr>
	<tr><td>Community Contribution to School in Any Kind / Form</td><td><?php if( $schoolManagementCommitee['SchoolManagementCommitee']['community_contribution_to_school'] == 1) { echo "Yes"; }else { echo "No"; }?></td><td></td></tr>
	<?php if( $schoolManagementCommitee['SchoolManagementCommitee']['community_contribution_to_school'] == 1) { 
	$y = 1;
	for($x=0;$x<3;$x++) {
	if(!empty($schoolManagementCommitee['SchoolManagementCommitee']['community_contribution_to_school'.($x+1).''])) {
	?>
	
	<tr><td>List / Nature Of Support <?php echo $y?> </td><td><?php echo $schoolManagementCommitee['SchoolManagementCommitee']['community_contribution_to_school'.($x+1).'']?></td></tr>
	
	<?php $y++; } } } ?>
	</table>
	<table>
	<tr><td colspan=3 style="background-color:#bbffdd;"><h4>SMC Chairperson</h4> </td><td></td></tr>
	<tr><th>Name</th><th>CNIC No.</th><th>Contact Phone No.</th></tr>
	<tr><td><?php echo $schoolManagementCommitee['SchoolManagementCommitee']['smc_chairperson_name']?></td><td><?php echo $schoolManagementCommitee['SchoolManagementCommitee']['smc_chairperson_cnic']?></td><td><?php echo $schoolManagementCommitee['SchoolManagementCommitee']['smc_chairperson_phone']?></td></tr>
	</table>
	
	<table>
	<tr><th>Name Of the Child</th><th>GR Number</th><th>Relationship with SMC CP</th></tr>
	<tr><td><?php echo $schoolManagementCommitee['SchoolManagementCommitee']['smc_relative1_children_name']?></td><td><?php echo $schoolManagementCommitee['SchoolManagementCommitee']['smc_relative1_children_name']?></td><td><?php echo $schoolManagementCommitee['SchoolManagementCommitee']['smc_relative1_children_relationship']?></td></tr>
	<tr><td><?php echo $schoolManagementCommitee['SchoolManagementCommitee']['smc_relative2_children_name']?></td><td><?php echo $schoolManagementCommitee['SchoolManagementCommitee']['smc_relative2_children_name']?></td><td><?php echo $schoolManagementCommitee['SchoolManagementCommitee']['smc_relative2_children_relationship']?></td></tr>
	</table>
	
<?php } ?>
<?php if(isset($school_smc_funding)) { ?>
	<h3> SMC Bank and Budget Information for District</h3>
	<table>
	<tr><td width=50% style="background-color:#bbffdd;">Amount of Funding Recieved During Current Year For the District:</td><td style="background-color:#bbffdd;"><?php echo $smc_cluster_funding['funding_recieved_current_year_sum']?></td></tr>
	<tr><td width=50% style="background-color:#bbffdd;">Amount of Funding Recieved During last Year For the District:</td><td style="background-color:#bbffdd;"><?php echo $smc_cluster_funding['funding_recieved_current_year_sum']?></td></tr>
	</table>
	
	<h3> SMC Bank and Budget Information</h3>
	<table>
	<tr><td colspan=2 style="background-color:#bbffdd;">SMC Bank and Account Number</td></tr>
	<tr><td>SMC Bank and Branch</td><td><?php echo $schoolManagementCommitee['SchoolManagementCommitee']['smc_bank_branch']?></td></tr>
	<tr><td>SMC Bank Account Title</td><td><?php echo $schoolManagementCommitee['SchoolManagementCommitee']['smc_account_title']?></td></tr>
	<tr><td>SMC Bank Account Number</td><td><?php echo $schoolManagementCommitee['SchoolManagementCommitee']['smc_account_number']?></td></tr>
	
	<tr><td width=50% style="background-color:#bbffdd;">Amount of Funding Recieved During Current Year :</td><td style="background-color:#bbffdd;"><?php echo $schoolManagementCommitee['SchoolManagementCommitee']['funding_recieved_current_year']?><?php echo ' ('.round(((($schoolManagementCommitee['SchoolManagementCommitee']['funding_recieved_current_year'])/($smc_cluster_funding['funding_recieved_current_year_sum']))*100),2).'% of the Cluster Budget'?></td></tr>
	
	
	<?php if(!empty( $schoolManagementCommitee['SchoolManagementCommitee']['funding_recieved_current_year'])) {
	$y = 1;
	for($x=0;$x<3;$x++) {
	if(!empty($schoolManagementCommitee['SchoolManagementCommitee']['benefits_this_budget'.($x+1).''])) {
	?>
	
	<tr><td>Benifits This Budget <?php echo $y?> </td><td><?php echo $schoolManagementCommitee['SchoolManagementCommitee']['benefits_this_budget'.($x+1).'']?></td></tr>
	
	<?php $y++; } } } ?>
	
	
	<tr><td style="background-color:#bbffdd;">Amount of Funding Recieved During Last Year :</td><td style="background-color:#bbffdd;"><?php echo $schoolManagementCommitee['SchoolManagementCommitee']['funding_recieved_last_year']?><?php echo ' ('.round(((($schoolManagementCommitee['SchoolManagementCommitee']['funding_recieved_last_year'])/($smc_cluster_funding['funding_recieved_last_year_sum']))*100),2).'% of the District Budget'?></td></tr>
	<?php if(!empty( $schoolManagementCommitee['SchoolManagementCommitee']['funding_recieved_last_year'])) {
	$y = 1;
	for($x=0;$x<3;$x++) {
	if(!empty($schoolManagementCommitee['SchoolManagementCommitee']['benefits_last_budget'.($x+1).''])) {
	?>
	
	<tr><td>Benifits Last Budget <?php echo $y?> </td><td><?php echo $schoolManagementCommitee['SchoolManagementCommitee']['benefits_last_budget'.($x+1).'']?></td></tr>
	
	<?php $y++; } } } ?>
	
	</table>
<?php } ?>

<?php } ?>