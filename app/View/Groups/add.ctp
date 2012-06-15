<ul class="nav nav-tabs">
<li><?php echo $this->Html->link('Nutzerliste', array('controller' => 'users', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link('Neuer Nutzer', array('controller' => 'users', 'action' => 'add')); ?></li>
<li><?php echo $this->Html->link('Gruppenliste', array('controller' => 'groups', 'action' => 'index')); ?></li>
<li class="active"><?php echo $this->Html->link('Neue Gruppe', array('controller' => 'groups', 'action' => 'add')); ?></li>
</ul>

<div class="groups form">
<?php echo $this->Form->create('Group');?>
	<fieldset>
	<?php
		echo $this->Form->input('name', array('label' => 'Name'));
	?>
	</fieldset>
<?php echo $this->Form->end('Hinzufügen');?>
</div>
