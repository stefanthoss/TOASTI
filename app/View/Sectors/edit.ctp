<?php $this->set('title_for_layout','Unternehmensbranche bearbeiten'); ?>
<div class="sectors form">
<?php echo $this->Form->create('Sector', array('action' => 'edit')); ?>
    <fieldset>
        <legend>Unternehmensbranche bearbeiten</legend>
    <?php
        echo $this->Form->input('name', array('label' => 'Name'));
    ?>
    </fieldset>
<?php echo $this->Form->end('Speichern');?>
</div>
<?php echo $this->Form->postLink('<i class="icon-trash icon-white"></i> Unternehmensbranche löschen', array('action' => 'delete', $sector['Sector']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Bist du dir sicher, dass du die Unternehmensbranche '.$sector['Sector']['name'].' löschen willst? Das kann nicht rückgängig gemacht werden.'); ?>
