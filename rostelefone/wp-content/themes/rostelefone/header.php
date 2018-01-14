<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">
    <title>Ростелефон - Ремонт смартфонов</title>
    <?php wp_head(); ?>
  </head>

  <body>

  	<div class="menu">
  		<div class="container">
  			<div class="row">

  				<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">
  					<div class="logo">
  						<a href="#main" >
  							<div class="logo-slider cycle-slideshow" data-cycle-speed="500" data-cycle-timeout="1000">
                  <img src="<?php bloginfo('template_url');?>/img/logo/logo-1.png" alt="ios">
                  <img src="<?php bloginfo('template_url');?>/img/logo/logo-2.png" alt="andoid">
                  <img src="<?php bloginfo('template_url');?>/img/logo/logo-3.png" alt="windows">
                </div>
  						</a>
  					</div>
  				</div>
  				<div class="col-lg-4 hidden-md hidden-sm hidden-xs">
  					<div class="logo-text">
  						<p>Сервисный центр <?php bloginfo('title')?> <br><?php bloginfo('description') ?></p>
  					</div>
  				</div>

					<div class=" col-lg-5 col-md-9 col-sm-8 col-xs-12">
            <a href="#close" class="close-btn">&#10006;</a>

            <?php
              wp_nav_menu( array(
                'theme_location'  => '',
                'menu'            => 'top_menu',
                'container'       => 'ul',
                'container_class' => 'navigation',
                'menu_class'      => 'navigation',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
              ) );
            ?>

						<!-- <ul class="navigation" id="menu">
							<li class="navigation-list"><a href="#main" class="navigation-link" >Главная</a></li>
							<li class="navigation-list"><a href="#services" class="navigation-link">Услуги</a></li>
							<li class="navigation-list"><a href="#advantages" class="navigation-link">Преимущества</a></li>
							<li class="navigation-list"><a href="#order" class="navigation-link">Заказать</a></li>
							<li class="navigation-list"><a href="#contacts" class="navigation-link">Контакты</a></li>
						</ul> -->
					</div>

		  	  <div class=" col-lg-2 col-md-2 col-sm-3 hidden-xs">
							<div class="phone-block">
							  <a class="phone-link" href="#"><?php the_field('phone_number', 12)?></a>
							</div>
					</div>	

  			</div>
  		</div>
  	</div>

  	<div class="menu-mobile">
  		<div class="container">
  			<div class="row">
  				<a href="#" class="menu-mobile-link">Menu</a>
  			</div>
  		</div>
  	</div>