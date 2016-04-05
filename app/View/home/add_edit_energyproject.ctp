<script type="text/javascript">

		$(function() 
		{
			
			$('#report_button').click(function(){
				
				$('#report').html('');
				
				//var from_id = $('#ratio_from').val();
				var from_id = 0;
				//var to_id = $('#ratio_to').val();
				var to_id = 0;
				
				var download = $('#download').val();
				
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
					// $.ajax({
										// url: '<?php echo $this->webroot?>home/uc_based_query/report/'+district_id+'/'+tehsil_id+'/'+uc_id+'/'+level+'/0',
										// type: "GET",
										// cache: false,
										// success: function (html) {
										// $('#report').html('');
										// $('#report').html(html);
							// },
							// error: function(xhr, ajaxOptions, thrownError){
							// }
							// });
							var url = '<?php echo $this->webroot?>home/uc_based_query/report/'+district_id+'/'+tehsil_id+'/'+uc_id+'/'+level+'/0';
							window.open(url,'_blank');
				
				
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

<?php
$id = 1;
?>

<form name="new_classroom_observation" id="new_classroom_observation" action="<?php echo $this->webroot?>home/add_edit_energyproject/<?php echo $id; ?>/update" method="post">

<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="district" >

	<tr><td width="50%">District</td>
		<td width="50%">
			<select name="district" id="district_code">
			<option selected="selected" value="0">All</option>
			<?php foreach($districts as $district) { ?>
				<option value="<?php echo $district['SemisCodeDistrict']['district_id']; ?>"><?php echo $district['SemisCodeDistrict']['district']; ?></option>
			<?php } ?>
			</select>
		</td>
	</tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="tehsil" >
	
</table>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="unioncouncil" >
	
</table>

<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="data" >
		<tr>
		<th>Funding Source</th>
		<th id="selectorseparate" rowspan="1" colspan="1">
		<select style="vertical-align:middle;" name="funding_source" >
			<option value="Production Bonus">Production Bonus</option>
			<option value="Marine Research &amp; Coastal Development Fee">Marine Research &amp; Coastal Development Fee</option>
			<option value="Social Welfare Obligations">Social Welfare Obligations</option><option value="10% Share of Royalty">10% Share of Royalty</option>
		</select>
		</th>
		</tr>
		
		<tr>
		<th>Scheme Type</th>
		<th>
			<select style="vertical-align:middle;" name="scheme_type" >
			<option value="New">New</option>
			<option value="Existing">Existing</option>
		</select>
		</th>
		</tr>
		
		<tr>
		<th>Name of E&P Company</th>
		<th>
			<select style="vertical-align:middle;" name="name_enp_company" >
			<option value="PPL">PPL</option>
			<option value="OGDCL">OGDCL</option>
			<option value="ENI">ENI</option>
			<option value="UEP">UEP</option>
		</select>
		</th>
		</tr>
		
		<tr>
		<th>Name of Sector</th>
		<th>
			<select style="vertical-align:middle;" name="name_sector" >
			<option value="Health">Health</option>
			<option value="Education">Education</option>
			<option value="Irrigation">Irrigation</option>
		</select>
		</th>
		</tr>
		
		<tr>
		<th>Policy Area of Interaction</th>
		<th>
			<select style="vertical-align:middle;" name="policy_areas_of_interaction" >
			<option value="Health">Health</option>
			<option value="Education">Education</option>
			<option value="Irrigation">Irrigation</option>
		</select>
		</th>
		</tr>
		
		<tr>
		<th>Name of Scheme</th>
		<th>
			<input type="text" name="name_scheme" value=""></input>
		</th>
		</tr>
		
		<tr>
		<th>Estimated Cost</th>
		<th>
			<input type="text" name="estimated_cost" value=""></input>
		</th>
		</tr>
		
		<tr>
		<th>Approved Cost</th>
		<th>
			<input type="text" name="approved_cost" value=""></input>
		</th>
		</tr>
		
		<tr>
		<th>Actual Completion Cost</th>
		<th>
			<input type="text" name="actual_completion_cost" value=""></input>
		</th>
		</tr>
		
		<tr>
		<th>Physical Status</th>
		<th>
			<select style="vertical-align:middle;" name="physical_status" >
			<option value="Completed">Completed</option>
			<option value="Not Completed">Not Completed</option>
		</select>
		</th>
		</tr>
		
		<tr>
		<th>Scheme Approving Authority</th>
		<th>
			<input type="text" name="scheme_approving_authority" value=""></input>
		</th>
		</tr>
		
		<tr>
		<th>PSDC Minutes Issued</th>
		<th>
			<select style="vertical-align:middle;" name="psdc_minutes" >
			<option value="Yes">Yes</option>
			<option value="No">No</option>
		</select>
		</th>
		</tr>
		
		
		<tr>
		<th>Completion Date</th>
		<th>
			<input type="text" name="completion_date" value=""></input>
		</th>
		</tr>
		
		<tr>
		<th>Completion Certificate Issued</th>
		<th>
			<select style="vertical-align:middle;" name="completion_certificate_issued" >
			<option value="Yes">Yes</option>
			<option value="No">No</option>
		</select>
		</th>
		</tr>
		
		
		<tr>
		<th>Name of Agency</th>
		<th>
			<input type="text" name="name_agency" value=""></input>
		</th>
		</tr>
		
		<tr>
		<th>Remarks</th>
		<th>
			<input type="text" name="remarks" value=""></input>
		</th>
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
</form>