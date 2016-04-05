<script>
$(function() {
$('#new_taluka_form').validate();
});
</script>

<table style="width:900px;">
<tr><td colspan="4"><h1><div style="float:left; text-align:center; width:100%; height:30px; background-color:#4455ff; color:#fff;">Edit Taluka</div></h1></td></tr>
<form id="new_taluka_form" action="<?php echo $this->webroot?>home/submit_taluka_details/<?php echo $taluka['Taluka']['id']?>" method="post">
<tr><td>Taluka/Town Name</td><td><input type="hidden" name="region_id" value="<?php echo $taluka['Taluka']['district_id']?>" /><input type="text" value="<?php echo $taluka['Taluka']['name']?>" name="taluka_name" class="required"/></td></tr>
<tr><td>Taluka/Town Code</td><td><input type="text" value="<?php echo $taluka['Taluka']['taluka_code']?>" name="taluka_code" class="number" /></td></tr>
<tr><td><input type="submit" value="submit" /></td></tr>
</form>
</table>

