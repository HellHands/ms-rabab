<script src="<?php echo $this->webroot; ?>js/jquery.maskedinput.js" type="text/javascript"></script>

<form name="new_classroom_observation" id="new_classroom_observation" action="<?php echo $this->webroot?>home/submit_semis_form_hs_p1" method="post">
<div class="page1">
<div class="box_banner">Online SEMIS Entry Form</div>
<div class="tableHeaderDiv">
<?php if($semis == 'admin' || $semis == 'tesths') { ?>
<label>New SEMIS Code</label><input class="semis_code nonnegative number maxnine"  type="number" id="school_semis_new" name="school_semis_new"   value=""  ></input><a class="semis_code_button" href="javascript:void;" value="Verify" ><button type="button" onclick="return false;">Verify SEMIS Code</button></a>
<?php }else{ ?>
<label>New SEMIS Code</label></td><td><input readonly="readonly" class="semis_code nonnegative number maxnine"  type="number" id="school_semis_new" name="school_semis_new"   value="<?php echo $semis; ?>"  ></input>
<?php } ?>
<script>
$('.semis_code_button').click(function() {
	var semis_code_new = $('#school_semis_new').val(); 
	if(semis_code_new == '')
	{
		semis_code_new = 0;
	}
	
	$.ajax({
				url: '<?php echo $this->webroot?>home/get_school_basic_detail/'+semis_code_new,
				type: "GET",
				cache: false,
				success: function (html) {
					$('#table_first').html('');
					$('#table_first').html(html);
			},
			error: function(xhr, ajaxOptions, thrownError){
			}
		});
});
</script>
</div>
<?php if($semis == 'admin' || $semis == 'tesths') { ?>
<div id="table_first">
<div class="tableSubHeaderheading">Basic Information of School</div>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="" onload="init();" >
<tr><td><label>District</label></td><td>
						<select name="bi_school_district" id="district_code">
							<option selected="selected" value="0">All</option>
							<?php foreach($districts as $district) { ?>
								<option value="<?php echo $district['SemisCodeDistrict']['district_id']; ?>"><?php echo $district['SemisCodeDistrict']['district']; ?></option>
							<?php } ?>
						</select>
						</td>
						</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="tehsil" >	
</table>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="unioncouncil" >	
</table>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" >	
<tr><td><label>Old SEMIS Code</label></td><td><input class="semis_code" readonly="readonly" type="number" id="school_semis_old" name="school_semis_old" value="" ></input></td></tr>
<tr><td><label>Q3. Tappa</label></td><td><input type="text" name="bi_school_tappa" value="" ></input></td>
<td><label>Q4. Deh</label></td><td><input type="text" name="bi_school_deh" value="" ></input></td></tr>
<tr><td><label>Q5. National Assembly</label></td><td><input type="number" class="nonnegative number maxthree" name="bi_school_na" value="" ></input></td></tr>
<tr><td><label>Q6. Provincial Sindh</label></td><td><input type="number" class="nonnegative number maxthree"  name="bi_school_ps" value="" ></input></td></tr>
<tr><td><label>Q7.(i) School Name</label></td><td><input type="text" name="bi_school_name" value="" ></input></td></tr>
<tr><td><label>Q7.(ii) School Address</label></td><td><input type="text" name="bi_school_address" value="" ></input></td></tr>
<tr><td><label>Q7.(iii) School Village / Mohalla</label></td><td><input type="text" name="bi_school_village_mohallah" value="" ></input></td></tr>
<tr><td><label>Q7.(iv) Phone Number</label></td><td><input type="text" name="bi_school_phone_number" class="nonnegative number " maxlength="11" value="" ></input></td></tr>
<tr><td colspan=2 ><h6><b>Q8. Information About Head of School / Head Teacher</b></h6></td></tr>
<tr><td><label>a. Head Teacher Name</label></td><td><input type="text" name="hti_name" value="" ></input></td></tr>
<tr><td><label>b. Head Teacher CNIC</label></td><td><input type="text" name="hti_cnic" value="" ></input></td></tr>
<tr><td><label>c. Head Teacher Contact Number (Tele/Mob)</label></td><td><input type="text" name="hti_number" maxlength="11" value="" ></input></td></tr>
<tr><td><label>d. Head Teacher Gender</label></td><td>
			<input type="radio" name="hti_gender" value="1" >Male</input><br>
			<input type="radio" name="hti_gender" value="2" >Female</input><br></td>
</tr>
<tr>
<td>
<label>c. Head Teacher Designation</label></td>
<td>
			<input type="radio" name="hti_designation" value="1" >Head Master</input><br>
			<input type="radio" name="hti_designation" value="2" >Incharge</input><br>
			<input type="radio" name="hti_designation" value="3" >Teacher</input><br>
			<input type="radio" name="hti_designation" value="4" >Other (Specify)</input><br>
			<script>
				$('input[name=hti_designation]').on('keyup keypress blur change', function() {
					var hti_designation = $('input[name=hti_designation]:checked').val();
					if(hti_designation == '4')
					{
						$('.showifotherdesignation_hti').val('');
						$('.showifotherdesignation_hti').attr('style','display:block;');
					}else
					{
						$('.showifotherdesignation_hti').val('');
						$('.showifotherdesignation_hti').attr('style','display:none;');
					}
				});
			</script>
			<input class="showifotherdesignation_hti" type="text" name="hti_designation_specify" value="" style="display:none;" ></input><br>
</td>
</tr>
<tr><td colspan="2" ><h6><b>Q9. Detailed School Information</b></h6></td></tr>
<tr><td><label>a. Status</label></td>
<td>
			<input type="radio" name="dsi_status" value="1" >Functional</input><br>
			<input type="radio" name="dsi_status" value="2" >Temporary Closed</input><br>
			<input type="radio" name="dsi_status" value="3" >Permanent Closed</input><br>
</td>
</tr>
</table>
<table class="CSSTableGenerator">
			<script>
				$('input[name=dsi_status]').on('keyup keypress blur change', function() {
					var dsi_status = $('input[name=dsi_status]:checked').val();
					if(dsi_status == '2' || dsi_status == '3')
					{
						$('input[name=dsi_closure_reason]').attr('checked', false);  
						$('.temporaryclosedreason_dsi').val('');
						$('.temporaryclosedreason_dsi').attr('style','display:block;');
					}else
					{
						$('input[name=dsi_closure_reason]').attr('checked', false);  
						$('.temporaryclosedreason_dsi').val('');
						$('.temporaryclosedreason_dsi').attr('style','display:none;');
					}
				});
			</script>
<tr style="display:none;" class="temporaryclosedreason_dsi" >
<td>
	<label>b. If School is Temporary Closed or Permanently Closed Date of Closure</label>
</td>
<td>			
	<div id="well">
	<div id="datetimepicker3" class="input-append">
		<input readonly="readonly" class="temporaryclosedreason_dsi calendar" data-format="yyyy-MM-dd" style="display:none;" name="dsi_closure_date" type="text"></input>
		<span class="add-on">
		  <i data-time-icon="icon-time" data-date-icon="icon-calendar">
		  </i>
		</span>
	</div>
	</div>
</td>
</tr>
<tr style="display:none;" class="temporaryclosedreason_dsi" ><td>
<label>c. If School is permanently or Temporary closed select the reason </label></td>
<td>
			<div id="temporaryclosedreason_dsi" >
			<input type="radio" class="dsi_closure_reason" name="dsi_closure_reason" value="1" >Non Availability of Teacher</input><br>
			<input type="radio" class="dsi_closure_reason" name="dsi_closure_reason" value="2" >No Population / No Enrollment</input><br>
			<input type="radio" class="dsi_closure_reason" name="dsi_closure_reason" value="3" >Merged or shifted</input><br>
			<input type="radio" class="dsi_closure_reason" name="dsi_closure_reason" value="4" >School ceases to function long time ago and no record available for this school (not in existence)</input><br>
			<input type="radio" class="dsi_closure_reason" name="dsi_closure_reason" value="5" >School Still inundated</input><br>
			<input type="radio" class="dsi_closure_reason" name="dsi_closure_reason" value="6" >School still being used for IDPs</input><br>
			<input type="radio" class="dsi_closure_reason" name="dsi_closure_reason" value="7" >Due to Law and Order situation</input><br>
			</div>
</td>
</tr>
</table>
</div>
<?php }else{ ?>
<div class="tableSubHeaderheading">Basic Information of School</div>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" width="100%">
	<tr><td><label>Old SEMIS Code</label></td><td><input readonly="readonly" class="semis_code" type="number" id="school_semis_old" name="school_semis_old" value="<?php echo $schools[0]['Univ2012a']['school_id_old']; ?>" ></input></td></tr>
	<tr>
		<td><label>District</label></td>
		<td>
		<select name="bi_school_district" id="district_code">
			<option selected="selected" value="0">All</option>
			<?php foreach($districts as $district) { ?>
				<option <?php if($district['SemisCodeDistrict']['district_id'] == $schools[0]['Univ2012a']['DistrictID']) { ?> selected="selected" <?php } ?> value="<?php echo $district['SemisCodeDistrict']['district_id']; ?>"><?php echo $district['SemisCodeDistrict']['district']; ?></option>
			<?php } ?>
		</select>
		</td>
	</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="tehsil" width="100%">	
		<tr>
			<td width="25%"><label>Tehsil</label></td>
			<td width="25%">
				<select name="bi_school_taluka" id="tehsil_code">
					<option selected="selected" value="0">All</option>
					<?php foreach($tehsils as $tehsil) { if($tehsil['CodesForDistrictAndTehsil']['district_id'] == $schools[0]['Univ2012a']['DistrictID']) { ?>
						<option <?php if($tehsil['CodesForDistrictAndTehsil']['tehsil_id'] == $schools[0]['Univ2012a']['TehsilID']) { ?> selected="selected" <?php } ?> value="<?php echo $tehsil['CodesForDistrictAndTehsil']['tehsil_id']; ?>"><?php echo $tehsil['CodesForDistrictAndTehsil']['tehsil']; ?></option>
					<?php } } ?>
				</select>
			</td>
			<td width="25%">
			</td>
			<td width="25%">
			</td>

		</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="unioncouncil" width="100%">	
		<tr>
			<td width="25%">Union Councils</td>
			<td width="25%">
				<select name="bi_school_uc" id="union_council_id" >
					
					<option selected="selected" value="0">All</option>
					<?php foreach($union_councils as $union_council) { if($schools[0]['Univ2012a']['TehsilID'] == $union_council['CodesForUc']['tehsil_id']) { ?>
						<option <?php if($union_council['CodesForUc']['uc_id'] == $schools[0]['Univ2012a']['UnionCouncilID']) { ?> selected="selected" <?php } ?> value="<?php echo $union_council['CodesForUc']['uc_id'];?>" >
					<?php echo $union_council["CodesForUc"]["uc_name"]; ?> </option><?php } } ?>
				</select>
			</td>
			<td width="25%">
			</td>
			<td width="25%">
			</td>
		</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" >
<tr><td><label>Q3. Tappa</label></td><td><input type="text" name="bi_school_tappa" value="" ></input></td>
<td><label>Q4. Deh</label></td><td><input type="text" name="bi_school_deh" value="" ></input></td></tr>
<tr><td><label>Q5. National Assembly</label></td><td><input type="number" class="nonnegative number maxthree" name="bi_school_na" value="" ></input></td>
<td><label>Q6. Provincial Sindh</label></td><td><input type="number" class="nonnegative number maxthree"  name="bi_school_ps" value="" ></input></td></tr>
<tr><td><label>Q7.(i) School Name</label></td><td><input type="text" name="bi_school_name" value="<?php echo $schools[0]['Univ2012a']['Prefix'].' - '.$schools[0]['Univ2012a']['SchoolName']; ?>" ></input></td>
<td><label>Q7.(ii) School Address</label></td><td><input type="text" name="bi_school_address" value="<?php echo $schools[0]['Univ2012a']['SchoolAddress']; ?>" ></input></td></tr>
<tr><td><label>Q7.(iii) School Village / Mohalla</label></td><td><input type="text" name="bi_school_village_mohallah" value="<?php echo $schools[0]['Univ2012a']['Village-Mohalla']; ?>" ></input></td>
<td><label>Q7.(iv) Phone Number</label></td><td><input type="text" name="bi_school_phone_number" value="<?php echo $schools[0]['Univ2012a']['Phone']; ?>" ></input></td></tr>
<tr style="color:#007B47;font-size:13px;font-weight:bold;background:none !important;"><td colspan=4>Q8. Information About Head of School / Head Teacher</td></tr>
<tr><td><label>a. Head Teacher Name</label></td><td><input type="text" name="hti_name" value="" ></input></td>
<td><label>b. Head Teacher CNIC</label></td><td><input type="text" name="hti_cnic" value="" ></input></td></tr>
<tr><td><label>c. Head Teacher Contact Number (Tele/Mob)</label></td><td><input type="text" name="hti_number" value="" ></input></td>
<td><label>d. Head Teacher Contact Number (Tele/Mob)</label></td><td>
			<input type="radio" name="hti_gender" value="1" >Male</input><br>
			<input type="radio" name="hti_gender" value="2" >Female</input><br></td>
</tr>
<tr>
<td >
<label>c. Head Teacher Designation</label></td>
<td>
			<input type="radio" name="hti_designation" value="1" >Head Master</input><br>
			<input type="radio" name="hti_designation" value="2" >Incharge</input><br>
			<input type="radio" name="hti_designation" value="3" >Teacher</input><br>
			<input type="radio" name="hti_designation" value="4" >Other (Specify)</input><br>
			<script>
				$('input[name=hti_designation]').on('keyup keypress blur change', function() {
					var hti_designation = $('input[name=hti_designation]:checked').val();
					if(hti_designation == '4')
					{
						$('.showifotherdesignation_hti').val('');
						$('.showifotherdesignation_hti').attr('style','display:block;');
					}else
					{
						$('.showifotherdesignation_hti').val('');
						$('.showifotherdesignation_hti').attr('style','display:none;');
					}
				});
			</script>
			<input class="showifotherdesignation_hti" type="text" name="hti_designation_specify" value="" style="display:none;" ></input><br>
</td>
<td colspan="2">
</td>
</tr>
<tr style="color:#007B47;font-size:13px;font-weight:bold;background:none !important;"><td colspan="4" >Q9. Detailed School Information</td></tr>
<tr><td><label>a. Status</label></td>
<td colspan="3">
			<input type="radio" name="dsi_status" value="1" >Functional</input>
			<input type="radio" name="dsi_status" value="2" >Temporary Closed</input>
			<input type="radio" name="dsi_status" value="3" >Permanent Closed</input>
</td>

</tr>
</table>
<table class="CSSTableGenerator">
			<script>
				$('input[name=dsi_status]').on('keyup keypress blur change', function() {
					var dsi_status = $('input[name=dsi_status]:checked').val();
					if(dsi_status == '2' || dsi_status == '3')
					{
						$('input[name=dsi_closure_reason]').attr('checked', false);  
						$('.temporaryclosedreason_dsi').val('');
						$('.temporaryclosedreason_dsi').attr('style','display:block;');
					}else
					{
						$('input[name=dsi_closure_reason]').attr('checked', false);  
						$('.temporaryclosedreason_dsi').val('');
						$('.temporaryclosedreason_dsi').attr('style','display:none;');
					}
				});
			</script>
<tr style="display:none;" class="temporaryclosedreason_dsi" >
<td>
	<label>b. If School is Temporary Closed or Permanently Closed Date of Closure</label>
</td>
<td>			
	<div id="well">
	<div id="datetimepicker3" class="input-append">
		<input readonly="readonly" class="temporaryclosedreason_dsi calendar" data-format="yyyy-MM-dd" style="display:none;" name="dsi_closure_date" type="text"></input>
		<span class="add-on">
		  <i data-time-icon="icon-time" data-date-icon="icon-calendar">
		  </i>
		</span>
	</div>
	</div>
</td>
</tr>
<tr style="display:none;" class="temporaryclosedreason_dsi" ><td>
<label>c. If School is permanently or Temporary closed select the reason </label></td>
<td>
			<div id="temporaryclosedreason_dsi" >
			<input type="radio" class="dsi_closure_reason" name="dsi_closure_reason" value="1" >Non Availability of Teacher</input><br>
			<input type="radio" class="dsi_closure_reason" name="dsi_closure_reason" value="2" >No Population / No Enrollment</input><br>
			<input type="radio" class="dsi_closure_reason" name="dsi_closure_reason" value="3" >Merged or shifted</input><br>
			<input type="radio" class="dsi_closure_reason" name="dsi_closure_reason" value="4" >School ceases to function long time ago and no record available for this school (not in existence)</input><br>
			<input type="radio" class="dsi_closure_reason" name="dsi_closure_reason" value="5" >School Still inundated</input><br>
			<input type="radio" class="dsi_closure_reason" name="dsi_closure_reason" value="6" >School still being used for IDPs</input><br>
			<input type="radio" class="dsi_closure_reason" name="dsi_closure_reason" value="7" >Due to Law and Order situation</input><br>
			</div>
</td>
</tr>
</table>
<?php } ?>
<script>
$('#district_code').on('keyup keypress blur change', function() {
			var district_id = $('#district_code').val();
			if(district_id == "0"){
				$('#tehsil').empty();
				$('#unioncouncil').empty();
			}
			else{
				$('#tehsil').empty();
				$('#unioncouncil').empty();
				$.ajax({
					        url: '<?php echo $this->webroot?>home/submit_semis_query/district/'+district_id,
						    type: "GET",
						    cache: false,
						    success: function (html) {
						    $('#tehsil').html('');
							$('#tehsil').html(html);
						    $('#tehsil').show(2000);
							$('#tehsil_code').on('keyup keypress blur change', function() {
								var tehsil_id = $('#tehsil_code').val();
								
									if(tehsil_id == "0")
										{
											$('#unioncouncil').empty();
										}
									else
										{
											$.ajax({
												url: '<?php echo $this->webroot?>home/submit_semis_query/tehsil/'+tehsil_id,
												type: "GET",
												cache: false,
												success: function (html) {
												$('#unioncouncil').html('');
												$('#unioncouncil').html(html);
												$('#unioncouncil').show(2000);
												},
												error: function(xhr, ajaxOptions, thrownError){
												}
											});
											
										}
														
									});
							
							
							
							},
							error: function(xhr, ajaxOptions, thrownError){
							}
						});
				}
				});
