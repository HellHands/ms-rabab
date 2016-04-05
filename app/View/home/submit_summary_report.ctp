<h1 class="main-heading">School Conditions-<?php echo $district['Region']['name']?>  </h1>
<?php if(!(isset($filename))) { ?>
<div style="float:right;"><a href="<?php echo $this->webroot?>home/submit_summary_report/1/<?php echo $district['Region']['id']?>">Download Summary Report</a></div>
<?php } ?>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<tr>
<th>Union Council</th>
<th>Broken Window</th>
<th>Garbage Lying Around</th>
<th>Time Table Not Available</th>
<th>No Plantation</th>
<th>No Regular Assembly</th>
<th>No Co-Curricular Activity</th>
<th>Total Schools in Uc</th>
<th>Survey Count</th>
</tr>
<?php 
$broken_window_sum = 0;
$garbage_lying_around_sum = 0;
$time_table_available_sum = 0;
$plantation_in_school_sum = 0;
$regular_assembly_sum = 0;
$extracurricular_activity_lastquarter_sum = 0;
$school_sum = 0;
$survey_sum = 0;
?>
<?php foreach($this_taluka_ucs as $this_taluka_uc) { ?>
<tr>
<td><?php echo $this_taluka_uc['Uc']['name']?></td>
<td><?php echo $this_taluka_uc['broken_window_count']; $broken_window_sum += $this_taluka_uc['broken_window_count']; ?></td>
<td><?php echo $this_taluka_uc['garbage_lying_around_count']; $garbage_lying_around_sum += $this_taluka_uc['garbage_lying_around_count']; ?></td>
<td><?php echo $this_taluka_uc['time_table_available_count']; $time_table_available_sum += $this_taluka_uc['time_table_available_count']; ?></td>
<td><?php echo $this_taluka_uc['plantation_in_school_count']; $plantation_in_school_sum += $this_taluka_uc['plantation_in_school_count'];?></td>
<td><?php echo $this_taluka_uc['regular_assembly_count']; $regular_assembly_sum += $this_taluka_uc['regular_assembly_count']; ?></td>
<td><?php echo $this_taluka_uc['extracurricular_activity_lastquarter_count']; $extracurricular_activity_lastquarter_sum += $this_taluka_uc['extracurricular_activity_lastquarter_count']; ?></td>
<td><?php echo $this_taluka_uc['school_count']; $school_sum += $this_taluka_uc['school_count']; ?></td>
<td><?php echo $this_taluka_uc['survey_count']; $survey_sum += $this_taluka_uc['survey_count']; ?></td>
</tr>
<?php } ?>
<tr>
<td><strong>Total</strong></td>
<td><strong><?php echo $broken_window_sum?></strong></td>
<td><strong><?php echo $garbage_lying_around_sum?></strong></td>
<td><strong><?php echo $time_table_available_sum?></strong></td>
<td><strong><?php echo $plantation_in_school_sum?></strong></td>
<td><strong><?php echo $regular_assembly_sum?></strong></td>
<td><strong><?php echo $extracurricular_activity_lastquarter_sum?></strong></td>
<td><strong><?php echo $school_sum?></strong></td>
<td><strong><?php echo $survey_sum?></strong></td>
</tr>

</table>

<h1 class="main-heading">School Management Committees-<?php echo $district['Region']['name']?>  </h1>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<tr>
<th>Union Council</th>
<th>GBPS</th>
<th>GGPS</th>
<th>GBELS</th>
<th>GGELS</th>
<th>Total Schools in Uc</th>
<th>Survey Count</th>
</tr>
<?php 
$gbps_school_sum = 0;
$ggps_school_sum = 0;
$gbels_school_sum = 0;
$ggels_school_sum = 0;
$school_sum = 0;
$survey_sum = 0;
?>
<?php foreach($this_taluka_ucs as $this_taluka_uc) { ?>
<tr>
<td><?php echo $this_taluka_uc['Uc']['name']?></td>
<td><?php echo $this_taluka_uc['gbps_school_count']; $gbps_school_sum += $this_taluka_uc['gbps_school_count']; ?></td>
<td><?php echo $this_taluka_uc['ggps_school_count']; $ggps_school_sum += $this_taluka_uc['ggps_school_count']; ?></td>
<td><?php echo $this_taluka_uc['gbels_school_count']; $gbels_school_sum += $this_taluka_uc['gbels_school_count']; ?></td>
<td><?php echo $this_taluka_uc['ggels_school_count']; $ggels_school_sum += $this_taluka_uc['ggels_school_count']; ?></td>
<td><?php echo $this_taluka_uc['school_count']; $school_sum += $this_taluka_uc['school_count']; ?></td>
<td><?php echo $this_taluka_uc['survey_count']; $survey_sum += $this_taluka_uc['survey_count']; ?></td>
</tr>
<?php } ?>
<tr>
<td><strong>Total</strong></td>
<td><strong><?php echo $gbps_school_sum?></strong></td>
<td><strong><?php echo $ggps_school_sum?></strong></td>
<td><strong><?php echo $gbels_school_sum?></strong></td>
<td><strong><?php echo $ggels_school_sum?></strong></td>
<td><strong><?php echo $school_sum?></strong></td>
<td><strong><?php echo $survey_sum?></strong></td>
</tr>

