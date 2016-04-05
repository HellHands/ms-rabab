<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      function showpie(id)
	  {
		$('.piechart').hide();
		$('#pie_chart_'+id).show();
		location.href = "#pie_chart_"+id+"_row";
	  }
	  google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
	  function drawChart() {
        var data = google.visualization.arrayToDataTable([
		  ['District', 'Number of Forms Filled by DEO', 'Number of Forms Finalized by DEO', 'Number of Forms Finalized by DO SEMIS', 'Total Numeber of Forms to be Filled'],
          <?php 
		$total_finalizedformscount_do_201415 = 0;
		$total_finalizedformscount_201415 = 0;
		$total_filledformscount_201415 = 0;
		$total_filedfinalizedformscount_201415 = 0;
		$total_filedfinalizedforms_201415 = 0;
		$finalizedformscount_do_201415 = 0;
		$total_schools = 0;
		
		$x = 1;
		
		foreach($districts as $district) {
		if($district['SemisCodeDistrict']['Region'] == 1)
		{
		$this_district_total_schools = 0;
		$filledformscount_201415 = 0;
		$finalizedformscount_201415 = 0;
		$total_filedfinalizedformscount_201415 = 0;
		$finalizedformscount_do_201415 = 0;
		
		//for forms filled
		foreach($filled_201415 as $filledform)
		{
			if($filledform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_filledformscount_201415 += $filledform[0]['count_forms'];
				$total_filedfinalizedformscount_201415 += $filledform[0]['count_forms'];
				$total_filedfinalizedforms_201415 += $filledform[0]['count_forms'];
				$filledformscount_201415 = $filledform[0]['count_forms'];
			}
		}
		
		// For Finalized Form by DEO
		foreach($finalized_201415 as $finalizedform)
		{
			if($finalizedform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_finalizedformscount_201415 += $finalizedform[0]['count_forms'];
				$total_filedfinalizedformscount_201415 += $finalizedform[0]['count_forms'];
				$total_filedfinalizedforms_201415 += $finalizedform[0]['count_forms'];
				$finalizedformscount_201415 = $finalizedform[0]['count_forms'];
			}
		}
		
		// For Finalized Form by DO SEMIS
		foreach($finalized_do_201415 as $finalizedform)
		{
			if($finalizedform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_finalizedformscount_do_201415 += $finalizedform[0]['count_forms'];
				$total_filedfinalizedformscount_201415 += $finalizedform[0]['count_forms'];
				$total_filedfinalizedforms_201415 += $finalizedform[0]['count_forms'];
				$finalizedformscount_do_201415 = $finalizedform[0]['count_forms'];
			}
		}
?>
		  ['<?php echo $district['SemisCodeDistrict']['district']; ?>', <?php echo $filledformscount_201415; ?>, <?php echo $finalizedformscount_201415; ?>, <?php echo $finalizedformscount_do_201415; ?>, <?php foreach($univ_total_schools as $univ_total_districtschools) { if($univ_total_districtschools['Univ2012a']['DistrictID'] == $district['SemisCodeDistrict']['district_id']) { ?><?php echo $univ_total_districtschools[0]['total_schools']; $total_schools += $univ_total_districtschools[0]['total_schools']; $this_district_total_schools = $univ_total_districtschools[0]['total_schools']; ?><?php } } ?>],

<?php } } ?>

		]);

        var options = {
          title: 'Data Entry Status',
          vAxis: {title: 'District',  titleTextStyle: {color: 'green'}}
        };

        // var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));

        chart.draw(data, options);
      }
	  
	  <?php 
		$x = 1;
		foreach($districts as $district) {
		if($district['SemisCodeDistrict']['Region'] == 1)
		{
		?>
			google.load("visualization", "1", {packages:["corechart"]});
			  google.setOnLoadCallback(drawChart_<?php echo $x; ?>);
			  function drawChart_<?php echo $x; ?>() {
			var data = google.visualization.arrayToDataTable([
      
		<?php
		
		$this_district_total_schools = 0;
		$filledformscount_201415 = 0;
		$finalizedformscount_201415 = 0;
		$total_filedfinalizedformscount_201415 = 0;
		$finalizedformscount_do_201415 = 0;
		
		//for forms filled
		foreach($filled_201415 as $filledform)
		{
			if($filledform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				// $total_filledformscount_201415 += $filledform[0]['count_forms'];
				$total_filedfinalizedformscount_201415 += $filledform[0]['count_forms'];
				// $total_filedfinalizedforms_201415 += $filledform[0]['count_forms'];
				$filledformscount_201415 = $filledform[0]['count_forms'];
			}
		}
		
		// For Finalized Form by DEO
		foreach($finalized_201415 as $finalizedform)
		{
			if($finalizedform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				// $total_finalizedformscount_201415 += $finalizedform[0]['count_forms'];
				$total_filedfinalizedformscount_201415 += $finalizedform[0]['count_forms'];
				// $total_filedfinalizedforms_201415 += $finalizedform[0]['count_forms'];
				$finalizedformscount_201415 = $finalizedform[0]['count_forms'];
			}
		}
		
		// For Finalized Form by DO SEMIS
		foreach($finalized_do_201415 as $finalizedform)
		{
			if($finalizedform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				// $total_finalizedformscount_do_201415 += $finalizedform[0]['count_forms'];
				$total_filedfinalizedformscount_201415 += $finalizedform[0]['count_forms'];
				// $total_filedfinalizedforms_201415 += $finalizedform[0]['count_forms'];
				$finalizedformscount_do_201415 = $finalizedform[0]['count_forms'];
			}
		}
?>
		  ['Status Of', 'Number of Forms'],
		  ['Number of Forms Filled by DEO', <?php echo $filledformscount_201415; ?>],
		  ['Number of Forms Finalized by DEO', <?php echo $finalizedformscount_201415; ?>],
		  ['Number of Forms Finalized by DO SEMIS', <?php echo $finalizedformscount_do_201415; ?>],
		  ['Remaining Forms to be filed and finalized', <?php foreach($univ_total_schools as $univ_total_districtschools) { if($univ_total_districtschools['Univ2012a']['DistrictID'] == $district['SemisCodeDistrict']['district_id']) { ?><?php echo $univ_total_districtschools[0]['total_schools'] - ($filledformscount_201415 + $finalizedformscount_201415 + $finalizedformscount_do_201415); ?><?php } } ?>],
		  // ['<?php echo $district['SemisCodeDistrict']['district']; ?>', <?php echo $filledformscount_201415; ?>, <?php echo $finalizedformscount_201415; ?>, <?php echo $finalizedformscount_do_201415; ?>, <?php foreach($univ_total_schools as $univ_total_districtschools) { if($univ_total_districtschools['Univ2012a']['DistrictID'] == $district['SemisCodeDistrict']['district_id']) { ?><?php echo $univ_total_districtschools[0]['total_schools']; $total_schools += $univ_total_districtschools[0]['total_schools']; $this_district_total_schools = $univ_total_districtschools[0]['total_schools']; ?><?php } } ?>],


		]);

        var options = {
          title: 'Data Entry Status District <?php echo $district['SemisCodeDistrict']['district']; ?>',
          is3D: true,
        };

        // var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        var chart_<?php echo $x; ?> = new google.visualization.PieChart(document.getElementById('pie_chart_<?php echo $x; ?>'));

        chart_<?php echo $x; ?>.draw(data, options);
		$('#pie_chart_<?php echo $x; ?>').hide();
      }
<?php $x++; } } ?>	  
    </script>
