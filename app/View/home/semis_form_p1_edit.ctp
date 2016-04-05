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
	
	//Print Pages
	function CallPrint(strid) {
			
			// var table = document.getElementById("tabledata");
			// table.className = "CSSTableGenerator";
            var WinPrint = window.open('', '', 'letf=30,top=30,width=800,height=800,toolbar=0,scrollbars=1,status=0');
			WinPrint.document.write('<html><head><title>  </title><link rel="stylesheet" type="text/css" href="<?php echo $this->webroot; ?>css/TableCSSCode.css"></head><body>');
			// WinPrint.document.write('<html><head><title>  </title></head><body>');
			WinPrint.document.write('<table width="100%">');
			WinPrint.document.write('<tr>');
			WinPrint.document.write('<td width="5%">');		
			WinPrint.document.write('<img  style="height: 90px;" src="<?php echo $this->webroot; ?>img/sindhgovt_logo.png">');
			WinPrint.document.write('</td>');
			WinPrint.document.write('<td width="95%">');
			WinPrint.document.write('<div style="text-align:center">REFORM SUPPORT UNIT (SEMIS WING)</div>');
			WinPrint.document.write('<div style="text-align:center">Education & Literacy Department</div>');
			WinPrint.document.write('<div style="text-align:center">Government of Sindh</div>');
			WinPrint.document.write('</td>');
			WinPrint.document.write('</tr>');
			WinPrint.document.write('</table>');
            
			if(strid == 'page1' || strid == 'page2')
			{
				var prtContent = document.getElementById('page1');
				var prtContent2 = document.getElementById('page2');
				WinPrint.document.write(prtContent.innerHTML);
				WinPrint.document.write(prtContent2.innerHTML);
				
			}else
			{
				if(strid == 'page4')
				{
					var prtContent = document.getElementById('consolidationtable');
					WinPrint.document.write(prtContent.innerHTML);
				}else{
				var prtContent = document.getElementById(strid);
				WinPrint.document.write(prtContent.innerHTML);
				}
			}
			
			
			WinPrint.document.write('<table width="100%">');
			
			WinPrint.document.write('<tr style="margin-top:100px;" >');
			WinPrint.document.write('<td width="50%"></td>');
			WinPrint.document.write('<td width="50%">');
			WinPrint.document.write('</td>');
			WinPrint.document.write('</tr>');
			WinPrint.document.write('<tr>');
			WinPrint.document.write('<td width="50%">');
			WinPrint.document.write('<div style="float:left; margin-top:200px;" >Signature of the DO(Secondary)</div>');
			WinPrint.document.write('</td>');
			WinPrint.document.write('<td width="50%">');
			WinPrint.document.write('<div style="float:right; margin-top:200px;" >Signature of the HM</div>');
			WinPrint.document.write('</td>');
			WinPrint.document.write('</tr>');
			WinPrint.document.write('<tr>');
			WinPrint.document.write('<td width="50%">');
			WinPrint.document.write('<div style="margin-top:200px;" >SOURCE: SEMIS DATABASE</div>');
			WinPrint.document.write('</td>');
			WinPrint.document.write('<td width="50%"  align="right">');
			var d = new Date();
			var curr_date = d.getDate();
			var curr_month = d.getMonth() + 1; //Months are zero based
			var curr_year = d.getFullYear();
			WinPrint.document.write('Date:'+curr_date + "-" + curr_month + "-" + curr_year);
			WinPrint.document.write('</td>');
			WinPrint.document.write('</tr>');
			WinPrint.document.write('</table>');
			WinPrint.document.write('<div>This is System Generated Print.</div>');
			WinPrint.document.write('<footer>');
			WinPrint.document.write('</footer></body></html>');
            WinPrint.document.close();
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
        }
</script>

<div style="height:60px">
<img class="printtnImg" style="float: right; height: 50px;" src="<?php echo $this->webroot; ?>img/printer.png" onclick="javascript:CallPrint('page1')" />

</div>
<form name="new_classroom_observation" id="new_classroom_observation" action="<?php echo $this->webroot?>home/submit_semis_form_p1" method="post">
<a style="line-height:2.8em;" href="javascript:change_page(1);" >Page 1</a>
<a style="line-height:2.8em;" href="javascript:change_page(2);" >Page 2</a>
<a style="line-height:2.8em;" href="javascript:change_page(3);" >Page 3</a>
<div class="page1" id="page1" >
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator">
<input style="display:none;" class="nonnegative number maxnine"  type="number" id="campus_school" name="campus_school"  value="<?php echo $schools['SemisUniversal201415']['campus_school']; ?>" ></input>
<input style="display:none;" class="nonnegative number maxnine"  type="number" id="entered_by" name="entered_by"  value="<?php echo $schools['SemisUniversal201415']['entered_by']; ?>" ></input>
<label>New SEMIS Code</label></td><td><input disabled="disabled" class="semis_code nonnegative number maxnine"  type="number" id="school_semis_new" name="school_semis_new_2"  value="<?php echo $schools['SemisUniversal201415']['school_semis_new']; ?>" ></input><input style="display:none;" class="semis_code nonnegative number maxnine"  type="number" id="school_semis_new" name="school_semis_new"  value="<?php echo $schools['SemisUniversal201415']['school_semis_new']; ?>" ></input>
<input style="display:none;" class="nonnegative number maxnine"  type="number" id="final" name="final"  value="<?php echo $schools['SemisUniversal201415']['final']; ?>" ></input>
</table>
<div id="table_first">
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="" onload="init();" >
<tr><td width="26%"><label>Coordinates Longitude</label></td><td width="25%"><input <?php if(!empty($schools['SemisUniversal201415']['coord_long'])) { ?> disabled="disabled" <?php } ?> type="text" placeholder="22-22.2222" name="coord_long_show" value="<?php echo $schools['SemisUniversal201415']['coord_long'] ?>" ></input><?php if(!empty($schools['SemisUniversal201415']['coord_long'])) { ?> <input type="text" style="display:none;" name="coord_long" value="<?php echo $schools['SemisUniversal201415']['coord_long']; ?>"  ></input><?php } ?> </td>
<td width="25%"><label>Coordinates Latitude</label></td><td width="25%"><input <?php if(!empty($schools['SemisUniversal201415']['coord_lat'])) { ?> disabled="disabled" <?php } ?> type="text" placeholder="22-22.2222" name="coord_lat_show" value="<?php echo $schools['SemisUniversal201415']['coord_lat'] ?>"  ></input><?php if(!empty($schools['SemisUniversal201415']['coord_lat'])) { ?> <input type="text" style="display:none;" name="coord_lat" value="<?php echo $schools['SemisUniversal201415']['coord_lat']; ?>" ></input><?php } ?></td></tr>
<tr><td colspan=4 >
					<h6><b>Q1. School Basic Information</b></h6>
</td></tr>
						<?php if($schools['SemisUniversal201415']['bi_school_district'] > 0) { ?>
						<tr><td width="25%"><label>District</label></td><td width="25%">
						<select disabled name="bi_school_district_display" id="district_code">
							<option selected="selected" value="0">All</option>
							<?php foreach($districts as $district) { ?>
								<option <?php if($district['SemisCodeDistrict']['district_id'] == $schools['SemisUniversal201415']['bi_school_district']) { ?> selected="selected" <?php } ?> <?php if($schools['SemisUniversal201415']['bi_school_district'] == $district['SemisCodeDistrict']['district_id']) { ?><?php } ?> value="<?php echo $district['SemisCodeDistrict']['district_id']; ?>"><?php echo $district['SemisCodeDistrict']['district']; ?></option>
							<?php } ?>
						</select>
						<select style="display:none;" name="bi_school_district" >
							<option selected="selected" value="0">All</option>
							<?php foreach($districts as $district) { ?>
								<option <?php if($district['SemisCodeDistrict']['district_id'] == $schools['SemisUniversal201415']['bi_school_district']) { ?> selected="selected" <?php } ?> <?php if($schools['SemisUniversal201415']['bi_school_district'] == $district['SemisCodeDistrict']['district_id']) { ?><?php } ?> value="<?php echo $district['SemisCodeDistrict']['district_id']; ?>"><?php echo $district['SemisCodeDistrict']['district']; ?></option>
							<?php } ?>
						</select>
						</td>
						<td width="50%" colspan=2></td>
						</tr>
						<?php }else{ ?>
						<tr><td width="25%"><label>District</label></td><td width="25%">
						<select name="bi_school_district" id="district_code">
							<option selected="selected" value="0">All</option>
							<?php foreach($districts as $district) { ?>
								<option value="<?php echo $district['SemisCodeDistrict']['district_id']; ?>"><?php echo $district['SemisCodeDistrict']['district']; ?></option>
							<?php } ?>
						</select>
						</td>
						<td width="50%" colspan=2></td>
						</tr>
						<?php } ?>
						
</table>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="tehsil" >
		<tr>
			<?php if($schools['SemisUniversal201415']['bi_school_taluka'] > 0) { ?>
			<td width="25%"><label>Tehsil</label></td>
			<td width="25%">
				<select disabled name="bi_school_taluka_display" id="tehsil_code">
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
			<?php }else{ ?>
			<?php } ?>
			<td width="50%" colspan=2>
			</td>
			
		</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="unioncouncil" >	
		<tr>
			<?php if($schools['SemisUniversal201415']['bi_school_uc'] > 0) { ?>
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
			<?php }else{ ?>
				<td width="25%"></td>
			<?php } ?>
			<td width="50%" colspan=2>
			</td>
		</tr>
</table>

<br/>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" >	
<!-- tr><td><label>Old SEMIS Code</label></td><td><input class="semis_code" disabled="disabled" type="number" id="school_semis_old" name="school_semis_old" value="" ></input></td></tr-->
<tr>
<?php if(!empty($schools['SemisUniversal201415']['bi_school_tappa'])) { ?>
<td width="25%"><label>(c). Tappa</label></td><td width="25%"><input type="text" disabled="disabled" name="just_showing_tappa" value="<?php foreach ($tappas as $tappa) { if($schools['SemisUniversal201415']['bi_school_tappa'] == $tappa['CodesForTappa']['TappaID']) { echo $tappa['CodesForTappa']['Tappa']; } } ?>" ></input><input type="text" style="display:none;" name="bi_school_tappa" value="<?php foreach ($tappas as $tappa) { if($schools['SemisUniversal201415']['bi_school_tappa'] == $tappa['CodesForTappa']['TappaID']) { echo $tappa['CodesForTappa']['TappaID']; } } ?>" ></input></td>
<?php }elseif(!empty($schools['SemisUniversal201415']['bi_school_taluka'])){ ?>
			<td width="25%">Tappa</td>
			<td width="25%">
				<select name="bi_school_tappa" id="tappa_id" >
					<option selected="selected" value="0">Not Available</option>
					<?php foreach($tappas as $tappa) { if($schools['SemisUniversal201415']['bi_school_taluka'] == $tappa['CodesForTappa']['Tehsilid']) { ?>
						<option <?php if($tappa['CodesForTappa']['TappaID'] == $schools['SemisUniversal201415']['bi_school_tappa']) { ?> selected="selected" <?php } ?> value="<?php echo $tappa['CodesForTappa']['TappaID'];?>" >
					<?php echo $tappa['CodesForTappa']['Tappa']; ?> </option><?php } } ?>
				</select>
			</td>
<?php }else{ ?>
			<td width="25%">Tappa</td>
			<td width="25%">
				<select name="bi_school_tappa" id="tappa_id" >
					<option selected="selected" value="0">Not Available</option>
					<?php foreach($tappas as $tappa) { ?>
						<option value="<?php echo $tappa['CodesForTappa']['TappaID'];?>" >
					<?php echo $tappa['CodesForTappa']['Tappa']; ?> </option><?php } ?>
				</select>
			</td>
<?php } ?>

<?php if(!empty($schools['SemisUniversal201415']['bi_school_deh'])) { ?>
<td width="25%"><label>(d). Deh</label></td><td width="25%"><input disabled="disabled" type="text" name="just_testing_deh" value="<?php foreach ($dehs as $deh) { if($schools['SemisUniversal201415']['bi_school_deh'] == $deh['CodesForDeh']['DehID']) { echo $deh['CodesForDeh']['Deh']; } } ?>" ></input><input style="display:none;" type="text" name="bi_school_deh" value="<?php foreach ($dehs as $deh) { if($schools['SemisUniversal201415']['bi_school_deh'] == $deh['CodesForDeh']['DehID']) { echo $deh['CodesForDeh']['DehID']; } } ?>" ></input></td>
<?php }elseif(!empty($schools['SemisUniversal201415']['bi_school_taluka'])){ ?>
			<td>Deh</td>
			<td>
				<select name="bi_school_deh" id="deh_id" >
					<option selected="selected" value="0">Not Available</option>
					<?php foreach($dehs as $deh) { if($schools['SemisUniversal201415']['bi_school_taluka'] == $deh['CodesForDeh']['Tehsilid']) { ?>
						<option <?php if($deh['CodesForDeh']['DehID'] == $schools['SemisUniversal201415']['bi_school_tappa']) { ?> selected="selected" <?php } ?> value="<?php echo $deh['CodesForDeh']['DehID']; ?>" >
					<?php echo $deh['CodesForDeh']['Deh']; ?> </option><?php } } ?>
				</select>
			</td>
<?php }else{ ?>
			<td>Deh</td>
			<td>
				<select name="bi_school_deh" id="deh_id" >
					<option selected="selected" value="0">Not Available</option>
					<?php foreach($dehs as $deh) {  ?>
						<option value="<?php echo $deh['CodesForDeh']['DehID']; ?>" >
					<?php echo $deh['CodesForDeh']['Deh']; ?> </option><?php } ?>
				</select>
			</td>
<?php } ?>
</tr>


<tr>

<td width="25%"><label>(e). Village / Area</label></td><td width="25%"><input  <?php if(!empty($schools['SemisUniversal201415']['bi_school_address'])) { ?> readonly <?php } ?> type="text" name="bi_school_village_mohallah" value="<?php echo $schools['SemisUniversal201415']['bi_school_village_mohallah']; ?>" ></input><?php if(!empty($schools['SemisUniversal201415']['bi_school_address'])) { ?> <input style="display:none;" type="text" name="bi_school_village_mohallah" value="<?php echo $schools['SemisUniversal201415']['bi_school_village_mohallah']; ?>" ></input> <?php } ?></td>
<!--tr><td><label>Q5. National Assembly</label></td><td><input type="number" class="nonnegative number maxthree" name="bi_school_na" value="<?php echo $deh['CodesForDeh']['bi_school_na']; ?>" ></input></td></tr>
<tr><td><label>Q6. Provincial Sindh</label></td><td><input type="number" class="nonnegative number maxthree"  name="bi_school_ps" value="" ></input></td></tr-->
<td width="25%"><label>(f). School Name with Prefix</label></td><td width="25%"><input <?php if(!empty($schools['SemisUniversal201415']['bi_school_name'])) { ?> readonly <?php } ?> type="text" name="bi_school_name" value="<?php echo $schools['SemisUniversal201415']['bi_school_name']; ?>" ></input><?php if(!empty($schools['SemisUniversal201415']['bi_school_name'])) { ?> <input style="display:none;" type="text" name="bi_school_name" value="<?php echo $schools['SemisUniversal201415']['bi_school_name']; ?>" ></input><?php } ?> </td></tr>
<tr>
<td width="25%"><label>(g). Address</label></td><td width="25%"><input type="text" <?php if(!empty($schools['SemisUniversal201415']['bi_school_address'])) { ?> readonly <?php } ?> name="bi_school_address" value="<?php echo $schools['SemisUniversal201415']['bi_school_address']; ?>" ></input><?php if(!empty($schools['SemisUniversal201415']['bi_school_address'])) { ?> <input type="text" style="display:none;" name="bi_school_address" value="<?php echo $schools['SemisUniversal201415']['bi_school_address']; ?>" ></input> <?php } ?></td>
<td width="25%"><label>(h). Phone Number</label></td><td width="25%"><input type="text" <?php if(!empty($schools['SemisUniversal201415']['bi_school_phone_number'])) { ?> readonly <?php } ?> name="bi_school_phone_number" class="nonnegative number " maxlength="11" value="<?php echo $schools['SemisUniversal201415']['bi_school_phone_number']; ?>" ></input><?php if(!empty($schools['SemisUniversal201415']['bi_school_phone_number'])) { ?> <input type="text" style="display:none;" name="bi_school_phone_number" class="nonnegative number " maxlength="11" value="<?php echo $schools['SemisUniversal201415']['bi_school_phone_number']; ?>" ></input> <?php } ?></td></tr>
<?php /* } */ ?>
<tr><td colspan=4 ><h6><b>Q2. Information About Head of School / Head Teacher</b></h6></td></tr>
<tr><td><label>a. Name</label></td><td width="25%"><input type="text" name="hti_name" value="<?php echo $schools['SemisUniversal201415']['hti_name']; ?>" ></input></td>
<td width="25%"><label>b. CNIC</label></td><td width="25%"><input type="text" name="hti_cnic" value="<?php echo $schools['SemisUniversal201415']['hti_cnic']; ?>" ></input></td></tr>
<tr>
<td>
<label>c. Designation</label></td>
<td colspan=3>
			<input type="radio" name="hti_designation" <?php if($schools['SemisUniversal201415']['hti_designation'] == 1) { ?> checked="checked" <?php } ?> value="1" >Head Teacher</input>
			<input type="radio" name="hti_designation" <?php if($schools['SemisUniversal201415']['hti_designation'] == 2) { ?> checked="checked" <?php } ?> value="2" >Incharge</input>
			<input type="radio" name="hti_designation" <?php if($schools['SemisUniversal201415']['hti_designation'] == 3) { ?> checked="checked" <?php } ?> value="3" >Teacher</input>
			<input type="radio" name="hti_designation" <?php if($schools['SemisUniversal201415']['hti_designation'] == 4) { ?> checked="checked" <?php } ?> value="4" >Supervisor</input>
			<!--input type="radio" name="hti_designation" value="4" >Other (Specify)</input><br>
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
			<input class="showifotherdesignation_hti" type="text" name="hti_designation_specify" value="" style="display:none;" ></input--><br>
