
<table border=1> 
<tr><th colspan=13><?php echo "Messages for Schools of ".$schools[0]["SsbBudgetFinal"]["district"]; ?></th></tr>
<tr>
	<th>Id</th>
	<th>District</th>
	<th>DDO Code</th>
	<th>DDO Name</th>
	<th>School SEMIS</th>
	<th>School Name</th>
	<th>SSB 1</th>
	<th>SSB 2</th>
	<th>Total Teachers</th>
	<th>HM Contact</th>
	<th>School Contact</th>
	<th>Supervisor Contact</th>
	<th>SMS</th>
</tr>
<?php 

	


	foreach($schools as $school)
	{
		if(abs($school["SsbBudgetFinal"]["ssb_comp"] - $school["SsbBudgetFinal"]["ssb_select"]) < 1000)
		{
			echo '<tr>';
			echo '<td>'.$school["SsbBudgetFinal"]["id"].'</td>';
			echo '<td>'.$school["SsbBudgetFinal"]["district"].'</td>';
			echo '<td>'.$school["SsbBudgetFinal"]["ddo_code"].'</td>';
			echo '<td>'.$school["SsbBudgetFinal"]["ddo_name"].'</td>';
			echo '<td>'.$school["SsbBudgetFinal"]["school_id"].'</td>';
			// echo '<td>'.$school["SsbBudgetFinal"]["prefix"].'</td>';
			echo '<td>'.$school["SsbBudgetFinal"]["school_name"].'</td>';
			echo '<td>'.$school["SsbBudgetFinal"]["ssb_comp"].'</td>';
			echo '<td>'.$school["SsbBudgetFinal"]["ssb_select"].'</td>';
			echo '<td>'.$school["SsbBudgetFinal"]["total_teachers"].'</td>';
			echo '<td>0'.$school["SsbBudgetFinal"]["hm_contact_no"].'</td>';
			echo '<td>0'.$school["SsbBudgetFinal"]["school_contact_number"].'</td>';
			echo '<td>0'.$school["SsbBudgetFinal"]["supervisor_contact_number"].'</td>';
			echo '<td>Every School has been allocated fixed teachers and Non-Salary Budget. Estimated budge for your school  '.$school["SsbBudgetFinal"]["school_id"].'- '.$school["SsbBudgetFinal"]["school_name"].' is Rs. '.$school["SsbBudgetFinal"]["ssb_select"].' and PST ['.$school["SsbBudgetFinal"]["total_teachers"].'] can work in your school. Please contact your ADO for further detail.</td>';
			echo '</tr>';
		}else
		{
			echo '<tr>';
			echo '<td>'.$school["SsbBudgetFinal"]["id"].'</td>';
			echo '<td>'.$school["SsbBudgetFinal"]["district"].'</td>';
			echo '<td>'.$school["SsbBudgetFinal"]["ddo_code"].'</td>';
			echo '<td>'.$school["SsbBudgetFinal"]["ddo_name"].'</td>';
			echo '<td>'.$school["SsbBudgetFinal"]["school_id"].'</td>';
			// echo '<td>'.$school["SsbBudgetFinal"]["prefix"].'</td>';
			echo '<td>'.$school["SsbBudgetFinal"]["school_name"].'</td>';
			echo '<td>'.$school["SsbBudgetFinal"]["ssb_comp"].'</td>';
			echo '<td>'.$school["SsbBudgetFinal"]["ssb_select"].'</td>';
			echo '<td>'.$school["SsbBudgetFinal"]["total_teachers"].'</td>';
			echo '<td>0'.$school["SsbBudgetFinal"]["hm_contact_no"].'</td>';
			echo '<td>0'.$school["SsbBudgetFinal"]["school_contact_number"].'</td>';
			echo '<td>0'.$school["SsbBudgetFinal"]["supervisor_contact_number"].'</td>';
			echo '<td>Every School has been allocated fixed teachers and Non-Salary Budget. Approximate estimated budge for your school  '.$school["SsbBudgetFinal"]["school_id"].'- '.$school["SsbBudgetFinal"]["school_name"].' is Rs. '.((floor(($school["SsbBudgetFinal"]["ssb_select"]/1000))*1000)).' and PST ['.$school["SsbBudgetFinal"]["total_teachers"].'] can work in your school. Please contact your ADO for further detail.</td>';
			echo '</tr>';
		}
	}

?>
</table>
<?php 












// foreach($schools as $school)
// {
	// echo '<item><label>'.$school['semisUniversal2010']['school_id'].' - '.$school['semisUniversal2010']['prefix'].' - '.$school['semisUniversal2010']['school_name'].'</label><value>'.$school['semisUniversal2010']['school_id'].'</value></item>';
// }



