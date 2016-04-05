<script>
$(function() {
$('#baseline_survey_form').validate();
});
</script>

<table style="width:900px;">
<tr><td colspan="2"><h1><div style="float:left; text-align:center; width:100%; height:30px; background-color:#4455ff; color:#fff;">Add New Baseline Survey</div></h1></td></tr>
<form id="baseline_survey_form" action="<?php echo $this->webroot?>home/submit_baseline_survey" method="post">
<tr><td><strong>Round</strong></td>
	<td>
		<select name="district_code" class="">
		<option value="">Select</option>
		<option value="1">1st</option>
		<option value="2">2nd</option>
		<option value="3">3rd</option>
		<option value="4">4th</option>
		<option value="5">5th</option>
		<option value="6">6th</option>
		<option value="7">7th</option>
		<option value="8">8th</option>
		<option value="9">9th</option>
		</select>
	</td>
</tr>
<tr><td><strong>Type</strong></td>
	<td>
		<select name="district_code" class="">
		<option value="">Select</option>
		<option value="0">Baseline</option>
		<option value="1">Evaluation</option>
		</select>
	</td>
</tr>
<tr><td colspan="2"><h1>1.School Identification</h1></td></tr><input type="hidden" value="<?php echo $school['School']['id']?>" name="school_id" /> <input type="hidden" name="cluster_id" value="<?php echo $school['School']['clusterid']?>" /><input type="hidden" name="semis_code" value="<?php echo $school['School']['code']?>" />
<tr><td><strong>1.1 School Name</strong></td>
	<td>
		<input type="text" value="" name="school_name" class="required"/>
	</td>
</tr>
<tr><td><strong>1.2 Semis Code</strong></td>
	<td>
		<input type="text" value="" name="semis_code" class="number" />
	</td>
</tr>
<tr><td><strong>1.3 Cluster Code</strong></td>
	<td>
		<input name="cluster_code" value="" type="text" class="number"/>
	</td>
</tr>

<tr><td><strong>1.4 Position in cluster</strong></td>
	<td>
		<input type="text" value="" name="cluster_position" class="" />
	</td>
</tr>
<tr><td><strong>1.5 Address</strong></td><td></td></tr>
<tr><td></td><td>village/st<br /><input type="text" value="" name="school_village_st" /></td></tr>
<tr><td></td><td>No. of Households in village/vicinity (street): <br /><input type="text" value="" name="cluster_vicinity_households" /></td></tr>
<tr><td></td><td>Post office<br /><input type="text" value="" name="post_office" /></td></tr>
<tr><td></td><td>Union Council:<br /><input type="text" value="" name="uc_name" /></td></tr>
<tr><td></td><td>Taluka<br /><input type="text" value="" name="taluka" /></td></tr>
<tr><td></td><td>District<br /><input type="text" value="" name="district" /></td></tr>
<tr><td><strong>1.6 Distance</strong></td><td></td></tr>
<tr><td></td><td>distance from guide school to community:<br /><input type="text" value="" name="gs_community_distance" class="number" /></td></tr>
<tr><td>School Name:<input type="text" value="" name="gtng1name" class="" /></td>
	<td>Distance from GS to NG <br />
		
		<input type="text" value="" name="gtng1" class="number" />:Dir<input type="text" value="" name="dir1" class="" />
	</td>
</tr>
<tr><td>School Name:<input type="text" value="" name="gtng2name" class="" /></td>
	<td>Distance from GS to NG <br />
		<input type="text" value="" name="gtng2" class="number" />:Dir<input type="text" value="" name="dir2" class="" />
	</td>
</tr>
<tr><td>School Name:<input type="text" value="" name="gtng3name" class="" /></td>
	<td>Distance from GS to NG <br />
		<input type="text" value="" name="gtng3" class="number" />:Dir<input type="text" value="" name="dir3" class="" />
	</td>
</tr>
<tr><td>School Name:<input type="text" value="" name="gtng4name" class="" /></td>
	<td>Distance from GS to NG <br />
		<input type="text" value="" name="gtng4" class="number" />:Dir<input type="text" value="" name="dir4" class="" />
	</td>
</tr>
<tr><td>School Name:<input type="text" value="" name="gtng5name" class="" /></td>
	<td>Distance from GS to NG <br />
	<input type="text" value="" name="gtng5" class="number" />:Dir<input type="text" value="" name="dir5" class="" />
</td></tr>
<tr><td>School Name:<input type="text" value="" name="gtng6name" class="" /></td>
	<td>Distance from GS to NG <br />
	<input type="text" value="" name="gtng6" class="number" />:Dir<input type="text" value="" name="dir6" class="" />
</td></tr>
<tr><td>School Name:<input type="text" value="" name="gtng7name" class="" /></td>
	<td>Distance from GS to NG <br />
	<input type="text" value="" name="gtng7" class="number" />:Dir<input type="text" value="" name="dir7" class="" />
</td></tr>
<tr><td>School Name:<input type="text" value="" name="gtng8name" class="" /></td>
	<td>Distance from GS to NG <br />
	<input type="text" value="" name="gtng8" class="number" />:Dir<input type="text" value="" name="dir8" class="" />
</td></tr>
<tr><td colspan="2"><strong>1.7 Educational oppurtunities in the periphery of cluster</strong></td></tr>
<tr><td></td><td><strong>Number of Elementary Schools:</strong><br />Boys<input type="text" value="" name="elementary_boys" class="number" />Girls<input type="text" value="" name="elementary_girls" class="number" /></td></tr>
<tr><td></td><td><strong>Number of Secondary/High Schools:</strong><br />Boys<input type="text" value="" name="secondary_boys" class="number" />Girls<input type="text" value="" name="secondary_girls" class="number" /></td></tr>
<tr><td></td><td><strong>Number of Private Schools:</strong><br />Boys<input type="text" value="" name="private_boys" class="number" />Girls<input type="text" value="" name="private_girls" class="number" /></td></tr>
<tr><td></td><td><strong>Number of Other Schools:</strong><br />Boys<input type="text" value="" name="other_boys" class="number" />Girls<input type="text" value="" name="other_girls" class="number" /></td></tr>
<tr><td colspan="2"><strong>2.Basic Information</strong></td></tr>
<tr><td>2.1 Status</td><td><input type="text" value="" name="school_status" /></td></tr>
<tr><td>2.2 Date of stablishment</td><td><input type="text" value="" name="date_of_stablishment" /></td></tr>
<tr><td>2.3 date of construction</td><td><input type="text" value="" name="date_of_construction" /></td></tr>
<tr><td>2.4 school level</td><td><input type="text" value="" name="school_level" /></td></tr>
<tr><td>2.5 Gender of School</td><td><input type="text" value="" name="school_gender" /></td></tr>
<tr><td>2.6 Medium of Instruction</td><td><input type="text" value="" name="medium_of_instruction" /></td></tr>
<tr><td>2.7 Number of Rooms</td><td><input type="text" value="" name="no_of_rooms" class="number" /></td></tr>
<tr><td>2.8 School has recieved annual budget </td><td><input type="radio" name="budget_recieved"  value="1" >Yes</input><br /><input type="radio" name="budget_recieved" value="0" >No</input></td></tr>
<tr><td>2.9 School has bank account</td><td><input type="radio" name="school_account"  value="1" >Yes</input><br /><input type="radio" name="school_account" value="0" >No</input></td></tr>
<tr><td></td><td>bank/branch<br /><input type="text" value="" name="bank_branch" /></td></tr>
<tr><td></td><td>Account Title<br /><input type="text" value="" name="account_title" /></td></tr>
<tr><td></td><td>Account Number<input type="text" value="" name="account_number" class="number" /></td></tr>
<tr><td><strong>2.10 Usage of Rooms</strong></td></tr>
<tr><td></td><td>Total in use:<br /><input type="text" value="" name="total_rooms_inuse" class="number" /></td></tr>
<tr><td></td><td>Classrooms:<br /><input type="text" value="" name="classrooms" class="number" /></td></tr>
<tr><td></td><td>Office:<br /><input type="text" value="" name="office" class="number" /></td></tr>
<tr><td></td><td>Store:<br /><input type="text" value="" name="store" class="number" /></td></tr>
<tr><td></td><td>Unused:<br /><input type="text" value="" name="unused" class="number" /></td></tr>
<tr><td></td><td>Unsafe:<br /><input type="text" value="" name="unsafe" class="number" /></td></tr>
<tr><td></td><td>Other:<br /><input type="text" value="" name="other" class="number" /></td></tr>
<tr><td>2.11 School has middle/elementary school <br />within an approximate distance of 1.5 KM</td><td><input type="radio" name="school_in_range"  value="1" >Yes</input><br /><input type="radio" name="school_in_range" value="0" >No</input></td></tr>
<tr><td>2.12 School has a high school/higher secondary <br />school available within an approximate distance of 1.5 KM</td><td><input type="radio" name="high_school_in_range"  value="1" >Yes</input><br /><input type="radio" name="high_school_in_range" value="0" >No</input></td></tr>

