<?php if($report == "page") { ?>
<script>	
	
	function getReport(id)
	{
							
							$('#report').html('<img src="<?php echo $this->webroot?>img/loading.gif">');
							// alert(id);
							$.ajax({
										url: '<?php echo $this->webroot?>home/report_cluster_status/report/'+id,
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
	}
</script>
<table border="1" cellpadding="0" cellspacing="0" class="grid_table wf" id="filters" >
<tr>
<td>District</td>
<td>Taluka</td>
<td>View Report</td>
</tr>
<?php 
foreach($districts as $district)
{
?>
	<tr>
	<td><?php echo $district['semisCodesDistrictTehsil']['district']; ?></td>
	<td><?php echo $district['semisCodesDistrictTehsil']['tehsil']; ?></td>
	<td><a href="javascript:getReport('<?php echo $district['semisCodesDistrictTehsil']['tehsil_id']?>')" > Click To View Report</a></td>
<?php
}
?>

</table>

<table border="1" cellpadding="0" cellspacing="0" class="grid_table wf" id="report" >
</table>
<?php 
	}
	if($report == "report")
	{ ?>
	<?php if(isset($download)) { ?>
	<table border="1" cellpadding="0" cellspacing="0" class="grid_table wf" id="report" >
	<?php } ?>
		<tr>
			<th>Cluster Id</th>
			<th>School Name</th>
			<th>Guide / Non Guide</th>
			<th>SEMIS Code</th>
			<th>District</th>
			<th>Tehsil</th>
			<th>Functionality</th>
			<th>Total Teachers</th>
			<th>No of Classrooms</th>
			<th>Boys total Enrollment</th>
			<th>Gitls total Enrollment</th>
			<th>total Enrollment</th>
		</tr>
		<?php
		$color = "";
		foreach($this_report_schools as $this_report_school)
		{
		if($this_report_school['ClusterForReport']['guide'] == 1) { $color = "#EFEFEF"; }else{ $color = "#FFF"; } 
		?>
		
		<tr>
		<td style="background-color:<?php echo $color; ?>;" ><?php echo $this_report_school['ClusterForReport']['cluster_id']?></td>
		<td style="background-color:<?php echo $color; ?>;" ><?php echo $this_report_school['semisUniversal2010']['prefix'].' - '.$this_report_school['semisUniversal2010']['school_name']?></td>
		<td style="background-color:<?php echo $color; ?>;" ><?php if($this_report_school['ClusterForReport']['guide'] == 1) { echo "Giude School"; }else{ echo "Non Guide School"; } ?></td>
		<td style="background-color:<?php echo $color; ?>;" ><?php echo $this_report_school['ClusterForReport']['school_id']?></td>
		<td style="background-color:<?php echo $color; ?>;" ><?php echo $this_report_school['semisCodesDistrictTehsil']['district']?></td>
		<td style="background-color:<?php echo $color; ?>;" ><?php echo $this_report_school['semisCodesDistrictTehsil']['tehsil']?></td>
		<td style="background-color:<?php echo $color; ?>;" ><?php if($this_report_school['semisUniversal2010']['status_id'] == 1) { echo "Functional"; }else{ echo "Non Functional / Temporarily Closed"; } ?></td>
		<td style="background-color:<?php echo $color; ?>;" ><?php echo $this_report_school['semisUniversal2010']['total_teachers']?></td>
		<td style="background-color:<?php echo $color; ?>;" ><?php echo $this_report_school['semisUniversal2010']['no_of_classroom']?></td>
		<td style="background-color:<?php echo $color; ?>;" ><?php echo $this_report_school['SemisEnrollment2010']['boys_total_enrollment']?></td>
		<td style="background-color:<?php echo $color; ?>;" ><?php echo $this_report_school['SemisEnrollment2010']['girls_total_enrollment']?></td>
		<td style="background-color:<?php echo $color; ?>;" ><?php echo $this_report_school['SemisEnrollment2010']['total_enrollment']?></td>
		</tr>
		<?php
		}
		?>
		<?php if(isset($download)) { ?>
			<table border="1" cellpadding="0" cellspacing="0" class="grid_table wf" id="report" >
		<?php } ?>
<?php
	}
?>