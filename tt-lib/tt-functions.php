<?php
/*
Author: 2020 Creative
URL: htp://2020creative.com
*/
//////////////////////////////////////////////////////// 2020 Functions
define( 'TEMPPATH', get_stylesheet_directory_uri());
define( 'IMAGES', TEMPPATH. "/imgages");

// Plugins
require_once ('plugins/wp_bootstrap_navwalker.php'); // used for bootstrap nav menus

// Shortcodes
require_once ('tt-shortcodes.php');

// Shortcodes
//require_once ('tt-customizer.php');

// CPT's
// require_once ('tt-cpt.php');

// Add theme support for featured images
add_theme_support( 'post-thumbnails' );

// Add feature image sizes
// add_image_size( square, 400, 400, true );

// Add theme support for shortcodes inside widgets
add_filter( 'widget_text', 'do_shortcode');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// Add boostrap from CDN

if( !function_exists("tt_bootstrap_cdn") ) {  
    function tt_bootstrap_cdn() { 
        // parent theme
        wp_register_style( 'tt-boot', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'tt-boot' );
        
        wp_register_script( 'tt-boot-js', 'http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js', array('tt-jq2') );
        wp_enqueue_script( 'tt-boot-js' );
        
        wp_register_style( 'tt-boot-fontawesome', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'tt-boot-fontawesome' );
        
        wp_register_style( 'theme-style', get_stylesheet_directory_uri() . '/style.css', array(), '1.0', 'all' );
        wp_enqueue_style( 'theme-style' );

        wp_register_script( 'tt-jq1', 'http://code.jquery.com/jquery-2.1.1.min.js', array(),1 );
        wp_enqueue_script( 'tt-jq1' );
        
        wp_register_script( 'tt-jq2', 'http://code.jquery.com/jquery-1.11.1.min.js', array() );
        wp_enqueue_script( 'tt-jq2' );
        
        // child themes
        // wp_register_style( 'tt-child', get_stylesheet_directory_uri() . '/tt-child.css', array(), '1.0', 'all' );
        // wp_enqueue_style( 'tt-child' );
    }
}
add_action( 'wp_enqueue_scripts', 'tt_bootstrap_cdn' );

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// CSS Enqueue Styles

if( !function_exists("tt_theme_styles") ) {  
    function tt_theme_styles() { 
        // parent theme
        wp_register_style( 'tt-main', get_template_directory_uri() . '/tt-lib/css/tt-main.css', get_stylesheet_directory_uri() . '/style.css', '1.0', 'all' );
        wp_enqueue_style( 'tt-main' );
        wp_register_style( 'tt-forms', get_template_directory_uri() . '/tt-lib/css/gf-formsmain-2020.css', array('tt-main'), '1.0', 'all' );
        wp_enqueue_style( 'tt-forms' );

        // child themes
        // wp_register_style( 'tt-child', get_stylesheet_directory_uri() . '/tt-child.css', array(), '1.0', 'all' );
        // wp_enqueue_style( 'tt-child' );
    }
}
add_action( 'wp_enqueue_scripts', 'tt_theme_styles' );

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// TT Admin

// Custom Backend Footer
add_filter('admin_footer_text', 'tt_custom_admin_footer');
function tt_custom_admin_footer() {
	echo '<span id="footer-thankyou">Developed by <a href="http://2020creative.com" target="_blank">2020creative.com</a></span>.';
}
// adding it to the admin area
add_filter('admin_footer_text', 'tt_custom_admin_footer');

////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// Menus

register_nav_menus( array(
	'tt_main' => 'TT Main',
	
) );

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// Sidebars

////////////////////////////////////////////////////////

$args = array(
	'name'          => __( 'TT Sidebar', 'theme_text_domain' ),
	'id'            => 'tt_sidebar',
	'description'   => '',
    'class'         => '',
	'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>' );

register_sidebar( $args );

////////////////////////////////////////////////////////


function tt_print_acf() {
    
    //$user_meta = get_user_meta(1);
    //print_r($user_meta);
}
add_action('admin_print_footer_scripts', 'tt_print_acf');

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
   
function tt_login_redirect( $url, $request, $user ){
	
    if( $user && is_object( $user ) && is_a( $user, 'WP_User' ) ) {
	    
        if( $user->user_login = '2020' || $user->user_login = 'phil' ) {
	        
            $url = home_url('/wp-admin/edit.php?post_type=page');
        }
    } elseif ( $user->user_login = 'thermalking') {
	    
	    $url = home_url();
	    
    } else {
	    
		$url = home_url();
	    
	    }
	    
    return $url;
    
}

add_filter('login_redirect', 'tt_login_redirect', 10, 3 );

//////////////////////////////////////////////////////////////////////////////////////////////////////////////// 

