<?php $this->set('title_for_layout','Kontaktperson bearbeiten'); ?>
<div class="contact_persons form">
<?php echo $this->Form->create('ContactPerson');?>
	<fieldset>
		<legend>Kontaktperson bearbeiten</legend>
	<?php
		echo $this->Form->input('company_id', array('label' => 'Unternehmen'));
		echo $this->Form->input('name', array('label' => 'Vorname'));
		echo $this->Form->input('surname', array('label' => 'Nachname'));
		echo $this->Form->input('position', array('label' => 'Position'));
		echo $this->Form->input('department', array('label' => 'Abteilung'));
		echo $this->Form->input('email', array('label' => 'E-Mail'));
		echo $this->Form->input('phone', array('label' => 'Telefonnummer'));
		echo $this->Form->input('mobile', array('label' => 'Handynummer'));
		echo $this->Form->input('fax', array('label' => 'Faxnummer'));
		echo $this->Form->input('street', array('label' => 'Straße'));
		echo $this->Form->input('street2', array('label' => 'Adresszusatz'));
		echo $this->Form->input('zip', array('label' => 'PLZ'));
		echo $this->Form->input('city', array('label' => 'Stadt'));
		echo $this->Form->input('country', array('label' => 'Land', 'value' => 'Deutschland'));
		echo $this->Form->input('note', array('label' => 'Notiz', 'rows' => '4'));
	?>
	</fieldset>
<?php echo $this->Form->end('Änderungen speichern');?>
</div>
<?php echo $this->Form->postLink('<i class="icon-trash icon-white"></i> Kontaktperson löschen', array('action' => 'delete', $contact_person['ContactPerson']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Bist du dir sicher, dass du die Kontaktperson '.$contact_person['ContactPerson']['name'].' '.$contact_person['ContactPerson']['surname'].' löschen willst? Das kann nicht rückgängig gemacht werden.'); ?>