<script type="text/javascript">
        function CallPrint(strid) {
            var prtContent = document.getElementById(strid);
			var table = document.getElementById("tabledata");
			table.className = "CSSTableGenerator";
            var WinPrint = window.open('', '', 'letf=30,top=30,width=800,height=800,toolbar=0,scrollbars=1,status=0');
			WinPrint.document.write('<html><head><title>  </title><link rel="stylesheet" type="text/css" href="../css/TableCSSCode.css"></head><body>');
			WinPrint.document.write('<table width="100%">');
			WinPrint.document.write('<tr>');
			WinPrint.document.write('<td width="5%">');		
			WinPrint.document.write('<img  style="height: 90px;" src="../img/sindhgovt_logo.png">');
			WinPrint.document.write('</td>');
			WinPrint.document.write('<td width="95%">');
			WinPrint.document.write('<div style="text-align:center">REFORM SUPPORT UNIT (SEMIS WING)</div>');
			WinPrint.document.write('<div style="text-align:center">Education & Literacy Department</div>');
			WinPrint.document.write('<div style="text-align:center">Government of Sindh</div>');
			WinPrint.document.write('</td>');
			WinPrint.document.write('</tr>');
			WinPrint.document.write('</table>');
            WinPrint.document.write(prtContent.innerHTML);
			WinPrint.document.write('<table width="100%">');
			WinPrint.document.write('<tr>');
			WinPrint.document.write('<td width="50%">');
			
			WinPrint.document.write('<div>SOURCE: SEMIS DATABASE</div>');
			


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
			
			WinPrint.document.write('</body></html>');
            WinPrint.document.close();
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
        }
     </script>

<div style="height:60px">

<img class="printtnImg" style="float: right; 
    height: 50px;" src="../img/printer.png" onclick="javascript:CallPrint('printbodytxt')">

</div>

<?php
		$x = 1;
	foreach($districts as $district) {
		if($district['SemisCodeDistrict']['Region'] == 1)
		{
			?>
			<!--div class="piechart" id="pie_chart_<?php echo $x; ?>" style="width: 900px; height: 500px; display:none;"></div-->
			<?php 
		$x++;
		}
	}
?>
<div id="chart_div" style="width: 900px; height: 500px; "></div>

<div class="printbodytxt" id="printbodytxt">

<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="tabledatadosemis">
<tr>
	<td colspan=8 ><h1>The Status of Forms being filled by DO SEMIS</h1></td>
</tr>
<tr>
	<td><strong style="font-size:10pt;" >S.No.</strong></td>
	<td><strong style="font-size:10pt;" >District</strong></td>
	<td><strong style="font-size:10pt;" >Total Forms to be filled</strong></td>
	<td><strong style="font-size:10pt;" >Number of Forms Filled</strong></td>
	<td><strong style="font-size:10pt;" >Number of Forms Filled and Finalized (by DEO)</strong></td>
	<td><strong style="font-size:10pt;" >Number of Forms Filled and Finalized (By DO SEMIS)</strong></td>
	<td><strong style="font-size:10pt;" >Total Number of Forms Filled or Finalized</strong></td>
	<td><strong style="font-size:10pt;" >Remaining Forms to be filled and finalized</strong></td>
