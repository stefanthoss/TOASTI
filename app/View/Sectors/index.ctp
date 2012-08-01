<?php $this->set('title_for_layout','Unternehmensbranchenliste'); ?>

<ul class="nav nav-tabs">
<li><?php echo $this->Html->link('Unternehmen', array('controller' => 'companies', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link('Kontaktpersonen', array('controller' => 'contacts', 'action' => 'index')); ?></li>
<li><?php echo $this->Html->link('Kontaktaufnahmen', array('controller' => 'cooperations', 'action' => 'index')); ?></li>
<li class="active"><?php echo $this->Html->link('Unternehmensbranchen', array('controller' => 'sectors', 'action' => 'index')); ?></li>
</ul>

<p><?php echo $this->Html->link('Neue Unternehmensbranche hinzufügen', array('action' => 'add'), array('class' => 'btn')); ?></p>

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
		<?php echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $sector['Sector']['id']), array('class' => 'btn', 'escape' => false, 'title' => 'Bearbeiten')); ?>
	</td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
