  	<footer>
  		<div class="container">
  			<div class="row">
  				Разработка сайта CHEMOV.N
  			</div>
  		</div>
  	</footer>


    <!-- Маска -->
    <script>
    	jQuery(function($){
    	   $("#phone").mask("+7 (999) 999-99-99");
    	});
    </script>

    <!-- Форма -->
    <script>
    	$('form').submit(function(event) {
    		event.preventDefault();
    			$.ajax({
    			type: "POST",
    			url: "<?php bloginfo('template_url');?>/mailer/smart.php",
    			data: $(this).serialize()
    		}).done(function() {
    			$(this).find("input").val("");
    			alert("Сообщение успешно отправлено");
    			$("form").trigger("reset");
    		});
    		return false;
    	});
    </script>
    <?php wp_footer(); ?>
  </body>
</html>