</table>

<h1 class="main-heading">Number of School Staff-<?php echo $district['Region']['name']?></h1>

<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<tr>
<th>Union Council</th>
<th>Single Teacher Schools</th>
<th>Two Teacher Schools</th>
<th>More Than Two Teachers School</th>
<th>Total Schools in Uc</th>
<th>Survey Count</th>
</tr>
<?php 
$teachers_working_single_sum = 0;
$teachers_working_double_sum = 0;
$teachers_working_more_sum = 0;
$school_sum = 0;
$survey_sum = 0;
?>
<?php foreach($this_taluka_ucs as $this_taluka_uc) { ?>
<tr>
<td><?php echo $this_taluka_uc['Uc']['name']?></td>
<td><?php echo $this_taluka_uc['teachers_working_single_count']; $teachers_working_single_sum += $this_taluka_uc['teachers_working_single_count']; ?></td>
<td><?php echo $this_taluka_uc['teachers_working_double_count']; $teachers_working_double_sum += $this_taluka_uc['teachers_working_double_count']; ?></td>
<td><?php echo $this_taluka_uc['teachers_working_more_count']; $teachers_working_more_sum += $this_taluka_uc['teachers_working_more_count']; ?></td>
<td><?php echo $this_taluka_uc['school_count']; $school_sum += $this_taluka_uc['school_count']; ?></td>
<td><?php echo $this_taluka_uc['survey_count']; $survey_sum += $this_taluka_uc['survey_count']; ?></td>
</tr>
<?php } ?>
<tr>
<td><strong>Total</strong></td>
<td><strong><?php echo $teachers_working_single_sum?></strong></td>
<td><strong><?php echo $teachers_working_double_sum?></strong></td>
<td><strong><?php echo $teachers_working_more_sum?></strong></td>
<td><strong><?php echo $school_sum?></strong></td>
<td><strong><?php echo $survey_sum?></strong></td>
</tr>

</table>


<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<h1 class="main-heading">School Record Not Available/Not Updated-<?php echo $district['Region']['name']?>  </h1>

