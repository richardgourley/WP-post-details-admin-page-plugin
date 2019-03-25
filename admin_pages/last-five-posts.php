<h2>Last 5 posts</h2>
   <?php for($i=0; $i<5; $i++): ?>
      <h3><b>POST TITLE: </b><?php echo $last_five_posts[$i]->post_title; ?></h3>
      <p><b>POST ID: </b><?php echo $last_five_posts[$i]->ID; ?></p>
      <p><b>POST TYPE: </b><?php echo $last_five_posts[$i]->post_type; ?></p>
      <p><b>DATE: </b><?php echo $last_five_posts[$i]->post_date; ?></p>
      <p>---------------------------------</p>
   <?php endfor; ?>