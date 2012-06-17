<?php $this->set('title_for_layout','Nutzerliste'); ?>
<ul class="nav nav-tabs">
<li class="active"><?php echo $this->Html->link('Nutzerliste', array('controller' => 'users', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link('Gruppenliste', array('controller' => 'groups', 'action' => 'index')); ?></li>
</ul>

<p><?php echo $this->Html->link('Neuen Nutzer hinzufügen', array('controller' => 'users', 'action' => 'add'), array('class' => 'btn')); ?></p>

<div class="users index">
	<table class="table table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('username', 'Nutzername');?></th>
			<th><?php echo $this->Paginator->sort('name', 'Vorname');?></th>
			<th><?php echo $this->Paginator->sort('surname', 'Nachname');?></th>
			<th><?php echo $this->Paginator->sort('group_id', 'Gruppe');?></th>
			<th class="actions">Aktionen</th>
	</tr>
	<?php
	foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['name']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['surname']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link('<i class="icon-info-sign icon-white"></i>', array('action' => 'view', $user['User']['id']), array('class' => 'btn btn-info', 'escape' => false, 'title' => 'Anzeigen')); ?>
			<?php echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $user['User']['id']), array('class' => 'btn', 'escape' => false, 'title' => 'Bearbeiten')); ?>
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
