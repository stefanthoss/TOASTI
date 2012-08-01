<?php $this->set('title_for_layout','Unternehmensliste'); ?>

<ul class="nav nav-tabs">
<li class="active"><?php echo $this->Html->link('Unternehmen', array('controller' => 'companies', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link('Kontaktpersonen', array('controller' => 'contacts', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link('Kontaktaufnahmen', array('controller' => 'cooperations', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link('Unternehmensbranchen', array('controller' => 'sectors', 'action' => 'index')); ?></li>
</ul>

<p><?php echo $this->Html->link('Neues Unternehmen hinzufügen', array('controller' => 'companies', 'action' => 'add'), array('class' => 'btn')); ?></p>

<div class="users index">
<table class="table table-striped">
    <tr>
        <th><?php echo $this->Paginator->sort('name', 'Name');?></th>
        <th><?php echo $this->Paginator->sort('city', 'Stadt');?></th>
        <th><?php echo $this->Paginator->sort('country', 'Land');?></th>
        <th><?php echo $this->Paginator->sort('sector', 'Branche');?></th>
        <th>Notiz</th>
        <th class="actions">Aktionen</th>
    </tr>

    <?php foreach ($companies as $company): ?>
    <tr>
        <td><?php echo $company['Company']['name']; ?></td>
        <td><?php echo $company['Company']['city']; ?></td>
        <td><?php echo $company['Company']['country']; ?></td>
        <td><?php echo $company['Sector']['name']; ?></td>
        <td><?php if(!empty($company['Company']['note'])) { echo '<i class="icon-comment"></i>'; } ?></td>
	<td class="actions">
		<?php echo $this->Html->link('<i class="icon-info-sign icon-white"></i>', array('action' => 'view', $company['Company']['id']), array('class' => 'btn btn-info', 'escape' => false, 'title' => 'Anzeigen')); ?>
		<?php echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $company['Company']['id']), array('class' => 'btn', 'escape' => false, 'title' => 'Bearbeiten')); ?>
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
