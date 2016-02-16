<?php
//Activation de l'onglet de menu dans l'interface WP
add_theme_support("menus");

//Activation de l'onglet de menu dans l'interface WP
add_theme_support("post-thumbnails");

//Déclaration de deux blocs de menus
//Déclaration d'une fonction utilisateur qu'on va faire appeler par WP
// - Une menu de header
// - Une menu de footer
function register_my_menus(){
    //Appel de méthode WP
    register_nav_menus(
        array(
            'header_haut' => __('Header'),
            'footer_bas' => __('Footer'),
        )
    );
}

// Au démarrage (init) WP appel la fonction "register_my_menus"
add_action('init', 'register_my_menus');

