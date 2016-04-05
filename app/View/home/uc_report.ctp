<script>
$(function() {
$('#uc_report_form').validate();
});
</script>

<br />
<form id="uc_report_form" action="<?php echo $this->webroot?>home/submit_uc_report_details" method="post">
<h1 class="main-heading">Identifiers for Report Based On Baseline Survey for UC</h1>

<table>
<br />
<br />

<tr><td>Semis Code</td><td><input type="text" name="semis_code" class="required" ></input></td></tr>
<div style="height:20px;"><input type="checkbox" name="download_report" >Download Report</input></div>
</table>

<h1>Select Report Identifiers </h1>
<br />

<h1>1. School Identification<br /></h1>
<div style="height:20px;"><input type="checkbox" name="school_info" >Info</input></div>
<div style="height:20px;"><input type="checkbox" name="school_address" >Address</input></div>
<div style="height:20px;"><input type="checkbox" name="school_distances" >Distances From other Schools</input></div>
<div style="height:20px;"><input type="checkbox" name="school_oppurtunities" >Educational Oppurtunities in periphery of Ucs</input></div>


<h1>2. Basic Information<br /></h1>

<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_basics" >School Status and Information<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_bank_budget" >Budget and Bank<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_rooms_other" >Rooms Usage and other schools<br /></input></div>




<h1>3. Records<br /></h1>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_student_record" >Students Records<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_teacher_record" >Teachers Records<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_smc_records" >SMC Records<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_sip_other_records" >SIP and Other Records<br /></input></div>


<h1>4. Enrollments and Attendances<br /></h1>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_enrollment_this_year" >Grade Wise Enrollmment of Students This Year<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_enrollment_last_year" >Total Enrollment Last Year<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_students_promoted" >Number Of Students Promoted<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_students_repeating" >Number Of Students Repeating Same Grade this Year<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_students_transferred" >Number of Children Transferred to another school based on school GR<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_students_droppedout" >Number Of Students Dropped Out Last Year<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_students_attendance_today" >Grade Wise Attendance on the day of survey<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_students_absent_month" >Number of Students Not Attending For the Last One Month<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_average_attendance" >Average Attendance of the Last Month<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_numberof_teachers" >Number Of teachers posted in Schools<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_teachers_basic_info" >Basic information on the Staff<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_teachers_months_attendance" >Teachers Last Three Months Attendance Records<br /></input></div>




<h1>5. School Facilities<br /></h1>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_toilets_facility" >Toilets<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_water_facility" >Water Provision<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_electricity_facility" >Electricity and Fixtures<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_safety_facility" >Services Maintainance and Safety<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_classroom_facility" >Classroom Situation<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_outdoor_facility" >Outdoor Space<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_furniture_facility" >Furniture <br /></input></div>


<h1>6. School Management Committee<br /></h1>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_smc_basicinfo" >Basic SMC Info<br /></input></div>
<div style="height:20px;"><input style="height:20px;" type="checkbox" name="school_smc_funding" >SMC Funding (Current and Last Year) and Bank Account info<br /></input></div>
<br />
<input type="submit" value="submit" ></input>
</form>