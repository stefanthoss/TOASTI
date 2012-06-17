<?php $this->set('title_for_layout','Gruppe hinzufügen'); ?>
<div class="groups form">
<?php echo $this->Form->create('Group');?>
	<fieldset>
	<?php
		echo $this->Form->input('name', array('label' => 'Name'));
	?>
	</fieldset>
<?php echo $this->Form->end('Hinzufügen');?>
</div>
