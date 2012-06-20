<?php $this->set('title_for_layout', $contact_person['ContactPerson']['name'].' '.$contact_person['ContactPerson']['surname']); ?>
<h1><?php echo $contact_person['ContactPerson']['name']; ?> <?php echo $contact_person['ContactPerson']['surname']; ?></h1>

<div class="contact_persons view row">
<table class="table table-condensed span6">
	<tr><td>ID:</td><td><?php echo $contact_person['ContactPerson']['id']; ?></td></tr>
	<tr><td>Unternehmen:</td><td><?php echo $this->Html->link($contact_person['Company']['name'], array('controller' => 'companies', 'action' => 'view', $contact_person['Company']['id'])); ?></td></tr>
	<tr><td>Position:</td><td><?php echo $contact_person['ContactPerson']['position']; ?></td></tr>
	<tr><td>Abteilung:</td><td><?php echo $contact_person['ContactPerson']['department']; ?></td></tr>
	<tr><td>E-Mail:</td><td><?php echo $this->Html->link($contact_person['ContactPerson']['email'], 'mailto:'.$contact_person['ContactPerson']['email']); ?></td></tr>
	<tr><td>Telefonnummer:</td><td><?php echo $contact_person['ContactPerson']['phone']; ?></td></tr>
	<tr><td>Handynummer:</td><td><?php echo $contact_person['ContactPerson']['mobile']; ?></td></tr>
	<tr><td>Faxnummer:</td><td><?php echo $contact_person['ContactPerson']['fax']; ?></td></tr>
	<tr><td>Straße:</td><td><?php echo $contact_person['ContactPerson']['street']; ?><br /><?php echo $contact_person['ContactPerson']['street2']; ?></td></tr>
	<tr><td>Stadt:</td><td><?php echo $contact_person['ContactPerson']['zip']; ?> <?php echo $contact_person['ContactPerson']['city']; ?></td></tr>
	<tr><td>Land:</td><td><?php echo $contact_person['ContactPerson']['country']; ?></td></tr>
	<tr><td>Notiz:</td><td><?php echo nl2br($contact_person['ContactPerson']['note']); ?></td></tr>
</table>
</div>

<p><?php echo $this->Html->link('<i class="icon-pencil"></i> Bearbeiten', array('action' => 'edit', $contact_person['ContactPerson']['id']), array('class' => 'btn', 'escape' => false)); ?></p>
