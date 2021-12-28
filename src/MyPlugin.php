<?php

/**
 * Plugin Name:       teste       
 * Description:       Teste imagem docker.
 * Requires PHP:      7.2
 * Author:            Dieisson Martins
 * Author URI:        https://github.com/dieissonmartins
 */

/**
 * Plugin Name: Meu Plugin
 */

function my_content_footer( $content ) {
    if ( is_single()) {
        return $content . '<p>teste ambiente wp docker</p>';
    }
}
add_filter('the_content', 'my_content_footer');