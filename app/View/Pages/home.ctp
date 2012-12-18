<?php $this->set('title_for_layout','TOASTI-Startseite'); ?>
      <div class="hero-unit">
          <h2>TOASTI - TOol for All STrategic Information</h2>
	  <p>TOASTI ist die neue Datenbank für den VWI|ESTIEM Darmstadt. Hier sind alle Informationen zu finden, die Unternehmenskontakte, Dienstleister oder die Mitglieder betreffen.</p>
	  <p>Bei Problemen, Fehlermeldungen oder Wünschen einfach eine E-Mail an <?php echo $this->Html->link('kmc@vwi-darmstadt.de', 'mailto:kmc@vwi-darmstadt.de', array('target' => '_blank')); ?> schicken.</p>
      </div>

      <div class="row">
        <div class="span4">
          <h2>Unternehmen</h2>
           <p>Hier gibt es Informationen über Unternehmenskontakte.</p>
           <p><?php echo $this->Html->link('Mehr', array('controller' => 'companies', 'action' => 'index'), array('class' => 'btn')); ?></p>
        </div>
        <div class="span4">
          <h2>Dienstleister</h2>
           <p>Hier gibt es Informationen über Dienstleister.</p>
           <div class="alert">Bald verfügbar.</div>
       </div>
        <div class="span4">
          <h2>Mitglieder</h2>
           <p>Die Mitgliederdatenbank des Vereins.</p>
           <p><?php echo $this->Html->link('Mehr', array('controller' => 'users', 'action' => 'index'), array('class' => 'btn')); ?></p>
       </div>
      </div>
