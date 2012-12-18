<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title_for_layout; ?></title>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
Configure::write('System.name','TOASTI');
Configure::write('System.author','KMC der VWI ESTIEM Hochschulgruppe TU Darmstadt e.V.');

echo $this->Html->css('bootstrap.min');
echo $this->Html->css('bootstrap-responsive.min');
echo $this->Html->css('jquery-ui');
echo $this->Html->script('jquery-1.8.3.min');
echo $this->Html->script('jquery-ui.min');
echo $this->Html->script('bootstrap.min');
echo $this->Html->script('cakebootstrap');
echo $this->Html->script('js_code');

echo $this->Html->meta('robots', 'noindex, nofollow');
echo $this->Html->meta('author', Configure::read('System.author'));

echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
</head>
  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php echo $this->Html->link(Configure::read('System.name'), array('controller' => 'pages', 'action' => 'home'), array('class' => 'brand')); ?>
          <div class="nav-collapse collapse">
         <ul class="nav">
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Unternehmen<b class="caret"></b></a>
              <ul class="dropdown-menu">
              <li><?php if($this->Permissions->check('Companies.index')) { echo $this->Html->link('Unternehmen', array('controller' => 'companies', 'action' => 'index')); } ?></li>
              <li><?php if($this->Permissions->check('Contacts.index')) { echo $this->Html->link('Kontaktpersonen', array('controller' => 'contacts', 'action' => 'index')); } ?></li>
              <li><?php if($this->Permissions->check('Cooperations.index')) { echo $this->Html->link('Kontaktaufnahmen', array('controller' => 'cooperations', 'action' => 'index')); } ?></li>
              <li><?php if($this->Permissions->check('Sectors.index')) { echo $this->Html->link('Branchen', array('controller' => 'sectors', 'action' => 'index')); } ?></li>
            </ul></li>
            <li><?php if($this->Permissions->check('Events.index')) { echo $this->Html->link('Veranstaltungen', array('controller' => 'events', 'action' => 'index')); } ?></li>
            <?php if($this->Permissions->check('Users.index') && !$this->Permissions->check('Groups.index')) { ?>
              <li><?php echo $this->Html->link('Mitglieder', array('controller' => 'users', 'action' => 'index')); ?></li>
            <?php } ?>
            <?php if($this->Permissions->check('Users.index') && $this->Permissions->check('Groups.index')) { ?>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Mitglieder<b class="caret"></b></a>
              <ul class="dropdown-menu">
              <li><?php echo $this->Html->link('Mitglieder', array('controller' => 'users', 'action' => 'index')); ?></li>
              <li><?php echo $this->Html->link('Gruppen', array('controller' => 'groups', 'action' => 'index')); ?></li>
            </ul></li>
            <?php } ?>
           </ul>

           <ul class="nav pull-right">
             <?php if(isset($current_user)) { ?>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Eingeloggt als <?php echo $current_user['User']['first_name'].' '.$current_user['User']['name'].' ('.$current_user['Group']['name'].')'; ?><b class="caret"></b></a>
                <ul class="dropdown-menu">
                <li><?php echo $this->Html->link('Profil bearbeiten', array('controller' => 'users', 'action' => 'profile')); ?></li>
                <li><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></li>
               </ul></li>
             <?php } else { ?>
               <li><?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')); ?></li>
             <?php } ?>
            </ul></div>
          </div>
      </div>
    </div>

    <div class="container">

     <?php echo $this->Session->flash('flash', array('element' => 'alert_info')); ?>

     <?php echo $this->fetch('content'); ?>

<?php if (Configure::read('debug') > 1) :?>
    <div id="cakeSession" class="cakeSession">
        <h3>Session Info:</h3>
        <?php pr($_SESSION); ?>
    </div>
<?php endif; ?>

      <hr>

      <footer>
        <p>&copy; <?php echo Configure::read('System.author'); echo $this->Html->image('vwi_estiem_logo.png', array('alt' => Configure::read('System.author'), 'align' => 'right')); ?></p>
      </footer>

    </div>

  </body>
</html>
