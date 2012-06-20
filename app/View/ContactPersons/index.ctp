<?php $this->set('title_for_layout','Kontaktpersonen'); ?>

<p><?php echo $this->Html->link('Neue Kontaktperson hinzufügen', array('controller' => 'contact_persons', 'action' => 'add'), array('class' => 'btn')); ?></p>

<div class="contact_persons index">
	<table class="table table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('name', 'Vorname');?></th>
			<th><?php echo $this->Paginator->sort('surname', 'Nachname');?></th>
			<th><?php echo $this->Paginator->sort('email', 'E-Mail');?></th>
			<th><?php echo $this->Paginator->sort('city', 'Stadt');?></th>
			<th><?php echo $this->Paginator->sort('company', 'Unternehmen');?></th>
			<th class="actions">Aktionen</th>
	</tr>
	<?php
	foreach ($contact_persons as $contact_person): ?>
	<tr>
		<td><?php echo $contact_person['ContactPerson']['name']; ?>&nbsp;</td>
		<td><?php echo $contact_person['ContactPerson']['surname']; ?>&nbsp;</td>
		<td><?php echo $contact_person['ContactPerson']['email']; ?>&nbsp;</td>
		<td><?php echo $contact_person['ContactPerson']['city']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contact_person['Company']['name'], array('controller' => 'companies', 'action' => 'view', $contact_person['Company']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link('<i class="icon-info-sign icon-white"></i>', array('action' => 'view', $contact_person['ContactPerson']['id']), array('class' => 'btn btn-info', 'escape' => false, 'title' => 'Anzeigen')); ?>
			<?php echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $contact_person['ContactPerson']['id']), array('class' => 'btn', 'escape' => false, 'title' => 'Bearbeiten')); ?>
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
