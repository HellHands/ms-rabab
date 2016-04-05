<script>
$(function() {
$('#new_cluster_form').validate();
});

</script>

<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<tr><td colspan="2"><h1><div style="float:left; text-align:center; width:100%; height:30px; background-color:#4455ff; color:#fff;">Add New Cluster</div></h1></td></tr>
<form id="new_cluster_form" action="<?php echo $this->webroot?>home/submit_cluster_details" method="post">
<tr><td>Cluster Name</td><td><input type="hidden" name="uc_id" value="<?php echo $uc_id?>" /><input type="text" value="" name="cluster_name" class="required"/></td></tr>
<tr><td>Cluster Code</td><td><input type="text" value="" name="cluster_code" class="number" /></td></tr>
<tr><td colspan="2"><h2>GPS Co-ordinates for Cluster Highlighting</h2></td></tr>
<tr><td>Latitude 1 </td><td><input type="text" name="txtLat1" class="number" value="" /></td></tr>
<tr><td>Longitude 1 </td><td><input  type="text" name="txtLng1" class="number" value="" /></td></tr>

<tr><td>Latitude 2 </td><td><input  type="text" name="txtLat2" class="number" value="" /></td></tr>
<tr><td>Longitude 2 </td><td><input  type="text" name="txtLng2" class="number" value="" /></td></tr>

<tr><td>Latitude 3 </td><td><input  type="text" name="txtLat3" class="number" value="" /></td></tr>
<tr><td>Longitude 3 </td><td><input  type="text" name="txtLng3" class="number" value="" /></td></tr>

<tr><td>Latitude 4 </td><td><input  type="text" name="txtLat4" class="number" value="" /></td></tr>
<tr><td>Longitude 4 </td><td><input  type="text" name="txtLng4" class="number" value="" /></td></tr>
<tr><td colspan=2><strong>Enter Semis Code for Schools You Want To Add To The Cluster</strong></td></tr>
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
<tr><td><input type="submit" value="submit" /></td></tr>
</form>
</table>

