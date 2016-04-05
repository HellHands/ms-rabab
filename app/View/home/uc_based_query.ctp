<?php if(isset($report)) { ?>
<?php if(!(isset($download))) { ?>
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
            var x = 0;
			setRegion();
			<?php foreach($table8boysrows as $school) { if(!($school['School']['latitude'] == 0)) { ?>
			point = new GLatLng(<?php echo $school['School']['latitude']?>, <?php echo $school['School']['longitude']?>);
			var markerText = '<?php echo $school['semisUniversal2010']['school_id']; ?>';
			var type = '<?php echo $school['School']['type']?>';
			marker = new GMarker(point);
			map.addOverlay(marker);
			if(x < 8)
			{
				marker.setImage("<?php echo $this->webroot?>img/blueblank.png");
			}
			else
			{
				marker.setImage("<?php echo $this->webroot?>img/redblank.png");
			}
			marker.bindInfoWindowHtml(markerText);
			x = x+1;
			<?php } } ?>
			
			<?php foreach($table8girlsrows as $school) { if(!($school['School']['latitude'] == 0)) { ?>
			point = new GLatLng(<?php echo $school['School']['latitude']?>, <?php echo $school['School']['longitude']?>);
			var markerText = '<?php echo $school['semisUniversal2010']['school_id']; ?>';
			var type = '<?php echo $school['School']['type']; ?>';
			marker = new GMarker(point);
			map.addOverlay(marker);
			if(x < 8)
			{
				marker.setImage("<?php echo $this->webroot?>img/blueblank.png");
			}
			else
			{
				marker.setImage("<?php echo $this->webroot?>img/redblank.png");
			}
			marker.bindInfoWindowHtml(markerText);
			x = x+1;
			<?php } } ?>
			
			
       
    }

    function addMarker(latitude, longitude, markerText,type,prefix) {
        point = new GLatLng(latitude, longitude);
        addMarker('0','1','Hello','1','GBPS');
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
			new GLatLng('0','0'),
			new GLatLng('1','0'),
			new GLatLng('1','1'),
			new GLatLng('0','1'),
			new GLatLng('0','0')
			
		  ], "#f33f00", 1, 1, "#ff0000", 0.2);
		map.addOverlay(polygon);
		
		latlngbounds.extend(new GLatLng('0','0'));
		latlngbounds.extend(new GLatLng('1','0'));
		latlngbounds.extend(new GLatLng('1','1'));
		latlngbounds.extend(new GLatLng('0','1'));
		map.setCenter(latlngbounds.getCenter(), map.getBoundsZoomLevel(latlngbounds));
	}

    
