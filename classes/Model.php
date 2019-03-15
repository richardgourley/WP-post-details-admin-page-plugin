<?php
class Model{
  protected $last_five_posts;

	public function __construct(){
    $this->last_five_posts = $this->last_five_posts();
	}

  public function execute_query(){
    return $this->{$this->method_name}();
  }

  public function last_five_posts(){
    global $wpdb;
    
    $stmt = $wpdb->prepare(
      "SELECT post_title, post_date, post_type 
      FROM wp_posts WHERE post_status = %s 
      ORDER BY post_date DESC LIMIT 5", 
      'publish'
    );
    
    $results = $wpdb->get_results($stmt);
    return $results;
  }

  public function get_last_five_posts(){
     return $this->last_five_posts;
  }

  public function get_last_post(){
     return $this->last_five_posts[0];
  }


}