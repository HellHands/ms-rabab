<?php if(!isset($report)) { ?>
<script type="text/javascript">
		$(function() 
		{
			
			$('#report_button').click(function(){
				
				$('#report').html('<img src="<?php echo $this->webroot?>img/loading.gif">');
			
			
				var designation = $('#designation').val();
				var qualification = $('#qualification').val();
				var location = $('#location').val();
				
				if ($('#district_code').length>0) 
				{
					var district_id = $('#district_code').val();
					if ($('#tehsil_code').length>0) 
					{
						var tehsil_id = $('#tehsil_code').val();
						if ($('#union_council_id').length>0) 
						{
							var uc_id = $('#union_council_id').val();
							
							if(uc_id == 0)
							{
								var level = 'tehsil';
								
							}else
							{
								var level = 'uc';
							}
						}else
						{
							if(tehsil_id == 0)
							{
								var level = 'district';
							}else
							{
								var level = 'tehsil';
							}
							
							var uc_id = 0;
							
						}
					
					
					}else
					{
						
						var tehsil_id = 0;
						var uc_id = 0;
						
						
						if(district_id == 0)
						{
							var level = 'provincial';
						}else
						{
							var level = 'district';
						}
						
					}					
				}
					
					//alert('<?php echo $this->webroot?>home/semis_ratio/report/'+from_id+'/'+to_id+'/'+district_id+'/'+tehsil_id+'/'+uc_id+'/'+level);
			$.ajax({
						url: '<?php echo $this->webroot?>home/teachers_filter/report/0/'+designation+'/'+qualification+'/'+location,
						type: "GET",
						cache: false,
						success: function (html) {
						$('#report').html('');
						$('#report').html(html);
						$('#report').show(2000);
					},
					error: function(xhr, ajaxOptions, thrownError){
					}
					});
		
				
			});
			
			
			
			
			
			
			
			
			
			
			
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
											
											//$('#unioncouncil').append('<tr><td>Union Council</td><td><select name="tehsil" id="tehsil_code" ><option selected="selected" value="">All</option><?php foreach($union_councils as $unioncouncil) { ?><option value="<?php echo $unioncouncil['SemisCodeUc']['uc_id'];?>"><?php echo $unioncouncil["SemisCodeUc"]["uc_id"]?></option><?php } ?></td></tr>');
										}
														
									});
							
							
							
							},
							error: function(xhr, ajaxOptions, thrownError){
							}
						});
				}
				});
				});
</script>


