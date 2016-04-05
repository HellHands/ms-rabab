<?php
if($type == "filters")
{
 
												/***************************************/
												/***************************************/
												/***************************************/
															//for Filters//
												/***************************************/
												/***************************************/
												/***************************************/
?>
<script type="text/javascript">
$(function() 
		{
			
			$('#report_button').click(function(){
				
				$('#report').html('<img src="<?php echo $this->webroot?>img/loading.gif">');
			
			
				var no_of_school = $('#no_of_school').val();
				var district = $('#district').val();
				var type = $('#type').val();
				var gender = $('#gender').val();
				var teachers_limit = $('#teachers_limit').val();
				var enrollment_limit = $('#enrollment_limit').val();
				var library = $('#library').val();
				var pground = $('#pground').val();
				
				
				$.ajax({
						url: '<?php echo $this->webroot?>home/hub_school/report/'+no_of_school+'/'+type+'/'+gender+'/'+district+'/'+teachers_limit+'/'+enrollment_limit+'/'+library+'/'+pground+'/0',
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
		});
</script>

<h1 style="text-align:center;">HUB School List Generation Query</h1>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="filters" >
	<tr>
		<td>District</td>
		<td>
			<select name="district" id="district">
				<option selected="selected" value="all" >All</option>
				<?php foreach($districts as $district) { ?>
				<option value="<?php echo $district['SemisCodeDistrict']['district_id']; ?>" ><?php echo $district['SemisCodeDistrict']['district']; ?></option>
				<?php } ?>
			</select>
		</td>
	</tr>
	<tr>
		<td>No of Schools (from each UC)</td>
		<td>
			<select name="no_of_school" id="no_of_school">
				<option value="1">1</option>
				<option selected="selected" value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Type (level) of Schools</td>
		<td>
			<select name="type" id="type">
				<option selected="selected" value="All">All</option>
				<option value="primary">Primary</option>
				<option value="middle">Middle</option>
				<option value="elementary">Elementary</option>
				<option value="high">High School</option>
				<option value="highsec">Higher Secondary School</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Gender of School</td>
		<td>
			<select name="gender" id="gender">
				<option selected="selected" value="All">All</option>
				<option value="boys">Boys</option>
				<option value="girls">Girls</option>
				<option value="mixed">Mixed</option>
			</select>
		</td>
	</tr>
	
	<tr>
		<td>Teachers (More than)</td>
		<td>
			<select name="teachers_limit" id="teachers_limit">
				<option selected="selected" value="0">No filter</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
		</td>
	</tr>
	
	<tr>
		<td>Enrollment (Equal to or More than)</td>
		<td>
			<select name="enrollment_limit" id="enrollment_limit">
				<option selected="selected" value="nf">No Filter</option>
				<option value="149">150</option>
				<option value="199">200</option>
				<option value="249">250</option>
				<option value="299">300</option>
				<option value="349">350</option>
				<option value="399">400</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Library</td>
		<td>
			<select name="library" id="library">
				<option selected="selected" value="nf">No Filter</option>
				<option value="1">Available</option>
				<option value="2">Not Available</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Play Ground</td>
		<td>
			<select name="pground" id="pground">
				<option selected="selected" value="nf">No Filter</option>
				<option value="1">Available</option>
				<option value="2">Not Available</option>
			</select>
		</td>
	</tr>
	
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
<?php
}
?>

<?php 
												/***************************************/
												/***************************************/
												/***************************************/
												  //for Query Downloading and viewing//
												/***************************************/
												/***************************************/
												/***************************************/

												
	if($type == "report")
	{
		if($download == 1)
		{
			echo '<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="report" >';
		}else
		{
			echo "<tr><td colspan=13><a href='".$this->webroot."home/hub_school/".$type."/".$no_of_schools."/".$school_level."/".$gender."/".$district_id."/".$teachers_limit."/".$enrollment_limit."/".$library."/".$pground."/1'>Download The Report</a></td></tr>";
		}
			
		?>	
		
		<tr>
		<th>District</th>
		<th>Tehsil</th>
		<th>Union Council</th>
		<th>School Name</th>
		<th>School Level</th>
		<th>School Gender</th>
		<th>Classrooms</th>
		<th>Total Teachers</th>
		<th>Students Male</th>
		<th>Students Female</th>
		<th>Total Students</th>
		<th>Library Available</th>
		<th>PlayGround Available</th>
		</tr>
		
		<?php 
		$this_uc = $schools_list[1]['uc'];
		echo "<tr><td colspan=3 style='background-color:#E7E7E7;'>".$this_uc."</td><td colspan=10 style='background-color:#E7E7E7;'></td></tr>";
		$x = 1;
		foreach($schools_list as $school)
		{
		if($this_uc != $school['uc'])
		{
			echo "<tr><td colspan=3 style='background-color:#E7E7E7;'>".$school['uc']."</td><td colspan=10 style='background-color:#E7E7E7;'></td></tr>";
		}
		if(!empty($school['schools']))
		{
		foreach($school['schools'] as $school_uc)
		{
		?>
			<tr>
			<td><?php echo $school_uc['semisCodesDistrictTehsil']['district']; ?></td>
			<td><?php echo $school_uc['semisCodesDistrictTehsil']['tehsil']; ?></td>
			<td><?php echo $school_uc['SemisCodeUc']['uc_name']; ?></td>
			<td><?php echo $school_uc['semisUniversal2010']['prefix'].' - '.$school_uc['semisUniversal2010']['school_name']; ?></td>
			<td><?php if($school_uc['semisUniversal2010']['gender_id'] == 1) { echo "Boys"; }elseif($school_uc['semisUniversal2010']['gender_id'] == 2) { echo "Girls"; }elseif($school_uc['semisUniversal2010']['gender_id'] == 3) { echo "Mixed"; }   ?></td>
			<td><?php if($school_uc['semisUniversal2010']['level_id'] == 1) { echo "Primary"; }elseif($school_uc['semisUniversal2010']['level_id'] == 2) { echo "Middle"; }elseif($school_uc['semisUniversal2010']['level_id'] == 3) { echo "Elementary"; }elseif($school_uc['semisUniversal2010']['level_id'] == 4) { echo "High"; }elseif($school_uc['semisUniversal2010']['level_id'] == 5) { echo "Higher Secondary"; }   ?></td>
			<td><?php echo $school_uc['semisUniversal2010']['no_of_classroom']; ?></td>
			<!--td><?php //echo count($school_uc['SemisTeachers2010']); ?></td-->
			<td><?php echo $school_uc['semisUniversal2010']['total_teachers']; ?></td>
			<td><?php echo $school_uc['SemisEnrollment2010']['boys_total_enrollment']; ?></td>
			<td><?php echo $school_uc['SemisEnrollment2010']['girls_total_enrollment']; ?></td>
			<td><?php echo $school_uc['SemisEnrollment2010']['total_enrollment']; ?></td>
			<td><?php if($school_uc['semisUniversal2010']['library'] == 1) { echo "Yes"; }elseif($school_uc['semisUniversal2010']['library'] == 2) { echo "No"; } ?></td>
			<td><?php if($school_uc['semisUniversal2010']['pground'] == 1) { echo "Yes"; }elseif($school_uc['semisUniversal2010']['pground'] == 2) { echo "No"; } ?></td>
			</tr>
			
		<?php 
		} }
		} 
		?>
		<?php	
					
		if($download == 1)
		{
			echo "</table>";
		}
	}						
?>