</script>
<table class="CSSTableGenerator">
<tr><td width="25%">
<label>Q10. Location</label></td>
<td width="25%">
			<input type="radio" name="dsi_location" value="1" >Urban</input><br>
			<input type="radio" name="dsi_location" value="2" >Rural</input><br>
</td>
<td width="25%">
<label>Q11. Level of School</label></td>
<td width="25%">
			<input type="radio" name="dsi_level" value="4" >Secondary</input><br>
			<input type="radio" name="dsi_level" value="5" >Higher Secondary</input><br>
</td>
</tr>
<tr><td><label>Q12. Does this school have approved Scheduled New Expenditure (SNE)</label></td>
<td>
			<input type="radio" name="dsi_sch_sne" value="1" >Yes</input><br>
			<input type="radio" name="dsi_sch_sne" value="2" >No</input><br></td>
<td><label>Q13. School Administration</label></td>
<td>			<input type="radio" name="dsi_sch_admin" value="1" >DO Local Bodies</input><br>
			<input type="radio" name="dsi_sch_admin" value="2" >DO Secondary</input><br></td></tr>
<tr><td><label>Q14. School Gender</label></td>
<td colspan="3">			<input type="radio" name="dsi_sch_gender" value="1" >Boys</input>
			<input type="radio" name="dsi_sch_gender" value="2" >Girls</input>
			<input type="radio" name="dsi_sch_gender" value="3" >Mixed School / Co-Education</input></td></tr>
<tr><td><label>Q15. Medium [Multiple Ticks Allowed] and Medium Wise Enrollment as on reference date 31/10/2013</label></td>
<td colspan="3">			
			<input class="dsi_sch_medium" type="Checkbox"  name="dsi_sch_medium0" value="1" >Urdu Medium</input>
			<input class="dsi_sch_medium" type="Checkbox"  name="dsi_sch_medium1" value="2" >Sindhi Medium</input>
			<input class="dsi_sch_medium" type="Checkbox"  name="dsi_sch_medium2" value="3" >English Medium</input>
</td>
</tr>
<script>
$('.dsi_sch_medium').on('keyup keypress blur change', function() {
	
	$('.urdumediumenrollment_display').attr('style','display:none;');
	$('.sindhimediumenrollment_display').attr('style','display:none;');
	$('.englishmediumenrollment_display').attr('style','display:none;');
	
	$('.dsi_sch_medium:not(:checked)').each(function() {
		var dsi_sch_medium	= $(this).val();
			if(dsi_sch_medium == '1')
			{
				$('.dsi_enrollment_urdu').val('');
			}
			if(dsi_sch_medium == '2')
			{
				$('.dsi_enrollment_sindhi').val('');
			}
			if(dsi_sch_medium == '3')
			{
				$('.dsi_enrollment_english').val('');
			}
	});
	
	$('.dsi_sch_medium:checked').each(function() {
		var dsi_sch_medium	= $(this).val();
			if(dsi_sch_medium == '1')
			{
				$('.urdumediumenrollment_display').attr('style','display:block;');
			}
			if(dsi_sch_medium == '2')
			{
				$('.sindhimediumenrollment_display').attr('style','display:block;');
			}
			if(dsi_sch_medium == '3')
			{
				$('.englishmediumenrollment_display').attr('style','display:block;');
			}
	});
});

</script>
<tr class="urdumediumenrollment_display" style="display:none;" ><td><label>Urdu Medium Enrollment</label></td><td><input type="text" class="dsi_enrollment_urdu" name="dsi_enrollment_urdu" value="" ></input><br></td><td colspan="2"></td></tr>

<tr class="sindhimediumenrollment_display" style="display:none;" ><td><label>Sindhi Medium Enrollment</label></td><td><input type="text" class="dsi_enrollment_sindhi" name="dsi_enrollment_sindhi" value="" ></input><br></td><td colspan="2"></td></tr>
<tr class="englishmediumenrollment_display" style="display:none;" ><td><label>English Medium Enrollment</label></td><td><input type="text" class="dsi_enrollment_english" name="dsi_enrollment_english" value="" ></input><br></td><td colspan="2"></td></tr>

<tr><td><label>Q16. Shift</label></td>
<td colspan="3">
			<input type="radio" name="dsi_shift" value="1" >Morning</input>
			<input type="radio" name="dsi_shift" value="2" >Afternoon / Evening</input>
			<input type="radio" name="dsi_shift" value="3" >Both Shifts</input>
</td>
</tr>
<tr>
<td>
	<label>Q17. Is this a branch School ?</label>
</td>
<td colspan="3">
			<input type="radio" name="dsi_branch_school" value="1" >Yes</input>
			<input type="radio" name="dsi_branch_school" value="2" >No</input>
</td>
</tr>
<script>
$('input[name=dsi_branch_school]').on('keyup keypress blur change', function() {
    var dsi_branch_school = $('input[name=dsi_branch_school]:checked').val();
	if(dsi_branch_school == '1')
	{
		$('.dsi_main_school_semis_code').val('');
		$('.branch_school_display').attr('style','display:block;');
	}else
	{
		$('.dsi_main_school_semis_code').val('');
		$('.branch_school_display').attr('style','display:none;');
	}
});

</script>
</table>
<table class="CSSTableGenerator">
		<tr class="branch_school_display nonnegative number maxnine" style="display:none;" ><td style="width:14%;" ><label >a. SEMIS Code of Main School</label></td><td style="width:13%;" ><input type="number" class="nonnegative number maxnine dsi_main_school_semis_code" name="dsi_main_school_semis_code" value="" ></input></td><td colspan="2"></td></tr>
		<tr class="branch_school_display" style="display:none;" ><td style="width:14%;" ><label>b. Name of Main School</label></td><td style="width:13%;" ><input type="text" class="dsi_main_school_semis_code" name="dsi_main_school_name" value="" ></input></td><td colspan="2"></td></tr>
</table>
<table class="CSSTableGenerator" >
<tr><td><label>Q18. Year of Establishment</label></td>
	<td>
		<div class="">
			<div id="datetimepicker4" class="input-append">
				<input  readonly="readonly" data-format="yyyy" name="dsi_year_establishment" type="text"></input>
				<span class="add-on">
				  <i data-time-icon="icon-time" data-date-icon="icon-calendar">
				  </i>
				</span>
			</div>
		</div>
</td>
</tr>
<tr style="color:#007B47;font-size:13px;font-weight:bold;background:none !important;">
<td colspan=4 >School Building
</td>
</tr>

<tr><td><label>Q19. (a) Ownership of School Building</label></td>
			<td>
				<input type="radio" name="sbi_ownership" value="1" >School has its own Government Building</input><br>
				<input type="radio" name="sbi_ownership" value="2" >Other Government School Building (shared)</input><br>
				<input type="radio" name="sbi_ownership" value="3" >Rented</input><br>
				<input type="radio" name="sbi_ownership" value="4" >Other Building</input><br>
				<input type="radio" name="sbi_ownership" value="5" >No Building</input>
			</td>
</tr>
<script>
$('input[name=sbi_ownership]').on('keyup keypress blur change', function() {
    var sbi_ownership = $('input[name=sbi_ownership]:checked').val();
	
	$('input[name=sbi_no_building_sch_placed]:checked').attr('checked', false);
	$('input[name=sbi_school_building_construction_type]:checked').attr('checked', false);
	$('input[name=sbi_school_building_condition]:checked').attr('checked', false);
	$('#sbi_other_school_building_semis').val('');
	$('#sbi_school_building_year_construction').val('');
	$('#sbi_school_building_total_rooms').val('');
	$('#sbi_school_building_class_rooms').val('');
	 
	
	
	if(sbi_ownership == '5')
	{
		$('.sbi_nobuildingdisplay').attr('style','display:block;');
		$('.sbi_schoolbuildingdisplay').attr('style','display:none;');
		$('.sbi_otherschoolbuildingdisplay').attr('style','display:none;');
	}else
	{	
		$('.sbi_schoolbuildingdisplay').attr('style','display:block;');
		$('.sbi_nobuildingdisplay').attr('style','display:none;');
		$('.sbi_otherschoolbuildingdisplay').attr('style','display:none;');
	}
	if(sbi_ownership == '2')
	{
		$('.sbi_otherschoolbuildingdisplay').attr('style','display:block;');
	}
});
</script>
</table>
<table class="CSSTableGenerator">
<tr style="display:none;" class="sbi_nobuildingdisplay" ><td><label>Q19. (b) If No Building then School Placed</label></td>
			<td>
				<input type="radio" name="sbi_no_building_sch_placed" value="1" >Under Tree</input>
				<input type="radio" name="sbi_no_building_sch_placed" value="2" >Under Chapra</input>
				<input type="radio" name="sbi_no_building_sch_placed" value="3" >Hut</input>
			</td>


<td class="sbi_otherschoolbuildingdisplay">
	<label>Q19. (c) If Other Government School Building (shared) write SEMIS Code of school that owns building</label>
</td>
			<td>
				<input type="text" class="nonnegative number maxnine" id="sbi_other_school_building_semis" name="sbi_other_school_building_semis" value="" ></input>
			</td>
</tr>
</table>
<table class="CSSTableGenerator">
<tr style="display:none;" class="sbi_schoolbuildingdisplay" ><td colspan=2><label>Q19. (d) 19 (a) option 1,2,3 or 4 selected then fill following details</label></td></tr>
<tr style="display:none;" class="sbi_schoolbuildingdisplay" ><td><label>Q19. (d) (i) Construction Year</label></td>
	<td>
		<div class="well">
			<div id="datetimepicker5" class="input-append">
				<input readonly="readonly" data-format="yyyy" type="text" id="sbi_school_building_year_construction" name="sbi_school_building_year_construction" value="" ></input>
				<span class="add-on">
				  <i data-time-icon="icon-time" data-date-icon="icon-calendar">
				  </i>
				</span>
			</div>
		</div>
	</td>
<td class="sbi_schoolbuildingdisplay"><label>Q19. (d) (ii) Construction Type of Building</label></td>
			<td>
				<input type="radio" name="sbi_school_building_construction_type" value="1" >Pakka</input>
				<input type="radio" name="sbi_school_building_construction_type" value="2" >Katcha</input>
				<input type="radio" name="sbi_school_building_construction_type" value="3" >Mixed</input>
			</td>
</tr>
<tr style="display:none;" class="sbi_schoolbuildingdisplay" ><td><label>Q19. (d) (ii) Condition of the Building</label></td>
			<td>
				<input type="radio" name="sbi_school_building_condition" value="1" >Satisfactory</input>
				<input type="radio" name="sbi_school_building_condition" value="2" >Needs Repair</input>
				<input type="radio" name="sbi_school_building_condition" value="3" >Dangerous</input>
			</td>
