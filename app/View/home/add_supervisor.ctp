<script src="<?php echo $this->webroot; ?>js/jquery.maskedinput.js" type="text/javascript"></script>
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
</script>
<form name="new_classroom_observation" id="new_classroom_observation" action="<?php echo $this->webroot?>home/submit_semis_form_p1" method="post">
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="" onload="init();" >

<tr><td width="25%"><label>District</label></td><td width="25%">
	<select name="bi_school_district_display" id="district_code">
		<option selected="selected" value="0">All</option>
		<?php foreach($districts as $district) { ?>
			<option <?php if($schools['SemisUniversal201415']['bi_school_district'] == $district['SemisCodeDistrict']['district_id']) { ?><?php } ?> value="<?php echo $district['SemisCodeDistrict']['district_id']; ?>"><?php echo $district['SemisCodeDistrict']['district']; ?></option>
		<?php } ?>
	</select>
	<select style="display:none;" name="bi_school_district" >
		<option selected="selected" value="0">All</option>
		<?php foreach($districts as $district) { ?>
			<option  value="<?php echo $district['SemisCodeDistrict']['district_id']; ?>"><?php echo $district['SemisCodeDistrict']['district']; ?></option>
		<?php } ?>
	</select>
	</td>
	<td width="50%" colspan=2></td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="tehsil" >
		<tr>
			<td width="25%"><label>Tehsil</label></td>
			<td width="25%">
				<select name="bi_school_taluka_display" id="tehsil_code">
					<option selected="selected" value="0">All</option>
					<?php foreach($tehsils as $tehsil) { if($tehsil['CodesForDistrictAndTehsil']['district_id'] == $schools['SemisUniversal201415']['bi_school_district']) { ?>
						<option <?php if($tehsil['CodesForDistrictAndTehsil']['tehsil_id'] == $schools['SemisUniversal201415']['bi_school_taluka']) { ?> selected="selected" <?php } ?> value="<?php echo $tehsil['CodesForDistrictAndTehsil']['tehsil_id']; ?>"><?php echo $tehsil['CodesForDistrictAndTehsil']['tehsil']; ?></option>
					<?php } } ?>
				</select>
				<select style="display:none;" name="bi_school_taluka" >
					<option selected="selected" value="0">All</option>
					<?php foreach($tehsils as $tehsil) { if($tehsil['CodesForDistrictAndTehsil']['district_id'] == $schools['SemisUniversal201415']['bi_school_district']) { ?>
						<option <?php if($tehsil['CodesForDistrictAndTehsil']['tehsil_id'] == $schools['SemisUniversal201415']['bi_school_taluka']) { ?> selected="selected" <?php } ?> value="<?php echo $tehsil['CodesForDistrictAndTehsil']['tehsil_id']; ?>"><?php echo $tehsil['CodesForDistrictAndTehsil']['tehsil']; ?></option>
					<?php } } ?>
				</select>
			</td>
			<td width="50%" colspan=2>
			</td>
			
		</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="unioncouncil" >	
		<tr>
			<td width="25%">Union Councils</td>
			<td width="25%">
				<select disabled name="bi_school_uc_display" id="union_council_id" >
					<option selected="selected" value="0">All</option>
					<?php foreach($union_councils as $union_council) { if($schools['SemisUniversal201415']['bi_school_taluka'] == $union_council['CodesForUc']['tehsil_id']) { ?>
						<option <?php if($union_council['CodesForUc']['uc_id'] == $schools['SemisUniversal201415']['bi_school_uc']) { ?> selected="selected" <?php } ?> value="<?php echo $union_council['CodesForUc']['uc_id'];?>" >
					<?php echo $union_council["CodesForUc"]["uc_name"]; ?> </option><?php } } ?>
				</select>
				<select style="display:none;" name="bi_school_uc" >
					<option selected="selected" value="0">All</option>
					<?php foreach($union_councils as $union_council) { if($schools['SemisUniversal201415']['bi_school_taluka'] == $union_council['CodesForUc']['tehsil_id']) { ?>
						<option <?php if($union_council['CodesForUc']['uc_id'] == $schools['SemisUniversal201415']['bi_school_uc']) { ?> selected="selected" <?php } ?> value="<?php echo $union_council['CodesForUc']['uc_id'];?>" >
					<?php echo $union_council["CodesForUc"]["uc_name"]; ?> </option><?php } } ?>
				</select>
			</td>
			<td width="50%" colspan=2>
			</td>
		</tr>
</table>
<br/>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="details" >	
<tr><td><label>a. Name</label></td><td width="25%"><input type="text" name="hti_name" value="" ></input></td>
<td width="25%"><label>b. CNIC</label></td><td width="25%"><input type="text" name="hti_cnic" value="" ></input></td></tr>
<tr><td><label>d. Gender</label></td><td>
			<input type="radio" name="hti_gender" value="1" >Male</input>
			<input type="radio" name="hti_gender" value="2" >Female</input></td>

<td><label>e. Contact Number (Tele/Mob)</label></td><td><input type="text" name="hti_number" maxlength="11" value="" ></input></td></tr>
<tr><td><label>f. Email</label></td><td colspan=3><input type="text" name="hti_email" value="" ></input></td>
</tr>
</table>
<script language="JavaScript1.2">
	
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

		// document.new_classroom_observation.reset();
		// oStringMask = new Mask("#####-#######-#");
		// oStringMask.attach(document.new_classroom_observation.hti_cnic);
		// oStringMask.attach(document.new_classroom_observation.smci_chairman_cnic);
		// oStringMask2 = new Mask("####-#######");
		// oStringMask2.attach(document.new_classroom_observation.bi_school_phone_number);
		// oStringMask2.attach(document.new_classroom_observation.hti_number);
		// oStringMask2.attach(document.new_classroom_observation.smci_chairman_contact_number);
		
		// $("input").unbind("keyup", stickInputs);
		// $("input").unbind("keydown", stickInputs);
		
		function stickInputs(){
			var value = $("#single").val();
			$("#single1").val(value);
		}
		
		
		$(document).ready(function() {
		  $(body).keydown(function(event){
			if(event.keyCode == 13) {
			  event.preventDefault();
			  return false;
			}
		  });
		});
	</script>