<tr><td><strong>3. RECORDS</strong></td><td></td></tr>
<tr><td>3.1 Teacher Attendance Register</td>
	<td>
		<input type="radio" name="tar_available"  value="1" >Available</input><br />
		<input type="radio" name="tar_available" value="0" >Not available</input><br />
		<input type="radio" name="tar_updated"  value="1" >Updated</input><br />
		<input type="radio" name="tar_updated" value="0" >Not Updated</input></td></tr>
<tr><td>3.2 Teacher level record</td>
	<td>
		<input type="radio" name="tlr_available"  value="1" >Available</input><br />
		<input type="radio" name="tlr_available" value="0" >Not available</input><br />
		<input type="radio" name="tlr_updated"  value="1" >Updated</input><br />
		<input type="radio" name="tlr_updated" value="0" >Not Updated</input>
	</td>
</tr>
<tr><td>3.3 Students attendance register</td>
	<td>
		<input type="radio" name="stu_att_available"  value="1" >Available</input><br />
		<input type="radio" name="stu_att_available" value="0" >Not available</input><br />
		<input type="radio" name="stu_att_updated"  value="1" >Updated</input><br />
		<input type="radio" name="stu_att_updated" value="0" >Not Updated</input>
	</td>
</tr>
<tr><td>3.4 General Register</td>
	<td>
		<input type="radio" name="gr_available"  value="1" >Available</input><br />
		<input type="radio" name="gr_available" value="0" >Not available</input><br />
		<input type="radio" name="gr_updated"  value="1" >Updated</input><br />
		<input type="radio" name="gr_updated" value="0" >Not Updated</input>
	</td>
</tr>
<tr><td>3.5 Examination Result</td>
	<td>
		<input type="radio" name="exam_result_available"  value="1" >Available</input><br />
		<input type="radio" name="exam_result_available" value="0" >Not available</input><br />
		<input type="radio" name="exam_result_updated"  value="1" >Updated</input><br />
		<input type="radio" name="exam_result_updated" value="0" >Not Updated</input>
	</td>
</tr>
<tr><td>3.6 Visitor Book</td>
	<td>
		<input type="radio" name="vb_available"  value="1" >Available</input><br />
		<input type="radio" name="vb_available" value="0" >Not available</input><br />
		<input type="radio" name="vb_updated"  value="1" >Updated</input><br />
		<input type="radio" name="vb_updated" value="0" >Not Updated</input>
	</td>
</tr>
<tr><td>3.7 SEMIS School form</td>
	<td>
		<input type="radio" name="ss_form_available"  value="1" >Available</input><br />
		<input type="radio" name="ss_form_available" value="0" >Not available</input><br />
		<input type="radio" name="ss_form_updated"  value="1" >Updated</input><br />
		<input type="radio" name="ss_form_updated" value="0" >Not Updated</input>
	</td>
</tr>
<tr><td>3.8 Textbook distribution form</td>
	<td>
		<input type="radio" name="tb_distribution_available"  value="1" >Available</input><br />
		<input type="radio" name="tb_distribution_available" value="0" >Not available</input><br />
		<input type="radio" name="tb_distribution_updated"  value="1" >Updated</input><br />
		<input type="radio" name="tb_distribution_updated" value="0" >Not Updated</input>
	</td>
</tr>
<tr><td>3.9 Girls Stipend Record</td>
	<td>
		<input type="radio" name="gs_record_available"  value="1" >Available</input><br />
		<input type="radio" name="gs_record_available" value="0" >Not available</input><br />
		<input type="radio" name="gs_record_updated"  value="1" >Updated</input><br />
		<input type="radio" name="gs_record_updated" value="0" >Not Updated</input>
	</td>
</tr>
<tr><td>3.10 Asset/Stock Register</td>
	<td>
		<input type="radio" name="as_register_available"  value="1" >Available</input><br />
		<input type="radio" name="as_register_available" value="0" >Not available</input><br />
		<input type="radio" name="as_register_updated"  value="1" >Updated</input><br />
		<input type="radio" name="as_register_updated" value="0" >Not Updated</input>
	</td>
</tr>
<tr><td>3.11 SMC Register</td>
	<td>
		<input type="radio" name="smc_register_available"  value="1" >Available</input><br />
		<input type="radio" name="smc_register_available" value="0" >Not available</input><br />
		<input type="radio" name="smc_register_updated"  value="1" >Updated</input><br />
		<input type="radio" name="smc_register_updated" value="0" >Not Updated</input>
	</td>
</tr>
<tr><td>3.12 SMC Records</td><td></td></tr>
<tr><td> 3.12.1 SMC Notification </td>
	<td>
		<input type="radio" name="smc_notif_available"  value="1" >Available</input><br />
		<input type="radio" name="smc_notif_available" value="0" >Not available</input>
	</td>
</tr>
<tr><td> 3.12.2 SMC Guideline </td>
	<td>
		<input type="radio" name="smc_guideline_available"  value="1" >Available</input><br />
		<input type="radio" name="smc_guideline_available" value="0" >Not available</input>
	</td>
</tr>
<tr><td> 3.12.3 SMC Register </td>
	<td>
		<input type="radio" name="smc_register_available"  value="1" >Available</input><br />
		<input type="radio" name="smc_register_available" value="0" >Not available</input>
	</td>
</tr>
<tr><td> 3.12.4 SMC Bank Account Information </td>
	<td>
		<input type="radio" name="smc_accountinfo_available"  value="1" >Available</input><br />
		<input type="radio" name="smc_accountinfo_available" value="0" >Not available</input>
	</td>
</tr>
<tr><td> 3.13 School Improvement Plan(SIP):</td>
	<td>
		<input type="radio" name="sip_available"  value="1" >Available</input><br />
		<input type="radio" name="sip_available" value="0" >Not available</input><br />
		<input type="radio" name="sip_updated"  value="1" >Updated</input><br />
		<input type="radio" name="sip_updated" value="0" >Not Updated</input>
	</td>
</tr>

