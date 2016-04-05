	<?php 
		if(!(isset($show_report)))
		{
	?>
			<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
			<tr>
				<td><h1>Districts for Which the MPR Report is Intended</h1></td>
			</tr>
			<tr>
				<td><a href="<?php echo $this->webroot?>home/mpr_report/1">Mirpurkhas</a></td>
			</tr>
			<tr>
				<td><a href="<?php echo $this->webroot?>home/mpr_report/2">Nausher-o-Feroze</a></td>
			</tr>
			<tr>
				<td><a href="<?php echo $this->webroot?>home/mpr_report/3">Dadu</a></td>
			</tr>
			<tr>
				<td><a href="<?php echo $this->webroot?>home/mpr_report/4">Umerkot</a></td>
			</tr>
			<tr>
				<td><a href="<?php echo $this->webroot?>home/mpr_report/5">Khairpur</a></td>
			</tr>
			<tr>
				<td><a href="<?php echo $this->webroot?>home/mpr_report/6">Shikarpur</a></td>
			</tr>
			<tr>
				<td><a href="<?php echo $this->webroot?>home/mpr_report/7">Larkano</a></td>
			</tr>
			<tr>
				<td><a href="<?php echo $this->webroot?>home/mpr_report/8">Sanghar</a></td>
			</tr>
			<tr>
				<td><a href="<?php echo $this->webroot?>home/mpr_report/9">Badin</a></td>
			</tr>
			<tr>
				<td><a href="<?php echo $this->webroot?>home/mpr_report/10">Kambar @ shadadkot</a></td>
			</tr>
			<tr>
				<td><a href="<?php echo $this->webroot?>home/mpr_report/11">Kashmore @ Kandhkot</a></td>
			</tr>
			<tr>
				<td><a href="<?php echo $this->webroot?>home/mpr_report/12">Thatta</a></td>
			</tr>
			<tr>
				<td><a href="<?php echo $this->webroot?>home/mpr_report/13">Shaheed Benazirabad</a></td>
			</tr>
			<tr>
				<td><a href="<?php echo $this->webroot?>home/mpr_report/14">Jacobabad</a></td>
			</tr>
			
			</table>
	<?php
		}
		else
		{
	?>
			<table border="0" cellpadding="0" cellspacing="0" class="grid_table wf">
			<tr>
			<td><h1>August - 2011</h1></td>
			</tr>
			<tr>
			<td>No of Schools Closed</td>
			<td>No of Teachers Absent</td>
			<td>Ratio of Absent Teachers</td>
			<td>Number of Students Absent</td>
			<td>Ratio of Students Absent</td>
			</tr>
			<tr style="margin-top:50px">
			<td><h1>September - 2011</h1></td>
			</tr>
			<tr>
			<td>No of Schools Closed</td>
			<td>No of Teachers Absent</td>
			<td>Ratio of Absent Teachers</td>
			<td>Number of Students Absent</td>
			<td>Ratio of Students Absent</td>
			</tr>
			<tr style="margin-top:50px">
			<td><h1>October - 2011</h1></td>
			</tr>
			<tr>
			<td>No of Schools Closed</td>
			<td>No of Teachers Absent</td>
			<td>Ratio of Absent Teachers</td>
			<td>Number of Students Absent</td>
			<td>Ratio of Students Absent</td>
			</tr>
			</table>

	<?php 
		} 
	?>