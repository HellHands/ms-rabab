<?php 
	echo '{ "aaData":  [';

foreach($results as $result) {
	echo '[ "'.$result["semisUniversal2010"]["prefix"].'", "'.$result["semisUniversal2010"]["school_name"].'",'; 
	
	if($result["semisUniversal2010"]["gender_id"] == 1)
	{	
		echo ' "Boys",';
	}elseif($result["semisUniversal2010"]["gender_id"] == 2){
		echo ' "Girls",';
	}elseif($result["semisUniversal2010"]["gender_id"] == 3){
		echo ' "Mixed",';
	}else
	{
		echo ' "",';
	}
	
	
	if($result["semisUniversal2010"]["level_id"] == 1)
	{	
		echo ' "Primary",';
	}elseif($result["semisUniversal2010"]["level_id"] == 2){
		echo ' "Middle",';
	}elseif($result["semisUniversal2010"]["level_id"] == 3){
		echo ' "Elementary",';
	}elseif($result["semisUniversal2010"]["level_id"] == 4){
		echo ' "High",';
	}elseif($result["semisUniversal2010"]["level_id"] == 5){
		echo ' "Higher Secondary",';
	}else
	{
		echo ' "",';
	}
	
	echo ' "'.$result["semisCodesDistrictTehsil"]["district"].'", "'.$result["semisCodesDistrictTehsil"]["tehsil"].'", "'.$result["SemisCodeUc"]["uc_name"].'","'.$result["semisUniversal2010"]["id"].'" ],';
	}


?>