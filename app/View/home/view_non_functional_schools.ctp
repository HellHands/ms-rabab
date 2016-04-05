<?php if($report == 'functional') { ?>
<table border="1px solid">
<tr><td colspan=8 style="text-align:center;"><h1 class="main-heading">List Of Non Functional Schools </h1></td></tr>
</table>
<?php if(!(isset($filename))) { ?>
<div style="float:right;"><a href="<?php echo $this->webroot?>home/view_non_functional_schools/1/1">Download List</a></div>
<?php } ?>

<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<tr style="background-color:#bbffdd;">
<th>Name Of School</th>
<th>Prefix</th>
<th>Guide School</th>
<th>Distance from guide school</th>
<th>School Has Building</th>
<th>Type</th>
<th>SEMIS Code</th>
</tr>
<?php foreach($schools as $school) {  ?>
<tr>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?> ><a href="<?php echo $this->webroot?>home/add_school/<?php echo $school['School']['clusterid']?>/<?php echo $school['School']['id']?>"><?php echo $school['School']['name']; ?></a></td>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php echo $school['School']['prefix']; ?></td>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php if(($school['School']['guide_school']) == 1) { echo"Yes"; }else{ echo "No";} ?></td>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php if(($school['School']['guide_school']) == 0) { if(($school['School']['distance_from_guide']) == 1) { echo '1 km or less'; }elseif(($school['School']['distance_from_guide']) == 2) { echo '1 to 1.5 km'; }elseif(($school['School']['distance_from_guide']) == 3) { echo '1.5 to 2 km'; }elseif(($school['School']['distance_from_guide']) == 4) { echo 'more then 2 km'; } } else { echo "0"; }  ?></td>

<?php if($school['School']['has_building'] == 1) { ?> 
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php echo "Yes"; ?></td>
<?php }else{ ?>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php echo "No"; ?></td>
<?php } ?>

<?php if($school['School']['type'] == 1) { ?> 
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php echo "Girls"; ?></td>
<?php }else{ ?>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php echo "Boys"; ?></td>
<?php } ?>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php echo $school['School']['code']; ?></td>
</tr>
<?php } ?></table>

<?php }elseif($report == 'single_teacher') { ?>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<tr><td colspan=8 style="text-align:center;"><h1 class="main-heading">List Of Single Teacher Schools </h1></td></tr>
</table>
<?php if(!(isset($filename))) { ?>
<div style="float:right;"><a href="<?php echo $this->webroot?>home/view_non_functional_schools/1/2">Download List</a></div>
<?php } ?>

<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<tr style="background-color:#bbffdd;">
<th>Name Of School</th>
<th>Prefix</th>
<th>Guide School</th>
<th>Distance from guide school</th>
<th>School Has Building</th>
<th>Type</th>
<th>SEMIS Code</th>
</tr>
<?php foreach($schools as $school) {  ?>
<tr>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?> ><a href="<?php echo $this->webroot?>home/add_school/<?php echo $school['School']['clusterid']?>/<?php echo $school['School']['id']?>"><?php echo $school['School']['name']; ?></a></td>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php echo $school['School']['prefix']; ?></td>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php if(($school['School']['guide_school']) == 1) { echo"Yes"; }else{ echo "No";} ?></td>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php if(($school['School']['guide_school']) == 0) { if(($school['School']['distance_from_guide']) == 1) { echo '1 km or less'; }elseif(($school['School']['distance_from_guide']) == 2) { echo '1 to 1.5 km'; }elseif(($school['School']['distance_from_guide']) == 3) { echo '1.5 to 2 km'; }elseif(($school['School']['distance_from_guide']) == 4) { echo 'more then 2 km'; } } else { echo "0"; }  ?></td>

<?php if($school['School']['has_building'] == 1) { ?> 
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php echo "Yes"; ?></td>
<?php }else{ ?>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php echo "No"; ?></td>
<?php } ?>

<?php if($school['School']['type'] == 1) { ?> 
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php echo "Girls"; ?></td>
<?php }else{ ?>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php echo "Boys"; ?></td>
<?php } ?>
<td <?php if(($school['School']['guide_school']) == 1) { ?> style="background-color:#88ff55;"<?php } ?>><?php echo $school['School']['code']; ?></td>
</tr>
<?php } ?></table>
<?php } ?>