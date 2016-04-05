<html>

<head>
<script type="text/javascript" src="<?php echo $this->webroot?>js/jquery.js" ></script>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAGBvwvhwWbG9uim248Q2ibxTwvaxACFWXaSrDRUyQEt1_smLPDBQRTRL44ewqP8_Rh3BVd81MOYntCA" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
       initializeMap();
		$('body').unload(function() {
            GUnload();
       });
    });
</script>



<script type="text/javascript">
   var map;

    function initializeMap() {

            map = new GMap2(document.getElementById('map_canvas'));
            map.setUIToDefault();
            setRegion();
			<?php foreach($schools as $school) { ?>
			point = new GLatLng(<?php echo $school['School']['latitude']?>, <?php echo $school['School']['longitude']?>);
			var markerText = '<?php echo '<p style="color:red;"><strong>'.$school['School']['name'].'</strong></p>'?><br/><a href="<?php echo $this->webroot?>home/index">view School Details </a>';
			var type = '<?php echo $school['School']['type']?>';
			marker = new GMarker(point);
			map.addOverlay(marker);
			if(type == 1)
			{
				marker.setImage("<?php echo $this->webroot?>img/girls<?php echo $school['School']['prefix']?>.png");
			}
			else
			{
				marker.setImage("<?php echo $this->webroot?>img/boys<?php echo $school['School']['prefix']?>.png");
			}
			marker.bindInfoWindowHtml(markerText);
			
			<?php } ?>	
			
       
    }

    function addMarker(latitude, longitude, markerText,type,prefix) {
        point = new GLatLng(latitude, longitude);
        addMarker('<?php echo $school['School']['latitude']?>','<?php echo $school['School']['longitude']?>','<?php echo '<p style="color:red;"><strong>'.$school['School']['name'].'</strong></p>'?><br/><a href="<?php echo $this->webroot?>home/index">view School Details </a>','<?php echo $school['School']['type']?>','<?php echo $school['School']['prefix']?>');
		marker = new GMarker(point);
        map.addOverlay(marker);
		if(type == 1)
		{
		marker.setImage("<?php echo $this->webroot?>img/girls'+prefix+'.png");
		}
		else
		{
		marker.setImage("<?php echo $this->webroot?>img/boys'+prefix+'.png");
		}
        marker.bindInfoWindowHtml(markerText);
		
		
		
    }
	
	function setRegion()
	{
		var latlngbounds = new GLatLngBounds( );
		
		var polygon = new GPolygon([
			new GLatLng('<?php echo $cluster['Cluster']['latitude1']?>','<?php echo $cluster['Cluster']['longitude1']?>'),
			new GLatLng('<?php echo $cluster['Cluster']['latitude2']?>','<?php echo $cluster['Cluster']['longitude2']?>'),
			new GLatLng('<?php echo $cluster['Cluster']['latitude3']?>','<?php echo $cluster['Cluster']['longitude3']?>'),
			new GLatLng('<?php echo $cluster['Cluster']['latitude4']?>','<?php echo $cluster['Cluster']['longitude4']?>'),
			new GLatLng('<?php echo $cluster['Cluster']['latitude1']?>','<?php echo $cluster['Cluster']['longitude1']?>')
			
		  ], "#f33f00", 1, 1, "#ff0000", 0.2);
		map.addOverlay(polygon);
		
		latlngbounds.extend(new GLatLng('<?php echo $cluster['Cluster']['latitude1']?>','<?php echo $cluster['Cluster']['longitude1']?>'));
		latlngbounds.extend(new GLatLng('<?php echo $cluster['Cluster']['latitude2']?>','<?php echo $cluster['Cluster']['longitude2']?>'));
		latlngbounds.extend(new GLatLng('<?php echo $cluster['Cluster']['latitude3']?>','<?php echo $cluster['Cluster']['longitude3']?>'));
		latlngbounds.extend(new GLatLng('<?php echo $cluster['Cluster']['latitude4']?>','<?php echo $cluster['Cluster']['longitude4']?>'));
		map.setCenter(latlngbounds.getCenter(), map.getBoundsZoomLevel(latlngbounds));
	}

    
</script>
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

<title>
RSU Pilot Site
</title>
<div></div>
</head>
<body>

<div style="text-align:center; width:1100px; height:50px; background-color:green; margin-left:100px;">
</div>

