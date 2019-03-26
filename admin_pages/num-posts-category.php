<h2>This is the number of posts you have in each category:</h2>
<small>NOTE: Some plugins create and use categories on installation. Examples of such plugins are form builders and page builder plugins.</small>

<?php foreach($results as $arr): ?>   
   <h4>Category Name:  <?php echo $arr->name; ?></h4>
   <h4>Number of posts:  <?php echo $arr->COUNT; ?></h4>
   <p>-----------------------------------</p>
<?php endforeach; ?>
