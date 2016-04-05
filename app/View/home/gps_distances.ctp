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



?>
<h1>The Cluster Wise List Of All Schools In Database With Distances From Guide Schools According To GPs Co-ordinates</h1><div style="float:right; margin-right:50px;"><a href="<?php echo $this->webroot?>home/gps_distances/1">Download Report</a></div>
<?php foreach($guide_schools as $guide_school) { ?>
<table border="1" >
<tbody>
<tr><td style="background-color:#bbddff;">District</td><td style="text-transform: uppercase;background-color:#bbddff;"><?php echo $guide_school['district_name']?></td></tr>
<tr><td>Taluka</td><td style="text-transform: uppercase;"><?php echo $guide_school['taluka_name']?></td></tr>
<tr><td>Uc</td><td style="text-transform: uppercase;"><?php echo $guide_school['uc_name']?></td></tr>
<tr><td>Cluster</td><td style="text-transform: uppercase;"><?php echo $guide_school['cluster_name']?></td></tr>
<tr><td>Guide School Name</td><td style="text-transform: uppercase;"><?php echo $guide_school['School']['prefix'].' - '.$guide_school['School']['name']?></td></tr>
<tr><td>Guide School Semis Code</td><td><?php echo $guide_school['School']['code']?></td></tr>

<tbody>
<tbody>
<tr><td colspan=2>List Of Non Guide Schools With Distance According To GPS Co-Ordinates</td><td></td></tr>
</tbody>


<?php 
$x = 0;
foreach($guide_school['NonGuide'] as $non_guide) { ?>
<tbody>
<tr><td style="background-color:#bbddff;">School Name</td><td style="background-color:#bbddff; text-transform: uppercase;"><?php echo $non_guide['prefix'].' - '.$non_guide['name']?></td></tr>
<tr><td>School Semis Code</td><td><?php echo $non_guide['code']?></td></tr>
<tr><td>Distance From Guide</td><td>
<?php 
		
		if((!($non_guide['latitude'] == 0)) && (!($non_guide['longitude'] == 0))) 
		{
			echo $this->Number->format(gps_distance($guide_school['School']['latitude'],$guide_school['School']['longitude'],$non_guide['latitude'],$non_guide['longitude']), array(
			'places' => 3,
			'before' => '',
			'after' => ' Km',
			'escape' => false,
			'decimals' => '.',
			'thousands' => ','
			)); 
		}
		 
		$x++;  
?>
</td></tr>
</tbody>
<?php } ?>
<tr></tr>
<tr></tr>
</table>
<?php } ?>