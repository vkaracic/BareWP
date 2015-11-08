<?php

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
        'before'          => 'asdf',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => ''
    );
    wp_nav_menu( $defaults );
};

?>