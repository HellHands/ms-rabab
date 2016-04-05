<div>Schools Within 5 Kilometers Would Be Shown</div>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<tr>
<th>District</th>
<th>Tehsil</th>
<th>Union Council</th>
<th>School ID</th>
<th>5 School Cluster</th>
<th>8 School Cluster</th>
<th>10 Schools Cluster</th>
</tr>
<?php 

foreach($schools as $school)
{
	echo '<tr>';
	echo '<td>'.$school['Benazirabad']['district'].'</td>';
	echo '<td>'.$school['Benazirabad']['tehsil'].'</td>';
	echo '<td>'.$school['Benazirabad']['uc'].'</td>';
	echo '<td>'.$school['Benazirabad']['school_id'].'</td>';
	echo '<td> <a target="_blank" href="'.$this->webroot.'home/benazirabad_cluster/'.$school['Benazirabad']['school_id'].'/5/5" > View Cluster </a></td>';
	echo '<td> <a target="_blank" href="'.$this->webroot.'home/benazirabad_cluster/'.$school['Benazirabad']['school_id'].'/5/8" > View Cluster </a></td>';
	echo '<td> <a target="_blank" href="'.$this->webroot.'home/benazirabad_cluster/'.$school['Benazirabad']['school_id'].'/5/10" > View Cluster </a></td>';
	echo '</tr>';
}
?>

</table>