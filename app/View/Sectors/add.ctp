<?php $this->set('title_for_layout','Unternehmensbranche hinzufügen'); ?>
<div class="sectors form">
<?php echo $this->Form->create('Sector');?>
    <fieldset>
        <legend>Unternehmensbranche hinzufügen</legend>
    <?php
        echo $this->Form->input('name', array('label' => 'Name'));
    ?>
    </fieldset>
<?php echo $this->Form->end('Hinzufügen');?>
</div>
