<div class="row">
<div class="groups view">
<h2>Nutzerinfos</h2>

<table class="table table-condensed span4">
	<tr><td>ID:</td><td><?php echo $group['Group']['id']; ?></td></tr>
	<tr><td>Gruppenname:</td><td><?php echo $group['Group']['name']; ?></td></tr>
</table>
</div>
</div>

<div class="related">
	<h3>Nutzer in dieser Gruppe</h3>
	<?php if (!empty($group['User'])):?>

	<table class="table table-striped">
	<tr>
			<th>Nutzername</th>
			<th>Vorname</th>
			<th>Nachname</th>
	</tr>
	<?php
	foreach ($group['User'] as $user): ?>
	<tr>
		<td><?php echo $user['username']; ?></td>
		<td><?php echo $user['name']; ?></td>
		<td><?php echo $user['surname']; ?></td>
	</tr>
<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
