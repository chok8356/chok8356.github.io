<?php
/*
Template Name: Secvices
*/
?>
  <?php get_header() ?>

  <section class="section parallax-window" id="services" data-parallax="scroll" data-image-src="<?php bloginfo('template_url');?>/img/slide-1.jpg">
      <div class="container">
        <div class="row">
              <div class="section-header" >
                <h1>Услуги</h1>
                <p>Что у вас сломалось?</p>
              </div>
            </div>
        </div>
      </div>
    </section>

    <section class="secvices">
      <div class="container">

        <div class="row">

          <?php 

            // параметры по умолчанию
            $args = array(
              'numberposts' => 8,
              'orderby'     => 'date',
              'order'       => 'DESC',
              'post_type'   => 'post',
              'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            );

            $posts = get_posts( $args );

            foreach($posts as $post){ setup_postdata($post);
                ?>
                  <div class="col-md-3 col-md-offset-0 col-sm-6">
                      <div class="secvices-block">
                        <img src=" <?php the_post_thumbnail_url();?> " alt="">
                        <div class="secvices-block_desc">
                          <p class="description"><?php the_excerpt_rss();?></p>
                          <a class="form-btn button" href="zakazat">Заказать</a>
                        </div>
                        <p><?php the_title();?></p>
                      </div>
                  </div>
                <?php
            }

            wp_reset_postdata(); // сброс

           ?>

        </div>
      </div>
    </section>

  <?php get_footer() ?>