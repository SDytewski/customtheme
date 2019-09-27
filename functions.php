<?php

function load_stylesheets()
{

   
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', '', 1, 'all');
    wp_enqueue_style('stylesheet');

    wp_register_style('custom', get_template_directory_uri() . '/app.css', '', 1, 'all');
    wp_enqueue_style('custom');


  
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_javascript()
{

    wp_register_script('custom', get_template_directory_uri() . '/app.js', 'jquery', 1, true); 
    wp_enqueue_script('custom');

}

add_action('wp_enqueue_scripts', 'load_javascript');

//add support
add_theme_support('menus');
add_theme_support('post-thumbnails');



//Register some menus
register_nav_menus(

    array(

        'top-menu' => 'Top menu',

    )

);




//Add image sizes, pixel size and crop

add_image_size('post_image', 1100, 550, true);

//Add a widget
// register_sidebar(


//     array(

//         'name' => 'Page Sidebar',
//         'id' => 'page-sidebar',
//         'class' => '',
//         'before_title' => '<h4>',
//         'after_title' => '</h4>',

//     )


// );

//WooCommerce support

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );



//Load Javascript to front page


function load_js_assets() {
    if( is_front_page() ) {
        wp_enqueue_script('my-js', '/wp-content/themes/newtheme/myScript/my-js.js', array('jquery'), '', false);
    } 
}
 
add_action('wp_enqueue_scripts', 'load_js_assets');


