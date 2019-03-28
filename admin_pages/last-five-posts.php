<div style="padding:10px; margin-top:12px">
<h1>Here are your 5 most recent posts:</h1>
   <br>
   <?php for($i=0; $i<5; $i++): ?>
      <h3>Post Title:  <?php echo $results->posts[$i]->post_title; ?></h3>
      <h3>Post ID:  <?php echo $results->posts[$i]->ID; ?></h3>
      <h3>Post Type:  <?php echo $results->posts[$i]->post_type; ?></h3>
      <h3>DATE:  <?php echo $results->posts[$i]->post_date; ?></h3>
      <p>---------------------------------</p>
   <?php endfor; ?>
</div>

