<?php $this->set('title_for_layout', 'Kontaktaufnahmen'); ?>

<ul class="nav nav-tabs">
<li><?php if($this->Permissions->check('Companies.index')) { echo $this->Html->link('Unternehmen', array('controller' => 'companies', 'action' => 'index')); } ?></li>
<li><?php if($this->Permissions->check('Contacts.index')) { echo $this->Html->link('Kontaktpersonen', array('controller' => 'contacts', 'action' => 'index')); } ?></li>
<li class="active"><?php echo $this->Html->link('Kontaktaufnahmen', array('controller' => 'cooperations', 'action' => 'index')); ?></li>
<li><?php if($this->Permissions->check('Sectors.index')) { echo $this->Html->link('Unternehmensbranchen', array('controller' => 'sectors', 'action' => 'index')); } ?></li>
</ul>

<p><?php if($this->Permissions->check('Cooperations.add')) { echo $this->Html->link('Neue Kontaktaufnahme hinzufügen', array('action' => 'add'), array('class' => 'btn')); } ?></p>

<div class="cooperations index">
	<table class="table table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('contact', 'Kontaktperson');?></th>
			<th><?php echo $this->Paginator->sort('event', 'Veranstaltung');?></th>
			<th><?php echo $this->Paginator->sort('user', 'VWI-Mitglied');?></th>
			<th><?php echo $this->Paginator->sort('date', 'Datum');?></th>
			<th><?php echo $this->Paginator->sort('cooperation_kind', 'Kooperationsart');?></th>
			<th>Notiz</th>
			<th class="actions">Aktionen</th>
	</tr>
	<?php
	foreach ($cooperations as $cooperation): ?>
	<tr>
		<td><?php echo $this->Html->link($cooperation['Contact']['first_name'].' '.$cooperation['Contact']['name'], array('controller' => 'contacts', 'action' => 'view', $cooperation['Contact']['id'])); ?></td>
		<td><?php echo $this->Html->link($cooperation['Event']['name'], array('controller' => 'events', 'action' => 'view', $cooperation['Event']['id'])); ?></td>
		<td><?php echo $this->Html->link($cooperation['User']['first_name'].' '.$cooperation['User']['name'], array('controller' => 'users', 'action' => 'view', $cooperation['User']['id'])); ?></td>
		<td><?php echo $this->Time->format('d.m.Y', $cooperation['Cooperation']['date']); ?></td>
		<td><?php echo $cooperation['Cooperation']['cooperation_kind']; ?></td>
                <td><?php if(!empty($cooperation['Cooperation']['note'])) { echo '<i class="icon-comment"></i>'; } ?></td>
		<td class="actions">
			<?php if($this->Permissions->check('Cooperations.view')) { echo $this->Html->link('<i class="icon-info-sign icon-white"></i>', array('action' => 'view', $cooperation['Cooperation']['id']), array('class' => 'btn btn-info', 'escape' => false, 'title' => 'Anzeigen')); } ?>
			<?php if($this->Permissions->check('Cooperations.edit')) { echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $cooperation['Cooperation']['id']), array('class' => 'btn', 'escape' => false, 'title' => 'Bearbeiten')); } ?>
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
