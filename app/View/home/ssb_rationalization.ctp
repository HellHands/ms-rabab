<table border="2" cellpadding="0" cellspacing="0" class="grid_table wf" id="district" >

<tr>
<td>School Id</td>
<td>School Name</td>
<td>Total Rooms</td>
<td>Teachers Assigned</td>
<td>Total Teachers</td>
<td>Total Enrollment</td>
<td>DDO Code</td>
</tr>

<?php 

$x = 0;
foreach($schools as $school )
{
echo '<tr>';
echo '<td>'.$school['SsBudget']['school_id'].'</td>';
echo '<td>'.$school['SsBudget']['prefix'].' - '.$school['SsBudget']['school_name'].'</td>';
echo '<td>'.$school['SsBudget']['total_rooms'].'</td>';
echo '<td>'.$teachers[$x].'</td>';
echo '<td>'.$school['SsBudget']['total_teachers'].'</td>';
echo '<td>'.$school['SsBudget']['total_enrollment_1_to_12'].'</td>';
echo '<td>'.$school['SsBudget']['ddo_code'].'</td>';
echo '</tr>	';
$x++;
} 
?>

</table>