<tr>
<th>Union Council</th>
<th>TAR</th>
<th>TLR</th>
<th>SAR</th>
<th>GR</th>
<th>ER</th>
<th>VB</th>
<th>SSF</th>
<th>TDF</th>
<th>GSR</th>
<th>SR</th>
<th>Total Schools in Uc</th>
<th>Survey Count</th>
</tr>
<?php 
$tar_updated_sum = 0;
$tlr_updated_sum = 0;
$stu_att_updated_count_sum = 0;
$gr_updated_sum = 0;
$exam_result_updated_sum = 0;
$vb_updated_count_sum = 0;
$ss_form_updated_sum = 0;
$tb_distribution_updated_sum = 0;
$gs_record_updated_sum = 0;
$smc_register_updated_sum = 0;
$school_sum = 0;
$survey_sum = 0;
?>
<?php foreach($this_taluka_ucs as $this_taluka_uc) { ?>
<tr>
<td><?php echo $this_taluka_uc['Uc']['name']?></td>
<td><?php echo $this_taluka_uc['tar_updated_count']; $tar_updated_sum += $this_taluka_uc['tar_updated_count']; ?></td>
<td><?php echo $this_taluka_uc['tlr_updated_count']; $tlr_updated_sum += $this_taluka_uc['tlr_updated_count']; ?></td>
<td><?php echo $this_taluka_uc['stu_att_updated_count']; $stu_att_updated_count_sum += $this_taluka_uc['stu_att_updated_count']; ?></td>
<td><?php echo $this_taluka_uc['gr_updated_count']; $gr_updated_sum += $this_taluka_uc['gr_updated_count']; ?></td>
<td><?php echo $this_taluka_uc['exam_result_updated_count']; $exam_result_updated_sum += $this_taluka_uc['exam_result_updated_count']; ?></td>
<td><?php echo $this_taluka_uc['vb_updated_count']; $vb_updated_count_sum += $this_taluka_uc['vb_updated_count']; ?></td>
<td><?php echo $this_taluka_uc['ss_form_updated_count']; $ss_form_updated_sum += $this_taluka_uc['ss_form_updated_count']; ?></td>
<td><?php echo $this_taluka_uc['tb_distribution_updated_count']; $tb_distribution_updated_sum += $this_taluka_uc['tb_distribution_updated_count']; ?></td>
<td><?php echo $this_taluka_uc['gs_record_updated_count']; $gs_record_updated_sum += $this_taluka_uc['gs_record_updated_count']; ?></td>
<td><?php echo $this_taluka_uc['smc_register_updated_count']; $smc_register_updated_sum += $this_taluka_uc['smc_register_updated_count']; ?></td>
<td><?php echo $this_taluka_uc['school_count']; $school_sum += $this_taluka_uc['school_count']; ?></td>
<td><?php echo $this_taluka_uc['survey_count']; $survey_sum += $this_taluka_uc['survey_count']; ?></td>
</tr>
<?php } ?>
<tr>
<td><strong>Total</strong></td>
<td><strong><?php echo $tar_updated_sum?></strong></td>
<td><strong><?php echo $tlr_updated_sum?></strong></td>
<td><strong><?php echo $stu_att_updated_count_sum?></strong></td>
<td><strong><?php echo $gr_updated_sum?></strong></td>
<td><strong><?php echo $exam_result_updated_sum?></strong></td>
<td><strong><?php echo $vb_updated_count_sum?></strong></td>
<td><strong><?php echo $ss_form_updated_sum?></strong></td>
<td><strong><?php echo $tb_distribution_updated_sum?></strong></td>
<td><strong><?php echo $gs_record_updated_sum?></strong></td>
<td><strong><?php echo $smc_register_updated_sum?></strong></td>
<td><strong><?php echo $school_sum?></strong></td>
<td><strong><?php echo $survey_sum?></strong></td>
</tr>

</table>



<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<h1 class="main-heading">Basic Information of Schools-<?php echo $district['Region']['name']?>  </h1>

<tr>
<th>Union Council</th>
<th>Annual Budget Not Received</th>
<th>No Bank Account</th>
<th>Unsafe Rooms</th>
<th>Unused Rooms</th>
<th>No Middle School</th>
<th>No Secondary School</th>
<th>Total Schools in Uc</th>
<th>Survey Count</th>
</tr>
<?php
$budget_recieved_sum = 0;
$school_account_sum = 0;
$unused_sum = 0;
$unsafe_sum = 0;
$school_in_range_sum = 0;
$high_school_in_range_sum = 0;
$school_sum = 0;
$survey_sum = 0;
?>
<?php foreach($this_taluka_ucs as $this_taluka_uc) { ?>
<tr>
<td><?php echo $this_taluka_uc['Uc']['name']?></td>
<td><?php echo $this_taluka_uc['budget_recieved_count']; $budget_recieved_sum += $this_taluka_uc['budget_recieved_count']; ?></td>
<td><?php echo $this_taluka_uc['school_account_count']; $school_account_sum += $this_taluka_uc['school_account_count']; ?></td>
<td><?php echo $this_taluka_uc['unused_count']; $unused_sum += $this_taluka_uc['unused_count']; ?></td>
<td><?php echo $this_taluka_uc['unsafe_count']; $unsafe_sum += $this_taluka_uc['unsafe_count']; ?></td>
<td><?php echo $this_taluka_uc['school_in_range_count']; $school_in_range_sum += $this_taluka_uc['school_in_range_count']; ?></td>
<td><?php echo $this_taluka_uc['high_school_in_range_count']; $high_school_in_range_sum += $this_taluka_uc['high_school_in_range_count']; ?></td>
<td><?php echo $this_taluka_uc['school_count']; $school_sum += $this_taluka_uc['school_count']; ?></td>
<td><?php echo $this_taluka_uc['survey_count']; $survey_sum += $this_taluka_uc['survey_count']; ?></td>
</tr>
<?php } ?>
<tr>
<td><strong>Total</strong></td>
<td><strong><?php echo $budget_recieved_sum?></strong></td>
<td><strong><?php echo $school_account_sum?></strong></td>
<td><strong><?php echo $unused_sum?></strong></td>
<td><strong><?php echo $unsafe_sum?></strong></td>
<td><strong><?php echo $school_in_range_sum?></strong></td>
<td><strong><?php echo $high_school_in_range_sum?></strong></td>
<td><strong><?php echo $school_sum?></strong></td>
<td><strong><?php echo $survey_sum?></strong></td>
</tr>

