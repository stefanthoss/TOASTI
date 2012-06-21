<?php $this->set('title_for_layout', 'Kontaktaufnahmen'); ?>

<h1>Kontaktaufnahmen</h1>

<p><?php echo $this->Html->link('Neue Kontaktaufnahme hinzufügen', array('action' => 'add'), array('class' => 'btn')); ?></p>

<div class="contacts index">
	<table class="table table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('company', 'Unternehmen');?></th>
			<th><?php echo $this->Paginator->sort('event', 'Veranstaltung');?></th>
			<th><?php echo $this->Paginator->sort('user', 'VWI-Mitglied');?></th>
			<th><?php echo $this->Paginator->sort('date', 'Datum');?></th>
			<th><?php echo $this->Paginator->sort('cooperation_kind', 'Telefonnummer');?></th>
			<th>Notiz</th>
			<th class="actions">Aktionen</th>
	</tr>
	<?php
	foreach ($contacts as $contact): ?>
	<tr>
		<td><?php echo $this->Html->link($contact['ContactPerson']['name'], array('controller' => 'contact_persons', 'action' => 'view', $contact['ContactPerson']['id'])); ?></td>
		<td><?php echo $this->Html->link($contact['Event']['name'], array('controller' => 'events', 'action' => 'view', $contact['Event']['id'])); ?></td>
		<td><?php echo $this->Html->link($contact['User']['name'], array('controller' => 'users', 'action' => 'view', $contact['User']['id'])); ?></td>
		<td><?php echo $contact['Contact']['date']; ?></td>
		<td><?php echo $contact['Contact']['cooperation_kind']; ?></td>
                <td><?php if(!empty($contact['Contact']['note'])) { echo '<i class="icon-comment"></i>'; } ?></td>
		<td class="actions">
			<?php echo $this->Html->link('<i class="icon-info-sign icon-white"></i>', array('action' => 'view', $contact['Contact']['id']), array('class' => 'btn btn-info', 'escape' => false, 'title' => 'Anzeigen')); ?>
			<?php echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $contact['Contact']['id']), array('class' => 'btn', 'escape' => false, 'title' => 'Bearbeiten')); ?>
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
