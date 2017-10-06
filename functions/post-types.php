<?php

namespace Functions;
    
$labels = array(
  'name'                => __( 'Portfolio', 'lz' ),
  'singular_name'       => __( 'Portfolio Item', 'lz' ),
  'add_new'             => _x( 'Add New Portfolio Item', 'lz', 'lz' ),
  'add_new_item'        => __( 'Add New Portfolio Item', 'lz' ),
  'edit_item'           => __( 'Edit Portfolio Item', 'lz' ),
  'new_item'            => __( 'New Portfolio Item', 'lz' ),
  'view_item'           => __( 'View Portfolio Item', 'lz' ),
  'search_items'        => __( 'Search Portfolio Items', 'lz' ),
  'not_found'           => __( 'No Portfolio Items found', 'lz' ),
  'not_found_in_trash'  => __( 'No Portfolio Items found in Trash', 'lz' ),
  'parent_item_colon'   => __( 'Parent Portfolio Item:', 'lz' ),
  'menu_name'           => __( 'Portfolio Items', 'lz' ),
);

$args = array(
  'labels'                   => $labels,
  'hierarchical'        => false,
  'description'         => 'Portfolio',
  'taxonomies'          => array(),
  'public'              => true,
  'show_ui'             => true,
  'show_in_menu'        => true,
  'show_in_admin_bar'   => true,
  'menu_position'       => 20,
  'menu_icon'           => 'dashicons-businessman',
  'show_in_nav_menus'   => true,
  'publicly_queryable'  => true,
  'exclude_from_search' => true,
  'has_archive'         => true,
  'query_var'           => true,
  'can_export'          => true,
  'rewrite'             => true,
  'capability_type'     => 'post',
  'supports'            => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
);

register_post_type( 'portfolio', $args );