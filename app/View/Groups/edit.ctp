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
<?php echo $this->Form->postLink('<i class="icon-trash icon-white"></i> Gruppe löschen', array('action' => 'delete', $group['Group']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Bist du dir sicher, dass du die Gruppe '.$group['Group']['name'].' löschen willst? Das kann nicht rückgängig gemacht werden.'); ?>
