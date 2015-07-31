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


function get_cat_slug($cat_id) {
  $cat_id = (int) $cat_id;
  $category = &get_category($cat_id);
  return $category->slug;
}

function get_page_slug($post_id) {
  $post = get_post($post_id); 
  $slug = $post->post_name;
  return $slug;
}

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
  if (get_the_ID() == 91 || get_the_ID() == 101) {
    return "dedicated";
  }
  if (get_the_ID() == 197) {
    return "intro";
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

add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );
function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

add_filter ('the_content', 'add_responsive_class');
function add_responsive_class($content){
    $content = mb_convert_encoding($content, 'HTML-ENTITIES', "UTF-8");
    $document = new DOMDocument();
    libxml_use_internal_errors(true);
    $document->loadHTML(utf8_decode($content));
    libxml_use_internal_errors(false);
    $imgs = $document->getElementsByTagName('img');
    foreach ($imgs as $img) {           
       $img->setAttribute('class','img-responsive');
    }

    $html = $document->saveHTML();
    return $html;   
}


// CONTACT // --------------------------------------------------



// BLOG // -----------------------------------------------------

add_theme_support( 'html5', array( 'search-form' ) );

add_filter('get_avatar','add_gravatar_class');
function add_gravatar_class($class) {
    $class = str_replace("class='avatar", "class='avatar img-circle", $class);
    return $class;
}

function img_responsive($content){
    return str_replace('<img class="','<img class="img-responsive ',$content);
}
add_filter('the_content','img_responsive');

add_shortcode( 'wp_caption', 'fixed_img_caption_shortcode' );
add_shortcode( 'caption', 'fixed_img_caption_shortcode' );

function fixed_img_caption_shortcode($attr, $content = null) {
     if ( ! isset( $attr['caption'] ) ) {
         if ( preg_match( '#((?:<a [^>]+>s*)?<img [^>]+>(?:s*</a>)?)(.*)#is', $content, $matches ) ) {
         $content = $matches[1];
         $attr['caption'] = trim( $matches[2] );
         }
     }
     $output = apply_filters( 'img_caption_shortcode', '', $attr, $content );
         if ( $output != '' )
         return $output;
     extract( shortcode_atts(array(
     'id'      => '',
     'align'   => 'alignnone',
     'width'   => '',
     'caption' => ''
     ), $attr));
     if ( 1 > (int) $width || empty($caption) )
     return $content;
     if ( $id ) $id = 'id="' . esc_attr($id) . '" ';
     return '<div ' . $id . 'class="wp-caption ' . esc_attr($align) . '" >'
     . do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
}

// SCRIPTS -----------------------------------------------------
add_action( 'wp_enqueue_scripts', 'mobile_script' );
function mobile_script() {
  wp_enqueue_script( 
    'mobile', 
    get_stylesheet_directory_uri() . '/js/jquery.mobile.custom.min.js', 
    array('jquery'), 
    '', 
    true 
  );
}
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
add_action( 'wp_enqueue_scripts', 'dash_script' );
function dash_script() {
  wp_enqueue_script( 
    'dash', 
    get_stylesheet_directory_uri() . '/js/dash.js', 
    array('jquery'), 
    '', 
    true 
  );
}
add_action( 'wp_enqueue_scripts', 'froog' );
function froog() {
  if(is_front_page()){
    wp_enqueue_script( 
      'froog', 
      get_stylesheet_directory_uri() . '/js/froogaloop.min.js', 
      array('jquery'), 
      '', 
      true 
    );
  }
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
add_action( 'wp_enqueue_scripts', 'sticky_svg' );
function sticky_svg() {
  if(is_front_page()){
    wp_enqueue_script( 
      'sticky_svg', 
      get_stylesheet_directory_uri() . '/js/sticky-svg.js', 
      array('jquery'), 
      '', 
      true 
    );
  }
}
