<?php
class WPPostDetailsFormHandler{

   public function __construct(){

   }

   public function last_five_posts(){
      $query_model = new QueryModel(
         array('post_type' => 'post',
            'post_status' => 'publish'
         )
      );
      $results = $query_model->perform_query();
      require_once plugin_dir_path(__DIR__) . "/admin_pages/last-five-posts.php";
   }

   public function last_post(){
      $bespoke_query_model = new BespokeQueryModel( "SELECT * FROM wp_posts 
         WHERE post_type = %s 
         AND post_status = %s 
         ORDER BY post_date DESC
         LIMIT 1",
            array('post', 'publish')
         );
      $results = $bespoke_query_model->perform_query();
      require_once plugin_dir_path(__DIR__) . "/admin_pages/last-post.php";
   }

   public function num_posts_category(){
      $bespoke_query_model = new BespokeQueryModel("SELECT COUNT(ID) AS COUNT, name
         FROM wp_posts, wp_terms, wp_term_relationships
         WHERE ID = object_id
         AND term_id = term_taxonomy_id
         GROUP BY name
         ORDER BY COUNT DESC",
            array( )
         );
      $results = $bespoke_query_model->perform_query();
      require_once plugin_dir_path(__DIR__) . "/admin_pages/num-posts-category.php";
   }

   public function num_posts_post_type(){
      $bespoke_query_model = new BespokeQueryModel("SELECT COUNT(ID) AS COUNT, post_type
         FROM wp_posts
         WHERE post_status = %s
         GROUP BY post_type
         ORDER BY COUNT DESC",
            array( 'publish' )
         );
      $results = $bespoke_query_model->perform_query();
      require_once plugin_dir_path(__DIR__) . "/admin_pages/num-posts-post-type.php";
   }

   public function since_last_post_type(){
      $bespoke_query_model = new BespokeQueryModel("SELECT TIMESTAMPDIFF(DAY, MAX(post_date), NOW()) 
         AS time_since, post_type 
         FROM wp_posts 
         WHERE post_status = 'publish' 
         GROUP BY post_type 
         ORDER BY time_since", 
            array());
      $results = $bespoke_query_model->perform_query();
      require_once plugin_dir_path(__DIR__) . "/admin_pages/since-last-post-type.php";
   }

   public function since_last_post_category(){
      $bespoke_query_model = new BespokeQueryModel("SELECT TIMESTAMPDIFF(DAY, MAX(post_date), NOW()) 
         AS time_since, name 
         FROM wp_posts, wp_terms, wp_term_relationships 
         WHERE term_id = term_taxonomy_id AND ID = object_id 
         GROUP BY name 
         ORDER BY time_since", 
            array());
      $results = $bespoke_query_model->perform_query();
      require_once plugin_dir_path(__DIR__) . "/admin_pages/since-last-post-category.php";
   }
   
}