</td>
</tr>
<tr><td><label>d. Gender</label></td><td>
			<input type="radio" name="hti_gender" <?php if($schools['SemisUniversal201415']['hti_gender'] == 1) { ?> checked="checked" <?php } ?> value="1" >Male</input>
			<input type="radio" name="hti_gender" <?php if($schools['SemisUniversal201415']['hti_gender'] == 2) { ?> checked="checked" <?php } ?> value="2" >Female</input></td>

<td><label>e. Contact Number (Tele/Mob)</label></td><td><input type="text" name="hti_number" maxlength="11" value="<?php echo $schools['SemisUniversal201415']['hti_number']; ?>" ></input></td></tr>
<tr><td><label>f. Email</label></td><td colspan=3><input type="text" name="hti_email" value="<?php echo $schools['SemisUniversal201415']['hti_email']; ?>" ></input></td>
</tr>
<tr><td><label>Q3. (a) Status Condition</label></td>
<td colspan=3>
			<input type="radio" required name="dsi_status_condition" <?php if($schools['SemisUniversal201415']['dsi_status_condition'] == 1) { ?> checked="checked" <?php } ?> value="1" >Viable</input>
			<input type="radio" required name="dsi_status_condition" <?php if($schools['SemisUniversal201415']['dsi_status_condition'] == 2) { ?> checked="checked" <?php } ?> value="2" >Non Viable</input>
</td>
</tr>
<tr><td><label>Q3. (b) School Status</label></td>
<td colspan=3>
			<input type="radio" required name="dsi_status" <?php if($schools['SemisUniversal201415']['dsi_status'] == 1) { ?> checked="checked" <?php } ?> value="1" >Functional</input>
			<input type="radio" required name="dsi_status" <?php if($schools['SemisUniversal201415']['dsi_status'] == 2) { ?> checked="checked" <?php } ?> value="2" >Temporary Closed</input>
			<input type="radio" required name="dsi_status" <?php if($schools['SemisUniversal201415']['dsi_status'] == 3) { ?> checked="checked" <?php } ?> value="3" >Permanent Closed</input>
</td>
</tr>
</table>
<br/>
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
<td width="40%">
	<label>Q3. (c) If School is Temporary Closed or Permanently Closed Date of Closure</label>
</td>
<td>			
	<div id="well">
	<div id="datetimepicker3" class="input-append">
		<input class="temporaryclosedreason_dsi calendar" data-format="yyyy-MM-dd" style="display:none;" name="dsi_closure_date" type="text" value="<?php echo $schools['SemisUniversal201415']['dsi_closure_date']; ?>" ></input>
		<span class="add-on">
		  <i data-time-icon="icon-time" data-date-icon="icon-calendar">
		  </i>
		</span>
	</div>
	</div>
</td>
</tr>
<tr style="display:none;" class="temporaryclosedreason_dsi" ><td width="43%">
<label>Q3. (d) If School is permanently or Temporary closed select the reason </label></td>
<td>
			<div id="temporaryclosedreason_dsi" >
			<input type="radio" class="dsi_closure_reason" name="dsi_closure_reason" <?php if($schools['SemisUniversal201415']['dsi_closure_reason'] == 1) { ?> checked="checked" <?php } ?> value="1" >Non Availability of Teacher</input><br>
			<input type="radio" class="dsi_closure_reason" name="dsi_closure_reason" <?php if($schools['SemisUniversal201415']['dsi_closure_reason'] == 2) { ?> checked="checked" <?php } ?> value="2" >No Population / No Enrollment</input><br>
			<input type="radio" class="dsi_closure_reason" name="dsi_closure_reason" <?php if($schools['SemisUniversal201415']['dsi_closure_reason'] == 3) { ?> checked="checked" <?php } ?> value="3" >Merged or shifted</input><br>
			<input type="radio" class="dsi_closure_reason" name="dsi_closure_reason" <?php if($schools['SemisUniversal201415']['dsi_closure_reason'] == 4) { ?> checked="checked" <?php } ?> value="4" >School ceases to function long time ago and no record available for this school (not in existence)</input><br>
			<input type="radio" class="dsi_closure_reason" name="dsi_closure_reason" <?php if($schools['SemisUniversal201415']['dsi_closure_reason'] == 5) { ?> checked="checked" <?php } ?> value="5" >School Still inundated</input><br>
			<input type="radio" class="dsi_closure_reason" name="dsi_closure_reason" <?php if($schools['SemisUniversal201415']['dsi_closure_reason'] == 6) { ?> checked="checked" <?php } ?> value="6" >School still being used for IDPs</input><br>
			<input type="radio" class="dsi_closure_reason" name="dsi_closure_reason" <?php if($schools['SemisUniversal201415']['dsi_closure_reason'] == 7) { ?> checked="checked" <?php } ?> value="7" >Due to Law and Order situation</input><br>
			<input type="radio" class="dsi_closure_reason" name="dsi_closure_reason" <?php if($schools['SemisUniversal201415']['dsi_closure_reason'] == 8) { ?> checked="checked" <?php } ?> value="8" >Other (Specify)</input><br>
			</div><br>
			<script>
				<?php if($schools['SemisUniversal201415']['dsi_status'] == 2 || $schools['SemisUniversal201415']['dsi_status'] == 3) { ?> 
					$('.temporaryclosedreason_dsi').attr('style','display:block;');
				<?php } ?>
				$('input[name=dsi_closure_reason]').on('keyup keypress blur change', function() {
					var dsi_closure_reason = $('input[name=dsi_closure_reason]:checked').val();
					if(dsi_closure_reason == '8')
					{
						$('.showifotherdsi_closure_reason').val('');
						$('.showifotherdsi_closure_reason').attr('style','display:block;');
					}else
					{
						$('.showifotherdsi_closure_reason').val('');
						$('.showifotherdsi_closure_reason').attr('style','display:none;');
					}
				});
			</script>
			<input class="showifotherdsi_closure_reason" type="text" name="dsi_closure_reason_specify" value="<?php echo $schools['SemisUniversal201415']['dsi_closure_reason_specify']; ?>" style="display:none;" ></input><br>
</td>
</tr>
</table>
<br/>
</div>
<script>
		<?php if($schools['SemisUniversal201415']['dsi_closure_reason'] == 8) { ?> 		
			$('.showifotherdsi_closure_reason').val('');
			$('.showifotherdsi_closure_reason').attr('style','display:block;');
		<?php } ?>