<div id="content_area" style="text-color:white; margin-left:100px; width:1100px; min-height:600px; background-color:#f2f2f2;">
<?php foreach($schools as $school) { if((($school['School']['guide_school']) == 1) && !(empty($school['School']['head_teacher']))) { ?>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<thead>
<tr><td colspan=2 style="background-color:#bbffdd;" >HEAD TEACHER INFOMATION</td></tr>
</thead>
<tbody>
<tr><td>Name Of Head Teacher</td><td><?php echo $school['School']['head_teacher'] ?></td></tr>
<tr><td>NIC Of Head Teacher</td><td><?php echo $school['School']['head_teacher_cnic'] ?></td></tr>
<tr><td>Contact Number Of Head Teacher</td><td><?php echo $school['School']['head_teacher_phone'] ?></td></tr>
</tbody>
</table>

<?php } } ?>

<h1 style="background-color:#bbffdd;"> <?php echo "Cluster Name: ".$cluster['Cluster']['name']; ?> <div style="float:right;" ><a href="<?php echo $this->webroot?>home/uc_detail/<?php echo $cluster['Cluster']['uc_id']?>">Go back</a></div></h1>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<thead>
<tr><td colspan=3 style="border:1px solid; background-color:#bbddff;"><h1 style="background-color:#bbffdd;"><div style="float:left;" ><a href="<?php echo $this->webroot?>home/mpr_form/<?php echo $cluster['Cluster']['id']?>">Add A MPR Form For Guide Teacher</a></div></h1></td></tr>
<tr style="border:1px solid;">
	<th width=35% style="border:1px solid;">Month</th>
	<th width=35% style="border:1px solid;">Year</th>
	<th width=40% style="border:1px solid;">Edit</th>
