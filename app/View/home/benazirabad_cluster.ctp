<div>Schools Within 5 Kilometers Would Be Shown</div>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<tr>
<th>District</th>
<th>Tehsil</th>
<th>Union Council</th>
<th>School ID</th>
<th>Distance (KM) </th>
</tr>
<?php 

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


foreach($schools as $school) 
{
	echo '<tr>';
	echo '<td>'.$school['benazirabads']['district'].'</td>';
	echo '<td>'.$school['benazirabads']['tehsil'].'</td>';
	echo '<td>'.$school['benazirabads']['uc'].'</td>';
	echo '<td>'.$school['benazirabads']['school_id'].'</td>';
	echo '<td>'.$school['benazirabads']['distance'].'</td>';
	echo '</tr>';
}
?>