<?php
/**
 * Harpoon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Harpoon
 */

if ( ! function_exists( 'harpoon_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function harpoon_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Harpoon, use a find and replace
		 * to change 'harpoon' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'harpoon', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'harpoon' ),
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
		add_theme_support( 'custom-background', apply_filters( 'harpoon_custom_background_args', array(
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
add_action( 'after_setup_theme', 'harpoon_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function harpoon_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'harpoon_content_width', 640 );
}
add_action( 'after_setup_theme', 'harpoon_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function harpoon_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'harpoon' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'harpoon' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'harpoon_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function harpoon_scripts() {

	 wp_enqueue_style('style-bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', false, filemtime(get_stylesheet_directory() . '/css/bootstrap.min.css'), 'all');

	wp_enqueue_style( 'harpoon-style', get_stylesheet_uri() );

	wp_enqueue_script( 'harpoon-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'harpoon-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script('jq-js', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array ( 'jquery' ), 1.1, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'harpoon_scripts' );

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


 add_shortcode( 'portfolio', 'display_custom_post_portfolio' );

    function display_custom_post_portfolio(){
        $args = array(
            'post_type' => 'Portfolio', 
            'post_status' => 'publish'
        );

        $string = '';
        $query = new WP_Query( $args );
        if( $query->have_posts() ){

        	
            $string .= '<div class="row">';
            while( $query->have_posts() ){
                $query->the_post();
				
				$string .= '<div class="col-lg-6 p-5 bgc">';
				$string .= '<img src="' . get_field( 'logo' ) .  '"">';
                $string .= '<p class="portfolio-title py-2">' . get_field('title') .  '</p>';
                $string .= '<p class="portfolio-description pt-2">' . get_field( 'description' ) .  '</p>'; 
 				$string .= '<a class="view-more-button" href=" ' . get_field('button') . ' " target="_blank">VIEW MORE</a>'; 

                $string .= '</div>';
				 
            }
            $string .= '</div>';
        }
        wp_reset_postdata();
        return $string;
    }

 add_shortcode( 'advisors', 'display_custom_post_advisors' );

    function display_custom_post_advisors(){
        $args = array(
            'post_type' => 'Advisors', 
            'post_status' => 'publish'
        );

        $string = '';
        $query = new WP_Query( $args );
        if( $query->have_posts() ){

        	
            $string .= '<div class="row">';
            while( $query->have_posts() ){
                $query->the_post();
				
				$string .= '<div class="col-lg-6 py-3">';
				$string .= '<div class="row">';
				$string .= '<div class="col-lg-4 col-md-4">';
				$string .= '<img class="rounded-circle" src="' . get_field( 'picture' ) .  '"">';
				$string .= '</div>';

				$string .= '<div class="col-lg-8 col-md-8">';
              
                $string .= '<ul style="list-style-position: inside; padding-left:0;" class="no-gutters">';

                $string .= '<li style="list-style: none;"><h3>' . get_field('name') .  '</h3></li>';
                $string .= '<li><p class="d-inline p-12">' . get_field( 'position_1' ) .  '</p></li>'; 
 				$string .= '<li><p class="d-inline p-12">' . get_field( 'position_2' ) .  '</p></li>'; 
 				$string .= '<li><p class="d-inline p-12">' . get_field( 'position_3' ) .  '</p></li>'; 
 				$string .= '<li><p class="d-inline p-12">' . get_field( 'position_4' ) .  '</p></li>'; 
 				$string .= '</div>';
 				$string .= '</div>';
                $string .= '</div>';
				 
            }
            $string .= '</div>';
        }
        wp_reset_postdata();
        return $string;
    }    

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

/**
 * ACF
 */
define('ACF_EARLY_ACCESS','5');