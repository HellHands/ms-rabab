<?php 
if(!isset($filename))
{
	?>
	<h6><a href="<?php echo $this->webroot.'home/ssb_school_distribution/'.$ddo['DdoInfo']['id'].'/1/1'; ?>" >Download the file</a></h6>
	<?php
}
?>

<table>
<thead>
<tr>
<td colspan=10 style="font-size:27px; font-family:Arial Narrow;" >School Specific Budget 2014-15</td>
</tr>
<tr>
<td colspan=3 style="font-size:18px; font-family:Arial Narrow;" >District : <?php echo $ddo['DdoInfo']['district']; ?></td>
<td colspan=7 style="font-size:18px; font-family:Arial Narrow;" >Taluka : <?php echo $ddo['DdoInfo']['tehsil']; ?> </td>
</tr>
<tr>
<td colspan=10 style="font-size:16px; font-family:Arial Narrow;" ><?php echo $ddo['DdoInfo']['ddo_code']." - ".$ddo['DdoInfo']['ddo_name']; ?></td>
</tr>
<tr>
<td colspan=10 style="font-size:16px; font-family:Arial Narrow;" >Object Head A03-Operating Expenses, A039-General, A03970-Others</td>
</tr>
</thead>
<tbody cellpadding="0" cellspacing="0" style="font-family:Arial Narrow; border:1px solid #000; font-size:14px;" class="grid_table wf" id="district" >


<?php 
	$total_475 = 0;
	$total_476 = 0;
	$total_477 = 0;
	$total_478 = 0;
	$total_479 = 0;
	$total_480 = 0;
	
	foreach($schools as $school) {
		$total_475 += $school['SsBudget']['475'];
		$total_476 += $school['SsBudget']['476'];
		$total_477 += $school['SsBudget']['477'];
		$total_478 += $school['SsBudget']['478'];
		$total_479 += $school['SsBudget']['479'];
		$total_480 += $school['SsBudget']['480'];
}
?>


<tr>
<td style="font-weight:bold; font-family:Arial Narrow; border:1px solid #000; font-size:16px; text-align:center; vertical-align:middle; width:40px; word-wrap:break-word;" >S.No.</td>
<td style="font-weight:bold; font-family:Arial Narrow; border:1px solid #000; font-size:16px; text-align:center; vertical-align:middle; width:110px; word-wrap:break-word;" >SEMIS Code</td>
<td style="font-weight:bold; font-family:Arial Narrow; border:1px solid #000; font-size:16px; text-align:center; vertical-align:middle; width:250px; word-wrap:break-word;" >Name of School</td>
<!--td>Total No. of PST</td-->
<td style="font-weight:bold; font-family:Arial Narrow; border:1px solid #000; font-size:16px; text-align:center; vertical-align:middle; width:110px; word-wrap:break-word;" >475<br>Others - Inclass Material and supplies</td>
<td style="font-weight:bold; font-family:Arial Narrow; border:1px solid #000; font-size:16px; text-align:center; vertical-align:middle; width:110px; word-wrap:break-word;" >476<br>Others - Library Laboratory</td>
<td style="font-weight:bold; font-family:Arial Narrow; border:1px solid #000; font-size:16px; text-align:center; vertical-align:middle; width:110px; word-wrap:break-word;" >477<br>Others - Co-Curricular Activities</td>
<td style="font-weight:bold; font-family:Arial Narrow; border:1px solid #000; font-size:16px; text-align:center; vertical-align:middle; width:110px; word-wrap:break-word;" >478<br>Other- Sport</td>
<td style="font-weight:bold; font-family:Arial Narrow; border:1px solid #000; font-size:16px; text-align:center; vertical-align:middle; width:110px; word-wrap:break-word;" >479<br>Travelling Allowance (School Specific Budget)</td>
<td style="font-weight:bold; font-family:Arial Narrow; border:1px solid #000; font-size:16px; text-align:center; vertical-align:middle; width:110px; word-wrap:break-word;" >480<br>Stationary (School Specific Budget)</td>
<td style="font-weight:bold; font-family:Arial Narrow; border:1px solid #000; font-size:16px; text-align:center; vertical-align:middle; width:110px; word-wrap:break-word;" >Total SSB</td>
</tr>

