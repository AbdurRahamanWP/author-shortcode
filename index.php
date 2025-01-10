<?php
/**
 * Plugin Name: Author Info
 * Plugin URI: https://targetsoftbd.com
 * Description: This is Related Posts Plugin show in single page
 * Version: 1.0.0
 * Author: Target Themes
 * Author URI: https://targetsoftbd.com
 * License: GPLv2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: author-info
 */

if ( ! defined( 'ABSPATH' ) ) {
    return;
}


class target_author_info{
  
    public function __construct(){
        
        add_shortcode( 'author_info', array( $this, 'taget_wp_author_info_shortcode' ) ); 

    }
        public function taget_wp_author_info_shortcode() {
            ob_start();
            ?>
            <h2>Welcome to Author Info</h2>
            <?php
            ob_get_clean();
           return;
        }
    }


new target_author_info();