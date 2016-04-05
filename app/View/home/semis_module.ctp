<script type="text/javascript">
	$(function() 
	{
		$('#report_button').click(function(){
			$('#report').empty();
			
			var x = 0;
			$('#report').html('<img src="<?php echo $this->webroot?>img/loading.gif">');
			var url = 'report';
			
			if ($('#district_code').length>0) {
				var district_id = $('#district_code').val();
				url = url+'/'+district_id;
				//alert('district if '+url);
			}else
			{
				url = url+'/'+x;
				//alert('district else '+url);
			}
			
			if ($('#tehsil_code').length>0) {
				var tehsil_code = $('#tehsil_code').val();
				url = url+'/'+tehsil_code;
				//alert('tehsil if '+url);
			}else
			{
				
				url = url+'/'+x;
				//alert('tehsil else '+url);
			}
			
			if ($('#union_council_id').length>0) {
				var union_council_id = $('#union_council_id').val();
				//alert(union_council_id);
				url = url+'/'+union_council_id;
				//alert('uc if '+url);
			}else
			{
				url = url+'/'+x;
				//alert('uc else '+url);
			}
			
				var rooms_cond = $('#rooms_cond').val();
				url = url+'/'+rooms_cond;
				var rooms = $('#rooms').val();
				url = url+'/'+rooms;
				//alert('rooms '+url);
			
				var enrollment_cond = $('#enrollment_cond').val();
				url = url+'/'+enrollment_cond;
				var enrollment = $('#enrollment').val();
				url = url+'/'+enrollment;
				//alert('enrollment '+url);
			
				var functionality = $('#functionality').val();
				url = url+'/'+functionality;
				//alert('functionality '+url);
				
				
				var teachers_cond = $('#teachers_cond').val();
				url = url+'/'+teachers_cond;
				var teachers = $('#teachers').val();
				url = url+'/'+teachers;
				
				//var download_report = $('#download_report').val();
				url = url+'/0';
				
				// Report Type
				var report_type = $('#report_type').val();
				url = url+'/'+report_type;
			
			//alert(url);
			//var url = '';
			
			$.ajax({
					        url: '<?php echo $this->webroot?>home/submit_semis_query/'+url,
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
	//var budget_at_completion = $('#cluster_code').val();
	
	//$.ajax({
      //      url: '<?php echo $this->webroot?>home/chart/'+id,
        //    type: "GET",
          //  cache: false,
          //  success: function (html) {
          //      $('.projectEdit').html('');
			//	$('#this_project'+id+'_edit').html(html);
            //    $('#this_project'+id+'_edit').show(2000);
			//},
            //error: function(xhr, ajaxOptions, thrownError){
            //}
        //});
	
	
</script>

<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="district" >
	<tr>
		<td width="100%" style="" colspan=2>
			<h1>Select Location</h1>
		</td>
	</tr>
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

<h1>Add Limits</h1>

<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="limits" >
	
	
	<tr>
	<th width="40%">Name of Condition</th>
	<th width="30%">Limit</th>
	<th width="30%">Limit Type</th>
	</tr>
	<tr>	
			<td width="40%">No. of Rooms</td>
			<td width="30%">
			<input type="text" value="0" name="rooms" id="rooms" />
			</td>
			<td width="30%">
			<select name="rooms_cond" id="rooms_cond">
				<option selected="selected" value="g">Greater Then</option>
				<option value="l">Less Then</option>
				<option value="e">Equal To</option>
			</select>
			</td>
			
	</tr>
	
	<tr>	
			<td width="40%">No. of Teachers</td>
			<td width="30%">
			<input type="text" value="0" name="teachers" id="teachers" />
			</td>
			<td width="30%">
			<select name="teachers_cond" id="teachers_cond">
				<option selected="selected" value="g">Greater Then</option>
				<option value="l">Less Then</option>
				<option value="e">Equal To</option>
			</select>
			</td>
			
	</tr>

	<tr>
			<td width="40%">Enrollment</td>
			<td width="30%">
			<input type="text" value="0" name="enrollment" id="enrollment" />
			</td>
			
			<td width="30%">
			<select name="enrollment_cond" id="enrollment_cond">
				<option selected="selected" value="g">Greater Then</option>
				<option value="l">Less Then</option>
				<option value="e">Equal To</option>
			</select>
			</td>
	</tr>

	<tr>
			<td width="40%">Functionality Status</td>
			<td width="30%">
			<select name="functionality" id="functionality">
				<option value="0">No Limit</option>
				<option value="1">Functional Only</option>
				<option value="2">Closed Only</option>
			</select>
			</td>
			<td width="30%">
			
			</td>
	</tr>
	<tr>
			<td width="40%">Report Type</td>
			<td width="30%">
			<select name="report_type" id="report_type">
				<option value="1">Summary</option>
				<option value="2">School List</option>
			</select>
			</td>
			<td width="30%">
			
			</td>
	</tr>
	
<tr>
<td></td>
<td><input id="report_button" type="submit" label="View Report" style="border-left: 1px solid #D6D6D6; border-right: 1px solid #D6D6D6;" /></td>
</tr>
</table>

<table border="2" cellpadding="0" cellspacing="0" class="grid_table wf" id="report" >
<tr><td><h1>This is the Section where Reports will show</h1></td><td></td></tr>
</table>