<tr>
<td style="font-weight:bold; font-family:Arial Narrow; border:1px solid #000; font-size:16px; text-align:center; vertical-align:middle; width:40px; word-wrap:break-word;" >1</td>
<td style="font-weight:bold; font-family:Arial Narrow; border:1px solid #000; font-size:16px; text-align:center; vertical-align:middle; width:110px; word-wrap:break-word;" >2</td>
<td style="font-weight:bold; font-family:Arial Narrow; border:1px solid #000; font-size:16px; text-align:center; vertical-align:middle; width:250px; word-wrap:break-word;" >3</td>
<!--td>Total No. of PST</td-->
<td style="font-weight:bold; font-family:Arial Narrow; border:1px solid #000; font-size:16px; text-align:center; vertical-align:middle; width:110px; word-wrap:break-word;" >4</td>
<td style="font-weight:bold; font-family:Arial Narrow; border:1px solid #000; font-size:16px; text-align:center; vertical-align:middle; width:110px; word-wrap:break-word;" >5</td>
<td style="font-weight:bold; font-family:Arial Narrow; border:1px solid #000; font-size:16px; text-align:center; vertical-align:middle; width:110px; word-wrap:break-word;" >6</td>
<td style="font-weight:bold; font-family:Arial Narrow; border:1px solid #000; font-size:16px; text-align:center; vertical-align:middle; width:110px; word-wrap:break-word;" >7</td>
<td style="font-weight:bold; font-family:Arial Narrow; border:1px solid #000; font-size:16px; text-align:center; vertical-align:middle; width:110px; word-wrap:break-word;" >8</td>
<td style="font-weight:bold; font-family:Arial Narrow; border:1px solid #000; font-size:16px; text-align:center; vertical-align:middle; width:110px; word-wrap:break-word;" >9</td>
<td style="font-weight:bold; font-family:Arial Narrow; border:1px solid #000; font-size:16px; text-align:center; vertical-align:middle; width:110px; word-wrap:break-word;" >(4 to 9) 10</td>
</tr>

