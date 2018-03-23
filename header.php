<!DOCTYPE html>
<html <?php language_attributes(); ?>>

  <head>

    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
  
    <?php wp_head();?>

  </head>

  <body <?php body_class(); ?>>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?php echo home_url('/')?>"><?php bloginfo('name'); ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        	<?php 
				wp_nav_menu(array(
					'menu' => 'Main Menu',
					'theme_location'=> 'primary_menu',
					'container' => 'div',
					'container_class' => 'collapse navbar-collapse',
					'container_id' => 'navbarResponsive',
					'menu_class' => 'navbar-nav ml-auto',
					'depth' => '3',
					'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
					'walker' => new WP_Bootstrap_Navwalker(),
				))
			 ?>
      </div>
    </nav>