<td class="sbi_schoolbuildingdisplay"><label>Q19. (d) (iv) Total Number of Rooms (All Rooms)</label></td><td><input type="number" class="nonnegative number maxthree" id="sbi_school_building_total_rooms" name="sbi_school_building_total_rooms" value="" ></input></td></tr>
<tr style="display:none;" class="sbi_schoolbuildingdisplay" ><td><label>Q19. (d) (iv) Total Number of Class Rooms</label></td><td><input type="number" class="nonnegative number maxthree" id="sbi_school_building_class_rooms" name="sbi_school_building_class_rooms" value="" ></input></td></tr>


<tr style="color:#007B47;font-size:13px;font-weight:bold;background:none !important;">
	<td colspan=4 >
		Q20. Basic Facilities
	</td>
</tr>

<tr><td><label>Q20. (a) Condition of Boundary Wall</label></td>
			<td>
				<input type="radio" name="sbf_condition_bwall" value="1" >Satisfactory</input>
				<input type="radio" name="sbf_condition_bwall" value="2" >Needs Repair</input>
				<input type="radio" name="sbf_condition_bwall" value="3" >Dangerous</input>
				<input type="radio" name="sbf_condition_bwall" value="4" >No Boundary Wall</input>
			</td>
<td><label>Q20. (b) Are the Toilets Available</label></td>
			<td>
				<input type="radio" name="sbf_toilets" value="1" >Yes</input>
				<input type="radio" name="sbf_toilets" value="2" >No</input>
			</td>
</tr>
<script>
$('input[name=sbf_toilets]').on('keyup keypress blur change', function() {
    var sbf_toilets = $('input[name=sbf_toilets]:checked').val();
	
	if(sbf_toilets == '1')
	{
		$('#sbi_school_toilets_number_func').val('');
		$('.sbf_schooltoiletsdisplay').attr('style','display:block;');
	}else
	{
		$('#sbi_school_toilets_number_func').val('');
		$('.sbf_schooltoiletsdisplay').attr('style','display:none;');
	}
	
});
</script>
<tr style="display:none;" class="sbf_schooltoiletsdisplay" ><td><label>Q20. (b) If Toilets Available Write Number of Functional</label></td>
			<td>
				<input type="number" class="nonnegative number maxthree" id="sbi_school_toilets_number_func" name="sbi_school_toilets_number_func" value="" ></input>
			</td>
<td class="sbf_schooltoiletsdisplay"><label>Q20. (b) If Toilets Available Write Number non functional</label></td>
			<td>
				<input type="number" class="nonnegative number maxthree" name="sbi_school_toilets_number_nfunc" value="" ></input>
			</td>
</tr>
<tr><td><label>Q20. (c) Is there Drinking Water Available ?</label></td>
			<td colspan="3">
				<input type="radio" name="sbf_water_available" value="1" >Yes</input>
				<input type="radio" name="sbf_water_available" value="2" >No</input>
			</td>
</tr>
<script>
$('input[name=sbf_water_available]').on('keyup keypress blur change', function() {
    var sbf_water_available = $('input[name=sbf_water_available]:checked').val();
	
	$('input[name=sbf_water_available_source]').attr('checked', false);
	
	if(sbf_water_available == '1')
	{
		$('.sbf_schooldrinkingdisplay').attr('style','display:block;');
	}else
	{
		$('.sbf_schooldrinkingdisplay').attr('style','display:none;');
	}
	
});
</script>
<tr style="display:none;" class="sbf_schooldrinkingdisplay" ><td><label>Q20. (c) If Drinking Water Available then write source ? </label></td>
			<td colspan="3">
				<input type="checkbox" name="sbf_water_available_source0" value="1" >Piped Water</input>
				<input type="checkbox" name="sbf_water_available_source1" value="2" >Well</input>
				<input type="checkbox" name="sbf_water_available_source2" value="3" >Hand Pump</input>
				<input type="checkbox" name="sbf_water_available_source3" value="4" >Electric Motor</input>
			</td>
</tr>
<tr><td><label>Q20. (d) Source of Electricity ? </label></td>
			<td colspan="3">
				<input type="radio" name="sbf_electricity_source" value="1" >Electricity Through Meter</input>
				<input type="radio" name="sbf_electricity_source" value="2" >Electricity Without Meter</input>
				<input type="radio" name="sbf_electricity_source" value="3" >No Electricity</input>
			</td>
</tr>
<tr style="color:#007B47;font-size:13px;font-weight:bold;background:none !important;"><td colspan=4 >
					Q21. (a) Total Number of Working Teachers 
</td></tr>

<tr><td><label>Q21. (a) (i)  Government Male Teachers</label></td><td><input class="teachers_number nonnegative number maxthree" id="sti_govt_teacher_number_male" type="number" name="sti_govt_teacher_number_male" value="" ></input></td>
<td><label>Q21. (a) (ii)  Non Government Male Teachers</label></td><td><input class="teachers_number nonnegative number maxthree" id="sti_non_govt_teacher_number_male" type="number" name="sti_non_govt_teacher_number_male" value="" ></input></td></tr>
<tr><td><label>Q21. (a) (iii)  Government Female Teachers</label></td><td><input class="teachers_number nonnegative number maxthree" id="sti_govt_teacher_number_female" type="number" name="sti_govt_teacher_number_female" value="" ></input></td>
<td><label>Q21. (a) (iv)  Non Government Female Teachers</label></td><td><input class="teachers_number nonnegative number maxthree" id="sti_non_govt_teacher_number_female" type="number" name="sti_non_govt_teacher_number_female" value="" ></input></td></tr>
<tr><td><label>Q21. (a) (v) Total Teachers</label></td><td><input class="total_teachers" type="number" readonly="readonly" name="sti_teacher_mf_total" value="" ></input></td><td colspan="2"></td></tr>

<tr style="color:#007B47;font-size:13px;font-weight:bold;background:none !important;"><td colspan=4 >
				Q21. (b) Total Number of Non Teaching Staff 
</td></tr>
<tr><td><label>Q21. (b) (i)  Non Teaching Staff Male</label></td><td><input type="number" class="non_teacher_number nonnegative number maxthree" id="sti_govt_non_teaching_number_male" name="sti_govt_non_teaching_number_male" value="" ></input></td>
<td><label>Q21. (b) (ii)  Non Teaching Staff Female</label></td><td><input type="number" class="non_teacher_number nonnegative number maxthree" id="sti_govt_non_teaching_number_female" name="sti_govt_non_teaching_number_female" value="" ></input></td></tr>
<tr><td><label>Q21. (b) (iii) Total Non Teaching Staff</label></td><td><input class="total_non_teachers" readonly="readonly" type="number" name="sti_govt_non_teaching_mf_total" value="" ></input></td>

<td><label>Signature of Head of the School Head Teacher / DDO Secondary and Higher Secondary School</label></td><td>
				<input class="" type="radio" name="ht_signature_page_1" value="1" >Yes</input>
				<input class="" type="radio" name="ht_signature_page_1" value="2" >No</input>
			
			</td></tr>
</table>
</div>
<div class="page2" style="display:none;" >
<table border="0" cellpadding="0" cellspacing="0"  class="CSSTableGenerator">
<tr>
	<td colspan=5 >
		<h6><b>Q22. (b) List of Surrounding Government Schools [Schools within same premises or adjacent schools or where distance within 500 meters (half kilometers)] </b></h6>
	</td>
</tr>
<tr>
	<td>S.No.</td>
	<td>SEMIS Code</td>
	<td>School Name (Prefix + Name)</td>
	<td>Type of School</td>
	<td>Distance in Meters</td>
</tr>
<tr>
	<td>1</td>
	<td><input type="number" name="asi_sch1_semis_code" class="semis_code nonnegative number maxnine" value=""></input></td>
	<td><input type="text" name="asi_sch1_name" value=""></input></td>
	<td>
		<select name="asi_sch1_type" >
			<option value="1" >Same Premises</option>
			<option value="2" >Adjacent</option>
			<option value="3" >Within 500 Meters</option>
		</select>
	</td>
	<td><input type="number" class="nonnegative number maxthree" name="asi_sch1_distance" value=""></input></td>
</tr>
<tr>
	<td>2</td>
	<td><input type="number" name="asi_sch2_semis_code" class="semis_code nonnegative number maxnine" value=""></input></td>
	<td><input type="text" name="asi_sch2_name" value=""></input></td>
	<td>
		<select name="asi_sch2_type" >
			<option value="1" >Same Premises</option>
			<option value="2" >Adjacent</option>
			<option value="3" >Within 500 Meters</option>
		</select>
	</td>
	<td><input type="number" class="nonnegative number maxthree" name="asi_sch2_distance" value=""></input></td>
</tr>
<tr>
	<td>3</td>
	<td><input type="number" name="asi_sch3_semis_code" class="semis_code nonnegative number maxnine" value=""></input></td>
	<td><input type="text" name="asi_sch3_name" value=""></input></td>
	<td>
		<select name="asi_sch3_type" >
			<option value="1" >Same Premises</option>
			<option value="2" >Adjacent</option>
			<option value="3" >Within 500 Meters</option>
		</select>
	</td>
	<td><input type="number" class="nonnegative number maxthree" name="asi_sch3_distance" value=""></input></td>
</tr>
<tr>
	<td>4</td>
	<td><input type="number" name="asi_sch4_semis_code" class="semis_code nonnegative number maxnine" value=""></input></td>
	<td><input type="text" name="asi_sch4_name" value=""></input></td>
	<td>
		<select name="asi_sch4_type" >
			<option value="1" >Same Premises</option>
			<option value="2" >Adjacent</option>
			<option value="3" >Within 500 Meters</option>
		</select>
	</td>
	<td><input type="number" class="nonnegative number maxthree" name="asi_sch4_distance" value=""></input></td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0"  class="CSSTableGenerator">
<tr><td colspan="3"><h6><b>Q23. Total Number of Surrounding Government and Private Schools [Schools within same premises or adjacent schools or where distance within 500 meters (half kilometers)]</b></h6></td></tr>
<tr>
	<td>Number of Government Schools</td>
	<td>Number of Private Schools</td>
	<td>Total Number of Surrounding Schools</td>
</tr>
<tr>
	<td><input class="teachersnumbersfields nonnegative number maxthree"" type="number" value="0" name="asi_total_govt_schools" ></input></td>
	<td><input class="teachersnumbersfields nonnegative number maxthree" type="number" value="0" name="asi_total_private_schools" ></input></td>
	<td><input readonly="readonly" type="number" class="asi_total_gp_sur_sch" value="0" name="asi_grand_total_gp_schools" ></input></td>
</tr>
<script>
$('.teachersnumbersfields').on('keyup keypress blur change', function() {
    var asi_total_govt_schools = parseInt($('input[name=asi_total_govt_schools]').val());
	if(!asi_total_govt_schools) { asi_total_govt_schools = 0; }
    var asi_total_private_schools = parseInt($('input[name=asi_total_private_schools]').val());
	if(!asi_total_private_schools) { asi_total_private_schools = 0; }
	
	var total = asi_total_govt_schools+asi_total_private_schools;
	$('.asi_total_gp_sur_sch').val(total);
});
</script>
</table>
<table border="0" cellpadding="0" cellspacing="0"  class="shrink CSSTableGenerator">
	<tr><td colspan="11" ><h6><b>Q24. Enrolment [write the enrolment figure as on reference date 31st October, 2013]</b></h6></td></tr>
	<tr>
		<td colspan="6" >Source of Enrolment</td>
		<td colspan="5" >
			<input type="radio" name="stuenr_source" value="" >1. General Register</input><br>
			<input type="radio" name="stuenr_source" value="" >2. Attendance Register</input><br>
			<input type="radio" name="stuenr_source" value="" >3. Other Record Available at School (Specify) </input><br>
			<input type="radio" name="stuenr_source" value="" >4. No Formal Record (Respondent Memory)</input><br>
		</td>
	</tr>
	<script>
		$('.stuenr_source').on('keyup keypress blur change', function() {
			var stuenr_source = parseInt($('input[name=stuenr_source]:checked').val());
			
			if(stuenr_source == '3')
			{
				$('.stuenr_source_specify').val('');
				$('.stuenr_source_specify').attr('style','display:block;');
			}else
			{
				$('.stuenr_source_specify').val('');
				$('.stuenr_source_specify').attr('style','display:none;');
			}
		});
	</script>
	<tr class="stuenr_source_specify" style="display:none;" >
		<td colspan="6" >Specify Other Record Available at School</td>
		<td colspan="5" >
			<input type="text" name="stuenr_source_specify" ></input>
		</td>
	</tr>
	<tr><td colspan="11" ><h6><b>Q24. (b) Elementary Enrollment</b></h6></td></tr>
	<tr>
		<td>Class</td>
		<td>Katchi</td>
		<td>1st</td>
		<td>2nd</td>
		<td>3rd</td>
		<td>4th</td>
		<td>5th</td>
		<td>6th</td>
		<td>7th</td>
		<td>8th</td>
		<td>Total</td>
	</tr>
	<tr class="matchtotalenrollmentclass" >
		<td>Boys</td>
		<td><input class="eleboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_classkatchi_b" value="0" ></input></td>
		<td><input class="eleboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class1_b" value="0" ></input></td>
		<td><input class="eleboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class2_b" value="0" ></input></td>
		<td><input class="eleboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class3_b" value="0" ></input></td>
		<td><input class="eleboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class4_b" value="0" ></input></td>
		<td><input class="eleboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class5_b" value="0" ></input></td>
		<td><input class="eleboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class6_b" value="0" ></input></td>
		<td><input class="eleboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class7_b" value="0" ></input></td>
		<td><input class="eleboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class8_b" value="0" ></input></td>
		<td><input class="stuenr_ele_total_b" readonly="readonly" type="number" name="stuenr_ele_total_b" value="0" ></input></td>
	</tr>
	<script>
	$('.eleboystotalcheckclass').on('keyup keypress blur change', function() {
		var classkat = parseInt($('input[name=stuenr_ele_classkatchi_b]').val());
		if(!classkat) { classkat = 0; }  
		var class1 = parseInt($('input[name=stuenr_ele_class1_b]').val());
		if(!class1) { class1 = 0; }  
		var class2 = parseInt($('input[name=stuenr_ele_class2_b]').val());
		if(!class2) { class2 = 0; }  
		var class3 = parseInt($('input[name=stuenr_ele_class3_b]').val());
		if(!class3) { class3 = 0; }  
		var class4 = parseInt($('input[name=stuenr_ele_class4_b]').val());
		if(!class4) { class4 = 0; }  
		var class5 = parseInt($('input[name=stuenr_ele_class5_b]').val());
		if(!class5) { class5 = 0; }  
		var class6 = parseInt($('input[name=stuenr_ele_class6_b]').val());
		if(!class6) { class6 = 0; }  
		var class7 = parseInt($('input[name=stuenr_ele_class7_b]').val());
		if(!class7) { class7 = 0; }  
		var class8 = parseInt($('input[name=stuenr_ele_class8_b]').val());
		if(!class8) { class8 = 0; }  
		
		var total = classkat+class1+class2+class3+class4+class5+class6+class7+class8;
		$('.stuenr_ele_total_b').val(total);
		
		var tot1 = parseInt($('.stuenr_ele_total_b').val());
		if(!tot1) { tot1 = 0; }
		var tot2 = parseInt($('.stuenr_ele_total_g').val());
		if(!tot2) { tot2 = 0; }
		var tot3 = parseInt($('.stuenr_sec_b_total').val());
		if(!tot3) { tot3 = 0; }
		var tot4 = parseInt($('.stuenr_sec_g_total').val());
		if(!tot4) { tot4 = 0; }
		var tot5 = parseInt($('.stuenr_hsec_m_total').val());
		if(!tot5) { tot5 = 0; }
		var tot6 = parseInt($('.stuenr_hsec_f_total').val());
		if(!tot6) { tot6 = 0; }
		
		var total_enr_2 = tot1+tot2+tot3+tot4+tot5+tot6;
		
		var urdu_enrolment = parseInt($('input[name=dsi_enrollment_urdu]').val());
		if(!urdu_enrolment) { urdu_enrolment = 0; }
		var sindhi_enrolment = parseInt($('input[name=dsi_enrollment_sindhi]').val());
		if(!sindhi_enrolment) { sindhi_enrolment = 0; }
		var english_enrolment = parseInt($('input[name=dsi_enrollment_english]').val());
		if(!english_enrolment) { english_enrolment = 0; }
		
		var total_enr_1 = urdu_enrolment+sindhi_enrolment+english_enrolment;
		
		if(total_enr_2 != total_enr_1)
		{
			$('.matchtotalenrollmentclass').attr('style','background-color:#ff0000;');
		}else
		{
			$('.matchtotalenrollmentclass').attr('style','background-color:#00ff00;');
		}
		
	});
	</script>
	<tr class="matchtotalenrollmentclass" >
		<td>Girls</td>
		<td><input class="elegirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_classkatchi_g" value="0" ></input></td>
		<td><input class="elegirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class1_g" value="0" ></input></td>
		<td><input class="elegirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class2_g" value="0" ></input></td>
		<td><input class="elegirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class3_g" value="0" ></input></td>
		<td><input class="elegirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class4_g" value="0" ></input></td>
		<td><input class="elegirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class5_g" value="0" ></input></td>
		<td><input class="elegirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class6_g" value="0" ></input></td>
		<td><input class="elegirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class7_g" value="0" ></input></td>
		<td><input class="elegirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class8_g" value="0" ></input></td>
		<td><input class="stuenr_ele_total_g" readonly="readonly" type="number" name="stuenr_ele_total_g" value="0" ></input></td>
	</tr>
