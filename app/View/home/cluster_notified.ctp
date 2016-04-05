<?php

function is_odd( $int )
{
  return( $int & 1 );
}

function gps_distance($lat1,$lng1,$lat2,$lng2,$miles = false)
{
	$pi80 = M_PI / 180;
	$lat1 *= $pi80;
	$lng1 *= $pi80;
	$lat2 *= $pi80;
	$lng2 *= $pi80;

	$r = 6372.797; // mean radius of Earth in km
	$dlat = $lat2 - $lat1;
	$dlng = $lng2 - $lng1;
	$a = sin($dlat / 2) * sin($dlat / 2) + cos($lat1) * cos($lat2) * sin($dlng / 2) * sin($dlng / 2);
	$c = 2 * atan2(sqrt($a), sqrt(1 - $a));
	$km = $r * $c;
	//debug($km);
	return ($miles ? ($km * 0.621371192) : $km);
}

?>

<?php if($reportType == 'page') { ?>
<script type="text/javascript">
	function cluster_report(id)
	{
		
		
			$.ajax({
				url: '<?php echo $this->webroot?>home/cluster_notified/clusterReport/'+id,
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
	
	$(function() 
	{
		$('#add_cluster_button').click(function(){
		
		
						$.ajax({
					        url: '<?php echo $this->webroot?>home/cluster_notified/getdistricts',
						    type: "GET",
							cache: false,
						    success: function (html) {
						    $('#add_cluster').html('');
							$('#add_cluster').html(html);
						    $('#add_cluster').show(2000);
							$.ajax({
										url: '<?php echo $this->webroot?>home/cluster_notified/district/1',
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
							
							$('#notify_button').html('<tr><td><input id="notify_button" type="submit" label="Cluster Notified" /></td></tr>');
	
							
							
							
							
							
								
							$('#district_code').change(function(){
								var district_id = $('#district_code').val();
								
								$('#tehsil').empty();
								$('#unioncouncil').empty();
								$.ajax({
										url: '<?php echo $this->webroot?>home/cluster_notified/district/'+district_id,
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
							});
									
								
							
							},
							error: function(xhr, ajaxOptions, thrownError){
							}
						});		
		});
	});
</script>
	<?php if (isset($message)) { ?>
            <div class="info_box"><?php echo $message; ?></div>
    <?php } ?>
	<table border="1" cellpadding="0" cellspacing="0" class="grid_table wf" id="notifiedCluster" >
	<tr>
		<th>District</th>
		<th>Tehsil</th>
		<th>View SEMIS Report</th>
	</tr>
	<?php foreach($notifiedClusters as $notifiedCluster) { ?>
	<tr>
	<td><?php echo $notifiedCluster['NotifiedCluster']['district_name']?></td>
	<td><?php echo $notifiedCluster['NotifiedCluster']['tehsil_name']?></td>
	<td><a href="javascript:void(0)" onClick="cluster_report(<?php echo $notifiedCluster['NotifiedCluster']['tehsil_id']?>)">Cluster Report</a></td>
	</tr>
	<?php } ?>
	</table>
	
	<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="get_addCluster" >
	<tr>
	<td><a href="javascript:void(0)" id="add_cluster_button" >Add a Notified (Cluster) Ditrict</a></td>
	</tr>
	</table>
	
	<form id="new_cluster_form" action="<?php echo $this->webroot?>home/cluster_notified/add_notified_cluster" method="post">
	<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="add_cluster" >
	</table>
	
	<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="cluster_report" >
	
	</table>
	<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="tehsil" >
	
	</table>
	<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="notify_button" >
	
	</table>
	</form>
	
	
	<table border="1" cellpadding="0" cellspacing="0" class="grid_table wf" id="report" >
	
	</table>
	
	
	
<?php }elseif($reportType == 'getdistrict') { ?>
		
		<tr><td width="50%">District</td>
			<td width="50%">
				<select name="district" id="district_code">
				<?php foreach($districts as $district) { ?>
					<option value="<?php echo $district['SemisCodeDistrict']['district_id']; ?>"><?php echo $district['SemisCodeDistrict']['district']; ?></option>
				<?php } ?>
			</td>
		</tr>
			
<?php } ?>


<?php if ($reportType == 'tehsil') { ?>
	
	<tr>
		<td width="50%">Tehsils</td>
		<td width="50%">
			<select name="tehsil" id="tehsil_code" >
				<?php foreach($tehsils as $tehsil) { ?> 
					<option value="<?php echo $tehsil['semisCodesDistrictTehsil']['tehsil_id'];?>" > 
					<?php echo $tehsil["semisCodesDistrictTehsil"]["tehsil"]; ?> </option><?php } ?>
					</option>
			</select>
		</td>
	</tr>
	
<?php } ?>



<?php if ($reportType == 'clusterReport') { ?>
		
		<?php if($download == 0) { ?>
		<tr>
			<td colspan="9"><a href="<?php echo $this->webroot?>home/cluster_notified/<?php echo $request_type; ?>/<?php echo $id; ?>/1">Download this Report</a></td>
		</tr>
		<?php }
		if($download == 1){ ?>
		<table border="1" cellpadding="0" cellspacing="0" class="grid_table wf" id="report" >
		<?php } ?>
		<tr>
			<th colspan=7>Report for District <?php echo $reportDistrictTehsil['semisCodesDistrictTehsil']['district']; ?> and Taluka <?php echo $reportDistrictTehsil['semisCodesDistrictTehsil']['tehsil']; ?></th>
		</tr>
		<tr>
			<th>Cluster id</th>
			<th>Cluster Number</th>
			<th>Guide School Name</th>
			<th>Non Guide School Name</th>
			<th>SEMIS Code</th>
			<th>Functionality</th>
			<th>Distance From Guide Schools (GPS)</th>
			<th>Class Rooms</th>
			<th>Students Enrollment</th>
			<th>Teachers</th>
		</tr>
		
		<?php 
		
		$thisCluster = $tehsilSchools[0]['semisUniversal2010']['clusterid'];
		$latitude = $tehsilSchools[0]['School']['latitude'];
		$longitude = $tehsilSchools[0]['School']['longitude'];
		$x = 0;
		$color = 'AA8888';
		
		
		
		foreach($tehsilSchools as $tehsilSchool)
		{
		if(!($thisCluster == $tehsilSchool['semisUniversal2010']['clusterid']))
		{
			$x++;
			
			$thisCluster = $tehsilSchool['semisUniversal2010']['clusterid'];
			
			$latitude = $tehsilSchool['School']['latitude'];
			$longitude = $tehsilSchool['School']['longitude'];
			
			if(is_odd($x))
			{
				$color = '008888';
				//echo '<tr><td colspan="7">odd'.$x.$color.'<td></tr>';
			}else
			{
				$color = 'AA8888';
				//echo '<tr><td colspan="7">even'.$x.$color.'<td></tr>';
			}
		}
		?>
		<tr>
			<td style="background-color:#<?php echo $color?>;" ><?php echo $tehsilSchool['Cluster']['id']; ?></td>
			<td style="background-color:#<?php echo $color?>;" ><?php echo $tehsilSchool['Cluster']['name']; ?></td>
			<?php if(($tehsilSchool['semisUniversal2010']['guide_school']) == 1) { 
			?>
			<td style="background-color:#<?php echo $color?>;" ><?php echo $tehsilSchool['semisUniversal2010']['school_name']; ?></td>
			<td style="background-color:#<?php echo $color?>;" ></td>
			<?php }else{ ?>
			<td style="background-color:#<?php echo $color?>;" ></td>
			<td style="background-color:#<?php echo $color?>;" ><?php echo $tehsilSchool['semisUniversal2010']['school_name']; ?></td>
			<?php } ?>
			<td style="background-color:#<?php echo $color?>;" ><?php echo $tehsilSchool['semisUniversal2010']['school_id']; ?></td>
			<?php if(($tehsilSchool['semisUniversal2010']['status_id']) == 1) { ?>
			<td style="background-color:#<?php echo $color?>;" > Functional </td>
			<?php }else{ ?>
			<td style="background-color:#<?php echo $color?>;" > Non Functional </td>
			<?php } ?>
			<?php 
			if(!(($tehsilSchool['semisUniversal2010']['guide_school']) == 1)) { 
			?>
			<td style="background-color:#<?php echo $color?>;" >
			<?php
				echo $this->Number->format(gps_distance($latitude,$longitude,$tehsilSchool['School']['latitude'],$tehsilSchool['School']['longitude']), array(
				'places' => 3,
				'before' => '',
				'after' => ' Km',
				'escape' => false,
				'decimals' => '.',
				'thousands' => ','
				));
			?>
			</td>
			<?php }else{ ?>
			<td style="background-color:#<?php echo $color?>;" >Guide School</td>
			<?php } ?>
			<td style="background-color:#<?php echo $color?>;" ><?php echo $tehsilSchool['semisUniversal2010']['no_of_classroom']; ?></td>
			<td style="background-color:#<?php echo $color?>;" ><?php echo $tehsilSchool['SemisEnrollment2010']['total_enrollment']; ?></td>
			<td style="background-color:#<?php echo $color?>;" ><?php echo $tehsilSchool['semisUniversal2010']['total_teachers']; ?></td>
		</tr>
		<?php 
		} 
		?>
		
		<?php
		
		/*
			$x = 0;	
			$color = '008888';
			foreach($allClusters as $Cluster)
			{
			
			if(is_odd($x))
			{
				$color = '008888';
				//echo '<tr><td colspan="7">odd'.$x.$color.'<td></tr>';
				
			}else
			{
				$color = 'AA8888';
				//echo '<tr><td colspan="7">even'.$x.$color.'<td></tr>';
				
			}
		?>
			<?php foreach($Cluster['semisUniversal2010'] as $semisSchool) { ?>
			<tr>
			<td style="background-color:#<?php echo $color?>;" ><?php echo $Cluster['Cluster']['name'].' - '.$Cluster['Cluster']['id']; ?></td>
			<?php if($semisSchool['guide_school'] == 1) { ?>
			<td style="background-color:#<?php echo $color?>;" ><?php echo $semisSchool['prefix'].' - '.$semisSchool['school_name']; ?></td>
			<td style="background-color:#<?php echo $color?>;" ></td>
			<?php }else{ ?>
			<td style="background-color:#<?php echo $color?>;" ></td>
			<td style="background-color:#<?php echo $color?>;" ><?php echo $semisSchool['prefix'].' - '.$semisSchool['school_name']; ?></td>
			<?php } ?>
			<?php if($semisSchool['status_id'] == 1) { ?>
			<td style="background-color:#<?php echo $color?>;" > Functional </td>
			<?php }else{ ?>
			<td style="background-color:#<?php echo $color?>;" > Non Functional </td>
			<?php } ?>
			<td style="background-color:#<?php echo $color?>;" ><?php echo $semisSchool['no_of_classroom']; ?></td>
			<td style="background-color:#<?php echo $color?>;" ><?php //echo $semisSchool['']; ?></td>
			<td style="background-color:#<?php echo $color?>;" ><?php echo $semisSchool['total_teachers']; ?></td>
			</tr>
			<?php } ?>
		<?php 
			$x = $x+1;
			} */
		?>
		
		<?php if($download == 1) { ?>
		</table>
		<?php } ?>
		
<?php }  ?>