$('#district_code').on('change', function() {
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
							var html = '';
						    $('#tehsil').show(2000);
							$('#tehsil_code').on('change', function() {
								var tehsil_id = $('#tehsil_code').val();
									if(tehsil_id == "0")
										{
											$('#unioncouncil').empty();
										}
									else
										{
											alert(html);
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
<label>Q4. Location</label></td>
<td>
			<input type="radio" required name="dsi_location" <?php if($schools['SemisUniversal201415']['dsi_location'] == 1) { ?> checked="checked" <?php } ?> value="1" >Urban</input>
			<input type="radio" required name="dsi_location" <?php if($schools['SemisUniversal201415']['dsi_location'] == 2) { ?> checked="checked" <?php } ?> value="2" >Rural</input>
</td>
</tr>
<tr><td>
<label>Q5. Level</label></td>
<td>
			<input type="radio" required name="dsi_level" <?php if($schools['SemisUniversal201415']['dsi_level'] == 1) { ?> checked="checked" <?php } ?> value="1" >Primary</input>
			<input type="radio" required name="dsi_level" <?php if($schools['SemisUniversal201415']['dsi_level'] == 2) { ?> checked="checked" <?php } ?> value="2" >Middle</input>
			<input type="radio" required name="dsi_level" <?php if($schools['SemisUniversal201415']['dsi_level'] == 3) { ?> checked="checked" <?php } ?> value="3" >Elementary</input>
			<input type="radio" required name="dsi_level" <?php if($schools['SemisUniversal201415']['dsi_level'] == 4) { ?> checked="checked" <?php } ?> value="4" >Secondary</input>
			<input type="radio" required name="dsi_level" <?php if($schools['SemisUniversal201415']['dsi_level'] == 5) { ?> checked="checked" <?php } ?> value="5" >Higher Secondary</input>
</td>
</tr>
<tr><td><label>Q6. Does this school have approved Scheduled New Expenditure (SNE)</label></td>
<td>
			<input type="radio" required name="dsi_sch_sne" <?php if($schools['SemisUniversal201415']['dsi_sch_sne'] == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input>
			<input type="radio" required name="dsi_sch_sne" <?php if($schools['SemisUniversal201415']['dsi_sch_sne'] == 2) { ?> checked="checked" <?php } ?> value="2" >No</input></td></tr>
</table>
<br/>
<script>
$('input[name=dsi_sch_sne]').on('keyup keypress blur change', function() {
    var dsi_sch_sne = $('input[name=dsi_sch_sne]:checked').val();
	
	if(dsi_sch_sne == '1')
	{
		$('.dsi_sne_available_number').val('');
		$('.sne_available_display').attr('style','display:block;');
	}else
	{
		$('.dsi_sne_available_number').val('');
		$('.sne_available_display').attr('style','display:none;');
	}
});

</script>
<table class="CSSTableGenerator">
		<tr class="sne_available_display" style="display:none;" ><td style="width:25%;" ><label >Number of Sanctioned posts</label></td><td colspan="3"><input type="number" class="nonnegative number maxnine dsi_sne_available_number" name="dsi_sne_available_number" value="<?php echo $schools['SemisUniversal201415']['dsi_sne_available_number']; ?>" ></input><br></td></tr>
</table>
<table class="CSSTableGenerator">			
		<tr><td width="25%"><label>Q7. Administration</label></td>
			<td colspan="3">			
			<input type="radio" required name="dsi_sch_admin" <?php if($schools['SemisUniversal201415']['dsi_sch_admin'] == 1) { ?> checked="checked" <?php } ?> value="1" >ADO Male</input>
			<input type="radio" required name="dsi_sch_admin" <?php if($schools['SemisUniversal201415']['dsi_sch_admin'] == 2) { ?> checked="checked" <?php } ?> value="2" >ADO Female</input>
			<input type="radio" required name="dsi_sch_admin" <?php if($schools['SemisUniversal201415']['dsi_sch_admin'] == 3) { ?> checked="checked" <?php } ?> value="3" >DO Elementary</input>
			<input type="radio" required name="dsi_sch_admin" <?php if($schools['SemisUniversal201415']['dsi_sch_admin'] == 4) { ?> checked="checked" <?php } ?> value="4" >DO Local Bodies</input>
			<input type="radio" required name="dsi_sch_admin" <?php if($schools['SemisUniversal201415']['dsi_sch_admin'] == 5) { ?> checked="checked" <?php } ?> value="5" >DO Secondary</input>
			</td>
		</tr>
		<tr>
			<td><label>Q8. Gender</label></td>
			<td colspan="3">			
				<input type="radio" required name="dsi_sch_gender" <?php if($schools['SemisUniversal201415']['dsi_sch_gender'] == 1) { ?> checked="checked" <?php } ?> value="1" >Boys</input>
				<input type="radio" required name="dsi_sch_gender" <?php if($schools['SemisUniversal201415']['dsi_sch_gender'] == 2) { ?> checked="checked" <?php } ?> value="2" >Girls</input>
				<input type="radio" required name="dsi_sch_gender" <?php if($schools['SemisUniversal201415']['dsi_sch_gender'] == 3) { ?> checked="checked" <?php } ?> value="3" >Mixed School</input>
			</td>
		</tr>
<tr><td><label>Q9. Medium [Multiple Ticks Allowed] and Medium Wise Enrollment as on reference date 31/10/2014</label></td>
<?php $pieces = explode(",", $schools['SemisUniversal201415']['dsi_sch_medium']); ?>
<td colspan="3">			
			<input class="dsi_sch_medium" type="Checkbox"  name="dsi_sch_medium0" <?php foreach($pieces as $piece) { if($piece == 1) { ?> checked="checked" <?php } } ?> value="1" >Urdu Medium</input>
			<input class="dsi_sch_medium" type="Checkbox"  name="dsi_sch_medium1" <?php foreach($pieces as $piece) { if($piece == 2) { ?> checked="checked" <?php } } ?> value="2" >Sindhi Medium</input>
			<input class="dsi_sch_medium" type="Checkbox"  name="dsi_sch_medium2" <?php foreach($pieces as $piece) { if($piece == 3) { ?> checked="checked" <?php } } ?> value="3" >English Medium</input>
</td>
</tr>
<script>
<?php if($schools['SemisUniversal201415']['dsi_sch_sne'] == 1) { ?> 
		$('.sne_available_display').attr('style','display:block;');
<?php } ?>
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
				$('.urdumediumenrollment_display').attr('style','visibility: visible;');
			}
			if(dsi_sch_medium == '2')
			{
				$('.sindhimediumenrollment_display').attr('style','visibility: visible;');
			}
			if(dsi_sch_medium == '3')
			{
				$('.englishmediumenrollment_display').attr('style','visibility: visible;');
			}
	});
});

</script>
<tr class="urdumediumenrollment_display" <?php foreach($pieces as $piece) { if($piece == 1) {  }else{ ?> style="display:none;visibility: hidden;" <?php } } ?>  ><td width="25%"><label>Urdu Medium Enrollment</label></td><td colspan=3><input type="text" class="dsi_enrollment_urdu nonnegative number" name="dsi_enrollment_urdu" value="<?php echo $schools['SemisUniversal201415']['dsi_enrollment_urdu']; ?>" ></input><br></td></tr>
<tr class="sindhimediumenrollment_display" <?php foreach($pieces as $piece) { if($piece == 2) {  }else{ ?> style="display:none;visibility: hidden;" <?php } } ?> ><td width="25%"><label>Sindhi Medium Enrollment</label></td><td colspan=3><input type="text" class="dsi_enrollment_sindhi nonnegative number" name="dsi_enrollment_sindhi" value="<?php echo $schools['SemisUniversal201415']['dsi_enrollment_sindhi']; ?>" ></input><br></td></tr>
<tr class="englishmediumenrollment_display" <?php foreach($pieces as $piece) { if($piece == 3) {  }else{ ?> style="display:none;visibility: hidden;" <?php } } ?> ><td width="25%"><label>English Medium Enrollment</label></td><td colspan=3><input type="text" class="dsi_enrollment_english nonnegative number" name="dsi_enrollment_english" value="<?php echo $schools['SemisUniversal201415']['dsi_enrollment_english']; ?>" ></input><br></td></tr>

<tr><td><label>Q10. Shift</label></td>
<td colspan=3>
			<input type="radio" name="dsi_shift" <?php if($schools['SemisUniversal201415']['dsi_shift'] == 1) { ?> checked="checked" <?php } ?> value="1" >Morning</input>
			<input type="radio" name="dsi_shift" <?php if($schools['SemisUniversal201415']['dsi_shift'] == 2) { ?> checked="checked" <?php } ?> value="2" >Afternoon</input>
			<input type="radio" name="dsi_shift" <?php if($schools['SemisUniversal201415']['dsi_shift'] == 3) { ?> checked="checked" <?php } ?> value="3" >Both Shifts</input>
</td>
</tr>
<tr>
<td>
	<label>Q11. Is this a branch School ?</label>
</td>
<td colspan=3>
			<input type="radio" name="dsi_branch_school" <?php if($schools['SemisUniversal201415']['dsi_branch_school'] == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input>
			<input type="radio" name="dsi_branch_school" <?php if($schools['SemisUniversal201415']['dsi_branch_school'] == 2) { ?> checked="checked" <?php } ?> value="2" >No</input>
</td>
</tr>
<script>
			<?php foreach($pieces as $piece) { if($piece == 1) { ?> 
				$('.urdumediumenrollment_display').attr('style','visibility: visible;'); 
			<?php } } ?>
			<?php foreach($pieces as $piece) { if($piece == 2) { ?> 
				$('.sindhimediumenrollment_display').attr('style','visibility: visible;');
			<?php } } ?>
			<?php foreach($pieces as $piece) { if($piece == 3) { ?> 
				$('.englishmediumenrollment_display').attr('style','visibility: visible;');
			<?php } } ?>
			
<?php foreach($pieces as $piece) { if($piece == 1) {  ?> 
		$('.dsi_sne_available_number').val('');
		$('.sne_available_display').attr('style','display:block;');	
<?php } } ?>

$('input[name=dsi_branch_school]').on('keyup keypress blur change', function() {
    var dsi_branch_school = $('input[name=dsi_branch_school]:checked').val();
	<?php if($schools['SemisUniversal201415']['dsi_branch_school'] == 1) { ?> 
		$('.dsi_main_school_semis_code').val('');
		$('.branch_school_display').attr('style','display:block;');
	<?php } ?>
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
<br/>
<table class="CSSTableGenerator">
		<tr class="branch_school_display nonnegative number maxnine" style="display:none;" ><td style="width:14%;" ><label >a. SEMIS Code of Main School</label></td><td style="width:13%;" ><input type="number" class="nonnegative number maxnine dsi_main_school_semis_code" name="dsi_main_school_semis_code" value="<?php echo $schools['SemisUniversal201415']['dsi_main_school_semis_code']; ?>" ></input><br></td></tr>
		<tr class="branch_school_display" style="display:none;" ><td style="width:14%;" ><label>b. Name of Main School</label></td><td style="width:13%;" ><input type="text" class="dsi_main_school_semis_code" name="dsi_main_school_name" value="<?php echo $schools['SemisUniversal201415']['dsi_main_school_name']; ?>" ></input><br></td></tr>
</table>
<script>
<?php if($schools['SemisUniversal201415']['dsi_branch_school'] == 1) { ?> 
		$('.dsi_main_school_semis_code').val('');
		$('.branch_school_display').attr('style','display:block;');
<?php }else{ ?>
		$('.dsi_main_school_semis_code').val('');
		$('.branch_school_display').attr('style','display:none;');
<?php } ?>
</script>
<table class="CSSTableGenerator" >
<!--tr><td><label>Q12. Year of Establishment</label></td>
	<td>
		<div class="well">
			<div id="datetimepicker4" class="input-append">
				<input  disabled="disabled" data-format="yyyy" name="dsi_year_establishment" type="text"></input>
				<span class="add-on">
				  <i data-time-icon="icon-time" data-date-icon="icon-calendar">
				  </i>
				</span>
			</div>
		</div>
<br></td>
</tr>
<tr-->
<td colspan=4 >
					<h6><b>Q12. School Building</b></h6>
</td>
</tr>

<tr><td width="25%"><label>(a) Ownership</label></td>
			<td colspan=3>
				<input type="radio" required name="sbi_ownership" <?php if($schools['SemisUniversal201415']['sbi_ownership'] == 1) { ?> checked="checked" <?php } ?> value="1" >Government Building</input>
				<input type="radio" required name="sbi_ownership" <?php if($schools['SemisUniversal201415']['sbi_ownership'] == 2) { ?> checked="checked" <?php } ?> value="2" >Shared with other Government School Building</input>
				<input type="radio" required name="sbi_ownership" <?php if($schools['SemisUniversal201415']['sbi_ownership'] == 3) { ?> checked="checked" <?php } ?> value="3" >Rented</input>
				<input type="radio" required name="sbi_ownership" <?php if($schools['SemisUniversal201415']['sbi_ownership'] == 4) { ?> checked="checked" <?php } ?> value="4" >Other Building</input>
				<input type="radio" required name="sbi_ownership" <?php if($schools['SemisUniversal201415']['sbi_ownership'] == 5) { ?> checked="checked" <?php } ?> value="5" >No Building</input>
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
	$('#sbi_school_building_other_then_learning').val('');
	
	if(sbi_ownership == '5')
	{
		$('.sbi_nobuildingdisplay').attr('style','visibility:visible;');
		$('.sbi_schoolbuildingdisplay').attr('style','display:none;');
		$('.sbi_otherbuildingdisplay').attr('style','display:none;');
	}else
	{	
		$('.sbi_schoolbuildingdisplay').attr('style','visibility:visible;');
		$('.sbi_nobuildingdisplay').attr('style','display:none;');
		$('.sbi_otherschoolbuildingdisplay').attr('style','display:none;');
		$('.sbi_otherbuildingdisplay').attr('style','display:none;');
	}
	if(sbi_ownership == '2')
	{
		$('.sbi_otherschoolbuildingdisplay').attr('style','visibility:visible;');
	}
	if(sbi_ownership == '4')
	{
		$('.sbi_otherbuildingdisplay').attr('style','visibility:visible;');
	}
});
</script>
</table>
<br/>
<table class="CSSTableGenerator">
<tr style="display:none;" class="sbi_nobuildingdisplay" ><td width="50%"><label>(a) If No Building then School Placed</label></td>
			<td colspan="3">
				<input type="radio" <?php if($schools['SemisUniversal201415']['sbi_no_building_sch_placed'] == 1) { ?> checked="checked" <?php } ?> name="sbi_no_building_sch_placed" value="1" >Under Tree</input>
				<input type="radio" <?php if($schools['SemisUniversal201415']['sbi_no_building_sch_placed'] == 2) { ?> checked="checked" <?php } ?> name="sbi_no_building_sch_placed" value="2" >Under Chapra</input>
				<input type="radio" <?php if($schools['SemisUniversal201415']['sbi_no_building_sch_placed'] == 3) { ?> checked="checked" <?php } ?> name="sbi_no_building_sch_placed" value="3" >Hut</input>
			</td>
</tr>
<tr style="display:none;" class="sbi_otherschoolbuildingdisplay" >
<td width="25%">
	<label>(a) If Other Government School Building (shared) write SEMIS Code of school that owns building</label>
</td>
			<td colspan=3>
				<input type="text" class="nonnegative number maxnine" id="sbi_other_school_building_semis" name="sbi_other_school_building_semis" value="<?php echo $schools['SemisUniversal201415']['sbi_other_school_building_semis']; ?>" ></input>
			</td>
</tr>
<tr style="display:none;" class="sbi_otherbuildingdisplay" >
<td width="50%">
	<label>(a) If Other Building (specify)</label>
</td>
			<td colspan=3>
				<input type="text" class="nonnegative number maxnine" id="sbi_other_building_specify" name="sbi_other_building_specify" value="<?php echo $schools['SemisUniversal201415']['sbi_other_building_specify']; ?>" ></input>
			</td>
</tr>
</table>
<br/>
<table class="CSSTableGenerator">
<tr style="display:none;" class="sbi_schoolbuildingdisplay" ><td colspan=4><label>(b) option 1,2,3 or 4 selected then fill following details</label></td></tr>
<tr style="display:none;" class="sbi_schoolbuildingdisplay" ><td width="25%"><label>(b) last Construction Year</label></td>
	<td colspan=3>
		<div class="">
			<div id="datetimepicker5" class="input-append">
				<input data-format="yyyy" type="text" id="sbi_school_building_year_construction" name="sbi_school_building_year_construction" value="<?php echo $schools['SemisUniversal201415']['sbi_school_building_year_construction']; ?>" ></input>
				<span class="add-on">
				  <i data-time-icon="icon-time" data-date-icon="icon-calendar">
				  </i>
				</span>
			</div>
		</div>
	</td>
</tr>
<tr style="visibility:hidden;" class="sbi_schoolbuildingdisplay" ><td width="25%"><label>(c) Type of Building</label></td>
			<td width="25%">
				<input type="radio" <?php if($schools['SemisUniversal201415']['sbi_school_building_construction_type'] == 1) { ?> checked="checked" <?php } ?> name="sbi_school_building_construction_type" value="1" >Pakka/RCC/TierGuarder</input>
				<input type="radio" <?php if($schools['SemisUniversal201415']['sbi_school_building_construction_type'] == 2) { ?> checked="checked" <?php } ?> name="sbi_school_building_construction_type" value="2" >Katcha</input>
				<input type="radio" <?php if($schools['SemisUniversal201415']['sbi_school_building_construction_type'] == 3) { ?> checked="checked" <?php } ?> name="sbi_school_building_construction_type" value="3" >Mixed</input>
			</td>

<td width="25%"><label>(d) Condition of the Building</label></td>
			<td width="25%">
				<input type="radio" <?php if($schools['SemisUniversal201415']['sbi_school_building_condition'] == 1) { ?> checked="checked" <?php } ?> name="sbi_school_building_condition" value="1" >Satisfactory</input>
				<input type="radio" <?php if($schools['SemisUniversal201415']['sbi_school_building_condition'] == 2) { ?> checked="checked" <?php } ?> name="sbi_school_building_condition" value="2" >Needs Repair</input><br/>
				<input type="radio" <?php if($schools['SemisUniversal201415']['sbi_school_building_condition'] == 3) { ?> checked="checked" <?php } ?> name="sbi_school_building_condition" value="3" >Dangerous</input>
			</td>
</tr>
<tr style="visibility:hidden;" class="sbi_schoolbuildingdisplay" ><td><label>(e) Total Number of Rooms (All Rooms)</label></td><td><input type="number" class="nonnegative number maxthree" id="sbi_school_building_total_rooms" name="sbi_school_building_total_rooms" value="<?php echo $schools['SemisUniversal201415']['sbi_school_building_total_rooms']; ?>" ></input></td>
<td><label>(f) Total Number of Rooms used as Class Rooms</label></td><td><input type="number" class=" nonnegative number maxthree" id="sbi_school_building_class_rooms" name="sbi_school_building_class_rooms" value="<?php echo $schools['SemisUniversal201415']['sbi_school_building_class_rooms']; ?>" ></input></td></tr>
<tr style="visibility:hidden;" class="sbi_schoolbuildingdisplay other_purpose_rooms" ><td><label>(g) Rooms utilized for other then learning / teaching purpose</label></td><td><input type="number" class="nonnegative number maxthree" id="sbi_school_building_other_then_learning" name="sbi_school_building_other_then_learning" value="<?php echo $schools['SemisUniversal201415']['sbi_school_building_other_then_learning']; ?>" ></input></td>
<?php $pieces_room_purpose = explode(",", $schools['SemisUniversal201415']['sbi_purpose_other_then_teaching']); ?>
<td><label>(g) Purpose other then teaching / learning</label></td>
			<td>
				<input type="checkbox" <?php foreach($pieces_room_purpose as $piece) { if($piece == 1) { ?> checked="checked" <?php } } ?> class="sbi_purpose_other_then_teaching" name="sbi_purpose_other_then_teaching0" value="1" >NGO</input> <br/>
				<input type="checkbox" <?php foreach($pieces_room_purpose as $piece) { if($piece == 2) { ?> checked="checked" <?php } } ?> class="sbi_purpose_other_then_teaching" name="sbi_purpose_other_then_teaching1" value="2" >District Administration Office</input> <br/>
				<input type="checkbox" <?php foreach($pieces_room_purpose as $piece) { if($piece == 3) { ?> checked="checked" <?php } } ?> class="sbi_purpose_other_then_teaching" name="sbi_purpose_other_then_teaching2" value="3" >Occupied by Villagers</input> <br/>
				<input type="checkbox" <?php foreach($pieces_room_purpose as $piece) { if($piece == 4) { ?> checked="checked" <?php } } ?> class="sbi_purpose_other_then_teaching" name="sbi_purpose_other_then_teaching3" value="4" >Community Centre</input> <br/>
				<input type="checkbox" <?php foreach($pieces_room_purpose as $piece) { if($piece == 5) { ?> checked="checked" <?php } } ?> class="sbi_purpose_other_then_teaching" name="sbi_purpose_other_then_teaching4" value="5" >Vocational Training Centre</input> <br/>
				<input type="checkbox" <?php foreach($pieces_room_purpose as $piece) { if($piece == 6) { ?> checked="checked" <?php } } ?> class="sbi_purpose_other_then_teaching6" name="sbi_purpose_other_then_teaching5" value="6" >Other</input> <br/>
			</td>
</tr>

<script>
	$('.sbi_schoolbuildingdisplay').on('keyup keypress blur change', function() {
		var class_rooms = $('input[name=sbi_school_building_class_rooms]').val();
		var total_rooms = $('input[name=sbi_school_building_total_rooms]').val();
		
		if(class_rooms == total_rooms)
		{
			$('.other_purpose_rooms').attr('style','display:none;visibility:hidden ;');
		}else
		{
			$('.other_purpose_rooms').attr('style','display: ;visibility: visible;');
		}
	});

	<?php if($schools['SemisUniversal201415']['sbi_ownership'] == 5) { ?> 
		$('.sbi_nobuildingdisplay').attr('style','display:block;visibility:visible;');
		$('.sbi_schoolbuildingdisplay').attr('style','display:none;');
		$('.sbi_otherbuildingdisplay').attr('style','display:none;');
	<?php } else{ ?>
		$('.sbi_schoolbuildingdisplay').attr('style','visibility:visible;');
		$('.sbi_nobuildingdisplay').attr('style','display:none;');
		$('.sbi_otherschoolbuildingdisplay').attr('style','display:none;');
		$('.sbi_otherbuildingdisplay').attr('style','display:none;');
	<?php } 
	if($schools['SemisUniversal201415']['sbi_ownership'] == 2){ ?>
		$('.sbi_otherschoolbuildingdisplay').attr('style','visibility:visible;');
	<?php } 
	if($schools['SemisUniversal201415']['sbi_ownership'] == 4){ ?>
		$('.sbi_otherbuildingdisplay').attr('style','visibility:visible;');
	<?php } ?>
	
				
					$('.sbi_purpose_other_then_teaching6').on('keyup keypress blur change', function() {
						var sbi_purpose_other_then_teaching = parseInt($('input[name=sbi_purpose_other_then_teaching5]:checked').val());
						
						// alert(sbi_purpose_other_then_teaching);
						if(sbi_purpose_other_then_teaching == '6')
						{
							$('.sbi_purpose_other_then_teaching_specify').val('');
							$('.sbi_purpose_other_then_teaching_specify').attr('style','display:;visibility:visible;');
						}else
						{
							$('.sbi_purpose_other_then_teaching_specify').val('');
							$('.sbi_purpose_other_then_teaching_specify').attr('style','display:none;');
						}
					});
		
			var class_rooms = $('input[name=sbi_school_building_class_rooms]').val();
			var total_rooms = $('input[name=sbi_school_building_total_rooms]').val();
			
			if(class_rooms == total_rooms)
			{
				$('.other_purpose_rooms').attr('style','display:none;');
			}else
			{
				$('.other_purpose_rooms').attr('style','display:;');
			}

</script>
			<tr class="sbi_purpose_other_then_teaching_specify" style="display:none;visibility:hidden" >
				<td>Specify Other</td>
				<td colspan="3">
					<input type="text" name="sbi_purpose_other_then_teaching_specify" class="sbi_purpose_other_then_teaching_specify" value="<?php echo $schools['SemisUniversal201415']['sbi_purpose_other_then_teaching_specify']; ?>" ></input>
				</td>
			</tr>
<tr>
	<td colspan=4 >
		<h6><b>Q13. Basic Facilities</b></h6>
	</td>
</tr>
<script>
<?php foreach($pieces_room_purpose as $piece) { if($piece == 6) { ?> 
					$('.sbi_purpose_other_then_teaching_specify').val('');
					$('.sbi_purpose_other_then_teaching_specify').attr('style','display:block;visibility:visible;');		
<?php } } ?>
</script>
<tr><td><label>(a) Condition of Boundary Wall</label></td>
			<td>
				<input type="radio" <?php if($schools['SemisUniversal201415']['sbf_condition_bwall'] == 1) { ?> checked="checked" <?php } ?> name="sbf_condition_bwall" value="1" >Satisfactory</input>
				<input type="radio" <?php if($schools['SemisUniversal201415']['sbf_condition_bwall'] == 2) { ?> checked="checked" <?php } ?> name="sbf_condition_bwall" value="2" >Needs Repair</input><br/>
				<input type="radio" <?php if($schools['SemisUniversal201415']['sbf_condition_bwall'] == 3) { ?> checked="checked" <?php } ?> name="sbf_condition_bwall" value="3" >Dangerous</input>
				<input type="radio" <?php if($schools['SemisUniversal201415']['sbf_condition_bwall'] == 4) { ?> checked="checked" <?php } ?> name="sbf_condition_bwall" value="4" >No Boundary Wall</input>
			</td>

<td><label>(b) Are the Toilets Available</label></td>
			<td>
				<input type="radio" <?php if($schools['SemisUniversal201415']['sbf_toilets'] == 1) { ?> checked="checked" <?php } ?> name="sbf_toilets" value="1" >Yes</input>
				<input type="radio" <?php if($schools['SemisUniversal201415']['sbf_toilets'] == 2) { ?> checked="checked" <?php } ?> name="sbf_toilets" value="2" >No</input>
			</td>
</tr>
<script>
$('input[name=sbf_toilets]').on('keyup keypress blur change', function() {
    var sbf_toilets = $('input[name=sbf_toilets]:checked').val();
	
	if(sbf_toilets == '1')
	{
		$('#sbi_school_toilets_number_func').val('');
		$('.sbf_schooltoiletsdisplay').attr('style','visibility: visible;');
	}else
	{
		$('#sbi_school_toilets_number_func').val('');
		$('.sbf_schooltoiletsdisplay').attr('style','display:none;');
	}
	
});
</script>
<tr style="display:none;" class="sbf_schooltoiletsdisplay" ><td><label>(b) If Washrooms Available Write Number of Functional</label></td>
			<td >
				<input type="number" class="nonnegative number maxthree" id="sbi_school_toilets_number_func" name="sbi_school_toilets_number_func" value="<?php echo $schools['SemisUniversal201415']['sbi_school_toilets_number_func']; ?>" ></input>
			</td>
<td><label>(b) If Washrooms Available Write Number non functional</label></td>
			<td>
				<input type="number" class="nonnegative number maxthree" name="sbi_school_toilets_number_nfunc" value="<?php echo $schools['SemisUniversal201415']['sbi_school_toilets_number_nfunc']; ?>" ></input>
			</td>
</tr>
<script>
	<?php if($schools['SemisUniversal201415']['sbf_toilets'] == 1) { ?> 
			$('#sbi_school_toilets_number_func').val('');
			$('.sbf_schooltoiletsdisplay').attr('style','visibility: visible;');
	<?php } ?>
</script>
<tr><td><label>(c) Is there Drinking Water Available ?</label></td>
			<td colspan=3>
				<input <?php if($schools['SemisUniversal201415']['sbf_water_available'] == 1) { ?> checked="checked" <?php } ?> type="radio" name="sbf_water_available" value="1" >Yes</input>
				<input <?php if($schools['SemisUniversal201415']['sbf_water_available'] == 2) { ?> checked="checked" <?php } ?> type="radio" name="sbf_water_available" value="2" >No</input>
			</td>
</tr>
<script>
$('input[name=sbf_water_available]').on('keyup keypress blur change', function() {
    var sbf_water_available = $('input[name=sbf_water_available]:checked').val();
	
	$('input[name=sbf_water_available_source]').attr('checked', false);
	
	if(sbf_water_available == '1')
	{
		$('.sbf_schooldrinkingdisplay').attr('style','display:;visibility:visible');
	}else
	{
		$('.sbf_schooldrinkingdisplay').attr('style','display:none;visibility:hidden');
	}
	
});
</script>
<?php $pieces2 = explode(",", $schools['SemisUniversal201415']['sbf_water_available_source']); ?>
<tr style="display:none;" class="sbf_schooldrinkingdisplay" ><td><label>(c) If Drinking Water Available then write source ? </label></td>
			<td colspan=3>
				<input type="checkbox" <?php foreach($pieces2 as $piece) { if($piece == 1) { ?> checked="checked" <?php } } ?> name="sbf_water_available_source0" value="1" >Piped Water</input>
				<input type="checkbox" <?php foreach($pieces2 as $piece) { if($piece == 2) { ?> checked="checked" <?php } } ?> name="sbf_water_available_source1" value="2" >Well</input>
				<input type="checkbox" <?php foreach($pieces2 as $piece) { if($piece == 3) { ?> checked="checked" <?php } } ?> name="sbf_water_available_source2" value="3" >Hand Pump</input>
				<input type="checkbox" <?php foreach($pieces2 as $piece) { if($piece == 4) { ?> checked="checked" <?php } } ?> name="sbf_water_available_source3" value="4" >Electric Motor</input>
			</td>
</tr>
<script>
	<?php if($schools['SemisUniversal201415']['sbf_water_available'] == 1) { ?> 
		$('.sbf_schooldrinkingdisplay').attr('style','display:;visibility:visible'); 
	<?php } ?>
</script>
<tr><td><label>(d) Source of Electricity ? </label></td>
			<td colspan=3>
				<input type="radio" <?php if($schools['SemisUniversal201415']['sbf_electricity_source'] == 1) { ?> checked="checked" <?php } ?> name="sbf_electricity_source" value="1" >Electricity Through Meter</input>
				<input type="radio" <?php if($schools['SemisUniversal201415']['sbf_electricity_source'] == 2) { ?> checked="checked" <?php } ?> name="sbf_electricity_source" value="2" >Electricity Without Meter</input>
				<input type="radio" <?php if($schools['SemisUniversal201415']['sbf_electricity_source'] == 3) { ?> checked="checked" <?php } ?> name="sbf_electricity_source" value="3" >No Electricity</input>
			</td>
</tr>
<tr><td colspan=4 >
					<h6><b>(a) Total Number of Working Teachers </b></h6>
</td></tr>

<tr><td><label>Government Male Teachers</label></td><td><input class="teachers_number nonnegative number maxthree" id="sti_govt_teacher_number_male" type="number" name="sti_govt_teacher_number_male" value="<?php echo $schools['SemisUniversal201415']['sti_govt_teacher_number_male']; ?>" ></input></td>
<td><label>Non Government Male Teachers</label></td><td><input class="teachers_number nonnegative number maxthree" id="sti_non_govt_teacher_number_male" type="number" name="sti_non_govt_teacher_number_male" value="<?php echo $schools['SemisUniversal201415']['sti_non_govt_teacher_number_male']; ?>" ></input></td></tr>
<tr><td><label>Government Female Teachers</label></td><td><input class="teachers_number nonnegative number maxthree" id="sti_govt_teacher_number_female" type="number" name="sti_govt_teacher_number_female" value="<?php echo $schools['SemisUniversal201415']['sti_govt_teacher_number_female']; ?>" ></input></td>
<td><label>Non Government Female Teachers</label></td><td><input class="teachers_number nonnegative number maxthree" id="sti_non_govt_teacher_number_female" type="number" name="sti_non_govt_teacher_number_female" value="<?php echo $schools['SemisUniversal201415']['sti_non_govt_teacher_number_female']; ?>" ></input></td></tr>
<tr><td><label>Total Teachers</label></td><td colspan=3><input class="total_teachers" type="number" readonly name="sti_teacher_mf_total_2" value="<?php echo $schools['SemisUniversal201415']['sti_teacher_mf_total']; ?>" ></input><input class="total_teachers" style="display:none;" type="number" name="sti_teacher_mf_total" value="<?php echo $schools['SemisUniversal201415']['sti_teacher_mf_total']; ?>" ></input></td></tr>

<tr><td colspan=4 >
					<h6><b>Q14. (b) Total Number of Non Teaching Staff </b></h6>
</td></tr>
<tr><td><label>Non Teaching Staff Male</label></td><td><input type="number" class="non_teacher_number nonnegative number maxthree" id="sti_govt_non_teaching_number_male" name="sti_govt_non_teaching_number_male" value="<?php echo $schools['SemisUniversal201415']['sti_govt_non_teaching_number_male']; ?>" ></input></td>
<td><label>Non Teaching Staff Female</label></td><td><input type="number" class="non_teacher_number nonnegative number maxthree" id="sti_govt_non_teaching_number_female" name="sti_govt_non_teaching_number_female" value="<?php echo $schools['SemisUniversal201415']['sti_govt_non_teaching_number_female']; ?>" ></input></td></tr>
<td><label>Total Non Teaching Staff</label></td><td><input class="total_non_teachers" readonly type="number" name="sti_govt_non_teaching_mf_total" value="<?php echo $schools['SemisUniversal201415']['sti_govt_non_teaching_mf_total']; ?>" ></input></td>

<td><label>Signature of Data Provider / Enumerator</label></td><td>
				<input class="" type="radio" <?php if($schools['SemisUniversal201415']['ht_signature_page_1'] == 1) { ?> checked="checked" <?php } ?> name="ht_signature_page_1" value="1" >Yes</input>
				<input class="" type="radio" <?php if($schools['SemisUniversal201415']['ht_signature_page_1'] == 2) { ?> checked="checked" <?php } ?> name="ht_signature_page_1" value="2" >No</input>
			</td></tr>
</table>
<br/>
</div>
<div id="page2" class="page2" style="display:none;" >
<table border="0" cellpadding="0" cellspacing="0"  class="shrink CSSTableGenerator">
	<tr><td colspan="11" ><h6><b>Q15. Enrolment [write the enrolment figure as on reference date 31st October, 2014]</b></h6></td></tr>
	<tr>
		<td >Source of Enrolment</td>
		<td colspan="10" >
			<input type="radio" <?php if($schools['SemisUniversal201415']['stuenr_source'] == 1) { ?> checked="checked" <?php } ?> name="stuenr_source" value="1" >1. General Register</input>
			<input type="radio" <?php if($schools['SemisUniversal201415']['stuenr_source'] == 2) { ?> checked="checked" <?php } ?> name="stuenr_source" value="2" >2. Attendance Register</input>
			<input type="radio" <?php if($schools['SemisUniversal201415']['stuenr_source'] == 3) { ?> checked="checked" <?php } ?> name="stuenr_source" value="3" >3. Other Record Available at School (Specify) </input>
			<input type="radio" <?php if($schools['SemisUniversal201415']['stuenr_source'] == 4) { ?> checked="checked" <?php } ?> name="stuenr_source" value="4" >4. No Formal Record</input>
		</td>
	</tr>
	<script>
		$('input[name=stuenr_source]').on('keyup keypress blur change', function() {
			var stuenr_source = parseInt($('input[name=stuenr_source]:checked').val());
			<?php if($schools['SemisUniversal201415']['stuenr_source'] == 3) { ?> 
				$('.stuenr_source_specify').val('');
				$('.stuenr_source_specify').attr('style','display:block;');
			<?php } ?>
			
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
	</table>
	<table border="0" cellpadding="0" cellspacing="0"  class="shrink CSSTableGenerator">
	<tr class="stuenr_source_specify" style="display:none;" >
		<td colspan="6" >Specify Other Record Available at School</td>
		<td colspan="5" style="width:200px;" >
			<input type="text" style="width:200px;" name="stuenr_source_specify" value="<?php echo $schools['SemisUniversal201415']['stuenr_source_specify']; ?>" ></input>
		</td>
	</tr>
	</table>
	<table border="0" cellpadding="0" cellspacing="0"  class="shrink CSSTableGenerator">
	<tr><td colspan="11" ><h6><b>Q15. (b) Elementary Enrollment</b></h6></td></tr>
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
		<td><input class="eleboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_classkatchi_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_ele_classkatchi_b']; ?>" ></input></td>
		<td><input class="eleboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class1_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_ele_class1_b']; ?>" ></input></td>
		<td><input class="eleboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class2_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_ele_class2_b']; ?>" ></input></td>
		<td><input class="eleboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class3_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_ele_class3_b']; ?>" ></input></td>
		<td><input class="eleboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class4_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_ele_class4_b']; ?>" ></input></td>
		<td><input class="eleboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class5_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_ele_class5_b']; ?>" ></input></td>
		<td><input class="eleboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class6_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_ele_class6_b']; ?>" ></input></td>
		<td><input class="eleboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class7_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_ele_class7_b']; ?>" ></input></td>
		<td><input class="eleboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class8_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_ele_class8_b']; ?>" ></input></td>
		<td><input class="stuenr_ele_total_b" readonly type="number" name="stuenr_ele_total_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_ele_total_b']; ?>" ></input></td>
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
		<td><input class="elegirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_classkatchi_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_ele_classkatchi_g']; ?>" ></input></td>
		<td><input class="elegirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class1_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_ele_class1_g']; ?>" ></input></td>
		<td><input class="elegirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class2_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_ele_class2_g']; ?>" ></input></td>
		<td><input class="elegirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class3_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_ele_class3_g']; ?>" ></input></td>
		<td><input class="elegirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class4_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_ele_class4_g']; ?>" ></input></td>
		<td><input class="elegirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class5_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_ele_class5_g']; ?>" ></input></td>
		<td><input class="elegirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class6_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_ele_class6_g']; ?>" ></input></td>
		<td><input class="elegirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class7_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_ele_class7_g']; ?>" ></input></td>
		<td><input class="elegirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_ele_class8_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_ele_class8_g']; ?>" ></input></td>
		<td><input class="stuenr_ele_total_g" readonly type="number" name="stuenr_ele_total_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_ele_total_g']; ?>" ></input></td>
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
	<tr class="matchtotalenrollmentclass" ><td colspan="12" ><h6><b>Q15. (c) Secondary Enrolment</b></h6></td></tr>
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
		<td><input class="secboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class9_arts_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_sec_class9_arts_b']; ?>" ></input></td>
		<td><input class="secboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class9_comp_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_sec_class9_comp_b']; ?>" ></input></td>
		<td><input class="secboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class9_bio_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_sec_class9_bio_b']; ?>" ></input></td>
		<td><input class="secboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class9_comm_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_sec_class9_comm_b']; ?>" ></input></td>
		<td><input class="secboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class9_other_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_sec_class9_other_b']; ?>" ></input></td>
		<td><input class="secboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class10_arts_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_sec_class10_arts_b']; ?>" ></input></td>
		<td><input class="secboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class10_comp_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_sec_class10_comp_b']; ?>" ></input></td>
		<td><input class="secboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class10_bio_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_sec_class10_bio_b']; ?>" ></input></td>
		<td><input class="secboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class10_comm_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_sec_class10_comm_b']; ?>" ></input></td>
		<td><input class="secboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class10_other_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_sec_class10_other_b']; ?>" ></input></td>
		<td><input type="number" readonly class="stuenr_sec_b_total" name="stuenr_sec_b_total" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_sec_b_total']; ?>" ></input></td>
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
		<td><input class="secgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class9_arts_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_sec_class9_arts_g']; ?>" ></input></td>
		<td><input class="secgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class9_comp_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_sec_class9_comp_g']; ?>" ></input></td>
		<td><input class="secgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class9_bio_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_sec_class9_bio_g']; ?>" ></input></td>
		<td><input class="secgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class9_comm_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_sec_class9_comm_g']; ?>" ></input></td>
		<td><input class="secgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class9_other_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_sec_class9_other_g']; ?>" ></input></td>
		<td><input class="secgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class10_arts_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_sec_class10_arts_g']; ?>" ></input></td>
		<td><input class="secgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class10_comp_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_sec_class10_comp_g']; ?>" ></input></td>
		<td><input class="secgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class10_bio_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_sec_class10_bio_g']; ?>" ></input></td>
		<td><input class="secgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class10_comm_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_sec_class10_comm_g']; ?>" ></input></td>
		<td><input class="secgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_sec_class10_other_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_sec_class10_other_g']; ?>" ></input></td>
		<td><input readonly type="number" class="stuenr_sec_g_total" name="stuenr_sec_f_total" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_sec_f_total']; ?>" ></input></td>
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
	<tr class="matchtotalenrollmentclass" ><td colspan="14" ><h6><b>Q15. (d) Higher Secondary Enrollment</b></h6></td></tr>
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
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_arts_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class11_arts_b']; ?>" ></input></td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_comp_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class11_comp_b']; ?>" ></input></td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_premed_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class11_premed_b']; ?>" ></input></td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_preeng_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class11_preeng_b']; ?>" ></input></td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_comm_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class11_comm_b']; ?>" ></input></td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_other_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class11_other_b']; ?>" ></input></td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_arts_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class12_arts_b']; ?>" ></input></td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_comp_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class12_comp_b']; ?>" ></input></td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_premed_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class12_premed_b']; ?>" ></input></td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_preeng_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class12_preeng_b']; ?>" ></input></td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_comm_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class12_comm_b']; ?>" ></input></td>
		<td><input class="hsecboystotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_other_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class12_other_b']; ?>" ></input></td>
		<td><input type="number" readonly class="stuenr_hsec_m_total" name="stuenr_hsec_m_total" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_m_total']; ?>" ></input></td>
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
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_arts_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class11_arts_g']; ?>" ></input></td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_comp_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class11_comp_g']; ?>" ></input></td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_premed_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class11_premed_g']; ?>" ></input></td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_preeng_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class11_preeng_g']; ?>" ></input></td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_comm_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class11_comm_g']; ?>" ></input></td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class11_other_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class11_other_g']; ?>" ></input></td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_arts_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class12_arts_g']; ?>" ></input></td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_comp_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class12_comp_g']; ?>" ></input></td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_premed_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class12_premed_g']; ?>" ></input></td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_preeng_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class12_preeng_g']; ?>" ></input></td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_comm_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class12_comm_g']; ?>" ></input></td>
		<td><input class="hsecgirlstotalcheckclass nonnegative number maxthree" type="number" name="stuenr_hsec_class12_other_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_class12_other_g']; ?>" ></input></td>
		<td><input type="number" readonly class="stuenr_hsec_f_total" name="stuenr_hsec_f_total" value="<?php echo $semisEnrollment['SemisEnrollment201415']['stuenr_hsec_f_total']; ?>" ></input></td>
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
	<tr><td colspan="11" ><h6><b>Q16. Repeaters</b></h6></td></tr>
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
		<td class="sturep_class4_b" ><input class="eleboysreptotalcheckclass nonnegative number maxthree" type="number" name="sturep_class4_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['sturep_class4_b']; ?>" ></input></td>
		<td class="sturep_class5_b" ><input class="eleboysreptotalcheckclass nonnegative number maxthree " type="number" name="sturep_class5_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['sturep_class5_b']; ?>" ></input></td>
		<td class="sturep_class6_b" ><input class="eleboysreptotalcheckclass nonnegative number maxthree " type="number" name="sturep_class6_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['sturep_class6_b']; ?>" ></input></td>
		<td class="sturep_class7_b" ><input class="eleboysreptotalcheckclass nonnegative number maxthree " type="number" name="sturep_class7_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['sturep_class7_b']; ?>" ></input></td>
		<td class="sturep_class8_b" ><input class="eleboysreptotalcheckclass nonnegative number maxthree " type="number" name="sturep_class8_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['sturep_class8_b']; ?>" ></input></td>
		<td class="sturep_class9_b" ><input class="eleboysreptotalcheckclass nonnegative number maxthree " type="number" name="sturep_class9_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['sturep_class9_b']; ?>" ></input></td>
		<td class="sturep_class10_b" ><input class="eleboysreptotalcheckclass nonnegative number maxthree " type="number" name="sturep_class10_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['sturep_class10_b']; ?>" ></input></td>
		<td class="sturep_class11_b" ><input class="eleboysreptotalcheckclass nonnegative number maxthree " type="number" name="sturep_class11_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['sturep_class11_b']; ?>" ></input></td>
		<td class="sturep_class12_b" ><input class="eleboysreptotalcheckclass nonnegative number maxthree " type="number" name="sturep_class12_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['sturep_class12_b']; ?>" ></input></td>
		<td><input type="number" readonly class="sturep_total_b" name="sturep_total_b" value="<?php echo $semisEnrollment['SemisEnrollment201415']['sturep_total_b']; ?>" ></input></td>
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
		<td class="sturep_class4_g" ><input class="elegirlsreptotalcheckclass nonnegative number maxthree" type="number" name="sturep_class4_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['sturep_class4_g']; ?>" ></input></td>
		<td class="sturep_class5_g" ><input class="elegirlsreptotalcheckclass nonnegative number maxthree" type="number" name="sturep_class5_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['sturep_class5_g']; ?>" ></input></td>
		<td class="sturep_class6_g" ><input class="elegirlsreptotalcheckclass nonnegative number maxthree" type="number" name="sturep_class6_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['sturep_class6_g']; ?>" ></input></td>
		<td class="sturep_class7_g" ><input class="elegirlsreptotalcheckclass nonnegative number maxthree" type="number" name="sturep_class7_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['sturep_class7_g']; ?>" ></input></td>
		<td class="sturep_class8_g" ><input class="elegirlsreptotalcheckclass nonnegative number maxthree" type="number" name="sturep_class8_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['sturep_class8_g']; ?>" ></input></td>
		<td class="sturep_class9_g" ><input class="elegirlsreptotalcheckclass nonnegative number maxthree" type="number" name="sturep_class9_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['sturep_class9_g']; ?>" ></input></td>
		<td class="sturep_class10_g" ><input class="elegirlsreptotalcheckclass nonnegative number maxthree" type="number" name="sturep_class10_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['sturep_class10_g']; ?>" ></input></td>
		<td class="sturep_class11_g" ><input class="elegirlsreptotalcheckclass nonnegative number maxthree" type="number" name="sturep_class11_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['sturep_class11_g']; ?>" ></input></td>
		<td class="sturep_class12_g" ><input class="elegirlsreptotalcheckclass nonnegative number maxthree" type="number" name="sturep_class12_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['sturep_class12_g']; ?>" ></input></td>
		<td class="" ><input class="sturep_total_g" readonly type="number" name="sturep_total_g" value="<?php echo $semisEnrollment['SemisEnrollment201415']['sturep_total_g']; ?>" ></input></td>
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
<table border="0" cellpadding="0" cellspacing="0"  class="CSSTableGenerator">
<tr class="sgi_is_school_upgraded" >
	<td colspan=3 >
		<h6><b>Q17. Is this school consolidated ? </b></h6>
	</td>
	<td>
	<input class="sgi_is_sch_consolidated" type="radio" <?php if($schools['SemisUniversal201415']['sgi_is_sch_consolidated'] == 1) { ?> checked="checked" <?php } ?> name="sgi_is_sch_consolidated" value="1" >Yes</input>
	</td>
	<td>
	<input class="sgi_is_sch_consolidated" type="radio" <?php if($schools['SemisUniversal201415']['sgi_is_sch_consolidated'] == 2) { ?> checked="checked" <?php } ?> name="sgi_is_sch_consolidated" value="2" >No</input>
	</td>