<tr><td colspan="2"><strong>4.ENROLLMENT AND ATTENDANCE </strong></td></tr>
<tr><td><strong> 4.1 Children </strong></td><td><input type="text" value="" name="" class="number" /></td></tr>
	<tr><td>4.1.1 Grade-wise enrollment this year</td>
		<td><strong>katchi</strong><br />
			Boys<input type="text" value="" name="gwe_katchi_boys" class="number" /><br />
			Girls<input type="text" value="" name="gwe_katchi_girls" class="number" /><br />
			<strong>I</strong><br />
			Boys<input type="text" value="" name="gwe_1_boys" class="number" /><br />
			Girls<input type="text" value="" name="gwe_1_girls" class="number" /><br />
			<strong>II</strong><br />
			Boys<input type="text" value="" name="gwe_2_boys" class="number" /><br />
			Girls<input type="text" value="" name="gwe_2_girls" class="number" /><br />
			<strong>III</strong><br />
			Boys<input type="text" value="" name="gwe_3_boys" class="number" /><br />
			Girls<input type="text" value="" name="gwe_3_girls" class="number" /><br />
			<strong>IV</strong><br />
			Boys<input type="text" value="" name="gwe_4_boys" class="number" /><br />
			Girls<input type="text" value="" name="gwe_4_girls" class="number" /><br />
			<strong>V</strong><br />
			Boys<input type="text" value="" name="gwe_5_boys" class="number" /><br />
			Girls<input type="text" value="" name="gwe_5_girls" class="number" /><br />
			<strong>VI</strong><br />
			Boys<input type="text" value="" name="gwe_6_boys" class="number" /><br />
			Girls<input type="text" value="" name="gwe_6_girls" class="number" /><br />
			<strong>VII</strong><br />
			Boys<input type="text" value="" name="gwe_7_boys" class="number" /><br />
			Girls<input type="text" value="" name="gwe_7_girls" class="number" /><br />
			<strong>VIII</strong><br />
			Boys<input type="text" value="" name="gwe_8_boys" class="number" /><br />
			Girls<input type="text" value="" name="gwe_8_girls" class="number" /><br />
		</td>
	</tr>
		<tr><td>4.1.2 Total enrollment last year</td>
		<td><strong>katchi</strong><br />
			Boys<input type="text" value="" name="tely_katchi_boys" class="number" /><br />
			Girls<input type="text" value="" name="tely_katchi_girls" class="number" /><br />
			<strong>I</strong><br />
			Boys<input type="text" value="" name="tely_1_boys" class="number" /><br />
			Girls<input type="text" value="" name="tely_1_girls" class="number" /><br />
			<strong>II</strong><br />
			Boys<input type="text" value="" name="tely_2_boys" class="number" /><br />
			Girls<input type="text" value="" name="tely_2_girls" class="number" /><br />
			<strong>III</strong><br />
			Boys<input type="text" value="" name="tely_3_boys" class="number" /><br />
			Girls<input type="text" value="" name="tely_3_girls" class="number" /><br />
			<strong>IV</strong><br />
			Boys<input type="text" value="" name="tely_4_boys" class="number" /><br />
			Girls<input type="text" value="" name="tely_4_girls" class="number" /><br />
			<strong>V</strong><br />
			Boys<input type="text" value="" name="tely_5_boys" class="number" /><br />
			Girls<input type="text" value="" name="tely_5_girls" class="number" /><br />
			<strong>VI</strong><br />
			Boys<input type="text" value="" name="tely_6_boys" class="number" /><br />
			Girls<input type="text" value="" name="tely_6_girls" class="number" /><br />
			<strong>VII</strong><br />
			Boys<input type="text" value="" name="tely_7_boys" class="number" /><br />
			Girls<input type="text" value="" name="tely_7_girls" class="number" /><br />
			<strong>VIII</strong><br />
			Boys<input type="text" value="" name="tely_8_boys" class="number" /><br />
			Girls<input type="text" value="" name="tely_8_girls" class="number" /><br />
		</td>
	</tr>
		<tr><td>4.1.3.	Number of children promoted from last year as per examination result</td>
		<td><strong>katchi</strong><br />
			Boys<input type="text" value="" name="ncp_katchi_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncp_katchi_girls" class="number" /><br />
			<strong>I</strong><br />
			Boys<input type="text" value="" name="ncp_1_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncp_1_girls" class="number" /><br />
			<strong>II</strong><br />
			Boys<input type="text" value="" name="ncp_2_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncp_2_girls" class="number" /><br />
			<strong>III</strong><br />
			Boys<input type="text" value="" name="ncp_3_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncp_3_girls" class="number" /><br />
			<strong>IV</strong><br />
			Boys<input type="text" value="" name="ncp_4_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncp_4_girls" class="number" /><br />
			<strong>V</strong><br />
			Boys<input type="text" value="" name="ncp_5_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncp_5_girls" class="number" /><br />
			<strong>VI</strong><br />
			Boys<input type="text" value="" name="ncp_6_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncp_6_girls" class="number" /><br />
			<strong>VII</strong><br />
			Boys<input type="text" value="" name="ncp_7_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncp_7_girls" class="number" /><br />
			<strong>VIII</strong><br />
			Boys<input type="text" value="" name="ncp_8_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncp_8_girls" class="number" /><br />
		</td>
	</tr>
		<tr><td>4.1.4 Number of children repeating the same grade this year</td>
		<td><strong>katchi</strong><br />
			Boys<input type="text" value="" name="ncr_katchi_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncr_katchi_girls" class="number" /><br />
			<strong>I</strong><br />
			Boys<input type="text" value="" name="ncr_1_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncr_1_girls" class="number" /><br />
			<strong>II</strong><br />
			Boys<input type="text" value="" name="ncr_2_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncr_2_girls" class="number" /><br />
			<strong>III</strong><br />
			Boys<input type="text" value="" name="ncr_3_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncr_3_girls" class="number" /><br />
			<strong>IV</strong><br />
			Boys<input type="text" value="" name="ncr_4_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncr_4_girls" class="number" /><br />
			<strong>V</strong><br />
			Boys<input type="text" value="" name="ncr_5_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncr_5_girls" class="number" /><br />
			<strong>VI</strong><br />
			Boys<input type="text" value="" name="ncr_6_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncr_6_girls" class="number" /><br />
			<strong>VII</strong><br />
			Boys<input type="text" value="" name="ncr_7_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncr_7_girls" class="number" /><br />
			<strong>VIII</strong><br />
			Boys<input type="text" value="" name="ncr_8_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncr_8_girls" class="number" /><br />
		</td>
	</tr>
		<tr><td>4.1.5 Number of children transferred to another school based on School GR</td>
		<td><strong>katchi</strong><br />
			Boys<input type="text" value="" name="nctos_katchi_boys" class="number" /><br />
			Girls<input type="text" value="" name="nctos_katchi_girls" class="number" /><br />
			<strong>I</strong><br />
			Boys<input type="text" value="" name="nctos_1_boys" class="number" /><br />
			Girls<input type="text" value="" name="nctos_1_girls" class="number" /><br />
			<strong>II</strong><br />
			Boys<input type="text" value="" name="nctos_2_boys" class="number" /><br />
			Girls<input type="text" value="" name="nctos_2_girls" class="number" /><br />
			<strong>III</strong><br />
			Boys<input type="text" value="" name="nctos_3_boys" class="number" /><br />
			Girls<input type="text" value="" name="nctos_3_girls" class="number" /><br />
			<strong>IV</strong><br />
			Boys<input type="text" value="" name="nctos_4_boys" class="number" /><br />
			Girls<input type="text" value="" name="nctos_4_girls" class="number" /><br />
			<strong>V</strong><br />
			Boys<input type="text" value="" name="nctos_5_boys" class="number" /><br />
			Girls<input type="text" value="" name="nctos_5_girls" class="number" /><br />
			<strong>VI</strong><br />
			Boys<input type="text" value="" name="nctos_6_boys" class="number" /><br />
			Girls<input type="text" value="" name="nctos_6_girls" class="number" /><br />
			<strong>VII</strong><br />
			Boys<input type="text" value="" name="nctos_7_boys" class="number" /><br />
			Girls<input type="text" value="" name="nctos_7_girls" class="number" /><br />
			<strong>VIII</strong><br />
			Boys<input type="text" value="" name="nctos_8_boys" class="number" /><br />
			Girls<input type="text" value="" name="nctos_8_girls" class="number" /><br />
		</td>
	</tr>
		<tr><td>4.1.6 Number of children dropped out this year</td>
		<td><strong>katchi</strong><br />
			Boys<input type="text" value="" name="ncdo_katchi_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncdo_katchi_girls" class="number" /><br />
			<strong>I</strong><br />
			Boys<input type="text" value="" name="ncdo_1_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncdo_1_girls" class="number" /><br />
			<strong>II</strong><br />
			Boys<input type="text" value="" name="ncdo_2_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncdo_2_girls" class="number" /><br />
			<strong>III</strong><br />
			Boys<input type="text" value="" name="ncdo_3_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncdo_3_girls" class="number" /><br />
			<strong>IV</strong><br />
			Boys<input type="text" value="" name="ncdo_4_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncdo_4_girls" class="number" /><br />
			<strong>V</strong><br />
			Boys<input type="text" value="" name="ncdo_5_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncdo_5_girls" class="number" /><br />
			<strong>VI</strong><br />
			Boys<input type="text" value="" name="ncdo_6_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncdo_6_girls" class="number" /><br />
			<strong>VII</strong><br />
			Boys<input type="text" value="" name="ncdo_7_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncdo_7_girls" class="number" /><br />
			<strong>VIII</strong><br />
			Boys<input type="text" value="" name="ncdo_8_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncdo_8_girls" class="number" /><br />
		</td>
	</tr>
		<tr><td>4.1.7.	Grade-wise attendance on the day</td>
		<td><strong>katchi</strong><br />
			Boys<input type="text" value="" name="gwat_katchi_boys" class="number" /><br />
			Girls<input type="text" value="" name="gwat_katchi_girls" class="number" /><br />
			<strong>I</strong><br />
			Boys<input type="text" value="" name="gwat_1_boys" class="number" /><br />
			Girls<input type="text" value="" name="gwat_1_girls" class="number" /><br />
			<strong>II</strong><br />
			Boys<input type="text" value="" name="gwat_2_boys" class="number" /><br />
			Girls<input type="text" value="" name="gwat_2_girls" class="number" /><br />
			<strong>III</strong><br />
			Boys<input type="text" value="" name="gwat_3_boys" class="number" /><br />
			Girls<input type="text" value="" name="gwat_3_girls" class="number" /><br />
			<strong>IV</strong><br />
			Boys<input type="text" value="" name="gwat_4_boys" class="number" /><br />
			Girls<input type="text" value="" name="gwat_4_girls" class="number" /><br />
			<strong>V</strong><br />
			Boys<input type="text" value="" name="gwat_5_boys" class="number" /><br />
			Girls<input type="text" value="" name="gwat_5_girls" class="number" /><br />
			<strong>VI</strong><br />
			Boys<input type="text" value="" name="gwat_6_boys" class="number" /><br />
			Girls<input type="text" value="" name="gwat_6_girls" class="number" /><br />
			<strong>VII</strong><br />
			Boys<input type="text" value="" name="gwat_7_boys" class="number" /><br />
			Girls<input type="text" value="" name="gwat_7_girls" class="number" /><br />
			<strong>VIII</strong><br />
			Boys<input type="text" value="" name="gwat_8_boys" class="number" /><br />
			Girls<input type="text" value="" name="gwat_8_girls" class="number" /><br />
		</td>
	</tr>
		<tr><td>4.1.8 Number of children not attending for last one month</td>
		<td><strong>katchi</strong><br />
			Boys<input type="text" value="" name="ncna_katchi_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncna_katchi_girls" class="number" /><br />
			<strong>I</strong><br />
			Boys<input type="text" value="" name="ncna_1_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncna_1_girls" class="number" /><br />
			<strong>II</strong><br />
			Boys<input type="text" value="" name="ncna_2_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncna_2_girls" class="number" /><br />
			<strong>III</strong><br />
			Boys<input type="text" value="" name="ncna_3_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncna_3_girls" class="number" /><br />
			<strong>IV</strong><br />
			Boys<input type="text" value="" name="ncna_4_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncna_4_girls" class="number" /><br />
			<strong>V</strong><br />
			Boys<input type="text" value="" name="ncna_5_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncna_5_girls" class="number" /><br />
			<strong>VI</strong><br />
			Boys<input type="text" value="" name="ncna_6_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncna_6_girls" class="number" /><br />
			<strong>VII</strong><br />
			Boys<input type="text" value="" name="ncna_7_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncna_7_girls" class="number" /><br />
			<strong>VIII</strong><br />
			Boys<input type="text" value="" name="ncna_8_boys" class="number" /><br />
			Girls<input type="text" value="" name="ncna_8_girls" class="number" /><br />
		</td>
	</tr>
		<tr><td>4.1.9 Average attendance of the last month</td>
		<td><strong>katchi</strong><br />
			Boys<input type="text" value="" name="aalm_katchi_boys" class="number" /><br />
			Girls<input type="text" value="" name="aalm_katchi_girls" class="number" /><br />
			<strong>I</strong><br />
			Boys<input type="text" value="" name="aalm_1_boys" class="number" /><br />
			Girls<input type="text" value="" name="aalm_1_girls" class="number" /><br />
			<strong>II</strong><br />
			Boys<input type="text" value="" name="aalm_2_boys" class="number" /><br />
			Girls<input type="text" value="" name="aalm_2_girls" class="number" /><br />
			<strong>III</strong><br />
			Boys<input type="text" value="" name="aalm_3_boys" class="number" /><br />
			Girls<input type="text" value="" name="aalm_3_girls" class="number" /><br />
			<strong>IV</strong><br />
			Boys<input type="text" value="" name="aalm_4_boys" class="number" /><br />
			Girls<input type="text" value="" name="aalm_4_girls" class="number" /><br />
			<strong>V</strong><br />
			Boys<input type="text" value="" name="aalm_5_boys" class="number" /><br />
			Girls<input type="text" value="" name="aalm_5_girls" class="number" /><br />
			<strong>VI</strong><br />
			Boys<input type="text" value="" name="aalm_6_boys" class="number" /><br />
			Girls<input type="text" value="" name="aalm_6_girls" class="number" /><br />
			<strong>VII</strong><br />
			Boys<input type="text" value="" name="aalm_7_boys" class="number" /><br />
			Girls<input type="text" value="" name="aalm_7_girls" class="number" /><br />
			<strong>VIII</strong><br />
			Boys<input type="text" value="" name="aalm_8_boys" class="number" /><br />
			Girls<input type="text" value="" name="aalm_8_girls" class="number" /><br />
		</td>
	</tr>
	
