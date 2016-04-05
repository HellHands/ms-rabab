<table style="text-size:12px;" >
<tr><td colspan=13 ><h1>The Reports are here (click the ddo for distribution in schools or code to edit the details)</h1></td></tr>
<tr>
<th>District</th>
<th>Thsil</th>
<th>DDO Code</th>
<th>DDO Name</th>
<th>School Levels</th>
<th>475 Total</th>
<th>476 Total</th>
<th>477 Total</th>
<th>478 Total</th>
<th>479 Total</th>
<th>480 Total</th>
<th>SSB Total</th>
<th>SNE total</th>
</tr>
<?php foreach($ddos as $ddo) {

	echo '<tr>';
	echo '<td>'.$ddo['DdoInfo']['district'].'</td>';
	echo '<td><a target="_blank" href="'.$this->webroot.'home/ssb_budget_schools/'.$ddo['DdoInfo']['id'].'" >'.$ddo['DdoInfo']['tehsil'].'</a></td>';
	echo '<td><a target="_blank" href="'.$this->webroot.'home/ssb_ddo_edit/'.$ddo['DdoInfo']['id'].'" >'.$ddo['DdoInfo']['ddo_code'].'</a></td>';
	echo '<td><a href="'.$this->webroot.'home/ssb_school_distribution/'.$ddo['DdoInfo']['id'].'" target="_blank">'.$ddo['DdoInfo']['ddo_name'].'</a></td>';
	echo '<td>'.$ddo['DdoInfo']['school_levels'].'</td>';
	echo '<td>'.$ddo['DdoInfo']['475_total'].'</td>';
	echo '<td>'.$ddo['DdoInfo']['476_total'].'</td>';
	echo '<td>'.$ddo['DdoInfo']['477_total'].'</td>';
	echo '<td>'.$ddo['DdoInfo']['478_total'].'</td>';
	echo '<td>'.$ddo['DdoInfo']['479_total'].'</td>';
	echo '<td>'.$ddo['DdoInfo']['480_total'].'</td>';
	echo '<td>'.$ddo['DdoInfo']['ssb_total'].'</td>';
	echo '<td>'.$ddo['DdoInfo']['total_sne'].'</td>';
	echo '</tr>';

} ?>
</table>