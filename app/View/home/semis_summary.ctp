<script type="text/javascript">
		$(function() 
		{
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
	
</table>


<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="report" >
	<h3 style="text-align:center;">The Reports would be shown here</h3>
</table>