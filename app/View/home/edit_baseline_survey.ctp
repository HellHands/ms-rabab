<script>
$(function() {
$('#baseline_survey_form').validate();
});
</script>
<?php foreach($baseline_surveys as $baseline_survey) { ?>
<table style="width:900px;">
<tr><td colspan="2"><h1><div style="float:left; text-align:center; width:100%; height:30px; background-color:#4455ff; color:#fff;">Add New Baseline Survey</div></h1></td></tr>
<form id="baseline_survey_form" action="<?php echo $this->webroot?>home/submit_baseline_survey/<?php echo $baseline_survey['SchoolIdentification']['id']?>" method="post">
<tr><td colspan="2"><h1>1.School Identification</h1></td></tr><input type="hidden" value="<?php echo $scid?>" name="school_id" /><input type="hidden" name="cluster_id" value="<?php echo $cluster['Cluster']['id']?>" />
<tr><td><strong>Round</strong></td>
	<td>
		<select name="district_code" class="">
		<option value="">Select</option>
		<option value="1" <?php if(($baseline_survey['SchoolIdentification']['round']) == 1 ) { echo 'selected="selected"'; } ?> >1st</option>
		<option value="2" <?php if(($baseline_survey['SchoolIdentification']['round']) == 2 ) { echo 'selected="selected"'; } ?> >2nd</option>
		<option value="3" <?php if(($baseline_survey['SchoolIdentification']['round']) == 3 ) { echo 'selected="selected"'; } ?> >3rd</option>
		<option value="4" <?php if(($baseline_survey['SchoolIdentification']['round']) == 4 ) { echo 'selected="selected"'; } ?> >4th</option>
		<option value="5" <?php if(($baseline_survey['SchoolIdentification']['round']) == 5 ) { echo 'selected="selected"'; } ?> >5th</option>
		<option value="6" <?php if(($baseline_survey['SchoolIdentification']['round']) == 6 ) { echo 'selected="selected"'; } ?> >6th</option>
		<option value="7" <?php if(($baseline_survey['SchoolIdentification']['round']) == 7 ) { echo 'selected="selected"'; } ?> >7th</option>
		<option value="8" <?php if(($baseline_survey['SchoolIdentification']['round']) == 8 ) { echo 'selected="selected"'; } ?> >8th</option>
		<option value="9" <?php if(($baseline_survey['SchoolIdentification']['round']) == 9 ) { echo 'selected="selected"'; } ?> >9th</option>
		</select>
	</td>
</tr>
<tr><td><strong>Type</strong></td>
	<td>
		<select name="type_of_round" class="">
		<option value="">Select</option>
		<option value="0" <?php if(($baseline_survey['SchoolIdentification']['type_of_round']) == 0 ) { echo 'selected="selected"'; } ?> >Baseline</option>
		<option value="1" <?php if(($baseline_survey['SchoolIdentification']['type_of_round']) == 1 ) { echo 'selected="selected"'; } ?> >Evaluation</option>
		</select>
	</td>
</tr>
<tr><td><strong>1.1 School Name</strong></td>
	<td>
		<input type="text" value="<?php echo $school_name?>" name="school_name" class="required"/>
	</td>
</tr>
<tr><td><strong>1.2 Semis Code</strong></td>
	<td>
		<input type="text" value="<?php echo $semis_code?>" name="semis_code" class="number" />
	</td>
</tr>
<tr><td><strong>1.3 Cluster Code</strong></td>
	<td>
		<input name="cluster_code" value="<?php echo $cluster['Cluster']['code']?>" type="text" class="number"/>
	</td>
</tr>
<tr><td><strong>1.4 Position in cluster</strong></td>
	<td>
		<input type="text" value="<?php if($school['School']['guide_school'] == 1) { echo 'guide'; }else { echo 'non guide'; }  ?>" name="cluster_position" class="" />
	</td>
</tr>
<tr><td><strong>1.5 Address</strong></td><td></td></tr>
<tr><td></td><td>village/st<br /><input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['school_village_st']?>" name="school_village_st" /></td></tr>
<tr><td></td><td>No. of Households in village/vicinity (street): <br /><input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['cluster_vicinity_households']?>" name="cluster_vicinity_households" /></td></tr>
<tr><td></td><td>Post office<br /><input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['post_office']?>" name="post_office" /></td></tr>
<tr><td></td><td>Union Council:<br /><input type="text" value="<?php echo $uc_name?>" name="uc_name" /></td></tr>
<tr><td></td><td>Taluka<br /><input type="text" value="<?php echo $taluka_name?>" name="taluka" /></td></tr>
<tr><td></td><td>District<br /><input type="text" value="<?php echo $district_name?>" name="district" /></td></tr>
<tr><td><strong>1.6 Distance</strong></td><td></td></tr>
<tr><td></td><td>distance from guide school to community:<br /><input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['gs_community_distance']?>" name="gs_community_distance" class="number" /></td></tr>
<tr><td>School Name:<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['gtng1name']?>" name="gtng1name" class="" /></td>
	<td>Distance from GS to NG <br />
		<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['gtng1']?>" name="gtng1" class="number" />:Dir<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['dir1']?>" name="dir1" class="" />
	</td>
</tr>
<tr><td>School Name:<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['gtng2name']?>" name="gtng2name" class="" /></td>
	<td>Distance from GS to NG <br />
		<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['gtng2']?>" name="gtng2" class="number" />
		:Dir<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['dir2']?>" name="dir2" class="" />
	</td>
</tr>
<tr><td>School Name:<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['gtng3name']?>" name="gtng3name" class="" /></td>
	<td>Distance from GS to NG <br />
		<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['gtng3']?>" name="gtng3" class="number" />
		:Dir<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['dir3']?>" name="dir3" class="" />
	</td>
</tr>
<tr><td>School Name:<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['gtng4name']?>" name="gtng4name" class="" /></td>
	<td>Distance from GS to NG <br />
		<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['gtng4']?>" name="gtng4" class="number" />
		:Dir<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['dir4']?>" name="dir4" class="" />
	</td>
</tr>
<tr><td>School Name:<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['gtng5name']?>" name="gtng5name" class="" /></td>
	<td>Distance from GS to NG <br />
		<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['gtng5']?>" name="gtng5" class="number" />
		:Dir<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['dir5']?>" name="dir5" class="" />
	</td>
</tr>
<tr><td>School Name:<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['gtng6name']?>" name="gtng6name" class="" /></td>
	<td>Distance from GS to NG <br />
		<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['gtng6']?>" name="gtng6" class="number" />
		:Dir<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['dir6']?>" name="dir6" class="" />
	</td>
</tr>
<tr><td>School Name:<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['gtng7name']?>" name="gtng7name" class="" /></td>
	<td>Distance from GS to NG <br />
		<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['gtng7']?>" name="gtng7" class="number" />
		:Dir<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['dir7']?>" name="dir7" class="" />
	</td>
</tr>
<tr><td>School Name:<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['gtng8name']?>" name="gtng8name" class="" /></td>
	<td>Distance from GS to NG <br />
		<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['gtng8']?>" name="gtng8" class="number" />
		:Dir<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['dir8']?>" name="dir8" class="" />
	</td>
</tr>
<tr><td colspan="2"><strong>1.7 Educational oppurtunities in the periphery of cluster</strong></td></tr>
<tr><td></td><td><strong>Number of Elementary Schools:</strong><br />Boys<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['elementary_boys']?>" name="elementary_boys" class="number" />Girls<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['elementary_girls']?>" name="elementary_girls" class="number" /></td></tr>
<tr><td></td><td><strong>Number of Secondary/High Schools:</strong><br />Boys<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['secondary_boys']?>" name="secondary_boys" class="number" />Girls<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['secondary_girls']?>" name="secondary_girls" class="number" /></td></tr>
<tr><td></td><td><strong>Number of Private Schools:</strong><br />Boys<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['private_boys']?>" name="private_boys" class="number" />Girls<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['private_girls']?>" name="private_girls" class="number" /></td></tr>
<tr><td></td><td><strong>Number of Other Schools:</strong><br />Boys<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['other_boys']?>" name="other_boys" class="number" />Girls<input type="text" value="<?php echo $baseline_survey['SchoolIdentification']['other_girls']?>" name="other_girls" class="number" /></td></tr>
<tr><td colspan="2"><strong>2.Basic Information</strong></td></tr>
<tr><td>2.1 Status</td><td><input type="text" value="<?php echo $baseline_survey['BasicInformation']['school_status']?>" name="school_status" /></td></tr>
<tr><td>2.2 Date of stablishment</td><td><input type="text" value="<?php echo $baseline_survey['BasicInformation']['date_of_stablishment']?>" name="date_of_stablishment" /></td></tr>
<tr><td>2.3 date of construction</td><td><input type="text" value="" name="date_of_construction" /></td></tr>
<tr><td>2.4 school level</td><td><input type="text" value="<?php echo $baseline_survey['BasicInformation']['school_level']?>" name="school_level" /></td></tr>
<tr><td>2.5 Gender of School</td><td><input type="text" value="<?php echo $baseline_survey['BasicInformation']['school_gender']?>" name="school_gender" /></td></tr>
<tr><td>2.6 Medium of Instruction</td><td><input type="text" value="<?php echo $baseline_survey['BasicInformation']['medium_of_instruction']?>" name="medium_of_instruction" /></td></tr>
<tr><td>2.7 Number of Rooms</td><td><input type="text" value="<?php echo $baseline_survey['BasicInformation']['no_of_rooms']?>" name="no_of_rooms" class="number" /></td></tr>
<tr><td>2.8 School has recieved annual budget </td><td><input type="radio" name="budget_recieved" <?php if($baseline_survey['BasicInformation']['budget_recieved'] == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if($baseline_survey['BasicInformation']['budget_recieved'] == 0) { ?> checked="checked" <?php } ?> name="budget_recieved" value="0" >No</input></td></tr>
<tr><td>2.9 School has bank account</td><td><input type="radio" name="school_account" <?php if($baseline_survey['BasicInformation']['school_account'] == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if($baseline_survey['BasicInformation']['school_account'] == 0) { ?> checked="checked" <?php } ?> name="school_account" value="0" >No</input></td></tr>
<tr><td></td><td>bank/branch<br /><input type="text" value="<?php echo $baseline_survey['BasicInformation']['bank_branch']?>" name="bank_branch" /></td></tr>
<tr><td></td><td>Account Title<br /><input type="text" value="<?php echo $baseline_survey['BasicInformation']['account_title']?>" name="account_title" /></td></tr>
<tr><td></td><td>Account Number<input type="text" value="<?php echo $baseline_survey['BasicInformation']['account_number']?>" name="account_number" class="number" /></td></tr>
<tr><td><strong>2.10 Usage of Rooms</strong></td></tr>
<tr><td></td><td>Total in use:<br /><input type="text" value="<?php echo $baseline_survey['BasicInformation']['total_rooms_inuse']?>" name="total_rooms_inuse" class="number" /></td></tr>
<tr><td></td><td>Classrooms:<br /><input type="text" value="<?php echo $baseline_survey['BasicInformation']['classrooms']?>" name="classrooms" class="number" /></td></tr>
<tr><td></td><td>Office:<br /><input type="text" value="<?php echo $baseline_survey['BasicInformation']['office']?>" name="office" class="number" /></td></tr>
<tr><td></td><td>Store:<br /><input type="text" value="<?php echo $baseline_survey['BasicInformation']['store']?>" name="store" class="number" /></td></tr>
<tr><td></td><td>Unused:<br /><input type="text" value="<?php echo $baseline_survey['BasicInformation']['unused']?>" name="unused" class="number" /></td></tr>
<tr><td></td><td>Unsafe:<br /><input type="text" value="<?php echo $baseline_survey['BasicInformation']['unsafe']?>" name="unsafe" class="number" /></td></tr>
<tr><td></td><td>Other:<br /><input type="text" value="<?php echo $baseline_survey['BasicInformation']['other']?>" name="other" class="number" /></td></tr>
<tr><td>2.11 School has middle/elementary school <br />within an approximate distance of 1.5 KM</td><td><input type="radio" name="school_in_range" <?php if($baseline_survey['BasicInformation']['school_in_range'] == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if($baseline_survey['BasicInformation']['school_in_range'] == 0) { ?> checked="checked" <?php } ?> name="school_in_range" value="0" >No</input></td></tr>
<tr><td>2.12 School has a high school/higher secondary <br />school available within an approximate distance of 1.5 KM</td><td><input type="radio" name="high_school_in_range" <?php if($baseline_survey['BasicInformation']['high_school_in_range'] == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if($baseline_survey['BasicInformation']['high_school_in_range'] == 0) { ?> checked="checked" <?php } ?> name="high_school_in_range" value="0" >No</input></td></tr>

<tr><td><strong>3. RECORDS</strong></td><td></td></tr>
<tr><td>3.1 Teacher Attendance Register</td>
	<td>
		<input type="radio" name="tar_available" <?php if($baseline_survey['Record']['tar_available'] == 1) { ?> checked="checked" <?php } ?> value="1" >Available</input><br />
		<input type="radio" name="tar_available" <?php if($baseline_survey['Record']['tar_available'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not available</input><br />
		<input type="radio" name="tar_updated" <?php if($baseline_survey['Record']['tar_updated'] == 1) { ?> checked="checked" <?php } ?> value="1" >Updated</input><br />
		<input type="radio" name="tar_updated" <?php if($baseline_survey['Record']['tar_updated'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not Updated</input></td></tr>
<tr><td>3.2 Teacher level record</td>
	<td>
		<input type="radio" name="tlr_available" <?php if($baseline_survey['Record']['tlr_available'] == 1) { ?> checked="checked" <?php } ?> value="1" >Available</input><br />
		<input type="radio" name="tlr_available" <?php if($baseline_survey['Record']['tlr_available'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not available</input><br />
		<input type="radio" name="tlr_updated" <?php if($baseline_survey['Record']['tlr_updated'] == 1) { ?> checked="checked" <?php } ?> value="1" >Updated</input><br />
		<input type="radio" name="tlr_updated" <?php if($baseline_survey['Record']['tlr_updated'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not Updated</input>
	</td>
</tr>
<tr><td>3.3 Students attendance register</td>
	<td>
		<input type="radio" name="stu_att_available" <?php if($baseline_survey['Record']['stu_att_available'] == 1) { ?> checked="checked" <?php } ?> value="1" >Available</input><br />
		<input type="radio" name="stu_att_available" <?php if($baseline_survey['Record']['stu_att_available'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not available</input><br />
		<input type="radio" name="stu_att_updated" <?php if($baseline_survey['Record']['stu_att_updated'] == 1) { ?> checked="checked" <?php } ?> value="1" >Updated</input><br />
		<input type="radio" name="stu_att_updated" <?php if($baseline_survey['Record']['stu_att_updated'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not Updated</input>
	</td>
</tr>
<tr><td>3.4 General Register</td>
	<td>
		<input type="radio" name="gr_available" <?php if($baseline_survey['Record']['gr_available'] == 1) { ?> checked="checked" <?php } ?> value="1" >Available</input><br />
		<input type="radio" name="gr_available" <?php if($baseline_survey['Record']['gr_available'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not available</input><br />
		<input type="radio" name="gr_updated" <?php if($baseline_survey['Record']['gr_updated'] == 1) { ?> checked="checked" <?php } ?> checked="checked" value="1" >Updated</input><br />
		<input type="radio" name="gr_updated" <?php if($baseline_survey['Record']['gr_updated'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not Updated</input>
	</td>
</tr>
<tr><td>3.5 Examination Result</td>
	<td>
		<input type="radio" name="exam_result_available" <?php if($baseline_survey['Record']['exam_result_available'] == 1) { ?> checked="checked" <?php } ?> value="1" >Available</input><br />
		<input type="radio" name="exam_result_available" <?php if($baseline_survey['Record']['exam_result_available'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not available</input><br />
		<input type="radio" name="exam_result_updated" <?php if($baseline_survey['Record']['exam_result_updated'] == 1) { ?> checked="checked" <?php } ?> value="1" >Updated</input><br />
		<input type="radio" name="exam_result_updated" <?php if($baseline_survey['Record']['exam_result_updated'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not Updated</input>
	</td>
</tr>
<tr><td>3.6 Visitor Book</td>
	<td>
		<input type="radio" name="vb_available" <?php if($baseline_survey['Record']['vb_available'] == 1) { ?> checked="checked" <?php } ?> value="1" >Available</input><br />
		<input type="radio" name="vb_available" <?php if($baseline_survey['Record']['vb_available'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not available</input><br />
		<input type="radio" name="vb_updated" <?php if($baseline_survey['Record']['vb_updated'] == 1) { ?> checked="checked" <?php } ?> value="1" >Updated</input><br />
		<input type="radio" name="vb_updated" <?php if($baseline_survey['Record']['vb_updated'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not Updated</input>
	</td>
</tr>
<tr><td>3.7 SEMIS School form</td>
	<td>
		<input type="radio" name="ss_form_available" <?php if($baseline_survey['Record']['ss_form_available'] == 1) { ?> checked="checked" <?php } ?> value="1" >Available</input><br />
		<input type="radio" name="ss_form_available" <?php if($baseline_survey['Record']['ss_form_available'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not available</input><br />
		<input type="radio" name="ss_form_updated" <?php if($baseline_survey['Record']['ss_form_updated'] == 1) { ?> checked="checked" <?php } ?> value="1" >Updated</input><br />
		<input type="radio" name="ss_form_updated" <?php if($baseline_survey['Record']['ss_form_updated'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not Updated</input>
	</td>
</tr>
<tr><td>3.8 Textbook distribution form</td>
	<td>
		<input type="radio" name="tb_distribution_available" <?php if($baseline_survey['Record']['tb_distribution_available'] == 1) { ?> checked="checked" <?php } ?> value="1" >Available</input><br />
		<input type="radio" name="tb_distribution_available" <?php if($baseline_survey['Record']['tb_distribution_available'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not available</input><br />
		<input type="radio" name="tb_distribution_updated" <?php if($baseline_survey['Record']['tb_distribution_updated'] == 1) { ?> checked="checked" <?php } ?> value="1" >Updated</input><br />
		<input type="radio" name="tb_distribution_updated" <?php if($baseline_survey['Record']['tb_distribution_updated'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not Updated</input>
	</td>
</tr>
<tr><td>3.9 Girls Stipend Record</td>
	<td>
		<input type="radio" name="gs_record_available" <?php if($baseline_survey['Record']['gs_record_available'] == 1) { ?> checked="checked" <?php } ?> value="1" >Available</input><br />
		<input type="radio" name="gs_record_available" <?php if($baseline_survey['Record']['gs_record_available'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not available</input><br />
		<input type="radio" name="gs_record_updated" <?php if($baseline_survey['Record']['gs_record_updated'] == 1) { ?> checked="checked" <?php } ?> value="1" >Updated</input><br />
		<input type="radio" name="gs_record_updated" <?php if($baseline_survey['Record']['gs_record_updated'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not Updated</input>
	</td>
</tr>
<tr><td>3.10 Asset/Stock Register</td>
	<td>
		<input type="radio" name="as_register_available" <?php if($baseline_survey['Record']['gs_record_updated'] == 1) { ?> checked="checked" <?php } ?> value="1" >Available</input><br />
		<input type="radio" name="as_register_available" <?php if($baseline_survey['Record']['gs_record_updated'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not available</input><br />
		<input type="radio" name="as_register_updated" <?php if($baseline_survey['Record']['gs_record_updated'] == 1) { ?> checked="checked" <?php } ?> value="1" >Updated</input><br />
		<input type="radio" name="as_register_updated" <?php if($baseline_survey['Record']['gs_record_updated'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not Updated</input>
	</td>
</tr>
<tr><td>3.11 SMC Register</td>
	<td>
		<input type="radio" name="smc_register_available" <?php if($baseline_survey['Record']['smc_register_available'] == 1) { ?> checked="checked" <?php } ?> value="1" >Available</input><br />
		<input type="radio" name="smc_register_available" <?php if($baseline_survey['Record']['smc_register_available'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not available</input><br />
		<input type="radio" name="smc_register_updated" <?php if($baseline_survey['Record']['smc_register_updated'] == 1) { ?> checked="checked" <?php } ?> value="1" >Updated</input><br />
		<input type="radio" name="smc_register_updated" <?php if($baseline_survey['Record']['smc_register_updated'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not Updated</input>
	</td>
</tr>
<tr><td>3.12 SMC Records</td><td></td></tr>
<tr><td> 3.12.1 SMC Notification </td>
	<td>
		<input type="radio" name="smc_notif_available" <?php if($baseline_survey['Record']['smc_notif_available'] == 1) { ?> checked="checked" <?php } ?> value="1" >Available</input><br />
		<input type="radio" name="smc_notif_available" <?php if($baseline_survey['Record']['smc_notif_available'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not available</input>
	</td>
</tr>
<tr><td> 3.12.2 SMC Guideline </td>
	<td>
		<input type="radio" name="smc_guideline_available" <?php if($baseline_survey['Record']['smc_guideline_available'] == 1) { ?> checked="checked" <?php } ?> value="1" >Available</input><br />
		<input type="radio" name="smc_guideline_available" <?php if($baseline_survey['Record']['smc_guideline_available'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not available</input>
	</td>
</tr>
<?php /*
<tr><td> 3.12.3 SMC Register </td>
	<td>
		<input type="radio" name="smc_register_available" <?php if($baseline_survey['Record']['smc_register_available'] == 1) { ?> checked="checked" <?php } ?> value="1" >Available</input><br />
		<input type="radio" name="smc_register_available" <?php if($baseline_survey['Record']['smc_register_available'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not available</input>
	</td>
</tr>
*/ ?>
<tr><td> 3.12.4 SMC Bank Account Information </td>
	<td>
		<input type="radio" name="smc_accountinfo_available" <?php if($baseline_survey['Record']['smc_accountinfo_available'] == 1) { ?> checked="checked" <?php } ?> value="1" >Available</input><br />
		<input type="radio" name="smc_accountinfo_available" <?php if($baseline_survey['Record']['smc_accountinfo_available'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not available</input>
	</td>
</tr>
<tr><td> 3.13 School Improvement Plan(SIP):</td>
	<td>
		<input type="radio" name="sip_available" <?php if($baseline_survey['Record']['sip_available'] == 1) { ?> checked="checked" <?php } ?> value="1" >Available</input><br />
		<input type="radio" name="sip_available" <?php if($baseline_survey['Record']['sip_available'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not available</input><br />
		<input type="radio" name="sip_updated" <?php if($baseline_survey['Record']['sip_updated'] == 1) { ?> checked="checked" <?php } ?> value="1" >Updated</input><br />
		<input type="radio" name="sip_updated" <?php if($baseline_survey['Record']['sip_updated'] == 0) { ?> checked="checked" <?php } ?> value="0" >Not Updated</input>
	</td>
</tr>

<tr><td colspan="2"><strong>4.ENROLLMENT AND ATTENDANCE </strong></td></tr>
<tr><td><strong> 4.1 Children </strong></td><td></td></tr>
	<tr><td>4.1.1 Grade-wise enrollment this year</td>
		<td><strong>katchi</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwe_katchi_boys']?>" name="gwe_katchi_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwe_katchi_girls']?>" name="gwe_katchi_girls" class="number" /><br />
			<strong>I</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwe_1_boys']?>" name="gwe_1_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwe_1_girls']?>" name="gwe_1_girls" class="number" /><br />
			<strong>II</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwe_2_boys']?>" name="gwe_2_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwe_2_girls']?>" name="gwe_2_girls" class="number" /><br />
			<strong>III</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwe_3_boys']?>" name="gwe_3_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwe_3_girls']?>" name="gwe_3_girls" class="number" /><br />
			<strong>IV</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwe_4_boys']?>" name="gwe_4_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwe_4_girls']?>" name="gwe_4_girls" class="number" /><br />
			<strong>V</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwe_5_boys']?>" name="gwe_5_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwe_5_girls']?>" name="gwe_5_girls" class="number" /><br />
			<strong>VI</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwe_6_boys']?>" name="gwe_6_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwe_6_girls']?>" name="gwe_6_girls" class="number" /><br />
			<strong>VII</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwe_7_boys']?>" name="gwe_7_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwe_7_girls']?>" name="gwe_7_girls" class="number" /><br />
			<strong>VIII</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwe_8_boys']?>" name="gwe_8_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwe_8_girls']?>" name="gwe_8_girls" class="number" /><br />
		</td>
	</tr>
		<tr><td>4.1.2 Total enrollment last year</td>
		<td><strong>katchi</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['tely_katchi_boys']?>" name="tely_katchi_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['tely_katchi_girls']?>" name="tely_katchi_girls" class="number" /><br />
			<strong>I</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['tely_1_boys']?>" name="tely_1_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['tely_1_girls']?>" name="tely_1_girls" class="number" /><br />
			<strong>II</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['tely_2_boys']?>" name="tely_2_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['tely_2_girls']?>" name="tely_2_girls" class="number" /><br />
			<strong>III</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['tely_3_boys']?>" name="tely_3_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['tely_3_girls']?>" name="tely_3_girls" class="number" /><br />
			<strong>IV</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['tely_4_boys']?>" name="tely_4_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['tely_4_girls']?>" name="tely_4_girls" class="number" /><br />
			<strong>V</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['tely_5_boys']?>" name="tely_5_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['tely_5_girls']?>" name="tely_5_girls" class="number" /><br />
			<strong>VI</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['tely_6_boys']?>" name="tely_6_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['tely_6_girls']?>" name="tely_6_girls" class="number" /><br />
			<strong>VII</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['tely_7_boys']?>" name="tely_7_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['tely_7_girls']?>" name="tely_7_girls" class="number" /><br />
			<strong>VIII</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['tely_8_boys']?>" name="tely_8_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['tely_8_girls']?>" name="tely_8_girls" class="number" /><br />
		</td>
	</tr>
		<tr><td>4.1.3.	Number of children promoted from last year as per examination result</td>
		<td><strong>katchi</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncp_katchi_boys']?>" name="ncp_katchi_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncp_katchi_girls']?>" name="ncp_katchi_girls" class="number" /><br />
			<strong>I</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncp_1_boys']?>" name="ncp_1_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncp_1_girls']?>" name="ncp_1_girls" class="number" /><br />
			<strong>II</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncp_2_boys']?>" name="ncp_2_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncp_2_girls']?>" name="ncp_2_girls" class="number" /><br />
			<strong>III</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncp_3_boys']?>" name="ncp_3_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncp_3_girls']?>" name="ncp_3_girls" class="number" /><br />
			<strong>IV</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncp_4_boys']?>" name="ncp_4_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncp_4_girls']?>" name="ncp_4_girls" class="number" /><br />
			<strong>V</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncp_5_boys']?>" name="ncp_5_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncp_5_girls']?>" name="ncp_5_girls" class="number" /><br />
			<strong>VI</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncp_6_boys']?>" name="ncp_6_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncp_6_girls']?>" name="ncp_6_girls" class="number" /><br />
			<strong>VII</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncp_7_boys']?>" name="ncp_7_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncp_7_girls']?>" name="ncp_7_girls" class="number" /><br />
			<strong>VIII</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncp_8_boys']?>" name="ncp_8_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncp_8_girls']?>" name="ncp_8_girls" class="number" /><br />
		</td>
	</tr>
		<tr><td>4.1.4 Number of children repeating the same grade this year</td>
		<td><strong>katchi</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncr_katchi_boys']?>" name="ncr_katchi_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncr_katchi_girls']?>" name="ncr_katchi_girls" class="number" /><br />
			<strong>I</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncr_1_boys']?>" name="ncr_1_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncr_1_girls']?>" name="ncr_1_girls" class="number" /><br />
			<strong>II</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncr_2_boys']?>" name="ncr_2_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncr_2_girls']?>" name="ncr_2_girls" class="number" /><br />
			<strong>III</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncr_3_boys']?>" name="ncr_3_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncr_3_girls']?>" name="ncr_3_girls" class="number" /><br />
			<strong>IV</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncr_4_boys']?>" name="ncr_4_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncr_4_girls']?>" name="ncr_4_girls" class="number" /><br />
			<strong>V</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncr_5_boys']?>" name="ncr_5_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncr_5_girls']?>" name="ncr_5_girls" class="number" /><br />
			<strong>VI</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncr_6_boys']?>" name="ncr_6_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncr_6_girls']?>" name="ncr_6_girls" class="number" /><br />
			<strong>VII</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncr_7_boys']?>" name="ncr_7_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncr_7_girls']?>" name="ncr_7_girls" class="number" /><br />
			<strong>VIII</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncr_8_boys']?>" name="ncr_8_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncr_8_girls']?>" name="ncr_8_girls" class="number" /><br />
		</td>
	</tr>
		<tr><td>4.1.5 Number of children transferred to another school based on School GR</td>
		<td><strong>katchi</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['nctos_katchi_boys']?>" name="nctos_katchi_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['nctos_katchi_girls']?>" name="nctos_katchi_girls" class="number" /><br />
			<strong>I</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['nctos_1_boys']?>" name="nctos_1_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['nctos_1_girls']?>" name="nctos_1_girls" class="number" /><br />
			<strong>II</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['nctos_2_boys']?>" name="nctos_2_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['nctos_2_girls']?>" name="nctos_2_girls" class="number" /><br />
			<strong>III</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['nctos_3_boys']?>" name="nctos_3_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['nctos_3_girls']?>" name="nctos_3_girls" class="number" /><br />
			<strong>IV</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['nctos_4_boys']?>" name="nctos_4_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['nctos_4_girls']?>" name="nctos_4_girls" class="number" /><br />
			<strong>V</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['nctos_5_boys']?>" name="nctos_5_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['nctos_5_girls']?>" name="nctos_5_girls" class="number" /><br />
			<strong>VI</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['nctos_6_boys']?>" name="nctos_6_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['nctos_6_girls']?>" name="nctos_6_girls" class="number" /><br />
			<strong>VII</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['nctos_7_boys']?>" name="nctos_7_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['nctos_7_girls']?>" name="nctos_7_girls" class="number" /><br />
			<strong>VIII</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['nctos_8_boys']?>" name="nctos_8_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['nctos_8_girls']?>" name="nctos_8_girls" class="number" /><br />
		</td>
	</tr>
		<tr><td>4.1.6 Number of children dropped out this year</td>
		<td><strong>katchi</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncdo_katchi_boys']?>" name="ncdo_katchi_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncdo_katchi_girls']?>" name="ncdo_katchi_girls" class="number" /><br />
			<strong>I</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncdo_1_boys']?>" name="ncdo_1_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncdo_1_girls']?>" name="ncdo_1_girls" class="number" /><br />
			<strong>II</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncdo_2_boys']?>" name="ncdo_2_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncdo_2_girls']?>" name="ncdo_2_girls" class="number" /><br />
			<strong>III</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncdo_3_boys']?>" name="ncdo_3_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncdo_3_girls']?>" name="ncdo_3_girls" class="number" /><br />
			<strong>IV</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncdo_4_boys']?>" name="ncdo_4_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncdo_4_girls']?>" name="ncdo_4_girls" class="number" /><br />
			<strong>V</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncdo_5_boys']?>" name="ncdo_5_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncdo_5_girls']?>" name="ncdo_5_girls" class="number" /><br />
			<strong>VI</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncdo_6_boys']?>" name="ncdo_6_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncdo_6_girls']?>" name="ncdo_6_girls" class="number" /><br />
			<strong>VII</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncdo_7_boys']?>" name="ncdo_7_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncdo_7_girls']?>" name="ncdo_7_girls" class="number" /><br />
			<strong>VIII</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncdo_8_boys']?>" name="ncdo_8_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncdo_8_girls']?>" name="ncdo_8_girls" class="number" /><br />
		</td>
	</tr>
		<tr><td>4.1.7.	Grade-wise attendance on the day</td>
		<td><strong>katchi</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwat_katchi_boys']?>" name="gwat_katchi_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwat_katchi_girls']?>" name="gwat_katchi_girls" class="number" /><br />
			<strong>I</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwat_1_boys']?>" name="gwat_1_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwat_1_girls']?>" name="gwat_1_girls" class="number" /><br />
			<strong>II</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwat_2_boys']?>" name="gwat_2_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwat_2_girls']?>" name="gwat_2_girls" class="number" /><br />
			<strong>III</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwat_3_boys']?>" name="gwat_3_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwat_3_girls']?>" name="gwat_3_girls" class="number" /><br />
			<strong>IV</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwat_4_boys']?>" name="gwat_4_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwat_4_girls']?>" name="gwat_4_girls" class="number" /><br />
			<strong>V</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwat_5_boys']?>" name="gwat_5_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwat_5_girls']?>" name="gwat_5_girls" class="number" /><br />
			<strong>VI</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwat_6_boys']?>" name="gwat_6_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwat_6_girls']?>" name="gwat_6_girls" class="number" /><br />
			<strong>VII</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwat_7_boys']?>" name="gwat_7_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwat_7_girls']?>" name="gwat_7_girls" class="number" /><br />
			<strong>VIII</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwat_8_boys']?>" name="gwat_8_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['gwat_8_girls']?>" name="gwat_8_girls" class="number" /><br />
		</td>
	</tr>
		<tr><td>4.1.8 Number of children not attending for last one month</td>
		<td><strong>katchi</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncna_katchi_boys']?>" name="ncna_katchi_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncna_katchi_girls']?>" name="ncna_katchi_girls" class="number" /><br />
			<strong>I</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncna_1_boys']?>" name="ncna_1_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncna_1_girls']?>" name="ncna_1_girls" class="number" /><br />
			<strong>II</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncna_2_boys']?>" name="ncna_2_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncna_2_girls']?>" name="ncna_2_girls" class="number" /><br />
			<strong>III</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncna_3_boys']?>" name="ncna_3_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncna_3_girls']?>" name="ncna_3_girls" class="number" /><br />
			<strong>IV</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncna_4_boys']?>" name="ncna_4_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncna_4_girls']?>" name="ncna_4_girls" class="number" /><br />
			<strong>V</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncna_5_boys']?>" name="ncna_5_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncna_5_girls']?>" name="ncna_5_girls" class="number" /><br />
			<strong>VI</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncna_6_boys']?>" name="ncna_6_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncna_6_girls']?>" name="ncna_6_girls" class="number" /><br />
			<strong>VII</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncna_7_boys']?>" name="ncna_7_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncna_7_girls']?>" name="ncna_7_girls" class="number" /><br />
			<strong>VIII</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncna_8_boys']?>" name="ncna_8_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['ncna_8_girls']?>" name="ncna_8_girls" class="number" /><br />
		</td>
	</tr>
		<tr><td>4.1.9 Average attendance of the last month</td>
		<td><strong>katchi</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['aalm_katchi_boys']?>" name="aalm_katchi_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['aalm_katchi_girls']?>" name="aalm_katchi_girls" class="number" /><br />
			<strong>I</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['aalm_1_boys']?>" name="aalm_1_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['aalm_1_girls']?>" name="aalm_1_girls" class="number" /><br />
			<strong>II</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['aalm_2_boys']?>" name="aalm_2_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['aalm_2_girls']?>" name="aalm_2_girls" class="number" /><br />
			<strong>III</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['aalm_3_boys']?>" name="aalm_3_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['aalm_3_girls']?>" name="aalm_3_girls" class="number" /><br />
			<strong>IV</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['aalm_4_boys']?>" name="aalm_4_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['aalm_4_girls']?>" name="aalm_4_girls" class="number" /><br />
			<strong>V</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['aalm_5_boys']?>" name="aalm_5_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['aalm_5_girls']?>" name="aalm_5_girls" class="number" /><br />
			<strong>VI</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['aalm_6_boys']?>" name="aalm_6_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['aalm_6_girls']?>" name="aalm_6_girls" class="number" /><br />
			<strong>VII</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['aalm_7_boys']?>" name="aalm_7_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['aalm_7_girls']?>" name="aalm_7_girls" class="number" /><br />
			<strong>VIII</strong><br />
			Boys<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['aalm_8_boys']?>" name="aalm_8_boys" class="number" /><br />
			Girls<input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['aalm_8_girls']?>" name="aalm_8_girls" class="number" /><br />
		</td>
	</tr>
	
<tr><td><strong>4.2 Number of teachers posted in the school</strong></td>
	<td>
		Sanctioned <br /><input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['teachers_sanctioned']?>" name="teachers_sanctioned" class="number" />
		Working<br /><input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['teachers_working']?>" name="teachers_working" class="number" />
		Present<br /><input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['teachers_present']?>" name="teachers_present" class="number" />
		On leave<br /><input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['teachers_onleave']?>" name="teachers_onleave" class="number" />
		On derailment<br /><input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['teachers_onderailment']?>" name="teachers_onderailment" class="number" />
		On contract<br /><input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['teachers_oncontract']?>" name="teachers_oncontract" class="number" />
		WB<br /><input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['teachers_wb']?>" name="teachers_wb" class="number" />
		NCHD<br /><input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['teachers_nchd']?>" name="teachers_nchd" class="number" />
		Unicef<br /><input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['teachers_unicef']?>" name="teachers_unicef" class="number" />
		SMC<br /><input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['teachers_smc']?>" name="teachers_smc" class="number" />
		Any Other<br /><input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['teachers_anyother']?>" name="teachers_anyother" class="number" />
		Other<br /><input type="text" value="<?php echo $baseline_survey['EnrollmentAttendance']['teachers_other']?>" name="teachers_other" class="number" />
	</td>
</tr>

<tr><td>4.2.2 Basic information of the staff</td><td></td></tr>

<tr><td>Name of the Staff</td><td>CNIC Number</td><td>Personal number<br />by the AG office</td></tr>
<?php for($x=0; $x<30; $x++) { ?>
<?php if(isset($baseline_survey['Staff'.($x+1)])) { ?>
	<tr><td><?php echo ($x+1)?>.<input type="text" value="<?php echo $baseline_survey['Staff'.($x+1)]['staff_name']?>" name="staff<?php echo ($x+1)?>_name" /></td>
	<td><br /><input type="text" value="<?php echo $baseline_survey['Staff'.($x+1)]['staff_cnic']?>" name="staff<?php echo ($x+1)?>_cnic" class="number" /></td>
	<td><br /><input type="text" value="<?php echo $baseline_survey['Staff'.($x+1)]['staff_pnumber']?>" name="staff<?php echo ($x+1)?>_pnumber" class="number" /></td>
</tr>
<?php }else{ ?>

<tr>
	<td><?php echo ($x+1)?>.<input type="text" value="" name="staff<?php echo ($x+1)?>_name" /></td>
	<td><br /><input type="text" value="" name="staff<?php echo ($x+1)?>_cnic" class="number" /></td>
	<td><br /><input type="text" value="" name="staff<?php echo ($x+1)?>_pnumber" class="number" /></td>
</tr>
<?php } } ?>
</table>
<table style="width:1500px;">
<tr><td>4.2.34.2.3.	Attendance of each of the teacher(s) for last three months (except for the current month)<br /><br />Note: Please use additional sheet in case of more teachers in school</td></tr>
<tr><td>name of the teacher</td><td><div style="text-align:center;">M1</div></td><td><div style="text-align:center;">M2</div></td><td><div style="text-align:center;">M3</div></td></tr>
<?php for($x=0; $x<30; $x++) { ?>
<?php if(isset($baseline_survey['StaffAttendance'.($x+1)])) { ?>
<tr>
	<td><?php echo ($x+1)?>.<input type="text" value="<?php echo $baseline_survey['StaffAttendance'.($x+1)]['name_teacher_att']?>" name="name_teacher<?php echo ($x+1)?>_att" /></td>
	<td>WD<input type="text" value="<?php echo $baseline_survey['StaffAttendance'.($x+1)]['m1_teacher_wd']?>" name="m1_teacher<?php echo ($x+1)?>_wd" class="number" />PT<input type="text" value="<?php echo $baseline_survey['StaffAttendance'.($x+1)]['m1_teacher_pt']?>" name="m1_teacher<?php echo ($x+1)?>_pt" class="number" /></td>
	<td>WD<input type="text" value="<?php echo $baseline_survey['StaffAttendance'.($x+1)]['m2_teacher_wd']?>" name="m2_teacher<?php echo ($x+1)?>_wd" class="number" />PT<input type="text" value="<?php echo $baseline_survey['StaffAttendance'.($x+1)]['m2_teacher_pt']?>" name="m2_teacher<?php echo ($x+1)?>_pt" class="number" /></td>
	<td>WD<input type="text" value="<?php echo $baseline_survey['StaffAttendance'.($x+1)]['m3_teacher_wd']?>" name="m3_teacher<?php echo ($x+1)?>_wd" class="number" />PT<input type="text" value="<?php echo $baseline_survey['StaffAttendance'.($x+1)]['m3_teacher_pt']?>" name="m3_teacher<?php echo ($x+1)?>_pt" class="number" /></td>
</tr>
<?php }else { ?>
<tr>
	<td><?php echo ($x+1)?>.<input type="text" value="" name="name_teacher<?php echo ($x+1)?>_att" /></td>
	<td>WD<input type="text" value="" name="m1_teacher<?php echo ($x+1)?>_wd" class="number" />PT<input type="text" value="" name="m1_teacher<?php echo ($x+1)?>_pt" class="number" /></td>
	<td>WD<input type="text" value="" name="m2_teacher<?php echo ($x+1)?>_wd" class="number" />PT<input type="text" value="" name="m2_teacher<?php echo ($x+1)?>_pt" class="number" /></td>
	<td>WD<input type="text" value="" name="m3_teacher<?php echo ($x+1)?>_wd" class="number" />PT<input type="text" value="" name="m3_teacher<?php echo ($x+1)?>_pt" class="number" /></td>
</tr>
<?php } } ?>


</table>

<table>
<tr><td>5. School Facilities</td></tr>

<tr><td>5.1 Toilets</td></tr>
<tr>
	<td>5.1.1 Toilets Available to students</td><td>
	<input type="radio" name="toilets_available" <?php if($baseline_survey['SchoolFacility']['toilets_available'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
	<input type="radio" name="toilets_available" <?php if($baseline_survey['SchoolFacility']['toilets_available'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.1.2 Number of Toilets or WCs available</td><td><input type="text" value="<?php echo $baseline_survey['SchoolFacility']['no_of_toilets']?>" name="no_of_toilets" class="number" /></td></tr>
<tr><td>5.1.3 The toilet clean with no smell </td>
<td><input type="radio" name="toilet_cleanliness" <?php if($baseline_survey['SchoolFacility']['toilet_cleanliness'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="toilet_cleanliness" <?php if($baseline_survey['SchoolFacility']['toilet_cleanliness'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.1.4 A door for toilet that closes</td>
<td><input type="radio" name="toilet_closing_door" <?php if($baseline_survey['SchoolFacility']['toilet_closing_door'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="toilet_closing_door" <?php if($baseline_survey['SchoolFacility']['toilet_closing_door'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.1.5 Water available in toilet for for flushing and hand washing</td>
<td><input type="radio" name="water_available_in_toilet" <?php if($baseline_survey['SchoolFacility']['water_available_in_toilet'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="water_available_in_toilet" <?php if($baseline_survey['SchoolFacility']['water_available_in_toilet'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.1.6 Adequate drainage (disposal/septic tank)</td>
<td><input type="radio" name="toilet_drainage" <?php if($baseline_survey['SchoolFacility']['toilet_drainage'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="toilet_drainage" <?php if($baseline_survey['SchoolFacility']['toilet_drainage'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>

<tr><td>5.2 Water Provision</td></tr>
<tr><td>5.2.1 Water available inside school</td>
<td><input type="radio" name="water_available_in_school" <?php if($baseline_survey['SchoolFacility']['water_available_in_school'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="water_available_in_school" <?php if($baseline_survey['SchoolFacility']['water_available_in_school'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.2.2 Source of water</td>
<td><input type="radio" name="water_source_type" <?php if($baseline_survey['SchoolFacility']['water_source_type'] == 1) { ?>checked="checked" <?php } ?> value="1" >Hand Pump</input><br />
<input type="radio" name="water_source_type" <?php if($baseline_survey['SchoolFacility']['water_source_type'] == 2) { ?>checked="checked" <?php } ?> value="2" >Motor Operated</input><br />
<input type="radio" name="water_source_type" <?php if($baseline_survey['SchoolFacility']['water_source_type'] == 3) { ?>checked="checked" <?php } ?> value="3" >Hand Carry</input></td></tr>
<tr><td>5.2.3 Water is clean and drinkable</td>
<td><input type="radio" name="water_drinkable" <?php if($baseline_survey['SchoolFacility']['water_drinkable'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="water_drinkable" <?php if($baseline_survey['SchoolFacility']['water_drinkable'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.2.4 Drinking water accesible to children</td>
<td><input type="radio" name="water_accessible_to_children" <?php if($baseline_survey['SchoolFacility']['water_accessible_to_children'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input>
<br /><input type="radio" name="water_accessible_to_children" <?php if($baseline_survey['SchoolFacility']['water_accessible_to_children'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.2.5 Enough water for all purposes</td>
<td><input type="radio" name="water_for_all_purpose" <?php if($baseline_survey['SchoolFacility']['water_for_all_purpose'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="water_for_all_purpose" <?php if($baseline_survey['SchoolFacility']['water_for_all_purpose'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>

<tr><td>5.3 Electricity and Fixtures</td></tr>
<tr><td>5.3.1 The School has electricity</td>
<td><input type="radio" name="school_has_electricity" <?php if($baseline_survey['SchoolFacility']['school_has_electricity'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="school_has_electricity" <?php if($baseline_survey['SchoolFacility']['school_has_electricity'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.3.2 Electricity wiring installed </td>
<td><input type="radio" name="electricity_wiring_installed" <?php if($baseline_survey['SchoolFacility']['electricity_wiring_installed'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="electricity_wiring_installed" <?php if($baseline_survey['SchoolFacility']['electricity_wiring_installed'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.3.3 Electricity is on right now</td>
<td><input type="radio" name="electricity_on_right_now" <?php if($baseline_survey['SchoolFacility']['electricity_on_right_now'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="electricity_on_right_now" <?php if($baseline_survey['SchoolFacility']['electricity_on_right_now'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.3.4 Formal Electricity meter installed</td>
<td><input type="radio" name="electricity_meter_installed" <?php if($baseline_survey['SchoolFacility']['electricity_meter_installed'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="electricity_meter_installed" <?php if($baseline_survey['SchoolFacility']['electricity_meter_installed'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.3.5 During an average school day, number of hours electricity available</td>
<td><input type="text" value="<?php echo $baseline_survey['SchoolFacility']['electricity_available_for']?>" name="electricity_available_for " class="number" /></td></tr>


<tr><td>5.4 Services, maintainance and safety</td></tr>
<tr><td>5.4.1 Any broken window or window panes</td>
<td><input type="radio" name="broken_window_panes" <?php if($baseline_survey['SchoolFacility']['broken_window_panes'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="broken_window_panes" <?php if($baseline_survey['SchoolFacility']['broken_window_panes'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.4.2 Any crack in the walls </td>
<td><input type="radio" name="cracks_in_wall" <?php if($baseline_survey['SchoolFacility']['cracks_in_wall'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="cracks_in_wall" <?php if($baseline_survey['SchoolFacility']['cracks_in_wall'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.4.3 Garbage lying around</td>
<td><input type="radio" name="garbage_lying_around" <?php if($baseline_survey['SchoolFacility']['garbage_lying_around'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="garbage_lying_around" <?php if($baseline_survey['SchoolFacility']['garbage_lying_around'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.4.4 Any signs of leakage in the ceiling</td>
<td><input type="radio" name="leakage_in_ceiling" <?php if($baseline_survey['SchoolFacility']['leakage_in_ceiling'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="leakage_in_ceiling" <?php if($baseline_survey['SchoolFacility']['leakage_in_ceiling'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.4.5 Any cracks in the ceiling</td>
<td><input type="radio" name="cracks_in_ceiling" <?php if($baseline_survey['SchoolFacility']['cracks_in_ceiling'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="cracks_in_ceiling" <?php if($baseline_survey['SchoolFacility']['cracks_in_ceiling'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>


<tr><td>5.5 Classroom Situation</td></tr>
<tr><td>5.5.1 Classroom adequately ventilated </td>
<td><input type="radio" name="classroom_ventilated" <?php if($baseline_survey['SchoolFacility']['classroom_ventilated'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="classroom_ventilated" <?php if($baseline_survey['SchoolFacility']['classroom_ventilated'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.5.2 Enough light (natural/artificial) to read easily </td>
<td><input type="radio" name="light_availability" <?php if($baseline_survey['SchoolFacility']['light_availability'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="light_availability" <?php if($baseline_survey['SchoolFacility']['light_availability'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.5.3 Temperature of the room reasonably bearable</td>
<td><input type="radio" name="temperature_reasonably_bearable" <?php if($baseline_survey['SchoolFacility']['temperature_reasonably_bearable'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="temperature_reasonably_bearable" <?php if($baseline_survey['SchoolFacility']['temperature_reasonably_bearable'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.5.4 Children seatd in comfortable manner</td>
<td><input type="radio" name="children_seated_comfortably" <?php if($baseline_survey['SchoolFacility']['children_seated_comfortably'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="children_seated_comfortably" <?php if($baseline_survey['SchoolFacility']['children_seated_comfortably'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.5.5.	Time table available</td>
<td><input type="radio" name="time_table_available" <?php if($baseline_survey['SchoolFacility']['time_table_available'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="time_table_available" <?php if($baseline_survey['SchoolFacility']['time_table_available'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.5.6.	Any information related to student achievement available</td>
<td><input type="radio" name="student_achievement_info" <?php if($baseline_survey['SchoolFacility']['student_achievement_info'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="student_achievement_info" <?php if($baseline_survey['SchoolFacility']['student_achievement_info'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>



<tr><td>5.6.	Outdoor space</td></tr>
<tr><td>5.6.1.	Boundary wall around the school</td>
<td><input type="radio" name="boundary_wall" <?php if($baseline_survey['SchoolFacility']['boundary_wall'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="boundary_wall" <?php if($baseline_survey['SchoolFacility']['boundary_wall'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.6.2.	Gate installed and functional </td>
<td><input type="radio" name="gate_installed" <?php if($baseline_survey['SchoolFacility']['gate_installed'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="gate_installed" <?php if($baseline_survey['SchoolFacility']['gate_installed'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.6.3.	Sufficient space for children to play</td>
<td><input type="radio" name="children_playing_space" <?php if($baseline_survey['SchoolFacility']['children_playing_space'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="children_playing_space" <?php if($baseline_survey['SchoolFacility']['children_playing_space'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.6.4.	Any plantation in the school</td>
<td><input type="radio" name="plantation_in_school" <?php if($baseline_survey['SchoolFacility']['plantation_in_school'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="plantation_in_school" <?php if($baseline_survey['SchoolFacility']['plantation_in_school'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.6.5.	Any hazards (e.g. ditches, broken glass, etc.)</td>
<td><input type="radio" name="hazards_around" <?php if($baseline_survey['SchoolFacility']['hazards_around'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="hazards_around" <?php if($baseline_survey['SchoolFacility']['hazards_around'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.6.6.	Regular Assembly  </td>
<td><input type="radio" name="regular_assembly" <?php if($baseline_survey['SchoolFacility']['regular_assembly'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="regular_assembly" <?php if($baseline_survey['SchoolFacility']['regular_assembly'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.6.7.	Any co-curricular activity organized during last quarter </td>
	<td>
		<input type="radio" name="extracurricular_activity_lastquarter" <?php if($baseline_survey['SchoolFacility']['extracurricular_activity_lastquarter'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
		<input type="radio" name="extracurricular_activity_lastquarter" <?php if($baseline_survey['SchoolFacility']['extracurricular_activity_lastquarter'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input><br />
		1.<input type="text" value="<?php echo $baseline_survey['SchoolFacility']['extra_curricular_activity1']?>" name="extra_curricular_activity1" /><br />
		2.<input type="text" value="<?php echo $baseline_survey['SchoolFacility']['extra_curricular_activity2']?>" name="extra_curricular_activity2" /><br />
		3.<input type="text" value="<?php echo $baseline_survey['SchoolFacility']['extra_curricular_activity3']?>" name="extra_curricular_activity3" /><br />
		4.<input type="text" value="<?php echo $baseline_survey['SchoolFacility']['extra_curricular_activity4']?>" name="extra_curricular_activity4" /><br />
	</td>
</tr>


<tr><td>5.7 Furniture and fixtures</td></tr>
<tr><td>5.7.1 Number of desks/chairs for children</td><td><input type="text" value="<?php echo $baseline_survey['SchoolFacility']['number_of_desks_for_children']?>" name="number_of_desks_for_children" class="number" /></td></tr>
<tr><td>5.7.2.	All classrooms have blackboard (well painted and functional) </td>
<td><input type="radio" name="blackboard_well_painted" <?php if($baseline_survey['SchoolFacility']['blackboard_well_painted'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="blackboard_well_painted" <?php if($baseline_survey['SchoolFacility']['blackboard_well_painted'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>
<tr><td>5.7.3.	Cabinets or any other alternate storage for school records </td>
<td><input type="radio" name="storage_for_school_records" <?php if($baseline_survey['SchoolFacility']['storage_for_school_records'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br />
<input type="radio" name="storage_for_school_records" <?php if($baseline_survey['SchoolFacility']['storage_for_school_records'] == 0) { ?>checked="checked" <?php } ?> value="0" >No</input></td></tr>





<tr><td>6. School Management Commitee </td></tr>
<tr><td>6.1 The School has a notified SMC</td><td><input type="radio" name="has_notified_smc" <?php if($baseline_survey['SchoolManagementCommitee']['has_notified_smc'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if($baseline_survey['SchoolManagementCommitee']['has_notified_smc'] == 0) { ?>checked="checked" <?php } ?> name="has_notified_smc" value="0" >No</input></td></tr>
<tr><td>6.2.	Date of SMC notification</td><td><input type="text" value="<?php echo $baseline_survey['SchoolManagementCommitee']['notification_date']?>" name="smc_notification_date" /></td></tr>
<tr><td>6.3.	Number of SMC members by gender</td>
	<td>
		Male<input type="text" value="<?php echo $baseline_survey['SchoolManagementCommitee']['smc_members_male']?>" name="smc_members_male" class="number" /><br />
		Female<input type="text" value="<?php echo $baseline_survey['SchoolManagementCommitee']['smc_members_female']?>" name="smc_members_female" class="number" />
	</td>
</tr>
<tr><td>6.4.	Name of SMC chairperson with CNIC No.</td>
	<td>
		Name:<input type="text" value="<?php echo $baseline_survey['SchoolManagementCommitee']['smc_chairperson_name']?>" name="smc_chairperson_name" /><br />
		CNIC no.<input type="text" value="<?php echo $baseline_survey['SchoolManagementCommitee']['smc_chairperson_cnic']?>" name="smc_chairperson_cnic" class="number" /><br />
		Contact Phone no.<input type="text" value="<?php echo $baseline_survey['SchoolManagementCommitee']['smc_chairperson_phone']?>" name="smc_chairperson_phone" class="number" />
	</td>
</tr>

</table>

<table>
<tr><td>6.5.	Name of the child/children of SMC chairperson (parent) and one other Parent  studying in school</td></tr>
<tr><td>Name of child</td><td>Class</td><td>GR number</td><td>Relationship with SMC CP</td></tr>
<tr>
	<td>
		1. <input type="text" name="smc_relative1_children_name" value="<?php echo $baseline_survey['SchoolManagementCommitee']['smc_relative1_children_name']?>" />
	</td>
	<td>
		<br /><input type="text" name="smc_relative1_children_class" value="<?php echo $baseline_survey['SchoolManagementCommitee']['smc_relative1_children_class']?>" />
	</td>
	<td>
		<br /><input type="text" name="smc_relative1_children_grnumber" value="<?php echo $baseline_survey['SchoolManagementCommitee']['smc_relative1_children_grnumber']?>" />
	</td>
	<td>
		<br /><input type="text" name="smc_relative1_children_relationship" value="<?php echo $baseline_survey['SchoolManagementCommitee']['smc_relative1_children_relationship']?>" />
	</td>
</tr>
<tr>
	<td>
		2. <input type="text" name="smc_relative2_children_name" value="<?php echo $baseline_survey['SchoolManagementCommitee']['smc_relative2_children_name']?>" />
	</td>
	<td>
		<br /><input type="text" name="smc_relative2_children_class" value="<?php echo $baseline_survey['SchoolManagementCommitee']['smc_relative2_children_class']?>" class="number" />
	</td>
	<td>
		<br /><input type="text" name="smc_relative2_children_grnumber" value="<?php echo $baseline_survey['SchoolManagementCommitee']['smc_relative2_children_grnumber']?>" class="number" />
	</td>
	<td>
		<br /><input type="text" name="smc_relative2_children_relationship" value="<?php echo $baseline_survey['SchoolManagementCommitee']['smc_relative2_children_relationship']?>" />
	</td>
</tr>
</table>


<table>
<tr><td>6.6.	Amount of funding received during current/last financial year</td>
	<td>
		Current Year Rs.<input type="text" value="<?php echo $baseline_survey['SchoolManagementCommitee']['funding_recieved_current_year']?>" name="funding_recieved_current_year" class="number" /><br />
		Last Year Rs.<input type="text" value="<?php echo $baseline_survey['SchoolManagementCommitee']['funding_recieved_last_year']?>" name="funding_recieved_last_year" class="number" />
	</td>
</tr>
<tr><td>6.7.	SMC bank account number and the bank</td>
	<td>
		Bank & Branch<input type="text" value="<?php echo $baseline_survey['SchoolManagementCommitee']['smc_bank_branch']?>" name="smc_bank_branch" /><br />
		Account Title<input type="text" value="<?php echo $baseline_survey['SchoolManagementCommitee']['smc_account_title']?>" name="smc_account_title" /><br />
		Account Number<input type="text" value="<?php echo $baseline_survey['SchoolManagementCommitee']['smc_account_number']?>" name="smc_account_number" class="number" />
	</td>
</tr>


<tr><td>6.8.	Benefits obtained from use of Last SMC Funds</td>
	<td>
		<input type="text" value="<?php echo $baseline_survey['SchoolManagementCommitee']['benefits_this_budget1']?>" name="benefits_this_budget1" />
		<input type="text" value="<?php echo $baseline_survey['SchoolManagementCommitee']['benefits_this_budget2']?>" name="benefits_this_budget2" />
		<input type="text" value="<?php echo $baseline_survey['SchoolManagementCommitee']['benefits_this_budget3']?>" name="benefits_this_budget3" />
	</td>
</tr>
<tr><td>6.9.	Benefits obtained from use of current SMC funds</td>
	<td>
		<input type="text" value="<?php echo $baseline_survey['SchoolManagementCommitee']['benefits_last_budget1']?>" name="benefits_last_budget1" />
		<input type="text" value="<?php echo $baseline_survey['SchoolManagementCommitee']['benefits_last_budget2']?>" name="benefits_last_budget2" />
		<input type="text" value="<?php echo $baseline_survey['SchoolManagementCommitee']['benefits_last_budget3']?>" name="benefits_last_budget3" />
	</td>
</tr>

<tr><td>6.10.	Number of SMC meetings/visits to School this year and Last year</td>
	<td>
		This year<input type="text" value="<?php echo $baseline_survey['SchoolManagementCommitee']['smc_visits_this_year']?>" name="smc_visits_this_year" class="number" />
		Last_year<input type="text" value="<?php echo $baseline_survey['SchoolManagementCommitee']['smc_visits_last_year']?>" name="smc_visits_last_year" class="number" />
	</td>
</tr>
<tr><td>6.11.	Community contribution/support to school in any kind/form</td>
	<td>
		<input type="radio" name="community_contribution_to_school" <?php if($baseline_survey['SchoolManagementCommitee']['community_contribution_to_school'] == 1) { ?>checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if($baseline_survey['SchoolManagementCommitee']['community_contribution_to_school'] == 0) { ?>checked="checked" <?php } ?> name="community_contribution_to_school" value="0" >No</input><br />
	</td>
</tr>
<tr><td></td>
	<td>
		a.<input type="text" value="<?php echo $baseline_survey['SchoolManagementCommitee']['community_contribution_to_school1']?>" name="community_contribution_to_school1" /><br />
		b.<input type="text" value="<?php echo $baseline_survey['SchoolManagementCommitee']['community_contribution_to_school2']?>" name="community_contribution_to_school2" /><br />
		c.<input type="text" value="<?php echo $baseline_survey['SchoolManagementCommitee']['community_contribution_to_school3']?>" name="community_contribution_to_school3" /><br />
	</td>
</tr>
<tr><td><input type="submit" value="submit" /></td></tr>
</table>
</form>
<?php } ?>