<tr><td><strong>4.2 Number of teachers posted in the school</strong></td>
	<td>
		Sanctioned <br /><input type="text" value="" name="teachers_sanctioned" class="number" />
		Working<br /><input type="text" value="" name="teachers_working" class="number" />
		Present<br /><input type="text" value="" name="teachers_present" class="number" />
		On leave<br /><input type="text" value="" name="teachers_onleave" class="number" />
		On derailment<br /><input type="text" value="" name="teachers_onderailment" class="number" />
		On contract<br /><input type="text" value="" name="teachers_oncontract" class="number" />
		WB<br /><input type="text" value="" name="teachers_wb" class="number" />
		NCHD<br /><input type="text" value="" name="teachers_nchd" class="number" />
		Unicef<br /><input type="text" value="" name="teachers_unicef" class="number" />
		SMC<br /><input type="text" value="" name="teachers_smc" class="number" />
		Any Other<br /><input type="text" value="" name="teachers_anyother" class="number" />
		Other<br /><input type="text" value="" name="teachers_other" class="number" />
	</td>
</tr>

<tr><td>4.2.2 Basic information of the staff</td><td></td></tr>
<tr><td>Name of the Staff</td><td>CNIC Number</td><td>Personal number<br />by the AG office</td></tr>
	<tr><td>1.<input type="text" value="" name="staff1_name" /></td>
	<td><br /><input type="text" value="" name="staff1_cnic" class="number" /></td>
	<td><br /><input type="text" value="" name="staff1_pnumber" class="number" /></td>
