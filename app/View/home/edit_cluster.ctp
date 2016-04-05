<script>
$(function() {
$('#new_cluster_form').validate();
initializeMap();
});
</script>
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=ABQIAAAAGBvwvhwWbG9uim248Q2ibxTwvaxACFWXaSrDRUyQEt1_smLPDBQRTRL44ewqP8_Rh3BVd81MOYntCA" type="text/javascript"></script>
<script>
	//add the cluster
	var map;
	var geocoder;
	var marker1;
	var marker2;
	var marker3;
	var marker4;
	var marker5;
	var marker6;
	function initializeMap()
	{
		if (GBrowserIsCompatible())
		{
			//Where I Want To Go Map
			map = new GMap2(document.getElementById("map_canvas"));
			map.setUIToDefault();
			
			geocoder = new GClientGeocoder();
			
			var x = 0;
			<?php  foreach($cluster_schools as $school) { ?>
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
			if(x == 0)
			{
				<?php if((!empty($cluster["Cluster"]["latitude1"]) && !($cluster["Cluster"]["latitude1"] == 0)) && (!empty($cluster["Cluster"]["longitude1"]) && !($cluster["Cluster"]["longitude1"] == 0)) && (!empty($cluster["Cluster"]["latitude1"]) && !($cluster["Cluster"]["latitude1"] == 0)) && (!empty($cluster["Cluster"]["longitude1"]) && !($cluster["Cluster"]["longitude1"] == 0)) && (!empty($cluster["Cluster"]["latitude1"]) && !($cluster["Cluster"]["latitude1"] == 0)) && (!empty($cluster["Cluster"]["longitude2"]) && !($cluster["Cluster"]["longitude2"] == 0)) && (!empty($cluster["Cluster"]["latitude3"]) && !($cluster["Cluster"]["latitude3"] == 0)) && (!empty($cluster["Cluster"]["longitude4"]) && !($cluster["Cluster"]["longitude4"] == 0))) { ?>
				map.setCenter(new GLatLng(<?php echo $school['School']['latitude']?>, <?php echo $school['School']['longitude']?>),13);
				addToMap_latlong();
				<?php }else{ ?>
				map.setCenter(new GLatLng(<?php echo $school['School']['latitude']?>, <?php echo $school['School']['longitude']?>),13);
				geocoder.getLocations(new GLatLng(<?php echo $school['School']['latitude']?>, <?php echo $school['School']['longitude']?>),addToMap);
				<?php } ?>
				var x = 1;
			}
			<?php }  ?>	
			
		}
	}
	
	function addToMap_latlong(lat,long)
	{
		var point1 = new GLatLng('<?php echo $cluster["Cluster"]["latitude1"]?>','<?php echo $cluster["Cluster"]["longitude1"]?>');
		var point2 = new GLatLng('<?php echo $cluster["Cluster"]["latitude2"]?>','<?php echo $cluster["Cluster"]["longitude2"]?>');
		var point3 = new GLatLng('<?php echo $cluster["Cluster"]["latitude3"]?>','<?php echo $cluster["Cluster"]["longitude3"]?>');
		var point4 = new GLatLng('<?php echo $cluster["Cluster"]["latitude4"]?>','<?php echo $cluster["Cluster"]["longitude4"]?>');
		<?php
		/* if(!empty($neighborhood["Neighborhood"]["starting_point_lat"]))
		{ ?>
			var point5 = new GLatLng('<?php echo $neighborhood["Neighborhood"]["starting_point_lat"]?>','<?php echo $neighborhood["Neighborhood"]["starting_point_long"]?>');
		<?php
		}
		else
		{ ?>
			var point5 = new GLatLng(<?php echo $neighborhood["Neighborhood"]["latitude4"]?>+0.001,'<?php echo $neighborhood["Neighborhood"]["longitude4"]?>');
		<?php
		} ?>
		<?php
		/*
		var point6 = new GLatLng('<?php echo $neighborhood["Neighborhood"]["ending_point_lat"]?>','<?php echo $neighborhood["Neighborhood"]["ending_point_long"]?>');
		*/?>
		// Center the map on this point
		//map.setCenter(point1, 14);
		
		var options = { 
			draggable: true,
			dragCrossMove: true,
			bounceGravity:1
		};
		
		marker1 = new GMarker(point1,options);		
		GEvent.addListener(marker1, "dragend", function(latlong) {
		  $('#latitude1').val(latlong.lat());
		  $('#longitude1').val(latlong.lng());
		  marker1.bindInfoWindowHtml('');
		});		
		map.addOverlay(marker1);	// Add the marker to map		
		
		marker1.setImage("http://www.google.com/mapfiles/markerA.png");
		
		marker2 = new GMarker(point2,options);		
		GEvent.addListener(marker2, "dragend", function(latlong) {
		  $('#latitude2').val(latlong.lat());
		  $('#longitude2').val(latlong.lng());
		  marker2.bindInfoWindowHtml('');
		});
		map.addOverlay(marker2); // Add the marker to map
		
		marker2.setImage("http://www.google.com/mapfiles/markerB.png");
		
		marker3 = new GMarker(point3,options);		
		GEvent.addListener(marker3, "dragend", function(latlong) {
		  $('#latitude3').val(latlong.lat());
		  $('#longitude3').val(latlong.lng());
		  marker3.bindInfoWindowHtml('');
		});		
		map.addOverlay(marker3); // Add the marker to map
		
		marker3.setImage("http://www.google.com/mapfiles/markerC.png");
		
		marker4 = new GMarker(point4,options);		
		GEvent.addListener(marker4, "dragend", function(latlong) {
		  $('#latitude4').val(latlong.lat());
		  $('#longitude4').val(latlong.lng());
		  marker4.bindInfoWindowHtml('');
		});		
		map.addOverlay(marker4); // Add the marker to map
		
		marker4.setImage("http://www.google.com/mapfiles/markerD.png");
		
		//marker5 = new GMarker(point5,options);		
		//GEvent.addListener(marker5, "dragend", function(latlong) {
		//  $('#starting_point_lat').val(latlong.lat());
		//  $('#starting_point_long').val(latlong.lng());
		//  marker5.bindInfoWindowHtml('');
		//});		
		//map.addOverlay(marker5); // Add the marker to map
		
		//marker5.setImage("http://www.google.com/mapfiles/dd-start.png");
		<?php
		/*
		marker6 = new GMarker(point6,options);		
		GEvent.addListener(marker6, "dragend", function(latlong) {
		  $('#ending_point_lat').val(latlong.lat());
		  $('#ending_point_long').val(latlong.lng());
		  marker6.bindInfoWindowHtml('');
		});		
		map.addOverlay(marker6); // Add the marker to map
		
		marker6.setImage("http://www.google.com/mapfiles/dd-end.png");
		*/
		?>
	}
	
	function addToMap(response)
	{
		// Retrieve the object
		place = response.Placemark[0];

		// Retrieve the latitude and longitude
		point = new GLatLng(place.Point.coordinates[1],
			place.Point.coordinates[0]);

		// Center the map on this point
		map.setCenter(point, 13);

		$('#latitude1').val(place.Point.coordinates[1]);
		$('#langitude1').val(place.Point.coordinates[0]);
		
		$('#latitude2').val(place.Point.coordinates[1]);
		$('#langitude2').val(place.Point.coordinates[0]);
		
		$('#latitude3').val(place.Point.coordinates[1]);
		$('#langitude3').val(place.Point.coordinates[0]);
		
		$('#latitude4').val(place.Point.coordinates[1]);
		$('#langitude4').val(place.Point.coordinates[0]);
		
		var options = {
			draggable: true,
			dragCrossMove: true,
			bounceGravity:1
		};

		// Create a marker
		marker1 = new GMarker(point,options);
		GEvent.addListener(marker1, "dragend", function(latlang) {
			  $('#latitude1').val(latlang.lat());
			  $('#langitude1').val(latlang.lng());
			  marker1.bindInfoWindowHtml('');
		  });		
		map.addOverlay(marker1);	 // Add the marker to map
		marker1.setImage("http://www.google.com/mapfiles/markerA.png");
		
		// Create a marker
		marker2 = new GMarker(point,options);
		GEvent.addListener(marker2, "dragend", function(latlang) {
			  $('#latitude2').val(latlang.lat());
			  $('#langitude2').val(latlang.lng());
			  marker2.bindInfoWindowHtml('');
		  });		
		map.addOverlay(marker2);	 // Add the marker to map
		marker2.setImage("http://www.google.com/mapfiles/markerB.png");
		
		// Create a marker
		marker3 = new GMarker(point,options);
		GEvent.addListener(marker3, "dragend", function(latlang) {
			  $('#latitude3').val(latlang.lat());
			  $('#langitude3').val(latlang.lng());
			  marker3.bindInfoWindowHtml('');
		  });		
		map.addOverlay(marker3);	 // Add the marker to map
		marker3.setImage("http://www.google.com/mapfiles/markerC.png");
		
		// Create a marker
		marker4 = new GMarker(point,options);
		GEvent.addListener(marker4, "dragend", function(latlang) {
			  $('#latitude4').val(latlang.lat());
			  $('#langitude4').val(latlang.lng());
			  marker4.bindInfoWindowHtml('');
		  });		
		map.addOverlay(marker4);	 // Add the marker to map
		marker4.setImage("http://www.google.com/mapfiles/markerD.png");
		<?php
		// Create a marker
		/*
		marker5 = new GMarker(point,options);
		GEvent.addListener(marker5, "dragend", function(latlang) {
			  $('#starting_point_lat').val(latlang.lat());
			  $('#starting_point_long').val(latlang.lng());
			  marker5.bindInfoWindowHtml('');
		  });		
		map.addOverlay(marker5);	 // Add the marker to map
		marker5.setImage("http://www.google.com/mapfiles/dd-start.png");
		*/
		
		/*
		// Create a marker
		marker6 = new GMarker(point,options);
		GEvent.addListener(marker6, "dragend", function(latlang) {
			  $('#ending_point_lat').val(latlang.lat());
			  $('#ending_point_long').val(latlang.lng());
			  marker6.bindInfoWindowHtml('');
		  });		
		map.addOverlay(marker6);	 // Add the marker to map
		marker6.setImage("http://www.google.com/mapfiles/dd-end.png");
		*/ ?>
	}
	</script>