</tr>
</thead>
<tbody>
<?php foreach($mprBasics as $mprBasic) { ?>

<tr style="border:1px solid;">
<td style="border:1px solid;"><?php if($mprBasic['MprBasic']['visiting_month'] == 1) { echo 'January'; }elseif($mprBasic['MprBasic']['visiting_month'] == 2) { echo 'February'; }elseif($mprBasic['MprBasic']['visiting_month'] == 3) { echo 'March'; }elseif($mprBasic['MprBasic']['visiting_month'] == 4) { echo 'April'; }elseif($mprBasic['MprBasic']['visiting_month'] == 5) { echo 'May'; }elseif($mprBasic['MprBasic']['visiting_month'] == 6) { echo 'June'; }elseif($mprBasic['MprBasic']['visiting_month'] == 7) { echo 'July'; }elseif($mprBasic['MprBasic']['visiting_month'] == 8) { echo 'August'; }elseif($mprBasic['MprBasic']['visiting_month'] == 9) { echo 'September'; }elseif($mprBasic['MprBasic']['visiting_month'] == 10) { echo 'October'; }elseif($mprBasic['MprBasic']['visiting_month'] == 11) { echo 'November'; }elseif($mprBasic['MprBasic']['visiting_month'] == 12) { echo 'December'; } ?></td>
<td style="border:1px solid;"><?php echo $mprBasic['MprBasic']['visiting_year']?></td>
<td style="border:1px solid;"><a href="<?php echo $this->webroot?>home/edit_mpr_form/<?php echo $mprBasic['MprBasic']['id']?>" >Click To Edit</a></td>
</tr>
<?php } ?>
</tbody>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<thead>
<tr><td colspan=2 style="text-align:center;font-size:25px;background-color:#88ff55;"><?php echo $cluster['Cluster']['name']?> Brief Report</td></tr>
</thead>
<tbody>
<tr><td width=50%;>Number of Functional Schools</td><td style="background-color:#88ff55;" ><?php echo $func_schools.' Out of '.$total_schools?></td></tr>
<tr><td>Number of Non Functional Schools</td><td><?php echo ($total_schools-$func_schools).' Out of '.$total_schools?></td></tr>
<tr><td>Number of SMC Notified Schools</td><td><?php echo ($smc_notified_count).' Out of '.$total_schools?></td></tr>
<?php /* <tr><td>Number of Schools with SMC Functional</td><td><?php echo ($smc_functional_count).' Out of '.$total_schools?></td></tr> */ ?>
<tr><td>Number schools with SNE HM available</td><td><?php echo ($sne_hm_count).' Out of '.$total_schools?></td></tr>
<tr><td>Number of Schools with SMC Notified</td><td><?php echo $smc_func_count.' Out of '.$total_schools?></td></tr>
<tr><td>Number of Schools with SIP available</td><td><?php echo $sip_count.' Out of '.$total_schools?></td></tr>
<tr><td>Number of Schools with SMC Notice Board</td><td><?php echo $smc_notice_board_count.' Out of '.$total_schools?></td></tr>
<tr><td>Number of Schools with School Name Board</td><td><?php echo $school_name_board_count.' Out of '.$total_schools?></td></tr>
<tr><td>Number of Schools with SIP Displayed</td><td><?php echo $sip_displayed_count.' Out of '.$total_schools?></td></tr>
<tr><td>Number of Schools with Katchi Enrollment</td><td><?php echo $katchi_enrollment_count.' Out of '.$total_schools?></td></tr>
<tr><td>Number of Schools with ECE</td><td><?php echo $ece_count.' Out of '.$total_schools?></td></tr>
<tr><td>Number of Schools with ASC Performa available</td><td><?php echo $asc_performa_count.' Out of '.$total_schools?></td></tr>
<tr><td>Number of Schools with HRMIS Form available</td><td><?php echo $hrmis_form_count.' Out of '.$total_schools?></td></tr>
<tr><td>Number of Schools with FREE Text Books Record</td><td><?php echo $free_tb_count.' Out of '.$total_schools?></td></tr>
<tr><td>Number of Schools with St AP (SAP)</td><td><?php echo $sap_count.' Out of '.$total_schools?></td></tr>
<tr><td>Number of Schools with Vistor Book available</td><td><?php echo $visitor_book_count.' Out of '.$total_schools?></td></tr>
<tr><td>Number of Schools with Time Table available</td><td><?php echo $time_table_count.' Out of '.$total_schools?></td></tr>
<tr><td>Number of Schools with GT HT Diary available</td><td><?php echo $gt_ht_diary_count.' Out of '.$total_schools?></td></tr>
<tr><td>Number of Schools with teachers diary available</td><td><?php echo $teachers_diary_count.' Out of '.$total_schools?></td></tr>
<tr><td>Number of Schools Exam Result</td><td><?php echo $exam_result_count.' Out of '.$total_schools?></td></tr>
<tr><td>Number of Schools with SLC Register available</td><td><?php echo $slc_register_count.' Out of '.$total_schools?></td></tr>
<tr><td>Number of Schools with Science KIT available</td><td><?php echo $science_kit_count.' Out of '.$total_schools?></td></tr>
<tr><td>Number of Schools with Student Attendance Register available</td><td><?php echo $st_attendance_reg_count.' Out of '.$total_schools?></td></tr>
<tr><td>Number of Schools with Teachers Register Available</td><td><?php echo $teacher_att_register_count.' Out of '.$total_schools?></td></tr>
<?php /*<tr><td>Class Room Teacher Ratio</td><td></td></tr>
<tr><td>Students Teacher Ratio</td><td></td></tr>
<tr><td>Students Classroom Ratio</td><td></td></tr> */ ?>
</tbody>
</table>

