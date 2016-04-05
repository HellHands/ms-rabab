<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" style="font-size:0.8em !important;" >
				<thead>
					<tr>
						<th>District</th>
						<th>Taluka</th>
						<th>Union Council</th>
						<th>SEMIS New / ID</th>
						<th>School Name</th>
						<?php if($superadmin == 2) { ?>
						<th>Add / Edit ASC Form</th>
						<?php } ?>
						<th>View Report</th>
					</tr>
				</thead>
				<tbody>
<?php foreach($allschoolsforms as $allschoolsform) { ?>
				<tr>
					<td><?php foreach($districts as $district) { if($district['SemisCodeDistrict']['district_id'] == $allschoolsform['Univ2012a']['DistrictID']) { echo $district['SemisCodeDistrict']['district']; } } ?></td>
					<td><?php foreach($tehsils as $tehsil) { if($tehsil['CodesForDistrictAndTehsil']['tehsil_id'] == $allschoolsform['Univ2012a']['TehsilID']) { echo $tehsil['CodesForDistrictAndTehsil']['tehsil']; } } ?></td>
					<td><?php foreach($union_councils as $union_council) { if($union_council['CodesForUc']['uc_id'] == $allschoolsform['Univ2012a']['UnionCouncilID']) { echo $union_council['CodesForUc']['uc_name']; } } ?></td>
					<td><?php echo $allschoolsform['Univ2012a']['school_id']; ?></td>
					<td><?php echo $allschoolsform['Univ2012a']['Prefix']." - ".$allschoolsform['Univ2012a']['SchoolName']; ?></td>
					<?php if($superadmin == 2) { ?>
						<td><?php if($allschoolsform['Univ2012a']['final'] == 9) { ?><a href="<?php echo $this->webroot; ?>home/semis_form_p1/<?php echo $allschoolsform['Univ2012a']['school_id']; ?>/add" >Add Form</a><?php }else{ ?><a href="<?php echo $this->webroot; ?>home/semis_form_p1_edit/<?php echo $allschoolsform['Univ2012a']['school_id']; ?>/edit" >Edit Form</a><?php } ?></td>
					<?php } ?>
					<td><a target="_blank" href="<?php echo $this->webroot; ?>home/online_school_report/<?php echo $allschoolsform['Univ2012a']['school_id']; ?>" >View School Report</a></td>
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
						<?php if($superadmin == 2) { ?>
							<th></th>
						<?php } ?>
						<th></th>
					</tr>
				</tfoot>
</table>

<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').dataTable();
			} );
</script>