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

echo $this->Html->meta('author',Configure::read('System.author'));

echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
</head>
  <body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <?php echo $this->Html->link(Configure::read('System.name'), array('controller' => 'pages', 'action' => 'home'), array('class' => 'brand')); ?>
          <div class="nav-collapse">
            <ul class="nav">
              <li><?php echo $this->Html->link('Unternehmen', array('controller' => 'companies', 'action' => 'index')); ?></li>
              <li><?php echo $this->Html->link('Veranstaltungen', array('controller' => 'events', 'action' => 'index')); ?></li>
              <li><?php echo $this->Html->link('Mitglieder', array('controller' => 'users', 'action' => 'index')); ?></li>
            </ul>
            <ul class="nav pull-right">
              <?php if(isset($current_user)) { ?>
              <li><p class="navbar-text">Eingeloggt als <?php echo $this->Html->link($current_user['User']['full_name'], array('controller' => 'users', 'action' => 'profile')); echo ' (Gruppe '.$current_user['Group']['name'].')'; ?></li>
              <li class="divider-vertical"></li>
              <li><?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?></li>
              <?php } else { ?>
              <li><p class="navbar-text">Nicht eingeloggt</li>
              <li class="divider-vertical"></li>
              <li><?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')); ?></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

     <?php echo $this->Session->flash(); ?>

     <?php echo $this->fetch('content'); ?>

<?php if (Configure::read('debug') > 1) :?>
    <div id="cakeSession" class="cakeSession">
        <h3>Session Info:</h3>
        <?php pr($_SESSION); ?>
    </div>
<?php endif; ?>

      <hr>

      <footer>
        <p>&copy; <?php echo Configure::read('System.author'); ?></p>
      </footer>

    </div>

  </body>
</html>
