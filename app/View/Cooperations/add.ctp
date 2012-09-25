<?php $this->set('title_for_layout','Kontaktaufnahme hinzufügen'); ?>
<div class="cooperation form">
<?php echo $this->Form->create('Cooperation');?>
	<fieldset>
        <legend>Kontaktaufnahme hinzufügen</legend>
	<?php
		echo $this->Form->input('contact_id', array('label' => 'Kontaktperson'));
		echo $this->Form->input('event_id', array('label' => 'Veranstaltung'));
		echo $this->Form->input('user_id', array('label' => 'VWI-Mitglied'));
		echo $this->Form->input('date', array('label' => 'Datum', 'id' =>'datepicker', 'type'=>'text'));
		echo $this->Form->input('cooperation_kind', array('label' => 'Kooperationsart'));
		echo $this->Form->input('note', array('label' => 'Notiz', 'rows' => '4'));
	?>
	</fieldset>
<?php echo $this->Form->end('Hinzufügen');?>
</div>
