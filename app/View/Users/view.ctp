<?php $this->set('title_for_layout','Nutzeransicht'); ?>
<h1>Nutzerinfos <?php echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $user['User']['id']), array('class' => 'btn', 'escape' => false)); ?></h1>
<br />

<div class="users view row">
<table class="table table-condensed span4">
	<tr><td>Nutzername/E-Mail:</td><td><?php echo $this->Html->link($user['User']['username'], 'mailto:'.$user['User']['username'], array('target' => '_blank')); ?></td></tr>
	<tr><td>Vorname:</td><td><?php echo $user['User']['first_name']; ?></td></tr>
	<tr><td>Nachname:</td><td><?php echo $user['User']['name']; ?></td></tr>
	<tr><td>Gruppe:</td><td><?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?></td></tr>
</table>
</div>

<div class="related">
	<h2>Bisherige Kontaktaufnahmen</h2>
	
	<?php if (!empty($cooperations)):?>
		<ul>
		<?php foreach ($cooperations as $cooperation): ?>
		<li><?php echo $this->Html->link($cooperation['Cooperation']['date'].' - '.$cooperation['Contact']['first_name'].' '.$cooperation['Contact']['name'].' ('.$cooperation['Contact']['company_name'].') - '.$cooperation['Event']['name'], array('controller' => 'cooperations', 'action' => 'view', $cooperation['Cooperation']['id'])); ?></li>
		<?php endforeach; ?>
		</ul>
	<?php else: ?>
		Keine Kontaktaufnahmen
	<?php endif; ?>
</div>
