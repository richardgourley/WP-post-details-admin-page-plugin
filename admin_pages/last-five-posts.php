<div class="wppd_results_display_div">
<h1>Here are your 5 most recent posts:</h1>
   <br>
   <?php for($i=0; $i<5; $i++): ?>
      <h3>Post Title:  <?php echo esc_html($results->posts[$i]->post_title); ?></h3>
      <h3>Post ID:  <?php echo esc_html($results->posts[$i]->ID); ?></h3>
      <h3>Post Type:  <?php echo esc_html($results->posts[$i]->post_type); ?></h3>
      <h3>DATE:  <?php echo esc_html($results->posts[$i]->post_date); ?></h3>
      <p>---------------------------------</p>
   <?php endfor; ?>
</div>


