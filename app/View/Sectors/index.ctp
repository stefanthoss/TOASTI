<?php $this->set('title_for_layout','Unternehmensbranchenliste'); ?>

<ul class="nav nav-tabs">
<li><?php if($this->Permissions->check('Companies.index')) { echo $this->Html->link('Unternehmen', array('controller' => 'companies', 'action' => 'index')); } ?></li>
<li><?php if($this->Permissions->check('Contacts.index')) { echo $this->Html->link('Kontaktpersonen', array('controller' => 'contacts', 'action' => 'index')); } ?></li>
<li><?php if($this->Permissions->check('Cooperations.index')) { echo $this->Html->link('Kontaktaufnahmen', array('controller' => 'cooperations', 'action' => 'index')); } ?></li>
<li class="active"><?php echo $this->Html->link('Unternehmensbranchen', array('controller' => 'sectors', 'action' => 'index')); ?></li>
</ul>

<p><?php if($this->Permissions->check('Sectors.add')) { echo $this->Html->link('Neue Unternehmensbranche hinzufügen', array('action' => 'add'), array('class' => 'btn')); } ?></p>

<div class="sectors index">
<table class="table table-striped">
    <tr>
        <th>Name</th>
        <th class="actions">Aktionen</th>
    </tr>

    <?php foreach ($sectors as $sector): ?>
    <tr>
        <td><?php echo $sector['Sector']['name']; ?></td>
	<td class="actions">
		<?php if($this->Permissions->check('Sectors.view')) { echo $this->Html->link('<i class="icon-info-sign icon-white"></i>', array('action' => 'view', $sector['Sector']['id']), array('class' => 'btn btn-info', 'escape' => false, 'title' => 'Anzeigen')); } ?>
		<?php if($this->Permissions->check('Sectors.edit')) { echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $sector['Sector']['id']), array('class' => 'btn', 'escape' => false, 'title' => 'Bearbeiten')); } ?>
	</td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
