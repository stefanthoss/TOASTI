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
Configure::write('System.author','KMC des VWI ESTIEM Darmstadt');

echo $this->Html->css('bootstrap.min');
echo $this->Html->css('bootstrap-responsive.min');
echo $this->Html->script('bootstrap.min');
echo $this->Html->script('bootstrap-collapse');
echo $this->Html->script('bootstrap-dropdown');
echo $this->Html->script('jquery-1.7.2.min.js');
echo $this->Html->script('cakebootstrap.js');

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
          <?php echo $this->Html->link(Configure::read('System.name'),'/pages/home', array('class' => 'brand')); ?>
          <div class="nav-collapse">
            <ul class="nav">
              <li><?php echo $this->Html->link('Unternehmen','/companies/index'); ?></li>
              <li><?php echo $this->Html->link('Dienstleister','#'); ?></li>
              <li><?php echo $this->Html->link('Mitglieder','/users/index'); ?></li>
            </ul>
            <ul class="nav pull-right">
              <?php if(!empty($username)) { ?>
              <li><p class="navbar-text">Eingeloggt als <?php echo $username; ?></li>
              <li class="divider-vertical"></li>
              <li><?php echo $this->Html->link('Logout','/users/logout'); ?></li>
              <?php } else { ?>
              <li><p class="navbar-text">Nicht eingeloggt</li>
              <li class="divider-vertical"></li>
              <li><?php echo $this->Html->link('Login','/users/login'); ?></li>
              <li><?php echo $this->Html->link('Registrierung','/users/add'); ?></li>
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container">

     <?php echo $this->fetch('content'); ?>

      <hr>

      <footer>
        <p>&copy; <?php echo Configure::read('System.author'); ?></p>
      </footer>

    </div>

  </body>
</html>
