<ul class="nav nav-tabs">
<li><?php echo $this->Html->link('Nutzerliste', array('controller' => 'users', 'action' => 'index')); ?></li>
<li class="active"><?php echo $this->Html->link('Neuer Nutzer', array('controller' => 'users', 'action' => 'add')); ?></li>
<li><?php echo $this->Html->link('Gruppenliste', array('controller' => 'groups', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link('Neue Gruppe', array('controller' => 'groups', 'action' => 'add')); ?></li>
</ul>

<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
	<?php
		echo $this->Form->input('username', array('label' => 'Nutzername'));
		echo $this->Form->input('password', array('label' => 'Passwort'));
		echo $this->Form->input('name', array('label' => 'Vorname'));
		echo $this->Form->input('surname', array('label' => 'Nachname'));
		echo $this->Form->input('group_id', array('label' => 'Gruppe'));
	?>
	</fieldset>
<?php echo $this->Form->end('Hinzufügen');?>
</div>
