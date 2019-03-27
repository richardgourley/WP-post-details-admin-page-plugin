<h2>This is how long since you have written a post for a specific category:</h2>

<?php var_dump($results); ?>
<?php foreach($results as $arr): ?>   
   <h4>Category Name:  <?php echo $arr->category_name; ?></h4>
   <h4>Days since post published:  <?php echo $arr->DAYS; ?></h4>
   <p>-----------------------------------</p>
<?php endforeach; ?>
