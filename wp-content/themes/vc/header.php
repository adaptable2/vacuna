<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link el="icon" type="image/x-icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">

    <?php wp_head(); ?>
  </head>
  <body>
    <section class="menu fixed-top">
      <div class="container">
        <nav class="navbar navbar-expand-lg"><a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/logo.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><i class="material-icons">menu</i></button>
          <div class="navbar-collapse collapse" id="navbarNavDropdown">
            <!--ul.navbar-nav.mr-auto
            li.nav-item.active
              a.nav-link(href='#')
                | Home 
                span.sr-only (current)
            li.nav-item
              a.nav-link(href='#') Features
            li.nav-item
              a.nav-link(href='#') Pricing
            -->
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link active" href="<?php echo get_home_url(); ?>">Inicio</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Prevención</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Actualidad</a></li>
              <li class="nav-item"><i class="material-icons">warning</i><a class="nav-link" href="#">Virus al ataque</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo get_home_url();?>/sobre-nosotros">Sobre nosotros</a></li>
              <li class="nav-item"><a class="nav-link" href="<?php echo get_home_url();?>/contacto">Contáctanos</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </section>