<?php 

// MISC SETUP --------------------------------------------------

// hide admin bar when logged in on front-end
show_admin_bar( false );

// remove wordpress generated meta tags
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'feed_links', 2 ); 
remove_action('wp_head', 'feed_links_extra', 3 );
remove_action('wp_head', 'rel_canonical');
remove_action( 'begin_fetch_post_thumbnail_html', '_wp_post_thumbnail_class_filter_add' );


// PAGES -------------------------------------------------------

add_action('init', 'page_excerpt');
function page_excerpt() {
	add_post_type_support( 'page', 'excerpt' );
}

// big files
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

// print page slug
function print_the_slug() {
  if (get_the_ID() == 17) {
    return "publishers";
  }
  if (get_the_ID() == 18) {
    return "advertisers";
  }
  if (get_the_ID() == 19) {
    return "readers";
  }
}


// THUMBNAILS --------------------------------------------------

// post thumbnails
add_theme_support( 'post-thumbnails' );

add_filter( 'post_thumbnail_html', 'remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'remove_width_attribute', 10 );

function remove_width_attribute( $html ) {
   $html = preg_replace( '/(width|height)="\d*"\s/', "", $html );
   return $html;
}

add_filter ('the_content', 'add_responsive_class');
function add_responsive_class($content){
    $content = mb_convert_encoding($content, 'HTML-ENTITIES', "UTF-8");
    $document = new DOMDocument();
    libxml_use_internal_errors(true);
    $document->loadHTML(utf8_decode($content));

    $imgs = $document->getElementsByTagName('img');
    foreach ($imgs as $img) {           
       $img->setAttribute('class','img-responsive');
    }

    $html = $document->saveHTML();
    return $html;   
}

// CONTACT -----------------------------------------------------

add_filter('wpcf7_form_elements', 'my_wpcf7_dropdown_form');
function my_wpcf7_dropdown_form($html) {
	$text = 'Please select...';
	$html = str_replace('<option value="">---</option>', '<option value="">' . $text . '</option>', $html);
	return $html;
}

// SCRIPTS -----------------------------------------------------
add_action( 'wp_enqueue_scripts', 'bootstrap_script' );
function bootstrap_script() {
	wp_enqueue_script( 
		'bootstrap', 
		get_stylesheet_directory_uri() . '/js/bootstrap.min.js', 
		array('jquery'), 
		'', 
		true 
	);
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );
function my_scripts() {
  wp_enqueue_script( 
    'scripts', 
    get_stylesheet_directory_uri() . '/js/scripts.js', 
    array('jquery'), 
    '', 
    true 
  );
} 
//add_action( 'wp_enqueue_scripts', 'sticky_svg' );
function sticky_svg() {
  wp_enqueue_script( 
    'sticky_svg', 
    get_stylesheet_directory_uri() . '/js/sticky-svg.js', 
    array('jquery'), 
    '', 
    true 
  );
}
add_action( 'wp_enqueue_scripts', 'modernizr' );
function modernizr() {
  wp_enqueue_script( 
    'modernizr', 
    'http://modernizr.com/downloads/modernizr-latest.js', 
    array('jquery'), 
    '', 
    true 
  );
}
add_action( 'wp_enqueue_scripts', 'ajax' );
function ajax() {
  wp_enqueue_script( 
    'ajax', 
    get_stylesheet_directory_uri() . '/js/ajax.js', 
    array('jquery'), 
    '', 
    true 
  );
}


// AJAX
// add_action( 'wp_enqueue_scripts', 'ajaxxx' );
// function ajaxxx() {
  
//   wp_enqueue_script( 'ajax-pagination', get_stylesheet_directory_uri() . '/js/ajax.js', array( 'jquery' ), '1.0', true );
//   //wp_localize_script( 'ajax-pagination', 'ajaxpagination', array('ajaxurl' => admin_url( 'admin-ajax.php' )));
//   global $wp_query;
//   wp_localize_script( 'ajax-pagination', 'ajaxpagination', array(
//   'ajaxurl' => admin_url( 'admin-ajax.php' ),
//   'query_vars' => json_encode( $wp_query->query )
//   ));
// }

// //
// add_action( 'wp_ajax_nopriv_ajax_pagination', 'my_ajax_pagination' );
// add_action( 'wp_ajax_ajax_pagination', 'my_ajax_pagination' );
// function my_ajax_pagination() {
//   echo get_the_title();
//   die();
// }




// ------------------------------------------------------------------
// CAROUSEL PLUGIN --------------------------------------------------
// ------------------------------------------------------------------
require_once ( get_template_directory() . '/functions/cpt-bootstrap-carousel.php' );