</tr>

<?php 
		$total_finalizedformscount_do_201415 = 0;
		$total_filledformscount_201415 = 0;
		$total_finalizedformscount_201415 = 0;
		$total_filedfinalizedformscount_201415 = 0;
		$total_filedfinalizedforms_201415 = 0;
		$finalizedformscount_do_201415 = 0;
		$total_schools = 0;
		
		$x = 1;
		
		foreach($districts as $district) {
		if($district['SemisCodeDistrict']['Region'] == 1)
		{
		$this_district_total_schools = 0;
		$filledformscount_201415 = 0;
		$finalizedformscount_201415 = 0;
		$total_filedfinalizedformscount_201415 = 0;
		$finalizedformscount_do_201415 = 0;
		
		//for forms filled
		foreach($filled_201415 as $filledform)
		{
			if($filledform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_filledformscount_201415 += $filledform[0]['count_forms'];
				$total_filedfinalizedformscount_201415 += $filledform[0]['count_forms'];
				$total_filedfinalizedforms_201415 += $filledform[0]['count_forms'];
				$filledformscount_201415 = $filledform[0]['count_forms'];
			}
		}
		
		// For Finalized Form by DEO
		foreach($finalized_201415 as $finalizedform)
		{
			if($finalizedform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_finalizedformscount_201415 += $finalizedform[0]['count_forms'];
				$total_filedfinalizedformscount_201415 += $finalizedform[0]['count_forms'];
				$total_filedfinalizedforms_201415 += $finalizedform[0]['count_forms'];
				$finalizedformscount_201415 = $finalizedform[0]['count_forms'];
			}
		}
		
		// For Finalized Form by DO SEMIS
		foreach($finalized_do_201415 as $finalizedform)
		{
			if($finalizedform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_finalizedformscount_do_201415 += $finalizedform[0]['count_forms'];
				$total_filedfinalizedformscount_201415 += $finalizedform[0]['count_forms'];
				$total_filedfinalizedforms_201415 += $finalizedform[0]['count_forms'];
				$finalizedformscount_do_201415 = $finalizedform[0]['count_forms'];
			}
		}
?>
<tr>

	<td id="pie_chart_<?php echo $x; ?>_row" ><?php echo $x; ?></td>
	<td><a href="javascript:showpie(<?php echo $x; ?>)" ><?php echo $district['SemisCodeDistrict']['district']; ?></a></td>
	<?php foreach($univ_total_schools as $univ_total_districtschools) { if($univ_total_districtschools['Univ2012a']['DistrictID'] == $district['SemisCodeDistrict']['district_id']) { ?>	
		<td class="righttxt"><?php echo $univ_total_districtschools[0]['total_schools']; $total_schools += $univ_total_districtschools[0]['total_schools']; $this_district_total_schools = $univ_total_districtschools[0]['total_schools']; ?></td>
	<?php } } ?>
	<td class="righttxt"><?php echo $filledformscount_201415; ?></td>
	<td class="righttxt"><?php echo $finalizedformscount_201415; ?></td>
	<td class="righttxt"><?php echo $finalizedformscount_do_201415; ?></td>
	<td class="righttxt"><?php echo $total_filedfinalizedformscount_201415; ?></td>
	<td class="righttxt"><?php echo $this_district_total_schools - $total_filedfinalizedformscount_201415; ?></td>
</tr>
<tr>
	<td colspan=8 ><div class="piechart" id="pie_chart_<?php echo $x; ?>" style="width: 900px; height: 500px;"></div></td>
</tr>
<?php $x++; } } ?>
<tr>
	<td colspan=2 >Total</td>
	<td class="righttxt"><?php echo $total_schools; ?></td>
	<td class="righttxt"><?php echo $total_filledformscount_201415; ?></td>
	<td class="righttxt"><?php echo $total_finalizedformscount_201415; ?></td>
	<td class="righttxt"><?php echo $total_finalizedformscount_do_201415; ?></td>
	<td class="righttxt"><?php echo $total_filedfinalizedforms_201415; ?></td>
	<td class="righttxt"><?php echo $total_schools - $total_filedfinalizedforms_201415; ?></td>
</tr>

</table>

<table style="display:none;" border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="tabledatadosemis">
<tr>
	<td colspan=8 ><h1>The Status of Forms being filled by Firm 1</h1></td>
</tr>
<tr>
	<td><strong style="font-size:10pt;" >S.No.</strong></td>
	<td><strong style="font-size:10pt;" >District</strong></td>
	<td><strong style="font-size:10pt;" >Total Forms to be filled</strong></td>
	<td><strong style="font-size:10pt;" >Number of Forms Filled</strong></td>
	<td><strong style="font-size:10pt;" >Number of Forms Filled and Finalized (by DEO)</strong></td>
	<td><strong style="font-size:10pt;" >Number of Forms Filled and Finalized (By DO SEMIS)</strong></td>
	<td><strong style="font-size:10pt;" >Total Number of Forms Filled or Finalized</strong></td>
	<td><strong style="font-size:10pt;" >Remaining Forms to be filled and finalized</strong></td>
</tr>

