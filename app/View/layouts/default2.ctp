<html>
<head>

<?php echo $html->css('cake.generic2.css?v=1.2', 'stylesheet', array("media"=>"all" ));?>
<script type="text/javascript" src="<?php echo $this->webroot?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot?>js/jquery.form.js"></script>
<script type="text/javascript" src="<?php echo $this->webroot?>js/jquery.validate.js"></script>
<title>Rsu Pilot Site</title>

<?php /*
<div id="navigation" style="display:inline; color:red; background-color:white; float:left; margin-left:300px; text-align:center;">
<a href="<?php echo $this->webroot?>">Home</a> |
<a href="<?php echo $this->webroot?>region">Manage Regions</a> |
<a href="<?php echo $this->webroot?>cluster">Manage Clusters</a> |
<a href="<?php echo $this->webroot?>school">Manage Schools</a> 
</div>*/?>
<h1 class="heading-main"><img src="<?php echo $this->webroot?>img/sindh-logo.png" style="float:left !important;" width="150px" height="92px"/> Sindh Education Reform Program <br /> Education Management Reform <br />Pilot Program
			
			
			
			
</h1>
<?php if(isset($logout)) { ?>
			<form style=" float:right; margin-top:-20px; font-size:14px; width:100%;" id="edit_school_form" action="<?php echo $this->webroot?>home/index" method="post">
			<div style="float:right; top:0px;">Semis Code<input style="width:150px;" type="text" name="semis_code"></input>
			<input type="submit" value="submit" /></div>
			</form>
			<?php } ?>
<a href="<?php echo $this->webroot?>home/index">Edit Schools Information</a> |
<a href="<?php echo $this->webroot?>home/view_teachers">Edit Teachers Information</a> |
<a href="<?php echo $this->webroot?>home/view_report">View Reports</a> |
<a href="<?php echo $this->webroot?>home/view_non_functional_schools/0/1">Non Functional School List</a> |
<a href="<?php echo $this->webroot?>home/view_non_functional_schools/0/2">Single Teacher Schools List</a> |
<a href="<?php echo $this->webroot?>home/view_classroom_observations">Classroom Observations</a> |
<a href="<?php echo $this->webroot?>home/distance_calculator">Distance Claculator</a>



<?php if(isset($logout)) { ?>
			<a href="<?php echo $this->webroot?>users/logout" style="float:right; color:black;" >logout</a>
			<?php } ?>
</head>
<body>
<?php echo $content_for_layout?>
</body>
</html>