<h1 style="text-align:center;">Teachers Filter</h1>
<?php /* ?>
<h2 style="text-align:center;"><u>Select Location</u></h2>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="district" >

	<tr><td width="50%">District</td>
		<td width="50%">
			<select name="district" id="district_code">
			<option selected="selected" value="0">All</option>
			<?php foreach($districts as $district) { ?>
				<option value="<?php echo $district['SemisCodeDistrict']['district_id']; ?>"><?php echo $district['SemisCodeDistrict']['district']; ?></option>
			<?php } ?>
		</td>
	</tr>
</table>
<?php */ ?>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="district" >
	<tr>
		<td>Designation</td>
		<td>
			<select name="designation" id="designation">
				<option selected="selected" value="All">All</option>
				<option value="0">No Info</option>
				<option value="1">PST</option>
				<option value="2">JST</option>
				<option value="3">HST</option>
				<option value="4">SS</option>
				<option value="5">SLT</option>
				<option value="6">OT</option>
				<option value="7">PTI</option>
				<option value="8">WIT</option>
				<option value="9">HM</option>
				<option value="10">Other</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Qualification</td>
		<td>
			<select name="qualification" id="qualification">
				<option selected="selected" value="All">All</option>
				<option value="101">PHD</option>
				<option value="102">M.Phil</option>
				<option value="100">All Doctorates</option>
				<option value="201">MA</option>
				<option value="202">M.Sc</option>
				<option value="203">M.Com</option>
				<option value="204">MSC</option>
				<option value="205">MS</option>
				<option value="206">MBA</option>
				<option value="207">Other Masters</option>
				<option value="200">All Masters</option>
				<option value="301">B.A</option>
				<option value="302">B.Sc.</option>
				<option value="303">BCom.</option>
				<option value="304">BCS.</option>
				<option value="305">BBA</option>
				<option value="306">LLB</option>
				<option value="307">B.E</option>
				<option value="308">B.Tech</option>
				<option value="309">Other Graduation</option>
				<option value="300">All Graduation</option>
				<option value="401">Inter(Arts)</option>
				<option value="402">Inter (Science)</option>
				<option value="403">Inter (Commerce)</option>
				<option value="404">DAE</option>
				<option value="404">All Inermediates</option>
				<option value="400">Other Under Graduates</option>
				<option value="501">Matric (Arts)</option>
				<option value="502">Matric (Science)</option>
				<option value="503">Matric (Commerce)</option>
				<option value="504">Matric (Technical)</option>
				<option value="505">Other Matric</option>
				<option value="500">All Matric</option>
				<option value="601">Middle</option>
				<option value="602">Primary Level Certificate</option>
				<option value="603">Other Under Matric</option>
				<option value="600">All Under Matric</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>By Location (of School Posted in)</td>
		<td>
			<select name="location" id="location">
				<option selected="selected" value="Both">All</option>
				<option value="0">Not Reported</option>
				<option value="1">Urban</option>
				<option value="2">Rural</option>
			</select>
		</td>
	</tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="tehsil" >
	
</table>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="unioncouncil" >
	
</table>

<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="report_for" >
	<tr>
	<td width="50%" >
	</td >
	<td width="50%" >
		<input id="report_button" type="submit" label="View Report" />
	</td>
	</tr>
</table>


<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="report" >
	<tr>
		<td>
			<h3 style="text-align:center;">The Reports would be shown here</h3>
		</td>
	</tr>
</table>
<?php }	?>



