<?php if($error) { ?>

<div class="error_box"><?php echo $error_message?></div>
<?php }else{ ?>
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

<table>
<tr>
<th width="40%">Name</th>
<th width="30%">SEMIS CODE</th>
</tr>
<tr>
<td><h1>Distance From <?php echo $schools_from['School']['prefix'].' - '.$schools_from['School']['name']?></h1></td>
<td><h1><?php echo $schools_from['School']['code'] ?></h1></td>
</tr>
<tr>
<th width=40%>Distance From School</th>
<th width=30%>SEMIS CODE</th>
<th width=30%>Distance</th>
</tr>

<?php foreach($schools_to as $school_to) { ?>
<tr>
<td><?php echo $school_to['School']['prefix'].' - '.$school_to['School']['name']?></td>
<td><?php echo $school_to['School']['code']?></td>
<td>
	<?php
	if((!($school_to['School']['latitude'] == 0)) && (!($school_to['School']['longitude'] == 0))) 
		{
			echo $this->Number->format(gps_distance($schools_from['School']['latitude'],$schools_from['School']['longitude'],$school_to['School']['latitude'],$school_to['School']['longitude']), array(
			'places' => 3,
			'before' => '',
			'after' => ' Km',-
			'escape' => false,
			'decimals' => '.',
			'thousands' => ','
			)); 
		}else
		{
			echo 'GPS Co-Ordinates For the School Not Entered In The Database';
		}
		
		?>
</td>
</tr>
<?php } ?>
</table>
<?php } ?>