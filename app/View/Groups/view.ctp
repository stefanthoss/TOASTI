<?php $this->set('title_for_layout','Gruppenansicht'); ?>
<h1>Gruppeninfos: <?php echo $group['Group']['name']; ?> <?php if($this->Permissions->check('Groups.edit')) { echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $group['Group']['id']), array('class' => 'btn', 'escape' => false)); } ?></h1>
<br />

<div class="related">
	<h2>Nutzer in dieser Gruppe</h2>
	<?php if (!empty($group['User'])):?>

	<ul>
	<?php foreach ($group['User'] as $user): ?>
	<li><?php echo $this->Html->link($user['first_name'].' '.$user['name'], array('controller' => 'users', 'action' => 'view', $user['id'])); ?></li>
	<?php endforeach; ?>
	</ul>
<?php endif; ?>
</div>
