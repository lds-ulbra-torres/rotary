<!DOCTYPE html>
<html lang="en">
<head>

  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet"  href="<?php echo base_url('includes/css/materialize.css')?>" media="screen,projection"/>
  <link type="text/css" rel="stylesheet"  href="<?php echo base_url('includes/css/style.css')?>" media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta charset="utf-8">
  <title>Rotary</title>
</head>
<body class="grey lighten-4">

  <nav class="colorMenu">
    <div class="nav-wrapper container">
      <a href="#!" class="brand-logo"><img src="<?php echo base_url('includes/imgs/Logo.png'); ?>" class="responsive-img" style="width: 300px;"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?php echo base_url(''); ?>" class="collorTextBtnMenu"><strong>Home</strong></a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="sass.html"  class="collorTextBtnMenu">Sass</a></li>
        <li><a href="badges.html"  class="collorTextBtnMenu">Components</a></li>
        <li><a href="collapsible.html"  class="collorTextBtnMenu">Javascript</a></li>
        <li><a href="mobile.html"  class="collorTextBtnMenu">Mobile</a></li>
      </ul>
    </div>
  </nav>
  <div>
    <?php echo $contents ?>
  </div>
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url('includes/js/materialize.js')?>"></script>
</body>
</html>