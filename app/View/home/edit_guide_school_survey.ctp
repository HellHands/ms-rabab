<script type="text/javascript">
	$(function() {
	$('#survey_form').validate();
	});
</script>
<br /><br /><div style=""><h1>Guide School Survey </h1> </div>

<form id="survey_form" style="width:700px;" method="post" action="<?php echo $this->webroot?>home/submit_guide_school_survey/<?php echo $surveyOfSchool['SurveyOfSchool']['id']?>/<?php echo $guideSpecific['GuideSpecific']['id']?>/<?php echo $school['School']['clusterid']?>">
<table style="width:700px;">
	<tr>
		<td colspan="2">
			<h1>School Information</h1>
		</td>
	</tr>
	
	<input type="hidden" value="<?php echo $school['School']['id']?>" name="school_id"/>
	<input type="hidden" value="<?php echo $school['School']['clusterid']?>" name="cluster_id"/>
	
	<tr>
		<td>Village / St</td>
		<td><input type="text" name="village_st" value="<?php echo $surveyOfSchool['SurveyOfSchool']['village_st']?>" ></input></td>
	</tr>
	
	<tr>
		<td>GPS Cordinates </td>
		<td>N : <input type="text" name="gps_n" value="<?php echo $school['School']['latitude']?>" ></input>S:<input type="text" name="gps_s" value="<?php echo $school['School']['longitude']?>"></input></td>
	</tr>
	
	<tr>
		<td>No. of Households in village / st</td>
		<td><input type="text" name="hh_no" class="number" value="<?php echo $surveyOfSchool['SurveyOfSchool']['hh_no']?>" ></input></td>
	</tr>
	
	<tr>
		<td>Cluster Profile Status</td>
		<td><input type="text" name="cluster_profile_status" value="<?php echo $surveyOfSchool['SurveyOfSchool']['cluster_profile_status']?>" ></input></td>
	</tr>
	
	<tr>
		<td>SCH is Functional?</td>
		<td>
		<input type="radio" value="1" <?php if(($surveyOfSchool['SurveyOfSchool']['sch_func']) == 1) { ?> checked="checked" <?php } ?> name="sch_func">Yes</input><br /><input type="radio" <?php if(($surveyOfSchool['SurveyOfSchool']['sch_func']) == 0) { ?> checked="checked" <?php } ?> value="0" name="sch_func">No</input>
		</td>
	</tr>
	
	
	
	<tr>
		<td>If not functional how used?</td>
		<td><input type="text" name="sch_nf_how_used" value="<?php echo $surveyOfSchool['SurveyOfSchool']['sch_nf_how_used']?>" class="number" ></input></td>
	</tr>
	
	<tr>
		<td>SMC Notified</td>
		<td><input type="radio" value="1" <?php if(($surveyOfSchool['SurveyOfSchool']['smc_func']) == 1) { ?> checked="checked" <?php } ?> name="smc_func">Yes</input><br /><input type="radio" <?php if(($surveyOfSchool['SurveyOfSchool']['smc_func']) == 0) { ?> checked="checked" <?php } ?> value="0" name="smc_func">No</input>
		</td>
	</tr>

	<tr>
		<td>SMC Last Meeting</td>
		<td><input type="text" name="smc_last_meeting" value="<?php echo $surveyOfSchool['SurveyOfSchool']['smc_last_meeting']?>" ></input></td>
	</tr>
	
	<tr>
		<td>Smc Notice Board</td>
		<td><input type="radio" name="smc_notice_board" <?php if(($surveyOfSchool['SurveyOfSchool']['smc_notice_board']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($surveyOfSchool['SurveyOfSchool']['smc_notice_board']) == 0) { ?> checked="checked" <?php } ?> name="smc_notice_board" value="0" >No</input></td>
	</tr>
	
	<tr>
		<td>School Name Board</td>
		<td><input type="radio" name="school_name_board" <?php if(($surveyOfSchool['SurveyOfSchool']['school_name_board']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($surveyOfSchool['SurveyOfSchool']['school_name_board']) == 0) { ?> checked="checked" <?php } ?> name="school_name_board" value="0" >No</input></td>
	</tr>
	
	<tr>
		<td>SIP</td>
		<td><input type="radio" name="sip" <?php if(($surveyOfSchool['SurveyOfSchool']['sip']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($surveyOfSchool['SurveyOfSchool']['sip']) == 0) { ?> checked="checked" <?php } ?> name="sip" value="0" >No</input></td>
	</tr>
	
	<tr>
		<td>SIP Displayed</td>
		<td><input type="radio" name="sip_displayed" <?php if(($surveyOfSchool['SurveyOfSchool']['sip_displayed']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($surveyOfSchool['SurveyOfSchool']['sip_displayed']) == 0) { ?> checked="checked" <?php } ?> name="sip_displayed" value="0" >No</input></td>
	</tr>
	
	<tr>
		<td>SMC Bank branch</td>
		<td><input type="text" name="smc_bank" value="<?php echo $surveyOfSchool['SurveyOfSchool']['smc_bank']?>" ></input></td>
	</tr>
	
	<tr>
		<td>SMC Bank Account-no</td>
		<td><input type="text" name="smc_acc_number" value="<?php echo $surveyOfSchool['SurveyOfSchool']['smc_acc_number']?>" class="number" ></input></td>
	</tr>
	
	<tr>
		<td>
			<h1>Name of SMC Chairperson </h1>
		</td>
		<td> <input type="" name="smc_cp_name" value="<?php echo $surveyOfSchool['SurveyOfSchool']['smc_cp_name']?>"></input> </td>
	</tr>
	<tr>
		<td> Phone No of SMC Chairperson</td>
		<td> <input type="" name="smc_cp_phone" class="number" value="<?php echo $surveyOfSchool['SurveyOfSchool']['smc_cp_phone']?>"></input> </td>
	</tr>
	
	<tr>
	<td>
		<h1>Senior/Head Teacher's name</h1>
	</td>
	<td> <input type="" name="ht_name" value="<?php echo $surveyOfSchool['SurveyOfSchool']['ht_name']?>"></input> </td>
	</tr>
	
	<tr>
	<td>
		Senior/Head Teacher's CNIC number
	</td>
	<td> <input type="" name="ht_nic" value="<?php echo $surveyOfSchool['SurveyOfSchool']['ht_nic']?>"></input> </td>
	</tr>
	
	<tr>
	<td>
		Senior/Head Teacher's Bps/scale
	</td>
	<td> <input type="" name="ht_bps" value="<?php echo $surveyOfSchool['SurveyOfSchool']['ht_bps']?>"></input> </td>
	</tr>
	
	<tr>
	<td>
		Senior/Head Teacher's NIC
	</td>
	<td> <input type="" name="ht_nic" value="<?php echo $surveyOfSchool['SurveyOfSchool']['ht_nic']?>" class="number" ></input> </td>
	</tr>
	
	<tr>
	<td>
		Senior/Head Teacher's Gross Salary
	</td>
	<td> <input type="" name="ht_salary" value="<?php echo $surveyOfSchool['SurveyOfSchool']['ht_salary']?>" class="number" ></input> </td>
	</tr>
	
	<tr>
	<td>
		Senior/Head Teacher's Off Code
	</td>
	<td> <input type="" name="ht_off_code" value="<?php echo $surveyOfSchool['SurveyOfSchool']['ht_off_code']?>" ></input> </td>
	</tr>
	
	<tr>
	<td>
		Senior/Head Teacher's Off Code
	</td>
	<td> <input type="" name="ht_cash_center" value="<?php echo $surveyOfSchool['SurveyOfSchool']['ht_cash_center']?>" ></input> </td>
	</tr>
	
	
	<tr>
	<td>
		Senior/Head Teacher's Mode of Transport
	</td>
	<td> <input type="" name="ht_mot" value="<?php echo $surveyOfSchool['SurveyOfSchool']['ht_mot']?>" ></input> </td>
	</tr>
	
	
	<tr>
	<td>
		Senior/Head Teacher's Residential Address
	</td>
	<td> <input type="" name="ht_address" value="<?php echo $surveyOfSchool['SurveyOfSchool']['ht_address']?>" ></input> </td>
	</tr>
	
	
	<tr>
	<td>
		Senior/Head Teacher's Distance from residence to GS
	</td>
	<td> <input type="" name="ht_distance_rtg" value="<?php echo $surveyOfSchool['SurveyOfSchool']['ht_distance_rtg']?>" class="number"></input> </td>
	</tr>
	
	
	<tr>
	<td>
		Senior/Head Teacher's Personal Number
	</td>
	<td> <input type="" name="ht_personal_number" value="<?php echo $surveyOfSchool['SurveyOfSchool']['ht_personal_number']?>" ></input> </td>
	</tr>
	
	
	<tr>
	<td>
		Senior/Head Teacher's Qualification general
	</td>
	<td> <input type="" name="ht_qual_general" value="<?php echo $surveyOfSchool['SurveyOfSchool']['ht_qual_general']?>" ></input> </td>
	</tr>
	
	<tr>
	<td>
		Senior/Head Teacher's Qualification proffessional
	</td>
	<td> <input type="" name="ht_qual_proff" value="<?php echo $surveyOfSchool['SurveyOfSchool']['ht_qual_proff']?>" ></input> </td>
	</tr>
	
	<tr>
	<td>
		Senior/Head Teacher's Date of posting
	</td>
	<td> 
		<input type="" name="ht_date_posting" value="<?php echo $surveyOfSchool['SurveyOfSchool']['ht_date_posting']?>" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Senior/Head Teacher's Date of posting
	</td>
	<td> 
		<input type="" name="ht_date_posting" value="<?php echo $surveyOfSchool['SurveyOfSchool']['ht_date_posting']?>" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		<h1>School Staff and Enrollment</h1>
	</td>
	</tr>
	
	
	<tr>
	<td>
		Govt Male
	</td>
	<td> 
		<input type="" name="staff_govt_male" value="<?php echo $surveyOfSchool['SurveyOfSchool']['staff_govt_male']?>" class="number"></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		Govt Female
	</td>
	<td> 
		<input type="" name="staff_govt_female" value="<?php echo $surveyOfSchool['SurveyOfSchool']['staff_govt_female']?>" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Contract Male
	</td>
	<td> 
		<input type="" name="staff_cntr_male" value="<?php echo $surveyOfSchool['SurveyOfSchool']['staff_cntr_male']?>" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Contract Female
	</td>
	<td> 
		<input type="" name="staff_cntr_female" value="<?php echo $surveyOfSchool['SurveyOfSchool']['staff_cntr_female']?>" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		NCHD Male
	</td>
	<td> 
		<input type="" name="staff_nchd_male" value="<?php echo $surveyOfSchool['SurveyOfSchool']['staff_nchd_male']?>" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		NCHD Female
	</td>
	<td> 
		<input type="" name="staff_nchd_female" value="<?php echo $surveyOfSchool['SurveyOfSchool']['staff_nchd_female']?>" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Unicef Male
	</td>
	<td> 
		<input type="" name="staff_unicef_male" value="<?php echo $surveyOfSchool['SurveyOfSchool']['staff_unicef_male']?>" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Unicef Female
	</td>
	<td> 
		<input type="" name="staff_unicef_female" value="<?php echo $surveyOfSchool['SurveyOfSchool']['staff_unicef_female']?>" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Detailment Male
	</td>
	<td> 
		<input type="" name="staff_detailment_male" value="<?php echo $surveyOfSchool['SurveyOfSchool']['staff_detailment_male']?>" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Detailment Female
	</td>
	<td> 
		<input type="" name="staff_detailment_female" value="<?php echo $surveyOfSchool['SurveyOfSchool']['staff_detailment_female']?>" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Other Male
	</td>
	<td> 
		<input type="" name="staff_other_male" value="<?php echo $surveyOfSchool['SurveyOfSchool']['staff_other_male']?>" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Other Female
	</td>
	<td> 
		<input type="" name="staff_other_female" value="<?php echo $surveyOfSchool['SurveyOfSchool']['staff_other_female']?>" class="number"></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		Enrollment Boys
	</td>
	<td> 
		<input type="" name="enrollment_boys" value="<?php echo $surveyOfSchool['SurveyOfSchool']['enrollment_boys']?>" class="number"></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		Enrollment Girls
	</td>
	<td> 
		<input type="" name="enrollment_girls" value="<?php echo $surveyOfSchool['SurveyOfSchool']['enrollment_girls']?>" class="number"></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		Katchi Enrollment
	</td>
	<td> 
		<input type="radio" name="katchi_enrollment" <?php if(($surveyOfSchool['SurveyOfSchool']['katchi_enrollment']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($surveyOfSchool['SurveyOfSchool']['katchi_enrollment']) == 0) { ?> checked="checked" <?php } ?> name="katchi_enrollment" value="0" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>
		Katchi Enrollment Boys
	</td>
	<td> 
		<input type="" name="katchi_enrollment_boys" value="<?php echo $surveyOfSchool['SurveyOfSchool']['katchi_enrollment_boys']?>" class="number"></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		Katchi Enrollment Girls
	</td>
	<td> 
		<input type="" name="katchi_enrollment_girls" value="<?php echo $surveyOfSchool['SurveyOfSchool']['katchi_enrollment_girls']?>" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Distance From Guide School ? (KMs)
	</td>
	<td> 
		<input type="" name="distance_fgs" value="<?php echo $surveyOfSchool['SurveyOfSchool']['distance_fgs']?>" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Guide School to nearest Pvt. / other Schools? (KMs)
	</td>
	<td>
		<input type="" name="guide_to_private" value="<?php echo $surveyOfSchool['SurveyOfSchool']['guide_to_private']?>" class="number" ></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		What do you think Students need most?
	</td>
	<td> 
		<input type="" name="students_needs" value="<?php echo $surveyOfSchool['SurveyOfSchool']['students_needs']?>" ></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		ASC Performa
	</td>
	<td>
		<input type="radio" name="asc_performa" <?php if(($surveyOfSchool['SurveyOfSchool']['asc_performa']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($surveyOfSchool['SurveyOfSchool']['asc_performa']) == 0) { ?> checked="checked" <?php } ?> name="asc_performa" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		HRMIS Form
	</td>
	<td>
		<input type="radio" name="hrmis_form" <?php if(($surveyOfSchool['SurveyOfSchool']['hrmis_form']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($surveyOfSchool['SurveyOfSchool']['hrmis_form']) == 0) { ?> checked="checked" <?php } ?> name="hrmis_form" value="0" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>
		Free TB
	</td>
	<td>
		<input type="radio" name="free_tb" <?php if(($surveyOfSchool['SurveyOfSchool']['free_tb']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($surveyOfSchool['SurveyOfSchool']['free_tb']) == 0) { ?> checked="checked" <?php } ?> name="free_tb" value="0" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>
		St Ap (SAP)
	</td>
	<td>
		<input type="radio" name="sap" <?php if(($surveyOfSchool['SurveyOfSchool']['sap']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($surveyOfSchool['SurveyOfSchool']['sap']) == 0) { ?> checked="checked" <?php } ?> name="sap" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		Visitor's Book
	</td>
	<td>
		<input type="radio" name="visitor_book" <?php if(($surveyOfSchool['SurveyOfSchool']['visitor_book']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($surveyOfSchool['SurveyOfSchool']['visitor_book']) == 0) { ?> checked="checked" <?php } ?> name="visitor_book" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		Time Table
	</td>
	<td>
		<input type="radio" name="time_table" <?php if(($surveyOfSchool['SurveyOfSchool']['time_table']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($surveyOfSchool['SurveyOfSchool']['time_table']) == 0) { ?> checked="checked" <?php } ?> name="time_table" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		Guide Teacher Head Teacher Diary
	</td>
	<td>
		<input type="radio" name="gt_ht_diary" <?php if(($surveyOfSchool['SurveyOfSchool']['gt_ht_diary']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($surveyOfSchool['SurveyOfSchool']['gt_ht_diary']) == 0) { ?> checked="checked" <?php } ?> name="gt_ht_diary" value="0" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>
		Teacher'S  Diary
	</td>
	<td>
		<input type="radio" name="teachers_diary" <?php 	if(($surveyOfSchool['SurveyOfSchool']['teachers_diary']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($surveyOfSchool['SurveyOfSchool']['teachers_diary']) == 0) { ?> checked="checked" <?php } ?> name="teachers_diary" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		Exam Result
	</td>
	<td>
		<input type="radio" name="exam_result" <?php if(($surveyOfSchool['SurveyOfSchool']['exam_result']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($surveyOfSchool['SurveyOfSchool']['exam_result']) == 0) { ?> checked="checked" <?php } ?> name="exam_result" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		SLC Register
	</td>
	<td>
		<input type="radio" name="slc_register" <?php if(($surveyOfSchool['SurveyOfSchool']['slc_register']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($surveyOfSchool['SurveyOfSchool']['slc_register']) == 0) { ?> checked="checked" <?php } ?> name="slc_register" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		Science KIT
	</td>
	<td>
		<input type="radio" name="science_kit" <?php if(($surveyOfSchool['SurveyOfSchool']['science_kit']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($surveyOfSchool['SurveyOfSchool']['science_kit']) == 0) { ?> checked="checked" <?php } ?> name="science_kit" value="0" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>
		Students Attendance Register
	</td>
	<td>
		<input type="radio" name="st_attendance_reg" <?php if(($surveyOfSchool['SurveyOfSchool']['st_attendance_reg']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($surveyOfSchool['SurveyOfSchool']['st_attendance_reg']) == 0) { ?> checked="checked" <?php } ?> name="st_attendance_reg" value="0" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>
		Teachers Attendance Register
	</td>
	<td>
		<input type="radio" name="teacher_att_register" <?php if(($surveyOfSchool['SurveyOfSchool']['teacher_att_register']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($surveyOfSchool['SurveyOfSchool']['teacher_att_register']) == 0) { ?> checked="checked" <?php } ?> name="teacher_att_register" value="0" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>
		Budget Recieved		
	</td>
	<td>
		<input type="text" name="budget_recieved"  value="<?php echo $surveyOfSchool['SurveyOfSchool']['budget_recieved']?>"/>
	</td>
	</tr>
	
	
	<tr>
	<td>
		Budget Amount		
	</td>
	<td>
		<input type="text" name="budget_amount"  value="<?php echo $surveyOfSchool['SurveyOfSchool']['budget_amount']?>" />
	</td>
	</tr>
	
	<tr>
	<td>
		Last Cheque Drawn on	
	</td>
	<td>
		<input type="text" name="cheque_drawn"  value="<?php echo $surveyOfSchool['SurveyOfSchool']['cheque_drawn']?>" />
	</td>
	</tr>
	
	
	<tr>
	<td>
		Surveyor Name
	</td>
	<td>
		<input type="" name="surveyor_name" value="<?php echo $surveyOfSchool['SurveyOfSchool']['surveyor_name']?>" ></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Surveyor Name
	</td>
	<td>
		<input type="" name="surveyor_name" value="<?php echo $surveyOfSchool['SurveyOfSchool']['surveyor_name']?>" ></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Survey Remarks
	</td>
	<td>
		<input type="" name="survey_remarks" value="<?php echo $surveyOfSchool['SurveyOfSchool']['survey_remarks']?>" ></input> 
	</td>
	</tr>
	
	
	<tr>
	<td><h1>Guide School Specific Information</h1></td>
	</tr>
	
	<tr>
	<td><h2>School Infrastructure</h2></td>
	</tr>
	
	<tr>
	<td>
		School Has Building
	</td>
	<td>
		<input type="radio" name="has_building" <?php if(($guideSpecific['GuideSpecific']['has_building']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($guideSpecific['GuideSpecific']['has_building']) == 0) { ?> checked="checked" <?php } ?> name="has_building" value="0" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>
		Its Own Building
	</td>
	<td>
		<input type="radio" name="own_building" <?php if(($guideSpecific['GuideSpecific']['own_building']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($guideSpecific['GuideSpecific']['own_building']) == 0) { ?> checked="checked" <?php } ?> name="own_building" value="0" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>
		School Has open space
	</td>
	<td>
		<input type="radio" name="open_space" <?php if(($guideSpecific['GuideSpecific']['open_space']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($guideSpecific['GuideSpecific']['open_space']) == 0) { ?> checked="checked" <?php } ?> name="open_space" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		Open Space Area
	</td>
	<td>
		<input type="" name="open_space_area" value="<?php echo $guideSpecific['GuideSpecific']['open_space_area']?>" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Rooms
	</td>
	<td>
		<input type="" name="rooms" value="<?php echo $guideSpecific['GuideSpecific']['rooms']?>" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Rooms Used
	</td>
	<td>
		<input type="" name="rooms_used" value="<?php echo $guideSpecific['GuideSpecific']['rooms_used']?>" class="number"></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		Rooms Unused
	</td>
	<td>
		<input type="" name="rooms_unused" value="<?php echo $guideSpecific['GuideSpecific']['rooms_unused']?>" class="number"></input> 
	</td>
	</tr>
	
	
	
	
	<tr>
	<td>
		Furniture Condition
	</td>
	<td>
		<input type="radio" name="furniture_condition" <?php if(($guideSpecific['GuideSpecific']['furniture_condition']) == 1) { ?> checked="checked" <?php } ?> value="1" >Good</input><br /><input type="radio" <?php if(($guideSpecific['GuideSpecific']['furniture_condition']) == 0) { ?> checked="checked" <?php } ?> name="furniture_condition" value="0" >Need Repair</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		Class Rooms
	</td>
	<td>
		<input type="" name="class_rooms" value="<?php echo $guideSpecific['GuideSpecific']['class_rooms']?>" class="number"></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		Office
	</td>
	<td>
		<input type="" name="office" value="<?php echo $guideSpecific['GuideSpecific']['office']?>" class="number"></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		Store
	</td>
	<td>
		<input type="" name="store" value="<?php echo $guideSpecific['GuideSpecific']['store']?>" class="number"></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		Need Repair
	</td>
	<td>
		<input type="radio" name="need_repair" <?php if(($guideSpecific['GuideSpecific']['need_repair']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($guideSpecific['GuideSpecific']['need_repair']) == 0) { ?> checked="checked" <?php } ?> name="need_repair" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		Nature of Seats
	</td>
	<td>
		<input type="radio" name="nature_of_seats" <?php if(($guideSpecific['GuideSpecific']['nature_of_seats']) == 1) { ?> checked="checked" <?php } ?> value="1" >Desks</input><br /><input type="radio" <?php if(($guideSpecific['GuideSpecific']['nature_of_seats']) == 0) { ?> checked="checked" <?php } ?> name="nature_of_seats" value="0" >Benches</input><br /><input type="radio" <?php if(($guideSpecific['GuideSpecific']['nature_of_seats']) == 3) { ?> checked="checked" <?php } ?> name="nature_of_seats" value="3" >Both Benches & Desks</input><br /><input type="radio" name="nature_of_seats" <?php if(($guideSpecific['GuideSpecific']['nature_of_seats']) == 2) { ?> checked="checked" <?php } ?> value="2" >Other</input>
	</td>
	</tr>
	
	
	
	<tr>
	<td>
		Project Status
	</td>
	<td>
		<input type="" name="project_status" value="<?php echo $guideSpecific['GuideSpecific']['project_status']?>" ></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		Project Year
	</td>
	<td>
		<input type="" name="project_year" value="<?php echo $guideSpecific['GuideSpecific']['project_year']?>" ></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Facility of
	</td>
	<td>
		<input type="text" name="facility_of" value="<?php echo $guideSpecific['GuideSpecific']['facility_of']?>" ></input> 
	</td>
	</tr>
	
	
	
	<tr>
		<td>ECE?</td>
		<td>
		<input type="radio" value="1" <?php if(($surveyOfSchool['SurveyOfSchool']['ece']) == 1) { ?> checked="checked" <?php } ?> name="ece">Yes</input><br /><input type="radio" <?php if(($surveyOfSchool['SurveyOfSchool']['ece']) == 0) { ?> checked="checked" <?php } ?> value="0" name="ece">No</input>
		</td>
	</tr>
	
	
	<tr>
	<td>
		Guide School to Community/HHs?(in Meters)
	</td>
	<td>
		<input type="text" name="gthh_dist_near" value="<?php echo $guideSpecific['GuideSpecific']['gthh_dist_near']?>" class="number" >Nearest</input> <br /><input type="" name="gthh_dist_far" value="<?php echo $guideSpecific['GuideSpecific']['gthh_dist_near']?>" class="number" >Farthest</input>
	</td>
	</tr>
	
	<tr>
	<td>
		Guide School to Primary School distance?(in Meters)
	</td>
	<td>
		<input type="text" name="gtps_dist_near" value="<?php echo $guideSpecific['GuideSpecific']['gtps_dist_near']?>" class="number" >Nearest</input> <br /><input type="" name="gtps_dist_far" value="<?php echo $guideSpecific['GuideSpecific']['gtps_dist_near']?>" class="number" >Farthest</input>
	</td>
	</tr>
	

	<tr>
	<td>
		Guide School to Non-Guide school?(in KMs)
	</td>
	<td>
		<input type="" name="gtng_dist_near" value="<?php echo $guideSpecific['GuideSpecific']['gtng_dist_near']?>">Nearest</input> <br /> <input type="text" name="gtng_near_semis_code" value="<?php echo $guideSpecific['GuideSpecific']['gtng_near_semis_code']?>" class="number" >Semis Code</input> <br /><input type="text" name="gtng_dist_far" value="<?php echo $guideSpecific['GuideSpecific']['gtng_dist_far']?>" >Farthest</input><br /> <input type="" name="gtng_far_semis_code" value="<?php echo $guideSpecific['GuideSpecific']['gtng_far_semis_code']?>" class="number" >Semis Code</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		GT mnobility Allowance
	</td>
	<td>
		<input type="radio" name="gt_mobility_allowance" <?php if(($guideSpecific['GuideSpecific']['gt_mobility_allowance']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" name="gt_mobility_allowance" <?php if(($guideSpecific['GuideSpecific']['gt_mobility_allowance']) == 0) { ?> checked="checked" <?php } ?> value="0" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>
		GT Mobility Allowance Amount
	</td>
	<td>
		<input type="" name="gt_mobility_allowance_amount" value="<?php echo $guideSpecific['GuideSpecific']['gt_mobility_allowance_amount']?>" class="number" ></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		GT Transport Provided
	</td>
	<td>
		<input type="radio" name="gt_transport_provided" <?php if(($guideSpecific['GuideSpecific']['gt_transport_provided']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($guideSpecific['GuideSpecific']['gt_transport_provided']) == 0) { ?> checked="checked" <?php } ?> name="gt_transport_provided" value="0" >No</input>
	</td>
	</tr>
	
	
	
	<tr>
	<td>
		GT Mode of Transport
	</td>
	<td>
		<input type="" name="gt_mode_of_transport" value="<?php echo $guideSpecific['GuideSpecific']['gt_mode_of_transport']?>" ></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		GT Cluster Visit
	</td>
	<td>
		<input type="radio" name="gt_cluster_visit" <?php if(($guideSpecific['GuideSpecific']['gt_cluster_visit']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" name="gt_cluster_visit" <?php if(($guideSpecific['GuideSpecific']['gt_cluster_visit']) == 0) { ?> checked="checked" <?php } ?> value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		GT JD ?
	</td>
	<td>
		<input type="radio" name="gt_jd" <?php if(($guideSpecific['GuideSpecific']['gt_jd']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($guideSpecific['GuideSpecific']['gt_jd']) == 0) { ?> checked="checked" <?php } ?> name="gt_jd" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		GT Notific
	</td>
	<td>
		<input type="radio" name="gt_notific" <?php if(($guideSpecific['GuideSpecific']['gt_notific']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($guideSpecific['GuideSpecific']['gt_notific']) == 0) { ?> checked="checked" <?php } ?> name="gt_notific" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		GT Orientation Attended
	</td>
	<td>
		<input type="radio" name="gt_orientation_attended" <?php if(($guideSpecific['GuideSpecific']['gt_orientation_attended']) == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br /><input type="radio" <?php if(($guideSpecific['GuideSpecific']['gt_orientation_attended']) == 0) { ?> checked="checked" <?php } ?> name="gt_orientation_attended" value="0" >No</input>
	</td>
	</tr>
	
	
	
	
	
	
	
	
	
	<tr><td><input type="submit" value="submit"></input></td><td></td></tr>

</table>
</form>