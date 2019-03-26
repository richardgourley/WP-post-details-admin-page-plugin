<h2>This is how long since you have written a post for a specific category:</h2>

<?php foreach($results as $arr): ?>   
   <h4>Category Name:  <?php echo $arr->post_type; ?></h4>
   <h4>Days since post published:  <?php echo $arr->COUNT; ?></h4>
   <p>-----------------------------------</p>
<?php endforeach; ?>