<div style="float:right; background-color:#88ff66;" ><a href="<?php echo $this->webroot?>home/add_school/<?php echo $cluster['Cluster']['id']?>">Add Another School</a></div>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<thead>
<tr style="background-color:#bbffdd;">
<th>Name Of School</th>
<th>Prefix</th>
<th>Guide School</th>
<?php /* <th>Distance from guide school</th> */?>
<th>Distance from guide school (GPS)</th>
<th>Distance from Community (KM)</th>
<th>School Has Building</th>
<th>Survey 1</th>
<th>Survey 2</th>
<th>Type</th>
<th>SEMIS Code</th>
</tr>
</thead>
<tbody>
<?php foreach($schools as $school) { if(($school['School']['clusterid']) == ($cluster['Cluster']['id'])) { ?>
<tr>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?> ><a href="<?php echo $this->webroot?>home/add_school/<?php echo $cluster['Cluster']['id']?>/<?php echo $school['School']['id']?>"><?php echo $school['School']['name']; ?></a></td>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php echo $school['School']['prefix']; ?></td>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php if(($school['School']['guide_school']) == 1) { echo"Yes"; }else{ echo "No";} ?></td>
<?php /* <td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php if(($school['School']['guide_school']) == 0) { if(($school['School']['distance_from_guide']) == 1) { echo '1 km or less'; }elseif(($school['School']['distance_from_guide']) == 2) { echo '1 to 1.5 km'; }elseif(($school['School']['distance_from_guide']) == 3) { echo '1.5 to 2 km'; }elseif(($school['School']['distance_from_guide']) == 4) { echo 'more then 2 km'; } } else { echo "0"; }  ?></td> */ ?>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>>
<?php if(($school['School']['guide_school']) == 0) 
		{
			if((!($school['School']['latitude'] == 0)) && (!($school['School']['longitude'] == 0))) 
			{
				echo $this->Number->format(gps_distance($lat1,$lng1,$school['School']['latitude'],$school['School']['longitude']), array(
				'places' => 3,
				'before' => '',
				'after' => ' Km',
				'escape' => false,
				'decimals' => '.',
				'thousands' => ','
				)); 
			}
		} 
		else 
		{ 
			echo "0"; 
		}  
?>
</td>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php echo $school['School']['distance_from_household']; ?></td>

<?php if($school['School']['has_building'] == 1) { ?> 
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php echo "Yes"; ?></td>
<?php }else{ ?>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php echo "No"; ?></td>
<?php } ?>

<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php if(($school['School']['guide_school']) == 1) { echo'<a href="'.$this->webroot.'home/guide_school_survey/'.$school['School']['id']; if(isset($school['School']['survey_id'])) { echo "/".$school['School']['survey_id']; } echo '" >Guide School Survey</a>'; }else{ echo'<a href="'.$this->webroot.'home/non_guide_school_survey/'.$school['School']['id']; if(isset($school['School']['survey_id'])) { echo "/".$school['School']['survey_id']; } echo '" >Non Guide School Survey</a>'; } ?></td>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php if(isset($school['School']['baseline_identification_id'])) { ?><a href="<?php echo $this->webroot?>home/edit_baseline_survey/<?php echo $school['School']['id']?>/<?php echo $school['School']['baseline_identification_id']?>">Edit Baseline Survey</a><?php }else{ ?><a href="<?php echo $this->webroot?>home/baseline_survey/<?php echo $school['School']['id']?>">New Baseline Survey</a><?php } ?></td>
<?php if($school['School']['type'] == 1) { ?> 
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php echo "Girls"; ?></td>
<?php }else{ ?>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php echo "Boys"; ?></td>
<?php } ?>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php echo $school['School']['code']; ?></td>
</tr>
<?php } } ?>
</tbody>
</table>
<div id="map_canvas" style="width:100%; height:450px;"></div> 


</div>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<thead>
<tr><td colspan="3"></td></tr>
<tr><th>Prefix</th><th>Description</th><th>Marker</th></tr>
</thead>
<tbody>
<tr><td>GBPS</td><td>Govt. Boys Primary School</td><td><img src="<?php echo $this->webroot?>img/boysgbps.png" alt="GBPS" /></td></tr>
<tr><td>GGPS</td><td>Govt. Girls Primary School</td><td><img src="<?php echo $this->webroot?>img/girlsggps.png" alt="GGPS" /></td></tr>
<tr><td>GBES</td><td>Govt. Boys Elementry School</td><td><img src="<?php echo $this->webroot?>img/boysgbes.png" alt="GBES" /></td></tr>
<tr><td>GGES</td><td>Govt. Girls Elementry School</td><td><img src="<?php echo $this->webroot?>img/girlsgges.png" alt="GGES" /></td></tr>
<tr><td>GBMS</td><td>Govt. Boys Middle School</td><td><img src="<?php echo $this->webroot?>img/boysgbms.png" alt="GBMS" /></td></tr>
<tr><td>GGMS</td><td>Govt. Girls Middle School</td><td><img src="<?php echo $this->webroot?>img/girlsggms.png" alt="GGMS" /></td></tr>
<tr><td>GBHS</td><td>Govt. Boys High School</td><td><img src="<?php echo $this->webroot?>img/boysgbhs.png" alt="GBHS" /></td></tr>
<tr><td>GGHS</td><td>Govt. Girls High School</td><td><img src="<?php echo $this->webroot?>img/girlsgghs.png" alt="GGHS" /></td></tr>
<tr><td>GBHSS</td><td>Govt. Boys Higher Secondary School</td><td><img src="<?php echo $this->webroot?>img/boysgbhss.png" alt="GBHSS" /></td></tr>
<tr><td>GGHSS</td><td>Govt. Girls Higher Secondary School</td><td><img src="<?php echo $this->webroot?>img/girlsgghss.png" alt="GGHSS" /></td></tr>
</tbody>
</table>
</body>
</html>
