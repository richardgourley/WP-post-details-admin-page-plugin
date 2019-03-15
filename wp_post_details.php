<?php

/*
Plugin details
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

function custom_menu_page_function()
{
    require_once dirname(__FILE__) . "/admin_pages/main.php";
}

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


/*
add_action('admin_menu', 'wp_post_details_register_admin_page');
add_action('admin_post_my_form', 'my_form_handling');
*/