<?php
class WPPostDetailsMaster{
   
   public function __construct(){
      add_action('admin_menu', array( $this, 'register_admin_menu' ));
   }

   public function register_admin_menu(){
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
         array( $this, 'callback_function_form_handling')
         //icon optional
         //menu rank optional - default null
      );
   }

   public function callback_function_form_handling(){
      require_once plugin_dir_path(__DIR__) . "/classes/QueryModel.php";
      require_once plugin_dir_path(__DIR__) . "/classes/BespokeQueryModel.php";
      require_once plugin_dir_path(__DIR__) . "/classes/FormHandler.php";
      require_once plugin_dir_path(__DIR__) . "/admin_pages/main.php"; 


      if($_SERVER['REQUEST_METHOD'] == 'POST'){
         if(isset($_POST['last_five_posts_nonce']) && wp_verify_nonce( $_POST['last_five_posts_nonce'], 'last_five_posts_action' )){
            $form_handler = new WPPostDetailsFormHandler();
            $form_handler->last_five_posts();
         }

         if(isset($_POST['last_post_nonce']) && wp_verify_nonce( $_POST['last_post_nonce'], 'last_post_action' )){
            $form_handler = new WPPostDetailsFormHandler();
            $form_handler->last_post();
         }

         if(isset($_POST['num_posts_category'])){
            $form_handler = new WPPostDetailsFormHandler();
            $form_handler->num_posts_category();
         }

         if(isset($_POST['num_posts_post_type'])){
            $form_handler = new WPPostDetailsFormHandler();
            $form_handler->num_posts_post_type();
         }

         if(isset($_POST['since_last_post_type'])){
            $form_handler = new WPPostDetailsFormHandler();
            $form_handler->since_last_post_type();
         }

         if(isset($_POST['since_last_post_category'])){
            $form_handler = new WPPostDetailsFormHandler();
            $form_handler->since_last_post_category();
         }
      }
   
   }
}
   