</table>
	<script>
	$('.elegirlstotalcheckclass').on('keyup keypress blur change', function() {
		var classkat = parseInt($('input[name=stuenr_ele_classkatchi_g]').val());
		if(!classkat) { classkat = 0; }  
		var class1 = parseInt($('input[name=stuenr_ele_class1_g]').val());
		if(!class1) { class1 = 0; }  
		var class2 = parseInt($('input[name=stuenr_ele_class2_g]').val());
		if(!class2) { class2 = 0; }  
		var class3 = parseInt($('input[name=stuenr_ele_class3_g]').val());
		if(!class3) { class3 = 0; }  
		var class4 = parseInt($('input[name=stuenr_ele_class4_g]').val());
		if(!class4) { class4 = 0; }  
		var class5 = parseInt($('input[name=stuenr_ele_class5_g]').val());
		if(!class5) { class5 = 0; }  
		var class6 = parseInt($('input[name=stuenr_ele_class6_g]').val());
		if(!class6) { class6 = 0; }  
		var class7 = parseInt($('input[name=stuenr_ele_class7_g]').val());
		if(!class7) { class7 = 0; }  
		var class8 = parseInt($('input[name=stuenr_ele_class8_g]').val());
		if(!class8) { class8 = 0; }  
		
		var total = classkat+class1+class2+class3+class4+class5+class6+class7+class8;
		$('.stuenr_ele_total_g').val(total);
		
		var tot1 = parseInt($('.stuenr_ele_total_b').val());
		if(!tot1) { tot1 = 0; }
		var tot2 = parseInt($('.stuenr_ele_total_g').val());
		if(!tot2) { tot2 = 0; }
		var tot3 = parseInt($('.stuenr_sec_b_total').val());
		if(!tot3) { tot3 = 0; }
		var tot4 = parseInt($('.stuenr_sec_g_total').val());
		if(!tot4) { tot4 = 0; }
		var tot5 = parseInt($('.stuenr_hsec_m_total').val());
		if(!tot5) { tot5 = 0; }
		var tot6 = parseInt($('.stuenr_hsec_f_total').val());
		if(!tot6) { tot6 = 0; }
		
		var total_enr_2 = tot1+tot2+tot3+tot4+tot5+tot6;
		
		var urdu_enrolment = parseInt($('input[name=dsi_enrollment_urdu]').val());
		if(!urdu_enrolment) { urdu_enrolment = 0; }
		var sindhi_enrolment = parseInt($('input[name=dsi_enrollment_sindhi]').val());
		if(!sindhi_enrolment) { sindhi_enrolment = 0; }
		var english_enrolment = parseInt($('input[name=dsi_enrollment_english]').val());
		if(!english_enrolment) { english_enrolment = 0; }
		
		var total_enr_1 = urdu_enrolment+sindhi_enrolment+english_enrolment;
		
		if(total_enr_2 != total_enr_1)
		{
			$('.matchtotalenrollmentclass').attr('style','background-color:#ff0000;');
		}else
		{
			$('.matchtotalenrollmentclass').attr('style','background-color:#00ff00;');
		}
		
	});
	</script>
