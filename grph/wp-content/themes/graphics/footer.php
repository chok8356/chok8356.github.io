<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package graphics
 */

?>


			<footer id="site-footer">
				<div class="container">
			    	<div class="row">
			    		<div class="col-md-12">
			    			<small id="copyright" role="contentinfo">2018 © Chemov Nikolay</small>
			    		</div>
			    	</div>
				</div>
			</footer>

		</div>

<?php wp_footer(); ?>

<link href="<?= bloginfo('template_directory'); ?>js/script.js" rel="stylesheet">

</body>
</html>
