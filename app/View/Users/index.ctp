<?php $this->set('title_for_layout','Mitgliederdatenbank'); ?>

<h1>Mitglieder</h1>
<div class="alert">
Dies ist (bisher) keine vollständige Mitgliederdatenbank, sondern nur eine Übersicht aller registrierten Nutzer.
</div>
<table class="table table-striped">
    <tr>
        <th>Nutzername</th>
        <th>Vorname</th>
        <th>Nachname</th>
<?php if($role == 'admin') { echo '<th>Rolle</th><th>Aktiv</th>'; } ?>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['username']; ?></td>
        <td><?php echo $user['User']['name']; ?></td>
        <td><?php echo $user['User']['surname']; ?></td>
<?php
if($role == 'admin') {
echo '<td>'.$user['User']['role'].'</td>';
if($user['User']['active'] == 1) { echo '<td><i class="icon-ok"></i></td>'; } else { echo '<td><i class="icon-remove"></i></td>'; }
}
?>
    </tr>
    <?php endforeach; ?>

</table>
