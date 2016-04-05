<script type="text/javascript">
	$(function() {
	$('#survey_form').validate();
	});
</script>
<br /><br /><div style=""><h1>Guide School Survey </h1> </div>

<form id="survey_form" style="width:700px;" method="post" action="<?php echo $this->webroot?>home/submit_guide_school_survey">
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
		<td><input type="text" name="village_st" value="" ></input></td>
	</tr>
	
	<tr>
		<td>GPS Cordinates </td>
		<td>N : <input type="text" name="gps_n" value="<?php echo $school['School']['latitude']?>" ></input>S:<input type="text" name="gps_s" value="<?php echo $school['School']['longitude']?>"></input></td>
	</tr>
	
	<tr>
		<td>No. of Households in village / st</td>
		<td><input type="text" name="hh_no" class="number" ></input></td>
	</tr>
	
	<tr>
		<td>Cluster Profile Status</td>
		<td><input type="text" name="cluster_profile_status" value="" ></input></td>
	</tr>
	
	<tr>
		<td>SCH is Functional?</td>
		<td>
		<input type="radio" value="1" checked="checked" name="sch_func">Yes</input><br /><input type="radio" value="0" name="sch_func">No</input>
		</td>
	</tr>
	
	<tr>
		<td>If not functional how used?</td>
		<td><input type="text" name="sch_nf_how_used" class="number" ></input></td>
	</tr>
	
	<tr>
		<td>SMC Notified</td>
		<td><input type="radio" value="1" checked="checked" name="smc_func">Yes</input><br /><input type="radio" value="0" name="smc_func">No</input>
		</td>
	</tr>

	<tr>
		<td>SMC Last Meeting</td>
		<td><input type="text" name="smc_last_meeting" value="" ></input></td>
	</tr>
	
	<tr>
		<td>Smc Notice Board</td>
		<td><input type="radio" name="smc_notice_board" checked="checked" value="1" >Yes</input><br /><input type="radio" name="smc_notice_board" value="0" >No</input></td>
	</tr>
	
	<tr>
		<td>School Name Board</td>
		<td><input type="radio" name="school_name_board" checked="checked" value="1" >Yes</input><br /><input type="radio" name="school_name_board" value="0" >No</input></td>
	</tr>
	
	<tr>
		<td>SIP</td>
		<td><input type="radio" name="sip" checked="checked" value="1" >Yes</input><br /><input type="radio" name="sip" value="0" >No</input></td>
	</tr>
	
	<tr>
		<td>SIP Displayed</td>
		<td><input type="radio" name="sip_displayed" checked="checked" value="1" >Yes</input><br /><input type="radio" name="sip_displayed" value="0" >No</input></td>
	</tr>
	
	<tr>
		<td>SMC Bank branch</td>
		<td><input type="text" name="smc_bank" value="" ></input></td>
	</tr>
	
	<tr>
		<td>SMC Bank Account-no</td>
		<td><input type="text" name="smc_acc_number" value="" class="number" ></input></td>
	</tr>
	
	<tr>
		<td>
			<h1>Name of SMC Chairperson </h1>
		</td>
		<td> <input type="" name="smc_cp_name" value=""></input> </td>
	</tr>
	<tr>
		<td> Phone No of SMC Chairperson</td>
		<td> <input type="" name="smc_cp_phone" class="number" value=""></input> </td>
	</tr>
	
	<tr>
	<td>
		<h1>Senior/Head Teacher's name</h1>
	</td>
	<td> <input type="" name="ht_name" value=""></input> </td>
	</tr>
	
	<tr>
	<td>
		Senior/Head Teacher's CNIC number
	</td>
	<td> <input type="" name="ht_nic" value=""></input> </td>
	</tr>
	
	<tr>
	<td>
		Senior/Head Teacher's Bps/scale
	</td>
	<td> <input type="" name="ht_bps" value=""></input> </td>
	</tr>
	
	<tr>
	<td>
		Senior/Head Teacher's NIC
	</td>
	<td> <input type="" name="ht_nic" value="" class="number" ></input> </td>
	</tr>
	
	<tr>
	<td>
		Senior/Head Teacher's Gross Salary
	</td>
	<td> <input type="" name="ht_salary" value="" class="number" ></input> </td>
	</tr>
	
	<tr>
	<td>
		Senior/Head Teacher's Off Code
	</td>
	<td> <input type="" name="ht_off_code" value="" ></input> </td>
	</tr>
	
	<tr>
	<td>
		Senior/Head Teacher's Off Code
	</td>
	<td> <input type="" name="ht_cash_center" value="" ></input> </td>
	</tr>
	
	
	<tr>
	<td>
		Senior/Head Teacher's Mode of Transport
	</td>
	<td> <input type="" name="ht_mot" value="" ></input> </td>
	</tr>
	
	<tr>
	<td>
		Senior/Head Teacher's Mode of Transport
	</td>
	<td> <input type="" name="ht_mot" value="" ></input> </td>
	</tr>
	
	<tr>
	<td>
		Senior/Head Teacher's Residential Address
	</td>
	<td> <input type="" name="ht_address" value="" ></input> </td>
	</tr>
	
	
	<tr>
	<td>
		Senior/Head Teacher's Distance from residence to GS
	</td>
	<td> <input type="" name="ht_distance_rtg" value="" class="number"></input> </td>
	</tr>
	
	
	<tr>
	<td>
		Senior/Head Teacher's Personal Number
	</td>
	<td> <input type="" name="ht_personal_number" value="" ></input> </td>
	</tr>
	
	
	<tr>
	<td>
		Senior/Head Teacher's Qualification general
	</td>
	<td> <input type="" name="ht_qual_general" value="" ></input> </td>
	</tr>
	
	<tr>
	<td>
		Senior/Head Teacher's Qualification proffessional
	</td>
	<td> <input type="" name="ht_qual_proff" value="" ></input> </td>
	</tr>
	
	<tr>
	<td>
		Senior/Head Teacher's Date of posting
	</td>
	<td> 
		<input type="" name="ht_date_posting" value="" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Senior/Head Teacher's Date of posting
	</td>
	<td> 
		<input type="" name="ht_date_posting" value="" class="number"></input> 
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
		<input type="" name="staff_govt_male" value="" class="number"></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		Govt Female
	</td>
	<td> 
		<input type="" name="staff_govt_female" value="" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Contract Male
	</td>
	<td> 
		<input type="" name="staff_cntr_male" value="" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Contract Female
	</td>
	<td> 
		<input type="" name="staff_cntr_female" value="" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		NCHD Male
	</td>
	<td> 
		<input type="" name="staff_nchd_male" value="" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		NCHD Female
	</td>
	<td> 
		<input type="" name="staff_nchd_female" value="" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Unicef Male
	</td>
	<td> 
		<input type="" name="staff_unicef_male" value="" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Unicef Female
	</td>
	<td> 
		<input type="" name="staff_unicef_female" value="" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Detailment Male
	</td>
	<td> 
		<input type="" name="staff_detailment_male" value="" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Detailment Female
	</td>
	<td> 
		<input type="" name="staff_detailment_female" value="" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Other Male
	</td>
	<td> 
		<input type="" name="staff_other_male" value="" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Other Female
	</td>
	<td> 
		<input type="" name="staff_other_female" value="" class="number"></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		Enrollment Boys
	</td>
	<td> 
		<input type="" name="enrollment_boys" value="" class="number"></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		Enrollment Girls
	</td>
	<td> 
		<input type="" name="enrollment_girls" value="" class="number"></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		Katchi Enrollment
	</td>
	<td> 
		<input type="radio" name="katchi_enrollment" checked="checked" value="1" >Yes</input><br /><input type="radio" name="katchi_enrollment" value="0" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>
		Katchi Enrollment Boys
	</td>
	<td> 
		<input type="" name="katchi_enrollment_boys" value="" class="number"></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		Katchi Enrollment Girls
	</td>
	<td> 
		<input type="" name="katchi_enrollment_girls" value="" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Distance From Guide School ? (KMs)
	</td>
	<td> 
		<input type="" name="distance_fgs" value="" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Guide School to nearest Pvt. / other Schools? (KMs)
	</td>
	<td>
		<input type="" name="guide_to_private" value="" class="number" ></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		What do you think Students need most?
	</td>
	<td> 
		<input type="" name="students_needs" value="" ></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		ASC Performa
	</td>
	<td>
		<input type="radio" name="asc_performa" checked="checked" value="1" >Yes</input><br /><input type="radio" name="asc_performa" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		HRMIS Form
	</td>
	<td>
		<input type="radio" name="hrmis_form" checked="checked" value="1" >Yes</input><br /><input type="radio" name="hrmis_form" value="0" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>
		Free TB
	</td>
	<td>
		<input type="radio" name="free_tb" checked="checked" value="1" >Yes</input><br /><input type="radio" name="free_tb" value="0" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>
		St Ap (SAP)
	</td>
	<td>
		<input type="radio" name="sap" checked="checked" value="1" >Yes</input><br /><input type="radio" name="sap" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		Visitor's Book
	</td>
	<td>
		<input type="radio" name="visitor_book" checked="checked" value="1" >Yes</input><br /><input type="radio" name="visitor_book" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		Time Table
	</td>
	<td>
		<input type="radio" name="time_table" checked="checked" value="1" >Yes</input><br /><input type="radio" name="time_table" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		Guide Teacher Head Teacher Diary
	</td>
	<td>
		<input type="radio" name="gt_ht_diary" checked="checked" value="1" >Yes</input><br /><input type="radio" name="gt_ht_diary" value="0" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>
		Teacher's Diary
	</td>
	<td>
		<input type="radio" name="teachers_diary" checked="checked" value="1" >Yes</input><br /><input type="radio" name="teachers_diary" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		Exam Result
	</td>
	<td>
		<input type="radio" name="exam_result" checked="checked" value="1" >Yes</input><br /><input type="radio" name="exam_result" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		SLC Register
	</td>
	<td>
		<input type="radio" name="slc_register" checked="checked" value="1" >Yes</input><br /><input type="radio" name="slc_register" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		Science KIT
	</td>
	<td>
		<input type="radio" name="science_kit" checked="checked" value="1" >Yes</input><br /><input type="radio" name="science_kit" value="0" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>
		Students Attendance Register
	</td>
	<td>
		<input type="radio" name="st_attendance_reg" checked="checked" value="1" >Yes</input><br /><input type="radio" name="st_attendance_reg" value="0" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>
		Teachers Attendance Register
	</td>
	<td>
		<input type="radio" name="teacher_att_register" checked="checked" value="1" >Yes</input><br /><input type="radio" name="teacher_att_register" value="0" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>
		Budget Recieved		
	</td>
	<td>
		<input type="text" name="budget_recieved"  />
	</td>
	</tr>
	
	
	<tr>
	<td>
		Budget Amount		
	</td>
	<td>
		<input type="text" name="budget_amount"  />
	</td>
	</tr>
	
	<tr>
	<td>
		Last Cheque Drawn on	
	</td>
	<td>
		<input type="text" name="cheque_drawn"  />
	</td>
	</tr>
	
	
	<tr>
	<td>
		Surveyor Name
	</td>
	<td>
		<input type="" name="surveyor_name" value="" ></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Survey Remarks
	</td>
	<td>
		<input type="" name="survey_remarks" value="" ></input> 
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
		<input type="radio" name="has_building" checked="checked" value="1" >Yes</input><br /><input type="radio" name="has_building" value="0" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>
		Its Own Building
	</td>
	<td>
		<input type="radio" name="own_building" checked="checked" value="1" >Yes</input><br /><input type="radio" name="own_building" value="0" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>
		School Has open space
	</td>
	<td>
		<input type="radio" name="open_space" checked="checked" value="1" >Yes</input><br /><input type="radio" name="open_space" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		Open Space Area
	</td>
	<td>
		<input type="" name="open_space_area" value="" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Rooms
	</td>
	<td>
		<input type="" name="rooms" value="" class="number"></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Rooms Used
	</td>
	<td>
		<input type="" name="rooms_used" value="" class="number"></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		Rooms Unused
	</td>
	<td>
		<input type="" name="rooms_unused" value="" class="number"></input> 
	</td>
	</tr>
	
	
	
	
	<tr>
	<td>
		Furniture Condition
	</td>
	<td>
		<input type="radio" name="furniture_condition" checked="checked" value="1" >Good</input><br /><input type="radio" name="furniture_condition" value="0" >Need Repair</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		Class Rooms
	</td>
	<td>
		<input type="" name="class_rooms" value="" class="number"></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		Office
	</td>
	<td>
		<input type="" name="office" value="" class="number"></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		Store
	</td>
	<td>
		<input type="" name="store" value="" class="number"></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		Need Repair
	</td>
	<td>
		<input type="radio" name="need_repair" checked="checked" value="1" >Yes</input><br /><input type="radio" name="need_repair" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		Nature of Seats
	</td>
	<td>
		<input type="radio" name="nature_of_seats" checked="checked" value="1" >Desks</input><br /><input type="radio" name="nature_of_seats" value="0" >Benches</input><input type="radio" name="nature_of_seats" value="3" >Both Benches & desks</input><br /><input type="radio" name="nature_of_seats" value="2" >Other</input>
	</td>
	</tr>
	
	
	
	<tr>
	<td>
		Project Status
	</td>
	<td>
		<input type="" name="project_status" value="" ></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		Project Year
	</td>
	<td>
		<input type="" name="project_year" value="" ></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		Facility of
	</td>
	<td>
		<input type="" name="facility_of" value="" ></input> 
	</td>
	</tr>
	
	<tr>
	<td>
		ECE
	</td>
	<td>
		<input type="radio" name="ece" checked="checked" value="1" >Yes</input><br /><input type="radio" name="ece" value="0" >No</input>
	</td>
	</tr>
	
	
	
	<tr>
	<td>
		Guide School to Community/HHs?(in Meters)
	</td>
	<td>
		<input type="" name="gthh_dist_near" value="" class="number" >Nearest</input> <br /><input type="" name="gthh_dist_far" value="" class="number" >Farthest</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		Guide School to Primary School distance?(in Meters)
	</td>
	<td>
		<input type="text" name="gtps_dist_near" value="" class="number" >Nearest</input> <br /><input type="" name="gtps_dist_far" value="" class="number" >Farthest</input>
	</td>
	</tr>
	
	
	

	<tr>
	<td>
		Guide School to Non-Guide school?(in KMs)
	</td>
	<td>
		<input type="" name="gtng_dist_near" value="">Nearest</input> <br /> <input type="" name="gtng_near_semis_code" value="" class="number" >Semis Code</input> <br /><input type="" name="gtng_dist_far" value="" >Farthest</input><br /> <input type="" name="gtng_far_semis_code" value="" class="number" >Semis Code</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		GT mnobility Allowance
	</td>
	<td>
		<input type="radio" name="gt_mobility_allowance" checked="checked" value="1" >Yes</input><br /><input type="radio" name="gt_mobility_allowance" value="0" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>
		GT Mobility Allowance Amount
	</td>
	<td>
		<input type="" name="gt_mobility_allowance_amount" value="" class="number" ></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		GT Transport Provided
	</td>
	<td>
		<input type="radio" name="gt_transport_provided" checked="checked" value="1" >Yes</input><br /><input type="radio" name="gt_transport_provided" value="0" >No</input>
	</td>
	</tr>
	
	
	
	<tr>
	<td>
		GT Mode of Transport
	</td>
	<td>
		<input type="" name="gt_mode_of_transport" value="" ></input> 
	</td>
	</tr>
	
	
	<tr>
	<td>
		GT Cluster Visit
	</td>
	<td>
		<input type="radio" name="gt_cluster_visit" checked="checked" value="1" >Yes</input><br /><input type="radio" name="gt_cluster_visit" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		GT JD ?
	</td>
	<td>
		<input type="radio" name="gt_jd" checked="checked" value="1" >Yes</input><br /><input type="radio" name="gt_jd" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		GT Notific
	</td>
	<td>
		<input type="radio" name="gt_notific" checked="checked" value="1" >Yes</input><br /><input type="radio" name="gt_notific" value="0" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>
		GT Orientation Attended
	</td>
	<td>
		<input type="radio" name="gt_orientation_attended" checked="checked" value="1" >Yes</input><br /><input type="radio" name="gt_orientation_attended" value="0" >No</input>
	</td>
	</tr>
	
	
	
	
	
	
	
	
	
	<tr><td><input type="submit" value="submit"></input></td><td></td></tr>

</table>
</form>