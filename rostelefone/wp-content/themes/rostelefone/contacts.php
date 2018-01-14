<?php
/*
Template Name: Contacts
*/
?>
  <?php get_header() ?>

  	<section class="section parallax-window" id="contacts" data-parallax="scroll" data-image-src="<?php bloginfo('template_url');?>/img/slide-5.jpg" id="services">
      <div class="container">
        <div class="row">
              <div class="section-header" >
                <h1>Контакты</h1>
                <p>Как к нам попасть?</p>
              </div>
            </div>
        </div>
      </div>
    </section>

    <section class="contacts">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Сервисный центр РОСТЕЛЕФОН</h2>
              <p>
              <strong>Телефон:</strong><?php the_field('phone_number', 12)?><br>
              <strong>Наш адрес:</strong> <?php the_field('adress', 12)?><br>
              <strong>Станция метро:</strong> <?php the_field('metro', 12)?><br>
              <strong>Часы работы:</strong> <?php the_field('open_hours', 12)?></p>
              <h3>Мы починим Ваш телефон!</h3>
          </div>
          <div class="col-md-6">
            <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d9506.16147356335!2d30.26626451271972!3d59.9416949391497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x46963125a7c1d999%3A0xcd035fbf4fb75b5b!2z0JzQtdGC0YDQviDQktCw0YHQuNC70LXQvtGB0YLRgNC-0LLRgdC60LDRjywg0KHQsNC90LrRgi3Qn9C10YLQtdGA0LHRg9GA0LM!3m2!1d59.9434627!2d30.2799572!4m5!1s0x4696312642854469%3A0xa9a04cc939eb22cc!2zMTEt0Y8g0LvQuNC9LiDQktCw0YHQuNC70YzQtdCy0YHQutC-0LPQviDQntGB0YLRgNC-0LLQsCwgMjQsINCh0LDQvdC60YIt0J_QtdGC0LXRgNCx0YPRgNCzLCAxOTkxNzg!3m2!1d59.939954!2d30.275091!5e0!3m2!1sru!2sru!4v1512824536051" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>

  <?php get_footer() ?>