</tr>
<tr>
	<td>2.<input type="text" value="" name="staff2_name" /></td>
	<td><br /><input type="text" value="" name="staff2_cnic" class="number" /></td>
	<td><br /><input type="text" value="" name="staff2_pnumber" class="number" /></td>
</tr>
<tr>
	<td>3.<input type="text" value="" name="staff3_name" /></td>
	<td><br /><input type="text" value="" name="staff3_cnic" class="number" /></td>
	<td><br /><input type="text" value="" name="staff3_pnumber" class="number" /></td>
</tr>
<tr><td>4.<input type="text" value="" name="staff4_name" /></td><td><br /><input type="text" value="" name="staff4_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff4_pnumber" class="number" /></td></tr>
<tr><td>5.<input type="text" value="" name="staff5_name" /></td><td><br /><input type="text" value="" name="staff5_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff5_pnumber" class="number" /></td></tr>
<tr><td>6.<input type="text" value="" name="staff6_name" /></td><td><br /><input type="text" value="" name="staff6_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff6_pnumber" class="number" /></td></tr>
<tr><td>7.<input type="text" value="" name="staff7_name" /></td><td><br /><input type="text" value="" name="staff7_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff7_pnumber" class="number" /></td></tr>
<tr><td>8.<input type="text" value="" name="staff8_name" /></td><td><br /><input type="text" value="" name="staff8_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff8_pnumber" class="number" /></td></tr>
<tr><td>9.<input type="text" value="" name="staff9_name" /></td><td><br /><input type="text" value="" name="staff9_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff9_pnumber" class="number" /></td></tr>
<tr><td>10.<input type="text" value="" name="staff10_name" /></td><td><br /><input type="text" value="" name="staff10_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff10_pnumber" class="number" /></td></tr>
<tr><td>11.<input type="text" value="" name="staff11_name" /></td><td><br /><input type="text" value="" name="staff11_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff11_pnumber" class="number" /></td></tr>
<tr><td>12.<input type="text" value="" name="staff12_name" /></td><td><br /><input type="text" value="" name="staff12_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff12_pnumber" class="number" /></td></tr>
<tr><td>13.<input type="text" value="" name="staff13_name" /></td><td><br /><input type="text" value="" name="staff13_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff13_pnumber" class="number" /></td></tr>
<tr><td>14.<input type="text" value="" name="staff14_name" /></td><td><br /><input type="text" value="" name="staff14_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff14_pnumber" class="number" /></td></tr>
<tr><td>15.<input type="text" value="" name="staff15_name" /></td><td><br /><input type="text" value="" name="staff15_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff15_pnumber" class="number" /></td></tr>
<tr><td>16.<input type="text" value="" name="staff16_name" /></td><td><br /><input type="text" value="" name="staff16_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff16_pnumber" class="number" /></td></tr>
<tr><td>17.<input type="text" value="" name="staff17_name" /></td><td><br /><input type="text" value="" name="staff17_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff17_pnumber" class="number" /></td></tr>
<tr><td>18.<input type="text" value="" name="staff18_name" /></td><td><br /><input type="text" value="" name="staff18_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff18_pnumber" class="number" /></td></tr>
<tr><td>19.<input type="text" value="" name="staff19_name" /></td><td><br /><input type="text" value="" name="staff19_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff19_pnumber" class="number" /></td></tr>
<tr><td>20.<input type="text" value="" name="staff20_name" /></td><td><br /><input type="text" value="" name="staff20_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff20_pnumber" class="number" /></td></tr>
<tr><td>21.<input type="text" value="" name="staff21_name" /></td><td><br /><input type="text" value="" name="staff21_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff21_pnumber" class="number" /></td></tr>
<tr><td>22.<input type="text" value="" name="staff22_name" /></td><td><br /><input type="text" value="" name="staff22_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff22_pnumber" class="number" /></td></tr>
<tr><td>23.<input type="text" value="" name="staff23_name" /></td><td><br /><input type="text" value="" name="staff23_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff23_pnumber" class="number" /></td></tr>
<tr><td>24.<input type="text" value="" name="staff24_name" /></td><td><br /><input type="text" value="" name="staff24_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff24_pnumber" class="number" /></td></tr>
<tr><td>25.<input type="text" value="" name="staff25_name" /></td><td><br /><input type="text" value="" name="staff25_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff25_pnumber" class="number" /></td></tr>
<tr><td>26.<input type="text" value="" name="staff26_name" /></td><td><br /><input type="text" value="" name="staff26_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff26_pnumber" class="number" /></td></tr>
<tr><td>27.<input type="text" value="" name="staff27_name" /></td><td><br /><input type="text" value="" name="staff27_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff27_pnumber" class="number" /></td></tr>
<tr><td>28.<input type="text" value="" name="staff28_name" /></td><td><br /><input type="text" value="" name="staff28_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff28_pnumber" class="number" /></td></tr>
<tr><td>29.<input type="text" value="" name="staff29_name" /></td><td><br /><input type="text" value="" name="staff29_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff29_pnumber" class="number" /></td></tr>
<tr><td>30.<input type="text" value="" name="staff30_name" /></td><td><br /><input type="text" value="" name="staff30_cnic" class="number" /></td><td><br /><input type="text" value="" name="staff30_pnumber" class="number" /></td></tr>
</table>
<table style="width:1500px;">
<tr><td>4.2.34.2.3.	Attendance of each of the teacher(s) for last three months (except for the current month)<br /><br />Note: Please use additional sheet in case of more teachers in school</td></tr>
<tr><td>name of the teacher</td><td><div style="text-align:center;">M1</div></td><td><div style="text-align:center;">M2</div></td><td><div style="text-align:center;">M3</div></td></tr>
<tr>
	<td>1.<input type="text" value="" name="name_teacher1_att" /></td>
	<td>WD<input type="text" value="" name="m1_teacher1_wd" class="number" />PT<input type="text" value="" name="m1_teacher1_pt" class="number" /></td>
	<td>WD<input type="text" value="" name="m2_teacher1_wd" class="number" />PT<input type="text" value="" name="m2_teacher1_pt" class="number" /></td>
	<td>WD<input type="text" value="" name="m3_teacher1_wd" class="number" />PT<input type="text" value="" name="m3_teacher1_pt" class="number" /></td>
