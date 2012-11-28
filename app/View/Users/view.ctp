<?php $this->set('title_for_layout','Nutzeransicht'); ?>
<div class="users view row">
<h1>Nutzerinfos <?php if($this->Permissions->check('Users.edit')) { echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $user['User']['id']), array('class' => 'btn', 'escape' => false)); } ?></h1>
<br />

<div class="users view row">
<table class="table table-condensed span4">
	<tr><td>Nutzername/E-Mail:</td><td><?php echo $this->Html->link($user['User']['username'], 'mailto:'.$user['User']['username'], array('target' => '_blank')); ?></td></tr>
	<tr><td>Vorname:</td><td><?php echo $user['User']['first_name']; ?></td></tr>
	<tr><td>Nachname:</td><td><?php echo $user['User']['name']; ?></td></tr>
	<tr><td>Gruppe:</td><td><?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?></td></tr>
</table>
</div>
</div>