<?php 
		$total_finalizedformscount_do_201415 = 0;
		$total_filledformscount_201415 = 0;
		$total_finalizedformscount_201415 = 0;
		$total_filedfinalizedformscount_201415 = 0;
		$total_filedfinalizedforms_201415 = 0;
		$finalizedformscount_do_201415 = 0;
		$total_schools = 0;
		
		$x = 1;
		
		foreach($districts as $district) {
		if($district['SemisCodeDistrict']['Region'] == 2)
		{
		$this_district_total_schools = 0;
		$filledformscount_201415 = 0;
		$finalizedformscount_201415 = 0;
		$total_filedfinalizedformscount_201415 = 0;
		$finalizedformscount_do_201415 = 0;
		
		//for forms filled
		foreach($filled_201415 as $filledform)
		{
			if($filledform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_filledformscount_201415 += $filledform[0]['count_forms'];
				$total_filedfinalizedformscount_201415 += $filledform[0]['count_forms'];
				$total_filedfinalizedforms_201415 += $filledform[0]['count_forms'];
				$filledformscount_201415 = $filledform[0]['count_forms'];
			}
		}
		
		// For Finalized Form by DEO
		foreach($finalized_201415 as $finalizedform)
		{
			if($finalizedform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_finalizedformscount_201415 += $finalizedform[0]['count_forms'];
				$total_filedfinalizedformscount_201415 += $finalizedform[0]['count_forms'];
				$total_filedfinalizedforms_201415 += $finalizedform[0]['count_forms'];
				$finalizedformscount_201415 = $finalizedform[0]['count_forms'];
			}
		}
		
		// For Finalized Form by DO SEMIS
		foreach($finalized_do_201415 as $finalizedform)
		{
			if($finalizedform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_finalizedformscount_do_201415 += $finalizedform[0]['count_forms'];
				$total_filedfinalizedformscount_201415 += $finalizedform[0]['count_forms'];
				$total_filedfinalizedforms_201415 += $finalizedform[0]['count_forms'];
				$finalizedformscount_do_201415 = $finalizedform[0]['count_forms'];
			}
		}
?>
<tr>
	<td><?php echo $x; ?></td>
	<td><?php echo $district['SemisCodeDistrict']['district']; ?></td>
	<?php foreach($univ_total_schools as $univ_total_districtschools) { if($univ_total_districtschools['Univ2012a']['DistrictID'] == $district['SemisCodeDistrict']['district_id']) { ?>	
		<td class="righttxt"><?php echo $univ_total_districtschools[0]['total_schools']; $total_schools += $univ_total_districtschools[0]['total_schools']; $this_district_total_schools = $univ_total_districtschools[0]['total_schools']; ?></td>
	<?php } } ?>
	<td class="righttxt"><?php echo $filledformscount_201415; ?></td>
	<td class="righttxt"><?php echo $finalizedformscount_201415; ?></td>
	<td class="righttxt"><?php echo $finalizedformscount_do_201415; ?></td>
	<td class="righttxt"><?php echo $total_filedfinalizedformscount_201415; ?></td>
	<td class="righttxt"><?php echo $this_district_total_schools - $total_filedfinalizedformscount_201415; ?></td>
</tr>
<?php $x++; } } ?>
<tr>
	<td colspan=2 >Total</td>
	<td class="righttxt"><?php echo $total_schools; ?></td>
	<td class="righttxt"><?php echo $total_filledformscount_201415; ?></td>
	<td class="righttxt"><?php echo $total_finalizedformscount_201415; ?></td>
	<td class="righttxt"><?php echo $total_finalizedformscount_do_201415; ?></td>
	<td class="righttxt"><?php echo $total_filedfinalizedforms_201415; ?></td>
	<td class="righttxt"><?php echo $total_schools - $total_filedfinalizedforms_201415; ?></td>
</tr>

</table>


<table style="display:none;" border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="tabledatadosemis">
<tr>
	<td colspan=8 ><h1>The Status of Forms being filled by Firm 2</h1></td>
</tr>
<tr>
	<td><strong style="font-size:10pt;" >S.No.</strong></td>
	<td><strong style="font-size:10pt;" >District</strong></td>
	<td><strong style="font-size:10pt;" >Total Forms to be filled</strong></td>
	<td><strong style="font-size:10pt;" >Number of Forms Filled</strong></td>
	<td><strong style="font-size:10pt;" >Number of Forms Filled and Finalized (by DEO)</strong></td>
	<td><strong style="font-size:10pt;" >Number of Forms Filled and Finalized (By DO SEMIS)</strong></td>
	<td><strong style="font-size:10pt;" >Total Number of Forms Filled or Finalized</strong></td>
	<td><strong style="font-size:10pt;" >Remaining Forms to be filled and finalized</strong></td>
</tr>

