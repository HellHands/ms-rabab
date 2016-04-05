<?php /*
//echo "<pre>";
//print_r($schools);
//echo "</pre>";

foreach($schools as $school)
{
if(($school['School']['teachers_male']+$school['School']['teachers_female']) > 0 && ($school['School']['enrollment_boys']+$school['School']['enrollment_girls']) > 0 )
{
?>
<table style="border:1px solid; margin-top:50px;">
<tr><td style="border:1px solid; background-color:#bbffdd;" width="50%">Name</td><td style="border:1px solid; background-color:#bbffdd;" width="50%"><?php echo $school['School']['prefix'].' - '.$school['School']['name']?></td></tr>
<tr><td style="border:1px solid;">Semis Code</td><td style="border:1px solid;"><?php echo $school['School']['code']?></td></tr>
<tr><td style="border:1px solid;">Cluster Name</td><td style="border:1px solid;"><?php echo $school['cluster_name']?></td></tr>
<tr><td style="border:1px solid;">Uc</td><td style="border:1px solid;"><?php echo $school['uc_name']?></td></tr>
<tr><td style="border:1px solid;">Tauka</td><td style="border:1px solid;"><?php echo $school['taluka_name']?></td></tr>
<tr><td style="border:1px solid;">District</td><td style="border:1px solid;"><?php echo $school['district_name']?></td></tr>
<tr><td style="border:1px solid;">Classrooms</td><td style="border:1px solid;"><?php if(isset($school['classrooms'])) { echo $school['classrooms']; } ?></td></tr>
<tr><td style="border:1px solid;">No of teachers</td><td style="border:1px solid;"><?php echo ($school['School']['teachers_male']+$school['School']['teachers_female'])?></td></tr>
<tr><td style="border:1px solid;">No of Students</td><td style="border:1px solid;"><?php echo ($school['School']['enrollment_boys']+$school['School']['enrollment_girls'])?></td></tr>
</table>
<table style="border:1px solid;">
<tr>
<th style="border:1px solid;">Classroom Teacher Ratio</th>
<th style="border:1px solid;">Classroom Student Ratio</th>
<th style="border:1px solid;">Student Teacher Ratio</th>
</tr>
<tr>
<td style="border:1px solid;"><?php 
if(isset($school['classrooms']))
{
		$_a = $school['classrooms'];
		$_b = $school['School']['teachers_male']+$school['School']['teachers_female'];

		while ($_b != 0) {

			$remainder = $_a % $_b;
			$_a = $_b;
			$_b = $remainder;   
		}

		$gcd = abs($_a);

		echo ($school['classrooms'] / $gcd)  . ':' . (($school['School']['teachers_male']+$school['School']['teachers_female']) / $gcd);

}

?></td>
<td style="border:1px solid;"><?php 
if(isset($school['classrooms']))
{
		$_a = $school['classrooms'];
		$_b = $school['School']['enrollment_boys']+$school['School']['enrollment_girls'];

		while ($_b != 0) {

			$remainder = $_a % $_b;
			$_a = $_b;
			$_b = $remainder;   
		}

		$gcd = abs($_a);

		echo ($school['classrooms'] / $gcd)  . ':' . (($school['School']['enrollment_boys']+$school['School']['enrollment_girls']) / $gcd);

}
?></td>
<td style="border:1px solid;"><?php 
		$_a = ($school['School']['enrollment_boys']+$school['School']['enrollment_girls']);
		$_b = ($school['School']['teachers_male']+$school['School']['teachers_female']);

		while ($_b != 0) {

			$remainder = $_a % $_b;
			$_a = $_b;
			$_b = $remainder;   
		}

		$gcd = abs($_a);

		echo ((($school['School']['enrollment_boys']+$school['School']['enrollment_girls'])) / $gcd)  . ':' . (($school['School']['teachers_male']+$school['School']['teachers_female']) / $gcd);
?></td>
</tr>
</table>

<?php
}
}
 */ ?>