<table border="0" cellpadding="0" cellspacing="0"  class="shrink CSSTableGenerator">
	<tr class="matchtotalenrollmentclass" ><td colspan="12" ><h6><b>Q24. (c) Secondary Enrolment</b></h6></td></tr>
	<tr class="matchtotalenrollmentclass" >
		<td>Class</td>
		<td colspan="5" >9th</td>
		<td colspan="5" >10th</td>
		<td>Total</td>
	</tr>
	<tr class="matchtotalenrollmentclass" >
		<td>Group</td>
		<td>Arts / General</td>
		<td>Computer</td>
		<td>Biology</td>
		<td>Commerce</td>
		<td>Others</td>
		<td>Arts / General</td>
		<td>Computer</td>
		<td>Biology</td>
		<td>Commerce</td>
		<td>Others</td>
		<td>Total</td>
	</tr>
	<tr class="matchtotalenrollmentclass" >
		<td>Boys</td>
		<td><input class="secboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class9_arts_b" value="0" ></input></td>
		<td><input class="secboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class9_comp_b" value="0" ></input></td>
		<td><input class="secboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class9_bio_b" value="0" ></input></td>
		<td><input class="secboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class9_comm_b" value="0" ></input></td>
		<td><input class="secboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class9_other_b" value="0" ></input></td>
		<td><input class="secboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class10_arts_b" value="0" ></input></td>
		<td><input class="secboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class10_comp_b" value="0" ></input></td>
		<td><input class="secboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class10_bio_b" value="0" ></input></td>
		<td><input class="secboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class10_comm_b" value="0" ></input></td>
		<td><input class="secboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class10_other_b" value="0" ></input></td>
		<td><input type="number" readonly="readonly" class="stuenr_sec_b_total" name="stuenr_sec_b_total" value="0" ></input></td>
	</tr>
	<script>
	$('.secboystotalcheckclass').on('keyup keypress blur change', function() {
		var class9arts = parseInt($('input[name=stuenr_sec_class9_arts_b]').val());
		if(!class9arts) { class9arts = 0; }  
		var class9comp = parseInt($('input[name=stuenr_sec_class9_comp_b]').val());
		if(!class9comp) { class9comp = 0; }  
		var class9bio = parseInt($('input[name=stuenr_sec_class9_bio_b]').val());
		if(!class9bio) { class9bio = 0; }  
		var class9comm = parseInt($('input[name=stuenr_sec_class9_comm_b]').val());
		if(!class9comm) { class9comm = 0; }  
		var class9other = parseInt($('input[name=stuenr_sec_class9_other_b]').val());
		if(!class9other) { class9other = 0; }  
		var class10arts = parseInt($('input[name=stuenr_sec_class10_arts_b]').val());
		if(!class10arts) { class10arts = 0; }  
		var class10comp = parseInt($('input[name=stuenr_sec_class10_comp_b]').val());
		if(!class10comp) { class10comp = 0; }  
		var class10bio = parseInt($('input[name=stuenr_sec_class10_bio_b]').val());
		if(!class10bio) { class10bio = 0; }  
		var class10comm = parseInt($('input[name=stuenr_sec_class10_comm_b]').val());
		if(!class10comm) { class10comm = 0; }  
		var class10other = parseInt($('input[name=stuenr_sec_class10_other_b]').val());
		if(!class10other) { class10other = 0; }  
		
		
		var total = class9arts+class9comp+class9bio+class9comm+class9other+class10arts+class10comp+class10bio+class10comm+class10other;
		$('.stuenr_sec_b_total').val(total);
		
		var tot1 = parseInt($('.stuenr_ele_total_b').val());
		if(!tot1) { tot1 = 0; }
		var tot2 = parseInt($('.stuenr_ele_total_g').val());
		if(!tot2) { tot2 = 0; }
		var tot3 = parseInt($('.stuenr_sec_b_total').val());
		if(!tot3) { tot3 = 0; }
		var tot4 = parseInt($('.stuenr_sec_g_total').val());
		if(!tot4) { tot4 = 0; }
		var tot5 = parseInt($('.stuenr_hsec_m_total').val());
		if(!tot5) { tot5 = 0; }
		var tot6 = parseInt($('.stuenr_hsec_f_total').val());
		if(!tot6) { tot6 = 0; }
		
		var total_enr_2 = tot1+tot2+tot3+tot4+tot5+tot6;
		
		var urdu_enrolment = parseInt($('input[name=dsi_enrollment_urdu]').val());
		if(!urdu_enrolment) { urdu_enrolment = 0; }
		var sindhi_enrolment = parseInt($('input[name=dsi_enrollment_sindhi]').val());
		if(!sindhi_enrolment) { sindhi_enrolment = 0; }
		var english_enrolment = parseInt($('input[name=dsi_enrollment_english]').val());
		if(!english_enrolment) { english_enrolment = 0; }
		
		var total_enr_1 = urdu_enrolment+sindhi_enrolment+english_enrolment;
		
		if(total_enr_2 != total_enr_1)
		{	
			$('.matchtotalenrollmentclass').attr('style','background-color:#ff0000;');
		}else
		{
			$('.matchtotalenrollmentclass').attr('style','background-color:#00ff00;');
		}
	});
	</script>
	<tr class="matchtotalenrollmentclass" >
		<td>Girls</td>
		<td><input class="secgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class9_arts_g" value="0" ></input></td>
		<td><input class="secgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class9_comp_g" value="0" ></input></td>
		<td><input class="secgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class9_bio_g" value="0" ></input></td>
		<td><input class="secgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class9_comm_g" value="0" ></input></td>
		<td><input class="secgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class9_other_g" value="0" ></input></td>
		<td><input class="secgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class10_arts_g" value="0" ></input></td>
		<td><input class="secgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class10_comp_g" value="0" ></input></td>
		<td><input class="secgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class10_bio_g" value="0" ></input></td>
		<td><input class="secgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class10_comm_g" value="0" ></input></td>
		<td><input class="secgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class10_other_g" value="0" ></input></td>
		<td><input readonly="readonly" type="number" class="stuenr_sec_f_total" name="stuenr_sec_f_total" value="0" ></input></td>
	</tr>
	<script>
	$('.secgirlstotalcheckclass').on('keyup keypress blur change', function() {
		var class9arts = parseInt($('input[name=stuenr_sec_class9_arts_g]').val());
		if(!class9arts) { class9arts = 0; }  
		var class9comp = parseInt($('input[name=stuenr_sec_class9_comp_g]').val());
		if(!class9comp) { class9comp = 0; }  
		var class9bio = parseInt($('input[name=stuenr_sec_class9_bio_g]').val());
		if(!class9bio) { class9bio = 0; }  
		var class9comm = parseInt($('input[name=stuenr_sec_class9_comm_g]').val());
		if(!class9comm) { class9comm = 0; }  
		var class9other = parseInt($('input[name=stuenr_sec_class9_other_g]').val());
		if(!class9other) { class9other = 0; }  
		var class10arts = parseInt($('input[name=stuenr_sec_class10_arts_g]').val());
		if(!class10arts) { class10arts = 0; }  
		var class10comp = parseInt($('input[name=stuenr_sec_class10_comp_g]').val());
		if(!class10comp) { class10comp = 0; }  
		var class10bio = parseInt($('input[name=stuenr_sec_class10_bio_g]').val());
		if(!class10bio) { class10bio = 0; }  
		var class10comm = parseInt($('input[name=stuenr_sec_class10_comm_g]').val());
		if(!class10comm) { class10comm = 0; }  
		var class10other = parseInt($('input[name=stuenr_sec_class10_other_g]').val());
		if(!class10other) { class10other = 0; }  
				
		var total = class9arts+class9comp+class9bio+class9comm+class9other+class10arts+class10comp+class10bio+class10comm+class10other;
		$('.stuenr_sec_g_total').val(total);
		
		var tot1 = parseInt($('.stuenr_ele_total_b').val());
		if(!tot1) { tot1 = 0; }
		var tot2 = parseInt($('.stuenr_ele_total_g').val());
		if(!tot2) { tot2 = 0; }
		var tot3 = parseInt($('.stuenr_sec_b_total').val());
		if(!tot3) { tot3 = 0; }
		var tot4 = parseInt($('.stuenr_sec_g_total').val());
		if(!tot4) { tot4 = 0; }
		var tot5 = parseInt($('.stuenr_hsec_m_total').val());
		if(!tot5) { tot5 = 0; }
		var tot6 = parseInt($('.stuenr_hsec_f_total').val());
		if(!tot6) { tot6 = 0; }
		
		var total_enr_2 = tot1+tot2+tot3+tot4+tot5+tot6;
		
		var urdu_enrolment = parseInt($('input[name=dsi_enrollment_urdu]').val());
		if(!urdu_enrolment) { urdu_enrolment = 0; }
		var sindhi_enrolment = parseInt($('input[name=dsi_enrollment_sindhi]').val());
		if(!sindhi_enrolment) { sindhi_enrolment = 0; }
		var english_enrolment = parseInt($('input[name=dsi_enrollment_english]').val());
		if(!english_enrolment) { english_enrolment = 0; }
		
		var total_enr_1 = urdu_enrolment+sindhi_enrolment+english_enrolment;
		
		if(total_enr_2 != total_enr_1)
		{
			$('.matchtotalenrollmentclass').attr('style','background-color:#ff0000;');
		}else
		{
			$('.matchtotalenrollmentclass').attr('style','background-color:#00ff00;');
		}
	
	});
	</script>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="shrink CSSTableGenerator">
	<tr class="matchtotalenrollmentclass" ><td colspan="14" ><h6><b>Q24. (d) Higher Secondary Enrollment</b></h6></td></tr>
	<tr class="matchtotalenrollmentclass" >
		<td>Class</td>
		<td colspan="6" >11th</td>
		<td colspan="6" >12th</td>
		<td>Total</td>
	</tr>
	<tr class="matchtotalenrollmentclass" >
		<td>Group</td>
		<td>Arts / General</td>
		<td>Computer</td>
		<td>Pre Medical</td>
		<td>Pre Engineering</td>
		<td>Commerce</td>
		<td>Others</td>
		<td>Arts / General</td>
		<td>Computer</td>
		<td>Pre Medical</td>
		<td>Pre Engineering</td>
		<td>Commerce</td>
		<td>Others</td>
		<td>Total</td>
	</tr>
	<tr class="matchtotalenrollmentclass" >
		<td>Boys</td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_arts_b" value="0" ></input></td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_comp_b" value="0" ></input></td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_premed_b" value="0" ></input></td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_preeng_b" value="0" ></input></td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_comm_b" value="0" ></input></td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_other_b" value="0" ></input></td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_arts_b" value="0" ></input></td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_comp_b" value="0" ></input></td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_premed_b" value="0" ></input></td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_preeng_b" value="0" ></input></td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_comm_b" value="0" ></input></td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_other_b" value="0" ></input></td>
		<td><input type="number" readonly="readonly" class="stuenr_hsec_m_total" name="stuenr_hsec_m_total" value="0" ></input></td>
	</tr>
	<script>
	$('.hsecboystotalcheckclass').on('keyup keypress blur change', function() {
		var class11arts = parseInt($('input[name=stuenr_hsec_class11_arts_b]').val());
		if(!class11arts) { class11arts = 0; }  
		var class11comp = parseInt($('input[name=stuenr_hsec_class11_comp_b]').val());
		if(!class11comp) { class11comp = 0; }
		var class11comm = parseInt($('input[name=stuenr_hsec_class11_comm_b]').val());
		if(!class11comm) { class11comm = 0; }
		var class11premed = parseInt($('input[name=stuenr_hsec_class11_premed_b]').val());
		if(!class11premed) { class11premed = 0; }
		var class11preeng = parseInt($('input[name=stuenr_hsec_class11_preeng_b]').val());
		if(!class11preeng) { class11preeng = 0; }
		var class11other = parseInt($('input[name=stuenr_hsec_class11_other_b]').val());
		if(!class11other) { class11other = 0; }
		var class12arts = parseInt($('input[name=stuenr_hsec_class12_arts_b]').val());
		if(!class12arts) { class12arts = 0; }
		var class12comp = parseInt($('input[name=stuenr_hsec_class12_comp_b]').val());
		if(!class12comp) { class12comp = 0; }
		var class12comm = parseInt($('input[name=stuenr_hsec_class12_comm_b]').val());
		if(!class12comm) { class12comm = 0; }
		var class12premed = parseInt($('input[name=stuenr_hsec_class12_premed_b]').val());
		if(!class12premed) { class12premed = 0; }
		var class12preeng = parseInt($('input[name=stuenr_hsec_class12_preeng_b]').val());
		if(!class12preeng) { class12preeng = 0; }
		var class12other = parseInt($('input[name=stuenr_hsec_class12_other_b]').val());
		if(!class12other) { class12other = 0; }
				
		var total = class11arts+class11comp+class11comm+class11premed+class11preeng+class11other+class12arts+class12comp+class12comm+class12premed+class12preeng+class12other;
		$('.stuenr_hsec_m_total').val(total);
		
		var tot1 = parseInt($('.stuenr_ele_total_b').val());
		if(!tot1) { tot1 = 0; }
		var tot2 = parseInt($('.stuenr_ele_total_g').val());
		if(!tot2) { tot2 = 0; }
		var tot3 = parseInt($('.stuenr_sec_b_total').val());
		if(!tot3) { tot3 = 0; }
		var tot4 = parseInt($('.stuenr_sec_g_total').val());
		if(!tot4) { tot4 = 0; }
		var tot5 = parseInt($('.stuenr_hsec_m_total').val());
		if(!tot5) { tot5 = 0; }
		var tot6 = parseInt($('.stuenr_hsec_f_total').val());
		if(!tot6) { tot6 = 0; }
		
		var total_enr_2 = tot1+tot2+tot3+tot4+tot5+tot6;
		
		var urdu_enrolment = parseInt($('input[name=dsi_enrollment_urdu]').val());
		if(!urdu_enrolment) { urdu_enrolment = 0; }
		var sindhi_enrolment = parseInt($('input[name=dsi_enrollment_sindhi]').val());
		if(!sindhi_enrolment) { sindhi_enrolment = 0; }
		var english_enrolment = parseInt($('input[name=dsi_enrollment_english]').val());
		if(!english_enrolment) { english_enrolment = 0; }
		
		var total_enr_1 = urdu_enrolment+sindhi_enrolment+english_enrolment;
		
		if(total_enr_2 != total_enr_1)
		{
			$('.matchtotalenrollmentclass').attr('style','background-color:#ff0000;');
		}else
		{
			$('.matchtotalenrollmentclass').attr('style','background-color:#00ff00;');
		}
	});
	</script>
	<tr class="matchtotalenrollmentclass" >
		<td>Girls</td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_arts_g" value="0" ></input></td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_comp_g" value="0" ></input></td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_premed_g" value="0" ></input></td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_preeng_g" value="0" ></input></td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_comm_g" value="0" ></input></td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_other_g" value="0" ></input></td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_arts_g" value="0" ></input></td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_comp_g" value="0" ></input></td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_premed_g" value="0" ></input></td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_preeng_g" value="0" ></input></td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_comm_g" value="0" ></input></td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_other_g" value="0" ></input></td>
		<td><input type="number" readonly="readonly" class="stuenr_hsec_g_total" name="stuenr_hsec_f_total" value="0" ></input></td>
	</tr>
	<script>
	$('.hsecgirlstotalcheckclass').on('keyup keypress blur change', function() {
		
		var class11arts = parseInt($('input[name=stuenr_hsec_class11_arts_g]').val());
		if(!class11arts) { class11arts = 0; }
		var class11comp = parseInt($('input[name=stuenr_hsec_class11_comp_g]').val());
		if(!class11comp) { class11comp = 0; }
		var class11comm = parseInt($('input[name=stuenr_hsec_class11_comm_g]').val());
		if(!class11comm) { class11comm = 0; }
		var class11premed = parseInt($('input[name=stuenr_hsec_class11_premed_g]').val());
		if(!class11premed) { class11premed = 0; }
		var class11preeng = parseInt($('input[name=stuenr_hsec_class11_preeng_g]').val());
		if(!class11preeng) { class11preeng = 0; }
		var class11other = parseInt($('input[name=stuenr_hsec_class11_other_g]').val());
		if(!class11other) { class11other = 0; }
		var class12arts = parseInt($('input[name=stuenr_hsec_class12_arts_g]').val());
		if(!class12arts) { class12arts = 0; }
		var class12comp = parseInt($('input[name=stuenr_hsec_class12_comp_g]').val());
		if(!class12comp) { class12comp = 0; }
		var class12comm = parseInt($('input[name=stuenr_hsec_class12_comm_g]').val());
		if(!class12comm) { class12comm = 0; }
		var class12premed = parseInt($('input[name=stuenr_hsec_class12_premed_g]').val());
		if(!class12premed) { class12premed = 0; }
		var class12preeng = parseInt($('input[name=stuenr_hsec_class12_preeng_g]').val());
		if(!class12preeng) { class12preeng = 0; }
		var class12other = parseInt($('input[name=stuenr_hsec_class12_other_g]').val());
		if(!class12other) { class12other = 0; }
				
		var total = class11arts+class11comp+class11comm+class11premed+class11preeng+class11other+class12arts+class12comp+class12comm+class12premed+class12preeng+class12other;
		$('.stuenr_hsec_f_total').val(total);
		
		var tot1 = parseInt($('.stuenr_ele_total_b').val());
		if(!tot1) { tot1 = 0; }
		var tot2 = parseInt($('.stuenr_ele_total_g').val());
		if(!tot2) { tot2 = 0; }
		var tot3 = parseInt($('.stuenr_sec_b_total').val());
		if(!tot3) { tot3 = 0; }
		var tot4 = parseInt($('.stuenr_sec_g_total').val());
		if(!tot4) { tot4 = 0; }
		var tot5 = parseInt($('.stuenr_hsec_m_total').val());
		if(!tot5) { tot5 = 0; }
		var tot6 = parseInt($('.stuenr_hsec_f_total').val());
		if(!tot6) { tot6 = 0; }
		
		var total_enr_2 = tot1+tot2+tot3+tot4+tot5+tot6;
		
		var urdu_enrolment = parseInt($('input[name=dsi_enrollment_urdu]').val());
		if(!urdu_enrolment) { urdu_enrolment = 0; }
		var sindhi_enrolment = parseInt($('input[name=dsi_enrollment_sindhi]').val());
		if(!sindhi_enrolment) { sindhi_enrolment = 0; }
		var english_enrolment = parseInt($('input[name=dsi_enrollment_english]').val());
		if(!english_enrolment) { english_enrolment = 0; }
		
		var total_enr_1 = urdu_enrolment+sindhi_enrolment+english_enrolment;
		
		
		if(total_enr_2 != total_enr_1)
		{
			$('.matchtotalenrollmentclass').attr('style','background-color:#ff0000;');
		}else
		{
			$('.matchtotalenrollmentclass').attr('style','background-color:#00ff00;');
		}
	});
	</script>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="errortablerepeaters shrink CSSTableGenerator" >
