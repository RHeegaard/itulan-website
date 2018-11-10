<?php
add_theme_support( 'post-thumbnails' );
remove_filter( 'the_excerpt', 'wpautop' );
/*remove_filter ('the_content', 'wpautop');*/
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
?>