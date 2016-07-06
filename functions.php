<?php

define("THEME_DIR", get_template_directory_uri());


// Remover generator meta tag
remove_action('wp_head', 'wp_generator');

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );


/*  Menus
----------------------------------------------------------------------------*/

function register_my_menus() {
  register_nav_menus(
    array(
      'menu-left' => __( 'Left Header Menu' ),
      'menu-right' => __( 'Right Header Menu' ),
      'footer-menu' => __( 'Footer Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


/*  Images 
----------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );

add_image_size( 'hero-home', 740, 384, true, array( 'left', 'top' ));
add_image_size( 'hero-sub', 555, 384, true, array( 'left', 'top' ));

add_image_size( 'content-box', 552, 384, true, array( 'left', 'top' ));



/*  Button Shortcode
----------------------------------------------------------------------------*/
function charlestonridge_button($atts, $content = null ) {
  extract( shortcode_atts( array( 'link' => '#', 'class' => '', 'blank' => 'false' ), $atts ) );
  $btn_base_class = 'button';
  if (strpos($class,'basic') !== false) {
    $btn_base_class = 'button';
  }

  $blank_link = '';
  if ( $blank == 'true' )
      $blank_link = "target='_blank'";

  return '<a href='.$link.' '.$blank_link.' class="'. $btn_base_class .' '. $class .'">'.do_shortcode( $content ).'</a>';
}
add_shortcode('button', 'charlestonridge_button');



/*  Body class (page slug)
----------------------------------------------------------------------------*/
add_filter( 'body_class', 'sp_body_class' );
function sp_body_class( $classes ) {

    if ( !is_front_page() )
        $classes[] = 'sub';
        return $classes;
}

function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
    $classes[] =  $post->post_name;
    }
    return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );




/*  SVG Support
----------------------------------------------------------------------------*/
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');



/*  Gravity forms
----------------------------------------------------------------------------*/

// Remove confirmation anchor (page jump)
add_filter( 'gform_confirmation_anchor', '__return_false' );



/*  Facet
----------------------------------------------------------------------------*/

// Remove count
add_filter( 'facetwp_facet_dropdown_show_counts', '__return_false' );



/*  Custom Columns
----------------------------------------------------------------------------*/

// Columns
add_filter( 'manage_edit-unit_columns', 'my_edit_unit_columns' ) ;
function my_edit_unit_columns( $columns ) {

  $columns = array(
    'cb' => '<input type="checkbox" />',
    'title' => __( 'Unit #' ),
    'floor_plan' => __( 'Floor Plan' ),
    'date' => __( 'Date' )
  );

  return $columns;
}

// Add content to columns
add_action( 'manage_unit_posts_custom_column', 'my_manage_unit_columns', 10, 2 );
function my_manage_unit_columns( $column, $post_id ) {
  global $post;

  switch( $column ) {

    // Floor Plan column
    case 'floor_plan' :

      $field = get_field_object('floor_plan_type');
      $value = get_field('floor_plan_type');
      $label = $field['choices'][ $value ];

      $floor_plan = print $label;

    break;


    default :
      break;
  }
}



/*  Stylesheets
----------------------------------------------------------------------------*/
function enqueue_styles() {

  // Font awesome
  wp_register_style( 'font-awesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css', array(), '1', 'all' );
  wp_enqueue_style( 'font-awesome' );
     
  // Foundation
  wp_register_style( 'foundation', THEME_DIR . '/css/foundation.min.css', array(), '1', 'all' );
  wp_enqueue_style( 'foundation' );

  // Main styles
  wp_register_style( 'main', THEME_DIR . '/css/main.css', array(), '1', 'all' );
  wp_enqueue_style( 'main' );

  // Custom styles
  wp_register_style( 'style', THEME_DIR . '/style.css', array(), '1', 'all' );
  wp_enqueue_style( 'style' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );


     
/*  Scripts
----------------------------------------------------------------------------*/ 
function enqueue_scripts() {
         
  // Modernizr
  wp_register_script( 'modernizr', THEME_DIR . '/js/modernizr.foundation.js', false, '1', false );
  wp_enqueue_script( 'modernizr' );

  // Typekit
  wp_register_script( 'typekit', 'https://use.typekit.net/icy5pcc.js', false, '1', false );
  wp_enqueue_script( 'typekit' );


  // Foundation
  wp_register_script( 'foundation-js', THEME_DIR . '/js/foundation.min.js', false, '1', true );
  wp_enqueue_script( 'foundation-js' );


  // Global scripts
  wp_register_script( 'scripts', THEME_DIR . '/js/scripts.min.js', false, '1', true );
  wp_enqueue_script( 'scripts' );


  // Google Map (Home page)

  if (is_front_page()) {

    wp_register_script( 'flexslider', THEME_DIR . '/js/libs/jquery.flexslider-min.js', false, '1', false );
    wp_enqueue_script( 'flexslider' );

    wp_register_script( 'google-api', 'https://maps.googleapis.com/maps/api/js?key=&v=3.exp', false, '1', true );
    wp_enqueue_script( 'google-api' );

    wp_register_script( 'google-map', THEME_DIR . '/js/libs/google-map.js', false, '1', true );
    wp_enqueue_script( 'google-map' );

  }

  // Google Map (Neighborhood page)

  if(is_page('neighborhood')) {

    wp_register_script( 'flexslider', THEME_DIR . '/js/libs/jquery.flexslider-min.js', false, '1', false );
    wp_enqueue_script( 'flexslider' );

    wp_register_script( 'google-api', 'https://maps.googleapis.com/maps/api/js?key=&v=3.exp', false, '1', true );
    wp_enqueue_script( 'google-api' );

    wp_register_script( 'google-map', THEME_DIR . '/js/libs/google-map.js', false, '1', true );
    wp_enqueue_script( 'google-map' );

  }

  // Google Map (Contact us)

  if(is_page('contact-us')) {

    wp_register_script( 'google-api', 'https://maps.googleapis.com/maps/api/js?key=&v=3.exp', false, '1', true );
    wp_enqueue_script( 'google-api' );

    wp_register_script( 'google-map', THEME_DIR . '/js/libs/google-map.js', false, '1', true );
    wp_enqueue_script( 'google-map' );
  }

  // Modal
  if(is_singular('floor-plan')) {

    wp_register_script( 'remodal', THEME_DIR . '/js/libs/remodal.min.js', false, '1', true);
    wp_enqueue_script( 'remodal' );
  }

  if(is_page('luxuries')) {
    wp_register_script( 'remodal', THEME_DIR . '/js/libs/remodal.min.js', false, '1', true);
    wp_enqueue_script( 'remodal' );
  }

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

function typekit_load() {
    if ( wp_script_is( 'typekit', 'done' ) ) { ?>
      <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  <?php }
}
add_action( 'wp_head', 'typekit_load' );

?>
