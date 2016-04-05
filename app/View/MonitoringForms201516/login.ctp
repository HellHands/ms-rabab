<?php //debug(json_encode($variable, JSON_PRETTY_PRINT));  ?>
<div class="row">
	<div class="col-md-6" style="float: none; margin: auto;">
		<!-- <legend><?php //echo __('Login'); ?></legend>-->
		<?= $this->Session->flash(); ?>
		<?= $this->Form->create('user', array('url' => array('controller' => 'Monitoring_Forms_201516', 'action' => 'login'))); ?>
		<div class="form-group">
			<p class="lead">
				Login
			</p>
		</div>
        <div class="form-group">
        	<?= $this->Form->input('username', array(
        		'class' => 'form-control'
        	)); ?>
        </div>
        <div class="form-group">
        	<?= $this->Form->input('password', array(
        		'class' => 'form-control'
        	)); ?>
        </div>

		<button type="submit" class="btn btn-primary">Submit</button>
		<?= $this->Form->end(); ?>
	</div>

</div>


