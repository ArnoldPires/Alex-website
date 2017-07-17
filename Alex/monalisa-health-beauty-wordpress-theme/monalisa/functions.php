<?php
/**
 * Monalisa functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Monalisa
 */

if ( ! function_exists( 'monalisa_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function monalisa_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Monalisa, use a find and replace
	 * to change 'monalisa' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'monalisa', get_template_directory() . '/languages' );

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
	add_image_size( 'monalisa_image_770_510', 770,510, true );
	add_image_size( 'monalisa_image_1280_500', 1280,500, true );
	add_image_size( 'monalisa_image_870_984', 870,984, true );
	add_image_size( 'monalisa_image_200_200', 200,200, true );
	add_image_size( 'monalisa_image_1200_800', 1200,800, true );
	add_image_size( 'monalisa_image_210_90', 210,90, true );
	add_image_size( 'monalisa_image_840_430', 840,430, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'monalisa' ),
	) );

	// Custom Logo
	add_theme_support( 'custom-logo' );
	
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
	
	add_theme_support( 'post-formats', array(
		'audio',
		'video',
	) );
	
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'monalisa_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
	add_editor_style( array( 'assets/css/editor-style.css', monalisa_google_fonts_url() ) );
}
endif;
add_action( 'after_setup_theme', 'monalisa_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function monalisa_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'monalisa_content_width', 640 );
}
add_action( 'after_setup_theme', 'monalisa_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function monalisa_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'monalisa' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'monalisa' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'monalisa_widgets_init' );

/**
 * register google fonts
 */
function monalisa_google_fonts_url() {
	$fonts_url = '';
	
	/* Translators: If there are characters in your language that are not
	* supported by Source Sans Pro, translate this to 'off'. Do not translate
	* into your own language.
	*/
	$lato = esc_html_x( 'on', 'Lato font: on or off', 'monalisa' );

	/* Translators: If there are characters in your language that are not
	* supported by Lato, translate this to 'off'. Do not translate
	* into your own language.
	*/
	
	$montserrat = esc_html_x( 'on', 'Montserrat font: on or off', 'monalisa' );
	
	if ( 'off' !== $lato || 'off' !== $montserrat ) {
	$font_families = array();
	 
	if ( 'off' !== $lato ) {
	$font_families[] = 'Lato:300,300i,400,400i,700,700i';
	}
	 
	
	if ( 'off' !== $montserrat ) {
	$font_families[] = 'Montserrat:400,700';
	}
	 
	$query_args = array(
	'family' => urlencode( implode( '|', $font_families ) ),
	'subset' => urlencode( 'latin,latin-ext' ),
	);

	$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}
	 
	return esc_url_raw( $fonts_url );	
}

function monalisa_main_menu() {
		wp_nav_menu( array(
		'theme_location'    => 'menu-1',
		'depth'             => 5,
		'container'         => false,
		'menu_class'        => 'nav navbar-nav navbar-right',
		'fallback_cb'       => 'monalisa_navwalker::fallback',
		
		)
	); 	
}

/**
 * Enqueue scripts and styles.
 */
function monalisa_scripts() {
	
	//google font
	wp_enqueue_style( 'monalisa-google-fonts', monalisa_google_fonts_url(), array(), null );	
	wp_enqueue_style('bootstrap' , get_template_directory_uri(). '/assets/bootstrap/css/bootstrap.min.css');	
	wp_enqueue_style('font-awesome.min' , get_template_directory_uri(). '/assets/fonts/font-awesome.min.css');	
	wp_enqueue_style('owl.carousel' , get_template_directory_uri(). '/assets/owlcarousel/css/owl.carousel.css');	
	wp_enqueue_style('owl.theme' , get_template_directory_uri(). '/assets/owlcarousel/css/owl.theme.css');	
	wp_enqueue_style('prettyPhoto' , get_template_directory_uri(). '/assets/css/prettyPhoto.css');	
	wp_enqueue_style('flexslider' , get_template_directory_uri(). '/assets/css/flexslider.css');	
	wp_enqueue_style('animate' , get_template_directory_uri(). '/assets/css/animate.css');	
	wp_enqueue_style('monalisa-main-style' , get_template_directory_uri(). '/assets/css/style.css');	
	wp_enqueue_style( 'monalisa-style', get_stylesheet_uri() );

	// Load JS Files
	wp_enqueue_script( 'html5shiv', get_template_directory_uri() . '/js/html5shiv.min.js', array(), '3.7.2' );	
	wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' ); 	
	wp_enqueue_script( 'respond', get_template_directory_uri() . '/js/respond.min.js', array(), '1.4.2' );
	wp_script_add_data( 'respond', 'conditional', 'lt IE 9' ); 
	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '659812', true );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/assets/js/modernizr-2.8.3.min.js', array('jquery'), '659812', true );
	wp_enqueue_script( 'jquery.inview.min', get_template_directory_uri() . '/assets/js/jquery.inview.min.js', array('jquery'), '659812', true );
	wp_enqueue_script( 'jquery.flexslider-min', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js', array('jquery'), '659812', true );
	wp_enqueue_script( 'jquery.prettyPhoto', get_template_directory_uri() . '/assets/js/jquery.prettyPhoto.js', array('jquery'), '659812', true );
	wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/assets/owlcarousel/js/owl.carousel.min.js', array('jquery'), '659812', true );
	wp_enqueue_script( 'scrolltopcontrol', get_template_directory_uri() . '/assets/js/scrolltopcontrol.js', array('jquery'), '659812', true );
	wp_enqueue_script( 'wow.min', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), '659812', true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array('jquery'), '659812', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'monalisa_scripts' );

function monalisa_wp_kses($val){
	return wp_kses($val, array(
	
	'p' => array(),
	'span' => array(),
	'div' => array(),
	'strong' => array(),
	'b' => array(),
	'br' => array(),
	'h1' => array(),
	'h2' => array(),
	'h3' => array(),
	'h4' => array(),
	'h5' => array(),
	'h6' => array(),
	'a'=> array('href' => array(),'target' => array()),
	'iframe'=> array('src' => array(),'height' => array(),'width' => array()),
	
	), '');
}

/*---------------------------------------------
 Initialising Visual shortcode editor
----------------------------------------------*/ 
if (class_exists('WPBakeryVisualComposerAbstract')) {
 function monalisa_requireVcExtend(){
  include_once( get_template_directory().'/vc_extend/extend_vc.php');  
 }
 add_action('init', 'monalisa_requireVcExtend',2);
}

// modify search widget
function monalisa_my_search_form( $form ) {
	$form = '
		<div class="form-group search-input">
			<div class="search_form">
				<form role="search" method="get" id="searchform" class="searchform" action="' . esc_url(home_url( '/' )) . '" >
				<input type="text" value="' . esc_attr(get_search_query()) . '" name="s" id="s" class="form-control search_field" placeholder="' . esc_attr__('Search...' , 'monalisa') .'">
				</form>
			</div>
		</div>
        ';
	return $form;
}
add_filter( 'get_search_form', 'monalisa_my_search_form' );

// comment list modify

function monalisa_comments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>

<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
	<div class="single_comment">
		<div class="media">
			<div class="comment_avatar">
				<?php echo get_avatar( $comment, 70 ); ?>
			</div>

			<div class="media-body text-left comment_single">
				
				<h5 class="media-heading"><?php comment_author_link() ?> <span><?php echo esc_html(' - '); echo esc_html(get_comment_date('F j, Y')); ?> <?php echo esc_html(get_comment_date('g:i')); ?></span> <div class="creply_link"> <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?></div></h5>
				<?php if ($comment->comment_approved == '0') : ?>
				<p><em><?php esc_html_e('Your comment is awaiting moderation.','monalisa'); ?></em></p>
				<?php endif; ?>
				 <?php comment_text(); ?>							
			</div>
		</div>
	</div>				
</li>


<?php } 