</tr>
<tr><td>2.<input type="text" value="" name="name_teacher2_att" /></td><td>WD<input type="text" value="" name="m1_teacher2_wd" class="number" />PT<input type="text" value="" name="m1_teacher2_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher2_wd" class="number" />PT<input type="text" value="" name="m2_teacher2_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher2_wd" class="number" />PT<input type="text" value="" name="m1_teacher2_pt" class="number" /></td></tr>
<tr><td>3.<input type="text" value="" name="name_teacher3_att" /></td><td>WD<input type="text" value="" name="m1_teacher3_wd" class="number" />PT<input type="text" value="" name="m1_teacher3_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher3_wd" class="number" />PT<input type="text" value="" name="m2_teacher3_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher3_wd" class="number" />PT<input type="text" value="" name="m3_teacher3_pt" class="number" /></td></tr>
<tr><td>4.<input type="text" value="" name="name_teacher4_att" /></td><td>WD<input type="text" value="" name="m1_teacher4_wd" class="number" />PT<input type="text" value="" name="m1_teacher4_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher4_wd" class="number" />PT<input type="text" value="" name="m2_teacher4_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher4_wd" class="number" />PT<input type="text" value="" name="m3_teacher4_pt" class="number" /></td></tr>
<tr><td>5.<input type="text" value="" name="name_teacher5_att" /></td><td>WD<input type="text" value="" name="m1_teacher5_wd" class="number" />PT<input type="text" value="" name="m1_teacher5_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher5_wd" class="number" />PT<input type="text" value="" name="m2_teacher5_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher5_wd" class="number" />PT<input type="text" value="" name="m3_teacher5_pt" class="number" /></td></tr>
<tr><td>6.<input type="text" value="" name="name_teacher6_att" /></td><td>WD<input type="text" value="" name="m1_teacher6_wd" class="number" />PT<input type="text" value="" name="m1_teacher6_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher6_wd" class="number" />PT<input type="text" value="" name="m2_teacher6_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher6_wd" class="number" />PT<input type="text" value="" name="m3_teacher6_pt" class="number" /></td></tr>
<tr><td>7.<input type="text" value="" name="name_teacher7_att" /></td><td>WD<input type="text" value="" name="m1_teacher7_wd" class="number" />PT<input type="text" value="" name="m1_teacher7_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher7_wd" class="number" />PT<input type="text" value="" name="m2_teacher7_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher7_wd" class="number" />PT<input type="text" value="" name="m3_teacher7_pt" class="number" /></td></tr>
<tr><td>8.<input type="text" value="" name="name_teacher8_att" /></td><td>WD<input type="text" value="" name="m1_teacher8_wd" class="number" />PT<input type="text" value="" name="m1_teacher8_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher8_wd" class="number" />PT<input type="text" value="" name="m2_teacher8_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher8_wd" class="number" />PT<input type="text" value="" name="m3_teacher8_pt" class="number" /></td></tr>
<tr><td>9.<input type="text" value="" name="name_teacher9_att" /></td><td>WD<input type="text" value="" name="m1_teacher9_wd" class="number" />PT<input type="text" value="" name="m1_teacher9_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher9_wd" class="number" />PT<input type="text" value="" name="m2_teacher9_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher9_wd" class="number" />PT<input type="text" value="" name="m3_teacher9_pt" class="number" /></td></tr>
<tr><td>10.<input type="text" value="" name="name_teacher10_att" /></td><td>WD<input type="text" value="" name="m1_teacher10_wd" class="number" />PT<input type="text" value="" name="m1_teacher10_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher10_wd" class="number" />PT<input type="text" value="" name="m2_teacher10_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher10_wd" class="number" />PT<input type="text" value="" name="m3_teacher10_pt" class="number" /></td></tr>
<tr><td>11.<input type="text" value="" name="name_teacher11_att" /></td><td>WD<input type="text" value="" name="m1_teacher11_wd" class="number" />PT<input type="text" value="" name="m1_teacher11_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher11_wd" class="number" />PT<input type="text" value="" name="m2_teacher11_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher11_wd" class="number" />PT<input type="text" value="" name="m3_teacher11_pt" class="number" /></td></tr>
<tr><td>12.<input type="text" value="" name="name_teacher12_att" /></td><td>WD<input type="text" value="" name="m1_teacher12_wd" class="number" />PT<input type="text" value="" name="m1_teacher12_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher12_wd" class="number" />PT<input type="text" value="" name="m2_teacher12_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher12_wd" class="number" />PT<input type="text" value="" name="m3_teacher12_pt" class="number" /></td></tr>
<tr><td>13.<input type="text" value="" name="name_teacher13_att" /></td><td>WD<input type="text" value="" name="m1_teacher13_wd" class="number" />PT<input type="text" value="" name="m1_teacher13_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher13_wd" class="number" />PT<input type="text" value="" name="m2_teacher13_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher13_wd" class="number" />PT<input type="text" value="" name="m3_teacher13_pt" class="number" /></td></tr>
<tr><td>14.<input type="text" value="" name="name_teacher14_att" /></td><td>WD<input type="text" value="" name="m1_teacher14_wd" class="number" />PT<input type="text" value="" name="m1_teacher14_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher14_wd" class="number" />PT<input type="text" value="" name="m2_teacher14_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher14_wd" class="number" />PT<input type="text" value="" name="m3_teacher14_pt" class="number" /></td></tr>
<tr><td>15.<input type="text" value="" name="name_teacher15_att" /></td><td>WD<input type="text" value="" name="m1_teacher15_wd" class="number" />PT<input type="text" value="" name="m1_teacher15_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher15_wd" class="number" />PT<input type="text" value="" name="m2_teacher15_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher15_wd" class="number" />PT<input type="text" value="" name="m3_teacher15_pt" class="number" /></td></tr>
<tr><td>16.<input type="text" value="" name="name_teacher16_att" /></td><td>WD<input type="text" value="" name="m1_teacher16_wd" class="number" />PT<input type="text" value="" name="m1_teacher16_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher16_wd" class="number" />PT<input type="text" value="" name="m2_teacher16_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher16_wd" class="number" />PT<input type="text" value="" name="m3_teacher16_pt" class="number" /></td></tr>
<tr><td>17.<input type="text" value="" name="name_teacher17_att" /></td><td>WD<input type="text" value="" name="m1_teacher17_wd" class="number" />PT<input type="text" value="" name="m1_teacher17_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher17_wd" class="number" />PT<input type="text" value="" name="m2_teacher17_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher17_wd" class="number" />PT<input type="text" value="" name="m3_teacher17_pt" class="number" /></td></tr>
<tr><td>18.<input type="text" value="" name="name_teacher18_att" /></td><td>WD<input type="text" value="" name="m1_teacher18_wd" class="number" />PT<input type="text" value="" name="m1_teacher18_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher18_wd" class="number" />PT<input type="text" value="" name="m2_teacher18_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher18_wd" class="number" />PT<input type="text" value="" name="m3_teacher18_pt" class="number" /></td></tr>
<tr><td>19.<input type="text" value="" name="name_teacher19_att" /></td><td>WD<input type="text" value="" name="m1_teacher19_wd" class="number" />PT<input type="text" value="" name="m1_teacher19_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher19_wd" class="number" />PT<input type="text" value="" name="m2_teacher19_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher19_wd" class="number" />PT<input type="text" value="" name="m3_teacher19_pt" class="number" /></td></tr>
<tr><td>20.<input type="text" value="" name="name_teacher20_att" /></td><td>WD<input type="text" value="" name="m1_teacher20_wd" class="number" />PT<input type="text" value="" name="m1_teacher20_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher20_wd" class="number" />PT<input type="text" value="" name="m2_teacher20_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher20_wd" class="number" />PT<input type="text" value="" name="m3_teacher20_pt" class="number" /></td></tr>
<tr><td>21.<input type="text" value="" name="name_teacher21_att" /></td><td>WD<input type="text" value="" name="m1_teacher21_wd" class="number" />PT<input type="text" value="" name="m1_teacher21_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher21_wd" class="number" />PT<input type="text" value="" name="m2_teacher21_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher21_wd" class="number" />PT<input type="text" value="" name="m3_teacher21_pt" class="number" /></td></tr>
<tr><td>22.<input type="text" value="" name="name_teacher22_att" /></td><td>WD<input type="text" value="" name="m1_teacher22_wd" class="number" />PT<input type="text" value="" name="m1_teacher22_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher22_wd" class="number" />PT<input type="text" value="" name="m2_teacher22_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher22_wd" class="number" />PT<input type="text" value="" name="m3_teacher22_pt" class="number" /></td></tr>
<tr><td>23.<input type="text" value="" name="name_teacher23_att" /></td><td>WD<input type="text" value="" name="m1_teacher23_wd" class="number" />PT<input type="text" value="" name="m1_teacher23_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher23_wd" class="number" />PT<input type="text" value="" name="m2_teacher23_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher23_wd" class="number" />PT<input type="text" value="" name="m3_teacher23_pt" class="number" /></td></tr>
<tr><td>24.<input type="text" value="" name="name_teacher24_att" /></td><td>WD<input type="text" value="" name="m1_teacher24_wd" class="number" />PT<input type="text" value="" name="m1_teacher24_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher24_wd" class="number" />PT<input type="text" value="" name="m2_teacher24_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher24_wd" class="number" />PT<input type="text" value="" name="m3_teacher24_pt" class="number" /></td></tr>
<tr><td>25.<input type="text" value="" name="name_teacher25_att" /></td><td>WD<input type="text" value="" name="m1_teacher25_wd" class="number" />PT<input type="text" value="" name="m1_teacher25_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher25_wd" class="number" />PT<input type="text" value="" name="m2_teacher25_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher25_wd" class="number" />PT<input type="text" value="" name="m3_teacher25_pt" class="number" /></td></tr>
<tr><td>26.<input type="text" value="" name="name_teacher26_att" /></td><td>WD<input type="text" value="" name="m1_teacher26_wd" class="number" />PT<input type="text" value="" name="m1_teacher26_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher26_wd" class="number" />PT<input type="text" value="" name="m2_teacher26_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher26_wd" class="number" />PT<input type="text" value="" name="m3_teacher26_pt" class="number" /></td></tr>
<tr><td>27.<input type="text" value="" name="name_teacher27_att" /></td><td>WD<input type="text" value="" name="m1_teacher27_wd" class="number" />PT<input type="text" value="" name="m1_teacher27_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher27_wd" class="number" />PT<input type="text" value="" name="m2_teacher27_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher27_wd" class="number" />PT<input type="text" value="" name="m3_teacher27_pt" class="number" /></td></tr>
<tr><td>28.<input type="text" value="" name="name_teacher28_att" /></td><td>WD<input type="text" value="" name="m1_teacher28_wd" class="number" />PT<input type="text" value="" name="m1_teacher28_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher28_wd" class="number" />PT<input type="text" value="" name="m2_teacher28_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher28_wd" class="number" />PT<input type="text" value="" name="m3_teacher28_pt" class="number" /></td></tr>
<tr><td>29.<input type="text" value="" name="name_teacher29_att" /></td><td>WD<input type="text" value="" name="m1_teacher29_wd" class="number" />PT<input type="text" value="" name="m1_teacher29_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher29_wd" class="number" />PT<input type="text" value="" name="m2_teacher29_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher29_wd" class="number" />PT<input type="text" value="" name="m3_teacher29_pt" class="number" /></td></tr>
<tr><td>30.<input type="text" value="" name="name_teacher30_att" /></td><td>WD<input type="text" value="" name="m1_teacher30_wd" class="number" />PT<input type="text" value="" name="m1_teacher30_pt" class="number" /></td><td>WD<input type="text" value="" name="m2_teacher30_wd" class="number" />PT<input type="text" value="" name="m2_teacher30_pt" class="number" /></td><td>WD<input type="text" value="" name="m3_teacher30_wd" class="number" />PT<input type="text" value="" name="m3_teacher30_pt" class="number" /></td></tr>