<?php 
		$total_finalizedformscount_do_201415 = 0;
		$total_filledformscount_201415 = 0;
		$total_finalizedformscount_201415 = 0;
		$total_filedfinalizedformscount_201415 = 0;
		$total_filedfinalizedforms_201415 = 0;
		$finalizedformscount_do_201415 = 0;
		$total_schools = 0;
		
		$x = 1;
		
		foreach($districts as $district) {
		if($district['SemisCodeDistrict']['Region'] == 3)
		{
		$this_district_total_schools = 0;
		$filledformscount_201415 = 0;
		$finalizedformscount_201415 = 0;
		$total_filedfinalizedformscount_201415 = 0;
		$finalizedformscount_do_201415 = 0;
		
		//for forms filled
		foreach($filled_201415 as $filledform)
		{
			if($filledform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_filledformscount_201415 += $filledform[0]['count_forms'];
				$total_filedfinalizedformscount_201415 += $filledform[0]['count_forms'];
				$total_filedfinalizedforms_201415 += $filledform[0]['count_forms'];
				$filledformscount_201415 = $filledform[0]['count_forms'];
			}
		}
		
		// For Finalized Form by DEO
		foreach($finalized_201415 as $finalizedform)
		{
			if($finalizedform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_finalizedformscount_201415 += $finalizedform[0]['count_forms'];
				$total_filedfinalizedformscount_201415 += $finalizedform[0]['count_forms'];
				$total_filedfinalizedforms_201415 += $finalizedform[0]['count_forms'];
				$finalizedformscount_201415 = $finalizedform[0]['count_forms'];
			}
		}
		
		// For Finalized Form by DO SEMIS
		foreach($finalized_do_201415 as $finalizedform)
		{
			if($finalizedform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_finalizedformscount_do_201415 += $finalizedform[0]['count_forms'];
				$total_filedfinalizedformscount_201415 += $finalizedform[0]['count_forms'];
				$total_filedfinalizedforms_201415 += $finalizedform[0]['count_forms'];
				$finalizedformscount_do_201415 = $finalizedform[0]['count_forms'];
			}
		}
?>
<tr>
	<td><?php echo $x; ?></td>
	<td><?php echo $district['SemisCodeDistrict']['district']; ?></td>
	<?php foreach($univ_total_schools as $univ_total_districtschools) { if($univ_total_districtschools['Univ2012a']['DistrictID'] == $district['SemisCodeDistrict']['district_id']) { ?>	
		<td class="righttxt"><?php echo $univ_total_districtschools[0]['total_schools']; $total_schools += $univ_total_districtschools[0]['total_schools']; $this_district_total_schools = $univ_total_districtschools[0]['total_schools']; ?></td>
	<?php } } ?>
	<td class="righttxt"><?php echo $filledformscount_201415; ?></td>
	<td class="righttxt"><?php echo $finalizedformscount_201415; ?></td>
	<td class="righttxt"><?php echo $finalizedformscount_do_201415; ?></td>
	<td class="righttxt"><?php echo $total_filedfinalizedformscount_201415; ?></td>
	<td class="righttxt"><?php echo $this_district_total_schools - $total_filedfinalizedformscount_201415; ?></td>
</tr>
<?php $x++; } } ?>
<tr>
	<td colspan=2 >Total</td>
	<td class="righttxt"><?php echo $total_schools; ?></td>
	<td class="righttxt"><?php echo $total_filledformscount_201415; ?></td>
	<td class="righttxt"><?php echo $total_finalizedformscount_201415; ?></td>
	<td class="righttxt"><?php echo $total_finalizedformscount_do_201415; ?></td>
	<td class="righttxt"><?php echo $total_filedfinalizedforms_201415; ?></td>
	<td class="righttxt"><?php echo $total_schools - $total_filedfinalizedforms_201415; ?></td>
</tr>

</table>




<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="tabledatadosemis">
<tr>
	<td colspan=8 ><h1>The Status of Forms being filled by High Schools </h1></td>
</tr>
<tr>
	<td><strong style="font-size:10pt;" >S.No.</strong></td>
	<td><strong style="font-size:10pt;" >District</strong></td>
	<td><strong style="font-size:10pt;" >Total Forms to be filled</strong></td>
	<td><strong style="font-size:10pt;" >Number of Forms Filled</strong></td>
	<td><strong style="font-size:10pt;" >Number of Forms Filled and Finalized (by HM)</strong></td>
	<td><strong style="font-size:10pt;" >Number of Forms Filled and Finalized (By DO SEMIS)</strong></td>
	<td><strong style="font-size:10pt;" >Total Number of Forms Filled or Finalized</strong></td>
	<td><strong style="font-size:10pt;" >Remaining Forms to be filled and finalized</strong></td>
</tr>