</table>


<h1 class="main-heading">School Facilities Not Available-<?php echo $district['Region']['name']?>  </h1>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">

<tr>
<th>Union Council</th>
<th>Student Toilets</th>
<th>Door For Tiolet</th>
<th>Water in Toilet</th>
<th>Toilet Drainage</th>
<th>Water Inside School</th>
<th>Clean Water</th>
<th>Drinking Water for Children</th>
<th>Electricity</th>
<th>Electricity Meter</th>
<th>Total Schools in Uc</th>
<th>Survey Count</th>
</tr>
<?php 
$toilets_available_sum = 0;
$toilet_closing_door_sum = 0;
$water_available_in_toilet_sum = 0;
$toilet_drainage_sum = 0;
$water_available_in_school_sum = 0;
$water_drinkable_sum = 0;
$water_accessible_to_children_sum = 0;
$school_has_electricity_sum = 0;
$electricity_meter_installed_sum = 0;
$school_sum = 0;
$survey_sum = 0;
?>
<?php foreach($this_taluka_ucs as $this_taluka_uc) { ?>
<tr>
<td><?php echo $this_taluka_uc['Uc']['name']?></td>
<td><?php echo $this_taluka_uc['toilets_available_count']; $toilets_available_sum += $this_taluka_uc['toilets_available_count']; ?></td>
<td><?php echo $this_taluka_uc['toilet_closing_door_count']; $toilet_closing_door_sum += $this_taluka_uc['toilet_closing_door_count']; ?></td>
<td><?php echo $this_taluka_uc['water_available_in_toilet_count']; $water_available_in_toilet_sum += $this_taluka_uc['water_available_in_toilet_count']; ?></td>
<td><?php echo $this_taluka_uc['toilet_drainage_count']; $toilet_drainage_sum += $this_taluka_uc['toilet_drainage_count']; ?></td>
<td><?php echo $this_taluka_uc['water_available_in_school_count']; $water_available_in_school_sum += $this_taluka_uc['water_available_in_school_count']; ?></td>
<td><?php echo $this_taluka_uc['water_drinkable_count']; $water_drinkable_sum += $this_taluka_uc['water_drinkable_count']; ?></td>
<td><?php echo $this_taluka_uc['water_accessible_to_children_count']; $water_accessible_to_children_sum += $this_taluka_uc['water_accessible_to_children_count']; ?></td>
<td><?php echo $this_taluka_uc['school_has_electricity_count']; $school_has_electricity_sum += $this_taluka_uc['school_has_electricity_count']; ?></td>
<td><?php echo $this_taluka_uc['electricity_meter_installed_count']; $electricity_meter_installed_sum += $this_taluka_uc['electricity_meter_installed_count']; ?></td>
<td><?php echo $this_taluka_uc['school_count']; $school_sum += $this_taluka_uc['school_count']; ?></td>
<td><?php echo $this_taluka_uc['survey_count']; $survey_sum += $this_taluka_uc['survey_count']; ?></td>
</tr>
<?php } ?>
<tr>
<td><strong>Total</strong></td>
<td><strong><?php echo $toilets_available_sum?></strong></td>
<td><strong><?php echo $toilet_closing_door_sum?></strong></td>
<td><strong><?php echo $water_available_in_toilet_sum?></strong></td>
<td><strong><?php echo $toilet_drainage_sum?></strong></td>
<td><strong><?php echo $water_available_in_school_sum?></strong></td>
<td><strong><?php echo $water_drinkable_sum?></strong></td>
<td><strong><?php echo $water_accessible_to_children_sum?></strong></td>
<td><strong><?php echo $school_has_electricity_sum?></strong></td>
<td><strong><?php echo $electricity_meter_installed_sum?></strong></td>
<td><strong><?php echo $school_sum?></strong></td>
<td><strong><?php echo $survey_sum?></strong></td>
</tr>

