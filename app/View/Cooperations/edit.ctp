<?php $this->set('title_for_layout','Kontaktaufnahme bearbeiten'); ?>
<div class="cooperations form">
<?php echo $this->Form->create('Cooperation');?>
	<fieldset>
		<legend>Kontaktaufnahme bearbeiten</legend>
	<?php
		echo $this->Form->input('contact_id', array('label' => 'Kontaktperson'));
		echo $this->Form->input('event_id', array('label' => 'Veranstaltung'));
		echo $this->Form->input('user_id', array('label' => 'VWI-Mitglied'));
		echo $this->Form->input('date', array('label' => 'Datum'));
		echo $this->Form->input('cooperation_kind', array('label' => 'Kooperationsart'));
		echo $this->Form->input('note', array('label' => 'Notiz', 'rows' => '4'));
	?>
	</fieldset>
<?php echo $this->Form->end('Änderungen speichern');?>
</div>
<?php echo $this->Form->postLink('<i class="icon-trash icon-white"></i> Kontaktaufnahme löschen', array('action' => 'delete', $cooperation['Contact']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Bist du dir sicher, dass du die Kontaktaufnahme löschen willst? Das kann nicht rückgängig gemacht werden.'); ?>