// comment box title change
add_filter( 'comment_form_defaults', 'monalisa_remove_comment_form_allowed_tags' );
function monalisa_remove_comment_form_allowed_tags( $defaults ) {

	$defaults['comment_notes_after'] = '';
	$defaults['comment_notes_before'] = '';
	return $defaults;

}

function monalisa_comment_reform ($arg) {

$arg['title_reply'] = esc_html__('Write your comment Here','monalisa');
$arg['comment_field'] = '<div class="row"><div class="form-group col-md-12"><textarea id="comment" class="comment_field form-control" name="comment" cols="77" rows="3" placeholder="'. esc_html__("Write your Comment", "monalisa").'" aria-required="true"></textarea></div></div>';


return $arg;

}
add_filter('comment_form_defaults','monalisa_comment_reform');

// comment form modify

function monalisa_modify_comment_form_fields($fields){
	$commenter = wp_get_current_commenter();
	$req	   = get_option( 'require_name_email' );

	$fields['author'] = '<div class="row"><div class="form-group col-md-4"><input type="text" name="author" id="author" value="'. esc_attr( $commenter['comment_author'] ) .'" placeholder="'. esc_attr__("Your Name *", "monalisa").'" size="22" tabindex="1"'. ( $req ? 'aria-required="true"' : '' ).' class="input-name form-control" /></div>';

	$fields['email'] = '<div class="form-group col-md-4"><input type="text" name="email" id="email" value="'. esc_attr( $commenter['comment_author_email'] ) .'" placeholder="'.esc_attr__("Your Email *", "monalisa").'" size="22" tabindex="2"'. ( $req ? 'aria-required="true"' : '' ).' class="input-email form-control"  /></div>';
	
	$fields['url'] = '<div class="form-group col-md-4"><input type="text" name="url" id="url" value="'. esc_attr( $commenter['comment_author_url'] ) .'" placeholder="'. esc_attr__("Website", "monalisa").'" size="22" tabindex="2"'. ( $req ? 'aria-required="false"' : '' ).' class="input-url form-control"  /></div></div>';

	return $fields;
}
add_filter('comment_form_default_fields','monalisa_modify_comment_form_fields');


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
require get_template_directory() . '/inc/navwalker.php';
require get_template_directory() . '/inc/monalisa_metabox.php';
require get_template_directory() . '/inc/custom-functions.php';
require get_template_directory() . '/inc/theme-options.php';
require get_template_directory() . '/inc/custom_css.php';
require get_template_directory() . '/inc/plugin-activator.php';
require get_template_directory() . '/inc/required-plugin.php';
