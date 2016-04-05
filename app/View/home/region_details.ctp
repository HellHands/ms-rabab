

<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<thead>
<tr><td colspan="4"><h1><div style="float:left; text-align:center; width:100%; height:30px; background-color:#4455ff; color:#fff;">List Of Talukas for <?php echo $regions['Region']['name']?></div></h1></td></tr>
<tr>
<th>Taluka/Town Name</th>
<th>Taluka/Town Code</th>
<th>View Details</th>
<th>Edit</th>
</tr>
</thead>
<tbody>
<?php foreach($talukas as $taluka) { ?>
<tr>
<td><?php echo $taluka['Taluka']['name']?></td>
<td><?php echo $taluka['Taluka']['taluka_code']?></td>
<td><a href='<?php echo $this->webroot?>home/taluka_details/<?php echo $taluka['Taluka']['id']?>'>Click</td>
<td><a href="<?php echo $this->webroot?>home/edit_taluka/<?php echo $taluka['Taluka']['id']?>">Edit</a></td>
</tr>
<?php } ?>
</tbody>
</table>

<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<thead>
<tr><td><a href="<?php echo $this->webroot?>home/add_taluka/<?php echo $regions['Region']['id']?>">Add Another taluka</a></td><td><div style="float:right;" ><a href="<?php echo $this->webroot?>home/index/">Go back</a></div></td></tr>
</head>
</table>
<?php if(!empty($regions['Region']['google_map']))
{
	echo $regions['Region']['google_map'];
}
?>