<?php 
		$total_finalizedformscount_do_201415_hs = 0;
		$total_filledformscount_201415_hs = 0;
		$total_finalizedformscount_201415_hs = 0;
		$total_filedfinalizedformscount_201415_hs = 0;
		$total_filedfinalizedforms_201415_hs = 0;
		$finalizedformscount_do_201415_hs = 0;
		$total_schools_hs = 0;
		
		$x = 1;
		
		foreach($districts as $district) {
		if($district['SemisCodeDistrict']['Region'] == 1)
		{
		$this_district_total_schools_hs = 0;
		$filledformscount_201415_hs = 0;
		$finalizedformscount_201415_hs = 0;
		$total_filedfinalizedformscount_201415_hs = 0;
		$finalizedformscount_do_201415_hs = 0;
		
		//for forms filled
		foreach($filled_201415_hs as $filledform)
		{
			if($filledform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_filledformscount_201415_hs += $filledform[0]['count_forms'];
				$total_filedfinalizedformscount_201415_hs += $filledform[0]['count_forms'];
				$total_filedfinalizedforms_201415_hs += $filledform[0]['count_forms'];
				$filledformscount_201415_hs = $filledform[0]['count_forms'];
			}
		}
		
		// For Finalized Form by DEO
		foreach($finalized_201415_hs as $finalizedform)
		{
			if($finalizedform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_finalizedformscount_201415_hs += $finalizedform[0]['count_forms'];
				$total_filedfinalizedformscount_201415_hs += $finalizedform[0]['count_forms'];
				$total_filedfinalizedforms_201415_hs += $finalizedform[0]['count_forms'];
				$finalizedformscount_201415_hs = $finalizedform[0]['count_forms'];
			}
		}
		
		// For Finalized Form by DO SEMIS
		foreach($finalized_do_201415_hs as $finalizedform)
		{
			if($finalizedform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_finalizedformscount_do_201415_hs += $finalizedform[0]['count_forms'];
				$total_filedfinalizedformscount_201415_hs += $finalizedform[0]['count_forms'];
				$total_filedfinalizedforms_201415_hs += $finalizedform[0]['count_forms'];
				$finalizedformscount_do_201415_hs = $finalizedform[0]['count_forms'];
			}
		}
?>
<tr>
	<td><?php echo $x; ?></td>
	<td><?php echo $district['SemisCodeDistrict']['district']; ?></td>
	<?php foreach($univ_total_schools_hs as $univ_total_districtschools) { if($univ_total_districtschools['Univ2012a']['DistrictID'] == $district['SemisCodeDistrict']['district_id']) { ?>	
		<td class="righttxt"><?php echo $univ_total_districtschools[0]['total_schools']; $this_district_total_schools_hs = $univ_total_districtschools[0]['total_schools']; $total_schools_hs += $univ_total_districtschools[0]['total_schools']; $this_district_total_schools = $univ_total_districtschools[0]['total_schools']; ?></td>
	<?php } } ?>
	<td class="righttxt"><?php echo $filledformscount_201415_hs; ?></td>
	<td class="righttxt"><?php echo $finalizedformscount_201415_hs; ?></td>
	<td class="righttxt"><?php echo $finalizedformscount_do_201415_hs; ?></td>
	<td class="righttxt"><?php echo $total_filedfinalizedformscount_201415_hs; ?></td>
	<td class="righttxt"><?php echo $this_district_total_schools_hs - $total_filedfinalizedformscount_201415_hs; ?></td>
</tr>
<?php $x++; } } ?>
<tr>
	<td colspan=2 >Total</td>
	<td class="righttxt"><?php echo $total_schools_hs; ?></td>
	<td class="righttxt"><?php echo $total_filledformscount_201415_hs; ?></td>
	<td class="righttxt"><?php echo $total_finalizedformscount_201415_hs; ?></td>
	<td class="righttxt"><?php echo $total_finalizedformscount_do_201415_hs; ?></td>
	<td class="righttxt"><?php echo $total_filedfinalizedforms_201415_hs; ?></td>
	<td class="righttxt"><?php echo $total_schools_hs - $total_filedfinalizedforms_201415_hs; ?></td>
</tr>

</table>

<table style="display:none;" border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="tabledatadosemis">
<tr>
	<td colspan=8 ><h1>The Status of Forms being filled by High Schools Firm 1</h1></td>
</tr>
<tr>
	<td><strong style="font-size:10pt;" >S.No.</strong></td>
	<td><strong style="font-size:10pt;" >District</strong></td>
	<td><strong style="font-size:10pt;" >Total Forms to be filled</strong></td>
	<td><strong style="font-size:10pt;" >Number of Forms Filled</strong></td>
	<td><strong style="font-size:10pt;" >Number of Forms Filled and Finalized (by DEO)</strong></td>
	<td><strong style="font-size:10pt;" >Number of Forms Filled and Finalized (By DO SEMIS)</strong></td>
	<td><strong style="font-size:10pt;" >Total Number of Forms Filled or Finalized</strong></td>
	<td><strong style="font-size:10pt;" >Remaining Forms to be filled and finalized</strong></td>
</tr>

