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
			
			$.ajax({
					        url: '<?php echo $this->webroot?>home/ssb_ddo_details/'+url,
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
			}
			else{
				$('#tehsil').empty();
				$.ajax({
					        url: '<?php echo $this->webroot?>home/submit_semis_query/district/'+district_id,
						    type: "GET",
						    cache: false,
						    success: function (html) {
						    $('#tehsil').html('');
							$('#tehsil').html(html);
						    $('#tehsil').show(2000);
							
							
							
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
			<h1>School Specific Budget Distribution Module</h1>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="district" >
	<tr>
		<td width="100%" style="" colspan=2>
			<h1>Select Taluka</h1>
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
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" >
<td><input id="report_button" type="submit" label="View Report" style="border-left: 1px solid #D6D6D6; border-right: 1px solid #D6D6D6;" /></td>
</table>


<table border="2" cellpadding="0" cellspacing="0" class="grid_table wf" id="report" >
<tr><td><h1>This is the Section where Reports will show</h1></td><td></td></tr>
</table>