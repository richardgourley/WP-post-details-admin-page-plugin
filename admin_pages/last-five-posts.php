<h2>Here are your 5 most recent posts:</h2>
   <?php for($i=0; $i<5; $i++): ?>
      <h4>Post Title:  <?php echo $results[$i]->post_title; ?></h4>
      <h4>Post ID:  <?php echo $results[$i]->ID; ?></h4>
      <h4>Post Type:  <?php echo $results[$i]->post_type; ?></h4>
      <h4>DATE:  <?php echo $results[$i]->post_date; ?></h4>
      <p>---------------------------------</p>
   <?php endfor; ?>