</tr>
<tr style="display:none;" class="sgi_consolidated_merged_number" ><td><label>Q17. If yes then write how many schools merged </label></td>
	<td>
		<input type="text" class="sgi_consolidated_merged_number" name="sgi_consolidated_merged_number" value="<?php echo $schools['SemisUniversal201415']['sgi_consolidated_merged_number']; ?>"></input>
	</td>
</tr>
<script>
		<?php if($schools['SemisUniversal201415']['sgi_is_sch_consolidated'] == 1) { ?> 
				$('.sgi_consolidated_merged_number').val('');
				$('.sgi_consolidated_merged_number').attr('style','display:block;');
		<?php  } ?>
		$('.sgi_is_sch_consolidated').on('keyup keypress blur change', function() {
			var sgi_is_sch_consolidated = $('input[name=sgi_is_sch_consolidated]:checked').val();
			
			if(sgi_is_sch_consolidated == '1')
			{
				$('.sgi_consolidated_merged_number').val('');
				$('.sgi_consolidated_merged_number').attr('style','display:block;');				
			}else
			{
				$('.sgi_consolidated_merged_number').attr('style','display:none;');
			}
			
		});
		</script>
</table>
<table border="0" cellpadding="0" cellspacing="0"  class="CSSTableGenerator">
<tr>
	<td colspan=5 >
		<h6><b>Q18. List of Surrounding Government Schools [Schools within same premises or adjacent schools or where distance within 500 Meters] </b></h6>
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
	<td><input type="number" name="asi_sch1_semis_code" class="semis_code nonnegative number maxnine" value="<?php echo $schools['SemisUniversal201415']['asi_sch1_semis_code']; ?>"></input></td>
	<td><input type="text" name="asi_sch1_name" value="<?php echo $schools['SemisUniversal201415']['asi_sch1_name']; ?>"></input></td>
	<td>
		<select name="asi_sch1_type" >
			<option value="0" <?php if($schools['SemisUniversal201415']['asi_sch1_type'] == 0) { ?> selected="selected" <?php } ?> >N/A</option>
			<option value="1" <?php if($schools['SemisUniversal201415']['asi_sch1_type'] == 1) { ?> selected="selected" <?php } ?> >Same Premises</option>
			<option value="2" <?php if($schools['SemisUniversal201415']['asi_sch1_type'] == 2) { ?> selected="selected" <?php } ?> >Adjacent</option>
			<option value="3" <?php if($schools['SemisUniversal201415']['asi_sch1_type'] == 3) { ?> selected="selected" <?php } ?> >Within 500 Meters</option>
		</select>
	</td>
	<td><input type="number" style="width: 55%;" class="nonnegative number maxthree" name="asi_sch1_distance" value="<?php echo $schools['SemisUniversal201415']['asi_sch1_distance']; ?>"></input></td>
