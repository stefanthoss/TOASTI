<?php $this->set('title_for_layout','Unternehmen '.$company['Company']['name']); ?>
<h1><?php echo $company['Company']['name']; ?></h1>

<div class="companies view row">
<table class="table table-condensed span6">
	<tr><td>ID:</td><td><?php echo $company['Company']['id']; ?></td></tr>
	<tr><td>Branche:</td><td><?php echo $company['CompanySector']['name']; ?></td></tr>
	<tr><td>Straße:</td><td><?php echo $company['Company']['street']; ?><br /><?php echo $company['Company']['street2']; ?></td></tr>
	<tr><td>Stadt:</td><td><?php echo $company['Company']['zip']; ?> <?php echo $company['Company']['city']; ?></td></tr>
	<tr><td>Land:</td><td><?php echo $company['Company']['country']; ?></td></tr>
	<tr><td>Notiz:</td><td><?php echo nl2br($company['Company']['note']); ?></td></tr>
</table>
</div>

<p><?php echo $this->Html->link('<i class="icon-pencil"></i> Bearbeiten', array('action' => 'edit', $company['Company']['id']), array('class' => 'btn', 'escape' => false)); ?></p>

<?php if (!empty($company['ContactPerson'])):?>
<div class="related">
	<h2>Kontaktpersonen in diesem Unternehmen</h2>

	<ul>
	<?php foreach ($company['ContactPerson'] as $contact_person): ?>
	<li><?php echo $this->Html->link($contact_person['first_name'].' '.$contact_person['name'], array('controller' => 'contact_persons', 'action' => 'view', $contact_person['id'])); ?></li>
	<?php endforeach; ?>
	</ul>
</div>
<?php endif; ?>