<?php 
	
	
	if(isset($report) && $report == "list")
	{
?>
	<?php if(isset($link))
		{
	?>
	<tr>
	<td colspan=18 ><a href="<?php echo $this->webroot?>home/teachers_filter/<?php echo $link?>">Download Report</a></td>
	</tr>
	<?php } ?>
	<?php if(isset($download))
		{
		?>
	<table border="1" cellpadding="0" cellspacing="0" class="grid_table wf" id="report" >	
	<?php } ?>
<tr>
<td colspan=6>Filters Used</td>
<td colspan=6></td>
<td colspan=6></td>
</tr>

<tr>
<td colspan=6>Designation of Teacher</td>
<td colspan=6>
		<?php	if($designation == "All") { echo "All"; } ?>
		<?php	if($designation == "0") { echo "No Info"; } ?>
		<?php	if($designation == "1") { echo "PST"; } ?>
		<?php	if($designation == "2") { echo "JST"; } ?>
		<?php	if($designation == "3") { echo "HST"; } ?>
		<?php	if($designation == "4") { echo "SS"; } ?>
		<?php	if($designation == "5") { echo "SLT"; } ?>
		<?php	if($designation == "6") { echo "OT"; } ?>
		<?php	if($designation == "7") { echo "PTI"; } ?>
		<?php	if($designation == "8") { echo "WIT"; } ?>
		<?php	if($designation == "9") { echo "HM"; } ?>
		<?php	if($designation == "10") { echo "Other"; } ?>
</td>
<td colspan=6></td>
</tr>

<tr>
<td colspan=6>Qualification of Teacher</td>
<td colspan=6>
	<?php if($qualification == "All") { echo "All"; } ?>
	<?php if($qualification == "101") { echo "PHD"; } ?>
	<?php if($qualification == "102") { echo "M.Phil"; } ?>
	<?php if($qualification == "100") { echo "All Doctorates"; } ?>
	<?php if($qualification == "201") { echo "MA"; } ?>
	<?php if($qualification == "202") { echo "M.Sc"; } ?>
	<?php if($qualification == "203") { echo "M.Com"; } ?>
	<?php if($qualification == "204") { echo "MSC"; } ?>
	<?php if($qualification == "205") { echo "MS"; } ?>
	<?php if($qualification == "206") { echo "MBA"; } ?>
	<?php if($qualification == "207") { echo "Other Masters"; } ?>
	<?php if($qualification == "200") { echo "All Masters"; } ?>
	<?php if($qualification == "301") { echo "B.A"; } ?>
	<?php if($qualification == "302") { echo "B.Sc."; } ?>
	<?php if($qualification == "303") { echo "BCom."; } ?>
	<?php if($qualification == "304") { echo "BCS"; } ?>
	<?php if($qualification == "305") { echo "BBA"; } ?>
	<?php if($qualification == "306") { echo "LLB"; } ?>
	<?php if($qualification == "307") { echo "B.E"; } ?>
	<?php if($qualification == "308") { echo "B.Tech"; } ?>
	<?php if($qualification == "309") { echo "Other Graduation"; } ?>
	<?php if($qualification == "300") { echo "All Graduates"; } ?>
	<?php if($qualification == "401") { echo "Inter(Arts)"; } ?>
	<?php if($qualification == "401") { echo "Inter (Science)"; } ?>
	<?php if($qualification == "401") { echo "Inter (Commerce)"; } ?>
	<?php if($qualification == "401") { echo "DAE"; } ?>
	<?php if($qualification == "401") { echo "Other Under Graduates"; } ?>
	<?php if($qualification == "400") { echo "All Under Graduates"; } ?>
	<?php if($qualification == "501") { echo "Matric (Arts)"; } ?>
	<?php if($qualification == "502") { echo "Matric (Science)"; } ?>
	<?php if($qualification == "503") { echo "Matric (Commerce)"; } ?>
	<?php if($qualification == "504") { echo "Matric (Technical)"; } ?>
	<?php if($qualification == "505") { echo "Other Matric"; } ?>
	<?php if($qualification == "500") { echo "All Matric"; } ?>
	<?php if($qualification == "601") { echo "Middle"; } ?>
	<?php if($qualification == "602") { echo "Primary Level Certificate"; } ?>
	<?php if($qualification == "603") { echo "Other Under Matric"; } ?>
	<?php if($qualification == "600") { echo "All Under Matric"; } ?>
</td>
<td colspan=6></td>
</tr>

<tr>
<td colspan=6>Location (of School Posted in)</td>
<td colspan=6>
	<?php if($location == "Both") { echo "All"; } ?>
	<?php if($location == "0") { echo "Not Reported"; } ?>
	<?php if($location == "1") { echo "Urban"; } ?>
	<?php if($location == "2") { echo "Rural"; } ?>
</td>
<td colspan=6></td>
</tr>


<tr><td colspan=18></td></tr>
<tr><td colspan=18></td></tr>
<tr><td colspan=18></td></tr>

<tr>
	<td style="background-color:#8B7355;">District (Domicile)</td>
	<td style="background-color:#8B7355;" colspan=2>No Info</td>
	<td style="background-color:#8B7355;" colspan=2>PTC</td>
	<td style="background-color:#8B7355;" colspan=2>CT</td>
	<td style="background-color:#8B7355;" colspan=2>B.Ed</td>
	<td style="background-color:#8B7355;" colspan=2>M.Ed</td>
	<td style="background-color:#8B7355;" colspan=2>Other</td>
	<td style="background-color:#8B7355;" colspan=2>Un-Trained</td>
	<td style="background-color:#8B7355;">Total Male</td>
	<td style="background-color:#8B7355;">Total Female</td>
	<td style="background-color:#8B7355;">Total</td>
</tr>	
<tr>
	<td style="background-color:#8B7355;"></td>
	<td style="background-color:#CDC8B1;">Male</td>
	<td style="background-color:#FF7F24;">Female</td>
	<td style="background-color:#CDC8B1;">Male</td>
	<td style="background-color:#FF7F24;">Female</td>
	<td style="background-color:#CDC8B1;">Male</td>
	<td style="background-color:#FF7F24;">Female</td>
	<td style="background-color:#CDC8B1;">Male</td>
	<td style="background-color:#FF7F24;">Female</td>
	<td style="background-color:#CDC8B1;">Male</td>
	<td style="background-color:#FF7F24;">Female</td>
	<td style="background-color:#CDC8B1;">Male</td>
	<td style="background-color:#FF7F24;">Female</td>
	<td style="background-color:#CDC8B1;">Male</td>
	<td style="background-color:#FF7F24;">Female</td>
	<td style="background-color:#CDC8B1;">Male</td>
	<td style="background-color:#FF7F24;">Female</td>
	<td style="background-color:#8B7355;">Total</td>
</tr>	
<tr>
<td style="background-color:#8B7355;"><?php echo $query_final[0]['SemisCodeDistrict']['district']; ?></td>
<?php $this_district = $query_final[0]['SemisCodeDistrict']['district'];
		$total_teachers_no_info_male = 0;
		$total_teachers_no_info_female = 0;
		$total_teachers_ptc_male = 0;
		$total_teachers_ptc_female = 0;
		$total_teachers_ct_male = 0;
		$total_teachers_ct_female = 0;
		$total_teachers_bed_male = 0;
		$total_teachers_bed_female = 0;
		$total_teachers_med_male = 0;
		$total_teachers_med_female = 0;
		$total_teachers_other_male = 0;
		$total_teachers_other_female = 0;
		$total_teachers_untrained_male = 0;
		$total_teachers_untrained_female = 0;
		$row_male_sum = 0;
		$row_female_sum = 0;
		$row_sum = 0;
		$total_row_male_sum = 0;
		$total_row_female_sum = 0;
		$total_row_sum = 0;
		$td =0;
		
		$x = 0;
		foreach($query_final as $teacher_training) { ?>
<?php if($this_district != $teacher_training['SemisCodeDistrict']['district']) { 
	$this_district = $teacher_training['SemisCodeDistrict']['district'];
	if($td != 14)
		{
			if($td == 0) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 1) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 2) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 3) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 4) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 5) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 6) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 7) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 8) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 9) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 10) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 11) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 12) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 13) { echo "<td style='background-color:#FF7F24;'></td>"; }
		}
		$td = 0;