</tr>
<tr>
	<td>2</td>
	<td><input type="number" name="asi_sch2_semis_code" class="semis_code nonnegative number maxnine" value="<?php echo $schools['SemisUniversal201415']['asi_sch2_semis_code']; ?>"></input></td>
	<td><input type="text" name="asi_sch2_name" value="<?php echo $schools['SemisUniversal201415']['asi_sch2_name']; ?>"></input></td>
	<td>
		<select name="asi_sch2_type" >
			<option value="0" <?php if($schools['SemisUniversal201415']['asi_sch2_type'] == 0) { ?> selected="selected" <?php } ?> >N/A</option>
			<option value="1" <?php if($schools['SemisUniversal201415']['asi_sch2_type'] == 1) { ?> selected="selected" <?php } ?> >Same Premises</option>
			<option value="2" <?php if($schools['SemisUniversal201415']['asi_sch2_type'] == 2) { ?> selected="selected" <?php } ?> >Adjacent</option>
			<option value="3" <?php if($schools['SemisUniversal201415']['asi_sch2_type'] == 3) { ?> selected="selected" <?php } ?> >Within 500 Meters</option>
		</select>
	</td>
	<td><input type="number"  style="width: 55%;" class="nonnegative number maxthree" name="asi_sch2_distance" value="<?php echo $schools['SemisUniversal201415']['asi_sch2_distance']; ?>"></input></td>
</tr>
<tr>
	<td>3</td>
	<td><input type="number" name="asi_sch3_semis_code" class="semis_code nonnegative number maxnine" value="<?php echo $schools['SemisUniversal201415']['asi_sch3_semis_code']; ?>"></input></td>
	<td><input type="text" name="asi_sch3_name" value="<?php echo $schools['SemisUniversal201415']['asi_sch3_name']; ?>"></input></td>
	<td>
		<select name="asi_sch3_type" >
			<option value="0" <?php if($schools['SemisUniversal201415']['asi_sch3_type'] == 0) { ?> selected="selected" <?php } ?> >N/A</option>
			<option value="1" <?php if($schools['SemisUniversal201415']['asi_sch3_type'] == 1) { ?> selected="selected" <?php } ?> >Same Premises</option>
			<option value="2" <?php if($schools['SemisUniversal201415']['asi_sch3_type'] == 2) { ?> selected="selected" <?php } ?> >Adjacent</option>
			<option value="3" <?php if($schools['SemisUniversal201415']['asi_sch3_type'] == 3) { ?> selected="selected" <?php } ?> >Within 500 Meters</option>
		</select>
	</td>
	<td><input type="number" style="width: 55%;" class="nonnegative number maxthree" name="asi_sch3_distance" value="<?php echo $schools['SemisUniversal201415']['asi_sch3_distance']; ?>"></input></td>
</tr>
<tr>
	<td>4</td>
	<td><input type="number" name="asi_sch4_semis_code" class="semis_code nonnegative number maxnine" value="<?php echo $schools['SemisUniversal201415']['asi_sch4_semis_code']; ?>"></input></td>
	<td><input type="text" name="asi_sch4_name" value="<?php echo $schools['SemisUniversal201415']['asi_sch4_name']; ?>"></input></td>
	<td>
		<select name="asi_sch4_type" >
			<option value="0" <?php if($schools['SemisUniversal201415']['asi_sch4_type'] == 0) { ?> selected="selected" <?php } ?> >N/A</option>
			<option value="1" <?php if($schools['SemisUniversal201415']['asi_sch4_type'] == 1) { ?> selected="selected" <?php } ?> >Same Premises</option>
			<option value="2" <?php if($schools['SemisUniversal201415']['asi_sch4_type'] == 2) { ?> selected="selected" <?php } ?> >Adjacent</option>
			<option value="3" <?php if($schools['SemisUniversal201415']['asi_sch4_type'] == 3) { ?> selected="selected" <?php } ?> >Within 500 Meters</option>
		</select>
	</td>
	<td><input type="number" class="nonnegative number maxthree"  style="width: 55%;" name="asi_sch4_distance" value="<?php echo $schools['SemisUniversal201415']['asi_sch4_distance']; ?>"></input></td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0"  class="CSSTableGenerator">
<tr><td colspan="3"><h6><b>Q19. Total Number of Surrounding PPRS and Private Schools [Schools within same premises or adjacent schools or where distance within 1500 meters]</b></h6></td></tr>
<tr>
	<td>Number of PPRS Schools</td>
	<td>Number of Private Schools</td>
	<td>Total Number of Surrounding Schools</td>
</tr>
<tr>
	<td><input class="teachersnumbersfields nonnegative number maxthree" type="number" value="<?php echo $schools['SemisUniversal201415']['asi_total_pprs_schools']; ?>" name="asi_total_pprs_schools" ></input></td>
	<td><input class="teachersnumbersfields nonnegative number maxthree" type="number" value="<?php echo $schools['SemisUniversal201415']['asi_total_private_schools']; ?>" name="asi_total_private_schools" ></input></td>
	<td><input readonly type="number" class="asi_total_gp_sur_sch" value="<?php echo $schools['SemisUniversal201415']['asi_grand_total_gp_schools']; ?>" name="asi_grand_total_gp_schools" ></input></td>
</tr>
<script>
	var asi_total_pprs_schools = parseInt($('input[name=asi_total_pprs_schools]').val());
	if(!asi_total_pprs_schools) { asi_total_pprs_schools = 0; }
    var asi_total_private_schools = parseInt($('input[name=asi_total_private_schools]').val());
	if(!asi_total_private_schools) { asi_total_private_schools = 0; }
	
	var total = asi_total_pprs_schools+asi_total_private_schools;
	$('.asi_total_gp_sur_sch').val(total);
$('.teachersnumbersfields').on('keyup keypress blur change', function() {
    var asi_total_pprs_schools = parseInt($('input[name=asi_total_pprs_schools]').val());
	if(!asi_total_pprs_schools) { asi_total_pprs_schools = 0; }
    var asi_total_private_schools = parseInt($('input[name=asi_total_private_schools]').val());
	if(!asi_total_private_schools) { asi_total_private_schools = 0; }
	
	var total = asi_total_pprs_schools+asi_total_private_schools;
	$('.asi_total_gp_sur_sch').val(total);
});
</script>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator">
		<tr>
			<td><b>Question</b></td>
			<td><b>Response</b></td>
		</tr>
		<tr>
			<td>Q20. Total School Area in Square Feet</td>
			<td><input type="number" name="sgi_sch_area_covered" class="nonnegative number maxnine" value="<?php echo $schools['SemisUniversal201415']['sgi_sch_area_covered']; ?>" ></input></td>
		</tr>
		<tr>
			<td>Q21. SEMIS Code Displayed on Visible Location</td>
			<td><input type="radio" <?php if($schools['SemisUniversal201415']['sgi_sch_semis_dislayed'] == 1) { ?> checked="checked" <?php } ?> name="sgi_sch_semis_dislayed" value="1" >Yes</input>
			<input type="radio" <?php if($schools['SemisUniversal201415']['sgi_sch_semis_dislayed'] == 2) { ?> checked="checked" <?php } ?> name="sgi_sch_semis_dislayed" value="2" >No</input></td>
		</tr>
		<tr>
			<td>Q22. Did the school receive Textbooks in academic year=? </td>
			<td><input type="radio" <?php if($schools['SemisUniversal201415']['sgi_sch_received_tb_13_14'] == 1) { ?> checked="checked" <?php } ?> name="sgi_sch_received_tb_13_14" value="1" >Yes</input>
			<input type="radio" <?php if($schools['SemisUniversal201415']['sgi_sch_received_tb_13_14'] == 2) { ?> checked="checked" <?php } ?> name="sgi_sch_received_tb_13_14" value="2" >No</input></td>
		</tr>
		<tr>
			<td>Q23. Any Construction Work in the past academic year? </td>
			<td><input type="radio" <?php if($schools['SemisUniversal201415']['sgi_sch_const_work_12_13'] == 1) { ?> checked="checked" <?php } ?> name="sgi_sch_const_work_12_13" value="1" >Yes</input>
			<input type="radio" <?php if($schools['SemisUniversal201415']['sgi_sch_const_work_12_13'] == 2) { ?> checked="checked" <?php } ?> name="sgi_sch_const_work_12_13" value="2" >No</input></td>
		</tr>
		<tr>
			<td>Q24. (a) Did this school receive girls stipends in last academic year?</td>
			<td>
				<input type="radio" <?php if($schools['SemisUniversal201415']['sgi_sch_received_stipend_12_13'] == 1) { ?> checked="checked" <?php } ?> name="sgi_sch_received_stipend_12_13" value="1" >Yes</input>
				<input type="radio" <?php if($schools['SemisUniversal201415']['sgi_sch_received_stipend_12_13'] == 2) { ?> checked="checked" <?php } ?> name="sgi_sch_received_stipend_12_13" value="2" >No</input>
				<input type="radio" <?php if($schools['SemisUniversal201415']['sgi_sch_received_stipend_12_13'] == 3) { ?> checked="checked" <?php } ?> name="sgi_sch_received_stipend_12_13" value="3" >Not Applicable</input>
			</td>
		</tr>
		<script>
		<?php if($schools['SemisUniversal201415']['sgi_sch_received_stipend_12_13'] == 1) { ?> 
				$('.sgi_sch_received_stipend_12_13_number').val('');
				$('.sgi_sch_received_stipenddisplay').attr('style','display:block;');
		<?php } ?>
		$('input[name=sgi_sch_received_stipend_12_13]').on('keyup keypress blur change', function() {
			var sgi_sch_received_stipend_12_13 = $('input[name=sgi_sch_received_stipend_12_13]:checked').val();
			
			if(sgi_sch_received_stipend_12_13 == '1')
			{
				$('.sgi_sch_received_stipend_12_13_number').val('');
				$('.sgi_sch_received_stipenddisplay').attr('style','display:block;');				
			}else
			{
				$('.sgi_sch_received_stipenddisplay').attr('style','display:none;');
			}
		});
		</script>
		<tr style="display:none;" class="sgi_sch_received_stipenddisplay" >
					<td><label>Q24. (b) Total Enrolment</label></td>
					<td>
						<input type="text" name="sgi_sch_enrolment_stipend_12_13_number" value="<?php echo $schools['SemisUniversal201415']['sgi_sch_enrolment_stipend_12_13_number']; ?>" ></input>
					</td>
					<td><label>Q24. (b) Total Eligible </label></td>
					<td>
						<input type="text" name="sgi_sch_eligible_stipend_12_13_number" value="<?php echo $schools['SemisUniversal201415']['sgi_sch_eligible_stipend_12_13_number']; ?>" ></input>
					</td>
					<td><label>Q24. (b) Total Received </label></td>
					<td>
						<input type="text" name="sgi_sch_received_stipend_12_13_number" value="<?php echo $schools['SemisUniversal201415']['sgi_sch_received_stipend_12_13_number']; ?>" ></input>
					</td>
		</tr>
		
		<tr>
		<td>Q25. (a) Has school upgraded to next level in last academic year ?</td>
			<td>
				<input type="radio" class="sgi_is_school_upgraded" name="sgi_is_school_upgraded" <?php if($schools['SemisUniversal201415']['sgi_is_school_upgraded'] == 1) { ?> checked="checked" <?php  } ?> value="1">Yes</input>
				<input type="radio" class="sgi_is_school_upgraded" name="sgi_is_school_upgraded" <?php if($schools['SemisUniversal201415']['sgi_is_school_upgraded'] == 2) { ?> checked="checked" <?php } ?> value="2">No</input>
			</td>
		</tr>
		
		<script>
		<?php if($schools['SemisUniversal201415']['sgi_is_school_upgraded'] == 1) { ?> 
				$('.sgi_sch_upgraded_level').val('');
				$('.sgi_sch_upgraded_level').attr('style','display:block;');
		<?php  } ?>
		$('.sgi_is_school_upgraded').on('keyup keypress blur change', function() {
			var sgi_is_school_upgraded = $('input[name=sgi_is_school_upgraded]:checked').val();
			
			if(sgi_is_school_upgraded == '1')
			{
				$('.sgi_sch_upgraded_level').val('');
				$('.sgi_sch_upgraded_level').attr('style','display:block;');				
			}else
			{
				$('.sgi_sch_upgraded_level').attr('style','display:none;');
			}
			
		});
		</script>
		<tr style="display:none;" class="sgi_sch_upgraded_level" ><td><label>Q24. (b) Write the upgraded level.</label></td>
					<td>
						<input type="text" class="sgi_sch_upgraded_level" name="sgi_sch_upgraded_level" value="<?php echo $schools['SemisUniversal201415']['sgi_sch_upgraded_level']; ?>" ></input>
					</td>
		</tr>
		
		<td>Q26. Is this school adopted ?</td>
			<td>
				<input type="radio" class="sgi_is_school_adopted" name="sgi_is_school_adopted" <?php if($schools['SemisUniversal201415']['sgi_is_school_adopted'] == 1) { ?> checked="checked" <?php } ?> value="1">Yes</input>
				<input type="radio" class="sgi_is_school_adopted" name="sgi_is_school_adopted" <?php if($schools['SemisUniversal201415']['sgi_is_school_adopted'] == 2) { ?> checked="checked" <?php } ?> value="2">No</input>
			</td>
		</tr>
		
		<script>
		<?php if($schools['SemisUniversal201415']['sgi_is_school_adopted'] == 1) { ?>
				$('.sgi_sch_received_stipend_12_13_number').val('');
				$('.sgi_sch_adopted_adopterdisplay').attr('style','display:block;');
		<?php } ?>
		$('.sgi_is_school_adopted').on('keyup keypress blur change', function() {
			var sgi_is_school_adopted = $('input[name=sgi_is_school_adopted]:checked').val();
			
			if(sgi_is_school_adopted == '1')
			{
				$('.sgi_sch_received_stipend_12_13_number').val('');
				$('.sgi_sch_adopted_adopterdisplay').attr('style','display:block;');				
			}else
			{
				$('.sgi_sch_adopted_adopterdisplay').attr('style','display:none;');
			}
			
		});
		</script>
		<tr style="display:none;" class="sgi_sch_adopted_adopterdisplay" ><td><label>Q26. (a) If school adopted then adopter name.</label></td>
					<td>
						<input type="text" name="sgi_sch_adopted_adopter" value="<?php echo $schools['SemisUniversal201415']['sgi_sch_adopted_adopter']; ?>" ></input>
					</td>
		</tr>
		<tr>
			<td>Q27. What is the DDO Code / Cost Centre of this school ? </td>
			<td>
				<input type="text" class="maxsix" name="sgi_school_ddo_code" value="<?php echo $schools['SemisUniversal201415']['sgi_school_ddo_code']; ?>"></input>
			</td>
		</tr>
	</table>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator">
