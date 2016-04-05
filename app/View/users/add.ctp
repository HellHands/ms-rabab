<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend><?php __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('group_id');
		echo $this->Form->input('superuser');
		echo $this->Form->input('district');
		echo $this->Form->input('tehsil');
		echo $this->Form->input('name');
		echo $this->Form->input('cnic_number');
		echo $this->Form->input('contact_number');
		echo $this->Form->input('email_address');
		echo $this->Form->input('designation');
		echo $this->Form->input('qualification');
		echo $this->Form->input('bank_name');
		echo $this->Form->input('account_title');
		echo $this->Form->input('account_number');
		echo $this->Form->input('bank_branch');
		echo $this->Form->input('bank_branch_code');
		echo $this->Form->input('tehsil1');
		echo $this->Form->input('tehsil2');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true)); ?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Groups', true), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group', true), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Posts', true), array('controller' => 'posts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Post', true), array('controller' => 'posts', 'action' => 'add')); ?> </li>
	</ul>
</div>