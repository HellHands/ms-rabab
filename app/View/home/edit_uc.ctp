<script>
$(function() {
$('#new_district_form').validate();
});
</script>

<table style="width:900px;">
<tr><td colspan="2"><h1><div style="float:left; text-align:center; width:100%; height:30px; background-color:#4455ff; color:#fff;">Edit Uc</div></h1></td></tr>
<form id="new_district_form" action="<?php echo $this->webroot?>home/submit_uc_details/<?php echo $uc['Uc']['id']?>" method="post">
<tr><td>Uc Name</td><td><input type="hidden" name="taluka_id" value="<?php echo $uc['Uc']['taluka_id']?>" /><input type="text" value="<?php echo $uc['Uc']['name'] ?>" name="uc_name" class="required"/></td></tr>
<tr><td>Uc Code</td><td><input type="text" value="<?php echo $uc['Uc']['uc_code']?>" name="uc_code" class="number" /></td></tr>
<tr><td>Uc Population</td><td><input type="text" value="<?php echo $uc['Uc']['uc_population']?>" name="uc_population" class="number" /></td></tr>
<tr><td><input type="submit" value="submit" /></td></tr>
</form>
</table>