<tr><td colspan="2" ><h6><b>Q28. School Management Committee (SMC)</b></h6></td></tr>
<tr>
	<td>a. Is SMC Functional ?</td>
	<td>
		<input type="radio" required name="smci_is_functional" <?php if($schools['SemisUniversal201415']['smci_is_functional'] == 1) { ?> checked="checked" <?php } ?> value="1">Yes</input>
		<input type="radio" required name="smci_is_functional" <?php if($schools['SemisUniversal201415']['smci_is_functional'] == 2) { ?> checked="checked" <?php } ?> value="2">No</input>
	</td>
</tr>
<tr>
	<td>b. Has this School Got SMC Funds in last academic year ?</td>
	<td>
		<input type="radio" name="smci_received_smc" <?php if($schools['SemisUniversal201415']['smci_received_smc'] == 1) { ?> checked="checked" <?php } ?> value="1">Yes</input>
		<input type="radio" name="smci_received_smc" <?php if($schools['SemisUniversal201415']['smci_received_smc'] == 2) { ?> checked="checked" <?php } ?> value="2">No</input>
	</td>
</tr>
<tr>
	<td>c. SMC Account Title</td>
	<td>
		<input type="text" name="smci_ac_title" value="<?php echo $schools['SemisUniversal201415']['smci_ac_title']?>"></input>
	</td>
</tr>
<tr>
	<td>d. Account Number</td>
	<td>
		<input type="text" name="smci_ac_number" value="<?php echo $schools['SemisUniversal201415']['smci_ac_number']?>"></input>
	</td>
</tr>
<tr>
	<td>e. Bank Name</td>
	<td>
		<select name="smci_bank_name" >
		<?php foreach($banks as $bank) { ?>
		<option <?php if($schools['SemisUniversal201415']['smci_bank_name'] == $bank['codesForBank']['BankId']) { ?> selected="selected" <?php } ?> value="<?php echo $bank['codesForBank']['BankId']; ?>" ><?php echo $bank['codesForBank']['BankName']; ?></option>
		<?php } ?>
		</select>
	</td>
</tr>
<tr>
	<td>f.(i) Bank Branch Name</td>
	<td>
		<input type="text" name="smci_bank_branch_name" value="<?php echo $schools['SemisUniversal201415']['smci_bank_branch_name']; ?>"></input>
	</td>
</tr>
<tr>
	<td>f.(ii) Bank Branch Code</td>
	<td>
		<input class="maxsix" type="text" name="smci_bank_branch_code" value="<?php echo $schools['SemisUniversal201415']['smci_bank_branch_code']; ?>"></input>
	</td>
</tr>
<!--tr>
	<td>Q27. g. Balance in SMC Account as of 30th September</td>
	<td>
		<input type="number" name="smci_balance_september" value=""></input>
	</td>
</tr>
<tr>
	<td>Q27. h.(i) SMC Chairman Name</td>
	<td>
		<input type="text" name="smci_chairman_name" value=""></input>
	</td>
</tr-->
</table>
	<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator">
<tr><td colspan="3" ><h6><b>Q29. Write Total Number of following facilities available in School</b></h6></td></tr>
<tr>
	<td>Items</td>
	<td>Working</td>
	<td>Repairable</td>
</tr>
<tr>
	<td>a. Blackboard</td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_blackboard_working" value="<?php echo $schools['SemisUniversal201415']['sfaci_blackboard_working']; ?>" ></input></td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_blackboard_repairable" value="<?php echo $schools['SemisUniversal201415']['sfaci_blackboard_repairable']; ?>" ></input></td>
</tr>
<tr>
	<td>b. Student Chairs</td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_stu_chairs_working" value="<?php echo $schools['SemisUniversal201415']['sfaci_stu_chairs_working']; ?>" ></input></td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_stu_chairs_repairable" value="<?php echo $schools['SemisUniversal201415']['sfaci_stu_chairs_repairable']; ?>" ></input></td>
</tr>
<tr>
	<td>c. Student Desks / Benches</td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_stu_desks_working" value="<?php echo $schools['SemisUniversal201415']['sfaci_stu_desks_working']; ?>" ></input></td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_stu_desks_repairable" value="<?php echo $schools['SemisUniversal201415']['sfaci_stu_desks_repairable']; ?>" ></input></td>
</tr>
<tr>
	<td>d. Teacher Chairs</td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_teacher_chairs_working" value="<?php echo $schools['SemisUniversal201415']['sfaci_teacher_chairs_working']; ?>" ></input></td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_teacher_chairs_repairable" value="<?php echo $schools['SemisUniversal201415']['sfaci_teacher_chairs_repairable']; ?>" ></input></td>
</tr>
<tr>
	<td>e. Teacher Tables</td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_teacher_tables_working" value="<?php echo $schools['SemisUniversal201415']['sfaci_teacher_tables_working']; ?>" ></input></td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_teacher_tables_repairable" value="<?php echo $schools['SemisUniversal201415']['sfaci_teacher_tables_repairable']; ?>" ></input></td>
</tr>
<tr>
	<td>f. Electric Fans</td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_electric_fans_working" value="<?php echo $schools['SemisUniversal201415']['sfaci_electric_fans_working']; ?>" ></input></td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_electric_fans_repairable" value="<?php echo $schools['SemisUniversal201415']['sfaci_electric_fans_repairable']; ?>" ></input></td>
</tr>
<tr>
	<td>g. Almirah</td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_almirah_working" value="<?php echo $schools['SemisUniversal201415']['sfaci_almirah_working']; ?>" ></input></td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_almirah_repairable" value="<?php echo $schools['SemisUniversal201415']['sfaci_almirah_repairable']; ?>" ></input></td>
</tr>
<tr>
	<td>h. Computers</td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_computers_working" value="<?php echo $schools['SemisUniversal201415']['sfaci_computers_working']; ?>" ></input></td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_computers_repairable" value="<?php echo $schools['SemisUniversal201415']['sfaci_computers_repairable']; ?>" ></input></td>
</tr>
<tr>
	<td>i. Water Pump (Electric Motor)</td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_water_pump_working" value="<?php echo $schools['SemisUniversal201415']['sfaci_water_pump_working']; ?>" ></input></td>
	<td><input type="number" class="nonnegative number maxthree"name="sfaci_water_pump_repairable" value="<?php echo $schools['SemisUniversal201415']['sfaci_water_pump_repairable']; ?>" ></input></td>
</tr>
<tr>
	<td>j. Charts</td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_stu_charts_working" value="<?php echo $schools['SemisUniversal201415']['sfaci_stu_charts_working']; ?>" ></input></td>
	<td><input type="number" class="nonnegative number maxthree" name="sfaci_stu_charts_repairable" value="<?php echo $schools['SemisUniversal201415']['sfaci_stu_charts_repairable']; ?>" ></input></td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator">
<tr><td colspan="2" ><h6><b>Q30. Which of the following facilities are available in the School</b></h6></td></tr>
<tr>
	<td>Questions</td>
	<td>Response</td>
</tr>
<tr>
	<td> Computer Lab</td>
	<td>
		<select name="sfaci_comp_lab">
			<option value="0" <?php if($schools['SemisUniversal201415']['sfaci_comp_lab'] == 0) { ?> selected="selected" <?php } ?> >No Response</option>
			<option value="1" <?php if($schools['SemisUniversal201415']['sfaci_comp_lab'] == 1) { ?> selected="selected" <?php } ?> >Available and Functional</option>
			<option value="2" <?php if($schools['SemisUniversal201415']['sfaci_comp_lab'] == 2) { ?> selected="selected" <?php } ?> >Available but not Functional</option>
			<option value="3" <?php if($schools['SemisUniversal201415']['sfaci_comp_lab'] == 3) { ?> selected="selected" <?php } ?> >Not Available</option>
		</select>
	</td>
</tr>
<tr>
	<td> Science Lab</td>
	<td>
		<select name="sfaci_scie_lab">
			<option value="0" <?php if($schools['SemisUniversal201415']['sfaci_scie_lab'] == 0) { ?> selected="selected" <?php } ?> >No Response</option>
			<option value="1" <?php if($schools['SemisUniversal201415']['sfaci_scie_lab'] == 1) { ?> selected="selected" <?php } ?> >Available and Functional</option>
			<option value="2" <?php if($schools['SemisUniversal201415']['sfaci_scie_lab'] == 2) { ?> selected="selected" <?php } ?> >Available but not Functional</option>
			<option value="3" <?php if($schools['SemisUniversal201415']['sfaci_scie_lab'] == 3) { ?> selected="selected" <?php } ?> >Not Available</option>
		</select>
	</td>
</tr>
<tr>
<td> Physics Lab</td>
	<td>
		<select name="sfaci_physics_lab">
			<option value="0" <?php if($schools['SemisUniversal201415']['sfaci_physics_lab'] == 0) { ?> selected="selected" <?php } ?> >No Response</option>
			<option value="1" <?php if($schools['SemisUniversal201415']['sfaci_physics_lab'] == 1) { ?> selected="selected" <?php } ?> >Available and Functional</option>
			<option value="2" <?php if($schools['SemisUniversal201415']['sfaci_physics_lab'] == 2) { ?> selected="selected" <?php } ?> >Available but not Functional</option>
			<option value="3" <?php if($schools['SemisUniversal201415']['sfaci_physics_lab'] == 3) { ?> selected="selected" <?php } ?> >Not Available</option>
		</select>
	</td>
</tr>
<tr>
	<td> Chemistry Lab</td>
	<td>
		<select name="sfaci_chem_lab">
			<option value="0" <?php if($schools['SemisUniversal201415']['sfaci_chem_lab'] == 0) { ?> selected="selected" <?php } ?> >No Response</option>
			<option value="1" <?php if($schools['SemisUniversal201415']['sfaci_chem_lab'] == 1) { ?> selected="selected" <?php } ?> >Available and Functional</option>
			<option value="2" <?php if($schools['SemisUniversal201415']['sfaci_chem_lab'] == 2) { ?> selected="selected" <?php } ?> >Available but not Functional</option>
			<option value="3" <?php if($schools['SemisUniversal201415']['sfaci_chem_lab'] == 3) { ?> selected="selected" <?php } ?> >Not Available</option>
		</select>
	</td>
</tr>
<tr>
	<td> Biology Lab</td>
	<td>
		<select name="sfaci_biology_lab">
			<option value="0" <?php if($schools['SemisUniversal201415']['sfaci_biology_lab'] == 0) { ?> selected="selected" <?php } ?> >No Response</option>
			<option value="1" <?php if($schools['SemisUniversal201415']['sfaci_biology_lab'] == 1) { ?> selected="selected" <?php } ?> >Available and Functional</option>
			<option value="2" <?php if($schools['SemisUniversal201415']['sfaci_biology_lab'] == 2) { ?> selected="selected" <?php } ?> >Available but not Functional</option>
			<option value="3" <?php if($schools['SemisUniversal201415']['sfaci_biology_lab'] == 3) { ?> selected="selected" <?php } ?> >Not Available</option>
		</select>
	</td>
</tr>
<tr>
	<td> Home Economics Lab</td>
	<td>
		<select name="sfaci_home_economics_lab">
			<option value="0" <?php if($schools['SemisUniversal201415']['sfaci_home_economics_lab'] == 0) { ?> selected="selected" <?php } ?> >No Response</option>
			<option value="1" <?php if($schools['SemisUniversal201415']['sfaci_home_economics_lab'] == 1) { ?> selected="selected" <?php } ?> >Available and Functional</option>
			<option value="2" <?php if($schools['SemisUniversal201415']['sfaci_home_economics_lab'] == 2) { ?> selected="selected" <?php } ?> >Available but not Functional</option>
			<option value="3" <?php if($schools['SemisUniversal201415']['sfaci_home_economics_lab'] == 3) { ?> selected="selected" <?php } ?> >Not Available</option>
		</select>
	</td>
</tr>
<tr>
	<td> Library</td>
	<td>
		<select name="sfaci_library">
			<option value="0" <?php if($schools['SemisUniversal201415']['sfaci_library'] == 0) { ?> selected="selected" <?php } ?> >No Response</option>
			<option value="1" <?php if($schools['SemisUniversal201415']['sfaci_library'] == 1) { ?> selected="selected" <?php } ?> >Available and Functional</option>
			<option value="2" <?php if($schools['SemisUniversal201415']['sfaci_library'] == 2) { ?> selected="selected" <?php } ?> >Available but not Functional</option>
			<option value="3" <?php if($schools['SemisUniversal201415']['sfaci_library'] == 3) { ?> selected="selected" <?php } ?> >Not Available</option>
		</select>
	</td>
</tr>
<tr>
	<td> Play Ground</td>
	<td>
		<select name="sfaci_play_ground">
			<option value="0" <?php if($schools['SemisUniversal201415']['sfaci_play_ground'] == 0) { ?> selected="selected" <?php } ?> >No Response</option>
			<option value="1" <?php if($schools['SemisUniversal201415']['sfaci_play_ground'] == 1) { ?> selected="selected" <?php } ?> >Available and Functional</option>
			<option value="2" <?php if($schools['SemisUniversal201415']['sfaci_play_ground'] == 2) { ?> selected="selected" <?php } ?> >Available but not Functional</option>
			<option value="3" <?php if($schools['SemisUniversal201415']['sfaci_play_ground'] == 3) { ?> selected="selected" <?php } ?> >Not Available</option>
		</select>
	</td>
