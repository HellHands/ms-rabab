<script>
$(function() {
$('#new_classroom_observation').validate();
});

</script>

<table style="width:1000px; margin-left:150px;" >
<form id="new_classroom_observation" action="<?php echo $this->webroot?>home/submit_classroom_observation/<?php echo $classroomObservation['ClassroomObservation']['id']?>" method="post">
	<tbody>
	<tr>
		<div style="text-align:center; margin-top:50px; line-height:50px;">
			<h1>Edit Clasroom Observation For Schools</h1>
		</div>	
	</tr>
	</tbody>
	<tbody>
	<tr width="500px" ><td width="200px" >District</td>
	<td>	
		<select name="district_id" class="required">
		<option value="">Select</option>
		<?php foreach($regions as $region) { ?>
		<option 
		<?php 
			if($classroomObservation['ClassroomObservation']['district_id'] == $region['Region']['id'])
			{
				echo 'selected="selected"';
			}		
		?> value="<?php echo $region['Region']['id']?>"><?php echo $region['Region']['name']?></option>
		<?php } ?>
		</select>
	</td>
	</tr>
	<tr>
	<td>Cluster Id</td>
	<td width="200px" ><input type="text" name="cluster_id" class=""  value="<?php echo $classroomObservation['ClassroomObservation']['cluster_id']?>" /></td>
	</tr>
	<tr>
	<td>School Name</td>
	<td><input type="text" name="school_name" class="" value="<?php echo $classroomObservation['ClassroomObservation']['school_name']?>" /></td>
	</tr>
	<tr>
	<td>Round</td>
	<td>
		<select name="round" class="">
		<option value="" <?php if($classroomObservation['ClassroomObservation']['round'] == "" ) { echo 'selected="selected"'; } ?> >Select</option>
		<option value="1" <?php if($classroomObservation['ClassroomObservation']['round'] == "1" ) { echo 'selected="selected"'; } ?> > Ist </option>
		<option value="2" <?php if($classroomObservation['ClassroomObservation']['round'] == "2" ) { echo 'selected="selected"'; } ?> > 2nd </option>
		<option value="3" <?php if($classroomObservation['ClassroomObservation']['round'] == "3" ) { echo 'selected="selected"'; } ?> > 3rd </option>
		<option value="4" <?php if($classroomObservation['ClassroomObservation']['round'] == "4" ) { echo 'selected="selected"'; } ?> > 4th </option>
		<option value="5" <?php if($classroomObservation['ClassroomObservation']['round'] == "5" ) { echo 'selected="selected"'; } ?> > 5th </option>
		<option value="6" <?php if($classroomObservation['ClassroomObservation']['round'] == "6" ) { echo 'selected="selected"'; } ?> > 6th </option>
		<option value="7" <?php if($classroomObservation['ClassroomObservation']['round'] == "7" ) { echo 'selected="selected"'; } ?> > 7th </option>
		<option value="8" <?php if($classroomObservation['ClassroomObservation']['round'] == "8" ) { echo 'selected="selected"'; } ?> > 8th </option>
		</select>
	</td>
	</tr>
	<tr>
	<td>Semis Code</td>
	<td><input type="text" name="semis_code" value="<?php echo $classroomObservation['ClassroomObservation']['semis_code']?>" /></td>
	</tr>
	<tr>
	<td>Teacher's Name</td>
	<td><input type="text" name="teachers_name" value="<?php echo $classroomObservation['ClassroomObservation']['teachers_name']?>" /></td>
	</tr>
	<tr>
	<td>Grade</td>
	<td>
		<select name="grade" class="">
		<option value="" <?php if($classroomObservation['ClassroomObservation']['grade'] == "" ) { echo 'selected="selected"'; } ?> >Select</option>
		<option value="1" <?php if($classroomObservation['ClassroomObservation']['grade'] == "1" ) { echo 'selected="selected"'; } ?> > I </option>
		<option value="2" <?php if($classroomObservation['ClassroomObservation']['grade'] == "2" ) { echo 'selected="selected"'; } ?> > II </option>
		<option value="3" <?php if($classroomObservation['ClassroomObservation']['grade'] == "3" ) { echo 'selected="selected"'; } ?> > III </option>
		<option value="4" <?php if($classroomObservation['ClassroomObservation']['grade'] == "4" ) { echo 'selected="selected"'; } ?> > IV </option>
		<option value="5" <?php if($classroomObservation['ClassroomObservation']['grade'] == "5" ) { echo 'selected="selected"'; } ?> > V </option>
		<option value="6" <?php if($classroomObservation['ClassroomObservation']['grade'] == "6" ) { echo 'selected="selected"'; } ?> > VI </option>
		<option value="7" <?php if($classroomObservation['ClassroomObservation']['grade'] == "7" ) { echo 'selected="selected"'; } ?> > VII </option>
		<option value="8" <?php if($classroomObservation['ClassroomObservation']['grade'] == "8" ) { echo 'selected="selected"'; } ?> > VIII </option>
		</select>
	</td>
	</tr>
	<tr>
	<td>Subject</td>
	<td>
		<select name="subject" class="">
		<option value="" <?php if($classroomObservation['ClassroomObservation']['subject'] == "" ) { echo 'selected="selected"'; } ?> >Select</option>
		<option value="drawing" <?php if($classroomObservation['ClassroomObservation']['subject'] == "drawing" ) { echo 'selected="selected"'; } ?> > Drawing </option>
		<option value="english" <?php if($classroomObservation['ClassroomObservation']['subject'] == "english" ) { echo 'selected="selected"'; } ?> > English </option>
		<option value="gscience" <?php if($classroomObservation['ClassroomObservation']['subject'] == "gscience" ) { echo 'selected="selected"'; } ?> > G.Science </option>
		<option value="islamiyat" <?php if($classroomObservation['ClassroomObservation']['subject'] == "islamiyat" ) { echo 'selected="selected"'; } ?> > Isalamiyat </option>
		<option value="math" <?php if($classroomObservation['ClassroomObservation']['subject'] == "math" ) { echo 'selected="selected"'; } ?> > Math </option>
		<option value="sindhi" <?php if($classroomObservation['ClassroomObservation']['subject'] == "sindhi" ) { echo 'selected="selected"'; } ?> > Sindhi </option>
		<option value="sstudies" <?php if($classroomObservation['ClassroomObservation']['subject'] == "sstudies" ) { echo 'selected="selected"'; } ?> > S.Studies </option>
		<option value="urdu" <?php if($classroomObservation['ClassroomObservation']['subject'] == "urdu" ) { echo 'selected="selected"'; } ?> > Urdu </option>
		</select>
	</td>
	
	</tr>
	
	
	<tr>
	<td>Students Present</td>
	<td><input type="text" name="students_present" class="number" value="<?php echo $classroomObservation['ClassroomObservation']['students_present']?>" /></td>
	</tr>
	
	<tr>
	<td colspan="2"><h1>1.0 Observation Period First Fifteen Minutes</h1></td>
	</tr>
	
	<tr>
	<td>1.1 How was the lesson introduced? <br/>(More then One Options can be right)</td>
	<td>
	<input type="checkbox" name="lesson_introduced_a" value="1" <?php if($classroomObservation['ClassroomObservation']['lesson_introduced_a'] == 1) { echo 'checked="checked"'; } ?> >A. By Writing Title On The Blackboard<br/></input> 
	<input type="checkbox" name="lesson_introduced_b" value="1" <?php if($classroomObservation['ClassroomObservation']['lesson_introduced_b'] == 1) { echo 'checked="checked"'; } ?> >B. With Text Book Reference</input> <br/>
	<input type="checkbox" name="lesson_introduced_c" value="1" <?php if($classroomObservation['ClassroomObservation']['lesson_introduced_c'] == 1) { echo 'checked="checked"'; } ?> >C. By Announcing The Title</input> <br/>
	<input type="checkbox" name="lesson_introduced_d" value="1" <?php if($classroomObservation['ClassroomObservation']['lesson_introduced_d'] == 1) { echo 'checked="checked"'; } ?> >D. By Orally Reminding Of That Previous Lesson</input> <br/>
	<input type="checkbox" name="lesson_introduced_e" value="1" <?php if($classroomObservation['ClassroomObservation']['lesson_introduced_e'] == 1) { echo 'checked="checked"'; } ?> >E. No Introduction</input> 
	</td>
	</tr>
	
	
	
	<tr><td><h1>Select The Right Option</h1></td></tr>
	
	<tr>
	<td>1.2 Does The Teacher Ask More Than Two Question</td>
	<td>
	<input type="radio" name="two_questions" value="a" <?php if($classroomObservation['ClassroomObservation']['two_questions'] == "a") { echo 'checked="checked"'; } ?> >Yes<br/></input>
	<input type="radio" name="two_questions" value="b" <?php if($classroomObservation['ClassroomObservation']['two_questions'] == "b") { echo 'checked="checked"'; } ?> >Little<br/></input>
	<input type="radio" name="two_questions" value="c" <?php if($classroomObservation['ClassroomObservation']['two_questions'] == "c") { echo 'checked="checked"'; } ?> >No</input>
	</td>
	</tr>
	
	<tr>
	<td>1.3 Does The Teacher Open Ended Questions (without a restricted Answer)?</td>
	<td>
	<input type="radio" name="open_ended_questions" value="a" <?php if($classroomObservation['ClassroomObservation']['open_ended_questions'] == "a") { echo 'checked="checked"'; } ?> >Yes<br/></input>
	<input type="radio" name="open_ended_questions" value="b" <?php if($classroomObservation['ClassroomObservation']['open_ended_questions'] == "b") { echo 'checked="checked"'; } ?>>Little<br/></input>
	<input type="radio" name="open_ended_questions" value="c" <?php if($classroomObservation['ClassroomObservation']['open_ended_questions'] == "c") { echo 'checked="checked"'; } ?>>No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>1.4 Does The Teacher Give Adequate Response Time ?</td>
	<td>
	<input type="radio" name="response_time" value="a" <?php if($classroomObservation['ClassroomObservation']['response_time'] == "a") { echo 'checked="checked"'; } ?> >Yes<br/></input>
	<input type="radio" name="response_time" value="b" <?php if($classroomObservation['ClassroomObservation']['response_time'] == "b") { echo 'checked="checked"'; } ?> >Little<br/></input>
	<input type="radio" name="response_time" value="c" <?php if($classroomObservation['ClassroomObservation']['response_time'] == "c") { echo 'checked="checked"'; } ?> >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>1.5 Does The Teacher Check for the Understanding of the Topic ?</td>
	<td>
	<input type="radio" name="understanding_topic" value="a" <?php if($classroomObservation['ClassroomObservation']['understanding_topic'] == "a") { echo 'checked="checked"'; } ?> >Yes<br/></input>
	<input type="radio" name="understanding_topic" value="b" <?php if($classroomObservation['ClassroomObservation']['understanding_topic'] == "b") { echo 'checked="checked"'; } ?> >Little<br/></input>
	<input type="radio" name="understanding_topic" value="c" <?php if($classroomObservation['ClassroomObservation']['understanding_topic'] == "c") { echo 'checked="checked"'; } ?> >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>1.6 Does The Teacher Give Explanatory Comments ?</td>
	<td>
	<input type="radio" name="explanatory_comments" value="a" <?php if($classroomObservation['ClassroomObservation']['explanatory_comments'] == "a") { echo 'checked="checked"'; } ?> >Yes<br/></input>
	<input type="radio" name="explanatory_comments" value="b" <?php if($classroomObservation['ClassroomObservation']['explanatory_comments'] == "b") { echo 'checked="checked"'; } ?> >Little<br/></input>
	<input type="radio" name="explanatory_comments" value="c" <?php if($classroomObservation['ClassroomObservation']['explanatory_comments'] == "c") { echo 'checked="checked"'; } ?> >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>1.7 Is Any Assessment task recorded in writing ? </td>
	<td>
	<input type="radio" name="assessment_task" value="a" <?php if($classroomObservation['ClassroomObservation']['assessment_task'] == "a") { echo 'checked="checked"'; } ?>>Yes<br/></input>
	<input type="radio" name="assessment_task" value="b" <?php if($classroomObservation['ClassroomObservation']['assessment_task'] == "b") { echo 'checked="checked"'; } ?> >Little<br/></input>
	<input type="radio" name="assessment_task" value="c" <?php if($classroomObservation['ClassroomObservation']['assessment_task'] == "c") { echo 'checked="checked"'; } ?> >No</input>
	</td>
	</tr>
	
	<tr>
	<td>1.8 How Often Does Assessment Of Work Involve </td>
	<td>
	A. Student Slef Assessment<br/><input type="text" name="work_assessment_a" value="<?php echo $classroomObservation['ClassroomObservation']['work_assessment_a']?>" ></input>
	B. Teacher Doing Assessment<br/><input type="text" name="work_assessment_b" value="<?php echo $classroomObservation['ClassroomObservation']['work_assessment_b']?>" ></input>
	C. Peer Assisted Assessment<br/><input type="text" name="work_assessment_c" value="<?php echo $classroomObservation['ClassroomObservation']['work_assessment_c']?>" ></input>
	</td>
	</tr>
	
	
	
	
	
	
	<tr>
	<td>1.9 Did The Teacher Give The Elaborate Beyond the Textbook ? </td>
	<td>
	<input type="radio" name="beyond_book" value="a" <?php if($classroomObservation['ClassroomObservation']['beyond_book'] == "a") { echo 'checked="checked"'; } ?> >Yes<br/></input>
	<input type="radio" name="beyond_book" value="b" <?php if($classroomObservation['ClassroomObservation']['beyond_book'] == "b") { echo 'checked="checked"'; } ?> >Little<br/></input>
	<input type="radio" name="beyond_book" value="c" <?php if($classroomObservation['ClassroomObservation']['beyond_book'] == "c") { echo 'checked="checked"'; } ?> >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>1.10 Do The Kids get a Chance to Describe Personal Experience Related to the Topic ? </td>
	<td>
	<input type="radio" name="personal_experience" value="a" <?php if($classroomObservation['ClassroomObservation']['personal_experience'] == "a") { echo 'checked="checked"'; } ?> >Yes<br/></input>
	<input type="radio" name="personal_experience" value="b" <?php if($classroomObservation['ClassroomObservation']['personal_experience'] == "b") { echo 'checked="checked"'; } ?> >Little<br/></input>
	<input type="radio" name="personal_experience" value="c" <?php if($classroomObservation['ClassroomObservation']['personal_experience'] == "c") { echo 'checked="checked"'; } ?> >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>1.11 Does The Teacher Focus on Selected Group of Students ? </td>
	<td>
	<input type="radio" name="student_focus" value="a" <?php if($classroomObservation['ClassroomObservation']['student_focus'] == "a") { echo 'checked="checked"'; } ?> >Yes<br/></input>
	<input type="radio" name="student_focus" value="b" <?php if($classroomObservation['ClassroomObservation']['student_focus'] == "b") { echo 'checked="checked"'; } ?> >Little<br/></input>
	<input type="radio" name="student_focus" value="c" <?php if($classroomObservation['ClassroomObservation']['student_focus'] == "c") { echo 'checked="checked"'; } ?> >No</input>
	</td>
	</tr>
	
	
	
	<tr>
	<td colspan="2"><h1>2.0 Observation Period Last Fifteen Minutes</h1></td>
	</tr>
	
	<tr><td><h1>Select The Right Option</h1></td></tr>
	
	<tr>
	<td>2.1 Does The Teacher Ask More Than Two Question</td>
	<td>
	<input type="radio" name="two_questions_2" value="a" <?php if($classroomObservation['ClassroomObservation']['two_questions_2'] == "a") { echo 'checked="checked"'; } ?> >Yes<br/></input>
	<input type="radio" name="two_questions_2" value="b" <?php if($classroomObservation['ClassroomObservation']['two_questions_2'] == "b") { echo 'checked="checked"'; } ?> >Little<br/></input>
	<input type="radio" name="two_questions_2" value="c" <?php if($classroomObservation['ClassroomObservation']['two_questions_2'] == "c") { echo 'checked="checked"'; } ?> >No</input>
	</td>
	</tr>
	
	<tr>
	<td>2.2 Does The Teacher Open Ended Questions (without a restricted Answer)?</td>
	<td>
	<input type="radio" name="open_ended_questions_2" value="a" <?php if($classroomObservation['ClassroomObservation']['open_ended_questions_2'] == "a") { echo 'checked="checked"'; } ?> >Yes<br/></input>
	<input type="radio" name="open_ended_questions_2" value="b" <?php if($classroomObservation['ClassroomObservation']['open_ended_questions_2'] == "b") { echo 'checked="checked"'; } ?> >Little<br/></input>
	<input type="radio" name="open_ended_questions_2" value="c" <?php if($classroomObservation['ClassroomObservation']['open_ended_questions_2'] == "c") { echo 'checked="checked"'; } ?> >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>2.3 Does The Teacher Give Adequate Response Time ?</td>
	<td>
	<input type="radio" name="response_time_2" value="a" <?php if($classroomObservation['ClassroomObservation']['response_time_2'] == "a") { echo 'checked="checked"'; } ?> >Yes<br/></input>
	<input type="radio" name="response_time_2" value="b" <?php if($classroomObservation['ClassroomObservation']['response_time_2'] == "b") { echo 'checked="checked"'; } ?> >Little<br/></input>
	<input type="radio" name="response_time_2" value="c" <?php if($classroomObservation['ClassroomObservation']['response_time_2'] == "c") { echo 'checked="checked"'; } ?> >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>2.4 Does The Teacher Check for the Understanding of the Topic ?</td>
	<td>
	<input type="radio" name="understanding_topic_2" value="a" <?php if($classroomObservation['ClassroomObservation']['understanding_topic_2'] == "a") { echo 'checked="checked"'; } ?> >Yes<br/></input>
	<input type="radio" name="understanding_topic_2" value="b" <?php if($classroomObservation['ClassroomObservation']['understanding_topic_2'] == "b") { echo 'checked="checked"'; } ?> >Little<br/></input>
	<input type="radio" name="understanding_topic_2" value="c" <?php if($classroomObservation['ClassroomObservation']['understanding_topic_2'] == "c") { echo 'checked="checked"'; } ?> >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>2.5 Does The Teacher Give Explanatory Comments ?</td>
	<td>
	<input type="radio" name="explanatory_comments_2" value="a" <?php if($classroomObservation['ClassroomObservation']['explanatory_comments_2'] == "a") { echo 'checked="checked"'; } ?> >Yes<br/></input>
	<input type="radio" name="explanatory_comments_2" value="b" <?php if($classroomObservation['ClassroomObservation']['explanatory_comments_2'] == "b") { echo 'checked="checked"'; } ?> >Little<br/></input>
	<input type="radio" name="explanatory_comments_2" value="c" <?php if($classroomObservation['ClassroomObservation']['explanatory_comments_2'] == "c") { echo 'checked="checked"'; } ?> >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>2.6 Is Any Assessment task recorded in writing ? </td>
	<td>
	<input type="radio" name="assessment_task_2" value="a" <?php if($classroomObservation['ClassroomObservation']['assessment_task_2'] == "a") { echo 'checked="checked"'; } ?> >Yes<br/></input>
	<input type="radio" name="assessment_task_2" value="b" <?php if($classroomObservation['ClassroomObservation']['assessment_task_2'] == "b") { echo 'checked="checked"'; } ?> >Little<br/></input>
	<input type="radio" name="assessment_task_2" value="c" <?php if($classroomObservation['ClassroomObservation']['assessment_task_2'] == "c") { echo 'checked="checked"'; } ?> >No</input>
	</td>
	</tr>
	
	<tr>
	<td>2.7 How Often Does Assessment Of Work Involve </td>
	<td>
	A. Student Self Assessment<br/><input type="text" name="work_assessment_a_2" value="<?php echo $classroomObservation['ClassroomObservation']['work_assessment_a_2']?>" ></input>
	B. Teacher Doing Assessment<br/><input type="text" name="work_assessment_b_2" value="<?php echo $classroomObservation['ClassroomObservation']['work_assessment_b_2']?>" ></input>
	C. Peer Assisted Assessment<br/><input type="text" name="work_assessment_c_2" value="<?php echo $classroomObservation['ClassroomObservation']['work_assessment_c_2']?>" ></input>
	</td>
	</tr>
	
	
	
	
	
	
	<tr>
	<td>2.8 Did The Teacher Give The Elaborate Beyond the Textbook ? </td>
	<td>
	<input type="radio" name="beyond_book_2" value="a" <?php if($classroomObservation['ClassroomObservation']['beyond_book_2'] == "a") { echo 'checked="checked"'; } ?> >Yes<br/></input>
	<input type="radio" name="beyond_book_2" value="b" <?php if($classroomObservation['ClassroomObservation']['beyond_book_2'] == "b") { echo 'checked="checked"'; } ?> >Little<br/></input>
	<input type="radio" name="beyond_book_2" value="c" <?php if($classroomObservation['ClassroomObservation']['beyond_book_2'] == "c") { echo 'checked="checked"'; } ?> >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>2.9 Do The Kids get a Chance to Describe Personal Experience Related to the Topic ? </td>
	<td>
	<input type="radio" name="personal_experience_2" value="a" <?php if($classroomObservation['ClassroomObservation']['personal_experience_2'] == "a") { echo 'checked="checked"'; } ?> >Yes<br/></input>
	<input type="radio" name="personal_experience_2" value="b" <?php if($classroomObservation['ClassroomObservation']['personal_experience_2'] == "b") { echo 'checked="checked"'; } ?> >Little<br/></input>
	<input type="radio" name="personal_experience_2" value="c" <?php if($classroomObservation['ClassroomObservation']['personal_experience_2'] == "c") { echo 'checked="checked"'; } ?> >No</input>
	</td>
	</tr>
	
	
	<tr>
	<td>2.10 Does The Teacher Focus on Selected Group of Students ? </td>
	<td>
	<input type="radio" name="student_focus_2" value="a" <?php if($classroomObservation['ClassroomObservation']['student_focus_2'] == "a") { echo 'checked="checked	"'; } ?> >Yes<br/></input>
	<input type="radio" name="student_focus_2" value="b" <?php if($classroomObservation['ClassroomObservation']['student_focus_2'] == "b") { echo 'checked="checked"'; } ?> >Little<br/></input>
	<input type="radio" name="student_focus_2" value="c" <?php if($classroomObservation['ClassroomObservation']['student_focus_2'] == "c") { echo 'checked="checked"'; } ?> >No</input>
	</td>
	</tr>
	
	
	
	
	
	<tr>
	<td></td>
	<td><input type="submit" value="submit" name="submit" /></td>
	</tr>
	
	</tbody>
	
</form>
</table>