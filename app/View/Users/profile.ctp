<?php $this->set('title_for_layout','Eigenes Profil bearbeiten'); ?>
<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend>Eigenes Profil bearbeiten</legend>
	<?php
		echo $this->Form->input('username', array('label' => 'Nutzername'));
		echo $this->Form->label('User.group_id', 'Gruppe');
		echo $this->Form->text('group_id', array('value' => $user['Group']['name'], 'disabled' => 'disabled'));
		echo $this->Form->input('password', array('label' => 'Passwort'));
		echo $this->Form->input('name', array('label' => 'Vorname'));
		echo $this->Form->input('surname', array('label' => 'Nachname'));
	?>
	</fieldset>
<?php echo $this->Form->end('Änderungen speichern');?>
</div>
