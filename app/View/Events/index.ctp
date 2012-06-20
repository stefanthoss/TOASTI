<?php $this->set('title_for_layout','Veranstaltungsliste'); ?>

<h1>Veranstaltungen</h1>

<p><?php echo $this->Html->link('Neue Veranstaltung hinzufügen', array('action' => 'add'), array('class' => 'btn')); ?></p>

<div class="events index">
<table class="table table-striped">
    <tr>
        <th>Name</th>
        <th class="actions">Aktionen</th>
    </tr>

    <?php foreach ($events as $event): ?>
    <tr>
        <td><?php echo $event['Event']['name']; ?></td>
	<td class="actions">
		<?php echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $event['Event']['id']), array('class' => 'btn', 'escape' => false, 'title' => 'Bearbeiten')); ?>
	</td>
    </tr>
    <?php endforeach; ?>
</table>
</div>
