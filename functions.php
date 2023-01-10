<?php

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function cedric() {


    // Déclarer le fichier style.css à la racine du thème
    wp_enqueue_style(
        'capitaine',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );

}
add_action( 'wp_enqueue_scripts', 'cedric' );