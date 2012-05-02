<?php $this->set('title_for_layout','Startseite'); ?>
      <div class="hero-unit">
          <h2>Hier ist kommt TOASTI, das Tool für alle Fälle.</h2>
      </div>

      <div class="row">
        <div class="span4">
          <h2>Unternehmen</h2>
           <p>Hier gibt es Informationen über Unternehmen und Kontakte.</p>
          <p><?php echo $this->Html->link('Mehr','/companies/index', array('class' => 'btn')); ?></p>
        </div>
        <div class="span4">
          <h2>Dienstleister</h2>
           <p>Hier gibt es Informationen über Dienstleister.</p>
<div class="alert">
Noch nicht verfügbar.
</div>
       </div>
        <div class="span4">
          <h2>Mitgliederdatenbank</h2>
           <p>Informationen über alle Mitglieder.</p>
<div class="alert">
Noch nicht verfügbar.
</div>
       </div>
      </div>
