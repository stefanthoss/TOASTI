<?php $this->set('title_for_layout','Nutzeransicht'); ?>
<div class="users view row">
<h2>Nutzerinfos</h2>

<table class="table table-condensed span4">
	<tr><td>ID:</td><td><?php echo $user['User']['id']; ?></td></tr>
	<tr><td>Nutzername:</td><td><?php echo $user['User']['username']; ?></td></tr>
	<tr><td>Passwort:</td><td><?php echo $user['User']['password']; ?></td></tr>
	<tr><td>Vorname:</td><td><?php echo $user['User']['name']; ?></td></tr>
	<tr><td>Nachname:</td><td><?php echo $user['User']['surname']; ?></td></tr>
	<tr><td>Gruppe:</td><td><?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?></td></tr>
</table>
</div>
