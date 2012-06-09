<!-- File: /app/View/Companies/index.ctp -->
<?php $this->set('title_for_layout','Unternehmen'); ?>

<h1>Unternehmen</h1>
<table class="table table-striped">
    <tr>
        <th>Name </th>
        <th>Straße</th>
        <th>PLZ</th>
        <th>Stadt</th>
        <th>Letzter Kontakt</th>
        <th></th>
    </tr>

    <?php foreach ($companies as $company): ?>
    <tr>
        <td><?php echo $company['Company']['name']; ?></td>
        <td><?php echo $company['Company']['street']; ?></td>
        <td><?php echo $company['Company']['zip']; ?></td>
        <td><?php echo $company['Company']['city']; ?></td>
        <td>-</td>
        <td><?php echo $this->Html->link('Details','#', array('class' => 'btn')); ?></td>
    </tr>
    <?php endforeach; ?>

</table>
<p><?php echo $this->Html->link('Neues Unternehmen hinzufügen', array('controller' => 'companies', 'action' => 'add'), array('class' => 'btn')); ?></p>
