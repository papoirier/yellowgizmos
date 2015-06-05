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


// PAGES -------------------------------------------------------

add_action('init', 'page_excerpt');
function page_excerpt() {
	add_post_type_support( 'page', 'excerpt' );
}

// big files
@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );


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


// ------------------------------------------------------------------
// CAROUSEL PLUGIN --------------------------------------------------
// ------------------------------------------------------------------
//require_once ( get_template_directory() . '/functions/cpt-bootstrap-carousel.php' );
