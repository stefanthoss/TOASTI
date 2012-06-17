<?php $this->set('title_for_layout','Gruppe bearbeiten'); ?>
<div class="groups form">
<?php echo $this->Form->create('Group');?>
	<fieldset>
		<legend>Gruppe bearbeiten</legend>
	<?php
		echo $this->Form->input('name', array('label' => 'Gruppenname'));
	?>
	</fieldset>
<?php echo $this->Form->end('Änderungen speichern');?>
</div>
