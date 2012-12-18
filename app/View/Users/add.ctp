<?php $this->set('title_for_layout','Mitglied hinzufügen'); ?>
<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
	<?php
		echo $this->Form->input('username', array('label' => 'Nutzername/E-Mail'));
		echo $this->Form->input('password', array('label' => 'Passwort'));
		echo $this->Form->input('first_name', array('label' => 'Vorname'));
		echo $this->Form->input('name', array('label' => 'Nachname'));
		echo $this->Form->input('group_id', array('label' => 'Gruppe'));
	?>
	</fieldset>
<?php echo $this->Form->end('Hinzufügen');?>
</div>