</table>

<table>
<tr><td>5. School Facilities</td></tr>

<tr><td>5.1 Toilets</td></tr>
<tr>
	<td>5.1.1 Toilets Available to students</td><td>
	<input type="radio" name="toilets_available"  value="1" >Yes</input><br />
	<input type="radio" name="toilets_available" value="0" >No</input></td></tr>
<tr><td>5.1.2 Number of Toilets or WCs available</td><td><input type="text" value="" name="no_of_toilets" class="number" /></td></tr>
<tr><td>5.1.3 The toilet clean with no smell </td><td><input type="radio" name="toilet_cleanliness"  value="1" >Yes</input><br /><input type="radio" name="toilet_cleanliness" value="0" >No</input></td></tr>
<tr><td>5.1.4 A door for toilet that closes</td><td><input type="radio" name="toilet_closing_door"  value="1" >Yes</input><br /><input type="radio" name="toilet_closing_door" value="0" >No</input></td></tr>
<tr><td>5.1.5 Water available in toilet for for flushing and hand washing</td><td><input type="radio" name="water_available_in_toilet"  value="1" >Yes</input><br /><input type="radio" name="water_available_in_toilet" value="0" >No</input></td></tr>
<tr><td>5.1.6 Adequate drainage (disposal/septic tank)</td><td><input type="radio" name="toilet_drainage"  value="1" >Yes</input><br /><input type="radio" name="toilet_drainage" value="0" >No</input></td></tr>

<tr><td>5.2 Water Provision</td></tr>
<tr><td>5.2.1 Water available inside school</td><td><input type="radio" name="water_available_in_school"  value="1" >Yes</input><br /><input type="radio" name="water_available_in_school" value="0" >No</input></td></tr>
<tr><td>5.2.2 Source of water</td><td><input type="radio" name="water_source_type"  value="1" >Hand Pump</input><br /><input type="radio" name="water_source_type" value="2" >Motor Operated</input><br /><input type="radio" name="water_source_type" value="3" >Hand Carry</input></td></tr>
<tr><td>5.2.3 Water is clean and drinkable</td><td><input type="radio" name="water_drinkable"  value="1" >Yes</input><br /><input type="radio" name="water_drinkable" value="0" >No</input></td></tr>
<tr><td>5.2.4 Drinking water accesible to children</td><td><input type="radio" name="water_accessible_to_children"  value="1" >Yes</input><br /><input type="radio" name="water_accessible_to_children" value="0" >No</input></td></tr>
<tr><td>5.2.5 Enough water for all purposes</td><td><input type="radio" name="water_for_all_purpose"  value="1" >Yes</input><br /><input type="radio" name="water_for_all_purpose" value="0" >No</input></td></tr>

<tr><td>5.3 Electricity and Fixtures</td></tr>
<tr><td>5.3.1 The School has electricity</td><td><input type="radio" name="school_has_electricity"  value="1" >Yes</input><br /><input type="radio" name="school_has_electricity" value="0" >No</input></td></tr>
<tr><td>5.3.2 Electricity wiring installed </td><td><input type="radio" name="electricity_wiring_installed"  value="1" >Yes</input><br /><input type="radio" name="electricity_wiring_installed" value="0" >No</input></td></tr>
<tr><td>5.3.3 Electricity is on right now</td><td><input type="radio" name="electricity_on_right_now"  value="1" >Yes</input><br /><input type="radio" name="electricity_on_right_now" value="0" >No</input></td></tr>
<tr><td>5.3.4 Formal Electricity meter installed</td><td><input type="radio" name="electricity_meter_installed"  value="1" >Yes</input><br /><input type="radio" name="electricity_meter_installed" value="0" >No</input></td></tr>
<tr><td>5.3.5 During an average school day, number of hours electricity available</td><td><input type="text" value="" name="electricity_available_for " class="number" /></td></tr>


<tr><td>5.4 Services, maintainance and safety</td></tr>
<tr><td>5.4.1 Any broken window or window panes</td><td><input type="radio" name="broken_window_panes"  value="1" >Yes</input><br /><input type="radio" name="broken_window_panes" value="0" >No</input></td></tr>
<tr><td>5.4.2 Any crack in the walls </td><td><input type="radio" name="cracks_in_wall"  value="1" >Yes</input><br /><input type="radio" name="cracks_in_wall" value="0" >No</input></td></tr>
<tr><td>5.4.3 Garbage lying around</td><td><input type="radio" name="garbage_lying_around"  value="1" >Yes</input><br /><input type="radio" name="garbage_lying_around" value="0" >No</input></td></tr>
<tr><td>5.4.4 Any signs of leakage in the ceiling</td><td><input type="radio" name="leakage_in_ceiling"  value="1" >Yes</input><br /><input type="radio" name="leakage_in_ceiling" value="0" >No</input></td></tr>
<tr><td>5.4.5 Any cracks in the ceiling</td><td><input type="radio" name="cracks_in_ceiling"  value="1" >Yes</input><br /><input type="radio" name="cracks_in_ceiling" value="0" >No</input></td></tr>


