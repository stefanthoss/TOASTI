<?php $this->set('title_for_layout', 'Kontaktaufnahme'); ?>
<h1>Kontaktaufnahme <?php echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $cooperation['Cooperation']['id']), array('class' => 'btn', 'escape' => false)); ?></h1>
<br />

<div class="cooperations view row">
<table class="table table-condensed span6">
	<tr><td>Kontaktperson:</td><td><?php echo $this->Html->link($cooperation['Contact']['first_name'].' '.$cooperation['Contact']['name'], array('controller' => 'contacts', 'action' => 'view', $cooperation['Contact']['id'])); ?></td></tr>
	<tr><td>Veranstaltung:</td><td><?php echo $cooperation['Event']['name']; ?></td></tr>
	<tr><td>VWI-Mitglied:</td><td><?php echo $cooperation['User']['first_name']; ?> <?php echo $cooperation['User']['name']; ?></td></tr>
	<tr><td>Datum:</td><td><?php echo $cooperation['Cooperation']['date']; ?></td></tr>
	<tr><td>Kooperationsart:</td><td><?php echo $cooperation['Cooperation']['cooperation_kind']; ?></td></tr>
	<tr><td>Notiz:</td><td><?php echo nl2br($cooperation['Cooperation']['note']); ?></td></tr>
</table>
</div>
