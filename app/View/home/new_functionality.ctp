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
			var markerText = '<?php echo '<p style="color:red;"><strong>'.$school['School']['name'].'</strong></p>'?><br/><?php echo $school['School']['code']?><br/><a href="<?php echo $this->webroot?>home/cluster_details/<?php echo $school['School']['clusterid']?>">view School Details </a>';
			var type = '<?php echo $school['School']['type']?>';
			marker = new GMarker(point);
			map.addOverlay(marker);
			if(type == 1)
			{
				//marker.setImage("<?php echo $this->webroot?>img/girls<?php echo strtolower($school['School']['prefix'])?>.png");
				marker.setImage("<?php echo $this->webroot?>img/marker<?php echo $school['School']['clusterid']?>.png");
			}
			else
			{
				//marker.setImage("<?php echo $this->webroot?>img/boys<?php echo strtolower($school['School']['prefix'])?>.png");
				marker.setImage("<?php echo $this->webroot?>img/marker<?php echo $school['School']['clusterid']?>.png");
			}
			marker.bindInfoWindowHtml(markerText);
			
			<?php  } ?>	
			
       
    }

    function addMarker(latitude, longitude, markerText,type,prefix) {
       
		
		
    }
	
	function setRegion()
	{
		var latlngbounds = new GLatLngBounds( );
		
		<?php foreach($all_clusters as $cluster) { ?>
		var polygon = new GPolygon([
			new GLatLng('<?php echo $cluster['Cluster']['latitude1']?>','<?php echo $cluster['Cluster']['longitude1']?>'),
			new GLatLng('<?php echo $cluster['Cluster']['latitude2']?>','<?php echo $cluster['Cluster']['longitude2']?>'),
			new GLatLng('<?php echo $cluster['Cluster']['latitude3']?>','<?php echo $cluster['Cluster']['longitude3']?>'),
			new GLatLng('<?php echo $cluster['Cluster']['latitude4']?>','<?php echo $cluster['Cluster']['longitude4']?>'),
			new GLatLng('<?php echo $cluster['Cluster']['latitude1']?>','<?php echo $cluster['Cluster']['longitude1']?>')
			
		  ], "#f33f00", 1, 1, "#<?php echo $cluster['Cluster']['id'].$cluster['Cluster']['id'].$cluster['Cluster']['id']?>", 0.2);
		map.addOverlay(polygon);
		
		latlngbounds.extend(new GLatLng('<?php echo $cluster['Cluster']['latitude1']?>','<?php echo $cluster['Cluster']['longitude1']?>'));
		latlngbounds.extend(new GLatLng('<?php echo $cluster['Cluster']['latitude2']?>','<?php echo $cluster['Cluster']['longitude2']?>'));
		latlngbounds.extend(new GLatLng('<?php echo $cluster['Cluster']['latitude3']?>','<?php echo $cluster['Cluster']['longitude3']?>'));
		latlngbounds.extend(new GLatLng('<?php echo $cluster['Cluster']['latitude4']?>','<?php echo $cluster['Cluster']['longitude4']?>'));
		map.setCenter(latlngbounds.getCenter(), map.getBoundsZoomLevel(latlngbounds));
		<?php } ?>
		
	}

    
</script>
</head>
<body>
<div id="map_canvas" style="width:100%; height:450px;"></div> 






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
