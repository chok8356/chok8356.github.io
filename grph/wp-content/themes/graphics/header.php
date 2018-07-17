<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package graphics
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>

	
	<link href="<?= bloginfo('template_directory'); ?>/css/bootstrap-grid.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<!-- 	<link href="<?= bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">
	<link href="<?= bloginfo('template_directory'); ?>/css/bbpress.css" rel="stylesheet">
	<link href="<?= bloginfo('template_directory'); ?>/css/ht-kb.css" rel="stylesheet"> -->

	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

	<link href="<?= bloginfo('template_directory'); ?>/style.css" rel="stylesheet">

</head>

<body <?php body_class(); ?> >

	<div class="container-fluid">
		<div class="row">
			<div class="demo-ribbon mdl-color--indigo"></div>
		</div>
	</div>

		<div id="site-container" class="site-container">

			<header id="site-header">
				<div class="container">
					<div class="top-nav">
						<div class="row justify-content-between align-items-center">
							<div class="col-md-auto">
								<div id="logo">
								      <a title="<?php bloginfo( 'name' ); ?>" href="<?php echo home_url(); ?>">
								          <img alt="<?php bloginfo( 'name' ); ?>" src="<?php echo my_theme_logo(); ?>" />
								              <?php if ( is_front_page() ) { ?>
								                  <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
								              <?php } else { ?>
								                  <span class="site-title"><?php bloginfo( 'name' ); ?></span>
								              <?}?>
								      </a>
								  </div>
							</div>
							<div class="col-md-auto">
								<?php if ( has_nav_menu( 'primary-nav' ) ) { ?>
								        <!-- #primary-nav -->
								        <nav id="nav-primary" role="navigation" itemtype="http://schema.org/SiteNavigationElement" itemscope="itemscope">
								            <button id="ht-nav-toggle"><span><?php _e('Menu','helpguru') ?></span></button>
								            <?php wp_nav_menu( array('theme_location' => 'primary-nav', 'menu_id' => false, 'menu_class' => false, 'container_id' => 'nav-primary-menu', 'container_class' => '' )); ?>
								        </nav>
								        <!-- /#primary-nav -->
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</header>
