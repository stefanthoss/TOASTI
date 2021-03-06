<?php $this->set('title_for_layout','Gruppen'); ?>

<h1>Gruppen</h1>

<p><?php echo $this->Html->link('Neue Gruppe hinzufügen', array('controller' => 'groups', 'action' => 'add'), array('class' => 'btn')); ?></p>

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
			<?php if($this->Permissions->check('Groups.view')) { echo $this->Html->link('<i class="icon-info-sign icon-white"></i>', array('action' => 'view', $group['Group']['id']), array('class' => 'btn btn-info', 'escape' => false, 'title' => 'Anzeigen')); } ?>
			<?php if($this->Permissions->check('Groups.edit')) { echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $group['Group']['id']), array('class' => 'btn', 'escape' => false, 'title' => 'Bearbeiten')); } ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p><?php echo $this->Paginator->counter(array(
	'format' => '{:current} Einträge von insgesamt {:count} werden angezeigt ({:start} bis {:end})')); ?></p>

	<div class="pagination pagination-centered"><ul>
	<?php
		echo $this->Paginator->prev('Vorherige Seite', array('tag' => 'li'), '<a href="#">Vorherige Seite</a>', array('tag' => 'li', 'class' => 'disabled', 'escape' => false));
		echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => '', 'currentClass' => 'active'));
		echo $this->Paginator->next('Nächste Seite', array('tag' => 'li'), '<a href="#">Nächste Seite</a>', array('tag' => 'li', 'class' => 'disabled', 'escape' => false));
	?>
	</ul></div>
</div>
