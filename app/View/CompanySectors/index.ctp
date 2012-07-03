<?php $this->set('title_for_layout','Unternehmensbranchenliste'); ?>

<ul class="nav nav-tabs">
<li><?php echo $this->Html->link('Unternehmen', array('controller' => 'companies', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link('Kontaktpersonen', array('controller' => 'contact_persons', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link('Kontaktaufnahmen', array('controller' => 'contacts', 'action' => 'index')); ?></li>
<li class="active"><?php echo $this->Html->link('Unternehmensbranchen', array('controller' => 'company_sectors', 'action' => 'index')); ?></li>
</ul>

<p><?php echo $this->Html->link('Neue Unternehmensbranche hinzufügen', array('action' => 'add'), array('class' => 'btn')); ?></p>

<div class="company_sectors index">
<table class="table table-striped">
    <tr>
        <th>Name</th>
        <th class="actions">Aktionen</th>
    </tr>

    <?php foreach ($company_sectors as $company_sector): ?>
    <tr>
        <td><?php echo $company_sector['CompanySector']['name']; ?></td>
	<td class="actions">
		<?php echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $company_sector['CompanySector']['id']), array('class' => 'btn', 'escape' => false, 'title' => 'Bearbeiten')); ?>
	</td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
