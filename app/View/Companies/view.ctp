<?php $this->set('title_for_layout','Unternehmen '.$company['Company']['name']); ?>
<h1><?php echo $company['Company']['name']; ?></h1>

<div class="companies view row">
<table class="table table-condensed span6">
	<tr><td>ID:</td><td><?php echo $company['Company']['id']; ?></td></tr>
	<tr><td>Branche:</td><td><?php echo $company['Sector']['name']; ?></td></tr>
	<tr><td>Straße:</td><td><?php echo $company['Company']['street']; ?><br /><?php echo $company['Company']['street2']; ?></td></tr>
	<tr><td>Stadt:</td><td><?php echo $company['Company']['zip']; ?> <?php echo $company['Company']['city']; ?></td></tr>
	<tr><td>Land:</td><td><?php echo $company['Company']['country']; ?></td></tr>
	<tr><td>Notiz:</td><td><?php echo nl2br($company['Company']['note']); ?></td></tr>
</table>
</div>

<p><?php echo $this->Html->link('<i class="icon-pencil"></i> Bearbeiten', array('action' => 'edit', $company['Company']['id']), array('class' => 'btn', 'escape' => false)); ?></p>

<?php if (!empty($company['Contact'])):?>
<div class="related">
	<h2>Kontaktpersonen in diesem Unternehmen</h2>

	<ul>
	<?php foreach ($company['Contact'] as $contact): ?>
	<li><?php echo $this->Html->link($contact['first_name'].' '.$contact['name'], array('controller' => 'contacts', 'action' => 'view', $contact['id'])); ?></li>
	<?php endforeach; ?>
	</ul>
</div>
<?php endif; ?>
