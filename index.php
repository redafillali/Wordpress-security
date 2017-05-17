<?php
/*
Plugin Name: Wordpress Security by Reda EL Fillali
Description: Sécuriser votre wordpress
Version: 0.1
Author: Reda El Fillali
License: GPL2
*/

// Supprimer la version de Wordpress
remove_action('wp_head', 'wp_generator');

// MASQUER LES ERREURS DE CONNEXION
add_filter('login_errors',create_function('$a', "return null;"));

// DÉSACTIVER WINDOWS LIVE WRITER
remove_action('wp_head', 'wlwmanifest_link');
?>
