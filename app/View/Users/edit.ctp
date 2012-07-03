<?php $this->set('title_for_layout','Nutzer bearbeiten'); ?>
<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend>Nutzer bearbeiten</legend>
	<?php
		echo $this->Form->input('username', array('label' => 'Nutzername'));
		echo $this->Form->input('password', array('label' => 'Passwort'));
		echo $this->Form->input('first_name', array('label' => 'Vorname'));
		echo $this->Form->input('name', array('label' => 'Nachname'));
		echo $this->Form->input('group_id', array('label' => 'Gruppe'));
	?>
	</fieldset>
<?php echo $this->Form->end('Änderungen speichern');?>
</div>
<?php echo $this->Form->postLink('<i class="icon-trash icon-white"></i> Nutzer löschen', array('action' => 'delete', $user['User']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Bist du dir sicher, dass du den Nutzer '.$user['User']['username'].' löschen willst? Das kann nicht rückgängig gemacht werden.'); ?>
