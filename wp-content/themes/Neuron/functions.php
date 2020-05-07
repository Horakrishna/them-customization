
<?php


if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'neuron_setup' ) ) :
	
	function neuron_setup() {
		
		load_theme_textdomain( 'neuron', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'neuron' ),
			)
		);
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'neuron_setup' );


function neuron_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer One', 'neuron' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add Footer widgets here.', 'neuron' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Two', 'neuron' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add Footer Two widgets here.', 'neuron' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Three', 'neuron' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add Footer Three widgets here.', 'neuron' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Four', 'neuron' ),
			'id'            => 'footer-4',
			'description'   => esc_html__( 'Add Footer Four widgets here.', 'neuron' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'neuron_widgets_init' );

function neuron_scripts() {
	wp_enqueue_style( 'animate-css', get_template_directory_uri().'/assets/css/animate.min.css', array(), _S_VERSION ,'all');
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/fonts/font-awesome/css/font-awesome.min.css', array(), _S_VERSION ,'all');
	wp_enqueue_style( 'carousel-css', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), _S_VERSION ,'all');
	wp_enqueue_style( 'bootsnav-css', get_template_directory_uri().'/assets/css/bootsnav.css', array(), _S_VERSION ,'all');
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/assets/bootstrap/css/bootstrap.min.css', array(), _S_VERSION ,'all');
	wp_enqueue_style( 'main-css', get_stylesheet_uri());

	wp_enqueue_script( 'neuron-bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'neuron-bootsnav', get_template_directory_uri() . '/assets/js/bootsnav.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'neuron-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'neuron-wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'neuron-ajaxchimp', get_template_directory_uri() . '/assets/js/ajaxchimp.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'neuron-ajaxchimp-config', get_template_directory_uri() . '/assets/js/ajaxchimp-config.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'neuron-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'neuron_scripts' );

add_action( 'init', 'neuron_theme_custom_post' );

function neuron_theme_custom_post(){
	register_post_type( 'Sliders',
	 array( 
	 	'labels' =>array(
	 		'name' => __('Sliders'),
	 		'singular_name' =>__('Slider'),
	 	),
	 	'supports' =>array('title','editor','custom-fields','thumbnail','page-attributes'),
	 	'public' => true,
	 ) );
	register_post_type( 'Feature',
	 array( 
	 	'labels' =>array(
	 		'name' => __('Feature'),
	 		'singular_name' =>__('Feature'),
	 	),
	 	'supports' =>array('title','editor','thumbnail','page-attributes'),
	 	'public' => true,
	 ) );
	 register_post_type( 'Service',
	 array( 
	 	'labels' =>array(
	 		'name' => __('Service'),
	 		'singular_name' =>__('Service'),
	 	),
	 	'supports' =>array('title','editor','custom-fields','thumbnail','page-attributes'),
	 	'public' => true,
	 ) );
}
 
add_filter( 'widget_text', 'do_shortcode');
function footer_post_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => '3',
    ), $atts) );
     
    $q = new WP_Query(
        array(
        	'posts_per_page' => $count,
        	'post_type' => 'post'
        ));      
         
    $list = '<ul>';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $list .= '
        		<li>
					'.get_the_post_thumbnail($idd, 'thumbnail').'
					<p><a href="'.get_permalink().'">'.get_the_title().'</a></p>
					<span>'.get_the_date('d F Y', $idd).'</span>
										
				</li>
        ';        
    endwhile;
    $list.= '</ul>';
    wp_reset_query();
    return $list;
}
add_shortcode('post_list', 'footer_post_shortcode');