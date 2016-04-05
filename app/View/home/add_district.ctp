<script>
$(function() {
$('#new_district_form').validate();
});
</script>

<table style="width:900px;">
<tr><td colspan="2"><h1><div style="float:left; text-align:center; width:100%; height:30px; background-color:#4455ff; color:#fff;">Add New District</div></h1></td></tr>
<form id="new_district_form" action="<?php echo $this->webroot?>/home/submit_district_details" method="post">
<tr><td>District Name</td><td><input type="text" value="" name="district_name" class="required"/></td></tr>
<tr><td>District Code</td><td><input type="text" value="" name="district_code" class="number" /></td></tr>
<tr><td>Latitude</td><td><input type="text" value="" name="latitude" class="number" /></td></tr>
<tr><td>Longitude</td><td><input type="text" value="" name="longitude" class="number" /></td></tr>
<tr><td><input type="submit" value="submit" /></td></tr>
</form>
</table>

