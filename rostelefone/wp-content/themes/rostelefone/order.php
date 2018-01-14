<?php
/*
Template Name: Order
*/
?>
  <?php get_header() ?>

  	<section class="section parallax-window" id="order" data-parallax="scroll" data-image-src="<?php bloginfo('template_url');?>/img/slide-3.jpg">
      <div class="container">
        <div class="row">
              <div class="section-header" >
                <h1>Оформление заказа</h1>
                <p>Что вы хотите получить?</p>
              </div>
            </div>
        </div>
      </div>
    </section>

    <section class="order">
      <div class="container">
        <div class="row">
          <h2>Заполните эту форму, для записи на ремонт:</h2>
        </div>

        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">

          <form  class="form" action="mailer/smart.php" method="POST">
              <div class="row">
                <div class="col-md-1">
                  <label  for="#">Модель:</label>
                </div>
                 <div class="col-md-11">
                  <input class="form-input" name="user_modelphone" required type="text" placeholder="Например: iPhone SE">
                 </div>
              </div>

              <div class="row">
                <div class="col-md-11 col-md-offset-1">
                  <textarea class="form-textarea" name="user_message" required rows="5" placeholder="Опишите Вашу проблему"></textarea>
                </div>
              </div>

              <div class="row">
                <div class="col-md-1">
                  <label for="#">Имя:</label>
                </div>
                <div class="col-md-5">
                  <input class="form-input" name="user_name" required type="text" placeholder="Введите Ваше имя">
                </div>
                <div class="col-md-1">
                  <label for="#">Телефон:</label>
                </div>
                <div class="col-md-5">
                  <input class="form-input" name="user_phone" required id="phone" type="text">
                </div>
              </div>

              <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                  <button class="form-btn button" type="submit">Заказать</button>
                </div>
              </div>
          </form>

          </div>
        </div>

      </div>
    </section>

  <?php get_footer() ?>