<?php $this->set('title_for_layout', $contact['Contact']['first_name'].' '.$contact['Contact']['name']); ?>
<h1><?php echo $contact['Contact']['gender']; ?> <?php if($this->Permissions->check('Contacts.edit')) { echo $contact['Contact']['title']; ?> <?php echo $contact['Contact']['first_name']; ?> <?php echo $contact['Contact']['name']; ?> <?php echo $this->Html->link('<i class="icon-pencil"></i>', array('action' => 'edit', $contact['Contact']['id']), array('class' => 'btn', 'escape' => false)); } ?></h1>
<br />

<div class="contacts view row">
<table class="table table-condensed span6">
	<tr><td>Unternehmen:</td><td><?php echo $this->Html->link($contact['Company']['name'], array('controller' => 'companies', 'action' => 'view', $contact['Company']['id'])); ?></td></tr>
	<tr><td>Position:</td><td><?php echo $contact['Contact']['position']; ?></td></tr>
	<tr><td>Abteilung:</td><td><?php echo $contact['Contact']['department']; ?></td></tr>
	<tr><td>E-Mail:</td><td><?php echo $this->Html->link($contact['Contact']['email'], 'mailto:'.$contact['Contact']['email'], array('target' => '_blank')); ?></td></tr>
	<tr><td>Telefonnummer:</td><td><?php echo $contact['Contact']['phone']; ?></td></tr>
	<tr><td>Handynummer:</td><td><?php echo $contact['Contact']['mobile']; ?></td></tr>
	<tr><td>Faxnummer:</td><td><?php echo $contact['Contact']['fax']; ?></td></tr>
	<tr><td>Adresse:</td><td><address><?php echo $contact['Contact']['street']; ?><br />
				<?php echo $contact['Contact']['street2']; ?><br />
				<?php echo $contact['Contact']['zip']; ?> <?php echo $contact['Contact']['city']; ?><br />
				<?php echo $contact['Contact']['country']; ?></address></td></tr>
	<tr><td>Notiz:</td><td><?php echo nl2br($contact['Contact']['note']); ?></td></tr>
</table>
</div>
