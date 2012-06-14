<?php $this->set('title_for_layout','Nutzerregistrierung'); ?>
<div class="users form">
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Nutzer hinzufügen'); ?></legend>
    <?php
        echo $this->Form->input('username', array('label' => 'Nutzername'));
        echo $this->Form->input('password', array('label' => 'Passwort'));
        echo $this->Form->input('name', array('label' => 'Vorname'));
        echo $this->Form->input('surname', array('label' => 'Nachname'));
        echo $this->Form->input('role', array('label' => 'Rolle'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