/*

<table border="1" cellpadding="0" cellspacing="0" class="grid_table wf" id="notifiedCluster" >
<tr>
<td>Domicile</td>
<td>Training</td>
<td>Qualification</td>
<td>Location</td>
<td>District of School Posted In</td>
<td>Number of Teachers</td>
</tr>
<?php foreach($query_final as $query) { ?>
<tr>
<td><?php 
	if($query['SemisTeachers2010']['training_funding_agency'] == 1)
	{
		echo 'Provincial Education Department';
	}elseif($query['SemisTeachers2010']['training_funding_agency'] == 2)
	{
		echo 'AEPAM';
	}elseif($query['SemisTeachers2010']['training_funding_agency'] == 3)
	{
		echo 'UNICEF';
	}elseif($query['SemisTeachers2010']['training_funding_agency'] == 4)
	{
		echo 'UNESCO';
	}elseif($query['SemisTeachers2010']['training_funding_agency'] == 5)
	{
		echo 'Pre-Step';
	}elseif($query['SemisTeachers2010']['training_funding_agency'] == 6)
	{
		echo 'USAid/Edlinks';
	}elseif($query['SemisTeachers2010']['training_funding_agency'] == 7)
	{
		echo 'NGO';
	}elseif($query['SemisTeachers2010']['training_funding_agency'] == 8)
	{
		echo 'ESRA';
	}elseif($query['SemisTeachers2010']['training_funding_agency'] == 9)
	{
		echo 'European Union (EU)';
	}elseif($query['SemisTeachers2010']['training_funding_agency'] == 10)
	{
		echo 'AKU-IED';
	}elseif($query['SemisTeachers2010']['training_funding_agency'] == 11)
	{
		echo 'Other';
	}else
	{
		echo 'No Info';
	}
	
	//echo $query['SemisCodeDistrict']['district']; ?></td>
<td><?php 
	if($query['SemisTeachers2010']['training_id'] == 0)
	{
		echo 'No Info';
	}elseif($query['SemisTeachers2010']['training_id'] == 1)
	{
		echo 'PTC';
	}elseif($query['SemisTeachers2010']['training_id'] == 2)
	{
		echo 'CT';
	}elseif($query['SemisTeachers2010']['training_id'] == 3)
	{
		echo 'B.Ed';
	}elseif($query['SemisTeachers2010']['training_id'] == 4)
	{
		echo 'M.Ed';
	}elseif($query['SemisTeachers2010']['training_id'] == 5)
	{
		echo 'Other';
	}elseif($query['SemisTeachers2010']['training_id'] == 6)
	{
		echo 'Untrained';
	}else
	{
		echo 'No Info';
	}
	
	
	/*
	if($query['SemisTeachers2010']['designation_id'] == 0)
	{
		echo 'No Info';
	}elseif($query['SemisTeachers2010']['designation_id'] == 1)
	{
		echo 'PST';
	}elseif($query['SemisTeachers2010']['designation_id'] == 2)
	{
		echo 'JST';
	}elseif($query['SemisTeachers2010']['designation_id'] == 3)
	{
		echo 'HST';
	}elseif($query['SemisTeachers2010']['designation_id'] == 4)
	{
		echo 'SS';
	}elseif($query['SemisTeachers2010']['designation_id'] == 5)
	{
		echo 'SLT';
	}elseif($query['SemisTeachers2010']['designation_id'] == 6)
	{
		echo 'OT';
	}elseif($query['SemisTeachers2010']['designation_id'] == 7)
	{
		echo 'PTI';
	}elseif($query['SemisTeachers2010']['designation_id'] == 8)
	{
		echo 'WIT';
	}elseif($query['SemisTeachers2010']['designation_id'] == 9)
	{
		echo 'HM';
	}elseif($query['SemisTeachers2010']['designation_id'] == 10)
	{
		echo 'Other';
	}
	* /
	?></td>
<td>
	<?php 
		/*
		if($query['SemisTeachers2010']['qualification_id'] == 101)
		{
			echo 'PHD';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 102)
		{
			echo 'M.Phil';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 201)
		{
			echo 'M.A';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 202)
		{
			echo 'M.Sc';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 203)
		{
			echo 'M.Com';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 204)
		{
			echo 'M.Sc';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 205)
		{
		echo 'MS';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 206)
		{
		echo 'MBA';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 207)
		{
		echo 'Other(Master)';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 301)
		{
		echo 'B.A';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 302)
		{
		echo 'B.Sc';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 303)
		{
		echo 'B.Com';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 304)
		{
		echo 'BCS';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 305)
		{
		echo 'BBA';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 306)
		{
		echo 'LLB';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 307)
		{
		echo 'B.E';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 308)
		{
		echo 'B.Tech';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 309)
		{
		echo 'Other(Graduate)';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 401)
		{
		echo 'Inter(Arts)';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 402)
		{
		echo 'Inter(Science)';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 403)
		{
		echo 'Inter(Commerce)';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 404)
		{
		echo 'DAE';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 405)
		{
		echo 'Other(Inter)';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 501)
		{
		echo 'Matric (Arts)';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 502)
		{
		echo 'Matric (Science)';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 503)
		{
		echo 'Matric (Commerce)';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 504)
		{
		echo 'Matric (Technical)';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 505)
		{
		echo 'Other (Matric)';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 601)
		{
		echo 'Middle';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 602)
		{
		echo 'Primary Level Certificate';
		}elseif($query['SemisTeachers2010']['qualification_id'] == 603)
		{
		echo 'Other (Under Matric)';
		}else
		{
			echo 'Not Defined';
		}
		* /
	?>
</td>
<td><?php 
	/*
	if($query['semisUniversal2010']['location_id'] == 1)
	{
		echo 'Urban'; 
	}elseif($query['semisUniversal2010']['location_id'] == 2)
	{
		echo 'Rural'; 
	}elseif($query['semisUniversal2010']['location_id'] == 3)
	{
		echo 'Not Reported'; 
	} * /
	?></td>
<td><?php 
		if($query['SemisTeachers2010']['gender_id'] == 1)
		{
			echo 'Male'; 
		}elseif($query['SemisTeachers2010']['gender_id'] == 2)
		{
			echo 'Female';
		}
	?></td>
<td><?php echo $query['0']['count']; ?></td>
</tr>
<?php } ?>

</table>

*/ ?>