</script>
<?php } ?>	
	<?php  if(isset($download)) { ?>
	<table border="1" cellpadding="0" cellspacing="0" class="grid_table wf" id="report" >
	
	<?php }else{ ?>
	<table border="1" cellpadding="0" cellspacing="0" class="grid_table wf" id="report" >
	<tr>
		<td colspan=7 >
			<a href="<?php echo $this->webroot; ?>home/uc_based_query/<?php echo $report; ?>/<?php echo $district_id; ?>/<?php echo $tehsil_id; ?>/<?php echo $uc_id; ?>/<?php echo $level; ?>/1">Download This Report</a>
		</td>
	</tr>
	<?php } ?>
	<tr>
		<td colspan=7 >
			<h3 style="text-align:center;">Location Filters Used</h3>
		</td>
	</tr>
	
	<tr>
		<td colspan=2 >District</td>
		<td colspan=2 >Tehsil</td>
		<td colspan=3 >Union Council</td>
	</tr>
	
	<tr>
		<td colspan=2 ><?php echo $this_district_tehsil['semisCodesDistrictTehsil']['district']; ?></td>
		<td colspan=2 ><?php echo $this_district_tehsil['semisCodesDistrictTehsil']['tehsil']; ?></td>
		<td colspan=3 ><?php echo $this_uc['SemisCodeUc']['uc_name']; ?></td>
	</tr>
	
	
	
	
	<tr>
		<td colspan=7 >
			<h3 style="text-align:center;">Table 1</h3>
		</td>
	</tr>
	<tr>
	<td>UC Analysis by school criteria</td>
	<td>School (B)</td>
	<td>Enrolement (B)</td>
	<td>School (G)</td>
	<td>Enrolement (G)</td>
	<td>Total Schools</td>
	<td>Total Enrolement</td>
	</tr>
	<?php
	$girls_school = 0;	
	$boys_school = 0;
	$totalprimaryschools = 0;
	$totalprimaryenrollment = 0;
	?>
	<tr>	<td>Priamary School</td>	
										<?php foreach($table1allrows as $table1row) { if($table1row['semisUniversal2010']['prefix'] == "GBPS") { $boys_school = 1; ?>
										<td><?php $totalprimaryschools += $table1row[0]['school_count']; echo $table1row[0]['school_count']; ?></td>	
										<td><?php $totalprimaryenrollment += $table1row[0]['total_enrollment']; echo $table1row[0]['total_enrollment']; ?></td>
										
										<?php }elseif($table1row['semisUniversal2010']['prefix'] == "GGPS"){ $girls_school = 1; ?>
										<td><?php $totalprimaryschools += $table1row[0]['school_count']; echo $table1row[0]['school_count']; ?></td>	
										<td><?php $totalprimaryenrollment += $table1row[0]['total_enrollment']; echo $table1row[0]['total_enrollment']; ?></td>
										
										<?php } } ?>
										<?php if($boys_school == 0) { echo '<td></td><td></td>'; }  ?>
										<?php if($girls_school == 0) { echo '<td></td><td></td>'; }  ?>
										<td><?php echo $totalprimaryschools; ?></td>	
										<td><?php echo $totalprimaryenrollment; ?></td>	
	</tr>
	
	<?php
	$girls_school = 0;	
	$boys_school = 0;
	$totalelementaryschools = 0;
	$totalelementaryenrollment = 0;
	?>
	<tr>	<td>Elementry School</td>	
										<?php foreach($table1allrows as $table1row) { if($table1row['semisUniversal2010']['prefix'] == "GBELS") { $boys_school = 1; ?>
										<td><?php $totalelementaryschools += $table1row[0]['school_count']; echo $table1row[0]['school_count']; ?></td>	
										
										<td><?php $totalelementaryenrollment += $table1row[0]['total_enrollment']; echo $table1row[0]['total_enrollment']; ?></td>
										<?php }elseif($table1row['semisUniversal2010']['prefix'] == "GGELS"){ $girls_school = 1; ?>
										
										<td><?php $totalelementaryschools += $table1row[0]['school_count']; echo $table1row[0]['school_count']; ?></td>	
										<td><?php $totalelementaryenrollment += $table1row[0]['total_enrollment']; echo $table1row[0]['total_enrollment']; ?></td>
										
										<?php } } ?>
										
										<?php if($boys_school == 0) { echo '<td></td><td></td>'; }  ?>
										<?php if($girls_school == 0) { echo '<td></td><td></td>'; }  ?>
										<td><?php echo $totalelementaryschools; ?></td>	
										<td><?php echo $totalelementaryenrollment; ?></td>	
	
	<?php
	$girls_school = 0;	
	$boys_school = 0;
	$totalmiddleschools = 0;
	$totalmiddleenrollment = 0;
	?>
	<tr>	<td>Middle School</td>	
										<?php foreach($table1allrows as $table1row) { if($table1row['semisUniversal2010']['prefix'] == "GBLSS") { $boys_school = 1; ?>
										<td><?php $totalmiddleschools += $table1row[0]['school_count']; echo $table1row[0]['school_count']; ?></td>	
										
										<td><?php $totalmiddleenrollment += $table1row[0]['total_enrollment']; echo $table1row[0]['total_enrollment']; ?></td>
										<?php }elseif($table1row['semisUniversal2010']['prefix'] == "GGLSS"){ $girls_school = 1; ?>
										
										<td><?php $totalmiddleschools += $table1row[0]['school_count']; echo $table1row[0]['school_count']; ?></td>	
										<td><?php $totalmiddleenrollment += $table1row[0]['total_enrollment']; echo $table1row[0]['total_enrollment']; ?></td>
										
										<?php } } ?>
										
										<?php if($boys_school == 0) { echo '<td></td><td></td>'; }  ?>
										<?php if($girls_school == 0) { echo '<td></td><td></td>'; }  ?>
										<td><?php echo $totalmiddleschools; ?></td>	
										<td><?php echo $totalmiddleenrollment; ?></td>	
	
	<?php
	$girls_school = 0;	
	$boys_school = 0;
	$totalhighschools = 0;
	$totalhighenrollment = 0;
	?>
	<tr>	<td>High School</td>	
										<?php foreach($table1allrows as $table1row) { if($table1row['semisUniversal2010']['prefix'] == "GBHS") { $boys_school = 1; ?>
										<td><?php $totalhighschools += $table1row[0]['school_count']; echo $table1row[0]['school_count']; ?></td>	
										
										<td><?php $totalhighenrollment += $table1row[0]['total_enrollment']; echo $table1row[0]['total_enrollment']; ?></td>
										<?php }elseif($table1row['semisUniversal2010']['prefix'] == "GGHS"){ $girls_school = 1; ?>
										
										<td><?php $totalhighschools += $table1row[0]['school_count']; echo $table1row[0]['school_count']; ?></td>	
										<td><?php $totalhighenrollment += $table1row[0]['total_enrollment']; echo $table1row[0]['total_enrollment']; ?></td>
										
										<?php } } ?>
										
										<?php if($boys_school == 0) { echo '<td></td><td></td>'; }  ?>
										<?php if($girls_school == 0) { echo '<td></td><td></td>'; }  ?>
										<td><?php echo $totalhighschools; ?></td>	
										<td><?php echo $totalhighenrollment; ?></td>	
	
	<?php
	$girls_school = 0;	
	$boys_school = 0;
	$totalhsschools = 0;
	$totalhsenrollment = 0;
	?>
	<tr>	<td>Higher Secondary School</td>
										<?php foreach($table1allrows as $table1row) { if($table1row['semisUniversal2010']['prefix'] == "GBHSS") { $boys_school = 1; ?>
										<td><?php $totalhsschools += $table1row[0]['school_count']; echo $table1row[0]['school_count']; ?></td>	
										
										<td><?php $totalhsenrollment += $table1row[0]['total_enrollment']; echo $table1row[0]['total_enrollment']; ?></td>
										<?php }elseif($table1row['semisUniversal2010']['prefix'] == "GGHSS"){ $girls_school = 1; ?>
										
										<td><?php $totalhsschools += $table1row[0]['school_count']; echo $table1row[0]['school_count']; ?></td>	
										<td><?php $totalhsenrollment += $table1row[0]['total_enrollment']; echo $table1row[0]['total_enrollment']; ?></td>
										
										<?php } } ?>
										
										<?php if($boys_school == 0) { echo '<td></td><td></td>'; }  ?>
										<?php if($girls_school == 0) { echo '<td></td><td></td>'; }  ?>
										<td><?php echo $totalhsschools; ?></td>	
										<td><?php echo $totalhsenrollment; ?></td>	
	
	
	<tr>
	<td>Total</td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td><?php echo $totalprimaryschools+$totalelementaryschools+$totalmiddleschools+$totalhighschools+$totalhsschools; ?></td>
	<td><?php echo $totalprimaryenrollment+$totalelementaryenrollment+$totalmiddleenrollment+$totalhighenrollment+$totalhsenrollment; ?></td>
	</tr>
	
	<tr><td colspan=7 ></td></tr><tr><td colspan=7 ></td></tr>
	
	<tr>
		<td colspan=7 >
			<h3 style="text-align:center;">Table 2</h3>
		</td>
	</tr>
	<tr>
		<td>School Criteria</td>
		<td>Total School in UC</td>
		<td>Enrolement</td>
		<td>Teachers</td>
		<td>C.Rooms</td>
	</tr>
<?php 
	$table2totalschools = 0;
	$table2totalenrollment = 0;
	$table2totalteachers = 0;
	$table2totalclassrooms = 0;