<tr style="display:none;" class="errortablerepeatersrow4" ><td>The Repeaters for class 4 are more then Enrollment</td></tr>
<tr style="display:none;" class="errortablerepeatersrow5" ><td>The Repeaters for class 5 are more then Enrollment</td></tr>
<tr style="display:none;" class="errortablerepeatersrow6" ><td>The Repeaters for class 6 are more then Enrollment</td></tr>
<tr style="display:none;" class="errortablerepeatersrow7" ><td>The Repeaters for class 7 are more then Enrollment</td></tr>
<tr style="display:none;" class="errortablerepeatersrow8" ><td>The Repeaters for class 8 are more then Enrollment</td></tr>
<tr style="display:none;" class="errortablerepeatersrow9" ><td>The Repeaters for class 9 are more then Enrollment</td></tr>
<tr style="display:none;" class="errortablerepeatersrow10" ><td>The Repeaters for class 10 are more then Enrollment</td></tr>
<tr style="display:none;" class="errortablerepeatersrow11" ><td>The Repeaters for class 11 are more then Enrollment</td></tr>
<tr style="display:none;" class="errortablerepeatersrow12" ><td>The Repeaters for class 12 are more then Enrollment</td></tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="shrink CSSTableGenerator" >
	<tr><td colspan="11" ><h6><b>Q25. Repeaters</b></h6></td></tr>
	<tr>
		<td>Class</td>
		<td>4th</td>
		<td>5th</td>
		<td>6th</td>
		<td>7th</td>
		<td>8th</td>
		<td>9th</td>
		<td>10th</td>
		<td>11th</td>
		<td>12th</td>
		<td>Total</td>
	</tr>
	<tr>
		<td>Boys</td>
		<td class="sturep_class4_b" ><input class="eleboysreptotalcheckclass nonnegative number maxthree" type="number" name="sturep_class4_b" value="0" ></input></td>
		<td class="sturep_class5_b" ><input class="eleboysreptotalcheckclass nonnegative number maxthree " type="number" name="sturep_class5_b" value="0" ></input></td>
		<td class="sturep_class6_b" ><input class="eleboysreptotalcheckclass nonnegative number maxthree " type="number" name="sturep_class6_b" value="0" ></input></td>
		<td class="sturep_class7_b" ><input class="eleboysreptotalcheckclass nonnegative number maxthree " type="number" name="sturep_class7_b" value="0" ></input></td>
		<td class="sturep_class8_b" ><input class="eleboysreptotalcheckclass nonnegative number maxthree " type="number" name="sturep_class8_b" value="0" ></input></td>
		<td class="sturep_class9_b" ><input class="eleboysreptotalcheckclass nonnegative number maxthree " type="number" name="sturep_class9_b" value="0" ></input></td>
		<td class="sturep_class10_b" ><input class="eleboysreptotalcheckclass nonnegative number maxthree " type="number" name="sturep_class10_b" value="0" ></input></td>
		<td class="sturep_class11_b" ><input class="eleboysreptotalcheckclass nonnegative number maxthree " type="number" name="sturep_class11_b" value="0" ></input></td>
		<td class="sturep_class12_b" ><input class="eleboysreptotalcheckclass nonnegative number maxthree " type="number" name="sturep_class12_b" value="0" ></input></td>
		<td><input type="number" readonly="readonly" class="sturep_total_b" name="sturep_total_b" value="0" ></input></td>
	</tr>
	<script>
	$('#new_classroom_observation').change(function() {
		// Class 4
		var sturep_class4_b = parseInt($('input[name=sturep_class4_b]').val());
		if(!sturep_class4_b) { sturep_class4_b = 0; }
		var stuenr_ele_class4_b = parseInt($('input[name=stuenr_ele_class4_b]').val());
		if(!stuenr_ele_class4_b) { stuenr_ele_class4_b = 0; }
		
		if(sturep_class4_b > stuenr_ele_class4_b)
		{
			$('.sturep_class4_b').attr('style', 'background-color:#ff0000;');
			$('.errortablerepeatersrow4').show();
		}else
		{
			$('.sturep_class4_b').attr('style', '');
			$('.errortablerepeatersrow4').hide();
		}
		
		// Class 5
		var sturep_class5_b = parseInt($('input[name=sturep_class5_b]').val());
		if(!sturep_class5_b) { sturep_class5_b = 0; }
		var stuenr_ele_class5_b = parseInt($('input[name=stuenr_ele_class5_b]').val());
		if(!stuenr_ele_class5_b) { stuenr_ele_class5_b = 0; }
		
		if(sturep_class5_b > stuenr_ele_class5_b)
		{
			$('.sturep_class5_b').attr('style', 'background-color:#ff0000;');
			$('.errortablerepeatersrow5').show();
		}else
		{
			$('.sturep_class5_b').attr('style', '');
			$('.errortablerepeatersrow5').hide();
		}
		
		// Class 6 
		var sturep_class6_b = parseInt($('input[name=sturep_class6_b]').val());
		if(!sturep_class6_b) { sturep_class6_b = 0; }
		var stuenr_ele_class6_b = parseInt($('input[name=stuenr_ele_class6_b]').val());
		if(!stuenr_ele_class6_b) { stuenr_ele_class6_b = 0; }
		
		if(sturep_class6_b > stuenr_ele_class6_b)
		{
			$('.sturep_class6_b').attr('style', 'background-color:#ff0000;');
			$('.errortablerepeatersrow6').show();
		}else
		{
			$('.sturep_class6_b').attr('style', '');
			$('.errortablerepeatersrow6').hide();
		}
		
		
		// Class 7
		var sturep_class7_b = parseInt($('input[name=sturep_class7_b]').val());
		if(!sturep_class7_b) { sturep_class7_b = 0; }
		var stuenr_ele_class7_b = parseInt($('input[name=stuenr_ele_class7_b]').val());
		if(!stuenr_ele_class7_b) { stuenr_ele_class7_b = 0; }
		
		if(sturep_class7_b > stuenr_ele_class7_b)
		{
			$('.sturep_class7_b').attr('style', 'background-color:#ff0000;');
			$('.errortablerepeatersrow7').show();
		}else
		{
			$('.sturep_class7_b').attr('style', '');
			$('.errortablerepeatersrow7').hide();
		}
		
		// Class 8
		var sturep_class8_b = parseInt($('input[name=sturep_class8_b]').val());
		if(!sturep_class8_b) { sturep_class8_b = 0; }
		var stuenr_ele_class8_b = parseInt($('input[name=stuenr_ele_class8_b]').val());
		if(!stuenr_ele_class8_b) { stuenr_ele_class8_b = 0; }
		
		if(sturep_class8_b > stuenr_ele_class8_b)
		{
			$('.sturep_class8_b').attr('style', 'background-color:#ff0000;');
			$('.errortablerepeatersrow8').show();
		}else
		{
			$('.sturep_class8_b').attr('style', '');
			$('.errortablerepeatersrow8').hide();
		}
		
		// Class 9 and Class 10
		var class9arts = parseInt($('input[name=stuenr_sec_class9_arts_b]').val());
		if(!class9arts) { class9arts = 0; }  
		var class9comp = parseInt($('input[name=stuenr_sec_class9_comp_b]').val());
		if(!class9comp) { class9comp = 0; }  
		var class9bio = parseInt($('input[name=stuenr_sec_class9_bio_b]').val());
		if(!class9bio) { class9bio = 0; }  
		var class9comm = parseInt($('input[name=stuenr_sec_class9_comm_b]').val());
		if(!class9comm) { class9comm = 0; }  
		var class9other = parseInt($('input[name=stuenr_sec_class9_other_b]').val());
		if(!class9other) { class9other = 0; }  
		var class10arts = parseInt($('input[name=stuenr_sec_class10_arts_b]').val());
		if(!class10arts) { class10arts = 0; }  
		var class10comp = parseInt($('input[name=stuenr_sec_class10_comp_b]').val());
		if(!class10comp) { class10comp = 0; }  
		var class10bio = parseInt($('input[name=stuenr_sec_class10_bio_b]').val());
		if(!class10bio) { class10bio = 0; }  
		var class10comm = parseInt($('input[name=stuenr_sec_class10_comm_b]').val());
		if(!class10comm) { class10comm = 0; }  
		var class10other = parseInt($('input[name=stuenr_sec_class10_other_b]').val());
		if(!class10other) { class10other = 0; }  
		
		var sturep_class9_b = parseInt($('input[name=sturep_class9_b]').val());
		if(!sturep_class9_b) { sturep_class9_b = 0; }
		var total_9 = class9arts+class9comp+class9bio+class9comm+class9other;

		if(sturep_class9_b > total_9)
		{
			$('.sturep_class9_b').attr('style', 'background-color:#ff0000;');
			$('.errortablerepeatersrow9').show();
		}else
		{
			$('.sturep_class9_b').attr('style', '');
			$('.errortablerepeatersrow9').hide();
		}
		
		var sturep_class10_b = parseInt($('input[name=sturep_class10_b]').val());
		if(!sturep_class10_b) { sturep_class10_b = 0; }
		var total_10 = class10arts+class10comp+class10bio+class10comm+class10other;
		
		if(sturep_class10_b > total_10)
		{
			$('.sturep_class10_b').attr('style', 'background-color:#ff0000;');
			$('.errortablerepeatersrow10').show();
		}else
		{
			$('.sturep_class10_b').attr('style', '');
			$('.errortablerepeatersrow10').hide();
		}
		
		// Class 11 and Class 12
		var class11arts = parseInt($('input[name=stuenr_hsec_class11_arts_b]').val());
		if(!class11arts) { class11arts = 0; }  
		var class11comp = parseInt($('input[name=stuenr_hsec_class11_comp_b]').val());
		if(!class11comp) { class11comp = 0; }
		var class11comm = parseInt($('input[name=stuenr_hsec_class11_comm_b]').val());
		if(!class11comm) { class11comm = 0; }
		var class11premed = parseInt($('input[name=stuenr_hsec_class11_premed_b]').val());
		if(!class11premed) { class11premed = 0; }
		var class11preeng = parseInt($('input[name=stuenr_hsec_class11_preeng_b]').val());
		if(!class11preeng) { class11preeng = 0; }
		var class11other = parseInt($('input[name=stuenr_hsec_class11_other_b]').val());
		if(!class11other) { class11other = 0; }
		var class12arts = parseInt($('input[name=stuenr_hsec_class12_arts_b]').val());
		if(!class12arts) { class12arts = 0; }
		var class12comp = parseInt($('input[name=stuenr_hsec_class12_comp_b]').val());
		if(!class12comp) { class12comp = 0; }
		var class12comm = parseInt($('input[name=stuenr_hsec_class12_comm_b]').val());
		if(!class12comm) { class12comm = 0; }
		var class12premed = parseInt($('input[name=stuenr_hsec_class12_premed_b]').val());
		if(!class12premed) { class12premed = 0; }
		var class12preeng = parseInt($('input[name=stuenr_hsec_class12_preeng_b]').val());
		if(!class12preeng) { class12preeng = 0; }
		var class12other = parseInt($('input[name=stuenr_hsec_class12_other_b]').val());
		if(!class12other) { class12other = 0; }
		
		var total_11 = class11arts+class11comp+class11comm+class11premed+class11preeng+class11other;
		var sturep_class11_b = parseInt($('input[name=sturep_class11_b]').val());
		if(!sturep_class11_b) { sturep_class11_b = 0; }
		
		if(sturep_class11_b > total_11)
		{
			$('.sturep_class11_b').attr('style', 'background-color:#ff0000;');
			$('.errortablerepeatersrow11').show();
		}else
		{
			$('.sturep_class11_b').attr('style', '');
			$('.errortablerepeatersrow11').hide();
		}
		
		var total_12 = class12arts+class12comp+class12comm+class12premed+class12preeng+class12other;
		var sturep_class12_b = parseInt($('input[name=sturep_class12_b]').val());
		if(!sturep_class12_b) { sturep_class12_b = 0; }
		if(sturep_class12_b > total_12)
		{
			$('.sturep_class12_b').attr('style', 'background-color:#ff0000;');
			$('.errortablerepeatersrow12').show();
		}else
		{
			$('.sturep_class12_b').attr('style', '');
			$('.errortablerepeatersrow12').hide();
		}
		
		// For Girls
		var sturep_class4_g = parseInt($('input[name=sturep_class4_g]').val());
		if(!sturep_class4_g) { sturep_class4_g = 0; }
		var stuenr_ele_class4_g = parseInt($('input[name=stuenr_ele_class4_g]').val());
		if(!stuenr_ele_class4_g) { stuenr_ele_class4_b = 0; }
		
		if(sturep_class4_g > stuenr_ele_class4_g)
		{
			$('.sturep_class4_g').attr('style', 'background-color:#ff0000;');
			$('.errortablerepeatersrow4').show();
		}else
		{
			$('.sturep_class4_g').attr('style', '');
			$('.errortablerepeatersrow4').hide();
		}
		
		// Class 5
		var sturep_class5_g = parseInt($('input[name=sturep_class5_g]').val());
		if(!sturep_class5_g) { sturep_class5_g = 0; }
		var stuenr_ele_class5_g = parseInt($('input[name=stuenr_ele_class5_g]').val());
		if(!stuenr_ele_class5_g) { stuenr_ele_class5_g = 0; }
		
		if(sturep_class5_g > stuenr_ele_class5_g)
		{
			$('.sturep_class5_g').attr('style', 'background-color:#ff0000;');
			$('.errortablerepeatersrow5').show();
		}else
		{
			$('.sturep_class5_g').attr('style', '');
			$('.errortablerepeatersrow5').hide();
		}
		
		// Class 6 
		var sturep_class6_g = parseInt($('input[name=sturep_class6_g]').val());
		if(!sturep_class6_g) { sturep_class6_g = 0; }
		var stuenr_ele_class6_g = parseInt($('input[name=stuenr_ele_class6_g]').val());
		if(!stuenr_ele_class6_g) { stuenr_ele_class6_g = 0; }
		
		if(sturep_class6_g > stuenr_ele_class6_g)
		{
			$('.sturep_class6_g').attr('style', 'background-color:#ff0000;');
			$('.errortablerepeatersrow6').show();
		}else
		{
			$('.sturep_class6_g').attr('style', '');
			$('.errortablerepeatersrow6').hide();
		}
		
		
		// Class 7
		var sturep_class7_g = parseInt($('input[name=sturep_class7_g]').val());
		if(!sturep_class7_g) { sturep_class7_g = 0; }
		var stuenr_ele_class7_g = parseInt($('input[name=stuenr_ele_class7_g]').val());
		if(!stuenr_ele_class7_g) { stuenr_ele_class7_g = 0; }
		
		if(sturep_class7_g > stuenr_ele_class7_g)
		{
			$('.sturep_class7_g').attr('style', 'background-color:#ff0000;');
			$('.errortablerepeatersrow7').show();
		}else
		{
			$('.sturep_class7_g').attr('style', '');
			$('.errortablerepeatersrow7').hide();
		}
		
		// Class 8
		var sturep_class8_g = parseInt($('input[name=sturep_class8_g]').val());
		if(!sturep_class8_g) { sturep_class8_g = 0; }
		var stuenr_ele_class8_g = parseInt($('input[name=stuenr_ele_class8_g]').val());
		if(!stuenr_ele_class8_g) { stuenr_ele_class8_g = 0; }
		
		if(sturep_class8_g > stuenr_ele_class8_g)
		{
			$('.sturep_class8_g').attr('style', 'background-color:#ff0000;');
			$('.errortablerepeatersrow8').show();
		}else
		{
			$('.sturep_class8_g').attr('style', '');
			$('.errortablerepeatersrow8').hide();
		}
		
		// Class 9 and Class 10
		var class9arts = parseInt($('input[name=stuenr_sec_class9_arts_g]').val());
		if(!class9arts) { class9arts = 0; }  
		var class9comp = parseInt($('input[name=stuenr_sec_class9_comp_g]').val());
		if(!class9comp) { class9comp = 0; }  
		var class9bio = parseInt($('input[name=stuenr_sec_class9_bio_g]').val());
		if(!class9bio) { class9bio = 0; }  
		var class9comm = parseInt($('input[name=stuenr_sec_class9_comm_g]').val());
		if(!class9comm) { class9comm = 0; }  
		var class9other = parseInt($('input[name=stuenr_sec_class9_other_g]').val());
		if(!class9other) { class9other = 0; }  
		var class10arts = parseInt($('input[name=stuenr_sec_class10_arts_g]').val());
		if(!class10arts) { class10arts = 0; }  
		var class10comp = parseInt($('input[name=stuenr_sec_class10_comp_g]').val());
		if(!class10comp) { class10comp = 0; }  
		var class10bio = parseInt($('input[name=stuenr_sec_class10_bio_g]').val());
		if(!class10bio) { class10bio = 0; }  
		var class10comm = parseInt($('input[name=stuenr_sec_class10_comm_g]').val());
		if(!class10comm) { class10comm = 0; }  
		var class10other = parseInt($('input[name=stuenr_sec_class10_other_g]').val());
		if(!class10other) { class10other = 0; }  
		
		var sturep_class9_g = parseInt($('input[name=sturep_class9_g]').val());
		if(!sturep_class9_g) { sturep_class9_g = 0; }
		var total_9 = class9arts+class9comp+class9bio+class9comm+class9other;
		
		
		if(sturep_class9_g > total_9)
		{
			$('.sturep_class9_g').attr('style', 'background-color:#ff0000;');
			$('.errortablerepeatersrow9').show();
		}else
		{
			$('.sturep_class9_g').attr('style', '');
			$('.errortablerepeatersrow9').hide();
		}
		
		var sturep_class10_g = parseInt($('input[name=sturep_class10_g]').val());
		if(!sturep_class10_g) { sturep_class10_g = 0; }
		var total_10 = class10arts+class10comp+class10bio+class10comm+class10other;
		
		if(sturep_class10_g > total_10)
		{
			$('.sturep_class10_g').attr('style', 'background-color:#ff0000;');
			$('.errortablerepeatersrow10').show();
		}else
		{
			$('.sturep_class10_g').attr('style', '');
			$('.errortablerepeatersrow10').hide();
		}
		
		// Class 11 and Class 12
		var class11arts = parseInt($('input[name=stuenr_hsec_class11_arts_g]').val());
		if(!class11arts) { class11arts = 0; }  
		var class11comp = parseInt($('input[name=stuenr_hsec_class11_comp_g]').val());
		if(!class11comp) { class11comp = 0; }
		var class11comm = parseInt($('input[name=stuenr_hsec_class11_comm_g]').val());
		if(!class11comm) { class11comm = 0; }
		var class11premed = parseInt($('input[name=stuenr_hsec_class11_premed_g]').val());
		if(!class11premed) { class11premed = 0; }
		var class11preeng = parseInt($('input[name=stuenr_hsec_class11_preeng_g]').val());
		if(!class11preeng) { class11preeng = 0; }
		var class11other = parseInt($('input[name=stuenr_hsec_class11_other_g]').val());
		if(!class11other) { class11other = 0; }
		var class12arts = parseInt($('input[name=stuenr_hsec_class12_arts_g]').val());
		if(!class12arts) { class12arts = 0; }
		var class12comp = parseInt($('input[name=stuenr_hsec_class12_comp_g]').val());
		if(!class12comp) { class12comp = 0; }
		var class12comm = parseInt($('input[name=stuenr_hsec_class12_comm_g]').val());
		if(!class12comm) { class12comm = 0; }
		var class12premed = parseInt($('input[name=stuenr_hsec_class12_premed_g]').val());
		if(!class12premed) { class12premed = 0; }
		var class12preeng = parseInt($('input[name=stuenr_hsec_class12_preeng_g]').val());
		if(!class12preeng) { class12preeng = 0; }
		var class12other = parseInt($('input[name=stuenr_hsec_class12_other_g]').val());
		if(!class12other) { class12other = 0; }
		
		var total_11 = class11arts+class11comp+class11comm+class11premed+class11preeng+class11other;
		var sturep_class11_g = parseInt($('input[name=sturep_class11_g]').val());
		if(!sturep_class11_g) { sturep_class11_g = 0; }
		
		if(sturep_class11_g > total_11)
		{
			$('.sturep_class11_g').attr('style', 'background-color:#ff0000;');
			$('.errortablerepeatersrow11').show();
		}else
		{
			$('.sturep_class11_g').attr('style', '');
			$('.errortablerepeatersrow11').hide();
		}
		
		var total_12 = class12arts+class12comp+class12comm+class12premed+class12preeng+class12other;
		var sturep_class12_g = parseInt($('input[name=sturep_class12_g]').val());
		if(!sturep_class12_g) { sturep_class12_g = 0; }
		
		if(sturep_class12_g > total_12)
		{
			$('.sturep_class12_g').attr('style', 'background-color:#ff0000;');
			$('.errortablerepeatersrow12').show();
		}else
		{
			$('.sturep_class12_g').attr('style', '');
			$('.errortablerepeatersrow12').hide();
		}
		
	});
	
	$('.eleboysreptotalcheckclass').on('keyup keypress blur change', function() {
		var class4 = parseInt($('input[name=sturep_class4_b]').val());
		if(!class4) { class4 = 0; }
		var class5 = parseInt($('input[name=sturep_class5_b]').val());
		if(!class5) { class5 = 0; }
		var class6 = parseInt($('input[name=sturep_class6_b]').val());
		if(!class6) { class6 = 0; }
		var class7 = parseInt($('input[name=sturep_class7_b]').val());
		if(!class7) { class7 = 0; }
		var class8 = parseInt($('input[name=sturep_class8_b]').val());
		if(!class8) { class8 = 0; }
		var class9 = parseInt($('input[name=sturep_class9_b]').val());
		if(!class9) { class9 = 0; }
		var class10 = parseInt($('input[name=sturep_class10_b]').val());
		if(!class10) { class10 = 0; }
		var class11 = parseInt($('input[name=sturep_class11_b]').val());
		if(!class11) { class11 = 0; }
		var class12 = parseInt($('input[name=sturep_class12_b]').val());
		if(!class12) { class12 = 0; }
		
		var total = class4+class5+class6+class7+class8+class9+class10+class11+class12;
		$('.sturep_total_b').val(total);
	});
	</script>
	<tr>
		<td>Girls</td>
		<td class="sturep_class4_g" ><input class="elegirlsreptotalcheckclass nonnegative number maxthree" type="number" name="sturep_class4_g" value="0" ></input></td>
		<td class="sturep_class5_g" ><input class="elegirlsreptotalcheckclass nonnegative number maxthree" type="number" name="sturep_class5_g" value="0" ></input></td>
		<td class="sturep_class6_g" ><input class="elegirlsreptotalcheckclass nonnegative number maxthree" type="number" name="sturep_class6_g" value="0" ></input></td>
		<td class="sturep_class7_g" ><input class="elegirlsreptotalcheckclass nonnegative number maxthree" type="number" name="sturep_class7_g" value="0" ></input></td>
		<td class="sturep_class8_g" ><input class="elegirlsreptotalcheckclass nonnegative number maxthree" type="number" name="sturep_class8_g" value="0" ></input></td>
		<td class="sturep_class9_g" ><input class="elegirlsreptotalcheckclass nonnegative number maxthree" type="number" name="sturep_class9_g" value="0" ></input></td>
		<td class="sturep_class10_g" ><input class="elegirlsreptotalcheckclass nonnegative number maxthree" type="number" name="sturep_class10_g" value="0" ></input></td>
		<td class="sturep_class11_g" ><input class="elegirlsreptotalcheckclass nonnegative number maxthree" type="number" name="sturep_class11_g" value="0" ></input></td>
		<td class="sturep_class12_g" ><input class="elegirlsreptotalcheckclass nonnegative number maxthree" type="number" name="sturep_class12_g" value="0" ></input></td>
		<td class="" ><input class="sturep_total_g" readonly="readonly" type="number" name="sturep_total_g" value="0" ></input></td>
	</tr>
	<script>
	$('.elegirlsreptotalcheckclass').on('keyup keypress blur change', function() {
		var class4 = parseInt($('input[name=sturep_class4_g]').val());
		if(!class4) { class4 = 0; }
		var class5 = parseInt($('input[name=sturep_class5_g]').val());
		if(!class5) { class5 = 0; }
		var class6 = parseInt($('input[name=sturep_class6_g]').val());
		if(!class6) { class6 = 0; }
		var class7 = parseInt($('input[name=sturep_class7_g]').val());
		if(!class7) { class7 = 0; }
		var class8 = parseInt($('input[name=sturep_class8_g]').val());
		if(!class8) { class8 = 0; }
		var class9 = parseInt($('input[name=sturep_class9_g]').val());
		if(!class9) { class9 = 0; }
		var class10 = parseInt($('input[name=sturep_class10_g]').val());
		if(!class10) { class10 = 0; }
		var class11 = parseInt($('input[name=sturep_class11_g]').val());
		if(!class11) { class11 = 0; }
		var class12 = parseInt($('input[name=sturep_class12_g]').val());
		if(!class12) { class12 = 0; }
		
		var total = class4+class5+class6+class7+class8+class9+class10+class11+class12;
		$('.sturep_total_g').val(total);
	});
	</script>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator">
