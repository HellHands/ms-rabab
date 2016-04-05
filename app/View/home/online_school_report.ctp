<script type="text/javascript">
        function CallPrint(strid) {
            var prtContent = document.getElementById(strid);
            var table = document.getElementById("tabledata");
			table.className = "CSSTableGenerator";
			var WinPrint = window.open('', '', 'letf=30,top=30,width=800,height=800,toolbar=0,scrollbars=1,status=0');
			WinPrint.document.write('<html><head><title></title>');
			
			WinPrint.document.write('<style>');
			WinPrint.document.write('.CSSTableGenerator { margin:0px;padding:0px;width:100%;border:1px solid #ccc;}');
			WinPrint.document.write('.CSSTableGenerator table{width:100%;height:100%;margin:0px;padding:0px;}');
			WinPrint.document.write('.CSSTableGenerator tr:last-child td:last-child {-moz-border-radius-bottomright:14px;-webkit-border-bottom-right-radius:14px;border-bottom-right-radius:14px;}');
			WinPrint.document.write('.CSSTableGenerator tr:nth-child(odd){ background-color:#F5FFFA; }');
			WinPrint.document.write('.CSSTableGenerator tr:nth-child(even)    { background-color:#ffffff; }');
			WinPrint.document.write('.CSSTableGenerator td{vertical-align:middle;border:1px solid #ccc;border-width:0px 1px 1px 0px;text-align:left;padding:2px 7px;font-size:10px;font-family:Arial;font-weight:normal;color:#000000;}');
			WinPrint.document.write('.CSSTableGenerator tr:last-child td{border-width:0px 1px 0px 0px;}');
			WinPrint.document.write('.CSSTableGenerator tr td:last-child{border-width:0px 0px 1px 0px;}');
			WinPrint.document.write('.CSSTableGenerator tr:last-child td:last-child{border-width:0px 0px 0px 0px;}');
			
			WinPrint.document.write('h1, h2, h3, h4, h5, h6 {    font: 1em Arial,Helvetica,sans-serif;    margin-bottom: 0.3em;    margin-top: 20px;}');
			WinPrint.document.write('h6 {    font-size: 1.5em;}');
			WinPrint.document.write('h6 {    color: #373737;}');
			WinPrint.document.write('</style>');
			
			
			
			
			WinPrint.document.write('</head><body>');
			WinPrint.document.write('<table width="100%">');
			WinPrint.document.write('<tr>');
			WinPrint.document.write('<td width="5%">');
			
			WinPrint.document.write('<img  style="height: 90px;" src="<?php echo $this->webroot; ?>img/sindhgovt_logo.png">');
			


			WinPrint.document.write('</td>');

			WinPrint.document.write('<td width="95%">');
						WinPrint.document.write('<div style="text-align:center">REFORM SUPPORT UNIT (SEMIS WING)</div>');
						WinPrint.document.write('<div style="text-align:center">Education & Literacy Department</div>');
						WinPrint.document.write('<div style="text-align:center">Government of Sindh</div>');
						WinPrint.document.write('<div style="text-align:center">School Profile</div>');
						
			WinPrint.document.write('</td>');
			
			
			
			
			


			WinPrint.document.write('</tr>');
			WinPrint.document.write('</table>');


            WinPrint.document.write(prtContent.innerHTML);
			
			
			
			
			WinPrint.document.write('<table width="100%">');
			WinPrint.document.write('<tr>');
			WinPrint.document.write('<td width="50%">');
			
			WinPrint.document.write('<div>SOURCE: SEMIS DATABASE</div>');
			


			WinPrint.document.write('</td>');



			WinPrint.document.write('<td width="50%"  align="right">');
						var d = new Date();
    var curr_date = d.getDate();
    var curr_month = d.getMonth() + 1; //Months are zero based
    var curr_year = d.getFullYear();
    WinPrint.document.write('Date:'+curr_date + "-" + curr_month + "-" + curr_year);
						
						
			WinPrint.document.write('</td>');
			
			

			
			
			
			
			
			


			WinPrint.document.write('</tr>');
			WinPrint.document.write('</table>');
			
			WinPrint.document.write('<div>This is System Generated Print.</div>');
			
			WinPrint.document.write('</body></html>');
            WinPrint.document.close();
            WinPrint.focus();
            WinPrint.print();
            WinPrint.close();
        }
     </script>

<div style="height:60px">

<img class="printtnImg" style="float: right; 
    height: 50px;" src="/img/printer.png" onclick="javascript:CallPrint('printbodytxt')">

</div>

