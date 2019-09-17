<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-reboot.min.css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick-theme.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<!-- <div class="wrapper"> -->

			<!-- header -->
			<section class="menu fixed-top">
			  <div class="container">
			    <nav class="navbar navbar-expand-lg"><a class="navbar-brand" href="home.html"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/brand/logo.png"></a>
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
			          <li class="nav-item"><a class="nav-link active" href="home.html">Inicio</a></li>
			          <li class="nav-item"><a class="nav-link" href="article.html">Prevención</a></li>
			          <li class="nav-item"><a class="nav-link" href="article.html">Actualidad</a></li>
			          <li class="nav-item"><i class="material-icons">warning</i><a class="nav-link" href="article.html">Virus al ataque</a></li>
			          <li class="nav-item"><a class="nav-link" href="about.html">Sobre nosotros</a></li>
			          <li class="nav-item"><a class="nav-link" href="contact.html">Contáctanos</a></li>
			        </ul>
			      </div>
			    </nav>
			  </div>
			</section>
			<!-- <header class="header clear" role="banner">
			</header> -->
			<!-- /header -->
