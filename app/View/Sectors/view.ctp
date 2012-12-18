<?php $this->set('title_for_layout','Branche '.$sector['Sector']['name']); ?>
<h1><?php echo $sector['Sector']['name']; ?> <?php if($this->Permissions->check('Sectors.edit')) { echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $sector['Sector']['id']), array('class' => 'btn', 'escape' => false)); } ?></h1>
<br />

<?php if (!empty($sector['Company'])):?>
<div class="related">
	<h2>Unternehmen in dieser Branche</h2>

	<ul>
	<?php foreach ($sector['Company'] as $company): ?>
	<li><?php echo $this->Html->link($company['name'], array('controller' => 'companies', 'action' => 'view', $company['id'])); ?></li>
	<?php endforeach; ?>
	</ul>
</div>
<?php endif; ?>
