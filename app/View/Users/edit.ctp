<?php $this->set('title_for_layout','Nutzer bearbeiten'); ?>
<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend>Nutzer bearbeiten</legend>
	<?php
		echo $this->Form->input('username', array('label' => 'Nutzername'));
		echo $this->Form->input('password', array('label' => 'Passwort'));
		echo $this->Form->input('name', array('label' => 'Vorname'));
		echo $this->Form->input('surname', array('label' => 'Nachname'));
		echo $this->Form->input('group_id', array('label' => 'Gruppe'));
	?>
	</fieldset>
<?php echo $this->Form->end('Änderungen speichern');?>
</div>