<?php 
		$total_finalizedformscount_do_201415_hs = 0;
		$total_filledformscount_201415_hs = 0;
		$total_finalizedformscount_201415_hs = 0;
		$total_filedfinalizedformscount_201415_hs = 0;
		$total_filedfinalizedforms_201415_hs = 0;
		$finalizedformscount_do_201415_hs = 0;
		$total_schools_hs = 0;
		
		$x = 1;
		
		foreach($districts as $district) {
		if($district['SemisCodeDistrict']['Region'] == 2)
		{
		$this_district_total_schools_hs = 0;
		$filledformscount_201415_hs = 0;
		$finalizedformscount_201415_hs = 0;
		$total_filedfinalizedformscount_201415_hs = 0;
		$finalizedformscount_do_201415_hs = 0;
		
		//for forms filled
		foreach($filled_201415_hs as $filledform)
		{
			if($filledform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_filledformscount_201415_hs += $filledform[0]['count_forms'];
				$total_filedfinalizedformscount_201415_hs += $filledform[0]['count_forms'];
				$total_filedfinalizedforms_201415_hs += $filledform[0]['count_forms'];
				$filledformscount_201415_hs = $filledform[0]['count_forms'];
			}
		}
		
		// For Finalized Form by DEO
		foreach($finalized_201415_hs as $finalizedform)
		{
			if($finalizedform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_finalizedformscount_201415_hs += $finalizedform[0]['count_forms'];
				$total_filedfinalizedformscount_201415_hs += $finalizedform[0]['count_forms'];
				$total_filedfinalizedforms_201415_hs += $finalizedform[0]['count_forms'];
				$finalizedformscount_201415_hs = $finalizedform[0]['count_forms'];
			}
		}
		
		// For Finalized Form by DO SEMIS
		foreach($finalized_do_201415_hs as $finalizedform)
		{
			if($finalizedform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_finalizedformscount_do_201415_hs += $finalizedform[0]['count_forms'];
				$total_filedfinalizedformscount_201415_hs += $finalizedform[0]['count_forms'];
				$total_filedfinalizedforms_201415_hs += $finalizedform[0]['count_forms'];
				$finalizedformscount_do_201415_hs = $finalizedform[0]['count_forms'];
			}
		}
?>
<tr>
	<td><?php echo $x; ?></td>
	<td><?php echo $district['SemisCodeDistrict']['district']; ?></td>
	<?php foreach($univ_total_schools_hs as $univ_total_districtschools) { if($univ_total_districtschools['Univ2012a']['DistrictID'] == $district['SemisCodeDistrict']['district_id']) { ?>	
		<td class="righttxt"><?php echo $univ_total_districtschools[0]['total_schools']; $this_district_total_schools_hs = $univ_total_districtschools[0]['total_schools']; $total_schools_hs += $univ_total_districtschools[0]['total_schools']; $this_district_total_schools = $univ_total_districtschools[0]['total_schools']; ?></td>
	<?php } } ?>
	<td class="righttxt"><?php echo $filledformscount_201415_hs; ?></td>
	<td class="righttxt"><?php echo $finalizedformscount_201415_hs; ?></td>
	<td class="righttxt"><?php echo $finalizedformscount_do_201415_hs; ?></td>
	<td class="righttxt"><?php echo $total_filedfinalizedformscount_201415_hs; ?></td>
	<td class="righttxt"><?php echo $this_district_total_schools_hs - $total_filedfinalizedformscount_201415_hs; ?></td>
</tr>
<?php $x++; } } ?>
<tr>
	<td colspan=2 >Total</td>
	<td class="righttxt"><?php echo $total_schools_hs; ?></td>
	<td class="righttxt"><?php echo $total_filledformscount_201415_hs; ?></td>
	<td class="righttxt"><?php echo $total_finalizedformscount_201415_hs; ?></td>
	<td class="righttxt"><?php echo $total_finalizedformscount_do_201415_hs; ?></td>
	<td class="righttxt"><?php echo $total_filedfinalizedforms_201415_hs; ?></td>
	<td class="righttxt"><?php echo $total_schools_hs - $total_filedfinalizedforms_201415_hs; ?></td>
</tr>

</table>

<table style="display:none;" border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="tabledatadosemis">
<tr>
	<td colspan=8 ><h1>The Status of Forms being filled by High Schools Firm 2</h1></td>
</tr>
<tr>
	<td><strong style="font-size:10pt;" >S.No.</strong></td>
	<td><strong style="font-size:10pt;" >District</strong></td>
	<td><strong style="font-size:10pt;" >Total Forms to be filled</strong></td>
	<td><strong style="font-size:10pt;" >Number of Forms Filled</strong></td>
	<td><strong style="font-size:10pt;" >Number of Forms Filled and Finalized (by DEO)</strong></td>
	<td><strong style="font-size:10pt;" >Number of Forms Filled and Finalized (By DO SEMIS)</strong></td>
	<td><strong style="font-size:10pt;" >Total Number of Forms Filled or Finalized</strong></td>
	<td><strong style="font-size:10pt;" >Remaining Forms to be filled and finalized</strong></td>
</tr>