<?php $x = 1; foreach($schools as $school) {
// echo '<tr>';
// echo '<td>'.$school['SsBudget']['school_id'].'</td>';
// echo '<td>'.$school['SsBudget']['prefix'].' - '.$school['SsBudget']['school_name'].'</td>';
// echo '<td></td>';
// echo '<td>'.$school['SsBudget']['475'].'</td>';
// echo '<td>'.$school['SsBudget']['476'].'</td>';
// echo '<td>'.$school['SsBudget']['477'].'</td>';
// echo '<td>'.$school['SsBudget']['478'].'</td>';
// echo '<td>'.$school['SsBudget']['479'].'</td>';
// echo '<td>'.$school['SsBudget']['480'].'</td>';
// echo '<td>'.$school['SsBudget']['total_ssb'].'</td>';
// echo '</tr>';

echo '<tr>';
echo '<td width=20px style="font-family:Arial Narrow; text-align:center; vertical-align:middle; border:1px solid #000; font-size:16px; word-wrap:break-word;" >'.$x.'</td>';
$x++;
echo '<td style="font-family:Arial Narrow; border:1px solid #000; text-align:center; vertical-align:middle; font-size:16px; word-wrap:break-word;" >'.$school['SsBudget']['school_id'].'</td>';
echo '<td style="font-family:Arial Narrow; border:1px solid #000; font-size:16px; text-align:center; vertical-align:middle; word-wrap:break-word;" >'.$school['SsBudget']['prefix'].' - '.$school['SsBudget']['school_name'].'</td>';
//echo '<td>'.$school['SsBudget']['total_rationalize'].'</td>';
echo '<td style="font-family:Arial Narrow; border:1px solid #000; text-align:center; vertical-align:middle; font-size:16px; word-wrap:break-word;" >'.number_format(round((($school["SsBudget"]["475"]/$total_475) * $ddo['DdoInfo']['475_total']),0)).'</td>';
echo '<td style="font-family:Arial Narrow; border:1px solid #000; text-align:center; vertical-align:middle; font-size:16px; word-wrap:break-word;" >'.number_format(round((($school['SsBudget']['476']/$total_476) * $ddo['DdoInfo']['476_total']),0)).'</td>';
echo '<td style="font-family:Arial Narrow; border:1px solid #000; text-align:center; vertical-align:middle; font-size:16px; word-wrap:break-word;" >'.number_format(round((($school['SsBudget']['477']/$total_477) * $ddo['DdoInfo']['477_total']),0)).'</td>';
echo '<td style="font-family:Arial Narrow; border:1px solid #000; text-align:center; vertical-align:middle; font-size:16px; word-wrap:break-word;" >'.number_format(round((($school['SsBudget']['478']/$total_478) * $ddo['DdoInfo']['478_total']),0)).'</td>';
echo '<td style="font-family:Arial Narrow; border:1px solid #000; text-align:center; vertical-align:middle; font-size:16px; word-wrap:break-word;" >'.number_format(round((($school['SsBudget']['479']/$total_479) * $ddo['DdoInfo']['479_total']),0)).'</td>';
echo '<td style="font-family:Arial Narrow; border:1px solid #000; text-align:center; vertical-align:middle; font-size:16px; word-wrap:break-word;" >'.number_format(round((($school['SsBudget']['480']/$total_480) * $ddo['DdoInfo']['480_total']),0)).'</td>';
echo '<td style="font-family:Arial Narrow; border:1px solid #000; text-align:center; vertical-align:middle; font-size:16px; word-wrap:break-word;" >'.number_format(round((($school['SsBudget']['total_ssb']/$ddo['DdoInfo']['ssb_total']) * $ddo['DdoInfo']['ssb_total']),0)).'</td>';
echo '</tr>';

}

echo '<tr>';
echo '<td colspan=3 width=20px style="text-align:center; vertical-align:middle; font-weight:bold; font-family:Arial Narrow; border-top:2px solid #000; border-bottom:2px solid #000; font-size:16px; word-wrap:break-word;" >Total</td>';
//echo '<td>'.$school['SsBudget']['total_rationalize'].'</td>';
echo '<td style="font-weight:bold; font-family:Arial Narrow; border-top:2px solid #000; border-bottom:2px solid #000; text-align:center; vertical-align:middle; font-size:16px; word-wrap:break-word;" >'.number_format(round(($ddo['DdoInfo']['475_total']),0)).'</td>';
echo '<td style="font-weight:bold; font-family:Arial Narrow; border-top:2px solid #000; border-bottom:2px solid #000; text-align:center; vertical-align:middle; font-size:16px; word-wrap:break-word;" >'.number_format(round(($ddo['DdoInfo']['476_total']),0)).'</td>';
echo '<td style="font-weight:bold; font-family:Arial Narrow; border-top:2px solid #000; border-bottom:2px solid #000; text-align:center; vertical-align:middle; font-size:16px; word-wrap:break-word;" >'.number_format(round(($ddo['DdoInfo']['477_total']),0)).'</td>';
echo '<td style="font-weight:bold; font-family:Arial Narrow; border-top:2px solid #000; border-bottom:2px solid #000; text-align:center; vertical-align:middle; font-size:16px; word-wrap:break-word;" >'.number_format(round(($ddo['DdoInfo']['478_total']),0)).'</td>';
echo '<td style="font-weight:bold; font-family:Arial Narrow; border-top:2px solid #000; border-bottom:2px solid #000; text-align:center; vertical-align:middle; font-size:16px; word-wrap:break-word;" >'.number_format(round(($ddo['DdoInfo']['479_total']),0)).'</td>';
echo '<td style="font-weight:bold; font-family:Arial Narrow; border-top:2px solid #000; border-bottom:2px solid #000; text-align:center; vertical-align:middle; font-size:16px; word-wrap:break-word;" >'.number_format(round(($ddo['DdoInfo']['480_total']),0)).'</td>';
echo '<td style="font-weight:bold; font-family:Arial Narrow; border-top:2px solid #000; border-bottom:2px solid #000; text-align:center; vertical-align:middle; font-size:16px; word-wrap:break-word;" >'.number_format(round(($ddo['DdoInfo']['ssb_total']),0)).'</td>';
echo '</tr>';

