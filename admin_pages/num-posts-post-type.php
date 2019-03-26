<h2>This is the number of posts you have for each post type:</h2>
<small>NOTE: Some plugins create and use post types on installation. Examples of such plugins are form builders and page builder plugins.</small>
<?php foreach($results as $arr): ?>   
   <h4>Post Type Name:  <?php echo $arr->post_type; ?></h4>
   <h4>Number of posts:  <?php echo $arr->COUNT; ?></h4>
   <p>-----------------------------------</p>
<?php endforeach; ?>