?>
	<tr>	<td>Non Functional</td>		<td><?php $table2totalschools += $table2Row1[0][0]['school_count']; echo $table2Row1[0][0]['school_count']; ?></td>
										<td><?php $table2totalenrollment += $table2Row1[0][0]['total_enrollment']; echo $table2Row1[0][0]['total_enrollment']; ?></td>		
										<td><?php $table2totalteachers += $table2Row1[0][0]['total_teachers']; echo $table2Row1[0][0]['total_teachers']; ?></td>		
										<td><?php $table2totalclassrooms += $table2Row1[0][0]['total_classrooms']; echo $table2Row1[0][0]['total_classrooms']; ?></td>	
	</tr>
	
	<tr>	<td>sheleterless</td>		<td><?php $table2totalschools += $table2Row1[0][0]['school_count']; echo $table2Row1[0][0]['school_count']; ?></td>
										<td><?php $table2totalenrollment += $table2Row1[0][0]['total_enrollment']; echo $table2Row1[0][0]['total_enrollment']; ?></td>		
										<td><?php $table2totalteachers += $table2Row1[0][0]['total_teachers']; echo $table2Row1[0][0]['total_teachers']; ?></td>		
										<td><?php $table2totalclassrooms += $table2Row1[0][0]['total_classrooms']; echo $table2Row1[0][0]['total_classrooms']; ?></td>	
	</tr>
	
	<tr>	<td>1 Room</td>				<td><?php $table2totalschools += $table2Row2[0][0]['school_count']; echo $table2Row2[0][0]['school_count']; ?></td>
										<td><?php $table2totalenrollment += $table2Row2[0][0]['total_enrollment']; echo $table2Row2[0][0]['total_enrollment']; ?></td>		
										<td><?php $table2totalteachers += $table2Row2[0][0]['total_teachers']; echo $table2Row2[0][0]['total_teachers']; ?></td>		
										<td><?php $table2totalclassrooms += $table2Row2[0][0]['total_classrooms']; echo $table2Row2[0][0]['total_classrooms']; ?></td>	
	</tr>
	
	<tr>	<td>2 Room</td>				<td><?php $table2totalschools += $table2Row3[0][0]['school_count']; echo $table2Row3[0][0]['school_count']; ?></td>
										<td><?php $table2totalenrollment += $table2Row3[0][0]['total_enrollment']; echo $table2Row3[0][0]['total_enrollment']; ?></td>		
										<td><?php $table2totalteachers += $table2Row3[0][0]['total_teachers']; echo $table2Row3[0][0]['total_teachers']; ?></td>		
										<td><?php $table2totalclassrooms += $table2Row3[0][0]['total_classrooms']; echo $table2Row3[0][0]['total_classrooms']; ?></td>	
	</tr>
	
	<tr>	<td>3 Room</td>				<td><?php $table2totalschools += $table2Row4[0][0]['school_count']; echo $table2Row4[0][0]['school_count']; ?></td>
										<td><?php $table2totalenrollment += $table2Row4[0][0]['total_enrollment']; echo $table2Row4[0][0]['total_enrollment']; ?></td>		
										<td><?php $table2totalteachers += $table2Row4[0][0]['total_teachers']; echo $table2Row4[0][0]['total_teachers']; ?></td>		
										<td><?php $table2totalclassrooms += $table2Row4[0][0]['total_classrooms']; echo $table2Row4[0][0]['total_classrooms']; ?></td>	
	</tr>
	
	<tr>	<td>4 Room</td>				<td><?php $table2totalschools += $table2Row5[0][0]['school_count']; echo $table2Row5[0][0]['school_count']; ?></td>
										<td><?php $table2totalenrollment += $table2Row5[0][0]['total_enrollment']; echo $table2Row5[0][0]['total_enrollment']; ?></td>		
										<td><?php $table2totalteachers += $table2Row5[0][0]['total_teachers']; echo $table2Row5[0][0]['total_teachers']; ?></td>		
										<td><?php $table2totalclassrooms += $table2Row5[0][0]['total_classrooms']; echo $table2Row5[0][0]['total_classrooms']; ?></td>	
	</tr>
	
	<tr>	<td>5 Room</td>				<td><?php $table2totalschools += $table2Row6[0][0]['school_count']; echo $table2Row6[0][0]['school_count']; ?></td>
										<td><?php $table2totalenrollment += $table2Row6[0][0]['total_enrollment']; echo $table2Row6[0][0]['total_enrollment']; ?></td>		
										<td><?php $table2totalteachers += $table2Row6[0][0]['total_teachers']; echo $table2Row6[0][0]['total_teachers']; ?></td>		
										<td><?php $table2totalclassrooms += $table2Row6[0][0]['total_classrooms']; echo $table2Row6[0][0]['total_classrooms']; ?></td>	
	</tr>
	
	<tr>	<td>Total Schools</td>		<td><?php echo $table2totalschools; ?></td>		
										<td><?php echo $table2totalenrollment; ?></td>		
										<td><?php echo $table2totalteachers; ?></td>		
										<td><?php echo $table2totalclassrooms; ?></td>	
	</tr>
	
	<tr><td colspan=7 ></td></tr><tr><td colspan=7 ></td></tr>
	<tr>
		<td colspan=7 >
			<h3 style="text-align:center;">Table 3</h3>
		</td>
	</tr>
	<?php
	$table3_school_count = 0;
	$table3_total_classrooms = 0;
	$table3_total_teachers = 0;
	$table3_total_enrollment = 0;
	?>
	<tr> <td>Analysis-1</td> <td>Total School in UC</td> <td>C.Rooms</td> <td>Teachers</td> <td>Enrolement</td> </tr>
	<tr> <td>Shelterless(0+1+30)</td> <td></td> <td></td> <td></td> <td></td> </tr>
	<tr> <td>1R+1T+30</td>  <td><?php $table3_school_count +=$room1teacher1[0][0]['school_count']; echo $room1teacher1[0][0]['school_count']?></td> 
							<td><?php $table3_total_classrooms +=$room1teacher1[0][0]['total_classrooms']; echo $room1teacher1[0][0]['total_classrooms']?></td> 
							<td><?php $table3_total_teachers +=$room1teacher1[0][0]['total_classrooms']; echo $room1teacher1[0][0]['total_teachers']?></td> 
							<td><?php $table3_total_enrollment +=$room1teacher1[0][0]['total_classrooms']; echo $room1teacher1[0][0]['total_enrollment']?></td> 
	</tr>
	<tr> <td>2R+2T+60</td> 	<td><?php $table3_school_count +=$room2teacher2[0][0]['school_count']; echo $room2teacher2[0][0]['school_count']?></td> 
							<td><?php $table3_total_classrooms +=$room2teacher2[0][0]['total_classrooms']; echo $room2teacher2[0][0]['total_classrooms']?></td> 
							<td><?php $table3_total_teachers +=$room2teacher2[0][0]['total_teachers']; echo $room2teacher2[0][0]['total_teachers']?></td> 
							<td><?php $table3_total_enrollment +=$room2teacher2[0][0]['total_enrollment']; echo $room2teacher2[0][0]['total_enrollment']?></td> 
	</tr>
	<tr> <td>3R+3T+90</td> 	<td><?php $table3_school_count +=$room3teacher3[0][0]['school_count']; echo $room3teacher3[0][0]['school_count']?></td> 
							<td><?php $table3_total_classrooms +=$room3teacher3[0][0]['total_classrooms']; echo $room3teacher3[0][0]['total_classrooms']?></td> 
							<td><?php $table3_total_teachers +=$room3teacher3[0][0]['total_teachers']; echo $room3teacher3[0][0]['total_teachers']?></td> 
							<td><?php $table3_total_enrollment +=$room3teacher3[0][0]['total_enrollment']; echo $room3teacher3[0][0]['total_enrollment']?></td> 
	</tr>
	<tr> <td>4R+4T+120</td> <td><?php $table3_school_count +=$room4teacher4[0][0]['school_count']; echo $room4teacher4[0][0]['school_count']?></td> 
							<td><?php $table3_total_classrooms +=$room4teacher4[0][0]['total_classrooms']; echo $room4teacher4[0][0]['total_classrooms']?></td> 
							<td><?php $table3_total_teachers +=$room4teacher4[0][0]['total_teachers']; echo $room4teacher4[0][0]['total_teachers']?></td> 
							<td><?php $table3_total_enrollment +=$room4teacher4[0][0]['total_enrollment']; echo $room4teacher4[0][0]['total_enrollment']?></td> 
	</tr>
	<tr> <td>5R+5T+150</td> <td><?php $table3_school_count +=$room5teacher5[0][0]['school_count']; echo $room5teacher5[0][0]['school_count']?></td> 
							<td><?php $table3_total_classrooms +=$room5teacher5[0][0]['total_classrooms']; echo $room5teacher5[0][0]['total_classrooms']?></td> 
							<td><?php $table3_total_teachers +=$room5teacher5[0][0]['total_teachers']; echo $room5teacher5[0][0]['total_teachers']?></td> 
							<td><?php $table3_total_enrollment +=$room5teacher5[0][0]['total_enrollment']; echo $room5teacher5[0][0]['total_enrollment']?></td> 
	</tr>
	
	<tr> <td>Total</td> <td><?php echo $table3_school_count; ?></td> 
						<td><?php echo $table3_total_classrooms; ?></td>
						<td><?php echo $table3_total_teachers; ?></td>
						<td><?php echo $table3_total_enrollment; ?></td>
	</tr>
	
	
	<tr><td colspan=7 ></td></tr><tr><td colspan=7 ></td></tr>
	<tr>
		<td colspan=7 >
			<h3 style="text-align:center;">Table 4</h3>
		</td>
	</tr>
	<?php
	$table4_school_count = 0;
	$table4_total_classrooms = 0;
	$table4_total_teachers = 0;
	$table4_total_enrollment = 0;
	?>
	<tr> <td>Analysis-2</td> <td>Total School in UC</td> <td>C.Rooms</td> <td>Teachers</td> <td>Enrolement</td> </tr>
	<tr> <td>Shelterless(0+1+20)</td>  <td><?php $table4_school_count +=$table4row1[0][0]['school_count']; echo $table4row1[0][0]['school_count']?></td> 
							<td><?php $table4_total_classrooms +=$table4row1[0][0]['total_classrooms']; echo $table4row1[0][0]['total_classrooms']?></td> 
							<td><?php $table4_total_teachers +=$table4row1[0][0]['total_classrooms']; echo $table4row1[0][0]['total_teachers']?></td> 
							<td><?php $table4_total_enrollment +=$table4row1[0][0]['total_classrooms']; echo $table4row1[0][0]['total_enrollment']?></td> 
	</tr>
	<tr> <td>1R+1T+20</td> 	<td><?php $table4_school_count +=$table4row2[0][0]['school_count']; echo $table4row2[0][0]['school_count']?></td> 
							<td><?php $table4_total_classrooms +=$table4row2[0][0]['total_classrooms']; echo $table4row2[0][0]['total_classrooms']?></td> 
							<td><?php $table4_total_teachers +=$table4row2[0][0]['total_teachers']; echo $table4row2[0][0]['total_teachers']?></td> 
							<td><?php $table4_total_enrollment +=$table4row2[0][0]['total_enrollment']; echo $table4row2[0][0]['total_enrollment']?></td> 
	</tr>
	<tr> <td>2R+2T+40</td> 	<td><?php $table4_school_count +=$table4row3[0][0]['school_count']; echo $table4row3[0][0]['school_count']?></td> 
							<td><?php $table4_total_classrooms +=$table4row3[0][0]['total_classrooms']; echo $table4row3[0][0]['total_classrooms']?></td> 
							<td><?php $table4_total_teachers +=$table4row3[0][0]['total_teachers']; echo $table4row3[0][0]['total_teachers']?></td> 
							<td><?php $table4_total_enrollment +=$table4row3[0][0]['total_enrollment']; echo $table4row3[0][0]['total_enrollment']?></td> 
	</tr>
	<tr> <td>3R+3T+60</td> <td><?php $table4_school_count +=$table4row4[0][0]['school_count']; echo $table4row4[0][0]['school_count']?></td> 
							<td><?php $table4_total_classrooms +=$table4row4[0][0]['total_classrooms']; echo $table4row4[0][0]['total_classrooms']?></td> 
							<td><?php $table4_total_teachers +=$table4row4[0][0]['total_teachers']; echo $table4row4[0][0]['total_teachers']?></td> 
							<td><?php $table4_total_enrollment +=$table4row4[0][0]['total_enrollment']; echo $table4row4[0][0]['total_enrollment']?></td> 
	</tr>
	<tr> <td>4R+4T+80</td> <td><?php $table4_school_count +=$table4row5[0][0]['school_count']; echo $table4row5[0][0]['school_count']?></td> 
							<td><?php $table4_total_classrooms +=$table4row5[0][0]['total_classrooms']; echo $table4row5[0][0]['total_classrooms']?></td> 
							<td><?php $table4_total_teachers +=$table4row5[0][0]['total_teachers']; echo $table4row5[0][0]['total_teachers']?></td> 
							<td><?php $table4_total_enrollment +=$table4row5[0][0]['total_enrollment']; echo $table4row5[0][0]['total_enrollment']?></td> 
	</tr>
	<tr> <td>5R+5T+100</td> <td><?php $table4_school_count +=$table4row6[0][0]['school_count']; echo $table4row6[0][0]['school_count']?></td> 
							<td><?php $table4_total_classrooms +=$table4row6[0][0]['total_classrooms']; echo $table4row6[0][0]['total_classrooms']?></td> 
							<td><?php $table4_total_teachers +=$table4row6[0][0]['total_teachers']; echo $table4row6[0][0]['total_teachers']?></td> 
							<td><?php $table4_total_enrollment +=$table4row6[0][0]['total_enrollment']; echo $table4row6[0][0]['total_enrollment']?></td> 
	</tr>
	
	<tr> <td>Total</td> <td><?php echo $table4_school_count; ?></td> 
						<td><?php echo $table4_total_classrooms; ?></td>
						<td><?php echo $table4_total_teachers; ?></td>
						<td><?php echo $table4_total_enrollment; ?></td>
	</tr>
	
	<tr><td colspan=7 ></td></tr><tr><td colspan=7 ></td></tr>
	<tr>
		<td colspan=7 >
			<h3 style="text-align:center;">Table 5</h3>
		</td>
	</tr>
	
		<?php
	$table5_school_count = 0;
	$table5_total_classrooms = 0;
	$table5_total_teachers = 0;
	$table5_total_enrollment = 0;
	?>
	<tr> <td>Analysis-2</td> <td>Total School in UC</td> <td>C.Rooms</td> <td>Teachers</td> <td>Enrolement</td> </tr>
	<tr> <td>Shelterless</td>  <td><?php $table5_school_count +=$table5row1[0][0]['school_count']; echo $table5row1[0][0]['school_count']?></td> 
							<td><?php $table5_total_classrooms +=$table5row1[0][0]['total_classrooms']; echo $table5row1[0][0]['total_classrooms']?></td> 
							<td><?php $table5_total_teachers +=$table5row1[0][0]['total_classrooms']; echo $table5row1[0][0]['total_teachers']?></td> 
							<td><?php $table5_total_enrollment +=$table5row1[0][0]['total_classrooms']; echo $table5row1[0][0]['total_enrollment']?></td> 
	</tr>
	<tr> <td>1R+1T</td> 	<td><?php $table5_school_count +=$table5row2[0][0]['school_count']; echo $table5row2[0][0]['school_count']?></td> 
							<td><?php $table5_total_classrooms +=$table5row2[0][0]['total_classrooms']; echo $table5row2[0][0]['total_classrooms']?></td> 
							<td><?php $table5_total_teachers +=$table5row2[0][0]['total_teachers']; echo $table5row2[0][0]['total_teachers']?></td> 
							<td><?php $table5_total_enrollment +=$table5row2[0][0]['total_enrollment']; echo $table5row2[0][0]['total_enrollment']?></td> 
	</tr>
	<tr> <td>2R+2T</td> 	<td><?php $table5_school_count +=$table5row3[0][0]['school_count']; echo $table5row3[0][0]['school_count']?></td> 
							<td><?php $table5_total_classrooms +=$table5row3[0][0]['total_classrooms']; echo $table5row3[0][0]['total_classrooms']?></td> 
							<td><?php $table5_total_teachers +=$table5row3[0][0]['total_teachers']; echo $table5row3[0][0]['total_teachers']?></td> 
							<td><?php $table5_total_enrollment +=$table5row3[0][0]['total_enrollment']; echo $table5row3[0][0]['total_enrollment']?></td> 
	</tr>
	<tr> <td>3R+3T</td> <td><?php $table5_school_count +=$table5row4[0][0]['school_count']; echo $table5row4[0][0]['school_count']?></td> 
							<td><?php $table5_total_classrooms +=$table5row4[0][0]['total_classrooms']; echo $table5row4[0][0]['total_classrooms']?></td> 
							<td><?php $table5_total_teachers +=$table5row4[0][0]['total_teachers']; echo $table5row4[0][0]['total_teachers']?></td> 
							<td><?php $table5_total_enrollment +=$table5row4[0][0]['total_enrollment']; echo $table5row4[0][0]['total_enrollment']?></td> 
	</tr>
	<tr> <td>4R+4T</td> <td><?php $table5_school_count +=$table5row5[0][0]['school_count']; echo $table5row5[0][0]['school_count']?></td> 
							<td><?php $table5_total_classrooms +=$table5row5[0][0]['total_classrooms']; echo $table5row5[0][0]['total_classrooms']?></td> 
							<td><?php $table5_total_teachers +=$table5row5[0][0]['total_teachers']; echo $table5row5[0][0]['total_teachers']?></td> 
							<td><?php $table5_total_enrollment +=$table5row5[0][0]['total_enrollment']; echo $table5row5[0][0]['total_enrollment']?></td> 
	</tr>
	<tr> <td>5R+5T</td> <td><?php $table5_school_count +=$table5row6[0][0]['school_count']; echo $table5row6[0][0]['school_count']?></td> 
							<td><?php $table5_total_classrooms +=$table5row6[0][0]['total_classrooms']; echo $table5row6[0][0]['total_classrooms']?></td> 
							<td><?php $table5_total_teachers +=$table5row6[0][0]['total_teachers']; echo $table5row6[0][0]['total_teachers']?></td> 
							<td><?php $table5_total_enrollment +=$table5row6[0][0]['total_enrollment']; echo $table5row6[0][0]['total_enrollment']?></td> 
	</tr>
	
	<tr> <td>Total</td> <td><?php echo $table5_school_count; ?></td> 
						<td><?php echo $table5_total_classrooms; ?></td>
						<td><?php echo $table5_total_teachers; ?></td>
						<td><?php echo $table5_total_enrollment; ?></td>
	</tr>
	<tr><td colspan=7 ></td></tr><tr><td colspan=7 ></td></tr>
	<tr>
		<td colspan=7 >
			<h3 style="text-align:center;">Table 6</h3>
		</td>
	</tr>
	<tr>	<td>School Name</td><td>Semis Code</td><td>C.Rooms</td><td>Teacher</td><td>Enrolement</td>	</tr>
	<?php foreach($table6rows as $table6row) { ?>
	<tr>	<td><?php echo $table6row['semisUniversal2010']['prefix'].' - '.$table6row['semisUniversal2010']['school_name']; ?></td>
			<td><?php echo $table6row['semisUniversal2010']['school_id']; ?></td>
			<td><?php echo $table6row['semisUniversal2010']['no_of_classroom']; ?></td>
			<td><?php echo $table6row['semisUniversal2010']['total_teachers']; ?></td>
			<td><?php echo $table6row['SemisEnrollment2010']['total_enrollment']; ?></td>
	</tr>
	<?php } ?>
	<!--tr><td colspan=7 ></td></tr><tr><td colspan=7 ></td></tr>
	<tr>
		<td colspan=7 >
			<h3 style="text-align:center;">Table 7</h3>
		</td>
	</tr>
	<tr><td>Description Analysis </td><td>Non Functional</td><td>Shelterless (0R+1T+20E)</td><td>1R+1T+30E</td><td>2R+2T+40E</td><td>3R+3T+60E</td><td>4R+4T+80E</td><td>5R+5T+100E</td></tr>
	
	<tr><td colspan=7 ></td></tr><tr><td colspan=7 ></td></tr-->
	<tr>
		<td colspan=7 >
			<h3 style="text-align:center;">Table 8 (Best Boys /Girls School in UC)</h3>
		</td>
	</tr>
	<tr>	<td>Discription</td><td>SEMIS Code</td><td>C.Rooms</td><td>Teachers</td><td>Enrolement</td>	</tr>
	<?php $x = 0; foreach($table8boysrows as $table6row) { if($x == 4) { break; }else{ if($table6row['semisUniversal2010']['prefix'] == 'GBPS' || $table6row['semisUniversal2010']['prefix'] == 'GBELS' || $table6row['semisUniversal2010']['prefix'] == 'GBLSS') { ?>
	<tr>	<td><?php echo $table6row['semisUniversal2010']['prefix'].' - '.$table6row['semisUniversal2010']['school_name']; ?></td>
			<td><?php echo $table6row['semisUniversal2010']['school_id']; ?></td>
			<td><?php echo $table6row['semisUniversal2010']['no_of_classroom']; ?></td>
			<td><?php echo $table6row['semisUniversal2010']['total_teachers']; ?></td>
			<td><?php echo $table6row['SemisEnrollment2010']['total_enrollment']; ?></td>
	</tr>
	<?php $x++; } } } ?>
	
	<?php $x = 0; foreach($table8girlsrows as $table6row) { if($x == 4) { break; }else{  if($table6row['semisUniversal2010']['prefix'] == 'GGPS' || $table6row['semisUniversal2010']['prefix'] == 'GGELS' || $table6row['semisUniversal2010']['prefix'] == 'GGLSS') { ?>
	<tr>	<td><?php echo $table6row['semisUniversal2010']['prefix'].' - '.$table6row['semisUniversal2010']['school_name']; ?></td>
			<td><?php echo $table6row['semisUniversal2010']['school_id']; ?></td>
			<td><?php echo $table6row['semisUniversal2010']['no_of_classroom']; ?></td>
			<td><?php echo $table6row['semisUniversal2010']['total_teachers']; ?></td>
			<td><?php echo $table6row['SemisEnrollment2010']['total_enrollment']; ?></td>
	</tr>
	
	
	
	<?php $x++; } } } ?>
	
	
	
	
	
	<tr><td colspan=7 ></td></tr><tr><td colspan=7 ></td></tr>
	
	
	<tr>
		<td colspan=7 >
			<h3 style="text-align:center;">Possible Clusters Calculation</h3>
		</td>
	</tr>
	<tr>
	<td></td>
	<td>Total Schools (Primary Middle Elementary)</td>
	<td colspan=2>Total Clusters (4 Schools Average in Each Clusters)</td>
	<td colspan=2>Total Clusters (5 Schools Average in Each Clusters)</td>
	<td colspan=2>Total Clusters (6 Schools Average in Each Clusters)</td>
	</tr>
	<tr>
	<td>Boys Schools only</td>
	<td><?php echo count($table8boysrows); ?></td>
	<td colspan="2"><?php echo round(((count($table8boysrows))/4),0); ?></td>
	<td colspan="2"><?php echo round(((count($table8boysrows))/5),0); ?></td>
	<td colspan="2"><?php echo round(((count($table8boysrows))/6),0); ?></td>
	</tr>
	<tr>
	<td>Girls Schools only</td>
	<td><?php echo count($table8girlsrows); ?></td>
	<td colspan="2"><?php echo round(((count($table8girlsrows))/4),0); ?></td>
	<td colspan="2"><?php echo round(((count($table8girlsrows))/5),0); ?></td>
	<td colspan="2"><?php echo round(((count($table8girlsrows))/6),0); ?></td>
	</tr>
	<tr>
	<td>Overall Mixed</td>
	<td><?php echo $totalprimaryschools+$totalelementaryschools+$totalmiddleschools; ?></td>
	<td colspan="2"><?php echo round((($totalprimaryschools+$totalelementaryschools+$totalmiddleschools)/4),0); ?></td>
	<td colspan="2"><?php echo round((($totalprimaryschools+$totalelementaryschools+$totalmiddleschools)/5),0); ?></td>
	<td colspan="2"><?php echo round((($totalprimaryschools+$totalelementaryschools+$totalmiddleschools)/6),0); ?></td>
	</tr>
	
	<?php 
	$boysClustersSuggestions = round(((count($table8boysrows))/4),0)+2;
	$girlsClustersSuggestions = round(((count($table8girlsrows))/4),0)+2;
	$mixedClustersSuggestions = round((($totalprimaryschools+$totalelementaryschools+$totalmiddleschools)/4),0)+4;
	?>
	
													<!--Possible Guide School Suggestions - Boys Clusters   -->
													<!--Possible Guide School Suggestions - Boys Clusters   -->
													<!--Possible Guide School Suggestions - Boys Clusters   -->
	<tr>
		<td colspan=7 >
			<h3 style="text-align:center;">Table 8 (Possible Guide Schools Suggestions - Boys Clusters Only - in order of preference)</h3>
		</td>
	</tr>
	<tr>	<td>Discription</td><td>SEMIS Code</td><td>C.Rooms</td><td>Teachers</td><td>Enrolement</td>	</tr>
	<?php $x = 0; foreach($table8boysrows as $table6row) { if($x == $boysClustersSuggestions) { break; }else{ if($table6row['semisUniversal2010']['prefix'] == 'GBPS' || $table6row['semisUniversal2010']['prefix'] == 'GBELS' || $table6row['semisUniversal2010']['prefix'] == 'GBLSS') { ?>
	<tr>	<td><?php echo $table6row['semisUniversal2010']['prefix'].' - '.$table6row['semisUniversal2010']['school_name']; ?></td>
			<td><?php echo $table6row['semisUniversal2010']['school_id']; ?></td>
			<td><?php echo $table6row['semisUniversal2010']['no_of_classroom']; ?></td>
			<td><?php echo $table6row['semisUniversal2010']['total_teachers']; ?></td>
			<td><?php echo $table6row['SemisEnrollment2010']['total_enrollment']; ?></td>
	</tr>
	<?php $x++; } } } ?>												
	
													<!--Possible Guide School Suggestions - Boys Clusters   -->
													<!--Possible Guide School Suggestions - Boys Clusters   -->
													<!--Possible Guide School Suggestions - Boys Clusters   -->
	
													<!--Possible Guide School Suggestions - Girls Clusters Clusters   -->
													<!--Possible Guide School Suggestions - Girls Clusters Clusters   -->
													<!--Possible Guide School Suggestions - Girls Clusters Clusters   -->
	<tr>
		<td colspan=7 >
			<h3 style="text-align:center;">Table 8 (Possible Guide Schools Suggestions - Girls Clusters Only - in order of preference)</h3>
		</td>
	</tr>
	<tr>	<td>Discription</td><td>SEMIS Code</td><td>C.Rooms</td><td>Teachers</td><td>Enrolement</td>	</tr>
	<?php $x = 0; foreach($table8girlsrows as $table6row) { if($x == $girlsClustersSuggestions) { break; }else{  if($table6row['semisUniversal2010']['prefix'] == 'GGPS' || $table6row['semisUniversal2010']['prefix'] == 'GGELS' || $table6row['semisUniversal2010']['prefix'] == 'GGLSS') { ?>
	<tr>	<td><?php echo $table6row['semisUniversal2010']['prefix'].' - '.$table6row['semisUniversal2010']['school_name']; ?></td>
			<td><?php echo $table6row['semisUniversal2010']['school_id']; ?></td>
			<td><?php echo $table6row['semisUniversal2010']['no_of_classroom']; ?></td>
			<td><?php echo $table6row['semisUniversal2010']['total_teachers']; ?></td>
			<td><?php echo $table6row['SemisEnrollment2010']['total_enrollment']; ?></td>
	</tr>
													
													
	
	
	<?php $x++; } } } ?>
													<!--Possible Guide School Suggestions - Girls Clusters Clusters   -->
													<!--Possible Guide School Suggestions - Girls Clusters Clusters   -->
													<!--Possible Guide School Suggestions - Girls Clusters Clusters   -->
	
	
													<!--Possible Guide School Suggestions - Mixed Schools Clusters   -->
													<!--Possible Guide School Suggestions - Mixed Schools Clusters   -->
													<!--Possible Guide School Suggestions - Mixed Schools Clusters   -->
	<tr>
		<td colspan=7 >
			<h3 style="text-align:center;">Table 8 (Possible Guide Schools Suggestions - Mixed Clusters - in order of preference)</h3>
		</td>
	</tr>
	<tr>	<td>Discription</td><td>SEMIS Code</td><td>C.Rooms</td><td>Teachers</td><td>Enrolement</td>	</tr>
	<?php $x = 0; foreach($table8mixrows as $table6row) { if($x == $mixedClustersSuggestions) { break; }else{ if($table6row['semisUniversal2010']['prefix'] == 'GBPS' || $table6row['semisUniversal2010']['prefix'] == 'GBELS' || $table6row['semisUniversal2010']['prefix'] == 'GBLSS' || $table6row['semisUniversal2010']['prefix'] == 'GGPS' || $table6row['semisUniversal2010']['prefix'] == 'GGELS' || $table6row['semisUniversal2010']['prefix'] == 'GGLSS') { ?>
	<tr>	<td><?php echo $table6row['semisUniversal2010']['prefix'].' - '.$table6row['semisUniversal2010']['school_name']; ?></td>
			<td><?php echo $table6row['semisUniversal2010']['school_id']; ?></td>
			<td><?php echo $table6row['semisUniversal2010']['no_of_classroom']; ?></td>
			<td><?php echo $table6row['semisUniversal2010']['total_teachers']; ?></td>
			<td><?php echo $table6row['SemisEnrollment2010']['total_enrollment']; ?></td>
	</tr>
	<?php $x++; } } } ?>
													<!--Possible Guide School Suggestions - Mixed Schools Clusters   -->
													<!--Possible Guide School Suggestions - Mixed Schools Clusters   -->
													<!--Possible Guide School Suggestions - Mixed Schools Clusters   -->




													
													
	
	<tr><div id="map_canvas" style="width:100%; height:450px;"></div></tr>
	<!--tr><td colspan=7 ></td></tr><tr><td colspan=7 ></td></tr>
	<tr>
		<td colspan=7 >
			<h3 style="text-align:center;">Table 9</h3>
		</td>
	</tr>
	<tr>	<td>Discription</td><td>C.Rooms</td><td>Teachers</td><td>Enrolement</td>	</tr>
	<tr>	<td></td><td></td><td></td><td></td><td></td></tr>
	
	<tr><td colspan=7 ></td></tr><tr><td colspan=7 ></td></tr>
	<tr>
		<td colspan=7 >
			<h3 style="text-align:center;">Table 10</h3>
		</td>
	</tr>
	<tr>	<td>UC </td><td>PTR</td><td>PCR</td><td>PSR</td><td>TCR</td><td>TSR</td></tr>
	<tr>	<td>High</td><td></td><td></td><td></td><td></td><td></td></tr>
	<tr>	<td>Low</td><td></td><td></td><td></td><td></td><td></td></tr>
	<tr>	<td>Average</td><td></td><td></td><td></td><td></td><td></td></tr-->	
	</table>
	<?php if(isset($download)) { ?>
	
<?php } ?>
	
