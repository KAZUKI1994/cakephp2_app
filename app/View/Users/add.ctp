<div class="users form">
<?php echo $this->Form->create('User', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->hidden('Attachment.0.model', array('value' => 'User'));
		echo $this->Form->input('Attachment.0.photo_user', array('type' => 'file'));
		echo $this->Form->input('role', array(
		        'options' => array('admin' => 'Admin', 'author' => 'Author')
        ));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
