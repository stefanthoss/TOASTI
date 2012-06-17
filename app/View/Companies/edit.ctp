<?php $this->set('title_for_layout','Unternehmen bearbeiten'); ?>
<div class="companies form">
<?php echo $this->Form->create('Company', array('action' => 'edit')); ?>
    <fieldset>
        <legend><?php echo __('Unternehmen bearbeiten'); ?></legend>
    <?php
        echo $this->Form->input('name', array('label' => 'Name'));
        echo $this->Form->input('street', array('label' => 'Straße'));
        echo $this->Form->input('street2', array('label' => 'Adresszusatz'));
        echo $this->Form->input('zip', array('label' => 'PLZ'));
        echo $this->Form->input('city', array('label' => 'Stadt'));
        echo $this->Form->input('country', array('label' => 'Land'));
        echo $this->Form->input('note', array('label' => 'Notiz', 'rows' => '4'));
    ?>
    </fieldset>
<?php echo $this->Form->end('Speichern');?>
</div>
<?php echo $this->Form->postLink('<i class="icon-trash icon-white"></i> Unternehmen löschen', array('action' => 'delete', $company['Company']['id']), array('class' => 'btn btn-danger', 'escape' => false), 'Bist du dir sicher, dass du das Unternehmen '.$company['Company']['name'].' löschen willst? Das kann nicht rückgängig gemacht werden.'); ?>
