<table border="2" cellpadding="0" cellspacing="0" class="grid_table wf" id="district" >
<tr>
<td>District</td>
<td>Tehsil</td>
<td>COST CTR</td>
<td>DDO Name</td>
<td>Proj</td>
<td>Subsect</td>
<td>School Name</td>
<td>WBS</td>
<td>Head Description</td>
<td>Budget</td>
<td>Enrollment</td>
</tr>

<?php 
$no_of_schools = count($schools);
foreach($schools as $school)
{ 

foreach($budget_heads as $budget_head) { 
// if(strpos($budget_head["BudgetHead"]["head_code"],'A03805') !== false)
// {
	// echo '<tr>';
	// echo '<td>'.$school["SsBudget2"]["district"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["tehsil"].'</td>';
	// echo '<td>'.$ddo["DdoInfo"]["ddo_code"].'</td>';
	// echo '<td>'.$ddo["DdoInfo"]["ddo_name"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["school_id"].'</td>';
	
	// if($school["SsBudget2"]["prefix"] == 'GBPS' || $school["SsBudget2"]["prefix"] == 'GGPS')
	// {
		// echo '<td>Primary</td>'; 
	// }
	// if($school["SsBudget2"]["prefix"] == 'GBLSS' || $school["SsBudget2"]["prefix"] == 'GGLSS')
	// {
		// echo '<td>Middle</td>'; 
	// }
	// if($school["SsBudget2"]["prefix"] == 'GBELS' || $school["SsBudget2"]["prefix"] == 'GGELS')
	// {
		// echo '<td>Elementary</td>'; 
	// }
	// if($school["SsBudget2"]["prefix"] == 'GBHS' || $school["SsBudget2"]["prefix"] == 'GGHS' || $school["SsBudget2"]["prefix"] == 'GBHSS' || $school["SsBudget2"]["prefix"] == 'GGHSS')
	// {
		// echo '<td>High - Higher Secondary</td>'; 
	// }
	// // echo '<td>'.$school["SsBudget2"]["prefix"].'</td>';
	
	// echo '<td>'.$school["SsBudget2"]["school_name"].'</td>';
	// echo '<td>'.$budget_head["BudgetHead"]["head_code"].'</td>';
	// echo '<td>'.$budget_head["BudgetHead"]["head_name"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["479"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["total_enrollment_1_to_12"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["total_rooms"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["total_teachers"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["total_rationalize"].'</td>';
	// echo '</tr>';

// }elseif(strpos($budget_head["BudgetHead"]["head_code"],'A03901') !== false)
// {
	// echo '<tr>';
	// echo '<td>'.$school["SsBudget2"]["district"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["tehsil"].'</td>';
	// echo '<td>'.$ddo["DdoInfo"]["ddo_code"].'</td>';
	// echo '<td>'.$ddo["DdoInfo"]["ddo_name"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["school_id"].'</td>';
		
	// if($school["SsBudget2"]["prefix"] == 'GBPS' || $school["SsBudget2"]["prefix"] == 'GGPS')
	// {
		// echo '<td>Primary</td>'; 
	// }
	// if($school["SsBudget2"]["prefix"] == 'GBLSS' || $school["SsBudget2"]["prefix"] == 'GGLSS')
	// {
		// echo '<td>Middle</td>'; 
	// }
	// if($school["SsBudget2"]["prefix"] == 'GBELS' || $school["SsBudget2"]["prefix"] == 'GGELS')
	// {
		// echo '<td>Elementary</td>'; 
	// }
	// if($school["SsBudget2"]["prefix"] == 'GBHS' || $school["SsBudget2"]["prefix"] == 'GGHS' || $school["SsBudget2"]["prefix"] == 'GBHSS' || $school["SsBudget2"]["prefix"] == 'GGHSS')
	// {
		// echo '<td>High - Higher Secondary</td>'; 
	// }
	// // echo '<td>'.$school["SsBudget2"]["prefix"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["school_name"].'</td>';
	// echo '<td>'.$budget_head["BudgetHead"]["head_code"].'</td>';
	// echo '<td>'.$budget_head["BudgetHead"]["head_name"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["480"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["total_enrollment_1_to_12"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["total_rooms"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["total_teachers"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["total_rationalize"].'</td>';
	// echo '</tr>';

// }else
if(strpos($budget_head["BudgetHead"]["head_code"],'A03970') !== false)
{
	echo '<tr>';
	echo '<td>'.$school["SsBudget2"]["district"].'</td>';
	echo '<td>'.$school["SsBudget2"]["tehsil"].'</td>';
	echo '<td>'.$ddo["DdoInfo"]["ddo_code"].'</td>';
	echo '<td>'.$ddo["DdoInfo"]["ddo_name"].'</td>';
	echo '<td>'.$school["SsBudget2"]["school_id"].'</td>';
		
	if($school["SsBudget2"]["prefix"] == 'GBPS' || $school["SsBudget2"]["prefix"] == 'GGPS')
	{
		echo '<td>Primary</td>'; 
	}
	if($school["SsBudget2"]["prefix"] == 'GBLSS' || $school["SsBudget2"]["prefix"] == 'GGLSS')
	{
		echo '<td>Middle</td>'; 
	}
	if($school["SsBudget2"]["prefix"] == 'GBELS' || $school["SsBudget2"]["prefix"] == 'GGELS')
	{
		echo '<td>Elementary</td>'; 
	}
	if($school["SsBudget2"]["prefix"] == 'GBHS' || $school["SsBudget2"]["prefix"] == 'GGHS' || $school["SsBudget2"]["prefix"] == 'GBHSS' || $school["SsBudget2"]["prefix"] == 'GGHSS')
	{
		echo '<td>High - Higher Secondary</td>'; 
	}
	//echo '<td>'.$school["SsBudget2"]["prefix"].'</td>';
	echo '<td>'.$school["SsBudget2"]["school_name"].'</td>';
	echo '<td>'.$budget_head["BudgetHead"]["head_code"].'</td>';
	echo '<td>'.$budget_head["BudgetHead"]["head_name"].'</td>';
	echo '<td>'.($school["SsBudget2"]["475"] + $school["SsBudget2"]["476"] + $school["SsBudget2"]["477"] + $school["SsBudget2"]["478"] + $school["SsBudget2"]["479"] + $school["SsBudget2"]["480"]).'</td>';
	echo '<td>'.$school["SsBudget2"]["total_enrollment_1_to_12"].'</td>';
	echo '</tr>';

// }elseif(strpos($budget_head["BudgetHead"]["head_code"],'476') !== false)
// {
	// echo '<tr>';
	// echo '<td>'.$school["SsBudget2"]["district"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["tehsil"].'</td>';
	// echo '<td>'.$ddo["DdoInfo"]["ddo_code"].'</td>';
	// echo '<td>'.$ddo["DdoInfo"]["ddo_name"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["school_id"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["prefix"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["school_name"].'</td>';
	// echo '<td>'.$budget_head["BudgetHead"]["head_code"].'</td>';
	// echo '<td>'.$budget_head["BudgetHead"]["head_name"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["476"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["total_enrollment_1_to_12"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["total_rooms"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["total_teachers"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["total_rationalize"].'</td>';
	// echo '</tr>';

// }elseif(strpos($budget_head["BudgetHead"]["head_code"],'477') !== false)
// {
	// echo '<tr>';
	// echo '<td>'.$school["SsBudget2"]["district"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["tehsil"].'</td>';
	// echo '<td>'.$ddo["DdoInfo"]["ddo_code"].'</td>';
	// echo '<td>'.$ddo["DdoInfo"]["ddo_name"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["school_id"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["prefix"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["school_name"].'</td>';
	// echo '<td>'.$budget_head["BudgetHead"]["head_code"].'</td>';
	// echo '<td>'.$budget_head["BudgetHead"]["head_name"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["477"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["total_enrollment_1_to_12"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["total_rooms"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["total_teachers"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["total_rationalize"].'</td>';
	// echo '</tr>';

// }elseif(strpos($budget_head["BudgetHead"]["head_code"],'478') !== false)
// {
	// echo '<tr>';
	// echo '<td>'.$school["SsBudget2"]["district"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["tehsil"].'</td>';
	// echo '<td>'.$ddo["DdoInfo"]["ddo_code"].'</td>';
	// echo '<td>'.$ddo["DdoInfo"]["ddo_name"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["school_id"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["prefix"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["school_name"].'</td>';
	// echo '<td>'.$budget_head["BudgetHead"]["head_code"].'</td>';
	// echo '<td>'.$budget_head["BudgetHead"]["head_name"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["478"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["total_enrollment_1_to_12"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["total_rooms"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["total_teachers"].'</td>';
	// echo '<td>'.$school["SsBudget2"]["total_rationalize"].'</td>';
	// echo '</tr>';

}else
{
	echo '<tr>';
	echo '<td>'.$school["SsBudget2"]["district"].'</td>';
	echo '<td>'.$school["SsBudget2"]["tehsil"].'</td>';
	echo '<td>'.$ddo["DdoInfo"]["ddo_code"].'</td>';
	echo '<td>'.$ddo["DdoInfo"]["ddo_name"].'</td>';
	echo '<td>'.$school["SsBudget2"]["school_id"].'</td>';
		
	if($school["SsBudget2"]["prefix"] == 'GBPS' || $school["SsBudget2"]["prefix"] == 'GGPS')
	{
		echo '<td>Primary</td>'; 
	}
	if($school["SsBudget2"]["prefix"] == 'GBLSS' || $school["SsBudget2"]["prefix"] == 'GGLSS')
	{
		echo '<td>Middle</td>'; 
	}
	if($school["SsBudget2"]["prefix"] == 'GBELS' || $school["SsBudget2"]["prefix"] == 'GGELS')
	{
		echo '<td>Elementary</td>'; 
	}
	if($school["SsBudget2"]["prefix"] == 'GBHS' || $school["SsBudget2"]["prefix"] == 'GGHS' || $school["SsBudget2"]["prefix"] == 'GBHSS' || $school["SsBudget2"]["prefix"] == 'GGHSS')
	{
		echo '<td>High - Higher Secondary</td>'; 
	}
	//echo '<td>'.$school["SsBudget2"]["prefix"].'</td>';
	echo '<td>'.$school["SsBudget2"]["school_name"].'</td>';
	echo '<td>'.$budget_head["BudgetHead"]["head_code"].'</td>';
	echo '<td>'.$budget_head["BudgetHead"]["head_name"].'</td>';
	if($ddo_budget[0]["DdoBudget"][$budget_head['BudgetHead']['head_code']])
	{
		echo '<td>'.round(($ddo_budget[0]["DdoBudget"][$budget_head['BudgetHead']['head_code']]) / $no_of_schools,0).'</td>';
	}else
	{
		echo "<td>0</td>";
	}
	echo '<td>'.$school["SsBudget2"]["total_enrollment_1_to_12"].'</td>';
	echo '</tr>';
}
 
} } 

?>

</table>