<tr><td colspan="2" ><h6><b>Q26. School Management Committee (SMC)</b></h6></td></tr>
<tr>
	<td>Q26. a. Is SMC Functional ?</td>
	<td>
		<input type="radio" name="smci_is_functional" value="1">Yes</input>
		<input type="radio" name="smci_is_functional" value="2">No</input>
	</td>
</tr>
<tr>
	<td>Q26. b. Has this School Got SMC Funds ?</td>
	<td>
		<input type="radio" name="smci_received_smc" value="1">Yes</input>
		<input type="radio" name="smci_received_smc" value="2">No</input>
	</td>
</tr>
<tr>
	<td>Q26. c. Account Title</td>
	<td>
		<input type="text" name="smci_ac_title" value=""></input>
	</td>
</tr>
<tr>
	<td>Q26. d. Account Number</td>
	<td>
		<input type="text" name="smci_ac_number" value=""></input>
	</td>
</tr>
<tr>
	<td>Q26. e. Bank Name</td>
	<td>
		<select name="smci_bank_name" >
		<?php foreach($banks as $bank) { ?>
		<option value="<?php echo $bank['codesForBank']['BankId']; ?>" ><?php echo $bank['codesForBank']['BankName']; ?></option>
		<?php } ?>
		</select>
	</td>
</tr>
<tr>
	<td>Q26. f.(i) Bank Branch Name</td>
	<td>
		<input type="text" name="smci_bank_branch_name" value=""></input>
	</td>
</tr>
<tr>
	<td>Q26. f.(ii) Bank Branch Code</td>
	<td>
		<input type="number" name="smci_bank_branch_code" class="nonnegative number" value=""></input>
	</td>
</tr>
<tr>
	<td>Q26. g. Balance in SMC Account as of 30th September</td>
	<td>
		<input type="number" name="smci_balance_september" value=""></input>
	</td>
</tr>
<tr>
	<td>Q26. h.(i) SMC Chairman Name</td>
	<td>
		<input type="text" name="smci_chairman_name" value=""></input>
	</td>
</tr>
<tr>
	<td>Q26. h.(i) SMC Chairman Gender</td>
	<td>
		<input type="radio" name="smci_chairman_gender" value="male">Male</input>
		<input type="radio" name="smci_chairman_gender" value="female">Female</input>
	</td>
</tr>
<tr>
	<td>Q26. h.(iii) SMC Chairman Contact Number</td>
	<td>
		<input type="text" name="smci_chairman_contact_number" value=""></input>
	</td>
</tr>
<tr>
	<td>Q26. h.(iii) SMC Chairman CNIC</td>
	<td>
		<input type="text" name="smci_chairman_cnic" value=""></input>
	</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator">
<tr><td colspan="3" ><h6><b>Q27. Write Total Number of following facilities available in School</b></h6></td></tr>
<tr>
	<td>Items</td>
	<td>Working</td>
	<td>Repairable</td>
</tr>
<tr>
	<td>a. Blackboard</td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_blackboard_working" value="" ></input></td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_blackboard_repairable" value="" ></input></td>
</tr>
<tr>
	<td>b. Student Chairs</td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_stu_chairs_working" value="" ></input></td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_stu_chairs_repairable" value="" ></input></td>
</tr>
<tr>
	<td>c. Student Desks</td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_stu_desks_working" value="" ></input></td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_stu_desks_repairable" value="" ></input></td>
</tr>
<tr>
	<td>d. Student Benches</td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_stu_benches_working" value="" ></input></td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_stu_benches_repairable" value="" ></input></td>
</tr>
<tr>
	<td>e. Teacher Chairs</td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_teacher_chairs_working" value="" ></input></td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_teacher_chairs_repairable" value="" ></input></td>
</tr>
<tr>
	<td>f. Teacher Tables</td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_teacher_tables_working" value="" ></input></td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_teacher_tables_repairable" value="" ></input></td>
</tr>
<tr>
	<td>g. Electric Fans</td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_electric_fans_working" value="" ></input></td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_electric_fans_repairable" value="" ></input></td>
</tr>
<tr>
	<td>h. Electric Fans</td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_almirah_working" value="" ></input></td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_almirah_repairable" value="" ></input></td>
</tr>
<tr>
	<td>i. Computers</td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_computers_working" value="" ></input></td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_computers_repairable" value="" ></input></td>
</tr>
<tr>
	<td>j. Water Pump (Electric Motor)</td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_water_pump_working" value="" ></input></td>
	<td><input type="number" class="nonnegative number maxthree"name="sfaci_water_pump_repairable" value="" ></input></td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator">
<tr><td colspan="2" ><h6><b>Q28. Which of the following facilities are available in the School</b></h6></td></tr>
<tr>
	<td>Questions</td>
	<td>Response</td>
</tr>
<tr>
	<td>a. Computer Lab</td>
	<td>
		<select name="sfaci_comp_lab">
			<option value="1" >Available and Functional</option>
			<option value="2" >Available but not Functional</option>
			<option value="3" >Not Available</option>
		</select>
	</td>
</tr>
<tr>
	<td>b. Physics Lab</td>
	<td>
		<select name="sfaci_physics_lab">
			<option value="1" >Available and Functional</option>
			<option value="2" >Available but not Functional</option>
			<option value="3" >Not Available</option>
		</select>
	</td>
</tr>
<tr>
	<td>c. Chemistry Lab</td>
	<td>
		<select name="sfaci_chem_lab">
			<option value="1" >Available and Functional</option>
			<option value="2" >Available but not Functional</option>
			<option value="3" >Not Available</option>
		</select>
	</td>
</tr>
<tr>
	<td>d. Biology Lab</td>
	<td>
		<select name="sfaci_biology_lab">
			<option value="1" >Available and Functional</option>
			<option value="2" >Available but not Functional</option>
			<option value="3" >Not Available</option>
		</select>
	</td>
</tr>
<tr>
	<td>e. Home Economics Lab</td>
	<td>
		<select name="sfaci_home_economics_lab">
			<option value="1" >Available and Functional</option>
			<option value="2" >Available but not Functional</option>
			<option value="3" >Not Available</option>
		</select>
	</td>
</tr>
<tr>
	<td>f. Library</td>
	<td>
		<select name="sfaci_library">
			<option value="1" >Available and Functional</option>
			<option value="2" >Available but not Functional</option>
			<option value="3" >Not Available</option>
		</select>
	</td>
</tr>
<tr>
	<td>g. Play Ground</td>
	<td>
		<select name="sfaci_play_ground">
			<option value="1" >Available and Functional</option>
			<option value="2" >Available but not Functional</option>
			<option value="3" >Not Available</option>
		</select>
	</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator">
<tr><td><label>Signature of Head of the School Head Teacher / DDO Secondary and Higher Secondary School</label></td>
				<td>
					<input class="" type="radio" name="ht_signature_page_2" value="1" >Yes</input>
					<input class="" type="radio" name="ht_signature_page_2" value="2" >No</input>
				</td>
			</tr>