<?php } ?>
<?php if(isset($view)) { ?>

<script type="text/javascript">

		$(function() 
		{
			
			$('#report_button').click(function(){
				
				$('#report').html('');
				
				//var from_id = $('#ratio_from').val();
				var from_id = 0;
				//var to_id = $('#ratio_to').val();
				var to_id = 0;
				
				var download = $('#download').val();
				
				if ($('#district_code').length>0) 
				{
					var district_id = $('#district_code').val();
					if ($('#tehsil_code').length>0) 
					{
						var tehsil_id = $('#tehsil_code').val();
						if ($('#union_council_id').length>0) 
						{
							var uc_id = $('#union_council_id').val();
							
							if(uc_id == 0)
							{
								var level = 'tehsil';
								
							}else
							{
								var level = 'uc';
							}
						}else
						{
							if(tehsil_id == 0)
							{
								var level = 'district';
							}else
							{
								var level = 'tehsil';
							}
							
							var uc_id = 0;
							
						}
					}else
					{
						
						var tehsil_id = 0;
						var uc_id = 0;
						
						
						if(district_id == 0)
						{
							var level = 'provincial';
						}else
						{
							var level = 'district';
						}
						
					}					
				}
					
					//alert('<?php echo $this->webroot?>home/semis_ratio/report/'+from_id+'/'+to_id+'/'+district_id+'/'+tehsil_id+'/'+uc_id+'/'+level);
					// $.ajax({
										// url: '<?php echo $this->webroot?>home/uc_based_query/report/'+district_id+'/'+tehsil_id+'/'+uc_id+'/'+level+'/0',
										// type: "GET",
										// cache: false,
										// success: function (html) {
										// $('#report').html('');
										// $('#report').html(html);
							// },
							// error: function(xhr, ajaxOptions, thrownError){
							// }
							// });
							var url = '<?php echo $this->webroot?>home/uc_based_query/report/'+district_id+'/'+tehsil_id+'/'+uc_id+'/'+level+'/0';
							window.open(url,'_blank');
				
				
			});
			
			$('#district_code').change(function(){
			var district_id = $('#district_code').val();
			if(district_id == "0"){
				$('#tehsil').empty();
				$('#unioncouncil').empty();
			}
			else{
				$('#tehsil').empty();
				$('#unioncouncil').empty();
				$.ajax({
					        url: '<?php echo $this->webroot?>home/submit_semis_query/district/'+district_id,
						    type: "GET",
						    cache: false,
						    success: function (html) {
						    $('#tehsil').html('');
							$('#tehsil').html(html);
						    $('#tehsil').show(2000);
							$('#tehsil_code').change(function(){
								var tehsil_id = $('#tehsil_code').val();
								
									if(tehsil_id == "0")
										{
											$('#unioncouncil').empty();
										}
									else
										{
											$.ajax({
												url: '<?php echo $this->webroot?>home/submit_semis_query/tehsil/'+tehsil_id,
												type: "GET",
												cache: false,
												success: function (html) {
												$('#unioncouncil').html('');
												$('#unioncouncil').html(html);
												$('#unioncouncil').show(2000);
												},
												error: function(xhr, ajaxOptions, thrownError){
												}
											});
											
										}
														
									});
							
							
							
							},
							error: function(xhr, ajaxOptions, thrownError){
							}
						});
				}
				});
				});
</script>


<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="district" >

	<tr><td width="50%">District</td>
		<td width="50%">
			<select name="district" id="district_code">
			<option selected="selected" value="0">All</option>
			<?php foreach($districts as $district) { ?>
				<option value="<?php echo $district['SemisCodeDistrict']['district_id']; ?>"><?php echo $district['SemisCodeDistrict']['district']; ?></option>
			<?php } ?>
			</select>
		</td>
	</tr>
</table>

<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="tehsil" >
	
</table>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="unioncouncil" >
	
</table>

<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="report_for" >
	<tr>
	<td width="50%" >
	</td >
	<td width="50%" >
		<input id="report_button" type="submit" label="View Report" />
	</td>
	</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf" id="report" ><tr><td><h1>The Reports Would be shown here......</h1></td></tr></table>
<div id="map_canvas" style="width:100%; height:450px;"></div>
<?php } ?>