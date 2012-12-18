<?php $this->set('title_for_layout','Startseite'); ?>
      <div class="hero-unit">
          <h2>TOASTI - TOol for All STrategic Information</h2>
	  <p>TOASTI ist die neue Datenbank für den VWI|ESTIEM Darmstadt. Hier sind alle Informationen zu finden, die Unternehmenskontakte, Dienstleister oder Kontakte betreffen.<br /></p>
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
           <div class="alert">Bald verfügbar.</div>
       </div>
      </div>
