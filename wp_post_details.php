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

function wp_post_details_register_admin_page()
{
    add_menu_page(
    //page title
    'WP post details',
    //menu title - appears in dashboard menu
    'WP post details',
    //capability of current user
    'manage_options',
    //slug - referred to in browser 
    'wp-post-details',
        //optional - callable function
    'form_handling'
        //icon optional
        //menu rank optional - default null
    );
}

function wp_post_details_register_script(){
    wp_enqueue_script('display-results', plugins_url( 'js/display-results.js' , __FILE__), array(), 1.0, true);
}

function custom_menu_page_function()
{
    require_once dirname(__FILE__) . "/admin_pages/main.php";
}

// FORM HANDLING WITH PHP

function form_handling(){
    require_once dirname(__FILE__) . "/admin_pages/main.php";
    require_once "classes/Model.php";
    $model = new Model();

    if(isset($_POST['last_five_posts'])){
        $results = $model->get_last_five_posts();
        require_once dirname(__FILE__) . "/admin_pages/display-results.php";
    }
    if(isset($_POST['last_post'])){
        $results = $model->get_last_post();
        require_once dirname(__FILE__) . "/admin_pages/display-results.php";
    }
    else{
       require_once dirname(__FILE__) . "/admin_pages/main.php";
    }
    
}



add_action('admin_menu', 'wp_post_details_register_admin_page');
add_action('admin_post_my_form', 'my_form_handling');
add_action('wp_enqueue_scripts', 'wp_post_details_register_script' );
