<script>
$(function() {
$('#new_classroom_observation').validate();
});

</script>

<table style="width:1000px; margin-left:150px;" >
<form id="new_classroom_observation" action="<?php echo $this->webroot?>home/submit_classroom_observation" method="post">
	<tbody>
	<tr>
		<div style="text-align:center; margin-top:50px; line-height:50px;">
			<h1>Clasroom Observation For Schools</h1>
		</div>	
		<div style="float:right;">
			<a href="<?php echo $this->webroot?>home/view_classroom_observations">Go Back</a>
		</div>
	</tr>
	</tbody>
	<tbody>
	<tr width="500px" ><td width="200px" >District</td>
	<td>	
		<select name="district_id" class="required">
		<option value="">Select</option>
		<?php foreach($regions as $region) { ?>
		<option value="<?php echo $region['Region']['id']?>"><?php echo $region['Region']['name']?></option>
		<?php } ?>
		</select>
	</td>
	</tr>
	<tr>
	<td>Cluster Id</td>
	<td width="200px" ><input type="text" name="cluster_id" class="" /></td>
	</tr>
	<tr>
	<td>School Name</td>
	<td><input type="text" name="school_name" class="" /></td>
	</tr>
	<tr>
	<td>Round</td>
	<td>
		<select name="round" class="">
		<option value="">Select</option>
		<option value="1"> Ist </option>
		<option value="2"> 2nd </option>
		<option value="3"> 3rd </option>
		<option value="4"> 4th </option>
		<option value="5"> 5th </option>
		<option value="6"> 6th </option>
		<option value="7"> 7th </option>
		<option value="8"> 8th </option>
		</select>
	</td>
	</tr>
	<tr>
	<td>Semis Code</td>
	<td><input type="text" name="semis_code" /></td>
	</tr>
	<tr>
	<td>Teacher's Name</td>
	<td><input type="text" name="teachers_name" /></td>
	</tr>
	<tr>
	<td>Grade</td>
	<td>
		<select name="grade" class="">
		<option value="">Select</option>
		<option value="1"> I </option>
		<option value="2"> II </option>
		<option value="3"> III </option>
		<option value="4"> IV </option>
		<option value="5"> V </option>
		<option value="6"> VI </option>
		<option value="7"> VII </option>
		<option value="8"> VIII </option>
		</select>
	</td>
	</tr>
	<tr>
	<td>Subject</td>
	<td>
		<select name="subject" class="">
		<option value="">Select</option>
		<option value="drawing"> Drawing </option>
		<option value="english"> English </option>
		<option value="gscience"> G.Science </option>
		<option value="islamiyat"> Isalamiyat </option>
		<option value="math"> Math </option>
		<option value="sindhi"> Sindhi </option>
		<option value="sstudies"> S.Studies </option>
		<option value="urdu"> Urdu </option>
		</select>
	</td>
	
	</tr>
	
	
	<tr>
	<td>Students Present</td>
	<td><input type="text" name="students_present" class="number" /></td>
	</tr>
	
	<tr>
	<td colspan="2"><h1>1.0 Observation Period First Fifteen Minutes</h1></td>
	</tr>
	
	<tr>
	<td>1.1 How was the lesson introduced? <br/>(More then One Options can be right)</td>
	<td>
	<input type="checkbox" name="lesson_introduced_a" value="1">A. By Writing Title On The Blackboard<br/></input> 
	<input type="checkbox" name="lesson_introduced_b" value="1">B. With Text Book Reference</input> <br/>
	<input type="checkbox" name="lesson_introduced_c" value="1">C. By Announcing The Title</input> <br/>
	<input type="checkbox" name="lesson_introduced_d" value="1">D. By Orally Reminding Of That Previous Lesson</input> <br/>
	<input type="checkbox" name="lesson_introduced_e" value="1">E. No Introduction</input> 
	</td>
	</tr>
	
	
	
	<tr><td><h1>Select The Right Option</h1></td></tr>
	
	<tr>
	<td>1.2 Does The Teacher Ask More Than Two Question</td>
	<td>
	<input type="radio" name="two_questions" value="a" >Yes<br/></input>
	<input type="radio" name="two_questions" value="b" >Little<br/></input>
	<input type="radio" name="two_questions" value="c" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>1.3 Does The Teacher Open Ended Questions (without a restricted Answer)?</td>
	<td>
	<input type="radio" name="open_ended_questions" value="a" >Yes<br/></input>
	<input type="radio" name="open_ended_questions" value="b" >Little<br/></input>
	<input type="radio" name="open_ended_questions" value="c" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>1.4 Does The Teacher Give Adequate Response Time ?</td>
	<td>
	<input type="radio" name="response_time" value="a" >Yes<br/></input>
	<input type="radio" name="response_time" value="b" >Little<br/></input>
	<input type="radio" name="response_time" value="c" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>1.5 Does The Teacher Check for the Understanding of the Topic ?</td>
	<td>
	<input type="radio" name="understanding_topic" value="a" >Yes<br/></input>
	<input type="radio" name="understanding_topic" value="b" >Little<br/></input>
	<input type="radio" name="understanding_topic" value="c" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>1.6 Does The Teacher Give Explanatory Comments ?</td>
	<td>
	<input type="radio" name="explanatory_comments" value="a" >Yes<br/></input>
	<input type="radio" name="explanatory_comments" value="b" >Little<br/></input>
	<input type="radio" name="explanatory_comments" value="c" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>1.7 Is Any Assessment task recorded in writing ? </td>
	<td>
	<input type="radio" name="assessment_task" value="a" >Yes<br/></input>
	<input type="radio" name="assessment_task" value="b" >Little<br/></input>
	<input type="radio" name="assessment_task" value="c" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>1.8 How Often Does Assessment Of Work Involve </td>
	<td>
	A. Student Slef Assessment<br/><input type="text" name="work_assessment_a" value="" ></input>
	B. Teacher Doing Assessment<br/><input type="text" name="work_assessment_b" value="" ></input>
	C. Peer Assisted Assessment<br/><input type="text" name="work_assessment_c" value="" ></input>
	</td>
	</tr>
	
	
	
	
	
	
	<tr>
	<td>1.9 Did The Teacher Give The Elaborate Beyond the Textbook ? </td>
	<td>
	<input type="radio" name="beyond_book" value="a" >Yes<br/></input>
	<input type="radio" name="beyond_book" value="b" >Little<br/></input>
	<input type="radio" name="beyond_book" value="c" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>1.10 Do The Kids get a Chance to Describe Personal Experience Related to the Topic ? </td>
	<td>
	<input type="radio" name="personal_experience" value="a" >Yes<br/></input>
	<input type="radio" name="personal_experience" value="b" >Little<br/></input>
	<input type="radio" name="personal_experience" value="c" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>1.11 Does The Teacher Focus on Selected Group of Students ? </td>
	<td>
	<input type="radio" name="student_focus" value="a" >Yes<br/></input>
	<input type="radio" name="student_focus" value="b" >Little<br/></input>
	<input type="radio" name="student_focus" value="c" >No</input>
	</td>
	</tr>
	
	
	
	<tr>
	<td colspan="2"><h1>2.0 Observation Period Last Fifteen Minutes</h1></td>
	</tr>
	
	<tr><td><h1>Select The Right Option</h1></td></tr>
	
	<tr>
	<td>2.1 Does The Teacher Ask More Than Two Question</td>
	<td>
	<input type="radio" name="two_questions_2" value="a" >Yes<br/></input>
	<input type="radio" name="two_questions_2" value="b" >Little<br/></input>
	<input type="radio" name="two_questions_2" value="c" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>2.2 Does The Teacher Open Ended Questions (without a restricted Answer)?</td>
	<td>
	<input type="radio" name="open_ended_questions_2" value="a" >Yes<br/></input>
	<input type="radio" name="open_ended_questions_2" value="b" >Little<br/></input>
	<input type="radio" name="open_ended_questions_2" value="c" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>2.3 Does The Teacher Give Adequate Response Time ?</td>
	<td>
	<input type="radio" name="response_time_2" value="a" >Yes<br/></input>
	<input type="radio" name="response_time_2" value="b" >Little<br/></input>
	<input type="radio" name="response_time_2" value="c" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>2.4 Does The Teacher Check for the Understanding of the Topic ?</td>
	<td>
	<input type="radio" name="understanding_topic_2" value="a" >Yes<br/></input>
	<input type="radio" name="understanding_topic_2" value="b" >Little<br/></input>
	<input type="radio" name="understanding_topic_2" value="c" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>2.5 Does The Teacher Give Explanatory Comments ?</td>
	<td>
	<input type="radio" name="explanatory_comments_2" value="a" >Yes<br/></input>
	<input type="radio" name="explanatory_comments_2" value="b" >Little<br/></input>
	<input type="radio" name="explanatory_comments_2" value="c" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>2.6 Is Any Assessment task recorded in writing ? </td>
	<td>
	<input type="radio" name="assessment_task_2" value="a" >Yes<br/></input>
	<input type="radio" name="assessment_task_2" value="b" >Little<br/></input>
	<input type="radio" name="assessment_task_2" value="c" >No</input>
	</td>
	</tr>
	
	<tr>
	<td>2.7 How Often Does Assessment Of Work Involve </td>
	<td>
	A. Student Self Assessment<br/><input type="text" name="work_assessment_a_2" value="" ></input>
	B. Teacher Doing Assessment<br/><input type="text" name="work_assessment_b_2" value="" ></input>
	C. Peer Assisted Assessment<br/><input type="text" name="work_assessment_c_2" value="" ></input>
	</td>
	</tr>
	
	
	
	
	
	
	<tr>
	<td>2.8 Did The Teacher Give The Elaborate Beyond the Textbook ? </td>
	<td>
	<input type="radio" name="beyond_book_2" value="a" >Yes<br/></input>
	<input type="radio" name="beyond_book_2" value="b" >Little<br/></input>
	<input type="radio" name="beyond_book_2" value="c" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>2.9 Do The Kids get a Chance to Describe Personal Experience Related to the Topic ? </td>
	<td>
	<input type="radio" name="personal_experience_2" value="a" >Yes<br/></input>
	<input type="radio" name="personal_experience_2" value="b" >Little<br/></input>
	<input type="radio" name="personal_experience_2" value="c" >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>2.10 Does The Teacher Focus on Selected Group of Students ? </td>
	<td>
	<input type="radio" name="student_focus_2" value="a" >Yes<br/></input>
	<input type="radio" name="student_focus_2" value="b" >Little<br/></input>
	<input type="radio" name="student_focus_2" value="c" >No</input>
	</td>
	</tr>
	
	
	
	
	
	<tr>
	<td></td>
	<td><input type="submit" value="submit" name="submit" /></td>
	</tr>
	
	</tbody>
	
</form>
</table>