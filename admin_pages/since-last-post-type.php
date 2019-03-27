<h2>This is how long since you have written a post for a specific post type:</h2>
<small>NOTE: Some plugins create and use post types on installation. Examples of such plugins are form builders and page builder plugins.</small>
<?php foreach($results as $arr): ?>   
   <h3>Post type name:  <?php echo $arr->post_type; ?></h3>
   <h3><?php echo $arr->time_since; ?> days since last post published</h3>
   <p>-----------------------------------</p>
<?php endforeach; ?>
