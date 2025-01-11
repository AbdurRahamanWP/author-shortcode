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
        add_action('wp_enqueue_scripts', array( $this,'author_info_enqueue_styles') );
    }

    public function author_info_enqueue_styles() {
        wp_enqueue_style('main_style', plugin_dir_url( __FILE__ ) . 'assets/css/style.css',array(),'1.0','all');
    }

    public function taget_wp_author_info_shortcode($atts, $content ='') {

        $contents = shortcode_atts( array(
            'title' => 'Welcome to Author Info',
        ), $atts );

        ob_start();
        include __DIR__ . '/admin/author_info.php';
       // echo "welcome to our shortcode";
       return ob_get_clean();
    
    }
}


new target_author_info();