</table>


<h1 class="main-heading">School Management Committees-<?php echo $district['Region']['name']?>  </h1>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">

<tr>
<th>Union Council</th>
<th>SMC Not Notified</th>
<th>SMC With No Chairperson</th>
<th>No Child of SMC Member</th>
<th>SMC Funds Not Received</th>
<th>No Account of SMC</th>
<th>No SMC Meetings</th>
<th>No Community Contriution</th>
<th>SIP Not Availale</th>
<th>Total Schools in Uc</th>
<th>Survey Count</th>
</tr>
<?php 
$has_notified_smc_sum = 0;
$smc_chairperson_name_sum = 0;
$smc_relative_students_sum = 0;
$funding_recieved_current_year_sum = 0;
$smc_bank_account_sum = 0;
$smc_visits_this_year_sum = 0;
$community_contribution_to_school_sum = 0;
$sip_available_sum = 0;
$school_sum = 0;
$survey_sum = 0;
?>
<?php foreach($this_taluka_ucs as $this_taluka_uc) { ?>
<tr>
<td><?php echo $this_taluka_uc['Uc']['name']?></td>
<td><?php echo $this_taluka_uc['has_notified_smc_count']; $has_notified_smc_sum += $this_taluka_uc['has_notified_smc_count']; ?></td>
<td><?php echo $this_taluka_uc['smc_chairperson_name_count']; $smc_chairperson_name_sum += $this_taluka_uc['smc_chairperson_name_count']; ?></td>
<td><?php echo $this_taluka_uc['smc_relative_students_count']; $smc_relative_students_sum += $this_taluka_uc['smc_relative_students_count']; ?></td>
<td><?php echo $this_taluka_uc['funding_recieved_current_year_count']; $funding_recieved_current_year_sum += $this_taluka_uc['funding_recieved_current_year_count']; ?></td>
<td><?php echo $this_taluka_uc['smc_bank_account_count']; $smc_bank_account_sum += $this_taluka_uc['smc_bank_account_count']; ?></td>
<td><?php echo $this_taluka_uc['smc_visits_this_year_count']; $smc_visits_this_year_sum += $this_taluka_uc['smc_visits_this_year_count']; ?></td>
<td><?php echo $this_taluka_uc['community_contribution_to_school_count']; $community_contribution_to_school_sum += $this_taluka_uc['community_contribution_to_school_count']; ?></td>
<td><?php echo $this_taluka_uc['sip_available_count']; $sip_available_sum += $this_taluka_uc['sip_available_count']; ?></td>
<td><?php echo $this_taluka_uc['school_count']; $school_sum += $this_taluka_uc['school_count']; ?></td>
<td><?php echo $this_taluka_uc['survey_count']; $survey_sum += $this_taluka_uc['survey_count']; ?></td>
</tr>
<?php } ?>
<tr>
<td><strong>Total</strong></td>
<td><strong><?php echo $has_notified_smc_sum?></strong></td>
<td><strong><?php echo $smc_chairperson_name_sum?></strong></td>
<td><strong><?php echo $smc_relative_students_sum?></strong></td>
<td><strong><?php echo $funding_recieved_current_year_sum?></strong></td>
<td><strong><?php echo $smc_bank_account_sum?></strong></td>
<td><strong><?php echo $smc_visits_this_year_sum?></strong></td>
<td><strong><?php echo $community_contribution_to_school_sum?></strong></td>
<td><strong><?php echo $sip_available_sum?></strong></td>
<td><strong><?php echo $school_sum?></strong></td>
<td><strong><?php echo $survey_sum?></strong></td>
</tr>

</table>