<?php $this->set('title_for_layout','Startseite'); ?>
      <div class="row">
        <div class="span8"><div class="hero-unit">
          <h2>Hier ist kommt TOASTI, das Tool für alle Fälle.</h2>
        </div>
        </div>

        <div class="span4">
<form class="well">
          <h2>Login</h2>
          <input type="text" placeholder="E-Mail">
          <input type="password" placeholder="Passwort">
          <button type="submit" class="btn">Einloggen</button>  
</form>
        </div>
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
