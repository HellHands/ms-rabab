<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<thead>
<tr><td colspan="4"><h1><div style="float:left; text-align:center; width:100%; height:30px; background-color:#4455ff; color:#fff;">List Of Clusters for <?php echo $uc['Uc']['name']?></div></h1></td></tr>
<tr>
<th>Cluster Name</th>
<th>Cluster Code</th>
<th>View Details</th>
<th>Edit</th>
</tr>
</thead>
<tbody>
<?php foreach($clusters as $cluster) { ?>
<tr>
<td><?php echo $cluster['Cluster']['name']?></td>
<td><?php echo $cluster['Cluster']['code']?></td>
<td><a href='<?php echo $this->webroot?>home/cluster_details/<?php echo $cluster['Cluster']['id']?>'>Click</td>
<td><a href="<?php echo $this->webroot?>home/edit_cluster/<?php echo $cluster['Cluster']['id']?>">Edit</a></td>
</tr>
<?php } ?>
</tbody>
</table>

<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
<tr><td><a href="<?php echo $this->webroot?>home/add_cluster/<?php echo $uc['Uc']['id']?>">Add Another Cluster</a></td><td><div style="float:right;" ><a href="<?php echo $this->webroot?>home/taluka_details/<?php echo $uc['Uc']['taluka_id']?>">Go back</a></div></td></tr></table>
