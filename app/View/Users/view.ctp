<div class="users view">
<h2><?php  echo __('User');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Surname'); ?></dt>
		<dd>
			<?php echo h($user['User']['surname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts'), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Service Orders'), array('controller' => 'service_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Service Order'), array('controller' => 'service_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Contacts');?></h3>
	<?php if (!empty($user['Contact'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Cooperation Kind'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Contact Person Id'); ?></th>
		<th><?php echo __('Event Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Contact'] as $contact): ?>
		<tr>
			<td><?php echo $contact['id'];?></td>
			<td><?php echo $contact['date'];?></td>
			<td><?php echo $contact['cooperation_kind'];?></td>
			<td><?php echo $contact['note'];?></td>
			<td><?php echo $contact['contact_person_id'];?></td>
			<td><?php echo $contact['event_id'];?></td>
			<td><?php echo $contact['user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'contacts', 'action' => 'view', $contact['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'contacts', 'action' => 'edit', $contact['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'contacts', 'action' => 'delete', $contact['id']), null, __('Are you sure you want to delete # %s?', $contact['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contact'), array('controller' => 'contacts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Service Orders');?></h3>
	<?php if (!empty($user['ServiceOrder'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Rating'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Event Id'); ?></th>
		<th><?php echo __('Service Provider Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['ServiceOrder'] as $serviceOrder): ?>
		<tr>
			<td><?php echo $serviceOrder['id'];?></td>
			<td><?php echo $serviceOrder['date'];?></td>
			<td><?php echo $serviceOrder['description'];?></td>
			<td><?php echo $serviceOrder['rating'];?></td>
			<td><?php echo $serviceOrder['price'];?></td>
			<td><?php echo $serviceOrder['note'];?></td>
			<td><?php echo $serviceOrder['user_id'];?></td>
			<td><?php echo $serviceOrder['event_id'];?></td>
			<td><?php echo $serviceOrder['service_provider_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'service_orders', 'action' => 'view', $serviceOrder['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'service_orders', 'action' => 'edit', $serviceOrder['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'service_orders', 'action' => 'delete', $serviceOrder['id']), null, __('Are you sure you want to delete # %s?', $serviceOrder['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Service Order'), array('controller' => 'service_orders', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
