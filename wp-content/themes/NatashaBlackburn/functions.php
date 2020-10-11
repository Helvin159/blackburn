<?php

// Files
function nblackburn_files (){
  
  // Font Awesome
  wp_enqueue_style('font_awesome', '//use.fontawesome.com/releases/v5.14.0/css/all.css', null, '1.0', 'all');
  // Google Fonts
  wp_enqueue_style('google_fonts', '//fonts.googleapis.com/css?family=Quicksand|Sedgwick+Ave+Display&display=swap', null, '1.0', 'all');
  wp_enqueue_style('pinterest', '//assets.pinterest.com/js/pinit.js', null, '1.0', 'all');
  // Bootstrap
  wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css', null, '1.0', 'all');
  




  if(strstr($_SERVER['SERVER_NAME'], 'modelpage.local')){
    // Bundled Files
    wp_enqueue_script('main-blackburn-scripts', 'http://localhost:3000/bundled.js', NULL, '1.0', true);// CSS
    wp_enqueue_style('my-style', get_theme_file_uri('/css/styles.css'), null, '1.0', 'all');
  } else{

      // wp_enqueue_style('my-main-style', get_theme_file_uri('/bundled-assets/undefined'), null, '1.0', 'all');
    
      // CSS
      wp_enqueue_style('my-style', get_theme_file_uri('/css/styles.css'), null, '1.0', 'all');
      wp_enqueue_script('our-vendors-js', get_theme_file_uri('/bundled-assets/undefined'), NULL, '1.0', true);
      wp_enqueue_script('main-blackburn-scripts', get_theme_file_uri('/bundled-assets/scripts.4217e2dc83ae539d5492.js'), NULL, '1.0', true);
    }

  wp_localize_script('main-blackburn-scripts', 'blackBurnData', array(
    'root_url' => get_site_url(),
    'nonce' => wp_create_nonce('wp_rest')
  ));  

  // Jquery
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.5.1.slim.min.js', NULL, '1.0', true);

  // Popper
  wp_enqueue_script('popper', '//cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', NULL, '1.0', true);
  // Bootstrap JS
  wp_enqueue_script('bootsrap', '//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', NULL, '1.0', true);
}

add_action('wp_enqueue_scripts', 'nblackburn_files');

// Features
function blackburn_features(){
  add_image_size('pagethumbnails', 300, 200, true);
  add_image_size('singlePortrait', 500, 650, true);
  add_image_size('iphone', 828, 1792, true);
  add_image_size('home', 1500, 1200, true);
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  register_nav_menu('headerNav', 'Header');
}

add_action('after_setup_theme', 'blackburn_features');




add_filter('login_header_title', 'ourLoginTitle');

function ourLoginTitle(){
  return get_blog_info('name');
}


add_action('after_setup_theme', 'remove_admin_bar');

function remove_admin_bar() {
  if (!current_user_can('administrator') && !is_admin()) {
    show_admin_bar(false);
  }
}