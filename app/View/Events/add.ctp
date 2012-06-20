<?php $this->set('title_for_layout','Veranstaltung hinzufügen'); ?>
<div class="events form">
<?php echo $this->Form->create('Event');?>
    <fieldset>
        <legend>Veranstaltung hinzufügen</legend>
    <?php
        echo $this->Form->input('name', array('label' => 'Name'));
    ?>
    </fieldset>
<?php echo $this->Form->end('Hinzufügen');?>
</div>