?>
<td style="background-color:#CDC8B1;" ><?php echo $row_male_sum; ?></td>
<td style="background-color:#FF7F24;" ><?php echo $row_female_sum; ?></td>
<td style="background-color:#8B7355;" ><?php echo $row_sum; ?></td>
<?php
	$total_row_male_sum += $row_male_sum;
	$total_row_female_sum += $row_female_sum;
	$total_row_sum += $row_sum;
		
	
	$row_male_sum = 0;
	$row_female_sum = 0;
	$row_sum = 0;
?>

</tr>
<tr>
<td style="background-color:#8B7355;"><?php echo $teacher_training['SemisCodeDistrict']['district'];  ?></td>
<?php } ?>
		
		<!--Teachers with No Info of Trainings-->
		<?php if($teacher_training['SemisTeachers2010']['training_id'] == 0) { ?>
		<?php if($teacher_training['SemisTeachers2010']['gender_id'] == 1) { 
		$td = 1; 
		?>
		<td style="background-color:#CDC8B1;"><?php echo $teacher_training[0]['count']; 
		$total_teachers_no_info_male += $teacher_training[0]['count'];
		$row_male_sum += $teacher_training[0]['count'];
		$row_sum += $teacher_training[0]['count'];
		?></td>
		<?php }elseif($teacher_training['SemisTeachers2010']['gender_id'] == 2) { 
		if($td != 1)
		{
			if($td == 0) { echo "<td style='background-color:#CDC8B1;'></td>"; }
		}
		$td = 2; 
		?>
		<td style="background-color:#FF7F24;"><?php echo $teacher_training[0]['count']; 
		$total_teachers_no_info_female += $teacher_training[0]['count'];
		$row_female_sum += $teacher_training[0]['count'];
		$row_sum += $teacher_training[0]['count'];
		?></td>
		<?php } ?>
		<?php } ?>
		
		
		<!--Teachers with PTC of Trainings-->
		<?php if($teacher_training['SemisTeachers2010']['training_id'] == 1) { ?>
		<?php if($teacher_training['SemisTeachers2010']['gender_id'] == 1) { 
		if($td != 2)
		{
			if($td == 0) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 1) { echo "<td style='background-color:#FF7F24;'></td>"; }
		}
		$td = 3; 
		
		?>
		<td style="background-color:#CDC8B1;"><?php echo $teacher_training[0]['count']; 
		$total_teachers_ptc_male += $teacher_training[0]['count'];
		$row_male_sum += $teacher_training[0]['count'];
		$row_sum += $teacher_training[0]['count'];
		?></td>
		<?php }elseif($teacher_training['SemisTeachers2010']['gender_id'] == 2) { 
		if($td != 3)
		{
			if($td == 0) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 1) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 2) { echo "<td style='background-color:#CDC8B1;'></td>"; }
		}
		$td = 4; 
		?>
		<td style="background-color:#FF7F24;"><?php echo $teacher_training[0]['count']; 
		$total_teachers_ptc_female += $teacher_training[0]['count'];
		$row_female_sum += $teacher_training[0]['count'];
		$row_sum += $teacher_training[0]['count'];
		?></td>
		<?php } ?>
		<?php } ?>
		
		<!--Teachers with CT of Trainings-->
		<?php if($teacher_training['SemisTeachers2010']['training_id'] == 2) { ?>
		<?php if($teacher_training['SemisTeachers2010']['gender_id'] == 1) { 
		if($td != 4)
		{
			if($td == 0) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 1) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 2) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 3) { echo "<td style='background-color:#FF7F24;'></td>"; }
		}
		$td = 5; 
		?>
		<td style="background-color:#CDC8B1;"><?php echo $teacher_training[0]['count']; 
		$total_teachers_ct_male += $teacher_training[0]['count'];
		$row_male_sum += $teacher_training[0]['count'];
		$row_sum += $teacher_training[0]['count'];
		?></td>
		<?php }elseif($teacher_training['SemisTeachers2010']['gender_id'] == 2) { 
		if($td != 5)
		{
			if($td == 0) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 1) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 2) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 3) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 4) { echo "<td style='background-color:#CDC8B1;'></td>"; }
		}
		$td = 6; 
		?>
		<td style="background-color:#FF7F24;"><?php echo $teacher_training[0]['count']; 
		$total_teachers_ct_female += $teacher_training[0]['count'];
		$row_female_sum += $teacher_training[0]['count'];
		$row_sum += $teacher_training[0]['count'];
		?></td>
		<?php } ?>
		<?php } ?>
		
		
		<!--Teachers with PTC of Trainings-->
		<?php if($teacher_training['SemisTeachers2010']['training_id'] == 3) { ?>
		<?php if($teacher_training['SemisTeachers2010']['gender_id'] == 1) { 
		if($td != 6)
		{
			if($td == 0) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 1) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 2) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 3) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 4) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 5) { echo "<td style='background-color:#FF7F24;'></td>"; }
		}
		$td = 7; 
		?>
		<td style="background-color:#CDC8B1;"><?php echo $teacher_training[0]['count']; 
		$total_teachers_bed_male += $teacher_training[0]['count'];
		$row_male_sum += $teacher_training[0]['count'];
		$row_sum += $teacher_training[0]['count'];
		?></td>
		<?php }elseif($teacher_training['SemisTeachers2010']['gender_id'] == 2) { 
		if($td != 7)
		{
			if($td == 0) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 1) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 2) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 3) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 4) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 5) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 6) { echo "<td style='background-color:#CDC8B1;'></td>"; }
		}
		$td = 8; 
		?>
		<td style="background-color:#FF7F24;"><?php echo $teacher_training[0]['count']; 
		$total_teachers_bed_female += $teacher_training[0]['count'];
		$row_female_sum += $teacher_training[0]['count'];
		$row_sum += $teacher_training[0]['count'];
		?></td>
		<?php } ?>
		<?php } ?>
		
		
		<!--Teachers with  of Trainings-->
		<?php if($teacher_training['SemisTeachers2010']['training_id'] == 4) { ?>
		<?php if($teacher_training['SemisTeachers2010']['gender_id'] == 1) { 
		if($td != 8)
		{
			if($td == 0) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 1) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 2) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 3) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 4) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 5) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 6) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 7) { echo "<td style='background-color:#FF7F24;'></td>"; }
		}
		$td = 9; 
		?>
		<td style="background-color:#CDC8B1;"><?php echo $teacher_training[0]['count']; 
		$total_teachers_med_male += $teacher_training[0]['count'];
		$row_male_sum += $teacher_training[0]['count'];
		$row_sum += $teacher_training[0]['count'];
		?></td>
		<?php }elseif($teacher_training['SemisTeachers2010']['gender_id'] == 2) { 
		if($td != 9)
		{
			if($td == 0) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 1) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 2) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 3) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 4) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 5) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 6) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 7) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 8) { echo "<td style='background-color:#CDC8B1;'></td>"; }
		}
		$td = 10; 
		?>
		<td style="background-color:#FF7F24;"><?php echo $teacher_training[0]['count']; 
		$total_teachers_med_female += $teacher_training[0]['count'];
		$row_female_sum += $teacher_training[0]['count'];
		$row_sum += $teacher_training[0]['count'];
		?></td>
		<?php } ?>
		<?php } ?>
		
		
		<!--Teachers with  of Trainings-->
		<?php if($teacher_training['SemisTeachers2010']['training_id'] == 5) { ?>
		<?php if($teacher_training['SemisTeachers2010']['gender_id'] == 1) { 
		if($td != 10)
		{
			if($td == 0) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 1) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 2) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 3) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 4) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 5) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 6) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 7) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 8) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 9) { echo "<td style='background-color:#FF7F24;'></td>"; }
		}
		$td = 11; 
		?>
		<td style="background-color:#CDC8B1;"><?php echo $teacher_training[0]['count']; 
		$total_teachers_other_male += $teacher_training[0]['count'];
		$row_male_sum += $teacher_training[0]['count'];
		$row_sum += $teacher_training[0]['count'];
		?></td>
		<?php }elseif($teacher_training['SemisTeachers2010']['gender_id'] == 2) { 
		if($td != 11)
		{
			if($td == 0) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 1) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 2) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 3) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 4) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 5) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 6) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 7) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 8) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 9) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 10) { echo "<td style='background-color:#CDC8B1;'></td>"; }
		}
		$td = 12; 
		?>
		<td style="background-color:#FF7F24;"><?php echo $teacher_training[0]['count']; 
		$total_teachers_other_female += $teacher_training[0]['count'];
		$row_female_sum += $teacher_training[0]['count'];
		$row_sum += $teacher_training[0]['count'];
		?></td>
		<?php } ?>
		<?php } ?>
		
		
		<!--Teachers with  of Trainings-->
		<?php if($teacher_training['SemisTeachers2010']['training_id'] == 6) { ?>
		<?php if($teacher_training['SemisTeachers2010']['gender_id'] == 1) { 
		if($td != 12)
		{
			if($td == 0) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 1) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 2) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 3) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 4) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 5) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 6) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 7) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 8) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 9) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 10) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
			if($td == 11) { echo "<td style='background-color:#FF7F24;'></td>"; }
		}
		$td = 13; 
		?>
		<td style="background-color:#CDC8B1;"><?php echo $teacher_training[0]['count']; 
		$total_teachers_untrained_male += $teacher_training[0]['count'];
		$row_male_sum += $teacher_training[0]['count'];
		$row_sum += $teacher_training[0]['count'];
		?></td>
		<?php }elseif($teacher_training['SemisTeachers2010']['gender_id'] == 2) { 
		if($td != 13)
		{
			if($td == 0) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 1) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 2) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 3) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 4) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 5) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 6) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 7) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 8) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 9) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 10) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 11) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td>"; }
			if($td == 12) { echo "<td style='background-color:#CDC8B1;'></td>"; }
		}
		$td = 14; 
		?>
		<td style="background-color:#FF7F24;"><?php echo $teacher_training[0]['count']; 
		$total_teachers_untrained_female += $teacher_training[0]['count'];
		$row_female_sum += $teacher_training[0]['count'];
		$row_sum += $teacher_training[0]['count'];
		?></td>
		<?php } ?>
		<?php } ?>
		
		
		<?php	} ?>
		
		
		<?php 
			if($td != 14)
			{
				if($td == 0) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
				if($td == 1) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
				if($td == 2) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
				if($td == 3) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
				if($td == 4) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
				if($td == 5) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
				if($td == 6) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
				if($td == 7) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
				if($td == 8) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
				if($td == 9) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
				if($td == 10) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
				if($td == 11) { echo "<td style='background-color:#FF7F24;'></td><td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
				if($td == 12) { echo "<td style='background-color:#CDC8B1;'></td><td style='background-color:#FF7F24;'></td>"; }
				if($td == 13) { echo "<td style='background-color:#FF7F24;'></td>"; }
			}
		?>
		
		<td style="background-color:#CDC8B1;" ><?php echo $row_male_sum; ?></td>
		<td style="background-color:#FF7F24;" ><?php echo $row_female_sum; ?></td>
		<td style="background-color:#8B7355;" ><?php echo $row_sum; ?></td><?php
			$total_row_male_sum += $row_male_sum;
			$total_row_female_sum += $row_female_sum;
			$total_row_sum += $row_sum;
				
			
			$row_male_sum = 0;
			$row_female_sum = 0;
			$row_sum = 0;
		?>

		
		</tr>
		<tr>
		<td style="background-color:#8B7355;">Total</td>
		<td style="background-color:#8B7355;"><?php echo $total_teachers_no_info_male; ?></td>
		<td style="background-color:#8B7355;"><?php echo $total_teachers_no_info_female; ?></td>
		<td style="background-color:#8B7355;"><?php echo $total_teachers_ptc_male; ?></td>
		<td style="background-color:#8B7355;"><?php echo $total_teachers_ptc_female; ?></td>
		<td style="background-color:#8B7355;"><?php echo $total_teachers_ct_male; ?></td>
		<td style="background-color:#8B7355;"><?php echo $total_teachers_ct_female; ?></td>
		<td style="background-color:#8B7355;"><?php echo $total_teachers_bed_male; ?></td>
		<td style="background-color:#8B7355;"><?php echo $total_teachers_bed_female; ?></td>
		<td style="background-color:#8B7355;"><?php echo $total_teachers_med_male; ?></td>
		<td style="background-color:#8B7355;"><?php echo $total_teachers_med_female; ?></td>
		<td style="background-color:#8B7355;"><?php echo $total_teachers_other_male; ?></td>
		<td style="background-color:#8B7355;"><?php echo $total_teachers_other_female; ?></td>
		<td style="background-color:#8B7355;"><?php echo $total_teachers_untrained_male; ?></td>
		<td style="background-color:#8B7355;"><?php echo $total_teachers_untrained_female; ?></td>
		<td style="background-color:#8B7355;"><?php echo $total_row_male_sum; ?></td>
		<td style="background-color:#8B7355;"><?php echo $total_row_female_sum; ?></td>
		<td style="background-color:#8B7355;"><?php echo $total_row_sum; ?></td>
		</tr>

		<?php if(isset($download))
		{
		?>
		</table>	
		<?php } ?>
		
		<?php	} ?>