<table style="width:900px;">
<tr><td colspan="2"><h1><div style="float:left; text-align:center; width:100%; height:30px; background-color:#4455ff; color:#fff;">Edit Cluster</div></h1></td></tr>
<form id="new_cluster_form" action="<?php echo $this->webroot?>home/submit_cluster_details/<?php echo $cluster['Cluster']['id']?>" method="post">

<tr><td>Cluster Name</td><td><input type="hidden" name="uc_id" value="<?php echo $cluster['Cluster']['uc_id']?>" /><input type="text" value="<?php echo $cluster['Cluster']['name']?>" name="cluster_name" class="required"/></td></tr>
<tr><td>Cluster Code</td><td><input type="text" value="<?php echo $cluster['Cluster']['code']?>" name="cluster_code" class="number" /></td></tr>
<?php /*
<tr><td colspan="2"><h2>GPS Co-ordinates for Cluster Highlighting</h2></td></tr>
<tr><td>Latitude 1 </td><td><input type="text" name="lat_1" class="number" value="<?php echo $cluster['Cluster']['latitude1']?>" /></td></tr>
<tr><td>Longitude 1 </td><td><input  type="text" name="long_1" class="number" value="<?php echo $cluster['Cluster']['longitude1']?>" /></td></tr>

<tr><td>Latitude 2 </td><td><input  type="text" name="lat_2" class="number" value="<?php echo $cluster['Cluster']['latitude2']?>" /></td></tr>
<tr><td>Longitude 2 </td><td><input  type="text" name="long_2" class="number" value="<?php echo $cluster['Cluster']['longitude2']?>" /></td></tr>

<tr><td>Latitude 3 </td><td><input  type="text" name="lat_3" class="number" value="<?php echo $cluster['Cluster']['latitude3']?>" /></td></tr>
<tr><td>Longitude 3 </td><td><input  type="text" name="long_3" class="number" value="<?php echo $cluster['Cluster']['longitude3']?>" /></td></tr>

<tr><td>Latitude 4 </td><td><input  type="text" name="lat_4" class="number" value="<?php echo $cluster['Cluster']['latitude4']?>" /></td></tr>
<tr><td>Longitude 4 </td><td><input  type="text" name="long_4" class="number" value="<?php echo $cluster['Cluster']['longitude4']?>" /></td></tr>
*/ ?>

