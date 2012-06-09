<?php $this->set('title_for_layout','Mitgliedersatenbank'); ?>

<h1>Mitglieder</h1>
<div class="alert">
Dies ist (bisher) keine vollständige Mitgliederdatenbank, sondern nur eine Übersicht aller registrierten Nutzer.
</div>
<table class="table table-striped">
    <tr>
        <th>Nutzername</th>
        <th>Vorname</th>
        <th>Nachname</th>
        <th>Rolle</th>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['username']; ?></td>
        <td><?php echo $user['User']['name']; ?></td>
        <td><?php echo $user['User']['surname']; ?></td>
        <td><?php echo $user['User']['role']; ?></td>
    </tr>
    <?php endforeach; ?>

</table>
