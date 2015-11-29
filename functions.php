<?php

function barewp_setup() {
    register_nav_menus(array(
        'primary' => __( 'Primary Menu', 'barewp' ),
    ));
}
add_action('after_setup_theme', 'barewp_setup');

function show_nav($menu, $menu_class='menu') {
    $defaults = array(
        'theme_location'  => '',
        'menu'            => $menu,
        'container'       => 'div',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => $menu_class,
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
    );
    wp_nav_menu( $defaults );
};

add_theme_support( 'post-formats', array( 'aside', 'image', 'link', 'quote', 'status' ) );
add_post_type_support( 'page', 'post-formats' );
add_action( 'init', 'create_my_post_type' );
function create_my_post_type() {
    register_post_type( 'my_custom_post_type',
      array(
        'labels' => array( 'name' => __( 'Products' ) ),
        'public' => true,
        'supports' => array('title', 'editor', 'post-formats')
    )
  );
}
?>