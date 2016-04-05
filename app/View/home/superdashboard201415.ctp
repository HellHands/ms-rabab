<?php if(isset($allschoolsforms)) { ?>
<?php if($status == 'fil') { ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" style="font-size:0.8em !important;" >
				<thead>
					<tr>
						<th>District</th>
						<th>Taluka</th>
						<th>Union Council</th>
						<th>SEMIS New / ID</th>
						<th>School Name</th>
						<?php if($uname == 'admin') { ?>
						<th>Edit / Status</th>
						<?php } ?>
						<th>View Report</th>
					</tr>
				</thead>
				<tbody>
<?php foreach($allschoolsforms as $allschoolsform) { ?>
				<tr>
					<td><?php foreach($districts as $district) { if($district['SemisCodeDistrict']['district_id'] == $allschoolsform['semis_universal201415s']['bi_school_district']) { echo $district['SemisCodeDistrict']['district']; } } ?></td>
					<td><?php foreach($tehsils as $tehsil) { if($tehsil['CodesForDistrictAndTehsil']['tehsil_id'] == $allschoolsform['semis_universal201415s']['bi_school_taluka']) { echo $tehsil['CodesForDistrictAndTehsil']['tehsil']; } } ?></td>
					<td><?php foreach($union_councils as $union_council) { if($union_council['CodesForUc']['uc_id'] == $allschoolsform['semis_universal201415s']['bi_school_uc']) { echo $union_council['CodesForUc']['uc_name']; } } ?></td>
					<td><?php echo $allschoolsform['semis_universal201415s']['school_semis_new']; ?></td>
					<td><?php echo $allschoolsform['semis_universal201415s']['bi_school_name']; ?></td>
					<?php if($uname == 'admin') { ?>
						<td><?php if($allschoolsform['semis_universal201415s']['final'] == 2) { ?><a href="<?php echo $this->webroot; ?>home/unfinalize_form/0/0/<?php echo $allschoolsform['semis_universal201415s']['school_semis_new']; ?>/201415/deo" >Un Finalize Form (deo)</a> / <a href="<?php echo $this->webroot; ?>home/unfinalize_form/0/0/<?php echo $allschoolsform['semis_universal201415s']['school_semis_new']; ?>/201415/do" >Un Finalize Form (do)</a><?php }elseif($allschoolsform['semis_universal201415s']['final'] == 1) { ?> <a href="<?php echo $this->webroot; ?>home/unfinalize_form/0/0/<?php echo $allschoolsform['semis_universal201415s']['school_semis_new']; ?>/201415/deo" >Un Finalize Form (deo)</a> <?php }else { ?>Form is not finalized<?php } ?></td>
					<?php } ?>
					<td><a target="_blank" href="<?php echo $this->webroot; ?>home/online_school_report/<?php echo $allschoolsform['semis_universal201415s']['id']; ?>" >View School Report</a></td>
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
						<?php if($uname == 'admin') { ?>
							<th></th>
						<?php } ?>
						<th></th>
					</tr>
				</tfoot>
</table>
<?php } ?>
<?php if($status == 'fin') { ?>
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" style="font-size:0.8em !important;" >
				<thead>
					<tr>
						<th>District</th>
						<th>Taluka</th>
						<th>Union Council</th>
						<th>SEMIS New / ID</th>
						<th>School Name</th>
					</tr>
				</thead>
				<tbody>
<?php foreach($allschoolsforms as $allschoolsform) { ?>
				<tr>
					<td><?php foreach($districts as $district) { if($district['SemisCodeDistrict']['district_id'] == $allschoolsform['univ2012as']['DistrictID']) { echo $district['SemisCodeDistrict']['district']; } } ?></td>
					<td><?php foreach($tehsils as $tehsil) { if($tehsil['CodesForDistrictAndTehsil']['tehsil_id'] == $allschoolsform['univ2012as']['TehsilID']) { echo $tehsil['CodesForDistrictAndTehsil']['tehsil']; } } ?></td>
					<td><?php foreach($union_councils as $union_council) { if($union_council['CodesForUc']['uc_id'] == $allschoolsform['univ2012as']['UnionCouncilID']) { echo $union_council['CodesForUc']['uc_name']; } } ?></td>
					<td><?php echo $allschoolsform['univ2012as']['school_id']; ?></td>
					<td><?php echo $allschoolsform['univ2012as']['Prefix']." - ".$allschoolsform['univ2012as']['SchoolName']; ?></td>
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
					</tr>
				</tfoot>
</table>
<?php } ?>
<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').dataTable();
			} );
</script>
<?php }else{ ?>
<script>
function get_report(dis_id)
{
	var type = $('#type').val();
	var status = $('#status').val();
	window.location = '..<?php echo $this->webroot; ?>home/superdashboard201415/'+type+'/'+dis_id+'/'+status;
}
</script>
<label for="type" >Level of Schools</label><select id="type" name="type" ></label>
<option value="sec" >Secondary</option>
<option value="ele" >Upto Elementary</option>
</select>
<br><br>
<label for="status" >Status of Form</label><select id="status" name="status">
<option value="fil" >Filled or Finalized</option>
<option value="fin" >Not Filled</option>
</select>
<br><br>
<br><br>
<?php
foreach($districts as $district) { 
?>
<a class="next button" style="width:250px; font-size:0.7em; line-height:2.8em; inline-block" href="javascript:get_report(<?php echo $district['SemisCodeDistrict']['district_id']; ?>);"><?php echo $district['SemisCodeDistrict']['district']; ?></a>
<?php } ?>

<?php } ?>