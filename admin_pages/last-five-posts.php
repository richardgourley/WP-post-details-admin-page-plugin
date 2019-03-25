<h2>Here your 5 most recent posts:</h2>
   <?php for($i=0; $i<5; $i++): ?>
      <h3><b>POST TITLE: </b><?php echo $results[$i]->post_title; ?></h3>
      <p><b>POST ID: </b><?php echo $results[$i]->ID; ?></p>
      <p><b>POST TYPE: </b><?php echo $results[$i]->post_type; ?></p>
      <p><b>DATE: </b><?php echo $results[$i]->post_date; ?></p>
      <p>---------------------------------</p>
   <?php endfor; ?>