<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator">
<?php 
		if($allschoolsforms[0]['SemisHsUniversal201314']['final'] == 0) 
		{ 
?>	
	<tr>
		<td style="text-align:center;" colspan="4" ><h6>Form is Not finalized yet</h6></td>
	</tr>		
<?php
		}elseif($allschoolsforms[0]['SemisHsUniversal201314']['final'] == 1){
?>
	<tr>
		<td style="text-align:center;" colspan="4" ><h6>Form has been finalized</h6></td>
	</tr>		
<?php
		} 
?>
</table>

<div class="printbodytxt" id="printbodytxt">
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" id="tabledata">

<tr>
	<td style="text-align:center;" colspan="4" ><h6><b>Basic School Information</b></h6></td>
</tr>
<tr>
	<td style="width:25%;" ><b>School Name with Prefix: </b></td>
	<td style="width:25%;" ><?php echo $allschoolsforms[0]['SemisHsUniversal201314']['bi_school_name'] ?></td>
	<td style="width:25%;" ><b>Semis Code New</b></td>
	<td style="width:25%;" ><?php echo $allschoolsforms[0]['SemisHsUniversal201314']['school_semis_new'] ?></td>
</tr>

<tr>
	<td style="width:25%;" ><b>SchoolPhone: </b></td>
	<td style="width:25%;" ><?php echo $allschoolsforms[0]['SemisHsUniversal201314']['bi_school_phone_number'] ?></td>
	<td style="width:25%;" ><b>District: </b></td>
	<td style="width:25%;" ><?php foreach($districts as $district) { if($district['SemisCodeDistrict']['district_id'] == $allschoolsforms[0]['SemisHsUniversal201314']['bi_school_district']) { echo $district['SemisCodeDistrict']['district']; }}?></td>
</tr>

<tr>
	<td style="width:25%;" ><b>Tehsil: </b></td>
	<td style="width:25%;" ><?php foreach($tehsils as $tehsil) { if($tehsil['CodesForDistrictAndTehsil']['tehsil_id'] == $allschoolsforms[0]['SemisHsUniversal201314']['bi_school_taluka']) { echo $tehsil['CodesForDistrictAndTehsil']['tehsil']; }}?></td>
	<td style="width:25%;" ><b>Union Council</b></td>
	<td style="width:25%;" ><?php foreach($union_councils as $union_council) { if($union_council['CodesForUc']['uc_id'] == $allschoolsforms[0]['SemisHsUniversal201314']['bi_school_uc']) { echo $union_council["CodesForUc"]["uc_name"]; } } ?></td>
</tr>

<tr>
	<td style="width:25%;" ><b>Head Mster Name: </b></td>
	<td style="width:25%;" ><?php echo $allschoolsforms[0]['SemisHsUniversal201314']['hti_name'] ?></td>
	<td style="width:25%;" ><b>HM Contact Number:</b></td>
	<td style="width:25%;" ><?php echo $allschoolsforms[0]['SemisHsUniversal201314']['hti_number'] ?></td>
</tr>

</table>

<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" >
<tr>
	<td style="text-align:center;" colspan="4" ><h6><b>Detailed School Information</b></h6></td>
</tr>

<tr>
	<td style="width:25%;" ><b>Total Boys</b></td>
	<td style="text-align:center;" ><?php echo $schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_m_total']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_b_total']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_ele_total_b']; ?></td>
	<td style="width:25%;" ><b>Total Girls</b></td>
	<td style="text-align:center;" ><?php echo $schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_f_total']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_f_total']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_ele_total_g']; ?></td>
</tr>

<tr>
	<td style="text-align:center;" colspan=2 ><b>Total Enrollment </b></td>
	<td style="text-align:center;" colspan=2 ><?php echo $schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_m_total']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_f_total']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_f_total']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_b_total']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_ele_total_g']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_ele_total_b']; ?></td>
</tr>

<tr>
	<td style="text-align:center;" colspan="4" ><b>Classwise Enrollment</b></td>
</tr>

<tr>
	<td colspan=2 style="width:25%;" ><b>Class Katchi: </b></td>
	<td colspan=2 style="width:25%;" ><?php echo $schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_ele_classkatchi_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_ele_classkatchi_g']; ?></td>
</tr>
<tr>
	<td style="width:25%;" ><b>Class 1: </b></td>
	<td style="width:25%;" ><?php echo $schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_ele_class1_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_ele_class1_g'];  ?></td>
	<td style="width:25%;" ><b>Class 2: </b></td>
	<td style="width:25%;" ><?php echo $schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_ele_class2_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_ele_class2_g'];  ?></td>
</tr>

