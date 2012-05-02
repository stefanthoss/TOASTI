<?php $this->set('title_for_layout','Login'); ?>
<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend>Login</legend>
    <?php
        echo $this->Form->input('username', array('label' => 'Nutzername'));
        echo $this->Form->input('password', array('label' => 'Passwort'));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Login'));?>
</div>
