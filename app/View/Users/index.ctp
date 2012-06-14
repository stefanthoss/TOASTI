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
<?php if($role >= 10) { echo '<th>Rolle</th>'; } ?>
    </tr>

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['username']; ?></td>
        <td><?php echo $user['User']['name']; ?></td>
        <td><?php echo $user['User']['surname']; ?></td>
<?php
if($role >= 10) {
echo '<td>'.$user['User']['role'].'</td>';
}
?>
    </tr>
    <?php endforeach; ?>

</table>