<tr><td>5.5 Classroom Situation</td></tr>
<tr><td>5.5.1 Classroom adequately ventilated </td><td><input type="radio" name="classroom_ventilated"  value="1" >Yes</input><br /><input type="radio" name="classroom_ventilated" value="0" >No</input></td></tr>
<tr><td>5.5.2 Enough light (natural/artificial) to read easily </td><td><input type="radio" name="light_availability"  value="1" >Yes</input><br /><input type="radio" name="light_availability" value="0" >No</input></td></tr>
<tr><td>5.5.3 Temperature of the room reasonably bearable</td><td><input type="radio" name="temperature_reasonably_bearable"  value="1" >Yes</input><br /><input type="radio" name="temperature_reasonably_bearable" value="0" >No</input></td></tr>
<tr><td>5.5.4 Children seatd in comfortable manner</td><td><input type="radio" name="children_seated_comfortably"  value="1" >Yes</input><br /><input type="radio" name="children_seated_comfortably" value="0" >No</input></td></tr>
<tr><td>5.5.5.	Time table available</td><td><input type="radio" name="time_table_available"  value="1" >Yes</input><br /><input type="radio" name="time_table_available" value="0" >No</input></td></tr>
<tr><td>5.5.6.	Any information related to student achievement available</td><td><input type="radio" name="student_achievement_info"  value="1" >Yes</input><br /><input type="radio" name="student_achievement_info" value="0" >No</input></td></tr>



<tr><td>5.6.	Outdoor space</td></tr>
<tr><td>5.6.1.	Boundary wall around the school</td><td><input type="radio" name="boundary_wall"  value="1" >Yes</input><br /><input type="radio" name="boundary_wall" value="0" >No</input></td></tr>
<tr><td>5.6.2.	Gate installed and functional </td><td><input type="radio" name="gate_installed"  value="1" >Yes</input><br /><input type="radio" name="gate_installed" value="0" >No</input></td></tr>
<tr><td>5.6.3.	Sufficient space for children to play</td><td><input type="radio" name="children_playing_space"  value="1" >Yes</input><br /><input type="radio" name="children_playing_space" value="0" >No</input></td></tr>
<tr><td>5.6.4.	Any plantation in the school</td><td><input type="radio" name="plantation_in_school"  value="1" >Yes</input><br /><input type="radio" name="plantation_in_school" value="0" >No</input></td></tr>
<tr><td>5.6.5.	Any hazards (e.g. ditches, broken glass, etc.)</td><td><input type="radio" name="hazards_around"  value="1" >Yes</input><br /><input type="radio" name="hazards_around" value="0" >No</input></td></tr>
<tr><td>5.6.6.	Regular Assembly  </td><td><input type="radio" name="regular_assembly"  value="1" >Yes</input><br /><input type="radio" name="regular_assembly" value="0" >No</input></td></tr>
<tr><td>5.6.7.	Any co-curricular activity organized during last quarter </td>
	<td>
		<input type="radio" name="extracurricular_activity_lastquarter"  value="1" >Yes</input><br /><input type="radio" name="extracurricular_activity_lastquarter" value="0" >No</input><br />
		1.<input type="text" value="" name="extra_curricular_activity1" /><br />
		2.<input type="text" value="" name="extra_curricular_activity2" /><br />
		3.<input type="text" value="" name="extra_curricular_activity3" /><br />
		4.<input type="text" value="" name="extra_curricular_activity4" /><br />
	</td>
</tr>


<tr><td>5.7 Furniture and fixtures</td></tr>
<tr><td>5.7.1 Number of desks/chairs for children</td><td><input type="text" value="" name="number_of_desks_for_children" class="number" /></td></tr>
<tr><td>5.7.2.	All classrooms have blackboard (well painted and functional) </td><td><input type="radio" name="blackboard_well_painted"  value="1" >Yes</input><br /><input type="radio" name="blackboard_well_painted" value="0" >No</input></td></tr>
<tr><td>5.7.3.	Cabinets or any other alternate storage for school records </td><td><input type="radio" name="storage_for_school_records"  value="1" >Yes</input><br /><input type="radio" name="storage_for_school_records" value="0" >No</input></td></tr>





<tr><td>6. School Management Commitee </td></tr>
<tr><td>6.1 The School has a notified SMC</td><td><input type="radio" name="has_notified_smc"  value="1" >Yes</input><br /><input type="radio" name="has_notified_smc" value="0" >No</input></td></tr>
<tr><td>6.2.	Date of SMC notification</td><td><input type="text" value="" name="smc_notification_date" /></td></tr>
<tr><td>6.3.	Number of SMC members by gender</td>
	<td>
		Male<input type="text" value="" name="smc_members_male" class="number" /><br />
		Female<input type="text" value="" name="smc_members_female" class="number" />
	</td>
</tr>
<tr><td>6.4.	Name of SMC chairperson with CNIC No.</td>
	<td>
		Name:<input type="text" value="" name="smc_chairperson_name" /><br />
		CNIC no.<input type="text" value="" name="smc_chairperson_cnic" class="number" /><br />
		Contact Phone no.<input type="text" value="" name="smc_chairperson_phone" class="number" />
	</td>
</tr>

</table>

<table>
<tr><td>6.5.	Name of the child/children of SMC chairperson (parent) and one other Parent  studying in school</td></tr>
<tr><td>Name of child</td><td>Class</td><td>GR number</td><td>Relationship with SMC CP</td></tr>
<tr>
	<td>
		1. <input type="text" name="smc_relative1_children_name" value="" />
	</td>
	<td>
		<br /><input type="text" name="smc_relative1_children_class" value="" />
	</td>
	<td>
		<br /><input type="text" name="smc_relative1_children_grnumber" value="" />
	</td>
	<td>
		<br /><input type="text" name="smc_relative1_children_relationship" value="" />
	</td>
</tr>
<tr>
	<td>
		2. <input type="text" name="smc_relative2_children_name" value="" />
	</td>
	<td>
		<br /><input type="text" name="smc_relative2_children_class" value="" class="number" />
	</td>
	<td>
		<br /><input type="text" name="smc_relative2_children_grnumber" value="" class="number" />
	</td>
	<td>
		<br /><input type="text" name="smc_relative2_children_relationship" value="" />
	</td>
</tr>
</table>


<table>
<tr><td>6.6.	Amount of funding received during current/last financial year</td>
	<td>
		Current Year Rs.<input type="text" value="" name="funding_recieved_current_year" class="number" /><br />
		Last Year Rs.<input type="text" value="" name="funding_recieved_last_year" class="number" />
	</td>
</tr>
<tr><td>6.7.	SMC bank account number and the bank</td>
	<td>
		Bank & Branch<input type="text" value="" name="smc_bank_branch" /><br />
		Account Title<input type="text" value="" name="smc_account_title" /><br />
		Account Number<input type="text" value="" name="smc_account_number" class="number" />
	</td>
</tr>


<tr><td>6.8.	Benefits obtained from use of Last SMC Funds</td>
	<td>
		<input type="text" value="" name="benefits_this_budget1" />
		<input type="text" value="" name="benefits_this_budget2" />
		<input type="text" value="" name="benefits_this_budget3" />
	</td>
</tr>
<tr><td>6.9.	Benefits obtained from use of current SMC funds</td>
	<td>
		<input type="text" value="" name="benefits_last_budget1" />
		<input type="text" value="" name="benefits_last_budget2" />
		<input type="text" value="" name="benefits_last_budget3" />
	</td>
</tr>

<tr><td>6.10.	Number of SMC meetings/visits to School this year and Last year</td>
	<td>
		This year<input type="text" value="" name="smc_visits_this_year" class="number" />
		Last_year<input type="text" value="" name="smc_visits_last_year" class="number" />
	</td>
</tr>
<tr><td>6.11.	Community contribution/support to school in any kind/form</td>
	<td>
		<input type="radio" name="community_contribution_to_school"  value="1" >Yes</input><br /><input type="radio" name="community_contribution_to_school" value="0" >No</input><br />
	</td>
</tr>
<tr><td></td>
	<td>
		a.<input type="text" value="" name="community_contribution_to_school1" /><br />
		b.<input type="text" value="" name="community_contribution_to_school2" /><br />
		c.<input type="text" value="" name="community_contribution_to_school3" /><br />
	</td>
</tr>
<tr><td><input type="submit" value="submit" /></td></tr>
</table>
</form>
