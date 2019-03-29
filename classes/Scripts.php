<?php
class WPPostDetailsScripts{

   public function __construct(){
      add_action( 'admin_enqueue_scripts', array( $this, 'load_my_styles') );
   }

   public function load_my_styles(){
      wp_enqueue_style( 'wp_post_details_styles', plugins_url('css/styles.css', __DIR__) );
   }
   
}