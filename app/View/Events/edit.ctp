<?php $this->set('title_for_layout','Veranstaltung bearbeiten'); ?>
<div class="events form">
<?php echo $this->Form->create('Event', array('action' => 'edit')); ?>
    <fieldset>
        <legend>Veranstaltung bearbeiten</legend>
    <?php
        echo $this->Form->input('name', array('label' => 'Name'));
    ?>
    </fieldset>
<?php echo $this->Form->end('Speichern');?>
</div>
<?php echo $this->Form->postLink('<i class="icon-trash icon-white"></i> Veranstaltung löschen', array('action' => 'delete', $event['Event']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Bist du dir sicher, dass du die Veranstaltung '.$event['Event']['name'].' löschen willst? Das kann nicht rückgängig gemacht werden.'); ?>
