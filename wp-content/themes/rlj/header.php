<!doctype html>
  <html class="no-js" <?php language_attributes(); ?>>
  <head>
  	<meta charset="<?php bloginfo('charset'); ?>">
  	<!--[if IE]>
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<![endif]-->
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title><?php wp_title( '|', true, 'right' ); ?></title>
  	<meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
  	<meta name="description" content="<?php bloginfo('description'); ?>" />
  	<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/dist/images/favicon.png">
  	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
    <?php wp_head(); ?>
  	<!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/src/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body <?php body_class(); ?>>
    <?php get_template_part( 'partials/svg' ); ?>
  	<div class="site-container">

  		<header class="header">
  			<div class="header-logo">
          <a href="/">
            <img src="<?php bloginfo('template_directory'); ?>/dist/images/logo-white.svg" class="white-logo">
            <img src="<?php bloginfo('template_directory'); ?>/dist/images/logo.svg" class="primary-logo">
          </a>
        </div>
    		<nav class="main-nav">
          <a href="" class="btn-mobile">
            <span class="btn-mobile--bar"></span>
            <span class="btn-mobile--bar"></span>
            <span class="btn-mobile--bar"></span>
          </a>
    			<?php wp_nav_menu( array('menu'=>'2') ); ?>
    		</nav>
  		</header>
