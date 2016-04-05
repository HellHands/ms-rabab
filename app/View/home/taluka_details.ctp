<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<thead>
<tr><td colspan="4"><h1><div style="float:left; text-align:center; width:100%; height:30px; background-color:#4455ff; color:#fff;">List Of Ucs for <?php echo $taluka['Taluka']['name']?></div></h1></td></tr>
<tr>
<th>Uc Name</th>
<th>Uc Code</th>
<th>Uc Population</th>
<th>View Details</th>
<th>Edit</th>
</tr>
</thead>
<tbody>
<?php foreach($ucs as $uc) { ?>
<tr>
<td><?php echo $uc['Uc']['name']?></td>
<td><?php echo $uc['Uc']['uc_code']?></td>
<td><?php echo $uc['Uc']['uc_population']?></td>
<td><a href='<?php echo $this->webroot?>home/uc_detail/<?php echo $uc['Uc']['id']?>'>Click</td>
<td><a href="<?php echo $this->webroot?>home/edit_uc/<?php echo $uc['Uc']['id']?>">Edit</a></td>
</tr>
<?php } ?>
</tbody>
</table>

<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<tr><td><a href="<?php echo $this->webroot?>home/add_uc/<?php echo $taluka['Taluka']['id']?>">Add Another Uc</a></td><td><div style="float:right;" ><a href="<?php echo $this->webroot?>home/region_details/<?php echo $taluka['Taluka']['district_id']?>">Go back</a></div></td></tr></table>