</tr>
<tr>
	<td> Medical/First Aid Box</td>
	<td>
		<select name="sfaci_medical_firstaid">
			<option value="0" <?php if($schools['SemisUniversal201415']['sfaci_medical_firstaid'] == 0) { ?> selected="selected" <?php } ?> >No Response</option>
			<option value="1" <?php if($schools['SemisUniversal201415']['sfaci_medical_firstaid'] == 1) { ?> selected="selected" <?php } ?> >Available and Functional</option>
			<option value="2" <?php if($schools['SemisUniversal201415']['sfaci_medical_firstaid'] == 2) { ?> selected="selected" <?php } ?> >Available but not Functional</option>
			<option value="3" <?php if($schools['SemisUniversal201415']['sfaci_medical_firstaid'] == 3) { ?> selected="selected" <?php } ?> >Not Available</option>
		</select>
	</td>
</tr>
<tr>
	<td> Sports Equipments</td>
	<td>
		<select name="sfaci_sports_equip">
			<option value="0" <?php if($schools['SemisUniversal201415']['sfaci_sports_equip'] == 0) { ?> selected="selected" <?php } ?> >No Response</option>
			<option value="1" <?php if($schools['SemisUniversal201415']['sfaci_sports_equip'] == 1) { ?> selected="selected" <?php } ?> >Available and Functional</option>
			<option value="2" <?php if($schools['SemisUniversal201415']['sfaci_sports_equip'] == 2) { ?> selected="selected" <?php } ?> >Available but not Functional</option>
			<option value="3" <?php if($schools['SemisUniversal201415']['sfaci_sports_equip'] == 3) { ?> selected="selected" <?php } ?> >Not Available</option>
		</select>
	</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator">
<tr><td><label>Signature of Data Provider / Enumerator</label></td>
				<td>
					<input class="" type="radio" <?php if($schools['SemisUniversal201415']['ht_signature_page_2'] == 1) { ?> checked="checked"  <?php } ?> name="ht_signature_page_2" value="1" >Yes</input>
					<input class="" type="radio" <?php if($schools['SemisUniversal201415']['ht_signature_page_2'] == 2) { ?> checked="checked" <?php } ?> name="ht_signature_page_2" value="2" >No</input>
				</td>
			</tr>
</table>
</div>
<div class="page4" style="display:none;">
	<div id="page3" class="page3">
		<table style="margin-left:-15px;" border="0" cellpadding="0" cellspacing="0" class="shrink CSSTableGenerator teacher_table grid_table wf">
				<tr><td style="width:50px;" >S.No.</td><td style="width:45px;" >Full Name (required)</td><td style="width:50px;" >CNIC Number</td><td style="width:50px;" >Gender</td><td style="width:50px;" >Personal Number from AG Office</td><td style="width:50px;" >Date of Birth (yyyy-mm-dd)</td><td style="width:50px;" >Designation Code</td><td style="width:50px;" >BPS(Time Scale)</td><td style="width:50px;" >BPS (Actual Scale)</td><td style="width:50px;" >Date of Entry In this Government Service (yyyy-mm-dd)</td><td style="width:50px;" >BPS (at time of appointment)</td><td style="width:50px;" >Code for Type of Post</td><td style="width:50px;" >Highest Academic Qualification Code</td><td style="width:50px;" >Professional Training Code</td><td style="width:50px;" >On Detailment</td><td style="width:50px;" >Contact Number</td></tr>
				<?php $x = 1; foreach($semisTeachers as $semisTeacher) { ?>
				<tr id="teachers_row_<?php echo $x; ?>" >
					<td><?php echo $x; ?></td>
					<td><input type="text" style="width:150px;" required name="tdi_full_name_<?php echo $x; ?>" value="<?php echo $semisTeacher['SemisTeacher201415']['tdi_full_name']; ?>" ></input></td>
					<td><input style="width:115px;" type="text" id="tdi_teacher_cnic_<?php echo $x; ?>" name="tdi_teacher_cnic_<?php echo $x; ?>" value="<?php echo $semisTeacher['SemisTeacher201415']['tdi_teacher_cnic']; ?>" ></input></td>
					<td>
						<input type="radio" <?php if($semisTeacher['SemisTeacher201415']['tdi_teacher_gender'] == 1) { ?> checked="checked" <?php } ?> name="tdi_teacher_gender_<?php echo $x; ?>" value="1" >Male</input><br>
						<input type="radio" <?php if($semisTeacher['SemisTeacher201415']['tdi_teacher_gender'] == 2) { ?> checked="checked" <?php } ?> name="tdi_teacher_gender_<?php echo $x; ?>" value="2" >Female</input>
					</td>
					<td><input type="text"  class="maxeight" style="width:65px;" id="tdi_teacher_personnel_number_<?php echo $x; ?>" name="tdi_teacher_personnel_number_<?php echo $x; ?>" value="<?php echo $semisTeacher['SemisTeacher201415']['tdi_teacher_personnel_number']; ?>" ></input></td>
					<td>
						<div class="well">
							<div id="datetimepicker_dob_<?php echo $x; ?>" class="input-append">
								<input required style="width:75px;" data-format="yyyy-MM-dd" type="text" name="tdi_teacher_dob_date_<?php echo $x; ?>" value="<?php echo date('Y-m-d', strtotime($semisTeacher['SemisTeacher201415']['tdi_teacher_dob_date'])); ?>" ></input>
								<span class="add-on">
								<i data-time-icon="icon-time" data-date-icon="icon-calendar">
								</i>
								</span>
							</div>
						</div>
					</td>
					<td>
						<select style="width:60px;" name="tdi_teacher_designation_<?php echo $x; ?>" >
							<?php foreach($codesteacherdesignations as $codesteacherdesignation) { ?>
								<option <?php if($semisTeacher['SemisTeacher201415']['tdi_teacher_designation'] == $codesteacherdesignation['codesForTeachersDesignation']['DesignationID']) { ?> selected="selected" <?php } ?> value="<?php echo $codesteacherdesignation['codesForTeachersDesignation']['DesignationID']; ?>" >
									<?php echo $codesteacherdesignation['codesForTeachersDesignation']['DesignationID']; ?>
								</option>
							<?php } ?>
						</select>
					</td>
					<td><input style="width:30px;" type="number" id="tdi_teacher_bps_<?php echo $x; ?>" class="nonnegative number maxthree" name="tdi_teacher_bps_<?php echo $x; ?>" value="<?php echo $semisTeacher['SemisTeacher201415']['tdi_teacher_bps']; ?>" ></input></td>
					<td><input style="width:30px;" type="number" id="tdi_teacher_actual_bps_<?php echo $x; ?>" class="nonnegative number maxthree" name="tdi_teacher_actual_bps_<?php echo $x; ?>" value="<?php echo $semisTeacher['SemisTeacher201415']['tdi_teacher_actual_bps']; ?>" ></input></td>
					<td>
						<div class="well">
							<div id="datetimepicker_doj_<?php echo $x; ?>" class="input-append">
								<input style="width:75px;" data-format="yyyy-MM-dd" type="text" name="tdi_teacher_entry_service_date_<?php echo $x; ?>" value="<?php echo date('Y-m-d', strtotime($semisTeacher['SemisTeacher201415']['tdi_teacher_entry_service_date'])); ?>" ></input>
								<span class="add-on"><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
							</div>
						</div>
					</td>
					<td>
						<input style="width:30px;" type="number" id="tdi_teacher_appointment_bps_<?php echo $x; ?>" class="nonnegative number maxthree" name="tdi_teacher_appointment_bps_<?php echo $x; ?>" value="<?php echo $semisTeacher['SemisTeacher201415']['tdi_teacher_appointment_bps']; ?>" ></input>
					</td>
					<td>
						<select style="width:55px;" name="tdi_teacher_code_type_post_<?php echo $x; ?>" >
						<?php foreach($typeofposts as $typeofpost) { ?>
						<option <?php if($semisTeacher['SemisTeacher201415']['tdi_teacher_code_type_post'] == $typeofpost['codesForTypeOfPost']['typeid']) { ?> selected="selected" <?php } ?> value="<?php echo $typeofpost['codesForTypeOfPost']['typeid']; ?>" >
							<?php echo $typeofpost['codesForTypeOfPost']['typeid']; ?></option>
						<?php } ?>
						</select>
					</td>
					<td>
						<select style="width:65px;" name="tdi_teacher_highest_academic_qualification_<?php echo $x; ?>" >
						<?php foreach($codesteacherqualifications as $codesteacherqualification) { ?>
						<option <?php if($semisTeacher['SemisTeacher201415']['tdi_teacher_highest_academic_qualification'] == $codesteacherqualification['codesForTeachersQualification']['QualificaitonId']) { ?> selected="selected" <?php } ?> value="<?php echo $codesteacherqualification['codesForTeachersQualification']['QualificaitonId']; ?>" >
							<?php echo $codesteacherqualification['codesForTeachersQualification']['QualificaitonId']; ?>
						</option>
						<?php } ?>
						</select>
					</td>
					<td>
						<select style="width:55px;" name="tdi_teacher_highest_professional_training_<?php echo $x; ?>" >
							<?php foreach($codesteachertrainings as $codesteachertraining) { ?>
							<option <?php if($semisTeacher['SemisTeacher201415']['tdi_teacher_highest_professional_training'] == $codesteachertraining['codesForTeachersTraining']['TrainingID']) { ?> selected="selected" <?php } ?> value="<?php echo $codesteachertraining['codesForTeachersTraining']['TrainingID']; ?>" >
								<?php echo $codesteachertraining['codesForTeachersTraining']['TrainingID']; ?>
							</option>
							<?php } ?>
						</select>
					</td>
					<td>
						<input type="radio" <?php if($semisTeacher['SemisTeacher201415']['tdi_teacher_on_detailment'] == 1) { ?> checked="checked" <?php } ?> name="tdi_teacher_on_detailment_<?php echo $x; ?>" value="1" >Yes</input>
						<br>
						<input type="radio" <?php if($semisTeacher['SemisTeacher201415']['tdi_teacher_on_detailment'] == 2) { ?> checked="checked" <?php } ?> name="tdi_teacher_on_detailment_<?php echo $x; ?>" value="2" >No</input>
					</td>
					<td>
						<input style="width:93px;" type="text" id="tdi_teacher_number_<?php echo $x; ?>" name="tdi_teacher_number_<?php echo $x; ?>" value="<?php echo $semisTeacher['SemisTeacher201415']['tdi_teacher_number']; ?>" ></input>
					</td>
				</tr>
				<script>
					// oStringMask = new Mask("########");
					// oStringMask.attach(document.getElementById('tdi_teacher_personnel_number_<?php echo $x; ?>'));
					
					oStringMaskCnic = new Mask("#####-#######-#");
					oStringMaskCnic.attach(document.getElementById('tdi_teacher_cnic_<?php echo $x; ?>'));
					
					oStringMaskphone = new Mask("####-#######");
					oStringMaskphone.attach(document.getElementById('tdi_teacher_number_<?php echo $x; ?>'));
					
					oStringMaskbps = new Mask("###");
					oStringMaskbps.attach(document.getElementById('tdi_teacher_bps_<?php echo $x; ?>'));
					
					$('.nonnegative2').filter(function() {
						return parseInt($(this).val(), 10) > 0;
					});
					
					$('#datetimepicker_dob_<?php echo $x; ?>').datetimepicker({
						pickTime: false
					});
					
					$('#datetimepicker_doj_<?php echo $x; ?>').datetimepicker({
						pickTime: false
					});
				</script>
				<?php $x++; } ?>
		</table>
		</div>
		<table style="margin-left:-15px;" border="0" cellpadding="0" cellspacing="0" class="shrink CSSTableGenerator teacher_add_table grid_table wf">
		
				<tr><td>Add Teacher Details</td><td><a type="button" href="javascript:teachers_add(<?php echo $x; ?>);" class="teachers_add" >Add Another Teacher Details</a></td><td>Delete Last Row</td><td><a type="button" href="javascript:teachers_delete(<?php echo $x-1; ?>);" class="teachers_delete" >Delete Last Added Teacher Details</a></td></tr>	
		</table>
		<input type="hidden" name="teachers_list_added" id="teachers_list_added" value="<?php echo $x; ?>" ></input>
		<?php if($schools['SemisUniversal201415']['campus_school'] == 1) { ?>
		<div id="consolidationtable" >
		<img id="page4print" style="float: right; height: 50px;" src="<?php echo $this->webroot; ?>img/printer.png" onclick="javascript:CallPrint('page4')" />
		<table style="margin-left:-15px;" border="0" cellpadding="0" cellspacing="0" class="shrink CSSTableGenerator grid_table wf">
				<tr><td colspan="24" ><h6><b>Write The details of the following merged schools.</b></h6></td></tr>
				<tr>
				<td colspan="12" >Basic School Information</td>
				<td colspan="2" >Total No. of Teaching Staff</td>
				<td colspan="2" >Total No. of Non-Teaching Staff</td>
				<td colspan="2" >Students Enrolment</td>
				<td colspan="6" >Basic Facilities</td>
				</tr>
				<tr>
				<td>S.No.</td>
				<td>School Name and Prefix</td>
				<td>Defunct SEMIS ID</td>
				<td>Type of school</td>
				<td>Type of Merging</td>
				<td>Status of School</td>
				<td>School Building</td>
				<td>Shift</td>
				<td>Level</td>
				<td>Medium</td>
				<td>Gender</td>
				<td>Cost Centre</td>
				<td>Male</td>
				<td>Female</td>
				<td>Male</td>
				<td>Female</td>
				<td>Boys</td>
				<td>Girls</td>
				<td>Total No. of Rooms</td>
				<td>Number of Classrooms</td>
				<td>Condition of Boundary Wall</td>
				<td>Wash rooms</td>
				<td>Drinking Water</td>
				<td>Electricity</td>
				</tr>
				<?php 
				$count_merged = count($merged_schools_array);
				?>
				<input required type="text" style="display:none;" name="total_merged_schools" value="<?php echo $count_merged; ?>" ></input>
				<?php
				// $count_merged = 3;
				for($x = 0; $x<$count_merged; $x++)
				{
				?>
				<tr id="merged_<?php echo ($x+1); ?>">
				<td><?php echo ($x+1); ?></td>
				<td><input style="width:130px;" required type="text" name="merged_<?php echo ($x+1); ?>_bi_school_name" value="<?php echo $merged_schools_array[$x]['SemisConsolidationUniv201415']['bi_school_name']; ?>" ></input><input style="display:none;" type="text" name="merged_<?php echo ($x+1); ?>_bi_school_id" value="<?php echo $merged_schools_array[$x]['SemisConsolidationUniv201415']['id']; ?>" ></input></td>
				<td><input style="width:71px;" required class="semis_code nonnegative number maxnine"  type="number" id="school_semis_new" name="merged_<?php echo ($x+1); ?>_school_semis_new"   value="<?php echo $merged_schools_array[$x]['SemisConsolidationUniv201415']['school_semis_new']; ?>"  ></input></td>
				<td>
					<select style="width:92px;" required name="merged_<?php echo ($x+1); ?>_asi_school_type" >
						<option <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['asi_school_type'] == 1) { ?> selected="selected" <?php } ?> value="1" >Campus</option>
						<option <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['asi_school_type'] == 2) { ?> selected="selected" <?php } ?> value="2" >Merged</option>
					</select>
				</td>
				<td>
					<select style="width:100px;" required name="merged_<?php echo ($x+1); ?>_asi_school_merging_type" >
						<option value="1" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['asi_school_merging_type'] == 1) { ?> selected="selected" <?php } ?> >Same Premises</option>
						<option value="2" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['asi_school_merging_type'] == 2) { ?> selected="selected" <?php } ?> >Adjacent</option>
						<option value="3" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['asi_school_merging_type'] == 3) { ?> selected="selected" <?php } ?> >Within 500 Meters</option>
					</select>
				</td>
				<td>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_dsi_status" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['dsi_status'] == 1) { ?> checked="checked" <?php } ?> value="1" >Functional</input><br>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_dsi_status" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['dsi_status'] == 2) { ?> checked="checked" <?php } ?> value="2" >Temporary Closed</input><br>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_dsi_status" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['dsi_status'] == 3) { ?> checked="checked" <?php } ?> value="3" >Permanent Closed</input><br>
				</td>
				<td>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_sbi_ownership" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['sbi_ownership'] == 1) { ?> checked="checked" <?php } ?> value="1" >School has its own Government Building</input><br>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_sbi_ownership" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['sbi_ownership'] == 2) { ?> checked="checked" <?php } ?> value="2" >Other Government School Building (shared)</input><br>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_sbi_ownership" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['sbi_ownership'] == 3) { ?> checked="checked" <?php } ?> value="3" >Rented</input><br>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_sbi_ownership" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['sbi_ownership'] == 4) { ?> checked="checked" <?php } ?> value="4" >Other Building</input><br>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_sbi_ownership" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['sbi_ownership'] == 5) { ?> checked="checked" <?php } ?> value="5" >No Building</input>
				</td>
				<td>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_dsi_shift" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['dsi_shift'] == 1) { ?> checked="checked" <?php } ?> value="1" >Morning</input><br>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_dsi_shift" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['dsi_shift'] == 2) { ?> checked="checked" <?php } ?> value="2" >Afternoon</input><br>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_dsi_shift" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['dsi_shift'] == 3) { ?> checked="checked" <?php } ?> value="3" >Both Shifts</input><br>
					
				</td>
				<td>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_dsi_level" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['dsi_level'] == 1) { ?> checked="checked" <?php } ?> value="1" >Primary</input><br>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_dsi_level" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['dsi_level'] == 2) { ?> checked="checked" <?php } ?> value="2" >Middle</input><br>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_dsi_level" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['dsi_level'] == 3) { ?> checked="checked" <?php } ?> value="3" >Elementary</input><br>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_dsi_level" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['dsi_level'] == 4) { ?> checked="checked" <?php } ?> value="4" >Secondary</input><br>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_dsi_level" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['dsi_level'] == 5) { ?> checked="checked" <?php } ?> value="5" >Higher Secondary</input><br>
				</td>
				<td>
					<input required class="merged_<?php echo ($x+1); ?>_dsi_sch_medium" type="radio" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['dsi_sch_medium'] == 1) { ?> checked="checked" <?php } ?> name="merged_<?php echo ($x+1); ?>_dsi_sch_medium" value="1" >Urdu Medium</input>
					<input required class="merged_<?php echo ($x+1); ?>_dsi_sch_medium" type="radio" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['dsi_sch_medium'] == 2) { ?> checked="checked" <?php } ?> name="merged_<?php echo ($x+1); ?>_dsi_sch_medium" value="2" >Sindhi Medium</input>
					<input required class="merged_<?php echo ($x+1); ?>_dsi_sch_medium" type="radio" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['dsi_sch_medium'] == 3) { ?> checked="checked" <?php } ?> name="merged_<?php echo ($x+1); ?>_dsi_sch_medium" value="3" >English Medium</input>
					<input required class="merged_<?php echo ($x+1); ?>_dsi_sch_medium" type="radio" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['dsi_sch_medium'] == 4) { ?> checked="checked" <?php } ?> name="merged_<?php echo ($x+1); ?>_dsi_sch_medium" value="4" >Mixed Medium</input>
				</td>
				<td>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_dsi_sch_gender" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['dsi_sch_gender'] == 1) { ?> checked="checked" <?php } ?> value="1" >Boys</input><br>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_dsi_sch_gender" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['dsi_sch_gender'] == 2) { ?> checked="checked" <?php } ?> value="2" >Girls</input><br>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_dsi_sch_gender" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['dsi_sch_gender'] == 3) { ?> checked="checked" <?php } ?> value="3" >Mixed School</input><br>
				</td>
				<td>
					<input style="width:46px;" required type="text" class="maxsix" name="merged_<?php echo ($x+1); ?>_dsi_old_cost_center" value="<?php echo $merged_schools_array[$x]['SemisConsolidationUniv201415']['dsi_old_cost_center']; ?>" ></input>
				</td>
				<td>
					<input style="width:22px;" required class="nonnegative number maxthree" id="merged_<?php echo ($x+1); ?>_sti_govt_teacher_number_male" type="number" name="merged_<?php echo ($x+1); ?>_sti_govt_teacher_number_male" value="<?php echo $merged_schools_array[$x]['SemisConsolidationUniv201415']['sti_govt_teacher_number_male']; ?>" ></input>
				</td>
				<td>
					<input style="width:22px;" required class="nonnegative number maxthree" id="merged_<?php echo ($x+1); ?>_sti_govt_teacher_number_female" type="number" name="merged_<?php echo ($x+1); ?>_sti_govt_teacher_number_female" value="<?php echo $merged_schools_array[$x]['SemisConsolidationUniv201415']['sti_govt_teacher_number_female']; ?>" ></input>
				</td>
				<td>
					<input style="width:22px;" required class="nonnegative number maxthree" id="merged_<?php echo ($x+1); ?>_sti_non_teacher_number_male" type="number" name="merged_<?php echo ($x+1); ?>_sti_non_teacher_number_male" value="<?php echo $merged_schools_array[$x]['SemisConsolidationUniv201415']['sti_non_teacher_number_male']; ?>" ></input>
				</td>
				<td>
					<input style="width:22px;" required class="nonnegative number maxthree" id="merged_<?php echo ($x+1); ?>_sti_non_teacher_number_female" type="number" name="merged_<?php echo ($x+1); ?>_sti_non_teacher_number_female" value="<?php echo $merged_schools_array[$x]['SemisConsolidationUniv201415']['sti_non_teacher_number_female']; ?>" ></input>
				</td>
				<td>
					<input style="width:22px;" required class="nonnegative number maxfour" id="merged_<?php echo ($x+1); ?>_sti_enrollment_boys" type="number" name="merged_<?php echo ($x+1); ?>_sti_enrollment_boys" value="<?php echo $merged_schools_array[$x]['SemisConsolidationUniv201415']['sti_enrollment_boys']; ?>" ></input>
				</td>
				<td>
					<input style="width:22px;" required class="nonnegative number maxfour" id="merged_<?php echo ($x+1); ?>_sti_enrollment_girls" type="number" name="merged_<?php echo ($x+1); ?>_sti_enrollment_girls" value="<?php echo $merged_schools_array[$x]['SemisConsolidationUniv201415']['sti_enrollment_girls']; ?>" ></input>
				</td>
				<td>
					<input style="width:22px;" required class="nonnegative number maxthree" id="merged_<?php echo ($x+1); ?>_total_rooms" type="number" name="merged_<?php echo ($x+1); ?>_total_rooms" value="<?php echo $merged_schools_array[$x]['SemisConsolidationUniv201415']['total_rooms']; ?>" ></input>
				</td>
				<td>
					<input style="width:22px;" required class="nonnegative number maxthree" id="merged_<?php echo ($x+1); ?>_total_classrooms" type="number" name="merged_<?php echo ($x+1); ?>_total_classrooms" value="<?php echo $merged_schools_array[$x]['SemisConsolidationUniv201415']['total_classrooms']; ?>" ></input>
				</td>
				<td>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_sbf_condition_bwall" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['sbf_condition_bwall'] == 1) { ?> checked="checked" <?php } ?> value="1" >Satisfactory</input>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_sbf_condition_bwall" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['sbf_condition_bwall'] == 2) { ?> checked="checked" <?php } ?> value="2" >Needs Repair</input>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_sbf_condition_bwall" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['sbf_condition_bwall'] == 3) { ?> checked="checked" <?php } ?> value="3" >Dangerous</input>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_sbf_condition_bwall" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['sbf_condition_bwall'] == 4) { ?> checked="checked" <?php } ?> value="4" >No Boundary Wall</input>
				</td>
				<td>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_sbf_washrooms" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['sbf_washrooms'] == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_sbf_washrooms" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['sbf_washrooms'] == 2) { ?> checked="checked" <?php } ?> value="2" >No</input><br>
				</td>
				<td>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_sbf_drinking_water" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['sbf_drinking_water'] == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_sbf_drinking_water" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['sbf_drinking_water'] == 2) { ?> checked="checked" <?php } ?> value="2" >No</input><br>
				</td>
				<td>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_sbf_electricity" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['sbf_electricity'] == 1) { ?> checked="checked" <?php } ?> value="1" >Yes</input><br>
					<input required type="radio" name="merged_<?php echo ($x+1); ?>_sbf_electricity" <?php if($merged_schools_array[$x]['SemisConsolidationUniv201415']['sbf_electricity'] == 2) { ?> checked="checked" <?php } ?> value="2" >No</input><br>
				</td>
				</tr>
				<?php
				}
				?>
		</table>
		</div>
		<?php } ?>
	<input class="submit_form" type="submit" value="submit" />
