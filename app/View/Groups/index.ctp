<?php $this->set('title_for_layout','Gruppenliste'); ?>
<ul class="nav nav-tabs">
<li><?php echo $this->Html->link('Nutzerliste', array('controller' => 'users', 'action' => 'index')); ?></li>
<li class="active"><?php echo $this->Html->link('Gruppenliste', array('controller' => 'groups', 'action' => 'index')); ?></li>
</ul>

<div class="groups index">
	<table class="table table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('name', 'Gruppenname');?></th>
			<th class="actions">Aktionen</th>
	</tr>
	<?php
	foreach ($groups as $group): ?>
	<tr>
		<td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link('Anzeigen', array('action' => 'view', $group['Group']['id']), array('class' => 'btn btn-info')); ?>
			<?php echo $this->Html->link('Bearbeiten', array('action' => 'edit', $group['Group']['id']), array('class' => 'btn')); ?>
			<?php echo $this->Form->postLink('Löschen', array('action' => 'delete', $group['Group']['id']), array('class' => 'btn btn-danger'), __('Bist du dir sicher, dass du die Gruppe %s löschen willst?', $group['Group']['name'])); ?>
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

<p><?php echo $this->Html->link('Neue Gruppe hinzufügen', array('controller' => 'groups', 'action' => 'add'), array('class' => 'btn')); ?></p>
</div>
