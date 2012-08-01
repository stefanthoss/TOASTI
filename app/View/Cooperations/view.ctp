<?php $this->set('title_for_layout', 'Kontaktaufnahme'); ?>
<h1>Kontaktaufnahme</h1>

<div class="cooperations view row">
<table class="table table-condensed span6">
	<tr><td>ID:</td><td><?php echo $cooperation['Cooperation']['id']; ?></td></tr>
	<tr><td>Kontaktperson:</td><td><?php echo $cooperation['Cooperation']['contact_person']; ?></td></tr>
	<tr><td>Veranstaltung:</td><td><?php echo $cooperation['Cooperation']['event']; ?></td></tr>
	<tr><td>VWI-Mitglied:</td><td><?php echo $cooperation['Cooperation']['user']; ?></td></tr>
	<tr><td>Datum:</td><td><?php echo $cooperation['Cooperation']['date']; ?></td></tr>
	<tr><td>Kooperationsart:</td><td><?php echo $cooperation['Cooperation']['cooperation_kind']; ?></td></tr>
	<tr><td>Notiz:</td><td><?php echo nl2br($cooperation['Cooperation']['note']); ?></td></tr>
</table>
</div>

<p><?php echo $this->Html->link('<i class="icon-pencil"></i> Bearbeiten', array('action' => 'edit', $cooperation['Cooperation']['id']), array('class' => 'btn', 'escape' => false)); ?></p>
