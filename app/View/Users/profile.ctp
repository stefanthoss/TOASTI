<?php $this->set('title_for_layout','Eigenes Profil bearbeiten'); ?>
<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend>Eigenes Profil bearbeiten</legend>
		<div class="alert">Dieses Feature ist noch nicht verfügbar.</div>
	<?php
		echo $this->Form->label('User.username', 'Nutzername');
		echo $this->Form->text('username', array('value' => $user['User']['username'], 'disabled' => 'disabled'));
		echo $this->Form->label('User.group_id', 'Gruppe');
		echo $this->Form->text('group_id', array('value' => $user['Group']['name'], 'disabled' => 'disabled'));
		echo $this->Form->input('password', array('label' => 'Passwort'));
		echo $this->Form->input('first_name', array('label' => 'Vorname'));
		echo $this->Form->input('name', array('label' => 'Nachname'));
	?>
	</fieldset>
	<?php
		echo $this->Form->submit('Änderungen speichern', array('disabled' => 'disabled'));
		echo $this->Form->end();
	?>
</div>