<tr>
	<td style="width:25%;" ><b>Class 3: </b></td>
	<td style="width:25%;" ><?php echo $schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_ele_class3_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_ele_class3_g'];  ?></td>
	<td style="width:25%;" ><b>Class 4:</b></td>
	<td style="width:25%;" ><?php echo $schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_ele_class4_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_ele_class4_g'];  ?></td>
</tr>

<tr>
	<td style="width:25%;" ><b>Class 5: </b></td>
	<td style="width:25%;" ><?php echo $schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_ele_class5_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_ele_class5_g'];  ?></td>
	<td style="width:25%;" ><b>Class 6: </b></td>
	<td style="width:25%;" ><?php echo $schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_ele_class6_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_ele_class6_g'];  ?></td>
</tr>

<tr>
	<td style="width:25%;" ><b>Class 7: </b></td>
	<td style="width:25%;" ><?php echo $schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_ele_class7_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_ele_class7_g'];  ?></td>
	<td style="width:25%;" ><b>Class 8: </b></td>
	<td style="width:25%;" ><?php echo $schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_ele_class8_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_ele_class8_g'];  ?></td>
</tr>

<tr>
	<td style="width:25%;" ><b>Class 9: </b></td>
	<td style="width:25%;" ><?php echo $schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_class9_arts_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_class9_comp_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_class9_bio_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_class9_comm_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_class9_other_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_class9_arts_g']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_class9_comp_g']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_class9_bio_g']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_class9_comm_g']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_class9_other_g']; ?></td>
	<td style="width:25%;" ><b>Class 10: </b></td>
	<td style="width:25%;" ><?php echo $schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_class10_arts_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_class10_comp_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_class10_bio_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_class10_comm_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_class10_other_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_class10_arts_g']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_class10_comp_g']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_class10_bio_g']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_class10_comm_g']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_sec_class10_other_g']; ?></td>
</tr>

<tr>
	<td style="width:25%;" ><b>Class 11: </b></td>
	<td style="width:25%;" ><?php echo $schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class11_arts_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class11_comp_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class11_premed_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class11_preeng_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class11_comm_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class11_other_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class11_arts_g']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class11_comp_g']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class11_premed_g']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class11_preeng_g']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class11_comm_g']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class11_other_g']; ?></td>
	<td style="width:25%;" ><b>Class 12: </b></td>
	<td style="width:25%;" ><?php echo $schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class12_arts_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class12_comp_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class12_premed_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class12_preeng_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class12_comm_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class12_other_b']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class12_arts_g']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class12_comp_g']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class12_premed_g']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class12_preeng_g']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class12_comm_g']+$schoolsenrollment[0]['SemisHsEnrollment201314']['stuenr_hsec_class12_other_g']; ?></td>
</tr>

<tr>
	<td style="text-align:center;" colspan="4" ><b>Teachers Details</b></td>
</tr>

<tr>
	<td style="width:25%;" ><b>Total Male Teachers: </b></td>
	<td style="width:25%;" ><?php echo ($allschoolsforms[0]['SemisHsUniversal201314']['sti_non_govt_teacher_number_male']+$allschoolsforms[0]['SemisHsUniversal201314']['sti_govt_teacher_number_male']); ?></td>
	<td style="width:25%;" ><b>Total Female Techers: </b></td>
	<td style="width:25%;" ><?php echo ($allschoolsforms[0]['SemisHsUniversal201314']['sti_non_govt_teacher_number_female']+$allschoolsforms[0]['SemisHsUniversal201314']['sti_govt_teacher_number_female']); ?></td>
</tr>

<tr>
	<td style="text-align:center;" colspan=2 ><b>Total Teachers: </b></td>
	<td style="text-align:center;" colspan=2 ><?php echo $allschoolsforms[0]['SemisHsUniversal201314']['sti_teacher_mf_total'] ?></td>
</tr>

<tr>
	<td style="text-align:center;" colspan="4" ><b>Basic Facilities</b></td>
</tr>

<tr>
	<td style="width:25%;" ><b>Class Rooms: </b></td>
	<td style="width:25%;" ><?php echo $allschoolsforms[0]['SemisHsUniversal201314']['sbi_school_building_class_rooms']; ?></td>
	<td style="width:25%;" ><b>Total Rooms: </b></td>
	<td style="width:25%;" ><?php echo $allschoolsforms[0]['SemisHsUniversal201314']['sbi_school_building_total_rooms']; ?></td>
</tr>

<tr>
	<td style="width:25%;" ><b>Toilets Available: </b></td>
	<td style="width:25%;" ><?php if($allschoolsforms[0]['SemisHsUniversal201314']['sbf_toilets'] == 1) { echo "Yes"; }else{ echo "No"; } ?></td>
	<td style="width:25%;" ><b>Number of Toilets: </b></td>
	<td style="width:25%;" ><?php echo $allschoolsforms[0]['SemisHsUniversal201314']['sbi_school_toilets_number_func']; ?></td>
