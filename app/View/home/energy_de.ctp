<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" style="font-size:0.8em !important;" >
				<thead>
					<tr>
						<th>District</th>
						<th>Taluka</th>
						<th>Union Council</th>
						<th>Project Name</th>
						<th>Cost of Project</th>
						<th>Edit Entry</th>
					</tr>
				</thead>
				<tbody>
<?php foreach($energyMis as $energy_mis) { ?>
				<tr>
					<td><?php foreach($districts as $district) { if($district['SemisCodeDistrict']['district'] == $energy_mis['energyMis']['name_district']) { echo $district['SemisCodeDistrict']['district']; } } ?></td>
					<td><?php foreach($tehsils as $tehsil) { if($tehsil['CodesForDistrictAndTehsil']['tehsil'] == $energy_mis['energyMis']['taluka_town']) { echo $tehsil['CodesForDistrictAndTehsil']['tehsil']; } } ?></td>
					<td><?php foreach($union_councils as $union_council) { if($union_council['CodesForUc']['uc_name'] == $energy_mis['energyMis']['village_mohalla']) { echo $union_council['CodesForUc']['uc_name']; } } ?></td>
					<td><?php echo $energy_mis['energyMis']['name_scheme']; ?></td>
					<td><?php echo $energy_mis['energyMis']['approved_cost']; ?></td>
					<td><a target="_blank" href="<?php echo $this->webroot; ?>home/add_edit_energyproject/<?php echo $energy_mis['energyMis']['id']; ?>" >Edit this entry</a></td>
				</tr>
<?php } ?>
				</tbody>
				<tfoot>
					<tr>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
						<th></th>
					</tr>
				</tfoot>
</table>

<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').dataTable();
			} );
</script>