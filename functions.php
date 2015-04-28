<?php

/*********************
SCRIPTS & STYLES
*********************/

function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}


function add_scripts() {
  wp_enqueue_script('modernizr', get_template_directory_uri(). '/js/vendor/modernizr.js', array());
  wp_enqueue_script('foundation-js', get_template_directory_uri(). '/js/foundation.min.js', array('jquery'));
  wp_enqueue_script('foundation-abide-js', get_template_directory_uri(). '/js/foundation/foundation.abide.js', array('jquery'));
  wp_enqueue_script('slider-caption-js', get_template_directory_uri(). '/js/slider_caption.js', array('jquery'));
  wp_enqueue_script('foundation-datepicker-js', get_template_directory_uri(). '/js/foundation-datepicker.js', array('jquery'));
  wp_enqueue_script('foundation-datepicker-calendar-js', get_template_directory_uri(). '/js/foundation-datepicker-calendar.js', array('jquery'));


}
add_action('wp_enqueue_scripts', 'add_scripts');


function add_styles() {
  wp_enqueue_style('foundation-stylesheet', get_stylesheet_directory_uri() . '/css/foundation.css', array());
  wp_enqueue_style('barracuda-stylesheet', get_stylesheet_directory_uri() . '/css/barracuda.css', array());
  wp_enqueue_style('foundation-datepicker-stylesheet', get_stylesheet_directory_uri() . '/css/foundation-datepicker.css', array());
  wp_enqueue_style('font-awesome-stylesheet', 'http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css', array());
  
}
add_action('wp_enqueue_scripts', 'add_styles');  


 
/*********************
MENUS & NAVIGATION
*********************/
register_nav_menus(
	array(
		'main-nav' => __( 'Main Menu' ),   
		'other-nav' => __( 'Other Navigation Menu' ) 
	)
);


function barracuda_main_nav() {
    wp_nav_menu(array(
    	'container' => false,                           
    	'container_class' => '',           
    	'menu' => __( 'Main Menu', 'vila' ),  
    	'menu_class' => 'right',         
    	'theme_location' => 'main-nav',                 
    	'before' => '',                                 
        'after' => '',                                  
        'link_before' => '',                            
        'link_after' => ''                              
        
	));
} 

function barracuda_other_nav() {
    wp_nav_menu(array(
    	'container' => false,                           
    	'container_class' => '',           
    	'menu' => __( 'Other Navigation Menu', 'vila' ),  
    	'menu_class' => 'right',         
    	'theme_location' => 'other-nav',                 
    	'before' => '',                                 
        'after' => '',                                  
        'link_before' => '',                            
        'link_after' => ''                              
        
	));
} 

?>