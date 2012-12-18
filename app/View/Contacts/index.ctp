<?php $this->set('title_for_layout','Kontaktpersonen'); ?>

<ul class="nav nav-tabs">
<li><?php if($this->Permissions->check('Companies.index')) { echo $this->Html->link('Unternehmen', array('controller' => 'companies', 'action' => 'index')); } ?></li>
<li class="active"><?php echo $this->Html->link('Kontaktpersonen', array('controller' => 'contacts', 'action' => 'index')); ?></li>
<li><?php if($this->Permissions->check('Cooperations.index')) { echo $this->Html->link('Kontaktaufnahmen', array('controller' => 'cooperations', 'action' => 'index')); } ?></li>
<li><?php if($this->Permissions->check('Sectors.index')) { echo $this->Html->link('Unternehmensbranchen', array('controller' => 'sectors', 'action' => 'index')); } ?></li>
</ul>

<p><?php if($this->Permissions->check('Contacts.add')) { echo $this->Html->link('Neue Kontaktperson hinzufügen', array('action' => 'add'), array('class' => 'btn')); } ?></p>

<div class="contacts index">
	<table class="table table-striped">
	<tr>
			<th></th>
			<th></th>
			<th><?php echo $this->Paginator->sort('first_name', 'Vorname');?></th>
			<th><?php echo $this->Paginator->sort('name', 'Nachname');?></th>
			<th>Unternehmen</th>
			<th><?php echo $this->Paginator->sort('email', 'E-Mail');?></th>
			<th><?php echo $this->Paginator->sort('city', 'Stadt');?></th>
			<th><?php echo $this->Paginator->sort('country', 'Land');?></th>
			<th>Notiz</th>
			<th class="actions">Aktionen</th>
	</tr>
	<?php foreach ($contacts as $contact): ?>
	<tr>
		<td><?php echo $contact['Contact']['gender']; ?></td>
		<td><?php echo $contact['Contact']['title']; ?></td>
		<td><?php echo $contact['Contact']['first_name']; ?></td>
		<td><?php echo $contact['Contact']['name']; ?></td>
		<td><?php echo $this->Html->link($contact['Company']['name'], array('controller' => 'companies', 'action' => 'view', $contact['Company']['id'])); ?></td>
		<td><?php echo $this->Html->link($contact['Contact']['email'], 'mailto:'.$contact['Contact']['email'], array('target' => '_blank')); ?></td>
		<td><?php echo $contact['Contact']['city']; ?></td>
		<td><?php echo $contact['Contact']['country']; ?></td>
        <td><?php if(!empty($contact['Contact']['note'])) { echo '<i class="icon-comment"></i>'; } ?></td>
		<td class="actions">
			<?php if($this->Permissions->check('Contacts.view')) { echo $this->Html->link('<i class="icon-info-sign icon-white"></i>', array('action' => 'view', $contact['Contact']['id']), array('class' => 'btn btn-info', 'escape' => false, 'title' => 'Anzeigen')); } ?>
			<?php if($this->Permissions->check('Contacts.edit')) { echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $contact['Contact']['id']), array('class' => 'btn', 'escape' => false, 'title' => 'Bearbeiten')); } ?>
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
