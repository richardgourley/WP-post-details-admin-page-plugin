<?php

/*
* Plugin Name: WP Post Details
* Plugin URI: http://wprevs.com
* Description: An info page to see when you last published a post in specific categories. Also, you can see how many posts you have published in each category and other key information for post writers such as last 5 posts published and
how many of each post type you have published.
* Author: Richard Gourley, wprevs.com
* Version: 1.0.0
* Author URI: http://wprevs.com
* License: GPLv2 or later
*/

if(!defined( 'ABSPATH' )) exit;

require dirname(__FILE__) . '/classes/Master.php'; 
require dirname(__FILE__) . '/classes/Scripts.php'; 

//intializes stylesheet/s
$wp_post_details_scripts = new WPPostDetailsScripts();

//initializes hooks, callback function for admin page that selects model and view
$wp_post_details_master = new WPPostDetailsMaster();

/*
function hook_css() {
    global $post; 
    if($post->ID == 230){
    	echo "HELLO WORLD!!!";
    }
}
add_action('wp_head', 'hook_css');
*/

