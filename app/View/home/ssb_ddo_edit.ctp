<form id="new_teacher_form" action="<?php echo $this->webroot?>home/ssb_ddo_edit/<?php echo $ddo['DdoInfo']['id']?>" method="post">
<h1>Form for Editing the Information of DDO</h1>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<tr><td>DDO Name </td><td><input type="text" style="width:250px" name="ddo_name" class="required" value="<?php echo $ddo['DdoInfo']['ddo_name']?>" /></td></tr>
<tr><td>DDO Code </td><td><input type="text" name="ddo_code" class="required" value="<?php echo $ddo['DdoInfo']['ddo_code']?>" /></td></tr>
<tr><td>475 </td><td><input type="text" name="475_total" class="required" value="<?php echo $ddo['DdoInfo']['475_total']?>" /></td></tr>
<tr><td>476 </td><td><input type="text" name="476_total" class="required" value="<?php echo $ddo['DdoInfo']['476_total']?>" /></td></tr>
<tr><td>477 </td><td><input type="text" name="477_total" class="required" value="<?php echo $ddo['DdoInfo']['477_total']?>" /></td></tr>
<tr><td>478 </td><td><input type="text" name="478_total" class="required" value="<?php echo $ddo['DdoInfo']['478_total']?>" /></td></tr>
<tr><td>479 </td><td><input type="text" name="479_total" class="required" value="<?php echo $ddo['DdoInfo']['479_total']?>" /></td></tr>
<tr><td>480 </td><td><input type="text" name="480_total" class="required" value="<?php echo $ddo['DdoInfo']['480_total']?>" /></td></tr>
<tr><td>Total SSB </td><td><input type="text" name="ssb_total" class="required" value="<?php echo $ddo['DdoInfo']['ssb_total']?>" /></td></tr>
<tr><td>Total SSB </td><td><input type="text" name="total_sne" class="required" value="<?php echo $ddo['DdoInfo']['total_sne']?>" /></td></tr>
<tr><td>School Levels </td><td><input type="text" name="school_levels" class="required" value="<?php echo $ddo['DdoInfo']['school_levels']?>" /></td></tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<tr><td><input type="submit" value="submit" /></td></tr>
</table>
</form>