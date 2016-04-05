<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('CakePHP: the rapid development php framework:'); ?>
		<?php //echo $title_for_layout; ?>
	</title>
<h1 class="heading-main"><img src="<?php echo $this->webroot?>img/sindh-logo.png" style="float:left !important;" width="150px" height="92px"/> Sindh Education Reform Program <br /> Education Management Reform <br />Pilot Program</h1>
<a href="<?php echo $this->webroot?>home/index">Edit Schools Information</a> |
<a href="<?php echo $this->webroot?>home/view_teachers">Edit Teachers Information</a> |
<a href="<?php echo $this->webroot?>home/view_report">View Reports</a> |
<a href="<?php echo $this->webroot?>home/view_non_functional_schools/0/1">Non Functional School List</a> |
<a href="<?php echo $this->webroot?>home/view_non_functional_schools/0/2">Single Teacher Schools List</a> |
<a href="<?php echo $this->webroot?>home/view_classroom_observations">Classroom Observations</a> |
<a href="<?php echo $this->webroot?>home/distance_calculator">Distance Claculator</a>	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');
		echo $this->Html->css('cake.generic2');

		echo $scripts_for_layout;
		$session->flash('auth');
	?>
	</head>
<body>
	<div id="container">
		<div id="header">
			
			<?php if(isset($logout)) { ?>
			<a href="<?php echo $this->webroot?>users/logout" style="float:right; color:white;" >logout</a>
			<?php } ?>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt'=> __('CakePHP: the rapid development php framework', true), 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>