</table>
</div>

<div class="page4" style="display:none;">
	<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator">
		<tr>
			<td><b>Question</b></td>
			<td><b>Response</b></td>
		</tr>
		<tr>
			<td>Q30. School Area Covered in Square Feet</td>
			<td><input type="number" name="sgi_sch_area_covered" class="nonnegative number" ></input></td>
		</tr>
		<tr>
			<td>Q31. Class Time Table</td>
			<td>
				<input type="radio" name="sgi_sch_time_table_available" value="1" >Yes</input>
				<input type="radio" name="sgi_sch_time_table_available" value="2" >No</input>
			</td>
		</tr>
		<tr>
			<td>Q32. SEMIS Code (New/Old) Displayed on Visible Location</td>
			<td><input type="radio" name="sgi_sch_semis_dislayed" value="1" >Yes</input>
			<input type="radio" name="sgi_sch_semis_dislayed" value="2" >No</input></td>
		</tr>
		<tr>
			<td>Q33. Did the school receive Textbooks in academic year 2013/14 ? </td>
			<td><input type="radio" name="sgi_sch_received_tb_13_14" value="1" >Yes</input>
			<input type="radio" name="sgi_sch_received_tb_13_14" value="2" >No</input></td>
		</tr>
		<tr>
			<td>Q34. Any Construction Work in the past academic year (2012/13) ? </td>
			<td><input type="radio" name="sgi_sch_const_work_12_13" value="1" >Yes</input>
			<input type="radio" name="sgi_sch_const_work_12_13" value="2" >No</input></td>
		</tr>
		<tr>
			<td>Q35. Was Girls Stipend Received in academic year 2012/13 ? </td>
			<td>
				<input type="radio" name="sgi_sch_received_stipend_12_13" value="1" >Yes</input>
				<input type="radio" name="sgi_sch_received_stipend_12_13" value="2" >No</input>
				<input type="radio" name="sgi_sch_received_stipend_12_13" value="3" >Not Applicable</input>
			</td>
		</tr>
	</table>
	<div class="page3">
		<table style="margin-left:-15px;" border="0" cellpadding="0" cellspacing="0" class="shrink CSSTableGenerator teacher_table grid_table wf">
				<tr><td style="width:50px;" >S.No.</td><td style="width:50px;" >Full Name</td><td style="width:50px;" >CNIC Number</td><td style="width:50px;" >Gender</td><td style="width:50px;" >Personal Number from AG Office</td><td style="width:50px;" >Date of Birth</td><td style="width:50px;" >Designation Code</td><td style="width:50px;" >BPS</td><td style="width:50px;" >Date of Entry In this Government Service</td><td style="width:50px;" >Code for Type of Post</td><td style="width:50px;" >Highest Academic Qualification Code</td><td style="width:50px;" >Professional Training Code</td><td style="width:50px;" >On Detailment</td><td style="width:50px;" >Contact Number</td></tr>
		</table>
		<table style="margin-left:-15px;" border="0" cellpadding="0" cellspacing="0" class="shrink CSSTableGenerator teacher_add_table grid_table wf">
		
				<tr><td>Add Teacher Details</td><td><a type="button" href="javascript:teachers_add(1);" class="teachers_add" >Add Another Teacher Details</a></td><td>Delete Last Row</td><td><a type="button" href="javascript:teachers_delete(1);" class="teachers_delete" >Delete Last Added Teacher Details</a></td></tr>
				
		</table>
		<input type="hidden" name="teachers_list_added" id="teachers_list_added" value="" ></input>
	</div>
	<input type="submit" value="submit" />
</div>

</form>
<div style="text-align:center;">
<a class="previous button" style="line-height:2.8em;" href="javascript:change_page(1);" >Previous</a>
<a class="next button" style="line-height:2.8em;" href="javascript:change_page(2);" >Next</a>
</div>
<script>
function change_page(number) {
	if(number == 1)
	{
		
		$('.page1').attr('style','display:block;');
		$('.page2').attr('style','display:none;');
		$('.page4').attr('style','display:none;');
		
		$('.previous').attr('href','javascript:change_page(1);');
		$('.next').attr('href','javascript:change_page(2);');
		
	}else if(number == 2)
	{
		$('.page1').attr('style','display:none;');
		$('.page2').attr('style','display:block;');
		$('.page4').attr('style','display:none;');
		
		$('.previous').attr('href','javascript:change_page(1);');
		$('.next').attr('href','javascript:change_page(3);');
		
	}else if(number == 3) 
	{
		$('.page1').attr('style','display:none;');
		$('.page2').attr('style','display:none;');
		$('.page4').attr('style','display:block;');
		
		$('.previous').attr('href','javascript:change_page(2);');
		$('.next').attr('href','javascript:change_page(3);');
	}
}

$( ".teachers_number" ).on('keyup keypress blur change', function() {
		var teachers_govt_male = parseInt($('#sti_govt_teacher_number_male').val());
		if(!teachers_govt_male) { teachers_govt_male = 0; } 
		var teachers_non_govt_male = parseInt($('#sti_non_govt_teacher_number_male').val());
		if(!teachers_non_govt_male) { teachers_non_govt_male = 0; } 
		var teachers_govt_female = parseInt($('#sti_govt_teacher_number_female').val());
		if(!teachers_govt_female) { teachers_govt_female = 0; } 
		var teachers_non_govt_female = parseInt($('#sti_non_govt_teacher_number_female').val());
		if(!teachers_non_govt_female) { teachers_non_govt_female = 0; } 
		
		var total_teachers = teachers_govt_male+teachers_non_govt_male+teachers_govt_female+teachers_non_govt_female;
		$('.total_teachers').val(total_teachers);
		
		var teachers_list_added = $('#teachers_list_added').val();
		
		if(total_teachers < teachers_list_added)
		{
			x = total_teachers + 1;
			$('.teachers_add').attr('href', 'javascript:teachers_add('+x+')');
			$('.teachers_delete').attr('href', 'javascript:teachers_delete('+x+')');
			for(a = total_teachers; a < teachers_list_added; a++)
			{
				id = a + 1;
				$('#teachers_row_'+id).remove();
			}
			$('input[type="submit"]').removeAttr('disabled');
		}
		
});
// $( ".teachers_number" ).on('keyup keypress blur change', function() {
function teachers_delete(id) {
		
		var b = id - 1;
		$('#teachers_list_added').val(b);
		
		$('input[type="submit"]').attr('disabled','disabled');
		
		$('#teachers_row_'+id).remove();
		$('.teachers_add').attr('href', 'javascript:teachers_add('+id+')');
		$('.teachers_delete').attr('href', 'javascript:teachers_delete('+b+')');
}
function teachers_add(id) {	
			$('#teachers_list_added').val(id);
			var total_teachers = $('.total_teachers').val();
			if(id == total_teachers)
			{
				$('input[type="submit"]').removeAttr('disabled');
			}
			if(id <= total_teachers)
			{
				$('input[type="submit"]').attr('disabled','disabled');
				
				var b = id;
				id = id + 1;
				$('.teachers_add').attr('href', 'javascript:teachers_add('+id+')');
				$('.teachers_delete').attr('href', 'javascript:teachers_delete('+b+')');
				
				$('.teacher_table').append('<tr id="teachers_row_'+b+'" ><td>'+b+'</td><td><input type="text" style="width:100px;" name="tdi_full_name_'+b+'" value=""></input></td><td><input style="width:115px;" type="text" id="tdi_teacher_cnic_'+b+'" name="tdi_teacher_cnic_'+b+'" value="" ></input></td><td><input type="radio" name="tdi_teacher_gender_'+b+'" value="1" >Male</input><br><input type="radio" name="tdi_teacher_gender_'+b+'" value="2" >Female</input></td><td><input type="number" style="width:64px;" id="tdi_teacher_personnel_number_'+b+'" name="tdi_teacher_personnel_number_'+b+'" value="" ></input></td><td><div id="well"><div id="datetimepicker_dob_'+b+'" class="input-append"><input style="width:75px;" readonly="readonly"  data-format="yyyy-MM-dd" type="text" name="tdi_teacher_dob_date_'+b+'" value="" ></input><span class="add-on"><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span></div></div></td><td><select style="width:45px;" name="tdi_teacher_designation_'+b+'" ><?php foreach($codesteacherdesignations as $codesteacherdesignation) { ?><option value="<?php echo $codesteacherdesignation['codesForTeachersDesignation']['DesignationID']; ?>" ><?php echo $codesteacherdesignation['codesForTeachersDesignation']['DesignationID']; ?></option><?php } ?></select></td><td><input style="width:30px;" type="number" id="tdi_teacher_bps_'+b+'" class="nonnegative2" name="tdi_teacher_bps_'+b+'" value="" ></input></td><td><div id="well"><div id="datetimepicker_doj_'+b+'" class="input-append"><input readonly="readonly" style="width:75px;" data-format="yyyy-MM-dd" type="text" name="tdi_teacher_entry_service_date_'+b+'" value="" ></input><span class="add-on"><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span></div></div></td><td><select style="width:45px;" name="tdi_teacher_code_type_post_'+b+'" ><?php foreach($typeofposts as $typeofpost) { ?><option value="<?php echo $typeofpost['codesForTypeOfPost']['typeid']; ?>" ><?php echo $typeofpost['codesForTypeOfPost']['typeid']; ?></option><?php } ?></select></td><td><select style="width:45px;" name="tdi_teacher_highest_academic_qualification_'+b+'" ><?php foreach($codesteacherqualifications as $codesteacherqualification) { ?><option value="<?php echo $codesteacherqualification['codesForTeachersQualification']['QualificaitonId']; ?>" ><?php echo $codesteacherqualification['codesForTeachersQualification']['QualificaitonId']; ?></option><?php } ?></select></td><td><select style="width:45px;" name="tdi_teacher_highest_professional_training_'+b+'" ><?php foreach($codesteachertrainings as $codesteachertraining) { ?><option value="<?php echo $codesteachertraining['codesForTeachersTraining']['TrainingID']; ?>" ><?php echo $codesteachertraining['codesForTeachersTraining']['TrainingID']; ?></option><?php } ?></select></td><td><input type="radio" name="tdi_teacher_on_detailment_'+b+'" value="1" >Yes</input><br><input type="radio" name="tdi_teacher_on_detailment_'+b+'" value="2" >No</input></td><td><input style="width:93px;" type="text" id="tdi_teacher_number_'+b+'" name="tdi_teacher_number_'+b+'" value="" ></input></td></tr>');
				
				oStringMask = new Mask("########");
				oStringMask.attach(document.getElementById('tdi_teacher_personnel_number_'+b));
				
				oStringMaskCnic = new Mask("#####-#######-#");
				oStringMaskCnic.attach(document.getElementById('tdi_teacher_cnic_'+b));
				
				oStringMaskphone = new Mask("####-#######");
				oStringMaskphone.attach(document.getElementById('tdi_teacher_number_'+b));
				
				oStringMaskbps = new Mask("###");
				oStringMaskbps.attach(document.getElementById('tdi_teacher_bps_'+b));
				
				$('.nonnegative2').filter(function() {
					return parseInt($(this).val(), 10) > 0;
				});
				
				$('#datetimepicker_dob_'+b).datetimepicker({
					pickTime: false
				});
				
				$('#datetimepicker_doj_'+b).datetimepicker({
					pickTime: false
				});
			}
}
$( ".non_teacher_number" ).on('keyup keypress blur change', function() {
		var sti_govt_non_teaching_number_male = parseInt($('#sti_govt_non_teaching_number_male').val());
		if(!sti_govt_non_teaching_number_male) { sti_govt_non_teaching_number_male = 0; } 
		var sti_govt_non_teaching_number_female = parseInt($('#sti_govt_non_teaching_number_female').val());
		if(!sti_govt_non_teaching_number_female) { sti_govt_non_teaching_number_female = 0; } 
		
		var total_non_teachers = sti_govt_non_teaching_number_male+sti_govt_non_teaching_number_female;
		$('.total_non_teachers').val(total_non_teachers);
});
$('.nonnegative').filter(function() {
    return parseInt($(this).val(), 10) > 0;
	
});

$('.number').keyup( function(e) {
		var $this = $(this);
		$this.val($this.val().replace(/[^\d.]/g, ''));
	
});


$('.maxnine').keydown( function(e){
 var max_chars = 9;
	if ($(this).val().length >= 9) {
        $(this).val($(this).val().substr(0, max_chars));
    }
});

$('.maxnine').keyup( function(e){
    var max_chars = 9;
	if ($(this).val().length >= 9) {
        $(this).val($(this).val().substr(0, max_chars));
    }
	});	
	
$('.maxthree').keydown( function(e){
 var max_chars = 3;
	if ($(this).val().length >= 3) {
        $(this).val($(this).val().substr(0, max_chars));
    }
});

$('.maxthree').keyup( function(e){
    var max_chars = 3;
	if ($(this).val().length >= 3) { 
        $(this).val($(this).val().substr(0, max_chars));
    }
});


</script>

<script language="JavaScript1.2" src="<?php echo $this->webroot; ?>js/masks.js"></script>
<script language="JavaScript1.2">
	function stringTest(v, m, e){
		if( !bShowTests ) return false;
		var oMask = new Mask(m);
		
		writeOutput("<b>mask:</b> "  + m);
		writeOutput("<b>string:</b> " + v);
		var n = oMask.format(v);
		if( e != n ) document.write("<font color=red>");
		writeOutput("<b>result:</b> " + n);
		writeOutput("<b>expected:</b> " + e);
		if( e != n ) document.write("</font>");
		writeOutput("<b>error:</b> " + ((oMask.error.length == 0) ? "n/a" : oMask.error.join("<br>")));
		writeOutput("");
		updateResults(oMask, v, e);
	}

		document.new_classroom_observation.reset();
		oStringMask = new Mask("#####-#######-#");
		oStringMask.attach(document.new_classroom_observation.hti_cnic);
		oStringMask.attach(document.new_classroom_observation.smci_chairman_cnic);
		oStringMask2 = new Mask("####-#######");
		oStringMask2.attach(document.new_classroom_observation.bi_school_phone_number);
		oStringMask2.attach(document.new_classroom_observation.hti_number);
		oStringMask2.attach(document.new_classroom_observation.smci_chairman_contact_number);
		
		$("input").unbind("keyup", stickInputs);
		$("input").unbind("keydown", stickInputs);
		
		function stickInputs(){
			var value = $("#single").val();
			$("#single1").val(value);
		}
		
	</script>