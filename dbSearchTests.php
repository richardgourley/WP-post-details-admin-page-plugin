<?php
//Create and add a database configuration file with local host details here....
require_once('config.php');

class DbSearch{
   function perform_query($query, $params){
      $db = new Db();
      $conn = $db->open_db_connection(); //set up config.php to return a new PDO db connection. 
      $stmt = $conn->prepare($query);
      $stmt = $this->bind_params($stmt, $params);
      $stmt->execute();
      $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $conn = $db->close_db_connection($conn);
      $stmt = null;
      return $res;
   } 

    function bind_params($stmt, $params){
       if(!$params == null || !count($params) == 0){
          for($i=0; $i<count($params); $i++){
            if(is_null($params[$i])){ $stmt->bindParam($i+1, $params[$i], PDO::PARAM_NULL); }
            else if(is_int($params[$i])){ $stmt->bindParam($i+1, $params[$i], PDO::PARAM_INT); }
            else if(is_bool($params[$i])){ $stmt->bindParam($i+1, $params[$i], PDO::PARAM_BOOL); }
            else{ $stmt->bindParam($i+1, $params[$i], PDO::PARAM_STR); }
          }
       }

       return $stmt;
    }
}

//Instantiate DbSearch class
$db_search =  new DbSearch();


$num_published_posts = $db_search->perform_query(
"SELECT COUNT(ID) AS NUM_POSTS FROM wp_posts WHERE post_status = ?",
array('publish'));
echo "<br>Number of posts marked as published: " . $num_published_posts[0]['NUM_POSTS'];

$last_five_posts = $db_search->perform_query(
"SELECT post_title, post_date FROM wp_posts WHERE post_status = ? ORDER BY post_date DESC LIMIT 5", 
array('publish'));
echo "<h2>Last 5 published posts</h2>";
foreach($last_five_posts as $item){
    echo "<h3>Title: " . $item['post_title'] . "</h3>";
    echo "<p>Date: " . $item['post_date'] . "</p>";
}

$posts_by_category = $db_search->perform_query(
"SELECT COUNT(ID), name
FROM wp_posts, wp_terms, wp_term_relationships
WHERE ID = object_id
AND term_id = term_taxonomy_id
GROUP BY name",
array());
echo "<h2>Categories</h1>";
foreach($posts_by_category as $res){
    echo "<p>You have " . $res['COUNT(ID)'] . " posts in a category named " . $res['name'] . ".</p>";
}

$post_types = $db_search->perform_query(
"SELECT post_type FROM wp_posts
GROUP BY post_type",
array());
echo "<h2>Post Types</h2>";
echo "<p>You have a total of " . count($post_types) . " post types:</p>";
foreach($post_types as $post_type){
   echo "<p>" . $post_type['post_type'] . "</p>";
}






