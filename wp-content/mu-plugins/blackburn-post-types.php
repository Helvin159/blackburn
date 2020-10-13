<?php 

// Post Types
function blackburn_post_types(){

  // Shots 
  register_post_type('shot', array(
    'capability_type' => 'shot',
    'map_meta_cap' => true,
    'show_in_rest' => true,
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    'rewrite' => array(
      'slug' => 'shots'
    ),
    'public' => true,
    'has_archive' => true,
    'labels' => array(
      'name' => 'Shots',
      'add_new_item' => 'Add New Shot Post',
      'edit_item' => 'Edit Shot Post',
      'all_items' => 'All Shots',
      'singular_name' => 'Shot',
    ),
    'menu_icon' => 'dashicons-images-alt2'
  ));

    // NYC 
    register_post_type('ny', array(
    
      'capability_type' => 'ny',
      'map_meta_cap' => true,
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
      'rewrite' => array(
        'slug' => 'ny'
      ),
      'public' => true,
      'has_archive' => true,
      'labels' => array(
        'name' => 'New York City',
        'add_new_item' => 'Add New New York City Post',
        'edit_item' => 'Edit New York City Post',
        'all_items' => 'All New York City Posts',
        'singular_name' => 'New York City',
      ),
      'menu_icon' => 'dashicons-smiley'
    ));

    // Antigua 
    register_post_type('antigua', array(
    
      'capability_type' => 'antigua',
      'map_meta_cap' => true,
      'show_in_rest' => true,
      'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
      'rewrite' => array(
        'slug' => 'antigua'
      ),
      'public' => true,
      'has_archive' => true,
      'labels' => array(
        'name' => 'Antigua',
        'add_new_item' => 'Add New Antigua Post',
        'edit_item' => 'Edit Antigua Post',
        'all_items' => 'All Antigua Posts',
        'singular_name' => 'Antigua',
      ),
      'menu_icon' => 'dashicons-palmtree'
    ));

    // Contact 
    register_post_type('contacts', array(
    
      'capability_type' => 'contacts',
      'map_meta_cap' => true,
      'show_in_rest' => true,
      'supports' => array('title', 'editor',),
      'rewrite' => array(
        'slug' => 'contacts'
      ),
      'public' => true,
      'has_archive' => true,
      'labels' => array(
        'name' => 'Contact',
        'add_new_item' => 'Add New Contact ',
        'edit_item' => 'Edit Contact',
        'all_items' => 'All Contacts',
        'singular_name' => 'Contact',
      ),
      'menu_icon' => 'dashicons-testimonial'
    ));

    // Carousel 
    register_post_type('homeCarousel', array(
    
      'capability_type' => 'homeCarousel',
      'map_meta_cap' => true,
      'show_in_rest' => true,
      'supports' => array('thumbnail'),
      'rewrite' => array(
        'slug' => 'homeCarousel'
      ),
      'public' => true,
      'has_archive' => false,
      'labels' => array(
        'name' => 'Home Carousel',
        'add_new_item' => 'Add New Home Carousel Image',
        'edit_item' => 'Edit Home Carousel Image',
        'all_items' => 'All Home Carousel Images',
        'singular_name' => 'Home Carousel',
      ),
      'menu_icon' => 'dashicons-images-alt'
    ));
}

  add_action('init', 'blackburn_post_types');