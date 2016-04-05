<script type="text/javascript" src="<?php echo $this->webroot?>js/jquery.dataTables.js"></script>
<script>
function submit_form(id)
{
	var form = document.getElementById(id);
	
	form.submit();
}
</script>
<?php if(isset($action)) { ?>
<?php if($action == 'editingcompleted') { ?>
<div class="message_submission" >The form has been saved successfully.</div>
<?php } ?>

<?php if($action == 'finalized') { ?>
<div class="message_submission" >The form has been Successfully Finalized.</div>
<?php } ?>
<?php } ?>
<?php if($usadmin == 4) { ?>
<div style="text-align:center" >	
	<h6>Welcome to the Dashboard for DO SEMIS for Data Entry of Annual School Census 2014 - 15 Forms</h6>
</div>
<div style="text-align:center" >
	<h8>Overall Status of Forms Entered by Data Entry Operators</h8>
</div>
<table border="0" cellpadding="0" cellspacing="0"  class="shrink CSSTableGenerator">
		<tr>
			<td>S.No.</td>
			<td>Tehsil</td>
			<td colspan=3 >Total Schools up-to Elementary</td>
		</tr>
		
		<?php $x = 1; foreach($total_schools as $total_schools_tehsil) { ?>
		<tr>
			<td><?php echo $x; $x++; ?></td>
			<td><?php foreach($tehsils as $tehsil) { if($tehsil['CodesForDistrictAndTehsil']['tehsil_id'] == $total_schools_tehsil['univ2012as']['TehsilID']) { echo $tehsil['CodesForDistrictAndTehsil']['tehsil'];  } } ?></td>
			<td colspan=3 ><?php echo $total_schools_tehsil[0]['total']; ?></td>
		</tr>
		<?php } ?>
</table>
<table border="0" cellpadding="0" cellspacing="0"  class="shrink CSSTableGenerator">
		
		<tr>
			<td>S.No.</td>
			<td>Name of DEO</td>
			<td>Forms Entered</td>
			<td>Forms Finalized</td>
			<td>Approved Forms</td>
			<td>Remaining Forms</td>
		</tr>
		<?php $x = 1; foreach($deos as $deo) { ?>
			<tr>
				<td><?php echo $x; ?></td>
				<td><?php echo $deo['User']['name']; ?></td>
				<td><?php echo $deo['User']['forms_entered'][0][0]['total']; ?></td>
				<td><?php echo $deo['User']['forms_finalized'][0][0]['total']; ?></td>
				<td><?php echo $deo['User']['forms_approved'][0][0]['total']; ?></td>
				<td>N/A</td>
			</tr>
		<?php $x++; } ?>
		<tr>
				<td><?php echo $x; ?></td>
				<td><?php echo "High Schools"; ?></td>
				<td><?php echo $total_entered_high[0][0]['total']; ?></td>
				<td><?php echo $total_finalized_hm_high[0][0]['total']; ?></td>
				<td><?php echo $total_finalized_high[0][0]['total']; ?></td>
				<td><?php echo $total_schools_high -($total_entered_high[0][0]['total'] + $total_finalized_hm_high[0][0]['total'] + $total_finalized_high[0][0]['total']); ?></td>
		</tr>
</table>

<div style="text-align:center" >
	<h8>Forms Ready for Approval</h8>
</div>

<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" style="font-size:0.8em !important;" >
					<thead>
						<tr>
							<th>District</th>
							<th>Taluka</th>
							<th>Union Council</th>
							<th>SEMIS New / ID</th>
							<th>School Name</th>
							<th>Entered By</th>
							<th>Remarks</th>
							<th>Edit / Approve</th>
						</tr>
					</thead>
				<tbody>
	<?php $x = 0; foreach($total_finalized_by_deos as $allschoolsform) { ?>
					<tr>
						<form id="comment_<?php echo $x; ?>" action="<?php echo $this->webroot?>home/unfinalize_form/0/0/<?php echo $allschoolsform['semis_universal201415s']['school_semis_new']; ?>/asc201415" method="post" >
						<td><?php foreach($districts as $district) { if($district['SemisCodeDistrict']['district_id'] == $allschoolsform['semis_universal201415s']['bi_school_district']) { echo $district['SemisCodeDistrict']['district']; } } ?></td>
						<td><?php foreach($tehsils as $tehsil) { if($tehsil['CodesForDistrictAndTehsil']['tehsil_id'] == $allschoolsform['semis_universal201415s']['bi_school_taluka']) { echo $tehsil['CodesForDistrictAndTehsil']['tehsil']; } } ?></td>
						<td><?php foreach($union_councils as $union_council) { if($union_council['CodesForUc']['uc_id'] == $allschoolsform['semis_universal201415s']['bi_school_uc']) { echo $union_council['CodesForUc']['uc_name']; } } ?></td>
						<td><?php echo $allschoolsform['semis_universal201415s']['school_semis_new']; ?></td>
						<td><?php echo $allschoolsform['semis_universal201415s']['bi_school_name']; ?></td>
						<td><?php foreach ($deos as $deo) { if($deo['User']['id'] == $allschoolsform['semis_universal201415s']['entered_by']) { echo $deo['User']['name']; } } ?></td>
						<td><input type="textarea" name="remarks" value="" ></input></td>
						<td><a href="<?php echo $this->webroot; ?>home/semis_form_p1_edit/<?php echo $allschoolsform['semis_universal201415s']['school_semis_new']; ?>" >Edit ASC 2014 15 Form</a> / <a href="<?php echo $this->webroot; ?>home/finalize_form/0/0/<?php echo $allschoolsform['semis_universal201415s']['school_semis_new']; ?>/asc201415" >Approve</a><a href="javascript:submit_form('comment_<?php echo $x; ?>');" >Un - Approve</a></td>
						</form>
					</tr>
	<?php $x++; } ?>
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

<?php } ?> 
<?php if($usadmin == 3) { ?>
<div style="text-align:center" >
	<h8>Welcome to the Dashboard for Data Entry Operators for Data Entry of Annual School Census 2014 - 15 Forms</h8>
</div>
<table border="0" cellpadding="0" cellspacing="0"  class="shrink CSSTableGenerator">
		<tr>
			<td><strong>Name</strong></td>
			<td><strong><?php echo $user_name; ?></strong></td>
			<td><strong>CNIC</strong></td>
			<td><strong><?php echo $user_cnic_number; ?></strong></td>
		</tr>
		<tr>
			<td><strong>District</strong></td>
			<td><strong><?php 
								foreach($districts as $district)
								{	
									if($user_district == $district['SemisCodeDistrict']['district_id'])
									{
										echo $district['SemisCodeDistrict']['district'];
									}
								}	
						?>
				</strong>
			</td>
			<td><strong>Tehsil</strong></td>
			<td>
				<strong>
					<?php 
							foreach($tehsils as $tehsil) 
							{
								if($user_tehsil == $tehsil['CodesForDistrictAndTehsil']['tehsil_id'])
								{
									echo $tehsil['CodesForDistrictAndTehsil']['tehsil'];
								}
							}
					?>
				</strong>
			</td>
		</tr>
		<tr>
			<td><strong>Contact</strong></td>
			<td><strong><?php echo $user_contact_number; ?></strong></td>
			<td><strong>Email</strong></td>
			<td><strong><?php echo $user_email_address; ?></strong></td>
		</tr>
		<tr>
			<td><strong>Designation</strong></td>
			<td><strong><?php echo $user_designation; ?></strong></td>
			<td><strong>Qualification</strong></td>
			<td><strong><?php echo $user_qualification; ?></strong></td>
		</tr>
		<tr>
			<td><strong>Bank Name</strong></td>
			<td><strong><?php echo $user_bank_name; ?></strong></td>
			<td><strong>Bank Branch Name - Code</strong></td>
			<td><strong><?php echo $user_bank_branch.' - '.$user_bank_branch_code; ?></strong></td>
		</tr>
		<tr>
			<td><strong>Account Title</strong></td>
			<td><strong><?php echo $user_account_title; ?></strong></td>
			<td><strong>Account Number</strong></td>
			<td><strong><?php echo $user_account_number; ?></strong></td>
		</tr>
	</table>

	
	<table cellpadding="0" cellspacing="0" border="0" class="display" id="example" style="font-size:0.8em !important;" >
					<thead>
						<tr>
							<th>District</th>
							<th>Taluka</th>
							<th>Union Council</th>
							<th>SEMIS New / ID</th>
							<th>School Name</th>
							<th>Remarks</th>
							<th>Edit / Status</th>
						</tr>
					</thead>
				<tbody>
	<?php foreach($allschoolsforms as $allschoolsform) { ?>
					<tr>
						<td><?php foreach($districts as $district) { if($district['SemisCodeDistrict']['district_id'] == $allschoolsform['Univ2012a']['DistrictID']) { echo $district['SemisCodeDistrict']['district']; } } ?></td>
						<td><?php foreach($tehsils as $tehsil) { if($tehsil['CodesForDistrictAndTehsil']['tehsil_id'] == $allschoolsform['Univ2012a']['TehsilID']) { echo $tehsil['CodesForDistrictAndTehsil']['tehsil']; } } ?></td>
						<td><?php foreach($union_councils as $union_council) { if($union_council['CodesForUc']['uc_id'] == $allschoolsform['Univ2012a']['UnionCouncilID']) { echo $union_council['CodesForUc']['uc_name']; } } ?></td>
						<td><?php echo $allschoolsform['Univ2012a']['school_id']; ?></td>
						<td><?php echo $allschoolsform['Univ2012a']['Prefix'].' - '.$allschoolsform['Univ2012a']['SchoolName']; ?></td>
						<?php $x = 0; foreach($usersemisSchools as $usersemisSchool) { if($usersemisSchool['SemisUniversal201415']['school_semis_new'] == $allschoolsform['Univ2012a']['school_id']) { $remarks = $usersemisSchool['SemisUniversal201415']['remarks']; $x = 1; } } ?>
						<?php if ($x == 1) { ?>
						<td><a href="<?php echo $this->webroot; ?>home/semis_form_p1_edit/<?php echo $allschoolsform['Univ2012a']['school_id']; ?>" >Edit this Form</a> / <a href="<?php echo $this->webroot; ?>home/finalize_form/0/0/<?php echo $allschoolsform['Univ2012a']['school_id']; ?>/asc201415" >Finalize this Form</a></td>
						<td><?php echo $remarks; ?></td>
						<?php }else{ ?> 
						<td><a href="<?php echo $this->webroot; ?>home/semis_form_p1_edit/<?php echo $allschoolsform['Univ2012a']['school_id']; ?>" >Add new Form</a></td>
						<td></td>
						<?php } ?>
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

	
<?php }

if($usadmin == 2){ ?>
<?php 
	$firstquarter = 0;
	$secondquarter = 0;
	$thirdquarter = 0;
	$fourthquarter = 0;
	$finalized1 = 0;
	$finalized2 = 0;
	$finalized3 = 0;
	$finalized4 = 0;
	
	foreach($schools as $semisSchool)
	{
		if($semisSchool['SemisHsUniversal201314']['year'] == '2014' && $semisSchool['SemisHsUniversal201314']['quarter'] == 1)
		{
			$firstquarter = 1;
			$finalized1 = $semisSchool['SemisHsUniversal201314']['final'];
		}
		if($semisSchool['SemisHsUniversal201314']['year'] == '2014' && $semisSchool['SemisHsUniversal201314']['quarter'] == 2)
		{
			$secondquarter = 1;
			$finalized2 = $semisSchool['SemisHsUniversal201314']['final'];
		}
		if($semisSchool['SemisHsUniversal201314']['year'] == '2014' && $semisSchool['SemisHsUniversal201314']['quarter'] == 3)
		{
			$thirdquarter = 1;
			$finalized3 = $semisSchool['SemisHsUniversal201314']['final'];
		}
		if($semisSchool['SemisHsUniversal201314']['year'] == '2014' && $semisSchool['SemisHsUniversal201314']['quarter'] == 4)
		{
			$fourthquarter = 1;
			$finalized4 = $semisSchool['SemisHsUniversal201314']['final'];
		}		
	}
?>
<div style="text-align:center" >
	<h8>Welcome to the Dashboard for Data Entry of High and Higher Secondary Schools</h8>
</div>
<?php 
if($firstentry == 'admin') { ?>
	<table border="0" cellpadding="0" cellspacing="0"  class="CSSTableGenerator">
		<tr>
			<td><strong><h5>Welcome to Admin Panel</h5></strong></td>
		</tr>
	</table>
<?php }else{ ?>
<table border="0" cellpadding="0" cellspacing="0"  class="shrink CSSTableGenerator">
<tr>
<?php if(count($semisSchoolsAsc201415) > 0) { if($semisSchoolsAsc201415['SemisUniversal201415']['final'] == 0) { ?>
	<td>
	<h8><a href="<?php echo $this->webroot; ?>home/semis_form_p1_edit/<?php echo $this_user_details['Univ2012a']['school_id']; ?>">Edit the Annual School Census 2014 - 15 form</a></h8>
	</td>
	<td>
	<h8><a href="<?php echo $this->webroot; ?>home/finalize_form/0/0/<?php echo $this_user_details['Univ2012a']['school_id']; ?>/asc201415" >Finalize this Form</a></h8>
	</td>
<?php } if($semisSchoolsAsc201415['SemisUniversal201415']['final'] == 1) { ?> 
	<td>
	<h8>The ASC 2014 15 form has been filed and finalized</h8>
	</td>
<?php }  }else{ ?>
	<td>
	<h8><a href="<?php echo $this->webroot; ?>home/semis_form_p1_edit/<?php echo $this_user_details['Univ2012a']['school_id']; ?>">Add the Annual School Census 2014 - 15 form</a></h8>
	</td>
<?php } ?>
</tr>
</table>
<?php if($firstentry == 'first') { ?>
	<table border="0" cellpadding="0" cellspacing="0"  class="shrink CSSTableGenerator">
		<tr>
			<td><strong>School Name</strong></td>
			<td><strong><?php echo $this_user_details['Univ2012a']['Prefix'].' - '.$this_user_details['Univ2012a']['SchoolName']; ?></strong></td>
			<td><strong>School ID</strong></td>
			<td><strong><?php echo $this_user_details['Univ2012a']['school_id']; ?></strong></td>
		</tr>
		<tr>
			<td><strong>HM Name</strong></td>
			<td><strong><?php echo $this_user_details['Univ2012a']['HMName']; ?></strong></td>
			<td><strong>HM Contact Number</strong></td>
			<td><strong><?php echo $this_user_details['Univ2012a']['HMContactNo']; ?></strong></td>
		</tr>
	</table>
<?php } ?>
<?php if($firstentry == 'edit') { ?>
	<table border="0" cellpadding="0" cellspacing="0"  class="shrink CSSTableGenerator">
		<tr>
			<td><strong>School Name</strong></td>
			<td><strong><?php echo $this_user_details['SemisHsUniversal201314']['bi_school_name']; ?></strong></td>
			<td><strong>School ID</strong></td>
			<td><strong><?php echo $this_user_details['SemisHsUniversal201314']['school_semis_new']; ?></strong></td>
		</tr>
		<tr>
			<td><strong>HM Name</strong></td>
			<td><strong><?php echo $this_user_details['SemisHsUniversal201314']['hti_name']; ?></strong></td>
			<td><strong>HM Contact Number</strong></td>
			<td><strong><?php echo $this_user_details['SemisHsUniversal201314']['hti_number']; ?></strong></td>
		</tr>
		<?php if($finalized3 == 1) { ?>
		<tr>
			<td><strong>Total Number of Rooms</strong></td>
			<td><strong><?php echo $this_user_details['SemisHsUniversal201314']['sbi_school_building_total_rooms']; ?></strong></td>
			<td><strong>Total Number of ClassRooms</strong></td>
			<td><strong><?php echo $this_user_details['SemisHsUniversal201314']['sbi_school_building_class_rooms']; ?></strong></td>
		</tr>
		<tr>
			<td><strong>Total Teachers</strong></td>
			<td><strong><?php echo $this_user_details['SemisHsUniversal201314']['sti_teacher_mf_total']; ?></strong></td>
			<td><strong>Total Enrollment</strong></td>
			<td><strong><?php 
				echo ($this_user_enrollment['SemisHsEnrollment201314']['stuenr_ele_total_b']+$this_user_enrollment['SemisHsEnrollment201314']['stuenr_ele_total_g']+$this_user_enrollment['SemisHsEnrollment201314']['stuenr_sec_b_total']+$this_user_enrollment['SemisHsEnrollment201314']['stuenr_sec_f_total']+$this_user_enrollment['SemisHsEnrollment201314']['stuenr_hsec_m_total']+$this_user_enrollment['SemisHsEnrollment201314']['stuenr_hsec_f_total']); ?></strong></td>
		</tr>
		<?php } ?>
	</table>
<?php } ?>
<?php /*
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="" onload="init();" >
<tr>
	<td>S.No.</td>
	<td>Year</td>
	<td>Quarter</td>
	<td>Add / Edit</td>
	<td>Finalize</td>
	<td>Add / Edit status</td>
	<td>Remarks</td>
</tr>
<tr>
	<td>1</td>
	<td>2013-14</td>
	<td>First</td>
	<?php if($firstquarter == 1) { ?>
		<td><a class="disabled" readonly="readonly" href="<?php echo $this->webroot; ?>home/semishsquarterdata/edit/2014/2" >Edit</a></td>
		<td><a class="disabled" href="javascript:finalize_form(2);" >Finalize Form</a></td>
	<?php }else{ ?>
		<td><a class="disabled" readonly="readonly" href="<?php echo $this->webroot; ?>home/semishsquarterdata/add/2014/2" >Add</a></td>
		<td>Form Not Availble</td>
	<?php } ?>
	<td>This quarter is not to be filled</td>
	<td>Editing / Adding not allowed</td>
</tr>
<tr>
	<td>2</td>
	<td>2013-14</td>
	<td>Second</td>
	<?php if($secondquarter == 1) { ?>
		<td><a class="disabled" href="<?php echo $this->webroot; ?>home/semishsquarterdata/edit/2014/2" >Edit</a></td>
		<td><a class="disabled" href="<?php echo $this->webroot; ?>home/finalize_form/2014/2" >Finalize Form</a></td>
	<?php }else{ ?>
		<td><a class="disabled" href="<?php echo $this->webroot; ?>home/semishsquarterdata/add/2014/2" >Add</a></td>
		<td>Form Not Availble</td>
	<?php } ?>
	<td>This quarter is not to be filled</td>
	<td>Editing / Adding not allowed</td>
</tr>
<tr>
	<td>3</td>
	<td>2013-14</td>
	<td>Third</td>
	<?php if($thirdquarter == 1) { ?>
		<?php if($finalized3 == 1) { ?>
		<td>The form can not be edited now it has been finalized</td>
		<td>The form has been finalized</td>
		<?php }else{ ?>
		<td><a readonly="readonly" href="<?php echo $this->webroot; ?>home/semishsquarterdata/edit/2014/3" >Edit</a></td>
		<td><a href="<?php echo $this->webroot; ?>home/finalize_form/2014/3" >Finalize Form</a></td>
		<?php } ?>
		<?php if($finalized3 == 1) { ?>
			<td>The Form is filled and finalized</td>
		<?php }else{ ?>
			<td>This quarter is filled but it needs to be finalized</td>
		<?php } ?>
	<?php }else{ ?>
		<td><a readonly="readonly" href="<?php echo $this->webroot; ?>home/semishsquarterdata/add/2014/3" >Add</a></td>
		<td>Form Not Availble</td>
		<?php if($finalized3 == 1) { ?>
			<td>The Form is not filled.</td>
		<?php } ?>
	<?php } ?>
	<td colspan=2 >Editing / Adding allowed</td>
</tr>
<tr>
	<td>4</td>
	<td>2013-14</td>
	<td>Fourth</td>
	<?php if($fourthquarter == 1) { ?>
		<td><a class="disabled" readonly="readonly" href="<?php echo $this->webroot; ?>home/semishsquarterdata/edit/2014/4" >Edit</a></td>
		<td><a class="disabled" href="<?php echo $this->webroot; ?>home/finalize_form/2014/4" >Finalize Form</a></td>
	<?php }else{ ?>
		<td><a class="disabled" readonly="readonly" href="<?php echo $this->webroot; ?>home/semishsquarterdata/add/2014/4" >Add</a></td>
		<td>Form Not Available</td>
	<?php } ?>
	<td>This quarter is not to be filled</td>
	<td>Editing / Adding not allowed</td>
</tr>
</table> */ ?>

<script>
$(function () {
	$('a.disabled').click(function (e) {
        e.preventDefault();
		$('#disabledfunctionality').show();
    });
	
	function finalize_form(id)
	{
		
	}
});
</script>
<?php } ?>
<?php } ?>


<script type="text/javascript" charset="utf-8">
				$(document).ready(function() {
					$('#example').dataTable();
				} );
</script>
	