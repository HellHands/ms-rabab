<table>
<tr>
<th>DDO Code</th>
<?php 
	foreach($budget_heads as $budget_head)
	{
		echo '<th>'.$budget_head['BudgetHead']['head_code'].'</th>';
	}
?>
</tr>
<?php 
		//$this->set('ddoBudgetPifra',$ddoBudgetPifra);
		//$this->set('budget_heads',$budget_heads);
		//$this->set('ddos',$ddos);
foreach($ddos as $ddo)
{
	echo '<tr>';
	echo "<td>".$ddo['DdoInfo']['ddo_code']."</td>";
	foreach($budget_heads as $budget_head)
	{
		$thisBudget = 0;
		foreach($ddoBudgetPifras as $ddoBudgetPifra)
		{
			if($ddo['DdoInfo']['ddo_code'] == $ddoBudgetPifra['DdoBudgetPfra']['costcenter'])
			{
				if($budget_head['BudgetHead']['head_code'] == $ddoBudgetPifra['DdoBudgetPfra']['objectcode'])
				{
					$thisBudget += $ddoBudgetPifra['DdoBudgetPfra']['budget'];
				}
			}	
		}
		echo '<td>'.$thisBudget.'</td>';
	}
	echo '</tr>';
	
	
}

?>

</table>