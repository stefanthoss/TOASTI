<?php $this->set('title_for_layout','Unternehmensbranche bearbeiten'); ?>
<div class="company_sectors form">
<?php echo $this->Form->create('CompanySector', array('action' => 'edit')); ?>
    <fieldset>
        <legend>Unternehmensbranche bearbeiten</legend>
    <?php
        echo $this->Form->input('name', array('label' => 'Name'));
    ?>
    </fieldset>
<?php echo $this->Form->end('Speichern');?>
</div>
<?php echo $this->Form->postLink('<i class="icon-trash icon-white"></i> Unternehmensbranche löschen', array('action' => 'delete', $company_sector['CompanySector']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Bist du dir sicher, dass du die Unternehmensbranche '.$company_sector['CompanySector']['name'].' löschen willst? Das kann nicht rückgängig gemacht werden.'); ?>