<?php 
		$total_finalizedformscount_do_201415_hs = 0;
		$total_filledformscount_201415_hs = 0;
		$total_finalizedformscount_201415_hs = 0;
		$total_filedfinalizedformscount_201415_hs = 0;
		$total_filedfinalizedforms_201415_hs = 0;
		$finalizedformscount_do_201415_hs = 0;
		$total_schools_hs = 0;
		
		$x = 1;
		
		foreach($districts as $district) {
		if($district['SemisCodeDistrict']['Region'] == 3)
		{
		$this_district_total_schools_hs = 0;
		$filledformscount_201415_hs = 0;
		$finalizedformscount_201415_hs = 0;
		$total_filedfinalizedformscount_201415_hs = 0;
		$finalizedformscount_do_201415_hs = 0;
		
		//for forms filled
		foreach($filled_201415_hs as $filledform)
		{
			if($filledform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_filledformscount_201415_hs += $filledform[0]['count_forms'];
				$total_filedfinalizedformscount_201415_hs += $filledform[0]['count_forms'];
				$total_filedfinalizedforms_201415_hs += $filledform[0]['count_forms'];
				$filledformscount_201415_hs = $filledform[0]['count_forms'];
			}
		}
		
		// For Finalized Form by DEO
		foreach($finalized_201415_hs as $finalizedform)
		{
			if($finalizedform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_finalizedformscount_201415_hs += $finalizedform[0]['count_forms'];
				$total_filedfinalizedformscount_201415_hs += $finalizedform[0]['count_forms'];
				$total_filedfinalizedforms_201415_hs += $finalizedform[0]['count_forms'];
				$finalizedformscount_201415_hs = $finalizedform[0]['count_forms'];
			}
		}
		
		// For Finalized Form by DO SEMIS
		foreach($finalized_do_201415_hs as $finalizedform)
		{
			if($finalizedform['semis_universal201415s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_finalizedformscount_do_201415_hs += $finalizedform[0]['count_forms'];
				$total_filedfinalizedformscount_201415_hs += $finalizedform[0]['count_forms'];
				$total_filedfinalizedforms_201415_hs += $finalizedform[0]['count_forms'];
				$finalizedformscount_do_201415_hs = $finalizedform[0]['count_forms'];
			}
		}
?>
<tr>
	<td><?php echo $x; ?></td>
	<td><?php echo $district['SemisCodeDistrict']['district']; ?></td>
	<?php foreach($univ_total_schools_hs as $univ_total_districtschools) { if($univ_total_districtschools['Univ2012a']['DistrictID'] == $district['SemisCodeDistrict']['district_id']) { ?>	
		<td class="righttxt"><?php echo $univ_total_districtschools[0]['total_schools']; $this_district_total_schools_hs = $univ_total_districtschools[0]['total_schools']; $total_schools_hs += $univ_total_districtschools[0]['total_schools']; $this_district_total_schools = $univ_total_districtschools[0]['total_schools']; ?></td>
	<?php } } ?>
	<td class="righttxt"><?php echo $filledformscount_201415_hs; ?></td>
	<td class="righttxt"><?php echo $finalizedformscount_201415_hs; ?></td>
	<td class="righttxt"><?php echo $finalizedformscount_do_201415_hs; ?></td>
	<td class="righttxt"><?php echo $total_filedfinalizedformscount_201415_hs; ?></td>
	<td class="righttxt"><?php echo $this_district_total_schools_hs - $total_filedfinalizedformscount_201415_hs; ?></td>
</tr>
<?php $x++; } } ?>
<tr>
	<td colspan=2 >Total</td>
	<td class="righttxt"><?php echo $total_schools_hs; ?></td>
	<td class="righttxt"><?php echo $total_filledformscount_201415_hs; ?></td>
	<td class="righttxt"><?php echo $total_finalizedformscount_201415_hs; ?></td>
	<td class="righttxt"><?php echo $total_finalizedformscount_do_201415_hs; ?></td>
	<td class="righttxt"><?php echo $total_filedfinalizedforms_201415_hs; ?></td>
	<td class="righttxt"><?php echo $total_schools_hs - $total_filedfinalizedforms_201415_hs; ?></td>
</tr>

</table>


<table style="display:none;" border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="tabledata">

<tr>
	<td><strong style="font-size:10pt;" >S.No.</strong></td>
	<td><strong style="font-size:10pt;" >District</strong></td>
	<td><strong style="font-size:10pt;" >Number of Forms filled</strong></td>
	<?php if($uname == 'admin') { ?>
	<td><strong style="font-size:10pt;" >Number of Forms Finalized</strong></td>
	<?php } ?>
	<td><strong style="font-size:10pt;" >Filled From School</strong></td>
	<td><strong style="font-size:10pt;" >Filled From Elsewhere</strong></td>
</tr>
<?php 
		$total_filledformscount = 0;
		$total_finalizedformscount = 0;
		$total_filledfromschoolcount = 0;
		$total_filledelsewherecount = 0;
		$x = 1;
		foreach($districts as $district) {
		$filledformscount = 0;
		$finalizedformscount = 0;
		$filledfromschoolcount = 0;
		$filledelsewherecount = 0;
		
		//for forms filled
		foreach($filledforms as $filledform)
		{
			if($filledform['semis_hs_universal201314s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_filledformscount += $filledform[0]['count_forms'];
				$filledformscount = $filledform[0]['count_forms'];
			}
		}
		
		// For Finalized Form
		foreach($finalizedforms as $finalizedform)
		{
			if($finalizedform['semis_hs_universal201314s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_finalizedformscount += $finalizedform[0]['count_forms'];
				$finalizedformscount = $finalizedform[0]['count_forms'];
			}
		}
		
		// For forms filled from elsewhere
		foreach($filledfromschools as $filledfromschool)
		{
			if($filledfromschool['semis_hs_universal201314s']['bi_school_district'] == $district['SemisCodeDistrict']['district_id'])
			{
				$total_filledfromschoolcount += $filledfromschool[0]['count_forms'];
				$filledfromschoolcount = $filledfromschool[0]['count_forms'];
			}
		}
		
?>
<tr>
	<td><?php echo $x; ?></td>
	<td><?php echo $district['SemisCodeDistrict']['district']; ?></td>
	<td class="righttxt"><?php echo $filledformscount; ?></td>
	<?php if($uname == 'admin') { ?>
	<td class="righttxt"><?php echo $finalizedformscount; ?></td>
	<?php } ?>
	<td class="righttxt"><?php echo $filledfromschoolcount; ?></td>
	<td class="righttxt"><?php echo $filledformscount - $filledfromschoolcount; ?></td>
</tr>
<?php $x++; } ?>
<tr>
	<td colspan=2 >Total</td>
	<td class="righttxt"><?php echo $total_filledformscount; ?></td>
	<?php if($uname == 'admin') { ?>
	<td class="righttxt"><?php echo $total_finalizedformscount; ?></td>
	<?php } ?>
	<td class="righttxt"><?php echo $total_filledfromschoolcount; ?></td>
	<td class="righttxt"><?php echo $total_filledformscount - $total_filledfromschoolcount; ?></td>
</tr>
</table>
</div>

<script>
	// $('.piechart').hide();
</script>