?>
<?php /* ?>
<tr>
<td>School Name</td>
<td>SEMIS Code</td>
<td>DDO Code</td>
<td>Object Code</td>
<td>Sub Head</td>
<td>Total Amount</td>
<td>Teachers Working (SEMIS)</td>
<td>Excess Teachers</td>
<td>Required Teachers</td>
<td>Total Enrollment 1 to 12(SEMIS)</td>
<td>Total Rooms (SEMIS)</td>
</tr>

<?php /* foreach($schools as $school) { ?>

<tr>
<td><?php echo $school['SsBudget']['prefix'].' - '.$school['SsBudget']['school_name']?></td>
<td><?php echo $school['SsBudget']['school_id']?></td>
<td><?php echo $school['SsBudget']['ddo_code']?></td>
<td>A0397</td>
<td>475 In Class</td>
<td><?php echo $school['SsBudget']['475']; ?></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td><?php echo $school['SsBudget']['prefix'].' - '.$school['SsBudget']['school_name']?></td>
<td><?php echo $school['SsBudget']['school_id']?></td>
<td><?php echo $school['SsBudget']['ddo_code']?></td>
<td>A0397</td>
<td>476 library & Labortary</td>
<td><?php echo $school['SsBudget']['476']; ?></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td><?php echo $school['SsBudget']['prefix'].' - '.$school['SsBudget']['school_name']?></td>
<td><?php echo $school['SsBudget']['school_id']?></td>
<td><?php echo $school['SsBudget']['ddo_code']?></td>
<td>A0397</td>
<td>477 Co-Curricular Activities</td>
<td><?php echo $school['SsBudget']['477']; ?></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td><?php echo $school['SsBudget']['prefix'].' - '.$school['SsBudget']['school_name']?></td>
<td><?php echo $school['SsBudget']['school_id']?></td>
<td><?php echo $school['SsBudget']['ddo_code']?></td>
<td>A0397</td>
<td>478 Other Sports</td>
<td><?php echo $school['SsBudget']['478']; ?></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td><?php echo $school['SsBudget']['prefix'].' - '.$school['SsBudget']['school_name']?></td>
<td><?php echo $school['SsBudget']['school_id']?></td>
<td><?php echo $school['SsBudget']['ddo_code']?></td>
<td>A0397</td>
<td>479 Travelling Allowance</td>
<td><?php echo $school['SsBudget']['479']; ?></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td><?php echo $school['SsBudget']['prefix'].' - '.$school['SsBudget']['school_name']?></td>
<td><?php echo $school['SsBudget']['school_id']?></td>
<td><?php echo $school['SsBudget']['ddo_code']?></td>
<td>A0397</td>
<td>480 Stationary</td>
<td><?php echo $school['SsBudget']['480']; ?></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>

<tr>
<td><?php echo $school['SsBudget']['prefix'].' - '.$school['SsBudget']['school_name']?></td>
<td><?php echo $school['SsBudget']['school_id']?></td>
<td><?php echo $school['SsBudget']['ddo_code']?></td>
<td>Total</td>
<td>Total SSB</td>
<td><?php echo $school['SsBudget']['total_ssb']; ?></td>
<td><?php echo $school['SsBudget']['total_teachers']; ?></td>
<td><?php echo $school['SsBudget']['excess_teachers']; ?></td>
<td><?php echo $school['SsBudget']['required_teachers']; ?></td>
<td><?php echo $school['SsBudget']['total_enrollment_1_to_12']; ?></td>
<td><?php echo $school['SsBudget']['total_rooms']; ?></td>
</tr>

<?php } */ ?>

</tbody>
</table>