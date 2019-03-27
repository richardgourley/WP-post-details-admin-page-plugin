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
    'wp_post_details_form_handling'
        //icon optional
        //menu rank optional - default null
    );
}

function wp_post_details_register_script(){
    wp_enqueue_script('display-results', plugins_url( 'js/display-results.js' , __FILE__), array(), 1.0, true);
}

// FORM HANDLING WITH PHP
function wp_post_details_form_handling(){
    
    require_once dirname(__FILE__) . "/classes/QueryModel.php";
    require_once dirname(__FILE__) . "/classes/BespokeQueryModel.php";
    require_once dirname(__FILE__) . "/admin_pages/main.php"; 

    //5 most recent posts
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['last_five_posts'])){
       $query_model = new QueryModel(
          array('post_type' => 'post',
                'post_status' => 'publish'
       )
       );
       $query_model->perform_query();
       $results = $query_model->return_results()->posts;
       require_once dirname(__FILE__) . "/admin_pages/last-five-posts.php";
    } 

    //most recent post
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['last_post'])){
       $bespoke_query_model = new BespokeQueryModel( "SELECT * FROM wp_posts 
          WHERE post_type = %s 
          AND post_status = %s 
          ORDER BY post_date DESC
          LIMIT 1",
                array('post', 'publish')
          );
       $results = $bespoke_query_model->perform_query();
       require_once dirname(__FILE__) . "/admin_pages/last-post.php";
    } 

    //get number of posts per category
    if($_SERVER['REQUEST_METHOD'] == 'POST'  && isset($_POST['num_posts_category'])){
        $bespoke_query_model = new BespokeQueryModel("SELECT COUNT(ID) AS COUNT, name
           FROM wp_posts, wp_terms, wp_term_relationships
           WHERE ID = object_id
           AND term_id = term_taxonomy_id
           GROUP BY name
           ORDER BY COUNT DESC",
           array( )
        );
        $results = $bespoke_query_model->perform_query();
        require_once dirname(__FILE__) . "/admin_pages/num-posts-category.php";
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'  && isset($_POST['num_posts_post_type'])){
       $bespoke_query_model = new BespokeQueryModel("SELECT COUNT(ID) AS COUNT, post_type
           FROM wp_posts
           WHERE post_status = %s
           GROUP BY post_type
           ORDER BY COUNT DESC",
           array( 'publish' )
        );
        $results = $bespoke_query_model->perform_query();
        require_once dirname(__FILE__) . "/admin_pages/num-posts-post-type.php";
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['since_last_post_type'])){
        $bespoke_query_model = new BespokeQueryModel("SELECT TIMESTAMPDIFF(DAY, MAX(post_date), NOW()) 
            AS time_since, post_type 
            FROM wp_posts 
            WHERE post_status = 'publish' 
            GROUP BY post_type 
            ORDER BY time_since", 
            array());
        $results = $bespoke_query_model->perform_query();
        require_once dirname(__FILE__) . "/admin_pages/since-last-post-type.php";
    }
}

add_action('admin_menu', 'wp_post_details_register_admin_page');
add_action('admin_post_my_form', 'my_form_handling');
add_action('wp_enqueue_scripts', 'wp_post_details_register_script' );
