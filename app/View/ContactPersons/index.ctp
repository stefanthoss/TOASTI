<?php $this->set('title_for_layout','Kontaktpersonen'); ?>

<h1>Kontaktpersonen</h1>

<p><?php echo $this->Html->link('Neue Kontaktperson hinzufügen', array('controller' => 'contact_persons', 'action' => 'add'), array('class' => 'btn')); ?></p>

<div class="contact_persons index">
	<table class="table table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('company', 'Unternehmen');?></th>
			<th><?php echo $this->Paginator->sort('name', 'Vorname');?></th>
			<th><?php echo $this->Paginator->sort('surname', 'Nachname');?></th>
			<th><?php echo $this->Paginator->sort('email', 'E-Mail');?></th>
			<th><?php echo $this->Paginator->sort('phone', 'Telefonnummer');?></th>
			<th><?php echo $this->Paginator->sort('mobile', 'Handynummer');?></th>
			<th><?php echo $this->Paginator->sort('city', 'Stadt');?></th>
			<th>Notiz</th>
			<th class="actions">Aktionen</th>
	</tr>
	<?php
	foreach ($contact_persons as $contact_person): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($contact_person['Company']['name'], array('controller' => 'companies', 'action' => 'view', $contact_person['Company']['id'])); ?>
		</td>
		<td><?php echo $contact_person['ContactPerson']['name']; ?></td>
		<td><?php echo $contact_person['ContactPerson']['surname']; ?></td>
		<td><?php echo $this->Html->link($contact_person['ContactPerson']['email'], 'mailto:'.$contact_person['ContactPerson']['email']); ?></td>
		<td><?php echo $contact_person['ContactPerson']['phone']; ?></td>
		<td><?php echo $contact_person['ContactPerson']['mobile']; ?></td>
		<td><?php echo $contact_person['ContactPerson']['city']; ?></td>
        <td><?php if(!empty($contact_person['ContactPerson']['note'])) { echo '<i class="icon-comment"></i>'; } ?></td>
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
