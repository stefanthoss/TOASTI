<?php $this->set('title_for_layout','Unternehmen '.$company['Company']['name']); ?>
<h1><?php echo $company['Company']['name']; ?> <?php echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $company['Company']['id']), array('class' => 'btn', 'escape' => false)); ?></h1>
<br />

<div class="companies view row">
<table class="table table-condensed span6">
	<tr><td>Branche:</td><td><?php echo $company['Sector']['name']; ?></td></tr>
	<tr><td>Adresse:</td><td><address><?php echo $company['Company']['street']; ?><br />
			<?php echo $company['Company']['street2']; ?><br />
			<?php echo $company['Company']['zip']; ?> <?php echo $company['Company']['city']; ?><br />
			<?php echo $company['Company']['country']; ?><address></td></tr>
	<tr><td>Notiz:</td><td><?php echo nl2br($company['Company']['note']); ?></td></tr>
</table>
</div>

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