</tr>

<tr>
	<td style="width:25%;" ><b>Drinking Water Available: </b></td>
	<td style="width:25%;" ><?php if($allschoolsforms[0]['SemisHsUniversal201314']['sbf_water_available'] == 1) { echo "Yes"; }else{ echo "No"; } ?></td>
	<td style="width:25%;" ><b></b></td>
	<td style="width:25%;" ><?php //if($allschoolsforms[0]['SemisHsUniversal201314']['sbf_toilets'] == 1) { echo "Yes" }else{ echo "No"; } ?></td>
</tr>

<tr>
	<td style="width:25%;" ></td>
	<td style="width:25%;" ></td>
	<td style="width:25%;" ></td>
	<td style="width:25%;" ></td>
</tr>


</table>
</div>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" >
<tr>
	<td style="text-align:center;" colspan="5" ><h6><b>School Teachers Information</b></h6></td>
</tr>

<tr>
	<td style="text-align:center; width:2%;" ><b>S.No:</b></td>
	<td style="text-align:center; width:24.5%;" ><b>Name:</b></td>
	<td style="text-align:center; width:24.5%;" ><b>Designation:</b></td>
	<td style="text-align:center; width:24.5%;" ><b>CNIC:</b></td>
	<td style="text-align:center; width:24.5%;" ><b>Contact Number:</b></td>
</tr>
<?php $x = 1; foreach($schoolteachers as $schoolteacher) { ?>
<tr>
	<td style="text-align:center; width:2%;" ><?php echo $x; ?></td>
	<td style="text-align:center; width:24.5%;" ><?php echo $schoolteacher['SemisHsTeacher201314']['tdi_full_name']; ?></td>
	<td style="text-align:center; width:24.5%;" ><?php foreach($codesteacherdesignations as $codesteacherdesignation) { if($codesteacherdesignation['codesForTeachersDesignation']['DesignationID'] == $schoolteacher['SemisHsTeacher201314']['tdi_teacher_designation']) { echo $codesteacherdesignation['codesForTeachersDesignation']['Designation']; } }  ?></td>
	<td style="text-align:center; width:24.5%;" ><?php echo $schoolteacher['SemisHsTeacher201314']['tdi_teacher_cnic']; ?></td>
	<td style="text-align:center; width:24.5%;" ><?php echo $schoolteacher['SemisHsTeacher201314']['tdi_teacher_number']; ?></td>
</tr>
<?php $x++; } ?>
</table>
<?php if($allschoolsforms[0]['SemisHsUniversal201314']['campus_school'] == 1) { ?>
<br><br>
<table border="0" cellpadding="0" cellspacing="0" class="CSSTableGenerator" >
<tr>
	<td style="text-align:center;" colspan="6" ><h6><b>School Consolidation Report - Merged Schools List</b></h6></td>
</tr>
<tr>
	<td style="text-align:center; width:2%;" ><b>S.No:</b></td>
	<td style="text-align:center; width:22%;" ><b>School Name</b></td>
	<td style="text-align:center; width:20%;" ><b>SEMIS Code</b></td>
	<td style="text-align:center; width:18%;" ><b>Total Enrollment</b></td>
	<td style="text-align:center; width:18%;" ><b>Total Teachers</b></td>
	<td style="text-align:center; width:20%;" ><b>Total Rooms</b></td>
</tr>
<?php $x = 1; foreach($merged_schools_array as $merged_school) { ?>
<tr>
	<td style="text-align:center; width:2%;" ><?php echo $x; ?></td>
	<td style="text-align:center; width:22%;" ><?php echo $merged_school['SemisConsolidationUniv201415']['bi_school_name']; ?></td>
	<td style="text-align:center; width:20%;" ><?php echo $merged_school['SemisConsolidationUniv201415']['school_semis_new']; ?></td>
	<td style="text-align:center; width:18%;" ><?php echo $merged_school['SemisConsolidationUniv201415']['sti_enrollment_boys']+$merged_school['SemisConsolidationUniv201415']['sti_enrollment_girls']; ?></td>
	<td style="text-align:center; width:18%;" ><?php echo $merged_school['SemisConsolidationUniv201415']['sti_govt_teacher_number_male']+$merged_school['SemisConsolidationUniv201415']['sti_govt_teacher_number_female']; ?></td>
	<td style="text-align:center; width:20%;" ><?php echo $merged_school['SemisConsolidationUniv201415']['total_rooms']; ?></td>
</tr>
<?php } ?>
</table>
<?php } ?>