<div style="padding:10px; margin-top:12px">
<h1>This is the number of posts you have for each post type:</h1>
<small>NOTE: Some plugins create and use post types on installation. Examples of such plugins are form builders and page builder plugins.</small>
<?php foreach($results as $arr): ?>   
   <h3>Post Type Name:  <?php echo $arr->post_type; ?></h3>
   <h3>Number of posts:  <?php echo $arr->COUNT; ?></h3>
   <p>-----------------------------------</p>
<?php endforeach; ?>
</div>
