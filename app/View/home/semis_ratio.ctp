<?php 
	function ratio($a, $b) {
    
	if($a == 0 || $b ==0)
	{
		return $a.':'.$b;
	}else
	{
	
		$_a = round($a/$b);
   
		return $_a. ': 1';
	}
		
	}
?>

<?php if($page == 'page') { ?>
<script type="text/javascript">
		$(function() 
		{
		
			
			$('#report_button').click(function(){
				
				
				
				//var from_id = $('#ratio_from').val();
				var from_id = 0;
				//var to_id = $('#ratio_to').val();
				var to_id = 0;
				
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
										url: '<?php echo $this->webroot?>home/semis_ratio/report/'+from_id+'/'+to_id+'/'+district_id+'/'+tehsil_id+'/'+uc_id+'/'+level,
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
			
			//$('#ratio_from').change(function(){
			//	var from_id = $('#ratio_from').val();
			//	
			//	if(from_id == 1)
			//	{
			//		html = '<tr><td width="50%" >Ratios To for Students</td><td width="50%" ><select name="ratio_to" id="ratio_to"><option value="1" selected="selected">Teachers</option><option value="2" >Schools</option></select></td></tr>';
			//		$('#report_to').html('');
			//		$('#report_to').html(html);
			//		$('#report_to').show(2000);
			//	}
			//	
			//	if(from_id == 2)
			//	{
			//		html = '<tr><td width="50%" >Ratios To for Teachers</td><td width="50%" ><select name="ratio_to" id="ratio_to"><option value="1" selected="selected">Teachers</option><option value="2" >Schools</option></select></td></tr>';
			//		$('#report_to').html('');
			//		$('#report_to').html(html);
			//		$('#report_to').show(2000);
			//	}
			//	if(from_id == 3)
			//	{
			//		html = '<tr><td width="50%" >Ratios To for Schools</td><td width="50%" ><select name="ratio_to" id="ratio_to"><option value="1" selected="selected">Teachers</option><option value="2" >Schools</option></select></td></tr>';
			//		$('#report_to').html('');
			//		$('#report_to').html(html);
			//		$('#report_to').show(2000);
			//	}
			//	
			//	
			//});
			
			
			
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


<h1 style="text-align:center;">Summary Reports</h1>

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
<?php }

if($page == 'reportStudentTeacher')
{
if($download == 1)  
{
	?>
	<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="report" >
	<?php 
}else
{
	?>
	<tr><td><a href="<?php echo $this->webroot?>home/semis_ratio/<?php echo $reportlink; ?>/<?php echo $from_idlink; ?>/<?php echo $to_idlink; ?>/<?php echo $district_idlink; ?>/<?php echo $tehsil_idlink; ?>/<?php echo $uc_idlink; ?>/<?php echo $levellink; ?>/1">Download this Report</a></td></tr>
	<?php
}
?>
	<tr>
	<h1>Provincial Ratios</h1>
	</tr>
	<tr>
		<th>School Levels</th>
		<th>Number of Male Teachers</th>
		<th>Number of Female Teachers</th>
		<th>Number of Teachers</th>
		<th>Total Boys Enrollment</th>
		<th>Total Girls Enrollment</th>
		<th>Total Enrollment</th>
		<th>Number of Schools</th>
		<th>Student Teacher Ratio</th>
		<th>Student School Ratio</th>
		<th>Teacher School Ratio</th>
		<th>STR Female</th>
		<th>STR Male</th>
	</tr>
	<?php if(isset($ALLSchoolCount)) { ?>
	<tr>
		<td>Provincial</td>
		<td><?php echo $schoolTeachersAllMale; ?></td>
		<td><?php echo $schoolTeachersAllFemale; ?></td>
		<td><?php echo $schoolTeachersAll; ?></td>
		<td><?php echo $enrollmentAll[0][0]['total_enrollment_boys']; ?></td>
		<td><?php echo $enrollmentAll[0][0]['total_enrollment_girls']; ?></td>
		<td><?php echo $enrollmentAll[0][0]['total_enrollment_overall']; ?></td>
		<td><?php echo $ALLSchoolCount; ?></td>
		<td><?php echo ratio($enrollmentAll[0][0]['total_enrollment_overall'],$schoolTeachersAll); ?></td>
		<td><?php echo ratio($enrollmentAll[0][0]['total_enrollment_overall'],$ALLSchoolCount); ?></td>
		<td><?php echo ratio($schoolTeachersAll,$ALLSchoolCount); ?></td>
		<td><?php echo ratio($enrollmentAll[0][0]['total_enrollment_girls'],$schoolTeachersAllFemale); ?></td>
		<td><?php echo ratio($enrollmentAll[0][0]['total_enrollment_boys'],$schoolTeachersAllMale); ?></td>
	</tr>
	<?php } ?>
	<?php if(isset($DistrictSchoolCount)) { ?>
	<tr>
		<td>District</td>
		<td><?php echo $schoolTeachersDistrictMale; ?></td>
		<td><?php echo $schoolTeachersDistrictFemale; ?></td>
		<td><?php echo $schoolTeachersDistrict; ?></td>
		<td><?php echo $enrollmentDistrict[0][0]['total_enrollment_boys']; ?></td>
		<td><?php echo $enrollmentDistrict[0][0]['total_enrollment_girls']; ?></td>
		<td><?php echo $enrollmentDistrict[0][0]['total_enrollment_overall']; ?></td>
		<td><?php echo $DistrictSchoolCount; ?></td>
		<td><?php echo ratio($enrollmentDistrict[0][0]['total_enrollment_overall'],$schoolTeachersDistrict); ?></td>
		<td><?php echo ratio($enrollmentDistrict[0][0]['total_enrollment_overall'],$DistrictSchoolCount); ?></td>
		<td><?php echo ratio($schoolTeachersDistrict,$DistrictSchoolCount); ?></td>
		<td><?php echo ratio($enrollmentDistrict[0][0]['total_enrollment_girls'],$schoolTeachersDistrictFemale); ?></td>
		<td><?php echo ratio($enrollmentDistrict[0][0]['total_enrollment_boys'],$schoolTeachersDistrictMale); ?></td>
	</tr>
	<?php } ?>
	<?php if(isset($TehsilSchoolCount)) { ?>
	<tr>
		<td>Tehsil</td>
		<td><?php echo $schoolTeachersTehsilMale; ?></td>
		<td><?php echo $schoolTeachersTehsilFemale; ?></td>
		<td><?php echo $schoolTeachersTehsil; ?></td>
		<td><?php echo $enrollmentTehsil[0][0]['total_enrollment_boys']; ?></td>
		<td><?php echo $enrollmentTehsil[0][0]['total_enrollment_girls']; ?></td>
		<td><?php echo $enrollmentTehsil[0][0]['total_enrollment_overall']; ?></td>
		<td><?php echo $TehsilSchoolCount; ?></td>
		<td><?php echo ratio($enrollmentTehsil[0][0]['total_enrollment_overall'],$schoolTeachersTehsil); ?></td>
		<td><?php echo ratio($enrollmentTehsil[0][0]['total_enrollment_overall'],$TehsilSchoolCount); ?></td>
		<td><?php echo ratio($schoolTeachersTehsil,$TehsilSchoolCount); ?></td>
		<td><?php echo ratio($enrollmentTehsil[0][0]['total_enrollment_girls'],$schoolTeachersTehsilFemale); ?></td>
		<td><?php echo ratio($enrollmentTehsil[0][0]['total_enrollment_boys'],$schoolTeachersTehsilMale); ?></td>
	</tr>
	<?php } ?>
	<?php if(isset($UCSchoolCount)) { ?>
	<tr>
		<td>UC</td>
		<td><?php echo $schoolTeachersUCMale; ?></td>
		<td><?php echo $schoolTeachersUCFemale; ?></td>
		<td><?php echo $schoolTeachersUC; ?></td>
		<td><?php echo $enrollmentUC[0][0]['total_enrollment_boys']; ?></td>
		<td><?php echo $enrollmentUC[0][0]['total_enrollment_girls']; ?></td>
		<td><?php echo $enrollmentUC[0][0]['total_enrollment_overall']; ?></td>
		<td><?php echo $UCSchoolCount; ?></td>
		<td><?php echo ratio($enrollmentUC[0][0]['total_enrollment_overall'],$schoolTeachersUC); ?></td>
		<td><?php echo ratio($enrollmentUC[0][0]['total_enrollment_overall'],$UCSchoolCount); ?></td>
		<td><?php echo ratio($schoolTeachersUC,$UCSchoolCount); ?></td>
		<td><?php echo ratio($enrollmentUC[0][0]['total_enrollment_girls'],$schoolTeachersUCFemale); ?></td>
		<td><?php echo ratio($enrollmentUC[0][0]['total_enrollment_boys'],$schoolTeachersUCMale); ?></td>
	</tr>
	<?php } ?>
	<tr>
	<td colspan="13" style="background-color:#aaff00;text-align:center;" >Primary Schools</td>
	</tr>
	<tr>
		<td style="background-color:#00ff00;" >GBPS</td>
		<td style="background-color:#00ff00;" ><?php //echo $schoolTeachersGBPSMale; ?></td>
		<td style="background-color:#00ff00;" ><?php //echo $schoolTeachersGBPSFemale; ?></td>
		<td style="background-color:#00ff00;" ><?php echo $schoolTeachersGBPS; ?></td>
		<td style="background-color:#00ff00;" ><?php echo $enrollmentGBPS[0][0]['total_enrollment_boys']; ?></td>
		<td style="background-color:#00ff00;" ><?php echo $enrollmentGBPS[0][0]['total_enrollment_girls']; ?></td>
		<td style="background-color:#00ff00;" ><?php echo $enrollmentGBPS[0][0]['total_enrollment_overall']; ?></td>
		<td style="background-color:#00ff00;" ><?php echo $GBPSSchoolCount; ?></td>
		<td style="background-color:#00ff00;" ><?php echo ratio($enrollmentGBPS[0][0]['total_enrollment_overall'],$schoolTeachersGBPS); ?></td>
		<td style="background-color:#00ff00;" ><?php echo ratio($enrollmentGBPS[0][0]['total_enrollment_overall'],$GBPSSchoolCount); ?></td>
		<td style="background-color:#00ff00;" ><?php echo ratio($schoolTeachersGBPS,$GBPSSchoolCount); ?></td>
		<td style="background-color:#00ff00;" ><?php //echo ratio($enrollmentGBPS[0][0]['total_enrollment_girls'],$schoolTeachersGBPSFemale); ?></td>
		<td style="background-color:#00ff00;" ><?php //echo ratio($enrollmentGBPS[0][0]['total_enrollment_boys'],$schoolTeachersGBPSMale); ?></td>
	</tr>
	<tr>
		<td style="background-color:#00ff00;" >GGPS</td>
		<td style="background-color:#00ff00;" ><?php //echo $schoolTeachersGGPSMale; ?></td>
		<td style="background-color:#00ff00;" ><?php //echo $schoolTeachersGGPSFemale; ?></td>
		<td style="background-color:#00ff00;" ><?php echo $schoolTeachersGGPS; ?></td>
		<td style="background-color:#00ff00;" ><?php echo $enrollmentGGPS[0][0]['total_enrollment_boys']; ?></td>
		<td style="background-color:#00ff00;" ><?php echo $enrollmentGGPS[0][0]['total_enrollment_girls']; ?></td>
		<td style="background-color:#00ff00;" ><?php echo $enrollmentGGPS[0][0]['total_enrollment_overall']; ?></td>
		<td style="background-color:#00ff00;" ><?php echo $GGPSSchoolCount; ?></td>
		<td style="background-color:#00ff00;" ><?php echo ratio($enrollmentGGPS[0][0]['total_enrollment_overall'],$schoolTeachersGGPS); ?></td>
		<td style="background-color:#00ff00;" ><?php echo ratio($enrollmentGGPS[0][0]['total_enrollment_overall'],$GGPSSchoolCount); ?></td>
		<td style="background-color:#00ff00;" ><?php echo ratio($schoolTeachersGGPS,$GGPSSchoolCount); ?></td>
		<td style="background-color:#00ff00;" ><?php //echo ratio($enrollmentGGPS[0][0]['total_enrollment_girls'],$schoolTeachersGGPSFemale); ?></td>
		<td style="background-color:#00ff00;" ><?php //echo ratio($enrollmentGGPS[0][0]['total_enrollment_boys'],$schoolTeachersGGPSMale); ?></td>
	</tr>
	<tr>
		<td style="background-color:#4AA02C;" >Total Primary</td>
		<td style="background-color:#4AA02C;" ><?php //echo $schoolTeachersGBPSMale; ?></td>
		<td style="background-color:#4AA02C;" ><?php //echo $schoolTeachersGBPSFemale; ?></td>
		<td style="background-color:#4AA02C;" ><?php echo $schoolTeachersGBPS+$schoolTeachersGGPS; ?></td>
		<td style="background-color:#4AA02C;" ><?php echo $enrollmentGBPS[0][0]['total_enrollment_boys']+$enrollmentGGPS[0][0]['total_enrollment_boys']; ?></td>
		<td style="background-color:#4AA02C;" ><?php echo $enrollmentGBPS[0][0]['total_enrollment_girls']+$enrollmentGGPS[0][0]['total_enrollment_girls']; ?></td>
		<td style="background-color:#4AA02C;" ><?php echo $enrollmentGBPS[0][0]['total_enrollment_overall']+$enrollmentGGPS[0][0]['total_enrollment_overall']; ?></td>
		<td style="background-color:#4AA02C;" ><?php echo $GBPSSchoolCount+$GGPSSchoolCount; ?></td>
		<td style="background-color:#4AA02C;" ><?php echo ratio($enrollmentGBPS[0][0]['total_enrollment_overall']+$enrollmentGGPS[0][0]['total_enrollment_overall'],$schoolTeachersGBPS+$schoolTeachersGGPS); ?></td>
		<td style="background-color:#4AA02C;" ><?php echo ratio($enrollmentGBPS[0][0]['total_enrollment_overall']+$enrollmentGGPS[0][0]['total_enrollment_overall'],$GBPSSchoolCount+$GGPSSchoolCount); ?></td>
		<td style="background-color:#4AA02C;" ><?php echo ratio($schoolTeachersGBPS+$schoolTeachersGGPS,$GBPSSchoolCount+$GGPSSchoolCount); ?></td>
		<td style="background-color:#4AA02C;" ><?php //echo ratio($enrollmentGBPS[0][0]['total_enrollment_girls'],$schoolTeachersGBPSFemale); ?></td>
		<td style="background-color:#4AA02C;" ><?php //echo ratio($enrollmentGBPS[0][0]['total_enrollment_boys'],$schoolTeachersGBPSMale); ?></td>
	</tr>
	<tr>
	<td colspan="13" style="background-color:#F87431; text-align:center;" >Middle and Elementary Schools</td>
	</tr>
	<tr>
		<td style="background-color:#F88017;" >GBLSS</td>
		<td style="background-color:#F88017;" ><?php //echo $schoolTeachersGBLSSMale; ?></td>
		<td style="background-color:#F88017;" ><?php //echo $schoolTeachersGBLSSFemale; ?></td>
		<td style="background-color:#F88017;" ><?php echo $schoolTeachersGBLSS; ?></td>
		<td style="background-color:#F88017;" ><?php echo $enrollmentGBLSS[0][0]['total_enrollment_boys']; ?></td>
		<td style="background-color:#F88017;" ><?php echo $enrollmentGBLSS[0][0]['total_enrollment_girls']; ?></td>
		<td style="background-color:#F88017;" ><?php echo $enrollmentGBLSS[0][0]['total_enrollment_overall']; ?></td>
		<td style="background-color:#F88017;" ><?php echo $GBLSSSchoolCount; ?></td>
		<td style="background-color:#F88017;" ><?php echo ratio($enrollmentGBLSS[0][0]['total_enrollment_overall'],$schoolTeachersGBLSS); ?></td>
		<td style="background-color:#F88017;" ><?php echo ratio($enrollmentGBLSS[0][0]['total_enrollment_overall'],$GBLSSSchoolCount); ?></td>
		<td style="background-color:#F88017;" ><?php echo ratio($schoolTeachersGBLSS,$GBLSSSchoolCount); ?></td>
		<td style="background-color:#F88017;" ><?php //echo ratio($enrollmentGBLSS[0][0]['total_enrollment_girls'],$schoolTeachersGBLSSFemale); ?></td>
		<td style="background-color:#F88017;" ><?php //echo ratio($enrollmentGBLSS[0][0]['total_enrollment_boys'],$schoolTeachersGBLSSMale); ?></td>
	</tr>
	<tr>
		<td style="background-color:#F88017;" >GGLSS</td>
		<td style="background-color:#F88017;" ><?php //echo $schoolTeachersGGLSSMale; ?></td>
		<td style="background-color:#F88017;" ><?php //echo $schoolTeachersGGLSSFemale; ?></td>
		<td style="background-color:#F88017;" ><?php echo $schoolTeachersGGLSS; ?></td>
		<td style="background-color:#F88017;" ><?php echo $enrollmentGGLSS[0][0]['total_enrollment_boys']; ?></td>
		<td style="background-color:#F88017;" ><?php echo $enrollmentGGLSS[0][0]['total_enrollment_girls']; ?></td>
		<td style="background-color:#F88017;" ><?php echo $enrollmentGGLSS[0][0]['total_enrollment_overall']; ?></td>
		<td style="background-color:#F88017;" ><?php echo $GGLSSSchoolCount; ?></td>
		<td style="background-color:#F88017;" ><?php echo ratio($enrollmentGGLSS[0][0]['total_enrollment_overall'],$schoolTeachersGGLSS); ?></td>
		<td style="background-color:#F88017;" ><?php echo ratio($enrollmentGGLSS[0][0]['total_enrollment_overall'],$GGLSSSchoolCount); ?></td>
		<td style="background-color:#F88017;" ><?php echo ratio($schoolTeachersGGLSS,$GGLSSSchoolCount); ?></td>
		<td style="background-color:#F88017;" ><?php //echo ratio($enrollmentGGLSS[0][0]['total_enrollment_girls'],$schoolTeachersGGLSSFemale); ?></td>
		<td style="background-color:#F88017;" ><?php //echo ratio($enrollmentGGLSS[0][0]['total_enrollment_boys'],$schoolTeachersGGLSSMale); ?></td>
	</tr>
	<tr>
		<td style="background-color:#C35617;" >Total Middle</td>
		<td style="background-color:#C35617;" ><?php //echo $schoolTeachersGBLSSMale; ?></td>
		<td style="background-color:#C35617;" ><?php //echo $schoolTeachersGBLSSFemale; ?></td>
		<td style="background-color:#C35617;" ><?php echo $schoolTeachersGBLSS+$schoolTeachersGGLSS; ?></td>
		<td style="background-color:#C35617;" ><?php echo $enrollmentGBLSS[0][0]['total_enrollment_boys']+$enrollmentGGLSS[0][0]['total_enrollment_boys']; ?></td>
		<td style="background-color:#C35617;" ><?php echo $enrollmentGBLSS[0][0]['total_enrollment_girls']+$enrollmentGGLSS[0][0]['total_enrollment_girls']; ?></td>
		<td style="background-color:#C35617;" ><?php echo $enrollmentGBLSS[0][0]['total_enrollment_overall']+$enrollmentGGLSS[0][0]['total_enrollment_overall']; ?></td>
		<td style="background-color:#C35617;" ><?php echo $GBLSSSchoolCount+$GGLSSSchoolCount; ?></td>
		<td style="background-color:#C35617;" ><?php echo ratio($enrollmentGBLSS[0][0]['total_enrollment_overall']+$enrollmentGGLSS[0][0]['total_enrollment_overall'],$schoolTeachersGBLSS+$schoolTeachersGGLSS); ?></td>
		<td style="background-color:#C35617;" ><?php echo ratio($enrollmentGBLSS[0][0]['total_enrollment_overall']+$enrollmentGGLSS[0][0]['total_enrollment_overall'],$GBLSSSchoolCount+$GGLSSSchoolCount); ?></td>
		<td style="background-color:#C35617;" ><?php echo ratio($schoolTeachersGBLSS+$schoolTeachersGGLSS,$GBLSSSchoolCount+$GGLSSSchoolCount); ?></td>
		<td style="background-color:#C35617;" ><?php //echo ratio($enrollmentGBLSS[0][0]['total_enrollment_girls'],$schoolTeachersGBLSSFemale); ?></td>
		<td style="background-color:#C35617;" ><?php //echo ratio($enrollmentGBLSS[0][0]['total_enrollment_boys'],$schoolTeachersGBLSSMale); ?></td>
	</tr>
	<tr>
		<td style="background-color:#806517;" >GBELS</td>
		<td style="background-color:#806517;" ><?php //echo $schoolTeachersGBELSMale; ?></td>
		<td style="background-color:#806517;" ><?php //echo $schoolTeachersGBELSFemale; ?></td>
		<td style="background-color:#806517;" ><?php echo $schoolTeachersGBELS; ?></td>
		<td style="background-color:#806517;" ><?php echo $enrollmentGBELS[0][0]['total_enrollment_boys']; ?></td>
		<td style="background-color:#806517;" ><?php echo $enrollmentGBELS[0][0]['total_enrollment_girls']; ?></td>
		<td style="background-color:#806517;" ><?php echo $enrollmentGBELS[0][0]['total_enrollment_overall']; ?></td>
		<td style="background-color:#806517;" ><?php echo $GBELSSchoolCount; ?></td>
		<td style="background-color:#806517;" ><?php echo ratio($enrollmentGBELS[0][0]['total_enrollment_overall'],$schoolTeachersGBELS); ?></td>
		<td style="background-color:#806517;" ><?php echo ratio($enrollmentGBELS[0][0]['total_enrollment_overall'],$GBELSSchoolCount); ?></td>
		<td style="background-color:#806517;" ><?php echo ratio($schoolTeachersGBELS,$GBELSSchoolCount); ?></td>
		<td style="background-color:#806517;" ><?php //echo ratio($enrollmentGBELS[0][0]['total_enrollment_boys'],$schoolTeachersGBELSFemale); ?></td>
		<td style="background-color:#806517;" ><?php //echo ratio($enrollmentGBELS[0][0]['total_enrollment_girls'],$schoolTeachersGBELSMale); ?></td>
	</tr>
	<tr>
		<td style="background-color:#806517;" >GGELS</td>
		<td style="background-color:#806517;" ><?php //echo $schoolTeachersGGELSMale; ?></td>
		<td style="background-color:#806517;" ><?php //echo $schoolTeachersGGELSFemale; ?></td>
		<td style="background-color:#806517;" ><?php echo $schoolTeachersGGELS; ?></td>
		<td style="background-color:#806517;" ><?php echo $enrollmentGGELS[0][0]['total_enrollment_boys']; ?></td>
		<td style="background-color:#806517;" ><?php echo $enrollmentGGELS[0][0]['total_enrollment_girls']; ?></td>
		<td style="background-color:#806517;" ><?php echo $enrollmentGGELS[0][0]['total_enrollment_overall']; ?></td>
		<td style="background-color:#806517;" ><?php echo $GGELSSchoolCount; ?></td>
		<td style="background-color:#806517;" ><?php echo ratio($enrollmentGGELS[0][0]['total_enrollment_overall'],$schoolTeachersGGELS); ?></td>
		<td style="background-color:#806517;" ><?php echo ratio($enrollmentGGELS[0][0]['total_enrollment_overall'],$GGELSSchoolCount); ?></td>
		<td style="background-color:#806517;" ><?php echo ratio($schoolTeachersGGELS,$GGELSSchoolCount); ?></td>
		<td style="background-color:#806517;" ><?php //echo ratio($enrollmentGGELS[0][0]['total_enrollment_girls'],$schoolTeachersGGELSFemale); ?></td>
		<td style="background-color:#806517;" ><?php //echo ratio($enrollmentGGELS[0][0]['total_enrollment_boys'],$schoolTeachersGGELSMale); ?></td>
	</tr>
	<tr>
		<td style="background-color:#805817;" >Total Elementary</td>
		<td style="background-color:#805817;" ><?php //echo $schoolTeachersGBELSMale; ?></td>
		<td style="background-color:#805817;" ><?php //echo $schoolTeachersGBELSFemale; ?></td>
		<td style="background-color:#805817;" ><?php echo $schoolTeachersGBELS+$schoolTeachersGGELS; ?></td>
		<td style="background-color:#805817;" ><?php echo $enrollmentGBELS[0][0]['total_enrollment_boys']+$enrollmentGGELS[0][0]['total_enrollment_boys']; ?></td>
		<td style="background-color:#805817;" ><?php echo $enrollmentGBELS[0][0]['total_enrollment_girls']+$enrollmentGGELS[0][0]['total_enrollment_girls']; ?></td>
		<td style="background-color:#805817;" ><?php echo $enrollmentGBELS[0][0]['total_enrollment_overall']+$enrollmentGGELS[0][0]['total_enrollment_overall']; ?></td>
		<td style="background-color:#805817;" ><?php echo $GBELSSchoolCount+$GGELSSchoolCount; ?></td>
		<td style="background-color:#805817;" ><?php echo ratio($enrollmentGBELS[0][0]['total_enrollment_overall']+$enrollmentGGELS[0][0]['total_enrollment_overall'],$schoolTeachersGBELS+$schoolTeachersGGELS); ?></td>
		<td style="background-color:#805817;" ><?php echo ratio($enrollmentGBELS[0][0]['total_enrollment_overall']+$enrollmentGGELS[0][0]['total_enrollment_overall'],$GBELSSchoolCount+$GGELSSchoolCount); ?></td>
		<td style="background-color:#805817;" ><?php echo ratio($schoolTeachersGBELS+$schoolTeachersGGELS,$GBELSSchoolCount+$GGELSSchoolCount); ?></td>
		<td style="background-color:#805817;" ><?php //echo ratio($enrollmentGBELS[0][0]['total_enrollment_boys'],$schoolTeachersGBELSFemale); ?></td>
		<td style="background-color:#805817;" ><?php //echo ratio($enrollmentGBELS[0][0]['total_enrollment_girls'],$schoolTeachersGBELSMale); ?></td>
	</tr>
	<tr>
	<td colspan="13" style="background-color:#C8B560;text-align:center;" >High and Higher Secondary Schools</td>
	</tr>
	<tr>
		<td style="background-color:#ECD672;" >GBHS</td>
		<td style="background-color:#ECD672;" ><?php //echo $schoolTeachersGBHSMale; ?></td>
		<td style="background-color:#ECD672;" ><?php //echo $schoolTeachersGBHSFemale; ?></td>
		<td style="background-color:#ECD672;" ><?php echo $schoolTeachersGBHS; ?></td>
		<td style="background-color:#ECD672;" ><?php echo $enrollmentGBHS[0][0]['total_enrollment_boys']; ?></td>
		<td style="background-color:#ECD672;" ><?php echo $enrollmentGBHS[0][0]['total_enrollment_girls']; ?></td>
		<td style="background-color:#ECD672;" ><?php echo $enrollmentGBHS[0][0]['total_enrollment_overall']; ?></td>
		<td style="background-color:#ECD672;" ><?php echo $GBHSSchoolCount; ?></td>
		<td style="background-color:#ECD672;" ><?php echo ratio($enrollmentGBHS[0][0]['total_enrollment_overall'],$schoolTeachersGBHS); ?></td>
		<td style="background-color:#ECD672;" ><?php echo ratio($enrollmentGBHS[0][0]['total_enrollment_overall'],$GBHSSchoolCount); ?></td>
		<td style="background-color:#ECD672;" ><?php echo ratio($schoolTeachersGBHS,$GBHSSchoolCount); ?></td>
		<td style="background-color:#ECD672;" ><?php //echo ratio($enrollmentGBHS[0][0]['total_enrollment_girls'],$schoolTeachersGBHSFemale); ?></td>
		<td style="background-color:#ECD672;" ><?php //echo ratio($enrollmentGBHS[0][0]['total_enrollment_boys'],$schoolTeachersGBHSMale); ?></td>
	</tr>
	<tr>
		<td style="background-color:#ECD672;" >GGHS</td>
		<td style="background-color:#ECD672;" ><?php //echo $schoolTeachersGGHSMale; ?></td>
		<td style="background-color:#ECD672;" ><?php //echo $schoolTeachersGGHSFemale; ?></td>
		<td style="background-color:#ECD672;" ><?php echo $schoolTeachersGGHS; ?></td>
		<td style="background-color:#ECD672;" ><?php echo $enrollmentGGHS[0][0]['total_enrollment_boys']; ?></td>
		<td style="background-color:#ECD672;" ><?php echo $enrollmentGGHS[0][0]['total_enrollment_girls']; ?></td>
		<td style="background-color:#ECD672;" ><?php echo $enrollmentGGHS[0][0]['total_enrollment_overall']; ?></td>
		<td style="background-color:#ECD672;" ><?php echo $GGHSSchoolCount; ?></td>
		<td style="background-color:#ECD672;" ><?php echo ratio($enrollmentGGHS[0][0]['total_enrollment_overall'],$schoolTeachersGGHS); ?></td>
		<td style="background-color:#ECD672;" ><?php echo ratio($enrollmentGGHS[0][0]['total_enrollment_overall'],$GGHSSchoolCount); ?></td>
		<td style="background-color:#ECD672;" ><?php echo ratio($schoolTeachersGGHS,$GGHSSchoolCount); ?></td>
		<td style="background-color:#ECD672;" ><?php //echo ratio($enrollmentGGHS[0][0]['total_enrollment_girls'],$schoolTeachersGGHSFemale); ?></td>
		<td style="background-color:#ECD672;" ><?php //echo ratio($enrollmentGGHS[0][0]['total_enrollment_boys'],$schoolTeachersGGHSMale); ?></td>
	</tr>
	<tr>
		<td style="background-color:#C8B560;" >Total High School</td>
		<td style="background-color:#C8B560;" ><?php //echo $schoolTeachersGBHSMale; ?></td>
		<td style="background-color:#C8B560;" ><?php //echo $schoolTeachersGBHSFemale; ?></td>
		<td style="background-color:#C8B560;" ><?php echo $schoolTeachersGBHS+$schoolTeachersGGHS; ?></td>
		<td style="background-color:#C8B560;" ><?php echo $enrollmentGBHS[0][0]['total_enrollment_boys']+$enrollmentGGHS[0][0]['total_enrollment_boys']; ?></td>
		<td style="background-color:#C8B560;" ><?php echo $enrollmentGBHS[0][0]['total_enrollment_girls']+$enrollmentGGHS[0][0]['total_enrollment_girls']; ?></td>
		<td style="background-color:#C8B560;" ><?php echo $enrollmentGBHS[0][0]['total_enrollment_overall']+$enrollmentGGHS[0][0]['total_enrollment_overall']; ?></td>
		<td style="background-color:#C8B560;" ><?php echo $GBHSSchoolCount+$GGHSSchoolCount; ?></td>
		<td style="background-color:#C8B560;" ><?php echo ratio(($enrollmentGBHS[0][0]['total_enrollment_overall']+$enrollmentGGHS[0][0]['total_enrollment_overall']),$schoolTeachersGBHS+$schoolTeachersGGHS); ?></td>
		<td style="background-color:#C8B560;" ><?php echo ratio(($enrollmentGBHS[0][0]['total_enrollment_overall']+$enrollmentGGHS[0][0]['total_enrollment_overall']),$GBHSSchoolCount+$GGHSSchoolCount); ?></td>
		<td style="background-color:#C8B560;" ><?php echo ratio($schoolTeachersGBHS+$schoolTeachersGGHS,$GBHSSchoolCount+$GGHSSchoolCount); ?></td>
		<td style="background-color:#C8B560;" ><?php //echo ratio($enrollmentGBHS[0][0]['total_enrollment_girls'],$schoolTeachersGBHSFemale); ?></td>
		<td style="background-color:#C8B560;" ><?php //echo ratio($enrollmentGBHS[0][0]['total_enrollment_boys'],$schoolTeachersGBHSMale); ?></td>
	</tr>
	<tr>
		<td style="background-color:#ECD672;" >GBHSS</td>
		<td style="background-color:#ECD672;" ><?php //echo $schoolTeachersGBHSSMale; ?></td>
		<td style="background-color:#ECD672;" ><?php //echo $schoolTeachersGBHSSFemale; ?></td>
		<td style="background-color:#ECD672;" ><?php echo $schoolTeachersGBHSS; ?></td>
		<td style="background-color:#ECD672;" ><?php echo $enrollmentGBHSS[0][0]['total_enrollment_boys']; ?></td>
		<td style="background-color:#ECD672;" ><?php echo $enrollmentGBHSS[0][0]['total_enrollment_girls']; ?></td>
		<td style="background-color:#ECD672;" ><?php echo $enrollmentGBHSS[0][0]['total_enrollment_overall']; ?></td>
		<td style="background-color:#ECD672;" ><?php echo $GBHSSSchoolCount; ?></td>
		<td style="background-color:#ECD672;" ><?php echo ratio($enrollmentGBHSS[0][0]['total_enrollment_overall'],$schoolTeachersGBHSS); ?></td>
		<td style="background-color:#ECD672;" ><?php echo ratio($enrollmentGBHSS[0][0]['total_enrollment_overall'],$GBHSSSchoolCount); ?></td>
		<td style="background-color:#ECD672;" ><?php echo ratio($schoolTeachersGBHSS,$GBHSSSchoolCount); ?></td>
		<td style="background-color:#ECD672;" ><?php //echo ratio($enrollmentGBHSS[0][0]['total_enrollment_girls'],$schoolTeachersGBHSSFemale); ?></td>
		<td style="background-color:#ECD672;" ><?php //echo ratio($enrollmentGBHSS[0][0]['total_enrollment_boys'],$schoolTeachersGBHSSMale); ?></td>
	</tr>
	<tr>
		<td style="background-color:#ECD672;" >GGHSS</td>
		<td style="background-color:#ECD672;" ><?php //echo $schoolTeachersGGHSSMale; ?></td>
		<td style="background-color:#ECD672;" ><?php //echo $schoolTeachersGGHSSFemale; ?></td>
		<td style="background-color:#ECD672;" ><?php echo $schoolTeachersGGHSS; ?></td>
		<td style="background-color:#ECD672;" ><?php echo $enrollmentGGHSS[0][0]['total_enrollment_boys']; ?></td>
		<td style="background-color:#ECD672;" ><?php echo $enrollmentGGHSS[0][0]['total_enrollment_girls']; ?></td>
		<td style="background-color:#ECD672;" ><?php echo $enrollmentGGHSS[0][0]['total_enrollment_overall']; ?></td>
		<td style="background-color:#ECD672;" ><?php echo $GGHSSSchoolCount; ?></td>
		<td style="background-color:#ECD672;" ><?php echo ratio($enrollmentGGHSS[0][0]['total_enrollment_overall'],$schoolTeachersGGHSS); ?></td>
		<td style="background-color:#ECD672;" ><?php echo ratio($enrollmentGGHSS[0][0]['total_enrollment_overall'],$GGHSSSchoolCount); ?></td>
		<td style="background-color:#ECD672;" ><?php echo ratio($schoolTeachersGGHSS,$GGHSSSchoolCount); ?></td>
		<td style="background-color:#ECD672;" ><?php //echo ratio($enrollmentGGHSS[0][0]['total_enrollment_girls'],$schoolTeachersGGHSSFemale); ?></td>
		<td style="background-color:#ECD672;" ><?php //echo ratio($enrollmentGGHSS[0][0]['total_enrollment_boys'],$schoolTeachersGGHSSMale); ?></td>
	</tr>
	<tr>
		<td style="background-color:#C8B560;" >Total Higher Secondary Schools</td>
		<td style="background-color:#C8B560;" ><?php //echo $schoolTeachersGBHSSMale; ?></td>
		<td style="background-color:#C8B560;" ><?php //echo $schoolTeachersGBHSSFemale; ?></td>
		<td style="background-color:#C8B560;" ><?php echo $schoolTeachersGBHSS+$schoolTeachersGGHSS; ?></td>
		<td style="background-color:#C8B560;" ><?php echo $enrollmentGBHSS[0][0]['total_enrollment_boys']+$enrollmentGGHSS[0][0]['total_enrollment_boys']; ?></td>
		<td style="background-color:#C8B560;" ><?php echo $enrollmentGBHSS[0][0]['total_enrollment_girls']+$enrollmentGGHSS[0][0]['total_enrollment_girls']; ?></td>
		<td style="background-color:#C8B560;" ><?php echo $enrollmentGBHSS[0][0]['total_enrollment_overall']+$enrollmentGGHSS[0][0]['total_enrollment_overall']; ?></td>
		<td style="background-color:#C8B560;" ><?php echo $GBHSSSchoolCount+$GGHSSSchoolCount; ?></td>
		<td style="background-color:#C8B560;" ><?php echo ratio(($enrollmentGBHSS[0][0]['total_enrollment_overall']+$enrollmentGGHSS[0][0]['total_enrollment_overall']),($schoolTeachersGBHSS+$schoolTeachersGGHSS)); ?></td>
		<td style="background-color:#C8B560;" ><?php echo ratio(($enrollmentGBHSS[0][0]['total_enrollment_overall']+$enrollmentGGHSS[0][0]['total_enrollment_overall']),($GBHSSSchoolCount+$GGHSSSchoolCount)); ?></td>
		<td style="background-color:#C8B560;" ><?php echo ratio(($schoolTeachersGBHSS+$schoolTeachersGGHSS),($GBHSSSchoolCount+$GGHSSSchoolCount)); ?></td>
		<td style="background-color:#C8B560;" ><?php //echo ratio($enrollmentGBHSS[0][0]['total_enrollment_girls'],$schoolTeachersGBHSSFemale); ?></td>
		<td style="background-color:#C8B560;" ><?php //echo ratio($enrollmentGBHSS[0][0]['total_enrollment_boys'],$schoolTeachersGBHSSMale); ?></td>
	</tr>
<?php    
	if($download == 1)  
	{
	?>
	</table>
	<?php
	}
	
	} 
?>