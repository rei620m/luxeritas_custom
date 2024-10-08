<?php

/**
Plugin Name: wpse425362
Description: Site specific code changes for example.com
*/

if (!defined('ABSPATH')) exit; // Exit if accessed directly   

/**
 * Removes the meta description generated by Yoast
 *
 * @param array $presenters the registered presenters.
 *
 * @return array the remaining presenters.
 */
function wpse425362_remove_description( $presenters ) {
    return array_map( function( $presenter ) {
        if ( ! $presenter instanceof Meta_Description_Presenter ) {
            return $presenter;
        }
    }, $presenters );
}

add_action( 'wpseo_frontend_presenters', 'wpse425362_remove_description' );
