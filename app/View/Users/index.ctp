<?php $this->set('title_for_layout','Mitgliederliste'); ?>
<ul class="nav nav-tabs">
<li class="active"><?php echo $this->Html->link('Mitgliederliste', array('controller' => 'users', 'action' => 'index')); ?></li>
<li><?php if($this->Permissions->check('Groups.index')) { echo $this->Html->link('Gruppenliste', array('controller' => 'groups', 'action' => 'index')); } ?></li>
</ul>

<p><?php if($this->Permissions->check('Users.add')) { echo $this->Html->link('Neues Mitglied hinzufügen', array('controller' => 'users', 'action' => 'add'), array('class' => 'btn')); } ?></p>

<div class="users index">
	<table class="table table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('username', 'Nutzername/E-Mail');?></th>
			<th><?php echo $this->Paginator->sort('first_name', 'Vorname');?></th>
			<th><?php echo $this->Paginator->sort('name', 'Nachname');?></th>
			<th>Gruppe</th>
			<th class="actions">Aktionen</th>
	</tr>
	<?php
	foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($user['Group']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php if($this->Permissions->check('Users.view')) { echo $this->Html->link('<i class="icon-info-sign icon-white"></i>', array('action' => 'view', $user['User']['id']), array('class' => 'btn btn-info', 'escape' => false, 'title' => 'Anzeigen')); } ?>
			<?php if($this->Permissions->check('Users.edit')) { echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $user['User']['id']), array('class' => 'btn', 'escape' => false, 'title' => 'Bearbeiten')); } ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p><?php echo $this->Paginator->counter(array(
	'format' => '{:current} Einträge von insgesamt {:count} werden angezeigt ({:start} bis {:end})')); ?></p>

	<div class="paging pagination"><ul>
	<?php
		echo $this->Paginator->prev('Vorherige Seite', array('tag' => 'li'), '<a href="#">Vorherige Seite</a>', array('tag' => 'li', 'class' => 'disabled', 'escape' => false));
		echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => '', 'currentClass' => 'current disabled'));
		echo $this->Paginator->next('Nächste Seite', array('tag' => 'li'), '<a href="#">Nächste Seite</a>', array('tag' => 'li', 'class' => 'disabled', 'escape' => false));
	?>
	</ul></div>
</div>
