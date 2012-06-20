<?php $this->set('title_for_layout','Unternehmensansicht'); ?>
<div class="row">
<div class="companies view">
<h2>Unternehmensinfos</h2>

<table class="table table-condensed span4">
	<tr><td>ID:</td><td><?php echo $company['Company']['id']; ?></td></tr>
	<tr><td>Name:</td><td><?php echo $company['Company']['name']; ?></td></tr>
	<tr><td>Straße:</td><td><?php echo $company['Company']['street']; ?><br /><?php echo $company['Company']['street2']; ?></td></tr>
	<tr><td>Stadt:</td><td><?php echo $company['Company']['zip']; ?> <?php echo $company['Company']['city']; ?></td></tr>
	<tr><td>Land:</td><td><?php echo $company['Company']['country']; ?></td></tr>
	<tr><td>Notiz:</td><td><?php echo nl2br($company['Company']['note']); ?></td></tr>
</table>
</div>
</div>

<div class="related">
	<h3>Kontaktperson, die hier arbeiten</h3>
	<?php if (!empty($company['ContactPerson'])):?>

	<table class="table table-striped">
	<tr>
			<th>Vorname</th>
			<th>Nachname</th>
	</tr>
	<?php
	foreach ($company['ContactPerson'] as $contact_person): ?>
	<tr>
		<td><?php echo $contact_person['name']; ?></td>
		<td><?php echo $contact_person['surname']; ?></td>
	</tr>
<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