<tr><td colspan=2><strong>Enter Semis Code for Schools You Want To Add To The Cluster (In Addition To Current Schools)</strong></td></tr>
<tr><td>School Semis Code # 1</td><td><input name="school_semis[]" class="number" /></td></tr>
<tr><td>School Semis Code # 2</td><td><input name="school_semis[]" class="number" /></td></tr>
<tr><td>School Semis Code # 3</td><td><input name="school_semis[]" class="number" /></td></tr>
<tr><td>School Semis Code # 4</td><td><input name="school_semis[]" class="number" /></td></tr>
<tr><td>School Semis Code # 5</td><td><input name="school_semis[]" class="number" /></td></tr>
<tr><td>School Semis Code # 6</td><td><input name="school_semis[]" class="number" /></td></tr>
<tr><td>School Semis Code # 7</td><td><input name="school_semis[]" class="number" /></td></tr>
<tr><td>School Semis Code # 8</td><td><input name="school_semis[]" class="number" /></td></tr>
<tr><td>School Semis Code # 9</td><td><input name="school_semis[]" class="number" /></td></tr>
<tr><td>School Semis Code # 10</td><td><input name="school_semis[]" class="number" /></td></tr>

<tr>
            <td colspan="2">
				<div id="map_canvas" class="map_canvas" style="width:100%; height: 420px"></div> 
				<strong><em>Please properly mark the region in order A->B->C->D->A </em></strong><br/>
				<?php
				/*
				<img src="http://www.google.com/mapfiles/dd-start.png" /> Starting point<br/>
				
				<img src="http://www.google.com/mapfiles/dd-end.png" /> Ending point
				*/?>
            </td>
        </tr>
         <tr><td colspan="2">&nbsp;</td></tr>
        <tr>
            <td colspan="2">
                <?php
				/*
				<input type="hidden" value="" name="starting_point_lat" id="starting_point_lat" class="required"/>
                <input type="hidden" value="" name="starting_point_long" id="starting_point_long" class="required"/>
                
				<input type="hidden" value="" name="ending_point_lat" id="ending_point_lat" class="required"/>
                <input type="hidden" value="" name="ending_point_long" id="ending_point_long" class="required"/>
				*/
				?>	
                
				<?php if((!empty($cluster["Cluster"]["latitude1"]) && !($cluster["Cluster"]["latitude1"] == 0)) && (!empty($cluster["Cluster"]["longitude1"]) && !($cluster["Cluster"]["longitude1"] == 0)) && (!empty($cluster["Cluster"]["latitude1"]) && !($cluster["Cluster"]["latitude1"] == 0)) && (!empty($cluster["Cluster"]["longitude1"]) && !($cluster["Cluster"]["longitude1"] == 0)) && (!empty($cluster["Cluster"]["latitude1"]) && !($cluster["Cluster"]["latitude1"] == 0)) && (!empty($cluster["Cluster"]["longitude2"]) && !($cluster["Cluster"]["longitude2"] == 0)) && (!empty($cluster["Cluster"]["latitude3"]) && !($cluster["Cluster"]["latitude3"] == 0)) && (!empty($cluster["Cluster"]["longitude4"]) && !($cluster["Cluster"]["longitude4"] == 0))) { ?>
				<input type="hidden" value="<?php echo $cluster["Cluster"]["latitude1"]?>" name="txtLat1" id="latitude1" class="required" />
				<input type="hidden" value="<?php echo $cluster["Cluster"]["longitude1"]?>" name="txtLng1" id="longitude1" class="required" />
                <input type="hidden" value="<?php echo $cluster["Cluster"]["latitude2"]?>" name="txtLat2" id="latitude2" class="required" />
				<input type="hidden" value="<?php echo $cluster["Cluster"]["longitude2"]?>" name="txtLng2" id="longitude2" class="required" />
                <input type="hidden" value="<?php echo $cluster["Cluster"]["latitude3"]?>" name="txtLat3" id="latitude3" class="required" />
				<input type="hidden" value="<?php echo $cluster["Cluster"]["longitude3"]?>" name="txtLng3" id="longitude3" class="required" />
                <input type="hidden" value="<?php echo $cluster["Cluster"]["latitude4"]?>" name="txtLat4" id="latitude4" class="required" />
				<input type="hidden" value="<?php echo $cluster["Cluster"]["longitude4"]?>" name="txtLng4" id="longitude4" class="required" />
				<?php }else{ ?>
				<input type="hidden" value="" name="txtLat1" id="latitude1" class="required"/>
				<input type="hidden" value="" name="txtLng1" id="langitude1" class="required"/>
                <input type="hidden" value="" name="txtLat2" id="latitude2" class="required"/>
				<input type="hidden" value="" name="txtLng2" id="langitude2" class="required" />
                <input type="hidden" value="" name="txtLat3" id="latitude3" class="required" />
				<input type="hidden" value="" name="txtLng3" id="langitude3" class="required" />
                <input type="hidden" value="" name="txtLat4" id="latitude4" class="required" />
				<input type="hidden" value="" name="txtLng4" id="langitude4" class="required" />
                <?php } ?>
            </td>
        </tr>
		
		
<tr><td><input type="submit" value="submit" /></td></tr>
</form>
</table>