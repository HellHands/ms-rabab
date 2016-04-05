<?php
if($type == null)
{
	echo "<a href='".$this->webroot."home/inconsistency/dup_per_number' >Inconsistency in Personnel Number</a><br><br>";
	echo "<a href='".$this->webroot."home/inconsistency/dup_cnic' >Inconsistency in CNIC</a>";
}
// echo "type".$type;
if($type == 'dup_per_number' || $type == 'dup_cnic')
{
// echo "<pre>";
// print_r($duplicate_records);
// echo "</pre>";
// echo count($duplicate_records);
?>

<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" style="font-size:0.8em !important;" >
				<thead>
					<tr>
						<th>District</th>
						<th>Taluka</th>
						<th>Union Council</th>
						<th>SEMIS New / ID</th>
						<th>Teacher Name</th>
						<th>Teacher CNIC</th>
						<th>Teacher Personnel Number</th>
						<th>Edit / Status</th>
					</tr>
				</thead>
				<tbody>
<?php foreach($duplicate_records as $duplicate_record) { ?>
				<?php if(isset($duplicate_record['SemisUniversal201415'])) { ?>
				<tr>
					<td><?php foreach($districts as $district) { if($district['SemisCodeDistrict']['district_id'] == $duplicate_record['SemisUniversal201415']['bi_school_district']) { echo $district['SemisCodeDistrict']['district']; } } ?></td>
					<td><?php foreach($tehsils as $tehsil) { if($tehsil['CodesForDistrictAndTehsil']['tehsil_id'] == $duplicate_record['SemisUniversal201415']['bi_school_taluka']) { echo $tehsil['CodesForDistrictAndTehsil']['tehsil']; } } ?></td>
					<td><?php foreach($union_councils as $union_council) { if($union_council['CodesForUc']['uc_id'] == $duplicate_record['SemisUniversal201415']['bi_school_uc']) { echo $union_council['CodesForUc']['uc_name']; } } ?></td>
					<td><?php echo $duplicate_record['SemisUniversal201415']['school_semis_new']; ?></td>
					<td><?php echo $duplicate_record['SemisTeacher201415']['tdi_full_name']; ?></td>
					<td><?php echo $duplicate_record['SemisTeacher201415']['tdi_teacher_cnic']; ?></td>
					<td><?php echo $duplicate_record['SemisTeacher201415']['tdi_teacher_personnel_number']; ?></td>
					<td><a href="<?php echo $this->webroot;?>home/inconsistency_check/delete_teacher/0/0/0/<?php echo $duplicate_record['SemisUniversal201415']['school_semis_new']; ?>/<?php echo $duplicate_record['SemisTeacher201415']['id']; ?>" >Delete this record </a> / <a href="<?php echo $this->webroot;?>home/semis_form_p1_edit/<?php echo $duplicate_record['SemisUniversal201415']['school_semis_new']; ?>" > Edit SEMIS form </a> </td>
				</tr>
				<?php } ?>
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
<?php } ?>