<?php
/*********
Register the Menus
*********/
function register_my_menus() {
    register_nav_menus(
        array(
            'main-menu' => __( 'Main Menu' ),
            'terms-menu' => __( 'Terms Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' ); // end register_my_menus