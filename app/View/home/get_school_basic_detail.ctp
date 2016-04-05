<?php
if(isset($schools))
{
?>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" >
<tr>
	<td colspan=2 >
		<h6>Basic Information of School</h6>
	</td>
</tr>
	<tr><td><label>Old SEMIS Code</label></td><td><input readonly="readonly" class="semis_code" type="number" id="school_semis_old" name="school_semis_old" value="<?php echo $schools[0]['Univ2012']['school_id_old']; ?>" ></input></td></tr>
	<tr>
		<td><label>District</label></td>
		<td>
		<select name="bi_school_district" id="district_code">
			<option selected="selected" value="0">All</option>
			<?php foreach($districts as $district) { ?>
				<option <?php if($district['SemisCodeDistrict']['district_id'] == $schools[0]['Univ2012']['DistrictID']) { ?> selected="selected" <?php } ?> value="<?php echo $district['SemisCodeDistrict']['district_id']; ?>"><?php echo $district['SemisCodeDistrict']['district']; ?></option>
			<?php } ?>
		</select>
		</td>
	</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="tehsil" >	
		<tr>
			<td><label>Tehsil</label></td>
			<td>
				<select name="bi_school_taluka" id="tehsil_code">
					<option selected="selected" value="0">All</option>
					<?php foreach($tehsils as $tehsil) { if($tehsil['CodesForDistrictAndTehsil']['district_id'] == $schools[0]['Univ2012']['DistrictID']) { ?>
						<option <?php if($tehsil['CodesForDistrictAndTehsil']['tehsil_id'] == $schools[0]['Univ2012']['TehsilID']) { ?> selected="selected" <?php } ?> value="<?php echo $tehsil['CodesForDistrictAndTehsil']['tehsil_id']; ?>"><?php echo $tehsil['CodesForDistrictAndTehsil']['tehsil']; ?></option>
					<?php } } ?>
				</select>
			</td>
		</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="unioncouncil" >	
		<tr>
			<td width="50%">Union Councils</td>
			<td width="50%">
				<select name="bi_school_uc" id="union_council_id" >
					
					<option selected="selected" value="0">All</option>
					<?php foreach($union_councils as $union_council) { if($schools[0]['Univ2012']['TehsilID'] == $union_council['CodesForUc']['tehsil_id']) { ?>
						<option <?php if($union_council['CodesForUc']['uc_id'] == $schools[0]['Univ2012']['UnionCouncilID']) { ?> selected="selected" <?php } ?> value="<?php echo $union_council['CodesForUc']['uc_id'];?>" >
					<?php echo $union_council["CodesForUc"]["uc_name"]; ?> </option><?php } } ?>
				</select>
			</td>
		</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" >
<tr><td><label>Q3. Tappa</label></td><td><input type="text" name="bi_school_tappa" value="" ></input></td></tr>
<tr><td><label>Q4. Deh</label></td><td><input type="text" name="bi_school_deh" value="" ></input></td></tr>
<tr><td><label>Q5. National Assembly</label></td><td><input type="number" class="nonnegative number maxthree" name="bi_school_na" value="" ></input></td></tr>
<tr><td><label>Q6. Provincial Sindh</label></td><td><input type="number" class="nonnegative number maxthree"  name="bi_school_ps" value="" ></input></td></tr>
<tr><td><label>Q7.(i) School Name</label></td><td><input type="text" name="bi_school_name" value="<?php echo $schools[0]['Univ2012']['Prefix'].' - '.$schools[0]['Univ2012']['SchoolName']; ?>" ></input></td></tr>
<tr><td><label>Q7.(ii) School Address</label></td><td><input type="text" name="bi_school_address" value="<?php echo $schools[0]['Univ2012']['SchoolAddress']; ?>" ></input></td></tr>
<tr><td><label>Q7.(iii) School Village / Mohalla</label></td><td><input type="text" name="bi_school_village_mohallah" value="<?php echo $schools[0]['Univ2012']['Village-Mohalla']; ?>" ></input></td></tr>
<tr><td><label>Q7.(iv) Phone Number</label></td><td><input type="text" name="bi_school_phone_number" value="<?php echo $schools[0]['Univ2012']['Phone']; ?>" ></input></td></tr>
<tr><td colspan=2 ><h6><b>Q8. Information About Head of School / Head Teacher</b></h6></td></tr>
<tr><td><label>a. Head Teacher Name</label></td><td><input type="text" name="hti_name" value="" ></input></td></tr>
<tr><td><label>b. Head Teacher CNIC</label></td><td><input type="text" name="hti_cnic" value="" ></input></td></tr>
<tr><td><label>c. Head Teacher Contact Number (Tele/Mob)</label></td><td><input type="text" name="hti_number" value="" ></input></td></tr>
<tr><td><label>d. Head Teacher Contact Number (Tele/Mob)</label></td><td>
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
				$('input[name=hti_designation]').change(function() {
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
<tr><td colspan="2" ><h6>Q9. Detailed School Information</h6></td></tr>
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
				$('input[name=dsi_status]').change(function() {
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

<?php }else{ ?>

<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" >
<tr style="background-color:#ff0000;" ><td colspan=2 >
					<h6>Semis Code Not Found</h6>
</td></tr>

<tr><td colspan=2 >
					<h6>Basic Information of School</h6>
</td></tr>
<tr><td><label>Old SEMIS Code</label></td><td><input class="semis_code" readonly="readonly" type="number" id="school_semis_old" name="school_semis_old" value="" ></input></td></tr>
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
<tr><td><label>Q3. Tappa</label></td><td><input type="text" name="bi_school_tappa" value="" ></input></td></tr>
<tr><td><label>Q4. Deh</label></td><td><input type="text" name="bi_school_deh" value="" ></input></td></tr>
<tr><td><label>Q5. National Assembly</label></td><td><input type="number" name="bi_school_na" value="" ></input></td></tr>
<tr><td><label>Q6. Provincial Sindh</label></td><td><input type="number" name="bi_school_ps" value="" ></input></td></tr>
<tr><td><label>Q7.(i) School Name</label></td><td><input type="text" name="bi_school_name" value="" ></input></td></tr>
<tr><td><label>Q7.(ii) School Address</label></td><td><input type="text" name="bi_school_address" value="" ></input></td></tr>
<tr><td><label>Q7.(iii) School Village / Mohalla</label></td><td><input type="text" name="bi_school_village_mohallah" value="" ></input></td></tr>
<tr><td><label>Q7.(iv) Phone Number</label></td><td><input type="text" name="bi_school_phone_number" value="" ></input></td></tr>
<tr><td colspan=2 ><h6>Q8. Information About Head of School / Head Teacher</h6></td></tr>
<tr><td><label>a. Head Teacher Name</label></td><td><input type="text" name="hti_name" value="" ></input></td></tr>
<tr><td><label>b. Head Teacher CNIC</label></td><td><input type="text" name="hti_cnic" value="" ></input></td></tr>
<tr><td><label>c. Head Teacher Contact Number (Tele/Mob)</label></td><td><input type="text" name="hti_number" value="" ></input></td></tr>
<tr><td><label>d. Head Teacher Contact Number (Tele/Mob)</label></td><td>
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
				$('input[name=hti_designation]').change(function() {
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
<tr><td colspan="2" ><h6>Q9. Detailed School Information</h6></td></tr>
<tr><td><label>a. Status</label></td>
<td>
			<input type="radio" name="dsi_status" value="1" >Functional</input><br>
			<input type="radio" name="dsi_status" value="2" >Temporary Closed</input><br>
			<input type="radio" name="dsi_status" value="3" >Permanent Closed</input><br>
</td>
</tr>
</table>

<?php } ?>

<script>
$('#district_code').change(function(){
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
							$('#tehsil_code').change(function(){
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
				
				$('#tehsil_code').change(function(){
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

		oStringMask = new Mask("#####-#######-#");
		oStringMask.attach(document.new_classroom_observation.hti_cnic);
		oStringMask.attach(document.new_classroom_observation.smci_chairman_cnic);
		oStringMask2 = new Mask("####-#######");
		oStringMask2.attach(document.new_classroom_observation.bi_school_phone_number);
		oStringMask2.attach(document.new_classroom_observation.hti_number);
		oStringMask2.attach(document.new_classroom_observation.smci_chairman_contact_number);
		
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
	
	$(function() {
		$('#datetimepicker4').datetimepicker({
		  pickTime: false
		});
		$('#datetimepicker3').datetimepicker({
		  pickTime: false
		});
		
	  });
	</script>