</div>

</form>
<div style="text-align:center;">
<a class="previous button" style="line-height:2.8em; display:none;" href="javascript:change_page(1);" >Previous</a>
<a class="next button" style="line-height:2.8em; inline-block" href="javascript:change_page(2);" >Next</a>
</div>
<script>
function change_page(number) {
	if(number == 1)
	{
		$('.previous').attr('style','line-height:2.8em; display:none;')
		$('.next').attr('style','line-height:2.8em; display:inline-block;')
		
		
		$('.page1').attr('style','display:block;');
		$('.page2').attr('style','display:none;');
		$('.page4').attr('style','display:none;');
		
		$('.previous').attr('href','javascript:change_page(1);');
		$('.next').attr('href','javascript:change_page(2);');
		
		$('html,body').scrollTop(0);
		$('.printtnImg').attr("onclick","javascript:CallPrint('page1')");
		
	}else if(number == 2)
	{
		$('.previous').attr('style','line-height:2.8em; display:inline-block;')
		$('.next').attr('style','line-height:2.8em; display:inline-block;')
		
		$('.page1').attr('style','display:none;');
		$('.page2').attr('style','display:block;');
		$('.page4').attr('style','display:none;');
		
		
		$('.previous').attr('href','javascript:change_page(1);');
		$('.next').attr('href','javascript:change_page(3);');
		
		$('html,body').scrollTop(0);
		
		$('.printtnImg').attr("onclick","javascript:CallPrint('page2')");
		
	}else if(number == 3) 
	{
		$('.previous').attr('style','line-height:2.8em; display:inline-block;')
		$('.next').attr('style','line-height:2.8em; display:none;')
		
		$('.page1').attr('style','display:none;');
		$('.page2').attr('style','display:none;');
		$('.page4').attr('style','display:block;');
		
		
		$('.previous').attr('href','javascript:change_page(2);');
		$('.next').attr('href','javascript:change_page(3);');
		
		$('html,body').scrollTop(0);
		
		$('.printtnImg').attr("onclick","javascript:CallPrint('page3')");
		$('#page4print').attr("onclick","javascript:CallPrint('page4')");
		
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
			// $('input[type="submit"]').removeAttr('disabled');
		}
		
});
// $( ".teachers_number" ).on('keyup keypress blur change', function() {
function teachers_delete(id) {
		
		if(id == 0)
		{
			return false;
		}else
		{
			var b = id - 1;
			
			$('#teachers_list_added').val(b);
			
			// $('input[type="submit"]').attr('disabled','disabled');
			
			$('#teachers_row_'+id).remove();
			$('.teachers_add').attr('href', 'javascript:teachers_add('+id+')');
			$('.teachers_delete').attr('href', 'javascript:teachers_delete('+b+')');
		}
}
function teachers_add(id) {
			$('#teachers_list_added').val(id);
			var total_teachers = $('.total_teachers').val();
			
			if(id <= total_teachers)
			{
				
				// $('input[type="submit"]').attr('disabled', 'disabled');
				
				var b = id;
				id = id + 1;
				$('.teachers_add').attr('href', 'javascript:teachers_add('+id+')');
				$('.teachers_delete').attr('href', 'javascript:teachers_delete('+b+')');
				
				$('.teacher_table').append('<tr id="teachers_row_'+b+'" ><td>'+b+'</td><td><input type="text" style="width:150px;" required name="tdi_full_name_'+b+'" value="" ></input></td><td><input style="width:115px;" type="text" id="tdi_teacher_cnic_'+b+'" name="tdi_teacher_cnic_'+b+'" value="" ></input></td><td><input type="radio" name="tdi_teacher_gender_'+b+'" value="1" >Male</input><br><input type="radio" name="tdi_teacher_gender_'+b+'" value="2" >Female</input></td><td><input type="text" style="width:64px;" class="maxeight2" id="tdi_teacher_personnel_number_'+b+'" name="tdi_teacher_personnel_number_'+b+'" value="" ></input></td><td><div id="well"><div required id="datetimepicker_dob_'+b+'" class="input-append"><input style="width:75px;" data-format="yyyy-MM-dd" type="text" name="tdi_teacher_dob_date_'+b+'" value="" ></input><span class="add-on"><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span></div></div></td><td><select style="width:60px;" name="tdi_teacher_designation_'+b+'" ><?php foreach($codesteacherdesignations as $codesteacherdesignation) { ?><option value="<?php echo $codesteacherdesignation['codesForTeachersDesignation']['DesignationID']; ?>" ><?php echo $codesteacherdesignation['codesForTeachersDesignation']['DesignationID']; ?></option><?php } ?></select></td><td><input style="width:30px;" type="number" id="tdi_teacher_bps_'+b+'" class="nonnegative2 number2" name="tdi_teacher_bps_'+b+'" value="" ></input></td><td><input style="width:30px;" type="number" id="tdi_teacher_actual_bps_'+b+'" class="nonnegative2 number2" name="tdi_teacher_actual_bps_'+b+'" value="" ></input></td><td><div id="well"><div id="datetimepicker_doj_'+b+'" class="input-append"><input style="width:75px;" data-format="yyyy-MM-dd" type="text" name="tdi_teacher_entry_service_date_'+b+'" value="" ></input><span class="add-on"><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span></div></div></td><td><input style="width:30px;" type="number" id="tdi_teacher_appointment_bps_'+b+'" class="nonnegative2 number2" name="tdi_teacher_appointment_bps_'+b+'" value="" ></input></td><td><select style="width:55px;" name="tdi_teacher_code_type_post_'+b+'" ><?php foreach($typeofposts as $typeofpost) { ?><option value="<?php echo $typeofpost['codesForTypeOfPost']['typeid']; ?>" ><?php echo $typeofpost['codesForTypeOfPost']['typeid']; ?></option><?php } ?></select></td><td><select style="width:65px;" name="tdi_teacher_highest_academic_qualification_'+b+'" ><?php foreach($codesteacherqualifications as $codesteacherqualification) { ?><option value="<?php echo $codesteacherqualification['codesForTeachersQualification']['QualificaitonId']; ?>" ><?php echo $codesteacherqualification['codesForTeachersQualification']['QualificaitonId']; ?></option><?php } ?></select></td><td><select style="width:55px;" name="tdi_teacher_highest_professional_training_'+b+'" ><?php foreach($codesteachertrainings as $codesteachertraining) { ?><option value="<?php echo $codesteachertraining['codesForTeachersTraining']['TrainingID']; ?>" ><?php echo $codesteachertraining['codesForTeachersTraining']['TrainingID']; ?></option><?php } ?></select></td><td><input type="radio" name="tdi_teacher_on_detailment_'+b+'" value="1" >Yes</input><br><input type="radio" name="tdi_teacher_on_detailment_'+b+'" value="2" >No</input></td><td><input style="width:93px;" type="text" id="tdi_teacher_number_'+b+'" name="tdi_teacher_number_'+b+'" value="" ></input></td></tr>');
				
				// oStringMask = new Mask("########");
				// oStringMask.attach(document.getElementById('tdi_teacher_personnel_number_'+b));
				
				$('.maxeight2').keydown( function(e){
				 var max_chars = 8;
					if ($(this).val().length >= 8) {
						$(this).val($(this).val().substr(0, max_chars));
					}
				});
				
				oStringMaskCnic = new Mask("#####-#######-#");
				oStringMaskCnic.attach(document.getElementById('tdi_teacher_cnic_'+b));
				
				oStringMaskphone = new Mask("####-#######");
				oStringMaskphone.attach(document.getElementById('tdi_teacher_number_'+b));
				
				oStringMaskbps = new Mask("###");
				oStringMaskbps.attach(document.getElementById('tdi_teacher_bps_'+b));
				
				$('.nonnegative2').filter(function() {
					return parseInt($(this).val(), 10) > 0;
				});

				$('.number2').keyup( function(e) {
						var $this = $(this);
						$this.val($this.val().replace(/[^\d.]/g, ''));
					
				});
				
				
				$('#datetimepicker_dob_'+b).datetimepicker({
					pickTime: false
				});
				
				$('#datetimepicker_doj_'+b).datetimepicker({
					pickTime: false
				});
				
				
			}
			var a = id-1;
			if(a == total_teachers)
			{
				// $('input[type="submit"]').removeAttr('disabled');			
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


$('.maxeight').keydown( function(e){
 var max_chars = 8;
	if ($(this).val().length >= 8) {
        $(this).val($(this).val().substr(0, max_chars));
    }
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

$('.maxfour').keydown( function(e){
 var max_chars = 4;
	if ($(this).val().length >= 4) {
        $(this).val($(this).val().substr(0, max_chars));
    }
});

$('.maxfour').keyup( function(e){
    var max_chars = 4;
	if ($(this).val().length >= 4) { 
        $(this).val($(this).val().substr(0, max_chars));
    }
});


$('.maxsix').keydown( function(e){
 var max_chars = 6;
	if ($(this).val().length >= 6) {
        $(this).val($(this).val().substr(0, max_chars));
    }
});

$('.maxsix').keyup( function(e){
    var max_chars = 6;
	if ($(this).val().length >= 6) { 
        $(this).val($(this).val().substr(0, max_chars));
    }
});


</script>

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
		
		
		$(document).ready(function() {
		  $(body).keydown(function(event){
			if(event.keyCode == 13) {
			  event.preventDefault();
			  return false;
			}
		  });
		});
	</script>