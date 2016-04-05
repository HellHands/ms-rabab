<?php if($superadmin == 2) { ?>
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


</div>



<div class="printbodytxt" id="printbodytxt">


<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="tabledata">

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
<?php } ?>
<?php if($superadmin == 4) { ?>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="tabledata">

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
<?php } ?>