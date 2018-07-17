<?php
/*
Template Name: Homepage
*/
?>
<?php get_header()?>

<section id="page-header">
	<div class="container">
		<div class="top-page">
			<h2 id="page-header-title">Найдите</h2>
			<h3 id="page-header-tagline">Уроки, обучающие материалы и работы</h3>
		    <?php if (class_exists( 'HT_Knowledge_Base' )): ?>
		    	<?php hkb_get_template_part( 'hkb-searchbox', 'search' ); ?>
		    <?php endif;  ?>
		</div>
	</div>
</section>

<section id="homepage-features">
<div class="container">

<?php
// Get index ID
$ht_index_id = get_option('page_for_posts');

// Get post counts
$ht_count_posts = wp_count_posts();
$ht_count_posts = $ht_count_posts->publish;

// Get category number
$ht_count_category = get_terms( 'category');
if ( !is_wp_error( $ht_count_category ) ) {
	$ht_count_category = count($ht_count_category);
} else {
	$ht_count_category = 0;
}

if (class_exists( 'HT_Knowledge_Base' )):
// Get kb post counts
$ht_count_kbposts = wp_count_posts('ht_kb');
$ht_count_kbposts = $ht_count_kbposts->publish;
// Get kb category number
$ht_count_kbcategory = get_terms( 'ht_kb_category');
if ( !is_wp_error( $ht_count_kbcategory ) ) {
	$ht_count_kbcategory = count($ht_count_kbcategory);
} else {
	$ht_count_kbcategory = 0;
}
endif; 

if (class_exists( 'bbPress' )):
// Get forum topcs counts
$ht_count_bbp_topics = wp_count_posts('topic');
$ht_count_bbp_topics = $ht_count_bbp_topics->publish;

// Get forum post counts
$ht_count_bbp_reply = wp_count_posts('reply');
$ht_count_bbp_reply = $ht_count_bbp_reply->publish;
endif; 

// Get number of blocks
$ht_hpf_count = 1;
if (class_exists( 'HT_Knowledge_Base' )):
$ht_hpf_count++;
endif; 
if (class_exists( 'bbPress' )):
$ht_hpf_count++;
endif; 

// Set column variable
if ( $ht_hpf_count == 1) {
	$ht_hpf_col = 'ht-grid-12';
} elseif ( $ht_hpf_count == 2) {
	$ht_hpf_col = 'ht-grid-6';
} else {
	$ht_hpf_col = 'ht-grid-4';
}
?>
		<div class="homepage-features">
			<div class="row">

				<div class="col-md">
					<a href="<?php echo get_post_type_archive_link( 'ht_kb' ) ?>" class="demo-card-wide mdl-card mdl-shadow--2dp">
					  	<div class="mdl-card__title mdlc-title-1">
					    	<h2 class="mdl-card__title-text">
					    		<span class="mdl-chip mdl-chip--contact">
					    		    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white"><i class="fa fa-lightbulb"></i></span>
					    		    <span class="mdl-chip__text">База знаний</span>
					    		</span>
					    	</h2>
					    	<div class="mdl-card__mask"></div>
					  	</div>
					  	<div class="mdl-card__supporting-text">
					    	<?php echo $ht_count_kbposts;?> Материалы / <?php echo $ht_count_kbcategory;?> Категории
					  	</div>
					</a>
				</div>

				<div class="col-md">
					<a href="<?php echo get_post_type_archive_link( 'forum' ); ?>" class="col-md demo-card-wide mdl-card mdl-shadow--2dp">
					  	<div class="mdl-card__title mdlc-title-2">
					    	<h2 class="mdl-card__title-text">
					    		<span class="mdl-chip mdl-chip--contact">
					    		    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white"><i class="far fa-comment"></i></span>
					    		    <span class="mdl-chip__text">Форум</span>
					    		</span>
					    	</h2>
					    	<div class="mdl-card__mask"></div>
					  	</div>
					  	<div class="mdl-card__supporting-text">
					    	<?php echo $ht_count_bbp_topics;?> Тем / <?php echo $ht_count_bbp_reply;?> Записей
					  	</div>
					</a>
				</div>

				<div class="col-md">
					<?php $ht_index_id = get_option('page_for_posts'); ?>
					<a href="<?php echo get_permalink( $ht_index_id ); ?>" class="col-md demo-card-wide mdl-card mdl-shadow--2dp">
					  	<div class="mdl-card__title mdlc-title-3">
					    	<h2 class="mdl-card__title-text">
					    		<span class="mdl-chip mdl-chip--contact">
					    		    <span class="mdl-chip__contact mdl-color--teal mdl-color-text--white"><i class="fa fa-bullhorn"></i></span>
					    		    <span class="mdl-chip__text">Новости</span>
					    		</span>
					    	</h2>
					    	<div class="mdl-card__mask"></div>
					  	</div>
					  	<div class="mdl-card__supporting-text">
					    	<?php echo $ht_count_posts; ?> Записей / <?php echo $ht_count_category; ?>Категорий
					  	</div>
					</a>
				</div>

			</div>
		</div>
	</div>
</section>



<section id="homepage-widgets">
	<div class="container">
		<div class="homepage-widgets">
			<?php if ( is_active_sidebar( 'ht_homepage_widgets' ) ) { ?>
			<div class="row justify-content-start">
				<?php dynamic_sidebar( 'ht_homepage_widgets' ); ?>
			</div>	
			<?php } ?>
		</div>
	</div>
</section>

<section id="site-footer-widgets">
</section>

<?php get_footer()?>